<?php
 #EXERCISE1
# Define a variable of each type: integer ,  double ,  string and boolean . Print them by screen.
# Then create a constant that includes your name and display it in title-by-screen format.
$age = 20;
$salary = 25550.25;
$text = "Trying PHP for the first time! See my new variables:";
$employed = true;

echo $text , "\n";
echo "integer: ", $age , ", double: " , $salary , ", boolean: ", $employed , "\n";

define("name","Leidy");
echo name , "\n";

?>