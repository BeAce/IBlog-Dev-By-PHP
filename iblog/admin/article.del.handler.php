<?php
    require_once('../connect.php');
    $id = $_GET['id'];
    $delete_sql = "delete from articles where id=$id";
    if(mysql_query($delete_sql)){
        echo "<script>alert('ɾ�����³ɹ���');</script>";
    }else{
        echo "<script>alert('ɾ������ʧ�ܣ�')</script>";
    }