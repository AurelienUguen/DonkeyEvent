<?php

class Seance
{
    private int $seanceId;
    private int $showId;
    private $salle;    
    private string $date;    
    private $showtime_1;    
    private $showtime_2;    
    private $showtime_3;    
    private $showtime_4;    
    private int $capacity;    
    private int $bought_ticket;

    public function __construct($seanceId, $showId, $salle, $date, $showtime_1, $showtime_2, $showtime_3, $showtime_4, $capacity, $bought_ticket)
    {
        $this->seanceId = intval($seanceId);
        $this->showId = intval($showId);
        $this->salle = $salle;
        $tmpDate = explode("-", $date);
        $this->date = $tmpDate[2] . '/' . $tmpDate[1] . '/' . $tmpDate[0];
        $this->showtime_1 = $showtime_1;
        $this->showtime_2 = $showtime_2;
        $this->showtime_3 = $showtime_3;
        $this->showtime_4 = $showtime_4;
        $this->capacity = intval($capacity);
        $this->bought_ticket = intval($bought_ticket);
    }

    public function getSeanceId (): int
    {
        return $this->seanceId;
    }
    
    public function getShowId (): int
    {
        return $this->showId;
    }
    public function getSalle (): string
    {
        return $this->salle;
    }
    public function getDate (): string
    {
        return $this->date;
    }
    public function getShowtime1 (): string
    {
        return $this->showtime_1;
    }
    public function getShowtime2 (): string
    {
        return $this->showtime_2;
    }
    public function getShowtime3 (): string
    {
        return $this->showtime_3;
    }
    public function getShowtime4 (): string
    {
        return $this->showtime_4;
    }
    public function getCapacity (): int
    {
        return $this->capacity;
    }
    public function getBoughtTicket (): int
    {
        return $this->bought_ticket;
    }

}