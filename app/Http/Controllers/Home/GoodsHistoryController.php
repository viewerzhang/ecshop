<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Home\GoodsHistory;

class GoodsHistoryController extends Controller
{
    public function index()
    {
        $data = GoodsHistory::where('uid',session('user.id'))->orderBy('px','desc')->paginate(5);
        return view('home.goodshistory.index',['data'=>$data]);
    }

    public function del($id)
    {
        $judge = GoodsHistory::where('id',$id)->where('uid',session('user.id'))->first();
        if(!$judge){
            $arr = [
                'code' => '0',
                'msg' => '对不起，您并没有浏览这一件商品'
            ];
            return json_encode($arr);
        }
        try{
            GoodsHistory::destroy($id);
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
