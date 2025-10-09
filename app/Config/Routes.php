<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Hlavní stránky
$routes->get('/', 'Home::index');
$routes->get('season', 'Seasons::index');
$routes->get('sezona/(:num)', 'Seasons::detail/$1');
$routes->get('team', 'Teams::index');
$routes->get('admin', 'Admin::index');

