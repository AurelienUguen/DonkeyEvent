<?php

require_once 'autoload.php';

$pdo = PDOInstance::getInstance();

        $pdo->query("SET foreign_key_checks = 0");

        $emptyCart = "DELETE FROM cart c WHERE c.user_id = " . $_SESSION['user_id'];
        
        $pdo->query("SET foreign_key_checks = 1");

        $emptySth = $pdo->prepare($emptyCart);
        $emptySth->execute();
        
        header('location: myreservation.php');


?>