<?php

namespace Config;

$routes = Services::routes();

use App\Controllers\Pelicula;
use CodeIgniter\Router\RouteCollection;


if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/** @var RouteCollection $routes */

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// $routes->get('/', 'Home::index');

// $routes->get('pelicula', 'Pelicula::index');
// $routes->get('pelicula/new', 'Pelicula::create');
// $routes->get('pelicula/edit/(:num)', 'Pelicula::create/$1');

$routes->presenter('pelicula');

// $routes->post('/hola-mundo', 'Home::index');
// // $routes->put('/hola-mundo', 'Home::index');
// $routes->patch('/hola-mundo', 'Home::index');
// $routes->delete('/hola-mundo', 'Home::index');


// $routes->get('/', 'Home::index');