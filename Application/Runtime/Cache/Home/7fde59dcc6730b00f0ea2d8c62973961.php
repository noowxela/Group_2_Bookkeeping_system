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



    <form class="am-form am-form-horizontal" method="post" data-am-validator="H5validation:false">
        <fieldset id="new">
            <legend>新建分类</legend>
            <div class="am-input-group">
                <span class="am-input-group-label"><b>名称</b></span>
                <input type="text" class="am-form-field" id="text-class" name="class_name" placeholder="输入分类名称">
            </div>
            <div><p></p></div>
            <div class="am-input-group">
                <span class="am-input-group-label"><b>类别</b></span>
                <select id="select-type" class="am-form-field" name="class_type" >
                    <?php if($ClassType == 1): ?><option value="1">收入</option>
                        <option value="2">支出</option>
                    <?php else: ?>
                        <option value="2">支出</option>
                        <option value="1">收入</option><?php endif; ?>
                </select>
            </div>
            <p><input type="submit" class="am-btn am-btn-secondary am-btn-block" name="class_submit" value="新建"></p>
        </fieldset>
    </form>

    <fieldset id="in">
        <legend class="am-cf">
            <div class="am-fl">收入分类</div>
            <div class="am-fr">
                <button class="am-btn am-btn-xs am-btn-success am-round sortInEnable" style="display: none;" id="sortInSave">保存排序</button>
            </div>
        </legend>
        <table class="am-table am-table-bordered am-table-radius am-table-striped am-table-centered am-text-sm">
            <thead>
                <tr>
                    <th bgcolor="#FFFFFF">分类名称</th>
                    <th bgcolor="#FFFFFF">收入</th>
                    <th bgcolor="#FFFFFF">操作</th>
                    <th bgcolor="#FFFFFF">排序</th>
                </tr>
            </thead>
            <tbody id="sortClassIn">
                <?php if(is_array($inMoneyClass)): $i = 0; $__LIST__ = $inMoneyClass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr data-id="<?php echo ($key); ?>">
                    <td class="am-text-middle"><?php echo ($data); ?></td>
                    <td class="am-text-middle">
                        <a href="<?php echo U("Home/Class/change?id=".$key); ?>" class="am-btn am-btn-success am-btn-xs">
                            转为支出
                        </a>
                    </td>
                    <td class="am-text-middle">
                        <a href="<?php echo U("Home/Class/edit?id=".$key); ?>" class="am-btn am-btn-secondary am-btn-xs">
                            编辑
                        </a>
                        <a href="javascript:void(0);" onclick="isDelete('<?php echo U("Home/Class/del?id=".$key); ?>')" class="am-btn am-btn-danger am-btn-xs">
                            删除
                        </a>
                    </td>
                    <td class="am-text-middle sortHandle">
                        <i class="am-icon-arrows"></i>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </fieldset>

    <fieldset id="out">
        <legend>
            <div class="am-fl">支出分类</div>
            <div class="am-fr">
                <button class="am-btn am-btn-xs am-btn-success am-round sortOutEnable" style="display: none;" id="sortOutSave">保存排序</button>
            </div>
        </legend>
        <table class="am-table am-table-bordered am-table-radius am-table-striped am-table-centered am-text-sm">
            <thead>
                <tr>
                    <th bgcolor="#FFFFFF">分类名称</th>
                    <th bgcolor="#FFFFFF">支出</th>
                    <th bgcolor="#FFFFFF">操作</th>
                    <th bgcolor="#FFFFFF">排序</th>
                </tr>
            </thead>
            <tbody id="sortClassOut">
                <?php if(is_array($outMoneyClass)): $i = 0; $__LIST__ = $outMoneyClass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr data-id="<?php echo ($key); ?>">
                    <td class="am-text-middle"><?php echo ($data); ?></td>
                    <td class="am-text-middle">
                        <a href="<?php echo U("Home/Class/change?id=".$key); ?>" class="am-btn am-btn-success am-btn-xs">
                            转为收入
                        </a>
                    </td>
                    <td class="am-text-middle">
                        <a href="<?php echo U("Home/Class/edit?id=".$key); ?>" class="am-btn am-btn-secondary am-btn-xs">
                            编辑
                        </a>
                        <a href="javascript:void(0);" onclick="isDelete('<?php echo U("Home/Class/del?id=".$key); ?>')" class="am-btn am-btn-danger am-btn-xs">
                            删除
                        </a>
                    </td>
                    <td class="am-text-middle sortHandle">
                        <i class="am-icon-arrows"></i>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </fieldset>

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


    <script src="/Evo/xxjzWeb-master/Public/Home/js/sortable.min.js"></script>
    <script type="text/javascript">
        var elin = document.getElementById('sortClassIn');
        var sortableIn = Sortable.create(elin, {
            handle: ".sortHandle",
            ghostClass: "am-active",
            animation: 200,
            onUpdate: function (evt) {
                $(".sortInEnable").show();
            },
        });
        if (sortableIn) {
            $("#sortInSave").click(function(){
                SaveSort(sortableIn.toArray(), 'in');
            });
        }

        var elout = document.getElementById('sortClassOut');
        var sortableOut = Sortable.create(elout, {
            handle: ".sortHandle",
            ghostClass: "am-active",
            animation: 200,
            onUpdate: function (evt) {
                $(".sortOutEnable").show();
            },
        });
        if (sortableOut) {
            $("#sortOutSave").click(function(){
                SaveSort(sortableOut.toArray(), 'out');
            });
        }

        function SaveSort(order, type) {
            try {
                FormPost("/Evo/xxjzWeb-master/index.php?s=/Home/Class/sort", {'data': JSON.stringify(order).replace(/"/g, ''), 'type': type});
            }catch(e){
                console.log(e);
                alert("缺少FormPost组件，请联系管理员。");
            }
        }
    </script>


</body>
</html>