@extends('layout.grzx')

@section('grzx')
<div class="all-pros br-ntf" style="margin-top: 0px;">
	<h1 style="margin-left: 3px;"><small> 会员信息-----</small></h1><hr>
    <div class="al_form-fields al_form-fields-2">
        <div style="font-size: 18px; margin-bottom: 40px;">
            @if(empty($data->user_pic))
                	<img id="upica" src="/static/home/users_pic/default.png" alt="" width="160" id="pic">
                @else
                	<img id="upica" src="/static/{{$data->user_pic}}" alt="" id="pic" width="160">
                @endif
                <a href="javascript:;" style="float:right;" id="editpwd">修改密码</a>
        </div>
             <div class="input-group" style="width: 200px;">
				  <div class="input-group-btn" style="font-size: 18px; margin-bottom: 40px; padding-top: 0px;">
				  	用户名:
				  </div>
				  <input type="text" class="form-control bc" name="user_name" value="{{$data->user_name}}" style="margin-top: 15px;">
			</div>
        <p style="font-size: 18px; margin-bottom: 40px;">
            手机号: {{$data->user_phone}} <a href="javascript:;" class="btn btn-info btn-xs" onclick="editphone({{ $data->id }})">修改</a>
        </p>
        <div class="input-group" style="font-size: 18px; margin-bottom: 20px;">
            性别 :  
            <label class="radio-inline">
			  	<input type="radio" class="bc" name="user_sex" id="inlineRadio1" value="0" @if($data->user_sex == 0) checked @endif> 保密
			</label>
			<label class="radio-inline">
			  	<input type="radio" class="bc" name="user_sex" id="inlineRadio2" value="1" @if($data->user_sex == 1) checked @endif> 男
			</label>
			<label class="radio-inline">
			  	<input type="radio" class="bc" onchange="" name="user_sex" id="inlineRadio3" value="2" @if($data->user_sex == 2) checked @endif> 女
			</label>
			<div class="input-group"></div>
		</div>
        <p style="font-size: 18px; margin-bottom: 40px;">
            邮箱: @if(empty($data->user_email))
					  <a href="javascript:;" id="email">立即验证</a>
				  @else
					  {{$data->user_email}}
				  @endif
        </p>
    </div>
</div>


<script type="text/javascript">
   var data;
   var phone = '{{ $data->user_phone }}';
   var upic = "{{ asset("$data->user_pic") }}";
   var id = {{ $data->id }};
   var csrf = "{{ csrf_token() }}";
   function editphone(id)
   {
    layui.use(['layer', 'form'], function(){
          var layer = layui.layer
          ,form = layui.form;
          $.ajax({
              type:'get',
              url:'/grzx/'+id+'/edit',
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
    // alert(id);
   }
    $('#upica').click(function(){
        layui.use(['layer', 'form'], function(){
          var layer = layui.layer
          ,form = layui.form;
          $.ajax({
              type:'get',
              url:'/grzx/'+id,
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
              url:'/grzx/create',
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

    $('.bc').change(function (){
        metch = $(this).attr('name');
        zhi = $(this).val();
        // console.log(metch);
        // console.log(zhi);
        $.post("/grzx/editgrxx/"+metch, {    
               "_token": "{{ csrf_token() }}",
               metch:zhi
        }, function(data) {
            // console.log(data);
            layui.use(['layer', 'form'], function(){
                var layer = layui.layer
                ,form = layui.form;
                if(data.code == '1'){
                    layer.msg('修改成功');
                }else{
                    layer.msg('修改失败');
                }
            });
        },'json');
    });
    $('#email').click(function(){
        layui.use(['layer', 'form'], function(){
          var layer = layui.layer
          ,form = layui.form;
          $.ajax({
              type:'get',
              url:'/email',
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
              area: ['420px', '300px'], //宽高
              content: data,
            });
        });
    });
</script>


@endsection