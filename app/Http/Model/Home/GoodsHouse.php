<?php

namespace App\Http\Model\Home;

use Illuminate\Database\Eloquent\Model;

class GoodsHouse extends Model
{
    protected $table = 'goods_house';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function goods()
    {
        return $this->belongsTo('App\Http\Model\Admin\Goods','gid');
    }
}
