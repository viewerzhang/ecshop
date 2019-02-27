@extends('layout.admin')
@section('title', '分类管理')
@section('title2', '添加分类')
@section('content')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/goodscategory/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
            <form action="/admin/goodscategory" style="float: right;" method="get">
                <span class="input-icon inverted">
<<<<<<< HEAD
                    <input type="text" class="form-control input-sm" name="key" placeholder="关键字" name="title" value="">
=======
                    <input type="text" class="form-control input-sm" placeholder="分类名称" name="title" value="">
>>>>>>> origin/fxj1114
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
                        分类名称
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
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
                    <td class="" style="text-align: left;">
                         {{ $v->catenamea }}
                    </td>
                    <td class=" ">
                        @if($v->cate_status == '1')显示@elseif($v->cate_status)隐藏@endif
                    </td>

                    <td class="">
                        <a href="javascript:;" onclick="show({{ $v->id }},this)" class="btn btn-success">@if($v->cate_status == '1')隐藏@elseif($v->cate_status)显示@endif</a>
                        <button class="btn btn-info" id="edit" onclick="xg({{ $v->id }},this)">修改</button>
                            <button onclick="del({{ $v->id }},this)" class="btn btn-danger" name="">删除</button>
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
    csrf = "{{ csrf_token() }}";
    function xg(id,ud)
    {
        xgk = layui.use(['layer', 'form'], function(){
          var layer = layui.layer
          ,form = layui.form;
          $.ajax({
              type:'get',
              url:'/admin/goodscategory/'+id+'/edit',
              async:false,
              success:function(dataa)
              {
                  data = dataa;
                  edittitle = $(ud).parent().prev().prev();
              }
          });
          layer.open({
              type: 1,
              title:'修改分类',
              skin: 'layui-layer-rim', //加上边框
              area: ['420px', '190px'], //宽高
              content: data,
            });
        });
    }
    function show(id,ud)
    {

        $.ajax({
              type:'get',
              url:'/admin/goodscategory/'+id,
              dataType:'json',
              success:function(data)
              {
                  console.log(data.title);
                  if(data.code == '1'){
                    $(ud).html(data.btn);
                    $(ud).parent().prev().html(data.title);
                  }
              }

          });
    }
    function del(id,ud)
    {
        layui.use(['layer', 'form'], function(){
        var layer = layui.layer
        ,form = layui.form;
            a = layer.confirm('你确定要删除吗?', {icon: 3, title:'提示'}, function(index){
                $.post('/admin/goodscategory/'+id, {    
                   "_token": "{{ csrf_token() }}",
                   "_method": "delete"
                   // 'newpwd':newpwd,
                   // 'code':code
                }, function(data) {
                    if(data.code == '1'){
                        layui.use(['layer', 'form'], function(){
                        var layer = layui.layer
                            layer.msg('删除成功');
                        });
                        $(ud).parent().parent().remove();
                    }else if(data.code == '2'){
                        layui.use(['layer', 'form'], function(){
                        var layer = layui.layer
                            layer.msg(data.msg);
                        });
                    }else{
                        layui.use(['layer', 'form'], function(){
                        var layer = layui.layer
                            layer.msg('删除失败');
                        });
                    }
                   
                },'json');
            });
        });    

        
    }
</script>
@endsection