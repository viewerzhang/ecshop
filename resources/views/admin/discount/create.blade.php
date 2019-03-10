@extends('layout.admin')
@section('title', '优惠券管理')
@section('title2', '添加优惠券')
@section('content')

<div class="col-lg-6 col-sm-6 col-xs-12" width="700px">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-blue">
            <span class="widget-caption">优惠券添加</span>
        </div>
        <div class="widget-body">
            <div>

                <form role="form" action="/admin/discount" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">优惠券标题</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请添加优惠券标题" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">优惠券类型</label><br>
                        <select name="type" id="type">
                            <option value="0">现金券</option>
                            <option value="1">折扣券</option>
                            <option value="2">满减券</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">领取权限</label><br>
                        <select name="auth" id="auth">
                            <option value="0">所有人</option>
                            <option value="1">新新会员</option>
                            <option value="2">青铜会员</option>
                            <option value="3">白银会员</option>
                            <option value="4">黄金会员</option>
                            <option value="5">钻石会员</option>
                            <option value="6">铂金会员</option>
                        </select>
                    </div>
                    <div class="form-group" id="max">
                        <label for="max">每人最多领取</label>
                        <input type="number" class="form-control" id="max" placeholder="请输入每人最多领取的数量" name="max"  value="{{ old('max') }}">
                    </div>
                    <div style="display: none;" class="form-group" id="full">
                        <label for="full">需购满的金额</label>
                        <input type="number" class="form-control" id="full" placeholder="请输入需购满的金额" name="full"  value="{{ old('full') }}">
                    </div>
                    <div class="form-group">
                        <label for="discount">请输入折扣或优惠金额</label>
                        <input type="number" class="form-control" id="discount" placeholder="请输入折扣/优惠卷金额" name="discount"  value="{{ old('discount') }}">
                    </div>
                    <div class="form-group">
                       <label for="discount">请输入优惠券描述</label><br>
                        <textarea name="content" style="width: 500px;height: 100px;" placeholder="请输入优惠券描述"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">是否启用</label>
                        <label>
                            <input name="hidden" type="radio" class="colored-success" checked value="1">
                            <span class="text" style="padding-top: 0px;"> 启用</span>
                        </label>
                        <label>
                            <input name="hidden" type="radio" class="colored-danger" value="0">
                            <span class="text" style="padding-top: 0px;"> 禁用</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="discount">优惠卷发放到期时间</label>
                        <input type="date" class="form-control" id="dq_time" placeholder="请输入折扣/优惠卷金额" name="dq_time"  value="{{ old('dq_time') }}">
                    </div>
                    <input type="submit" class="btn btn-blue" value="添加优惠券">
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#type').change(function () {
        if($(this).val() == 2){
            $('#full').css('display','block');
        }else{
            $('#full').css('display','none');
        }

    });
</script>
<script src="/static/home/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/static/home/js/iziToast.min.js" type="text/javascript"></script>
<script src="/static/home/js/demo.js" type="text/javascript"></script>
<link rel="stylesheet" href="/static/home/css/iziToast.min.css">
<!-- <link rel="stylesheet" href="/static/home/css/dem.css"> -->
<script type="text/javascript">
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
        iziToast.warning({
            title: '错误提示',
            message: '{{ $error }}',
            position: 'topLeft',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX'
        });
        @endforeach
    @endif
    @if(session('error'))
        iziToast.warning({
            title: '错误提示',
            message: '{{ session('error') }}',
            position: 'topLeft',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX'
        });
    @endif
    @if(session('success'))
        iziToast.warning({
            title: '成功提示',
            message: '{{ session('success') }}',
            position: 'topLeft',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX'
        });
    @endif
</script>
@endsection