<?php


require_once 'templates/header.php';

$pdo = PDOInstance::getInstance();

$selectInfoQuery = "SELECT c.id as `order`, u.id as user_id, u.name as username, s.id as show_id,
                s.name as event, s.category as category, s.price as price, s2.id as seance_id, s2.name as room, c.quantity as quantity
                FROM cart c
                INNER JOIN user u ON u.id = c.user_id
                INNER JOIN `show` s ON s.id = c.show_id
                INNER JOIN seance s2 ON s2.id = c.seance_id
                WHERE c.user_id = " . $_SESSION['user_id'];

$selectSth = $pdo->prepare($selectInfoQuery);
$selectSth->execute();
$infos = $selectSth->fetchAll(PDO::FETCH_ASSOC);

var_dump($infos);

foreach($infos as $info) {
    var_dump($info['user_id']);
}

var_dump($_SESSION);


?>

            <section>
                <h1 class="display-4 title">Mes réservations</h1>
                <h2 class="display-5 titlebis">À venir</h2>
                <div class="container container-fluid masterboxreservation scroller">
                    <!-- boucle foreach div ci-dessous -->
                    <div class="container container-fluid reservation">
                        <div class="reservationtext">
                            <h3 class="display-6">Les Banshees d'Inisherin - Cinema</h3>
                            <p>23/05/2023 à 15:30</p>
                        </div>
                        <div class=" container container-fluid reservationinfobox">
                            <a href="#">Télécharger le billet</a>
                            <a href="show.php">Voir plus</a>
                        </div>
                    </div>
                </div>

                <h2 class="display-5 titlebis">Passées</h2>
                <div class="container container-fluid masterboxreservation scroller">
                    <!-- boucle foreach div ci-dessous -->
                    <div class="container container-fluid reservation">
                        <div class="reservationtext">
                            <h3 class="display-6">Les Banshees d'Inisherin - Cinema</h3>
                            <p>23/05/2023 à 15:30</p>
                        </div>
                        <div class=" container container-fluid reservationinfobox">
                            <a href="#">Télécharger le billet</a>
                            <a href="show.php">Voir plus</a>
                        </div>
                    </div>
                </div>        
            </section>

<?php

require_once 'templates/footer.php';

?>