@extends('layout.admin')
@section('title', '管理员管理')
@section('title2', '添加管理员')
@section('content')
<div class="col-lg-6 col-sm-6 col-xs-12" width="700px">
    @if (count($errors) > 0)
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul>
                <li>{{ session('error') }}</li>
        </ul>
    </div>
    @endif
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-blue">
                                            <span class="widget-caption">添加管理员</span>
                                        </div>
                                        <div class="widget-body">
                                            <div>
                                                <form id="files" role="form" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="logo_upload">头像：
                                                        <input  accept="image/gif,image.jpg,image/jpeg,jpeg.jpg" style="display: none;" name="pic" type="file" id="logo_upload" class="form-control">
                                                        @if( old('upic') )
                                                            <img class="img-rounded" width="80" height="80" id="pic" title="建议图片尺寸为：400*400" src="{{ asset(old('lspic')) }}">
                                                        @else
                                                            <img class="img-rounded" width="80" height="80" id="pic" title="建议图片尺寸为：400*400" src="/static/admin/images/onclick.jpg">
                                                        @endif
                                                        </label>
                                                    </div>
                                                </form>
                                                <form role="form" action="/admin/admins" method="post">
                                                        {{ csrf_field() }}
                                                        <!-- logo路径隐藏域 -->
                                                    <input type="hidden" id="hdlogo" value="{{ old('upic') }}" name="upic"> 
                                                    <input type="hidden" id="lspic" value="{{ old('lspic') }}" name="lspic"> 
                                                    <div class="form-group">
                                                        <label for="uname">用户名</label>
                                                        <input type="text" id="uname" max="12" name="uname" value="{{ old('uname') }}" class="form-control" placeholder="请输入品牌名称">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="upwd">用户密码</label>
                                                        <input type="password" name="upwd" class="form-control" id="upwd" value="{{ old('upwd') }}" placeholder="请输入密码">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="rupwd">确认密码</label>
                                                        <input type="password" name="rupwd" class="form-control" id="rupwd" value="{{ old('rupwd') }}" placeholder="请确认密码">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="" style="display: block;">用户组</label>
                                                        <select name="group">
                                                            <option value="0">超级管理员</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="admin_phone">手机号</label>
                                                        <input type="text" name="admin_phone" class="form-control" id="admin_phone" value="{{ old('admin_phone') }}" placeholder="请输入手机号">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="admin_email">邮箱</label>
                                                        <input type="email" value="{{ old('admin_email') }}" name="admin_email" class="form-control" placeholder="请输入品牌的关键字">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                @if(old('admin_status'))
                                                                <input name="admin_status" checked type="checkbox">
                                                                @else
                                                                <input name="admin_status" type="checkbox">
                                                                @endif
                                                                <span class="text">激活用户？</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <input type="submit" class="btn btn-blue">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<script type="text/javascript">
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
                url:'/admin/admins/files',
                processData:false,
                contentType:false,
                dataType:'json',
                success:function(data){
                    console.log(data);
                    if(0 == data.code){
                        alert('图片加载失败，请从新选择');
                    }else if(1 == data.code){
                        $('#pic').attr('src',data.src);
                        $('#hdlogo').val(data.hdsrc);
                        $('#lspic').val(data.src);
                    }
                }
            });
    })
</script>
@endsection