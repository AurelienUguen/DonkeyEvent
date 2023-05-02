<?php
session_star();
include_once('autoload.php');
?>
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paniertop</title>
    <link rel="stylesheet"href="style2.css">
</head>
<body class="panier">
    <a href="index.html" class="link">Boutique</a>
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
            $id =array_keys($_SESSION['panier']);
            //s'il n'il a aucune clé dans le tableau
            if (empty($ids)){
                echo"Votre panier est vide";
            }else {
                // si oui
                $articles = mysqli_query($connectionpage,"SELECT*FROM articles WHERE is int(".implode(',',$ids).")");
            
                  //liste des articles avec une boucle foreach
                  foreach($articles as $articles):
                    //calculer le total  prix unitaire * quantité 
                    // et aditionner chaque resultats a chaque tour de boucle 
                    total = $total + $articles['price'] * $_SESSION ['panier'][$articles['id']] ;
            ?>
            <tr>
                <td><img src = "<?=$articles['img']?>"></td>
                    <td><?=$articles['name']?></td>
                    <td><?=$articles['price']?>€</td>
                    <td><?=$_SESSION['panier'][$articles['id']] //quantité?></td>
                    <td><a href="panier.php?del=<?=$articles['id']?>"><img src="trash-can-regular.svg" ></a></td>
            </tr>
            <?php endforeach ;}  ?>
           
            <tr class="total">
            <th >total : <?=$total?>€</th>
        </tr>

        </table>
    </section>
    
</body>
</html>