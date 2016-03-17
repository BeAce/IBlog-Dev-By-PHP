<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>singin</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<style>
	.signin {
		margin: 100px auto;
	}
	.form-signin {
		margin-top: 50px;
	}
	</style>
</head>
<body>
<?php include 'header.php'?>
<div class="container signin">
	<h1>后台登陆</h1>
	<form action="article.signin.handler.php" class="form-signin" method="post">
		<div class="form-group">
			<label for="username">用户名：</label>
			<input type="text" class="form-control" name="username" id="username" placeholder="用户名">
		</div>
		<div class="form-group">
			<label for="password">密码：</label>
			<input type="password" class="form-control" name="password" id="password" placeholder="密码">
		</div>
		<input type="submit" class="btn btn-info btn-block" value="登陆" onclick="checkSigin(e)">
	</form>
</div>
<?php include '../footer.php'?>

</body>
</html>