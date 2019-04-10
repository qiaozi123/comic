<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0020)http://www.1kkk.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>极速漫画_在线漫画_为看漫画的人而生</title>
    <meta content="原创国漫,日本漫画,港台漫画,韩国漫画,欧美漫画,好漫画,为看漫画的人而生。热门漫画：火影忍者、海贼王938、死神、一拳超人148、古惑仔45、山海逆战366等" name="Description">
    <meta content="漫画,在线漫画,漫画大全" name="keywords">
    <meta content="极速漫画:好漫画,为看漫画的人而生、1kkk.com" name="Author">
    <!--[if lt IE 9]>
    <script src="http://css99tel.cdndm5.com/v201904041843/blue/js/html5shiv.min.js"></script>
    <script src="http://css99tel.cdndm5.com/v201904041843/blue/js/respond.min.js"></script>    <![endif]-->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/userinfo-vendor.css')}}">
    <link rel="stylesheet" href="{{url('css/dm5_style.css')}}">
    <link rel="stylesheet" href="{{url('css/account.css')}}">
    <link rel="shortcut icon" href="http://css99tel.cdndm5.com/v201904041843/blue/images/1kkk.ico">
    <script type="text/javascript" async="" charset="utf-8" src="{{url('css')}}/core.php"></script>
    <script type="text/javascript" async="" charset="utf-8" src="{{url('css')}}/core(1).php"></script>
    <script type="text/javascript" async="" src="{{url('css')}}/c.php"></script>
    <script src="{{url('js/push.js')}}"></script>
    <script type="text/javascript" async="" src="{{url('js/ga.js')}}"></script>
    <script type="text/javascript" async="" src="{{url('css')}}/c(1).php"></script>
    <script src="{{url('js/vendor.js')}}"></script>
    <script src="{{url('js/search.js')}}"></script>
    <script src="{{url('js/login.js')}}"></script>
    <script src="{{url('js/scripts.js')}}"></script>
    <script src="{{url('js/jquery.cookie.js')}}"></script>
    <script src="{{url('js/comics-dm5v3.js')}}"></script>
    <script src="{{url('js/comm.js')}}"></script>
    <script type="text/javascript">        var isVip = false;    </script>
</head>
<body class="white">    <!-- 页面头部 -->
<header class="header container-fluid ">
    <div class="container">            <!-- 左侧logo --> <a href="http://www.1kkk.com/"> <img class="header-logo"
                                                                                            src="{{url('css')}}/header-logo.png">
        </a>            <!-- 左侧菜单标题 -->
        <ul class="header-title">
            <li><a href="http://www.1kkk.com/" class="active">首页</a></li>
            <li><a href="http://www.1kkk.com/manhua-new/">更新</a></li>
            <li><a href="http://www.1kkk.com/manhua-rank/">排行</a></li>
            <li><a href="http://www.1kkk.com/manhua-jp/">日漫</a></li>
            <li><a href="http://www.1kkk.com/manhua-list/"><i class="icon icon-cat"
                                                              style="font-size:19px;vertical-align: sub;"></i></a></li>
        </ul>            <!-- 搜索栏 -->
        <div class="header-search"><input id="txtKeywords" type="text" placeholder="山海逆战" data-default="山海逆战">
            <div class="header-search-list" style="display: none"></div>
            <a id="btnSearch" href="javascript:newsearch();">搜索</a></div>            <!-- 右侧菜单选项 -->
        <ul class="header-bar">
            <li class="vip"><a href="http://www.1kkk.com/vipindex/">
                    <div class="header-vip"></div>
                    <p>VIP</p></a></li>
            <li class="hover"><a href="http://www.1kkk.com/comichistory/" data-isload="0"
                                 onmouseover="getreadhistorys(this)" target="_blank"> <i class="icon icon-clock"></i>
                    <p>历史</p></a>
                <div class="hover-list">
                    <div class="block"><p class="title">我看过的<a href="javascript:removereads(0);">清除记录</a></p>
                        <p class="login-title">登录后可同步云端阅读历史<a href="http://www.1kkk.com/login/" class="red">点击登录</a></p>
                        <ul></ul>
                        <a href="http://www.1kkk.com/comichistory/" class="bottom">全部历史(0)</a></div>
                    <div class="block"><img src="{{url('css')}}/readhistory-empty.png"></div>
                </div>
            </li>
            <li class="hover"><a href="http://www.1kkk.com/bookmarker/" data-isload="0" target="_blank"> <i
                        class="icon icon-fav"></i>
                    <p>收藏</p>                        <span class="red-sign"></span> </a></li>
            <li class="download"><a href="http://www.1kkk.com/download/"> <i class="icon icon-down"></i>
                    <p>下载APP</p></a></li>
        </ul>            <!-- 登录头像 -->
        <div class="header_login hover"><a href="javascript:void(0);" class="js_header_login_btn"> <img data-isload="0"
                                                                                                        class="header-avatar"
                                                                                                        src="{{url('css')}}/mrtx.gif"></a>
        </div>
    </div>
