<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

	public function action_index()
	{
		// $this->response->body('teste');
		$view = View::factory('access');
		echo $view;

	}
}