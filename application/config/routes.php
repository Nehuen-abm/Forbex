<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/


$route['default_controller'] = "site";
$route['(:any)/novedades'] = "site/novedades";
$route['(:any)/empresa'] = "site/empresa";
$route['(:any)/clientes'] = "site/clientes";
$route['(:any)/deporte/(:any)'] = "site/deportes/$2";
$route['(:any)/certificaciones'] = "site/certificaciones";
$route['(:any)/asesoramiento'] = "site/asesoramiento";
$route['(:any)/contacto'] = "site/contacto";

$route['404_override'] = '';

// $route['es/testLanguage'] = "testLanguage/index/es";

// $route['en/testLanguage'] = "testLanguage/index/en";

// $route['pr/testLanguage'] = "testLanguage/index/pr";


$route['^en/(.+)$'] = "$1";
$route['^sp/(.+)$'] = "$1"; 
$route['^pr/(.+)$'] = "$1"; 
 
$route['^en$'] = $route['default_controller'];
$route['^sp$'] = $route['default_controller'];
$route['^pr$'] = $route['default_controller'];






/* End of file routes.php */
/* Location: ./application/config/routes.php */