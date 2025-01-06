<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');


// admin
$routes->get('/admin', 'Home::admin');
$routes->get('dashboard/', 'Home::dashboard');

$routes->get('volunteer/', 'Home::vol_image');
$routes->post('volunteer_save/', 'Home::volunteer_save');
$routes->get('delete/(:num)', 'Home::vol_deletef/$1');
$routes->get('volunteer/edit/(:num)', 'Home::vol_editf/$1');
$routes->post('volunteer_edit/(:num)', 'Home::volunteer_editf/$1');

$routes->get('fund_raise/', 'Home::fund_card');
$routes->post('fund_raise_save/', 'Home::fund_card_save');
$routes->get('fund_raise/edit/(:num)', 'Home::fund_edit/$1');
$routes->post('fund_raise/update/(:num)', 'Home::fund_update/$1');
$routes->get('fund_raise/delete/(:num)', 'Home::fund_delete/$1');

$routes->get('project/', 'Home::project_card');
$routes->post('project_save/', 'Home::project_card_save');
$routes->get('project/edit/(:num)', 'Home::project_edit/$1');
$routes->post('project/update/(:num)', 'Home::project_update/$1');
$routes->get('project/delete/(:num)', 'Home::project_delete/$1');

$routes->get('donor/', 'Home::donor');
$routes->post('donor_save/', 'Home::donor_save');
$routes->get('donor/edit/(:num)', 'Home::donor_edit/$1');
$routes->post('donor/update/(:num)', 'Home::donor_update/$1');
$routes->get('donor/delete/(:num)', 'Home::donor_delete/$1');

