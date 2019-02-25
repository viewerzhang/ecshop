@extends('layout.admin')
@section('title', '文章管理')
@section('url', 'http://www.ecshop.com/admin/articles/index')
@section('title2', '修改文章')
@section('content')
<div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改文章</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/articles/{{$data->id}}"  method="post" enctype="multipart/form-data">
                       {{ csrf_field() }}
                       {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">文章标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="art_title" required="" type="text" value="{{$data->art_title}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">文章描述</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="art_desc" type="text" required="" value="{{$data->art_desc}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">作者</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="art_author" type="text" required="" value="{{$data->art_author}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">外链网址</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="art_url" type="text" required="" value="{{$data->art_url}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                          <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">缩略图</label>
                            <div class="col-sm-6">
                                <input placeholder="" name="art_img" type="file" required="" value="{{'/static/admin/images/articles/'.$data->art_img}}"><br>
                                <img src="{{'/static/admin/images/articles/'.$data->art_img}}" width="100px" height="50px">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <br>
                        <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">置顶</label>
                        <div class="col-sm-10">
   
                            <label class="col-sm-offset-1">
                                <input type="radio" class="colored-blue" name="art_sort" value="1" @if($data->art_sort=='1') checked="checked" @endif>
                                <span class="text"> 是</span>
                            </label>
                            <label style="margin-left: 20px;">
                                <input type="radio" class="colored-danger" name="art_sort" value="2" @if($data->art_sort=='2') checked="checked" @endif>
                                <span class="text"> 否</span>
                            </label>
                        </div>
                    </div>

                        <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">状态</label>
                        <div class="col-sm-10">
   
                            <label class="col-sm-offset-1">
                                <input type="radio" class="colored-blue" name="art_status" value="1" @if($data->art_status=='1') checked="checked" @endif>
                                <span class="text"> 开启</span>
                            </label>
                            <label style="margin-left: 20px;">
                                <input type="radio" class="colored-danger" name="art_status" value="2" @if($data->art_status=='2') checked="checked" @endif>
                                <span class="text"> 关闭</span>
                            </label>
                        </div>
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