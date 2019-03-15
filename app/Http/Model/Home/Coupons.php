<?php

namespace App\Http\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $table = 'discount_detail';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function discount()
    {
        return $this->belongsTo('App\Http\Model\Admin\Discount','did');
    }

    public function user()
    {
        return $this->belongsTo('App\Http\Model\Home\User','uid');
    }
}
