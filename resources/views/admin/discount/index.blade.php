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
            <form action="/admin/discount" style="float: right;" method="get">
                <span class="input-icon inverted">
                    <input type="text" class="form-control input-sm" placeholder="链接标题" name="key" value="{{ $key or '' }}">
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
                        优惠券标题
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        发放状态
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        类型
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        限领数量
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        领取权限
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Notes
                    : activate to sort column ascending" style="width: 200px;">
                        优惠卷折扣/金额
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 171px;">
                        到期时间
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                        领取数量
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
                    <td class="">{{ $v->name }}</td>
                    <td class="">
                        @if($v->hidden == 0)
                        已停止发放
                        @else
                        正在发放
                        @endif
                    </td>
                    <td class="">
                        @if($v->type == 0)
                        现金券
                        <?php $tp = 0 ?>
                        @elseif($v->type == 1)
                        折扣券
                        <?php $tp = 1 ?>
                        @else
                        满减券
                        <?php $tp = 0 ?>
                        @endif
                    </td>
                    <td class="">{{ $v->max }}张</td>
                    <td class="">
                        @switch ($v->auth) 
                        @case(0)
                           所有人
                           @break
                        @case(10)
                            新新会员
                            @break
                        @case(5000)
                            青铜会员
                            @break
                        @case(10000)
                            白银会员
                            @break
                        @case(30000)
                            黄金会员
                            @break
                        @case(50000)
                            钻石会员
                            @break
                        @case(100000)
                            铂金会员
                            @break
                        @endswitch
                    </td>
                    <td class="">{{ $v->discount }}@if($tp==0)元@else折@endif</td>
                    <td class="">{{ date('Y年m月d日',$v->dq_time) }}</td>
                    <td class="">{{ count($v->coupons) }}</td>
                    <td class="">
                            <input class="btn btn-info" onclick="cz({{$v->id}},this)" type="submit" value="@if($v->hidden == 1)停止发放@else开启发放@endif">
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

                layer.confirm('您将要操作ID为' + id + '的优惠券吗？', {icon: 3, title:'提示'}, function(index){
                    $.post("/admin/discount/" + id, {    
                       "_token": "{{ csrf_token() }}",
                       "_method": "put",
                    }, function(data) {
                        if(data.code == 1){
                            layer.msg(data.msg);
                            $(ud).val(data.btn);
                            $(ud).parent().prev().prev().prev().prev().prev().prev().prev().html(data.td);
                        }
                    },'json');
                    //layer.closeAll();
                });
        });    
    }
</script>
@endsection
