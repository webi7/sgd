<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-13 11:59:47 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'sgd.user' doesn't exist [ SHOW FULL COLUMNS FROM `user` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\sgd\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-13 11:59:47 --- NOTICE: #0 C:\wamp\www\sgd\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('user')
#2 C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#3 C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#4 C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\sgd\application\classes\Controller\login.php(7): Kohana_ORM::factory('user')
#7 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\sgd\modules\database\classes\Kohana\Database\MySQL.php:358
2013-06-13 12:01:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-13 12:01:55 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-13 12:02:48 --- EMERGENCY: Kohana_Exception [ 0 ]: The findAll property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php:600
2013-06-13 12:02:48 --- NOTICE: #0 C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('findAll')
#1 C:\wamp\www\sgd\application\classes\Controller\login.php(7): Kohana_ORM->__get('findAll')
#2 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php:600
2013-06-13 12:02:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::findAll() ~ APPPATH\classes\Controller\login.php [ 7 ] in :
2013-06-13 12:02:57 --- NOTICE: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-13 12:03:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\wamp\www\sgd\application\classes\Controller\login.php:7
2013-06-13 12:03:01 --- NOTICE: #0 C:\wamp\www\sgd\application\classes\Controller\login.php(7): Kohana_ORM->find()
#1 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\sgd\application\classes\Controller\login.php:7
2013-06-13 12:59:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\access.php [ 85 ] in C:\wamp\www\sgd\application\views\access.php:85
2013-06-13 12:59:54 --- NOTICE: #0 C:\wamp\www\sgd\application\views\access.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\sgd...', 85, Array)
#1 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#2 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#3 C:\wamp\www\sgd\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\sgd\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\sgd\application\classes\Controller\login.php(10): Kohana_Response->body(Object(View))
#6 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\sgd\application\views\access.php:85
2013-06-13 13:13:45 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_HTML::script(), called in C:\wamp\www\sgd\application\views\access.php on line 10 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 240 ] in C:\wamp\www\sgd\system\classes\Kohana\HTML.php:240
2013-06-13 13:13:45 --- NOTICE: #0 C:\wamp\www\sgd\system\classes\Kohana\HTML.php(240): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\sgd...', 240, Array)
#1 C:\wamp\www\sgd\application\views\access.php(10): Kohana_HTML::script()
#2 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#3 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#4 C:\wamp\www\sgd\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\sgd\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\wamp\www\sgd\application\classes\Controller\login.php(10): Kohana_Response->body(Object(View))
#7 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\sgd\system\classes\Kohana\HTML.php:240
2013-06-13 13:13:56 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_HTML::script(), called in C:\wamp\www\sgd\application\views\access.php on line 10 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 240 ] in C:\wamp\www\sgd\system\classes\Kohana\HTML.php:240
2013-06-13 13:13:56 --- NOTICE: #0 C:\wamp\www\sgd\system\classes\Kohana\HTML.php(240): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\sgd...', 240, Array)
#1 C:\wamp\www\sgd\application\views\access.php(10): Kohana_HTML::script()
#2 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#3 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#4 C:\wamp\www\sgd\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\sgd\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\wamp\www\sgd\application\classes\Controller\login.php(10): Kohana_Response->body(Object(View))
#7 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\sgd\system\classes\Kohana\HTML.php:240
2013-06-13 13:34:07 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_HTML::script(), called in C:\wamp\www\sgd\application\views\access.php on line 10 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 240 ] in C:\wamp\www\sgd\system\classes\Kohana\HTML.php:240
2013-06-13 13:34:07 --- NOTICE: #0 C:\wamp\www\sgd\system\classes\Kohana\HTML.php(240): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\sgd...', 240, Array)
#1 C:\wamp\www\sgd\application\views\access.php(10): Kohana_HTML::script()
#2 C:\wamp\www\sgd\system\classes\Kohana\View.php(61): include('C:\wamp\www\sgd...')
#3 C:\wamp\www\sgd\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\sgd...', Array)
#4 C:\wamp\www\sgd\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\sgd\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\wamp\www\sgd\application\classes\Controller\login.php(10): Kohana_Response->body(Object(View))
#7 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\sgd\system\classes\Kohana\HTML.php:240