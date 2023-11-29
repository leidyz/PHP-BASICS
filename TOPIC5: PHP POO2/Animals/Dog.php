<?php

include_once "Sound.php";
 class Dog extends Animal implements Sound{
    public function makeSound(){
        return "Bup, bup! \n";
    }
    public function introduction(){
        return "I am a dog and my name is " .$this->name.".\n";
    }
}
?>