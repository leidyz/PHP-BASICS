<?php
/*Create a program that contains two arrays of integers/floats. 
Once created, it displays the result of:
  The intersection of the two arrays (numbers in common)
  The mixture of the two arrays.
*/

$array1 = [1,2,3,4,5];
$array2 = [8,4,5,6,7];

//intersection of two arrays
$intersect = array_intersect($array1, $array2); //only shows the numbers in common

//mixture of two arrays
$mixture = array_merge($array1,$array2);

print_r($intersect); //print readable arrays
print_r($mixture);



?>