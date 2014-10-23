<?php


class Member_Model  extends ORM{
    protected $has_one = array("label");
    public    $img_dir = "upload/members/";

  public function name(){
    $field = "name_".Router::$current_language; 
    return $this->$field;
  }
  public function position(){
    $field = "position_".Router::$current_language; 
    return $this->$field;
  }
  public function main_image($size="big"){
    return file_exists(DOCROOT.$this->img_dir.$this->id."/main_pic_".$size.".png") 
    ? $this->img_dir.$this->id."/main_pic_".$size.".png" 
    : "upload/members/not_found/".$size.".png";
  }

  public function __set($key, $value)
  { $trim_keys = array("position_uk","position_ru");
    if (in_array($key, $trim_keys))
    {
      $value = trim($value);
    }

    parent::__set($key, $value);
  }
}