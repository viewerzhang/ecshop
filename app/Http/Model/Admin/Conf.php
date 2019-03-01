<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Conf extends Model
{
    protected $table = 'conf';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
