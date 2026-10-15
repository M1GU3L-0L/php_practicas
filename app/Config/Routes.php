<?php

namespace Config;

$routes = Services::routes();

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

$routes->get('/', 'Home::index');

$routes->group('dashboard', function ($routes) {
    $routes->presenter('autos', ['controller' => 'Dashboard\Auto']);
    //$routes->presenter('categoria');

    $routes->presenter('categoria', ['controller' => 'Dashboard\Categoria', 'except' => ['show']]);

});

// $routes->get('categoria', 'Categoria::index');
// $routes->get('categoria/new', 'Categoria::create');
// $routes->get('categoria/edit/(:num)', 'Categoria::create/$1');

// $routes->post('/hola-mundo', 'Home::index');
// // $routes->put('/hola-mundo', 'Home::index');
// $routes->patch('/hola-mundo', 'Home::index');
// $routes->delete('/hola-mundo', 'Home::index');


// $routes->get('/', 'Home::index');