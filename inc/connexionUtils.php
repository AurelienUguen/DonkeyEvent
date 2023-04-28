<?php

require_once './config/dbConfig.php';

$pdo = new PDO(DSN, USER, PASS);

$sql =<<<SQL
    SELECT u.*
    FROM user u
SQL;

$sth = $pdo->prepare($sql);
$sth->execute();
$users = $sth->fetchAll(PDO::FETCH_ASSOC);


/* Fonction de connexion */

    if(isset($_POST['name']) && isset($_POST['password'])) {
        foreach($users as $user) {
            if($user['name'] === $_POST['name'] && $user['password'] === $_POST['password']) {
                $loggedUser = [
                    'id' => $user['id'],
                    'name' => $user['name']
                ];
                $_SESSION = $loggedUser;
                header("location: ./../index.php");
            }
        }
    }

?>