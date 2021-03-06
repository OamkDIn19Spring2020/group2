<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['profiler'] = "Profiler_controller";
$route['cart_c/(:any)'] = 'cart_c/index/$1';
$route['cart_c'] = 'cart_c';
$route['login_c/(:any)'] = 'login_c/validatelogin/$1';
$route['login_c'] = 'login_c';
$route['register_c/(:any)'] = 'register_c/createuser/$1';
$route['register_c'] = 'register_c';
$route['support_c/(:any)'] = 'support_c/content/$1';
$route['support_c'] = 'support_c';
$route['games_c/(:any)'] = 'games_c/index/$1';
$route['games_c'] = 'games_c';
$route['category_c/(:any)'] = 'category_c/index/$1';
$route['category_c'] = 'category_c';
$route['hot_c/(:any)'] = 'hot_c/view/$1';
$route['hot_c'] = 'hot_c';
$route['(:any)'] = 'home/content/$1';
$route['default_controller'] = 'home/content';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['profiler/disable'] = "Profiler_controller/disable";
