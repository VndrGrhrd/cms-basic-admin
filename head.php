<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/source/Auth.php';


if (!$auth->isLoggedIn()) {
    header('Location: login');
}
$username = $auth->getUsername();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/admin/style/bootstrap/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style/layout.css">
    <link rel="stylesheet" href="style/style.css">
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