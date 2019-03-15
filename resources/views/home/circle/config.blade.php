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
<link rel="stylesheet" type="text/css" href="http://fonts.useso.com/css?family=RobotoDraft:300,500">
<link rel="stylesheet" type="text/css" href="/static/home/circle/css/default.css">
<link rel="stylesheet" type="text/css" href="/static/home/circle/css/account.css" />
    <script type="text/javascript" src="{{ asset('/static/admin/assets/js/jquery.js') }}"></script>
    <style type="text/css">
  footer{
    margin-bottom: 0px;
  }
   input{
    color: #fff;
   }     
   textarea{
    color: #fff;
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
        <div class="card" style="width: 100%;height: 100%; ">
           <h1>系统设置</h1>
           <div style="width: 500px;margin-left: 30px;">
                      <div id="u" class="form-group">
                        <input id="title" value="{{ $data->title }}" spellcheck=false class="form-control" name="title" type="text" size="18" alt="login" required="">
                        <label for="title" class="float-label">购物圈名称</label>
                      </div>

                      <div id="u" class="form-group">
                        <input id="config_title" value="{{ $data->config_title }}" spellcheck=false class="form-control" name="config_title" type="text" size="18" alt="login" required="">
                        <label for="config_title" class="float-label">首页欢迎语</label>
                      </div>

                      <div id="u" class="form-group">
                        <textarea id="config_desc" spellcheck=false class="form-control" name="config_desc" type="text" size="18" alt="login" required="">{{ $data->config_desc }}</textarea>
                        <label for="config_desc" class="float-label">首页欢迎内容</label>
                      </div>
                      
                      <div id="u" class="form-group">
                        <textarea id="desc" spellcheck=false class="form-control" name="desc" type="text" size="18" alt="login" required="">{{ $data->desc }}</textarea>
                        <label for="desc" class="float-label">我的个性签名</label>
                      </div>
            </div>
        </div>
    </div>
<!-- 个人介绍介绍 -->



    <div class="blogs">
        <!--博客的列表开始-->
        <ul class="bloglist">


         
          <!-- 每一个分享内容介绍 -->

        </ul>
    
    <!--博客列表部分结束-->
    
    
    <!--右半部分开始-->

  </div>
    <!--blogs结束-->
</div>
<!--mainbody结束-->
<footer style="position: absolute;bottom: 0px;width: 100%;">
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


<script src="/static/home/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/static/home/js/iziToast.min.js" type="text/javascript"></script>
<script src="/static/home/js/demo.js" type="text/javascript"></script>
<link rel="stylesheet" href="/static/home/css/iziToast.min.css">

<script type="text/javascript">
  $('.form-control').change(function(){
    m = $(this).attr('name');
    v = $(this).val();
    $.post("/circle/config/"+m, {    
               "_token": "{{ csrf_token() }}",
               "method":v
            }, function(data) {
              if(data.code == '1'){
                iziToast.warning({
                    title: '成功提示',
                    message: data.msg,
                    position: 'topLeft',
                    transitionIn: 'flipInX',
                    transitionOut: 'flipOutX'
                });
              }else{
                iziToast.warning({
                    title: '错误提示',
                    message: data.msg,
                    position: 'topLeft',
                    transitionIn: 'flipInX',
                    transitionOut: 'flipOutX'
                });
              }
            },'json');
  });
</script>





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