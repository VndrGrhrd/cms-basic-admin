<?php
require __DIR__ . '/BDsetup.php';
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => $host,
    "port" => $port,
    "dbname" => $dbname,
    "username" => $username,
    "passwd" => $passwd,
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
