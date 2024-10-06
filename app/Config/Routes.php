<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->add('/character', 'CharacterController::index');
$routes->add('/story/(:num)', 'StoryController::index/$1');
