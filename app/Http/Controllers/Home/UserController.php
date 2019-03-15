<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\common\Sms;
use Illuminate\Support\Facades\Redis;
use App\Http\Model\Admin\Users;
use App\Http\Requests\UserStoreRequest;
use App\Http\Model\Home\UserDetail;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 显示注册页
        return view('home.register.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        
        // 判断验证码输入是否正确
        if(Redis::get($request->input('user_phone')) == $request->input('yzm')) {
            // 接收注册数据
            $data = $request->except(['_token','yzm']);
            // 补充数据
            // 密码加密
            $data['password'] = Hash::make($data['password']);
            // 先存空字符串。待用户自己完善信息
            $data['user_email'] = '';
            $data['user_pic'] = '';
            $data['user_status'] = 1;
            // 创建时间存时间戳
            $data['user_created_time'] = time();
            // 每次登陆时ip
            $data['user_ip'] = '';
            // 随机用户昵称
            $data['nicheng'] = str_random(5);
            // 注册用户时ip
            $data['user_create_ip'] = $request->getClientIp();
            // 插入到数据库
            $res = Users::insertGetId($data);
            // 判断数据是否插入成功
            if($res){
                UserDetail::insert(['uid'=>$res,'desc'=>'这个人很懒，没有个性签名','config_title'=>'默认','config_desc'=>'默认','title'=>'默认']);
                $user = Users::where('user_phone',$data['user_phone'])->first();
                session(['userlogin'=>true]);
                session(['user'=>$user]); 
                session(['login'=>true]);
                session(['login'=>'恭喜您，注册成功']);
                return "<script>location.href='/'</script>";
            }else{
                return "<script>alert('注册失败');location.href='/register'</script>";
            }
        }else{
            return back()->with('error','您的验证码不正确');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function yzm(Request $request)
    {

        // 接收手机号
        $phone = $request->user_phone;
        $res=Users::where('user_phone',$phone)->first();
        if(empty($res)){
            // 生成验证码
            $yzm = rand(1000,9999);
            // 存到redis中
            Redis::setex($phone,120,$yzm);
            // 使用接口发送短信
            Sms::sms($phone,$yzm);
            // 返回值code为0
            $data = [
                'code' => 0,
            ];
            return $data;
        }else{
            $data=['code'=>1];
            return $data;
        }
    }
}
