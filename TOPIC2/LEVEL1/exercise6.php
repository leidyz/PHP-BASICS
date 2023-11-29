
<?php
    
/*
- Exercise 6
Charlie bit my finger! Charlie will bite your finger exactly 50% of the time.
Write the isBitten() function that returns TRUE with 50% probability and FALSE otherwise
*/

function isBitten(){
    $bitme = rand(0,1);

    if($bitme === 1){
        return "Charlie bit me";
    }else{
        return "Charlie did not bite me";
    }
}


$charlie = isBitten();
echo $charlie;

?>

