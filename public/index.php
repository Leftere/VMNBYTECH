<?php

require_once __DIR__.'/../vendor/autoload.php';

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

$app = new Application(dirname(__DIR__));
$app->router->get('/', 'home');
$app->router->get('/services', [SiteController::class, 'services']);

$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->get('/thank-you', [SiteController::class, 'thankYou']);
$app->router->get('/404', [SiteController::class, 'error']);

$app->router->get('/blog', [SiteController::class, 'blog']);

$app->router->get('/terms-and-conditions', [SiteController::class, 'terms']);

$app->router->get('/about', 'about');
$app->router->get('/portfolio', [SiteController::class, 'portfolio']);
$app->router->get('/topNotch', [SiteController::class, 'topNotch']);

$app->router->get('/uvc', [SiteController::class, 'uvc']);

$app->router->get('/blog-drupal7-end-of-life', [SiteController::class, 'blogDrupalEOL']);



// $app->router->post('/contact', [SiteController::class, 'handleContact']);



$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();