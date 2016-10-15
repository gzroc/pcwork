<?php

include_once("bridge.php");

$m = new M(); 
$total = $m->Total('fofo_department');
$page = new PHPPage($total,10000); 

?>
<table width="1000" border="1" style="border-collapse:collapse; font-size:13px;">
<tr height="30">
  <th width="483">标题</th>
  <th width="141">来源</th>
 </tr>
<?php



$limit =$page->limit();
echo $limit;
$data=$m->FetchAll('fofo_department','id,depart_name','','',$limit);
foreach ($data as $v) { //循环取出数据
?>
<tr>
  <td align="center"><?php echo $v['id']; ?></td>
  <td align="center"><?php echo $v['depart_name']; ?></td>
</tr>
			<?php
					}
			?>
<tr>
  <td id="page" colspan="4"><?php echo $page->show(); ?></td> <!-- 调出分页类 -->


</tr>
</table>
<?php
echo $page->limit();
?>