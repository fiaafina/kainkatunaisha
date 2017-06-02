<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'web';
$route['login']='web/login';
$route['userbaru_view']='web/userbaru_view';
$route['update/(:any)']='web/update/$1';
$route['delete/(:any)']='web/delete/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;