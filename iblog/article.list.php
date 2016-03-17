<?php 
	header("Content-type:text/html;charset=utf-8");
	require_once('connect.php');
	// 传入页码
	$page = $_GET['p']; 
	$pageSize = 5;
	// 根据页码取出数据 select * from articles limit 起始页数，显示条数
	$sql = "select * from articles order by dateline desc limit " .($page-1)*$pageSize .",{$pageSize}";
	// echo $sql;
	$result = mysql_query($sql);
	// 获取总数据
	$totalSql = "select count(*) from articles";
	$totalResult = mysql_fetch_array(mysql_query($totalSql));
	$total = $totalResult[0];
	// 总页数
	$totalPage = ceil($total/$pageSize);
	
	$sqlLable = "select label from articles";
	$queryLabel = mysql_query($sqlLable);
	
	while($row = mysql_fetch_assoc($result)) {
		$data[] = $row;
	}
	mysql_free_result($result);	
		
	if($queryLabel && mysql_fetch_row($queryLabel)) {
		while($rowLabel = mysql_fetch_assoc($queryLabel)) {
			$dataLabel[] = $rowLabel;
		}	
	}
	
?>

<?php include 'header.php'?>
<!--body start-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-1 col-md-7 col-md-offset-2 col-lg-8 col-lg-offset-2" style="margin-top:10px;">
				<?php
					if(empty($data)){
						echo "<p class='lead'>当前没有文章，请联系管理员！<p>";
					}else{
						foreach($data as $value){
							// echo "<script>console.log($value);</script>";
						
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
						<a href="article.show.php?id=<?php echo $value['id']?>" class="pull-right btn btn-default btn-sm btn-primary">查看所有内容 》</a>
						<div style="clear:both"></div>
					</div>
					
				</div>
				<?php
					}
				}
				?>	
			</div>
			<div class="col-sm-3 col-md-3 visible-sm visible-md visible-lg col-lg-2" style="height:100%;position: fixed;right:0;top:0;background: #444;padding-top: 80px;">
				<h2 class="h2" style="color: #fff">热门标签</h2>
				<?php
					if(!empty($dataLabel)) {
						foreach($dataLabel as $value) {
				?>
				<a href="article.show.bylabel.php?label=<?php echo $value['label']?>"><code class="hot-label"><?php echo $value['label']?></code></a>
				<?php
						}
					}
				?>
			</div>
		</div>
		<div class="container pages">
			<?php
				$pagebanner="";
				if($page > 1){
					$pagebanner .= "<a href='".$_SERVER['PHP_SELF']."?p=1'>首页</a>";
					$pagebanner .= "<a href='".$_SERVER['PHP_SELF']."?p=". ($page-1) ."'>上一页</a>";
				}
				// $page = $_GET['p'];
				if($page < $totalPage){
					$pagebanner .= "<a href='".$_SERVER['PHP_SELF']."?p=". ($page+1) ."'>下一页</a>";
					$pagebanner .= "<a href='".$_SERVER['PHP_SELF']."?p=". $totalPage ."'>尾页</a>";
				}
				
				echo $pagebanner."，共".$totalPage."页";
				
		 	?>
		</div>
	</div>
		
<!--body end-->
<?php include 'footer.php'?>
<script>	
	$(window).scroll(function(){
		var $screenHeight = $(window).height();
		var $scrollHeight = $(window).scrollTop();
		if($scrollHeight > 100){
			$("#abc").fadeIn();
		}else{
			$("#abc").fadeOut();
		}
	})
	$("#abc").click(function(){
		$('body,html').animate({scrollTop:0},800);  
	})
</script>
</body>
</html>