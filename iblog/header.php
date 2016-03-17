<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--告诉IE 使用最新的渲染模式-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="favicon.ico" href="images/favicon.ico" rel="bookmark" type="image/x-icon" /> 
	<link href="favicon.ico" href="images/favicon.ico" rel="icon" type="image/x-icon" /> 
	<link href="favicon.ico" href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="plugins/prettify/style/desert.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/highlight.js/8.4/styles/monokai_sublime.min.css">
	<!-- <link rel="stylesheet" href="plugins/prettify/style/cobalt.css"> -->
	<!-- <link rel="stylesheet" href="plugins/prettify/style/doxy.css"> -->
	<!-- <link rel="stylesheet" href="plugins/prettify/style/drupalorg.css"> -->
	<!-- <link rel="stylesheet" href="plugins/prettify/style/googlecode.css"> -->
	<!-- <link rel="stylesheet" href="plugins/prettify/style/naspinski.css"> -->
	<!-- <link rel="stylesheet" href="plugins/prettify/style/sons-of-obsidian.css"> -->
	<!-- <link rel="stylesheet" href="plugins/prettify/style/sunburst.css"> -->
	<!-- <link rel="stylesheet" href="plugins/prettify/style/github.css"> -->
	<!-- <link rel="stylesheet" href="plugins/prettify/style/stackoverflow.css"> -->
	<title>BeAce's blog</title>
</head>
<body>
		<!--nav start-->
	<div class="navbar navbar-inverse  navbar-fixed-top site-navbar" role="navigation">
	  <div class="container">
		  <div class="navbar-header">
		     　<!-- .navbar-toggle样式用于toggle收缩的内容，即nav-collapse collapse样式所在元素 -->
		       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		         <span class="sr-only">Toggle Navigation</span>
		         <span class="icon-bar"></span>
		         <span class="icon-bar"></span>
		         <span class="icon-bar"></span>
		       </button>
		       <!-- 确保无论是宽屏还是窄屏，navbar-brand都显示 -->
		       <a href="index.php" class="navbar-brand">BeAce's blog</a>
		  </div>
		  <!-- 屏幕宽度小于768px时，div.navbar-responsive-collapse容器里的内容都会隐藏，显示icon-bar图标，当点击icon-bar图标时，再展开。屏幕大于768px时，默认显示。 -->
		  <div class="collapse navbar-collapse navbar-responsive-collapse">
		    	<ul class="nav navbar-nav">
		      		<li><a href="index.php">首页</a></li>
		      		<li><a href="article.list.php?p=1">文章</a></li>
		      		<li><a href="aboutme.php">关于我</a></li>
		      		<li><a href="contactme.php">联系我</a></li>
			 	</ul>
			 	<form action="article.search.php" class="navbar-form navbar-right" role="text">
				    <div class="form-group">
				      <input type="text" name="key" class="form-control input-sm" placeholder="请输入关键词搜索相关文章">
				    </div>
		    		<button class="btn btn-default btn-sm" type="submit">搜索</button>
		    		<a href="admin/signin.php" class="btn" style="color:#eee">后台管理</a>
				</form>
		  </div>
	  </div>
	</div>
	<!--nav end-->	
	