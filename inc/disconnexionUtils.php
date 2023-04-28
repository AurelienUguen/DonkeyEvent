<?php

session_start();

if(isset($_SESSION['name'])) {
    session_unset();
    header("location: ./../index.php");
} else { 
    echo "Une erreur est survenue lors de la déconnexion";
}


?>