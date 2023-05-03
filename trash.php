<?php

<h5><?= $show->getYearRelease(); ?> - <?= $show->getRuntime(); ?></h5>
                        <p>Séances le <?= $seances[$key]->getDate() ?> à :
                                      <?= substr($seances[$key]->getShowtime1(),0,5); ?> -
                                      <?= substr($seances[$key]->getShowtime2(),0,5); ?> -
                                      <?= substr($seances[$key]->getShowtime3(),0,5); ?> -
                                      <?= substr($seances[$key]->getShowtime4(),0,5); ?>
                        </p>

/* 
$dateToday = new DateTimeImmutable("now");
var_dump($dateToday) . "<br>";
$dateEnd = new DateTimeImmutable("2023-05-01 23:59:59");
var_dump($dateEnd) . "<br>";
var_dump(date_diff($dateToday, $dateEnd)) . "<br>";


if (date_diff($dateToday, $dateEnd)->invert === 1) {
  echo "invert";
} else { echo "nope";}




$dateToday = new DateTimeImmutable("now");
$today = date_format($dateToday, "Y-m-d");
 echo $today;

$date_start = "2023-04-26";
$dateEnd = new DateTimeImmutable("2023-05-02");

$dateToday = date_create('now');
$today = date_format($dateToday, 'Y-m-d');
$dateEnd = date_create('2023-05-03');

// $dateStart = date("Y-m-d", ($dateEnd . '-6 days'));

var_dump($today);
// var_dump($dateStart) . "<br>";
var_dump($dateEnd) . "<br>";
// echo (strtotime($dateEnd) - strtotime($today)) . "<br>";
echo date_diff($dateToday, $dateEnd) . "<br>";

if (!($today>=$dateStart && $today<=$dateEnd)) {
  echo "Réservations nos disponibles sur cette période.";
} else {
  echo "Réservation possible.";
}

 */