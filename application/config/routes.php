<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');

  $route['default_controller'] = 'User_controller';
  $route['users'] = 'User_controller';
  $route['users/create'] = 'User_controller/create';
  $route['users/create-user'] = 'User_controller/formCreateUser';
  $route['404_override'] = '';
  $route['translate_uri_dashes'] = FALSE;

?>
