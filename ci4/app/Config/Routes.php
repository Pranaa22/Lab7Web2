<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('kategori/(:segment)', 'Artikel::kategori/$1');
$routes->setAutoRoute(true);
$routes->resource('post');

$routes->get('/', 'Home::index');

$routes->get('ajax', 'AjaxController::index');
$routes->get('ajax/getData', 'AjaxController::getData');
$routes->delete('ajax/delete/(:num)', 'AjaxController::delete/$1');
$routes->post('ajax/tambah', 'AjaxController::tambah');
$routes->get('ajax/getArtikel/(:num)', 'AjaxController::getArtikel/$1');
$routes->post('ajax/update', 'AjaxController::update');


$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
$routes->get('/tos', 'Page::tos');
$routes->get('user/login', 'User::login');
$routes->post('/user/login', 'User::login');
$routes->get('admin', 'Home::getAdmin');
 
$routes->group('admin',['filter' => 'auth'], function($routes) { 
$routes->get('artikel', 'Artikel::admin_index'); 
$routes->add('artikel/add', 'Artikel::add'); 
$routes->post('admin/artikel/add', 'Artikel::add');
$routes->add('artikel/edit/(:num)', 'Artikel::edit/$1'); 
$routes->get('artikel/delete/(:any)', 'Artikel::delete/$1'); 



});