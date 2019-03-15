<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class ShopDetail extends Model
{
    protected $table = 'shop_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function goods()
    {
        return $this->belongsTo('App\Http\Model\Admin\Goods','goods_id');
    }

    public function goodsorder()
    {
        return $this->belongsTo('App\Http\Model\Admin\GoodsOrder','order_id');
    }
}
