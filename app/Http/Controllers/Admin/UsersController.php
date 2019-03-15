<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Users;
use App\common\getIp;

class UsersController extends Controller
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
        return view('admin.users.index',['key'=>$key,'data'=>$data]);
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
        $data = Users::find($id);
        if($data->user_status == '1'){
            $data->user_status = '2';
            try{
                $data->save();
            }catch(\Exception $err){
                $arr = [
                    'code' => '0'
                ];
                return json_encode($arr);
            }
            $arr = [
                'code' => '1',
                'title' => '禁止',
                'btn' => '<i class="fa fa-edit"></i> 激活 '
            ];
            return json_encode($arr);
        }else{
            $data->user_status = '1';
            try{
                $data->save();
            }catch(\Exception $err){
                $arr = [
                    'code' => '0'
                ];
                return json_encode($arr);
            }
            $arr = [
                'code' => '1',
                'title' => '激活',
                'btn' => '<i class="fa fa-edit"></i> 禁止 '
            ];
            return json_encode($arr);
        }
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
