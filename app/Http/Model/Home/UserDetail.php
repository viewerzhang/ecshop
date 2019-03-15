<?php

namespace App\Http\Model\Home;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_detail';
    protected $primarKey = 'id';
    public $timestamps = false;
}
