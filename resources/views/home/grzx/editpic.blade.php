<div class="alert alert-info" role="alert"><strong>尊敬的会员:</strong>你可以自定义头像上传！</div>
<div style="margin-left: 25%;margin-top: 10%">
    <label for="tx">
        @if($data->user_pic == '')
        <img class="img-rounded" src="/static/home/users_pic/default.png" id="homepic" width="150" height="150" onclick="htx();">
        @else
        <img class="img-rounded" src="/static/{{$data->user_pic}}" id="homepic" width="150" height="150" onclick="htx();">
        @endif
    </label>
    <form id="scbd" enctype="multipart/form-data">
        <input style="display: none;" type="file" id="tx" name="pic">
    </form>
</div>
<script type="text/javascript">
    layui.use(['layer', 'form'], function(){
              var layer = layui.layer
              ,form = layui.form;
              layer.msg('点击修改头像');
    
        $('#tx').change(function(){
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
            $.ajax({
                type:'post',
                data:new FormData($('#scbd').get(0)),
                url:'/grzx/pic/'+id,
                processData:false,
                contentType:false,
                dataType:'json',
                success:function(data){
                    if(data.code == '1'){
                        layer.msg('恭喜你，头像修改成功');
                        $('#upica').attr('src','/static/'+data.src);
                        $('#homepic').attr('src','/static/'+data.src);
                    }
                }

            });
        });
    });
</script>