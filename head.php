<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/source/Auth.php';


if (!$auth->isLoggedIn()) {
    header('Location: http://localhost/admin:composer/login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar novo Usuario</title>
</head>

<body>
    <main>