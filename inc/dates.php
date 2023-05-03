<?php

$dateToday = new DateTimeImmutable("now", new DateTimeZone('Europe/Paris'));
$today = date_format($dateToday, "Y-m-d");

// $dateEnd = new DateTimeImmutable("2023-05-02 23:59:59", new DateTimeZone('Europe/Paris'));
// $lastDay = date_format($dateEnd, "Y-m-d");

// var_dump(date_diff($dateToday, $dateEnd));


$checkDate = date('D', strtotime($today));

$lastDay = date_format(new DateTimeImmutable($today), "Y-m-d");
echo "Today : $today <br>";

switch ($checkDate) {
  case "Mon":
    $lastDate = date("Y-m-d", strtotime($today . '1 days'));
    $lastDay = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
    break;
  case "Tue":
    $lastDate = date("Y-m-d", strtotime($today));
    $lastDay = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
    break;
  case "Wed":
    $lastDate = date("Y-m-d", strtotime($today . '6 days'));
    $lastDay = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
    break;
  case "Thu":
    $lastDate = date("Y-m-d", strtotime($today . '5 days'));
    $lastDay = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
    break;
  case "Fri":
    $lastDate = date("Y-m-d", strtotime($today . '4 days'));
    $lastDay = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
    break;
  case "Sat":
    $lastDate = date("Y-m-d", strtotime($today . '3 days'));
    $lastDay = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
    break;
  case "Sun":
    $lastDate = date("Y-m-d", strtotime($today . '2 days'));
    $lastDay = new DateTimeImmutable($lastDate . "23:59:59", new DateTimeZone('Europe/Paris'));
    break;
  default:
    echo "Jour invalide.";
    break;
}
echo date("Y-m-d", strtotime($today)) ."<br>";
echo "Last day : " . date_format($lastDay, 'Y-m-d');