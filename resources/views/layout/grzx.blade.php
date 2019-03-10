@extends('layout.home')

@section('content')
<!-- 继承主模板一一显示提示页面 开始 -->
<script src="/js/holder.min.js"></script>
<div class="shop_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop_menu shop_menu_tk " style="padding-bottom: 0px;">
                    <ul class="cramb_area cramb_area_2 cramb_area_ktp">
                        <li><a href="/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">主页/</font></font></a></li>
                        <li><a href="/grzx"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">@yield('title')</font></font></a></li>
                    </ul>
                    <hr class="hrtop">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 继承主模板一一显示提示页面 结束 -->

<div class="shop_area">
	<div class="container">
		<div class="row">
			<!-- 详情链接跳转地址 开始 -->
			<div class="col-md-3">
				<div class="category-widget-menu">
                    <h2 class="cat-menu-title text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" style="border: 1px solid #aaa;">订单中心</font></font></h2>
                    <div class="menu-categories-container">
                        <ul class="menu-categories">
                            <li><a href="/goodsorder"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的订单</font></font></a></li>
                        </ul>
                        <ul class="menu-categories">
                            <li><a href="/shoppingcar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物车</font></font></a></li>
                        </ul>
                        <ul class="menu-categories">
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">已发货</font></font></a></li>
                        </ul>
                        <ul class="menu-categories">
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">待发货</font></font></a></li>
                        </ul>
                        <ul class="menu-categories">
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">已送达</font></font></a></li>
                        </ul>
                    </div>
                </div>
                <div class="category-widget-menu">
                    <h2 class="cat-menu-title text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理中心</font></font></h2>
                    <div class="menu-categories-container">
                    	<ul class="menu-categories">
                            <li><a href="/grzx/grxx"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">用户信息</font></font></a></li>
                        </ul>
                        <ul class="menu-categories">
                            <li><a href="/coupons/my"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的优惠券</font></font></a></li>
                        </ul>
                        <ul class="menu-categories">
                            <li><a href="/useraddr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地址管理</font></font></a></li>
                        </ul>
                        <ul class="menu-categories">
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改信息</font></font></a></li>
                        </ul>
                        <ul class="menu-categories">
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改密码</font></font></a></li>
                        </ul>
                        <ul class="menu-categories">
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改手机号</font></font></a></li>
                        </ul>
                    </div>
                </div>
			</div>
			<!-- 详情链接跳转地址 结束 -->
			@section('grzx')

            @show
		</div>
	</div>
</div>






@endsection