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
$routes->post('/proses-login', 'Login::prosesLogin');

// admin
$routes->get('/home', 'Admin::index');
// master pasien
// ortu
$routes->get('/orang-tua', 'Admin::orangTua');
$routes->post('/proses-add-orang-tua', 'MasterPasien\Ortu::prosesAddOrtu');
$routes->post('/proses-update-orang-tua', 'MasterPasien\Ortu::prosesUpdateOrtu');
$routes->delete('/delete-ortu/(:num)', 'MasterPasien\Ortu::deleteOrtu/$1');
// balita
$routes->get('/balita', 'Admin::balita');
$routes->post('/proses-add-balita', 'MasterPasien\Balita::prosesAddBalita');
$routes->post('/proses-update-balita', 'MasterPasien\Balita::prosesUpdateBalita');
$routes->delete('/delete-balita/(:num)', 'MasterPasien\Balita::deleteBalita/$1');
// master data
$routes->get('/umur', 'Admin::umur');
$routes->get('/berat-badan', 'Admin::beratBadan');
$routes->get('/tinggi-badan', 'Admin::tinggiBadan');
// perhitungan
$routes->get('/perhitungan', 'Admin::perhitungan');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
