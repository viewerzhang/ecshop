@extends('layout.admin')
@section('title', '订单管理')
@section('title2', '查看订单')
@section('content')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            
            <form action="/admin/goodsorder" style="float: right;" method="get">
                <span class="input-icon inverted">
                    <input type="text" name="key" class="form-control input-sm" placeholder="搜索订单号" name="title" value="">
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
                    <th style="width: 120px;" class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Full Name
                    : activate to sort column ascending" style="width: 150px;">
                        买家
                    </th>
                    <th style="width: 120px;" class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        订单总数量
                    </th>
                    <th style="width: 120px;" class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        订单总金额
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
                    <td class="">{{ $v->order_sum }}</td>
                    <td class="">{{ $v->order_addr }}</td>
                    <td class="">{{ $v->order_rec }}</td>
                    <td class="">
                        {{ $v->order_phone }}
                    </td>
                    <td class="">
                        @if( $v->order_status == '1' )
                        已发货
                        @elseif( $v->order_status == '2' )
                        交易完成
                        @elseif( $v->order_status == '3' )
                        交易关闭
                        @elseif( $v->order_status == '0' )
                        未发货
                        @endif
                    </td>
                    <td class="">
                        <a href="/admin/goodsorder/{{ $v->id }}" class="btn btn-success btn-xs edit">
                            查看订单
                        </a>
                        @if( $v->order_status == '1' )
                        <a href="javascript:;" onclick="del({{ $v->id }},this)" class="btn btn-danger btn-xs edit">
                            关闭交易
                        </a>
                        @elseif( $v->order_status == '2' )

                        @elseif( $v->order_status == '3' )
                        @elseif( $v->order_status == '0' )
                        <a href="javascript:;" onclick="update({{ $v->id }},this)" class="btn btn-info btn-xs edit">
                            发货
                        </a>
                        <a href="javascript:;" onclick="del({{ $v->id }},this)" class="btn btn-danger btn-xs edit">
                            关闭交易
                        </a>
                        @endif
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->appends(['key'=>$key])->links() }}
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

<script type="text/javascript">
    function del(id,ud)
    {
        layui.use(['layer', 'form'], function(){
                        var layer = layui.layer
                        ,form = layui.form;
        layer.confirm('你确定要关闭订单吗?', {icon: 3, title:'提示'}, function(index){
                $.post('/admin/goodsorder/'+id, {    
                   "_token": "{{ csrf_token() }}",
                   "_method": "delete"
                }, function(data) {
                    if(data.code == '1'){
                        
                            layer.msg('关闭订单成功');
                            $(ud).parent().prev().html('交易关闭');
                            $(ud).remove();
                    }else{
                        layui.use(['layer', 'form'], function(){
                        var layer = layui.layer
                        ,form = layui.form;
                            layer.msg('关闭订单失败');
                        });
                    }
                    
            
                },'json');
            });
        });
    }


    function update(id,ud)
    {
        layui.use(['layer', 'form'], function(){
                        var layer = layui.layer
                        ,form = layui.form;
        layer.confirm('你确定要发货吗?', {icon: 3, title:'提示'}, function(index){
                $.post('/admin/goodsorder/'+id, {    
                   "_token": "{{ csrf_token() }}",
                   "_method": "put"
                }, function(data) {
                    if(data.code == '1'){
                            layer.msg('发货订单成功');
                            $(ud).parent().prev().html('已发货');
                            $(ud).remove();
                    }else{
                        layui.use(['layer', 'form'], function(){
                        var layer = layui.layer
                        ,form = layui.form;
                            layer.msg('发货失败');
                        });
                    }
                    
            
                },'json');
            });
        });
    }
</script>
@endsection