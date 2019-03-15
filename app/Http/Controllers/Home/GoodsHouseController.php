<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\{Home\GoodsHouse,Admin\Goods};

class GoodsHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GoodsHouse::where('uid',session('user.id'))->paginate(5);
        return view('home.goodshouse.index',['data'=>$data]);
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
        // 查看是否已有记录
        $judge = GoodsHouse::where('uid',$data['uid'])->where('gid',$data['gid'])->first();
        if($judge){
            // 用户已有同商品的收藏
            $arr = [
                'code' => '0',
                'msg' => '您已添加该商品，喜欢就购买吧！'
            ];
            return json_encode($arr);
        }
        // 判断是否有用户收藏的商品
        $judge = Goods::where('id',$data['gid'])->first();
        if(!$judge){
            // 用户已有同商品的收藏
            $arr = [
                'code' => '0',
                'msg' => '该商品不存在，或已被删除'
            ];
            return json_encode($arr);
        }
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
        $judge = GoodsHouse::where('id',$id)->where('uid',session('user.id'))->first();
        if(!$judge){
            $arr = [
                'code' => '0',
                'msg' => '对不起，您并没有收藏这一件商品'
            ];
            return json_encode($arr);
        }
        try{
            GoodsHouse::destroy($id);
        }catch(\Exception $err){
            $arr = [
                'code' => '0',
                'msg' => '对不起，删除失败'
            ];
            return json_encode($arr);
        }
        $arr = [
            'code' => '1',
            'msg' => '删除成功'
        ];
        return json_encode($arr);
    }
}
