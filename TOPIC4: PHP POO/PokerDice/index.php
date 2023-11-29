<?php

require_once "pokerDice.php";

$quantityDice = 5;
$totalThrows = 0;

for ($i=0; $i<$quantityDice;$i++){
    $dice = new pokerDice();
    $dice->throwDice();
    $totalThrows++; //just to check
    echo "The dice number ".($i+1)." has the face: ".$dice->shapeName()."\n";

}

echo $totalThrows."\n";

echo "The total throws during the game were ". pokerDice::getTotalThrows()."\n"; //access the static method with the name of the class

?>