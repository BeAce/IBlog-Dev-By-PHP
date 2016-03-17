<?php 
	require_once('connect.php');
	$key = $_GET['key'];
	$sql = "select * from articles where title like '%$key%' order by dateline desc";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>
<?php include 'header.php'?>
	
<!--body start-->
<div class="container" style="margin-top:10px;">
	<?php
		if(empty($data)){
			echo "<p class='lead text-center'>当前没有文章，请联系管理员！<p>";
		}else{
			foreach($data as $value){
				// echo "<script>console.log($value);</script>";
			
	?>
	<div class="panel panel-default panel-info panel-hover" style="margin:10px;">
		<div class="panel-heading">
			<div class="media">
				<a href="#" class="pull-left">
					<img class="img-responsive img-rounded" src="images/myself.jpg" alt="作者">
				</a>
				<div class="media-body">
					<h4 class="media-heading lead"><?php echo $value['title']?></h4>
					<div style="font-family:'Microsoft Yahei'"><?php echo $value['description']?></div>
					
				</div> 
			
			</div>
		</div>		
		<div class="panel-footer">
			
			<i class="pull-left">标签：<code>bootstrap</code></i>
			<a href="article.show.php?id=<?php echo $value['id']?>" class="pull-right btn btn-default btn-sm btn-primary">查看所有内容 》</a>
			<div style="clear:both"></div>
		</div>
		
	</div>
	<?php
		}
	}
	?>	
</div>
<!--body end-->
<?php include 'footer.php'?>
</body>
</html>