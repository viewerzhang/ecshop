<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Home\GoodsHouse;

class GoodsHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GoodsHouse::get();
        return view('home.goodshouse.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!session('userlogin')){
            // 返回错误信息，原因用户没有登录
            $arr = [
                'code' => '0',
                'msg' => '对不起您还未登录' 
            ];
            return json_encode($arr);
        }

        // 去除多余信息
        $data = $request->except(['_token']);
        // 获取用户的ID
        $data['uid'] = session('user.id');
        //添加到收藏表
        try{
            GoodsHouse::insert($data);
        }catch(\Exception $err){
            // 插入失败返回错误信息
            $arr = [
                'code' => '0',
                'msg' => '对不起，添加收藏失败'
            ];
            return json_encode($arr);
        }
        // 插入成功返回成功信息
        $arr = [
            'code' => '1',
            'msg' => '添加收藏成功'
        ];
        return json_encode($arr);
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
