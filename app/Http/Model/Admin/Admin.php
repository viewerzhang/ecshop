<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //一个用户对应多个角色 一个角色对应多个用户 多对多关系
    public function role()
    {
    	return $this->belongsToMany('App\Http\Model\Admin\Role','user_role','user_id','role_id');
    }
}
