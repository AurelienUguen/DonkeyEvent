<?php

require_once 'autoload.php';
require_once 'templates/header.php';

$userId = $_SESSION['id'];
$pdo = PDOInstance::getInstance();

if($_POST) {

    $totalPrice = calculateTotal();
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

$sql =<<<SQL
SELECT c.id, c.quantity as quantity, c.show_id, u.name as username, s.name as event, s.category as category, s.price as price, s.poster as poster, s2.capacity as capacity
        FROM cart c
        INNER JOIN user u ON u.id = c.user_id
        INNER JOIN seance s2 ON s2.id = c.seance_id
        INNER JOIN `show` s ON s.id = c.show_id
        WHERE (u.id = $userId)
SQL;

$sth = $pdo->prepare($sql);
$sth->execute();
$cartInfo = $sth->fetchAll(PDO::FETCH_ASSOC);

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
}

?>

    <section>
        <h1 class="title">Panier de <?php echo $_SESSION['name']; ?></h1>
        <form method="POST">
            <table class="table table-striped table-responsive container tablecart">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Evènement</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                
                <tbody class="align-items-center">
                    <?php foreach($cartInfo as $info) {?>
                    <tr>
                        <td class="align-middle"><img src="<?php echo $info['poster']; ?>" alt="Affiche du film <?php echo $info['event']?>" width="100px"></td>
                        <td class="text-light align-middle"><?php echo $info['event']; ?></td>
                        <td class="text-light align-middle">
                            <input type="number" name="quantity[<?php echo $info['id']; ?>]" for="quantity" id="quantity" value="<?php echo $info['quantity']; ?>" max="<?php echo $info['capacity']?>" required>
                        </td>
                        <td class="text-light align-middle"><?php echo $info['price'];?> €</td>
                        <td class="text-light align-middle"><?php echo $info['category'];?></td>
                        <td class="text-light align-middle"><a href="DeletedFromCart.php?id=<?php echo $info['id']; ?>"><img src="ressources/DonkeyEvent_TrashIcon.png" width="40px" class="action"></a></td>
                    </tr>
                    <?php } ?>
                    <tr class="total">
                        <td></td>
                        <td></td>
                        <td></td>
                        <th class="text-light align-middle">Total : <?php if(!empty($_POST)) { echo $_SESSION['total']; } else { echo "0"; } ?> €</th>
                        <td><input type="submit" value="Actualiser" class="btn btn-primary"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </section>
    
<?php

require_once 'templates/footer.php';

?>