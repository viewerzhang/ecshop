<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsOrder extends Model
{
    protected $table = 'goods_order';
    protected $primaryKey = 'id';
    public function users()
    {
        return $this->belongsTo('App\Http\Model\Admin\Users','user_id');
    }

    public function shopdetail()
    {
        return $this->hasMany('App\Http\Model\Admin\ShopDetail','order_id');
    }
}
