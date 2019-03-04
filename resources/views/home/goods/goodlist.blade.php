@extends('layout.home')
@section('content')

<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop_menu">
                    <ul class="cramb_area cramb_area_5">
                        <li>
                            <a href="index.html">
                                Home /
                            </a>
                        </li>
                        <li class="br-active">
                            <a href="#">
                                Shop
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--bar area start-->
        <div class="row">
            <div class="col-md-3">
                <div class="category-widget-menu">
                    <h2 class="cat-menu-title text-uppercase">
                        categories
                    </h2>
                    <div class="menu-categories-container">
                        <ul class="menu-categories">
                            <li>
                                <a href="#">
                                    Accessories
                                </a>
                            </li>
                            <li class="expandable">
                                <a href="#">
                                    Electronic
                                </a>
                                <ul class="category-sub">
                                    <li>
                                        <a href="#">
                                            Hoodies (17)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            T-shirts (3)
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="expandable">
                                <a href="#">
                                    Headlight
                                </a>
                                <ul class="category-sub">
                                    <li>
                                        <a href="#">
                                            Hats (10)
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="expandable">
                                <a href="#">
                                    Mirriors (12)
                                </a>
                                <ul class="category-sub">
                                    <li>
                                        <a href="#">
                                            Albums(1)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Singles(3)
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    Posters
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Electronic
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="category-widget-menu">
                            <h2 class="cat-menu-title text-uppercase">
                                size
                            </h2>
                            <div class="menu-categories-container">
                                <ul class="menu-categories">
                                    <li>
                                        <a href="#">
                                            L (1)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            M (1)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            S (1)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            XL (1)
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="category-widget-menu">
                            <h2 class="cat-menu-title text-uppercase">
                                color
                            </h2>
                            <div class="menu-categories-container">
                                <ul class="menu-categories">
                                    <li>
                                        <a href="#">
                                            Gold (1)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Green (1)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            White (1)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Yellow (1)
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-sidebar-dr">
                            <aside class="single-sidebar">
                                <h3>
                                    Filter By Price
                                </h3>
                                <div class="info_widget">
                                    <div class="price_filter">
                                        <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                            <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;">
                                            </div>
                                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 0%;">
                                            </span>
                                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 100%;">
                                            </span>
                                        </div>
                                        <div class="price_slider_amount">
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price">
                                        </div>
                                        <div class="amount-range">
                                            <p>
                                                Price:
                                            </p>
                                            <input type="submit" value="Filter">
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-sidebar-dr">
                            <aside class="single-sidebar single-sidebar-2 single-sidebar-c3 ">
                                <h3>
                                    Compare
                                </h3>
                                <ul class="products-list" data-lang="">
                                    <li class="list_empty">
                                        No products to compare
                                    </li>
                                </ul>
                                <div class="amount-range">
                                    <a class="clear-all" href="#" data-product_id="all">
                                        Clear all
                                    </a>
                                    <input type="submit" value="COMPARE">
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-sidebar-dr">
                            <aside class="single-sidebar single-sidebar-vg">
                                <h3>
                                    Products Tags
                                </h3>
                                <div class="compare_content compare_content_2">
                                    <div class="new_tag">
                                        <a href="#">
                                            Clothing
                                        </a>
                                        <a href="#">
                                            Enim
                                        </a>
                                        <a href="#">
                                            Fashion
                                        </a>
                                        <a href="#">
                                            Glasses
                                        </a>
                                        <a href="#">
                                            Hats
                                        </a>
                                        <a href="#">
                                            Hoodies
                                        </a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="category-widget-menu">
                            <h2 class="cat-menu-title text-uppercase">
                                On Sale
                            </h2>
                            <div class="all-pros-ex all-pros-ex-2">
                                <div class="llc_pro">
                                    <div class="sinle_pic_3">
                                        <a href="#">
                                            <img class="primary-img" src="img/product-pic/product_pic_7.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="product_content_2">
                                    <div class="usal_pro">
                                        <div class=" product_name_new">
                                            <h2>
                                                <a href="#">
                                                    Cras nec nisl ut era
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="product_price product_price_new product_price_new_3">
                                        </div>
                                        <div class="price_box price_box_new price_box_new_3">
                                            <span class="old- price old- price-3">
                                                $250.00
                                            </span>
                                            <span class="spical-price">
                                                $200.00
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="all-pros-ex all-pros-ex-2">
                                <div class="llc_pro">
                                    <div class="sinle_pic_3">
                                        <a href="#">
                                            <img class="secondary-img" src="img/top-pic/top_pic_7.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="product_content_2">
                                    <div class="usal_pro">
                                        <div class=" product_name_new">
                                            <h2>
                                                <a href="#">
                                                    Metus nisi posuere n
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="product_price product_price_new product_price_new_3">
                                        </div>
                                        <div class="price_box price_box_new price_box_new_3">
                                            <span class="old- price old- price-3">
                                                $250.00
                                            </span>
                                            <span class="spical-price">
                                                $200.00
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="all-pros-ex all-pros-ex-2">
                                <div class="llc_pro">
                                    <div class="sinle_pic_3">
                                        <a href="#">
                                            <img class="primary-img" src="img/top-pic/top_pic_1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="product_content_2">
                                    <div class="usal_pro">
                                        <div class=" product_name_new">
                                            <h2>
                                                <a href="#">
                                                    Nam fringilla
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="product_price product_price_new product_price_new_3">
                                        </div>
                                        <div class="price_box price_box_new price_box_new_3">
                                            <span class="old- price old- price-3">
                                                $200.00
                                            </span>
                                            <span class="spical-price">
                                                $150.00
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="bar">
                    <p class="result_show">
                        Showing 1–15 of 21 results
                    </p>
                    <div class="bar_box">
                        <form action="#">
                            <select>
                                <option value="Default sorting">
                                    Default sorting
                                </option>
                                <option value="Sort by popularity">
                                    Sort by popularity
                                </option>
                                <option value="Sort by average rating">
                                    Sort by average rating
                                </option>
                                <option value="Sort by newness">
                                    Sort by newness
                                </option>
                                <option value="Sort by price: low to high">
                                    Sort by price: low to high
                                </option>
                                <option value="Sort by price: low to low">
                                    Sort by price: low to low
                                </option>
                            </select>
                        </form>
                    </div>
                    <div class="right_area">
                        <!-- Nav tabs -->
                        <ul class="retabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home" role="tab" data-toggle="tab" aria-expanded="true">
                                    <i class="fa fa-th">
                                        Grid
                                    </i>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#profile" role="tab" data-toggle="tab" aria-expanded="false">
                                    <i class="fa fa-list">
                                        List
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="row">

                        	<!-- 单个商品开始 -->
                        	@foreach($data as $k=>$v)
                            <div class="col-md-4 col-sm-4">
                                <div class="all-pros all-pros-3 all-pros-latest">
                                    <div class="sinle_pic">
                                        <a href="/goodlist/{{$v->id}}">
                                            <img class="primary-img" src="/static/admin/images/goods_img/{{$v->goods_img}}"
                                            alt="" style="width: 260px;height: 170px">

                                            
                                            <img class="secondary-img" src="/static/admin/images/goods_imgs/{{ $v->goodsimgs[0]->goods_imgs }}" width="260" height="170" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action" data-toggle="modal" data-target="#myModal">
                                        <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip"
                                        title="" data-original-title="点击图片查看具体详情">
                                            快速查看
                                        </button>
                                    </div>
                                    <div class="product_content">
                                        <div class="usal_pro">
                                            <div class="product_name_2">
                                                <h2 style="width: 250px;height: 50px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">
                                                    <a href="#" >
                                                        {{$v->goods_name}}
                                                    </a>
                                                </h2>
                                            </div>
                                            <div class="product_price">
                                                <div class="price_rating">
                                                    <a href="#">
                                                        <i class="fa fa-star">
                                                        </i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-star">
                                                        </i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-star">
                                                        </i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-star">
                                                        </i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-star">
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="price_box">
                                                <span class="spical-price">
                                                    ￥{{$v->shop_price}}
                                                </span>
                                            </div>
                                            <div class="last_button_area">
                                                <ul class="add-to-links clearfix">
                                                    <li class="addwishlist">
                                                        <div class="yith-wcwl-add-button show">
                                                            <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45"
                                                            data-product-type="external" data-toggle="tooltip" title="" data-original-title="Add to Wishlist">
                                                                <i class="fa fa-heart">
                                                                </i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="new_act">
                                                            <a class="button_act" data-quick-id="45" href="" title="" data-toggle="tooltip"
                                                            data-original-title="Donec non est at">
                                                               加入购物车
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="addcompare">
                                                        <div class="woocommerce product compare-button">
                                                            <a class="compare button" href="" data-product_id="45" rel="nofollow"
                                                            data-toggle="tooltip" title="" data-original-title="Compare">
                                                                <i class="fa fa-refresh">
                                                                </i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- 单个商品结束 -->
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product single_product_2 single_product_3rd">
                                                    <span>
                                                        hot
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/product-pic/product_pic_3.jpg" alt="">
                                                        <img class="secondary-img" src="img/product-pic/product_pic_4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Accumsan eli
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $100.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product single_product_6">
                                                    <span>
                                                        New
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/product-pic/product_pic_5.jpg" alt="">
                                                        <img class="secondary-img" src="img/product-pic/product_pic_6.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Adipiscing cursus eu
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $300.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product single_product_2 single_product_3rd">
                                                    <span>
                                                        hot
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/product-pic/product_pic_4.jpg" alt="">
                                                        <img class="secondary-img" src="img/product-pic/product_pic_3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Commodo augue
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $2.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product_3 single_product_7 ">
                                                    <span>
                                                        sale
                                                    </span>
                                                </div>
                                                <div class="single_product single_product_2  single_product_3rd">
                                                    <span>
                                                        hot
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/product-pic/product_pic_7.jpg" alt="">
                                                        <img class="secondary-img" src="img/product-pic/product_pic_6.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Cras nec nisl ut erat
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $200.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/top-pic/top_pic_10.jpg" alt="">
                                                        <img class="secondary-img" src="img/top-pic/top_pic_8.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Cras neque
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $200.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product single_product_2 single_product_3rd">
                                                    <span>
                                                        hot
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/top-pic/top_pic_8.jpg" alt="">
                                                        <img class="secondary-img" src="img/top-pic/top_pic_9.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Donec a neque
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $200.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product single_product_6">
                                                    <span>
                                                        New
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/product-pic/product_pic_2.jpg" alt="">
                                                        <img class="secondary-img" src="img/product-pic/product_pic_1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Donec non est at
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $250.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product single_product_2 single_product_3rd">
                                                    <span>
                                                        hot
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/top-pic/top_pic_2.jpg" alt="">
                                                        <img class="secondary-img" src="img/top-pic/top_pic_3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Duis convallis
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $200.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product single_product_6">
                                                    <span>
                                                        New
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/product-pic/product_pic_3.jpg" alt="">
                                                        <img class="secondary-img" src="img/product-pic/product_pic_4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Duis convallis
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $100.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product_3 single_product_7 ">
                                                    <span>
                                                        sale
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/cosmatics-pic/cosmatic_pix_1.jpg" alt="">
                                                        <img class="secondary-img" src="img/cosmatics-pic/cosmatic_pix_2.jpg"
                                                        alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Etiam gravida
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $150.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product single_product_2  single_product_3rd">
                                                    <span>
                                                        hot
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/product-pic/product_pic_11.jpg" alt="">
                                                        <img class="secondary-img" src="img/cosmatics-pic/cosmatic_pix_2.jpg"
                                                        alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Ligula euismod eget
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $200.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product single_product_6">
                                                    <span>
                                                        New
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/top-pic/top_pic_11.jpg" alt="">
                                                        <img class="secondary-img" src="img/top-pic/top_pic_12.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Lorem nec augue
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $220.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product_3 single_product_7 ">
                                                    <span>
                                                        sale
                                                    </span>
                                                </div>
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/top-pic/top_pic_7.jpg" alt="">
                                                        <img class="secondary-img" src="img/product-pic/product_pic_1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Metus nisi posuere
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $150.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/top-pic/top_pic_12.jpg" alt="">
                                                        <img class="secondary-img" src="img/top-pic/top_pic_11.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Morbi ornare
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $9.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="all-pros br-ntf">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 pl pr">
                                            <div class="sngl-pro">
                                                <div class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    <a href="#">
                                                        <img class="primary-img" src="img/product-pic/product_pic_8.jpg" alt="">
                                                        <img class="secondary-img" src="img/product-pic/product_pic_9.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2"
                                                    data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                Nam fringilla
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                                                metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem
                                                                vitae urna fringilla tempus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-star">
                                                                    </i>
                                                                </a>
                                                                <a class="not-rated" href="#">
                                                                    <i class="fa fa-star-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                $100.00
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href=""
                                                                        title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addwishlist">
                                                                    <div class="yith-wcwl-add-button  show">
                                                                        <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow"
                                                                        data-product-id="45" data-product-type="external" data-toggle="tooltip"
                                                                        title="" data-original-title="Add to Wishlist">
                                                                            <i class="fa fa-heart">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                <li class="addcompare">
                                                                    <div class="woocommerce product compare-button">
                                                                        <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow"
                                                                        data-toggle="tooltip" title="" data-original-title="Compare">
                                                                            <i class="fa fa-refresh">
                                                                            </i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <ul class="pagination">
	        	<li>{{ $data->appends($request)->links() }}</li>
  
            </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection