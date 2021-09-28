<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../Auth.php';

try {
    $userId = $auth->register($_POST['email'], $_POST['password'], $_POST['username'], function ($selector, $token) {
        header('Location: http://localhost/admin:composer/verify_email.php?selector=' . \urlencode($selector) . '&token=' . \urlencode($token));
    });
} catch (\Delight\Auth\InvalidEmailException $e) {
    die('Endereço de email invalido');
} catch (\Delight\Auth\InvalidPasswordException $e) {
    die('Senha invalida');
} catch (\Delight\Auth\UserAlreadyExistsException $e) {
    die('Usuário já existe');
} catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Muitas solicitações, tente novamente mais tarde');
}
