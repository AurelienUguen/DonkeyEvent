<?php

class FetchEvent
{

    public static function selectEventByCat($where)
    {
      $pdo = PDOInstance::getInstance();

      $sql = <<<SQL
      
      SELECT `show`.`id`, `show`.`name` AS title, `show`.director, `show`.casting, `show`.year_release, `show`.summary, `show`.genre, `show`.runtime,
      `show`.poster, `show`.price, `show`.category
      FROM `show` WHERE `show`.category = "$where"
SQL;

      $stm = $pdo->query($sql);
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function selectEventById($showId)
    {
      $pdo = PDOInstance::getInstance();

      $sql = <<<SQL
      
      SELECT `show`.`id`, `show`.`name` AS title, `show`.director, `show`.casting, `show`.year_release, `show`.summary, `show`.genre, `show`.runtime,
      `show`.poster, `show`.price, `show`.category
      FROM `show` WHERE `show`.id = "$showId"
SQL;

      $stm = $pdo->query($sql);
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}