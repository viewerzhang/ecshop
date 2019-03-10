@extends('layout.admin')
@section('title', '优惠券管理')
@section('title2', '查看优惠券')
@section('content')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/discount/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
            <form action="/admin/discount/indexdetail" style="float: right;" method="get">
                <span class="input-icon inverted">
                    <input type="text" class="form-control input-sm" placeholder="领取人昵称" name="key" value="{{ $key or '' }}">
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
                    : activate to sort column ascending" style="width: 50px;">
                        ID
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Full Name
                    : activate to sort column ascending" style="width: 150px;">
                        领取人
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        状态
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 207px;">
                        券名
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 307px;">
                        到期时间
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
                    <td class="">{{ $v->user->nicheng }}</td>
                    <td class="">
                        @if($v->ky == 1)
                        未使用
                        @elseif($v->ky == 0)
                        已使用
                        @else
                        被禁用
                        @endif
                    </td>
                    <td class="">{{ $v->discount->name }}</td>
                    <td class="">{{ date('Y年m月d日 H时i分s秒',$v->dq_time) }}</td>
                    <td class="">
                            <input onclick="cz({{ $v->id }},this)" @if($v->ky != 1) disabled @endif value="@if($v->ky != 1) 不可操作 @else 撤回优惠券 @endif" class="btn btn-danger">
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
                <li>{{ $data->appends(['key'=>$key])->links() }}</li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    function cz(id,ud)
    {
        layui.use(['layer', 'form'], function(){
            var layer = layui.layer
            ,form = layui.form;

                layer.confirm('您确定要撤回ID为' + id + '的优惠券吗？撤回后将不可恢复！', {icon: 3, title:'提示'}, function(index){
                    $.post("/admin/discount/" + id, {    
                       "_token": "{{ csrf_token() }}",
                       "_method": "delete",
                    }, function(data) {
                        if(data.code == 1){
                            layer.msg(data.msg);
                            $(ud).prop('disabled',true);
                            $(ud).val('不可操作');
                            $(ud).parent().prev().prev().prev().html('被禁用');
                        }
                        layer.msg(data.msg);
                    },'json');
                    //layer.closeAll();
                });
        });    
    }
</script>
@endsection
