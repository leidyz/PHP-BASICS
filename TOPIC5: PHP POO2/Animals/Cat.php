<?php

include_once "Animal.php";
class Cat extends Animal implements Sound{
        
    public function makeSound(){
        return "Mine! \n";
    }
    
   public function introduction(){
    return "I am a cat and my name is " .$this->name.".\n";
   }

}


?>