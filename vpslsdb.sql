-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema vpslsdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema vpslsdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `vpslsdb` DEFAULT CHARACTER SET utf8 ;
USE `vpslsdb` ;

-- -----------------------------------------------------
-- Table `vpslsdb`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(255) NULL DEFAULT NULL,
  `lname` VARCHAR(255) NULL DEFAULT NULL,
  `gender` VARCHAR(45) NULL DEFAULT NULL,
  `mobile` INT(11) NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `password` VARCHAR(255) NULL DEFAULT NULL,
  `address` VARCHAR(45) NULL DEFAULT NULL,
  `rolename` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vpslsdb`.`cargarages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`cargarages` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `gname` VARCHAR(45) NULL DEFAULT NULL,
  `gdescription` TEXT NULL DEFAULT NULL,
  `location` VARCHAR(45) NULL DEFAULT NULL,
  `city` VARCHAR(45) NULL DEFAULT NULL,
  `district` VARCHAR(45) NULL DEFAULT NULL,
  `street` VARCHAR(45) NULL DEFAULT NULL,
  `country` VARCHAR(45) NULL DEFAULT NULL,
  `Pnumber` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `users_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cargarages_users_idx` (`users_id` ASC) ,
  CONSTRAINT `fk_cargarages_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `vpslsdb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vpslsdb`.`drivers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`drivers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(45) NULL DEFAULT NULL,
  `lname` VARCHAR(255) NOT NULL,
  `pnumber` VARCHAR(45) NULL DEFAULT NULL,
  `address` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `gender` VARCHAR(45) NULL DEFAULT NULL,
  `country` VARCHAR(45) NULL DEFAULT NULL,
  `city` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vpslsdb`.`carservicedrivers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`carservicedrivers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `doc` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `drivers_id` INT(11) NOT NULL,
  `cargarages_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_carservicedrivers_Drivers1_idx` (`drivers_id` ASC) ,
  INDEX `fk_carservicedrivers_cargarages1_idx` (`cargarages_id` ASC) ,
  CONSTRAINT `fk_carservicedrivers_Drivers1`
    FOREIGN KEY (`drivers_id`)
    REFERENCES `vpslsdb`.`drivers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carservicedrivers_cargarages1`
    FOREIGN KEY (`cargarages_id`)
    REFERENCES `vpslsdb`.`cargarages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vpslsdb`.`garageservices`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`garageservices` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `servicename` VARCHAR(45) NULL DEFAULT NULL,
  `servicedescription` VARCHAR(45) NULL DEFAULT NULL,
  `doc` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `cargarages_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_garageservices_cargarages1_idx` (`cargarages_id` ASC) ,
  CONSTRAINT `fk_garageservices_cargarages1`
    FOREIGN KEY (`cargarages_id`)
    REFERENCES `vpslsdb`.`cargarages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vpslsdb`.`gpslocations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`gpslocations` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `LongTude` DOUBLE NULL DEFAULT NULL,
  `latTude` DOUBLE NULL DEFAULT NULL,
  `cargarages_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_GpsLocations_cargarages1_idx` (`cargarages_id` ASC) ,
  CONSTRAINT `fk_GpsLocations_cargarages1`
    FOREIGN KEY (`cargarages_id`)
    REFERENCES `vpslsdb`.`cargarages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vpslsdb`.`logsheets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`logsheets` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `logusername` VARCHAR(45) NULL DEFAULT NULL,
  `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `users_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_LogSheets_users1_idx` (`users_id` ASC) ,
  CONSTRAINT `fk_LogSheets_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `vpslsdb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `vpslsdb`.`mainttips`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`mainttips` (
  `idmaintTips` INT(11) NOT NULL AUTO_INCREMENT,
  `TipsTitle` VARCHAR(100) NULL DEFAULT NULL,
  `TipsDesc` VARCHAR(200) NULL DEFAULT NULL,
  `doc` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `addedby` INT(11) NOT NULL,
  PRIMARY KEY (`idmaintTips`),
  INDEX `fk_maintTips_users1_idx` (`addedby` ASC) ,
  CONSTRAINT `fk_maintTips_users1`
    FOREIGN KEY (`addedby`)
    REFERENCES `vpslsdb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
