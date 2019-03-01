@extends('layout.admin')
@section('title', '商品管理')
@section('url', 'http://www.ecshop.com/admin/goods')
@section('title2', '商品列表')
@section('content')

<div class="page-body" style="width: 1100px">
	 <div role="grid" id="simpledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
	<form action="/admin/goods/hs" method="get">

       <div id="simpledatatable_filter" class="dataTables_filter">
       
                <label  class="pull-right">
                   商品编号：
                   <input type="search" name="goods_bianhao" class=" form-control input-sm" aria-controls="simpledatatable" value="{{$request['goods_bianhao'] or ''}}" placeholder="商品编号">&nbsp;&nbsp;
                    商品名称：
                    <input type="search" name="goods_name" class=" form-control input-sm" aria-controls="simpledatatable" value="{{$request['goods_name'] or ''}}" placeholder="商品名称">&nbsp;&nbsp;
                    商品类型：
					<select name="type_id"  class="form-control">
                         <option value=""> -- 请选择 -- </option>
                                @foreach($type as $k =>$v)
                                   <option value="{{$v->id}}"> |-- {{$v->type_name}}</option>
                                 @endforeach
                    </select>&nbsp;&nbsp;

                     <button class="btn btn-azure btn-addon">搜索</button>
               </label>
          </div>
     </form>

	<div class="row">
	    <div class="col-lg-12 col-sm-12 col-xs-12">
	        <div class="widget">
	            <div class="widget-body">
	                <div class="flip-scroll">
	                    <table class="table table-bordered table-hover">
	                        <thead class="">
	                            <tr>
	                                <th class="text-center" width="4px">ID</th>
	                                <th class="text-center" width="1%">商品编号</th>
	                                <th class="text-center" width="8%" >商品名称</th>
	                                <th class="text-center" width="8%">商品标题</th>
	                                <th class="text-center" width="8%">商品图片</th>
	                                <th class="text-center" width="5%">上架</th>
	                              	<th class="text-center" width="8%">所属分类</th>
	                              	<th class="text-center" width="8%">所属类型</th>
	                              	<th class="text-center" width="9%">所属品牌</th>
	                              	<th class="text-center" width="6%">市场价</th>
	                              	<th class="text-center" width="6%">本店价</th>
	                              	<th class="text-center" width="7%">浏览量</th>
	                              	<th class="text-center" width="4%">重量</th>
	                              	<th class="text-center" width="7%">库存</th>
	                             	<th class="text-center" width="12%">操作</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                           	@foreach($del_goods as $k=>$v)
	                           	<tr align="center">
	                           		<td>{{$v->id}}</td>
	                           		<td >{{$v->goods_bianhao}}</td>
	                           		<td style=" overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{$v->goods_name}}</td>
	                           		<td>{{$v->goods_title}}</td>
	                           		<td>
	                           			<img src="/static/admin/images/goods_img/{{$v->goods_img}}" width="45px" height="30">
									</td>
	                           		<td>
	                           			{{$v->goods_status == 1 ? '是' : '否'}}
	                           		</td>
 
	                           		<td>{{$v->cate_id}}</td>
	                           		<td>{{$v->type_id}}</td>
	                           		<td>{{$v->brand_id}}</td>
	                           		<td>￥{{$v->markte_price}}</td>
	                           		<td>￥{{$v->goods_price}}</td>
	                           		<td>{{$v->click_num}}</td>
	                           		<td>{{$v->goods_weight}}kg</td>
	                           		<td>{{$v->goods_num}}件</td>

   		
		                            <td width="130px" style="display: inline-block;"">
	                           			

	                           				<a href="/admin/goods/huifu/{{$v->id}}" class="btn btn-success btn-xs" style="display: inline-block; width: 50px"><i class="fa fa-edit">
		                            	</i>恢复</a>


											<a href="/admin/goods/shanchu/{{$v->id}}" class="btn btn-danger btn-xs" style="display: inline-block;width: 50px"><i class="fa fa-edit">
		                            	</i>删除</a>
	                           
	                           			
	                           		</td>
	                     
	                           	</tr>
	                           	@endforeach
	                            	                                                           
	                            </tbody>
	                    </table>
	                </div>
	                <div style="padding-top:10px; text-align:right;">

	        <ul class="pagination">
	        <li>{{ $del_goods->appends($request)->links() }}</li>
  
            </ul>
    
	                </div>
	                <div>
	               </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<script type="text/javascript">

  
  function show(id){
  	layui.use(['layer', 'form'], function(){
  var layer = layui.layer
  ,form = layui.form;
			layer.open({
			type: 2,
			title: '商品内容',
			shadeClose: true,
			shade: 0.8,
			area: ['700px', '90%'],
			content: '/admin/goods/'+id
			//content: $data;
			}); 
		});
  }


</script>
@endsection