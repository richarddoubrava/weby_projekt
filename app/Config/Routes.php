<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Hlavní (výchozí) stránka webu – volá kontroler Home a metodu index
$routes->get('/', 'Main::index');

// Další stránka – volá kontroler Main a metodu page2
$routes->get('dungeons', 'Main::dungeons');

$routes->get('minecraft', 'Main::minecraft');

$routes->get('legends', 'Main::legends');

$routes->get('film', 'Main::film');
$routes->get('spoluzaci', 'Main::spoluzaci');
