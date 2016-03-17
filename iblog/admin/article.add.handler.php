<?php
    require_once('../connect.php');
    //the atricle is null?
    if (!isset($_POST['title'])&&(!empty($_POST['title']))){
        echo "<script>alert('发布文章成功！');window.location.href='article.add.php'</script>";
    }
    $title = $_POST['title'];
    $author = $_POST['author'];
    $label = $_POST['label'];
    $description = $_POST['description'];
    $content = $_POST['contents'];
    $dataline = time();
    $insert_sql = "insert into articles(title,author,description,content,dateline,label) values('$title','$author','$description','$content','$dataline','$label')";
   // echo $insert_sql;
    if(mysql_query($insert_sql)){
        echo "<script>alert('发布文章成功！');window.location.href='article.add.php'</script>";
    }else {
        echo "<script>alert('发布文章失败！');window.location.href='article.add.php'</script>";
    }