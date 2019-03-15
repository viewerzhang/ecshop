/**
 * 中秋节活动引导
 * guideTool_v1.1 based on JQuery by mq_brandon
 * lastest: 2016-9-2 13:52:04
**/

(function( $ ) {    
    var options = {
        cookieName: 'guidemoon', // cookie名字
        cookieTime: 24,        // cookie有效期临界时间点
        duration: 300,         // 动画持续时间
        guideAll: '.guide-all',
        guideBar: '.guide-bar',
        guideBarClose: '.guide-bar-close',
        guideAllClose: '.guide-all-close'
    };

    var guideTool = {};

    // cookie操作
    var cookie = {
        setCookie: function( cookieName, cookieValue, nMilliseconds ) {
               var today = new Date(),
                expire = new Date();

            if( nMilliseconds == null || nMilliseconds == 0 ) {
                nMilliseconds = 1;
            }

            expire.setTime( today.getTime() + nMilliseconds );

            document.cookie = cookieName + "=" + escape( cookieValue ) + ";expires=" + expire.toGMTString();
        },
        getCookie: function( cookieName ) {
            var strCookie = document.cookie,
                arrCookie = strCookie.split( "; " ); 

            for( var i = 0, l = arrCookie.length; i < l; i++ ) { 
                var arr = arrCookie[ i ].split( "=" );

                if( arr[ 0 ] == cookieName )  return arr[1];
            }

            return "";
        },
        deleteCookie: function( cookieName ) {
            var date = new Date();

            date.setTime( date.getTime() - 10000 ); 
            document.cookie = cookieName + "=v;expire=" + date.toGMTString();
        }
    };

    // 浏览器内核判断
    var browser = {
        versions: function() {
            var u = navigator.userAgent, app = navigator.appVersion;
            return {//移动终端浏览器版本信息
                trident: u.indexOf('Trident') > -1, //IE内核
                presto: u.indexOf('Presto') > -1, //opera内核
                webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                iPhone: u.indexOf('iPhone') > -1, //是否为iPhone或者QQHD浏览器
                iPad: u.indexOf('iPad') > -1, //是否iPad
                webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
            };
        }()
    };

    // 获取从now开始截止到第time点的毫秒数
    guideTool.getDuration = function( time, now) {
        var old = now.getTime(),
            days = now.getDate(),
            hours = now.getHours(),
            minutes = now.getMinutes(),
            seconds = now.getSeconds(),
            milliSeconds = now.getMilliseconds();

        if ( hours <= time ) {
            now.setHours( time );
            now.setMinutes( 0 );
            now.setSeconds( 0 );
        } else {
            now.setDate( days + 1 );
            now.setHours( time );
            now.setMinutes( 0 );
            now.setSeconds( 0 );
        }

        return now.getTime() - old;
    };

    // 事件绑定
    guideTool.eventBind = function() {
        $( options.guideAllClose ).click( function () {
            var now = new Date();
                nMilliseconds = guideTool.getDuration( options.cookieTime, now );

            cookie.setCookie( options.cookieName, options.cookieName + 'value', nMilliseconds );

            $( options.guideAll ).slideUp( options.duration );
            $( options.guideBar ).slideDown( options.duration );
        });
        $( options.guideBarClose ).click( function() {
            $( options.guideBar ).slideUp( options.duration );
        });
    };

    // 首次进入时判断是否显示全屏的引导
    guideTool.init = function() {
        var isMobile,
            guideCookie = cookie.getCookie( options.cookieName );

        isMobile = browser.versions.iPhone || browser.versions.android;

        // 如果是移动端则不显示全屏引导和顶部引导
        if ( !isMobile ) {
            guideTool.eventBind();

            if ( guideCookie ) {
                $( options.guideBar ).show();
            } else {
                $( options.guideAll ).show();
            }
        } else {
            $( options.guideAll ).hide();
            $( options.guideBar ).hide();
        }
        
    };

    guideTool.init();
})( jQuery );