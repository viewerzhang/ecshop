<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Navigation;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 获取导航所有数据
        $data = Navigation::get();
        // 将数据分配到模板
        return view('admin/navigation/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 显示导航添加模板
        return view('admin/navigation/add');
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
        if( $request->filled('nav_title') && $request->filled('nav_link') ) {
            // 如果排序为空。给默认值为0
            if( !$request->filled('nav_sort') ){
                $data['nav_sort'] = 0;
            }
            // 向数据库插入数据
            $res = Navigation::insert($data);
            // 判断数据是否插入成功
            if($res){
                echo '<script>alert("添加成功");location.href="/admin/nav"</script>';
            }else{
                echo '<script>alert("添加失败");location.href="/admin/nav/create"</script>';
            }
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
        $data = Navigation::find($id);
        // 分配到模板
        return view('admin/navigation/edit',['data'=>$data]);
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
        // 判断数据是否为空
        if( $request->filled('nav_title') && $request->filled('nav_link') ) {
            // 如果排序为空。给默认值为0
            if( !$request->filled('nav_sort') ){
                $data['nav_sort'] = 0;
            }
            // 向数据库保存数据
            $res = Navigation::where('id',$id)->update($data);
            // 判断数据是否插入成功
            if($res){
                echo '<script>alert("修改成功");location.href="/admin/nav"</script>';
            }else{
                echo '<script>alert("修改失败");location.href="/admin/nav/'.$id.'/edit"</script>';
            }
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
        $res = Navigation::destroy($id);
        // 判断是否成功
        if($res){
            echo '<script>alert("删除成功");location.href="/admin/nav"</script>';
        }else{
            echo '<script>alert("删除失败");location.href="/admin/nav"</script>';
        }
    }
}
