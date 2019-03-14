<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>购物圈 -- 个人中心</title>
<link href="/static/home/circle/css/style.css" rel="stylesheet">
<link href="/static/home/circle/css/animation.css" rel="stylesheet">
<link href="/static/home/circle/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="/static/home/circle/js/jquery.js"></script>
<script type="text/javascript" src="/static/home/circle/js/js.js"></script>
    <script type="text/javascript" src="{{ asset('/static/admin/assets/js/jquery.js') }}"></script>
<style>


.cta {
  background-color: #343434;
  display: inline-block;
  padding: 0.8em 3em 0.8em 3em;
  border-radius: 100px;
  font-family: "Raleway";
  box-shadow: 0px 5px 40px rgba(52, 52, 52, 0.6);
  color: white;
  text-decoration: none;
  font-size: 1.2em;
  overflow: hidden;
  backface-visibility: hidden;
  position: relative;
}
.cta:active {
  transform: translateY(3px);
}

.btn-text-parent {
  position: relative;
  display: inline-block;
  overflow: hidden;
}

.wrap_text {
  display: inline-block;
}

.buildin-btn-text {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 9;
  width: 100%;
  transform: translateY(100%);
}
.buildin-btn-text .btn-letter {
  opacity: 0;
}

.btn-letter {
  display: inline-block;
  margin: 0em 0.05em;
  position: relative;
  transition: transform 300ms, opacity 300ms ease;
}

.current-btn-text .btn-letter:nth-child(1) {
  transition-delay: 49ms;
}

.current-btn-text .btn-letter:nth-child(2) {
  transition-delay: 99ms;
}

.current-btn-text .btn-letter:nth-child(3) {
  transition-delay: 149ms;
}

.current-btn-text .btn-letter:nth-child(4) {
  transition-delay: 199ms;
}

.current-btn-text .btn-letter:nth-child(5) {
  transition-delay: 249ms;
}

.current-btn-text .btn-letter:nth-child(6) {
  transition-delay: 299ms;
}

.current-btn-text .btn-letter:nth-child(7) {
  transition-delay: 349ms;
}

.current-btn-text .btn-letter:nth-child(8) {
  transition-delay: 399ms;
}

.current-btn-text .btn-letter:nth-child(9) {
  transition-delay: 449ms;
}

.current-btn-text .btn-letter:nth-child(10) {
  transition-delay: 499ms;
}

.current-btn-text .btn-letter:nth-child(11) {
  transition-delay: 549ms;
}

.current-btn-text .btn-letter:nth-child(12) {
  transition-delay: 599ms;
}

.current-btn-text .btn-letter:nth-child(13) {
  transition-delay: 649ms;
}

.current-btn-text .btn-letter:nth-child(14) {
  transition-delay: 699ms;
}

.current-btn-text .btn-letter:nth-child(15) {
  transition-delay: 749ms;
}

.current-btn-text .btn-letter:nth-child(16) {
  transition-delay: 799ms;
}

.current-btn-text .btn-letter:nth-child(17) {
  transition-delay: 849ms;
}

.current-btn-text .btn-letter:nth-child(18) {
  transition-delay: 899ms;
}

.current-btn-text .btn-letter:nth-child(19) {
  transition-delay: 949ms;
}

.current-btn-text .btn-letter:nth-child(20) {
  transition-delay: 999ms;
}

.current-btn-text .btn-letter:nth-child(21) {
  transition-delay: 1049ms;
}

.current-btn-text .btn-letter:nth-child(22) {
  transition-delay: 1099ms;
}

.current-btn-text .btn-letter:nth-child(23) {
  transition-delay: 1149ms;
}

.current-btn-text .btn-letter:nth-child(24) {
  transition-delay: 1199ms;
}

.current-btn-text .btn-letter:nth-child(25) {
  transition-delay: 1249ms;
}

.current-btn-text .btn-letter:nth-child(26) {
  transition-delay: 1299ms;
}

.current-btn-text .btn-letter:nth-child(27) {
  transition-delay: 1349ms;
}

.current-btn-text .btn-letter:nth-child(28) {
  transition-delay: 1399ms;
}

.current-btn-text .btn-letter:nth-child(29) {
  transition-delay: 1449ms;
}

.current-btn-text .btn-letter:nth-child(30) {
  transition-delay: 1499ms;
}

.buildin-btn-text .btn-letter:nth-child(1) {
  opacity: 0;
  transition-delay: 49ms;
}

.buildin-btn-text .btn-letter:nth-child(2) {
  opacity: 0;
  transition-delay: 99ms;
}

.buildin-btn-text .btn-letter:nth-child(3) {
  opacity: 0;
  transition-delay: 149ms;
}

.buildin-btn-text .btn-letter:nth-child(4) {
  opacity: 0;
  transition-delay: 199ms;
}

