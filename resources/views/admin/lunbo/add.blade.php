@extends('layout.admin')
@section('title', '轮播图管理')
@section('url', 'http://www.ecshop.com/admin/lunbo/index')
@section('title2', '添加轮播图')
@section('content')
<div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">添加轮播图</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/lunbo"  method="post" enctype="multipart/form-data">
                        
                        
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播图名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="lunbo_name" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播图描述</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="lunbo_desc" type="text" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">链接网址</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="lunbo_link" type="text" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播图</label>
                            <div class="col-sm-6">
                                <input placeholder="" name="lunbo_img" type="file" required="">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">链接状态</label>
                        <div class="col-sm-10">
                            <label class="col-sm-offset-1">
                                <input type="radio" class="colored-blue" name="lunbo_status" checked="checked" value="1">
                                <span class="text">显示</span>
                            </label>
                            <label style="margin-left: 20px;">
                                <input type="radio" class="colored-danger" name="lunbo_status" value="2">
                                <span class="text"> 关闭</span>
                            </label>

                        </div>
                         <!-- <p class="help-block col-sm-4 red">* 必填</p> -->
                    
                           
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection