<?php

declare(strict_types=1); //this will only allowed the type of variable defined in the methods
include_once "Animal.php";
include "Dog.php";
include_once "Cat.php";



$dog = new Dog("Romeo");
echo $dog->introduction(); //trying abtract methods
echo $dog->makeSound();//trying interface 


$cat = new Cat("Juliet");
echo $cat->introduction();
echo $cat->makeSound();
?>