<?php

function calculateTotal() {

    $pdo = PDOInstance::getInstance();
    
    $multiplyPrice = [];
    $total = 0;
    
    foreach($_POST['quantity'] as $id => $quantity) {
        if ($quantity > 0) {
            $query = <<<SQL
            SELECT * FROM `cart` WHERE id = $id
SQL;

            $cart = $pdo->prepare($query);
            $cart->execute();
            $allCartInfo = $cart->fetch(PDO::FETCH_ASSOC);

            $query = "SELECT * FROM `show` WHERE id = " . $allCartInfo["show_id"];

            $info = $pdo->prepare($query);
            $info->execute();
            $priceInfo = $info->fetch(PDO::FETCH_ASSOC);

            $priceByEvent = $priceInfo['price'];

            $price = intval($priceByEvent) * intval($quantity);
            $total += $price;
            array_push($multiplyPrice, $price);
        }
    }
    $_SESSION['total'] = $total;
    echo $_SESSION['total'];
    
}

?>