</header><!-- 完整分类 -->

@yield('content')

<footer class="footer container-fluid">
    <section class="container">
        <div class="footer-left"><p class="footer-logo"><a href="http://www.1kkk.com/"> <img
                        src="{{url('css')}}/logo-big.png" alt=""> </a></p>
            <p class="link"><span><a href="http://www.1kkk.com/about/" target="_blank">关于我们</a></span> <span><a
                        href="http://www.1kkk.com/coomperation/" target="_blank">商务合作</a></span> <span><a
                        href="http://www.1kkk.com/help/" target="_blank">建议与投诉</a></span> <span><a
                        href="http://www.1kkk.com/mianze/" target="_blank">版权声明</a></span></p>
            <p> Copyright (C) 2010-2020 www.1kkk.com 极速漫画 All rights reserved </p>
            <p>[网络文化经营许可证：浙网文[2015]0289-059号]&nbsp;&nbsp;&nbsp;&nbsp;[网站备案：浙ICP备09075556号-4] <img
                    src="{{url('css')}}/i_lo2.gif" border="0"
                    style="position: relative;top: -5px;left: 2px;height: 22px;vertical-align: top;" class="logo"></p>
        </div>
        <div class="footer-rigth">
            <ul class="qrcode-list">
                <li><img width="100" height="100" src="{{url('css')}}/down-qrcode-2.png" alt="">
                    <span>手机APP</span></li>
                <li><img width="100" height="100" src="{{url('css')}}/weibo.png" alt=""> <span>新浪微博</span>
                </li>
            </ul>
        </div>
    </section>
