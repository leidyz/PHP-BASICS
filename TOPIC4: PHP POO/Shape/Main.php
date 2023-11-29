<?php
include_once "Triangle.php";
include_once "Rectangle.php";
include_once "Shape.php";

$triangle = new Triangle(2,4);
echo $triangle->shape_area(). "\n";



$rectangle = new Rectangle(7,9);
echo $rectangle->shape_area(). "\n";

?>