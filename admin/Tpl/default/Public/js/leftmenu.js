/*
**************************
(C)2010-2013 phpMyWind.com
update: 2012-1-19 17:49:50
person: Feng
**************************
*/


$(function(){

	$(".viewport").css("height", $(".overview").height());
	$("#scrollmenu").tinyscrollbar();

	FirstLoad();

	$(window).resize(function(){
		FirstLoad();
	});
});


//点击操作
function DisplayMenu(id)
{
	$("div[id^=leftmenu][id!="+id+"]").hide();
	$(".title").removeClass("ton");
	
	var t = $("#"+id);
	t.toggle();
	
	if(t.css("display") == "block"){
		t.prev().addClass("ton");
	}else{
		t.prev().removeClass("ton");
	}
	FirstLoad();
}


//载入初始化
function FirstLoad()
{
	if($(".overview").height() > $(window).height()-118)
	{
		if($.browser.msie){ 
			$(".tGradient").show();
			$(".bGradient").show();
		}else{
			$(".tGradient").fadeIn(100);
			$(".bGradient").fadeIn(100);
		}

		$(".viewport").css({"height":$(window).height()-118, "overflow":"hidden"});
	}
	else
	{
		if($.browser.msie){ 
			$(".tGradient").hide();
			$(".bGradient").hide();
		}else{
			$(".tGradient").fadeOut(100);
			$(".bGradient").fadeOut(100);
		}

		$(".viewport").css({"height":$(".overview").height(), "overflow":"none"});
	}

	$("#scrollmenu").tinyscrollbar_update("relative");
}