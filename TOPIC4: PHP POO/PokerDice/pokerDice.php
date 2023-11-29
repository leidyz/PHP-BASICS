<?php
/*
Create the PokerDice class. The faces of a poker die have the following figures: Ace, K, Q, J, 7 and 8.
Create the throw method which does nothing but roll the die, that is, 
it generates a random value for the object to which the method is applied.

It also creates the shapeName method, which tells what the shape is 
that came out in the last roll of the dice in question.

Make an application that allows you to roll five poker dice at once.
Also, program the getTotalThrows method which should display the total number of throws among all the dice.
*/
class pokerDice{

    private $faces = ["A", "K", "Q", "J", "7", "8"];
    private $lastRoll;
    private static $totalThrows = 0; //use static in order to accumulate 

    public function throwDice(){
        $random_key= array_rand($this->faces, 1);  //selects a random key from the array
        $this->lastRoll = $this->faces[$random_key]; //get the value from the array
        self::$totalThrows++; //access a static attribute or method with self:: when inside the same class
    }

    public function shapeName(){
        return $this->lastRoll;
    }

    public static function getTotalThrows(){
        return self::$totalThrows;
    }

}

?>