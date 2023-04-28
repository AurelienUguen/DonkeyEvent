<?php

require_once('Classes/Movie/Movie.php');

class MovieInstance
{
    private $movieInstance = null;
    private static $instance = null;

    public function __construct($movieId, $title, $category, $director, $casting, $year_release, $runtime, $genre, $summary, $poster)
    {
        $this->movieInstance = new Movie($movieId, $title, $category, $director, $casting, $year_release, $runtime, $genre, $summary, $poster);
    }


    public static function movieInstance($movieId, $title, $category, $director, $casting, $year_release, $runtime, $genre, $summary, $poster): MovieInstance
    {
        if(is_null(self::$instance)) {
            self::$instance = new MovieInstance($movieId, $title, $category, $director, $casting, $year_release, $runtime, $genre, $summary, $poster);
        }
        return self::$instance;
    }



}