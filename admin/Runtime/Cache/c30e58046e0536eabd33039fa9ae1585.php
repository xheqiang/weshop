<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台首页</title>
<link href="../Public/css/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../Public/js/jquery.min.js"></script>
</head>
<body>
<div class="home_header">
	<div class="refurbish">
	<span class="title">系统信息</span><span class="reload">
	<a href="javascript:location.reload();">刷新</a></span>
	</div>
</div>
<div class="main_area">
		<div class="main_l_left">
			<div class="siteinfo">
				<h2 class="title">系统信息</h2>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="home_table">
					<tr>
						<td height="32" colspan="2">软件版本号： <span></span></td>
					</tr>
					<tr>
						<td width="50%" height="32">服务器版本： <span></span></td>
						<td width="50%">操作系统： </td>
					</tr>
					<tr>
						<td height="32">PHP版本号： </td>
						<td>GDLibrary：</td>
					</tr>
					<tr>
						<td height="32">MySql版本： </td>
						<td height="28">ZEND支持： </td>
					</tr>
					<tr class="nb">
						<td height="32" colspan="2">支持上传的最大文件：</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="main_l_right">
			<div class="countinfo">
				<h2 class="title">信息统计</h2>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="home_table">
					<tr>
						<td width="80" height="32">网站栏目数：</td>
						<td class="num"></td>
					</tr>
					<tr>
						<td height="32">单页信息数：</td>
						<td class="num">
						</td>
					</tr>
					<tr>
						<td height="32">列表信息数：</td>
						<td class="num"></td>
					</tr>
					<tr>
						<td height="32">图片信息数：</td>
						<td class="num"></td>
					</tr>
					<tr class="nb">
						<td height="32">注册会员数：</td>
						<td class="num"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>

</body>
</html>