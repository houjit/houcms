@extends('layouts.app')
@section('content')
<section class="mainTop clearfix">
    <header class="clearfix">
        <figure class="logo"> <a href="/"><img src="{{ asset('index/index/images/img/logo.png')}}" alt="上海网站建设"/></a></figure>
        <menu class="topMenu">
            <a href="//service.houjit.com"><i>&nbsp;</i>解决方案</a>
            <a href="/cloudwebsite"><i>&nbsp;</i>云建站</a>
            <a href="#" id="nav_pro">
                <i>&nbsp;</i>产品
                <span style="display: none;">
                    <span onclick="javascript:window.open('//shop.houapi.com'),'_blank'" class="open_shop">多商户商城</span>
                    <span onclick="javascript:window.open('//scar.houapi.com'),'_blank'" class="open_scar">二手车系统</span>
                </span>
            </a>
            <a href="/seo"><i>&nbsp;</i>营销推广</a>
            <a href="//itlibs.houjit.com"><i>&nbsp;</i>技术社区</a>
            <a href="/us"><i>&nbsp;</i>我们</a>
        </menu>
    </header>
    <div class="scrollBar">
        <div id="Banner" class="banner">
            <ul>
                <li class="curs">
                    <video id="BANVIDEO" loop="loop" autoplay="autoplay" src="{{ asset('index/index/images/swf/mov1.mp4') }}"></video>
                    <div class="imgTimes" style="background: url({{ asset('index/index/images/banner1.png') }}) 0% 0% / auto 100% rgba(0, 0, 0, 0.4); width: 1034px;">
                        <article>
                            <div class="banTops">
                                <em><img src="{{ asset('index/index/images/w1.png') }}"></em>
                                <small><img src="{{ asset('index/index/images/q.png') }}"></small>
                                <em><img src="{{ asset('index/index/images/w2.png') }}"></em>
                            </div>
                            <div class="banText">
                                <i></i>
                                <span>
		   	   	 	 	   	  	 	  <font>自极速建站2004年创立以来，始终专注高端网站建设服务。</font>
		   	   	 	 	   	  	 </span>
                            </div>
                        </article>
                    </div>
                </li><li class="curs">
                    <video id="BANVIDEO" loop="loop" autoplay="autoplay" src="{{ asset('index/index/images/swf/mov1.mp4') }}"></video>
                    <div class="imgTimes" style="background: url({{ asset('index/index/images/banner2.png') }}) 0% 0% / auto 100% rgba(0, 0, 0, 0.4); width: 1034px;">
                        <article>
                            <div class="banTops">
                                <em><img src="{{ asset('index/index/images/w3.png') }}"></em>
                                <small><img src="{{ asset('index/index/images/q.png') }}"></small>
                                <em><img src="{{ asset('index/index/images/w4.png') }}"></em>
                            </div>
                            <div class="banText">
                                <i></i>
                                <span>
		   	   	 	 	   	  	 	  <font>坚持以设计为网站建设核心点，并擅长于此！初衷从未改变。</font>
		   	   	 	 	   	  	 </span>
                            </div>
                        </article>
                    </div>
                </li>
                <li class="curs visb">
                    <video id="BANVIDEO" loop="loop" autoplay="autoplay" src="{{ asset('index/index/images/swf/mov1.mp4') }}"></video>
                    <div class="imgTimes" style="background: url({{ asset('index/index/images/banner3.jpg') }}) 0% 0% / auto 100% rgba(0, 0, 0, 0.4); width: 1034px;">
                        <article>
                            <div class="banTops">
                                <em><img src="{{ asset('index/index/images/w5.png') }}"></em>
                                <small><img src="{{ asset('index/index/images/q.png') }}"></small>
                                <em><img src="{{ asset('index/index/images/w6.png') }}"></em>
                            </div>
                            <div class="banText">
                                <i></i>
                                <span>
		   	   	 	 	   	  	 	  <font>摒弃虚浮，唾弃虚伪，以真实作品与专业能力赢得客户信赖。</font>
		   	   	 	 	   	  	 </span>
                            </div>
                        </article>
                    </div>
                </li>
            </ul>
        </div>
        <div class="index-waper-box">
            <div class="index-back-box">
                <div class="sub-arrows">
                    <i class="icom prev">
                        <font class="iconfont">&#xe605;</font>
                    </i>
                    <i class="icom next">
                        <font class="iconfont">&#xe607;</font>
                    </i>
                </div>
                <div class="sub-mouse">
                     <span>
                        <svg class="cur-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" height="43" width="30">
                            <g  stroke="black" fill="none">
                                <path fill="none" stroke="#333" stroke-width="2" stroke-miterlimit="10" d="M15,1.224c7.732,0,14,6.268,14,14v12.552 c0,7.732-6.268,14-14,14l0,0c-7.732,0-14-6.268-14-14V15.224C1,7.492,7.268,1.224,15,1.224"></path>
                            </g>
                        </svg>
                        <i class="iconfont">&#xe606;</i>
                     </span>
                </div>
                <div class="sub-share">
                    <div class="tels">
                        <span class="cc1"><img src="{{ asset('index/index/images/img/jt1.png') }}" alt="武汉网站建设电话"/></span>
                        <span class="cc2"><img src="{{ asset('index/index/images/img/dianhua.png') }}" alt="网站建设电话" /></span>
                    </div>
                    <div class="sider-tel">
                        <a title="{dede:global.cfg_tel/}" class="HelveticaNeue">{dede:global.cfg_tel/}</a>
                        <a title="{dede:global.cfg_stel/}" class="HelveticaNeue">{dede:global.cfg_stel/}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="hejun-navBar">
    <div class="bar-logo">
        <svg xmlns="http://www.w3.org/2000/svg" class="menu-svg"><use xlink:href="#icon-logo" style=""></use></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="menu-svg-phone"><use xlink:href="#index-logo-phone" style=""></use></svg>
    </div>
    <div class="bar-menu">
        <i class="bar-top"></i>
        <i class="bar-cen"></i>
        <i class="bar-bom"></i>
        <font class="expros">菜单</font>
    </div>
</div>
<section class="hejun-fixed-menu clearfix">
    <div class="sub-menu-phone" id="sub-menu-phone">
        <ul>
            <li class="index-hrefs on">
                <a href="{dede:global.cfg_basehost/}">
                    <font>首页</font>
                    <small>Home</small>
                </a>
                <aside>
                    <svg xmlns="http://www.w3.org/2000/svg" class="menu-svg">
                        <use xlink:href="#icon-logo" style=""/>
                    </svg>
                    <div class="close-bar">
                        <span class="close-top"></span>
                        <span class="close-bom"></span>
                    </div>
                </aside>
            </li>
            <li><a href="/services"><font>SEO</font><small>解决方案</small></a></li>
            <li><a href="/cloudwebsite"><font>SEO</font><small>云建站</small></a></li>
            <li><a href="/seo"><font>SEO</font><small>营销推广</small></a></li>
            <li><a href="/weblibs"><font>SEO</font><small>技术社区</small></a></li>
            <li><a href="/us"><font>SEO</font><small>我们</small></a></li>
        </ul>
    </div>
</section>
<div id="Scanbar" class="hejun-body-box">
    <section class="hejun-brand clearfix">
        <article class="hejun-waperTit">
            <h2><img src="{{ asset('index/index/images/img/ht1.png') }}" alt="网站建设知名服务品牌"/></h2>
            <p>极速建站以前沿技术使灵动思想完美落地执行，提升网站的广度传播与深度体验</p>
        </article>
        <div class="IndexList">
            <ul>
                <li>
                    <b>
                        <em class="nub">49</em>
                    </b>
                    <span class="pd">年服务经验</span>
                </li>
                <li>
                    <b>
                        <em class="nub">85</em>
                    </b>
                    <span class="pd">家客户选择</span>
                </li>
                <li>
                    <b>
                        <em class="nub">52</em>
                    </b>
                    <span class="pd">项细节标准</span>
                </li>
            </ul>
        </div>
        <div class="bom-line"></div>
    </section>

    <section class="hejun-works clearfix">
        <div class="works-slide">
            <ul class="sub-slides">
                <li class="cur">
                    <div class="contsd">
                        <div class="neis">
                            <div class="imGs"><img src="{{ asset('index/index/images/img/p1.png') }}"  alt="武汉高端网站建设"/></div>
                            <div class="textsz">
                                <h3><img src="{{ asset('index/index/images/img/p3.png') }}" alt="高端网站建设" /></h3>
                                <h4><img src="{{ asset('index/index/images/img/p4.png') }}"  alt="web&html5"/></h4>
                                <p><font>集团上市公司官网及站群</font></p>
                                <p><font>Html5 响应式网站</font></p>
                                <p><font>企业&品牌官网</font></p>
                                <p><font>营销策略型网站</font></p>
                                <p><font>电商视觉设计</font></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="contsd">
                        <div class="neis">
                            <div class="textsz">
                                <h3><img src="{{ asset('index/index/images/img/p5.png') }}" alt="网站建设移动端与微信" /></h3>
                                <h4><img src="{{ asset('index/index/images/img/p6.png') }}" alt="网站建设移动端与微信"/></h4>
                                <p><font>手机网站 / 微官网</font></p>
                                <p><font>微信小程序 / 微专题 / 微传单</font></p>
                                <p><font>UI / UX 设计</font></p>
                                <p><font>公众号托管运维</font></p>
                            </div>
                            <div class="imGs"><img src="{{ asset('index/index/images/img/p2.png') }}" alt="移动端网站建设" /></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="contsd">
                        <div class="neis">
                            <div class="textsz">
                                <h3><img src="{{ asset('index/index/images/img/p7.png') }}" alt="企业年度运维"/></h3>
                                <h4><img src="{{ asset('index/index/images/img/p8.png') }}" alt="企业年度运维"/></h4>
                                <p><font>网站深度运维服务托管</font><font>商业拍摄、全景拍摄、VR虚拟现实</font></p>
                                <p><font>搜索引擎SEO优化</font><font>PPT、年报、演示文档、电子文档设计</font></p>
                                <p><font>大客户企业邮箱服务</font><font>互联网营销、社会化营销</font></p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="words-slide">
            <ul>
                <li class="cues">
                    <i></i>
                    <span>01</span>
                    <font>高端网站建设</font>
                </li>
                <li>
                    <i></i>
                    <span>02</span>
                    <font>移动端与微信</font>
                </li>
                <li>
                    <i></i>
                    <span>03</span>
                    <font>企业年度运维</font>
                </li>
            </ul>
        </div>
    </section>

    <section class="hejun-collection clearfix">
        <div class="collbgs">
            <aside class="hejun-waper-tits hejun-waper-tits3">
                <span><img src="{{ asset('index/index/images/img/zp1.png') }}" alt="武汉网站建设作品"/></span>
                <small>
                    <font><a href="/" style="color:#fff;" target="_blank">all.</a></font>
                    <i></i>
                    <a href="/" style="color:#fff;" target="_blank">our works</a>
                </small>
                <strong><img src="{{ asset('index/index/images/img/zp2.png') }}" alt="武汉网站制作作品"/></strong>
            </aside>
        </div>
        <div class="hejun-collumns">
            <div class="slider-waper">
                <ul>
                    <li  class="curs">
                        <article>
                            <a href="/" target="_blank"><img src="/uploads/170609/1-1F60Z20249591.jpg" alt="万科链家"/></a>
                        </article>
                    </li>
                    <li  class="curs">
                        <article>
                            <a href="/" target="_blank"><img src="/uploads/170609/1-1F60Z15TYT.jpg" alt="建投华科"/></a>
                        </article>
                    </li>
                    <li  class="curs">
                        <article>
                            <a href="/" target="_blank"><img src="/uploads/170609/1-1F60Z15410B9.jpg" alt="美满电子"/></a>
                        </article>
                    </li>
                    <li  class="curs">
                        <article>
                            <a href="/" target="_blank"><img src="/uploads/170609/1-1F60Z1452Aa.jpg" alt="天神娱乐集团"/></a>
                        </article>
                    </li>
                    <li  class="curs">
                        <article>
                            <a href="/" target="_blank"><img src="/uploads/170609/1-1F60Z1351Q21.jpg" alt="睿晟广告"/></a>
                        </article>
                    </li>
                    <li  class="curs">
                        <article>
                            <a href="/" target="_blank"><img src="/uploads/170609/1-1F60Z123123C.jpg" alt="顶峰影业"/></a>
                        </article>
                    </li>
                </ul>
            </div>
            <div class="slider-remote">
                <div id="Textbox" class="top-textg hashtag-recever">
                    <ul>
                        <li class="fad">
                            <span class="tits">万科链家</span>
                            <span class="row">#装饰、装修设计品牌机构</span>
                            <span class="row">#简约、大气</span>
                        </li>

                        <li class="fad">
                            <span class="tits">建投华科</span>
                            <span class="row">#国企、建投旗下投资公司</span>
                            <span class="row">#沉稳、内敛</span>
                        </li>

                        <li class="fad">
                            <span class="tits">美满电子</span>
                            <span class="row">#国际知名电子元器件品牌</span>
                            <span class="row">#科技感、简约</span>
                        </li>

                        <li class="fad">
                            <span class="tits">天神娱乐集团</span>
                            <span class="row">#游戏娱乐、上市集团公司</span>
                            <span class="row">#亲和力、多彩</span>
                        </li>

                        <li class="fad">
                            <span class="tits">睿晟广告</span>
                            <span class="row">#广告创意执行机构</span>
                            <span class="row">#响应式、简约</span>
                        </li>

                        <li class="fad">
                            <span class="tits">顶峰影业</span>
                            <span class="row">#影视发行制作上市公司</span>
                            <span class="row">#响应式、深邃</span>
                        </li>
                    </ul>
                </div>
                <div class="bom-number">
                    <div class="nei">
                        <div class="countr">
                            <span class="jur">01</span>
                            <i>/</i>
                            <span class="total">&nbsp;</span>
                        </div>
                        <div class="sum">
                            <a class="prve iconfont">&#xe605;</a>
                            <div class="lines">
                                <div class="nline"></div>
                            </div>
                            <a class="next iconfont">&#xe607;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hejun-newsList clearfix">
        <aside class="hejun-waper-tits hejun-waper-tits1">
            <span><img src="{{ asset('index/index/images/img/zp3.png') }}" alt="武汉网站建设新闻"/></span>
            <small>
                <font><a href="/newss/" style="color:#000;" target="_blank">all.</a></font>
                <i></i>
                <font><a href="/newss/" style="color:#000;" target="_blank">our news</a></font>
            </small>
            <strong><img src="{{ asset('index/index/images/img/zp4.png') }}" alt="武汉网站制作新闻"/></strong>
        </aside>

        <div class="centerbox">
            <div class="lft-news">
                <div class="topYear"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={dede:global.qq/}&site=qq&menu=yes">
                        <ul>
                            <li><img src="{{ asset('index/index/images/img/zi1.png') }}" alt="网站建设时间"/></li>
                            <li class="bigs"><img src="{{ asset('index/index/images/img/zi2.png') }}" alt="网站建设时间"/></li>
                        </ul>
                        <h4><img src="{{ asset('index/index/images/img/zi4.png') }}" alt="助力企业发展迎接未来"/></h4>
                        <h3><img src="{{ asset('index/index/images/img/zi3.png') }}" alt="网站建设优惠活动" /></h3>
                    </a>
                </div>
                <div class="bomtext">
                    <aside>
                        <span><img src="{{ asset('index/index/images/img/indexr.png') }}" alt="上海网站建设技术交流" /></span>
                        <font>
                            <a href="/" target="_blank"><strong>知识库</strong></a>：
                            <a href="/a/news/knowledge/9.html" style="color:#000" target="_blank">网站如何做？哪些事项需注意？</a>
                        </font>
                    </aside>
                    <h5>
                        <a href="/" target="_blank"><strong>知识库</strong></a>：
                        <a href="/a/news/outside/15.html" style="color:#000" target="_blank">northeast</a>
                    </h5>
                </div>
            </div>
            <div class="rit-news">
                <article>
                    <time>
                        <img src="{{ asset('index/index/images/img/indexr.png') }}" alt="做个网站需要多少钱？"/>
                        <font>2017/07/16</font>
                    </time>
                    <h3>
                        <i></i>
                        <a href="/a/news/7.html" target="_blank">做个网站需要多少钱？</a>
                    </h3>
                    <p>做个网站多少钱? 很多客户第一句话就是这样咨询我们，可能他们第一关注的是价格，其次是价值。每个准备做网站的企业客</p>
                </article>

                <article>
                    <time>
                        <img src="{{ asset('index/index/images/img/indexr.png') }}" alt="网页制作页面太长的弊端"/>
                        <font>2017/05/27</font>
                    </time>
                    <h3>
                        <i></i>
                        <a href="/" target="_blank">网页制作页面太长的弊端</a>
                    </h3>
                    <p><p>很多企业网站，尤其是招商加盟的企业网站，把首页制作很长，企业简介、荣誉资质、加盟优势，产品展示、各种新闻动态都</p>
                </article>
                <div class="more">
                    <a href="/" target="_blank">
                        <font><i>MORE</i></font>
                        <img src="{{ asset('index/index/images/img/zp6.png') }}" alt="查看更多"/>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="hejun-about clearfix">
        <aside class="hejun-waper-tits hejun-waper-tits2">
            <small>
                <font><a href="/" target="_blank">about.</a></font>
                <i></i>
                <font><a href="/" target="_blank">Web design</a></font>
            </small>
            <strong><img src="{{ asset('index/index/images/img/zp5.png') }}" alt="关于我们" /></strong>
        </aside>
        <div class="videobox">
            <div class="videbg"></div>
            <video id="video-bgs" autoplay="autoplay" loop="loop" src="{{ asset('index/index/images/swf/mov1.mp4') }}"></video>
        </div>
        <div class="example">
            <ul>
                <li><img src="{{ asset('index/index/images/img/sj3.png') }}" alt="关于我们"/></li>
                <li><img src="{{ asset('index/index/images/img/sj4.png') }}" alt="2014年成立于武汉"/></li>
                <li><img src="{{ asset('index/index/images/img/sj6.png') }}" alt="以设计为核心能力"/></li>
                <li><img src="{{ asset('index/index/images/img/sj5.png') }}" alt="全程化一体化服务"/></li>
                <li><img src="{{ asset('index/index/images/img/sj1.png') }}" alt="技术实力不凡"/></li>
                <li><img src="{{ asset('index/index/images/img/sj2.png') }}" alt="280项项目标准"/></li>
            </ul>
        </div>
        <div class="waperSlide">
            <div class="slide-wrap">
                <ul>
                    <li>
                        <article class="imgs"><img src="{{ asset('index/index/images/img/ban_zi3.png') }}" alt="网站建设简介"/></article>
                    </li>
                    <li>
                        <article class="imgs"><img src="{{ asset('index/index/images/img/ban_zi2.png') }}" alt="网站制作简介"/></article>
                    </li>
                    <li>
                        <article class="imgs"><img src="{{ asset('index/index/images/img/ban_zi1.png') }}" alt="网站设计简介"/></article>
                    </li>
                </ul>
            </div>
            <div class="slide-line">
                <i class="on"></i>
                <i></i>
                <i></i>
            </div>
        </div>
        <div class="hejun-morebox">
            <a href="{dede:type typeid='3'}[field:typelink/]{/dede:type}" target="_blank">
                <i></i>
                <img src="{{ asset('index/index/images/img/morer.png') }}" alt="更多"/>
            </a>
        </div>
    </section>
    <section class="hejun-contact clearfix">
        <div class="contentbox">
            <div class="sub-conts">
                <div class="bigbox">
                    <div class="different">
                        <img src="{{ asset('index/index/images/img/js2.png') }}" alt="极速建站很是不同"/>
                    </div>
                </div>

                <article class="sub-conText">
                    <h2>多一份参考，总有益处。</h2>
                    <h3><img src="{{ asset('index/index/images/img/c1.png') }}" alt="联系网站建设"/></h3>
                    <div class="tel">
                        <aside>
                            <p>咨询相关问题或预约面谈，可以通过以下方式与我们联系。</p>
                            <div class="nubgs">
                                <span class="sp1"><i>{dede:global.cfg_tel/} / {dede:global.cfg_stel/}</i></span>
                                <span class="sp2"><i>{dede:global.cfg_tel/} / {dede:global.cfg_stel/}</i></span>
                            </div>
                        </aside>
                        <div class="QQuser">
                            <font>
                                <em><img src="{{ asset('index/index/images/img/leftqq.png') }}" alt="联系网站建设"/></em>
                                <i><img src="{{ asset('index/index/images/img/leftqq2.png') }}" alt="联系网站建设"/></i>
                            </font>
                            <a href="http://wpa.qq.com/msgrd?v=3&uin={dede:global.qq/}&site=qq&menu=yes" target="_blank">在线咨询</a>
                        </div>
                    </div>
                    <div class="countacti">
                        <a href="/" target="_blank">
                            <font>Countact.</font>
                            <small></small>
                        </a>
                    </div>
                </article>
                <div class="bookmarks"><img src="{{ asset('index/index/images/img/js1.png') }}" alt="极速建站"/></div>
            </div>
        </div>
    </section>
</div>
@endsection
