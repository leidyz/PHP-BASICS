<?php

class Movie{

    public string $name;
    public float $duration;
    public string $director;


    public function __construct($name, $duration, $director){
        $this->name = $name;
        $this->duration = $duration;
        $this->director = $director;
    }

    public function getInfo(){
        return "Movie name: ".$this->name."\n"."Duration: ".$this->duration."\n"."Director: ".$this->director."\n";
    }

    public function getDuration(){
        return $this->duration;
    }

    public function getName(){
        return $this->name;
    }

    public function getDirector(){
        return $this->director;
    }

}

?>