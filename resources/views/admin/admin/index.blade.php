@extends('layout.admin')
@section('title', '管理员')
@section('title2', '个人中心')
@section('content')
<div class="col-lg-6 col-sm-6 col-xs-12" width="700px">
    <div class="widget">
        <div class="widget-header bordered-bottom bordered-blue">
            <span class="widget-caption">我的个人信息</span>
            <span>
                <a href="javascript:;" class="btn btn-definde" style="margin-right: -4px;">修改资料</a>
                <a href="javascript:;" class="btn btn-definde">更新资料</a>
            </span>
        </div>
        <div class="widget-body">
            <div style="border: #ccc solid 1px;background: #F7F7F7;width: 50%;height:110%;border-radius: 15px;">
                <div style="position: relative;top: 10px;left: 15px;">
                    <div class="form-group">
                        <label for="exampleInputEmail1">头像：</label>
                        <img src="" width="100" height="100">
                    </div>
                    <div class="form-group">
                         <span> 管理员名称： </span> 
                        123123 
                    </div>
                    <div class="form-group">
                         <span> 用户组： </span> 
                        123123
                    </div>
                    <div class="form-group">
                         <span> 手机号： </span> 
                        123123　<a href="" class="btn btn-primary btn-xs">修改</a>
                    </div>
                    <div class="form-group">
                         <span> 邮  箱： </span> 
                        123123　<a href="" class="btn btn-primary btn-xs">修改</a>
                    </div>
                    <div class="form-group">
                         <span> 当前状态： </span> 
                        123123
                    </div>
                    <div class="form-group">
                         <span> 注册时间： </span> 
                        123123
                    </div>
                    <div class="form-group">
                         <span> 上次登录时间： </span> 
                        123123
                    </div>
                    <div class="form-group">
                         <span> 上次登录地点： </span> 
                        123123
                    </div>
                </div>
                    <!-- <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="text">Remember me next time.</span>
                            </label>
                        </div>
                    </div> -->

            </div>
            <div style="position: absolute;border:#ccc solid 1px;width: 45%;height:80%;border-radius: 3px;left: 52%;top: 11%;">

                    <div class="xtgg"><span style="position: relative;top: 2px;left: -5px;" class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>系统公告</div>
                    <hr style="margin-top: 8px;">
                        <ul class="list-group" style="margin-top: -14px;">
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                          <li class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>　系统消息</li>
                        </ul>
                </div>
        </div>


                
    </div>
</div>
<style type="text/css">
    .xtgg{
        font-size: 24px;
        font-weight: bold;
        font-family: 黑体;
        margin-left: 20px;
        margin-top: 12px;
        color: #666;
    }
</style>
@endsection