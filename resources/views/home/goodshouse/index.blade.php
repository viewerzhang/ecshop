@extends('layout.home')
@section('content')
<link rel="stylesheet" type="text/css" href="/static/home/css/button.css" media="screen">
<style type="text/css">
.qty{
    display: none;
}
.ojbk table .product-add-to-cart > a {
    background: #333399 none repeat scroll 0 0;
    color: #fff;
    display: block;
    font-weight: 600;
    margin: auto;
    padding: 10px 15px;
    text-transform: uppercase;
    width: 180px;
}
</style>
<link rel="stylesheet" href="/static/home/index/css/style.css">
        <div class="shop_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shop_menu shop_menu_tk ">
                            <ul class="cramb_area cramb_area_2 cramb_area_ktp">
                                <li><a href="index.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">主页/</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的收藏</font></font></a></li>
                            </ul>
                            <hr class="hrtop">
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="wishlist-area" style="margin-top: -90px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></th>
                                                <th class="product-name"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></span></th>
                                                <th class="product-price"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 单价 </font></font></span></th>
                                                <th class="product-add-to-cart"><span class="nobr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">操作 </font></font></span></th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach($data as $k => $v)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a target="_blank" href="/goodlist/{{ $v->goods->id }}">
                                                        <img src="/static/admin/images/goods_img/{{ $v->goods->goods_img }}" alt="">
                                                    </a>
                                                </td>
                                                <td class="product-name" width="400">
                                                    <p style="line-height: 20px;width: 400px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><a target="_blank" href="/goodlist/{{ $v->goods->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $v->goods->goods_name }}</font></font></a></p>
                                                </td>
                                                <td class="product-price"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥{{ $v->goods->goods_price }}</font></font></span></td>
                                                
                                                <td class="product-add-to-cart">

                                                    <div class="button green" data-toggle="modal" data-target="#{{ $v->goods->goods_bianhao }}" style="height: 30px;width: 130px;margin-left: 23px;margin-top: 10px"><div class="shine"></div><div style="margin-top: -10px;margin-left: -25px;width: 100px;font-size: 13px">加入购物车</div></div>


                                                    <div class="button red" onclick="sc({{ $v->id }},this)" style="height: 30px;width: 130px;margin-left: 23px;margin-top: 10px"><div class="shine"></div><div style="margin-top: -10px;margin-left: 0px;font-size: 13px">删除商品</div></div>

                                                </td>
                                            </tr>
                                            @endforeach




                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ $data->links() }}


@foreach($data as $kk => $vv)
        <div class="modal fade" id="{{ $vv->goods->goods_bianhao }}" role="dialog">
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
                                        <img class="img-rounded" style="width: 300px;height: 206px;" src="/static/admin/images/goods_img/{{ $vv->goods->goods_img }}" alt="">
                                    </div>
                                </div>
                                <div class="elav_titel elav_titel_2">
                                    <div class="elv_heading elv_heading_therteen">
                                        <h3>{{ $vv->goods->goods_name }}</h3>
                                    </div>
                                    <div class="elav_info">
                                        <div class="price_box price_box_pb">
                                            <span class="spical-price spical-price-nk">￥{{ $vv->goods->goods_price }}</span>
                                        </div>
                                        <form class="cart-btn-area cart-btn-area-dec" action="#">
                                            <a class="see-all" href="#">查看商品详细</a><br>
                                            <?php $ty = mt_rand(1000,9999) ?>
                                            @foreach($vv->goods->goodstype->goodsattr as $tv => $ta)
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
                                            <input type="number" class="bh{{$vv->goods->goods_bianhao}}" id="carsum" max="{{ $vv->goods->goods_num }}" value="1">
                                            <a href="javascript:;" onclick="jr({{$vv->goods->goods_bianhao}},{{$vv->goods->id}})" class="button green">加入购物车</a>
                                        </form>
                                    </div>
                                    <div class="evavet_description evavet_description_dec">
                                        <p>{{ $vv->goods->goods_title }}</p>
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





        <script type="text/javascript">
            function sc(id,ud)
            {
                $.post("/goodshouse/"+id, {    
                   "_token": "{{ csrf_token() }}",
                   "_method":'delete',
                }, function(data) {
                    if(data.code == 0){
                        layui.use(['layer', 'form'], function(){
                          var layer = layui.layer
                          ,form = layui.form;
                          layer.msg(data.msg);
                        });
                    }else{
                        layui.use(['layer', 'form'], function(){
                          var layer = layui.layer
                          ,form = layui.form;
                          layer.msg(data.msg);
                          $(ud).parent().parent().remove();
                        });
                    }
                },'json');
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
        </script>
@endsection