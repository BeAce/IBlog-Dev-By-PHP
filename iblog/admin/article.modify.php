<?php
	require_once('../connect.php');
	//读取旧信息
	$id = $_GET['id'];
	//echo $id;
	$query = mysql_query("select * from articles where id=$id");
	$data = mysql_fetch_assoc($query);
	include 'header.php'
?>
	<!--body start-->
	<div class="container">
		<!--form start-->
		<form role="form" id="form1" name="form1" method="post" action="article.modify.handle.php">
		<input type="hidden" name="id" value="<?php echo $data['id']?>" />
			<div class="form-group">
				<label for="title">标题：</label>
				<input type="text" class="form-control" id="title" name="title" value="<?php echo $data['title']?>">
			</div>
			<div class="form-group">
				<label for="label">标签：</label>
				<input type="text" class="form-control" id="label" name="label" value="<?php echo $data['label']?>">
			</div>
			<div class="form-group">
				<label for="author">作者：</label>
				<input type="text" class="form-control" id="author" name="author" value="<?php echo $data['author']?>">
			</div>
			<div class="form-group">
				<label for="description">简介：</label>
				<textarea name="description" id="description" class="form-control" cols="30" rows="2"><?php echo $data['description']?></textarea>
			</div>
			<div class="form-group">
				<label for="contents">内容：</label>
				<!-- UEditor read the article's contents by unique id -->
				<script id="container" name="contents" type="text/plain"><?php echo $data['content']?></script>
			</div>
			<button name="button" id="button" type="submit" class="btn btn-info" style="width:100%;outline:none">提交</button>
		</form>
		<!--form end-->
	</div>
	
	<!--body end-->
<?php include '../footer.php'?>
<script type="text/javascript" src="../plugins/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
<script type="text/javascript" src="../plugins/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->	
<script type="text/javascript">
	var ue = UE.getEditor('container');
	// SyntaxHighlighter.all();
</script>
</body>
</html>