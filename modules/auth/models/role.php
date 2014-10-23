<?php defined('SYSPATH') OR die('No direct access allowed.');

class Role_Model extends Auth_Role_Model {

	protected $has_and_belongs_to_many = array('users','modules');

	public function modules(){
		$modules = array();
		foreach($this->modules as $module){
			$modules[] = $module->name;
		}
		return $modules;
	}

} 