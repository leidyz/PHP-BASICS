<?php

/*Imagine that you have to present the movie catalog of a cinema chain. Each cinema has a name, a town it belongs to,
 and a list of films. Each movie has a name, a duration, and a director.

It's about making a program that allows us to record this information for later:

For each movie theater, display the data for each movie.
For each cinema, show the film with the longest duration.
Implement a feature that searches by director name for movies in different theaters. No need to repeat movies.*/

require_once "Cinema.php";
require_once "movie.php";


$movie1 = new Movie("Little mermaid",1.50,"Rob Marshall");
$movie2 = new Movie("Harry potter",2.30,"Mike Newell");
$movie3 = new Movie("Inception", 3.00, "Christopher Nolan");
$movie4 = new Movie("Cars",2.15,"Peter Park");
$movie5 = new Movie("Barbie",2.30,"Greta Gerwig");
$movie6 = new Movie("White Chicks",1.50,"Keenen Ivory Wayans");


$cinema1 = new Cinema("Albrook","Panama",[$movie1,$movie2]);
$cinema2 = new Cinema("Multiplaza","Clayton",[$movie3,$movie4]);
$cinema3 = new Cinema("Westland","Chorrera",[$movie5,$movie6]);


//For each movie theater, display the data for each movie.
$cinemas = [$cinema1,$cinema2,$cinema3];
foreach($cinemas as $cinema){
    echo $cinema->getCinema()."\n";
    echo $cinema->getFilmsInfo();
}

//For each cinema, show the film with the longest duration.
foreach($cinemas as $cinema){
    echo "The longest movie from ".$cinema->getCinema()." is ".$cinema->compareDuration()."\n";

}

//Implement a feature that searches by director name for movies in different theaters. No need to repeat movies

$director = "Greta Gerwig";
$foundMovies = [];

foreach($cinemas as $cinema){
   $directorMovies = $cinema->searchDirector($director);
   if(!empty($directorMovies)){
   $foundMovies[]= array_merge($foundMovies,$directorMovies);
   }
}

print_r($foundMovies->getName());



?>