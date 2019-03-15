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
.row_box img {
      float: none;    padding: 0px;
}
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
          <li><a href="/circle/config" style="float: right;">设置</a></li>
          <li><a href="/circle/{{ session('user.id') }}" style="float: right;">我的的购物圈</a></li>
        </ul>
         <script src="js/silder.js"></script><!--获取当前页导航 高亮显示标题--> 
    </nav>
</header>

<div id="mainbody">
    <!-- 个人介绍头部 -->
  <div class="info">
        <div class="card" style="width: 100%;">
           <h1>发布动态</h1>
           <form action="/circle" method="post">
            {{ csrf_field() }}
           <script id="container" name="content" type="text/plain" style="width: 100%;background:#ddd;height: 100px"></script>
            <!-- <a type="submit" href="javascript:;" onclick="" style="float: right;" class="cta">发表动态</a> -->
            <input type="submit" style="float: right;border: #343434 solid 1px;cursor: pointer;" class="cta" name="" value="发表动态">
            </form>
        </div>
    </div>
<!-- 个人介绍介绍 -->



    <div class="blogs">
        <!--博客的列表开始-->
        <ul class="bloglist">


          <!-- 每一个分享内容 -->
          @foreach($data as $k=>$v)
            <li>
                <div class="row_box">
                    <div class="ti"></div><!--三角形-->
                    <div class="ci"></div><!--圆形-->
                    <h2 class="title"> <a href="/circle/{{ $v->uid }}">
                        @if($v->type == '0')
                        今天购买了{{ $v->order->order_count }}件商品，超便宜大家赶紧去看看吧
                        @elseif($v->type == '1')
                        {{$v->user->nicheng}}发表了一条动态
                        @endif
                    </a></h2>
                    <ul class="textinfo">
                        @if($v->type == '0')
                          @foreach($v->order->shopdetail as $kk => $vv)
                            <a href="/goodlist/{{ $vv->goods->id }}" target="_blank"><img style="width: 158px;height: 113px;" src="/static/admin/images/goods_img/{{ $vv->goods->goods_img }}"></a>
                          @endforeach
                          <div style="clear: both;">
                          <p><strong>购物评论：</strong>{{ $v->content }}</p>
                          </div>
                        @endif
                        @if($v->type == '1')
                        <div class="yhdt">
                        {!! $v->content !!}
                        </div>
                        @endif
                    </ul>
                    <ul class="details">
                        <li class="icon_time"><a href="javascript:;">{{ date('Y年m月d日 H时i分s秒',$v->time) }}</a></li>
                    </ul>
                </div>
            </li>
          @endforeach
          <!-- 每一个分享内容介绍 -->
    {{ $data->links() }}

        </ul>
    
    <!--博客列表部分结束-->
    
    
    <!--右半部分开始-->
        <aside>
            <div class="tuijian">
                <h2>热门文章</h2>
                <ol>
                    @foreach($articles as $k => $v)
                    @if($k >= 5)
                    <?php break; ?>
                    @endif
                    <li><span> <strong>{{ $k+1 }}</strong></span><a href="#">{{ $v->art_title }}</a></li>
                    @endforeach
                </ol>
            </div>
            <div class="toppic">
                <h2>猜你认识</h2>
                <ul>
                    @for($i = 0 ; $i <= 2;$i++)
                    <?php $js = mt_rand(0,count($users)-1); ?>
                    <li><a href="/circle/{{ $users[$js]->id }}"><img style="width: 50px;height: 50px;" src="@if($users[$js]->user_pic == '') /static/home/users_pic/default.png @else/static/{{ $users[$js]->user_pic }}@endif">{{ $users[$js]->nicheng }}</a><a href="/circle/add/{{ $users[$js]->id }}"><p>加好友</p></a> </li>
                    @endfor
                </ul>
            </div>

            <div class="search">
                <form class="searchform" method="post" action="#">
                    <input type="text" placeholder="搜索用户昵称" name="s" onFocus="" onBlur="">
                </form>
            </div>
            <div class="viny">
                <dl>
                    <dt class="art"><img src="/static/home/circle/images/artwork.png" alt="专辑"></dt>
                    <dd class="icon_song"><span></span>南方姑娘</dd>
                    <dd class="icon_artist"><span></span>歌手：赵雷</dd>
                    <dd class="icon_album"><span></span>所属专辑：《赵小雷》</dd>
                    <dd class="icon_like"><span></span><a href="#">喜欢</a></dd>
                    <dd class="music"><audio src="/static/home/circle/images/nf1.mp3" controls loop></audio></dd>
                </dl>
            </div>
        </aside>
  </div>
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