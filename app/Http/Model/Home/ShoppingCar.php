<?php

namespace App\Http\Model\Home;

use Illuminate\Database\Eloquent\Model;

class ShoppingCar extends Model
{
    protected $table = 'shopping_car';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function goods()
    {
        return $this->belongsTo('App\Http\Model\Admin\Goods','goods_id');
    }


}
