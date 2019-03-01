@extends('layout.home')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="shop_menu shop_menu_2">
                <ul class="cramb_area cramb_area_5">
                    <li>
                        <a href="index.html">
                            Home /
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            Shop /
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            Headlight/
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            Hats /
                        </a>
                    </li>
                    <li class="br-active">
                        Cras nec nisl ut erat
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- 上部商品开始 -->
<div class="elavator_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="elavetor">
                    <img id="zoom" src="img/elavetor/small/l-8.jpg" data-zoom-image="img/elavetor/large/l-8.jpg"
                    alt="">
                    <div class="al_zoom">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="elav_titel">
                    <div class="elv_heading">
                        <h3>
                            {{$goods->goods_name}}
                        </h3>
                    </div>
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
                            <i class="fa fa-star-o">
                            </i>
                        </a>
                        <a class="review-link" href="#">
                            (
                            <span class="count">
                                {{$goods->click_num}}
                            </span>
                            点击热度)
                        </a>
                    </div>
                    <div class="evavet_description">
                        <p>
                            {{$goods->goods_title}}
                        </p>
                    </div>
                    <div class="elavetor_social">
                        <h3 class="widget-title">
                            Share this product
                        </h3>
                        <ul class="social-link">
                            <li>
                                <a class="fb" data-original-title="facebook" href="#" title="" data-toggle="tooltip">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="elav_info">
                    <div class="price_box price_box_acr">
                        <span class="old- price old- price-2">
                            ${{$goods->markte_price}}
                        </span>
                        <span class="spical-price spical-price-2">
                            ${{$goods->goods_price}}
                        </span>
                    </div>
                    <form class="cart-btn-area" action="#">
                        <input type="number" value="1">
                        <button class="add-tocart cart_zpf" type="submit">
                            加入购物车
                        </button>
                    </form>
                    <div class="add_defi">
                        <a href="#" data-original-title="Add to Wishlist" data-toggle="tooltip">
                            <i class="fa fa-heart another_icon">
                            </i>
                            收藏
                        </a>
                    </div>
                    <div class="add_defi_2">
                        <a data-original-title="Compare" title="" data-toggle="tooltip" rel="nofollow"
                        data-product_id="45" href="">
                            <i class="fa fa-refresh another_icon">
                            </i>
                            刷新
                        </a>
                    </div>
                    <div class="new_meta">
                        <span class="sku_wrapper">
                            SKU:
                            <span class="sku">
                                W-hat-8
                            </span>
                        </span>
                        <span class="posted_in">
                            Categories:
                            <a rel="tag" href="#">
                                Accessories
                            </a>
                            ,
                            <a rel="tag" href="#">
                                Hats
                            </a>
                        </span>
                        <span class="tagged_as">
                            Tag:
                            <a rel="tag" href="#">
                                fashion
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 上部商品结束 -->

