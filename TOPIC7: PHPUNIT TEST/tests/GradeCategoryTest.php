<?php


use Exercise2\GradeCategory;
use PHPUnit\Framework\TestCase;

class GradeCategoryTest extends TestCase
{
    public function testCategory()
    {
        $student = new GradeCategory();

        $this->assertSame("First Division", $student->category(60));
        $this->assertSame("Second Division", $student->category(45));
        $this->assertSame("Third Division", $student->category(33));
        $this->assertSame("The student failed", $student->category(20));
    }
}
