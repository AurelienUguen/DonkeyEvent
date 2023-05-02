<?php
//connexion a la base de donnees 
$connection = ('mysql:dbname=donkey_event;host:localhost');
//verifier la connexion
if(!$connection) die ('Erreur');
echo "Connexion reussie ";

require_once 'autoload.php';
?>