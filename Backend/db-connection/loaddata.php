<?php     
       
require_once('config.php');      
require_once('EditableGrid.php');            

function fetch_pairs($mysqli,$query){
	if (!($res = $mysqli->query($query)))return FALSE;
	$rows = array();
	while ($row = $res->fetch_assoc()) {
		$first = true;
		$key = $value = null;
		foreach ($row as $val) {
			if ($first) { $key = $val; $first = false; }
			else { $value = $val; break; } 
		}
		$rows[$key] = $value;
	}
	return $rows;
}

$mysqli = mysqli_init();
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
$mysqli->real_connect($config['db_host'],$config['db_user'],$config['db_password'],$config['db_name']); 
                    
$grid = new EditableGrid();

$grid->addColumn('id', 'ID', 'integer', NULL, false); 
$grid->addColumn('name', 'Название', 'string');  
$grid->addColumn('price', 'Цена', 'integer');  
$grid->addColumn('number', 'Количество', 'integer');  
$grid->addColumn('photourl', 'Фотография', 'string');  
$grid->addColumn('website', 'Сайт', 'string');  
$grid->addColumn('action', 'Удалить', 'html', NULL, false, 'id');  

$mydb_tablename = (isset($_GET['db_tablename'])) ? stripslashes($_GET['db_tablename']) : 'demo';
                                                                       
$result = $mysqli->query('SELECT *, date_format(lastvisit, "%d/%m/%Y") as lastvisit FROM '.$mydb_tablename );
$mysqli->close();

$grid->renderJSON($result);

