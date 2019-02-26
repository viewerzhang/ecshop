<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsType extends Model
{
    protected $table = 'goods_type';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $dateFormat = 'U';
}
