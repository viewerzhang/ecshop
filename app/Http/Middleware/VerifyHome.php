<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Model\Home\User;

class VerifyHome
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session('userlogin')){
            $user = User::where('id',session('user.id'))->first();
            if($user->user_status == 2){
                return redirect('/login')->with('error','您的账号已被禁用');
            }
            if ($user->password == session('user.password')) {
                return $next($request);
            }
            session(['userlogin'=>false]);
            session(['user'=>null]);
            return redirect('/login')->with('error','您的密码已被修改，请重新登录');
        }
        session(['historyurl'=>$_SERVER["REQUEST_URI"]]);
        return redirect('/login');
    }
}
