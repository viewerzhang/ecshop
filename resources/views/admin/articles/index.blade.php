@extends('layout.admin')
@section('title', '文章管理')
@section('url', 'http://www.ecshop.com/admin/articles/index')
@section('title2', '文章列表')
@section('content')
<link rel="stylesheet" href="/static/admin/assets/layui/css/layui.css">
<script src="/static/admin/assets/layui/layui.js"></script>
<script type="text/javascript">
	
//一般直接写在一个js文件中


</script>
<div class="page-body">
	<form action="/admin/articles" method="get" style="padding: 0px;margin: 0px">         
		<button type="button" tooltip="管理" class="btn btn-azure btn-addon" onclick="javascript:window.location.href = 'http://www.ecshop.com/admin/articles/create';return false"> <i class="fa fa-plus"></i> Add
		</button>
		<div class="input-group" style="width: 250px;float: right;">
	        <input type="text" class="form-control" name="search" value="{{$request['search'] or ''}}" placeholder="链接名称">
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
	                                <th class="text-center" width="10%">文章标题</th>
	                                <th class="text-center" width="10%">文章描述</th>
	                                <th class="text-center" width="10%">作者</th>
	                              	<th class="text-center" width="20%">外链网址</th>
	                                <th class="text-center" width="10%">缩略图</th>
	                                <th class="text-center" width="8%">置顶</th>
	                                <th class="text-center" width="8%">状态</th>
	                               <th class="text-center" width="19%">操作</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                           	@foreach($data as $k=>$v)
	                           	<tr align="center">
	                           		<td >{{$v->id}}</td>
	                           		<td>{{$v->art_title}}</td>
	                           		<td>{{$v->art_desc}}</td>
	                           		<td>{{$v->art_author}}</td>
	                           		<td>{{$v->art_url}}</td>
	                       			<td>
	                           			<img src="/static/admin/images/articles/{{$v->art_img}}" width="50px" height="30px">
	                           			
	                           		</td>
	                           		<td>
	                          
	                           			@if($v->art_sort=='1') 是 @else($v->art_sort=='2') 否  @endif
	                           		</td>
	                           		<td>
	                          
	                           			@if($v->art_status=='1') 开启 @else($v->art_status=='2') 关闭  @endif
	                           		</td>
	                           		<td width="200px">
	                           			
	                           			<!-- <a href="" class="btn btn-danger">删除</a> -->

	                           			<form action="/admin/articles/{{$v->id}}" method="post" style="display:inline-block;">
	                           				

	                           			<!-- <a class="btn btn-info btn-sm" onclick="show({{$v->id}})">查看详情</a> -->
	                           				{{  csrf_field() }}
	                           				{{  method_field('DELETE') }}
	                           				<button class="btn btn-danger btn-sm">删除</button>
	                           			
	                           			</form>
	                           			<a href="/admin/articles/{{$v->id}}/edit" class="btn btn-warning btn-sm">修改</a>
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
			title: '文章内容',
			shadeClose: true,
			shade: 0.8,
			area: ['700px', '90%'],
			content: '/admin/articles/'+id
			//content: $data;
			}); 
		});
  }
			//页面层
/*layer.open({
  type: 1,
  skin: 'layui-layer-rim', //加上边框
  area: ['420px', '240px'], //宽高
  content: '{{url('admin/articles')}}'
});
			});
	}
*/
/*//页面层
layer.open({
  type: 1,
  skin: 'layui-layer-rim', //加上边框
  area: ['420px', '240px'], //宽高
  content: '{{}}'
});*/
	//iframe层

</script>
@endsection