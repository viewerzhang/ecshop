@extends('layout.admin')
@section('title', '类型管理')
@section('title2', '添加类型')
@section('content')
<div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">添加类型</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/goodstype"  method="post" enctype="multipart/form-data">
                        
                        
                        {{ csrf_field() }}
                        <br>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">类型名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写名称" name="type_name" required="" type="text" value="{{old('type_name')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存类型</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
