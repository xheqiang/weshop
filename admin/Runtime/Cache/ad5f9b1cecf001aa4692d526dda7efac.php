<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Page-Enter" content="blendTrans(Duration=0.3)" />
<meta http-equiv="Page-Exit" content="blendTrans(Duration=0.3)" />
<title> 管理中心</title>
<link href="../Public/css/frame.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../Public/js/jquery.min.js"></script>
<script type="text/javascript" src="../Public/js/frame.js"></script>
</head>
<body class="showmenu">
<div class="header">
	<div class="header_logo">
		<div class="header_info" style="margin-right:10%">欢迎您：管理员
			<a href="__APP__" onClick="JavaScript:return confirm('您确定退出吗？')"  >退出</a>
		</div>
	</div>
	<div class="quick">
		 <a href="javascript:;" id="btn" class="btn">快捷方式</a>
		 <a href="javascript:;" class="add_btn"></a>
		<div class="qucikmenu" id="qucikmenu">
			<ul>
				<li><a href="__URL__/right" target="main">后台首页</a></li>
				<li><a href="__APP__/Web" target="main">网站配置管理</a></li>
				<li><a href="" target="main">栏目内容管理</a></li>
				<li><a href="" target="main">商品订单管理</a></li>
				<li><a href="" target="main">会员管理</a></li>
				<li><a href="" target="main">留言管理</a></li>
				<li><a href="" target="main">用户反馈</a></li>
			</ul>
		</div>
	</div>
	<!--
	<div class="sitelist">
	</div>
	-->
	<div class="header_bottom"> <a href="javascript:;" class="togglemenu">隐藏菜单</a></div>
</div>
<div class="left">
	<div class="menu">
		<iframe name="menu" id="menu" frameborder="0" src="__URL__/left" scrolling="no"></iframe>
	</div>
</div>
<div class="right">
	<div class="main">
		<iframe name="main" id="main" frameborder="0" src="__URL__/right"></iframe>
	</div>
</div>
</body>
</html>