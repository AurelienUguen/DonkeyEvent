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
}
