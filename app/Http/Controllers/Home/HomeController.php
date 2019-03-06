<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\{GoodsBrand,Advertising,Links,Lunbo,Goods,Articles};

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

            return view('home.index',['data_goods_top'=>$data_goods_top,'data_lunbo'=>$data_lunbo,'data_brand'=>$data_brand,'data_ad'=>$data_ad,'data_links'=>$data_links,'data_articles'=>$data_articles]);
        }catch(\Exception $err){
            return view('error.index');
        }
    }
}
