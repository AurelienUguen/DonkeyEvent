<?php


require_once 'templates/header.php';

$ticket = [];
$tickets = GetTicket::getTicket();


?>

            <section>
                <h1 class="display-4 title">Réservations de <?php echo $_SESSION['name']; ?></h1>
                <h2 class="display-5 titlebis">À venir</h2>
                <div class="container container-fluid masterboxreservation scroller">
                    <!-- boucle foreach div ci-dessous -->
                    <?php foreach($tickets as $ticket) { ?>
                    <div class="container container-fluid reservation">
                        <div class="reservationtext">
                            <h3 class="display-6"><?php echo $ticket['show_name']; ?> - <?php echo $ticket['category_name']; ?></h3>
                            <p>23/05/2023 à 15:30</p>
                        </div>
                        <div class=" container container-fluid reservationinfobox">
                            <a href="ticket.php?id=<?php echo $ticket['id']; ?>" target="_blank">Télécharger le billet</a>
                            <a href="eventDetails.php?id=<?php echo $ticket['show_id']?>">Voir plus</a>
                        </div>
                    </div>
                    <?php } ?>
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