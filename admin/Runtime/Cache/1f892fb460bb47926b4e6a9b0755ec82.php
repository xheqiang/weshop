<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加栏目</title>
<link href="../Public/css/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../Public/js/jquery.min.js"></script>
<script type="text/javascript" src="../Public/js/getuploadify.js"></script>
<script type="text/javascript" src="../Public/js/checkf.func.js"></script>
<style type="text/css">
a{display:block;
	width:6em;
	padding:0.2em;
	line-height:1.4;
	background-color:#EFFAFF;
	border:1px solid #2C8FC0;
	color:#000;
	text-decoration: none;
	text-align:center;}
a:link {text-decoration: none;}
a:visited {text-decoration: none;}
a:active {text-decoration: none;}
a:hover {text-decoration: none; 
background-color:#73B2DB; color:#fff;}
.span{color:#F00; font-size:14px; margin-left:20%}
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
<div class="gray_header"> <span class="title">添加栏目</span> <span class="reload"><a href="javascript:location.reload();">刷新</a></span> </div>
<form name="form" id="form" method="post" action="__URL__/doadd" onsubmit="return cfm_infoclass();">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form_table">
    		<tr>
			<td height="35" align="right">分类名称：</td>
			<td><input name="typename" type="text" id="classname" class="class_input" />
				<span class="maroon">*</span></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="25%" height="35" align="right">所属分类：</td>
			<td width="350">
		            <select name="f_id" id="parentid">
				<option value="0">顶级分类</option>
		                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($vo[typeid]); ?>"><?php echo ($vo["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
                		<span style=" color:#09F">&nbsp;本系统最多支持二级分类</span>
            		</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td width="25%" height="35" align="right">审核状态：</td>
			<td width="350">
		            <input type="radio" name="status" value="2" checked="true">未审核</input>&nbsp;&nbsp;
		            <input type="radio" name="status" value="1">已审核</input>
            		</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	<div class="subbtn_area">
		<input type="submit" class="blue_submit_btn" value="" />
		<input type="button" class="blue_back_btn" value="" onclick="history.go(-1)"  />
		<input name="action" type="hidden" value="add" />
  </div>
</form>
<br /><br />
<!--<div class="gray_header"> <span class="title">栏目列表</span> <span class="reload"></span> </div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form_table"></table>-->
</body>
</html>