<?php
/*
Write a function that determines the total amount to pay for a phone call based on the following premises:
Any call that lasts less than 3 minutes costs 10 cents.
Each additional minute after the first 3 is a meter step and costs 5 cents.*/

function phoneBills($duration){
$pay = 0;
$total = 0;
    if($duration<3){
        return "10 cents";
    }else{
        for($i=3;$i<$duration;$i++){
            $total+=5;
        }
        $pay= $total+10;
        return $pay." cents";
    }
}

//Example usage of above code :
echo phoneBills(2); //Output should be 10 
echo phoneBills(6); //Output should be 25
?>