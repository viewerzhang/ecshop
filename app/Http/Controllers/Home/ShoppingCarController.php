<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Home\ShoppingCar;
use App\Http\Model\Admin\Goods;

class ShoppingCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ShoppingCar::where('user_id',session('user.id'))->get();
        $zhi = self::jszj();
        return view('home.shoppingcar.index',['zhi'=>$zhi,'data'=>$data]);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$sum,$attr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = $request->except(['_token','_method']);
        // 准确获取购物车表中的用户信息
        $goods = ShoppingCar::where('id',$data['id'])->where('user_id',session('user.id'))->first();

        if(!$goods){
            $arr=[
                'code' => '0',
                'msg' => '对不起，该商品可能已下架'
            ];
            return json_encode($arr);
        }
        if($goods->goods->goods_status != '1'){
            $arr=[
                'code' => '0',
                'msg' => '对不起，该商品已下架'
            ];
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
        $data = $request->except(['_token','_method']);
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
            try{
                // 保存到数据库
                $em->save();
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
        try{
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


}
