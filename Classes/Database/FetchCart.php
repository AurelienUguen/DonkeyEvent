<?php

class FetchCart
{

    public static function selectCart()
    {
      $pdo = PDOInstance::getInstance();

      $sql = <<<SQL
              SELECT * FROM cart
SQL;

      $stm = $pdo->query($sql);
      return $stm->fetchAll(PDO::FETCH_OBJ);
    }
}


