<div style="width: 300px;margin: auto;margin-top: 30px;">
    <form id="editaddr">
   <div class="form-group">
    <label for="dizhi">地址标题：</label>
    <input type="text" name="user_title" value="{{ $data->user_title }}" class="form-control" id="user_title" placeholder="地址标题">
  </div>
  <div class="form-group">
    <label for="dizhi">收货人：</label>
    <input type="text" name="user_take" value="{{ $data->user_take }}" class="form-control" id="user_take" placeholder="收货人">
  </div>
  <div class="form-group">
    <label for="phone">联系电话</label>
    <input type="text" name="user_phone" value="{{ $data->user_phone }}" class="form-control" id="user_phone" placeholder="联系电话">
  </div>
  <div class="form-group">
    <label for="code">邮政编码</label>
    <input type="number" name="user_code" value="{{ $data->user_code }}" class="form-control" id="user_code" placeholder="邮政编码">
  </div>
  <div class="form-group">
    <label for="code">收货地址</label>
    <textarea class="form-control" name="user_addr" rows="3" id="user_addr" placeholder="收货地址">{{ $data->user_addr }}</textarea>
  </div>
  <a href="javascript:;" onclick="return tjj({{ $data->id }},{{ $data->uid }})" class="btn btn-success" style="margin-left: 35%;">确定修改</a>
</form>
</div>
<script type="text/javascript">

    function tjj(id,uid){layui.use(['layer','form'],function(){var layer=layui.layer,form=layui.form;$.post("/useraddr/"+{{session('user.id')}},{"_token":"{{ csrf_token() }}",'_method':'put','uid':uid,'user_addr':$('#user_addr').val(),'user_title':$('#user_title').val(),'user_take':$('#user_take').val(),'user_phone':$('#user_phone').val(),'user_code':$('#user_code').val(),'id':id},function(data){if(data.code=='1'){layer.closeAll();layer.msg('地址修改成功');$(xz).parent().prev().find('h3').html(data.user_title);$(xz).parent().prev().find('p').first().html("<strong>收货人：</strong>"+data.user_take);$($(xz).parent().prev().find('p').get(1)).html("<strong>联系电话：</strong>"+data.user_phone);$($(xz).parent().prev().find('p').get(2)).html("<strong>邮政编码：</strong>"+data.user_code);$($(xz).parent().prev().find('p').get(3)).html("<strong>收货地址：</strong>"+data.user_addr);return false}layer.msg('地址修改失败')},'json')})}
    // function tjj(id,uid)
    // {
    //     // return console.log($(xz).parent().prev());
    //     layui.use(['layer', 'form'], function(){
    //     var layer = layui.layer
    //     ,form = layui.form;
    //         $.post("/useraddr/"+{{ session('user.id') }}, {    
    //                "_token": "{{ csrf_token() }}",
    //                '_method':'put',
    //                'uid':uid,
    //                'user_addr':$('#user_addr').val(),
    //                'user_title':$('#user_title').val(),
    //                'user_take':$('#user_take').val(),
    //                'user_phone':$('#user_phone').val(),
    //                'user_code':$('#user_code').val(),
    //                'id':id
    //             }, function(data) {
    //                 if(data.code == '1'){
    //                     layer.closeAll();
    //                     layer.msg('地址修改成功');
    //                     $(xz).parent().prev().find('h3').html(data.user_title);
    //                     $(xz).parent().prev().find('p').first().html("<strong>收货人：</strong>"+data.user_take);
    //                     $($(xz).parent().prev().find('p').get(1)).html("<strong>联系电话：</strong>"+data.user_phone);
    //                     $($(xz).parent().prev().find('p').get(2)).html("<strong>邮政编码：</strong>"+data.user_code);
    //                     $($(xz).parent().prev().find('p').get(3)).html("<strong>收货地址：</strong>"+data.user_addr);
    //                     return false;
    //                 }
    //                 layer.msg('地址修改失败');
    //             },'json');
    //     });
    // }
</script>