@extends('layout.home')
@section('content')
<style type="text/css">
.qty{
    display: none;
}
</style>
<link rel="stylesheet" href="/static/home/index/css/style.css">
        <div class="shop_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shop_menu shop_menu_tk ">
                            <ul class="cramb_area cramb_area_2 cramb_area_ktp">
                                <li><a href="index.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">主页/</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的收藏</font></font></a></li>
                            </ul>
                            <hr class="hrtop">
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="wishlist-area" style="margin-top: -90px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></th>
                                                <th class="product-name"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></span></th>
                                                <th class="product-price"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 单价 </font></font></span></th>
                                                <th class="product-stock-stauts"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 库存状况 </font></font></span></th>
                                                <th class="product-add-to-cart"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">操作 </font></font></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-thumbnail"><a href="#"><img src="img/cart/2.jpg" alt=""></a></td>
                                                <td class="product-name"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor</font></font></a></td>
                                                <td class="product-price"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">£125.00</font></font></span></td>
                                                <td class="product-stock-status"><span class="wishlist-in-stock"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">有现货</font></font></span></td>
                                                <td class="product-add-to-cart">
                                                    <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 添加到购物车</font></font></a>
                                                    <a href="#" class="sc"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 删除商品</font></font></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail"><a href="#"><img src="img/cart/3.jpg" alt=""></a></td>
                                                <td class="product-name"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor</font></font></a></td>
                                                <td class="product-price"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">£90.00</font></font></span></td>
                                                <td class="product-stock-status"><span class="wishlist-in-stock"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">有现货</font></font></span></td>
                                                <td class="product-add-to-cart"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 添加到购物车</font></font></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection