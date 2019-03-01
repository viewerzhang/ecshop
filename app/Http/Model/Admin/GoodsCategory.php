<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsCategory extends Model
{
    protected $table = 'goods_category';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getCatenameaAttribute()
    {
        $comma = $this->cate_path; 
        $count = substr_count($comma,',')-1;
        $str = str_repeat('&nbsp;',$count*8);
        return $str.'|--'.$this->cate_name;
    }

    //商品属于分类 一对一属于关系
    public function goods()
    {
        return $this->belongsTo('App\Http\Model\Admin\Goods','cate_id','id');
    }

    // 判断是第三级,返回表单禁止
    public function getCatejzAttribute()
    {
        $comma = $this->cate_path; 
        $count = substr_count($comma,',');
        if($count == 3){
            return 'disabled';
        }
    }

    // 判断不是第三级,返回表单禁止
    public function getCatejzNoAttribute()
    {
        $comma = $this->cate_path; 
        $count = substr_count($comma,',');
        if($count != 3){
            return 'disabled';
        }
    }
}
