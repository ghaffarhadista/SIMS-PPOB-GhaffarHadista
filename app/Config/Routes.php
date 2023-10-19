<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  ROUTES INDEX
$routes->get('/pages', 'Home::index', ['filter' => 'useronly']);
//AKHIR  ROUTES INDEX



//ROUTES USER

// LOGIN DAN LOGOUT
$routes->get('/', 'Login::login');
$routes->post('/login', 'Login::index');
$routes->post('/logout', 'Login::logout');
// LOGIN DAN LOGOUT

// REGISTRASI
$routes->get('/registered', 'Register::register');
$routes->post('/register', 'Register::index');
// REGISTRASI

// MANAGE AKUN
$routes->get('/pages/akun', 'User::akun', ['filter' => 'useronly']);
$routes->get('/pages/akun/edit', 'User::edit', ['filter' => 'useronly']);
$routes->post('/update', 'User::update');
// MANAGE AKUN

//AKHIR ROUTES USER



//ROUTES CASH
$routes->get('/pages/transaction', 'Cash::transaction', ['filter' => 'useronly']);
$routes->get('/pages/topup', 'Cash::topup', ['filter' => 'useronly']);
$routes->get('/pages/topup/prabayar', 'Cash::prabayar', ['filter' => 'useronly']);
//AKKHIR ROUTES CASH
