<?php
/*
- Exercise 2
Imagine that we are in a store that sells:

Chocolate: 1 euro
Chewing gum: 0.50 euros
Candies: 1.50 euros
Implement a program that allows calculations to be added to a purchase total of this type. For example, what if we buy:

2 chocolates, 1 chewing gum and 1 candy, let's have a program that allows us to add the subtotals to a total, so that:

function(2 chocolates) + function(1 chewing gum) + function(1 caramel) = 2 + 0.5 + 1.5

Therefore, the total is 4.*/

function addChocolate(int $chocolate){
    return $chocolate;
}

function addChewingGum(int $gum){
    return ($gum*0.5);
}

function addCandies(int $candies){
    return ($candies*1.50);
}

function totalPurchase($chocolate=0, $gum=0, $candies=0){
    return
    "Subtotal = ".addChocolate($chocolate)." + ".addChewingGum($gum)." + ".addCandies($candies)."\n".
    "Total purchase= ".(addChocolate($chocolate)+ addChewingGum($gum)+ addCandies($candies))." euros";

}

echo totalPurchase(2,1,1); // Output : Total Purchase:4.00 euros
?>