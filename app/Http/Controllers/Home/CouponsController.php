<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Discount;
use App\Http\Model\Home\Coupons;
use App\Http\Model\Home\User;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Discount::where(function($query) use ($request) {
            $query->where('hidden',1)
                  ->where('dq_time','>',time())
                  ->where('name','like',"%{$request->input('key','')}%");
        })->paginate(8);
    	return view('home/coupons/coupons',['data'=>$data]);
    }


    // 领取优惠卷
    public function draw($id)
    {
        if(!session('userlogin')){
            // 用户未登录
            $arr = [
                'code' => '0',
                'msg' => '对不起，您还未登录，请您先登录'
            ];
            return $arr;
        }
        // 再次判断 用户是否存在
        $user = User::find(session('user.id'));
        if(!$user){
            // 用户未登录
            $arr = [
                'code' => '0',
                'msg' => '对不起，您还未登录，请您先登录'
            ];
            return $arr;
        }
        // 查询优惠券领取权限
        $discount = Discount::where('id',$id)->where('dq_time','>',time())->where('hidden','1')->first();
        // 判断优惠券是否存在
        if(!$discount){
            // 优惠券不存在
            $arr = [
                'code' => '0',
                'msg' => '对不起，优惠券不存在'
            ];
            return $arr;
        }
        // 优惠券存在 判断用户是否有权限领取
        if($user->jf >= $discount->auth){
            // 判断用户领取的次数
            $ct = Coupons::where('uid',session('user.id'))->where('did',$id)->get();
            if(count($ct) >= $discount->max){
                $arr = [
                    'code' => '1',
                    'msg' => '对不起，您的领取次数已上限'
                ];
                return $arr;
            }
            $data = [
                'uid' => session('user.id'),
                'did' => $id,
                'ky' => '1',
                // 设置优惠券7天有效
                'dq_time' => time()+60*60*24*7
            ];
            $judge = Coupons::insert($data);
            if($judge){
                $arr = [
                    'code' => '1',
                    'msg' => '恭喜您，领取成功'
                ];
                return $arr;
            }
            $arr = [
                'code' => '0',
                'msg' => '领取失败'
            ];
            return $arr;
        }
        $arr = [
            'code' => '1',
            'msg' => '对不起，您的等级还不足以领取'
        ];
        return $arr;
    }

    public function my()
    {
        $data = Coupons::where('uid',session('user.id'))->orderBy('dq_time','desc')->paginate(8);
        return view('home.coupons.my',['data'=>$data]);
    }

}
