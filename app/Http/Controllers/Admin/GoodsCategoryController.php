<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\GoodsCategory;
use App\Http\Requests\GoodsCategoryRequest;

class GoodsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = $request->input('key','');
        $data = GoodsCategory::where('cate_name','like','%'.$key.'%')->orderByRaw(\DB::raw("concat(cate_path,id,',')"))->paginate(8);
        return view('admin.goodscategory.index',['key'=>$key,'data'=>$data]);
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
    public function store(GoodsCategoryRequest $request)
    {

        $data = $request->except(['_token']);
        dd($data);
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
            $arr = [
                'code' => '1',
                'title' => '隐藏',
                'btn' => '显示'
            ];
        }else{
            $data->cate_status = '1';
            $arr = [
                'code' => '1',
                'title' => '显示',
                'btn' => '隐藏'
            ];
        }
        try{
            $data->save();
        }catch(\Exception $err){
            $arr = [
                'code' => '0',
            ];
            return json_encode($arr);
        }
        return json_encode($arr);
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
        $name = $data->cate_name;
        try{
            $data->save();
        }catch(\Exception $err){
            $arr = [
                'code'=>'0',
            ];
            return json_encode($arr);
        }
        $cateOne = GoodsCategory::find($id);
        $cateName = $cateOne->catenamea;
        $arr = [
            'code'=>'1',
            'name' => $cateName,
        ];
        return json_encode($arr);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cates = GoodsCategory::where('cate_pid',$id)->first();
        if($cates){
            $arr = [
                'code' => '2',
                'msg' => '对不起，您的分类下还有子分类不能删除'
            ];
            return json_encode($arr);
        }
        try{
            GoodsCategory::destroy($id);
        }catch(\Exception $err){
            $arr = [
                'code'=>'0',
            ];
            return json_encode($arr);
        }
        $arr = [
            'code'=>'1',
        ];
        return json_encode($arr);
    }
}
