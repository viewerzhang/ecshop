@extends('layout.admin')
@section('title', '管理员管理')
@section('url', 'http://www.ecshop.com/admin/role/index')
@section('title2', '添加角色')
@section('content')
<div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">添加角色</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/douserrole/{{$uname->id}}"  method="post" enctype="multipart/form-data">
                        
                        
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right" >管理员名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="role_name" required="" type="text" value="{{$uname->uname}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right" >选择角色</label>

                            <div class="col-sm-6">
                                <div class="checkbox" style="margin-left: -20px;">
                                        @foreach($roles as $k => $v)
                                            @if(in_array($v->role_name,$ur))
                                            <label>
                                                <input type="checkbox" class="colored-blue" name="role_id[]" value="{{$v->id}}" checked="" >
                                                <span class="text">{{$v->role_name}}</span>
                                            </label>
                                            @else
                                            <label>
                                                <input type="checkbox" class="colored-blue" name="role_id[]" value="{{$v->id}}" >
                                                <span class="text">{{$v->role_name}}</span>
                                            </label>
                                            @endif
                                        @endforeach
                                    </div>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
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