<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧菜单</title>
<link href="../Public/css/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../Public/js/jquery.min.js"></script>
<script type="text/javascript" src="../Public/js/tinyscrollbar.js"></script>
<script type="text/javascript" src="../Public/js/leftmenu.js"></script>
</head>
<body>
<div class="quickbtn">
	<span class="quickbtn_left">
		<a href="" target="main">添加分类</a>
	</span>
	<span class="quickbtn_right">
		<a href="" target="main">添加商品</a>
	</span>
</div>
<div class="tGradient"></div>
<div id="scrollmenu">
	<div class="scrollbar">
		<div class="track">
			<div class="thumb">
				<div class="end"></div>
			</div>
		</div>
	</div>
	<div class="viewport">
		<div class="overview">
			<!--scrollbar start-->
			
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu02');" title="点击切换显示或隐藏"> 商品栏目管理 </div>
				<div id="leftmenu02" style="display:none">
					 <a href="__APP__/Type" target="main">商品分类列表</a>
					 <a href="__APP__/Type/add" target="main">添加分类</a>
				</div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu03');" title="点击切换显示或隐藏"> 商品管理 </div>
				<div id="leftmenu03" style="display:none">
					<a href="__APP__/Goods" target="main">商品列表</a>
					<a href="__APP__/Goods/add" target="main">添加成品</a>
				</div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu04');" title="点击切换显示或隐藏"> 会员管理 </div>
				<div id="leftmenu04" style="display:none">
					<a href="" target="main">查看用户</a>
					<a href="goodsbrand.php" target="main">用户管理</a>

				</div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu05');" title="点击切换显示或隐藏"> 留言管理 </div>
				<div id="leftmenu05" style="display:none;">
					<a href="" target="main">查询留言</a>
					
					<a href="" target="main">留言管理</a> </div>
			</div>
			<div class="hr_5"></div>
             <div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu07');" title="点击切换显示或隐藏">网站配置管理 </div>
				<div id="leftmenu07" style="display:none">
					 <a href="__APP__/Web" target="main">网站配置列表</a>
					 <a href="__APP__/Web/webadd" target="main">增加网站配置</a>

			  </div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<!--<div class="title ton" id="t1" onclick="DisplayMenu('leftmenu01');" title="点击切换显示或隐藏"> 管理员管理</div>-->
				<!--注：class="title ton"将子菜单打开-->
				<div class="title" id="t1" onclick="DisplayMenu('leftmenu01');" title="点击切换显示或隐藏"> 管理员管理</div>
				<div id="leftmenu01">
					<a href="__APP__/Admin" target="main">管理员信息</a>
					<a href="__APP__/Admin/adminedit" target="main">管理员信息修改</a>
                    			<a href="__APP__/Admin/adminpw" target="main">管理员密码修改</a>
				 </div>
			</div>
			<div class="hr_5"></div>
             <div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu08');" title="点击切换显示或隐藏">用户协议管理 </div>
				<div id="leftmenu08" style="display:none">
					 <a href="__APP__/Xieyi" target="main">用户协议列表</a>
					 <a href="__APP__/addxieyi" target="main">增加用户协议</a>

			  </div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu06');" title="点击切换显示或隐藏"> 用户反馈 </div>
				<div id="leftmenu06" style="display:none;">
					<a href="" target="main">查看反馈</a>
					<div class="hr_1"> </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bGradient"></div>
<div class="hr_5"></div>
<div class="copyright"> © 2013 <a href="" target="_blank">北方学院软件研发中心</a><br />
	All Rights Reserved. </div>
</body>
</html>