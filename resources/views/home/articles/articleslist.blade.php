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
                                首页 /
                            </a>
                        </li>
                        <li class="br-active">
                            <a href="/articles">
                                文章
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
                        推荐商品
                    </h2>
                    <div class="menu-categories-container">
                        <ul class="menu-categories">
                            @foreach($res as $k=>$v)
                            <li>
                                <center>
                                    <a href="/goodlist/{{$v->id}}"><img src="/static/admin/images/goods_img/{{$v->goods_img}}" style="width:200px;">
                                    </a>
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
                    
                    <div class="bar_box">
                        <form action="#">
                            <select>
                                <option value="Default sorting" selected>
                                    最新文章
                                </option>
                                @foreach($art as $k => $v)
                                <option value="Default sorting">
                                   {{$v->art_title}}
                                </option>
                                @endforeach
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

                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="row">

                        	<!-- 单个文章开始 -->
                        	@foreach($data as $k=>$v)
                            <div class="col-md-4 col-sm-4">
                                <div class="all-pros all-pros-3 all-pros-latest">
                                    <div class="">
                                        <a href="/articles/{{$v->id}}">
                                            <img class="primary-img" width="260" height="170" src="/static/admin/images/articles/{{$v->art_img}}"
                                            alt="" style="width: 260px;height: 170px">

                                           
                                        </a>
                                    </div>
                                  
                                    <div class="product_content">
                                        <div class="usal_pro">
                                            <br>
                                            <div class="price_box">
                                                <span class="spical-price" style="white-space:nowrap; text-overflow:ellipsis; overflow:hidden;" >
                                                    {{$v->art_title}}
                                                </span>
                                            </div>
                                            <div class="last_button_area">
                                                <ul class="add-to-links clearfix">
                                                    
                                                    <li>
                                                        <div class="new_act">
                                                            <a class="button_act button_act_2 button_act_hts" data-quick-id="45" target="_blank" href="/articles/{{$v->id}}" title="" data-toggle="tooltip" data-original-title="点击查看详细信息" style="text-align: center;width: 150px">查看文章详情
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <br>
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
                     <ul class="pagination">
                <li>{{ $data->appends($request)->links() }}</li>
  
            </ul>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Modal -->

        <!--modal content end-->



@endsection