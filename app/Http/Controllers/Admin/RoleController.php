<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search','');
        $data = Role::where('role_name','like','%'.$search.'%')->paginate(10);
        //dd($data);
        return view('admin/role/index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/role/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->except('_token');

        try{

            $data = Role::insert($res);

            if($data){
                return redirect('/admin/role')->with('success','添加成功');
                }
            }catch(\Exception $e){
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
        $data = Role::find($id);
        return view('admin/role/edit',['data'=>$data]);
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
        $res = $request->only('role_name');
        
        try{

            $data = Role::where('id',$id)->update($res);

            if($data){
                return redirect('/admin/role')->with('success','修改成功');
                }
            }catch(\Exception $e){
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
        

        try{

            $data = Role::where('id',$id)->delete();

            if($data){
                return redirect('/admin/role')->with('success','删除成功');
                }
            }catch(\Exception $e){
                 return back()->with('error','删除失败');
            }


    }
}
