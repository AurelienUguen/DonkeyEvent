<?php

require_once 'autoload.php';

if($_GET['cat'] === 'movie') {

  $where = $_GET['cat'];
  $shows = getEventsByCat($where);

} elseif ($_GET['cat'] === 'show') {

    $where = $_GET['cat'];
    $shows = getEventsByCat($where);
    
}

require_once 'templates/header.php';
?>
        <section>
          <h1 class="display-4 title">Quel film souhaitez-vous voir ?</h1>
          <?php foreach ($shows as $show){ ?>                   
            <div class="container container-fluid masterbox">
              <div class="col-md-2">
                <img src="<?= $show->getPoster(); ?>" class="img-fluid" alt="Affiche du film <?= $show->getTitle(); ?>">
              </div>
              <div class="container container-fluid mastertextbox">
                <div class="infotextbox">
                  <h2><?= $show->getTitle(); ?></h2>
                  <h4>de <?= $show->getDirector(); ?></h4>
                  <?php ?>
                  <h5><?= $show->getYearRelease(); ?> - <?= $show->getRuntime(); ?></h5>

                  <p><?= $show->getSummary(); ?></p>
                </div>
                <div class=" container container-fluid linkinfobox">
                  <a href="eventDetails.php?id=<?= $show->getEventId(); ?>">Voir plus</a>
                  <a href="#">Réserver</a>
                </div>
              </div>      
            </div>
            <?php   } ?>
        </section>
<?php
require_once 'templates/footer.php';
?>