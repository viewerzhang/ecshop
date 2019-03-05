<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="/static/home/index/css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="/static/home/index/css/animate.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="/static/home/index/css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="/static/home/index/css/meanmenu.min.css">
        <!-- nivo slider css -->
        <link rel="stylesheet" href="/static/home/index/lib/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="/static/home/index/lib/css/preview.css" type="text/css" />
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="/static/home/index/css/owl.carousel.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="/static/home/index/css/font-awesome.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="/static/home/index/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="/static/home/index/css/responsive.css">
        <!-- <link rel="stylesheet" type="text/css" href="/static/admin/assets/layui/css/layui.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="/static/admin/assets/layui/css/layui.mobile.css"> -->
        <!-- modernizr js -->
        <script src="/static/home/index/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="/static/admin/assets/layui/layui.js"></script>
        <script type="text/javascript" src="/static/admin/assets/js/jquery.js"></script>
    </head>
    <body>

{{-- $a =encrypt('123123') --}}


<!--header top area start-->
<div class="header_area">
    <div class="header_border">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="header_heaft_area">
                        <div class="header_left_all">
                            <div class="mean_al_dv">
                                <div class="littele_menu"><a href="#">语言: 英语 <i class="fa fa-caret-down"></i></a> </div>
                                <ul class="option">
                                    <li><a href="#">法语</a></li>
                                    <li><a href="#">德语</a></li>
                                    <li><a href="#">日语</a></li>
                                </ul>
                            </div>
                            <div class="usd_area">
                                <div class="littele_menu"><a href="#">
                                    Currency: USD
                                    <i class="fa fa-caret-down"></i>
                                    </a>
                                </div>
                                <ul class="option">
                                    <li><a href="#">EUR - Euro</a></li>
                                    <li><a href="#">GBP - British Pound</a></li>
                                    <li><a href="#">INR - Indian Rupee</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="header_right_area">
                        <ul>
                        @if (session('userlogin'))
                            <li>
                                <a class="Shopping cart" href="/grzx">欢迎您{{session('user.user_name')}}</a>
                            </li>
                            <li>
                                <a class="Shopping cart" href="/logout">退出</a>
                            </li>
                        @else
                            <li>
                                <a class="Shopping cart" href="/login">登录</a>
                            </li>
                            <li>
                                <a class="Shopping cart" href="/register">注册</a>
                            </li>
                            <li>
                        @endif
                                <a class="Shopping cart" href="/login">我的账户</a>
                            </li>
                            <li>
                                <a class="Shopping cart" href="/login">我的收藏</a>
                            </li>
                            <li>
                                <a class="Shopping cart" href="/shoppingcar">购物车</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top area end-->
    <!--header middle area start-->
    <div class="header_middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo_area">
                        <a href="index.html"><img src="/static/home/index/img/logo-pic/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="header_all search_box_area">
                        <form class="new_search" role="search" method="get" action="#">
                            <input id="mix_search" class="search-field" placeholder="Search Products…" value="" name="s" title="Search for:" type="search">
                            <input value="Search" type="submit">
                            <input name="post_type" value="product" type="hidden">
                        </form>
                    </div>
                    <div class="header_all shopping_cart_area">
                        <div class="widget_shopping_cart_content">
                            <div class="topcart">
                                <a class="cart-toggler" href="">
                                    <i class="icon"></i>
                                    <span class="my-cart">Shopping cart</span>
                                    <span class="qty">2 Items</span>
                                    <span class="fa fa-angle-down"></span>
                                </a>
                                <div class="new_cart_section">
                                    <ol class="new-list">
                                        <!-- single item -->
                                        <li class="wimix_area">
                                            <a class="pix_product" href="">
                                                <img alt="" src="/static/home/index/img/product-pic/7-150x98.jpg">
                                            </a>
                                            <div class="product-details">
                                                <a href="#">Adipiscing cursus eu</a>
                                                <span class="sig-price">1×$300.00</span>
                                            </div>
                                            <div class="cart-remove">
                                                <a class="action" href="#">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <!-- single item -->
                                        <!-- single item -->
                                        <li class="wimix_area">
                                            <a class="pix_product" href="#">
                                            <img alt="" src="/static/home/index/img/product-pic/1-150x98.jpg">
                                            </a>
                                            <div class="product-details">
                                                <a href="#">Duis convallis</a>
                                                <span class="sig-price">1×$100.00</span>
                                            </div>
                                            <div class="cart-remove">
                                                <a class="action" href="#">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <!-- single item -->
                                    </ol>
                                    <div class="top-subtotal">
                                        Subtotal: <span class="sig-price">$400.00</span>
                                    </div>
                                    <div class="cart-button">
                                        <ul>
                                            <li>
                                                <a href="#">View my cart <i class="fa fa-angle-right"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">Checkout <i class="fa fa-angle-right"></i></a>
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
    <!--header footer area start-->
    <div class="all_menu_area">
        <div class="menu_inner">
            <div class="container">
                <div class="full_menu clearfix">
                    <div class="new_menu">
                        <div class="drp-menu">
                            <div class="col-md-3 pr pl">
                                <div class="all_catagories">
                                    <div class="enable_catagories">
                                        <i class="fa fa-bars"></i>
                                        <span>EC优购</span>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
          
    <div class="catagory_menu_area">
        <div class="catagory_mega_menu">
            <div class="cat_mega_start">
                <ul class="list">
    <!-- 导航开始 -->
    @foreach($common_cate as $k=>$v )

        <li class="next_area" >
                <a class="item_link" href="goodlist?cate_pid={{$v->id}}">
                    <span class="link_content">
                        <span class="link_text">
                    {{ $v->cate_name }}
                    <span class="link_descr">{{ $v->cate_desc }}</span>
                        </span>
                    </span>
                </a>

            <ul class="electronics_drpdown">
                <li class="parent">
                    <a href="#"></a>
                        <div class="mega_menu">
                            @foreach($v->sum as $kk => $vv)
                                <div class="mega_menu_coloumn">
                                    <ul>
                                        <li><a href="goodlist?cate_id={{$vv->id}}">{{ $vv->cate_name }}</a></li>
                                            @foreach($vv->sum as $kkk=>$vvv)
                                            @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                </li>
            </ul>
        </li>
    @endforeach
    <!-- 导航结束 -->                                    
            </ul>
        </div>
    </div>
    </div>
