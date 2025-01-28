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
$routes->get('/articles/edit/(:num)', 'Articles::edit/$1');
$routes->post('/articles/update/(:num)', 'Articles::update/$1');
$routes->get('/article/delete/(:num)', 'Articles::delete/$1');
$routes->post('/article/delete/(:num)', 'Articles::delete/$1');