<?php
require_once('config/dbConfig.php');

class PDOInstance
{
    private $PDOInstance = null;
    private static $instance = null;
    
    public function __construct()
    {
        $this->PDOInstance = new PDO(DSN, USER, PASS);
    }

    public static function getInstance(): PDOInstance
    {
        if(is_null(self::$instance)) {
            self::$instance = new PDOInstance();
        }
        return self::$instance;
    }

    public function query ($query): PDOStatement
    {
        return $this->PDOInstance->query($query);
    }

    public function prepare ($query): PDOStatement
    {
        return $this->PDOInstance->prepare($query);
    }

}