@extends('layout.admin')
@section('title', '分类管理')
@section('title2', '添加分类')
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
@endif
<div class="col-lg-6 col-sm-6 col-xs-12" width="700px">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">分类添加</span>
            </div>
            <div class="widget-body">
                <div>
                    <form role="form" action="/admin/goodscategory" method="post">
                        <div class="form-group">
                            {{ csrf_field() }}
                            上级分类：
                            <select name="cate_pid" id="xl">
                                <option value="0">顶级分类</option>
                                @foreach($data as $k => $v)
                                    <option @if($key == $v->id) selected @endif value="{{ $v->id }}" @if($v->id == old('cate_pid')) selected @endif>{{ $v->catenamea }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cate_sort">分类排序：</label>
                            <input style="width: 100px;display: inline;" type="number" name="cate_sort" class="form-control" id="cate_sort" value="100" placeholder="序号">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">分类名称：</label>
                            <input type="text" name="cate_name" class="form-control" id="exampleInputPassword1" {{ old('cate_name') }} placeholder="请输入分类名称">
                        </div>
                        <div id="tb" @if($key)style="display:none"@endif class="form-group">
                            <label for="exampleInputPassword4">分类图标：</label>
                            <input type="text" name="cate_ico" class="form-control" id="exampleInputPassword4" {{ old('cate_ico') }} placeholder="请输入分类图标">
                        </div>
                        <div class="form-group">
                            <label for="cate_desc">分类描述：</label>
                            <input type="text" name="cate_desc" value="{{ old('cate_desc') }}" class="form-control" id="cate_desc" placeholder="请输入分类描述">
                        </div>
                        <input type="submit" value="提交" class="btn btn-blue">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#xl').change(function(){
            if($(this).val() == '0'){
                $('#tb').css('display','block');
            }else{
                $('#tb').css('display','none');
            }
        });
    </script>
@endsection