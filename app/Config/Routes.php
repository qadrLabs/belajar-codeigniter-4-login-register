<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->group('register', function ($routes) {
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});


$routes->group('login', function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});


$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});


$routes->get('/dashboard', 'Dashboard::index');