</footer>
<div class="alertTop_1" style="display: none;"><p id="alertTop_1"></p></div>
<div style="display:none">    <!--1kkk-->
    <script type="text/javascript">
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + "w.cnzz.com/c.php?id=30046992";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-27601854-1']);
        _gaq.push(['_setDomainName', 'none']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <script>
        (function () {
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
            } else {
                bp.src = 'http://push.zhanzhang.baidu.com/push.js';
            }
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
    <script type="text/javascript">
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + "w.cnzz.com/c.php?id=1258880908";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</div>
<script src="{{url('css')}}/comm.js"></script>
<script type="text/javascript">            $(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 48) {
                $('.right_NewBgt').addClass('right_NewBg_fixed');
                $('.left_NewBgt').addClass('left_NewBg_fixed');
            } else {
                $('.right_NewBgt').removeClass('right_NewBg_fixed');
                $('.left_NewBgt').removeClass('left_NewBg_fixed');
            }
            var scrollTop = (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop) + 5;
            if (scrollTop < $('.index-title').eq(0).offset().top - 80) {
                $('.index-right-float li a').removeClass('active');
            } else if (scrollTop < $('.index-rank').eq(0).offset().top - 80) {
                $('.index-right-float li a').removeClass('active');
                $('.index-right-float li a').eq(0).addClass('active');
            } else if (scrollTop < $('.index-title').eq(1).offset().top - 80) {
                $('.index-right-float li a').removeClass('active');
                $('.index-right-float li a').eq(1).addClass('active');
            } else if (scrollTop < $('.index-title').eq(2).offset().top - 80) {
                $('.index-right-float li a').removeClass('active');
                $('.index-right-float li a').eq(2).addClass('active');
            } else if (scrollTop < $('.box-header').eq(0).offset().top - 80) {
                $('.index-right-float li a').removeClass('active');
                $('.index-right-float li a').eq(3).addClass('active');
            } else if (scrollTop < $('.index-title').eq(3).offset().top - 80) {
                $('.index-right-float li a').removeClass('active');
                $('.index-right-float li a').eq(4).addClass('active');
            } else if (scrollTop < $('.box-header').eq(1).offset().top - 80) {
                $('.index-right-float li a').removeClass('active');
                $('.index-right-float li a').eq(5).addClass('active');
            } else if (scrollTop < $('.index-title').eq(4).offset().top - 80) {
                $('.index-right-float li a').removeClass('active');
                $('.index-right-float li a').eq(6).addClass('active');
            } else if (scrollTop < $('.index-title').eq(5).offset().top - 80) {
                $('.index-right-float li a').removeClass('active');
                $('.index-right-float li a').eq(7).addClass('active');
            } else {
                $('.index-right-float li a').removeClass('active');
                $('.index-right-float li a').eq(8).addClass('active');
            }
        });
    });

    function titleSelect(item, className, id) {
        $(item).parents('.index-title-select').find('a').removeClass('active');
        $(item).addClass('active');
        $('.' + className).hide();
        $('#' + id).show();
        var url;
        if ($(item).parents('.index-title-select').find('a').index(item) === 2) {
            url = '/manhua-list-pay2-s18/';
        } else {
            url = '/manhua-list-pay2/';
        }
        $(item).parents('.index-title-select').next().attr('href', url);
    }

    function titleUpdateSelect(item, className, id, dk) {
        $(item).parents('.index-title-select').find('a').removeClass('active');
        $(item).addClass('active');
        $('.' + className).hide();
        $('#' + id).show();
        var url;
        if (dk === 0) {
            url = '/manhua-new/';
        } else {
            url = '/manhua-new/?dk=' + dk;
        }
        $(item).parents('.index-title-select').next().attr('href', url);
    }

    var DM5_RANKCATEGORYID = 0;
    var DM5_RANKUSERGROUP = 0;
    var DM5_RANKCOPYRIGHT = 0;
    var DM5_RANKSORT = 8;

    function getRankList(self, cgid, usergroup, sort, iscopyright, top) {
        DM5_RANKCATEGORYID = cgid;
        DM5_RANKUSERGROUP = usergroup;
        DM5_RANKCOPYRIGHT = iscopyright;
        DM5_RANKSORT = sort;
        if ($(self).parents('.right').length > 0) {
            $(self).parents('.right').find('a.color-main').removeClass('color-main');
            $(self).addClass('color-main');
        } else {
            $(self).parents('.left-list').find('li.active').removeClass('active');
            $(self).parents('li').addClass('active');
        }
        $('.index-rank-bar .rank').hide();
        var $tip = $('.index-rank-bar .tip');
        $tip.show();
        var $rank = $('#rank_' + cgid + '_' + usergroup + '_' + iscopyright + '_' + sort);
        if ($rank && $rank.length > 0) {
            $rank.show();
            $tip.hide();
        } else {
            $.ajax({
                url: 'dm5.ashx?action=getweektopcomics&d=' + new Date(),
                dataType: 'json',
                data: {cgid: cgid, usergroup: usergroup, iscopyright: iscopyright, sort: sort, top: top},
                type: 'POST',
                success: function (data) {
                    if (data && data.length > 0) {
                        var len = data.length % 10 === 0 ? parseInt(data.length / 10) : parseInt(data.length / 10) + 1;
                        $('.index-rank-bar .container').append('<div class=\'rank\' id=\'rank_' + cgid + '_' + usergroup + '_' + iscopyright + '_' + sort + '\' style=\'display:none;\'></div>');
                        $rank = $('#rank_' + cgid + '_' + usergroup + '_' + iscopyright + '_' + sort);
                        if ($rank.children('ul').length === 0) {
                            for (var l = 0; l < len; l++) {
                                $rank.append('<ul class=\'right-list\'></ul>');
                            }
                        }
                        for (var i = 0; i < len; i++) {
                            var str = '';
                            for (var j = 0; j < 10; j++) {
                                str += '<li><a href="/' + data[((i * 10) + j)].UrlKey + '/" title="' + data[((i * 10) + j)].Title + '" ><div class="sign"><span class="top-' + ((i * 10) + j + 1) + '">' + ((i * 10) + j + 1) + '</span></div>' + data[((i * 10) + j)].Title + '</a></li>';
                            }
                            $rank.children('.right-list').eq(i).html(str);
                        }
                        $('.index-rank-bar .rank').hide();
                        $tip.hide();
                        $rank.show();
                    }
                    isload = false;
                }
            });
        }
    }        </script>
</body>
</html>
