<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {

	public $template = 'template';

	public function before(){

		parent::before();
	}
	public function action_index()
	{
		$this->template->head = View::factory('header');
		$this->template->body = View::factory('index');
		$this->template->footer = View::factory('footer');
	}

}
