<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\UserAddr;
use App\Http\Model\Home\ShoppingCar;
use App\Http\Model\Admin\GoodsOrder;
use App\Http\Model\Admin\ShopDetail;
use App\Http\Model\Admin\Goods;
use App\Http\Model\Admin\Users;
use App\Http\Model\Home\GoodsShare;
use App\Http\Model\Home\Coupons;
use App\Http\Model\Admin\Discount;
use DB;

class GoodsOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            $uid = session('user.id');
            $data = GoodsOrder::where('user_id',$uid)->orderBy('created_at','desc')->paginate(4);
            return view('home.goodsorder.show',['data'=>$data]);
        }catch(\Exception $err){
            return view('error.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try{
            if(!session('userlogin')){
                return back()->with('error','您还没有登录请您先登录！');
            }
            $dangood = $request->all();
            if(!$dangood['attr']){
                return back()->with('error','您还没有选择商品的属性');
            }
            if($dangood['sum'] <= '0'){
                return back()->with('error','您的意思是要白送我吗？');
            }
            $dangood['attr'] = rtrim($dangood['attr'],',');

            $data[] = [
                    'goods_id' => $dangood['goods_id'],
                    'detail_price' => Goods::find($dangood['goods_id'])->goods_price,
                    'detail_conut' => $dangood['sum'],
                    'goods_name' => Goods::find($dangood['goods_id'])->goods_name,
                    'detail_attr' => $dangood['attr'],
                    'xj' => Goods::find($dangood['goods_id'])->goods_price * $dangood['sum']
                ];
             
            // 保存临时订单
            $code = str_random(10);
            session([$code => $data]);
            session(["{$code}.zongjiaqian" => $data[0]['xj']]);
            session(["{$code}.zongshuliang" => $data[0]['detail_conut']]);
            $attr = UserAddr::where('uid',session('user.id'))->get();
            // 获取用户优惠券
            $discount = Coupons::where('uid',session('user.id'))->where('ky','1')->where('dq_time','>',time())->get();
            return view('home.goodsorder.index',['discount'=>$discount,'code'=>$code,'zongshuliang'=>$data[0]['detail_conut'],'zongjiaqian'=>$data[0]['xj'],'data'=>$data,'attr'=>$attr]);
        }catch(\Exception $err){
            return view('error.index');
        }
    }

    /**
     * 生成新订单 支付中
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $data = $request->all();
            // 开启事务
            // dump($data);die;
            DB::beginTransaction();
            // 获取订单总价钱
            $order['order_sum'] = session("{$data['code']}.zongjiaqian");
            // 判断用户有没有使用优惠券
            if($data['discount'] != '0'){
                // 用户使用优惠券，找到这张优惠券
                $discount = Coupons::where('uid',session('user.id'))->where('ky','1')->where('dq_time','>',time())->find($data['discount']);
                // 判断有没有这一张优惠券
                if(!$discount){
                    // 没有这张优惠券，可能过期或已被使用或被禁用，或者被黑了
                    return back()->with('error','对不起，您的优惠券不存在或已过期');
                }
                // 找到优惠券，并且可用
                // 判断类型
                // 现金券
                if($discount->discount->type == 0){
                    // 直接抵扣支付金额
                    $order['order_sum'] = $order['order_sum'] - $discount->discount->discount;
                    // 判断抵扣后总金额是否为负数
                    if($order['order_sum'] <= 0){
                        // 重置订单总金额
                        $order['order_sum'] = 0;
                    }
                    // 更新优惠券状态
                    $discount->ky = 0;
                    $order['discount'] = $discount->id;
                }
                // 折扣券
                if($discount->discount->type == 1){
                    // 直接折合总价钱
                    $order['order_sum'] = $order['order_sum'] * ($discount->discount->discount / 10);
                    // 更新优惠券状态
                    $discount->ky = 0;
                    $order['discount'] = $discount->id;
                }
                // 满减券
                if($discount->discount->type == 2){
                    // 再次判断是否满足条件
                    if($order['order_sum'] > $discount->discount->full){
                        // 条件满足
                        $order['order_sum'] = $order['order_sum'] - $discount->discount->discount;
                        // 判断满减后总金额是否小于0
                        if($order['order_sum'] <= 0){
                            // 重置总金额
                            $order['order_sum'] = 0;
                        }
                        // 更新优惠券状态
                        $discount->ky = 0;
                        $order['discount'] = $discount->id;
                    }else{
                        // 条件不满足
                        return back()->with('error','对不起，您的优惠券不能再本订单中使用');
                    }
                    // 更新优惠券状态
                    $discount->ky = 0;
                }
                // 更新优惠券状态
                $yhq = $discount->save();
            }else{
                // 用户没有使用优惠券
                $order['discount'] = '0';
                $yhq = true;
            }
            // 判断用户有没有钱
            $user = Users::where('id',session('user.id'))->first();
            if($user->user_balance < $order['order_sum']){
                // 用户余额不足
                session([$data['code'] => null]);
                return view('success.yuebuzu');
            }
            // 现将用户账户余额扣除
            $user->user_balance = $user->user_balance - $order['order_sum'];
            $goods = session($data['code']);
            // 获取用户地址
            $addr = UserAddr::where('id',$data['dz'])->first();
            // 生成定单号
            $order['rand_id'] = time().mt_rand(100000,999999);
            // 获取订单总数量
            $order['order_count'] = session("{$data['code']}.zongshuliang");
            // 获取用户ID
            $order['user_id'] = session('user.id');
            // 获取收货人
            $order['order_rec'] = $addr['user_take'];
            // 获取收货地址
            $order['order_addr'] = $addr['user_addr'];
            // 获取收货邮编
            $order['order_code'] = $addr['user_code'];
            // 获取收货手机号
            $order['order_phone'] = $addr['user_phone'];
            // 买家留言 扩展性
            $order['user_msg'] = '';
            // 初始化订单状态
            $order['order_status'] = '0';
            // 设置下单时间
            $order['created_at'] = time();
            // 保存订单表
            $orderId = GoodsOrder::insertGetId($order);
            // 更新用户账户余额
            $pdcg = $user->save();
            // 销毁无用数组
            unset($goods['zongjiaqian']);
            unset($goods['zongshuliang']);
            // 遍历检查商品状态
            foreach($goods as $k => $v){
                $detailgoods['goods_id'] = $v["goods_id"];
                $goods_status = Goods::find($v['goods_id']);
                if(!$goods_status){
                    return back()->with('error','对不起，您选择的商品不存在');
                }else{
                    if($goods_status->goods_status == 2){
                        return back()->with('error','对不起，您选择的商品已下架');
                    }
                }
            }
            // 遍历插入商品详情
            foreach($goods as $k => $v){
                $detailgoods['order_id'] = $orderId;
                $detailgoods['goods_id'] = $v["goods_id"];
                $detailgoods['detail_price'] = $v["detail_price"];
                $detailgoods['detail_count'] = $v["detail_conut"];
                $detailgoods['detail_attr'] = $v["detail_attr"];
                $judge[] = ShopDetail::insert($detailgoods);
                if(!empty($v['car_id'])){
                    ShoppingCar::destroy($v['car_id']);
                }
            }
            $pd = true;
            // 判断是否全部插入数据库
            foreach($judge as $k => $v){
                if(!$v){
                    $pd = false;
                }
            }
            // 检测使用操作是否成功
            if($pd && $orderId && $pdcg && $yhq){
                DB::commit();
                session([$data['code'] => null]);
                $request->session()->flash('oid',$orderId);
                return view('home.goodsorder.share');
            }
            session([$data['code'] => null]);
            DB::rollBack();
        }catch(\Exception $err){
            session([$data['code'] => null]);
            return view('error.index');
        }
    }

    /**
     * 用户确认收货
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = GoodsOrder::where('user_id',session('user.id'))->where('id',$id)->first();
        // var_dump($data->order_status);die;
        if(!$data){
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }
        if($data->order_status != 1){
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }
        $data->order_status = '2';
        try{
            $data->save();
        }catch(\Exception $err){
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }
        $arr = [
            'code' => '1'
        ];
        return json_encode($arr);
    }

    /**
     * 订单详情
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $data = ShopDetail::where('order_id',$id)->paginate(3);
        $su = ShopDetail::where('order_id',$id)->get();
        $zongjiaqian = GoodsOrder::where('id',$id)->first()->order_sum;
        $discount = GoodsOrder::where('id',$id)->first();
        $yhq = Coupons::find($discount->discount);
        
        return view('home.goodsorder.detail',['yhq'=>$yhq,'discount'=>$discount,'zongjiaqian'=>$zongjiaqian,'su'=>$su,'data'=>$data]);
    }

    /**
     * 预生成新订单
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $goods = $request->all();
            // 总价钱
            $zongjiaqian = 0;
            // 总数量
            $zongshuliang = 0;
            // 商品简情
            $data = [];
            // 在后台重新计算商品数量及价钱，确保数据安全
            foreach($goods['like'] as $k => $v){
                $gouwuchedanjian = ShoppingCar::where('id',$v)->first();
                $zongshuliang += $gouwuchedanjian->car_num;
                $xj = $gouwuchedanjian->goods->goods_price * $gouwuchedanjian->car_num;
                $zongjiaqian += $xj;

                $data[] = [
                    'goods_id' => $gouwuchedanjian->goods_id,
                    'detail_price' => $gouwuchedanjian->goods->goods_price,
                    'detail_conut' => $gouwuchedanjian->car_num,
                    'goods_name' => $gouwuchedanjian->goods->goods_name,
                    'detail_attr' => $gouwuchedanjian->attr,
                    'car_id' => $gouwuchedanjian->id,
                    'xj' => $xj
                ];
            }
            // 保存临时订单
            $code = str_random(10);
            session([$code => $data]);
            session(["{$code}.zongjiaqian" => $zongjiaqian]);
            session(["{$code}.zongshuliang" => $zongshuliang]);
            // 获取用户优惠券
            $discount = Coupons::where('uid',session('user.id'))->where('ky','1')->where('dq_time','>',time())->get();
            $attr = UserAddr::where('uid',session('user.id'))->get();
            return view('home.goodsorder.index',['discount'=>$discount,'code'=>$code,'zongshuliang'=>$zongshuliang,'zongjiaqian'=>$zongjiaqian,'data'=>$data,'attr'=>$attr]);
        }catch(\Exception $err){
            return view('error.index');
        }
    }

    /**
     * 用户关闭订单
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = GoodsOrder::where('user_id',session('user.id'))->where('id',$id)->first();
        // var_dump($data->order_status);die;
        if(!$data){
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }
        if($data->order_status != 1 && $data->order_status != 0){
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }
        $data->order_status = '3';
        try{
            $data->save();
            // 查询订单价钱 
            $sum = $data->order_sum;
            // 找到关闭订单用户
            $user = Users::where('id',session('user.id'))->first();
            // 将订单金额退还用户
            $user->user_balance = $user->user_balance + $sum;
            // 将用户积分扣除
            $user->jf = $user->jf-10;
            // 更新用户信息
            $user->save();
            // 查询错误异常
        }catch(\Exception $err){
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }
        $arr = [
            'code' => '1'
        ];
        return json_encode($arr);
    }


    // 处理分享订单
    function share(Request $request)
    {
        $data = $request->except(['_token']);
        $data['uid'] = session('user.id');
        $data['time'] = time();
        $order = GoodsShare::where('uid',$data['uid'])->where('oid',$data['oid'])->first();
        if($order){
            return redirect('/goodsorder')->with('share','您已经分享过，请勿重复分享');
        }

        $user = Users::find(session('user.id'));
        $user->jf = $user->jf + 10;
        try{
            $judge = GoodsShare::insert($data);
            $user->save();
            if($judge && $user){
                return redirect('/goodsorder')->with('share','恭喜您分享成功');
            }
        }catch(\Exception $err){
            return redirect('/goodsorder')->with('share','对不起，商品分享失败');
        }
    }

}
