<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

$routes->post('/submit', 'Home::submit');

$routes->get('images/(:segment)','Home::image/$1');

$routes->group('admin',['filter' => ['group:admin']], function($routes){
    $routes->get('', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');
    
    $routes->get('daftar-televisi', 'AdminController::daftarTelevisi');
    $routes->get('daftar-televisi/tambah', 'AdminController::daftarTelevisiTambah');
    $routes->post('daftar-televisi/create', 'AdminController::createTelevisi');
    $routes->get('daftar-televisi/edit/(:num)', 'AdminController::daftarTelevisiEdit/$1');
    $routes->post('daftar-televisi/change/(:num)', 'AdminController::changeTelevisi/$1');

    $routes->get('daftar-televisi/hapus/(:num)', 'AdminController::hapusTelevisi/$1');
    $routes->get('admin/daftar-televisi/hapus/(:num)', 'AdminController::hapusTelevisi/$1');
    $routes->post('admin/daftar-televisi/hapus/(:num)', 'AdminController::hapusTelevisi/$1');
    
    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
    $routes->get('transaksi/hapus', 'AdminController::transaksiHapus');
    
    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->get('pelanggan/hapus', 'AdminController::pelangganHapus');
});

service('auth')->routes($routes);
