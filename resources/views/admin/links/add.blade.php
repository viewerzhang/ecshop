@extends('layout.admin')
@section('title', '友情链接管理')
@section('title2', '添加链接')
@section('content')

<div class="col-lg-6 col-sm-6 col-xs-12" width="700px">
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-blue">
                                            <span class="widget-caption">友情链接添加</span>
                                        </div>
                                        <div class="widget-body">
                                            <div>
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                <span class="text">Remember me next time.</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-blue">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
@endsection