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

                     @if (count($errors) > 0)
                        <div class="alert alert-warning fade in">
                            <ul>
                                <button class="close" data-dismiss="alert">
                                ×
                                </button>
                                    @foreach ($errors->all() as $error)
                                        <i class="fa-fw fa fa-warning"></i>
                                            <strong>Warning</strong> {{ $error }}
                                         <br>
                                    @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" action="/admin/goodsattr"  method="post" enctype="multipart/form-data">
      
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">所属商品分类</label>
                            <div class="col-sm-6">
                                <select name="type_id"  class="form-control">
                                    <option value=""> -- 请选择 -- </option>
                                        @foreach($res as $k =>$v)
                                            <option value="{{$v->id}}"> |-- {{$v->type_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必选</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属性名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="attr_name"  type="text" value="{{old('attr_name')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">属性值</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="attr_value" type="text"   value="{{old('attr_value')}}">
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