<!-- 详情开始 -->
<div class="tab_area_start">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                        <div class="my-tabs">
                            <!-- Nav tabs -->
                            <ul class="favtabs favtabs-2 favtabs-nytr" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">Discription</a></li>
                                <li role="presentation" class=""><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">Reviews (2)</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="tb_desc">
                                                <h2>Product Description</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante.</p>
                                                <p>Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <div class="tb_desc">
                                                <div class="review_area_heading">
                                                    <div id="comnt">
                                                        <h2>2 reviews for Cras nec nisl ut erat</h2>
                                                        <ol class="commentlist">
                                                            <li id="li-comment-22" class="comment even thread-even depth-1" itemscope="">
                                                                <div id="comment-22" class="comment_container">
                                                                    <img class="avatar avatar-60 photo" src="img/icon/men_icon.jpg" alt="" width="60" height="60">
                                                                    <div class="comment-text">
                                                                        <div class="star-rating" title="Rated 4 out of 5" itemscope="">
                                                                            <div class="price_rating price_rating_2">
                                                                                <a href="#">
                                                                                <i class="fa fa-star"></i>
                                                                                </a>
                                                                                <a href="#">
                                                                                <i class="fa fa-star"></i>
                                                                                </a>
                                                                                <a href="#">
                                                                                <i class="fa fa-star"></i>
                                                                                </a>
                                                                                <a href="#">
                                                                                <i class="fa fa-star"></i>
                                                                                </a>
                                                                                <a class="not-rated" href="#">
                                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                                </a>
                                                                                <span>
                                                                                <strong>4</strong>
                                                                                out of 5
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="meta">
                                                                            <strong>admin</strong>
                                                                            –
                                                                            <time datetime="2015-12-16T15:26:49+00:00">December 16, 2015</time>
                                                                            :
                                                                        </p>
                                                                        <div class="description">
                                                                            <p>like</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="comment even thread-even depth-1" itemscope="">
                                                                <div class="comment_container">
                                                                    <img class="avatar avatar-60 photo" src="img/icon/men_icon.jpg" alt="" width="60" height="60">
                                                                    <div class="comment-text">
                                                                        <div class="star-rating" title="Rated 4 out of 5" itemscope="">
                                                                            <div class="price_rating price_rating_2">
                                                                                <a href="#">
                                                                                <i class="fa fa-star"></i>
                                                                                </a>
                                                                                <a href="#">
                                                                                <i class="fa fa-star"></i>
                                                                                </a>
                                                                                <a href="#">
                                                                                <i class="fa fa-star"></i>
                                                                                </a>
                                                                                <a href="#">
                                                                                <i class="fa fa-star"></i>
                                                                                </a>
                                                                                <a class="not-rated" href="#">
                                                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                                </a>
                                                                                <span>
                                                                                <strong>4</strong>
                                                                                out of 5
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="meta">
                                                                            <strong>alex</strong>
                                                                            –
                                                                            <time datetime="2015-12-16T15:26:49+00:00">December 18, 2015</time>
                                                                            :
                                                                        </p>
                                                                        <div class="description">
                                                                            <p>google</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                    <div class="review_form_area">
                                                        <div class="review_form">
                                                            <div class="revew_form_content">
                                                                <h3 id="reply-title" class="comment-reply-title">
                                                                    Add a review
                                                                    <small>
                                                                    <a id="cancel-comment-reply-link" style="display:none;" href="#" rel="nofollow">Cancel reply</a>
                                                                    </small>
                                                                </h3>
                                                                <form id="commentform" class="comment-form" method="post" action="form">
                                                                    <div class="comment-form-rating">
                                                                        <label class="comment">Your Rating</label>
                                                                        <div class="price_rating price_rating_2 price_rating_3">
                                                                            <a href="#">
                                                                            <i class="fa fa-star-o"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                            <i class="fa fa-star-o"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                            <i class="fa fa-star-o"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                            <i class="fa fa-star-o"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                            <i class="fa fa-star-o"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-form-comment">
                                                                        <label class="comment">Your Review</label>
                                                                        <textarea id="comment" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                                                                    </div>
                                                                    <div class="comment-form-author">
                                                                        <label class="comment">
                                                                        Name
                                                                        <span class="required required_menu">*</span>
                                                                        </label>
                                                                        <input id="author" class="mix_type" type="text" aria-required="true" size="30" value="" name="author">
                                                                    </div>
                                                                    <div class="comment-form-email">
                                                                        <label class="comment">
                                                                        Email
                                                                        <span class="required required_menu">*</span>
                                                                        </label>
                                                                        <input id="email" class="mix_type" type="text" aria-required="true" size="30" value="" name="email">
                                                                    </div>
                                                                    <div class="form-submit">
                                                                        <input id="sub" class="submt" type="submit" value="Submit" name="submit">
                                                                    </div>
                                                                </form>
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
            </div>
 </div>

