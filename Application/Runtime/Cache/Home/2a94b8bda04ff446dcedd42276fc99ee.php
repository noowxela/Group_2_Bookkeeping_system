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


    
    <div class="am-alert am-alert-secondary" data-am-alert>
        <button type="button" class="am-close">&times;</button>
        <p><b><?php echo ($UserName); ?>，<?php echo (C("XXJZ_WELCOME")); ?>&nbsp;</b><!-- <a href="/index.php" class="am-btn-sm am-btn-warning">返回旧版</a> --></p>
    </div>
    
    <p></p>
<table class="am-table am-table-bordered am-table-radius am-table-striped am-table-centered">
    <thead>
        <tr>
            <th width="22%" bgcolor="#FFFFFF">统计</th>
            <th width="26%" bgcolor="#FFFFFF">本日</th>
            <th width="26%" bgcolor="#FFFFFF">本月</th>
            <th width="26%" bgcolor="#FFFFFF">本年</th>
        </tr>
    </thead>
    <tbody>
        <tr class="am-danger">
            <td>支出</td>
            <td class="money-format"><?php echo ($AccountStatistic['TodayOutMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['MonthOutMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['YearOutMoney']); ?></td>
        </tr>
        <tr class="am-success">
            <td>收入</td>
            <td class="money-format"><?php echo ($AccountStatistic['TodayInMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['MonthInMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['YearInMoney']); ?></td>
        </tr>
        <tr class="am-primary"><!--class="am-active"-->
            <td>剩余</td>
            <td class="money-format"><?php echo ($AccountStatistic['TodayInMoney']-$AccountStatistic['TodayOutMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['MonthInMoney']-$AccountStatistic['MonthOutMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['YearInMoney']-$AccountStatistic['YearOutMoney']); ?></td>
        </tr>
    </tbody>
</table>


<table class="am-table am-table-bordered am-table-radius am-table-striped am-table-centered">
    <thead>
        <tr>
            <th width="22%" bgcolor="#FFFFFF">统计</th>
            <th width="26%" bgcolor="#FFFFFF">昨日</th>
            <th width="26%" bgcolor="#FFFFFF">上月</th>
            <th width="26%" bgcolor="#FFFFFF">去年</th>
        </tr>
    </thead>
    <tbody>
        <tr class="am-danger">
            <td>支出</td>
            <td class="money-format"><?php echo ($AccountStatistic['LastTodayOutMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['LastMonthOutMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['LastYearOutMoney']); ?></td>
        </tr>
        <tr class="am-success">
            <td>收入</td>
            <td class="money-format"><?php echo ($AccountStatistic['LastTodayInMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['LastMonthInMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['LastYearInMoney']); ?></td>
        </tr>
        <tr class="am-primary"><!--class="am-active"-->
            <td>剩余</td>
            <td class="money-format"><?php echo ($AccountStatistic['LastTodayInMoney']-$AccountStatistic['LastTodayOutMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['LastMonthInMoney']-$AccountStatistic['LastMonthOutMoney']); ?></td>
            <td class="money-format"><?php echo ($AccountStatistic['LastYearInMoney']-$AccountStatistic['LastYearOutMoney']); ?></td>
        </tr>
    </tbody>
</table>

















        
    <div id="money-table" class="am-alert am-alert-secondary" data-am-alert>
        <button type="button" class="am-close">&times;</button>
        <p class="am-text-sm">
        总收入: <font class="am-text-success money-format"><?php echo ($AccountStatistic['SumInMoney']); ?></font> &nbsp;
        总支出: <font class="am-text-danger money-format" ><?php echo ($AccountStatistic['SumOutMoney']); ?></font> &nbsp;
          剩余: <font class="am-text-primary money-format"><?php echo ($AccountStatistic['SumInMoney']-$AccountStatistic['SumOutMoney']); ?></font> 
          <span class="am-badge am-round" style="margin-left: 6px;">不含转账</span>
        </p>

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
            <?php if(1 != $Page ): ?><a href="/Evo/xxjzWeb-master/index.php?s=/Home/Index/index/p/<?php echo ($Page-1); ?>#money-table" class="">上一页</a> 
            <?php else: ?> <a href="/Evo/xxjzWeb-master/index.php?s=/Home/Index/index/p/<?php echo ($Page); ?>#money-table" class="">上一页</a><?php endif; ?>
        </li>
        
        <li class="am-pagination-select">
            <select id="pid" onchange="SelectChange()" style="-webkit-appearance: button;">
                <?php $__FOR_START_671970202__=1;$__FOR_END_671970202__=$PageMax + 1;for($i=$__FOR_START_671970202__;$i < $__FOR_END_671970202__;$i+=1){ if($i == $Page ): ?><option value="/Evo/xxjzWeb-master/index.php?s=/Home/Index/index/p/<?php echo ($i); ?>#money-table" selected="selected">&nbsp;<?php echo ($i); ?></option>
                    <?php else: ?> 
                        <option value="/Evo/xxjzWeb-master/index.php?s=/Home/Index/index/p/<?php echo ($i); ?>#money-table" class="">&nbsp;<?php echo ($i); ?></option><?php endif; } ?>
            </select>
        </li>
        
        
        <li class="am-pagination-next ">
            <?php if($PageMax != $Page ): ?><a href="/Evo/xxjzWeb-master/index.php?s=/Home/Index/index/p/<?php echo ($Page+1); ?>#money-table" class="">下一页</a>
            <?php else: ?> <a href="/Evo/xxjzWeb-master/index.php?s=/Home/Index/index/p/<?php echo ($Page); ?>#money-table" class="">下一页</a><?php endif; ?>
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




</body>
</html>