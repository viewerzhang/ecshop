@extends('layout.admin')
@section('title', '商品品牌管理')
@section('title2', '添加品牌')
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
                                            <span class="widget-caption">添加品牌</span>
                                        </div>
                                        <div class="widget-body">
                                            <div>
                                                <form id="files" role="form" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="logo_upload">品牌Logo
                                                        <input style="display: none;" name="pic" type="file" id="logo_upload" class="form-control">
                                                        @if( old('brand_logo') )
                                                            <img width="60" id="pic" title="建议图片尺寸为：358*204" src="{{ asset(old('brand_logo')) }}">
                                                        @else
                                                            <img width="60" id="pic" title="建议图片尺寸为：358*204" src="{{ asset('static/admin/images/onclick.jpg') }}">
                                                        @endif
                                                        </label>
                                                    </div>
                                                </form>
                                                <form role="form" action="/admin/goodsbrand" method="post">
                                                        {{ csrf_field() }}
                                                        <!-- logo路径隐藏域 -->
                                                    <input type="hidden" id="hdlogo" value="{{ old('brand_logo') }}" name="brand_logo"> 
                                                    <div class="form-group">
                                                        <label for="brand_name">品牌名称</label>
                                                        <input type="text" id="brand_name" max="12" name="brand_name" value="{{ old('brand_name') }}" class="form-control" placeholder="请输入品牌名称">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="brand_url">品牌链接</label>
                                                        <input type="url" name="brand_url" class="form-control" id="brand_url" value="{{ old('brand_url') }}" placeholder="请输入品牌的链接地址">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">品牌关键字</label>
                                                        <input type="text" value="{{ old('brand_desc') }}" name="brand_desc" class="form-control" placeholder="请输入品牌的关键字">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                @if(old('brand_status'))
                                                                <input name="brand_status" checked type="checkbox">
                                                                @else
                                                                <input name="brand_status" type="checkbox">
                                                                @endif
                                                                <span class="text">是否直接在前台显示？</span>
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
                url:'/admin/goodsbrand/files',
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
                    }
                }
            });
    })
</script>
@endsection