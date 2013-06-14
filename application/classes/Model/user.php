<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends ORM{

	protected $_has_one = array();
	protected $_has_many = array();
	protected $_belongs_to = array();

	protected $_table_name = 'users';
	protected $_primary_key = 'id';
}

?>