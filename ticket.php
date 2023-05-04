<?php

require_once 'Classes/Pdo/PDOInstance.php';

$pdo = PDOInstance::getInstance();

$sql = " SELECT * FROM ticket
         WHERE id = " . intval($_GET['id']);

$sth = $pdo->prepare($sql);
$sth->execute();
$ticket = $sth->fetchAll(PDO::FETCH_ASSOC);

var_dump($ticket);

?>