<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Home\ShoppingCar;
use App\Http\Model\Admin\Goods;

class ShoppingCarController extends Controller
{
    /**
     * 我的购物车
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 捕获异常
        try{
            // 获取购物车中所有记录
            $data = ShoppingCar::where('user_id',session('user.id'))->get();
            // 调用静态方法
            $zhi = self::jszj();
            // 返回视图
            return view('home.shoppingcar.index',['zhi'=>$zhi,'data'=>$data]);
            // 捕获到异常
        }catch(\Exception $err){
            // 返回异常界面
            return view('error.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * 通过商品详情页加入购物车
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 捕获异常
        try{
            // 去除多余信息
            $data = $request->except(['_token']);
            // 获取数量
            $spxx['car_num'] = $data['sum'];
            // 获取商品
            $spxx['goods_id'] = $data['goods_id'];
            // 获取用户ID
            $spxx['user_id'] = session('user.id');
            // 获取加入购物的时间
            $spxx['dqtime'] = time() + 60 *20;
            // 销毁没用的信息
            unset($data['sum']);
            unset($data['goods_id']);
            // 判断商品数量是否合法
            if($spxx['car_num'] <= '0'){
                // 不合法 返回
                return back()->with('error','白送我，我要啊！');
            }
            // 判断用户是否选择了商品属性
            if(count($data) == 0){
                // 没有选择返回
                return back()->with('error','请您选择商品属性');
            }
            // 初始化
            $attr = '';
            // 拼接商品属性
            foreach($data as $k => $v){
                $attr .= $v.',';
            }
            // 去除最后一个点
            $attr = rtrim($attr,',');
            // 将商品属性加入数组
            $spxx['attr'] = $attr;
            // 获取商品信息
            $good = Goods::where('id',$spxx['goods_id'])->first();
            // 判断商品是否下架
            if($good->goods_status == 2){
                // 商品下架 直接返回
                return back()->with('error','对不起，您选择的商品已下架');
            }
            // 没有找到要添加的商品，返回错误信息
            if(!$good){
                return back()->with('error','对不起，该商品可能已下架。');
            }
            // 找到要添加的商品，但商品已下架，返回错误信息
            if($good['goods_status'] != '1'){
                return back()->with('error','对不起，该商品已下架。');
            }
            // 商品没有下架，但要添加的商品大于库存商品，返回错误信息
            if($good['goods_num'] < $spxx['car_num']){
                return back()->with('error','对不起，该商品没有那么多了，请合理选择购买数量。');
            }
            $em = ShoppingCar::where('user_id',session('user.id'))->where('attr',$attr)->where('goods_id',$spxx['goods_id'])->first();
            // 用户购物车有相同商品区间
            if($em){
                // 在用户购物车商品中直接加上商品数量
                $em->car_num = $em->car_num + $spxx['car_num'];
                $good->goods_num = $good->goods_num - $spxx['car_num'];
                try{
                    // 保存到数据库
                    $em->save();
                    $good->save();
                    // 捕获系统的错误信息
                }catch(\Exception $err){
                    // 捕获到异常直接返回
                   return back()->with('error','商品添加失败');
                }
                // 添加商品成功
                return back()->with('success','商品添加成功 去我的<a href="/shoppingcar">购物车</a>');
            }
            // 商品总库存去除用户加入购物车的数量
            $good->goods_num = $good->goods_num - $spxx['car_num'];
            // 捕获异常
            try{
                // 将数据插入购物车
                ShoppingCar::insert($spxx);
                // 保存购物车信息
                $good->save();
                // 捕获到异常
            }catch(\Exception $err){
                // 返回报错信息
                return back()->with('error','商品添加失败');
            }
            // 没有捕获到异常 返回成功信息
            return back()->with('success','商品添加成功 去我的<a href="/shoppingcar">购物车</a>');
            // 总体捕获异常
        }catch(\Exception $err){
            // 捕获到异常返货错误信息
            return view('error.index');
        }
    }
    /**
     * 在购物车中添加商品数量
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 获取数据
        $data = $request->except(['_token','_method']);
        // 准确获取购物车表中的用户信息
        $goods = ShoppingCar::where('id',$data['id'])->where('user_id',session('user.id'))->first();
        // 判断用户购物车中有误该商品
        if(!$goods){
            // 没有改商品，返货错误信息
            $arr=[
                'code' => '0',
                'msg' => '对不起，该商品可能已下架'
            ];
            // 返回给客户端json格式
            return json_encode($arr);
        }
        // 判断商品是否下架了
        if($goods->goods->goods_status != '1'){
            // 当商品下架时
            $arr=[
                'code' => '0',
                'msg' => '对不起，该商品已下架'
            ];
            // 
            $num = $shopping->car_num;
            $historynum = $shopping->goods->goods_num;
            $newsl = $historynum + $num;
            Goods::where('id',$shopping->goods_id)->update(['goods_num'=>$newsl]);
            ShoppingCar::destroy($data['id']);
            return json_encode($arr);
        }
        if($goods->car_num < $data['car_num']){
            if($goods->goods->goods_num <1){
                $arr=[
                    'code' => '2',
                    'msg' => '对不起商品数量不足',
                    'sl' => $goods->car_num
                ];
                return json_encode($arr);
            }
        }
        
        if($data['car_num'] <= 0){
            return false;
        }
        try{
            $sum = $goods->goods->goods_num;
            $history = $goods->car_num - $data['car_num'];
            $newGoods = $sum + $history;
            ShoppingCar::where('id',$data['id'])->where('user_id',session('user.id'))->update($data);
            Goods::where('id',$goods->goods->id)->update(['goods_num'=>$newGoods]);
        }catch(\Exception $err){
        }
        $zhi = self::jszj();
        $arr = [
            'code' => '1',
            'zongshu' => $zhi['zongshu'],
            'moling' => $zhi['moling']
        ];
        return json_encode($arr);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $data = $request->except(['_token','_method']);
        $shopping = ShoppingCar::where('id',$data['id'])->where('user_id',$id)->first();
        $spsl = $shopping->car_num;
        $spzj = $shopping->goods->goods_price * $spsl;
        if(!$shopping){
            $arr = [
                'code' => '0',
                'msg' => '对不起，您的购物车可能没有此件商品'
            ];
            return json_encode($arr);
        }
        try{
            ShoppingCar::destroy($data['id']);
        }catch(\Exception $err){
            $arr = [
                'code' => '0',
                'msg' => '对不起，删除商品失败'
            ];
            return json_encode($arr);
        }
        $num = $shopping->car_num;
        $historynum = $shopping->goods->goods_num;
        $newsl = $historynum + $num;
        Goods::where('id',$shopping->goods_id)->update(['goods_num'=>$newsl]);

        $arr = [
            'code' => '1',
            'msg' => '删除商品成功',
            'spsl' => $spsl,
            'spzj' => $spzj
        ];
        return json_encode($arr);
    }

    // 向购物车添加商品
    public function caradd(Request $request)
    {
        // 获取添加购物车数据
        if(!session('userlogin')){
            $arr = [
                'code' => '0',
                'msg' => '对不起，您还没有登录，请您先<a href="/login" style="color: #2bf678">登录</a>。'
            ];
            return json_encode($arr);
        }
        $data = $request->except(['_token','_method']);
        if($data['attr'] == ''){
            $arr = [
                'code' => '0',
                'msg' => '对不起，您还没有选择商品 型号/尺寸。'
            ];
            return json_encode($arr);
        }
        if($data['car_num'] <= '0'){
            $arr = [
                'code' => '0',
                'msg' => '您的意思是要白送我吗？'
            ];
            return json_encode($arr);
            }
        // 获取用户ID
        $data['user_id'] = session('user.id');
        // 查看要添加商品的状态
        $good = Goods::where('id',$data['goods_id'])->first();
        // 没有找到要添加的商品，返回错误信息
        if(!$good){
            $arr = [
                'code' => '0',
                'msg' => '对不起，该商品可能已下架。'
            ];
            return json_encode($arr);
        }
        // 找到要添加的商品，但商品已下架，返回错误信息
        if($good['goods_status'] != '1'){
            $arr = [
                'code' => '0',
                'msg' => '对不起，该商品已下架。'
            ];
            return json_encode($arr);
        }
        // 商品没有下架，但要添加的商品大于库存商品，返回错误信息
        if($good['goods_num'] < $data['car_num']){
            $arr = [
                'code' => '0',
                'msg' => '对不起，该商品没有那么多了，请合理选择购买数量。'
            ];
            return json_encode($arr);
        }
        // 判断用户购物车中是否已经有相同类型的商品
        $em = ShoppingCar::where('user_id',session('user.id'))->where('attr',$data['attr'])->where('goods_id',$data['goods_id'])->first();
        // 用户购物车有相同商品区间
        if($em){
            // 在用户购物车商品中直接加上商品数量
            $em->car_num = $em->car_num + $data['car_num'];
            $good->goods_num = $good->goods_num - $data['car_num'];
            try{
                // 保存到数据库
                $em->save();
                $good->save();
                // 捕获系统的错误信息
            }catch(\Exception $err){
                // 返回错误信息
                return json_encode($data);
                $arr = [
                    'code' => '0',
                    'msg' => '对不起，加入购物车失败。'
                ];
                return json_encode($arr);
            }
            // 没有错误返回成功信息
            $arr = [
                'code' => '1',
                'msg' => '加入购物车成功。'
            ];
            return json_encode($arr);
        }
        // 用户购物车没有添加商品信息区间
        $data['dqtime'] = time() + 60 * 30;
        $good->goods_num = $good->goods_num - $data['car_num'];
        try{
            $good->save();
            // 为用户在购物车中插入一条新数据
            ShoppingCar::insert($data);
            // 捕获错误
        }catch(\Exception $err){
            // 返回错误信息
            return json_encode($data);
            $arr = [
                'code' => '0',
                'msg' => '对不起，加入购物车失败。'
            ];
            return json_encode($arr);
        }
        // 返回成功信息
        $arr = [
            'code' => '1',
            'msg' => '加入购物车成功。'
        ];
        return json_encode($arr);
    }

    public static function jszj()
    {
        $data = ShoppingCar::where('user_id',session('user.id'))->get();
        $moling = 0;
        $zongshu = 0;
        foreach($data as $k => $v){
            $sum = $v->car_num;
            $zongshu += $sum;
            $moling += $v->goods->goods_price * $sum;
        }
        $value = [
               'moling' => $moling,
               'zongshu' => $zongshu 
        ];
        return $value;
    }

    public static function quanjugwc()
    {
        if(!session('userlogin')){
            return '您还未登录';
        }
        $jc = ShoppingCar::get();
        foreach($jc as $k => $v){
            if($v->dqtime < time()){
                $good = Goods::where('id',$v->goods_id)->first();
                if($good){
                    $good->goods_num = $good->goods_num + $v->car_num;
                    $good->save();
                }
                ShoppingCar::destroy($v->id);
            }
        }
        $data = ShoppingCar::where('user_id',session('user.id'))->get();
        return $data;
    }
}
