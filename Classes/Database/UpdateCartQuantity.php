<?php

require_once '../DonkeyEvent/autoload.php';

class UpdateCartQuantity {

    public static function updateQuantity()
    {
        $userId = $_SESSION['id'];
        $pdo = PDOInstance::getInstance();

        foreach($_POST['quantity'] as $id => $quantity) {

            if ($quantity > 0) {
                $updateQuery = <<<SQL
                UPDATE cart
                SET quantity = $quantity
                WHERE id = $id
SQL;
        $update = $pdo->prepare($updateQuery);
        $update->execute();
            }       
        } 
    }

    public static function updateLeftCapacityByShow(int $showId)
    {
        $pdo = PDOInstance::getInstance();

        $seance = getSeanceById($showId);
        $seanceId = $seance->getSeanceId();
        $showtime = $seance->getSeanceId();
        $capacity = $seance->getCapacity();
        // die(var_dump($seance));
        $sql =<<<SQL
                SELECT quantity FROM cart
                WHERE seance_id = '$seanceId'
SQL;
        $stm = $pdo->query($sql);
        $qty = $stm->fetchAll(PDO::FETCH_ASSOC);
        // die(var_dump($qty));
        $leftCapacity = $capacity - $qty[0]['quantity'];

        $sql =<<<SQL
                UPDATE cart SET left_capacity = '$leftCapacity'
SQL;
        $update = $pdo->prepare($sql);
        $update->execute();
    }

    public static function updateLeftCapacityByShowtime(int $cartId)
    {
        $pdo = PDOInstance::getInstance();

        // $seance = getSeanceById($showId);
        // $seanceId = $seance->getSeanceId();
        // $showtime = $seance->getSeanceId();
        // $capacity = $seance->getCapacity();

        // die(var_dump($seance));
        $sql =<<<SQL
                SELECT quantity, left_capacity FROM cart
                WHERE `id` = '$cartId'
SQL;
        $stm = $pdo->query($sql);
        $qty = $stm->fetchAll(PDO::FETCH_ASSOC);
        die(var_dump($qty));
/*         $capacity = 
        $leftCapacity = $capacity - $qty[0]['quantity'];

        $sql =<<<SQL
                UPDATE cart SET left_capacity = '$leftCapacity'
SQL;
        $update = $pdo->prepare($sql);
        $update->execute(); */
    }
}
