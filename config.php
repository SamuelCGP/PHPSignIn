<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'PHPSignIn');
 
/* Tentativa de conectar */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Checar conexão 
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>