<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

	public function action_index()
	{
		$model = ORM::factory('user');
		// var_dump($model);exit;
		$view = View::factory('access');
		$view->title = 'Sistema Gerencial Delivery 1.0';
		$view->teste = $model->email;
		$this->response->body($view);
	}
}