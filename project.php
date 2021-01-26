<?php

class Project {
  public $name;
  
  public $description;
  public $image;

  public $finddetaillink;
  
  
  public function __construct($name,$description,$image, $finddetaillink) {
    $this->name = $name;
   
    $this->description = $description;
   
     $this->image = $image;

     $this->finddetaillink = $finddetaillink;
  }
}
  
?>