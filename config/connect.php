<?php

require_once('dbConfig.php');

try {
  $pdo = new PDO(DSN, USER, PASS);
} catch(PDOException $e) {
    die($e->getMessage());
}