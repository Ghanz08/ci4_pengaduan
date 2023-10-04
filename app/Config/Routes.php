<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('Home/index', 'Home::index');
$routes->get('product/index', 'Product::index');

$routes->resource('product');
// $routes->get('/user/register', 'User::register');
$routes->setAutoRoute(true);
