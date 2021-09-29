<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/source/Auth.php';

$auth->logOut();

// or

try {
    $auth->logOutEverywhereElse();
} catch (\Delight\Auth\NotLoggedInException $e) {
    die('Not logged in');
}

// or

try {
    $auth->logOutEverywhere();
} catch (\Delight\Auth\NotLoggedInException $e) {
    die('Not logged in');
}
