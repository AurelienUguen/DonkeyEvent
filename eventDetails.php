<?php

require_once 'autoload.php';

if (isset($_GET)) {

    $showId = intval($_GET['id']);
    $show = getEventsById($showId);
    // die(var_dump($show));
}

require_once('templates/header.php');

?>
      <section>
          <h1 class="display-4 title">Détails du film "<?= $show->getTitle(); ?>"</h1>
          <div class="container container-fluid detailbox">
              <div class="col-md-3">
                  <img src="<?= $show->getPoster(); ?>" class="img-fluid" alt="Affiche du l'évenement <?= $show->getTitle(); ?>">
              </div>
              <div class="container container-fluid moredetails">
                  <h2 class="display-3"><?= $show->getTitle(); ?></h2>
                  <h3 class="display-5">De <?= $show->getDirector(); ?></h3>
                  <h4><?= $show->getGenre(); ?></h4>
                  <p><?= $show->getSummary(); ?></p>
              </div>
          </div>
      </section>
<?php

require_once 'templates/footer.php';

?>