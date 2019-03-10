<?php

namespace App\Http\Middleware;

use Closure;
use App\Model\Admin\Admin;

class VerifyAdmin
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
        if(session('adminlogin')){
            $admin = Admin::where('uname',session('admin.uname'))->first();
            if($admin->admin_status == 2){
                return redirect('/admin/login')->with('error','您的账号已被禁用');
            }
            if ($admin->upwd == session('admin.upwd')) {
                return $next($request);
            }
            session(['adminlogin'=>false]);
            session(['admin'=>null]);
            return redirect('/admin/login')->with('error','您的密码已被修改，请重新登录');
        }
        session(['historyurl'=>$_SERVER["REQUEST_URI"]]);
        return redirect('/admin/login');
    }
}
