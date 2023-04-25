<?

$model1 = new \Models\Comment();

$commentaires = $model ->findall() ; //connexions a MYSQL : 1
$commentaire =$model->find(1); //connexions a MYSQL :2
$model->delete(1);  //connexions a MYSQL /3



class Database

{
    private static $ instance =null;

    /**Retourne une connexion a la base de donnees 

    @return PDO

    */
    public static function getPdo (): PDO
    {
        if(self::$instance ===null){
            self::$instance = new PDO ('mysaql:host=localhost;dbname=blogpoo;charset=utf8',
            'root','',[
                PDO::ATTR_ERRMODE => PDO :: ERRMODE_EXEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
            ])
        }
    
 
    return self::$instance;


}

}
