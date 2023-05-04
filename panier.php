<?php
// session_start();
// include_once "connection_dbb.php";
require_once 'Classes/Database/FetchEvent.php';
require_once 'Classes/Event/Event.php';
require_once 'autoload.php';

if(isset($_GET['del'])){
    $id_del = $_GET['del'];
    // supression
    unset($_SESSION['panier'][$id_del]);
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paniertop</title>
    <link rel="stylesheet"href="style2.css">
</head>
<body class="panier">
    <a href="boutique.php" class="link">Boutique</a>
    <section>
        <table>
            <tr> 
                <th></th>
                <th>Nom</th> 
                <th>Prix</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            <?php 
           
            // liste des produits
            // recuperer les cles du tableau session
            $ids =array_keys($_SESSION['panier']);
            
            //s'il n'il a aucune clé dans le tableau
            if (empty($ids)){
                echo"Votre panier est vide";
            }else {
                // si oui
                foreach ($ids as $key=>$id) {
                    $articles[] = getEventsById($id);
                }
           }
        //    var_dump($articles);
        //    die();

            
                  //liste des articles avec une boucle foreach
                  $total = 0;
              foreach ( $articles as $key=>$article ) {
                // die(var_dump($article));
                    //calculer le total  prix unitaire * quantité 
                    // et aditionner chaque resultats a chaque tour de boucle 
                    $total = $total + ($article->getPrice() * $_SESSION ['panier'][$article->getEventId()]);
                    // $total));
                    ?> 
            <tr>
                <td><img src="<?php echo $article->getPoster();?>"></td>
                    <td><?=$article->getTitle();?></td>
                    <td><?=$article->getPrice();?>€</td>
                    <td><?=($_SESSION['panier'][$article->getEventId()]) ;//quantité?></td>
                    <td><a href="panier.php?del=<?=$article->getEventId();?>"><img src="trash-can-regular.svg" ></a></td>
            </tr>
            
            <?php } ?>
           
            <tr class="total">
            <th >total : <?=$total;?>€</th>
        </tr>

        </table>
    </section>
    
</body>
</html>