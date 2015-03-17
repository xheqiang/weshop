<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加商品信息</title>
<link href="../Public/css/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../Public/js/jquery.min.js"></script>
<script type="text/javascript" src="../Public/js/getuploadify.js"></script>
<!--引入日历文件-->
<script type="text/javascript" src="../Public/plugin/calendar/WdatePicker.js"></script>
<!--kindeditor编辑器引入文件开始-->
<link rel="stylesheet" href="__PUBLIC__/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="__PUBLIC__/kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="__PUBLIC__/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="__PUBLIC__/kindeditor/lang/zh_CN.js"></script>
<!--kindeditor编辑器引入文件结束-->
<!--实例化kindeditor开始-->
<script>
    KindEditor.ready(function(K) {
        var editor = K.create('textarea[name="content"]', {
            cssPath : '__PUBLIC__/kindeditor/plugins/code/prettify.css',
            uploadJson : '__PUBLIC__/kindeditor/php/upload_json.php',
            fileManagerJson : '__PUBLIC__/kindeditor/php/file_manager_json.php',
            allowFileManager : true,width:'667px',height:'280px',
            afterCreate : function() {
                var self = this;
                K.ctrl(document, 13, function() {
                    self.sync();
                    K('form[name=form]')[0].submit();
                });
                K.ctrl(self.edit.doc, 13, function() {
                    self.sync();
                    K('form[name=form]')[0].submit();
                });
            }
        });
        prettyPrint();
    });
</script>
<!--实例化kindeditor结束-->
<style type="text/css">
/*a{display:block;
	width:3em;
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
*/
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
<script type="text/javascript">
	$(document).ready(function(){
		$("#start").click(function(){
			$("input[type=file]").trigger("click");
		});
		$("input[type=file]").change(function(){
			$("#uploadimg").ajaxSubmit({
				dataType:  'json',
				success: function(data) {
				},
				error:function(xhr){
					alert("上传失败");
				}
			});
		});
	});
</script>
</head>
<body>
<div class="gray_header"> <span class="title">添加商品信息</span> <span class="reload"><a href="javascript:location.reload();">刷新</a></span> </div>
<form name="form" id="form" method="post" action="">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="form_table">
		<tr>
			<td width="25%" height="35" align="right">所属栏目：</td>
			<td width="75%">
			   <select name="classid" id="classid">
				<option value="-1">请选择所属栏目</option>
					
			    </select>
				<span class="maroon">*</span><span class="cnote">带<span class="maroon">*</span>号表示为必填项</span></td>
		</tr>
		<tr>
			<td height="35" align="right">商品名称：</td>
			<td><input type="text" name="title" id="title" class="input_title" />
				<span class="maroon">*</span>
			</td>
		</tr>
		<tr>
			<td height="35" align="right">商品价格：</td>
			<td>原价：<input name="goodsid" type="text" id="goodsid" class="class_input" style="width:50px;"/>
						&nbsp;&nbsp;
				现价：<input name="goodsid" type="text" id="goodsid" class="class_input" style="width:50px;"/>
			</td>
		</tr>
		<!--<tr>
			<td height="35" align="right">商品价格：</td>
			<td><input name="goodsid" type="text" id="goodsid" class="input_short" /></td>
		</tr>-->
		<!--<tr>
			<td height="35" align="right">促销价格：</td>
			<td><input name="goodsid" type="text" id="goodsid" class="input_short" /></td>
		</tr>-->
		<tr>
			<td height="35" align="right">所属店铺：</td>
			<td><input name="goodsid" type="text" id="goodsid" class="input_short" /></td>
		</tr>
		<tr>
			<td height="35" align="right">商品状态：</td>
			<td>
				<input type="radio" name="status" value="1">在售</input>&nbsp;&nbsp;
				<input type="radio" name="status" value="2">下架</input>
			</td>
		</tr>
		<tr>
			<td height="35" align="right">商品是否推荐：</td>
			<td>
				<input type="radio" name="status" value="1">推荐</input>&nbsp;&nbsp;
				<input type="radio" name="status" value="2">不推荐</input>
			</td>
		</tr>
		<tr>
			<td height="35" align="right">商品是否热卖：</td>
			<td>
				<input type="radio" name="status" value="1">热卖</input>&nbsp;&nbsp;
				<input type="radio" name="status" value="2">非热卖</input>
			</td>
		</tr>
		<tr>
			<td height="35" align="right">商品浏览量：</td>
			<td><input name="goodsid" type="text" id="goodsid" class="input_short" /></td>
		</tr>
		<tr>
			<td height="35" align="right">更新时间：</td>
			<td><input name="posttime" type="text" id="posttime" class="input_short" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="" readonly="readonly"/>
			</td>
		</tr>
		<tr class="nb">
			<td height="124" align="right">组　图：</td>
			<td><fieldset class="picarr">
					<legend>列表</legend>
					<div>最多可以上传<strong>50</strong>张图片<span id="start">开始上传</span>
						<form action="__URL__/uploadimg" enctype="multipart/form-data" method="post" id="uploadimg" name="uploadimg">
                                          <input id="upload_file" name="upload_file" type="file" value="" style="display:none;">
                                          </form>
					</div>
					
					<ul id="picarr_area">
					</ul>
				</fieldset></td>
		</tr>
			<tr class="nb">
			<td colspan="2" height="26"><div class="line"> </div></td>
		</tr>
		<tr>
			<td height="340" align="right">详细内容：</td>
			<td><textarea name="content" id="content" class="kindeditor"></textarea>
			</td>
		</tr>
	
	</table>
	<div class="subbtn_area">
		<input type="submit" class="blue_submit_btn" value="" />
		<input type="button" class="blue_back_btn" value="" onclick="history.go(-1)"  />
		<input type="hidden" name="action" id="action" value="add" />
	</div>
</form>
</body>
</html>