<?php

require_once 'autoload.php';

$pdo = PDOInstance::getInstance();

$select =<<<SQL
            SELECT c.* FROM cart c
SQL;

$sth = $pdo->prepare($select);
$sth->execute();
$findById = $sth->fetch(PDO::FETCH_ASSOC);
// die(var_dump($findById));

$id = $findById['id'];
/* 
$seanceId = $findById['seance_id'];
$showtime = $findById['showtime'];
$showdate = $findById['showdate'];

$sql=<<<SQL
        SELECT `id`, seance_id, quantity, showdate, showtime, left_capacity FROM cart
        WHERE `id` = $id
SQL;
$stm = $pdo->query($sql);
$qtyToAdd = $stm->fetchAll(PDO::FETCH_ASSOC);
 */


$sql =<<<SQL
        DELETE FROM cart
        WHERE id = $id
SQL;

$delsth = $pdo->prepare($sql);
$delsth->execute();




header('location: cart.php');

?>