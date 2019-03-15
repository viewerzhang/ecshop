<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    protected $table = 'navigation';
    protected $primaryKey = 'id';    
    public $timestamps = false;
}
