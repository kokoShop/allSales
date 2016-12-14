<?php
      
require_once('config.php');         
                           
$mysqli = mysqli_init();
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
$mysqli->real_connect($config['db_host'],$config['db_user'],$config['db_password'],$config['db_name']); 

$name = $mysqli->real_escape_string(strip_tags($_POST['name']));
$price = $mysqli->real_escape_string(strip_tags($_POST['price']));
$tablename = $mysqli->real_escape_string(strip_tags($_POST['tablename']));

$return=false;
if ( $stmt = $mysqli->prepare("INSERT INTO ".$tablename."  (name, price) VALUES (  ?, ?)")) {

	$stmt->bind_param("ss", $name, $price);
    $return = $stmt->execute();
	$stmt->close();
}             
$mysqli->close();        

echo $return ? "ok" : "error";

      

