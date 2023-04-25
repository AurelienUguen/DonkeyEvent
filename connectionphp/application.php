<?php

/*car nous avons un point en commmun 
 dans tous nos fichier qui est d'apper un controller l instancie
  et dessus ils appelent une  fonction a se que l 'on veut faire*/

class Application {
    public static function process()
    {
        $controllerName="Article";
        $task ="index";

        if(!empty(&_GET['controller'])){
            //GET => article
            //Article
            //
            $controllerName =ucfirst($_GET['controller']);
        }

        if(!empty($_GET['task'])){
            $task=$_GET['task'];
        }


        $controllerName = "\controllers\\  ".$controllerName;

        $controller= new $controllerName()
        $controller ->$task()
 
    }
}
