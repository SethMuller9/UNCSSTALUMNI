<?php 
require_once('UNCSSTconfig.php');
require_once('UNCSSTfunctions.php');


$link = f_sqlConnect(DB_USER, DB_PASSWORD, DB_NAME);

$sql = "SELECT * FROM logininfo";

$results = mysql_query($sql);

if (!$results) {
die('Invalid query: ' . mysql_error());
}

while($result = mysql_fetch_array($results)){
	var_dump($result);
}

?>