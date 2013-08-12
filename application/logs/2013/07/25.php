<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-25 16:26:17 --- EMERGENCY: Kohana_Exception [ 0 ]: The findAll property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php:600
2013-07-25 16:26:17 --- NOTICE: #0 C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('findAll')
#1 C:\wamp\www\sgd\application\classes\Controller\login.php(7): Kohana_ORM->__get('findAll')
#2 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php:600
2013-07-25 16:30:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The find_All property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php:600
2013-07-25 16:30:58 --- NOTICE: #0 C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('find_All')
#1 C:\wamp\www\sgd\application\classes\Controller\login.php(7): Kohana_ORM->__get('find_All')
#2 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php:600
2013-07-25 16:31:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php:600
2013-07-25 16:31:04 --- NOTICE: #0 C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('find_all')
#1 C:\wamp\www\sgd\application\classes\Controller\login.php(7): Kohana_ORM->__get('find_all')
#2 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\sgd\modules\orm\classes\Kohana\ORM.php:600
2013-07-25 16:31:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$email ~ APPPATH\classes\Controller\login.php [ 10 ] in C:\wamp\www\sgd\application\classes\Controller\login.php:10
2013-07-25 16:31:14 --- NOTICE: #0 C:\wamp\www\sgd\application\classes\Controller\login.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\sgd...', 10, Array)
#1 C:\wamp\www\sgd\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\sgd\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 C:\wamp\www\sgd\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\sgd\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\sgd\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\sgd\application\classes\Controller\login.php:10