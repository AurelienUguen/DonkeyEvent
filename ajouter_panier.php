<?php
//inclure la page de connexion
include_once ;
//verifier si une connexion existe
if(!isset($_SESSION)){
    // si non demarer la session
    session_start();
    }
    //creer la session
    if(!isset($_SESSION)){
        //si non demarer la session
        session_start();
    }
    //creer la session
    if(!isset($_SESSION['panier'])){
        //s'il n'exiiste pas de session on creer une
        $_SESSION['panier']=array();
    }


// recuperation de l'id dans le lien
if(isset($_GET['id'])){//si un id a ete envoye alors :
    $id = $_GET ['id'];
    //verifier grace a l' id si le produit existe dans la base de donnée
    $produit = mysqli_query($con,"SELECT* FROM articles WHERE id = $id");
    if(empty(mysqli_fetch_assoc($produit)))
    // si ce produit n'existe pas
    die("ce produit n'existe pas ");

}
//ajouter le produit dans le panier ( le tableau )

if (isset($_SESSION['panier'][$id])) {//si le produuit est deja dans le panier
    $_SESSION['panier'][$id]++;//represente la quantité
}else {
    //si non on ajoute le produit
    $_SESSION['panier'][$id]=1;
    echo"le produit a bien ete mis dans le panier !"
    //afficher le associé au panier
    var_dump($_SESSION['panier']); 
}