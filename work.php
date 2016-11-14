<?php
include_once 'head.php';
include_once'bridge.php';
            

            if (isset($_POST['depart_id'])) 
	{
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
                 $insert_id=$link->insert_id;
                $link->close();
                //echo $insert_id;

           
          }elseif(isset($_GET['id']))
          {
                $id='id='.$_GET['id'];
                $m=new M();
                $data=$m->FetchAll('fofo_repair','id,depart_id,p_name,p_photo,date_time,c_fault',$id,'','');
                foreach($data as $v)
                {
                    $insert_id=$v['id'];
                    $depart_id=$v['depart_id'];;
                    $p_name=$v['p_name'];
                    $p_photo=$v['p_photo'];
                    $c_fault=$v['c_fault'];
                    $date_time=$v['date_time'];
                }
                
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
                                            <?php 
                                              $m= new M();
                                                $r_id='id='.$depart_id;
                                                $data=$m->FetchAll('fofo_department','depart_name',$r_id,'','');
                                                foreach ($data as $k) {
                                                $depart_name=$k['depart_name'];
                                                 }   
                                            echo $depart_name;
                                            ?> 
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
                                        	<td colspan="2">
												 <?php echo $p_photo;?> 
                                        	</td>
                                                    <td colspan="1">
                                                        <b>维修单号</b>
                                                    </td>
                                                <td colspan="2">
                                                     <?php echo $insert_id;?> 
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
                                         <tr>
                                            <td colspan="6" style='text-align:center'><b>科技信息化考核（2分）</b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" style='text-align:left'>
                                               <p>一、科技管理员（1分）</p>
                                               <p>1.各派出所必须有一名科技管理员完成所内的所有科技管理工作，若无
                                               科技管理员则扣除科技信息化考核1分。<br>
                                               2.科技管理员必须熟练掌握公安系统安装和公安计算机必装软件的安装
                                               每月底将定期检查各个派出所公安机关管必装软件安装率，达不到标准则
                                               扣除相应分数。<br>
                                               软件列表：一机两用，瑞星杀毒，安全服务助手，安管平台。
                                               </p>
                                                <p>二、科技信息化应用(1分)</p>
                                               <p>1.各科技管理员应做好本单位内部公安网计算机必装软件的安装和检查
                                               工作，能解决如系统崩溃之类的一般问题，重装系统可以解决的问题，送修
                                               网安大队将扣除绩效考核0.5分，重装系统解决不了的问题，从网安大队
                                               主页计算机保修系统填表报修。<br>
                                               2.科技管理员徐熟练掌握本单位内的办案区监控的使用及维护工作，能熟练查看
                                               、下载办公区监控，并保障办案区监控的网络畅通，若达不到以上要求则扣除
                                               绩效考核0.5分。<br>
                                               </p>
                                                <p>二、一机两用</p>
                                               <p>在任何一个月发生“一机两用”事故的，则取消全部绩效考核成绩。<br>
                                               </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive --> 
                            
                            <button onclick="jQuery('#fofo1').print()" type="submit" class="btn btn-danger">打印表格</button>
                            <a href="index.php" class="btn btn-success">返回主页</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                </div>	

		</div>
		<!-- /.panel -->
					 