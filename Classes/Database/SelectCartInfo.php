<?php

class SelectCartInfo {

    public static function selectCartInfo()
    {
        $userId = $_SESSION['id'];
        $pdo = PDOInstance::getInstance();

        $sql =<<<SQL
                SELECT c.id, c.quantity as quantity, c.show_id, c.showdate, c.showtime, u.name as username, u.id as user_id, s.name as event, s.category as category, s.price as price, s.poster as poster, s2.capacity as capacity
                FROM cart c
                INNER JOIN user u ON u.id = c.user_id
                INNER JOIN seance s2 ON s2.id = c.seance_id
                INNER JOIN `show` s ON s.id = c.show_id
                WHERE (u.id = $userId)
SQL;

        $sth = $pdo->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);  
    } 
}