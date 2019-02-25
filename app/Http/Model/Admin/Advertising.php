<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
    protected $table = 'advertising';
    protected $primaryKey = 'id';    
    public $timestamps = false;
}