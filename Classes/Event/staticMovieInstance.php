<?php

require_once('Classes/Movie/Movie.php');

class EventInstance
{
    private $eventInstance = null;
    private static $instance = null;

    public function __construct($movieId, $title, $director, $casting, $year_release, $summary, $genre, $runtime, $poster, $category)
    {
        $this->eventInstance = new Event($movieId, $title, $director, $casting, $year_release, $summary, $genre, $runtime, $poster, $category);
    }


    public static function eventInstance($movieId, $title, $director, $casting, $year_release, $summary, $genre, $runtime, $poster, $category): EventInstance
    {
        if(is_null(self::$instance)) {
            self::$instance = new EventInstance($movieId, $title, $director, $casting, $year_release, $summary, $genre, $runtime, $poster, $category);
        }
        return self::$instance;
    }
}