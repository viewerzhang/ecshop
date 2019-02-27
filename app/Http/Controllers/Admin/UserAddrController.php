<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\UserAddr;
use App\Http\Model\Admin\Users;

class UserAddrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = $request->input('key','');
        $data = Users::where('user_name','like',"%{$key}%")->paginate(8);
        return view('admin.useraddr.index',['key'=>$key,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
              // <option value="0">综合搜索</option>
              // <option value="1">按用户名</option>
              // <option value="2">按收货地址</option>
              // <option value="3">按手机号</option>
              // <option value="4">按邮编</option>





        // $key = $request->input('key','');
        // $type = $request->input('type','');
         // $data = Users::where('user_name','like',"%{$key}%")->paginate(8);
        return view('admin.useraddr.search',['key'=>$key,'data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = UserAddr::find($id);
        return view('admin.useraddr.show',['data'=>$data]);
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
        // array(4) { ["user_title"]=> string(13) "我的地址1" ["user_take"]=> string(9) "张宇童" ["user_code"]=> string(6) "223001" ["user_phone"]=> string(11) "15161782822" }
        $data = $request->except(['_token','_method']);

        $addr = UserAddr::find($id);
        $addr->user_title = $data['user_title'];
        $addr->user_take = $data['user_take'];
        $addr->user_code = $data['user_code'];
        $addr->user_phone = $data['user_phone'];
        $addr->user_addr = $data['user_addr'];
        $judge = $addr->save();

        if($judge){
            $arr = [
                'code'=>'1',
                'title'=>$data['user_title']
            ];
            return json_encode($arr);
        }else{
            $arr = [
                'code'=>'0'
            ];
            return json_encode($arr);
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
        $judge = UserAddr::destroy($id);
        if($judge){
            $arr = [
                'code'=>'1'
            ];
            return json_encode($arr);
        }else{
            $arr = [
                'code'=>'0'
            ];
            return json_encode($arr);
        }
    }
}
