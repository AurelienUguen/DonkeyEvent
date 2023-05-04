<?php
// session_start();
//inclure la page de connexion

include_once "connexion_dbb.php";


require_once 'templates/header.php';
require_once 'autoload.php';

$pdo = PDOInstance::getInstance();

$movies = DatabaseTools::selectMovie($pdo, "`show`", "seance");
 

?>

    <a href="panier.php "class="link">Panier <span><?= array_sum($_SESSION['panier'])?></span></a>
    <section class="articles_list">
        <?php
       //afficher la liste des produits dans le panier
        
 ?>
           <?php foreach ($movies as $movie){ ?>  
        
        <form action=""class="articles">
            <div class="image_articles">
                <img src="<?= $movie["poster"]?>">


            </div>
            <div class="content">
                <h4 class="name"><?=$movie['title']?></h4>
                <h2 class="price"><?=$movie["price"]?>€</h2>
                <a href="ajouter_panier.php?id=<?=$movie['id']?>" class="id_articles">Ajouter au panier</a>
            </div>
        </form>
        <?php }?>
  
    </section>

    
</body>
</html><?php


require_once 'templates/footer.php';




?>