</div>
             <!--menu area start-->
                            <div class="col-md-9 pl">
                                <div class="menu_area">
                                    <div class="menu">
                                        <nav>
                                            <ul>
                                                @foreach(App\Http\Model\Admin\Navigation::get() as $k =>$v)
                                                    <li><a href="{{ $v->nav_link }}">{{$v->nav_title}}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- mobile-menu-area-start -->
<div class="mobile-menu-area hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul id="nav">
                            <li><a href="index.html">Home</a></li>
							<li><a href="about-us.html">About</a></li>
							<li><a href="cart.html">Cart</a></li>
							<li><a href="list-view.html">List</a></li>
							<li><a href="my.account.html">Account</a></li>
							<li><a href="simple-product.html">Product</a></li>
							<li><a href="contact-us.html">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area-end -->
<!--slider area start-->
@section('content')

@show
        <!--newsletter area start-->
        <div class="all_news_letter">
            <div class="news_letter">
                <div class="news_middele">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="news_heading">
                                    <h3> newsletter </h3>
                                </div>
                                <div class="full_form">
                                    <form id="form-newsletter1" class="widget_wysija" method="post" action="#wysija">
                                        <p class="wysija-paragraph">
                                            <input name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Enter Your Mail..." placeholder="Enter Your Mail..." value="" id="form-validation-field-0" style="" type="text">
                                        </p>
                                        <input class="wysija-submit wysija-submit-field" value="Subscribe!" type="submit">
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="dxpt_area">
                                    <div class="news_right">
                                        <div class="news_heading news_heading_3">
                                            <h3 class="follow_mix">Follow us:</h3>
                                        </div>
                                        <ul class="social-icons">
                                            <li>
                                                <a class="facebook social-icon" href="#facebook" title="" target="_blank" data-toggle="tooltip" data-original-title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="twitter social-icon" href="#twitter.com" title="" target="_blank" data-toggle="tooltip" data-original-title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="google-plus social-icon" href="#google-plus" title="" target="_blank" data-toggle="tooltip" data-original-title="Google-plus">
                                                <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="youtube social-icon" href="#youtube" title="" target="_blank" data-toggle="tooltip" data-original-title="Youtube">
                                                <i class="fa fa-youtube"></i>
                                                </a>
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
        <!--newsletter area end-->
        <!--footer top area start-->
        <div class="footer_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer_menu">
                            <div class="news_heading_2">
                                <h3>Information </h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li>
                                        <a href="#">our blog</a>
                                    </li>
                                    <li>
                                        <a href="#">about our shop</a>
                                    </li>
                                    <li>
                                        <a href="#">secure shopping</a>
                                    </li>
                                    <li>
                                        <a href="#">privecy policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer_menu">
                            <div class="news_heading_2">
                                <h3>My Account </h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li>
                                        <a href="#">My Account</a>
                                    </li>
                                    <li>
                                        <a href="#">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#">Shopping Cart</a>
                                    </li>
                                    <li>
                                        <a href="#">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer_menu">
                            <div class="news_heading_2">
                                <h3> Our Services </h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li>
                                        <a href="#">Shipping & Returns</a>
                                    </li>
                                    <li>
                                        <a href="#">Secure Shopping</a>
                                    </li>
                                    <li>
                                        <a href="#">International Shipping</a>
                                    </li>
                                    <li>
                                        <a href="#">Affiliates</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer_menu footer_menu_2">
                            <div class="news_heading_2">
                                <h3> Store Information </h3>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa fa-home"></i>
                                    <p>My Company : 42 avenue des Champs Elysées 75000  France</p>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <p>Phone: (0123) 456789</p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <p>Email: admin@hastech.company</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer top area end-->
            <!--footer middle area start-->
            <div class="footer_middle">
                <div class="container">
                    <div class="fotter_inner">
                        <div class="middele_pic">
                            <img src="/static/home/index/img/icon/payment-300x30.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer middle area end-->
        <!--footer bottom area start-->
        <div class="footer-bottom">
            <div class="container">
                <div class="widget-copyright text-center">
                    Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
                </div>
            </div>
        </div>
        <!--footer bottom area end-->
        <!--modal content start-->

		
		
		
		
		
		
        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="/static/home/index/js/vendor/jquery-1.12.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="/static/home/index/js/bootstrap.min.js"></script>
        <!-- nivo slider js -->
        <script src="/static/home/index/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="/static/home/index/lib/home.js" type="text/javascript"></script>
        <!-- owl.carousel js -->
        <script src="/static/home/index/js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="/static/home/index/js/jquery.meanmenu.js"></script>
        <!-- jquery-ui js -->
        <script src="/static/home/index/js/jquery-ui.min.js"></script>
        <!-- easing js -->
        <script src="/static/home/index/js/jquery.easing.1.3.js"></script>
        <!-- mixitup js -->
        <script src="/static/home/index/js/jquery.mixitup.min.js"></script>
        <!-- jquery.countdown js -->
        <script src="/static/home/index/js/jquery.countdown.min.js"></script>
        <!-- wow js -->
        <script src="/static/home/index/js/wow.min.js"></script>
        <!-- popup js -->
        <script src="/static/home/index/js/jquery.magnific-popup.min.js"></script> 
        <!-- plugins js -->
        <script src="/static/home/index/js/plugins.js"></script>
        <!-- main js -->
        <script src="/static/home/index/js/main.js"></script>

@section('js')
@show

    </body>
</html>


