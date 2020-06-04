<?php
/**
 * MOVIE CLASS
 */

class Movie{
    public $title;
    public $year;
    public $genre;
    public $price;

    // costructor
    public function  __construct($_title, $_year, $_genre, $_price){
       $this->title = $_title;
       $this->year = $_year;
       $this->genre = $_genre;
       $this->price = number_format($_price, 2);
    }

    // methods
    public function calcDiscount($perc){
        $discount = $this->price * $perc / 100;
        $disc_price = $this->price - $discount;
        return number_format($disc_price,2);
    }

}

