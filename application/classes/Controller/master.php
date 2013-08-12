<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Master extends Controller_Template {

	public $template = 'template';

	public function before(){

		parent::before();
		$title = 'SGD .::. Sistema Gerencial Delivery';
		$company = 'COMPANY COMES HERE';

		$this->template->head = View::factory('header',array('title' => $title));
		$this->template->body = '';
		$this->template->footer = View::factory('footer', array('company' => $company));
	}
}