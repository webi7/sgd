<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Produto extends Controller_Master{

		public function action_index(){

			$view = View::factory('produto/produto');
			$this->template->body = $this->response->body($view);
		}
	}
