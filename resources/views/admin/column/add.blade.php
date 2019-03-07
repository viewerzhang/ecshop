@extends('layout.admin')
@section('title', '栏目管理')
@section('url','/admin/column')
@section('title2', '添加栏目')
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
                <span class="widget-caption">添加栏目</span>
            </div>
            <div class="widget-body" style="height: 1100px">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/column"  method="post">
                        {{ csrf_field() }}
                        <br>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">栏目标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写标题" name="column_title" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">外链网址</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写外链url地址" name="column_url" type="url" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">栏目位置</label>
                            <div class="col-sm-10">
                                <label class="col-sm-offset-1">
                                    <input type="radio" class="colored-blue" name="column_sort" checked="checked" value="0">
                                    <span class="text">栏目一</span>
                                </label>
                                <label style="margin-left: 20px;">
                                    <input type="radio" class="colored-blue" name="column_sort" value="1">
                                    <span class="text">栏目二</span>
                                </label>
                                <label style="margin-left: 20px;">
                                    <input type="radio" class="colored-blue" name="column_sort" value="2">
                                    <span class="text">栏目三</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存栏目</button>
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
        var ue = UE.getEditor('container', { initialFrameWidth: null , autoHeightEnabled: false});
    </script>
@endsection
