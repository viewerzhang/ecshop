<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsAttr extends Model
{
    protected $table = 'goods_attr';
    protected $primaryKey = 'id';
    public $timestamps = false;
    // protected $dateFormat = 'U';
    
    //多个商品属性属于一个商品类型 一个商品类型可以有多个属性 
    //商品属性 对应 商品类型 n:1
    public function goodstype(){
        return $this->belongsTo('App\Http\Model\Admin\GoodsType','type_id');
    }
}
