@extends('layout.admin')
@section('title', '后台的主页')
@section('content')
<script src="{{ asset('/static/admin/assets/js/holder.min.js') }}"></script>
<!-- <img src="holder.js/500x500" alt=""> -->
<div class="container-fluid">

    <div class="row">
        <!-- Stats -->
        <br>
        <!-- 第一个框 -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-themesecondary">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="50" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)" style="width: 47px; height: 47px; line-height: 47px;"><span class="white font-90">商品</span><canvas width="47" height="47"></canvas></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number themesecondary">

                                            <?php $Goods = count(\App\Http\Model\Admin\Goods::all()); 
                                            ?>
                                            {{$Goods}}
                                            </span>
                                            <div class="databox-text darkgray">仓库总量</div>
                                            <div class="databox-stat themesecondary radius-bordered">
                                                <i class="stat-icon icon-lg fa fa-tasks"></i>
                                            </div>
                                        </div>
                                    </div>
         </div>
         <!-- 第二个框 -->
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-themethirdcolor">
                                            <div class="databox-piechart">
                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="15" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.2)" style="width: 47px; height: 47px; line-height: 47px;"><span class="white font-90">订单</span><canvas width="47" height="47"></canvas></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number themethirdcolor">
                                            <?php $GoodsOrder = count(\App\Http\Model\Admin\GoodsOrder::all()); 
                                            ?>
                                            {{$GoodsOrder}}
                                            </span>
                                            <div class="databox-text darkgray">成交订单</div>
                                            <div class="databox-stat themethirdcolor radius-bordered">
                                                <i class="stat-icon  icon-lg fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                    </div>
         </div>
         <!-- 第三个框 -->
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left bg-themeprimary" style="color: #6cba35">
                                            <div class="databox-piechart">
                                                <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)" style="width: 47px; height: 47px; line-height: 47px;"><span class="white font-90">文章</span><canvas width="47" height="47"></canvas></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number themeprimary" style="color: #2dc3e8 ">
                                            <?php $Articles = count(\App\Http\Model\Admin\Articles::all()); 
                                            ?>
                                            {{$Articles}}
                                            </span>
                                            <div class="databox-text darkgray">文章总量</div>
                                            <div class="databox-state bg-themeprimary">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                    </div>
         </div>
         <!-- 第四个框 -->
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="databox radius-bordered databox-shadowed databox-graded">
                                        <div class="databox-left " style="background-color: #65cb30 ">
                                            <div class="databox-piechart">
                                                <div id="users-pie" data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="rgba(255,255,255,0.1)" style="width: 47px; height: 47px; line-height: 47px;"><span class="white font-90">分类</span><canvas width="47" height="47"></canvas></div>
                                            </div>
                                        </div>
                                        <div class="databox-right">
                                            <span class="databox-number themeprimary" style="color: #65cb30 ">
                                            <?php $GoodsCategory = count(\App\Http\Model\Admin\GoodsCategory::all()); 
                                            ?>
                                            {{$GoodsCategory}}
                                            </span>
                                            <div class="databox-text darkgray">分类总数</div>
                                            <div class="databox-state" style="background-color: #65cb30 ">
                                                <i class="fa fa-adjust"></i>
                                            </div>
                                        </div>
                                    </div>
         </div>
        <!--// Stats -->
	
	</div>
    <p>
    <span>
        &nbsp;<i class="fa fa-bell-o"></i>&nbsp;&nbsp;管理员<span style="color: #2dc3e8"><b>&nbsp;{{session('admin.uname')}}&nbsp;</b></span>你好，欢迎登陆EC商城管理后台！
    </p>
    <br>
    <div class="outer-w3-agile col-xl mt-3">
            <ul class="list-group">
                <li class="list-group-item" >北京时间：<span id="time">123</span></li>
                <li class="list-group-item">操作系统：{{ $_SERVER["SystemRoot"] }}</li>
                <li class="list-group-item">服务器端口号：{{ $_SERVER["SERVER_PORT"] }}</li>
                <li class="list-group-item">上传文件限制: 4MB</li>
                <li class="list-group-item">通讯协议名称：{{ $_SERVER["REQUEST_SCHEME"] }}</li>
                <li class="list-group-item">服务器端信息：{{ $_SERVER["SERVER_SOFTWARE"] }}</li>
                <li class="list-group-item">服务器根目录：{{ $_SERVER["DOCUMENT_ROOT"] }}</li>
                <li class="list-group-item">服务器主机名：{{ $_SERVER['SERVER_NAME'] }}</li>
                <li class="list-group-item">服务器域名/IP：{{ $_SERVER['SERVER_ADDR'] }}</li>
                <li class="list-group-item">PHP程式版本：{{ PHP_VERSION }}</li>
                <li class="list-group-item">客户端/IP：{{ $_SERVER['REMOTE_ADDR'] }}</li>
                <li class="list-group-item">服务器端信息：{{ $_SERVER['SERVER_SOFTWARE'] }}</li>

            </ul>
    </div>
</div>
<script type="text/javascript">
    var time = document.getElementById('time');
    function run(){
            var d = new Date();
            var n = d.getFullYear();
            var y = d.getMonth()+1;
            var t = d.getDate();
            var s = d.getHours();
            if(s < 10){
                s = '0'+s;
            }
            var f = d.getMinutes();
            if(f < 10){
                f = '0'+f;
            }
            var m = d.getSeconds();
            if(m < 10){
                m = '0'+m;
            }
            var x = d.getDay();
            switch(x){
                case 0:
                    x = '日';
                    break;
                case 1:
                    x = '一';
                    break;
                case 2:
                    x = '二';
                    break;
                case 3:
                    x = '三';
                    break;
                case 4:
                    x = '四';
                    break;
                case 5:
                    x = '五';
                    break;
                case 6:
                    x = '六';
                    break;
            }

    var str = n+'年'+y+'月'+t+'日 '+s+':'+f+':'+m+' 星期'+x;
    time.innerHTML  = str;
    
        }
    run();
    setInterval("run()",1000);

</script>
@endsection