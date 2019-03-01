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
    public function index(Request $request)
    {
        // 获取搜索关键字
        $search = $request->input('search','');
        // 获取导航所有数据
        $data = Navigation::where('nav_title','like','%'.$search.'%')
                ->orderBy('nav_sort','desc')
                ->paginate(5);
        // 将数据分配到模板
        return view('admin/navigation/index',['data'=>$data,'request'=>$request->all()]);
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
        $this->validate($request,[
            'nav_title' => 'required',
            'nav_link' => 'required',
        ],[
            'nav_title.required' => '请填写导航标题',
            'nav_link.required' => '请填写导航链接',
        ]);
        // 如果排序为空。给默认值为0
        if( !$request->filled('nav_sort') ){
            $data['nav_sort'] = 0;
        }
        // 向数据库插入数据
        $res = Navigation::insert($data);
        // 判断数据是否插入成功
        if($res){
            return redirect('/admin/nav')->with('success','添加成功');
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
        $this->validate($request,[
            'nav_title' => 'required',
            'nav_link' => 'required',
        ],[
            'nav_title.required' => '请填写导航标题',
            'nav_link.required' => '请填写导航链接',
        ]);
        // 如果排序为空。给默认值为0
        if( !$request->filled('nav_sort') ){
            $data['nav_sort'] = 0;
        }
        // 向数据库保存数据
        $res = Navigation::where('id',$id)->update($data);
        // 判断数据是否插入成功
        if($res){
            return redirect('/admin/nav')->with('success','修改成功');
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
        $res = Navigation::destroy($id);
        // 判断是否成功
        if($res){
            return redirect('/admin/nav')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
