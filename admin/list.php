<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="维系系统" />
<meta name="keywords" content="维修系统" />
 <title>太和县公安局电脑维修系统</title>
 <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
<!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
<!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/jquery/jquery.print.js"></script>
    <!-- print JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
	<!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
	<!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../script/javascript.js"></script>

</head>

<?php

include_once '../bridge.php';
$yanzheng=new yanzheng();
$yanzheng->checksesson($_SESSION['p_no']);


    $m = new M(); 
    $total = $m->Total('fofo_department');
    $page = new PHPPage($total,20);


?>
<body youdao="bind">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           
                     <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">电脑送修系统</a>
                
            </div>
            
            <ul class="nav navbar-top-links navbar-right">
                
               <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="login.php"><i class="fa fa-user fa-fw"></i>登陆</a>
                        </li>
                        <li><a href="yanzheng.php?logout"><i class="fa fa-sign-out fa-fw"></i>退出</a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
               <!-- /.navbar-top-links -->
<!-- [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar]-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav in" id="side-menu">
                     
                        <li>
                            <a href="list.php"><i class="fa fa-dashboard fa-fw"></i>总局概览</a>
                        </li>
                        <li class="">
                            <a href="charts.php"><i class="fa fa-bar-chart-o fa-fw"></i> 统计图表<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse" aria-expanded="true">
                                <li>
                                    <a href="#">纵向统计</a>
                                </li>
                                <li>
                                    <a href="#">横向统计</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                     
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>



<!--  [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar] [sidebar]/.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="min-height: 266px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">列表</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
         <div class="row" >
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          配件列表
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>部位</th>
                                        <th>品牌</th>
                                        <th>规格</th>
                                        <th>价格</th>
                                        <th width="10%">操作管理</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <?php



                                     $query='SELECT * FROM `fofo_spare`';
                                     $result=$link->query($query);
                                     while ($show=$result->fetch_array(MYSQLI_ASSOC)) 
                                     {
                                            

    echo ' <tr class="odd gradeX"><td>'.$show['part'].'</td><td>'.$show['brand'].'</td> <td>'.$show['size'].'</td><td>'.$show['price'].'.00</td><td><a href="login.html">修改</a>&nbsp;&nbsp;&nbsp;<a href="login.html">删除</a></td> </tr>';
                                     }
                                     ?>
                                        
                                        
                                   
                                   
                                </tbody>
                             </table>
                            <!-- /.table-responsive -->
                             
                                        <div class="form-group">
                                             <table id='addtable' style="display: none;" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                 <tbody>
                                                    <tr>
                                                    <td><input id='type' value="spare" style="display: none">
                                                        <input id='part' placeholder="部位" class="form-control"></td>
                                                    <td><input id='brand' placeholder="品牌"  class="form-control"></td>
                                                    <td><input id='size' placeholder="规格"  class="form-control"></td>
                                                    <td><input id='price' placeholder="价格"  class="form-control"></td>
                                                    <td width="10%"><button  type="submit" class="btn btn-default">确认增加</button></td>
                                                    </tr>

                                               </tbody>  

                                            </table>
                                           
                                        </div>
                            

                           <button id='add'  class="btn btn-default">增加配件项目</button>
                            <button id='quxiao' style="display: none;"   class="btn btn-default">取消增加</button>
                      
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

                            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          单位列表
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th width="20%">编号</th>
                                        <th>名称</th>
                                        <th width="10%">操作管理</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <?php

                                $limit =$page->limit();
                                $data=$m->FetchAll('fofo_department','id,depart_name','','',$limit);
                                foreach ($data as $show) { //循环取出数据
                                   
    echo ' <tr class="odd gradeX"><td>'.$show['id'].'</td><td>'.$show['depart_name'].'</td><td><a href="login.html">修改</a>&nbsp;&nbsp;&nbsp;<a href="login.html">删除</a></td>  </tr>';
                                     }
                                     ?>                                        
                                        
                                  
                                   
                                </tbody>
                             </table>
                            <!-- /.table-responsive -->

                             <div class="form-group">
                                 <?php
                                    echo $page->show();
                                    ?>
                             </div>
                                        <div class="form-group">
                                             <table id="deptable" style="display: none;" width="100%" class="table table-striped table-bordered table-hover">
                                                 <tbody>
                                                    <tr>
                                                    <td>
                                                        <input id="type" value="spare" style="display: none">
                                                        <input id="dep_name" placeholder="单位名称" class="form-control">
                                                     </td>
                                                   
                                                    
                                                    
                                                    <td width="10%"><button type="submit" class="btn btn-default">确认增加</button></td>
                                                    </tr>

                                               </tbody>  

                                            </table>
                                           
                                        </div>
                            

                           <button id="adddep" class="btn btn-default">增加单位</button>
                         <button id="quxiaodep"  style="display: none;" class="btn btn-default">取消增加</button>
                      
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
 </div>
    <!-- /#wrapper -->

   




</body>
</html>
