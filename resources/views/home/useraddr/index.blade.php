@extends('layout.grzx')
@section('title','我的地址')
@section('grzx')
    <link rel="stylesheet" type="text/css" href="/static/home/css/button.css" media="screen">
<div style="height: 680px;">
    <a href="javascript:;" id="djtj" class="btn btn-info btn-xs" style="float: right;">添加地址</a>
    @if(count($data) != 0)
    @foreach($data as $k => $v)
    <div class="col-md-9 bg-warning" style="margin-top: 10px;">
        <div style="height: 220px;width: 70%;float: left;">
            <h3 style="margin-top: 6px;">{{ $v->user_title }}</h3>
            <hr style="border-top: 1px ridge #ddd;margin-top: -2px;">
            <p style="line-height: 20px; max-height: 40px;overflow: hidden;"><strong>收货人：</strong>{{ $v->user_take }}</p>
            <p style="line-height: 20px; max-height: 40px;overflow: hidden;"><strong>联系电话：</strong>{{ $v->user_phone }}</p>
            <p style="line-height: 20px; max-height: 40px;overflow: hidden;"><strong>邮政编码：</strong>{{ $v->user_code }}</p>
            <p style="line-height: 20px; max-height: 40px;overflow: hidden;"><strong>收货地址：</strong>{{ $v->user_addr }}</p>
        </div>
        <div style="height: 220px;width: 28%;border-left: 1px #ddd solid;float: right;">
            <div class="button green" onclick="edit({{ $v->id }},this)" style="height: 50px;width: 200px;margin-left: 23px;margin-top: 50px;"><div class="shine"></div><div style="margin-left: 26px;font-size: 18px">修改地址</div></div><br/>
            <div class="button red" onclick="del({{ $v->id }},{{$k}},this)" style="height: 50px;width: 200px;margin-left: 23px;margin-top: 10px"><div class="shine"></div><div style="margin-left: 26px;font-size: 18px">删除地址</div></div>
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
var title = new Array();
@foreach($data as $k=>$v)
    title[{{$k}}] = "{{ $v->user_title }}";
@endforeach


    function del(id,k,ud)
    {
        // $(ud).parent().parent().remove();
        layui.use(['layer', 'form'], function(){
        var layer = layui.layer
        ,form = layui.form;
            layer.confirm('您确定要删除【'+title[k]+'】这条地址？', {icon: 3, title:'您即将删除地址'}, function(index){
              $.post("/useraddr/"+{{ session('user.id') }}, {    
               "_token": "{{ csrf_token() }}",
               '_method':'delete',
               'id':id
            }, function(data) {
                if(data.code == '1'){
                    $(ud).parent().parent().remove();
                    layer.closeAll();
                    layer.msg('删除成功');
                    return true;
                }
                layer.msg('删除失败');


            },'json');
              
            });
        });
    }


    function edit(id,ud)
    {
        xz = ud;
        layui.use(['layer', 'form'], function(){
          var layer = layui.layer
          ,form = layui.form;
          $.ajax({
              type:'get',
              url:'/useraddr/'+id,
              async:false,
              success:function(dataa)
              {
                  data = dataa;
              }
  
          });
           layer.open({
              type: 1,
              title:'个人中心 -- 修改地址',
              skin: 'layui-layer-rim', //加上边框
              area: ['460px', '550px'], //宽高
              content: data,
            });
        });    
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