<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{{ $user->nicheng }} 的购物圈</title>
<link href="/static/home/circle/css/style.css" rel="stylesheet">
<link href="/static/home/circle/css/animation.css" rel="stylesheet">
<link href="/static/home/circle/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="/static/home/circle/js/jquery.js"></script>
<script type="text/javascript" src="/static/home/circle/js/js.js"></script>
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
          <li><a href="#">{{ $user->nicheng }}的购物圈</a></li>
        </ul>
         <script src="js/silder.js"></script><!--获取当前页导航 高亮显示标题--> 
    </nav>
</header>

<div id="mainbody">
    <!-- 个人介绍头部 -->
  <div class="info">
        <figure>
            <img src="/static/home/circle/images/art.jpg" alt="秋。。。相知">
            <figcaption>
                <strong>渡人如渡己，渡己，亦是渡。</strong>
                当我们被误解时，会花很多时间去辩白。 但没有用，没人愿意听，大家习惯按自己的所闻、理解做出判别，每个人其实都很固执。与其努力且痛苦的试图扭转别人的评判，不如默默承受，给大家多一点时间和空间去了解。而我们省下辩解的功夫，去实现自身更久远的人生价值。其实，渡人如渡己，渡已，亦是渡人。
            </figcaption>
        </figure>
        <div class="card">
           <h1>我的名片</h1>
              <p>昵称：{{ $user->nicheng }}</p>
              <p>账号：{{ $user->user_name }}</p>
              <p>积分：{{ $user->jf }}</p>
              <p>Email：@if($user->user_email == '' )暂未绑定@else {{ $user->user_email }}@endif</p>
              <ul class="linkmore">
                <li><a href="/" class="talk" title="给我留言"></a></li>
                <li><a href="/" class="address" title="EC优购首页"></a></li>
                <li><a href="/" class="email" title="给我写信"></a></li>
                <li><a href="/" class="photos" title="生活照片"></a></li>
                <li><a href="/" class="heart" title="加好友"></a></li>
              </ul>
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
                    <h2 class="title"> <a href="/goodlist">
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
                    <li><a href="/circle/{{ $users[$js]->id }}"><img style="width: 50px;height: 50px;" src="@if($users[$js]->user_pic == '') @else/static/{{ $users[$js]->user_pic }}@endif"></a><a href="/circle/add/">{{ $users[$js]->user_name }}<p>加好友</p></a> </li>
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
<script type="text/javascript">
  
$('.yhdt').find('img').css('width','50px');
$('.yhdt').find('img').css('hieght','50px');
</script>
