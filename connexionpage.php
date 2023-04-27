<?php

require_once('autoload.php');
require_once 'templates/header.php';

?>
<section class="connexionpage">
    <h1 class="display-4 title">Se connecter</h1>
    <form method="POST">
        <!-- Username input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Aurélien" />       
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="MonChatMeGitIgnore"/>
        </div>

        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block btn-warning col-12 mb-4">Log in</button>
    </form>
</section>


<?php

require_once 'templates/footer.php';

?>
