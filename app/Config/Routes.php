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
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index', ['filter' => 'authFilter']);
$routes->get('/dashboard', 'Pages::dashboard');

$routes->get('/user/askyuk', 'user::contact', ['filter' => 'authFilter']);
$routes->get('/signin', 'user::signin');
$routes->get('/signup', 'user::signup');
$routes->get('/user/login', 'user::login');
$routes->get('/user/logout', 'user::logout', ['filter' => 'authFilter']);
$routes->get('/user/edit/(:any)', 'user::edit/$1', ['filter' => 'authFilter']);
$routes->get('/user/delete/(:any)', 'user::deleteAccount/$1', ['filter' => 'authFilter']);
$routes->match(['get', 'post'], '/user/login', 'user::login');
$routes->match(['get', 'post'], '/user/regis', 'user::regis');

$routes->get('/pages/subject', 'Pages::subject', ['filter' => 'authFilter']);
$routes->get('/pages/science', 'Pages::science', ['filter' => 'authFilter']);
$routes->get('/pages/social', 'Pages::social', ['filter' => 'authFilter']);
$routes->get('/pages/language', 'Pages::language', ['filter' => 'authFilter']);
$routes->get('/pages/edit', 'Pages::edit', ['filter' => 'authFilter']);
$routes->get('/pages/news', 'Pages::news', ['filter' => 'authFilter']);
$routes->get('/pages/editChapter', 'Pages::editChapter', ['filter' => 'authFilter']);

$routes->get('/user/midTest', 'user::midTest', ['filter' => 'authFilter']);
$routes->post('/user/midTest', 'user::midTest', ['filter' => 'authFilter']);
$routes->get('/about', 'Pages::about');
$routes->get('/news', 'Pages::news', ['filter' => 'authFilter']);
$routes->get('/editChapter/(:num)/(:num)', 'Pages::editChapter/$1/$2', ['filter' => 'authFilter']);

$routes->get('/subject', 'Subject::index', ['filter' => 'authFilter']);
$routes->get('/science', 'Science::index', ['filter' => 'authFilter']);
$routes->get('/social', 'Social::index', ['filter' => 'authFilter']);
$routes->get('/language', 'Language::index', ['filter' => 'authFilter']);

$routes->get('/user/subject', 'Pages::subject', ['filter' => 'authFilter']);
$routes->get('/user/science', 'Pages::science', ['filter' => 'authFilter']);
$routes->get('/user/social', 'Pages::social', ['filter' => 'authFilter']);
$routes->get('/user/language', 'Language::index', ['filter' => 'authFilter']);
$routes->get('/user/midTest', 'User::midTest', ['filter' => 'authFilter']);

$routes->get('/science/math', 'Science::math', ['filter' => 'authFilter']);
$routes->get('/science/physics', 'Science::physics', ['filter' => 'authFilter']);
$routes->get('/science/chemistry', 'Science::chemistry', ['filter' => 'authFilter']);
$routes->get('/science/biology', 'Science::biology', ['filter' => 'authFilter']);

$routes->get('/social/economics', 'Social::economics', ['filter' => 'authFilter']);
$routes->get('/social/history', 'Social::history', ['filter' => 'authFilter']);
$routes->get('/social/geography', 'Social::geography', ['filter' => 'authFilter']);
$routes->get('/social/sociology', 'Social::sociology', ['filter' => 'authFilter']);

$routes->get('/math', 'Math::index', ['filter' => 'authFilter']);
$routes->get('/math/chapter1', 'Math::chapter1', ['filter' => 'authFilter']);
$routes->get('/math/chapter2', 'Math::chapter2', ['filter' => 'authFilter']);
$routes->get('/math/chapter3', 'Math::chapter3', ['filter' => 'authFilter']);
$routes->get('/math/chapter4', 'Math::chapter4', ['filter' => 'authFilter']);
$routes->get('/math/chapter5', 'Math::chapter5', ['filter' => 'authFilter']);
$routes->get('/math/midTest', 'Math::midTest', ['filter' => 'authFilter']);

$routes->get('/physics', 'Physics::index', ['filter' => 'authFilter']);
$routes->get('/physics/chapter1', 'Physics::chapter1', ['filter' => 'authFilter']);
$routes->get('/physics/chapter2', 'Physics::chapter2', ['filter' => 'authFilter']);
$routes->get('/physics/chapter3', 'Physics::chapter3', ['filter' => 'authFilter']);
$routes->get('/physics/chapter4', 'Physics::chapter4', ['filter' => 'authFilter']);
$routes->get('/physics/chapter5', 'Physics::chapter5', ['filter' => 'authFilter']);
$routes->get('/physics/midTest', 'Physics::midTest', ['filter' => 'authFilter']);

$routes->get('/chemistry', 'Chemistry::index', ['filter' => 'authFilter']);
$routes->get('/chemistry/chapter1', 'Chemistry::chapter1', ['filter' => 'authFilter']);
$routes->get('/chemistry/chapter2', 'Chemistry::chapter2', ['filter' => 'authFilter']);
$routes->get('/chemistry/chapter3', 'Chemistry::chapter3', ['filter' => 'authFilter']);
$routes->get('/chemistry/chapter4', 'Chemistry::chapter4', ['filter' => 'authFilter']);
$routes->get('/chemistry/chapter5', 'Chemistry::chapter5', ['filter' => 'authFilter']);
$routes->get('/chemistry/midTest', 'Chemistry::midTest', ['filter' => 'authFilter']);

