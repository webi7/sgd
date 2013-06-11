<?php defined('SYSPATH') or die('No direct script access.');
	
	class Controller_Home extends Controller_Master{

		public function action_index(){

			$view = View::factory('home');
			$view->teste = 'nada ver';
			$this->template->body = $this->response->body($view);
		}

		public function action_sobre(){
			// Aqui vai mais e mais codigo;
		}
	}
?>