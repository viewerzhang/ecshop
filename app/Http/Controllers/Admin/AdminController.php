<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Admin;
use App\common\Sms;
use Illuminate\Support\Facades\Redis;
use Hash;

class AdminController extends Controller
{
    /**
     * 显示个人
     */
    public function index()
    {
        try{
            $data = Admin::find(session('admin.id'));
            return view('admin.admin.index',['data'=>$data]);
        }catch(\Exception $err){
            return view('error.index');
        }
    }

    /**
     * 展示修改密码页面
     */
    public function create()
    {
        try{
            return view('admin.admin.editpwd');
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
    public function store(Request $request)
    {
        // var_dump($request->all());
    }

    /**
     * 展示修改头像页面
     */
    public function show($id)
    {
        try{
            return view('admin.admin.editpic');
        }catch(\Exception $err){
            return view('error.index');
        }
    }

    /**
     * 展示修改手机页面
     */
    public function edit($id)
    {
        try{
            return view('admin.admin.editphone');
        }catch(\Exception $err){
            return view('error.index');
        }
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
        try{
            $phone = $request->input('dqphone');
            $data = Admin::find($id);
            // 判断用户当前输入手机是否匹配
            if($data->admin_phone == $phone){
                // 判断是否发送过
                if(Redis::get($data->admin_phone)){
                    // 已发送过短信区间，设置状态码不再发送
                    $arr = [
                        'code' => '9',
                    ];
                    // 返回状态码到客户端
                    return json_encode($arr);
                }
                // 成功匹配且没有发送过短信区间
                // 生成验证码
                $cap = mt_rand(1000,9999);
                // 储存到redis中并设置3分钟有效时间
                $error = Redis::setex($data->admin_phone,180,$cap);
                // 判断储存验证码过程是否正常
                if(!$error){
                    $arr = [
                        'code' => '2',
                    ];
                    // 如果发生错误不在执行发送短信，并返回客户端错误信息
                    return json_encode($arr);
                }
                // 没有错误发送短信验证码
                $code = Sms::sms($data->admin_phone,$cap);
                // 接受运营商验证码是否发送成功信息
                $status = json_decode($code,true);
                // 判断运营商发送状态
                if($status['errmsg'] == 'OK'){
                    $arr = [
                        'code' => '1', // 1表示验证成功发送验证码成功
                    ];
                }else{
                    $arr = [
                        'code' => '2', // 2表示验证成功发送验证码失败
                    ];
                }
                // 生成并返回状态码
                return json_encode($arr);
            }else{
                // 错误直接返回状态码
                $arr = [
                    'code' => '0', // 0表示验证失败，不予发送验证码
                ];
                return json_encode($arr);
            }
        }catch(\Exception $err){
            return view('error.index');
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


    public function revise(Request $request,$id)
    {
        try{
            // 获取用户提交数据，去除token值
            $data = $request->except('_token');
            // 重新更新用户信息
            $history = Admin::find($id);
            // 对比用户提交手机号与更新后的信息是否一致
            if($history->admin_phone == $data['dqphone']){
                // 对比用户输入验证码是否正确
                if(Redis::get($history->admin_phone) == $data['code']){
                    // 身份确认完成，修改数据库信息
                    $history->admin_phone = $data['newphone'];
                    // 更新到数据库中
                    $judge = $history->save();
                    // 判断结果是否更新完成
                    if($judge){
                        // 更新成功删除Redis中用户验证码
                        Redis::del($data['dqphone']);
                        $arr = [
                            // code 1 代表修改成功
                            'code' => '1'
                        ];
                        // 修改手机号码成功返回状态码
                        return json_encode($arr);
                    }else{
                        $arr = [
                            // code 2 代表验证成功但服务器问题修改失败
                            'code' => '2'
                        ];
                        // 返回状态码
                        return json_encode($arr);
                    }
                }else{
                    // 验证码不匹配
                    $arr = [
                        // code 3 代表验证码错误
                        'code' => '3'
                    ];
                    return json_encode($arr);
                }
            }else{
                // 用户提交手机号时与数据库原始手机号不符
                $arr = [
                    // code 4 代表原始手机号不正确
                    'code' => '4'
                ];
                return json_encode($arr);
            }
        }catch(\Exception $err){
            return view('error.index');
        }
    }

    /**
     * 修改头像
     */
    public function pic(Request $request,$id)
    {
        try{
            if($request->hasFile('pic')){
                $files = $request->file('pic');
                $fileName = $files->store('admin/images/admin');
                $fileName = 'static/'.$fileName;
                $data = Admin::find($id);
                $historyFile = $data->upic;
                $data->upic = $fileName;
                $judge = $data->save();
                if($historyFile != 'static/admin/images/admin/default.jpg'){
                    $fileUrl = public_path($historyFile);
                    if(file_exists($fileUrl)){
                        unlink($fileUrl);
                    } 
                }
                if(!$judge){
                    $arr = [
                        'code' => '0',
                    ];
                    return json_encode($arr);
                }
                $arr = [
                    'src'=>asset($fileName),
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



    public function editpwd(Request $request,$id)
    {
        try{
            // 获取用户提交数据，去除token值
            $data = $request->except('_token');
            // 重新更新用户信息
            $history = Admin::find($id);
            // 对比用户提交手机号与更新后的信息是否一致
            if($history->admin_phone == $data['dqphone']){
                // 对比用户输入验证码是否正确
                if(Redis::get($history->admin_phone) == $data['code']){
                    // 身份确认完成，修改数据库信息
                    $history->upwd =  Hash::make($data['newpwd']);
                    // 更新到数据库中
                    $judge = $history->save();
                    // 判断结果是否更新完成
                    if($judge){
                        // 更新成功删除Redis中用户验证码
                        Redis::del($data['dqphone']);
                        $arr = [
                            // code 1 代表修改成功
                            'code' => '1'
                        ];
                        // 修改手机号码成功返回状态码
                        return json_encode($arr);
                    }else{
                        $arr = [
                            // code 2 代表验证成功但服务器问题修改失败
                            'code' => '2'
                        ];
                        // 返回状态码
                        return json_encode($arr);
                    }
                }else{
                    // 验证码不匹配
                    $arr = [
                        // code 3 代表验证码错误
                        'code' => '3'
                    ];
                    return json_encode($arr);
                }
            }else{
                // 用户提交手机号时与数据库原始手机号不符
                $arr = [
                    // code 4 代表原始手机号不正确
                    'code' => '4'
                ];
                return json_encode($arr);
            }
        }catch(\Exception $err){
            return view('error.index');
        }
    }

    function login()
    {
        return view('admin.admin.login');
    }


    function delogin(Request $request)
    { 
        $data = $request->except(['_token']);
        $admin = Admin::where('uname',$data['uname'])->first();
        if($admin->uname != $data['uname'] ){
            return back()->with('error','您的账号或密码不正确');
        }
        if ($admin->admin_status == 2) {
            return back()->with('error','您的账号已被禁用');
        }
        if (Hash::check($data['upwd'], $admin['upwd'])) {
            session(['adminlogin'=>true]);
            session(['admin'=>$admin]);
            $historyUrl = session('historyurl');
            return redirect($historyUrl ?? '/admin/index');
        }
            return back()->with('error','您的账号或密码不正确');
    }

    function outlogin()
    {
        session(['adminlogin' => false]);
        session(['admin' => null]);
        return redirect('/admin/login');
    }


    
}
