<?php
/*
 *  @author Chernov Aleksandr <adok@ukr.net>
 *  @package BT_CRM
 *  *  
 */
class Main_Controller extends Controller {

  public function __construct(){
    parent::__construct();
    $this->_set_layout();
    $footer_links = ORM::factory("practik")->where(array("active"=>1))->limit(10)->find_all();
    View::set_global("footer_links",$footer_links);
  }

  public function index(){
    $js = array(
      "front/slider",
      "front/tms-0.3",
      "front/tms_presets",
    );
    js::add($js);
    $view = new View("main");
    $view->render(true);
  }

  public function spheres(){
    $js = array(
      "front/jquery.cycle.all",
      "front/bgSlider",
    );
    js::add($js);
    $view = new View("spheres");
    $view->practiks = ORM::factory("practik")->where("active",1)->find_all();
    $view->render(true);
  }

  public function contacts(){
    $js = array(
      "front/jquery.cycle.all",
      "front/bgSlider",
      "front/forms",
    );
    js::add($js);
    $view = new View("contacts");
    $view->render(true);
  }

  public function clients(){
    $js = array(
      "front/jquery.cycle.all",
      "front/bgSlider",
    );
    js::add($js);
    $view = new View("clients");
    $view->clients = ORM::factory("client")->find_all();
    $view->render(true);
  }

  public function send(){
    $message = array(
      "name"  => $this->input->post("name",""), 
      "email" => $this->input->post("email",""), 
      "phone" => $this->input->post("phone",""), 
      "text"  => $this->input->post("message",""), 
      "created" => time()
    );
    $new_message = new Message_Model($message);
    var_dump($new_message->save());
  }

  public function about(){
    $js = array(
      "front/jquery.cycle.all",
      "front/bgSlider",
    );
    js::add($js);
    $view = new View("about");
    $view->members = ORM::factory("member")->find_all();
    #var_dump(ceil($view->members->count()/3));die;
   # var_dump(array_chunk($view->members->as_array(), ceil($view->members->count()/3)));
    $view->render(true);
  }

  public function news(){
    $js = array(
      "front/jquery.cycle.all",
      "front/bgSlider",
    );
    js::add($js);
    $view = new View("news");
    $view->news = ORM::factory("page")->where(array("type"=>"news"))->find_all();
    $view->render(true);
  }

  public function show_news($seo){
    $js = array(
      "front/jquery.cycle.all",
      "front/bgSlider",
    );
    js::add($js);
    $view = new View("show_news");
    $view->news = ORM::factory("page")->where(array("seo_name"=>$seo))->find();
    $view->render(true);
  }

  public function show_spheres($seo){
    $js = array(
      "front/jquery.cycle.all",
      "front/bgSlider",
    );
    js::add($js);
    $view = new View("show_spheres");
    $view->practik = ORM::factory("practik")->where(array("seo_name"=>$seo))->find();
    $view->render(true);
  }


}
