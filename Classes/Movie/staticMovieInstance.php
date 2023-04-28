<?php

require_once('Classes/Movie/Movie.php');

class MovieInstance
{
    private $movieInstance = null;
    private static $instance = null;

    public function __construct($movieId, $title, $director, $casting, $year_release, $summary, $genre, $runtime, $poster, $category)
    {
        $this->movieInstance = new Movie($movieId, $title, $director, $casting, $year_release, $summary, $genre, $runtime, $poster, $category);
    }


    public static function movieInstance($movieId, $title, $director, $casting, $year_release, $summary, $genre, $runtime, $poster, $category): MovieInstance
    {
        if(is_null(self::$instance)) {
            self::$instance = new MovieInstance($movieId, $title, $director, $casting, $year_release, $summary, $genre, $runtime, $poster, $category);
        }
        return self::$instance;
    }



}