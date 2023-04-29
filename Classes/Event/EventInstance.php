<?php

require_once('Classes/Event/Event.php');

class EventInstance
{
    private $eventInstance = null;
    private static $instance = null;

    public function __construct($movieId, $title, $category, $director, $casting, $year_release, $runtime, $genre, $summary, $poster)
    {
        $this->eventInstance = new Event($movieId, $title, $category, $director, $casting, $year_release, $runtime, $genre, $summary, $poster);
    }

    public static function eventInstance($movieId, $title, $category, $director, $casting, $year_release, $runtime, $genre, $summary, $poster): EventInstance
    {
        if(is_null(self::$instance)) {
            self::$instance = new EventInstance($movieId, $title, $category, $director, $casting, $year_release, $runtime, $genre, $summary, $poster);
        }
        return self::$instance;
    }
}