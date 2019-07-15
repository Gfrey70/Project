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
$route['garage/list']=  'garagectrl/garagelist';
$route['garage/list/viewer/(:num)']=  'garagectrl/garageViewer/$1';
$route['garage/feedback/list/(:num)']=  'garagectrl/feedback_list/$1';
$route['garage/feedback/save']=  'garagectrl/feedback_save';
$route['owner/register'] = 'userctrl/owner_register';
$route['driver/register'] = 'driversctrl/saveDriver';
$route['driver/login'] = 'driversctrl/login';
$route['user/panel'] = 'userctrl/userview';
$route['user/panel/add'] = 'userctrl/registerUser';
$route['user/login'] = 'userctrl/userLogin';
$route['user/logout'] = 'userctrl/userLogout';
$route['garage/panel/add'] = 'garagectrl/registerOnwer';
$route['garage/panel'] = 'garagectrl/garageview';
$route['garage/panel/addGarage'] = 'garagectrl/insertGarage';
$route['garage/ownerpanel'] = 'garagectrl/ownerview';
$route['garage/driverpanel/add'] = 'garagectrl/registerDriver';
$route['garage/driverpanel'] = 'garagectrl/driverview';
$route['tips/panel/add'] = 'tipsctrl/inserttips';
$route['tips/panel'] = 'tipsctrl/tipsview';
$route['go/home'] = 'homectrl';
$route['default_controller'] = 'homectrl';
// $route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
