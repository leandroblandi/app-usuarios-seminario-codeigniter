<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');

  $route['default_controller'] = 'User_controller';

  $route['users'] = 'User_controller';
  $route['user/(:num)'] = 'User_controller/findUser/$1';

  $route['users/create'] = 'User_controller/create';
  $route['create-user'] = 'User_controller/createUser';

  $route['delete-user/(:num)'] = 'User_controller/deleteUser/$1';
  $route['delete-all'] = 'User_controller/deleteAllUsers';
  
  $route['modify-user/(:num)'] = 'User_controller/modifyUser/$1';
  $route['modify/(:num)'] = 'User_controller/modify/$1';

  $route['change-lang/(:any)'] = 'Language_controller/changeLanguage/$1';


  $route['404_override'] = '';
  $route['translate_uri_dashes'] = FALSE;

?>
