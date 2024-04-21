<?php

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/config/params.php');

use app\http\Router;

session_start();

$router = new Router();

// SiteController
$router->get('/', 'site/index');
$router->get('index', 'site/index');
$router->post('profile', 'site/profile', ['rules' => '@']);
$router->get('profile', 'site/profile', ['rules' => '@']);


// AuthController
$router->get('signup', 'auth/signup', ['rules' => '?']);
$router->post('signup', 'auth/signup', ['rules' => '?']);

$router->get('login', 'auth/login', ['rules' => '?']);
$router->post('login', 'auth/login', ['rules' => '?']);

$router->post('logout', 'auth/logout', ['rules' => '@']);


// DebtController
$router->get('debt', 'debt/index', ['rules' => '@']);
$router->post('debt/save', 'debt/save', ['rules' => '@']);
$router->post('debt/{id}/delete', 'debt/delete', ['rules' => '@']);

// QR
$router->get('qr/user/create', 'qr/createUserQr', ['rules' => '@']);
$router->get('qr/user/show', 'qr/updateUserQr', ['rules' => '@']);
$router->post('qr/user/create', 'qr/createUserQr', ['rules' => '@']);


$router->run();