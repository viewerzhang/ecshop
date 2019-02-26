@extends('layout.admin')
@section('title', '商品管理')
@section('title2', '添加商品')
@section('content')
<div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">添加商品</span>
            </div>
            <div class="widget-body" style="height: 1350px">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="/admin/goods"  method="post" enctype="multipart/form-data" >
                        
                        
                        {{ csrf_field() }}
                        <br>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写标题" name="art_title" required="" type="text" value="{{old('art_title')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品主图</label>
                            <div class="col-sm-6">
                                <input placeholder="" name="art_img" type="file" required="" value="{{old('art_img')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品相册</label>
                            <div class="col-sm-6">
                                <input placeholder="" name="art_img" type="file"  multiple required="" value="{{old('art_img')}}" >
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">上架</label>
                        <div class="col-sm-10">
                            <label class="col-sm-offset-1">
                                <input type="radio" class="colored-blue" name="art_sort" checked="checked" value="1">
                                <span class="text">是</span>
                            </label>
                            <label style="margin-left: 20px;">
                                <input type="radio" class="colored-danger" name="art_sort" value="2">
                                <span class="text">否</span>
                            </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品标语</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写标语" name="art_title" required="" type="text" value="{{old('art_title')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">所属分类</label>
                            <div class="col-sm-6">
                                <select name=" "  class="form-control">
                                    <option value=""> -- 请选择 -- </option>
                                     
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必选</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">所属品牌</label>
                            <div class="col-sm-6">
                                <select name=" "  class="form-control">
                                    <option value=""> -- 请选择 -- </option>
                                     
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必选</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">市场价</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="￥:124.11(保留小数点后两位)" name="art_title" required="" type="text" value="{{old('art_title')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">本店价</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="￥:124.11(保留小数点后两位)" name="art_title" required="" type="text" value="{{old('art_title')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">点击数量</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写点击数量" name="art_title" required="" type="text" value="{{old('art_title')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">商品总量</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写商品总量" name="art_title" required="" type="text" value="{{old('art_title')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">库存</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="请填写库存" name="art_title" required="" type="text" value="{{old('art_title')}}">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right" name="art_content">商品内容</label>
                            <div class="col-sm-6">
                                <!-- 加载编辑器的容器 -->
                            <script id="container" name="art_content" type="text/plain" style="width: 800px;height: 500px"><p value="{{old('art_content')}}">这里写你的初始化内容</p>
                            </script>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                         <!-- <p class="help-block col-sm-4 red">* 必填</p> -->
                    
                           
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存商品</button>
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
        var ue = UE.getEditor('container',{ initialFrameWidth: null , autoHeightEnabled: false});
    </script>
@endsection
