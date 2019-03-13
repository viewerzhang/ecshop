<?php

namespace App\Http\Model\Home;

use Illuminate\Database\Eloquent\Model;

class UserAsk extends Model
{
    protected $table = 'user_ask';
    protected $primarKey = 'id';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Http\Model\Home\User','uid');
    }
}
