<?php
// Require Composer's autoloader.
require 'Medoo/src/Medoo.php';
require __DIR__ . '/BDsetup.php';
 
// Using Medoo namespace.
use Medoo\Medoo;
 
$database = new Medoo([
	// [required]
	'type' => $type,
	'host' => $host,
	'database' => $dbname,
	'username' => $username,
	'password' => $passwd,
 
	// [optional]
	'charset' => $charset,
	'collation' => $collation,
	'port' => $port,
  
	// [optional] Enable logging, it is disabled by default for better performance.
	'logging' => true,

	// [optional]
	// Error mode
	// Error handling strategies when error is occurred.
	// PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
	// Read more from https://www.php.net/manual/en/pdo.error-handling.php.
	'error' => PDO::ERRMODE_WARNING,
 
	// [optional]
	// The driver_option for connection.
	// Read more from http://www.php.net/manual/en/pdo.setattribute.php.
	'option' => [
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	],
 
	// [optional] Medoo will execute those commands after connected to the database.
	'command' => [
		'SET SQL_MODE=ANSI_QUOTES'
	],
]);

// $data = $database->select("usuarios", ["nome", "email"], function($data){
//     echo $data["nome"] . $data["email"] ."</br>";
// });
?>