.buildin-btn-text .btn-letter:nth-child(5) {
  opacity: 0;
  transition-delay: 249ms;
}

.buildin-btn-text .btn-letter:nth-child(6) {
  opacity: 0;
  transition-delay: 299ms;
}

.buildin-btn-text .btn-letter:nth-child(7) {
  opacity: 0;
  transition-delay: 349ms;
}

.buildin-btn-text .btn-letter:nth-child(8) {
  opacity: 0;
  transition-delay: 399ms;
}

.buildin-btn-text .btn-letter:nth-child(9) {
  opacity: 0;
  transition-delay: 449ms;
}

.buildin-btn-text .btn-letter:nth-child(10) {
  opacity: 0;
  transition-delay: 499ms;
}

.buildin-btn-text .btn-letter:nth-child(11) {
  opacity: 0;
  transition-delay: 549ms;
}

.buildin-btn-text .btn-letter:nth-child(12) {
  opacity: 0;
  transition-delay: 599ms;
}

.buildin-btn-text .btn-letter:nth-child(13) {
  opacity: 0;
  transition-delay: 649ms;
}

.buildin-btn-text .btn-letter:nth-child(14) {
  opacity: 0;
  transition-delay: 699ms;
}

.buildin-btn-text .btn-letter:nth-child(15) {
  opacity: 0;
  transition-delay: 749ms;
}

.buildin-btn-text .btn-letter:nth-child(16) {
  opacity: 0;
  transition-delay: 799ms;
}

.buildin-btn-text .btn-letter:nth-child(17) {
  opacity: 0;
  transition-delay: 849ms;
}

.buildin-btn-text .btn-letter:nth-child(18) {
  opacity: 0;
  transition-delay: 899ms;
}

.buildin-btn-text .btn-letter:nth-child(19) {
  opacity: 0;
  transition-delay: 949ms;
}

.buildin-btn-text .btn-letter:nth-child(20) {
  opacity: 0;
  transition-delay: 999ms;
}

.buildin-btn-text .btn-letter:nth-child(21) {
  opacity: 0;
  transition-delay: 1049ms;
}

.buildin-btn-text .btn-letter:nth-child(22) {
  opacity: 0;
  transition-delay: 1099ms;
}

.buildin-btn-text .btn-letter:nth-child(23) {
  opacity: 0;
  transition-delay: 1149ms;
}

.buildin-btn-text .btn-letter:nth-child(24) {
  opacity: 0;
  transition-delay: 1199ms;
}

.buildin-btn-text .btn-letter:nth-child(25) {
  opacity: 0;
  transition-delay: 1249ms;
}

.buildin-btn-text .btn-letter:nth-child(26) {
  opacity: 0;
  transition-delay: 1299ms;
}

.buildin-btn-text .btn-letter:nth-child(27) {
  opacity: 0;
  transition-delay: 1349ms;
}

.buildin-btn-text .btn-letter:nth-child(28) {
  opacity: 0;
  transition-delay: 1399ms;
}

.buildin-btn-text .btn-letter:nth-child(29) {
  opacity: 0;
  transition-delay: 1449ms;
}

.buildin-btn-text .btn-letter:nth-child(30) {
  opacity: 0;
  transition-delay: 1499ms;
}

.cta:hover .current-btn-text .btn-letter {
  opacity: 0;
  transform: translateY(-100%);
}
.cta:hover .buildin-btn-text .btn-letter {
  opacity: 1;
  transform: translateY(-100%);
}
</style>
<style type="text/css">
  .pagination li{
     float: left;
     margin: 0 3px;
    min-width: 30px;
    background: #ffffff;
    border: 1px solid #e5e5e5;
    color: #5e5e5e;
    cursor: pointer;
    outline: none;
    text-align: center;
    display: block;
  }
  .pagination .active {
    background: #0eb0d2;
    color: #ffffff;
}
.pagination .disabled{
  background: #eeeeee;
    color: #5e5e5e;
}
.pagination{
  margin-left: 150px;
}
</style>
</head>

<body>
<header>
  <nav id="nav">
      <ul>
          <li><a href="/circle" title="个人中心">个人中心</a></li>
          <li><a href="/circle/fwllow" title="我的好友">我的好友</a></li>
          <li><a href="/circle/{{ session('user.id') }}" style="float: right;">我的的购物圈</a></li>
        </ul>
         <script src="js/silder.js"></script><!--获取当前页导航 高亮显示标题--> 
    </nav>
</header>

