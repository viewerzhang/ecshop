@extends('layout.grzx')
@section('title','个人中心/账户充值');
@inject('getIp', 'App\common\getIp')
@section('grzx')
<style type="text/css">
    input.number {
            display: inline-block;
            width: 142px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            background-image: url(/static/home/images/1.png);
            background-repeat: no-repeat;
            background-size: 142px 50px;
            border: none;
            cursor: pointer;
        }
        .otn-bubble {
          color: white;
          background-color: #77b11c;
          background-repeat: no-repeat;
        }
        .otn-bubble:hover, .otn-bubble:focus {
          -webkit-animation: bubbles 1s forwards ease-out;
                  animation: bubbles 1s forwards ease-out;
          background: radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 90% 90% / 0.88em 0.88em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 23% 141% / 0.81em 0.81em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 17% 90% / 0.68em 0.68em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 15% 94% / 1.12em 1.12em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 42% 126% / 0.86em 0.86em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 102% 120% / 0.58em 0.58em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 12% 121% / 0.67em 0.67em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 69% 87% / 1.18em 1.18em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 32% 99% / 0.79em 0.79em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 84% 129% / 0.79em 0.79em, radial-gradient(circle at center, rgba(0, 0, 0, 0) 30%, #eeeeff 60%, #eeeeff 65%, rgba(0, 0, 0, 0) 70%) 40% 99% / 0.72em 0.72em;
          background-color: #77b11c;
          background-repeat: no-repeat;
        }

        @-webkit-keyframes bubbles {
          100% {
            background-position: 92% -220%, 31% -185%, 24% 6%, 16% -328%, 39% -366%, 110% -375%, 5% -60%, 59% -365%, 41% -363%, 82% -8%, 37% -224%;
            box-shadow: inset 0 -6.5em 0 #0072c4;
          }
        }

        @keyframes bubbles {
          100% {
            background-position: 92% -220%, 31% -185%, 24% 6%, 16% -328%, 39% -366%, 110% -375%, 5% -60%, 59% -365%, 41% -363%, 82% -8%, 37% -224%;
            box-shadow: inset 0 -6.5em 0 #0072c4;
          }
        }
        .otn {
          display: inline-block;
          text-decoration: none;
          padding: 1em 2em;
        }
</style>
        <link rel="stylesheet" type="text/css" href="/static/home/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="/static/home/css/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
        <!-- <link rel="stylesheet" type="text/css" href="/static/home/css/demo.css" /> -->
        <link rel="stylesheet" type="text/css" href="/static/home/css/component.css" />
<div class="col-md-9">
    <div class="all-pros br-ntf" style="margin-top: 0px;">
        <div class="row">
            <div class="col-md-4 col-sm-4 pl pr" style="width: 200px;">
                <div class="sngl-pro" style="margin-left: 16px;">
                    @if(empty($data->user_pic))
                        <img src="/static/home/users_pic/default.png" alt="" width="180">
                    @else
                        <img src="/static/{{$data->user_pic}}" alt="">
                    @endif
                </div>
            </div>
            <div class="col-md-8 col-sm-8 pl pr">
                <div class="product_content product_content_nx">
                    <div class="usal_pro">
                        <div class="product_name_2 product_name_3 prnm">
                            <h2>
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$data->user_name}}</font></font>
                            </h2>
                            <div class="pro_discrip">
                                <p style="vertical-align: inherit;">
                                    手机号 : {{$data->user_phone}}
                                </p>
                                <p style="vertical-align: inherit;">
                                    邮 箱 : @if(empty($data->user_email))
                                                <a href="/edit">立即验证</a>
                                            @else
                                                {{$data->user_email}}
                                            @endif
                                </p>
                                <p style="vertical-align: inherit;">
                                    上次登陆地点: {{-- $getIp::getIp(session('user.user_ip')) --}}
                                </p>
                            </div>
                        </div>
                        <div class="action actionmm">
                            <div class="price_box price_box_tz">
                                <font style="vertical-align: inherit;">余额 :</font>
                                <span class="spical-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 100.00</font></font></span>
                            </div>
                            <div class="last_button_area">
                                <ul class="add-to-links clearfix">
                                    <li>
                                        <div class="new_act">
                                            <a class="button_act button_act_2 button_act_hts" data-quick-id="45" href="" title="" data-toggle="tooltip"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">充值</font></font></a>
                                        </div>
                                    </li>
                                    <li class="addwishlist">
                                        <div class="yith-wcwl-add-button  show">
                                            <a class="add_to_wishlist_3 add_to_wishlist_tz" href="" rel="nofollow" data-product-id="45" data-product-type="external" data-toggle="tooltip" title="" data-original-title="我的收藏"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </li>
                                    <li class="addcompare">
                                        <div class="woocommerce product compare-button">
                                            <a class="compare_3 compare_3r button" href="" data-product_id="45" rel="nofollow" data-toggle="tooltip" title="" data-original-title="刷新"><i class="fa fa-refresh"></i></a>
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
    <!-- 好友动态 开始 -->
    <div class="category-widget-menu" style="margin-top: 30px;">
        <h2 class="cat-menu-title text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EC优卡充值</font></font></h2>
        <hr>



        <div class="menu-categories-container">
            <div class="row">
                <!-- 分为四格 开始 -->
                <!-- 分为四格 结束 -->
                <!-- 其余六格 开始 -->
                <div class="col-md-8" style="padding-left: 20px;margin-top: -20px;">
                    <span class="input input--minoru" style="display: inline;">
                        <input class="input__field input__field--yoko" type="text" id="input-18" />
                        <label class="input__label input__label--yoko" for="input-18">
                        </label>
                    </span>
                    <button id="tjdd" type="submit" class="otn otn-bubble" style="width: 160px;height: 50px;position: absolute;right: -160px;margin-top: 6px;">
                        <i class="layui-icon layui-icon-cart"></i>立即充值
                    </button>
                <!-- 六格结束 -->
                </div>
            </div>
        </div>




    </div>
    <!-- 好友动态 结束 -->
</div>
@endsection