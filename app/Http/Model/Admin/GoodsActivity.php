<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsActivity extends Model
{
    protected $table = 'goods_activity';
    protected $primaryKey = 'id';    
    public $timestamps = false;

    public function goods()
    {
        return $this->belongsTo('App\Http\Model\Admin\Goods','goods_id');
    }
}
