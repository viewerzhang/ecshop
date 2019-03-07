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
                        热销商品排行
                    </h2>
                    <div class="menu-categories-container">
                        <ul class="menu-categories">
                            @foreach($res as $k=>$v)
                            <li>
                                <center><img src="/static/admin/images/goods_img/{{$v->goods_img}}" style="width:200px;">
                                </center>

                                <div style="padding: 30px">{{$v->goods_name}}

                            
                                <div style="margin: 5px;color: #ed1c24;font-size: 15px"><b>￥{{$v->goods_price}}</b>
                                </div>

                                <div style="margin: 5px;color: #999999">已有{{$v->click_num}}人评价
                                </div>
                                
                                
                            </li>
                           @endforeach
                        </ul>
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
                        	@foreach($data as $k => $v)

                            <div class="col-md-4 col-sm-4">
                                <div class="all-pros all-pros-3 all-pros-latest">
                                    <div class="sinle_pic">
                                        <a href="/goodlist/{{$v->id}}">
                                            <img class="primary-img" width="260" height="170" src="/static/admin/images/goods_img/{{$v->goods_img}}"
                                            alt="" style="width: 260px;height: 170px">

                                            
                                            <img class="secondary-img" style="width: 260px;height: 170px" src="/static/admin/images/goods_imgs/{{ $v->goodsimgs[0]->goods_imgs }}" width="260" height="170" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action" data-toggle="modal" data-target="#{{ $v->goods_bianhao }}">
                                                        <button type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="更高效的购物体验">快速查看</button>   
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
                                                    ￥{{$v->goods_price}}
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
                                                            <a class="button_act button_act_2 button_act_hts" data-quick-id="45" target="_blank" href="/goodlist/{{$v->id}}"
                                                                        title="" data-toggle="tooltip" data-original-title="点击查看详细信息">
                                                                            查看详情
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

                    <!-- 另外一个列表页 -->
                    
                    <div role="tabpanel" class="tab-pane" id="profile">
                        @foreach($data as $k=>$v)
                        @if($k>1)
                            <?php break ?>
                            @endif
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
                                                    <a href="/goodlist/{{$v->id}}">
                                                        <img class="primary-img" src="/static/admin/images/goods_img/{{$v->goods_img}}" alt="" style="width: 291px;height: 200px">

                                                        <img class="secondary-img" src="/static/admin/images/goods_imgs/{{ $v->goodsimgs[0]->goods_imgs }}" width="260" height="170" alt="" style="width: 291px;height: 200px">
                                                    </a>
                                                </div>
                                                <div class="product-action" data-toggle="modal" data-target="#{{ $v->goods_bianhao }}">
                                                        <button style="margin-top: 50px;" type="button" class="btn btn-info btn-lg quickview" data-toggle="tooltip" title="更高效的购物体验">快速查看</button>   
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a href="#">
                                                                {{$v->goods_name}}
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p>
                                                                {{$v->goods_title}}
                                                            </p>

                                                            <p>
                                                                市场价：￥{{$v->markte_price}}
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
                                                                ￥{{$v->goods_price}}
                                                            </span>
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a class="button_act button_act_2 button_act_hts" data-quick-id="45" target="_blank" href="/goodlist/{{$v->id}}"
                                                                        title="" data-toggle="tooltip" data-original-title="点击查看详细信息">
                                                                            查看详情
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
                        @endforeach                
                    </div>

                    <!-- 另外一个列表页结束 -->
                     <ul class="pagination">
	        	<li>{{ $data->appends($request)->links() }}</li>
  
            </ul>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Modal -->
        @foreach($data as $kk => $vv)
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