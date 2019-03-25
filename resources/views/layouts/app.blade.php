<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF Token -->
<title>{{ config('app.name', '做网站_网站建设_上海做网站公司_专业上海网站制作_seo网站优化') }}</title>
<meta name="generator" content="做网站,上海做网站,上海做网站公司,做网站公司,网站建设,上海网站建设,网站制作,上海网站制作,手机网站建设,网站制作公司,微网站建设，企业网站建设，微官网，网站设计,上海网站设计,网站建设公司,seo优化,上海seo优化,网站推广,上海网站推广,网站建设公司,上海网站建设公司">
<meta name=keywords content="做网站,上海做网站,上海做网站公司,做网站公司,网站建设,上海网站建设,网站制作,上海网站制作,手机网站建设,网站制作公司,微网站建设，企业网站建设，微官网，网站设计,上海网站设计,网站建设公司,seo优化,上海seo优化,网站推广,上海网站推广,网站建设公司,上海网站建设公司">
<meta name="description" content="上海知名做网站公司,10年专业做网站建设服务,为企业提供网站建设,响应式,自适应网站设计,手机网站建设,微网站建设(微官网),网站制作,网站推广,seo网站优化等优质服务.">
<link rel="stylesheet" type="text/css" href="{{ asset('index/index/css/font.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('index/index/css/base.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('index/index/css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('index/index/css/responsive.css') }}" />
<script type="text/javascript" src="{{ asset('index/index/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('index/index/js/common.js') }}"></script>
<!--[if lt IE 9 ]>
<script type="text/javascript" src="{{ asset('index/index/js/html5shiv.js') }}"></script>
<![endif]-->
</head>
<body class="layui-bg-gray">
<div id="app">
    <div id="svg-sprite" style="display: none">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol viewBox="0 0 1024 1024" id="icon-logo">
                <path d="M98.5 438.7l386.9 192.2c8.4 4.2 17.6 6.3 26.7 6.3 9.1 0 18.2-2.1 26.6-6.2l388.1-191.7c20.4-10.1 33.4-30.9 33.4-53.7 0-22.8-12.8-43.6-33.3-53.8L538.1 138.1c-8.4-4.2-17.6-6.3-26.7-6.3-9.2 0-18.4 2.1-26.8 6.3L98.4 331.3c-20.3 10.2-33.2 31-33.2 53.7 0 22.8 12.9 43.5 33.3 53.7z m412.8-246.9l388.8 193.7-388 191.6-386.9-192.2 386.1-193.1z" p-id="4604"></path><path d="M79.1 541.4L498 763.6c4.4 2.3 9.2 3.5 14.1 3.5 4.8 0 9.6-1.2 14-3.5L945.2 542c14.6-7.7 20.2-25.9 12.5-40.5-7.7-14.6-25.9-20.2-40.5-12.5l-405 214.2-404.9-214.8c-14.6-7.8-32.8-2.2-40.6 12.4-7.8 14.7-2.2 32.9 12.4 40.6z" p-id="4605"></path><path d="M915.9 614.1L512.1 833 109.6 613.6c-14.5-7.9-32.8-2.6-40.7 12-7.9 14.5-2.6 32.8 12 40.7l416.9 227.2c4.5 2.4 9.4 3.7 14.4 3.7 4.9 0 9.8-1.2 14.3-3.6l418.1-226.7c14.6-7.9 20-26.1 12.1-40.7s-26.3-20-40.8-12.1z" p-id="4606"></path>
            </symbol>
            <symbol viewBox='0 0 175 50' id='index-logo'>
                <image xlink:href="{{ asset('index/index/images/img/logo.png') }}" x="0" y="0" height="50" width="175"/>
            </symbol>
            <symbol viewBox='0 0 175 50' id='index-logo-phone'>
                <image xlink:href="{{ asset('index/index/images/img/logo-phone.png') }}" x="0" y="0" height="50" width="175"/>
            </symbol>
            <symbol viewBox="0 0 16 16" id="rz3-icon-chevron-right">
                <path d="M11.56 7.996l-5.707-5.7L4.44 3.712 8.73 8l-4.29 4.29 1.413 1.413 5.354-5.345.35-.358"/>
            </symbol>
            <symbol viewBox="0 0 16 16" id="rz3-icon-chevron-left">
                <path d="M11.56 3.71l-1.413-1.413-5.354 5.345-.35.358-.004.004 5.707 5.7 1.414-1.415L7.273 8"/>
            </symbol>
            <symbol viewBox="0 0 16 16" id="rz3-icon-arrow-up-right">
                <path d="M10 7V3l5 5-5 5V9H3v5H1V7"/>
            </symbol>
            <symbol viewBox="0 0 18 18" id="rz3-icon-arrow-up">
                <path d="M9 1L5 6h3v11h2V6h3"/>
            </symbol>
            <symbol id='icon-banners-border' viewBox="0 0 580 230">
                <path d="M290 0 580 0 580 230 0 230 0 0 Z"></path>
            </symbol>
            <symbol viewBox="0 0 18 18" id="rz3-icon-arrow-up">
                <path d="M9 1L5 6h3v11h2V6h3"/>
            </symbol>
        </svg>
    </div>
    <div class="hejun-body-bg"></div>
    <main>@yield('content')</main> <!-- main -->
    <div class="liBottom"></div>
    <footer>
        <div class="box">
            <div class="address">
                <div class="left"><img src="{{ asset('index/images/icon/footerimg.png') }}" alt="footerimg"/></div>
                <div class="Content">
                    <span><i>公众号：厚匠网络</i><br />021-88457451 17612115819 <br />amos@houjit.com</span>
                    <span>上海市浦东新区江晖路436弄 <br />{dede:global.cfg_postcode/}</span>
                    <span>厚匠科技 版权所有</span>
                </div>
            </div>
            <div class="friendship">
                <div class="title">
                    <span></span>
                    <a href="tencent://message/?uin=447107108&Site=qq&Menu=yes" target="_blank" style="color:#000">交换友情链接</a></div>
                <div class="Content">
                    <a href="https://www.ntxhrq.com" target="_blank">托盘批发</a>
            </div>
        </div>
    </footer>
    <div class="myTop">
        <a class="myPhone" href="javascript:void(0);"><p>17612115819&nbsp;&nbsp;&nbsp;&nbsp;023-88114780</p></a>
        <a class="myQQ" href="http://wpa.qq.com/msgrd?v=3&uin=447107108&site=qq&menu=yes" target="_blank"></a>
        <a class="myweixin" href="javascript:void(0);">
            <img src="{{ asset('index/images/weixinzixun.png') }}" alt="" />
        </a>
        <div class="GoTop">
            <svg xmlns="http://www.w3.org/2000/svg" class="menu-svg" >
                <use xlink:href="#rz3-icon-arrow-up" style=""></use>
            </svg>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#nav_pro").mouseout(function(){
            $("#nav_pro span").css('display','none');
        }).mouseover(function(){
            $("#nav_pro span").css('display','block');
        });
    });
</script>
</body>
</html>
