<?php

require_once 'autoload.php';

$pdo = PDOInstance::getInstance();
// die(var_dump($_POST));
$userId = $_SESSION['id'];

if(!empty($_POST)){
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
} else {

    $showId = intval($_GET['id']);
    $event = getEventsById($showId);
    $seance = getSeanceById($showId);

    $salle = $seance->getSalle();
    $capacity = $seance->getCapacity();

    $show_id = $seance->getShowId();
    $seance_id = $seance->getSeanceId();

    $sql =<<<SQL
            INSERT INTO cart (user_id, show_id, seance_id, quantity)
            VALUES ($userId, $show_id, $seance_id, 1)
    SQL;

    $sth = $pdo->prepare($sql);
    $sth->execute();

}


header('location: cart.php');
?>