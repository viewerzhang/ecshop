@extends('layout.admin')
@section('title', '属性管理')
@section('url', 'http://www.ecshop.com/admin/goodsattr')
@section('title2', '添加属性')
@section('content')
<div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">添加属性</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/goodsattr"  method="post" enctype="multipart/form-data">
                        
                        
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">所属商品分类</label>
                            <div class="col-sm-6">
                                <select name=" "  class="form-control">
                                    <option value=""> -- 请选择 -- </option>
                                     
                             	</select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必选</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属性名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="attr_name" required="" type="text" value="{{old('attr_name')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属性值</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="attr_value" type="text" required=""  value="{{old('attr_value')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填 [多个属性值请以 , 分隔]</p>
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