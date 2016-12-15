<?php

  $id = $_GET['id'];

  mysql_connect("goodchoi.mysql.ukraine.com.ua", "goodchoi_naukma", "6g5x7zha") or die (mysql_error ());

  mysql_select_db("goodchoi_naukma") or die(mysql_error());

  $result_name_product = mysql_query("SELECT name FROM demo WHERE id='$id'");
  $name_product = mysql_fetch_array($result_name_product);
  echo $name_product['name'];

  mysql_close();

?>