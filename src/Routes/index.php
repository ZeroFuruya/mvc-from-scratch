<?php

namespace App\Routes; // 5th

use App\Router;
use App\Controller\HomeController;

$router = new Router();

$router->get('/', HomeController::class, 'index');

$router->get('/login', HomeController::class, 'login');

$router->get('/multiplication', HomeController::class, 'multiplication');

$router->dispatch();