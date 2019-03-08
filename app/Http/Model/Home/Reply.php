<?php

namespace App\Http\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'goods_reply';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
