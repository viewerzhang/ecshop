@extends('layout.admin')
@section('title', '前台用户管理')
@section('title2', '查看前台用户')
@section('content')
@inject('getIp', 'App\common\getIp')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/goodsbrand/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Search
            </a>
            <form action="/admin/user" style="float: right;" method="get">
                <span class="input-icon inverted">
                    <input name="key" type="text" class="form-control input-sm" placeholder="用户名" name="title" value="{{ $key or '' }}">
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
                        用户ID
                    </th>
                    <th class="sorting_asc text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                    Username
                    : activate to sort column ascending" style="width: 161px;">
                        用户头像
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Full Name
                    : activate to sort column ascending" style="width: 150px;">
                        用户名
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        用户邮箱
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 171px;">
                    用户手机
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 300px;">
                    上次登录地点
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                    用户状态
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
                    <td class="sorting_1">
                        {{ $v->id }}
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                                                    <img src="{{ asset("$v->user_pic") }}" alt="" height="25">
                                            </td>
                    <td class="">
                        {{ $v->user_name }}
                    </td>
                    <td class=" ">
                        {{ $v->user_email }}
                    </td>
                    <td class=" ">
                        {{ $v->user_phone }}
                    </td>
                    <td class=" ">
                        {{ $getIp::getIp($v->user_ip) }}<br />（IP：{{ $v->user_ip }}）
                    </td>
                    <td class=" ">
                        @if($v->user_status == 1)
                        激活
                        @elseif($v->user_status == 2)
                        禁用
                        @else
                        未知
                        @endif      
                    </td>
                    <td class="">
                        
                        <button onclick="del({{ $v->id }},this)" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            @if($v->user_status == 1)
                            禁用
                            @elseif($v->user_status == 2)
                            激活
                            @else
                            状态字段值不正确
                            @endif
                        </button> 
                    </td>
                </tr>
                @endforeach                         
            </tbody>
        </table>
        
        <style>
            .DTTTFooter{
                padding:15px 20px 0px 0px;
            }
            .pagination{
                margin-left: 43%;
                margin-top: 30px;
            }
        </style>
        <div class="row DTTTFooter">
            
        </div>
    </div>
</div>
{{ $data->appends(['key'=>$key])->links() }}
<script type="text/javascript">
function del(id,ud)
{
    console.log(status);
    layui.use(['layer', 'form'], function(){
        var layer = layui.layer
        ,form = layui.form;

            layer.confirm('您将要操作ID为' + id + '的用户吗？', {icon: 3, title:'提示'}, function(index){
                $.get('/admin/user/'+id, function(data) {
                    if(data.code == '1'){
                        layui.use(['layer', 'form'], function(){
                        var layer = layui.layer
                            $(ud).html(data.btn);
                            $(ud).parent().prev().html(data.title);
                            layer.msg('操作成功');
                        });
                    }else{
                        layui.use(['layer', 'form'], function(){
                        var layer = layui.layer
                            layer.msg('操作失败');
                        });
                    }
                   
                },'json');
            });
        });    
}
</script>
@endsection