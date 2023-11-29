<?php

use Exercise1\NumberChecker;

class NumberCheckerTest extends \PHPUnit\Framework\TestCase{
   
    public function testEven(){
        $even = new NumberChecker(2);
        $result = $even->isEven();
        $this->assertEquals(true,$result);//equal value
        //$this->assertFalse();

    }

    public function testPositive(){
        $positive = new NumberChecker(2);
        $result = $positive->isPositive();
        $this->assertEquals(true,$result);//equal value

    }

}

?>
