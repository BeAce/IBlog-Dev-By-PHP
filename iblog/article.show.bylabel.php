<?php 
	include 'header.php';
	require_once('connect.php');
	$label = $_GET['label'];
	$sql = "select * from articles where label='$label'";
	$query = mysql_query($sql);
	if($query && mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>
<div class="col-sm-8 col-sm-offset-1 col-md-7 col-md-offset-2 col-lg-8 col-lg-offset-2" style="margin-top:10px;">
	<?php
		if(empty($data)){
			echo "<p class='lead'>当前没有文章，请联系管理员！<p>";
		}else{
			foreach($data as $value){
	?>
	<div class="panel panel-default  panel-hover" style="margin:10px;">
		<div class="panel-heading">
			<div class="media">
				<a href="#" class="pull-left">
					<img class="img-responsive img-rounded" src="images/myself.jpg" alt="作者">
				</a>
				<div class="media-body">
					<h4 class="media-heading lead"><a href="article.show.php?id=<?php echo $value['id']?>"><?php echo $value['title']?></a></h4>
					<div style="font-family:'Microsoft Yahei'"><?php echo $value['description']?></div>
				</div> 
			</div>
		</div>		
		<div class="panel-footer">
			<i class="pull-left">标签：<code><?php echo $value['label']?></code></i>
			<a href="article.show.php?id=<?php echo $value['id']?>" class="pull-right btn btn-default btn-sm btn-primary">查看所有内容 ></a>
			<div style="clear:both"></div>
		</div>
		
	</div>
	<?php
		}
	}
	?>	
</div>

<?php include 'footer.php'?>
</body>
</html>