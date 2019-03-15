<?php

namespace App\Http\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'goods_reply';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function goods()
    {
        return $this->belongsTo('App\Http\Model\Admin\Goods','gid');
    }
    public function users()
    {
        return $this->belongsTo('App\Http\Model\Home\User','uid');
    }
}
