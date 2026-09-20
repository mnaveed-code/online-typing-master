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
|	https://codeigniter.com/userguide3/general/routing.html
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

$route['default_controller'] = 'Site';

//===============Route for user======================
$route['admin'] = 'User';
$route['user/login'] = 'User/login';
$route['admin/user'] = 'User/user_list';
$route['admin/user/delete/(:any)'] = 'User/delete/$1';
$route['admin/user/edit/(:any)'] = 'User/edit/$1';
$route['user/profile'] = 'User/profile';
$route['user/update'] = 'User/update';
$route['user/profile_edit/(:any)'] = 'User/profile_edit/$1';
$route['profile/insert'] = 'User/profile_insert';
$route['compition'] = 'User/compition';
$route['logout'] = 'User/logout';

//===============Route for Test=====================
$route['dashboard'] = 'Test/dashboard';
$route['admin/test/insert'] = 'Test/insert_test';
$route['admin/test'] = 'Test/test_show';
$route['admin/test/edit/(:any)'] = 'Test/test_edit/$1';
$route['admin/test/delete/(:any)'] = 'Test/delete/$1';
$route['user_test_result'] = 'Test/test_result';
$route['user/test'] = 'Test/user_test';
$route['test/result_show'] = 'Test/show_result';
$route['show-grapgh/(:any)'] = 'Test/show_grapgh/$1';
$route['show-comp-grapgh/(:any)'] = 'Test/showCompGrapgh/$1';
$route['user/prev-result'] = 'Test/showPreviousResult';
$route['compition_result'] = 'Test/compition_result';
$route['compition/result'] = 'Test/compitiom_result_show';
$route['compition-request'] = 'Test/compition_request';


$route['user/compition'] = 'Site/user_compition';
$route['user/practise'] = 'Site/practise';
$route['progres_status'] = 'Site/progressStatus';


//=== ==========Route for Site====================
$route['user'] = 'Site/login';
$route['start/test/(:any)'] = 'Site/test_start/$1';
$route['start_practise/(:any)'] = 'Site/practise_start/$1';
$route['join-compition/(:any)'] = 'Site/compition_join/$1';
$route['approve-comp/(:any)'] = 'Site/compition_approved/$1';
$route['start/compition/(:any)'] = 'Site/compition_start/$1';
$route['site/user_register'] = 'Site/new_register';
$route['site/user_login'] = 'Site/new_login';
$route['user-message'] = 'Site/message';
$route['logout-user'] = 'Site/logout';

//==============Route for Setting===============
$route['setting'] = 'Setting/setting_table';
$route['admin/setting_edit/(:any)'] = 'Setting/setting_edit/$1';
$route['admin/edit_save'] = 'Setting/edit_save';
$route['message-show'] = 'Setting/message';


// $route['(:any)'] = 'Site/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
