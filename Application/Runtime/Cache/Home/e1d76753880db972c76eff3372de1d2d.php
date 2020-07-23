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
      <h1 data-am-widget="gotop" class="am-header-title">
          <a href="/Accounting-page/index.php?s=/Home/Login/logout" class=""><?php echo (C("XXJZ_TITLE")); ?></a>
      </h1>
  </header>

    
<div class="am-center">
    <div class="am-container">
        <form class="am-form" method="post" id="doc-vld-msg" data-am-validator>
          <fieldset>
            <legend>注册账号</legend>
        
            <div class="am-form-group">
              <label for="regist_username">账号</label>
              <input type="text" class="" name="regist_username" placeholder="输入用户名（至少2个字符）"
                minlength="2" maxlength="32" data-validation-message="用户名长度要求在2-32位之间。" required/>
            </div>

            <div class="am-form-group">
              <label for="regist_email">邮箱</label>
              <input type="email" class="" name="regist_email" 
                placeholder="输入邮箱（用于找回密码）" minlength="4" maxlength="32" 
                data-validation-message="请输入长度在4-32位之间的有效电子邮箱地址。" required/>
            </div>

            <div class="am-form-group">
              <label for="regist_password">密码</label>
              <input type="password" class="" name="regist_password" placeholder="输入密码（必须6位以上）" 
                minlength="6" maxlength="32" id="doc-vld-pwd-1" 
                data-validation-message="密码长度要求在6-32位之间。" required/>
            </div>
        
            <div class="am-form-group">
              <label for="regist_password">确认密码</label>
              <input type="password" class="" name="regist_password2" placeholder="请再次输入密码" 
                data-equal-to="#doc-vld-pwd-1" id="doc-vld-pwd-2" 
                data-validation-message="请与上面输入的密码保持一致" required/>
            </div>
            
            <p><input type="submit" class="am-btn am-btn-success am-btn-block am-radius" name="regist_submit" value="注册"></p>

            <p><a class="am-btn am-btn-block am-btn-default am-radius" href="/Accounting-page/index.php?s=/Home/Login/index">返回登录</a></p>
            
          </fieldset>
        </form>
        
    </div>
    
</div>


<script type="text/javascript">
$(function() {

  $('#doc-vld-msg').validator({
    onValid: function(validity) {
      $(validity.field).closest('.am-form-group').find('.am-alert').hide();
    },

    onInValid: function(validity) {
      var $field = $(validity.field);
      var $group = $field.closest('.am-form-group');
      var $alert = $group.find('.am-alert');
      // 使用自定义的提示信息 或 插件内置的提示信息
      var msg = $field.data('validationMessage') || this.getValidationMessage(validity);

      if (!$alert.length) {
        $alert = $('<div class="am-alert am-alert-danger"></div>').hide().
          appendTo($group);
      }

      $alert.html(msg).show();
    }
  });
});
</script>




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