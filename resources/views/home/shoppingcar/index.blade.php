@extends('layout.home')
@section('content')
<link rel="stylesheet" type="text/css" href="/static/home/css/zzsc-demo.css">
<link rel="stylesheet" href="/static/home/css/highlight-9.5.0.min.css">
<link rel="stylesheet" href="/static/home/dist/css/checkbix.min.css">
<link rel="stylesheet" href="/static/home/demo/demo.css">
<script src="/static/home/demos/googlegg.js"></script>
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

    input.number:focus {
        background-image: url(/static/home/images/2.png);
        border: none;
    }
    .news_heading_2 h3::after {
      background: #444;
      content: "";
      height: 2px;
      left: 38%;
      position: relative;
      top: 40px;
      width: 165px;
      z-index: 9999;
    }
    .news_heading_2 h3::before {
      background: #fa7c63 none repeat scroll 0 0;
      content: "";
      height: 2px;
      left: 0;
      position: relative;
      top: 40px;
      width: 101px;
    }
    </style>
        <link rel="stylesheet" href="/static/home/index/css/style.css">
        <div class="shop_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shop_menu shop_menu_tk ">
                            <ul class="cramb_area cramb_area_2 cramb_area_ktp">
                                <li><a href="/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">主页/</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的购物车</font></font></a></li>
                            </ul>
                            <hr class="hrtop">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop area end-->

        <!--购物车开始-->
        <div class="wishlist-area" style="margin-top: -90px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="/goodsorder/{{ session('user.id') }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <div class="wishlist-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th style="width: 60px;" class="product-thumbnail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">选择</font></font></th>
                                                <th class="product-thumbnail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></th>
                                                <th class="product-name"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></span></th>
                                                <th class="product-price"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 单价 </font></font></span></th>
                                                <th class="product-stock-stauts"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 尺寸/型号 </font></font></span></th>
                                                <th class="product-stock-stauts"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 数量 </font></font></span></th>
                                                <th class="product-add-to-cart"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">操作 </font></font></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach($data as $k=>$v)
                                            <tr>
                                                <td style="width: 60px;" class="product-thumbnail">
                                                    <input onchange="xz(this)" name="like[]" value="{{ $v->id }}" id="mycheckbox8{{$k}}" type="checkbox" class="checkbix" data-shape="circled" data-color="orange" data-text="" checked>
                                                </td>
                                                <td class="product-thumbnail"><a href="#">
                                                    <img src="/static/admin/images/goods_img/{{ $v->goods->goods_img }}" alt=""></a>
                                                </td>
                                                <td class="product-name" style="width: 300px;"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><p style="line-height: 20px;width: 300px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;" title="{{ $v->goods->goods_name }}">{{ $v->goods->goods_name }}</p></font></font></a><p style="font-size: 12px;margin-top:-20px;line-height: 20px;color: #FF5722;">商品已为您保留，请于{{ date('Y-m-d H:i:s',$v['dqtime']) }}前结算</p></td>
                                                <td class="product-price"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥{{ $v->goods->goods_price }}</font></font></span></td>
                                                <td class="product-stock-status">
                                                    {{ $v->attr }}
                                                </td>
                                                <td class="product-stock-status">
                                                    
                                                    <input class="number" type="number" value="{{ $v->car_num }}" min="1" wy="{{ $v->id }}" onchange="nu(this)" max="99" />
                                                </td>
                                                <td class="product-add-to-cart">
                                                    
                                                    <a href="javascript:;" class="sc" onclick="del({{$v->id}},this)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 删除商品</font></font></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            



                                            <div class="layui-anim layui-anim-up" style="opacity:0.9;width: 100%;height: 60px;background: #ddd;position: fixed;bottom: 0px;z-index: 100;left: 0px;box-sizing:border-box;">
                                                

                                                <button id="tjdd" type="submit" class="otn otn-bubble" style="width: 160px;height: 100%;float: right;">
                                                <i class="layui-icon layui-icon-cart"></i>立即结算</button>
                                                <div style="position: absolute;right: 170px;bottom: 0px;">
                                                    您一共选择
                                                    <span id="zongshu" style="font-size: 24px;color: #FF5722;display: inline;">{{ $zhi['zongshu'] }}</span>
                                                    件商品，共计
                                                    <span id="moling" style="font-size: 24px;color: #FF5722;display: inline;">{{ $zhi['moling'] }}</span>
                                                    元
                                                </div>
                                            </div>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--购物车结束-->
<script type="text/javascript">

layui.use(['layer', 'form'], function(){
   var layer = layui.layer
   ,form = layui.form;
    $("input.number").attr("readonly", "1").click(function (e) {
        var self = $(this);
        var x = e.pageX - self.offset().left;
        var y = e.pageY - self.offset().top;
        var d = 0;
        if (x <= 20) {
            self.css("background-image", "url(/static/home/images/3.png)");
            d = -1;
        }
        if (x >= 50) {
            self.css("background-image", "url(/static/home/images/4.png)");
            d = 1;
        }
        if (d != 0) {
            self.val(Math.min(Math.max((parseInt(self.val()) || 0) + d, parseInt(self.attr("min"))), parseInt(self.attr("max"))));
            setTimeout(function () {
                self.css("background-image", "");
            }, 200);

        }
            var car_numa = $(this).val();
            linshi = $(this);
            $.post("/shoppingcar/"+{{ session('user.id') }}, {    
                   "_token": "{{ csrf_token() }}",
                   '_method':'put',
                   'id':$(this).attr('wy'),
                   'car_num':car_numa
                }, function(data) {
                    if(data.code == '0'){
                        layer.msg(data.msg);
                        linshi.parent().parent().remove();
                    }else if(data.code == '1'){
                        $('#zongshu').html(data.zongshu);
                        $('#moling').html(data.moling);
                    }else if(data.code == '2'){
                        layer.msg(data.msg);
                        $(linshi).val(data.sl);
                        return false;
                    }
                },'json');
    });
 });
    function del(id,ud)
    {
        layer.confirm('您确定要删除该商品？', {icon: 3, title:'提示'}, function(index){
          $.post("/shoppingcar/"+{{ session('user.id') }}, {    
           "_token": "{{ csrf_token() }}",
           '_method':'delete',
           'id':id
        }, function(data) {
            if(data.code == '1'){
                layer.msg(data.msg);
                var lszs = $('#zongshu').html();
                var lszj = $('#moling').html();
                $('#zongshu').html(parseFloat(lszs)-parseFloat(data.spsl));
                $('#moling').html(parseFloat(lszj)-parseFloat(data.spzj));
                $(ud).parent().parent().remove();

                layer.close(index);
            }else{
                layer.msg(data.msg);
            }
        },'json');
          
        });
    }

    function xz(ud)
    {
        var xzlm = false;
        $('input:checkbox').each(function () {
            if($(this).prop('checked') == true){
                xzlm = true;
            }
        });
        if(xzlm){
            $('#tjdd').prop('disabled',false);
        }else{
            layer.msg('您取消了所有商品，不能结算');
            $('#tjdd').prop('disabled',true);
        }
        var danjia = $(ud).parent().next().next().next().find('font').find('font').html().substring(1);
        var sl = $(ud).parent().next().next().next().next().next().find('input').val();
        if($(ud).prop('checked')){
            var zzongjia = danjia*sl;
            var lssl = $('#zongshu').html();
            $('#zongshu').html(parseFloat(lssl)+parseFloat(sl));
            var lsjg = $('#moling').html();
            $('#moling').html(parseFloat(lsjg)+parseFloat(zzongjia));
            $(ud).parent().next().next().next().next().next().find('input').prop('disabled',false);
        }else{
            var zzongjia = danjia*sl;
            var lssl = $('#zongshu').html();
            $('#zongshu').html(parseFloat(lssl)-parseFloat(sl));
            var lsjg = $('#moling').html();
            $('#moling').html(parseFloat(lsjg)-parseFloat(zzongjia));
            $(ud).parent().next().next().next().next().next().find('input').prop('disabled',true);
        }
    }


</script>
<script src="/static/home/demo/highlight-9.5.0.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script src="/static/home/dist/js/checkbix.min.js"></script>
<script type="text/javascript">
    Checkbix.init();
</script>
@endsection