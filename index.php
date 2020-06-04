<?php
/**
 * MOVIE CLASS
 */

 class Movie{
     public $title;
     public $year;
     public $genre;

     // costructor
     public function  __construct($title, $year, $genre){
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
     }
 }

 $sonic = new Movie('sonic',2020,'azione fantascienza commedia avventura');
 
 $avatar = new Movie('avatar',2009,'azione fantascienza avventura');
 
 // display
echo "title: $sonic->title<br>";
echo "year: $sonic->year<br>";
echo "genre: $sonic->genre<br>";

echo "title: $avatar->title<br>";
echo "year: $avatar->year<br>";
echo "genre: $avatar->genre";

?>
