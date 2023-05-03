<?php
// session_start();
//inclure la page de connexion

include_once "connexion_dbb.php";
// require_once 'templates/footer.php';
require_once 'autoload.php';
require_once 'templates/header.php';

$pdo = PDOInstance::getInstance();

$movies = DatabaseTools::selectMovie($pdo, "`show`", "seance");

?>

    <a href="panier.html"class="link">Panier <span><8></span></a>
    <section class="articles_list">
        <?php
        //inclure la page de connexion
        
       
       
        //afficher la liste des produits
        
 ?>
           <?php foreach ($movies as $movie){ ?>  
        
        <form action=""class="articles">
            <div class="image_articles">
                <img src="<?= $movie["poster"]?>">


            </div>
            <div class="content">
                <h4 class="name"><?=$movie['name']?></h4>
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