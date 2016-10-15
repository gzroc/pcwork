<?php
include_once 'head.php';
include_once'bridge.php';



	if (isset($_POST['depart_id'])) 
	{

	    #code...
				$depart_id=$_POST['depart_id'];
                $p_name=$_POST['p_name'];
                $p_photo=$_POST['p_photo'];
                $c_brand=$_POST['c_brand'];
                $c_fault=$_POST['c_fault'];
                $c_state='0'; # 0 维修排队 1 维修完毕。
                $date_time=date('Y-m-d H:i:s',time());
                $query="INSERT INTO `fofo_repair`( `depart_id`, `p_name`, `p_photo`, `c_brand`, `c_fault`, `c_state`, `date_time`) 
                        VALUES ('".$depart_id."','".$p_name."','".$p_photo."','".$c_brand."','".$c_fault."','".$c_state."','".$date_time."')";
                
                if($link->query($query))
                    echo 1;

           
    }







?>
		<div  style="width: 80%;margin: 0 auto">
					
			<div  class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            送修表格
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id='fofo1' class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan='6' style='text-align:center'><p class="lead">太和县网安大队维修电脑清单</p></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="13%"><b>单位</b></td>
                                            <td width="20%"> 
                                            <?php echo $depart_id;?> 
                                            </td>
                                            <td width="13"><b>联系人</b></td>
                                            <td width="20%">
											<?php echo $p_name;?> 	
                                             </td>
                                            <td width="10%"><b>日期</b></td>
                                            <td width="20">
                                            <?php echo $date_time;?> 
                                             </td>
                                        </tr>
                                        <tr>
                                        	<td>
                                        		<b>电话</b>
                                        	</td>
                                        	<td colspan="5">
												 <?php echo $p_photo;?> 
                                        	</td>

                                        </tr>
                                        <tr>
                                        	<td colspan="6" style='text-align:center'><b>问题描述</b></td>
                                        </tr>
                                        <tr>
                                        	<td colspan="6" style='text-align:center'>
                                        		<?php echo $c_fault;?> 
                                        	</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive --> 
                            
                            <button onclick="jQuery('#fofo1').print()" type="submit" class="btn btn-danger">打印表格</button>
                            <a href="repair.php" class="btn btn-success">返回主页</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                </div>	

		</div>
		<!-- /.panel -->
					 