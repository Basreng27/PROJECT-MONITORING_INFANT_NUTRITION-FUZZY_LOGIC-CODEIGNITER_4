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
// orang tua
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
// umur
$routes->get('/umur', 'Admin::umur');
$routes->post('/proses-add-umur', 'MasterData\Umur::prosesAddUmur');
$routes->post('/proses-update-umur', 'MasterData\Umur::prosesUpdateUmur');
$routes->delete('/delete-umur/(:num)', 'MasterData\Umur::deleteUmur/$1');
// berat badan
$routes->get('/berat-badan', 'Admin::beratBadan');
$routes->post('/proses-add-berat', 'MasterData\Berat::prosesAddBerat');
$routes->post('/proses-update-berat', 'MasterData\Berat::prosesUpdateBerat');
$routes->delete('/delete-berat/(:num)', 'MasterData\Berat::deleteBerat/$1');
// tinggi badan
$routes->get('/tinggi-badan', 'Admin::tinggiBadan');
$routes->post('/proses-add-tinggi', 'MasterData\Tinggi::prosesAddTinggi');
$routes->post('/proses-update-tinggi', 'MasterData\Tinggi::prosesUpdateTinggi');
$routes->delete('/delete-tinggi/(:num)', 'MasterData\Tinggi::deleteTinggi/$1');
// perhitungan
$routes->get('/perhitungan', 'Admin::perhitungan');
// bb-u
$routes->get('/bb-u/(:num)', 'Admin::BbU/$1');
$routes->get('/v_bb-u', 'Admin::VBbU');
// pb-u
$routes->get('/pb-u/(:num)', 'Admin::PbU/$1');
$routes->get('/v_pb-u', 'Admin::VPbU');
// bb-pb
$routes->get('/bb-pb/(:num)', 'Admin::BbPb/$1');
$routes->get('/v_bb-pb', 'Admin::VBbPb');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
