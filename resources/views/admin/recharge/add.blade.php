@extends('layout.admin')
@section('title', '充值卡管理')
@section('url','/admin/recharge')
@section('title2', '添加充值卡')
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
                <span class="widget-caption">充值卡添加</span>
            </div>
            <div class="widget-body">
                <div>
                    <form role="form" action="/admin/recharge" method="post">
                        <div class="form-group">
                            {{ csrf_field() }}
                            <label>充值卡金额</label>
                            <input type="number" class="form-control" placeholder="请输入充值卡金额" name="recharge_money">
                        </div>
                        <div class="form-group">
                            <label>生成充值卡张数</label>
                            <input type="number" class="form-control" placeholder="一次生成多张充值卡" name="recharge_num">
                        </div>
                        <button type="submit" class="btn btn-blue">提交</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection