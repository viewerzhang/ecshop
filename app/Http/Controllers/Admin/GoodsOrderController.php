<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\{GoodsOrder,Users};

class GoodsOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = $request->input('key');
        $data = GoodsOrder::where('rand_id','like',"%{$key}%")->orderBy('created_at','desc')->paginate(8);
        return view('admin.goodsorder.index',['key'=>$key,'data'=>$data]);
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
        $back = $_SERVER['HTTP_REFERER'];
        $data = GoodsOrder::find($id);
        return view('admin.goodsorder.show',['back'=>$back,'data'=>$data]);
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
        $data = GoodsOrder::find($id);
        if( $data->order_status == '0' ){
            $data->order_status = '1';
            $judge = $data->save();
            if($judge){
                $arr = [
                    'code'=>'1'
                ];
                return json_encode($arr);
            }else{
                $arr = [
                    'code'=>'2'
                ];
                return json_encode($arr);
            }
        }else{
            $arr = [
                'code'=>'2'
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
        $data = GoodsOrder::find($id);
        if($data->order_status != '3' && $data->order_status != '2' ){
            $data->order_status = '3';
            $molin = $data->order_sum;
            $user = Users::find($data->user_id);
            $user->user_balance = $user->user_balance + $molin;
            $judge2 = $user->save();
            $judge = $data->save();
            if($judge && $judge2){
                $arr = [
                    'code'=>'1'
                ];
                return json_encode($arr);
            }else{
                $arr = [
                    'code'=>'2'
                ];
                return json_encode($arr);
            }
        }else{
            $arr = [
                'code'=>'2'
            ];
            return json_encode($arr);
        }
    }
}
