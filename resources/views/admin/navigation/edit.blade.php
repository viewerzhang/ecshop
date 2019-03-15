@extends('layout.admin')
@section('title', '导航管理')
@section('url','/admin/nav')
@section('title2', '修改导航')
@section('content')
    <div class="col-lg-6 col-sm-6 col-xs-12" width="700px">
<!-- 显示错误消息 开始 -->
    @if (session('success'))
        <div class="class='alert alert-success" role="lert">
            {{ session('success') }}
        </div>
    @endif


    @if (session('error'))
        <div class="class='alert alert-danger" role="lert">
            {{ session('error') }}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<!-- 显示错误消息 结束 -->
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">导航修改</span>
            </div>
            <div class="widget-body">
                <div>
                    <form role="form" action="/admin/nav/{{ $data->id }}" method="post">
                        <div class="form-group">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <label>导航标题</label>
                            <input type="text" class="form-control"placeholder="请输入导航标题" name="nav_title" value="{{ $data->nav_title }}">
                        </div>
                        <div class="form-group">
                            <label>导航链接地址</label>
                            <input type="url" class="form-control"placeholder="请输入导航链接" name="nav_link" value="{{ $data->nav_link }}">
                        </div>
                        <div class="form-group">
                            <label>导航排序号</label>
                            <input type="number" class="form-control"placeholder="用于导航排序" name="nav_sort" value="{{ $data->nav_sort }}">
                        </div>
                        <button type="submit" class="btn btn-blue">修改</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection