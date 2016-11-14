<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="维系系统" />
<meta name="keywords" content="维修系统" />
 <title>太和县公安局电脑维修系统</title>
 <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
<!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
<!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
<!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/jquery/jquery.print.js"></script>
    <!-- print JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
	<!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>
	<!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
     <script src="script/javascript.js"></script>

<!-- 
<script src="script/validation/lib/jquery.js"></script> -->
<script src="script/validation/dist/jquery.validate.min.js"></script>
<script src="script/validation/dist/localization/messages_zh.js"></script>


<style>
.error{
    color:red;
    float: right;
}
</style>

</head>
<body>
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0;width:80%;margin:auto">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">电脑送修系统</a>
                
            </div>
     		
            <ul class="nav navbar-top-links navbar-right">
            <a href="admin/list.php" class="houtai">
                <button type="button" class="btn btn-default btn-lg">后台管理</button>
                </a>
                <a href="repair.php">
                <button type="button" class="btn btn-default btn-lg">送修申请</button>
                </a>
            
               <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="admin/login.php"><i class="fa fa-user fa-fw"></i>登陆</a>
                        </li>
                        <li><a href="admin/yanzheng.php?logout"><i class="fa fa-sign-out fa-fw"></i>退出</a>
                        </li>
                      	
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <!-- /.navbar-static-side -->
        </nav>
<?php
if(isset($_SESSION['p_no']))
                {
                    echo  "<script>$('.houtai').show();</script>";
                }
                else
                {
                    echo  "<script>$('.houtai').hide();</script>";
                }
?>