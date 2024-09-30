<?php

namespace App\Routes; // 5th

use App\Router;
use App\Controller\HomePageController;

$router = new Router();

$router->get('/', HomePageController::class, 'index');

$router->get('/login', HomePageController::class, 'login');

$router->dispatch();