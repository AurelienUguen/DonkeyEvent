<?php

require_once('autoload.php');

if (isset($_GET)) {

    $movieId = intval($_GET['id']);

    $pdo = PDOInstance::getInstance();
    $movies = DatabaseTools::selectMovie($pdo, "`show`", "seance", $movieId);
    //die(var_dump($movies));
}

require_once('templates/header.php');

?>

<section>
    <h1 class="display-4 title">Détails du film "<?= $movies['title']; ?>"</h1>
    <div class="container container-fluid detailbox">
        <div class="col-md-3">
            <img src="<?= $movies['poster']; ?>" class="img-fluid" alt="">
        </div>
        <div class="container container-fluid moredetails">
            <h2 class="display-3"><?= $movies['title']; ?></h2>
            <h3 class="display-5">De <?= $movies['director']; ?></h3>
            <h4><?= $movies['genre']; ?></h4>
            <p><?= $movies['summary']; ?></p>
        </div>
    </div>
</section>

<?php

require_once 'templates/footer.php';

?>