<?php
/*
 *  @author Chernov Aleksandr <adok@ukr.net>
 *  @package BT_CRM
 *  *  
 */
class Practiks_Admin extends Admin_Controller {

	public function __construct(){
		parent::__construct();
		View::set_global("main_height",1800);
	}

	public function index($page = 1){
		$items = ORM::factory("practik")->limit($this->config["per_page"])->offset(($page-1)*$this->config["per_page"])->find_all();
		$view  = new View("practiks/index");
		$view->items = $items;
		$actions = new View("practiks/actions");
		$view->pagination = $this->pagination();
		$this->view->content = $view->render(false);
		$this->view->actions = $actions->render(false);
		$this->view->render(true);
	}

	public function new_one(){
		$view = new View("practiks/edit");
		$view->object =  new Practik_Model();
		$this->view->content = $view->render(false);
		$this->view->render(true);
	}

	public function edit($id=false){
		$object = $this->check_object_by_id("practik",$id);
		$view = new View("practiks/edit");
		$view->object =  $object ;
		$this->view->content = $view->render(false);
		$this->view->render(true);

	}
	public function update(){
		$object = (object)$this->input->post("object");
		$item   = $object->id ? ORM::factory("practik")->find($object->id) : new Practik_Model();
		foreach ($object as $attr => $value) {
			$item->$attr = $value;
		}
		$item->save();
		if(isset($_FILES["main_pic"]) || isset($_FILES["alt_pic"])){
			$this->upload_pictures($item);
		}
		url::redirect(url::base()."admin/practiks?success");
	}


	public function delete($id=false){
		$user = $this->check_object_by_id("practik",$id);
		$user->delete();
		url::redirect(url::base()."admin/practiks?success");
	}

	private function upload_pictures($item){
		foreach($_FILES as $name=>$file){
			if(!strlen($file["name"])) continue;
			picenigne::process_picture($file["tmp_name"],$item->img_dir.$item->id."/",$name.".png",Kohana::config("goods_images.sizes"));
		}
	}


}
