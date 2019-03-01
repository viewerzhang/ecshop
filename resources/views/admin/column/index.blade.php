@extends('layout.admin')
@section('title', '栏目管理')
@section('url','/admin/column')
@section('title2', '栏目列表')
@section('content')
<link rel="stylesheet" href="/static/admin/assets/layui/css/layui.css">
<script src="/static/admin/assets/layui/layui.js"></script>
<script type="text/javascript">
	
//一般直接写在一个js文件中


</script>
<div class="page-body">
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
<!-- 显示错误消息 结束 -->
	<form action="/admin/column" method="get" style="padding: 0px;margin: 0px">         
		<button type="button" tooltip="管理" class="btn btn-azure btn-addon" onclick="javascript:window.location.href = '/admin/column/create';return false"> <i class="fa fa-plus"></i> Add
		</button>
		<div class="input-group" style="width: 250px;float: right;">
	        <input type="text" class="form-control" name="search" value="{{$request['search'] or ''}}" placeholder="标题">
	        <span class="input-group-btn">
	            <button class="btn btn-azure btn-addon" type="submit">搜索</button>
	        </span>
	    </div>
	</form>

	<div class="row">
	    <div class="col-lg-12 col-sm-12 col-xs-12">
	        <div class="widget">
	            <div class="widget-body">
	                <div class="flip-scroll">
	                    <table class="table table-bordered table-hover">
	                        <thead class="">
	                            <tr>
	                                <th class="text-center" width="5%">ID</th>
	                                <th class="text-center" width="10%">栏目标题</th>
	                                <th class="text-center" width="10%">栏目描述</th>
	                              	<th class="text-center" width="20%">外链网址</th>
	                                <th class="text-center" width="10%">栏目图</th>
	                                <th class="text-center" width="8%">排序</th>
	                               <th class="text-center" width="19%">操作</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                           	@foreach($data as $k=>$v)
	                           	<tr align="center">
	                           		<td>{{$v->id}}</td>
	                           		<td>{{$v->column_title}}</td>
	                           		<td>{{$v->column_desc}}</td>
	                           		<td>{{$v->column_url}}</td>
	                       			<td>
	                           			<img src="/static/{{ $v->column_img }}" width="30px">
	                           		</td>
	                           		<td>
	                          			{{$v->column_sort}}
	                           		</td>
	                           		
	                           		<td width="200px">
	                           			
	                           			<!-- <a href="" class="btn btn-danger">删除</a> -->

	                           			<form action="/admin/column/{{$v->id}}" method="post" style="display:inline-block;">
	                           				

	                           			<!-- <a class="btn btn-info btn-sm" onclick="show({{$v->id}})">查看详情</a> -->
	                           				{{  csrf_field() }}
	                           				{{  method_field('DELETE') }}
	                           				<button class="btn btn-danger btn-sm">删除</button>
	                           			
	                           			</form>
	                           			<a href="/admin/column/{{$v->id}}/edit" class="btn btn-warning btn-sm">修改</a>
	                           			<a href="javascript:;" onclick="show({{$v->id}})" class="btn btn-info btn-sm">查看详情</a>
	                           		</td>

	                           	</tr>
	                           	@endforeach
	                            	                                                           
	                            </tbody>
	                    </table>
	                </div>
	                <div style="padding-top:10px; text-align:right;">

	        <ul class="pagination">
	        	<li>{{ $data->appends($request)->links() }}</li>
  
            </ul>
    
	                </div>
	                <div>
	               </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>

<script type="text/javascript">

  
  function show(id){
  	layui.use(['layer', 'form'], function(){
  var layer = layui.layer
  ,form = layui.form;
			layer.open({
			type: 2,
			title: '栏目内容',
			shadeClose: true,
			shade: 0.8,
			area: ['700px', '90%'],
			content: '/admin/column/'+id
			}); 
			});
	}

	
	//iframe层

</script>
@endsection