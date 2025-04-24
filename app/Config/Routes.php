<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'profil::index');

$routes->get('mata_kuliah/pemweb2', 'Mata_Kuliah::pemweb2');
$routes->get('mata_kuliah/kewirausahaan', 'Mata_Kuliah::kewirausahaan');
$routes->get('mata_kuliah/metopen', 'Mata_Kuliah::metopen');
$routes->get('mata_kuliah/aljabar', 'Mata_Kuliah::aljabar');
$routes->get('mata_kuliah/aljabar', 'Mata_Kuliah::aljabar');
$routes->get('profil/kontaksaya', 'Profil::kontaksaya');


$routes->setAutoRoute(true);