<!-- 底部同品牌推荐开始 -->
<section class="product_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="all_product">
                            <div class="new_product">
                                <div class="product_heading">
                                    <i class="fa fa-paper-plane-o"></i>
                                    <span>Ralated Produtcs</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="product_tx">
                                    <div class="col-md-3">
                                        <div class="all-pros">
                                            <div class="single_product single_product_2">
                                                <span>hot</span>
                                            </div>
                                            <div class="sinle_pic">
                                                <a href="#">
                                                <img class="primary-img" src="img/top-pic/top_pic_6.jpg" alt="">
                                                <img class="secondary-img" src="img/product-pic/product_pic_10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="" data-original-title="Quickview">Quick View</button>   
                                            </div>
                                            <div class="product_content">
                                                <div class="usal_pro">
                                                    <div class="product_name_2">
                                                        <h2>
                                                            <a href="#">Purus felis</a>
                                                        </h2>
                                                    </div>
                                                    <div class="product_price">
                                                        <div class="price_rating">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="spical-price">$200.00</span>
                                                    </div>
                                                    <div class="last_button_area last_button_area_px">
                                                        <ul class="add-to-links clearfix">
                                                            <li class="addwishlist">
                                                                <div class="yith-wcwl-add-button show">
                                                                    <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="new_act">
                                                                    <a class="button_act button_act_ct" data-quick-id="45" href="" title="" data-toggle="tooltip" data-original-title="Donec non est at">Go to Buy</a>
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
                                    <div class="col-md-3 ">
                                        <div class="all-pros all-pros-2">
                                            <div class="single_product single_product_2">
                                                <span>hot</span>
                                            </div>
                                            <div class="sinle_pic">
                                                <a href="#">
                                                <img class="primary-img" src="img/product-pic/product_pic_3.jpg" alt="">
                                                <img class="secondary-img" src="img/product-pic/product_pic_4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="" data-original-title="Quickview">Quick View</button>   
                                            </div>
                                            <div class="product_content">
                                                <div class="usal_pro">
                                                    <div class="product_name_2">
                                                        <h2>
                                                            <a href="#">Accumsan eli</a>
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
                                                        <span class="spical-price">$100.00</span>
                                                    </div>
                                                    <div class="last_button_area last_button_area_px">
                                                        <ul class="add-to-links clearfix">
                                                            <li class="addwishlist">
                                                                <div class="yith-wcwl-add-button show">
                                                                    <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="new_act">
                                                                    <a class="button_act button_act_ct" data-quick-id="45" href="" title="" data-toggle="tooltip" data-original-title="Donec non est at">Add To Cart</a>
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
                                    <div class="col-md-3">
                                        <div class="all-pros all-pros-3">
                                            <div class="single_product_3 ">
                                                <span>sale</span>
                                            </div>
                                            <div class="sinle_pic">
                                                <a href="#">
                                                <img class="primary-img" src="img/top-pic/top_pic_1.jpg" alt="">
                                                <img class="secondary-img" src="img/top-pic/top_pic_1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="" data-original-title="Quickview">Quick View</button>   
                                            </div>
                                            <div class="product_content">
                                                <div class="usal_pro">
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
                                                            <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            </a>
                                                            <a href="#">
                                                            <i class="fa fa-star"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="spical-price">$150.00</span>
                                                    </div>
                                                    <div class="last_button_area last_button_area_px">
                                                        <ul class="add-to-links clearfix">
                                                            <li class="addwishlist">
                                                                <div class="yith-wcwl-add-button show">
                                                                    <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="new_act">
                                                                    <a class="button_act button_act_ct" data-quick-id="45" href="" title="" data-toggle="tooltip" data-original-title="Donec non est at">Add To Cart</a>
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
                                    <div class="col-md-3">
                                        <div class="all-pros all-pros-4">
                                            <div class="single_product single_product_2">
                                                <span>hot</span>
                                            </div>
                                            <div class="sinle_pic">
                                                <a href="#">
                                                <img class="primary-img" src="img/product-pic/product_pic_15.jpg" alt="">
                                                <img class="secondary-img" src="img/product-pic/product_pic-14.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="" data-original-title="Quickview">Quick View</button>   
                                            </div>
                                            <div class="product_content">
                                                <div class="usal_pro">
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
                                                    <div class="price_box">
                                                        <span class="spical-price">$100.00</span>
                                                    </div>
                                                    <div class="last_button_area last_button_area_px">
                                                        <ul class="add-to-links clearfix">
                                                            <li class="addwishlist">
                                                                <div class="yith-wcwl-add-button show">
                                                                    <a class="add_to_wishlist" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="new_act">
                                                                    <a class="button_act button_act_ct" data-quick-id="45" href="" title="" data-toggle="tooltip" data-original-title="Donec non est at">Add To Cart</a>
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
                </div>
            </div>
        </section>
<!-- 底部同品牌推荐结束 -->

<!-- 最底部同类型推荐开始 -->
<div class="logo_area">
            <div class="container">
                <div class="row">
                    <div class="brand brand-2 brand-2-dt">
                        <div class="new_product">
                            <div class="product_heading product_heading_tf">
                                <i class="fa fa-coffee"></i>
                                <span>Brand Logo</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="main_brand main_brand_tf">
                            <div class="all_brand indicator-brand indicator-brand-7 owl-carousel owl-theme" style="opacity: 1; display: block;">
                                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2660px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 190px;"><div class="col-md-12">
                                    <div class="brand_pix">
                                        <img src="img/brand-logo/logo_1.jpg" alt="">
                                    </div>
                                </div></div><div class="owl-item" style="width: 190px;"><div class="col-md-12">
                                    <div class="brand_pix">
                                        <img src="img/brand-logo/logo_2.jpg" alt="">
                                    </div>
                                </div></div><div class="owl-item" style="width: 190px;"><div class="col-md-12">
                                    <div class="brand_pix">
                                        <img src="img/brand-logo/logo_3.jpg" alt="">
                                    </div>
                                </div></div><div class="owl-item" style="width: 190px;"><div class="col-md-12">
                                    <div class="brand_pix">
                                        <img src="img/brand-logo/logo_4.jpg" alt="">
                                    </div>
                                </div></div><div class="owl-item" style="width: 190px;"><div class="col-md-12">
                                    <div class="brand_pix">
                                        <img src="img/brand-logo/logo_5.jpg" alt="">
                                    </div>
                                </div></div><div class="owl-item" style="width: 190px;"><div class="col-md-12">
                                    <div class="brand_pix">
                                        <img src="img/brand-logo/logo_6.jpg" alt="">
                                    </div>
                                </div></div><div class="owl-item" style="width: 190px;"><div class="col-md-12">
                                    <div class="brand_pix">
                                        <img src="img/brand-logo/logo_3.jpg" alt="">
                                    </div>
                                </div></div></div></div>
                                
               
                            <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- 最底部同类型推荐结束 -->
@endsection