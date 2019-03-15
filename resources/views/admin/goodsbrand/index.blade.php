@extends('layout.admin')
@section('title', '商品品牌管理')
@section('title2', '查看品牌')
@section('content')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/goodsbrand/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
            <form action="/admin/goodsbrand" style="float: right;" method="get">
                <span class="input-icon inverted">
                    <input name="key" type="text" class="form-control input-sm" value="{{ $key }}" placeholder="品牌名称" name="title" value="">
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
                        品牌名称
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        关键字
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Notes
                    : activate to sort column ascending" style="width: 288px;">
                    logo
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 171px;">
                    链接地址
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                    状态
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
                    <td class="">
                        {{ $v->brand_name }}
                    </td>
                    <td class=" ">
                        {{ $v->brand_desc }}
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                                                    <img src="{{ asset("$v->brand_logo") }}" alt="" height="25">
                                            </td>
                    <td class="center">
                        <a href="javascript:pros('{{ asset("$v->brand_url") }}')" title="{{ $v->brand_url }}">{{ $v->brand_name }}</a>
                    </td>
                    <td class="center">
                        @if($v->brand_status == 1)
                        已显示
                        @elseif($v->brand_status == 2)
                        已隐藏
                        @else
                        未知
                        @endif                    
                     </td>
                    <td class="">
                        <a href="javascript:;" onclick="editstatus({{ $v->id }},this)" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit"></i>
                            @if($v->brand_status == 1)
                            隐藏
                            @elseif($v->brand_status == 2)
                            显示
                            @endif
                        </a>
                        <a href="/admin/goodsbrand/{{ $v->id }}/edit" class="btn btn-warning btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del({{ $v->id }},this)" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button> 
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
function editstatus(id,ud)
{
    $.get('{{ asset('admin/goodsbrand/editstatus/') }}'+'/'+id,function(code){
        if(code.code == '1'){
            $(ud).html('<i class="fa fa-edit"></i>'+code.status);
            $(ud).parent().prev().text(code.btn);
        }else{
            alert('设置失败！');
        }
    },'json');
}

function del(id,ud)
{
    if(confirm('您将要删除ID为' + id + '的品牌吗？')){

    }else{
        return false;
    }
    $.post("/admin/goodsbrand/" + id, {    
       "_token": "{{ csrf_token() }}",        
       "_method": "delete"
    }, function(data) {
       if(data){
          $(ud).parent().parent().remove();
       }
    });

}
</script>
@endsection