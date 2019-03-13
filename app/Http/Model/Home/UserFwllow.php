<?php

namespace App\Http\Model\Home;

use Illuminate\Database\Eloquent\Model;

class UserFwllow extends Model
{
    protected $table = 'user_fwllow';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Http\Model\Home\User','fid');
    }
}
