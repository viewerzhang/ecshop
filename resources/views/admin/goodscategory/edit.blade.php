<div id="oop" style="width: 300px;margin:auto;margin-top: 10px;">
  <form action="/admin/goodscategory/{{$data->id}}" method="post">
  <div class="form-group">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <label for="phone">分类名称</label>
    <input type="text" class="form-control" name="cate_name" value="{{ $data->cate_name }}" placeholder="请输入当前手机">
  </div>
    <input id="okqd" style="margin-left: 36%;" type="submit" class="btn btn-danger"></div>
    </form>