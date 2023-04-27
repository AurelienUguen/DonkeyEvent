<?php

require_once('autoload.php');

$pdo = PDOInstance::getInstance();

$table = "`show`";
$shows = DatabaseTools::selectShow($pdo, "`show`", "seance");

/* $seanceTable = "seance";
$seances = DatabaseTools::selectSeance($pdo, $seanceTable);
$seanceSpec = [];
foreach ($seances as $key1 => $seanceArray) {
     foreach ($seanceArray as $key2 => $value) {
        $seanceSpec[$key2] = $value;
     }
}
 */
require_once 'templates/header.php';

?>

        <section>
            <h1 class="display-4 title">Quel spectacle souhaitez-vous voir ?</h1>
            <!-- Boucle foreach pour dupliquer la div ci-dessous pour chaque film -->
            <div class="container container-fluid masterbox">
                <img src="https://i.etsystatic.com/10803850/r/il/1a1a3d/1535276183/il_570xN.1535276183_7pyf.jpg" class="img-fluid" alt="" width="200px">
                <div class="container container-fluid mastertextbox">
                    <div class="infotextbox">
                        <h2>GoGo Penguin en concert</h2>
                        <p>GoGo Penguin est un groupe de jazz originaire de Manchester au Royaume-Uni. Il est composé du pianiste Chris Illingworth, du bassiste Nick Blacka et du batteur Jon Scott. Ils composent, partagent leurs idées et jouent avec synergie pour créer un son unique.</p>
                    </div>
                    <div class=" container container-fluid linkinfobox">
                        <a href="show.php">Voir plus</a>
                        <a href="booking.php">Réserver</a>
                    </div>
                </div>      
            </div>
            <?php foreach ($shows as $show){ ?>
                <div class="container container-fluid masterbox">
                    <img src="<?= $show["poster"]; ?>" class="img-fluid" alt="" width="200px">
                    <div class="container container-fluid mastertextbox">
                        <div class="infotextbox">
                            <h2><?= $show["title"]; ?></h2>
                                <p style="font-size: 1.1rem;">Concert le : <?= $show["date"]; ?> à <?= substr($show["showtime_1"],0,5); ?></p>
                                <p>Places restantes : <?= $show["capacity"]; ?></p>
                                <p><?= $show["summary"]; ?></p>
                        </div>
                        <div class=" container container-fluid linkinfobox">
                            <a href="#">Voir plus</a>
                            <a href="#">Réserver</a>
                        </div>
                    </div>      
                </div>
            <?php   } ?>


        </section>

<?php

require_once 'templates/footer.php';

?>
