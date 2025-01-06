<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');


// admin
$routes->get('/admin', 'Home::admin');
$routes->get('dashboard', 'Home::dashboard');
$routes->get('volunteer/', 'Home::vol_image');
$routes->post('volunteer_save/', 'Home::volunteer_save');

$routes->get('delete/(:num)', 'Home::vol_deletef/$1');
$routes->get('volunteer/edit/(:num)', 'Home::vol_editf/$1');
$routes->post('volunteer_edit/(:num)', 'Home::volunteer_editf/$1');






