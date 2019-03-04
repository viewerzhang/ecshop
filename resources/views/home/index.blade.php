@extends('layout.home')

@section('content')
<section class="slider-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bend niceties preview-2">
                    <div id="ensign-nivoslider" class="slides">


                        @foreach($data_lunbo as $k=>$v)
                        <img src="/static/admin/images/lunbo/{{ $v->lunbo_img }}" alt="" title="#slider-caption-2" />
                        @endforeach



                        <!-- <img src="/static/home/index/img/slider/slider1_2.jpg" alt="" title="#slider-caption-2" /> -->
                    </div>
                    <!-- direction 1 -->



                    @foreach($data_lunbo as $k=>$v)
                    <div id="slider-caption-1" class="t-cn slider-direction slider-one">
                        <div class="slider-progress"></div>
                        <div class="tld-f1">
                            <div class="layer-1-1 animated fadeInDown">
                                <h1>{{ $v->lunbo_name }}</h1>
                            </div>
                            <div class="layer-1-2 animated flipInX">
                                <h2>{{ $v->lunbo_desc }}</h2>
                            </div>
                            <!-- <div class="layer-1-3 animated rotateInUpLeft">
                                <h1>NOKIA E600</h1>
                            </div>
                            <div class="layer-1-4  animated rotateInUpLeft">
                                <h3>SALE UO TO 30%</h3>
                            </div>
                            <div class="layer-1-5 animated rotateInUpLeft">
                                <a href="#">Shopping Now</a>
                            </div> -->
                        </div>
                        <div class="tld-f2">
                            <div class="layer-1-6 animated zoomIn">
                                <!-- <img src="/static/home/index/img/slider/slider_8.png" alt=""> -->
                            </div>
                        </div>
                    </div>
                    @endforeach









                    <!-- direction 2 -->
                    <!-- <div id="slider-caption-2" class="slider-direction slider-two">
                        <div class="slider-progress"></div>
                        <div class="sld-fl">
                            <div class="layer-2-1 animated fadeInLeftBig">
                                <h1> $320.00</h1>
                            </div>
                            <div class="layer-2-2 animated slideInLeft">
                                <h2>$245.00</h2>
                            </div>
                            <div class="layer-2-3 animated slideInLeft">
                                <h1>MEN'S </h1>
                            </div>
                            <div class="layer-2-4 animated slideInLeft">
                                <h3>SALE UO TO 30%</h3>
                            </div>
                            <div class="layer-2-5 animated bounceInUp">
                                <a href="#">Shopping Now</a>
                            </div>
                        </div>
                        <div class="sld-fr">
                            <div class="layer-2-6 animated zoomIn">
                                <img src="/static/home/index/img/slider/slider-9.png" alt="">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider area end-->
<!--social design arae start-->
<div class="link_area">
    <div class="container">
        <div class="row">
            <div class="social_design on_right">
                <ul>
                    <li>
                        <a class="facebook" target="_blank" href="#facebook">
                            <span>
                                <i class="fa fa-facebook"></i>
                                <span class="social-text">Follow via Facebook</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" target="_blank" href="#twitter.com">
                            <span>
                                <i class="fa fa-twitter"></i>
                                <span class="social-text">Follow via Twitter</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="google-plus" target="_blank" href="#google-plus">
                            <span>
                                <i class="fa fa-google-plus"></i>
                                <span class="social-text">Follow via Google +</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="youtube" target="_blank" href="#youtube">
                            <span>
                                <i class="fa fa-youtube"></i>
                                <span class="social-text">Follow via Youtube</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="pinterest" target="_blank" href="#pinterest">
                            <span>
                                <i class="fa fa-pinterest"></i>
                                <span class="social-text">Follow via Pinterest</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="mail-to" target="_blank" href="mailto:lionthemes88@gmail.com">
                            <span>
                                <i class="fa fa-envelope-o"></i>
                                <span class="social-text">Mail To Us</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--social design arae end-->
<!--about us area-->
<div class="about_us_area">
    <div class="about_main">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about_all">
                        <div class="single_about">
                            <div class="about_icon">
                                <span class="fa fa-truck"></span>
                            </div>
                            <div class="about_content">
                                <div class="about_text">Free Shipping</div>
                                <div class="about_prgph">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend libero felis, at interdum lorem efficitur et.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about_all">
                        <div class="single_about">
                            <div class="about_icon">
                                <span class="fa fa-history"></span>
                            </div>
                            <div class="about_content">
                                <div class="about_text">Free Shipping</div>
                                <div class="about_prgph">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend libero felis, at interdum lorem efficitur et.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about_all">
                        <div class="single_about">
                            <div class="about_icon">
                                <span class="fa fa-lock"></span>
                            </div>
                            <div class="about_content">
                                <div class="about_text">Free Shipping</div>
                                <div class="about_prgph">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend libero felis, at interdum lorem efficitur et.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--about us end-->
