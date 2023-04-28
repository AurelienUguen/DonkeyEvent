<?php

require_once('autoload.php');
require_once 'templates/header.php';

$pdo = PDOInstance::getInstance();

$movies = DatabaseTools::selectMovie($pdo, "`show`", "seance");

// $date = new DateTimeImmutable($movies["date"]);
// $date->format("d/m/Y");

/* 
$seanceTable = "seance";
$seances = DatabaseTools::selectSeance($pdo, $seanceTable);
$movie = [];
foreach ($seances as $key1 => $seanceArray) {
     foreach ($seanceArray as $key2 => $value) {
        $movie[$key2] = $value;
     }
}
 */

//var_dump($movies);
/* 
var_dump($seances);
var_dump($movie);
die();
 */
?>

            <section>
                <h1 class="display-4 title">Quel film souhaitez-vous voir ?</h1>
                <?php foreach ($movies as $movie){ ?>                   
                    <div class="container container-fluid masterbox">
                        <div class="col-md-2">
                            <img src="<?= $movie["poster"]; ?>" class="img-fluid" alt="Affiche du film <?= $movie["title"]; ?>">
                        </div>
                        <div class="container container-fluid mastertextbox">
                            <div class="infotextbox">
                                <h2><?= $movie["title"]; ?></h2>
                                <h5><?= $movie["year_release"]; ?> - <?= $movie["runtime"]; ?></h5>
                                <p style="font-size: 1.1rem;">Séances : le <?php
                                                    $date = new DateTimeImmutable($movie["date"]);
                                                    echo $date->format("d/m/Y");
                                                ?> à
                                    <?= substr($movie["showtime_1"],0,5); ?> -
                                    <?= substr($movie["showtime_2"],0,5); ?> -
                                    <?= substr($movie["showtime_3"],0,5); ?> -
                                    <?= substr($movie["showtime_4"],0,5); ?>
                                </p>
                                <p>Places restantes : <?= $movie["capacity"]; ?></p>
                                <p><?= $movie["summary"]; ?></p>
                            </div>
                            <div class=" container container-fluid linkinfobox">
                                <a href="show.php?id=<?php echo $movie['id']; ?>">Voir plus</a>
                                <a href="#">Réserver</a>
                            </div>
                        </div>      
                    </div>
                <?php } ?>
            </section>

<?php

require_once 'templates/footer.php';

?>