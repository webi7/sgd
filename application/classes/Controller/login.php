<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

	public function action_index()
	{
		$model = ORM::factory('user',1);
		// var_dump($model);exit;
		$view = View::factory('access');
		$this->response->body($view);
	}
}