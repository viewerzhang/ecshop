@extends('layout.admin')
@section('title', '后台的主页')
@section('content')
<script src="{{ asset('/static/admin/assets/js/holder.min.js') }}"></script>
<!-- <img src="holder.js/500x500" alt=""> -->
<div class="container-fluid">
    <div class="row">
        <!-- Stats -->
        <div class="outer-w3-agile col-xl">
            <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                <div class="s-lw">
                    <h5>待修改</h5>
                    <p class="paragraph-agileits-w3layouts text-white">Lorem Ipsum</p>
                </div>
                <div class="s-r">
                    <h6>340</h6>
                </div>
            </div>
            <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-success">
                <div class="s-l">
                    <h5>待修改</h5>
                    <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                </div>
                <div class="s-r">
                    <h6>250</h6>
                </div>
            </div>
            <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                <div class="s-l">
                    <h5>待修改</h5>
                    <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                </div>
                <div class="s-r">
                    <h6>232</h6>
                </div>
            </div>
            <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                <div class="s-l">
                    <h5>待修改</h5>
                    <p class="paragraph-agileits-w3layouts">Lorem Ipsum</p>
                </div>
                <div class="s-r">
                    <h6>190</h6>
                </div>
            </div>
        </div>
        <!--// Stats -->
        <div style="height: 13px"></div>
		<div class="outer-w3-agile col-xl mt-3">
			<img src="holder.js/100x100?bg=#eee&text=头像" alt="">
			<span>管理员xxx你好! 欢迎登陆EC商城管理后台</span>
		</div>
		<div class="outer-w3-agile col-xl mt-3">
			<ul class="list-group">
			  	<li class="list-group-item">北京时间: </li>
			  	<li class="list-group-item">操作系统: {{ $_SERVER["SystemRoot"] }}</li>
			  	<li class="list-group-item">服务器端口号: {{ $_SERVER["SERVER_PORT"] }}</li>
			  	<li class="list-group-item">上传文件限制: </li>
			  	<li class="list-group-item">通讯协议名称: {{ $_SERVER["REQUEST_SCHEME"] }}</li>
			  	<li class="list-group-item">服务器端信息: {{ $_SERVER["SERVER_SOFTWARE"] }}</li>
			  	<li class="list-group-item">服务器根目录: {{ $_SERVER["DOCUMENT_ROOT"] }}</li>
			</ul>
		</div>
	</div>
</div>
@endsection