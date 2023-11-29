<?php
/*
- Exercise 3
Create a function that receives as parameters an array of words and a character. 
The function returns true if all the words in the array have the character passed as the second parameter.
For example:
If we have [“hello”, “Php”, “Html”] it will return true if we ask for “h” but false if we ask for “l”.
*/

function check($array,$character):bool{


    foreach($array as $word){
        $present = is_int(strpos($word, $character)); //to check if if returns a position

        if(!$present){
            return $present; //get out of the loop, since it is false
        }
    
    } return $present; //after going through the array and getting all true
     
    }
    
    $array = array("hello", "Php", "html");
    $character = 'h';
    $answer = check($array,$character);
    var_dump($answer); 

?>