<?php

require_once 'Classes/Database/FetchEvent.php';

function getItems ($where)
{

$showsArray = [];
$showsArray[] = FetchEvent::selectEvent($where);

foreach ($showsArray as $key => $row) {
    foreach ($row as $event) {
      $myEvent = new Event($event['id'], $event['title'], $event['director'], $event['casting'], $event['year_release'], $event['summary'], $event['genre'], $event['runtime'], $event['poster'], $event['category']);
      $eventArray [] = $myEvent;
    }
  }
  
  return $eventArray;
}