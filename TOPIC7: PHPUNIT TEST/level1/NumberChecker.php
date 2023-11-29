<?php

namespace Exercise1;
class NumberChecker{

	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

	function category($grade){
        if($grade >= 60){
            return "First Division";
        }elseif($grade >= 45 ){
            return "Second Division";
        }elseif($grade >=33 ){
            return "Third Division";
        }else{
            return "The student failed";
        }
    }

}
?>