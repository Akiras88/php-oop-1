<?php
include __DIR__ . '/movie-obj.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP</title>
</head>
<body>
    <div class="movie">
        <h1>Title: <?php echo $movie1->title; ?></h1>
        <h3>Original language: <?php echo $movie1->language; ?></h3>
        <h3>Country: <?php echo $movie1->language; ?></h3>
        <h3>Year: <?php echo $movie1->year; ?></h3>
        <h3>Duration: <?php echo $movie1->duration; ?></h3>
        <h3>Rating: <?php echo  $movie1->averageMovie(4.5); ?></h3>
        <h3>Genre: <?php echo $movie1->genre; ?></h3>
        <h3>Film director:  <?php echo $movie1->direction; ?></h3>
    </div>
    <div class="movie">
        <h1>Title: <?php echo $movie2->title; ?></h1>
        <h3>Original language: <?php echo $movie2->language; ?></h3>
        <h3>Country: <?php echo $movie2->language; ?></h3>
        <h3>Year: <?php echo $movie2->year; ?></h3>
        <h3>Duration: <?php echo $movie2->duration; ?></h3>
        <h3>Rating: <?php echo  $movie2->averageMovie(3.7); ?></h3>
        <h3>Genre: <?php echo $movie2->genre; ?></h3>
        <h3>Film director:  <?php echo $movie2->direction; ?></h3>
    </div>
    <div class="movie">
        <h1>Title: <?php echo $movie3->title; ?></h1>
        <h3>Original language: <?php echo $movie3->language; ?></h3>
        <h3>Country: <?php echo $movie3->language; ?></h3>
        <h3>Year: <?php echo $movie3->year; ?></h3>
        <h3>Duration: <?php echo $movie3->duration; ?></h3>
        <h3>Rating: <?php echo  $movie3->averageMovie(5.2); ?></h3>
        <h3>Genre: <?php echo $movie3->genre; ?></h3>
        <h3>Film director:  <?php echo $movie3->direction; ?></h3>
    </div>
</body>
</html>