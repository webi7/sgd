<?php defined('SYSPATH') or die('No direct script access.');
	
	class Controller_Home extends Controller_Master{

		public function action_index(){
			
			$view = View::factory('home');
			$this->template->body = $this->response->body($view);
		}
	}
?>