@extends('layout.admin')
@section('title', '充值卡管理')
@section('url','/admin/recharge')
@section('title2', '充值卡列表')
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
            <a id="editabledatatable_new" href="/admin/recharge/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
            <a href="/admin/recharge" class="btn btn-blue">
               全部卡密
            </a>
            <a href="/admin/recharge?status=0" class="btn btn-blue">
               未使用卡密
            </a>
            <a href="/admin/recharge?status=1" class="btn btn-blue">
               已使用卡密
            </a>
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
                        充值卡卡密
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Notes
                    : activate to sort column ascending" style="width: 288px;">
                        充值卡状态
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 171px;">
                   	用户id
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 288px;">
                   	金额 
                    </th>
                </tr>
            </thead>
            <tbody align='center'>
            	@foreach($data as $k=>$v)

            	<tr>
            		<td>{{ $v->id }}</td>
            		<td>{{ $v->kalman }}</td>
            		<td>
                        @if($v->recharge_status==0)
                        未使用
                        @else
                        已使用
                        @endif
                    </td>
            		<td>
                        @if(empty($v->user_id))
                        无人使用
                        @else
                        {{ $v->user_id }}
                        @endif
                    </td>
            		<td>{{ $v->recharge_money }}</td>
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