<!--product area start-->
<section class="product_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <div class="all_product animated fadeInUp">
                    <div class="new_product">
                        <div class="product_heading">
                            <i class="fa fa-play-circle"></i>
                            <span>New products</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="whole_product indicator-brand">
                            <div class="col-md-12">
                                <div class="all-pros animated fadeInUp">
                                    <div class="single_product">
                                        <span>New</span>
                                    </div>
                                    <div class="sinle_pic">
                                        <a href="#">
                                            <img class="primary-img" src="/static/home/index/img/product-pic/product_pic_2.jpg" alt="" />
                                            <img class="secondary-img" src="/static/home/index/img/product-pic/product_pic_1.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action" data-toggle="modal" data-target="#myModal">
                                        <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="Quickview">Quick View</button>   
                                    </div>
                                    <div class="product_content">
                                        <div class="usal_pro">
                                            <div class="product_name_2">
                                                <h2>
                                                    <a href="#">Donec non est at</a>
                                                </h2>
                                            </div>
                                            <div class="product_price">
                                                <div class="price_rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                    <a class="not-rated" href="#">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="not-rated" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="price_box">
                                                <span class="spical-price">$250.00</span>
                                            </div>
                                            <div class="last_button_area">
                                                <ul class="add-to-links clearfix">
                                                    <li class="addwishlist">
                                                        <div class="yith-wcwl-add-button show" >
                                                            <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="new_act">
                                                            <a class="button_act" data-quick-id="45" href="" title="" data-toggle="tooltip" data-original-title="Donec non est at">Go to Buy</a>
                                                        </div>
                                                    </li>
                                                    <li class="addcompare">
                                                        <div class="woocommerce product compare-button">
                                                            <a class="compare button" href="" data-product_id="45" rel="nofollow" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="all-pros all-pros-2 animated fadeInUp">
                                    <div class="single_product">
                                        <span>New</span>
                                    </div>
                                    <div class="sinle_pic">
                                        <a href="#">
                                            <img class="primary-img" src="/static/home/index/img/product-pic/product_pic_3.jpg" alt="" />
                                            <img class="secondary-img" src="/static/home/index/img/product-pic/product_pic_4.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action" data-toggle="modal" data-target="#myModal">
                                        <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="Quickview">Quick View</button>   
                                    </div>
                                    <div class="product_content">
                                        <div class="usal_pro">
                                            <div class="product_name_2">
                                                <h2>
                                                    <a href="#">Duis convallis</a>
                                                </h2>
                                            </div>
                                            <div class="product_price">
                                                <div class="price_rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a class="not-rated" href="#">
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="price_box">
                                                <span class="spical-price">$100.00</span>
                                            </div>
                                            <div class="last_button_area">
                                                <ul class="add-to-links clearfix">
                                                    <li class="addwishlist">
                                                        <div class="yith-wcwl-add-button show" >
                                                            <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="new_act">
                                                            <a class="button_act" data-quick-id="45" href="" title="" data-toggle="tooltip" data-original-title="Donec non est at">Add To Cart</a>
                                                        </div>
                                                    </li>
                                                    <li class="addcompare">
                                                        <div class="woocommerce product compare-button">
                                                            <a class="compare button" href="" data-product_id="45" rel="nofollow" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="all-pros all-pros-3 animated fadeInUp">
                                    <div class="single_product">
                                        <span>New</span>
                                    </div>
                                    <div class="sinle_pic">
                                        <a href="#">
                                            <img class="primary-img" src="/static/home/index/img/product-pic/product_pic_5.jpg" alt="" />
                                            <img class="secondary-img" src="/static/home/index/img/product-pic/product_pic_6.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action" data-toggle="modal" data-target="#myModal">
                                        <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="Quickview">Quick View</button>   
                                    </div>
                                    <div class="product_content">
                                        <div class="usal_pro">
                                            <div class="product_name_2">
                                                <h2>
                                                    <a href="#">Adipiscing cursus eu</a>
                                                </h2>
                                            </div>
                                            <div class="product_price">
                                                <div class="price_rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#">
                                                    <i class="fa fa-star"></i>
                                                    </a>
                                                    <a class="not-rated" href="#">
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="not-rated" href="#">
                                                    <i class="fa fa-star-o"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="price_box">
                                                <span class="<spical-></spical->price">$300.00</span>
                                            </div>
                                            <div class="last_button_area">
                                                <ul class="add-to-links clearfix">
                                                    <li class="addwishlist">
                                                        <div class="yith-wcwl-add-button show" >
                                                            <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="new_act">
                                                            <a class="button_act" data-quick-id="45" href="" title="" data-toggle="tooltip" data-original-title="Donec non est at">Add To Cart</a>
                                                        </div>
                                                    </li>
                                                    <li class="addcompare">
                                                        <div class="woocommerce                                                       product compare-button">
                                                            <a class="compare button" href="" data-product_id="45" rel="nofollow" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="all-pros all-pros-4 animated fadeInUp">
                                    <div class="single_product single_product_2">
                                        <span>hot</span>
                                    </div>
                                    <div class="single_product_3 ">
                                        <span>sale</span>
                                    </div>
                                    <div class="sinle_pic">
                                        <a href="#">
                                        <img class="primary-img" src="/static/home/index/img/product-pic/product_pic_7.jpg" alt="" />
                                        <img class="secondary-img" src="/static/home/index/img/product-pic/product_pic_6.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action" data-toggle="modal" data-target="#myModal">
                                        <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="Quickview">Quick View</button>   
                                    </div>
                                    <div class="product_content">
                                        <div class="usal_pro">
                                            <div class="product_name_2">
                                                <h2>
                                                    <a href="#">Cras nec nisl ut erat</a>
                                                </h2>
                                            </div>
                                            <div class="product_price">
                                                <div class="price_rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a class="not-rated" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="price_box">
                                                <span class="old-price">$250.00</span>
                                                <span class="spical-price">$200.00</span>
                                            </div>
                                            <div class="last_button_area">
                                                <ul class="add-to-links clearfix">
                                                    <li class="addwishlist">
                                                        <div class="yith-wcwl-add-button show" >
                                                            <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="new_act">
                                                            <a class="button_act" data-quick-id="45" href="" title="" data-toggle="tooltip" data-original-title="Donec non est at">Add To Cart</a>
                                                        </div>
                                                    </li>
                                                    <li class="addcompare">
                                                        <div class="woocommerce                                                       product compare-button">
                                                            <a class="compare button" href="" data-product_id="45" rel="nofollow" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12  animated fadeInUp">
                                <div class="all-pros all-pros-5">
                                    <div class="single_product">
                                        <span>New</span>
                                    </div>
                                    <div class="sinle_pic">
                                        <a href="#">
                                        <img class="primary-img" src="/static/home/index/img/product-pic/product_pic_8.jpg" alt="" />
                                        <img class="secondary-img" src="/static/home/index/img/product-pic/product_pic_9.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action" data-toggle="modal" data-target="#myModal">
                                        <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="Quickview">Quick View</button>   
                                    </div>
                                    <div class="product_content">
                                        <div class="usal_pro">
                                            <div class="product_name_2">
                                                <h2>
                                                    <a href="#">Nam fringilla augue</a>
                                                </h2>
                                            </div>
                                            <div class="product_price">
                                                <div class="price_rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#">
                                                    <i class="fa fa-star"></i>
                                                    </a>
                                                    <a href="#"><i class="fa fa-star"></i>
                                                    </a>
                                                    <a class="not-rated" href="#">
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="price_box">
                                                <span class="spical-price">$150.00-$300.00</span>
                                            </div>
                                            <div class="last_button_area">
                                                <ul class="add-to-links clearfix">
                                                    <li class="addwishlist">
                                                        <div class="yith-wcwl-add-button show" >
                                                            <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="new_act">
                                                            <a class="button_act" data-quick-id="45" href="" title="" data-toggle="tooltip" data-original-title="Donec non est at">Add To Cart</a>
                                                        </div>
                                                    </li>
                                                    <li class="addcompare">
                                                        <div class="woocommerce product compare-button">
                                                            <a class="compare button" href="" data-product_id="45" rel="nofollow" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
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
            <div class="col-md-3 col-sm-12">
                <div class="cosmetc_area">
                    <div class="cosmatics_heading">
                        <h3 class="cosmatics_products">
                            <i class="fa fa-tags"></i>
                            <span>Hot deals</span>
                        </h3>
                    </div>
                    <div class="row">
                        <div class="new_cosmatic indicator-brand indicator-brand-2">
                            <div class="col-md-12">
                                <div class="all-pros all-pros-8 animated fadeInUp">
                                    <div class="single_product_3 ">
                                        <span>sale</span>
                                    </div>
                                    <div class="sinle_pic">
                                        <a href="#">
                                        <img class="primary-img" src="/static/home/index/img/cosmatics-pic/cosmatic_pix_1.jpg" alt="" />
                                        <img class="secondary-img" src="/static/home/index/img/cosmatics-pic/cosmatic_pix_1.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action" data-toggle="modal" data-target="#myModal">
                                        <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="Quickview">Quick View</button>   
                                    </div>
                                    <div class="product_content">
                                        <div class="usal_pro usal_pro_eb">
                                            <div class="product_name_2">
                                                <h2>
                                                    <a href="#">Etiam gravida</a>
                                                </h2>
                                            </div>
                                            <div class="product_price">
                                                <div class="price_rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#">
                                                    <i class="fa fa-star"></i>
                                                    </a>
                                                    <a href="#"><i class="fa fa-star"></i>
                                                    </a>
                                                    <a class="not-rated" href="#">
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="price_box price_box_dgr">
                                                <span class="old- price">$250.00</span>
                                                <span class="spical-price">$200.00</span>
                                            </div>
                                            <div class="count-down-area">
                                                <div data-countdown="2017/11/01">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="all-pros all-pros-8 animated fadeInUp">
                                    <div class="single_product_3 ">
                                        <span>sale</span>
                                    </div>
                                    <div class="sinle_pic">
                                        <a href="#">
                                        <img class="primary-img" src="/static/home/index/img/cosmatics-pic/cosmatic_pix_3.jpg" alt="" />
                                        <img class="secondary-img" src="/static/home/index/img/cosmatics-pic/cosmatic_pix_3.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action" data-toggle="modal" data-target="#myModal">
                                        <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="Quickview">Quick View</button>   
                                    </div>
                                    <div class="product_content">
                                        <div class="usal_pro usal_pro_eb">
                                            <div class="product_name_2">
                                                <h2>
                                                    <a href="#">Nam fringilla</a>
                                                </h2>
                                            </div>
                                            <div class="product_price">
                                                <div class="price_rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#">
                                                    <i class="fa fa-star"></i>
                                                    </a>
                                                    <a href="#"><i class="fa fa-star"></i>
                                                    </a>
                                                    <a href="#"><i class="fa fa-star"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="price_box price_box_dgr">
                                                <span class="old- price">$200.00</span>
                                                <span class="spical-price">$150.00</span>
                                            </div>
                                            <div class="count-down-area">
                                                <div data-countdown="2017/11/01">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="all-pros all-pros-8 animated fadeInUp">
                                    <div class="single_product_3 ">
                                        <span>sale</span>
                                    </div>
                                    <div class="sinle_pic">
                                        <a href="#">
                                        <img class="primary-img" src="/static/home/index/img/cosmatics-pic/cosmatic_pix_1.jpg" alt="" />
                                        <img class="secondary-img" src="/static/home/index/img/cosmatics-pic/cosmatic_pix_2.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action" data-toggle="modal" data-target="#myModal">
                                        <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="Quickview">Quick View</button>   
                                    </div>
                                    <div class="product_content">
                                        <div class="usal_pro usal_pro_eb">
                                            <div class="product_name_2">
                                                <h2>
                                                    <a href="#">Etiam gravida</a>
                                                </h2>
                                            </div>
                                            <div class="product_price">
                                                <div class="price_rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#">
                                                    <i class="fa fa-star"></i>
                                                    </a>
                                                    <a href="#"><i class="fa fa-star"></i>
                                                    </a>
                                                    <a class="not-rated" href="#">
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="price_box price_box_dgr">
                                                <span class="old- price">$250.00</span>
                                                <span class="spical-price">$200.00</span>
                                            </div>
                                            <div class="count-down-area">
                                                <div data-countdown="2017/11/01">
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
        </div>
    </div>
