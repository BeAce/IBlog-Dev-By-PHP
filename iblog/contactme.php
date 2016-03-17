<?php 
	require_once('connect.php');
	$sql = "select * from  introduce";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		$contact = mysql_result($query,0,'contact');
	}
?>
<?php include 'header.php'?>
	<!--body start-->
	<div class="container" style="margin-top:20px;max-width:800px;min-height:300px">
		<div class="panel panel-default panel">
			<div class="panel-heading">Contact Me</div>
			<div class="panel-body">
			
				<div class="media">
					<div class="media-left">
						<a href="javascript:;"><img class="media-object" src="images/myself.jpg"></a>
					</div>
					<div class="media-body" style="font-family:'Microsoft Yahei'">
						<h4 class="media-heading h4">作者：<span class="lead">BeAce</span></h4>
						<p><?php echo $contact?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--body end-->
<?php include 'footer.php'?>
</body>
</html>