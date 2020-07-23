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
  
  <!--<script src="/Evo/xxjzWeb-master/Public/Home/js/pace.min.js"></script>-->
  <!--<link rel="stylesheet" href="/Evo/xxjzWeb-master/Public/Home/css/pace/pace-theme-center-circle.css"/>-->
  <script src="//cdn.bootcss.com/pace/1.0.2/pace.min.js"></script>
  <link href="//cdn.bootcss.com/pace/1.0.2/themes/blue/pace-theme-minimal.css" rel="stylesheet">

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="/Evo/xxjzWeb-master/Public/Home/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="/Evo/xxjzWeb-master/Public/Home/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="<?php echo (C("XXJZ_TITLE")); ?>"/>
  <link rel="apple-touch-icon-precomposed" href="/Evo/xxjzWeb-master/Public/Home/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="/Evo/xxjzWeb-master/Public/Home/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel="canonical" href="https://jz.xxgzs.org/">
  -->
  
  <link rel="stylesheet" href="/Evo/xxjzWeb-master/Public/Home/css/amazeui.min.css">
  <link rel="stylesheet" href="/Evo/xxjzWeb-master/Public/Home/css/app.css">
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
      <h1 data-am-widget="gotop" class="am-header-title">
          <a href="/Evo/xxjzWeb-master/index.php?s=/Home/Login/logout" class=""><?php echo (C("XXJZ_TITLE")); ?></a>
      </h1>
  </header>

    
