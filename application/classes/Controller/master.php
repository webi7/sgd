<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Master extends Controller_Template {

	public $template = 'template';

	public function before(){

		parent::before();
		$this->template->title = 'SGD .::. Sistema Gerencial Delivery';

		$this->template->head = View::factory('header');
		$this->template->body = View::factory('index');
		$this->template->footer = View::factory('footer');
	}
}