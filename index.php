<?php
include_once'head.php';   
include_once'bridge.php';
    if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $query="UPDATE `fofo_repair` SET `c_state`=4 WHERE id=".$id;
                        if($link->query($query))
                        {
                          //  echo $_GET['id'].'号机器被领走';
                         }     
                        $link->close();               
                 }
?>


			<div class="row" style="width:75%; margin:auto; margin-top:20px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           电脑维修列表
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                            <td colspan="6" style='text-align:left'>
                                            <h3 style='text-align:center'>科技信息化考核细则</h3>
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
                                    <tr>
                                        <th>送修单位</th>
                                        <th>联系人</th>
                                        <th>联系电话</th>
                                        <th>送修时间</th>
                                        <th width="15%">维修状态</th>
                                        <th class='dis'  style='display:none' width="10%">操作管理</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                  $m= new M();
                                  $data=$m->FetchAll('fofo_repair','id,depart_id,p_name,p_photo,date_time,c_state','c_state<>4','c_state DESC','0,40');
                                  //$data=$m->FetchAll('fofo_department','id,depart_name','','',$limit);
                                  foreach ($data as $v) {

                                        if($v['c_state']==0)
                                        {
                                        $stat='<button type="button" class="btn btn-warning btn-circle "><i class="fa fa-times"></i>
                                                                </button>
                                                              <button type="button"  class="print_id btn btn-outline btn-primary btn-sm" value="'.$v['id'].'">打印表格</button>
                                                                </td>
                                                                                 <td class="dis"  style="display:none;" >
                                                                                 <button type="button" class="weixiu_id btn btn-outline btn-primary btn-sm center-block" value="'.$v['id'].'">开始维修</button>
                                                                                 </td>
                                                                        </tr>';
                                                               
                                        }else
                                        
                                        {
                                           $stat='<button type="button" class="btn btn-info btn-circle center-block"><i class="fa fa-check"></i>
                                                                </button></td>
                                                                <td class="dis"  style="display:none;" > 
                                                                       
                                                                           <button type="button" class="lingqu_id btn btn-info btn-circle center-block" value="'.$v['id'].'"><i  class="fa fa-check"></i>
                                                                           </button> 
                                                                      
                                                                </td></tr>'; 
                                        }
                                        $m= new M();
                                        $r_id='id='.$v['depart_id'];
                                        $data=$m->FetchAll('fofo_department','depart_name',$r_id,'','');
                                         foreach ($data as $k) {
                                                $depart_name=$k['depart_name'];
                                            }   
                                     
                                        echo ' <tr class="odd gradeX"><td>'. $depart_name.'</td>
                                             <td>'.$v['p_name'].'</td>
                                                <td>'.$v['p_photo'].'</td>
                                             <td>'.$v['date_time'].'</td>
                                                <td>'.$stat;

                                  }

                                ?>


                                   
                                                
                                    
                                  
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


</body>
</html>
<?php
                if(isset($_SESSION['p_no']))
                {
                    echo  "<script>$('.dis').show();</script>";
                }
                else
                {
                    echo  "<script>$('.dis').hide();</script>";
                }
?>