@extends('layout.admin')
@section('title', '栏目管理')
@section('url','/admin/column')
@section('title2', '修改栏目')
@section('content')
<div class="col-lg-12 col-sm-12 col-xs-12">
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
<!-- 显示错误消息 结束 -->
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改栏目</span>
            </div>
            <div class="widget-body" style="height: 1100px">
                <div id="horizontal-form">
                    <form class="form-horizontal" id="files" role="form" action="/admin/column/{{ $data->id }}"  method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <br>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写标题" name="column_title" required="" type="text" value="{{ $data->column_title }}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目描述</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写概述" name="column_desc" type="text" required="" value="{{ $data->column_desc }}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">外链网址</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写外链url地址" name="column_url" type="url" required="" value="{{ $data->column_url }}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目排序</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="用于栏目排序" name="column_sort" type="number" required="" value="{{ $data->column_sort }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="logo_upload" class="col-sm-2 control-label no-padding-right">栏目图</label>
                            <div class="col-sm-6">
                                <input id="logo_upload" name="column_img" type="file" required="">
                            @if( old('ad_img') )
                                <img width="60" id="ad_img" title="建议图片尺寸为：358*204" src="{{ asset(old('ad_img')) }}">
                            @else
                                <img width="60" id="ad_img" title="建议图片尺寸为：358*204" src="/static/{{ $data->column_img }}">
                            @endif
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目内容</label>
                            <div class="col-sm-6">
                                <!-- 加载编辑器的容器 -->
                            <script id="container" name="column_content" type="text/plain" style="width: 800px;height: 500px">{{ $data->column_content }}
                            </script>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">确定修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <!-- 配置文件 -->
    <script type="text/javascript" src="/static/admin/udit/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/static/admin/udit/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
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
                url:'/admin/column/files',
                processData:false,
                contentType:false,
                dataType:'json',
                success:function(data){
                    console.log(data);
                    if(0 == data.code){
                        alert('图片加载失败，请重新选择');
                    }else if(1 == data.code){
                        $('#column_img').attr('src',data.src);
                        $('#hdlogo').val(data.hdsrc);
                    }
                }
            });
    })
    </script>
@endsection
