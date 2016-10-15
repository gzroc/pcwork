<?php

include_once'head.php';   
include_once'bridge.php';
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
                                        <th>送修单位</th>
                                        <th>联系人</th>
                                        <th>联系电话</th>
                                        <th>送修时间</th>
                                        <th width="10%">维修状态</th>
                                        <th class='dis' width="10%">操作管理</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php

                                  $m= new M();
                                  $data=$m->FetchAll('fofo_repair','depart_id,p_name,p_photo,date_time,c_state','','','0,40');
                                  //$data=$m->FetchAll('fofo_department','id,depart_name','','',$limit);
                                  foreach ($data as $v) {

                                        if($v['c_state']==0)
                                        {
                                        $stat='<button type="button" class="btn btn-warning btn-circle center-block "><i class="fa fa-times"></i>
                                                                </button></td>
                                                                                 <td class="dis"  style="display:none;" ><a href="admin/login.php">开始维修</a></td>
                                                                        </tr>';
                                        }else
                                        
                                        {
                                           $stat='<button type="button" class="btn btn-info btn-circle center-block"><i class="fa fa-check"></i>
                                                                </button></td>
                                                                <td class="dis"  style="display:none;" > 
                                                                <button type="button" class="btn btn-info btn-circle center-block"><i class="fa fa-check"></i>
                                                                </button>  </td></tr>'; 
                                        }

                                     
                                        echo ' <tr class="odd gradeX"><td>'.$v['depart_id'].'</td>
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