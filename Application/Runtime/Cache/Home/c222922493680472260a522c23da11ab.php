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



<ul class="am-pagination am-pagination-centered" >
    <li class="am-pagination-prev"><a href="/Accounting-page/index.php?s=/Home/Chart/index/year/<?php echo ($y-1); ?>">&laquo; <?php echo ($y-1); ?>年</a></li>
    <li class=""><a href="/Accounting-page/index.php?s=/Home/Chart/index">今年</a></li>
    <li class="am-pagination-next"><a href="/Accounting-page/index.php?s=/Home/Chart/index/year/<?php echo ($y+1); ?>"><?php echo ($y+1); ?>年 &raquo;</a></li>
</ul>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- 引入 echarts.js -->
    <!-- <script src="echarts.min.js"></script> -->
    <script src="//cdn.bootcss.com/echarts/3.2.1/echarts.min.js"></script>
</head>
<body style="text-align:center;">
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
    <div id="chart-year" style="height:350px"></div>
    <hr>
    <div id="chart-InClass" style="height:320px"></div>
    <hr>
    <div id="chart-OutClass" style="height:320px"></div>
    <hr>

    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var chartYear = echarts.init(document.getElementById('chart-year'));
        var chartInClass = echarts.init(document.getElementById('chart-InClass'));
        var chartOutClass = echarts.init(document.getElementById('chart-OutClass'));

        // 指定图表的配置项和数据
        var optionYear = {
            title: {
                text: '<?php echo ($y); ?>年收入与支出金额汇总',
                top: 'top',
                x: 'center'
            },
            color: ['#90ee7e','#ff0066','#f7a35c','#7cb5ec'],  //蓝色：3398DB 红色：c23531 青色：61a0a8 橙色：d48265 绿色：91c7ae
            tooltip : {
                trigger: 'axis',
                extraCssText: 'text-align: left;',
                axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                    type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
                }
            },
            legend: {
                data:['收入','支出','月剩余','年剩余'],
                selected:{
                    '收入' : true,
                    '支出' : true,
                    '月剩余' : false,
                    '年剩余' : false
                },
                top: 'bottom',
                x: 'center'
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '12%',
                containLabel: true
            },
            xAxis: {
                type: 'category',
                data: ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"]
            },
            yAxis: {
                type : 'value'
            },
            barGap: '5%',
            series: [{
                name: '收入',
                type: 'bar',
                data: <?php echo ($JsonInMoney); ?>
            },{
                name: '支出',
                type: 'bar',
                data: <?php echo ($JsonOutMoney); ?>
            },{
                name: '月剩余',
                type: 'line',
                smooth: true,
                data: <?php echo ($JsonSurplusMoney); ?>
            },{
                name: '年剩余',
                type: 'line',
                smooth: true,
                data: <?php echo ($JsonSurplusSumMoney); ?>
            }]
        };

        var optionInClass = {
            title : {
                text: '<?php echo ($y); ?>年收入分类汇总',
                subtext: '总收入<?php echo ($DataArray["InSumMoney"]); ?>元',
                x:'center'
            },
            color: ["#7cb5ec", "#f7a35c", "#90ee7e", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
        "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
            tooltip : {
                trigger: 'item',
                formatter: "{b} : ({d}%)<br/>{c} 元"
            },
            series : [
                {
                    name: '收入分类',
                    type: 'pie',
                    radius : '55%',
                    center: ['50%', '60%'],
                    data: <?php echo ($JsonInClassPer); ?>,
                    labelLine : {
                        normal: {
                            smooth: true
                        }
                    },
                    itemStyle: {
                        normal :{
                            borderColor: "#FFF",
                            borderWidth: 1
                        },
                        emphasis: {
                            borderWidth: 0,
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };

        var optionOutClass = {
            title : {
                text: '<?php echo ($y); ?>年支出分类汇总',
                subtext: '总支出<?php echo ($DataArray["OutSumMoney"]); ?>元',
                x:'center'
            },
            color: ["#7cb5ec", "#f7a35c", "#90ee7e", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
        "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
            tooltip : {
                trigger: 'item',
                formatter: "{b} : ({d}%)<br/>{c} 元"
            },
            series : [
                {
                    name: '支出分类',
                    type: 'pie',
                    radius : '55%',
                    center: ['50%', '60%'],
                    data: <?php echo ($JsonOutClassPer); ?>,
                    labelLine : {
                        normal: {
                            smooth: true
                        }
                    },
                    itemStyle: {
                        normal :{
                            borderColor: "#FFF",
                            borderWidth: 1
                        },
                        emphasis: {
                            borderWidth: 0,
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };

        // 使用刚指定的配置项和数据显示图表。
        chartYear.setOption(optionYear);
        chartInClass.setOption(optionInClass);
        chartOutClass.setOption(optionOutClass);
    </script>
</body>
</html>

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