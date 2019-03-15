<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Discount;
use App\Http\Requests\DiscountRequest;
use App\Http\Model\Home\Coupons;
use App\Http\Model\Home\User;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = $request->input('key','');
        $data = Discount::where('name','like',"%{$key}%")->paginate(8);
        return view('admin.discount.index',['key'=>$key,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.discount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiscountRequest $request)
    {
        // 去除token值
        $data = $request->except(['_token']);
        // 判断是否满减
        if($data['type'] != 2){
            // 不是满减设置full字段0
            $data['full'] = 0;
        }
        // 判断是否满减
        if($data['type'] == 2){
            // 是满减 判断满减金额设置是否正确
            if($data['full'] <= 0){
                // 不正确 返回
                return back()->with('error','满减金额不可以小于或等于0哦');
            }
        }
        // 判断是否是折扣券
        if($data['type'] == 1){
            // 是折扣券 判断折扣设置是否正确
            if($data['discount'] >= 10){
                return back()->with('error','折扣券不能大于10折哦');
            }
        }
        // 转换时间
        $data['dq_time'] = strtotime($data['dq_time']);
        // 判断时间设置是否合理
        if($data['dq_time'] < time()){
            return back()->with('error','到期时间不能在现在之前哦');
        }
        // 判断优惠券领取权限
        switch ($data['auth']) {
            case 0:
                $data['auth'] = 0;
                break;
            case 1: 
                $data['auth'] = 10;
                break;
            case 2:
                $data['auth'] = 5000;
                break;
            case 3:
                $data['auth'] = 10000;
                break;
            case 4:
                $data['auth'] = 30000;
                break;
            case 5:
                $data['auth'] = 50000;
                break;
            case 6:
                $data['auth'] = 100000;
                break;
        }
        // 插入数据库
        $judge = Discount::insert($data);
        // 判断是否插入成功
        if($judge){
            // 添加成功
            return back()->with('success','添加成功，请继续添加');
        }
        // 添加失败
        return back()->with('error','对不起添加失败，请重新添加');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Discount::find($id);
        if(!$data){
            $arr = [
                'code' => '0',
                'msg' => '对不起，你要操作的优惠券不存在'
            ];
            return json_encode($arr);
        }
        if($data->dq_time < time()){
            $arr = [
                'code' => '0',
                'msg' => '对不起，您的优惠券已过有效期，请重新添加'
            ];
            return json_encode($arr);
        }
        if($data->hidden == 0){
            $data->hidden = 1;
            $data->save();
            $arr = [
                'code' => '1',
                'msg' => '优惠卷，启用成功',
                'td' => '正在发放',
                'btn' => '停止发放'
            ];
            return json_encode($arr);
        }else{
            $data->hidden = 0;
            $data->save();
            $arr = [
                'code' => '1',
                'msg' => '优惠卷，关闭成功',
                'td' => '已停止发放',
                'btn' => '开启发放'
            ];
            return json_encode($arr);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupons::find($id);
        if(!$coupon){
            $arr = [
                'code' => '0',
                'msg' => '对不起，你操作的优惠券不存在'
            ];
            return $arr;
        }
        if($coupon->ky == 1){
            $coupon->ky = 2;
            $coupon->save();
            $arr = [
                'code' => '1',
                'msg' => '操作成功'
            ];
            return json_encode($arr);
        }
        $arr = [
            'code' => '0',
            'msg' => '对不起，该优惠券目前状态不能操作'
        ];
        return $arr;
    }

    // 查看领取情况
    public function indexdetail(Request $request)
    {
        $key = $request->input('key','');
        $data = Coupons::where(function ($requery) use ($key) {
            if($key != ''){
                $uid = User::where('nicheng','like',"%{$key}%")->pluck('id');
                $requery->whereIn('uid',$uid);
            }
        })->paginate(8);
        return view('admin.discount.detail',['key'=>$key,'data'=>$data]);
    }
}
