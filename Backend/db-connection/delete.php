<?php

      
require_once('config.php');         
                                
$mysqli = mysqli_init();
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
$mysqli->real_connect($config['db_host'],$config['db_user'],$config['db_password'],$config['db_name']); 

$id = $mysqli->real_escape_string(strip_tags($_POST['id']));
$tablename = $mysqli->real_escape_string(strip_tags($_POST['tablename']));

$return=false;
if ( $stmt = $mysqli->prepare("DELETE FROM ".$tablename."  WHERE id = ?")) {
	$stmt->bind_param("i", $id);
	$return = $stmt->execute();
	$stmt->close();
}             
$mysqli->close();        

echo $return ? "ok" : "error";

      

