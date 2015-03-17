<?php
	class IndexAction extends Action{
		//登录首页
		public function Index(){
			header("Content-Type:text/html; charset=utf-8");
			//echo "这是管理员界面";
			$this->display();
		}
		//登录成功主界面
		public function main(){
			session_start();
			header("Content-Type:text/html; charset=utf-8");
			$username=$_POST[username];
			$password=md5($_POST[password]);
			$verify=md5($_POST[verify]);
			if($verify==$_SESSION[verify]){
				$user=M('user');
				$list=$user->where("username='$username' && isadmin=1")->find();
				if($list!=""){
					if($list[password]==$password){
						$_SESSION["isadmin"]=1;
						$_SESSION["username"]=$list["userid"];
						echo "<script>alert('登陆成功！');</script>";
						$this->display();
					}else{
						echo "<script>alert('请检查用户名和密码');</script>";
						$this->display("index");
						
					}
				}else{
					echo "<script>alert('请检查用户名和密码');</script>";
					$this->display("index");
				}
			}else{
				echo "<script>alert('验证码错误，请重新登陆！');</script>";
				$this->display("index");
			}
		}
		//生成验证码
		public function verify(){
			header("Content-Type:text/html; charset=utf-8");
			import("ORG.Util.Image");
			Image::buildImageVerify(4,1,gif,50,30,'verify');
		}
		//登录成功界面左侧
		public function left()
		{
			session_start();
			if($_SESSION["isadmin"]!=1)
			{
				header("Content-Type:text/html; charset=utf-8");
				echo "<script>alert('请你使用正确的方式登录！');window.location.href='../'</script>";
			}
			header("Content-Type:text/html; charset=utf-8");
			$this->display();	
		}
		//登录成功界面右侧
		public function right()
		{
			session_start();
			if($_SESSION["isadmin"]!=1)
			{
				header("Content-Type:text/html;charset=utf-8");
				echo "<script>alert('请你使用正确的方式登录！');window.location.href='../'</script>";
			}
			header("Content-Type:text/html;charset=utf-8");
			$this->display();
			
		}
		
	}
?>