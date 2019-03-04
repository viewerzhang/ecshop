@extends('layout.admin')
@section('title', '导航管理')
@section('url','/admin/nav')
@section('title2', '导航列表')
@section('content')
<div class="widget-body">
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
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/nav/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
        	<form action="/admin/nav" style="float: right;" method="get">
            	<span class="input-icon inverted">
	                <input type="text" class="form-control input-sm" placeholder="导航标题" name="search" value="{{ $request['search'] or '' }}">
	                <i class="glyphicon glyphicon-search bg-blue"></i>
	                <button class="btn btn-default blue">搜索</button>
	            </span>
			</form>
        </div>
        <table class="table table-striped table-hover table-bordered dataTable no-footer" id="editabledatatable" aria-describedby="editabledatatable_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                    Username
                    : activate to sort column ascending" style="width: 161px;">
                        ID
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Full Name
                    : activate to sort column ascending" style="width: 150px;">
                        导航标题
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Notes
                    : activate to sort column ascending" style="width: 288px;">
                        导航链接
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 171px;">
                   	导航排序
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 288px;">
                   	操作 
                    </th>
                </tr>
            </thead>
            <tbody align='center'>
            	@foreach($data as $k=>$v)
            	<tr>
            		<td>{{ $v->id }}</td>
            		<td>{{ $v->nav_title }}</td>
            		<td>{{ $v->nav_link }}</td>
            		<td>{{ $v->nav_sort }}</td>
            		<td class="">
                            <form action="/admin/nav/{{ $v->id }}" method="post">
                            	<a href="/admin/nav/{{ $v->id }}/edit" class="btn btn-info btn-sm edit">
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
        <style>
        	.pagination{
        		float: right;
        	}
        	.DTTTFooter{
        		padding:15px 20px 0px 0px;
        	}
        </style>
        <div class="row DTTTFooter">
            <ul class="pagination">
                <li>{{ $data->appends($request)->links() }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection