<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=yes">
<link href="/favicon.ico" rel="shortcut icon"/>
<title>关于我们 - <?php echo ($sitename); ?> - 支付技术服务商，让支付简单、专业、快捷！</title>
<link rel="stylesheet" href="<?php echo ($style); ?>css/qietu.css">
<link rel="stylesheet" type="text/css" href="<?php echo ($style); ?>css/iconfont.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo ($style); ?>css/animate.min.css"/>
<link rel="stylesheet" href="<?php echo ($style); ?>css/style.css">
<link rel="stylesheet" href="<?php echo ($style); ?>css/responsive.css">
</head>

<body>
<div class="header  bj-3d7bf8">
    <div class="wrapper">
        <div class="logo">
            <a href="index.html"><img src="<?php echo ($logo); ?>"/></a>
        </div>
        <div class="nav-wrap">
            <div class="nav">
                <ul>
                    <li class="home_index">
                        <strong><a href="/">首页 </a></strong>
                    </li>
                    <li>
                        <strong><a href="#">产品中心<i class="iconfont icon-jiantou8"></i></a></strong>
                        <dl>
                            <dd><a href="<?php echo ($products); ?>#pro1">聚合收款</a></dd>
                            <dd><a href="<?php echo ($products); ?>#pro2">子商户系统</a></dd>
                            <dd><a href="<?php echo ($products); ?>#pro3">代付系统</a></dd>
                            <dd><a href="<?php echo ($products); ?>#pro4">二维码支付</a></dd>
                        </dl>
                    </li>
                    <!-- <li>
                        <strong><a href="/home/index/help.html">帮助中心</a></strong>
                    </li> -->
                    <li >
                        <strong><a href="#">开发者中心<i class="iconfont icon-jiantou8"></i></a></strong>
                        <dl>
                           <dd><a href="/demo">DEMO体验</a></dd>
                            <dd><a href="<?php echo ($document); ?>">API开发文档</a></dd>
                            <dd><a href="<?php echo ($sdk); ?>">SDK下载</a></dd>
                        </dl>
                    </li>
                    <!---->
              <li>
                        <strong><a href="#">业务登陆<i class="iconfont icon-jiantou8"></i></a></strong>
                        <dl>
                           <dd><a href="<?php echo ($user_login); ?>">商户登录</a></dd>
                            <dd><a href="<?php echo ($agent_login); ?>">代理登陆</a></dd>
                        </dl>

                   </li>
                </ul>
            </div>
            <div class="btns">
                <ul>       
                 
                        <li class=" reg"><a href="<?php echo ($register); ?>">商户注册</a></li>
                                    </ul>
            </div>
        </div>
        <div class="gh"><a href="#"></a></div>
    </div>
</div>
<div class="banner">
    <div class="wrapper">
        <h2 class="wow fadeInUp">关于我们</h2>
        <p class="wow fadeInUp" data-wow-delay='.5s'>-ABOUT US-</p>
    </div>
</div>
<div class="contact">
    <div class="wrapper">
        <div class="contact-hd g-hd" id="about2">
            <h2 class="wow fadeInUp">联系我们</h2>
            <p class="wow fadeInUp" data-wow-delay='.4s'>-contactus-</p>
        </div>
        <div class="contact-bd">
            <div class="wow fadeInLeft txt">
                <h2 class="line-27"><?php echo ($sitename); ?></h2>
                <ul>
                    <li>
                        <span><i class="iconfont icon-qq"></i>企业QQ ：</span>
                      <?php echo ($qq); ?>
                    </li>
                    <li>
                        <span><i class="iconfont icon-qq"></i>客服QQ ：</span>
                     <?php echo ($qq); ?>
                    </li>
                    <li>
                        <span><i class="iconfont icon-msnui-telephone"></i>咨询热线： </span>
                        400-8888-8888
                    </li>
                    <li>
                        <span><i class="iconfont icon-htmal5icon05"></i>联系邮箱：</span>
                        info@pay.com
                    </li>
                    <li>
                        <span><i class="iconfont icon-dizhi"></i>公司地址：</span>
                        广州海珠区新港东路1888号<br/>
                        中洲交易中心
                    </li>
                </ul>
            </div>
            <div class="wow fadeInRight img">
                <img src="<?php echo ($style); ?>picture/img_26.jpg"/>
            </div>
        </div>
    </div>

