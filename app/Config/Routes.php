<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
|--------------------------------------------------------------------------
| Router Setup
|--------------------------------------------------------------------------
*/
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Cv'); // Mengubah default controller ke Cv
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// $routes->setAutoRoute(false); // Nonaktifkan auto routing lama demi keamanan

/*
|--------------------------------------------------------------------------
| Route Definitions
|--------------------------------------------------------------------------
*/

// Mengarahkan URL utama (/) ke method index() di controller Cv
$routes->get('/', 'Cv::index');

// Membuat URL baru untuk halaman-halaman lain
$routes->get('/pendidikan', 'Cv::pendidikan');
$routes->get('/pengalaman', 'Cv::pengalaman');
$routes->get('/keahlian', 'Cv::keahlian');

/*
|--------------------------------------------------------------------------
| Additional Routing
|--------------------------------------------------------------------------
|
| File ini dapat memuat route tambahan berdasarkan environment.
| Misalnya untuk 'development' atau 'production'.
|
*/
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
