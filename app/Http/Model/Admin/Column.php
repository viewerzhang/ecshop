<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    protected $table = 'column';
    protected $primaryKey = 'id';    
    public $timestamps = false;
}
