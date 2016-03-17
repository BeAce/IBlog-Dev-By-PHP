<?php
	header("Content-Type:text/html;   charset=utf-8"); 
	require_once('../connect.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(!$username) {
		echo "<script>alert('用户名不能为空！');window.location.href='signin.php'</script>";
	}else if(!$password) {
		echo "<script>alert('密码不能为空！');window.location.href='signin.php'</script>";
	}else{
		$sql = "select * from signin where username='$username' and password='$password'";
	
		$query = mysql_query($sql);
		if(mysql_num_rows($query)) {
			echo "<script>window.location.href='article.manage.php'</script>";
		}else {
			echo "<script>alert('登陆失败!');window.location.href='signin.php'</script>";
		}
	}
	
?>