@extends('layout.admin')
@section('title', '地址管理')
@section('title2', '搜索地址')
@section('content')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/useraddr/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Search
            </a>
            
        </div>
        <form class="form-inline" action="/admin/useraddr/create" method="get">
          <div class="form-group">
            <label class="sr-only">精准搜索</label>
            <select class="form-control" name="type">
              <option value="0">综合搜索</option>
              <option value="1">按用户名</option>
              <option value="2">按收货地址</option>
              <option value="3">按手机号</option>
              <option value="4">按邮编</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputPassword2" class="sr-only">关键字</label>
            <input name="key" class="form-control" id="inputPassword2" placeholder="请输入关键字">
          </div>
          <button type="submit" class="btn btn-info">精准搜索</button>
        </form>



        <table class="table table-striped table-hover table-bordered dataTable no-footer" id="editabledatatable" aria-describedby="editabledatatable_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                    Username
                    : activate to sort column ascending" style="width: 161px;">
                        用户ID
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Full Name
                    : activate to sort column ascending" style="width: 150px;">
                        用户名
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        地址总数量
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Notes
                    : activate to sort column ascending" style="width: 288px;">
                        地址详情
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $k => $v)
                
                <tr class="odd text-center">
                    <td class="" style="display:table-cell; vertical-align:middle">{{ $v->id }}</td>
                    <td class="" style="display:table-cell; vertical-align:middle">{{ $v->user_name }}</td>
                    <td class="" style="display:table-cell; vertical-align:middle">{{ $v->useraddr->count() }}</td>
                    <td class="" style="width: 200px;">
                        @foreach($v->useraddr as $kk => $vv)
                        <a style="line-height: 100%;" onclick="show({{ $vv->id }},this);" href="javascipt:;" class="btn btn-success btn-xs">{{ $vv->user_title }}</a>
                        @endforeach
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
{{ $data->appends(['key'=>$key])->links() }}
<script type="text/javascript">
    uda = null;
    function show(id,ud)
    {
        uda = ud;
    layui.use(['layer', 'form'], function(){
          var layer = layui.layer
          ,form = layui.form;
          $.ajax({
              type:'get',
              url:'/admin/useraddr/'+id,
              async:false,
              success:function(dataa)
              {
                  data = dataa;
              }
  
          });
           layer.open({
              type: 1,
              title:'用户地址',
              skin: 'layui-layer-rim', //加上边框
              area: ['420px', '520px'], //宽高
              content: data,
            });
        });    
   }
</script>
@endsection