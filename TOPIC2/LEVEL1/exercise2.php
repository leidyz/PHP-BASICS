<?php
/*
- Exercise 2
Print to the screen " Hello, World! " using a variable. At the end:
Converts all characters in the string to uppercase and prints to the screen.
Prints the size (length) of the variable to the screen.
Print the string in reverse character order.
Create a new variable with the content " This is the PHP course " and print on the screen the concatenation of both strings.
 */

 $hello = "Hello, World!";
 echo $hello , "\n";
 
 echo strtoupper($hello) , "\n";
 echo strlen($hello) , "\n";
 echo strrev($hello), "\n";
 
 $course = " This is the PHP course. ";
 
 echo $hello , $course;
 ?>