<?php
require __DIR__ . '/BDsetup.php';
require __DIR__ . '/../vendor/autoload.php';
$db = new \PDO('mysql:dbname=' . $dbname . ';host=' . $host . ';charset=utf8mb4', $username, $passwd);
$auth = new \Delight\Auth\Auth($db);
