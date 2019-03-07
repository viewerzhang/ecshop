<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\{GoodsBrand,Advertising,Links,Lunbo,Goods,Articles,Conf,GoodsCategory,GoodsActivity,Column};


class HomeController extends Controller
{
    public function index()
    {
        try{
            $data_goods_top = Goods::orderBy('goods_sales','asc')->get();
            $data_brand = GoodsBrand::get();
            $data_ad = Advertising::get();
            $data_links = Links::get();
            $data_lunbo = Lunbo::get();
            $data_articles = Articles::get();
            $data_cate = GoodsCategory::where('cate_pid','<>','0')->get();
            $data_goods = Goods::get();
            $data_buxianshi = GoodsActivity::where('activity_status','1')->where('time_status','2')->get();
            $data_xianshi  = GoodsActivity::where('activity_status','1')->where('time_status','1')->get();
            foreach($data_xianshi as $k => $v){
                if(strtotime($data_xianshi[0]->due_time)-time() > 0){
                    $linshi = $v;
                    $linshi->time = strtotime($data_xianshi[0]->due_time)-time();
                    $xianshi[] = $linshi;
                }   
            }
            $sum = count($data_goods);
            for($i = 0; $i <= 6;$i++){
                $data_sj[] = $data_goods[mt_rand(0,$sum-1)];
            }
            return view('home.index',['xianshi'=>$xianshi,'data_buxianshi'=>$data_buxianshi,'data_cate'=>$data_cate,'data_sj'=>$data_sj,'data_goods_top'=>$data_goods_top,'data_lunbo'=>$data_lunbo,'data_brand'=>$data_brand,'data_ad'=>$data_ad,'data_links'=>$data_links,'data_articles'=>$data_articles]);
        }catch(\Exception $err){
            return view('error.index');
        }
    }

    public static function config()
    {
        $data_conf = Conf::first();
        return $data_conf;
    }
    public static function data_column()
    {
        $data_column = Column::get();
        return $data_column;
    }
}
