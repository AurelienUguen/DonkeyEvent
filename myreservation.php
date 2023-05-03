<?php


require_once 'templates/header.php';

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