<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Good Shop | Trang Chủ</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com./css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
    <link href="<?php __SITE_PATH ?>/public/css/test.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php __SITE_PATH ?>/public/css/style.css" rel="stylesheet" type="text/css" media="all" />

    <!-- cho them css-->
    <!--    <link href="<?php __SITE_PATH ?>/public/css/comment.css" rel="stylesheet" type="text./css" media="all" />-->
    <!--    <link rel="stylesheet" href="/bootstrap<?php __SITE_PATH ?>/public/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="./bootstrap/css/paging.css">
    <!-- end cho them-->
    <!--bo cai script nay phia trc lai khac tren layout moi hien thi hinh -->
    <script src="<?php __SITE_PATH ?>/public/js/jquery.min.js" type="text/javascript"></script>

    <!-- start details -->
    <link rel="stylesheet" type="text/css" href="<?php __SITE_PATH ?>/public/css/productviewgallery.css" media="all" />
    <script type="text/javascript" src="<?php __SITE_PATH ?>/public/js/cloud-zoom.1.0.3.min.js"></script>
    <script type="text/javascript" src="<?php __SITE_PATH ?>/public/js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php __SITE_PATH ?>/public/js/productviewgallery.js"></script>
    <!--- start-mmmenu-script---->
    <script src="<?php __SITE_PATH ?>/public/js/jquery.min.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="<?php __SITE_PATH ?>/public/css/jquery.mmenu.all.css" />
    <!-- de cai dong nay trc de khong bị be layout trang index cho thanh truot -->
    <script type="text/javascript" src="<?php __SITE_PATH ?>/public/js/jquery.mmenu.js"></script>
    <script type="text/javascript">
        //	The menu on the left
        $(function() {
            $('nav#menu-left').mmenu();
        });
    </script>
    <!-- start slider -->
    <link href="<?php __SITE_PATH ?>/public/css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="<?php __SITE_PATH ?>/public/js/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="<?php __SITE_PATH ?>/public/js/easing.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#ei-slider').eislideshow({
                animation			: 'center',
                autoplay			: true,
                slideshow_interval	: 3000,
                titlesFactor		: 0
            });
        });
    </script>
    <!-- start top_js_button -->
    <script type="text/javascript" src="<?php __SITE_PATH ?>/public/js/move-top.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>

</head>

<script type="text/javascript" language="javascript">
    function show_alert()
    {
        if(confirm("Bạn có thật sự muốn sữa sản phẩm này không?"))
            return true;

        else
            return false;
    }
</script>
<!--<body onload="show_alert()" -->
<body >
<!-- start header -->
<div class="top_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="/"><img src="<?php __SITE_PATH ?>/public/images/logo.png" alt=""/></a>
            </div>
            <div class="log_reg">
              <ul>
				<li><a href="<?php __SITE_PATH ?>/user/login">Đăng Nhập</a> </li>
				<span class="log"> hoặc </span>
				<li><a href="<?php __SITE_PATH ?>/user/register">Đăng Ký</a> </li>
                  <li><a href="<?php __SITE_PATH ?>/admin">ADMIN</a> </li>
				<div class="clear"></div>
			</ul>
            </div>
            <div class="web_search">
                <form>

                    <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                    <input type="submit" value=" " />

                </form>

            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- start header_btm -->
<div class="wrap">
    <div class="header_btm">
        <div class="menu" id="cssmenu">
          <ul>
				<li class="active"><a href="<?php __SITE_PATH ?>/index">Trang Chủ</a></li>
				<li><a href="<?php __SITE_PATH ?>/product">Sản Phẩm</a></li>
				<li><a href="<?php __SITE_PATH ?>/about">Thông Tin</a></li>
				<li><a href="<?php __SITE_PATH ?>/blog">blog</a></li>
				<li><a href="<?php __SITE_PATH ?>/contact">Liên Hệ</a></li>
				<div class="clear"></div>
			</ul>
        </div>
        <div id="smart_nav">
            <a class="navicon" href="#menu-left"> </a>
        </div>
        <!--<nav id="menu-left">
            <ul>
                <li class="active"><a href="<?php __SITE_PATH ?>/index">Trang Chủ</a></li>
                <li><a href="<?php __SITE_PATH ?>/product">Sản Phẩm</a></li>
                <li><a href="<?php __SITE_PATH ?>/about">Thông Tin</a></li>
                <li><a href="<?php __SITE_PATH ?>/blog">blog</a></li>
                <li><a href="<?php __SITE_PATH ?>/contact">Liên Hệ</a></li>
                <div class="clear"></div>
            </ul>
        </nav> -->
        <div class="header_right">
            <ul>
                <li><a href="#"><i  class="art"></i><span class="color1">30</span></a></li>
                <li><a href="<?php __SITE_PATH?>/shoppingcart"><i  class="cart"></i><span>0</span></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