</section>
<!--product area end-->
<!--广告 start-->
<div class="plus_area">
    <div class="container">
        <div class="row">

            
            <?php $sum = 0; ?>
            @foreach($data_ad as $k => $v)
            @if($sum <= 2)
                    <?php $sum++; ?>
                    <div class="col-md-6">
                        <div class="plus_pic">
                            <div class="pix_new">
                                <a href="{{ $v->ad_link }}">
                                <img style="width: 553px;height: 174px;" src="/static/{{ $v->ad_img }}" alt="{{ $v->ad_desc }}" title="{{ $v->ad_desc }}">
                                </a>
                            </div>
                        </div>
                    </div>
            @endif
            @endforeach




        </div>
    </div>
</div>
<!--广告 end-->
<!--product catagory area start-->
<div class="catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="visible_product">
                    <div class="new_product">
                        <div class="product_heading">
                            <i class="fa fa-star"></i>
                            <span>天澜之家</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                <div class="my-tabs">
                    <!-- Nav tabs -->
                    <ul class="favtabs" role="tablist">
                        
                            @foreach($common_cate[0]['sum'][0]['sum'] as $k => $v)
                            <li role="presentation" @if($k == '0')class="active"@endif><a href="#{{ $v->cate_name }}" aria-controls="home" role="tab" data-toggle="tab">{{ $v->cate_name }}</a></li>
                            @endforeach
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">


                        @foreach($common_cate[0]['sum'][0]['sum'] as $k => $v)
                        <div role="tabpanel" class="tab-pane @if($k == '0') active @endif" id="{{ $v->cate_name }}">
                            <div class="row">
                               

                                <div class="feature-carousel indicator-brand-3">
                                    @foreach(App\Http\Controllers\Admin\GoodsController::shouye($v->id) as $kk => $vv)
                                    <div class="col-md-12">
                                        <div class="all-pros animated fadeInUp">
                                            <div class="single_product">
                                                <span>New</span>
                                            </div>
                                            <div class="sinle_pic">
                                                <a href="#">
                                                <img class="primary-img" style="width: 261px;height: 171px;" src="/static/admin/images/goods_img/{{ $vv->goods_img }}" alt="" />
                                                <img class="secondary-img" src="/static/admin/images/goods_imgs/{{ $vv->goodsimgs[0]->goods_imgs }}" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-action" data-toggle="modal" data-target="#{{ $vv->goods_bianhao }}">
                                                <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="更高效的购物体验">快速查看</button>   
                                            </div>
                                            <div class="product_content">
                                                <div class="usal_pro">
                                                    <div class="product_name_2">
                                                        <h2>
                                                            <a href="#" style=" width: 70px;overflow: hidden; text-overflow: ellipsis;white-space: nowrap;">{{ $vv -> goods_name }}</a>
                                                        </h2>
                                                    </div>
                                                    <div class="product_price">
                                                        <div class="price_rating">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            </a>
                                                            <a class="not-rated" href="#">
                                                            <i class="fa fa-star-o"></i>
                                                            </a>
                                                            <a class="not-rated" href="#">
                                                            <i class="fa fa-star-o"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="spical-price">￥{{ $vv->goods_price }}}</span>
                                                    </div>
                                                    <div class="last_button_area">
                                                        <ul class="add-to-links clearfix">
                                                            <li class="addwishlist">
                                                                <div class="yith-wcwl-add-button show" >
                                                                    <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="添加到收藏"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="new_act">
                                                                    <a class="button_act" data-quick-id="45" onclick="caradd({{ $vv->id }})" href="javascript:;" title="" data-toggle="tooltip" data-original-title="更快捷的添加购物车">添加购物车</a>
                                                                </div>
                                                            </li>
                                                            <li class="addcompare">
                                                                <div class="woocommerce product                                               compare-button">
                                                                    <a class="compare button" href="" data-product_id="45" rel="nofollow" data-toggle="tooltip" title="" data-original-title="更新商品信息"><i class="fa fa-refresh"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--catagory area end-->
