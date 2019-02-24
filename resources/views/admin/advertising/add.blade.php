@extends('layout.admin')
@section('title', '广告管理')
@section('title2', '添加广告')
@section('content')
	<div class="col-lg-6 col-sm-6 col-xs-12" width="700px">
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-blue">
                                            <span class="widget-caption">广告添加</span>
                                        </div>
                                        <div class="widget-body">
                                            <div>
                                                <form role="form" action="/admin/ad" method="post" enctype="multipart/form-data">
                                                	{{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label>广告描述</label>
                                                        <input type="text" class="form-control"placeholder="advertising desc" name="ad_desc">
                                                    </div>
                                                    <div class="form-group">
													    <label for="exampleInputFile">广告图片</label>
													    <input type="file" id="exampleInputFile" name="ad_img">
													    <p class="help-block">Example block-level help text here.</p>
													  </div>
                                                    <div class="form-group">
                                                        <label>广告链接地址</label>
                                                        <input type="url" class="form-control"placeholder="ad link" name="ad_link">
                                                    </div>
                                                    
                                                    <button type="submit" class="btn btn-blue">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
@endsection