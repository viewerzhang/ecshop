<?php

namespace App\Http\Model\Home;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function desc()
    {
        return $this->hasOne('App\Http\Model\Home\UserDetail','uid');
    }
}
