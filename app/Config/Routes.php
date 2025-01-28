<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/articles', 'Articles::index');
$routes->get('/article/(:num)', 'Articles::show/$1');
$routes->get('/articles/add', 'Articles::add');
$routes->post('/articles/create', 'Articles::create');