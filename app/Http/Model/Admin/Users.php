<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public function useraddr()
    {
        return $this->hasMany('App\Http\Model\Admin\UserAddr','uid');
    }
    public $timestamps = false;
}
