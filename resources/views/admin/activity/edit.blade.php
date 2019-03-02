@extends('layout.admin')
@section('title', '活动管理')
@section('title2', '修改活动商品')
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
                <span class="widget-caption">修改活动商品</span>
            </div>
            <div class="widget-body" style="height: 500px">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/activity/{{ $data->id }}"  method="post" >
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <br>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品id</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写商品id" name="goods_id" type="number" value="{{ $data->goods_id }}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">是否为活动商品</label>
                        <div class="col-sm-10">
                            <label class="col-sm-offset-1">
                                <input type="radio" class="colored-blue" name="activity_status" @if($data->activity_status==1) checked @endif value="1">
                                <span class="text">是</span>
                            </label>
                            <label style="margin-left: 20px;">
                                <input type="radio" class="colored-danger" name="activity_status" value="2" @if($data->activity_status==2) checked @endif>
                                <span class="text">否</span>
                            </label>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">是否为限时商品</label>
                        <div class="col-sm-10">
                            <label class="col-sm-offset-1">
                                <input type="radio" class="colored-blue" name="time_status" value="1" onclick="able();" @if($data->time_status==1) checked @endif>
                                <span class="text">是</span>
                            </label>
                            <label style="margin-left: 20px;">
                                <input type="radio" class="colored-danger" name="time_status" value="2" checked="checked" onclick="disable();" @if($data->time_status==2) checked @endif>
                                <span class="text">否</span>
                            </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">限时到期时间</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="due_time" id="due_time" required="" type="date" value="{{ $data->due_time }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <!-- 配置文件 -->
    <script type="text/javascript" src="/static/admin/udit/ueditor.config.js"></script>
    <script type="text/javascript">
        function able(){
            $('#due_time').prop('disabled',false);
        }
        function disable(){
            $('#due_time').prop('disabled',true);
        }
    </script>
@endsection
