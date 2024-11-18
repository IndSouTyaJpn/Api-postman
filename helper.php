<?php 

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'db_catatan_bljr');

$db_connect = mysqli_connect(HOST, USER, PASS, DB) or die ('Unable Connect');

header('Content-Type: application/json');

?>