<!--品牌开始-->
<div class="differ_pic">
    <div class="container">
        <div class="row">
            <?php $sum = 0; ?>
            @foreach($data_brand as $k => $v)
            @if($sum <= 2)
                @if($v->brand_status == '1')
                    <?php $sum++; ?>
                    <div class="col-md-4">
                        <div class="plus_pic">
                            <div class="pix_new">
                                <a href="{{ $v->brand_url }}">
                                <img style="width:358px;height: 204px;" src="/{{ $v->brand_logo }}" alt="{{ $v->brand_desc }}" title="{{ $v->brand_desc }}">
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
            @endforeach
        </div>
    </div>
</div>
<!--品牌结束-->
<!--product catagory area start-->
<div class="catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="visible_product">
                    <div class="new_product">
                        <div class="product_heading">
                            <i class="fa fa-star"></i>
                            <span>精品女装</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                <div class="my-tabs">
                    <!-- Nav tabs -->
                    <ul class="favtabs" role="tablist">
                            @foreach($common_cate[0]['sum'][1]['sum'] as $k => $v)
                            <li role="presentation" @if($k == '0')class="active"@endif><a href="#{{ $v->cate_name }}" aria-controls="home" role="tab" data-toggle="tab">{{ $v->cate_name }}</a></li>
                            @endforeach
                    </ul>
                    <!-- Tab panes -->







                            <div class="tab-content">

                                @foreach($common_cate[0]['sum'][1]['sum'] as $k => $v)
                                <div role="tabpanel" class="tab-pane @if($k == '0') active @endif" id="{{ $v->cate_name }}">
                                    <div class="row">
                                        <div class="feature-carousel indicator-brand-3">

                                            @foreach(App\Http\Controllers\Admin\GoodsController::shouye($v->id) as $kk => $vv)
                                            <div class="col-md-12">
                                                <div class="all-pros all-pros-2 animated fadeInUp">
                                                    <div class="single_product">
                                                        <span>New</span>
                                                    </div>
                                                    <div class="sinle_pic">
                                                        <a href="#">
                                                        <img class="primary-img" style="width: 261px;height: 171px;" src="/static/admin/images/goods_img/{{ $vv->goods_img }}" alt="" />
                                                        <img class="secondary-img" style="width: 261px;height: 171px;" src="/static/admin/images/goods_imgs/{{ $vv->goodsimgs[0]->goods_imgs }}" alt="" />
                                                        </a>
                                                    </div>

                                                    <div class="product-action" data-toggle="modal" data-target="#{{ $vv->goods_bianhao }}">
                                                        <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="更高效的购物体验">快速查看</button>   
                                                    </div>

                                                    <div class="product_content">
                                                <div class="usal_pro">
                                                    <div class="product_name_2">
                                                        <h2>
                                                            <a href="#" style=" width: 70px;overflow: hidden; text-overflow: ellipsis;white-space: nowrap;">{{ $vv -> goods_name }}</a>
                                                        </h2>
                                                    </div>
                                                    <div class="product_price">
                                                        <div class="price_rating">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            </a>
                                                            <a class="not-rated" href="#">
                                                            <i class="fa fa-star-o"></i>
                                                            </a>
                                                            <a class="not-rated" href="#">
                                                            <i class="fa fa-star-o"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="spical-price">￥{{ $vv->goods_price }}}</span>
                                                    </div>
                                                    <div class="last_button_area">
                                                        <ul class="add-to-links clearfix">
                                                            <li class="addwishlist">
                                                                <div class="yith-wcwl-add-button show" >
                                                                    <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="添加到收藏"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="new_act">
                                                                    <a class="button_act" data-quick-id="45" href="" title="" data-toggle="tooltip" data-original-title="更快捷的添加购物车">添加购物车</a>
                                                                </div>
                                                            </li>
                                                            <li class="addcompare">
                                                                <div class="woocommerce product                                               compare-button">
                                                                    <a class="compare button" href="" data-product_id="45" rel="nofollow" data-toggle="tooltip" title="" data-original-title="更新商品信息"><i class="fa fa-refresh"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>













                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--catagory area end-->
