<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/faqs', 'Page::login');
$routes->setAutoRoute(true);

$routes->get('/v2/(:num)/(:any)', 'Home::version/$1/$2');

$routes->get('login', 'Login::index');
$routes->get('register', 'Register::index');

$routes->post('login', 'Login::do_login');
$routes->post('register', 'Register::do_register');

$routes->get('/post', 'Post::index');
$routes->get('/post/(:any)', 'Post::viewPost/$1');

$routes->group('admin', function($routes){
    $routes->get('post', 'PostAdmin::index');
    $routes->get('post/(:segment)/preview', 'PostAdmin::preview/$1');
    $routes->add('post/new', 'PostAdmin::create');
    $routes->add('post/(:segment)/edit', 'PostAdmin::edit/$1');
    $routes->get('post/(:segment)/delete', 'PostAdmin::delete/$1');
    $routes->get('/post', 'Post::index');
    $routes->get('/post/(:any)', 'Post::viewPost/$1');
    
    // Rute untuk mengedit konten home
    $routes->get('editHomeContent', 'Admin::editHomeContent');
    $routes->post('updateHomeContent', 'Admin::updateHomeContent');

    $routes->get('testUpload', 'Admin::testUpload');
    $routes->post('doTestUpload', 'Admin::doTestUpload');
});
