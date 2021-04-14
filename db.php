<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'nico');
define('DB_NAME', 'login');


try {
	$pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
} catch( PDOException $e){
	die("ERROR: Could not connect. ". $e->getMessage());
}
