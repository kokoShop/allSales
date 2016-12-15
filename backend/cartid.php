<?php

  $id = $_GET['id'];

  mysql_connect("goodchoi.mysql.ukraine.com.ua", "goodchoi_naukma", "6g5x7zha") or die (mysql_error ());


  mysql_select_db("goodchoi_naukma") or die(mysql_error());

  echo $id;

  mysql_close();
?>

