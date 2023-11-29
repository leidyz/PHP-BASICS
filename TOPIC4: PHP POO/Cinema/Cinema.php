<?php

include "movie.php";
class Cinema{
    public $cinema;
    public $town;
    public $films=[];
    
    public function __construct($cinema, $town, $films = []){
        $this->cinema = $cinema;
        $this->town = $town;
        $this->films = $films;
    }
    
    public function getCinema(){
        return $this->cinema;
    }

    public function setMovie( Movie $movie){
        $this->films[] = $movie;
    }
    
    public function getFilmsInfo(){
        foreach($this->films as $movie){
            echo $movie->getInfo()."\n";
        }
    }

    public function compareDuration(){      
        $maxDuration = 0;
        $longestMovie = null;

        foreach($this->films as $movie){
            if($movie->getDuration() > $maxDuration){
                $longestMovie = $movie;
                $maxDuration = $movie->getDuration();
            }
        }
        return $longestMovie->getName();
        
    }

    //Implement a feature that searches by director name for movies in different theaters. No need to repeat movies

    public function searchDirector($director){

        $matchingMovie = [];

        foreach($this->films as $movie){

            if($movie->getDirector() === $director){
                $matchingMovie[]= $movie;
            }

        }return $matchingMovie;   

    }
}
?>