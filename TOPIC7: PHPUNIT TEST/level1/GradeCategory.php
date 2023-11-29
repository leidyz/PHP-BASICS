<?php

namespace Exercise2;
class GradeCategory{
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