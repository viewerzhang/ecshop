@extends('layout.admin')
@section('title', '广告管理')
@section('url','/admin/ad')
@section('title2', '添加广告')
@section('content')
	<div class="col-lg-6 col-sm-6 col-xs-12" width="700px">
<!-- 显示错误消息 开始 -->
    @if (session('success'))
        <div class="class='alert alert-success" role="lert">
            {{ session('success') }}
        </div>
    @endif


    @if (session('error'))
        <div class="class='alert alert-danger" role="lert">
            {{ session('error') }}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<!-- 显示错误消息 结束 -->
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">广告添加</span>
            </div>
            <div class="widget-body">
                <div>
                    <form id="files" role="form" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="logo_upload">广告图片</label>
                            <input type="file" id="logo_upload" name="ad_img">
                            @if( old('ad_img') )
                                <img width="60" id="ad_img" title="建议图片尺寸为：358*204" src="{{ asset(old('ad_img')) }}">
                            @else
                                <img width="60" id="ad_img" title="建议图片尺寸为：358*204" src="{{ asset('static/admin/images/onclick.jpg') }}">
                            @endif
                        </div>
                    </form>
                    <form role="form" action="/admin/ad" method="post" enctype="multipart/form-data">
                    	{{ csrf_field() }}
                        <!-- logo路径隐藏域 -->
                        <input type="hidden" id="hdlogo" value="{{ old('ad_img') }}" name="ad_img">
                        <div class="form-group">
                            <label>广告描述</label>
                            <input type="text" class="form-control"placeholder="请填写广告描述" name="ad_desc">
                        </div>
                        
                        <div class="form-group">
                            <label>广告链接地址</label>
                            <input type="url" class="form-control"placeholder="请输入广告链接地址" name="ad_link">
                        </div>
                        
                        <button type="submit" class="btn btn-blue">提交</button>
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
                url:'/admin/ad/files',
                processData:false,
                contentType:false,
                dataType:'json',
                success:function(data){
                    console.log(data);
                    if(0 == data.code){
                        alert('图片加载失败，请重新选择');
                    }else if(1 == data.code){
                        $('#ad_img').attr('src',data.src);
                        $('#hdlogo').val(data.hdsrc);
                    }
                }
            });
    })
</script>
@endsection