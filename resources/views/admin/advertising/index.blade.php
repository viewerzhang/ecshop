@extends('layout.admin')
@section('title', '广告管理')
@section('title2', '广告列表')
@section('content')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/ad/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
        	<form action="/admin/links" style="float: right;" method="get">
            	<span class="input-icon inverted">
	                <input type="text" class="form-control input-sm" placeholder="广告标题" name="title" value="">
	                <i class="glyphicon glyphicon-search bg-blue"></i>
	                <button href="#" class="btn btn-default blue">搜索</button>
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
                        广告描述
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Notes
                    : activate to sort column ascending" style="width: 288px;">
                        广告图片
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 171px;">
                   	广告链接
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
            		<td>{{ $v->ad_desc }}</td>
            		<td>
                        <img src="/static/{{ $v->ad_img }}" width="80" height="80">
                    </td>
            		<td>{{ $v->ad_link }}</td>
            		<td class="">
                            <form action="/admin/ad/{{ $v->id }}" method="post">
                            	<a href="/admin/ad/{{ $v->id }}/edit" class="btn btn-info btn-xs edit">
		                            <i class="fa fa-edit">
		                            </i>
		                            修改
		                        </a>
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
                        		<button  class="btn btn-danger btn-xs delete">
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
            
        </div>
    </div>
</div>
@endsection