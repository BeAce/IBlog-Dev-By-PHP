<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="../images/favicon.ico" rel="bookmark" type="image/x-icon" /> 
	<link href="../images/favicon.ico" rel="icon" type="image/x-icon" /> 
	<link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<title>添加文章</title>
</head>
<body style="padding-top:60px;">
	<!--header start-->
	<div class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
		<div class="container text-center">
			  <div class="navbar-header">
			     　<!-- .navbar-toggle样式用于toggle收缩的内容，即nav-collapse collapse样式所在元素 -->
			       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			         <span class="sr-only">Toggle Navigation</span>
			         <span class="icon-bar"></span>
			         <span class="icon-bar"></span>
			         <span class="icon-bar"></span>
			       </button>
			       <!-- 确保无论是宽屏还是窄屏，navbar-brand都显示 -->
			       <a href="../index.php" class="navbar-brand">BeAce's blog</a>
			  </div>
  <!-- 屏幕宽度小于768px时，div.navbar-responsive-collapse容器里的内容都会隐藏，显示icon-bar图标，当点击icon-bar图标时，再展开。屏幕大于768px时，默认显示。 -->
			  <div class="collapse navbar-collapse navbar-responsive-collapse">	
					<ul class="nav navbar-nav">
						<li><a href="#">后台管理系统</a></li>
						<li class="active"><a href="article.add.php">发布文章</a></li>
						<li><a href="article.manage.php">管理文章</a></li>
					</ul>
			  </div>
  		</div>
	</div>
	<!--header end-->