<div id="oop" style="width: 300px;margin:auto;margin-top: 10px;">
  <div class="form-group">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <label for="phone">分类名称</label>
    <input type="text" id="newcate" class="form-control" name="cate_name" value="{{ $data->cate_name }}">
  </div>
    <button onclick="editxg({{ $data->id }});" style="margin-left: 36%;" class="btn btn-danger">确定修改</button>
</div>
<script type="text/javascript">
console.log(xgk);
    function editxg(id){
         $.post('/admin/goodscategory/'+id, {    
               "_token": csrf,
               "_method": "put",
               'cate_name':$('#newcate').val()
            }, function(data) {

                if(data.code == '1'){
                    layui.use(['layer', 'form'], function(){
                          var layer = layui.layer
                          ,form = layui.form;
                          edittitle.html(data.name);
                          layer.msg('修改成功');
                          layer.closeAll();
                    });
                }
                console.log(data);
            },'json');
    }
</script>