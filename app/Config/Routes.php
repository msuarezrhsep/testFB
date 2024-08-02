<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::index');
$routes->get('/login', 'Home::index');
$routes->post('/inicio', 'Ventas::index');
$routes->get('/salir', 'Home::index');
$routes->post('/productos/aProduct', 'ProductosController::aProduct');
$routes->post('/productos/modif', 'ProductosController::modificar');
$routes->post('/productos/nuevo', 'ProductosController::nuevo');
$routes->post('/productos/landing', 'ProductosController::l_page');
$routes->get('producto/(:num)', 'ProductosController::buyProducto/$1');
$routes->get('compra/(:num)', 'Ventas::payProduct/$1');
