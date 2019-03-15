<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Role;
use App\Http\Model\Admin\Permission;
use DB;

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
        $data = Role::where('role_name','like','%'.$search.'%')->orderBy('id','desc')->paginate(10);
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

    //添加权限的页面
    public function roleper($id)
    {
        //获取角色名
        $res = Role::find($id);
        //dd($res);
        //获取权限名
        $per = Permission::all();

        $rs = $res->permission;

        $per_id=[];
        foreach($rs as $k=>$v){
            $per_id[]=$v->id;
        }
        

        return view('admin/role/roleper',['res'=>$res,'per'=>$per,'per_id'=>$per_id]);
    }

    //处理角色权限的方法
    public function doroleper(Request $request,$id)
    {
        //角色id
        $id = $request->id;
        //权限id
        $per_id = $request->per_id;
        //dd($per_id);

         DB::table('role_per')->where('role_id',$id)->delete();
        

        $data = [];
        foreach($per_id as $k=>$v){
            $arr = [];
            $arr['role_id'] = $id;
            $arr['per_id'] = $v;
            $data[]=$arr;
        }

        $rs = DB::table('role_per')->insert($data);
        if($rs){
            return redirect('/admin/role')->with('success','添加成功');
        }else{
             return back()->with('error','添加失败');
        }
        

         
    }
}
