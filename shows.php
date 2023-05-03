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
          <?php if($where === "movie") { ?>
            <h1 class="display-4 title">Quel film souhaitez-vous voir ?</h1>
          <?php } elseif($where === "show") { ?>
            <h1 class="display-4 title">Quel spectacle souhaitez-vous voir ?</h1>
              <?php } foreach ($shows as $key=>$show){ ?>
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
                          <label for="orderDate">Jour de la séance : </label>
                            <input type="date" name="orderDate" min="<?= $today; ?>" max="<?=$lastDay; ?>" value="<?= $today ?>">&nbsp;&nbsp;
                            <label for="showtime">Horaire : </label>
                              <select name="showtime" id="">
                                  <option value="<?php echo getSeanceById($show->getEventId())->getShowtime1(); ?>"><?php echo getSeanceById($show->getEventId())->getShowtime1(); ?></option>
                                  <option value="<?php echo getSeanceById($show->getEventId())->getShowtime2(); ?>"><?php echo getSeanceById($show->getEventId())->getShowtime2(); ?></option>
                                  <option value="<?php echo getSeanceById($show->getEventId())->getShowtime3(); ?>"><?php echo getSeanceById($show->getEventId())->getShowtime3(); ?></option>
                                  <option value="<?php echo getSeanceById($show->getEventId())->getShowtime4(); ?>"><?php echo getSeanceById($show->getEventId())->getShowtime4(); ?></option>
                              </select>
                            <!-- <input type="submit" name="orderBtn" value="Commander"> -->
                        <p>Prix de la place : <?= $show->getPrice(); ?> €</p>
                      <?php } elseif($show->getCategory() === "show") { ?>
                        <p>Concert le <?= $seances[$key]->getDate() ?> à :
                                      <?= substr($seances[$key]->getShowtime1(),0,5); ?>
                        </p>
                        <p>Prix de la place : <?= $show->getPrice(); ?> €</p>
                      <?php } ?>
                      <p>Places restantes : <?= $seances[$key]->GetCapacity(); ?></p>
                      <p><?= $show->getSummary(); ?></p>
                    </div>
                    <div class="container container-fluid linkinfobox">
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