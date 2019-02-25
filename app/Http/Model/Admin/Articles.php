<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $dateFormat = 'U';
}
