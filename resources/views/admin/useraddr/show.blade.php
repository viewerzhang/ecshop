<div id="oop" style="width: 300px;margin:auto;margin-top: 10px;">
  <div class="form-group">
    <label for="title">地址标题</label>
    <input type="text" class="form-control" value="{{ $data->user_title }}" id="title">
  </div>
  <div class="form-group" >
    <label for="user" style="display: block;">收货人</label>
    <input type="text" class="form-control" value="{{ $data->user_take }}" id="user">
  </div>
  <div class="form-group">
    <label for="code">邮编</label>
    <input type="text" class="form-control" value="{{ $data->user_code }}" id="code">
  </div>
    <div class="form-group">
    <label for="phone">手机</label>
    <input type="text" class="form-control" value="{{ $data->user_phone }}" id="phone">
  </div>
    <div class="form-group">
    <label for="addr">收货地址</label>
    <textarea class="form-control" id="addr">{{ $data->user_addr }}</textarea>
  </div>
    <button onclick="edit({{ $data->id }})" style="margin-left: 22%;display: inline;" class="btn btn-info">确定修改</button>
    <button onclick="del({{ $data->id }})" class="btn btn-danger">删除地址</button>
  </div>
<script type="text/javascript">
  function edit(id){
         $.post('/admin/useraddr/'+id, {    
               "_token": "{{ csrf_token() }}",
               "_method": "put",
               'user_title':$('#title').val(),
               'user_take':$('#user').val(),
               'user_code':$('#code').val(),
               'user_phone':$('#phone').val(),
               'user_addr':$('#addr').val()
            }, function(data) {
                if(data.code == '1'){
                    layui.use(['layer', 'form'], function(){
                          var layer = layui.layer
                          ,form = layui.form;
                          $(uda).html(data.title);
                          layer.closeAll();
                          layer.msg('修改成功');
                    });
                }else{
                    layui.use(['layer', 'form'], function(){
                          var layer = layui.layer
                          ,form = layui.form;
                          layer.msg('修改失败');
                    });
                }
            },'json');
    }


    function del(id){
         $.post('/admin/useraddr/'+id, {    
               "_token": "{{ csrf_token() }}",
               "_method": "delete"
            }, function(data) {
                if(data.code == '1'){
                    layui.use(['layer', 'form'], function(){
                          var layer = layui.layer
                          ,form = layui.form;
                          $(uda).remove();
                          layer.closeAll();
                          layer.msg('删除成功');
                    });
                }else{
                    layui.use(['layer', 'form'], function(){
                          var layer = layui.layer
                          ,form = layui.form;
                          layer.msg('修改失败');
                    });
                }
            },'json');
    }
</script>