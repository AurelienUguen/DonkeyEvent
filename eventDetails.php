<?php

require_once('templates/header.php');

if (isset($_GET)) {

    $showId = intval($_GET['id']);
    $show = getEventsById($showId);
    $seance = getSeanceById($showId);
    // $seance = getSeanceByCat($where);
    // die(var_dump($show));
}


?>
          <section>
            <?php if($show->getCategory() === "movie") { ?>
            <h1 class="display-4 title">Détails du film "<?= $show->getTitle(); ?>"</h1>
            <?php } elseif($show->getCategory() === "show") { ?>
             <h1 class="display-4 title">Détails du spectacle "<?= $show->getTitle(); ?>"</h1>
            <?php } ?>
            <div class="container container-fluid detailbox">
              <div class="col-md-3">
                <img src="<?= $show->getPoster(); ?>" class="img-fluid" alt="Affiche du l'évenement <?= $show->getTitle(); ?>">
              </div>
              <div class="container container-fluid moredetails">
                <h2 class="display-5"><?= $show->getTitle(); ?></h2>
                <h3 class="display-7">De <?= $show->getDirector(); ?></h3>
                <h4><?= $show->getGenre(); ?></h4>
                <?php if($show->getCategory() === "movie") { ?>
                  <h5><?= $show->getYearRelease(); ?> - <?= $show->getRuntime(); ?></h5>
                  <p>Séances le <?= $seance->getDate() ?> à :
                                <?= substr($seance->getShowtime1(),0,5); ?> -
                                <?= substr($seance->getShowtime2(),0,5); ?> -
                                <?= substr($seance->getShowtime3(),0,5); ?> -
                                <?= substr($seance->getShowtime4(),0,5); ?>
                  </p>
                <?php } elseif($show->getCategory() === "show") { ?>
                  <p>Concert le <?= $seance->getDate() ?> à :
                                <?= substr($seance->getShowtime1(),0,5); ?>
                <?php } ?>
                <p>Places restantes : <?= $seance->GetCapacity(); ?></p>
                <p><?= $show->getSummary(); ?></p>
              </div>
            </div>
          </section>
<?php

require_once 'templates/footer.php';

?>