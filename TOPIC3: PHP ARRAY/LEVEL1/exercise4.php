<?php
/*- Exercise 4
Make an associative array that represents information about yourself. Specifically, it must include:
first name
age
email
favorite food
*/

$association = array("name " => "Leidy", "age " => "25", "email " => "leidy@gmail.com", "favorite food " => "pizza");
foreach($association as $x => $x_value) {
    echo   $x  , $x_value;
    echo "\n";
  }

?>