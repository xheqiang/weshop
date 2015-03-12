<?php
	class IndexAction extends Action{
		public function Index(){
			header("Content-Type:text/html; charset=utf-8");
			//echo "这是管理员界面";
			$this->display();
		}
		public function main(){
			header("Content-Type:text/html; charset=utf-8");
			$username=$_POST[username];
			$password=md5($_POST[password]);
			$verify=md5($_POST[verify]);
			if($verify==$_SESSION[verify]){
				$user=M('user');
				$list=$user->where("username='$username' && isadmin=1")->find();
				if($list!=""){
					if($list[password]==$password){
						echo "<script>alert('登陆成功！');</script>";
						$this->display();
					}else{
						echo "<script>alert('请检查用户名和密码');window.history.back(-1);</script>";
					}
				}else{
					echo "<script>alert('请检查用户名和密码');window.history.back(-1);</script>";
				}
			}else{
				echo "<script>alert('验证码错误，请重新登陆！');window.history.back(-1);</script>";
			}
		}
		public function verify(){
			header("Content-Type:text/html; charset=utf-8");
			import("ORG.Util.Image");
			Image::buildImageVerify(4,1,gif,50,30,'verify');
		}
	}
?>