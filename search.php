<?php

require_once 'templates/header.php';

$pdo = PDOInstance::getInstance();

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $q = htmlspecialchars($_GET['search']);
    
    $result = $pdo->query('SELECT `show`.`name`, director, casting, genre  FROM `show` WHERE `show`.name LIKE "%'.$q.'%"');
}


    foreach ($result->fetchAll(PDO::FETCH_OBJ) as $result) { ?>
      <section style="padding-top: 100px;">  
        <ul style="color: yellow;">
          <li><?= $result->name ?></li>
        </ul>
      </section>
<?php }


require_once 'templates/footer.php';