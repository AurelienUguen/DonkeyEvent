<?php
require_once 'Classes/Movie/MovieInstance.php';
require_once 'Classes/Database/FetchMovie.php';

function getItems ()
{

$showsArray = [];
$showsArray[] = FetchMovie::selectMovie();
// die(var_dump($showsArray));

foreach ($showsArray as $key1 => $row) {
    foreach ($row as $movie) {
      $myMovie = new Movie($movie['id'], $movie['title'], $movie['director'], $movie['casting'], $movie['year_release'], $movie['summary'], $movie['genre'], $movie['runtime'], $movie['poster'], $movie['category']);
      // die(var_dump($myMovie));
      $movieArray [] = $myMovie;
    }
  }


return $movieArray;
}