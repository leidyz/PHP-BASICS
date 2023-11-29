<?php
/*
- Exercise 1
Eratosthenes' sieve is an algorithm designed to find prime numbers within a given interval.
Based on the information in the attached link, implement the sieve of Eratosthenes inside a function,
so that we can call the function for a specific number.*/

function eratosthenes(int $final){
   
$digit = 2; //initial 
   
//create an array with all the given numbers from index 2
$given = array_fill(2, $final - 1, true);

 //logic   
    do{
        if($given[$digit] == true){  //to verify that the number exits in the array
            $i = $digit;

            while($i <= $final){
                $i += $digit; //creates the multiple

                if($i <= $final){
                $given[$i]= false;  //eliminate the multiple
                 }
            }
        } $digit++;

    }while($digit**2 <= $final);

    return $given;
}
        

?>