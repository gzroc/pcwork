<?php
include_once '../bridge.php';
$m=new M();
			
			if(isset($_POST['p_no']))
			{
						$where=$_POST['p_no'];
						$query='select * from fofo_people where id='.$where;
						$data=$link->query($query);
					if($data->num_rows>0)
               	 {	
                     if($data = $m->GetRow("SELECT `p_no`,`p_psw` FROM `fofo_people` WHERE p_no=".$_POST['p_no']))
                     {	

                        if ($data['p_no']==$_POST['p_no']&&$data['p_psw']==$_POST['p_psw']) 
                        {
                               $_SESSION['p_no']=$data['p_no'];
                               $vlue=$data['p_no'];
                               $vlue=$_SESSION['p_no'];
                               echo "<script>alert('登陆成功".$vlue."');location.href='list.php'</script>";
						}
						else
	                     {
	                     	echo "<script>alert('用户名密码错误');location.href='login.php'</script>";
	                     }
                     }
                     
                }
                else
                {  
                	echo "<script>alert('用户名不存在');location.href='login.php'</script>";
                }
  		 }
  		 else if(isset($_GET['logout']))
  		 {
  		 	session_start();
			unset($_SESSION['p_no']);
			echo "<script>alert('您已成功登出！');location.href='../index.php'</script>";
  		 }




?>