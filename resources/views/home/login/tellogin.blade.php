<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths translated-ltr" lang="zh-CN" style=""><head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>我的帐户</title>
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
        <link rel="stylesheet" href="/static/home/index/lib/css/nivo-slider.css" type="text/css">
        <link rel="stylesheet" href="/static/home/index/lib/css/preview.css" type="text/css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="/static/home/index/css/owl.carousel.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="/static/home/index/css/font-awesome.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="/static/home/index/style.css">
        <link rel="stylesheet" href="/static/home/index/css/style.css"> <!-- 注册页面引用的css -->
        <!-- responsive css -->
        <link rel="stylesheet" href="/static/home/index/css/responsive.css">
        <!-- modernizr js -->
        <script src="/static/home/index/js/vendor/modernizr-2.8.3.min.js"></script>
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
        <!-- <style type="text/css">
            .info{
                line-height: 12px;
                font-size: 14px;
            }
            .clear{
                clear: both;
            }
            .user-nav {
                width: 136px;
                height: 420px;
                overflow: hidden;
                margin-top: 10px;
                border: 1px solid #ddd;
                font: inherit;
                vertical-align: baseline;
                text-align: left;
                font-family: "Microsoft YaHei",arial;
                margin: 0;
                padding: 0;
                width: auto;
                height: auto;
                margin-top: 0;
            }
            .user-nav li{
                margin-top: 10px;
            }
            .fl {
                float: left;
            }
            ol, ul {
                list-style: none;
            }
        </style> -->
        </head>
    <body>






<!--header top area start-->
<div class="header_area">
    <div class="header_border">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="header_heaft_area">
                        <div class="header_left_all">
                            <div class="mean_al_dv">
                                <div class="littele_menu"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">英语语言 </font></font><i class="fa fa-caret-down"></i></a> </div>
                                <ul class="option">
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">法国</font></font></a></li>
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">德国</font></font></a></li>
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日本</font></font></a></li>
                                </ul>
                            </div>
                            <div class="usd_area">
                                <div class="littele_menu"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    货币：美元
                                    </font></font><i class="fa fa-caret-down"></i>
                                    </a>
                                </div>
                                <ul class="option">
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">欧元 - 欧元</font></font></a></li>
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">英镑 - 英镑</font></font></a></li>
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">INR  - 印度卢比</font></font></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="header_right_area">
                        <ul>
                            <li>
                                <a class="account" href="/register"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册</font></font></a>
                            </li>
                            <li>
                                <a class="wishlist" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">愿望清单</font></font></a>
                            </li>
                            <li>
                                <a class="Shopping cart" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物车</font></font></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top area end-->
    <!--header middle area start-->
    
    <!--header bottom area start-->
    <div class="all_menu_area">
        
    </div>
</div>
<!--header area end-->





<!--我的帐户开始-->
    @if (count($errors) > 0)
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<div class="login-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="login-content">
                    <h2 class="login-title">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit; padding-left: 33%;">
                                欢迎登录EC商城
                            </font>
                        </font>
                    </h2>
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit; padding-left: 33%;">
                                您好，欢迎来到您的帐户
                            </font>
                        </font>
                    </p>
                    <div class="social-sign"  style="padding-left: 24%;">
                        <a href="/login">
                            <i class="fa fa-facebook"></i>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                     用户名登录
                                </font>
                            </font>
                        </a>
                        <a class="twitter" href="/yzmlogin">
                            <i class="fa fa-twitter"></i>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                     手机号登录
                                </font>
                            </font>
                        </a>
                    </div>
                    <form action="/teldologin" method="get">
                        {{ csrf_field() }}
                        <label>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    手机号:
                                </font>
                            </font>
                        </label>
                        <input type="number" name="user_phone" id="phone" style="width: 88%">
                        <label>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    验证码:
                                </font>
                            </font>
                        </label>
                        <input type="number" name="yzm" style="width: 260px;">
                        <input type="button" class="login-sub" id="sendBtn" onclick="sendPhone(this)" value="获取验证码">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <input class="login-sub" type="submit" value="登录" style="margin-left:39%;">
                            </font>
                        </font>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--我的帐户开始结束-->
<!--newsletter area start-->

<!--newsletter area end-->


        
        
        
        
        
        
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
        <script src="/static/home/index/js/main.js"></script><a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-double-up"></i></a><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google 翻译"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">原文</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">提供更好的翻译建议</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>
    



<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>

<script type="text/javascript">
    function sendPhone(obj)
        {
            // 接收手机号码
            var user_phone = $('#phone').val();
            // 定义正则检查手机号是否格式正确
            var phone_grep = /^1{1}[3456789]{1}[0-9]{9}$/;
            // 使用正则检查手机号
            if(!phone_grep.test(user_phone)){
                alert('请输入正确手机号');
                return false;
            }




            // 将js对象转化成jquery对象
            var object = $(obj);
            // 设置button状态
            object.attr('disabled',true);
            // 获取当前的按钮上的文字
            var text = object.val();
            // alert(obj);[object HTMLInputElement]  js对象
            // alert($(obj));[object Object]  jquery对象
            if(text == '获取验证码'){
                // 发送ajax 请求后台 
                $.get('/yzm',{'user_phone':user_phone},function(data){
                    if(data.code == 0){
                       
                        editCon();
                    }
                },'json');  
            }else{
                return false;
            }
            
        }


    function editCon()
    {
        var t = 120;                                                        ;
        var time = null;
        if(time == null){
            time = setInterval(function(){
                t--;
                // 修改当前button 和 内容
                $('#sendBtn').val('重新发送('+t+'s)');
                if(t < 1){
                    // 清除定时器
                    clearInterval(time);
                    time = null;
                    $('#sendBtn').val('获取验证码');
                    // 设置button状态
                    $('#sendBtn').attr('disabled',false);
                }
            },1000);
        }
            
    }
</script>