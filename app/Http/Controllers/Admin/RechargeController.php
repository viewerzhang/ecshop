<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Recharge;

class RechargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 接收参数
        $status = $request->input('status','');
        // 查询数据
        if($status == ''){
            $data = Recharge::paginate(5);
        }else{
            $data = Recharge::where('recharge_status',$status)->paginate(5);
        }
        // 将数据分配到模板
        return view('admin/recharge/index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 显示添加充值卡模板
        return view('admin/recharge/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 接收数据
        $data = $request->except(['_token']);
        // 判断数据是否为空
        $this->validate($request,[
            'recharge_money' => 'required',
            'recharge_num' => 'required',
        ],[
            'recharge_money.required' => '请填写充值卡金额',
            'recharge_num.required' => '请填写充值卡数量',
        ]);
        // 将数量存到变量
        $num = $data['recharge_num'];
        // 销毁数组中数量元素
        unset($data['recharge_num']);
        // 循环生成卡密并补充数据
        for ($i=0; $i < $num; $i++) { 
            $data['kalman'] = str_random(16);
            $data['user_id'] = null;
            $data['recharge_status'] = 0;
            // 向数据库插入数据
            $res = Recharge::insert($data);
        }
        if($res){
            return redirect('/admin/recharge')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
