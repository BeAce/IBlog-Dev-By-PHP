<?php
    require_once('../connect.php');
    $id = $_GET['id'];
    $delete_sql = "delete from articles where id=$id";
    if(mysql_query($delete_sql)){
        echo "<script>alert('删除文章成功！');</script>";
    }else{
        echo "<script>alert('删除文章失败！')</script>";
    }