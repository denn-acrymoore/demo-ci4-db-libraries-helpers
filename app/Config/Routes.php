<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::index');
$routes->get('/helpers/array-helper', 'HelpersController::array');
$routes->get('/helpers/cookie-helper', 'HelpersController::cookie');
$routes->get('/helpers/date-helper', 'HelpersController::date');
$routes->get('/helpers/filesystem-helper', 'HelpersController::filesystem');
$routes->get('/helpers/form-helper', 'HelpersController::form');
$routes->get('/helpers/html-helper', 'HelpersController::html');
$routes->get('/helpers/html-helper/memes', 'HelpersController::htmlMemes');
$routes->get('/helpers/inflector-helper', 'HelpersController::inflector');
$routes->get('/helpers/number-helper', 'HelpersController::number');
$routes->get('/helpers/security-helper', 'HelpersController::security');
$routes->get('/helpers/text-helper', 'HelpersController::text');
$routes->get('/helpers/url-helper', 'HelpersController::url');
$routes->get('/helpers/xml-helper', 'HelpersController::xml');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