<div class="am-center">
  <div class="am-container">
      <form class="am-form" method="post" data-am-validator>
        <fieldset>
          <legend>账号登录Account login detail</legend>
      
          <div class="am-form-group">
            <label for="login_username">账号account</label>
            <input type="text" class="" name="login_username" placeholder="输入用户名key in user name" 
              minlength="2" required/>
          </div>
      
          <div class="am-form-group">
            <label for="login_password">密码password</label>
            <input type="password" class="" name="login_password" placeholder="输入密码key in password" 
              minlength="6" required/>
          </div>
          
          <p><input type="submit" class="am-btn am-btn-secondary am-btn-block am-radius" name="login_submit" value="登录 login"></p>
          
          <!-- <p><button type="button" class="am-btn am-btn-block am-btn-success am-radius" data-am-modal="{target: '#my-xxjz'}">微信小程序</button></p> -->

          <p><button type="button" class="am-btn am-btn-block am-btn-default am-radius" data-am-modal="{target: '#my-popup'}">忘记密码forget password</button></p>
          
        </fieldset>
      </form>
  </div>

  <div style="position:fixed; bottom:0; width:100%; line-height:200%; background-color: #fff; z-index: -1;">
    <div class="am-text-center am-text-secondary am-text-sm">
      <a href="/Evo/xxjzWeb-master/index.php?s=/Home/Login/regist">注册账号Register</a>
      &nbsp;|&nbsp;
      <!-- <a href="#" data-am-modal="{target: '#my-xxjz'}">小程序</a> -->
      <!-- <span class="am-badge am-badge-danger am-round">Hot</span> -->
      &nbsp;|&nbsp;
      <a href="#" data-am-modal="{target: '#my-about'}">关于我们About Us</a>
    </div>
  </div>

  <div class="am-popup" id="my-popup">
    <div class="am-popup-inner">
      <div class="am-popup-hd">
          <h4 class="am-popup-title">找回用户密码</h4>
          <span data-am-modal-close class="am-close">&times;</span>
      </div>
      <div class="am-container" >
          <form class="am-form" method="post" data-am-validator>
            <fieldset>
              <div class="am-form-group">
                <label for="forget_email">邮箱</label>
                <input type="email" class="" name="forget_email" placeholder="输入邮箱" required/>
              </div>
              
              <p><input type="submit" class="am-btn am-btn-secondary am-btn-block am-radius" data-am-modal="{target: '#my-modal-loading'}"
                  name="forget_submit" value="验证邮箱"></p>
              
              <p><a data-am-modal-close role="button" class="am-btn am-btn-default am-btn-block am-radius">返回登录页</a></p>
              
            </fieldset>
          </form>
      </div>
      <div class="am-modal am-modal-loading am-modal-no-btn" tabindex="-1" id="my-modal-loading">
          <div class="am-modal-dialog">
              <div class="am-modal-hd">正在发送邮件...</div>
              <div class="am-modal-bd">
                  <span class="am-icon-spinner am-icon-spin"></span>
              </div>
          </div>
      </div>
    </div>
  </div>

  <div class="am-popup" id="my-about">
    <div class="am-popup-inner">
      <div class="am-popup-hd">
          <h4 class="am-popup-title">关于我们</h4>
          <span data-am-modal-close class="am-close">&times;</span>
      </div>
      <div class="am-container" >
        <div class="am-text-center">
          <img src="/Evo/xxjzWeb-master/Public/Home/i/logo.png" style="max-height: 200px;">
        </div>
        <fieldset>
          <legend>关于小歆记账</legend>
          <div class="am-text-left">
            <p style="text-indent:25px">
              小歆记账是一款开源、轻量级、面向移动端的云记账工具，整个项目是基于ThinkPHP搭建的，记账数据使用MySql存储，可搭建在任意PHP+MySql环境中。
            </p>
            
            <p style="text-indent:25px">
              本记账软件可灵活创建各种收支分类和账户，记账时可根据需要添加收据或发票图片附件，个性化的查询功能可方便的找到历史账目，对于长期账单能够统计出图表显示供本人查看，有效的显示整体收支情况。
            </p>
            <p style="text-indent:25px">
              GitHub：<a href="https://github.com/xiaoxinpro/xxjzWeb">https://github.com/xiaoxinpro/xxjzWeb</a>
            </p>
          </div>
        </fieldset>

        <fieldset>
          <legend>关于微信小程序</legend>
          <div class="am-text-left">
            <p style="text-indent:25px">
              小歆记账的微信小程序是基于本服务端基础上的客户端，因此微信小程序不可独立与本服务端运行，小程序方便用户在手机端使用记账功能的同时有更好的使用体验。可使用微信扫描下面的二维码体验：
            </p>
            <img src="/Evo/xxjzWeb-master/Public/Home/i/xxjz-wechat-min.png" alt="小歆记账 for 微信小程序">
            <p style="text-indent:25px">
              同时小歆记账的微信小程序也是一款开源的项目，项目使用微信官方的小程序开发工具。
            </p>
            <p style="text-indent:25px">
              GitHub：<a href="https://github.com/xiaoxinpro/xxjzWeChat">https://github.com/xiaoxinpro/xxjzWeChat</a>
            </p>
          </div>
        </fieldset>

        <fieldset>
          <legend>关于捐赠</legend>
          <div class="am-text-left">
            <p>
              如果您觉得小歆记账对你有帮助，欢迎给予我们一定的捐助来维持项目的长期发展。
            </p>
            <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
            am-avg-md-3 am-avg-lg-4 am-gallery-bordered" data-am-gallery="{ pureview: true }" >
                <li>
                  <div class="am-gallery-item">
                    <img src="/Evo/xxjzWeb-master/Public/Home/i/wechat.png"  alt="微信捐赠"/>
                    <div class="am-text-center am-text-success"><strong>微信捐赠</strong></div>
                  </div>
                </li>
                <li>
                  <div class="am-gallery-item">
                    <img src="/Evo/xxjzWeb-master/Public/Home/i/alipay.png"  alt="支付宝捐赠"/>
                    <div class="am-text-center am-text-secondary"><strong>支付宝捐赠</strong></div>
                  </div>
                </li>
            </ul>
          </div>
          <hr />
        </fieldset>

      </div>
    </div>
  </div>

  <div class="am-popup" id="my-xxjz">
    <div class="am-popup-inner">
      <div class="am-popup-hd">
          <h4 class="am-popup-title">客户端</h4>
          <span data-am-modal-close class="am-close">&times;</span>
      </div>
      <div class="am-container" >

        <fieldset>
          <legend>微信小程序</legend>
          <figure data-am-widget="figure" class="am am-figure am-figure-default "   data-am-figure="{  pureview: 'false' }">
            <img src="/Evo/xxjzWeb-master/Public/Home/i/xxjz-wechat-min.png" data-rel="/Evo/xxjzWeb-master/Public/Home/i/xxjz-wechat.png" alt="小歆记账 for 微信小程序"/>
          </figure>
          <div class="am-text-center">使用微信扫描此二维码，即可使用小歆记账。</div>
          <hr />
        </fieldset>

      </div>
    </div>
  </div>
    
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
<script src="/Evo/xxjzWeb-master/Public/Home/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<script src="/Evo/xxjzWeb-master/Public/Home/js/function.min.js"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Evo/xxjzWeb-master/Public/Home/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/Evo/xxjzWeb-master/Public/Home/js/amazeui.min.js"></script>

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