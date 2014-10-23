<?php


class Practik_Model  extends ORM{
    protected $has_one = array("label");
    public    $img_dir = "upload/practik/";

  public function name(){
    $field = "name_".Router::$current_language; 
    return $this->$field;
  }
  public function anons(){
    $field = "anons_".Router::$current_language; 
    return $this->$field;
  }
  public function desc(){
    $field = "desc_".Router::$current_language; 
    return $this->$field;
  }
  public function alt_image($size="big"){
    return file_exists(DOCROOT.$this->img_dir.$this->id."/alt_pic_".$size.".png") 
    ? $this->img_dir.$this->id."/alt_pic_".$size.".png" 
    : "upload/practik/not_found/".$size.".png";
  }
  public function main_image($size="big"){
    return file_exists(DOCROOT.$this->img_dir.$this->id."/main_pic_".$size.".png") 
    ? $this->img_dir.$this->id."/main_pic_".$size.".png" 
    : "upload/practik/not_found/".$size.".png";
  }

  public function __set($key, $value)
  { $trim_keys = array("anons_ru","desc_ru","desc_uk","anons_uk");
    if (in_array($key, $trim_keys))
    {
      $value = trim($value);
    }

    parent::__set($key, $value);
  }

  public function save(){
    if(!strlen($this->seo_name)){
      $this->seo_name = $this->generate_seo();
    }
    parent::save();
  }

  private function generate_seo(){
    return text::ru2Lat($this->name_ru);
  }

  
}