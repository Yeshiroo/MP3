<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Yeshiroo', 'MusicPlayerController::Yeshiroo');
$routes->get('/Music', 'MusicPlayerController::Music');

