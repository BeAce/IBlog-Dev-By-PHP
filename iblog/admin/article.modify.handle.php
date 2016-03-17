<?php 
	require_once('../connect.php');
	$id = $_POST['id'];
	$title = $_POST['title'];
	$label = $_POST['label'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['contents'];
	$dateline =  time();
	$updatesql = "update articles set title='$title',author='$author',description='$description',content='$content',dateline=$dateline,label='$label' where id=$id";
	if(mysql_query($updatesql)){
		echo "<script>alert('修改文章成功');window.location.href='article.manage.php';</script>";
	}else{
		echo "<script>alert('修改文章失败');window.location.href='article.manage.php';</script>";
	}
?>