<div id="mainbody">
      <input value="查找" type="submit" name="" style="float: right;margin-top: 10px;margin-right: 200px;">
      <input placeholder="请输入好友昵称" style="float: right;margin-top: 10px;margin-right: 10px;" type="text" name="">
    <!-- 个人介绍头部 -->
  <div class="info">
        <div class="card" style="width: 100%;">
           <h1>好友申请列表</h1>
          <ul class="bloglist">
            @if(count($data) == 0)
              <h1 style="margin-top: 50px;margin-left: 50px;">暂无好友请求</h1>
            @else
            @foreach($data as $k => $v)
          <!-- 每一个好友请求 -->
            <li style="margin-left: 30px;">
                <div class="row_box">
                    <ul class="textinfo">
                        <div  style="margin-top: 10px;">
                            <!-- 好友头像 -->
                            <img src="@if($v->user->user_pic == '') /static/home/users_pic/default.png @else /static/{{ $v->user->user_pic }} @endif" style="width: 80px;height: 80px;background: #aaa;margin-left: 20px;margin-bottom: 10px;"></img>
                            <!-- 好友头像结束 -->
                            <!-- 好友姓名 -->
                            <strong><h3>好友昵称：{{ $v->user->nicheng }}</h3></strong>
                            <br>
                            <strong><h3>个性签名：{{ $v->user->desc->desc }}</h3></strong>
                            <!-- 好友姓名结束 -->
                            <a href="/circle/agree/{{ $v->id }}" style="float: right;position: relative;top: -60px;right: 10px;height: 20px;" href="" class="cta">接受申请</a>
                            <a href="/circle/trun/{{ $v->id }}" style="float: right;position: relative;top: -10px;right: -138px;height: 20px;" href="" class="cta">拒绝申请</a>
                        </div>
                    </ul>
                    <ul class="details">
                        <li class="icon_time"><a href="javascript:;">申请时间：{{date('Y年m月d日 H时i分s秒',$v->time)}}</a></li>
                    </ul>
                </div>
            </li>
            @endforeach
            @endif

            </ul>
        </div>
    </div>
<!-- 个人介绍介绍 -->



    <!--blogs结束-->
</div>
<!--mainbody结束-->
<footer>
    <div class="foot-mid">
        <div class="links">
          <h2>EC优购打造优质购物圈</h2>
            <ul>
              <li><a href="#">EC官网</a></li>
                <li><a href="#">关于我们</a></li>
                <li><a href="#">商务合作</a></li>
            </ul>
        </div>
    </div>

</footer>


<div id="tbox"> <a id="togbook" href="#"></a>
 <a id="gotop" href="javascript:void(0)"></a> </div>

</body>
</html>
 <!-- 配置文件 -->
    <script type="text/javascript" src="/static/admin/udit/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/static/admin/udit/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container',{
            toolbars: [
                          ['emotion'],
                      ],
                      autoHeightEnabled: true,
                      autoFloatEnabled: true,
                      maximumWords:30,
                      wordCountMsg:'<span style="color:#000;">尊敬的EC优购会员, 您还可以输入{#leave}个字。</span>',
                      wordOverFlowMsg:'<span style="color:red;">尊敬EC优购会员，你的字数已超出最大限制，可能导致发表失败</span>',
                      enableAutoSave:false,
                      pasteplain:true,
        });
    </script>
<!--这部分代码直接使用，只要修改文字即可-->
<script type="text/javascript">
var $cta = $('.cta');

var createBtnsMarkup = function createBtnsMarkup() {
  $cta.each(function (i, btn) {
    var $t = $(btn);
    var $btnText = $t.text();
    var $splitText = $btnText.split("");

    $t.html("").append("\n\t\t\t\t<span class=\"btn-text-parent\">\n\t\t\t\t\t<span class=\"wrap_text current-btn-text\"></span>\n\t\t\t\t\t<span class=\"wrap_text buildin-btn-text\"></span>\n\t\t\t\t</span>\n\t\t\t");

    for (var _i = 0; _i < $splitText.length; _i++) {
      $t.
      find(".wrap_text").
      append("<span class=\"btn-letter\">" + $splitText[_i] + "</span>");
    }
  });
};


window.onLoad = createBtnsMarkup();
$('.yhdt').find('img').css('width','50px');
$('.yhdt').find('img').css('hieght','50px');

</script>
<script src="/static/home/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/static/home/js/iziToast.min.js" type="text/javascript"></script>
<script src="/static/home/js/demo.js" type="text/javascript"></script>
<link rel="stylesheet" href="/static/home/css/iziToast.min.css">
<!-- <link rel="stylesheet" href="/static/home/css/dem.css"> -->
<script type="text/javascript">
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
        iziToast.warning({
            title: '错误提示',
            message: '{{ $error }}',
            position: 'topLeft',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX'
        });
        @endforeach
    @endif
    @if(session('error'))
        iziToast.warning({
            title: '错误提示',
            message: '{{ session('error') }}',
            position: 'topLeft',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX'
        });
    @endif
    @if(session('success'))
        iziToast.warning({
            title: '成功提示',
            message: '{{ session('success') }}',
            position: 'topLeft',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX'
        });
    @endif
</script>