<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//$route['default_controller'] = 'Pages';
//$route['(:any)'] = 'Pages/page_view/$1';

$route['default_controller'] = 'News';

//$route['default_controller'] = 'Upload';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//$route['blog'] = 'news/afficher';
//$route['blog/(:any)'] = 'news/suite/$1';


$route['news'] = 'news';
$route['news/create'] = 'news/create';
$route['news/edit/(:any)'] = 'news/edit/$1';
$route['news/view/(:any)'] = 'news/view/$1';
$route['news/(:any)'] = 'news/view/$1';