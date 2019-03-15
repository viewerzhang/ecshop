@extends('layout.admin')
@section('title', '角色管理')
@section('url', 'http://www.ecshop.com/admin/role')
@section('title2', '角色列表')
@section('content')
<div class="page-body">
	<form action="/admin/role" method="get" style="padding: 0px;margin: 0px">         
		<button type="button" tooltip="管理" class="btn btn-azure btn-addon" onclick="javascript:window.location.href = 'http://www.ecshop.com/admin/role/create';return false"> <i class="fa fa-plus"></i> Add
		</button>
		<div class="input-group" style="width: 250px;float: right;">
	        <input type="text" class="form-control" name="search" value="{{$request['search'] or ''}}" placeholder="角色名称">
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
	                                <th class="text-center" width="15%">ID</th>
	                                <th class="text-center" width="40%">角色名称</th>
	                                <th class="text-center" width="45%">操作</th>
	                           </tr>
	                        </thead>
	                        <tbody>
	                           	@foreach($data as $k=>$v)
	                           	<tr align="center">
	                           		<td >{{$v->id}}</td>
	                           		<td>{{$v->role_name}}</td>
	                           	
	                           	
	                   <td class="">

	                   	

                            <form action="/admin/role/{{ $v->id }}" method="post" style="display: inline-block;">

                            	<a href="/admin/roleper/{{ $v->id }}" class="btn btn-primary btn-sm edit"><i class="fa fa-legal"></i>
		                            权限
		                		</a>

                            	<a href="/admin/role/{{ $v->id }}/edit" class="btn btn-info btn-sm edit"><i class="fa fa-edit"></i>
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
	        	<!-- <li>{!! $data->appends(['sort' => 'role_name'])->render() !!}</li> -->
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