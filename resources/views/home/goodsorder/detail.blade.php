@extends('layout.grzx')
@section('title','订单管理')
@section('grzx')
<div class="col-md-9 bg-primary" style="border-radius: 2px;">
    订单号：{{ $su[0]->goodsorder->rand_id }}　　　　　共{{ count($su) }}件商品　　　　　　　　　　　　　　
    共计
    <?php $sum = 0; ?>
    @foreach($su as $k => $v)
        <?php $sum += $v->detail_price ?>
    @endforeach
    {{ $sum }}
    元
    <br>
    收货人：{{ $su[0]->goodsorder->order_rec }}　　　　　　　　　　
    联系电话：{{ $su[0]->goodsorder->order_phone }}　　　　　　　　
    邮政编码：{{ $su[0]->goodsorder->order_code }}
    <br>
    收货地址：{{ $su[0]->goodsorder->order_addr }}
</div>
@foreach($data as $k => $v)
<div class="col-md-9" style="border: 1px solid #ddd;margin-top: 10px;">
                                        <div class="col-md-3 col-sm-3 pl pr">
                                            <div class="sngl-pro">
                                                <div class="single_product single_product_6">
                                                    <span>
                                                        已购买
                                                    </span>
                                                </div>
                                                <a title="{{ $v->goods->goods_name }}" href="/goodlist/{{ $v->goods->id }}" target="_blank">
                                                <div style="margin-left: -15px;" class="sinle_pic sngl-pc sinle_pic_2xd">
                                                    
                                                        <img class="primary-img" src="/static/admin/images/goods_img/{{ $v->goods->goods_img }}" alt="">
                                                    
                                                </div>
                                                </a>
                                                <div class="product-action" data-toggle="modal" data-target="#myModal">
                                                    <button type="button" class="btn btn-info btn-lg quickview quickview_2" data-toggle="tooltip" title="" data-original-title="Quickview">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-9 pl pr">
                                            <div class="product_content product_content_nx">
                                                <div class="usal_pro">
                                                    <div class="product_name_2 product_name_3 prnm">
                                                        <h2>
                                                            <a title="{{ $v->goods->goods_name }}" href="/goodlist/{{ $v->goods->id }}" target="_blank">
                                                            <div style="width: 400px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">
                                                                {{ $v->goods->goods_name }}
                                                            </div>
                                                            </a>
                                                        </h2>
                                                        <div class="pro_discrip">
                                                            <p style="line-height: 16px"><strong>共计购买：</strong>{{ $v->detail_count }}件</p>
                                                            <p style="line-height: 16px"><strong>型号尺寸：</strong>{{ $v->detail_attr }}元</p>
                                                            <p style="line-height: 16px"><strong>购买时单价：</strong>{{ $v->detail_price/$v->detail_count }}元</p>
                                                            <p style="line-height: 16px"><strong>购买时总价：</strong>{{ $v->detail_price }}元</p>
                                                        </div>
                                                    </div>
                                                    <div class="action actionmm">
                                                        <div>
                                                        <div class="product_price product_price_tz">
                                                            <div class="price_rating">
                                                                当前价格
                                                            </div>
                                                        </div>
                                                        <div class="price_box price_box_tz">
                                                            <span class="spical-price">
                                                                {{ $v->goods->goods_price }}
                                                            </span>元
                                                        </div>
                                                        <div class="last_button_area">
                                                            <ul class="add-to-links clearfix">
                                                                <li>
                                                                    <div class="new_act">
                                                                        <a href="/goodlist/{{ $v->goods->id }}" target="_blank" class="button_act button_act_2 button_act_hts" data-quick-id="45" href="" title="" data-toggle="tooltip" data-original-title="Donec non est at">
                                                                            再次购买
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
@endforeach
{{ $data->links() }}
@endsection