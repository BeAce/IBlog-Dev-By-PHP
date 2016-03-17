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
	<!--body start-->
	<div class="container">
		<!--form start-->
		<form role="form" id="form1" name="form1" method="post" action="article.add.handler.php">
			<div class="form-group">
				<label for="title">标题：</label>
				<input type="text" class="form-control" id="title" name="title" placeholder="请输入文章标题">
			</div>
			<div class="form-group">
				<label for="label">标签：</label>
				<input type="text" class="form-control" id="label" name="label" placeholder="请输入文章标签(多标签以空格隔开)">
			</div>
			<div class="form-group">
				<label for="author">作者：</label>
				<input type="text" class="form-control" id="author" name="author" placeholder="请输入文章作者">
			</div>
			<div class="form-group">
				<label for="description">简介：</label>
				<textarea name="description" id="description" class="form-control" cols="30" rows="2"></textarea>
			</div>
			<div class="form-group">
				<label for="contents">内容：</label>
				<!--<textarea name="contents" id="contents" class="form-control" cols="30" rows="10"></textarea>-->
				<!-- 加载编辑器的容器 -->
				<script id="container" name="contents" type="text/plain"></script>
			</div>
			<button name="button" id="button" type="submit" class="btn btn-info" style="width:100%;outline:none">提交</button>
		</form>
		<!--form end-->
	</div>
	
	<!--body end-->
	
	<?php include 'footer.php'?>
</body>
</html>