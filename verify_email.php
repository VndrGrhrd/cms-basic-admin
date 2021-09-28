<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/source/Auth.php';

try {
    $auth->confirmEmail($_GET['selector'], $_GET['token']);

    echo 'E-mail verificado com sucesso';
} catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
    die('Token Invalido');
} catch (\Delight\Auth\TokenExpiredException $e) {
    die('Token Expirado');
} catch (\Delight\Auth\UserAlreadyExistsException $e) {
    die('Endereço de email já existe');
} catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Muitos solicitações, tente novamente em breve');
}
