
<?php
// inclure la page de connexion
include_once "connexion_dbb.php";
// require_once 'templates/footer.php';
require_once 'autoload.php';
require_once 'templates/header.php';

// vérifier si une session existe
if (!isset($_SESSION)) {
    // si non, démarrer la session
    session_start();
}

// créer la session si elle n'existe pas
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

// récupération de l'id dans le lien
if (isset($_GET['id'])) {
    // si un id a été envoyé
    $id = intval($_GET['id']);
    echo $id ;
    // vérifier grâce à l'id si le produit existe dans la base de données
    // $result = mysqli_query($connection, "SELECT * FROM show WHERE id = $id");
    $result = getEventsById($id);
//     if (!$result || mysqli_num_rows($result) == 0) {
//         // si le produit n'existe pas
//         die("Ce produit n'existe pas.");
//     }
// }
}
// ajouter le produit dans le panier (le tableau)
if (isset($_SESSION['panier'][$id])) {
    // si le produit est déjà dans le panier
    $_SESSION['panier'][$id]++;
} else {
    // si non, on ajoute le produit
    $_SESSION['panier'][$id] = 1;
    // echo "Le produit a bien été ajouté au panier !";
    // afficher l'association associée au panier
    // var_dump($_SESSION['panier']);
    //redirection vers la page boutique.php

}
header("Location:boutique.php");

?>