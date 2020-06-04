<?php
include __DIR__ . '/movie.php';

// OBJECT

// movie 1
$movie1 = new Movie( 'The Hangover', 'english', 'USA', '2009', '99 min', 4.5, 'comedy', 'Todd Phillips' );
// movie 2 
$movie2= new Movie ( 'The Hangover Part II', 'english', 'USA', '2011', '101 min', 3.7, 'comedy', 'Todd Phillips' );
// movie 3
$movie3 = new Movie ( 'The Hangover Part III', 'english', 'USA', '2013', '100 min', 5.2, 'comedy', 'Todd Phillips' );
//var_dump($movie1);
//var_dump($movie2);
//var_dump($movie3);
//echo "rating: {$movie1->averageMovie(4.5)}";