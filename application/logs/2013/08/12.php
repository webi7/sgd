<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-12 14:58:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\header.php [ 6 ] in C:\wamp\www\sgd\application\views\header.php:6
2013-08-12 14:58:38 --- NOTICE: #0 C:\wamp\www\sgd\application\views\header.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\sgd...', 6, Array)
#1 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#2 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#3 C:\wamp\www\sgd\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\sgd\application\views\template.php(4): Kohana_View->__toString()
#5 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#6 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#7 C:\wamp\www\sgd\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\sgd\application\views\header.php:6
2013-08-12 14:58:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: company ~ APPPATH\views\footer.php [ 3 ] in C:\wamp\www\sgd\application\views\footer.php:3
2013-08-12 14:58:38 --- NOTICE: #0 C:\wamp\www\sgd\application\views\footer.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\sgd...', 3, Array)
#1 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#2 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#3 C:\wamp\www\sgd\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\sgd\application\views\template.php(10): Kohana_View->__toString()
#5 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#6 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#7 C:\wamp\www\sgd\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\sgd\application\views\footer.php:3
2013-08-12 14:59:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\header.php [ 6 ] in C:\wamp\www\sgd\application\views\header.php:6
2013-08-12 14:59:14 --- NOTICE: #0 C:\wamp\www\sgd\application\views\header.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\sgd...', 6, Array)
#1 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#2 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#3 C:\wamp\www\sgd\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\sgd\application\views\template.php(4): Kohana_View->__toString()
#5 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#6 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#7 C:\wamp\www\sgd\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\sgd\application\views\header.php:6
2013-08-12 14:59:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: company ~ APPPATH\views\footer.php [ 3 ] in C:\wamp\www\sgd\application\views\footer.php:3
2013-08-12 14:59:14 --- NOTICE: #0 C:\wamp\www\sgd\application\views\footer.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\sgd...', 3, Array)
#1 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#2 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#3 C:\wamp\www\sgd\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\sgd\application\views\template.php(10): Kohana_View->__toString()
#5 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#6 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#7 C:\wamp\www\sgd\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\sgd\application\views\footer.php:3
2013-08-12 15:07:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\header.php [ 6 ] in C:\wamp\www\sgd\application\views\header.php:6
2013-08-12 15:07:04 --- NOTICE: #0 C:\wamp\www\sgd\application\views\header.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\sgd...', 6, Array)
#1 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#2 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#3 C:\wamp\www\sgd\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\sgd\application\views\template.php(1): Kohana_View->__toString()
#5 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#6 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#7 C:\wamp\www\sgd\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\sgd\application\views\header.php:6
2013-08-12 15:07:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: company ~ APPPATH\views\footer.php [ 3 ] in C:\wamp\www\sgd\application\views\footer.php:3
2013-08-12 15:07:04 --- NOTICE: #0 C:\wamp\www\sgd\application\views\footer.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\sgd...', 3, Array)
#1 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#2 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#3 C:\wamp\www\sgd\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\sgd\application\views\template.php(3): Kohana_View->__toString()
#5 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#6 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#7 C:\wamp\www\sgd\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\sgd\application\views\footer.php:3
2013-08-12 15:08:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: company ~ APPPATH\views\footer.php [ 3 ] in C:\wamp\www\sgd\application\views\footer.php:3
2013-08-12 15:08:49 --- NOTICE: #0 C:\wamp\www\sgd\application\views\footer.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\sgd...', 3, Array)
#1 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#2 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#3 C:\wamp\www\sgd\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\sgd\application\views\template.php(3): Kohana_View->__toString()
#5 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#6 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#7 C:\wamp\www\sgd\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\sgd\application\views\footer.php:3
2013-08-12 15:10:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function URL() ~ APPPATH\views\header.php [ 11 ] in :
2013-08-12 15:10:17 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-12 16:07:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: company ~ APPPATH\classes\Controller\master.php [ 14 ] in C:\wamp\www\sgd\application\classes\Controller\master.php:14
2013-08-12 16:07:00 --- NOTICE: #0 C:\wamp\www\sgd\application\classes\Controller\master.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\sgd...', 14, Array)
#1 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(69): Controller_Master->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\sgd\application\classes\Controller\master.php:14
2013-08-12 16:33:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\cliente.php [ 9 ] in :
2013-08-12 16:33:54 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :