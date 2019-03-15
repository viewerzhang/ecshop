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

    <!-- 充值 开始 -->
    <div class="category-widget-menu" style="margin-top: 0px;">
        <h2 class="cat-menu-title text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">EC优卡充值</font></font></h2>
        <hr>



        <div class="menu-categories-container">
            <div class="row">
                <!-- 分为四格 开始 -->
                <!-- 分为四格 结束 -->
                <!-- 其余六格 开始 -->
                <div class="col-md-8" style="padding-left: 20px;margin-top: -20px;">
                    <span class="input input--minoru" style="display: inline;">
                        <input class="input__field input__field--yoko kalman" type="text" id="input-18" />
                        <label class="input__label input__label--yoko" for="input-18">
                        </label>
                    </span>
                    <button id="tjdd" onclick="cz()" class="otn otn-bubble" style="width: 160px;height: 50px;position: absolute;right: -160px;margin-top: 6px;">
                        <i class="layui-icon layui-icon-cart"></i>立即充值
                    </button>
                <!-- 六格结束 -->
                </div>
            </div>
        </div>
    </div>
    <!-- 充值 结束 -->
        <!-- 好友动态 开始 -->
    <div class="category-widget-menu" style="margin-top: 0px;">
        <h2 class="cat-menu-title text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E充值记录</font></font></h2>
        <hr>


        @foreach($data as $k => $v)
        <div class="menu-categories-container">
            <div class="row">
                <div class="category-widget-menu" style="margin-top: -20px;width: 95.5%;margin-left: 20px;">

                    <h2 class="cat-menu-title text-uppercase" style="float: left;">
                        充值时间：{{ date('Y年m月d日 H时i分s秒',$v->czsj) }}
                    </h2>

                    <h2 class="cat-menu-title text-uppercase" style="float: right;">
                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">充值金额：{{ $v->recharge_money }}元</font></font>
                    </h2>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- 好友动态 结束 -->
    {{ $data->links() }}
</div>
<script type="text/javascript">
    function cz()
    {
        $.post("/balance", {    
               "_token": "{{ csrf_token() }}",
               'kalman':$('.kalman').val()
            }, function(data) {
                layui.use(['layer', 'form'], function(){
                var layer = layui.layer
                  ,form = layui.form;
                      layer.msg(data.msg);
                      $('.kalman').val('');
                });
            },'json');
    }

</script>

@endsection