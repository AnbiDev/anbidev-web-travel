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
$route['default_controller'] = 'C_Landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Admin Stuff */

$route['Admin/Dashboard'] = 'Admin/C_Dashboard';
$route['Admin/Dashboard/(:any)'] = 'Admin/C_Dashboard/$1';
$route['Admin/Dashboard/(:any)/(:any)'] = 'Admin/C_Dashboard/$1/$2';
$route['Admin/Dashboard/(:any)/(:any)/(:any)'] = 'Admin/C_Dashboard/$1/$2/$3';

$route['Admin/PaketWisata'] = 'Admin/C_PaketWisata';
$route['Admin/PaketWisata/(:any)'] = 'Admin/C_PaketWisata/$1';
$route['Admin/PaketWisata/(:any)/(:any)'] = 'Admin/C_PaketWisata/$1/$2';
$route['Admin/PaketWisata/(:any)/(:any)/(:any)'] = 'Admin/C_PaketWisata/$1/$2/$3';

$route['Admin/Destinasi'] = 'Admin/C_Destinasi';
$route['Admin/Destinasi/(:any)'] = 'Admin/C_Destinasi/$1';
$route['Admin/Destinasi/(:any)/(:any)'] = 'Admin/C_Destinasi/$1/$2';
$route['Admin/Destinasi/(:any)/(:any)/(:any)'] = 'Admin/C_Destinasi/$1/$2/$3';

$route['Admin/Pemesanan'] = 'Admin/C_Pemesanan';
$route['Admin/Pemesanan/(:any)'] = 'Admin/C_Pemesanan/$1';
$route['Admin/Pemesanan/(:any)/(:any)'] = 'Admin/C_Pemesanan/$1/$2';
$route['Admin/Pemesanan/(:any)/(:any)/(:any)'] = 'Admin/C_Pemesanan/$1/$2/$3';


$route['Admin/ContactUs'] = 'Admin/C_ContactUs';
$route['Admin/ContactUs/(:any)'] = 'Admin/C_ContactUs/$1';
$route['Admin/ContactUs/(:any)/(:any)'] = 'Admin/C_ContactUs/$1/$2';
$route['Admin/ContactUs/(:any)/(:any)/(:any)'] = 'Admin/C_ContactUs/$1/$2/$3';

$route['Admin/Gallery'] = 'Admin/C_Gallery';
$route['Admin/Gallery/(:any)'] = 'Admin/C_Gallery/$1';
$route['Admin/Gallery/(:any)/(:any)'] = 'Admin/C_Gallery/$1/$2';
$route['Admin/Gallery/(:any)/(:any)/(:any)'] = 'Admin/C_Gallery/$1/$2/$3';

$route['Admin/User'] = 'Admin/C_User';
$route['Admin/User/(:any)'] = 'Admin/C_User/$1';
$route['Admin/User/(:any)/(:any)'] = 'Admin/C_User/$1/$2';
$route['Admin/User/(:any)/(:any)/(:any)'] = 'Admin/C_User/$1/$2/$3';

$route['Admin/Setting'] = 'Admin/C_Setting';
$route['Admin/Setting/(:any)'] = 'Admin/C_Setting/$1';
$route['Admin/Setting/(:any)/(:any)'] = 'Admin/C_Setting/$1/$2';
$route['Admin/Setting/(:any)/(:any)/(:any)'] = 'Admin/C_Setting/$1/$2/$3';



/* User Stuff */
$route['About'] = 'MainMenu/C_AboutUs';
$route['Gallery'] = 'MainMenu/C_Gallery';
$route['Reservasi'] = 'MainMenu/C_Pemesanan';

$route['Login'] = 'MainMenu/C_Login';
$route['Login/(:any)']= 'MainMenu/C_Login/$1';
$route['Login/(:any)/(:any)']= 'MainMenu/C_Login/$1/$2';



$route['Landing'] = 'C_Landing'; 
