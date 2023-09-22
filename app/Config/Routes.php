<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Books page route
$routes->get('/books', 'BooksController::index');
$routes->post('/books/add', 'BooksController::add');
