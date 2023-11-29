<?php
/*
- Exercise 4
Write a program that implements a function that counts up to a certain number. 
If a specific number is not included, the number must default to 10. 
In addition, this function must have a second parameter that indicates how much to count from 
(From 1 to 1, from 2 in 2...). The account should be displayed step by step.
*/

function counts($skip, $finish= 10){
    $i =0;
   
    for($i; $i <= $finish; $i += $skip){
        echo $i;
    }  
}

counts(2);

?>