<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// login
$routes->get('/', 'Login::index');

// admin
$routes->get('/home', 'Admin::index');
$routes->get('/orang-tua', 'Admin::orangTua');
$routes->get('/balita', 'Admin::balita');
$routes->get('/status-gizi', 'Admin::statusGizi');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
