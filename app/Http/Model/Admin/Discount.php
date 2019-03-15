<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table = 'discount';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function coupons()
    {
        return $this->hasMany('App\Http\Model\Home\Coupons','did');
    }
}
