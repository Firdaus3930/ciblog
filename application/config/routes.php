<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['notification'] = 'notification/index';

$route['classes'] = 'classes/index';

$route['chat'] = 'chat/index';

$route['workdoc'] = 'workdoc/index';

$route['meetings'] = 'meetings/index';

$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';

$route['default_controller'] = 'pages/view';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
