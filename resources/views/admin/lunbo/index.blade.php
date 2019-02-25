@extends('layout.admin')
@section('title', '轮播图管理')
@section('url', 'http://www.ecshop.com/admin/lunbo/index')
@section('title2', '轮播图列表')
@section('content')
<div class="page-body">
	<form action="/admin/lunbo" method="get" style="padding: 0px;margin: 0px">         
		<button type="button" tooltip="管理" class="btn btn-azure btn-addon" onclick="javascript:window.location.href = 'http://www.ecshop.com/admin/lunbo/create';return false"> <i class="fa fa-plus"></i> Add
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
	                                <th class="text-center" width="10%">ID</th>
	                                <th class="text-center" width="10%">轮播图名称</th>
	                                <th width="15%">轮播图描述</th>
	                                <th class="text-center" width="20%">链接网址</th>
	                                <th class="text-center" width="10%">轮播图</th>
	                                <th class="text-center" width="10%">状态</th>
	                                <th class="text-center" width="25%">操作</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                           	@foreach($data as $k=>$v)
	                           	<tr align="center">
	                           		<td >{{$v->id}}</td>
	                           		<td>{{$v->lunbo_name}}</td>
	                           		<td>{{$v->lunbo_desc}}</td>
	                           		<td>{{$v->lunbo_link}}</td>
	                           		<td>
	                           			<img src="/static/admin/images/lunbo/{{$v->lunbo_img}}" width="50px" height="30px">
	                           			
	                           		</td>
	                           		
	                           		<td>
	                          
	                           			@if($v->lunbo_status=='1') 显示 @else($v->lunbo_status=='2') 关闭  @endif
	                           		</td>
	                           	
	   							


	                           		<td class="">
                            <form action="/admin/lunbo/{{ $v->id }}" method="post">
                            	<a href="/admin/lunbo/{{ $v->id }}/edit" class="btn btn-info btn-sm edit">
		                            <i class="fa fa-edit">
		                            </i>
		                            修改
		                        </a>
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
                        		<button  class="btn btn-danger btn-sm delete">
                        			<i class="fa fa-trash-o">
                            		</i>
                        			删除
                        		</button> 
							</form>
                    </td>
	   

	                           	</tr>
	                           	@endforeach
	                            	                                                           
	                            </tbody>
	                    </table>
	                </div>
	                <div style="padding-top:10px; text-align:right;">

	        <ul class="pagination">
	        	<!-- <li>{{$data->links()}}</li> -->
	        	<!-- //<li>{!! $data->render() !!}</li> -->
	        	<!-- <li>{!! $data->appends(['sort' => 'lunbo_name'])->render() !!}</li> -->
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
@endsection