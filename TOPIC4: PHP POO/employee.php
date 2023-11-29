<?php
/*Create an Employee class, define its name and salary as attributes. 
 Define an initialize method that receives the name and salary as parameters. 
 Create a second print method that prints the name and a message whether or not you have to pay taxes
 (if your salary is over 6000, you pay taxes).
 */

 class Employee {
    public $name;
    public $salary;

    function initialize($name,$salary){
        $this->name = $name;
        $this->salary = $salary;
    }
   

    function __toString(){
        if($this->salary >6000){
            return "Your name is $this->name, and you need to pay taxes.";
        }else{
            return "Your name is $this->name, and you don't need to pay taxes.";
        }
    }
 }
  
 $employee1 = new Employee;
 $employee1 ->initialize("Karla", 6200);
 echo $employee1->__toString();
?>