
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>EC优购 -- 购买成功</title>
        <link href="/static/home/css/404.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.css" rel="stylesheet">
        <script src="/static/home/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">
            $(function() {
                var h = $(window).height();
                $('body').height(h);
                $('.mianBox').height(h);
                centerWindow(".tipInfo");
            });

            //2.将盒子方法放入这个方，方便法统一调用
            function centerWindow(a) {
                center(a);
                //自适应窗口
                $(window).bind('scroll resize',
                        function() {
                            center(a);
                        });
            }

            //1.居中方法，传入需要剧中的标签
            function center(a) {
                var wWidth = $(window).width();
                var wHeight = $(window).height();
                var boxWidth = $(a).width();
                var boxHeight = $(a).height();
                var scrollTop = $(window).scrollTop();
                var scrollLeft = $(window).scrollLeft();
                var top = scrollTop + (wHeight - boxHeight) / 2;
                var left = scrollLeft + (wWidth - boxWidth) / 2;
                $(a).css({
                    "top": top,
                    "left": left
                });
            }
        </script>
    </head>
    <body>
        <div class="mianBox">
            <img src="/static/home/images/yun0.png" alt="" class="yun yun0" />
            <img src="/static/home/images/yun1.png" alt="" class="yun yun1" />
            <img src="/static/home/images/yun2.png" alt="" class="yun yun2" />
            <img src="/static/home/images/bird.png" alt="" class="bird" />
            <img src="/static/home/images/san.png" alt="" class="san" />
            <div class="tipInfo">
                <div class="in">
                    <div class="textThis">
                        <h2 style="font-size: 18px;">恭喜，您购买成功。分享订单即可获得10积分</h2>
                        <form action="/goodsorder/share">
                            <textarea class="form-control" rows="3" name="content">EC优购，物流急速</textarea>
                            <input type="submit" class="btn btn-success control-label" name="">
                        </form>
                        <p><span>点击<a id="href" href="http://laravel5.com">返回</a></span>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>