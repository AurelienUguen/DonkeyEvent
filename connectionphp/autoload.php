

<?php

spl_autoad_register(function($className){
    //className = Contollers\Article
    //require=libraries/Controllers/Articles.php;
    
   
    $className = str_replace("\\","/",$className);
   

    require_once("libraries/$className.php")


});  

