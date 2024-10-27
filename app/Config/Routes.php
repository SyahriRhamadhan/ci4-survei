<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route untuk login dan logout di luar grup admin atau pegawai
$routes->get('/', 'Login::index');
$routes->post('login', 'Login::login_action');
$routes->get('logout', 'Login::logout');

// Grouping untuk Admin
$routes->group('admin', ['filter' => 'AdminFilter'], function ($routes) {
    $routes->get('home', 'Admin\Home::index');
    
    // Routing untuk Jabatan
    $routes->group('jabatan', function ($routes) {
        $routes->get('/', 'Admin\Jabatan::index');
        $routes->get('create', 'Admin\Jabatan::create');
        $routes->post('store', 'Admin\Jabatan::store');
        $routes->get('edit/(:segment)', 'Admin\Jabatan::edit/$1');
        $routes->post('update/(:segment)', 'Admin\Jabatan::update/$1');
        $routes->get('delete/(:segment)', 'Admin\Jabatan::delete/$1');
    });

    // Routing untuk Lokasi Presensi
    $routes->group('lokasi_presensi', function ($routes) {
        $routes->get('/', 'Admin\LokasiPresensi::index');
        $routes->get('create', 'Admin\LokasiPresensi::create');
        $routes->post('store', 'Admin\LokasiPresensi::store');
        $routes->get('edit/(:segment)', 'Admin\LokasiPresensi::edit/$1');
        $routes->post('update/(:segment)', 'Admin\LokasiPresensi::update/$1');
        $routes->get('delete/(:segment)', 'Admin\LokasiPresensi::delete/$1');
        $routes->get('detail/(:segment)', 'Admin\LokasiPresensi::detail/$1');
    });
});

// Grouping untuk Pegawai
$routes->group('pegawai', ['filter' => 'PegawaiFilter'], function ($routes) {
    $routes->get('home', 'Pegawai\Home::index');
});

// $routes->get('/', 'Login::index');
// // $routes->get('/', 'Home::index');
// $routes->get('logout', 'Login::logout');
// $routes->post('login', 'Login::login_action');

// $routes->get('admin/home', 'Admin\Home::index', ['filter' => 'AdminFilter']);
// $routes->get('admin/jabatan', 'Admin\Jabatan::index', ['filter' => 'AdminFilter']);
// $routes->get('admin/jabatan/create', 'Admin\Jabatan::create', ['filter' => 'AdminFilter']);
// $routes->post('admin/jabatan/store', 'Admin\Jabatan::store', ['filter' => 'AdminFilter']);
// $routes->get('admin/jabatan/edit/(:segment)', 'Admin\Jabatan::edit/$1', ['filter' => 'AdminFilter']);
// $routes->post('admin/jabatan/update/(:segment)', 'Admin\Jabatan::update/$1', ['filter' => 'AdminFilter']);
// $routes->get('admin/jabatan/delete/(:segment)', 'Admin\Jabatan::delete/$1', ['filter' => 'AdminFilter']);

// $routes->get('admin/lokasi_presensi', 'Admin\LokasiPresensi::index', ['filter' => 'AdminFilter']);
// $routes->get('admin/lokasi_presensi/create', 'Admin\LokasiPresensi::create', ['filter' => 'AdminFilter']);
// $routes->post('admin/lokasi_presensi/store', 'Admin\LokasiPresensi::store', ['filter' => 'AdminFilter']);
// $routes->get('admin/lokasi_presensi/edit/(:segment)', 'Admin\LokasiPresensi::edit/$1', ['filter' => 'AdminFilter']);
// $routes->post('admin/lokasi_presensi/update/(:segment)', 'Admin\LokasiPresensi::update/$1', ['filter' => 'AdminFilter']);
// $routes->get('admin/lokasi_presensi/delete/(:segment)', 'Admin\LokasiPresensi::delete/$1', ['filter' => 'AdminFilter']);
// $routes->get('admin/lokasi_presensi/detail/(:segment)', 'Admin\LokasiPresensi::detail/$1', ['filter' => 'AdminFilter']);



// $routes->get('pegawai/home', 'Pegawai\Home::index', ['filter' => 'PegawaiFilter']);
