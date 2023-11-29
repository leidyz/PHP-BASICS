<?php
include "Shape.php"; //can only include it in one of the childs file

class Triangle extends Shape{


    public function shape_area(){
      return $this->area = ($this->height * $this->width)/2;
    }

}


?>