<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>后台管理系统</title>
<link href="../Public/css/admin.css" rel="stylesheet" />
<script src="../Public/js/jquery.min.js"></script>
<script>
function CheckForm()
{
	if($("#username").val() == "")
	{
		alert("请输入用户名！");
		$("#username").focus();
		return false;
	}
	if($("#password").val() == "")
	{
		alert("请输入密码！");
		$("#password").focus();
		return false;
	}
	if($("#validate").val() == "")
	{
        alert("请输入验证码！");
        $("#validate").focus();
        return false;
    }
}

$(function(){
	$("#username").focus(function(){
		$("#username").attr("class", "login_area_input_on"); 
	}).blur(function(){
		$("#username").attr("class", "login_area_input"); 
	});

	$("#password").focus(function(){
		$("#password").attr("class", "login_area_input_on mar8"); 
	}).blur(function(){
		$("#password").attr("class", "login_area_input mar8"); 
	});

	$("#validate").focus(function(){
		$("#validate").attr("class", "login_area_ckstr_on"); 
	}).blur(function(){
		$("#validate").attr("class", "login_area_ckstr"); 
	});

	$("#username").focus();
});
</script>
</head>
<body class="login_body">
<div class="login_logo"></div>
<div class="login_text"><span class="login_note">
	</span>
</div>
<div class="login_warp">
	<div class="login_area">
		<form name="login" method="post" action="__URL__/main" onSubmit="return CheckForm()">
			<input type="text" name="username" id="username" class="login_area_input" maxlength="20" />
			<input type="password" name="password" id="password" class="login_area_input mar8" maxlength="16" />
			<div class="check_str">
				<input type="text" name="verify" class="login_area_ckstr" id="validate" maxlength="4" />
				<span><img id="ckstr" name="ckstr" src="__URL__/verify" title="看不清？点击更换" align="absmiddle" style="cursor:pointer;" onClick="this.src=this.src+'?'" /> <a href="javascript:;" onClick="var v=document.getElementById('ckstr');v.src=v.src+'?';return false;">看不清?</a></span></div>
			<div class="hr_20"></div>
			<input type="submit" class="login_area_btn" value="" style="cursor:pointer;" />
			<input type="hidden" name="dopost" value="login" />
		</form>
	</div>
	<div class="login_area_text">感谢您使用 <span>北院</span> 产品</div>
</div>
<div class="login_copyright">© 2013 河北北方学院软件研发中心</div>
</body>
</html>