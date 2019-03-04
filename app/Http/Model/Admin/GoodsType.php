<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsType extends Model
{
    protected $table = 'goods_type';
    protected $primaryKey = 'id';
    public $timestamps = false;
    // protected $dateFormat = 'U';

    //一个类型多个属性 一对多 
    // public function goodsattr()
    // {
    // 	return $this->hasmany('App\Http\Model\Admin\GoodsAttr','type_id');
    // }


    public function goodsattr()
    {
        return $this->hasMany('App\Http\Model\Admin\GoodsAttr','type_id');
    }
}
