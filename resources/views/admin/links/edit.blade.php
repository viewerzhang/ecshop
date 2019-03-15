@extends('layout.admin')
@section('title', '友情链接管理')
@section('title2', '修改链接')
@section('content')

<div class="col-lg-6 col-sm-6 col-xs-12" width="700px">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-blue">
            <span class="widget-caption">友情链接修改</span>
        </div>
        <div class="widget-body">
            <div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form role="form" action="/admin/links/{{ $links->id }}" method="post" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">链接标题</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请添加标题" name="link_title" value="{{$links['link_title']}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">链接网址</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="http://www......" name="link_url"  value="{{$links['link_url']}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">链接logo</label>
                        <input type="file" class="form-control" id="exampleInputPassword1" name="link_logo"><img src="/static/{{$links['link_logo']}}" alt="" width="100">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">链接描述</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="描述一下呗" name="link_desc"  value="{{$links['link_desc']}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">链接类型</label>
                        <label>
                            <input name="link_type" type="radio" class="colored-success" @if($links['link_type'] == '1') checked @endif value="1"> 
                            <span class="text" style="padding-top: 0px;"> 文字</span>
                        </label>
                        <label>
                            <input name="link_type" type="radio" class="colored-danger" @if($links['link_type'] == '2') checked @endif value="2">
                            <span class="text" style="padding-top: 0px;"> 图片</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">链接状态</label>
                        <label>
                            <input name="link_status" type="radio" class="colored-success" @if($links['link_status'] == '1') checked @endif value="1">
                            <span class="text" style="padding-top: 0px;"> 显示</span>
                        </label>
                        <label>
                            <input name="link_status" type="radio" class="colored-danger" @if($links['link_status'] == '2') checked @endif value="2">
                            <span class="text" style="padding-top: 0px;"> 隐藏</span>
                        </label>
                    </div>
                    <input type="submit" class="btn btn-blue" value="修改链接">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection