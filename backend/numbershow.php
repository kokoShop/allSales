<?php

  $id = $_GET['id'];

  mysql_connect("goodchoi.mysql.ukraine.com.ua", "goodchoi_naukma", "6g5x7zha") or die (mysql_error ());

  mysql_select_db("goodchoi_naukma") or die(mysql_error());

  $result_number_product = mysql_query("SELECT number FROM demo WHERE id='$id'");
  $number_product = mysql_fetch_array($result_number_product);
  echo $number_product['number'];

  mysql_close();

?>