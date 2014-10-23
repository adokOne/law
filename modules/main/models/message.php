<?php


class Message_Model  extends ORM{
  private static $recepients = array("adok@ukr.net","LTD.KAYROS@YAHOO.COM");
  private static $subject   =  "Новое сообщение на сайте";
  public function __construct($data = false){
    parent::__construct();
    if($data){
      foreach($data as $k=>$v){
        $this->$k = $v;
      }
    }
  }

  public function save(){
    parent::save();
    $message = implode("\n\n\n",array(
      $this->email,
      $this->phone,
      $this->name,
      $this->text
    ));
    return mail(implode(",", self::$recepients), self::$subject, $message);
  }
}

