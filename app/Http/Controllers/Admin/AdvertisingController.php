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
        // 判断有没有文件上传
        if($request->hasfile('ad_img')){
            // 实例化图片对象
            $files = $request->file('ad_img');

            // 调用保存图片方法
            $fileName = $files->store('images/add');

            // 将名字存入数组
            $data['ad_img'] = $fileName;

            // 判断是否有未填写的信息
            if( $request->filled('ad_desc') && $request->filled('ad_link') ){
                // 向数据库保存数据
                $res = Advertising::insert($data);

                // 判断是否保存成功
                if($res){
                    echo '<script>alert("添加成功");location.href="/admin/ad"</script>';
                }else{
                    echo '<script>alert("添加失败");location.href="/admin/ad/create"</script>';
                }

            }else{
                echo '<script>alert("添加失败,请填写所有信息");location.href="/admin/ad/create"</script>';
            }

            // 验证数据
            // $this->validate($request,[
            //     'ad_desc' => 'required',
            //     'ad_link' => 'required',
            // ],[
            //     'ad_desc.required' => '请填写广告描述',
            //     'ad_link.required' => '请填写广告链接',
            // ]);

        }else{
            echo '<script>alert("添加失败,请上传图片");location.href="/admin/ad/create"</script>';
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
        // 判断有没有文件上传
        if($request->hasfile('ad_img')){
            // 实例化图片对象
            $files = $request->file('ad_img');

            // 调用保存图片方法
            $fileName = $files->store('images/add');

            // 将名字存入数组
            $data['ad_img'] = $fileName;

            // 判断是否有未填写的信息
            if($request->filled('ad_desc') && $request->filled('ad_link')){

                // 向数据库保存数据
                $res = Advertising::where('id',$id)->update($data);

                // 判断是否保存成功
                if($res){
                    echo '<script>alert("修改成功");location.href="/admin/ad"</script>';
                }else{
                    echo '<script>alert("修改失败");location.href="/admin/ad/'.$id.'/edit"</script>';
                }

            }else{
                echo '<script>alert("修改失败,请填写所有信息");location.href="/admin/ad/'.$id.'/edit"</script>';
            }

        }else{
            echo '<script>alert("修改失败,请上传图片");location.href="/admin/ad/'.$id.'/edit"</script>';
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
            echo '<script>alert("删除成功");location.href="/admin/ad"</script>';
        }else{
            echo '<script>alert("删除失败");location.href="/admin/ad"</script>';
        }
    }
}
