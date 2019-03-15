@inject('getIp', 'App\common\getIp')
@extends('layout.admin')
@section('title', '管理员')
@section('title2', '个人中心')
@section('content')
<div class="col-lg-6 col-sm-6 col-xs-12" width="700px">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-blue">
            <span class="widget-caption">我的个人信息</span>
            <span>
                <a href="javascript:;" id="editpwd" class="btn btn-definde" style="margin-right: -4px;">修改密码</a>
                <a href="javascript:;" class="btn btn-definde">更新资料</a>
            </span>
        </div>
        <div class="widget-body">
            <div style="border: #ccc solid 1px;background: #F7F7F7;width: 50%;height:110%;border-radius: 15px;">
                <div style="position: relative;top: 10px;left: 15px;">
                    <div class="form-group">
                        <label for="exampleInputEmail1">头像：</label>
                        <img style="cursor: pointer;" class="img-rounded" id="upica" width="100" src='{{ asset("$data->upic") }}' height="100">
                    </div>
                    <div class="form-group">
                         <span> 管理员名称： </span> 
                        {{ $data->uname }}
                    </div>
                    <div class="form-group">
                         <span> 用户组： </span> 
                        {{ $data->group }}
                    </div>
                    <div class="form-group">
                         <span> 手机号： </span> 
                        {{ $data->admin_phone }}　<a href="javascript:;" class="btn btn-primary btn-xs" onclick="editphone({{ $data->id }})">修改</a>
                    </div>
                    <div class="form-group">
                         <span> 邮  箱： </span> 
                        {{ $data->admin_email }}　<a href="javascript:;" id="yzyx" class="btn btn-primary btn-xs">修改</a>
                    </div>
                    <div class="form-group">
                         <span> 当前状态： </span> 
                        @if($data->admin_status == 1)
                        激活
                        @else
                        禁止
                        @endif
                    </div>
                    <div class="form-group">
                         <span> 注册时间： </span> 
                        {{ date('Y年m月d日 H时i分s秒',$data->created_time) }}
                    </div>
                    <div class="form-group">
                         <span> 上次登录时间： </span> 
                        {{ date('Y年m月d日 H时i分s秒',$data->last_time) }}
                    </div>
                    <div class="form-group">
                         <span> 上次登录地点： </span> 
                        {{ $getIp::getIp($data->admin_historyip) }}
                    </div>
                </div>
                    <!-- <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="text">Remember me next time.</span>
                            </label>
                        </div>
                    </div> -->

            </div>
            <div style="position: absolute;border:#ccc solid 1px;width: 45%;height:80%;border-radius: 3px;left: 52%;top: 11%;">

                    <div class="xtgg"><span style="position: relative;top: 2px;left: -5px;" class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>系统公告</div>
                    <hr style="margin-top: 8px;">
                        <ul class="list-group" style="margin-top: -14px;">
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                        </ul>
                </div>
        </div>


                
    </div>
</div>
<style type="text/css">
    .xtgg{
        font-size: 24px;
        font-weight: bold;
        font-family: 黑体;
        margin-left: 20px;
        margin-top: 12px;
        color: #666;
    }
</style>
<script type="text/javascript">
   var data;
   var phone = {{ $data->admin_phone }};
   var upic = "{{ asset("$data->upic") }}";
   var id = {{ $data->id }};
   var csrf = "{{ csrf_token() }}";
   function editphone(id)
   {
    layui.use(['layer', 'form'], function(){
          var layer = layui.layer
          ,form = layui.form;
          $.ajax({
              type:'get',
              url:'/admin/admin/'+id+'/edit',
              async:false,
              success:function(dataa)
              {
                  data = dataa;
              }
  
          });
           layer.open({
              type: 1,
              title:'修改手机号',
              skin: 'layui-layer-rim', //加上边框
              area: ['420px', '340px'], //宽高
              content: data,
            });
        });    
   }
    $('#upica').click(function(){
        layui.use(['layer', 'form'], function(){
          var layer = layui.layer
          ,form = layui.form;
          $.ajax({
              type:'get',
              url:'/admin/admin/'+id,
              async:false,
              success:function(dataa)
              {
                  data = dataa;
              }
  
          });
           layer.open({
              type: 1,
              title:'我的头像',
              skin: 'layui-layer-rim', //加上边框
              area: ['320px', '340px'], //宽高
              content: data,
            });
        });    
    });
    // 打开修改密码页面
    $('#editpwd').click(function() {

        layui.use(['layer', 'form'], function(){
          var layer = layui.layer
          ,form = layui.form;
          $.ajax({
              type:'get',
              url:'/admin/admin/create',
              async:false,
              success:function(dataa)
              {
                  data = dataa;
              }
          });
          layer.open({
              type: 1,
              title:'修改密码',
              skin: 'layui-layer-rim', //加上边框
              area: ['420px', '340px'], //宽高
              content: data,
            });
        });
    });
    // 验证邮箱
    $('#yzyx').click(function () {

      layui.use(['layer', 'form'], function(){
          var layer = layui.layer
          ,form = layui.form;
          $.ajax({
              type:'get',
              url:'/admin/editemail',
              async:false,
              success:function(dataa)
              {
                  data = dataa;
              }
          });
          layer.open({
              type: 1,
              title:'验证邮箱',
              skin: 'layui-layer-rim', //加上边框
              area: ['480px', '340px'], //宽高
              content: data,
            });
        });

    });
</script>
@endsection