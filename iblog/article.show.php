<?php 
	require_once('connect.php');
	$id = intval($_GET['id']);
	$sql = "select * from articles where id=$id";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		$row = mysql_fetch_assoc($query);
	}else{
		echo "<p class='h4'>这篇文章不存在</p>";
		exit;
	}
?>
<?php include 'header.php'?>
	<!--body start-->
	<div class="container" style="margin-top:20px;">
		<div class="panel panel-ddd">
			<div class="panel-heading text-center"><h3 class="h3 lead" style="color:#333"><?php echo $row['title']?></h3></div>
			<div class="panel-body">
				<div class="media">
					<!-- <div class="media-left visible-lg-inline-block">
						<a href="javascript:;"><img class="media-object" src="images/myself.jpg"></a>
					</div> -->
					<div class="media-body" style="font-family:'Microsoft Yahei'">
						<div class="media-heading">
							<pre><span class="pull-left">作者：<code><?php echo $row['author']?></code></span><span class="pull-right"> 时间：<code><?php echo date('Y-m-d h:i:s',$row['dateline'])?></code></span></pre>
						</div>
						<p><?php echo $row['content']?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--body end-->
<?php include 'footer.php'?>
</body>
</html>