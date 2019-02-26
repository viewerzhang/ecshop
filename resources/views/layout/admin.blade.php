<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{ asset('/static/admin/assets/img/favicon.png') }}" type="image/x-icon">


    <!--Basic Styles-->

    <script type="text/javascript" src="{{ asset('/static/admin/assets/layui/layui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/static/admin/assets/js/jquery.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/static/admin/assets/layui/css/layui.css') }}">
    <link href="{{ asset('/static/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{ asset('/static/admin/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/static/admin/assets/css/weather-icons.min.css') }}" rel="stylesheet" />
    <!--Fonts-->
<!--     <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css"> -->

    <!--Beyond styles-->
    
    <link href="{{ asset('/static/admin/assets/css/beyond.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/static/admin/assets/css/demo.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/static/admin/assets/css/typicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/static/admin/assets/css/animate.min.css') }}" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />


    <!-- 引用adminidnex下的css文件 -->
    <!-- <link href="{{ asset('/static/admin/assets/css/adminindex/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('/static/admin/assets/css/adminindex/css/zidingyi.css') }}" rel="stylesheet" /> -->
    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{ asset('/static/admin/assets/js/skins.min.js') }}"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="{{ asset('/static/admin/assets/img/logo.png') }}" alt="" />
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->

                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings --->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                

                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="/static/admin/assets/img/avatars/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>David Stevenson</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="email"><a>David.Stevenson@live.com</a></li>
                                    <!--Avatar Area-->
                                    <li>
                                        <div class="avatar-area">
                                            <a href="/admin/admin">
                                                <img src="{{ asset('/static/admin/assets/img/avatars/adam-jansen.jpg') }}" class="avatar">
                                            </a>
                                            <span class="caption">Change Photo</span>
                                        </div>
                                    </li>
                                    <!--Avatar Area-->
                                    <li class="edit">
                                        <a href="profile.html" class="pull-left">Profile</a>
                                        <a href="#" class="pull-right">Setting</a>
                                    </li>
                                    <!--Theme Selector Area-->
                                    <li class="theme-area">
                                        <ul class="colorpicker" id="skin-changer">
                                            <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="{{ asset('/static/admin/assets/css/skins/blue.min.css') }}"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="{{ asset('/static/admin/assets/css/skins/azure.min.css') }}"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="{{ asset('/static/admin/assets/css/skins/teal.min.css') }}"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="{{ asset('/static/admin/assets/css/skins/green.min.css') }}"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="{{ asset('/static/admin/assets/css/skins/orange.min.css') }}"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="{{ asset('/static/admin/assets/css/skins/pink.min.css') }}"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="{{ asset('/static/admin/assets/css/skins/darkred.min.css') }}"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="{{ asset('/static/admin/assets/css/skins/purple.min.css') }}"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="{{ asset('/static/admin/assets/css/skins/darkblue.min.css') }}"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="{{ asset('/static/admin/assets/css/skins/gray.min.css') }}"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="{{ asset('/static/admin/assets/css/skins/black.min.css') }}"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="{{ asset('/static/admin/assets/css/skins/deepblue.min.css') }}"></a></li>
                                        </ul>
                                    </li>
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        <a href="login.html">
                                            Sign out
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul>
                        <div class="setting">
                            <a id="btn-setting" title="Setting" href="#">
                                <i class="icon glyphicon glyphicon-cog"></i>
                            </a>
                        </div><div class="setting-container">
                            <label>
                                <input type="checkbox" id="checkbox_fixednavbar">
                                <span class="text">Fixed Navbar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedsidebar">
                                <span class="text">Fixed SideBar</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedbreadcrumbs">
                                <span class="text">Fixed BreadCrumbs</span>
                            </label>
                            <label>
                                <input type="checkbox" id="checkbox_fixedheader">
                                <span class="text">Fixed Header</span>
                            </label>
                        </div>
                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
   
            <!-- /Page S
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->

                    <!-- 后台首页 -->
                    <li>
                    <a href="{{ url('admin/index') }}">
                        <i class="menu-icon glyphicon glyphicon-home"></i>
                        <span class="menu-text"> 后台首页 </span>
                    </a>

                    <!-- 用户管理 -->

                    <li>
                        <a href="databoxes.html">
                            <i class="menu-icon fa fa-user-md"></i>
                            <span class="menu-text"> 用户管理 </span>
                        </a>
                    </li>

                    <!-- 管理员 -->
                     <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-user"></i>
                            <span class="menu-text"> 管理员 </span>
                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">添加管理员</span>
                                </a>
                            </li>
                             <li>
                                <a href="elements.html">
                                    <span class="menu-text">管理员列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>
               
                    <!--  RBAC管理  -->
                       <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-wrench"></i>
                            <span class="menu-text"> RBAC管理 </span>
                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">

                            <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                     角色管理
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">添加角色</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="glyph-icons.html">
                                            <i class="menu-icon glyphicon glyphicon-stats"></i>
                                            <span class="menu-text">浏览角色</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                           <li>
                                <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                     权限管理
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu">
                                    <li>
                                        <a href="font-awesome.html">
                                            <i class="menu-icon fa fa-rocket"></i>
                                            <span class="menu-text">添加权限</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="glyph-icons.html">
                                            <i class="menu-icon glyphicon glyphicon-stats"></i>
                                            <span class="menu-text">浏览权限</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!--商品管理-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-shopping-cart"></i>
                            <span class="menu-text"> 商品管理 </span>
                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">添加商品</span>
                                </a>
                            </li>
                             <li>
                                <a href="elements.html">商品列表</span>
                                </a>
                            </li>
                            <li>
                                <a href="elements.html">商品回收站</span>
                                </a>
                            </li>
                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>

                      <!-- 类别管理 -->
                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon  glyphicon glyphicon-th-list"></i>
                            <span class="menu-text"> 类别管理 </span>
                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">添加类别</span>
                                </a>
                            </li>
                             <li>
                                <a href="elements.html">
                                    <span class="menu-text">类别列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>
                
                    <!-- 类型管理 -->
                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-list"></i>
                            <span class="menu-text"> 类型管理 </span>
                            <i class="menu-expand"></i>  
                            <i class="menu-expand"></i>	
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">添加类型</span>
                                </a>
                            </li>
                             <li>
                                <a href="elements.html">
                                    <span class="menu-text">类型列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>
                        <!--属性管理 -->

                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon  glyphicon glyphicon-briefcase"></i>
                            <span class="menu-text">属性管理 </span>
                            <i class="menu-expand"></i>                  
                            <i class="menu-expand"></i>			
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">添加属性</span>
                                </a>
                            </li>
                             <li>
                                <a href="elements.html">
                                    <span class="menu-text">属性列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>
                     <!--   品牌管理 -->
                     <!--	品牌管理 -->

                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon  glyphicon glyphicon-hdd "></i>
                            <span class="menu-text">品牌管理 </span>
                            <i class="menu-expand"></i>     
                            <i class="menu-expand"></i>		
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="{{ asset('/admin/goodsbrand/create') }}">
                                    <span class="menu-text">添加品牌</span>
                                </a>
                            </li>
                             <li>
                                <a href="{{ asset('/admin/goodsbrand') }}">
                                    <span class="menu-text">品牌列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>
                        <!--    订单管理 -->
                        <!--	订单管理 -->
                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-th"></i>
                            <span class="menu-text">订单管理 </span>
                            <i class="menu-expand"></i>                  
                            <i class="menu-expand"></i>				
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">添加订单</span>
                                </a>
                            </li>
                             <li>
                                <a href="elements.html">
                                    <span class="menu-text">订单列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>
                      <!--  轮播图管理 -->
                      <!--	轮播图管理 -->
                      <li>
                        <a href="http://www.ecshop.com/admin/lunbo/index" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-picture"></i>
                            <span class="menu-text">轮播图管理 </span>
                            <i class="menu-expand"></i>                
                            <i class="menu-expand"></i>					
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="/admin/lunbo/create">
                                    <span class="menu-text">添加轮播图</span>
                                </a>
                            </li>
                             <li>
                                <a href="/admin/lunbo/index">
                                    <span class="menu-text">轮播图列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>
                         <!--   广告管理 -->
                         <!--	广告管理 -->
                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">广告管理 </span>
                            <i class="menu-expand"></i>             
                            <i class="menu-expand"></i>				
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="/admin/ad/create">
                                    <span class="menu-text">添加广告</span>
                                </a>
                            </li>
                             <li>
                                <a href="/admin/ad">
                                    <span class="menu-text">广告列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>

                         <!--   导航管理 -->
                         <!--	导航管理 -->
                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-road"></i>
                            <span class="menu-text">导航管理 </span>
                            <i class="menu-expand"></i>              
                            <i class="menu-expand"></i>				
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="/admin/nav/create">
                                    <span class="menu-text">添加导航</span>
                                </a>
                            </li>
                             <li>
                                <a href="/admin/nav">
                                    <span class="menu-text">导航列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>

                         <!--   文章管理 -->
                         <!--	文章管理 -->
                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-file"></i>
                            <span class="menu-text">文章管理 </span>
                            <i class="menu-expand"></i>             
                            <i class="menu-expand"></i>			
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="/admin/articles/create">
                                    <span class="menu-text">添加文章</span>
                                </a>
                            </li>
                             <li>
                                <a href="/admin/articles">
                                    <span class="menu-text">文章列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>
                         <!--   友情链接管理 -->
                         <!--	友情链接管理 -->

                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon  glyphicon glyphicon-paperclip "></i>
                            <span class="menu-text">友情链接管理 </span>

                            <i class="menu-expand"></i>                                     
                            <i class="menu-expand"></i>										
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="/admin/links/add">
                                    <span class="menu-text">添加链接</span>
                                </a>
                            </li>
                             <li>
                                <a href="/admin/links/index">
                                    <span class="menu-text">链接列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>
                         <!--   栏目管理 -->
                         <!--	栏目管理 -->

                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon glyphicon glyphicon-phone"></i>
                            <span class="menu-text">栏目管理 </span>
                            <i class="menu-expand"></i>                                     
                            <i class="menu-expand"></i>										
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="/admin/column/create">
                                    <span class="menu-text">添加栏目</span>
                                </a>
                            </li>
                             <li>
                                <a href="/admin/column">
                                    <span class="menu-text">栏目列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>

                         <!--   系统设置 -->
                         <!--	系统设置 -->

                      <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon  glyphicon glyphicon-cog"></i>
                            <span class="menu-text">系统设置 </span>
                            <i class="menu-expand"></i>                                     
                            <i class="menu-expand"></i>										
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="elements.html">
                                    <span class="menu-text">店铺设置</span>
                                </a>
                            </li>
                             <li>
                                <a href="elements.html">
                                    <span class="menu-text">配置列表</span>
                                </a>
                            </li>

                                <ul class="submenu">
                                </ul>
                            </li>

                        </ul>

                        
                   
     
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
                    <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="{{ url('admin/index') }}">后台</a>
                    </li>
                    <li class="active">
                        <a href="@yield('url', '#')">@yield('title')</a>
                    </li>
                    <li>@yield('title2', '#')</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">
                @section('content')
               
                @show
            </div>
         


    <!--Basic Scripts-->
    <script src="/static/admin/assets/js/jquery-2.0.3.min.js"></script>
    <script src="/static/admin/assets/js/bootstrap.min.js"></script>

    <!--Beyond Scripts-->
    <script src="/static/admin/assets/js/beyond.min.js"></script>


    <!--Page Related Scripts-->
    <!--Sparkline Charts Needed Scripts-->
    <script src="/static/admin/assets/js/charts/sparkline/jquery.sparkline.js"></script>
    <script src="/static/admin/assets/js/charts/sparkline/sparkline-init.js"></script>

    <!--Easy Pie Charts Needed Scripts-->
    <script src="/static/admin/assets/js/charts/easypiechart/jquery.easypiechart.js"></script>
    <script src="/static/admin/assets/js/charts/easypiechart/easypiechart-init.js"></script>

    <!--Flot Charts Needed Scripts-->
    <script src="/static/admin/assets/js/charts/flot/jquery.flot.js"></script>
    <script src="/static/admin/assets/js/charts/flot/jquery.flot.resize.js"></script>
    <script src="/static/admin/assets/js/charts/flot/jquery.flot.pie.js"></script>
    <script src="/static/admin/assets/js/charts/flot/jquery.flot.tooltip.js"></script>
    <script src="/static/admin/assets/js/charts/flot/jquery.flot.orderBars.js"></script>

    <script>
        // If you want to draw your charts with Theme colors you must run initiating charts after that current skin is loaded
        $(window).bind("load", function () {

            /*Sets Themed Colors Based on Themes*/
            themeprimary = getThemeColorFromCss('themeprimary');
            themesecondary = getThemeColorFromCss('themesecondary');
            themethirdcolor = getThemeColorFromCss('themethirdcolor');
            themefourthcolor = getThemeColorFromCss('themefourthcolor');
            themefifthcolor = getThemeColorFromCss('themefifthcolor');

            //Sets The Hidden Chart Width
            $('#dashboard-bandwidth-chart')
                .data('width', $('.box-tabbs')
                    .width() - 20);

            //-------------------------Visitor Sources Pie Chart----------------------------------------//
            var data = [
                {
                    data: [[1, 21]],
                    color: '#fb6e52'
                },
                {
                    data: [[1, 12]],
                    color: '#e75b8d'
                },
                {
                    data: [[1, 11]],
                    color: '#a0d468'
                },
                {
                    data: [[1, 10]],
                    color: '#ffce55'
                },
                {
                    data: [[1, 46]],
                    color: '#5db2ff'
                }
            ];
            var placeholder = $("#dashboard-pie-chart-sources");
            placeholder.unbind();

            $.plot(placeholder, data, {
                series: {
                    pie: {
                        innerRadius: 0.45,
                        show: true,
                        stroke: {
                            width: 4
                        }
                    }
                }
            });

            //------------------------------Visit Chart------------------------------------------------//
            var data2 = [{
                color: themesecondary,
                label: "Direct Visits",
                data: [[3, 2], [4, 5], [5, 4], [6, 11], [7, 12], [8, 11], [9, 8], [10, 14], [11, 12], [12, 16], [13, 9],
                [14, 10], [15, 14], [16, 15], [17, 9]],

                lines: {
                    show: true,
                    fill: true,
                    lineWidth: .1,
                    fillColor: {
                        colors: [{
                            opacity: 0
                        }, {
                            opacity: 0.4
                        }]
                    }
                },
                points: {
                    show: false
                },
                shadowSize: 0
            },
                {
                    color: themeprimary,
                    label: "Referral Visits",
                    data: [[3, 10], [4, 13], [5, 12], [6, 16], [7, 19], [8, 19], [9, 24], [10, 19], [11, 18], [12, 21], [13, 17],
                    [14, 14], [15, 12], [16, 14], [17, 15]],
                    bars: {
                        order: 1,
                        show: true,
                        borderWidth: 0,
                        barWidth: 0.4,
                        lineWidth: .5,
                        fillColor: {
                            colors: [{
                                opacity: 0.4
                            }, {
                                opacity: 1
                            }]
                        }
                    }
                },
                {
                    color: themethirdcolor,
                    label: "Search Engines",
                    data: [[3, 14], [4, 11], [5, 10], [6, 9], [7, 5], [8, 8], [9, 5], [10, 6], [11, 4], [12, 7], [13, 4],
                    [14, 3], [15, 4], [16, 6], [17, 4]],
                    lines: {
                        show: true,
                        fill: false,
                        fillColor: {
                            colors: [{
                                opacity: 0.3
                            }, {
                                opacity: 0
                            }]
                        }
                    },
                    points: {
                        show: true
                    }
                }
            ];
            var options = {
                legend: {
                    show: false
                },
                xaxis: {
                    tickDecimals: 0,
                    color: '#f3f3f3'
                },
                yaxis: {
                    min: 0,
                    color: '#f3f3f3',
                    tickFormatter: function (val, axis) {
                        return "";
                    },
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0,
                    aboveData: false,
                    color: '#fbfbfb'

                },
                tooltip: true,
                tooltipOpts: {
                    defaultTheme: false,
                    content: " <b>%x May</b> , <b>%s</b> : <span>%y</span>",
                }
            };
            var placeholder = $("#dashboard-chart-visits");
            var plot = $.plot(placeholder, data2, options);

            //------------------------------Real-Time Chart-------------------------------------------//
            var data = [],
                totalPoints = 300;

            function getRandomData() {

                if (data.length > 0)
                    data = data.slice(1);

                // Do a random walk

                while (data.length < totalPoints) {

                    var prev = data.length > 0 ? data[data.length - 1] : 50,
                        y = prev + Math.random() * 10 - 5;

                    if (y < 0) {
                        y = 0;
                    } else if (y > 100) {
                        y = 100;
                    }

                    data.push(y);
                }

                // Zip the generated y values with the x values

                var res = [];
                for (var i = 0; i < data.length; ++i) {
                    res.push([i, data[i]]);
                }

                return res;
            }
            // Set up the control widget
            var updateInterval = 100;
            var plot = $.plot("#dashboard-chart-realtime", [getRandomData()], {
                yaxis: {
                    color: '#f3f3f3',
                    min: 0,
                    max: 100,
                    tickFormatter: function (val, axis) {
                        return "";
                    }
                },
                xaxis: {
                    color: '#f3f3f3',
                    min: 0,
                    max: 100,
                    tickFormatter: function (val, axis) {
                        return "";
                    }
                },
                colors: [themeprimary],
                series: {
                    lines: {
                        lineWidth: 0,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.5
                            }, {
                                opacity: 0
                            }]
                        },
                        steps: false
                    },
                    shadowSize: 0
                },
                grid: {
                    hoverable: true,
                    clickable: false,
                    borderWidth: 0,
                    aboveData: false
                }
            });

            function update() {

                plot.setData([getRandomData()]);

                plot.draw();
                setTimeout(update, updateInterval);
            }
            update();


            //-------------------------Initiates Easy Pie Chart instances in page--------------------//
            InitiateEasyPieChart.init();

            //-------------------------Initiates Sparkline Chart instances in page------------------//
            InitiateSparklineCharts.init();
        });

    </script>
    <!--Google Analytics::Demo Only-->
    <script>

    </script>


</body>
<!--  /Body -->
</html>
