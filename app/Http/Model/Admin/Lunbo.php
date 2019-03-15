<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Lunbo extends Model
{
    protected $table = 'lunbo';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $dateFormat = 'U';
}
