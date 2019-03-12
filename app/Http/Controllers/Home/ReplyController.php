<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Home\Reply;
use App\Http\Model\Home\User;
use App\Http\Model\Admin\Goods;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.goods.showgoods');
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
        $data = $request->except(['_token']);
        // var_dump($data);die;
        // dd($data);
        $data['goods_create_time'] = time();
        $data['uid'] = session('user.id');
        if(Reply::where('gid',$data['gid'])->where('uid',session('user.id'))->first()){
            $data['code'] = '2';
            $data['msg'] = '该商品您已经评论过了';
            return json_encode($data);
        }
        // dd($data);
        $row = Reply::insert($data);
        if($row){
            $data['code'] = '1';
            $data['msg'] = '评论成功';
            return json_encode($data);
        }else{
            $data['code'] = '0';
            $data['msg'] = '评论失败';
            return json_encode($data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
