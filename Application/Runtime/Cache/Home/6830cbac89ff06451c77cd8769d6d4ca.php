<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php echo (C("XXJZ_DESCRIPTION")); ?>">
  <meta name="keywords" content="<?php echo (C("XXJZ_KEYWORDS")); ?>">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  
  <title><?php echo (C("XXJZ_TITLE")); ?></title>
  
  <!--<script src="/Accounting-page/Public/Home/js/pace.min.js"></script>-->
  <!--<link rel="stylesheet" href="/Accounting-page/Public/Home/css/pace/pace-theme-center-circle.css"/>-->
  <script src="//cdn.bootcss.com/pace/1.0.2/pace.min.js"></script>
  <link href="//cdn.bootcss.com/pace/1.0.2/themes/blue/pace-theme-minimal.css" rel="stylesheet">

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="/Accounting-page/Public/Home/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="/Accounting-page/Public/Home/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="<?php echo (C("XXJZ_TITLE")); ?>"/>
  <link rel="apple-touch-icon-precomposed" href="/Accounting-page/Public/Home/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="/Accounting-page/Public/Home/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel="canonical" href="https://jz.xxgzs.org/">
  -->
  
  <link rel="stylesheet" href="/Accounting-page/Public/Home/css/amazeui.min.css">
  <link rel="stylesheet" href="/Accounting-page/Public/Home/css/app.css">
</head>

