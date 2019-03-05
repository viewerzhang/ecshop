<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Conf;
use App\common\FileUtil;

class ConfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Conf::first();
        return view('admin.conf.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

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
        $old = $request->except(['_token','_metch']);
        $conf = Conf::first();
        // dd($conf);
        $conf->$id =  $old['metch'];
        $judge = $conf->save();
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

    public function files(Request $request)
    {
        if($request->hasFile('pic')){
            $files = $request->file('pic');
            $fileName = $files->store('admin/images/conf');
            $conf = Conf::first();
            $oldFile = $conf->conf_pic;
            $conf->conf_pic = 'static/'.$fileName;
            $row = $conf->save();
            if($row){
                $fu = new FileUtil();
                $fu->unlinkFile(public_path($oldFile));
                $arr = [
                'src'=>asset('static/'.$fileName),
                'code'=>'1'
                ];
                return json_encode($arr);
            }
        }else{
            $arr = [
                'code'=>'0',
            ];
            return json_encode($arr);
        }
    }


}
