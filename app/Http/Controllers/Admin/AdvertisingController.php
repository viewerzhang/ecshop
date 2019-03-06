<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Advertising;
use DB;
class AdvertisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 获取搜索关键字
        $search = $request->input('search','');
        // 获取广告所有数据
        $data = Advertising::where('ad_desc','like','%'.$search.'%')
                ->orderBy('id','desc')
                ->paginate(5);
        // 将数据分配到模板
        return view('admin/advertising/index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 显示广告添加页面
        return view('admin/advertising/add');
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
            'ad_desc' => 'required',
            'ad_link' => 'required',
        ],[
            'ad_desc.required' => '请填写广告描述',
            'ad_link.required' => '请填写广告链接',
        ]);
        // 向数据库保存数据
        $res = Advertising::insert($data);

        // 判断是否保存成功
        if($res){
            return redirect('/admin/ad')->with('success','添加成功');
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
        $data = Advertising::find($id);
        // 分配到模板
        return view('admin/advertising/edit',['data'=>$data]);
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
            'ad_desc' => 'required',
            'ad_link' => 'required',
        ],[
            'ad_desc.required' => '请填写广告描述',
            'ad_link.required' => '请填写广告链接',
        ]);
            
        // 向数据库保存数据
        $res = Advertising::where('id',$id)->update($data);

        // 判断是否保存成功
        if($res){
            return redirect('/admin/ad')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败,请修改信息或返回上一级');
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
        $res = Advertising::destroy($id);
        // 判断是否成功
        if($res){
            return redirect('/admin/ad')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function files(Request $request)
    {
        if($request->hasFile('ad_img')){
            $files = $request->file('ad_img');
            $fileName = $files->store('images/add/temp');
            $trueFileName = str_replace('/temp', '', $fileName);
            $arr = [
                'src'=>asset('static/'.$fileName),
                'hdsrc'=>'static/'.$fileName,
                'code'=>'1'
            ];
            return json_encode($arr);
        }else{
            $arr = [
                'code'=>'0',
            ];
            return json_encode($arr);
        }
    }
}
