<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('quiensomos', 'QuienSomos::index');
$routes->get('login', 'Login::index');
$routes->get('registro', 'Registro::index');
$routes->get('acercade', 'AcercaDe::index');
