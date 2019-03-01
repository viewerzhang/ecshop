<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsImgs extends Model
{
    protected $table = 'goods_imgs';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $dateFormat = 'U';
  
    
    //多个小图属于一个商品  一对多属于关系
    public function goodsimgs()
    {
        return $this->hasMany('App\Http\Model\Admin\GoodsImgs','goods_id','id');
    }
    

}