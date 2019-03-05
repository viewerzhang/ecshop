<div style="width: 300px;margin: auto;margin-top: 30px;">
    <form id="editaddr">
   <div class="form-group">
    <label for="dizhi">地址标题：</label>
    <input type="text" name="user_title" value="" class="form-control" id="user_title" placeholder="地址标题">
  </div>
  <div class="form-group">
    <label for="dizhi">收货人：</label>
    <input type="text" name="user_take" value="" class="form-control" id="user_take" placeholder="收货人">
  </div>
  <div class="form-group">
    <label for="phone">联系电话</label>
    <input type="text" name="user_phone" value="" class="form-control" id="user_phone" placeholder="联系电话">
  </div>
  <div class="form-group">
    <label for="code">邮政编码</label>
    <input type="number" name="user_code" value="" class="form-control" id="user_code" placeholder="邮政编码">
  </div>
  <div class="form-group">
    <label for="code">收货地址</label>
    <textarea class="form-control" name="user_addr" rows="3" id="user_addr" placeholder="收货地址"></textarea>
  </div>
  <a href="javascript:;" onclick="return tjj()" class="btn btn-success" style="margin-left: 35%;">确定添加</a>
</form>
</div>
<script type="text/javascript">

   
    function tjj(id,uid)
    {
        if($('#user_addr').val() == ''){
          layer.msg('地址为必填项');
          return false;
        }
        if($('#user_title').val() == ''){
          layer.msg('标题为必填项');
          return false;
        }
        if($('#user_take').val() == ''){
          layer.msg('收货人为必填项');
          return false;
        }
        if($('#user_phone').val() == ''){
          layer.msg('联系电话为必填项');
          return false;
        }
        if($('#user_code').val() == ''){
          layer.msg('邮政编码为必填项');
          return false;
        }
        // return console.log($(xz).parent().prev());
        layui.use(['layer', 'form'], function(){
        var layer = layui.layer
        ,form = layui.form;
            $.post("/useraddr", {    
                   "_token": "{{ csrf_token() }}",
                   'uid':uid,
                   'user_addr':$('#user_addr').val(),
                   'user_title':$('#user_title').val(),
                   'user_take':$('#user_take').val(),
                   'user_phone':$('#user_phone').val(),
                   'user_code':$('#user_code').val(),
                   'id':id
                }, function(data) {
                    if(data.code == '0'){
                      layer.msg('添加地址失败');
                      return false;
                    }
                    if(pd == true){
                      var div = $('#dkl').clone(true);
                      $(div).find('#shr').html(data.user_take);
                      $(div).find('#lxdh').html(data.phone);
                      $(div).find('#yb').html(data.user_code);
                      $(div).find('#xxdz').html(data.user_addr);
                      $('.bxyx').prop('checked',false);
                      $(div).find('#dxk').val(data.fhid);
                      $(div).find('#dxk').prop('checked',true);
                      $(div).css('display','block');
                      $(div).css('border','#000 solid 1px');
                      $(div).find('.anniu').css('background','#666');
                      $('.xzdz').css('color','#888');
                      $('.okdz').css('border','#ddd solid 1px');
                      $('.anniu').css('background','#eee');
                      $('#psdzk').append(div);
                      $('#oop').remove();
                      layer.closeAll();
                      return false;
                    }
                    location.href = '/useraddr';
                },'json');
        });
    }
</script>