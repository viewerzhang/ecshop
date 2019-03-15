@extends('layout.home')
@section('content')
<style type="text/css">

</style>
<style type="text/css">
</style>
    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="/static/coupons/assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="/static/coupons/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/static/coupons/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/static/coupons/assets/css/styles.css">
    <link rel="stylesheet" href="/static/coupons/assets/css/responsive.css">

    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<div class="bgGray pt-75 pb-75 clearfix">

    <div class="container">
        <div class="row" style="margin-top: -70px;">
            <div class="col-md-12">
                <div class="shop_menu">
                    <ul class="cramb_area cramb_area_5">
                        <li>
                            <a href="/grzx">
                                个人中心 /
                            </a>
                        </li>
                        <li>
                            <a href="/coupons/my">
                            我的礼品券中心
                            </a>
                        </li>
                        <li class="br-active" style="float: right;">
                            <a href="/coupons">
                                折扣卷中心
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="list clearfix">


            @foreach($data as $k => $v)
                
            <div class="item">
                <div class="image">
                    <img src="/static/coupons/images/br13.png" alt="" />
                </div>
                <div class="content">
                    <h4>
                        @if($v->discount->type == 2)
                        满 {{ $v->discount->full }} 减
                        @endif
                        {{ $v->discount->discount }}
                        @if($v->discount->type == 0 || $v->discount->type == 2)
                        元 现金券
                        @else
                        折 折扣券
                        @endif 
                    </h4>
                    <p>{{ $v->name }}</p>
                    <p>{{ $v->content }}</p>
                    <p>卡券有效期：{{ date('Y年m月d日 H时i时s秒',$v->dq_time) }}</p>
                </div>
                @if($v->ky == 1)
                    @if($v->dq_time < time())
                    <img style="margin-top: -130px;margin-left: 460px;width: 100px;transform: rotate(30deg);" src="/static/home/images/ygq.png">
                    @endif
                @elseif($v->ky == 2)
                <img style="margin-top: -130px;margin-left: 460px;width: 100px;transform: rotate(30deg);" src="/static/home/images/bch.png">
                @else
                <img style="margin-top: -130px;margin-left: 460px;width: 100px;transform: rotate(30deg);" src="/static/home/images/ysy.png">
                @endif
                <div class="bottom clearfix">
                    <a href="javascript:;">关注EC优购领取更多福利</a>
                    <div>
                        @if($v->ky == 1 && $v->dq_time > time())
                        <a href="/goodlist/" class="button">立即使用</a>
                        @else
                        <a href="javascript:;" class="button">去购物</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
</div>
<link rel="stylesheet" type="text/css" href="/static/home/css/reset.css">
{{ $data->links('common.pagination') }}

<!-- Javascripts -->
<script src="/static/coupons/assets/js/jquery-3.3.1.min.js"></script>
<script src="/static/coupons/assets/js/owl.carousel.min.js"></script>
<script src="/static/coupons/assets/js/functions.js"></script>
<script type="text/javascript">
    function draw(id)
    {
        $.get("/discount/draw/" + id,function(data) {
            layui.use(['layer', 'form'], function(){
            var layer = layui.layer
            ,form = layui.form;
            layer.msg(data.msg);
            });
        },'json');
    }
</script>
@endsection
