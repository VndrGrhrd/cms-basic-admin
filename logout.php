<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/source/Auth.php';

$auth->logOut();

// or

try {
    $auth->logOutEverywhereElse();
} catch (\Delight\Auth\NotLoggedInException $e) {
    header('Location: login');
}

// or

try {
    $auth->logOutEverywhere();
} catch (\Delight\Auth\NotLoggedInException $e) {
    header('Location: login');
}
