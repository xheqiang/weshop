<?php
	class GoodsAction extends Action
	{
		//首页显示
		public function index()
		{
			session_start();
			if($_SESSION["isadmin"]!=1)
			{
				header("Content-Type:text/html;charset=utf-8");
				echo "<script>alert('请你使用正确的方式登录！');window.location.href='../'</script>";
			}
			
			header("Content-type:text/html; charset=utf-8");
			$this->display();
		}
		//添加商品页面
		public function add()
		{
			session_start();
			if($_SESSION["isadmin"]!=1)
			{
				header("Content-Type:text/html;charset=utf-8");
				echo "<script>alert('请你使用正确的方式登录！');window.location.href='../'</script>";
			}
			
			header("content-type:texgt/html; charset=utf-8");
			$this->display();
		}
		//商品展示图片上传
		public function uploadimg()
		{
			session_start();
			if($_SESSION["isadmin"]!=1)
			{
				header("Content-Type:text/html;charset=utf-8");
				echo "<script>alert('请你使用正确的方式登录！');window.location.href='../'</script>";
			}
			
			header("Content-Type:text/html;charset=utf-8");
			import("ORG.Net.UploadFile"); 
			$upload = new UploadFile(); //  实例化上传类 
			$upload->maxSize  = 3145728 ; //  设置附件上传大小 
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','bmp'); //  设置附件上传类型 
			$savepath= '../Public/Uploads/';
			if (!file_exists($savepath))
			{
				mkdir($savepath);
			}
			$upload->savePath =  $savepath;// 设置附件上传目录
			if(!$upload->upload()) 
			{// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else
			{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}
	
		}
		
	}
?>