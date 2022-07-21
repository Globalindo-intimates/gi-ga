<?php

use Config\Services;

if (!isset($routes)) {
    $routes = Services::routes();
}

$routes->group('Berita', ['namespace' => '\App\Modules\Berita\Controllers'], function ($subroutes) {
    //  Berita-berita acara
    $subroutes->get('Berita-Acara', 'Berita::index');
    $subroutes->get('daftarBerita', 'Berita::listBerita');
    $subroutes->get('Berita/show/(:num)', 'Berita::show/$1');
    $subroutes->post('Berita/create', 'Berita::create');
    $subroutes->put('Berita/update/(:num)', 'Berita::update/$1');
    $subroutes->delete('Berita/delete/(:num)', 'Berita::delete/$1');
});