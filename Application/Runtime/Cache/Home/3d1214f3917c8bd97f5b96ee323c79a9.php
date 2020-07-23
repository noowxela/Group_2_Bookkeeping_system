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
      <div class="am-header-left am-header-nav">
          <a href="/Evo/xxjzWeb-master/index.php?s=/Home/User/index" class="">

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
            <li class=""><a href="/Evo/xxjzWeb-master/index.php?s=/Home/Chart/index" class="am-icon-pie-chart" > &nbsp;年度统计</a></li>
            <li class="am-divider"></li>
            <li class=""><a href="/Evo/xxjzWeb-master/index.php?s=/Home/Funds/index" class="am-icon-credit-card"> &nbsp;资金账户</a></li>
            <li class="am-divider"></li>            
            <li class=""><a href="/Evo/xxjzWeb-master/index.php?s=/Home/Class/index" class="am-icon-list-ul"> &nbsp;分类管理</a></li>
            <li class="am-divider"></li>
            <li class=""><a href="/Evo/xxjzWeb-master/index.php?s=/Home/User/index" class="am-icon-cog" > &nbsp;设置选项</a></li>
            <li class="am-divider"></li>
            <?php if($PushAdminUrl): ?><!-- <li class=""><a href="/Evo/xxjzWeb-master/index.php?s=<?php echo ($PushAdminUrl); ?>" class="am-icon-chain" > &nbsp;推送管理</a></li>
              <li class="am-divider"></li> --><?php endif; ?>
            <li class=""><a href="/Evo/xxjzWeb-master/index.php?s=/Home/Login/logout" class="am-icon-sign-out"> &nbsp;退出登录</a></li>
        </ul>
      </div>
    </div>    
  </header>


    <div data-am-widget="tabs" class="am-tabs am-tabs-secondary" id="doc-form-tabs" >
        <ul class="am-tabs-nav am-cf">
            <?php if($type == 1): ?><li class=""><a href="[data-tab-panel-2]">支出</a></li>
                <li class="am-active"><a href="[data-tab-panel-1]">收入</a></li>
            <?php else: ?>
                <li class="am-active"><a href="[data-tab-panel-2]">支出</a></li>
                <li class=""><a href="[data-tab-panel-1]">收入</a></li><?php endif; ?>
            <li class=""><a href="/Evo/xxjzWeb-master/index.php?s=/Home/Add/transfer">转账</a></li>
        </ul>
        <div class="am-tabs-bd">
            <?php if($type == 1): ?><div data-tab-panel-2 class="am-tab-panel">
            <?php else: ?>
                <div data-tab-panel-2 class="am-tab-panel am-active"><?php endif; ?>
                <form class="am-form am-form-horizontal" enctype="multipart/form-data" method="post" data-am-validator="H5validation:false">
                    <legend>添加支出</legend>
                    <input type="hidden" name="add_type" value="2">
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>金额</b></span>
                        <input type="number" class="am-form-field" id="text-money" name="add_money" step=0.01 placeholder="输入支出金额">
                        <p></p>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>账户</b></span>
                        <select id="select-funds" class="am-form-field" name="add_funds">
                        <?php if(is_array($FundsData)): foreach($FundsData as $key=>$data): ?><option value="<?php echo ($data["id"]); ?>"><?php echo ($data["name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                        <span class="am-form-caret"></span>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>分类</b></span>
                        <select id="select-class" class="am-form-field" name="add_class">
                        <?php if(is_array($outMoneyClass)): foreach($outMoneyClass as $key=>$ClassName): ?><option value="<?php echo ($key); ?>"><?php echo ($ClassName); ?></option><?php endforeach; endif; ?>
                        </select>
                        <span class="am-form-caret"></span>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>备注</b></span>
                        <input type="text" class="am-form-field" id="text-mark" name="add_mark" placeholder="输入支出信息">
                        <span class="am-input-group-btn am-form-file">
                            <button type="button" class="am-btn am-btn-default"><i class="am-icon-cloud-upload"></i> 上传图片</button>
                            <input id="doc-form-file-out" type="file" name="add_photo[]" accept=".jpg, .gif, .png, .jpeg" multiple />
                        </span>
                    </div>
                    <div class="file-group-out" style="display: none;"><p></p></div>
                    <div class="am-input-group file-group-out" style="display: none;">
                        <span class="am-input-group-label"><b>附件</b></span>
                        <div id="file-list-out" class="am-form-field" style="height: auto;"></div>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>时间</b></span>
                        <input type="date" class="am-form-field" id="text-time" name="add_time" value="<?php echo date('Y-m-d',time()); ?>" style="height: auto;" />
                    </div>
                    
                    <p><hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" /></p>
                    
                    <p><button type="submit" name="submit" class="am-btn am-btn-warning am-btn-block">添加</button></p>
                    <p><a href="<?php echo ($refURL); ?>" class="am-btn am-btn-block am-btn-default">返回</a></p>
                </form>
            </div>
            <?php if($type == 1): ?><div data-tab-panel-1 class="am-tab-panel am-active">
            <?php else: ?>
                <div data-tab-panel-1 class="am-tab-panel "><?php endif; ?>
            
                <form class="am-form am-form-horizontal" enctype="multipart/form-data" method="post" data-am-validator="H5validation:false">
                    <legend>添加收入</legend>
                    <input type="hidden" name="add_type" value="1">
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>金额</b></span>
                        <input type="number" class="am-form-field" id="text-money" name="add_money" step=0.01 placeholder="输入收入金额">
                        <p></p>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>账户</b></span>
                        <select id="select-funds" class="am-form-field" name="add_funds">
                        <?php if(is_array($FundsData)): foreach($FundsData as $key=>$data): ?><option value="<?php echo ($data["id"]); ?>"><?php echo ($data["name"]); ?></option><?php endforeach; endif; ?>
                        </select>
                        <span class="am-form-caret"></span>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>分类</b></span>
                        <select id="select-class" class="am-form-field" name="add_class">
                        <?php if(is_array($inMoneyClass)): foreach($inMoneyClass as $key=>$ClassName): ?><option value="<?php echo ($key); ?>"><?php echo ($ClassName); ?></option><?php endforeach; endif; ?>
                        </select>
                        <span class="am-form-caret"></span>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>备注</b></span>
                        <input type="text" class="am-form-field" id="text-mark" name="add_mark" placeholder="输入支出信息">
                        <span class="am-input-group-btn am-form-file">
                            <button type="button" class="am-btn am-btn-default"><i class="am-icon-cloud-upload"></i> 上传图片</button>
                            <input id="doc-form-file-in" type="file" name="add_photo[]" accept=".jpg, .gif, .png, .jpeg" multiple />
                        </span>
                    </div>
                    <div class="file-group-in" style="display: none;"><p></p></div>
                    <div class="am-input-group file-group-in" style="display: none;">
                        <span class="am-input-group-label"><b>附件</b></span>
                        <div id="file-list-in" class="am-form-field" style="height: auto;"></div>
                    </div>
                    <div><p></p></div>
                    <div class="am-input-group">
                        <span class="am-input-group-label"><b>时间</b></span>
                        <input type="date" class="am-form-field" id="text-time" name="add_time" value="<?php echo date('Y-m-d',time()); ?>" style="height: auto;"/>
                    </div>
                    <p><hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" /></p>
                    
                    <p><button type="submit" name="submit" class="am-btn am-btn-success am-btn-block">添加</button></p>
                    <p><a href="<?php echo ($refURL); ?>" class="am-btn am-btn-block am-btn-default">返回</a></p>
                </form>
            </div>
            <div data-tab-panel-3 class="am-tab-panel">
                <html>
  <head>
    <style>
    .image-loader {
      width: 80px;
      height: 80px;
      position: relative;
      margin: auto;
      margin-top: 60px;
      margin-bottom: 70px;
    }

    .image-loader .dot {
      position: absolute;
      top: 0;
      left: 0;
      width: 80px;
      height: 80px;

      animation: 1.7s dotrotate cubic-bezier(0.775, 0.005, 0.310, 1.000) infinite;
    }

    .image-loader .dot:nth-child(1) {
      animation-delay: 0.2s;
    }

    .image-loader .dot:nth-child(2) {
      animation-delay: 0.35s;
    }

    .image-loader .dot:nth-child(3) {
      animation-delay: 0.45s;
    }

    .image-loader .dot:nth-child(4) {
      animation-delay: 0.55s;
    }

    .image-loader .dot:after, .image-loader .dot .first {
      content: "";
      position: absolute;
      width: 10px;
      height: 10px;
      background: #02aff1;
      border-radius: 50%;
      left: 50%;
      margin-left: -4px;
    }

    .image-loader .dot .first {
      background: #02aff1;
      margin-top: -4px;
      animation: 1.7s dotscale cubic-bezier(0.775, 0.005, 0.310, 1.000) infinite;
      animation-delay: 0.2s;
    }

    @keyframes dotrotate { 
      from { transform: rotate(0deg); } 
      to { transform: rotate(360deg); }
    }

    @keyframes dotscale { 
      0%, 10% { width: 16px; height: 16px; margin-left: -8px;  margin-top: -4px; } 
      50% { width: 8px; height: 8px; margin-left: -4px; margin-top: 0; }
      90%, 100% { width: 16px; height: 16px;  margin-left: -8px;  margin-top: -4px; }
    }
    </style>
  </head>
  <body>
    <div class="image-loader">
      <div class="dot">
        <div class="first"></div>
      </div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
  </body>
</html>




            </div>
        </div>
    </div>
    <p></p>
<table class="am-table am-table-bordered am-table-radius am-table-striped am-table-centered am-text-sm">
    <thead>
        <tr>
            <th width='80' bgcolor="#FFFFFF">分类</th>
            <th width='80' bgcolor="#FFFFFF">金额</th>
            <th width='80' bgcolor="#FFFFFF">收支</th>
            <th width='110' bgcolor="#FFFFFF">时间</th>
            <th width='100' bgcolor="#FFFFFF">备注</th>
            <th width='80' bgcolor="#FFFFFF">操作</th>
        </tr>
    </thead>
    <tbody class="">
        <?php if(is_array($ShowData)): $i = 0; $__LIST__ = $ShowData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
            <td class="am-text-middle"><?php echo ($data["class"]); ?></td>
            <td class="am-text-middle">
                <?php if($data["classid"] > 0): if($data["typeid"] == 1): ?><font class="am-text-success money-format"><?php echo ($data["money"]); ?></font>
                    <?php elseif($data["typeid"] == 2): ?>
                        <font class="am-text-danger money-format"><?php echo ($data["money"]); ?></font>
                    <?php else: ?>
                        <font class="money-format"><?php echo ($data["money"]); ?></font><?php endif; ?>
                <?php else: ?>
                    <font class="money-format"><?php echo ($data["money"]); ?></font><?php endif; ?>
            </td>
            <td class="am-text-middle"><?php echo ($data["funds"]); ?> <?php echo ($data["type"]); ?></td>
            <td class="am-text-middle am-text-xs"><?php echo date("Y-m-d",$data['time']); ?></td>
            <td class="am-text-middle"><?php echo ($data["mark"]); ?></td>
            <td class="am-text-middle">
                <?php if($data["classid"] > 0): ?><a href="/Evo/xxjzWeb-master/index.php?s=/Home/Edit/index/id/<?php echo ($data["id"]); ?>">编辑 </a>
                    <a href="javascript:void(0);" onclick="isDelete('/Evo/xxjzWeb-master/index.php?s=/Home/Edit/del/id/<?php echo ($data["id"]); ?>')"> 删除</a>
                <?php else: ?>
                    <a href="/Evo/xxjzWeb-master/index.php?s=/Home/Edit/transfer/id/<?php echo ($data["id"]); ?>">编辑</a>
                    <a href="javascript:void(0);" onclick="isDelete('/Evo/xxjzWeb-master/index.php?s=/Home/Edit/deleteTransfer/id/<?php echo ($data["id"]); ?>')"> 删除</a><?php endif; ?>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>

<!--分页大于1时显示-->
<?php if($PageMax > 1): ?><ul data-am-widget="pagination" class="am-pagination am-pagination-select">
        <li class="am-pagination-prev ">
            <?php if(1 != $Page ): ?><a href="/Evo/xxjzWeb-master/index.php?s=/Home/Add/index/p/<?php echo ($Page-1); ?>#money-table" class="">上一页</a> 
            <?php else: ?> <a href="/Evo/xxjzWeb-master/index.php?s=/Home/Add/index/p/<?php echo ($Page); ?>#money-table" class="">上一页</a><?php endif; ?>
        </li>
        
        <li class="am-pagination-select">
            <select id="pid" onchange="SelectChange()" style="-webkit-appearance: button;">
                <?php $__FOR_START_646205427__=1;$__FOR_END_646205427__=$PageMax + 1;for($i=$__FOR_START_646205427__;$i < $__FOR_END_646205427__;$i+=1){ if($i == $Page ): ?><option value="/Evo/xxjzWeb-master/index.php?s=/Home/Add/index/p/<?php echo ($i); ?>#money-table" selected="selected">&nbsp;<?php echo ($i); ?></option>
                    <?php else: ?> 
                        <option value="/Evo/xxjzWeb-master/index.php?s=/Home/Add/index/p/<?php echo ($i); ?>#money-table" class="">&nbsp;<?php echo ($i); ?></option><?php endif; } ?>
            </select>
        </li>
        
        
        <li class="am-pagination-next ">
            <?php if($PageMax != $Page ): ?><a href="/Evo/xxjzWeb-master/index.php?s=/Home/Add/index/p/<?php echo ($Page+1); ?>#money-table" class="">下一页</a>
            <?php else: ?> <a href="/Evo/xxjzWeb-master/index.php?s=/Home/Add/index/p/<?php echo ($Page); ?>#money-table" class="">下一页</a><?php endif; ?>
        </li>
    </ul>
<?php elseif($PageMax == null): ?>
    <p><a href="/Evo/xxjzWeb-master/index.php?s=/Home/Index/index#money-table" class="am-btn am-btn-block am-btn-default">更多记账明细</a></p><?php endif; ?>


  <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default" style="height: 60px;    line-height: 60px;">
      <ul class="am-navbar-nav am-cf am-avg-sm-4" style="background-color:#19a7f0">
          <li >
            <a href="/Evo/xxjzWeb-master/index.php?s=/Home/Index/index" class="">
                <span class="am-icon-home am-icon-sm"></span>
                <span class="am-navbar-label">主页</span>
            </a>
          </li>
          <li >
            <a href="/Evo/xxjzWeb-master/index.php?s=/Home/Add/index" class="">
                <span class="am-icon-plus-square am-icon-sm"></span>
                <span class="am-navbar-label">记账</span>
            </a>
          </li>
          <li >
            <a href="/Evo/xxjzWeb-master/index.php?s=/Home/Find/index" class="">
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


    <script>
      function ResetFormFile() {
          $('.file-group-out').hide();
          $('.file-group-in').hide();
          $('#doc-form-file-out').val('');
          $('#doc-form-file-in').val('');
      }

      $(function() {
        $('#doc-form-tabs').find('a').on('opened.tabs.amui', function(e) {
          if ($(this).text() == '转账') {
            window.location.href=$(this).context.href;
          }
        });
        $('#doc-form-file-out').on('change', function() {
          var fileNames = '';
          var fileSize = 0;
          if (this.files.length > 9) {
            alert("上传文件数量不能超过9个。");
            ResetFormFile();
            return;
          }
          $.each(this.files, function() {
            fileNames += '<span class="am-badge">' + this.name + '</span> ';
            fileSize += this.size;
          });
          if (fileSize > 3*1024*1024) {
            alert("单次上传文件体积不能超过3MB。");
            ResetFormFile();
            return;
          }
          $('#file-list-out').html(fileNames);
          if (fileNames == '') {
            $('.file-group-out').hide();
          } else {
            $('.file-group-out').show();
          }
        });

        $('#doc-form-file-in').on('change', function() {
          var fileNames = '';
          var fileSize = 0;
          if (this.files.length > 9) {
            alert("上传文件数量不能超过9个。");
            ResetFormFile();
            return;
          }
          $.each(this.files, function() {
            fileNames += '<span class="am-badge">' + this.name + '</span> ';
            fileSize += this.size;
          });
          if (fileSize > 3*1024*1024) {
            alert("单次上传文件体积不能超过3MB。");
            ResetFormFile();
            return;
          }
          $('#file-list-in').html(fileNames);
          if (fileNames == '') {
            $('.file-group-in').hide();
          } else {
            $('.file-group-in').show();
          }
        });
      });
    </script>


</body>
</html>