<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Admin;
use App\Http\Model\Admin\Role;
use App\common\FileUtil;
use App\Http\Requests\AdminsRequest;
use Hash;
use DB;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            $key = $request->input('key','');
            $data = Admin::where('uname','like',"%{$key}%")->paginate(8);;
            return view('admin.admins.index',['key'=>$key,'data'=>$data]);;
        }catch(\Exception $err){
            return view('error.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            return view('admin.admins.create');
        }catch(\Exception $err){
            return view('error.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminsRequest $request)
    {
        try{
            $data = $request->except(['_token','rupwd','lspic']);
            if(array_key_exists('admin_status', $data)){
                $data['admin_status'] = '1';
            }else{
                $data['admin_status'] = '2';
            }
            $data['created_time'] = time();
            $data['last_time'] = time();
            $data['admin_historyip'] = '0';
            $data['admin_ip'] = '0';
            // 将图片从临时文件区移动到静态文件区
            $newFile = substr($data['upic'], strrpos($data['upic'], '/'));
            $tempFile = public_path('static/admin/images/goodsbrand/temp'.$newFile);
            $staticFile = public_path($data['upic']);
            $newTempFile = str_replace('\\', '/', $tempFile);
            $newStaticFile = str_replace('\\', '/', $staticFile);
            $fu = new FileUtil();
            $fu->moveFile($newTempFile, $newStaticFile);
            $data['upwd'] =  Hash::make($data['upwd']);

            $judge = Admin::insert($data);
            if($judge){
                return "<script>var a = confirm('管理员牌成功，是否继续添加？');a ? location.href='/admin/admins/create' : location.href='/admin/admins'</script>";
            }else{
                return redirect('/admin/admins/create')->with('error','对不起因为系统问题添加失败，请稍后再试或联系网站管理员！');
            }
        }catch(\Exception $err){
            return view('error.index');
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
        try{
            $data = Admin::find($id);
            if($data->admin_status == '1'){
                $data->admin_status = '2';
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
                $data->admin_status = '1';
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
        }catch(\Exception $err){
            return view('error.index');
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


    public function files(Request $request)
    {
        try{
            if($request->hasFile('pic')){
                $files = $request->file('pic');
                $fileName = $files->store('admin/images/admins/temp');
                $trueFileName = str_replace('/temp', '', $fileName);
                $arr = [
                    'src'=>asset('static/'.$fileName),
                    'hdsrc'=>'static/'.$trueFileName,
                    'code'=>'1'
                ];
                return json_encode($arr);
            }else{
                $arr = [
                    'code'=>'0',
                ];
                return json_encode($arr);
            }
        }catch(\Exception $err){
            return view('error.index');
        }
    }

    //添加角色
    public function userrole(Request $request,$id)
    {
        $id = $request->id; 
        //dd($id);
        //用户的id
        $uname = Admin::find($id);
        //dd($uname);
        //role的id
        $roles = Role::all();

        $user_role = $uname->role;
        //dd($user_role);
        $ur = [];
        foreach($user_role as $k=>$v){
            $ur[] = $v->role_name;
        }

        return view('admin/admins/userrole',['uname'=>$uname,'roles'=>$roles,'ur'=>$ur]);
    }

    //接受添加角色的值
    public function douserrole(Request $request,$id)
    {

        //用户的id
        $user_id = $request->id;
        //dump($user_id);
        //角色的id
        $role_id = $request->role_id;

        DB::table('user_role')->where('user_id',$user_id)->delete();
        

        $info=[];
        foreach($role_id as $k=>$v){
            $arr=[];
            $arr['user_id'] = $user_id;
            $arr['role_id'] = $v;
            $info[] = $arr;
        }

        $key = $request->input('key','');
        $data = Admin::where('uname','like',"%{$key}%")->paginate(8);;

        $res = DB::table('user_role')->insert($info);

            if($res){
                return redirect('/admin/admins')->with('success','添加成功');
                }else{
                   return back()->with('error','添加失败');   
                }

     
    }
}
