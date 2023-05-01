<?php

require_once 'autoload.php';
require_once 'templates/header.php';

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


?>

    <section>
        <h1 class="title">Panier de <?php echo $_SESSION['name']; ?></h1>
        <table class="table table-striped table-responsive container tablecart">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="align-items-center">
                <?php foreach($cartInfo as $info) {?>
                <tr>
                    <td class="align-middle"><img src="<?php echo $info['poster']; ?>" alt="Affiche du film <?php echo $info['event']?>" width="100px"></td>
                    <td class="text-light align-middle"><?php echo $info['event']; ?></td>
                    <td class="text-light align-middle"><?php echo $info['price']; ?> €</td>
                    <td class="text-light align-middle">
                        <select name="quantity" id="quantity">
                            <option value="">Choississez le nombre de place</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="250">250</option>
                            <option value="400">400</option>
                        </select>
                    </td>
                    <td class="text-light align-middle"><a href="func/DeletedFromCart.php?id=<?php echo $info['id']; ?>"><img src="ressources/DonkeyEvent_TrashIcon.png" width="40px" class="trash"></a></td>
                </tr>
                <?php } ?>
            </tbody>

            <tr class="total">
                <td class="text-light align-middle">Total :</td>
                <td></td>
                <td></td>
                <td></td>
                <th class="text-light">12 €</th>
            </tr>
        </table>
    </section>
    
<?php

require_once 'templates/footer.php';

?>