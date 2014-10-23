<?php
/*
 *  @author Chernov Aleksandr <adok@ukr.net>
 *  @package BT_CRM
 *  *  
 */
class Clients_Admin extends Admin_Controller {

  public function index($page = 1){
    $items = ORM::factory("client")->limit($this->config["per_page"])->offset(($page-1)*$this->config["per_page"])->find_all();
    $view  = new View("clients/index");
    $actions = new View("clients/actions");
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
    $object = $this->check_object_by_id("client",$id);
    $view = new View("clients/edit");
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
    $object = new Client_Model();
    $view = new View("clients/edit");
    $view->object =  $object ;
    $this->view->content = $view->render(false);
    $this->view->render(true);

  }
  public function delete($id=false){
    $user = $this->check_object_by_id("client",$id);
    $user->delete();
    url::redirect(url::base()."admin/clients?success");
  }
  public function update(){
    $object = (object)$this->input->post("object");
    $item   = $object->id ? ORM::factory("client")->find($object->id) : new Client_Model();
    foreach ($object as $attr => $value) {
      $item->$attr = $value;
    }
    $item->save();
    if(isset($_FILES["main_pic"]) || isset($_FILES["alt_pic"])){
      $this->upload_pictures($item);
    }
    url::redirect(url::base()."admin/clients?success");
  }
  private function upload_pictures($item){
    foreach($_FILES as $name=>$file){
      if(!strlen($file["name"])) continue;
      picenigne::process_picture($file["tmp_name"],$item->img_dir.$item->id."/",$name.".png",Kohana::config("goods_images.sizes"));
    }
  }
}
