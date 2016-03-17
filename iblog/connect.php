<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
//require_once('config.php');
    // 连库
//if(!($con = mysql_connect(HOST,USERNAME,PASSWORD))){
// echo mysql_error();
// }
//$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);if(!$con){ die('could not connect:'.mysql_error()); }mysql_select_db(SAE_MYSQL_DB,$con);
$con = mysql_connect ( SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS );
if(!$con){ die('could not connect:'.mysql_error()); }
mysql_select_db(SAE_MYSQL_DB,$con)
    // 选库
//if(!(mysql_select_db('article'))){
//      echo mysql_error();
//  }
    // 编码
    //if(!(mysql_query('set names utf8'))){
    //echo mysql_error();
    //}
  ?> 