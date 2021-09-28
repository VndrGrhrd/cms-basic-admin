<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/source/Auth.php';

try {
    $auth->forgotPassword($_POST['email'], function ($selector, $token) {
        echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';
    });

    echo 'Request has been generated';
} catch (\Delight\Auth\InvalidEmailException $e) {
    die('Invalid email address');
} catch (\Delight\Auth\EmailNotVerifiedException $e) {
    die('Email not verified');
} catch (\Delight\Auth\ResetDisabledException $e) {
    die('Password reset is disabled');
} catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Too many requests');
}
