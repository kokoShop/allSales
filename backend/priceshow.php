<?php

  $id = $_GET['id'];

  mysql_connect("goodchoi.mysql.ukraine.com.ua", "goodchoi_naukma", "6g5x7zha") or die (mysql_error ());

  mysql_select_db("goodchoi_naukma") or die(mysql_error());

  $result_price_product = mysql_query("SELECT price FROM demo WHERE id='$id'");
  $price_product = mysql_fetch_array($result_price_product);
  echo $price_product['price'];

  mysql_close();

?>