@extends('layout.admin')
@section('title', '分类管理')
@section('title2', '添加分类')
@section('content')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/links/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
            <form action="/admin/links" style="float: right;" method="get">
                <span class="input-icon inverted">
                    <input type="text" class="form-control input-sm" placeholder="链接标题" name="title" value="">
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
                        订单号
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Full Name
                    : activate to sort column ascending" style="width: 150px;">
                        买家
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        订单总数量
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Notes
                    : activate to sort column ascending" style="width: 288px;">
                        收货地址
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 171px;">
                        收货人
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                        收货人手机
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                        订单状态
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 288px;">
                    操作 
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $k => $v)
                <tr class="odd text-center">
                    <td class="">{{ $v->rand_id }}</td>
                    <td class="">{{ $v->users->user_name }}</td>
                    <td class="">{{ $v->order_count }}</td>
                    <td class="">{{ $v->order_addr }}</td>
                    <td class=""></td>
                    <td class="">
                        <img src="" alt="" height="25">
                    </td>
                    <td class=""></td>
                    <td class="">
                        <form action="/admin/links/" method="post">
                        <a href="/admin/links/" class="btn btn-info btn-xs edit">
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
            
        </div>
    </div>
</div>
@endsection