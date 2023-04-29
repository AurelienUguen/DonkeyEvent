<?php

require_once 'autoload.php';

if($_GET['cat'] === 'movie') {

  $where = $_GET['cat'];
  $shows = getEventsByCat($where);
  $seances = getSeanceByCat($where);
  // die(var_dump($shows));

} elseif ($_GET['cat'] === 'show') {

    $where = $_GET['cat'];
    $shows = getEventsByCat($where);
    $seances = getSeanceByCat($where);
}

require_once 'templates/header.php';
?>
        <section>
          <h1 class="display-4 title">Quel film souhaitez-vous voir ?</h1>
          <?php foreach ($shows as $key=>$show){ ?>
            

              <div class="container container-fluid masterbox">
                <div class="col-md-2">
                  <img src="<?= $show->getPoster(); ?>" class="img-fluid" alt="Affiche du film <?= $show->getTitle(); ?>">
                </div>
                <div class="container container-fluid mastertextbox">
                  <div class="infotextbox">
                    <h2><?= $show->getTitle(); ?></h2>
                    <h4>de <?= $show->getDirector(); ?></h4>
                    <?php if($show->getCategory() === "movie") { ?>
                      <h5><?= $show->getYearRelease(); ?> - <?= $show->getRuntime(); ?></h5>
                      <p>Séances le <?= $seances[$key]->getDate() ?> à :
                                    <?= substr($seances[$key]->getShowtime1(),0,5); ?> -
                                    <?= substr($seances[$key]->getShowtime2(),0,5); ?> -
                                    <?= substr($seances[$key]->getShowtime3(),0,5); ?> -
                                    <?= substr($seances[$key]->getShowtime4(),0,5); ?>
                      </p>
                    <?php } elseif($show->getCategory() === "show") { ?>
                      <p>Concert le <?= $seances[$key]->getDate() ?> à :
                                    <?= substr($seances[$key]->getShowtime1(),0,5); ?>
                    <?php } ?>
                    <p>Places restantes : <?= $seances[$key]->GetCapacity(); ?></p>
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
<?php

require_once 'autoload.php';

if($_GET['cat'] === 'movie') {

  $where = $_GET['cat'];
  $shows = getEventsByCat($where);
  $seances = getSeanceByCat($where);
  // die(var_dump($shows));

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
                  <p style="font-size: 1.1rem;">
                    Séances : le <?= $show->getDate() ?> à
                                  <?= substr($show->showtime_1(),0,5); ?> -
                                  <?= substr($show->showtime_2(),0,5); ?> -
                                  <?= substr($show->showtime_3(),0,5); ?> -
                                  <?= substr($show->showtime_4(),0,5); ?>
                  </p>
                  <p>Places restantes : <?= $show->capacity(); ?></p>
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