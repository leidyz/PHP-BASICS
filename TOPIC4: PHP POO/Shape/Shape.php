<?php
/*Write a program that defines a Shape class with a
 constructor that receives width and height as parameters. 
 It defines two subclasses; Triangle and Rectangle that 
 inherit from Shape and calculate respectively the area of ​​the shape area().
*/

    class Shape{
        protected $width;
        protected $height;
        protected $area;

        public function __construct($width, $height){
            $this->width = $width;
            $this->height = $height;
        }
    }


?>