</div>


<div class="channel">
    <div class="wrapper">
        <div class="channel-hd g-hd" id="about3">
            <h2 class="wow fadeInUp">支付公司合作</h2>
            <p class="wow fadeInUp" data-wow-delay='.5s'>-Channel cooperation-</p>
        </div>
        <div class="channel-bd g-bd">
            <div class="wow fadeInRight txt">
                <h2 class="line-27">支付公司合作敬请联系客服人员</h2>
                <p><?php echo ($sitename); ?> 是国内领先的支付技术解决方案服务商，致力于帮助企业最低成本接入一套优雅、可靠的支付系统，并以可视化的数据辅助其完成商业决策。</p>
                <a class="g-btn btn" href="javascript:openKefuLink();">立即联系</a>
            </div>
            <div class="wow fadeInLeft img">
                <img src="<?php echo ($style); ?>picture/img_27.png"/>
            </div>
        </div>
    </div>
</div>
<div class="traffic">
    <div class="wrapper">
        <div class="traffic-hd g-hd " id="about4">
            <h2 class="wow fadeInUp">流量合作</h2>
            <p class="wow fadeInUp" data-wow-delay='.5s'>-Traffic cooperation-</p>
        </div>
        <div class="traffic-bd clear g-bd">
            <div class="wow fadeInLeft txt">
                <h2 class="line-27">支付流量合作敬请联系客服人员</h2>
                <p><?php echo ($sitename); ?> 提供支付接口代申请服务，并且将支付接口的数据，延长出最大的价值，辅助每一位商业伙伴解决支付对接问题。</p>
                <a class="g-btn btn" href="javascript:openKefuLink();" target="_blank">联系客服</a>
            </div>
            <div class="wow fadeInRight img">
                <img src="<?php echo ($style); ?>picture/img_28.png"/>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="wrapper">
        <dl class="s">
            <dt>联系我们</dt>
            <dd><a href="#about2">联系方式</a></dd>
            <dd><img src="<?php echo ($logo); ?>" style="width: 120px" /></dd>
        </dl>
        <dl>
            <dt>产品项目</dt>
            <dd><a href="<?php echo ($products); ?>#pro1">聚合收款</a></dd>
            <dd><a href="<?php echo ($products); ?>#pro2">子商户系统</a></dd>
            <dd><a href="<?php echo ($products); ?>#pro3">代付系统</a></dd>
        </dl>
        <dl>
            <dt>关于公司</dt>
            <dd><a href="<?php echo ($about); ?>">关于我们</a></dd>
            <dd><a href="javascript:openKefuLink();">接口合作</a></dd>
            <dd><a href="javascript:openKefuLink();">流量合作</a></dd>
        </dl>
        <dl>
            <dt>开发者</dt>
            <dd><a href="/demo">DEMO体验</a></dd>
            <dd><a href="<?php echo ($document); ?>">API开发文档</a></dd>
            <dd><a href="<?php echo ($sdk); ?>">SDK下载</a></dd>
        </dl>
        <dl class="s">
            <dt>扫一扫</dt>
            <dd><img src="<?php echo ($style); ?>picture/mobile.png" style="width: 109px;"/></dd>
        </dl>
    </div>
</div>
<div class="copyright">
    <div class="wrapper">
        Copyright © 2018 <?php echo ($sitename); ?> All rights reserved. 版权所有
    </div>
</div>

<script type="text/javascript">
function openKefuLink()
{
    window.open("http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($qq); ?>&site=qq&menu=yes",'_blank');
}

</script>

 
<script type="text/javascript" src="<?php echo ($style); ?>js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo ($style); ?>js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo ($style); ?>js/script.js"></script>
<script type="text/javascript">
	$(function() {
	  $('.pro-sys-l li').click(function(){
			$(this).addClass('on').siblings().removeClass('on');
			$('.pro-sys-r').hide().eq($(this).index()).show();
			return false
		})
	})
</script>
</body>
</html>