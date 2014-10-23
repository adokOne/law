<?php


class Client_Model  extends ORM{
    protected $has_one = array("label");
    public    $img_dir = "upload/clients/";

  public function name(){
    $field = "name_".Router::$current_language; 
    return $this->$field;
  }
  public function desc(){
    $field = "desc_".Router::$current_language; 
    return $this->$field;
  }
  public function alt_image($size="big"){
    return file_exists(DOCROOT.$this->img_dir.$this->id."/alt_pic_".$size.".png") 
    ? $this->img_dir.$this->id."/alt_pic_".$size.".png" 
    : "upload/clients/not_found/".$size.".png";
  }
  public function main_image($size="big"){
    return file_exists(DOCROOT.$this->img_dir.$this->id."/main_pic_".$size.".png") 
    ? $this->img_dir.$this->id."/main_pic_".$size.".png" 
    : "upload/clients/not_found/".$size.".png";
  }

  public function __set($key, $value)
  { $trim_keys = array("desc_ru");
    if (in_array($key, $trim_keys))
    {
      $value = trim($value);
    }

    parent::__set($key, $value);
  }
}