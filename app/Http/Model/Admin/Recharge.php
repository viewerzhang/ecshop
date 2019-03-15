<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    protected $table = 'recharge';
    protected $primaryKey = 'id';    
    public $timestamps = false;
}
