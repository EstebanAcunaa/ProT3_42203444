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


/*rutas del registro*/
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

/*rutas del login*/
$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');