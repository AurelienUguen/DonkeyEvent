            <nav class="navbar fixed-top navbar-expand-lg">
                <div class="collapse navbar-collapse justify-content-around align-items-center" id="navbarTogglerDemo02">
                    <a href="index.php"><img src="ressources/DonkeyEvent_Logo_2.png" alt="DonkeyEvent_Logo.png" width="150px"></a>
                    <div class="nav nav-pills nav-fill">
                        <a class="nav-link link-warning" href="index.php">Accueil</a>
                        <a class="nav-link link-warning" href="shows.php?cat=movie">Cinéma</a>
                        <a class="nav-link link-warning" href="shows.php?cat=show">Spectacle</a>
                        <a class="nav-link link-warning" href="myreservation.php">Mes réservations</a>
                        <a class="nav-link link-warning" href="#">Panier</a>
                        <a class="nav-link link-warning" href="inc/disconnexionUtils.php">Déconnexion</a>
                        <span class="text-light">Bienvenue <?= $_SESSION["name"]; ?> </span>
                    </div>
                </div>
            </nav>