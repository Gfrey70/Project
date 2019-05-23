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
  `id` INT NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(255) NULL,
  `lname` VARCHAR(255) NULL,
  `gender` VARCHAR(45) NULL,
  `mobile` INT NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  `address` VARCHAR(45) NULL,
  `rolename` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpslsdb`.`cargarages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`cargarages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `gname` VARCHAR(45) NULL,
  `gdescription` TEXT NULL,
  `location` VARCHAR(45) NULL,
  `city` VARCHAR(45) NULL,
  `district` VARCHAR(45) NULL,
  `street` VARCHAR(45) NULL,
  `country` VARCHAR(45) NULL,
  `Pnumber` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cargarages_users_idx` (`users_id` ASC) ,
  CONSTRAINT `fk_cargarages_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `vpslsdb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpslsdb`.`Drivers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`Drivers` (
  `idDriver` INT NOT NULL,
  `DName` VARCHAR(45) NULL,
  `phnumber` VARCHAR(45) NULL,
  `sex` VARCHAR(45) NULL,
  `Country` VARCHAR(45) NULL,
  `City` VARCHAR(45) NULL,
  `age` VARCHAR(45) NULL,
  PRIMARY KEY (`idDriver`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpslsdb`.`LogSheets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`LogSheets` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `logusername` VARCHAR(45) NULL,
  `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_LogSheets_users1_idx` (`users_id` ASC) ,
  CONSTRAINT `fk_LogSheets_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `vpslsdb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpslsdb`.`maintTips`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`maintTips` (
  `idmaintTips` INT NOT NULL AUTO_INCREMENT,
  `TipsTitle` VARCHAR(100) NULL,
  `TipsDesc` VARCHAR(200) NULL,
  `doc` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `addedby` INT NOT NULL,
  PRIMARY KEY (`idmaintTips`),
  INDEX `fk_maintTips_users1_idx` (`addedby` ASC) ,
  CONSTRAINT `fk_maintTips_users1`
    FOREIGN KEY (`addedby`)
    REFERENCES `vpslsdb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpslsdb`.`GpsLocations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`GpsLocations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `LongTude` DOUBLE NULL,
  `latTude` DOUBLE NULL,
  `cargarages_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_GpsLocations_cargarages1_idx` (`cargarages_id` ASC) ,
  CONSTRAINT `fk_GpsLocations_cargarages1`
    FOREIGN KEY (`cargarages_id`)
    REFERENCES `vpslsdb`.`cargarages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpslsdb`.`carservicedrivers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`carservicedrivers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `doc` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `drivers_id` INT NOT NULL,
  `cargarages_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_carservicedrivers_Drivers1_idx` (`drivers_id` ASC) ,
  INDEX `fk_carservicedrivers_cargarages1_idx` (`cargarages_id` ASC) ,
  CONSTRAINT `fk_carservicedrivers_Drivers1`
    FOREIGN KEY (`drivers_id`)
    REFERENCES `vpslsdb`.`Drivers` (`idDriver`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carservicedrivers_cargarages1`
    FOREIGN KEY (`cargarages_id`)
    REFERENCES `vpslsdb`.`cargarages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vpslsdb`.`garageservices`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vpslsdb`.`garageservices` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `servicename` VARCHAR(45) NULL,
  `servicedescription` VARCHAR(45) NULL,
  `doc` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `cargarages_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_garageservices_cargarages1_idx` (`cargarages_id` ASC) ,
  CONSTRAINT `fk_garageservices_cargarages1`
    FOREIGN KEY (`cargarages_id`)
    REFERENCES `vpslsdb`.`cargarages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
