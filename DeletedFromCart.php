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

$sql =<<<SQL
        DELETE FROM cart
        WHERE id = $id
SQL;

$delsth = $pdo->prepare($sql);
$delsth->execute();

header('location: cart.php');

?>