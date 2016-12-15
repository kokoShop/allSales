<?php

  $id = $_GET['id'];

  mysql_connect("goodchoi.mysql.ukraine.com.ua", "goodchoi_naukma", "6g5x7zha") or die (mysql_error ());

  mysql_select_db("goodchoi_naukma") or die(mysql_error());

  $result_photo_product = mysql_query("SELECT photourl FROM demo WHERE id='$id'");
  $photo_product = mysql_fetch_array($result_photo_product);
  echo $photo_product['photourl'];

  mysql_close();

?>