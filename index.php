<?php
/**
 * MOVIE CLASS
 */

 class Movie{
     public $title;
     public $year;
     public $genre;
 }

 $sonic = new Movie();
 $sonic->title = 'sonic';
 $sonic->year = 2020;
 $sonic->genre = 'azione fantascienza commedia avventura';

 $avatar = new Movie();
 $avatar->title = 'avatar';
 $avatar->year = 2009;
 $avatar->genre = 'azione fantascienza avventura';
 
 //var_dump('test');
//die();
 // display
echo "title: $sonic->title<br>";
echo "year: $sonic->year<br>";
echo "genre: $sonic->genre<br>";

echo "title: $avatar->title<br>";
echo "year: $avatar->year<br>";
echo "genre: $avatar->genre";

?>
