<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'id';
    public $timestamps = false;

     //一个角色对应多个权限 一个权限对应多个角色 多对多关系
    public function permission()
    {
    	return $this->belongsToMany('App\Http\Model\Admin\Permission','role_per','role_id','per_id');
    }
}
