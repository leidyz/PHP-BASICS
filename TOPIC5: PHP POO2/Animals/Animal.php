<?php
/*
- Exercise 1
We need to create a data type that represents an animal. 
Animals have a name, however, the sound of a dog's "talking" is not the same as that of a cat. 
Therefore, we need to create other types of data that help us program these behaviors. 
Basically, we want a makeSound() method that displays a different message if it's a dog (eg “Bup, bup!”) 
or a cat (eg “Mine!”).
*/

    abstract class Animal{
        protected $name;

        public function __construct(string $name){ //putting the type of variable will make it a requirement
            $this->name = $name;
        }
        
       abstract public function introduction();
    }
        
?>