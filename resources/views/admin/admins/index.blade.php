@extends('layout.admin')
@section('title', '管理员管理')
@section('title2', '查看管理员')
@section('content')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/admins/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
            <form action="/admin/admins" style="float: right;" method="get">
                <span class="input-icon inverted">
                    <input name="key" type="text" class="form-control input-sm" value="{{ $key }}" placeholder="用户名关键字" name="title" value="">
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
                    : activate to sort column ascending" style="width: 80px;">
                        管理员ID
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Notes
                    : activate to sort column ascending" style="width: 120px;">
                    头像
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Full Name
                    : activate to sort column ascending" style="width: 150px;">
                        用户名
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        用户组
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 171px;">
                    当前状态
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 160px;">
                    手机号
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="" style="width: 160px;">
                    最后登录
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="" style="width: 200px;">
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
                                                    <img src="{{ asset("$v->upic") }}" alt="" height="25">
                                            </td>
                    <td class="">
                        {{ $v->uname }}
                    </td>
                    <td class=" ">
                        {{ $v->group }}
                    </td>
                    <td class="center">
                        @if($v->admin_status == 1)
                        激活
                        @elseif($v->admin_status == 2)
                        禁用
                        @else
                        未知
                        @endif                    
                     </td>
                    <td class=" ">
                        {{ $v->admin_phone }}
                    </td>
                    <td class=" ">
                        {{ date('Y-m-d H:i:s',$v->last_time) }}
                    </td>
                    <td class="">
                        <a id="jz" href="/admin/userrole/{{$v->id}}" class="btn btn-primary btn-xs edit" style="display: inline-block;">
                            <i class="fa fa-user">角色</i>
                        </a>
                        <a id="jz" href="javascript:;" onclick="del({{ $v->id }},this)" class="btn btn-danger btn-xs edit">
                            <i class="fa fa-edit"></i>
                            @if($v->admin_status == 1)
                            禁用
                            @elseif($v->admin_status == 2)
                            激活
                            @else
                            状态字段值不正确
                            @endif 
                        </a>
                    </td>
                </tr>
                @endforeach                         
            </tbody>
        </table>
        {{ $data->appends(['key'=>$key])->links() }}
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
<script type="text/javascript">
function del(id,ud)
{
    console.log(status);
    layui.use(['layer', 'form'], function(){
        var layer = layui.layer
        ,form = layui.form;

            layer.confirm('您将要操作ID为' + id + '的管理员吗？', {icon: 3, title:'提示'}, function(index){
                $.get('/admin/admins/'+id, function(data) {
                    if(data.code == '1'){
                        layui.use(['layer', 'form'], function(){
                        var layer = layui.layer
                            $(ud).html(data.btn);
                            $(ud).parent().prev().prev().prev().html(data.title);
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