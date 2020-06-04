<?php
/*********
    CLASS*
 ********/
class Movie {
    public $title;
    public $language;
    public $country;
    public $year;
    public $duration;
    public $rating;
    public $genre;
    public $direction;
    // constructor
    public function __construct($_title, $_language, $_country, $_year, $_duration, $_rating, $_genre,  $_direction) {
        $this->title = $_title;
        $this->language = $_language;
        $this->country = $_country;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->rating = $_rating;
        $this->genre = $_genre;
        $this->direction = $_direction;
    }
    //methods
    public function averageMovie($rating) {
        $round_rating = round($rating);
        return $round_rating;       
    }
}
