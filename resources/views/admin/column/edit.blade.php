@extends('layout.admin')
@section('title', '栏目管理')
@section('url','/admin/column')
@section('title2', '修改栏目')
@section('content')
<div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改栏目</span>
            </div>
            <div class="widget-body" style="height: 1000px">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/column/{{ $data->id }}"  method="post" enctype="multipart/form-data">
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
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目图</label>
                            <div class="col-sm-6">
                                <input placeholder="" name="column_img" type="file" required="">
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
    </script>
@endsection
