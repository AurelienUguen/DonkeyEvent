<?php

require_once 'templates/header.php';

?>

<section>
    <h1 class="display-4 title">Quel film souhaitez-vous voir ?</h1>
    <!-- Boucle foreach pour dupliquer la div ci-dessous pour chaque film -->
    <div class="container container-fluid masterbox">
            <div class="col-md-2"><img src="https://m.media-amazon.com/images/I/81-DmthvMwL.jpg" class="img-fluid" alt=""></div>
        <div class="container container-fluid mastertextbox">
            <div class="infotextbox">
                <h2>Les banshees d'Inisherin</h2>
                <p>Sur Inisherin - une île isolée au large de la côte ouest de l'Irlande - deux compères de toujours, Pádraic et Colm, se retrouvent dans une impasse lorsque Colm décide du jour au lendemain de mettre fin à leur amitié.</p>
            </div>
            <div class=" container container-fluid linkinfobox">
                <a href="show.php">Voir plus</a>
                <a href="#">Réserver</a>
            </div>
        </div>      
    </div>
</section>

<?php

require_once 'templates/footer.php';

?>