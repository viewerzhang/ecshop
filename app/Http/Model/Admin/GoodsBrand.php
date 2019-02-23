<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsBrand extends Model
{
    protected $table = 'goods_brand';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
