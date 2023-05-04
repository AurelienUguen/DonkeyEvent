<?php

require_once 'templates/header.php';

if($_POST) {
    UpdateCartQuantity::updateQuantity();
}

$cartInfo = [];
$cartInfo = SelectCartInfo::selectCartInfo();
/* 
if (!empty($_POST)) {
    $cartId = $cartInfo[0]['id'];
    $showId = $cartInfo[0]['show_id'];

    // $showtime = $cartinfo;
    if($_POST) {
        UpdateCartQuantity::updateLeftCapacityByShow($showId);
        if($_POST['quantity'] > 1) {
            UpdateCartQuantity::updateLeftCapacityByShowtime($cartId);
        }
    }
} */
?>

    <section>
        <h1 class="title">Panier de <?php echo $_SESSION['name']; ?></h1>
        <form method="POST">
            <table class="table table-striped table-responsive container tablecart">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Evènement</th>
                        <th scope="col">Séance</th>
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
                        <td class="text-light align-middle"><?php echo $info['showtime']; ?></td>
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
                        <td>
                            <input type="submit" value="Actualiser" class="btn btn-lg btn-primary">
                            <?php if(!empty($info) && $info['quantity'] > 0) { ?>
                                <a href="myreservation.php?id=<?php if($info['quantity'] >= 1) { echo $info['user_id']; } ?>" class="btn btn-lg btn-primary">Valider</a> "
                            <?php } else { ?> 
                                <input type="submit" value="Valider" class="btn btn-lg btn-primary" disabled>
                            <?php } ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </section>
    
<?php

require_once 'templates/footer.php';

?>