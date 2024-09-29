<?php

namespace App;

use App\Router;
use App\Controller\HomePageController;

$router = new Router();

$router->get('/mvc-from-scratch/public/', HomePageController::class, 'index');

$router->dispatch();