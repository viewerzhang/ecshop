<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\{Recharge,Users};

class UserBalanceController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->input('kalman');
        $user = Users::where('id',session('user.id'))->first();
        $kajine = Recharge::where('kalman',$data)->first();
        if(!$kajine){
            // 返回没有该卡信息
            $arr = [
                'code' => '0',
                'msg' => '对不起，您的卡号有误请重新输入'
            ];
            return json_encode($arr);
        }
        if($kajine->recharge_status == 1){
            $arr = [
                'code' => '0',
                'msg' => '对不起，您的EC优卡已被充值'
            ];
            return json_encode($arr);
        }
        $user->user_balance = $user->user_balance + $kajine->recharge_money;
        $kajine->user_id = session('user.id');
        $kajine->czsj = time();
        $kajine->recharge_status = '1';
        try{
            $user->save();
            $kajine->save();
        }catch(\Exception $error){
            // 返回充值失败信息
            $arr = [
                'code' => '0',
                'msg' => '对不起，充值失败请稍后再试'
            ];
            return json_encode($arr);
        }
        // 返回充值成功信息
        $arr = [
            'code' => '1',
            'msg' => '恭喜你，成功充值'.$kajine->recharge_money.'元'
        ];
        return json_encode($arr);
    }


    public function balance()
    {
        $data = Recharge::where('user_id',session('user.id'))->orderBy('czsj','desc')->paginate(5);
        return view('home.grzx.balance',['data'=>$data]);
    }
}
