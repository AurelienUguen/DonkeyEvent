<?php

class Event
{
    protected int $eventId;
    protected string $title;
    protected string $director;
    protected string $casting;
    protected int $year_release;
    protected string $summary;
    protected string $genre;
    protected string $runtime;
    protected string $poster;
    protected float $price;
    protected string $category;
    
    public function __construct($eventId, $title, $director, $casting, $year_release, $summary, $genre, $runtime, $poster, $price, $category)
    {
        $this->eventId = $eventId;
        $this->title = $title;
        $this->director = $director;
        $this->casting = $casting;
        $this->year_release = intval($year_release);
        $this->summary = $summary;
        $this->genre = $genre;
        $this->runtime = $runtime;
        $this->poster = $poster;
        $this->price = $price;
        $this->category = $category;
    }

    public function setEventId($eventId): void
    {
        $this->eventId = $eventId;
    }

    public function getEventId(): int
    {
        return $this->eventId;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setCategory($category): void
    {
        $this->title = $category;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
    
     public function setDirector($director): void
    {
        $this->title = $director;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

     public function setCasting($casting): void
    {
        $this->title = $casting;
    }

    public function getCasting(): string
    {
        return $this->casting;
    }

     public function setYearRelease($year_release): void
    {
        $this->title = $year_release;
    }

    public function getYearRelease(): int
    {
        return $this->year_release;
    }

     public function setRuntime($runtime): void
    {
        $this->title = $runtime;
    }

    public function getRuntime(): string
    {
        return $this->runtime;
    }

     public function setGenre($genre): void
    {
        $this->title = $genre;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

     public function setSummary($summary): void
    {
        $this->title = $summary;
    }

    public function getSummary(): string
    {
        return $this->summary;
    }

    public function setPoster($poster): void
    {
        $this->title = $poster;
    }

    public function getPoster(): string
    {
        return $this->poster;
    }
    
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getPrice(): string
    {
        return $this->price;
    }
}
?>