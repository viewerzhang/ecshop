@extends('layout.admin')
@section('title', '属性管理')
@section('url', 'http://www.ecshop.com/admin/goodsattr')
@section('title2', '属性列表')
@section('content')

<div class="page-body">
	<form action="/admin/goodsattr" method="get" style="padding: 0px;margin: 0px">         
		<button type="button" tooltip="管理" class="btn btn-azure btn-addon" onclick="javascript:window.location.href = 'http://www.ecshop.com/admin/goodsattr/create';return false"> <i class="fa fa-plus"></i> Add
		</button>
		<div class="input-group" style="width: 250px;float: right;">
	        <input type="text" class="form-control" name="search" value="{{$request['search'] or ''}}" placeholder="属性名称">
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
	                                <th class="text-center" width="10%">属性名称</th>
	                                <th class="text-center" width="10%">属性值</th>
	                                <th class="text-center" width="10%">所属类型</th>
	                            	<th class="text-center" width="19%">操作</th>
	                            </tr> 
	                        </thead>
	                        <tbody>
	                           	@foreach($data as $k=>$v)

	                           	<tr align="center">
	                           		<td >{{$v->id}}</td>
	                           		<td>{{$v->attr_name}}</td>
	                           		<td>
	                           			{{ str_replace(',', '&nbsp;-&nbsp;', $v->attr_value) }}
	                           		</td>

	                         
	                           		<td align="center">{{$v->GoodsType->type_name}}</td>
	                           		
	                           		<td width="200px">
	                           			
	                           			<a href="/admin/goodsattr/{{$v->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit">
		                            	</i>修改</a>

	                           			<form action="/admin/goodsattr/{{$v->id}}" method="post" style="display:inline-block;">
	                           				{{  csrf_field() }}
	                           				{{  method_field('DELETE') }}
	                           				<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o">
                            				</i>删除</button>
	                           			</form>

	                           			

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

@endsection