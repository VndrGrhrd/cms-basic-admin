<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/source/Auth.php';


if (!$auth->isLoggedIn()) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/layout.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Painel Admin</title>
    <style>
        :root {
            --logo: #FFF;
            --preto: #090a0cff;
            --cinza: #c2c2c2;
            --turquesa: #4ecdc4ff;
            --branco: #f7fff7ff;
            --red: #ff6b6bff;
            --amarelo: #ffe66dff;
        }
    </style>
</head>

<body>
    <main>