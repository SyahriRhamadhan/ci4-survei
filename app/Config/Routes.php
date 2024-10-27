<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
// $routes->get('/', 'Home::index');
$routes->get('logout', 'Login::logout');
$routes->post('login', 'Login::login_action');

$routes->get('admin/home', 'Admin\Home::index', ['filter' => 'AdminFilter']);
$routes->get('admin/jabatan', 'Admin\Jabatan::index', ['filter' => 'AdminFilter']);
$routes->get('admin/jabatan/create', 'Admin\Jabatan::create', ['filter' => 'AdminFilter']);
$routes->post('admin/jabatan/store', 'Admin\Jabatan::store', ['filter' => 'AdminFilter']);
$routes->get('admin/jabatan/edit/(:segment)', 'Admin\Jabatan::edit/$1', ['filter' => 'AdminFilter']);
$routes->post('admin/jabatan/update/(:segment)', 'Admin\Jabatan::update/$1', ['filter' => 'AdminFilter']);
$routes->get('admin/jabatan/delete/(:segment)', 'Admin\Jabatan::delete/$1', ['filter' => 'AdminFilter']);

$routes->get('pegawai/home', 'Pegawai\Home::index', ['filter' => 'PegawaiFilter']);