<style>
    .am-tabs-secondary .am-tabs-nav{line-height:40px;background-color:#eee}.am-tabs-secondary .am-tabs-nav a{color:#222;line-height:42px}.am-tabs-secondary .am-tabs-nav>.am-active a{background-color:#3bb4f2;color:#fff}
</style>

<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，<?php echo (C("XXJZ_TITLE")); ?>暂不支持。 请升级浏览器以获得更好的体验！</p>
<![endif]-->



  <header data-am-widget="header" style="background-color:#19a7f0"
          class="am-header am-header-default am-header-fixed">
      <div class="am-header-left am-header-nav">
          <a href="/Accounting-page/index.php?s=/Home/User/index" class="">

                <i class="am-header-icon am-icon-user"></i>
          </a>
      </div>

      <h1 data-am-widget="gotop" class="am-header-title">
          <a href="#top" class="">
            <?php echo (C("XXJZ_TITLE")); ?>
          </a>
      </h1>
      
    <div class="am-header-right am-header-nav" data-am-widget="menu" data-am-menu-collapse>
      <div class="am-dropdown" data-am-dropdown="{boundary: '.am-topbar'}">
        <ul class="am-dropdown-toggle">
            <i class="am-header-icon am-icon-reorder" data-am-dropdown-toggle> </i>
        </ul>
        <ul class="am-dropdown-content">
            <li class=""><a href="/Accounting-page/index.php?s=/Home/Chart/index" class="am-icon-pie-chart" > &nbsp;年度统计</a></li>
            <li class="am-divider"></li>
            <li class=""><a href="/Accounting-page/index.php?s=/Home/Funds/index" class="am-icon-credit-card"> &nbsp;资金账户</a></li>
            <li class="am-divider"></li>            
            <li class=""><a href="/Accounting-page/index.php?s=/Home/Class/index" class="am-icon-list-ul"> &nbsp;分类管理</a></li>
            <li class="am-divider"></li>
            <li class=""><a href="/Accounting-page/index.php?s=/Home/User/index" class="am-icon-cog" > &nbsp;设置选项</a></li>
            <li class="am-divider"></li>
            <?php if($PushAdminUrl): ?><!-- <li class=""><a href="/Accounting-page/index.php?s=<?php echo ($PushAdminUrl); ?>" class="am-icon-chain" > &nbsp;推送管理</a></li>
              <li class="am-divider"></li> --><?php endif; ?>
            <li class=""><a href="/Accounting-page/index.php?s=/Home/Login/logout" class="am-icon-sign-out"> &nbsp;退出登录</a></li>
        </ul>
      </div>
    </div>    
  </header>



    <div data-am-widget="tabs" class="am-tabs am-tabs-secondary" >
        <ul class="am-tabs-nav am-cf">
            <?php if($type == 1): ?><li class=""><a href="[data-tab-panel-0]">账号设置</a></li>
                <li class="am-active"><a href="[data-tab-panel-1]">修改密码</a></li>
                <!-- <li class=""><a href="[data-tab-panel-2]">其他设置</a></li> -->
            <?php elseif($type == 2): ?>
                <li class=""><a href="[data-tab-panel-0]">账号设置</a></li>
                <li class=""><a href="[data-tab-panel-1]">修改密码</a></li>
                <!-- <li class="am-active"><a href="[data-tab-panel-2]">其他设置</a></li> -->
            <?php else: ?>
                <li class="am-active"><a href="[data-tab-panel-0]">账号设置</a></li>
                <li class=""><a href="[data-tab-panel-1]">修改密码</a></li>
                <!-- <li class=""><a href="[data-tab-panel-2]">其他设置</a></li> --><?php endif; ?>
        </ul>
        <div class="am-tabs-bd">

            <!-- 账号设置 -->
            <?php if($type == 0): ?><div data-tab-panel-0 class="am-tab-panel am-active">
            <?php else: ?>
                <div data-tab-panel-0 class="am-tab-panel "><?php endif; ?>
                <form class="am-form am-form-horizontal" id="from-msg" method="post" data-am-validator>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>登录账号</b></span>
                        <input type="text" class="am-form-field" id="text-money" name="user_name" placeholder="输入新的登录账号" minlength="2" required/>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>验证邮箱</b></span>
                        <input type="email" class="am-form-field" id="text-mark" name="user_email" placeholder="输入注册时填写的邮箱(<?php echo ($Email); ?>)" required/>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>验证密码</b></span>
                        <input type="password" class="am-form-field" id="text-time" name="user_password" placeholder="输入登录密码" required/>
                    </div>
                    <p><hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" /></p>
                    <p><input type="submit" class="am-btn am-btn-secondary am-btn-block" name="user_submit" value="修改账号"></p>
                    <p><a href="/Accounting-page/index.php?s=/Home/Index/index" class="am-btn am-btn-block am-btn-default">返回</a></p>
                </form>
            </div>

            <!-- 修改密码 -->
            <?php if($type == 1): ?><div data-tab-panel-1 class="am-tab-panel am-active">
            <?php else: ?>
                <div data-tab-panel-1 class="am-tab-panel "><?php endif; ?>
                <form class="am-form am-form-horizontal" id="from-msg" method="post" data-am-validator>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>输入旧密码</b></span>
                        <input type="password" class="am-form-field" id="user-password" name="user_password" placeholder="请输入当前登录密码" required/>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>输入新密码</b></span>
                        <input type="password" class="am-form-field" id="user-password-1" name="user_password_new" placeholder="请输入新密码" minlength="6" required/>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>确认新密码</b></span>
                        <input type="password" class="am-form-field" id="user-password-2" name="user_password_new2" placeholder="再次输入新密码" data-equal-to="#user-password-1" required/>
                    </div>
                    <p><hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" /></p>
                    <p><input type="submit" class="am-btn am-btn-success am-btn-block" name="user_submit" value="修改密码"></p>
                    <p><a href="/Accounting-page/index.php?s=/Home/Index/index" class="am-btn am-btn-block am-btn-default">返回</a></p>
                </form>
            </div>
        </div>
    </div>

  <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default" style="height: 60px;    line-height: 60px;">
      <ul class="am-navbar-nav am-cf am-avg-sm-4" style="background-color:#19a7f0">
          <li >
            <a href="/Accounting-page/index.php?s=/Home/Index/index" class="">
                <span class="am-icon-home am-icon-sm"></span>
                <span class="am-navbar-label">主页</span>
            </a>
          </li>
          <li >
            <a href="/Accounting-page/index.php?s=/Home/Add/index" class="">
                <span class="am-icon-plus-square am-icon-sm"></span>
                <span class="am-navbar-label">记账</span>
            </a>
          </li>
          <li >
            <a href="/Accounting-page/index.php?s=/Home/Find/index" class="">
                <span class="am-icon-search am-icon-sm"></span>
                <span class="am-navbar-label">查询</span>
            </a>
          </li>
      </ul>
  </div>


<footer class="am-margin-top">
<!--   <hr/>
  <p class="am-text-center">
    <small>由小歆工作室提供</small>
  </p> -->
</footer>
<!-- 以上页面内容 开发时删除 -->

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Accounting-page/Public/Home/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<script src="/Accounting-page/Public/Home/js/function.min.js"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Accounting-page/Public/Home/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/Accounting-page/Public/Home/js/amazeui.min.js"></script>

<script type="text/javascript">
$(function(){
    var div_money_arr = document.getElementsByClassName('money-format');
    for (var i = 0; i < div_money_arr.length; i++) {
        div_money_arr[i].innerText= number_format(div_money_arr[i].innerText,<?php echo (C("MONEY_FORMAT_DECIMALS")); ?>,'<?php echo (C("MONEY_FORMAT_POINT")); ?>','<?php echo (C("MONEY_FORMAT_THOUSANDS")); ?>');
    }
});
</script>




</body>
</html>