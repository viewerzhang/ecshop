@extends('layout.admin')
@section('title', '配置管理')
@section('url','/admin/conf')
@section('title2', '系统配置')
@section('content')
 <div class="col-lg-6 col-sm-6 col-xs-12" width="700px">
                              <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-blue">
                                            <span class="widget-caption">网站基本配置</span>
                                        </div>
                                        <div class="widget-body">
                                            <div>
                                                <form id="files" role="form" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="logo_upload">网站Logo
                                                        <input  accept="image/gif,image.jpg,image/jpeg,jpeg.jpg" style="display: none;" name="pic" type="file" id="logo_upload" class="form-control">
                                                            <img width="60" id="pic" title="建议图片尺寸为：358*204" src="/{{ $data['conf_pic'] }}">
                                                        </label>
                                                    </div>
                                                </form>
                                                <form role="form"  action="/admin/goodsbrand" method="post">
                                                    <div class="form-group">
                                                        <label for="seo_title">网站标题</label>
                                                        <input type="text" id="seo_title" max="12" name="seo_title" value="{{ $data['seo_title'] }}" class="form-control bc" placeholder="请输入品牌名称">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="seo_key">SEO关键字</label>
                                                        <input type="url" name="seo_key" class="form-control bc" id="seo_key" value="{{ $data['seo_key'] }}" placeholder="请输入品牌的链接地址">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="seo_content">SEO简介</label>
                                                        <input type="text" value="{{ $data['seo_content'] }}" name="seo_content" id="seo_content" class="form-control bc" placeholder="请输入品牌的关键字">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="conf_upload">附件最大上传</label>
                                                        <input type="number" value="{{ $data['conf_upload'] }}" name="conf_upload" id="conf_upload" class="form-control bc" placeholder="请输入品牌的关键字">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="conf_record">备案号</label>
                                                        <input type="url" name="conf_record" class="form-control bc" id="conf_record" value="{{ $data['conf_record'] }}" placeholder="请输入品牌的链接地址">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="conf_record">是否开启RBAC权限</label><br>
                                                        <select name="conf_rbac" class="bc">
                                                            <option value="0" @if($data['conf_rbac'] == '0') selected @endif>开启</option>
                                                            <option value="1" @if($data['conf_rbac'] == '1') selected @endif>关闭</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="conf_record">建站时间</label>
                                                        <input type="date" name="conf_record" class="form-control bc" onchange="conf_date(this)" id="conf_record" value="{{ $data['conf_start'] }}" placeholder="请输入品牌的链接地址">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                @if($data['conf_status'] == '0' )
                                                                <input id="bcx" name="conf_status" type="checkbox">
                                                                @else
                                                                <input id="bcx" name="conf_status" checked type="checkbox">
                                                                @endif
                                                                <span class="text">开启站点？</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<script type="text/javascript">
layui.use(['layer', 'form'], function(){
    var layer = layui.layer
    ,form = layui.form;



    $('#logo_upload').change(function(){
        if(this.value == ''){
            return false;
        }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'post',
                data:new FormData($('#files').get(0)),
                url:'/admin/conf/files',
                processData:false,
                contentType:false,
                dataType:'json',
                success:function(data){
                    console.log(data);
                    if(0 == data.code){
                        layui.use(['layer', 'form'], function(){
                          var layer = layui.layer
                          ,form = layui.form;
                          layer.msg('图片修改失败，请重新修改');
                      });
                        alert('图片加载失败，请从新选择');
                    }else if(1 == data.code){
                        $('#pic').attr('src',data.src);
                        $('#hdlogo').val(data.hdsrc);
                        
                          layer.msg('网站Logo修改成功');
                      
                    }
                }
            });
    });



    $('.bc').change(function (){
        metch = $(this).attr('name');
        zhi = $(this).val();
        $.post("/admin/conf/"+metch, {    
               "_token": "{{ csrf_token() }}",
               "_method": "put",
               metch:zhi
            }, function(data) {
                if(data.code == '1'){
                    layer.msg('修改成功');
                }else{
                    layer.msg('修改失败');
                }
            },'json');
    });

    $('#bcx').change(function(){
        if($(this).prop('checked')){
            zhi = 1;
        }else{
            zhi = 0;
        }
        $.post("/admin/conf/conf_status", {    
               "_token": "{{ csrf_token() }}",
               "_method": "put",
               metch:zhi
            }, function(data) {
                if(data.code == '1'){
                    layer.msg('修改成功');
                }else{
                    layer.msg('修改失败');
                }
            },'json');
    });


});
</script>
@endsection