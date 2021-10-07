<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__. '/../source/medoo_config.php';

$data = $database->update("account", [
	"premio_01" => $_POST['premio_01'],
    "premio_02" => $_POST['premio_2']
], [
	"id" => $_POST['id']
]);