<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsBrand extends Model
{
    protected $table = 'goods_brand';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //一个商品属于一个品牌 一对一属于关系
    public function goods()
    {
        return $this->belongsTo('App\Http\Model\Admin\Goods','brand_id');
    }
}
