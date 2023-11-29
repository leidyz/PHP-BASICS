<?php
/*
- Exercise 2
$X = array (10, 20, 30, 40, 50,60);
Display the size of the previous array and then remove an element from the previous array.
 After removing the element, the entire keys must be normalized (their indexes must be rearranged). 
 Display the size of the array one last time.
*/

$X = array (10, 20, 30, 40, 50,60);
$sizeX = count($X);
echo "The size of the previous array is ", $sizeX, "\n";

\array_splice($X, 1, 1);
$newSize =count($X);
echo "The size of the new array is ", $newSize, "\n";

var_dump($X);

foreach($X as $newValues){
    echo $newValues, " ";
}


?>