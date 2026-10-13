<?php

namespace Config;

$routes = Services::routes();

use App\Controllers\Categoria;
use App\Controllers\Pelicula;
use CodeIgniter\Router\RouteCollection;


if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/** @var RouteCollection $routes */


$routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// $routes->get('/', 'Home::index');

// $routes->get('pelicula', 'Pelicula::index');
// $routes->get('pelicula/new', 'Pelicula::create');
// $routes->get('pelicula/edit/(:num)', 'Pelicula::create/$1');


$routes->group('dashboard', function ($routes) {
    $routes->presenter('pelicula');
    $routes->presenter('categoria');
});



// $routes->get('categoria', 'Categoria::index');
// $routes->get('categoria/new', 'Categoria::create');
// $routes->get('categoria/edit/(:num)', 'Categoria::create/$1');

// $routes->post('/hola-mundo', 'Home::index');
// // $routes->put('/hola-mundo', 'Home::index');
// $routes->patch('/hola-mundo', 'Home::index');
// $routes->delete('/hola-mundo', 'Home::index');


// $routes->get('/', 'Home::index');