$routes->get('/biology', 'Biology::index', ['filter' => 'authFilter']);
$routes->get('/biology/chapter1', 'Biology::chapter1', ['filter' => 'authFilter']);
$routes->get('/biology/chapter2', 'Biology::chapter2', ['filter' => 'authFilter']);
$routes->get('/biology/chapter3', 'Biology::chapter3', ['filter' => 'authFilter']);
$routes->get('/biology/chapter4', 'Biology::chapter4', ['filter' => 'authFilter']);
$routes->get('/biology/chapter5', 'Biology::chapter5', ['filter' => 'authFilter']);
$routes->get('/biology/midTest', 'Biology::midTest', ['filter' => 'authFilter']);

$routes->get('/economics', 'Economics::index', ['filter' => 'authFilter']);
$routes->get('/economics/chapter1', 'Economics::chapter1', ['filter' => 'authFilter']);
$routes->get('/economics/chapter2', 'Economics::chapter2', ['filter' => 'authFilter']);
$routes->get('/economics/chapter3', 'Economics::chapter3', ['filter' => 'authFilter']);
$routes->get('/economics/chapter4', 'Economics::chapter4', ['filter' => 'authFilter']);
$routes->get('/economics/chapter5', 'Economics::chapter5', ['filter' => 'authFilter']);
$routes->get('/economics/midTest', 'Economics::midTest', ['filter' => 'authFilter']);

$routes->get('/history', 'History::index', ['filter' => 'authFilter']);
$routes->get('/history/chapter1', 'History::chapter1', ['filter' => 'authFilter']);
$routes->get('/history/chapter2', 'History::chapter2', ['filter' => 'authFilter']);
$routes->get('/history/chapter3', 'History::chapter3', ['filter' => 'authFilter']);
$routes->get('/history/chapter4', 'History::chapter4', ['filter' => 'authFilter']);
$routes->get('/history/chapter5', 'History::chapter5', ['filter' => 'authFilter']);
$routes->get('/history/midTest', 'History::midTest', ['filter' => 'authFilter']);

$routes->get('/geography', 'Geography::index', ['filter' => 'authFilter']);
$routes->get('/geography/chapter1', 'Geography::chapter1', ['filter' => 'authFilter']);
$routes->get('/geography/chapter2', 'Geography::chapter2', ['filter' => 'authFilter']);
$routes->get('/geography/chapter3', 'Geography::chapter3', ['filter' => 'authFilter']);
$routes->get('/geography/chapter4', 'Geography::chapter4', ['filter' => 'authFilter']);
$routes->get('/geography/chapter5', 'Geography::chapter5', ['filter' => 'authFilter']);
$routes->get('/geography/midTest', 'Geography::midTest', ['filter' => 'authFilter']);

$routes->get('/sociology', 'Sociology::index', ['filter' => 'authFilter']);
$routes->get('/sociology/chapter1', 'Sociology::chapter1', ['filter' => 'authFilter']);
$routes->get('/sociology/chapter2', 'Sociology::chapter2', ['filter' => 'authFilter']);
$routes->get('/sociology/chapter3', 'Sociology::chapter3', ['filter' => 'authFilter']);
$routes->get('/sociology/chapter4', 'Sociology::chapter4', ['filter' => 'authFilter']);
$routes->get('/sociology/chapter5', 'Sociology::chapter5', ['filter' => 'authFilter']);
$routes->get('/sociology/midTest', 'Sociology::midTest', ['filter' => 'authFilter']);

$routes->get('/english', 'English::index', ['filter' => 'authFilter']);
$routes->get('/english/chapter1', 'English::chapter1', ['filter' => 'authFilter']);
$routes->get('/english/chapter2', 'English::chapter2', ['filter' => 'authFilter']);
$routes->get('/english/chapter3', 'English::chapter3', ['filter' => 'authFilter']);
$routes->get('/english/chapter4', 'English::chapter4', ['filter' => 'authFilter']);
$routes->get('/english/chapter5', 'English::chapter5', ['filter' => 'authFilter']);
$routes->get('/english/midTest', 'English::midTest', ['filter' => 'authFilter']);

$routes->get('/indonesia', 'Indonesian::index', ['filter' => 'authFilter']);
$routes->get('/indonesia/chapter1', 'Indonesian::chapter1', ['filter' => 'authFilter']);
$routes->get('/indonesia/chapter2', 'Indonesian::chapter2', ['filter' => 'authFilter']);
$routes->get('/indonesia/chapter3', 'Indonesian::chapter3', ['filter' => 'authFilter']);
$routes->get('/indonesia/chapter4', 'Indonesian::chapter4', ['filter' => 'authFilter']);
$routes->get('/indonesia/chapter5', 'Indonesian::chapter5', ['filter' => 'authFilter']);
$routes->get('/indonesia/midTest', 'Indonesian::midTest', ['filter' => 'authFilter']);
/**
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
