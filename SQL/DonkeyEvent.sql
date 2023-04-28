-- MySQL Workbench Synchronization
-- Generated: 2023-04-26 20:37
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Kuba

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

ALTER SCHEMA `donkey_event`  DEFAULT CHARACTER SET utf8  DEFAULT COLLATE utf8_general_ci ;

ALTER TABLE `donkey_event`.`seance` 
DROP FOREIGN KEY `fk_screen_show`;

ALTER TABLE `donkey_event`.`ticket` 
DROP FOREIGN KEY `fk_ticket_user`;

ALTER TABLE `donkey_event`.`show` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ,
CHANGE COLUMN `name` `name` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL ,
CHANGE COLUMN `director` `director` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
CHANGE COLUMN `casting` `casting` VARCHAR(1024) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
CHANGE COLUMN `summary` `summary` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
CHANGE COLUMN `genre` `genre` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
CHANGE COLUMN `runtime` `runtime` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
CHANGE COLUMN `poster` `poster` VARCHAR(512) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
CHANGE COLUMN `category` `category` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL ;

ALTER TABLE `donkey_event`.`seance` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ,
CHANGE COLUMN `name` `name` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ;

ALTER TABLE `donkey_event`.`user` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ,
CHANGE COLUMN `name` `name` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL ,
CHANGE COLUMN `password` `password` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL ,
CHANGE COLUMN `email` `email` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ;

ALTER TABLE `donkey_event`.`ticket` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ,
CHANGE COLUMN `show_name` `show_name` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL ,
CHANGE COLUMN `user_name` `user_name` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL ,
CHANGE COLUMN `category_name` `category_name` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL ,
CHANGE COLUMN `price` `price` INT(11) NOT NULL ;

ALTER TABLE `donkey_event`.`seance` 
ADD CONSTRAINT `fk_screen_show`
  FOREIGN KEY (`show_id`)
  REFERENCES `donkey_event`.`show` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `donkey_event`.`ticket` 
ADD CONSTRAINT `fk_ticket_user`
  FOREIGN KEY (`user_id`)
  REFERENCES `donkey_event`.`user` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
