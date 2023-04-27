<?php

class DatabaseTools
{

    public static function selectMovie($pdo, $table): array
    {
      $sql = <<<SQL
      
      SELECT $table.`name`, $table.director, $table.year_release, $table.summary, $table.runtime, $table.poster, $table.category
      FROM $table
      WHERE $table.category = "movie"
SQL;

      $stm = $pdo->query($sql);
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function selectShow($pdo, $table): array
    {
      $sql = <<<SQL
      
      SELECT $table.`name`, $table.director, $table.year_release, $table.summary, $table.runtime, $table.poster, $table.category
      FROM $table
      WHERE $table.category = "show"
SQL;

      $stm = $pdo->query($sql);
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function selectSeance($pdo, $seanceTable): array
    {
      $sql = <<<SQL
      
      SELECT $seanceTable.`date`, $seanceTable.showtime_1
      FROM $seanceTable
SQL;

      $stm = $pdo->query($sql);
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function insert($pdo, $brand, $model, $color=null): void
    {
      $sql = <<<SQL

      INSERT INTO camera (brand, model, color) VALUES (:brand, :model, :color);
SQL;

      $stm = $pdo->prepare($sql);
      $stm->bindValue(':brand', $brand);
      $stm->bindValue(':model', $model);
      $stm->bindValue(':color', $color);
      $stm->execute();
    }

    public static function update($pdo, $brand, $model, $id, $color=null): void
    {
      $sql = <<<SQL

      UPDATE camera SET brand = :brand, model = :model, color = :color WHERE id = :id;
SQL;

      $stm = $pdo->prepare($sql);
      $stm->bindValue(':id', $id);
      $stm->bindValue(':brand', $brand);
      $stm->bindValue(':model', $model);
      $stm->bindValue(':color', $color);
      $stm->execute();
    }
    
}