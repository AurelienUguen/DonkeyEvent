<?php

require_once 'autoload.php';

$pdo = PDOInstance::getInstance();

$userId = $_SESSION['id'];


$showId = intval($_GET['id']);
$event = getEventsById($showId);
$seance = getSeanceById($showId);

$show_id = $seance->getShowId();
$seance_id = $seance->getSeanceId();

var_dump($event);
var_dump($seance);

$sql =<<<SQL
        INSERT INTO cart (user_id, show_id, seance_id, quantity)
        VALUES ($userId, $show_id, $seance_id, 1)
SQL;

$sth = $pdo->prepare($sql);
$sth->execute();

header('location: cart.php');


?>