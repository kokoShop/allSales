<?php


  mysql_connect("goodchoi.mysql.ukraine.com.ua", "goodchoi_naukma", "6g5x7zha") or die (mysql_error ());


  mysql_select_db("goodchoi_naukma") or die(mysql_error());


  $strSQL = "SELECT * FROM demo";

  
  $rs = mysql_query($strSQL);

  while($row = mysql_fetch_array($rs)) {


  echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">';
  echo '<div class="thumbnail panel item">';
  echo '<div class="panel-body">';
  echo '<a href="item.html?id=' . $row['id'] . '">';
  echo '<img src="' . $row['photourl'] . '" alt="Item1"></a></div>';
  echo '<div class="panel-footer"><h4>' . $row['name'] . '</h4><p>₴' . $row['price'] . '</p></div><div class="panel-button"><p><a href="#" class="btn btn-default" role="button">Button</a></p></div></div></div>';
  }

  mysql_close();
?>

