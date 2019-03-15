<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\UserAddr;

class UserAddrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = session('user.id');
        $data = UserAddr::where('uid',$uid)->orderBy('id','desc')->paginate(3);
        return view('home.useraddr.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.useraddr.create');
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
        $data['uid'] = session('user.id');
        try{
            $aid = UserAddr::insertGetId($data);
        }catch(\Exception $err){
            // 返回失败信息
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }

        $data['code'] = '1';
        $data['fhid'] = $aid;
        return json_encode($data);

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
        return view('home.useraddr.edit',['data'=>$data]);
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
        $data = $request->except(['_token','_method']);
        $history = UserAddr::find($data['id']);
        // var_dump($history->user_title);die;
        if( $history->uid != session('user.id') ){
            // 返回错误信息
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }
        try{
            UserAddr::where('uid',$id)->where('id',$data['id'])->update($data);
        }catch(\Exception $err){
            // 返回错误信息
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }
        // 返回成功信息
        $data = UserAddr::find($data['id']);
        $data['code'] = '1';
        return json_encode($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $data = $request->except(['_token','_method']);
        if(session('user.id') != $id){
            // 返回错误信息
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }else if(!$data['id']){
            // 返回错误信息
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }
        try{
            UserAddr::where('id',$data['id'])->delete();
        }catch(\Exception $err){
            // 返回错误信息
            $arr = [
                'code' => '0'
            ];
            return json_encode($arr);
        }
        // 返回成功信息
        $arr = [
            'code' => '1'
        ];
        return json_encode($arr);
    }
}
