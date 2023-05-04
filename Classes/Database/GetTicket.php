<?php

class GetTicket {

    public static function getTicket()
    {
        $pdo = PDOInstance::getInstance();

        $sql = "SELECT * FROM ticket
                WHERE user_id = " . $_SESSION['user_id'];

        $sth = $pdo->prepare($sql);
        $sth->execute();

        return $ticket = $sth->fetchAll(PDO::FETCH_ASSOC);
        }
}