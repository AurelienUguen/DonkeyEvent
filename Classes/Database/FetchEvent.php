<?php

class FetchEvent
{

    public static function selectEventByCat($where)
    {
      $pdo = PDOInstance::getInstance();

      $sql = <<<SQL
      
      SELECT `show`.`id`, `show`.`name` AS title, `show`.director, `show`.casting, `show`.year_release, `show`.summary, `show`.genre, `show`.runtime,
      `show`.poster, `show`.price, `show`.category, seance.`id` AS seanceId, `seance`.show_id, seance.`name` AS salle, seance.`date`, `seance`.showtime_1, `seance`.showtime_2,
      `seance`.showtime_3, `seance`.showtime_4, `seance`.capacity, `seance`.bought_ticket
      FROM `show`
      LEFT JOIN seance
      ON `show`.`id` = seance.`show_id`
      WHERE `show`.category = "$where"
SQL;

      $stm = $pdo->query($sql);
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function selectEventById($showId)
    {
      $pdo = PDOInstance::getInstance();

      $sql = <<<SQL
      
      SELECT `show`.`id`, `show`.`name` AS title, `show`.director, `show`.casting, `show`.year_release, `show`.summary, `show`.genre, `show`.runtime,
      `show`.poster, `show`.price, `show`.category, seance.`id` AS seanceId, `seance`.show_id, seance.`name` AS salle, seance.`date`, `seance`.showtime_1, `seance`.showtime_2,
      `seance`.showtime_3, `seance`.showtime_4, `seance`.capacity, `seance`.bought_ticket
      FROM `show`
      LEFT JOIN seance
      ON `show`.`id` = seance.`show_id`
      WHERE `show`.id = "$showId"
SQL;

      $stm = $pdo->query($sql);
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}