<!--lumia area start-->
<div class="lumia_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="plus_pic">
                    <div class="pix_new">
                        <a href="#">
                        <img src="/static/home/index/img/differ-pic/differ_pic_6.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--lumia area end-->
<!--top rate area start-->
<div class="top_rate_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="rate-extra">
                    <div class="new_product">
                        <div class="product_heading">
                            <i class="fa fa-shopping-bag"></i>
                            <span>商品TOP榜</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all_ayntex indicator-brand-4">
                        <div class="nyx_top_rte">
                            <div class="col-md-12  ">

                                <?php $abc = 0 ?>
                                @foreach($data_goods_top as $k=>$v)
                                    @if($abc >= 4) <?php break; ?> @endif 
                                <div class="all-pros-ex animated fadeInUp">
                                    <div class="llc_pro">
                                        <div class="sinle_pic sinle_pic_2">
                                            <a href="#">
                                            <img class="primary-img" style="width: 100px;height: 65.55px;" src="/static/admin/images/goods_img/{{ $v->goods_img }}" alt="" />
                                            <img class="secondary-img" style="width: 100px;height: 65.55px;" src="/static/admin/images/goods_imgs/{{ $v->goodsimgs[0]->goods_imgs }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product_content_2">
                                        <div class="usal_pro">
                                            <div class=" product_name_new">
                                                <h2>
                                                    <a href="#" style=" width: 70px;overflow: hidden; text-overflow: ellipsis;white-space: nowrap;" title="{{ $v->goods_name }}">{{ $v->goods_name }}</a>
                                                </h2>
                                            </div>
                                            <div class="product_price product_price_new product_price_new_3">
                                                <div class="price_rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#">
                                                    <i class="fa fa-star"></i>
                                                    </a>
                                                    <a href="#"><i class="fa fa-star"></i>
                                                    </a>
                                                    <a href="#"><i class="fa fa-star"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="price_box price_box_new price_box_new_3">
                                                <span class="spical-price">￥{{ $v->goods_price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $abc++ ?>
                                @endforeach



                            </div>
                        </div>
                    </div>
                    <aside class="single-sidebar">
                        <h3>Tags</h3>
                        <div class="compare_content">
                            <div class="new_tag">
                                <a href="#">Clothing</a>
                                <a href="#">Enim</a>
                                <a href="#">Fashion</a>
                                <a href="#">Glasses</a>
                                <a href="#">Hats</a>
                                <a href="#">Hoodies</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="haxico_main haxico_main_grf">
                    <div class="fchered_area">
                        <div class="new_product">
                            <div class="product_heading">
                                <i class="fa fa-list-ol"></i>
                                <span>Featured Catagories</span>
                            </div>
                        </div>
                    </div>
                    <div class="chard_ex_al">
                        <div class="row">
                            <div class="achard_all indicator-brand indicator-brand-5">
                                <div class="col-md-12">
                                    <div class="fchered_item">
                                        <div class="fechered_pix">
                                            <img src="/static/home/index/img/featured-pic/f_pix_1.jpg" alt="" />
                                        </div>
                                        <div class="fechered_heading">
                                            <h3><a href="#">Accessories</a></h3>
                                        </div>
                                        <a class="view_button">View More</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fchered_item">
                                        <div class="fechered_pix">
                                            <img src="/static/home/index/img/featured-pic/f_pix_2.jpg" alt="" />
                                        </div>
                                        <div class="fechered_heading">
                                            <h3><a href="#">Albums</a></h3>
                                        </div>
                                        <a class="view_button">View More</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fchered_item">
                                        <div class="fechered_pix">
                                            <img src="/static/home/index/img/featured-pic/f_pix_3.jpg" alt="" />
                                        </div>
                                        <div class="fechered_heading">
                                            <h3><a href="#">Electronic</a></h3>
                                        </div>
                                        <a class="view_button">View More</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fchered_item">
                                        <div class="fechered_pix">
                                            <img src="/static/home/index/img/featured-pic/f_pix_4.jpg" alt="" />
                                        </div>
                                        <div class="fechered_heading">
                                            <h3><a href="#">Headlight</a></h3>
                                        </div>
                                        <a class="view_button">View More</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fchered_item">
                                        <div class="fechered_pix">
                                            <img src="/static/home/index/img/featured-pic/f_pix_5.jpg" alt="" />
                                        </div>
                                        <div class="fechered_heading">
                                            <h3><a href="#">Mirrors</a></h3>
                                        </div>
                                        <a class="view_button">View More</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fchered_item">
                                        <div class="fechered_pix">
                                            <img src="/static/home/index/img/featured-pic/f_pix_5.jpg" alt="" />
                                        </div>
                                        <div class="fechered_heading">
                                            <h3><a href="#">Accessories</a></h3>
                                        </div>
                                        <a class="view_button">View More</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fchered_item">
                                        <div class="fechered_pix">
                                            <img src="/static/home/index/img/featured-pic/f_pix_3.jpg" alt="" />
                                        </div>
                                        <div class="fechered_heading">
                                            <h3><a href="#">Accessories</a></h3>
                                        </div>
                                        <a class="view_button">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog">
                            <div class="new_product">
                                <div class="product_heading">
                                    <i class="fa fa-comments"></i>
                                    <span>Blog Post</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog_carasel indicator-brand indicator-brand-6">
                        <div class="col-md-12">
                            <div class="blog_next">
                                <div class="blog_thumb">
                                    <a href="#">
                                    <img src="/static/home/index/img/blog-pic/blog_pic_1.jpg" alt="" />
                                    </a>
                                    <div class="blogdate">
                                        <div>
                                            <span class="day">29</span>
                                            <span class="month">Jan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_info">
                                    <h3 class="post-title">
                                        <a href="#">Hello world!</a>
                                    </h3>
                                    <div class="post-excerpt">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent …</div>
                                    <a href="#">
                                    <span class="readmore-text">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog_next">
                                <div class="blog_thumb">
                                    <a href="#">
                                    <img src="/static/home/index/img/blog-pic/blog_pic_2.jpg" alt="" />
                                    </a>
                                    <div class="blogdate">
                                        <div>
                                            <span class="day">19</span>
                                            <span class="month">Jan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_info">
                                    <h3 class="post-title">
                                        <a href="#">Curabitur lobortis</a>
                                    </h3>
                                    <div class="post-excerpt">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent …</div>
                                    <a href="#">
                                    <span class="readmore-text">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog_next">
                                <div class="blog_thumb">
                                    <a href="#">
                                    <img src="/static/home/index/img/blog-pic/blog_pic_3.jpg" alt="" />
                                    </a>
                                    <div class="blogdate">
                                        <div>
                                            <span class="day">19</span>
                                            <span class="month">Jan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_info">
                                    <h3 class="post-title">
                                        <a href="#">Vivamus gravida</a>
                                    </h3>
                                    <div class="post-excerpt">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent …</div>
                                    <a href="#">
                                    <span class="readmore-text">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog_next">
                                <div class="blog_thumb">
                                    <a href="#">
                                    <img src="/static/home/index/img/blog-pic/blog_pic_6.jpg" alt="" />
                                    </a>
                                    <div class="blogdate">
                                        <div>
                                            <span class="day">4</span>
                                            <span class="month">Jan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_info">
                                    <h3 class="post-title">
                                        <a href="#">Post Format:Image</a>
                                    </h3>
                                    <div class="post-excerpt">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent …</div>
                                    <a href="#">
                                    <span class="readmore-text">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog_next">
                                <div class="blog_thumb">
                                    <a href="#">
                                    <img src="/static/home/index/img/blog-pic/blog_pic_5.jpg" alt="" />
                                    </a>
                                    <div class="blogdate">
                                        <div>
                                            <span class="day">4</span>
                                            <span class="month">Jan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog_info">
                                    <h3 class="post-title">
                                        <a href="#">Post Format:Gallery</a>
                                    </h3>
                                    <div class="post-excerpt">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent …</div>
                                    <a href="#">
                                    <span class="readmore-text">Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--blog area end-->
<!--brand area start-->
<div class="logo_area">
    <div class="container">
        <div class="row">
            <div class="brand brand-2 brand-sth">
                <div class="new_product new_product_nx new_product_nx_et ">
                    <div class="product_heading product_heading_tf">
                        <i class="fa fa-coffee"></i>
                        <span>合作伙伴</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="main_brand main_brand_tf main_brand_sw">
                    <div class="all_brand indicator-brand indicator-brand-7">

                        @foreach($data_links as $k => $v)
                        <div class="col-md-12">
                            <div class="brand_pix">
                                <a href="{{ $v->link_url }}">
                                <img style="width: 142px;height: 98px;" src="/static/{{ $v->link_logo }}" alt="{{ $v->link_desc }}" title="{{ $v->link_desc }}" />
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brand area end-->
@foreach($common_cate[0]['sum'][1]['sum'] as $k => $v)
        @foreach(App\Http\Controllers\Admin\GoodsController::shouye($v->id) as $kk => $vv)
        <div class="modal fade" id="{{ $vv->goods_bianhao }}" role="dialog">
            <div class="modal-dialog modal-dialog-2">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="row">
                                <div class="new_port new_port_2">
                                    <div class="port_pix">
                                        <img class="img-rounded" style="width: 300px;height: 206px;" src="/static/admin/images/goods_img/{{ $vv->goods_img }}" alt="">
                                    </div>
                                </div>
                                <div class="elav_titel elav_titel_2">
                                    <div class="elv_heading elv_heading_therteen">
                                        <h3>{{ $vv->goods_name }}</h3>
                                    </div>
                                    <div class="elav_info">
                                        <div class="price_box price_box_pb">
                                            <span class="spical-price spical-price-nk">￥{{ $vv->goods_price }}</span>
                                        </div>
                                        <form class="cart-btn-area cart-btn-area-dec" action="#">
                                            <a class="see-all" href="#">查看商品详细</a><br>
                                            <?php $ty = mt_rand(1000,9999) ?>
                                            @foreach($vv->goodstype->goodsattr as $tv => $ta)
                                            <p style="float: left;margin-top: 3px;">{{ $ta->attr_name }}：</p>
                                            <?php $attr = explode(',', $ta->attr_value) ?>
                                            <?php $goodsid = mt_rand(1000,9999)  ?>
                                                @foreach($attr as $attr => $va)
                                                <div id="attr" class="{{ $goodsid }} {{ $ty }}" onclick="xz({{ $ty }},{{ $goodsid }},this)" style="margin-left: 3px;float: left;cursor: pointer;width: 60px;height: 30px;border: 1px solid #aaa;display:table-cell;font-size:12px;vertical-align:middle;text-align:center">
                                                    <p style="margin-top: 3px;text-align: center;">{{ $va }}</p>
                                                </div>
                                                @endforeach
                                                <div style="clear: left;"></div>
                                             @endforeach
                                            <input type="number" class="bh{{$vv->goods_bianhao}}" id="carsum" max="{{ $vv->goods_num }}" value="1">
                                            <a href="javascript:;" onclick="jr({{$vv->goods_bianhao}},{{$vv->id}})" class="btn btn-info btn-lg">加入购物车</a>
                                        </form>
                                    </div>
                                    <div class="evavet_description evavet_description_dec">
                                        <p>{{ $vv->goods_title }}</p>
                                    </div>
                                    <div class="elavetor_social">
                                        <h3 class="widget-title">分享给朋友</h3>
                                        <br>
                                        <ul class="social-link social-link-bbt">
                                            <li><a class="fb" data-original-title="facebook" href="#" title="" data-toggle="tooltip"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twit" data-original-title="twitter" href="#" title="" data-toggle="tooltip"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="pinter" data-original-title="pinterest" href="#" title="" data-toggle="tooltip"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="google+" href="#" title="Google+" data-target="#productModal" data-toggle="tooltip"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="lindin" href="#" title="LinkedIn" data-target="#productModal" data-toggle="tooltip"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
@endforeach
        <!-- Modal -->
@foreach($common_cate[0]['sum'][0]['sum'] as $k => $v)
        @foreach(App\Http\Controllers\Admin\GoodsController::shouye($v->id) as $kk => $vv)
        <div class="modal fade" id="{{ $vv->goods_bianhao }}" role="dialog">
            <div class="modal-dialog modal-dialog-2">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="row">
                                <div class="new_port new_port_2">
                                    <div class="port_pix">
                                        <img class="img-rounded" style="width: 300px;height: 206px;" src="/static/admin/images/goods_img/{{ $vv->goods_img }}" alt="">
                                    </div>
                                </div>
                                <div class="elav_titel elav_titel_2">
                                    <div class="elv_heading elv_heading_therteen">
                                        <h3>{{ $vv->goods_name }}</h3>
                                    </div>
                                    <div class="elav_info">
                                        <div class="price_box price_box_pb">
                                            <span class="spical-price spical-price-nk">￥{{ $vv->goods_price }}</span>
                                        </div>
                                        <form class="cart-btn-area cart-btn-area-dec" action="#">
                                            <a class="see-all" href="#">查看商品详细</a><br>
                                            <?php $ty = mt_rand(1000,9999) ?>
                                            @foreach($vv->goodstype->goodsattr as $tv => $ta)
                                            <p style="float: left;margin-top: 3px;">{{ $ta->attr_name }}：</p>
                                            <?php $attr = explode(',', $ta->attr_value) ?>
                                            <?php $goodsid = mt_rand(1000,9999)  ?>
                                                @foreach($attr as $attr => $va)
                                                <div id="attr" class="{{ $goodsid }} {{ $ty }}" onclick="xz({{ $ty }},{{ $goodsid }},this)" style="margin-left: 3px;float: left;cursor: pointer;width: 60px;height: 30px;border: 1px solid #aaa;display:table-cell;font-size:12px;vertical-align:middle;text-align:center">
                                                    <p style="margin-top: 3px;text-align: center;">{{ $va }}</p>
                                                </div>
                                                @endforeach
                                                <div style="clear: left;"></div>
                                             @endforeach
                                            <input type="number" class="bh{{$vv->goods_bianhao}}" id="carsum" max="{{ $vv->goods_num }}" value="1">
                                            <a href="javascript:;" onclick="jr({{$vv->goods_bianhao}},{{$vv->id}})" class="btn btn-info btn-lg">加入购物车</a>
                                        </form>
                                    </div>
                                    <div class="evavet_description evavet_description_dec">
                                        <p>{{ $vv->goods_title }}</p>
                                    </div>
                                    <div class="elavetor_social">
                                        <h3 class="widget-title">分享给朋友</h3>
                                        <br>
                                        <ul class="social-link social-link-bbt">
                                            <li><a class="fb" data-original-title="facebook" href="#" title="" data-toggle="tooltip"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twit" data-original-title="twitter" href="#" title="" data-toggle="tooltip"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="pinter" data-original-title="pinterest" href="#" title="" data-toggle="tooltip"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="google+" href="#" title="Google+" data-target="#productModal" data-toggle="tooltip"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="lindin" href="#" title="LinkedIn" data-target="#productModal" data-toggle="tooltip"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
@endforeach
        <!--modal content end-->


<script type="text/javascript">
    function xz(ty,id,ud)
    {
        $('.'+id).css('background','');
        $(ud).css('background','#ddd');
        uuu = '';
        $('.'+ty).each(function (k) {
            if($(this).css('background') == 'rgb(221, 221, 221) none repeat scroll 0% 0% / auto padding-box border-box'){
                uuu += $(this).find('p').html()+',';
                aaa = uuu.substr(0, uuu.length - 1);
            }
        });
        // attra = $(ud).find('p').html();
        console.log(aaa);
    }
    function jr(bh,gid)
    {
        layui.use(['layer', 'form'], function(){
            var layer = layui.layer
            ,form = layui.form;
        var car_numa = $('.bh'+bh).val();
        $.post("/shoppingcar/caradd", {    
               "_token": "{{ csrf_token() }}",
               'goods_id':gid,
               'car_num':car_numa,
               'attr':aaa
            }, function(data) {
                if(data.code == '1'){
                    layer.msg(data.msg);
                    $('#'+bh).modal('hide')
                }else{
                    layer.msg(data.msg);
                }
                return false;
                        
            },'json');
        });
    }
</script>



@endsection