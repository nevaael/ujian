<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('homepage', 'Home::homepage');
$routes->get('halamandepan', 'Home::halamandepan');

$routes->get('/kirimdata', 'Home::terimadata');

$routes->post('/kirimdata', 'Home::terimadatamethodpost');

$routes->post('/biodata', 'MahasiswaController::savebiodata');

$routes->get('login', 'LoginPassword::index');
$routes->post('loginpw', 'LoginPassword::loginpw');


$routes->get('/prodi', 'ProdiController::index');

$routes->get('/jurusan', 'JurusanController::index');
$routes->post('/simpandatajurusan', 'JurusanController::simpandata');
$routes->get('jurusan/prodi', 'ProdiController::index');
