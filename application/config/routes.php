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
$route['default_controller']    = 'Dashboard';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

// ==================== CHATBOT RESPONSE ====================
$route['response']              = 'Dashboard/response';

// ==================== AUTH ====================
$route['admin']                 = 'Admin';
$route['login']                 = 'Auth';
$route['login_proc']            = 'Auth/login';
$route['logout']                = 'Auth/logout';

// ==================== USER ====================
$route['user']                  = 'Admin/userPage';
$route['v_add_user']            = 'Admin/addUser';
$route['v_edit_user/(:any)']    = 'Admin/editUser/$1';
$route['insert_user']           = 'User/insert';
$route['update_user/(:any)']    = 'User/update/$1';
$route['delete_user/(:any)']    = 'User/delete/$1';

// ==================== PRODUK ====================
$route['produk']                = 'Admin/produkPage';
$route['v_add_produk']          = 'Admin/addProduk';
$route['v_edit_produk/(:any)']  = 'Admin/editProduk/$1';
$route['insert_produk']         = 'Produk/insert';
$route['update_produk/(:any)']  = 'Produk/update/$1';
$route['delete_produk/(:any)']  = 'Produk/delete/$1';

// ==================== GALERI ====================
$route['galeri']                = 'Admin/galeriPage';
$route['v_add_galeri']          = 'Admin/addGaleri';
$route['v_edit_galeri/(:any)']  = 'Admin/editGaleri/$1';
$route['insert_galeri']         = 'Galeri/insert';
$route['update_galeri/(:any)']  = 'Galeri/update/$1';
$route['delete_galeri/(:any)']  = 'Galeri/delete/$1';

// ==================== CHATBOT ====================
$route['chatbots']              = 'Admin/chatbotPage';
$route['v_add_chatbot']         = 'Admin/addChatbot';
$route['v_edit_chatbot/(:any)'] = 'Admin/editChatbot/$1';
$route['insert_chatbot']        = 'Chatbot/insert';
$route['update_chatbot/(:any)'] = 'Chatbot/update/$1';
$route['delete_chatbot/(:any)'] = 'Chatbot/delete/$1';