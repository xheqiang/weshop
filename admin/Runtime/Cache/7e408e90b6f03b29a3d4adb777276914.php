<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商品栏目列表</title>
<link href="../Public/css/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../Public/js/jquery.min.js"></script>
<script type="text/javascript" src="../Public/js/mgr.func.js"></script>
<style type="text/css">
a{ text-decoration:none;}
	.a{display:block;
	width:6em;
	padding:0.2em;
	line-height:1.4;
	background-color:#EFFAFF;
	border:1px solid #2C8FC0;
	color:#000;
	text-decoration: none;
	text-align:center;}
.a:link {text-decoration: none;}
.a:visited {text-decoration: none;}
.a:active {text-decoration: none;}
.a:hover {text-decoration: none; 
background-color:#73B2DB; color:#fff;}
.button{
	display:block;
	width:6em;
	padding:0.2em;
	line-height:1.4;
	background-color:#EFFAFF;
	border:1px solid #2C8FC0;
	color:#000;
	text-decoration: none;
	text-align:center;
	}
button:link {text-decoration: none;}
button:visited {text-decoration: none;}
button:active {text-decoration: none;}
button:hover {text-decoration: none;background-color:#73B2DB; color:#fff;}
</style>
</head>
<body>
<div class="mgr_header"> <span class="title">商品分类管理</span> <span class="reload"><a class="a" href="javascript:location.reload();">刷新</a></span> </div>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="mgr_table">
	<tr class="thead" align="center" height="30px">
		<td width="30%">分类名称</td>
		<td width="30%">所属分类</td>
		<td width="20%">分类状态</td>
		<td width="20%">操作</td>
	</tr>
    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><?php echo ($vo); ?><?php endforeach; endif; else: echo "" ;endif; ?>
</table>

<div class="mgr_divb"> <span class="mgr_btn"><a href="__URL__/add">添加商品分类</a></span> </div>
</body>
</html>