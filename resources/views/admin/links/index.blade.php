@extends('layout.admin')
@section('title', '友情链接管理')
@section('title2', '链接列表')
@section('content')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/links/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
        	<form action="/admin/links" style="float: right;" method="get">
            	<span class="input-icon inverted">
	                <input type="text" class="form-control input-sm" placeholder="链接标题" name="title" value="{{ $request['title'] or '' }}">
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
                        链接标题
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        链接网址
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Notes
                    : activate to sort column ascending" style="width: 288px;">
                        链接logo
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 171px;">
                   	    链接描述
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                   	    链接类型
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                   	    链接状态
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 288px;">
                   	操作 
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $k=>$v)
            	<tr class="odd text-center">
                    <td class="">{{ $v->id }}</td>
                    <td class="">{{ $v->link_title }}</td>
                    <td class="">{{ $v->link_url }}</td>
                    <td class="">
                        <img src="/static/{{ $v->link_logo }}" alt="" height="25">
                    </td>
                    <td class="">{{ $v->link_desc }}</td>
                    <td class="">
                        @if( $v->link_type == '1' )
                            文字
                        @elseif($v->link_type == '2')
                            图片
                        @endif
                    </td>
                    <td class="">
                        @if($v->link_status == '1')
                            显示
                        @elseif($v->link_status == '2')
                            隐藏
                        @endif
                    </td>
                    <td class="">
                        <form action="/admin/links/{{ $v->id }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="/admin/links/{{ $v->id }}/edit" class="btn btn-info btn-xs edit">
                            修改
                        </a>
                        <input type="submit" value="删除" class="btn btn-danger btn-xs delete">
                            
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
