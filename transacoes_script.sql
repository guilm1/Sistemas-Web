-- MySQL Script generated by MySQL Workbench
-- ter 09 jul 2019 03:02:01 -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`clientes` ;

CREATE TABLE IF NOT EXISTS `mydb`.`clientes` (
  `id` INT(10) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`tipos` ;

CREATE TABLE IF NOT EXISTS `mydb`.`tipos` (
  `id` INT(11) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`trans`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`trans` ;

CREATE TABLE IF NOT EXISTS `mydb`.`trans` (
  `id` INT(11) NOT NULL,
  `cliente_id` INT(10) NOT NULL,
  `tipo_id` INT(11) NOT NULL,
  `data` VARCHAR(10) NOT NULL,
  `valor` DECIMAL(10,2) NOT NULL,
  `credito` TINYINT(4) NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `cliente_id_idx` (`cliente_id` ASC),
  INDEX `tipo_id_idx` (`tipo_id` ASC),
  CONSTRAINT `cliente_id`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `mydb`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `tipo_id`
    FOREIGN KEY (`tipo_id`)
    REFERENCES `mydb`.`tipos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
