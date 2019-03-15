@extends('layout.admin')
@section('title', '角色管理')
@section('url', 'http://www.ecshop.com/admin/role/index')
@section('title2', '添加权限')
@section('content')
<div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">添加权限</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/doroleper/{{$res->id}}"  method="post" enctype="multipart/form-data">
                        
                        
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right" >角色名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="role_name" required="" type="text" value="{{$res->role_name}}" disabled>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right" >选择权限</label>

                            <div class="col-sm-6">
                                <div class="checkbox" style="margin-left: -20px;">
                                        @foreach($per as $k => $v)
                                        @if(in_array($v->id,$per_id ))
                                            <label >
                                                <input type="checkbox" class="colored-blue" name="per_id[]" value="{{$v->id}}" checked style="margin-bottom: 20px;">
                                                <span class="text" style="margin-bottom: 20px;">{{$v->per_name}}</span>
                                            </label>
                                            @else
                                            <label>
                                                <input type="checkbox"  style="margin-bottom: 20px;" class="colored-blue" name="per_id[]" value="{{$v->id}}" >
                                                <span class="text" style="margin-bottom: 20px;">{{$v->per_name}}</span>
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