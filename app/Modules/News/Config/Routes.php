<?php

use Config\Services;

if (!isset($routes)) {
    $routes = Services::routes();
}

$routes->group('News', ['namespace' => '\App\Modules\News\Controllers'], function ($subroutes) {
    //  news-berita acara
    $subroutes->get('Berita-Acara', 'News::index');
    $subroutes->get('daftarBerita', 'News::listBerita');
    $subroutes->get('Berita/show/(:num)', 'News::show/$1');
    $subroutes->post('Berita/create', 'News::create');
    $subroutes->put('Berita/update/(:num)', 'News::update/$1');
    $subroutes->delete('Berita/delete/(:num)', 'News::delete/$1');
});