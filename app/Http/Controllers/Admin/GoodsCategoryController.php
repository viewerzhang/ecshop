<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\GoodsCategory;

class GoodsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = GoodsCategory::orderByRaw(\DB::raw("concat(cate_path,id,',')"))->get();
        return view('admin.goodscategory.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = GoodsCategory::orderByRaw(\DB::raw("concat(cate_path,id,',')"))->get();
        return view('admin.goodscategory.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        if($data['cate_pid'] == '0'){
            $data['cate_path'] = '0,';
        }else{
            $data['cate_path'] = GoodsCategory::find($data['cate_pid'])->cate_path.$data['cate_pid'].',';
        }
        try{
            GoodsCategory::insert($data);
        }catch(\Exception $err){
            return "<script>alert('添加失败')</script>";
        }
        return "<script>confirm('添加成功是否继续添加?')?history.back():location.href='/admin/goodscategory'</script>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = GoodsCategory::find($id);
        if($data->cate_status == '1'){
            $data->cate_status = '2';
        }else{
            $data->cate_status = '1';
        }
        try{
            $data->save();
        }catch(\Exception $err){
            return "<script>location.href='/admin/goodscategory'</script>";
        }
        return "<script>location.href='/admin/goodscategory'</script>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = GoodsCategory::find($id);
        return view('admin.goodscategory.edit',['data'=>$data]);
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
        $data = GoodsCategory::find($id);
        $data->cate_name = $request->input('cate_name');
        try{
            $data->save();
        }catch(\Exception $err){
            return "<script>alert('修改失败');location.href='/admin/goodscategory'</script>";
        }
        return "<script>alert('修改成功');location.href='/admin/goodscategory'</script></script>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            GoodsCategory::destroy($id);
        }catch(\Exception $err){
            return "<script>alert('删除失败');location.href='/admin/goodscategory'</script>";
        }
        return "<script>alert('删除成功');location.href='/admin/goodscategory'</script>";
    }
}
