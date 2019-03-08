<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Users;
use App\Http\Requests\LoginDologinRequest;
use App\Http\Requests\TelLoginRequest;
use App\common\Sms;
use Illuminate\Support\Facades\Redis;
use Mail;

use Hash;

class LoginController extends Controller
{
    public function aaa()
    {
        $user = '123';
         Mail::send('home.email.index', ['user' => $user], function ($m) {
            

            $a = $m->to('295367893@qq.com')->subject('Your Reminder!');
            dump($a);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('home.login.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dologin(LoginDologinRequest $request)
    {
        // dd($request->has(['user_name']));
        // if(!$request->has(['user_name'])){
        //     return back()->with('error','用户名或密码不能为空');
        // }
        $user = $request -> post('user_name');
        $pass = $request -> post('password');
        $data = Users::where('user_name', $user)->first();

        if(!$data){
            return redirect('/login')->with('error','您的用户名或密码不正确');
        }
        if (Hash::check($pass, $data->password)) {
            session(['user'=>$data]);
            session(['userlogin'=>true]);
            $uip=[];
            $uip = [ 'user_ip' => $request->getClientIp() ];
            Users::where('user_name', $user)->update($uip);
            return "<script>location.href='/'</script>";
        }
            return redirect('/login')->with('error','您的用户名或密码不正确');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        //退出登录
        session(['user'=>null]);
        session(['userlogin'=>null]);
        return redirect('/');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tellogin()
    {
        return view('home.login.tellogin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teldologin(TelLoginRequest $request)
    {
        if(Redis::get($request->user_phone) == $request->input('yzm')){
            $data = $request->except(['_token','yzm']);
            $phone = $request -> get('user_phone');
            $row = Users::where('user_phone',$phone)->first();
            if($row){
                session(['user'=>$row]);
                session(['userlogin'=>true]);
                $uip=[];
                $uip['user_ip'] = $request->getClientIp();
                Users::where('user_phone', $phone)->update($uip);
                 return "<script>alert('登录成功');location.href='/'</script>";
            }else{
                 return "<script>alert('登录失败');location.href='/yzmlogin'</script>";
            }
        }else{
             return "<script>alert('验证码不正确');location.href='/yzmlogin'</script>";
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function yzm(Request $request)
    {
        // 接收手机号
        $phone = $request->user_phone;
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
    }
}
