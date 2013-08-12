<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Cliente extends Controller_Master{

		public function action_index(){

			$view = View::factory('cliente/cliente');
			$this->template->body = $this->response->body($view);
		}
	}
