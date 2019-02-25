@extends('layout.admin')
@section('title', '轮播图管理')
@section('url', 'http://www.ecshop.com/admin/lunbo/index')
@section('title2', '修改轮播图')
@section('content')
<div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改轮播图</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/lunbo/{{$data->id}}"  method="post" enctype="multipart/form-data">
                       {{ csrf_field() }}
                       {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播图名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="lunbo_name" required="" type="text" value="{{$data->lunbo_name}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播图描述</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="lunbo_desc" type="text" required="" value="{{$data->lunbo_desc}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>


                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">链接网址</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="lunbo_link" type="text" required="" value="{{$data->lunbo_link}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">轮播图</label>
                            <div class="col-sm-6">
                                <input placeholder="" name="lunbo_img" type="file" required="" value=""><br>
                                <img src="{{'/static/admin/images/lunbo/'.$data->lunbo_img}}" width="100px" height="50px">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                       
                        <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">链接状态</label>
                        <div class="col-sm-10">
   
                            <label class="col-sm-offset-1">
                                <input type="radio" class="colored-blue" name="lunbo_status" value="1" @if($data->lunbo_status=='1') checked="checked" @endif>
                                <span class="text"> 显示</span>
                            </label>
                            <label style="margin-left: 20px;">
                                <input type="radio" class="colored-danger" name="lunbo_status" value="2" @if($data->lunbo_status=='2') checked="checked" @endif>
                                <span class="text"> 关闭</span>
                            </label>
                        </div>
                            
                            
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">确认修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection