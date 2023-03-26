<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::MVV');
$routes->get('areasDeOportunidad1', 'Home::areasDeOportunidad1');
$routes->get('areasDeOportunidad2', 'Home::areasDeOportunidad2');
$routes->get('areasDeOportunidad3', 'Home::areasDeOportunidad3');
$routes->get('areasDeOportunidad4', 'Home::areasDeOportunidad4');
$routes->get('estadistica0', 'Home::estadistica0');
$routes->get('estadistica1', 'Home::estadistica1');
$routes->get('estadistica2', 'Home::estadistica2');
$routes->get('estadistica3', 'Home::estadistica3');
$routes->get('estadistica4', 'Home::estadistica4');
$routes->get('estadosFinancieros0', 'Home::estadosFinancieros0');
$routes->get('estadosFinancieros1', 'Home::estadosFinancieros1');
$routes->get('estadosFinancieros2', 'Home::estadosFinancieros2');
$routes->get('estadosFinancieros3', 'Home::estadosFinancieros3');
$routes->get('gestionAdmi', 'Home::gestionAdmi');
$routes->get('optimizacionDeCostos0', 'Home::optimizacionDeCostos0');
$routes->get('optimizacionDeCostos1', 'Home::optimizacionDeCostos1');
$routes->get('optimizacionDeCostos2', 'Home::optimizacionDeCostos2');
$routes->get('optimizacionDeCostos3', 'Home::optimizacionDeCostos3');
$routes->get('optimizacionDeCostos4', 'Home::optimizacionDeCostos4');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
