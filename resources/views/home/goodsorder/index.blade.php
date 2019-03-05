@extends('layout.home')
@section('content')
        <link rel="stylesheet" href="/static/home/index/css/style.css">
      <div class="shop_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shop_menu shop_menu_tk ">
                            <ul class="cramb_area cramb_area_2 cramb_area_ktp">
                                <li><a href="/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">主页/</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的购物车/</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">确认订单</font></font></a></li>

                                    <li style="float: right;"><a id="djtj" href="javascript:;">添加地址</a></li>
                            </ul>
                            <hr class="hrtop">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="checkout-area" >
            <div class="container">
                <div class="row" style="margin-top: -20px">
                    <form action="/goodsorder" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="code" hidden value="{{ $code }}"> 
                        <div class="col-lg-6 col-md-6">
                            <div class="checkbox-form addr-box">
                                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;margin-left: 30px;">配送地址</font></font></h3>
                                <!-- 配送地址页面 -->
                                <div class="row" id="psdzk">
                                    @if(count($attr) == 0)
                                    <div id="oop" style="width: 500px;height: 200px;margin-left: 400px;margin-left: 40px;"><h3>您的地址列表没有信息，赶紧去<a id="djtj2" href="javascript:;">添加地址</a>吧！</h3></div>
                                    @else
                                    <!-- 用户的每一条地址 -->
                                    @foreach($attr as $k => $v)
                                    <div class="col-md-6 address okdz" style="margin-top: 10px" >
                                        <span>收货人： <span class="shr-txt">{{ $v->user_take }}</span></span>
                                        <br>
                                        <span>联系电话：<span class="shr-txt">{{ $v->user_phone }}</span></span>
                                        <br>
                                        <span>邮编：<span class="shr-txt">{{ $v->user_code }}</span></span>
                                        <br>
                                        <span>详细地址：<span class="shr-txt">{{ $v->user_addr }}</span></span>
                                        <div class="anniu" onclick="xz(this)">
                                        <input type="radio" hidden value="{{ $v->id }}" class="bxyx" name="dz">
                                            <p class="xzdz xz">选择</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    <!-- 用户的每一条地址结束 -->
                                 
                                </div>
                                <!-- 配送地址结算 -->
                                <div class="different-address">
                                        
                                    <div id="ship-box-info" class="row">
                                        <div class="col-md-12">
                                            <div class="country-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                  <option value="volvo">bangladesh</option>
                                                  <option value="saab">Algeria</option>
                                                  <option value="mercedes">Afghanistan</option>
                                                  <option value="audi">Ghana</option>
                                                  <option value="audi2">Albania</option>
                                                  <option value="audi3">Bahrain</option>
                                                  <option value="audi4">Colombia</option>
                                                  <option value="audi5">Dominican Republic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone  <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="your-order">
                                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">你的订单</font></font></h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品</font></font></th>
                                                <th class="product-total"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总</font></font></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $k => $v)
                                            <tr class="cart_item">
                                                <td class="product-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    {{ $v['goods_name'] }}</font></font><strong class="product-quantity"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×{{ $v['detail_conut'] }}</font></font></strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥{{ $v['xj'] }}</font></font></span>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物车小计</font></font></th>
                                                <td><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥{{ $zongjiaqian }}</font></font></span></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输</font></font></th>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <input type="radio">
                                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">免费送货：</font></font></label>
                                                        </li>
                                                        <li></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">合计订单</font></font></th>
                                                <td><strong><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￥{{ $zongjiaqian }}</font></font></span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                          <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;margin-left: 30px;">
                                              直接银行转账
                                            </font></font></a>
                                          </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                          <div class="panel-body">
                                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">将付款直接存入我们的银行帐户。</font><font style="vertical-align: inherit;">请使用您的订单ID作为付款参考。</font><font style="vertical-align: inherit;">在我们的帐户中清算资金之前，您的订单将不会发货。</font></font></p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                          <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;margin-left: 30px;">
                                              余额支付
                                            </font></font></a>
                                          </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                          <div class="panel-body">
                                             <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                          <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;margin-left: 30px;">
                                              支付宝
                                            </font></font></a>
                                          </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                          <div class="panel-body">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="order-button-payment">
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input onclick="return yz()" type="submit" value="立即支付"></font></font>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>






        <div class="col-md-6 address okdz" id="dkl" style="margin-top: 10px;display: none;" >
            <span>收货人： <span class="shr-txt" id="shr"></span></span>
            <br>
            <span>联系电话：<span class="shr-txt" id='lxdh'></span></span>
            <br>
            <span>邮编：<span class="shr-txt" id="yb"></span></span>
            <br>
            <span>详细地址：<span class="shr-txt" id="xxdz"></span></span>
            <div class="anniu" onclick="xz(this)">
            <input type="radio" hidden value="" id="dxk" class="bxyx" name="dz">
                <p class="xzdz xz">选择</p>
            </div>
        </div>
        <script type="text/javascript">
            pd = true;
            function xz(ud)
            {
                $('.xzdz').css('color','#888');
                $('.okdz').css('border','#ddd solid 1px');
                $('.anniu').css('background','#eee');
                $(ud).parent().css('border','#000 solid 1px');
                $(ud).css('background','#666');
                $('input:radio').prop('checked',false);
                $(ud).find('input').prop('checked',true);
                $(ud).find('p').css('color','#fff');
            }
            function yz()
            {
                var linshi = false;
                $('.bxyx').each(function(){
                    if($(this).prop('checked') == true){
                        linshi = true;
                    }
                });
                if(linshi == false){
                    layui.use(['layer', 'form'], function(){
                    var layer = layui.layer
                    ,form = layui.form;
                        layer.msg('您还没有选择地址');
                    })
                    return false;
                }
            }

            $('#djtj,#djtj2').click(function () {

                layui.use(['layer', 'form'], function(){
                  var layer = layui.layer
                  ,form = layui.form;
                  $.ajax({
                      type:'get',
                      url:'/useraddr/create',
                      async:false,
                      success:function(dataa)
                      {
                          data = dataa;
                      }
          
                  });
                   layer.open({
                      type: 1,
                      title:'个人中心 -- 添加地址',
                      skin: 'layui-layer-rim', //加上边框
                      area: ['460px', '550px'], //宽高
                      content: data,
                    });
                });    

            });

        </script>
@endsection