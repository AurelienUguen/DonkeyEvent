<?php

require_once 'Classes/Pdo/PDOInstance.php';

    function selectCartInfo() 
    {

        $userId = $_SESSION['id'];
        $pdo = PDOInstance::getInstance();
        
        $sql =<<<SQL
        SELECT c.id, u.name as username, s.name as event, s.price as price, s.poster as poster
                FROM cart c
                INNER JOIN user u ON u.id = c.user_id
                INNER JOIN `show` s ON s.id = c.show_id
                WHERE (u.id = $userId)
SQL;
        
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $cartInfo = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
?>