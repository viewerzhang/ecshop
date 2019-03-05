<?php

namespace App\Http\Middleware;

use Closure;

class RolePerMiddleware
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
        //知道当前管理员有哪些权限


        //session('user.id');

        //根据uid 找到是什么角色

        //知道有哪些角色后，找到对应的权限

        //推断出当前登录的管理员有哪些权限

        
        return $next($request);
    }
}
