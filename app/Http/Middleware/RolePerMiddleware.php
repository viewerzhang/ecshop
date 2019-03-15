<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Model\Admin\Admin;
use App\Http\Model\Admin\Role;
use App\Http\Model\Admin\Permission;
use DB;

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

        //dump($users);
        //session('user.id');
        $users = Admin::find(session('admin.id'));
        //dd($users);

        //模拟一下session
        /*$r = DB::table('admin')->where('id', '8')->first();;

        $users = Admin::find($r->id);*/
        //dd($users);
        
        //根据uid 找到是什么角色
        $userrole = $users->role;
        //dd($userrole);
        //知道有哪些角色后，找到对应的权限 丢到一个数组中，以方便去重
        $info=[];
        foreach($userrole as $k=>$v){
            $data = $v->permission;
        //dd($data);
            foreach($data as $k=>$v){
                $rs = $v->per_url;
                //dump($rs);
                $info[]=$rs;

            }
            
        }
        //dump($info);
        //推断出当前登录的管理员有哪些权限 (去重复查看所有列表权限)
        $arrper = array_unique($info); 
        //dump($arrper);
        //获取用户点击菜单的路径地址信息(per_url)
        $url = \Route::current()->getActionName();
        //dump($url);

        if(in_array($url, $arrper)){

            return $next($request);

        }else{

            return response()->view('admin/admins/remind');

            //echo '没有权限';
        }
        
    }
}
