<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\GoodsBrand;
use App\Http\Model\Admin\Navigation;
use App\Http\Model\Admin\Advertising;
use App\Http\Model\Admin\Links;
use App\Http\Model\Admin\Lunbo;

class HomeController extends Controller
{
    public function index()
    {
        $data_brand = GoodsBrand::get();
        $data_dh = Navigation::get();
        $data_ad = Advertising::get();
        $data_links = Links::get();
        $data_lunbo = Lunbo::get();

        return view('layout/home',['data_lunbo'=>$data_lunbo,'data_brand'=>$data_brand,'data_dh'=>$data_dh,'data_ad'=>$data_ad,'data_links'=>$data_links]);
    }
}
