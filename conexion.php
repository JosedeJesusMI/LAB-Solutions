
<?php

$host = 'localhost';
$user = 'root';
$password = 'admin';
$db = 'lab';
$port = '3306';

$conection = new mysqli($host,$user,$password,$db,$port);
$conection->set_charset("utf8");

?>



