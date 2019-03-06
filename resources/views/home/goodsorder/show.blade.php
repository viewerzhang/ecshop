@extends('layout.grzx')
@section('title','订单管理')
@section('grzx')
    <link rel="stylesheet" type="text/css" href="/static/home/css/button.css" media="screen">
<div style="height: 680px;">
    @if(count($data) != 0)
    @foreach($data as $k => $v)
    <div class="col-md-9 bg-warning" style="margin-top: 10px;">
        <div style="height: 150px;width: 70%;float: left;margin-top: 10px;">
            <span style="margin-top: 6px;display: inline;font-size: 13px;">您的订单号：{{ $v->rand_id }}</span>　　　　　　<span style="display: inline;font-size: 13px;">下单时间：{{ date('Y年m月d日 H时i分s秒',$v->created_at) }}</span>
            <hr style="border-top: 1px ridge #aaa;margin-top: 5px;">
            @foreach($v->shopdetail as $kk => $vv)
            @if($kk >4 ) <?php break; ?>@endif
            <div style="width: 90px;height: 90px;float: left;margin-left: 10px">
              <a href="/goodlist/{{ $vv->goods->id }}" title="{{ $vv->goods->goods_name }}">
                <img style="width: 100%;height: 100%" src="/static/admin/images/goods_img/{{ $vv->goods->goods_img }}" class="img-rounded">
              </a>
            </div>
            @endforeach
        </div>
        <div style="height: 150px;width: 28%;border-left: 1px #aaa solid;float: right;">
            <a href="/goodsorder/{{ $v->id }}/edit"><div class="button green" style="height: 30px;width: 150px;margin-left: 43px;margin-top: @if($v->order_status != 0 && $v->order_status != 1)40px @else 20px @endif;"><div class="shine"></div><div style="margin-left: 15px;margin-top: -8px;font-size: 12px;width: 150px;">查看详情</div></div><br/></a>
            @if($v->order_status != 3)
            <div class="button red" @if($v->order_status == 1)onclick="dj2({{ $v->id }},this)"@elseif($v->order_status == 2) onclick="jywc(this)"@endif style="height: 30px;width: 150px;margin-left: 43px;margin-top: 10px"><div class="shine"></div><div class="bbq" style="margin-left: 15px;margin-top: -8px;font-size: 12px;width: 150px;">@if($v->order_status == 0)等待发货@elseif($v->order_status == 1)确定收货@elseif($v->order_status == 2)交易完成@elseif($v->order_status == 3)交易关闭@endif</div></div>
            @endif
            @if($v->order_status == 0 || $v->order_status == 1 || $v->order_status == 3)
            <div class="button orange" @if($v->order_status != 3)onclick="gbdd({{ $v->id }},this)"@endif style="height: 30px;width: 150px;margin-left: 43px;margin-top: 10px;"><div class="shine"></div><div class="gbddd" style="margin-left: 15px;margin-top: -8px;font-size: 12px;width: 150px;">关闭订单</div></div><br/>
            @endif
        </div>
    </div>
    @endforeach
    @else
    
    <div style="width: 500px;height: 200px;margin-left: 400px;"><h3>您的地址列表没有信息，赶紧去<a id="djtj2" href="javascript:;">添加地址</a>吧！</h3></div>
    @endif
</div>
    {{ $data->links() }}
<script src="/static/home/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/static/home/follow.js" type="text/javascript"></script>
<script type="text/javascript">
  function dj2(id,ud)
  {
    layui.use(['layer', 'form'], function(){
        var layer = layui.layer
        ,form = layui.form;
            layer.confirm('请确定您收到商品后确认收货！', {icon: 3, title:'确认收货'}, function(index){
                $.get("/goodsorder/"+id,  function(data) {
                        if(data.code == '1'){
                          $(ud).find('.bbq').html('交易完成');
                          $(ud).removeAttr('onclick');
                          $(ud).next().remove();
                          $(ud).prev().prev().css('margin-top','40px');
                          // layer.closeAll();
                          layer.msg('确认收货成功');
                        }else{
                          layer.msg('确认收货失败');
                        }
                },'json');
            });
        });
  }
  function jywc(ud)
  {
    layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form;
      layer.msg('您的交易已完成');
    });
  }
  function gbdd(id,ud)
  {
        layui.use(['layer', 'form'], function(){
        var layer = layui.layer
        ,form = layui.form;
            layer.confirm('您确定要关闭订单吗？', {icon: 3, title:'重要提示'}, function(index){
              $.post("/goodsorder/"+id, {    
                 "_token": "{{ csrf_token() }}",
                 '_method':'delete'
              }, function(data) {
                  if(data.code == '1'){
                    $(ud).prev().prev().prev().css('margin-top','40px');
                    $(ud).prev().remove();
                    $(ud).removeAttr('onclick');
                    // layer.closeAll();
                    layer.msg('订单关闭成功');
                  }else{
                    layer.msg('订单关闭失败');
                  }
              },'json');
         });
        });
  }
</script>
@endsection