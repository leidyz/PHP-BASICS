<?php
/*
- Exercise 3
a) Declare two variables X and Y of type int, 
two variables N and M of type double and assign each one a value. Here is a screen-by-screen display for X and Y :
The value of each variable.
the sum
The remaining.
the product
The module.
For N and M you will do the same.

For all variables (X, Y, N, M):
The double of each variable.
The sum of all variables.
The product of all variables.
b) Create a Calculator function  that enters two numbers per parameter,
 and in a third parameter allows you to add, subtract, multiply or divide the two numbers.
*/

$x = 2;
$y = 4;
$N = 1467.33;
$M = 2888.50;

$sum = $x + $y;
$minus =  $x - $y;
$module = $x%$y;
$multiplication = $x*$y;

$sumD = $N + $M;
$minusD =  $N - $M;
$moduleD = (double) ($N % $M);
$multiplicationD = (double) ($N * $M);

echo "The values are ", $x, " and ", $y , "\n";
echo "The sum is " , $sum , "\n";
echo "The substraction is", $minus , "\n";
echo "The module is " , $module , "\n";
echo "The multiplication is " , $multiplication , "\n";

echo "The values are ", $N, " and ", $M , "\n";
echo "The sum is " , $sumD , "\n";
echo "The substraction is", $minusD , "\n";
echo "The module is " , $moduleD , "\n";
echo "The multiplication is " , $multiplicationD , "\n";


$sumAll = $x + $y + $N + $M;
$multiplyAll = $x * $y * $N * $M;
echo "The sum of all variables: ", $sumAll, "\n";
echo "The product of all variables: ", $multiplyAll, "\n";
echo "The double of ", $x, " is ", $x**2, "\n";
echo "The double of ", $y, " is ", $y**2, "\n";
echo "The double of ", $N, " is ", $N**2, "\n";
echo "The double of ", $M, " is ", $M**2, "\n";


function calculator($num1, $num2, $operator){
$result=0;

switch($operator){
case '+':
    $result = $num1 + $num2; 
    break;
case '-':
    $result = $num1 - $num2; 
    break;
case '*':
    $result = $num1 * $num2; 
    break;
case '/':
    $result = $num1 / $num2; 
    break;
}
return $result;

}
$multi = calculator(5,10,'*');
echo $multi, "\n";


?>