<?php
/*
 *  @author Chernov Aleksandr <adok@ukr.net>
 *  @package BT_CRM
 *  *  
 */
class Messages_Admin extends Admin_Controller {

	public function index($page = 1){
		$items = ORM::factory("message")->limit($this->config["per_page"])->offset(($page-1)*$this->config["per_page"])->find_all();
		$view  = new View("messages/index");
		$actions = new View("messages/actions");
		$view->items = $items;
		$view->pagination = $this->pagination();
		$this->view->content = $view->render(false);
		$this->view->actions = $actions->render(false);
		$this->view->render(true);
	}


	public function edit($id=false){
		$js = array(
			
			"vendor/raphael-min",
			"vendor/colorwheel",

		);
		js::add($js);
		$object = $this->check_object_by_id("message",$id);
		$view = new View("messages/edit");
		$view->object =  $object ;
		$this->view->content = $view->render(false);
		$this->view->render(true);

	}
	public function new_one(){
		$js = array(
			
			"vendor/raphael-min",
			"vendor/colorwheel",

		);
		js::add($js);
		$object = new Message_Model();
		$view = new View("messages/edit");
		$view->object =  $object ;
		$this->view->content = $view->render(false);
		$this->view->render(true);

	}
	public function update(){
		$object = (object)$this->input->post("object");
		$item   = $object->id ? ORM::factory("message")->find($object->id) : new Message_Model();
		foreach ($object as $attr => $value) {
			$item->$attr = $value;
		}
		$item->save();
		url::redirect(url::base()."admin/messages?success");
	}

}
