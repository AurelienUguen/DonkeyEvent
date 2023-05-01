<?php

require_once 'Classes/Database/FetchEvent.php';
require_once 'Classes/Seance/Seance.php';

function getSeanceByCat($where)
{

$showsArray = [];
$showsArray[] = FetchEvent::selectEventByCat($where);
foreach ($showsArray as $key => $row) {
    foreach ($row as $event) {
      $mySeance = new Seance($event['seanceId'], $event['show_id'], $event['salle'], $event['date'], $event['showtime_1'], $event['showtime_2'], $event['showtime_3'], $event['showtime_4'], $event['capacity'], $event['bought_ticket']);
      $seanceArray [] = $mySeance;
    }
}
  
return $seanceArray;
}