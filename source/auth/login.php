<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../Auth.php';

try {
    $auth->login($_POST['email'], $_POST['password']);

    header('Location: /admin');
} catch (\Delight\Auth\InvalidEmailException $e) {
    die('Endereço de e-mail errado');
} catch (\Delight\Auth\InvalidPasswordException $e) {
    die('Senha errada');
} catch (\Delight\Auth\EmailNotVerifiedException $e) {
    die('E-mail não verificacdo');
} catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Muitas solicitações, tente novamente mais tarde');
}
