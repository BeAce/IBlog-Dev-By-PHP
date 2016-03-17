<?php
	require_once('../connect.php');
	$sql = "select * from articles order by dateline desc";
	$query  = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row =mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}else{
		$data = array();
	}
	include 'header.php'
?>
<div class="table-responsive">
	<table class="table">
	  <tr>
        <th>编号</th>
        <th>标题</th>
        <th>操作</th>	   
		<?php 
			if(!empty($data)){
				foreach($data as $value){
		?>
	      <tr>
	        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
	        <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['title']?></td>
	        <td bgcolor="#FFFFFF">
	          <a href="article.del.handler.php?id=<?php echo $value['id']?>">删除</a> 
	          <a href="article.modify.php?id=<?php echo $value['id']?>">修改</a>
	        </td>
	      </tr>
	        <?php
	        		}
			}
	        ?>
	    </table></td>
	  </tr>
	</table>
</div>

<?php include '../footer.php'?>
</body>
</html>
