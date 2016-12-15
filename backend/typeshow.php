<?php

  $id = $_GET['id'];

  mysql_connect("goodchoi.mysql.ukraine.com.ua", "goodchoi_naukma", "6g5x7zha") or die (mysql_error ());

  mysql_select_db("goodchoi_naukma") or die(mysql_error());

  $result_type_product = mysql_query("SELECT type FROM demo WHERE id='$id'");
  $type_product = mysql_fetch_array($result_type_product);
  echo $type_product['type'];

  mysql_close();

?>