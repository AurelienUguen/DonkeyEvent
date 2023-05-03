<?php

class Date
{
    protected $dateToday;
    protected $today;
    protected $dateToCheck;
    
    public function __construct()
    {
        $this->dateToday = new \DateTimeImmutable("now", new \DateTimeZone('Europe/Paris'));
        $this->today = date_format($this->dateToday, "Y-m-d");
        $this->dateToCheck = date('D', strtotime($this->today));
        
    }

    public function getLastWednesday()
    {
        switch ($this->dateToCheck) {
          case "Mon":
            $lastDate = date("Y-m-d", strtotime($this->today . '1 days'));
            $day = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
            break;
          case "Tue":
            $lastDate = date("Y-m-d", strtotime($this->today));
            $day = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
            break;
          case "Wed":
            $lastDate = date("Y-m-d", strtotime($this->today . '6 days'));
            $day = new \DateTimeImmutable($lastDate . "23:59:59", new \DateTimeZone('Europe/Paris'));
            break;
          case "Thu":
            $lastDate = date("Y-m-d", strtotime($this->today . '5 days'));
            $day = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
            break;
          case "Fri":
            $lastDate = date("Y-m-d", strtotime($this->today . '4 days'));
            $day = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
            break;
          case "Sat":
            $lastDate = date("Y-m-d", strtotime($this->today . '3 days'));
            $day = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
            break;
          case "Sun":
            $lastDate = date("Y-m-d", strtotime($this->today . '2 days'));
            $day = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
            break;
          default:
            echo "Jour invalide.";
            break;
        }
          return date_format($day, "Y-m-d");
    }

    public function getToday()
    {
        return $this->today;
    }
 
    
}