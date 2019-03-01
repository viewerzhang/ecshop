<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsType extends Model
{
    protected $table = 'goods_type';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $dateFormat = 'U';

    //一个类型多个属性 一对多 
    public function goodsattr()
    {
    	return $this->hasmany('App\Http\Model\Admin\GoodsAttr','type_id','id');
    }

    //一个商品属于一个类型 一对一属于关系
    public function goods()
    {
        return $this->belongsTo('App\Http\Model\Admin\Goods','type_id','id');
    }
}
