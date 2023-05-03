<?php

require_once 'templates/header.php';

$userId = $_SESSION['id'];
$pdo = PDOInstance::getInstance();

if($_POST) {

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


$cartInfo = [];
$cartInfo = SelectCartInfo::selectCartInfo();


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
                        <th class="text-light align-middle">Total :
                            <?php if($_POST) {
                                calculateTotal();
                                } else {
                                echo "0";
                                }
                            ?> €</th>
                        <td><input type="submit" value="Actualiser" class="btn btn-primary"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </section>
    
<?php

require_once 'templates/footer.php';

?>