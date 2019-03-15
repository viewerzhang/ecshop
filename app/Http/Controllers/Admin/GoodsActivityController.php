<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\GoodsActivity;
use App\Http\Model\Admin\Goods;
class GoodsActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 获取活动所有数据
        $data = GoodsActivity::orderBy('id','desc')
                ->paginate(5);
        // 将数据分配到模板
        return view('admin/activity/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 显示活动添加页面
        return view('admin/activity/add');
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
        // 验证数据
        $this->validate($request,[
            'goods_id' => 'required',
        ],[
            'goods_id.required' => '请填写商品id',
        ]);
        // 向数据库保存数据
        $res = GoodsActivity::insert($data);

        // 判断是否保存成功
        if($res){
            return redirect('/admin/activity')->with('success','添加成功');
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
        // 查找数据
        $data = GoodsActivity::find($id);
        // 分配到模板
        return view('admin/activity/edit',['data'=>$data]);
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
        // 接收数据
        $data = $request->except(['_token','_method']);
        // 验证数据
        $this->validate($request,[
            'goods_id' => 'required',
        ],[
            'goods_id.required' => '请填写商品id',
        ]);
        // 向数据库保存数据
        $res = GoodsActivity::where('id',$id)->update($data);

        // 判断是否保存成功
        if($res){
            return redirect('/admin/activity')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
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
        // 删除数据库中数据
        $res = GoodsActivity::destroy($id);
        // 判断是否成功
        if($res){
            return redirect('/admin/activity')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
