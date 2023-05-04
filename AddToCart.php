<?php

require_once 'autoload.php';

$pdo = PDOInstance::getInstance();
// die(var_dump($_SESSION));
$userId = $_SESSION['id'];

$showdate = $_POST['orderDate'];
$showtime = $_POST['showtime'];

$showId = intval($_GET['id']);
$event = getEventsById($showId);
$seance = getSeanceById($showId);

$salle = $seance->getSalle();
$capacity = $seance->getCapacity();

$show_id = $seance->getShowId();
$seance_id = $seance->getSeanceId();

// var_dump($event);
// var_dump($seance);

$sql =<<<SQL
        INSERT INTO cart (user_id, show_id, seance_id, quantity, showdate, showtime, left_capacity, full_capacity)
        VALUES ($userId, $show_id, $seance_id, 1, '$showdate', '$showtime', null, '$capacity')
SQL;

$sth = $pdo->prepare($sql);
$sth->execute();


$sql =<<<SQL
        SELECT quantity FROM cart
        WHERE seance_id = 'seance_id'
SQL;
$stm = $pdo->query($sql);
$qty = $stm->fetch(PDO::FETCH_ASSOC);
$leftCapacity = $capacity - $qty;

$sql =<<<SQL
        UPDATE cart SET left_capacity = '$leftCapacity'
SQL;

header('location: cart.php');
?>