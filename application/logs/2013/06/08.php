<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-08 13:57:55 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\sgd\system\classes\Kohana\Cookie.php:67
2013-06-08 13:57:55 --- NOTICE: #0 C:\wamp\www\sgd\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\wamp\www\sgd\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\wamp\www\sgd\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\sgd\system\classes\Kohana\Cookie.php:67