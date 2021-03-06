<?php
	class  TypeAction extends Action{
		//分类显示首页
		public function Index()
		{
			header("Content-Type:text/html; charset=utf-8");
			$type=M("type");
			$list=$type->where('f_id=0')->select();
			foreach($list as $key=>$val)
			{
				$list1=$type->where("f_id='$val[typeid]]'")->select();
				$count=$type->where("f_id='$val[typeid]]'")->count();
				foreach($list1 as $key1=>$val1)
				{
					$kcount=$key1+1;
					if($count==$kcount)
					{
						$line="└";
					}else
					{
						$line="├";
					}
					$lista=$type->where("typeid='$val1[f_id]'")->find();
					if($val1[status]=="1")
					{
						$status="已审核";
					}else
					{
						$status="未审核";
					}
					$nbsp="&nbsp;&nbsp;&nbsp;&nbsp;";
					$var.="<tr align='center' class='mgr_tr'>
								<td height='30px'>$nbsp <span class='sub_type'> $val1[typename]</span></td>
								<td>$lista[typename]</td>
								<td title='点击更新审核状态'><a href='__URL__/changestatus/typeid/$val1[typeid]'>$status</a></td>
								<td><a href=\"__URL__/edit/typeid/$val1[typeid]\">编辑</a>
									||<a href=\"__URL__/del/typeid/$val1[typeid]\"  onClick=\"JavaScript:return confirm('您确定要删除该分类码？')\" >删除</a>
								</td>
							</tr>";	
				}
				if($val[status]=="1")
				{
					$status="已审核";
				}else
				{
					$status="未审核";
				}
				$arr[]="<tr align='center' class='mgr_tr'>
								<td height='30px'>$val[typename]</td>
								<td>无</td>
								<td title='点击更新审核状态'><a href='__URL__/changestatus/typeid/$val[typeid]'>$status</a></td>
								<td><a href='__URL__/edit/typeid/$val[typeid]'>编辑</a>
									||<a href='__URL__/del/typeid/$val[typeid]' onClick=\"JavaScript:return confirm('您确定要删除该分类及该分类的子类吗？')\" >删除</a>
								</td>
					   </tr>".$var;	
				unset($var);
				
			}
			$this->assign("arr",$arr);
			$this->display();
		}
		
		//分类添加界面
		public function add()
		{
			header("Content-Type:text/html; charset=utf-8");
			
			//循环显示一级分类信息
			$type=M("type");
		  	$list=$type->where('f_id=0')->select();
		 	$this->assign("list",$list);
		 	$this->display();
		}
		
		//分类添加操作页面
		public function doadd()
		{
			header("Content-Type:text/html; charset=utf-8");
			$type=M("type");
			$data["typename"]=$_POST["typename"];
			$data["f_id"]=$_POST["f_id"];
			$data["status"]=$_POST["status"];
			if($type->create())
			{
				if($type->data($data)->add())
				{
					$this->success("分类添加成功!");
				}else
				{
					$this->error("对不起，系统出错，请重新添加分类!");
				}
			}
			else
			{
				$this->error("对不起，数据压入失败，请重新操作!");
			}
			$this->display();
			
		}
		
		//更新审核状态方法
		public function changestatus()
		{
			header("Content-Type:text/html; charset=utf-8");
			$typeid=$_GET["typeid"];
			$type=M("type");
			$list=$type->where("typeid='$typeid'")->find();
			if($list[status]==1)
			{
				$status=2;
			}else
			{
				$status=1;
			}
			$data["status"]=$status;
			$success=$type->where("typeid='$typeid'")->save($data);
			if($success)
			{
				$this->success("审核状态修改成功!");
			}else{
				$this->error("对不起，审核状态修改失败，请重新修改!");
			}
			
			
		}
		//修改页面显示
		public function edit()
		{
			header("Content-Type:text/html; charset=utf-8");
			$typeid=$_GET["typeid"];
			$type=M("type");
			$list=$type->where("typeid='$typeid'")->find();
			if($list[f_id]==0)
			{
				$lista=$type->where("f_id=0")->select();
				
			}else
			{
				$list1=$type->where("typeid ='$list[f_id]'")->find();
				$lista=$type->where("typeid !='$list1[typeid]' and f_id=0")->select();
			}
			$this->assign("list",$list);
			$this->assign("lista",$lista);
			$this->assign("list1",$list1);
			$this->display();
		}
		//更新操作页面
		public function doedit()
		{
			header("Content-Type:text/html; charset=utf-8");
			$typeid=$_POST["typeid"];
			$data["typename"]=$_POST["typename"];
			$data["f_id"]=$_POST["f_id"];
			$data["status"]=$_POST["status"];
			$type=M("type");
			$success=$type->where("typeid='$typeid'")->save($data);
			if($success)
			{
				$this->success("恭喜你，栏目信息更新成功!");
			}else
			{
				$this->error("对不起，栏目信息更新失败，请重新更新！");
			}
		}
		//删除操作页面
		public function del()
		{
			header("Content-Type:text/html; charset=utf-8");
			$typeid=$_GET["typeid"];
			$type=M("type");
			$type->where("f_id ='$typeid'")->delete();
			$success=$type->where("typeid='$typeid'")->delete();
			if($success)
			{
				$this->success("恭喜你，该分类及分类的子类都已经删除！");
			}else
			{
				$this->error("对不起，栏目删除失败，请你重新删除！");
			}
			
		}
		
	
	
	}

?>