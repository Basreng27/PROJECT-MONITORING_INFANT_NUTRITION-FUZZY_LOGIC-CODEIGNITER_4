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

// User
$routes->get('/', 'User::index');

// login
$routes->get('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');
$routes->post('/proses-login', 'Login::prosesLogin');

// admin
$routes->get('/home', 'Admin::index');
// data
$routes->get('/data', 'Data::index');
$routes->post('/proses-add-data', 'Data::prosesAdd');
$routes->post('/proses-update-data', 'Data::prosesUpdate');
$routes->delete('/delete-data/(:num)', 'Data::delete/$1');
// grafik
$routes->get('/grafik', 'Grafik::index');
$routes->get('/one-grafik/(:num)', 'Grafik::oneGrafik/$1');

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
// perhitungan Antropometri
$routes->get('/perhitungan', 'Admin::perhitungan');
$routes->get('/proses-hitung/(:num)', 'Perhitungan::prosesHitung/$1');
// perhitungan fuzzy
$routes->get('/perhitungan-fuzzy', 'Admin::perhitunganFuzzy');
// bb-u
$routes->get('/bb-u/(:num)', 'Admin::BbU/$1');
$routes->get('/v_bb-u', 'Admin::VBbU');
// pb-u
$routes->get('/pb-u/(:num)', 'Admin::PbU/$1');
$routes->get('/v_pb-u', 'Admin::VPbU');
// bb-pb
$routes->get('/bb-pb/(:num)', 'Admin::BbPb/$1');
$routes->get('/v_bb-pb', 'Admin::VBbPb');
// visi misi
// visi
$routes->get('/visi', 'VisiMisi\VisiController::index');
$routes->post('/save-visi', 'VisiMisi\VisiController::store');
$routes->delete('/delete-visi/(:num)', 'VisiMisi\VisiController::delete/$1');
$routes->get('/misi', 'VisiMisi\MisiController::index');
$routes->post('/save-misi', 'VisiMisi\MisiController::store');
$routes->delete('/delete-misi/(:num)', 'VisiMisi\MisiController::delete/$1');

// setting
// footer user
$routes->get('/footer-user', 'Admin::footerUser');
$routes->post('/proses-update-footer-user', 'Setting\FooterUser::prosesUpdateFooter');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
