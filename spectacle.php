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