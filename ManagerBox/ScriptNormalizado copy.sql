-- MySQL Script generated by MySQL Workbench
-- dom 10 abr 2022 00:36:30
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema MANAGERBOX
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema MANAGERBOX
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `MANAGERBOX` DEFAULT CHARACTER SET utf8 ;
USE `MANAGERBOX` ;

-- -----------------------------------------------------
-- Table `MANAGERBOX`.`FUNCIONARIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MANAGERBOX`.`FUNCIONARIO` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `CPF` INT(11) NOT NULL,
  `NOME` VARCHAR(45) NOT NULL,
  `EMAIL` VARCHAR(45) NULL,
  `SENHA` VARCHAR(45) NOT NULL,
  `DATACRIACAO` DATE NOT NULL,
  `VENDAS` INT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `CPF_UNIQUE` (`CPF` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MANAGERBOX`.`ITENS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MANAGERBOX`.`ITENS` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `DESCRICAO` VARCHAR(45) NOT NULL,
  `MARCA` VARCHAR(45) NULL,
  `MODELO` VARCHAR(45) NOT NULL,
  `TAMANHO` INT NOT NULL,
  `DATAENTRADA` DATE NOT NULL,
  `QUANTIDADE` INT NULL,
  `FUNREGISTRADOR` INT NULL,
  `CODIGOBARRAS` INT(13) NOT NULL,
  `PRECO` FLOAT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `FUNREGISTRADOR_idx` (`FUNREGISTRADOR` ASC) VISIBLE,
  CONSTRAINT `FUNREGISTRADOR`
    FOREIGN KEY (`FUNREGISTRADOR`)
    REFERENCES `MANAGERBOX`.`FUNCIONARIO` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MANAGERBOX`.`VENDAS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MANAGERBOX`.`VENDAS` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `VENDEDOR` INT NOT NULL,
  `DATAVENDA` DATE NOT NULL,
  `ITEMVENDIDO` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `VENDEDOR_idx` (`VENDEDOR` ASC) VISIBLE,
  INDEX `ITEMVENDIDO_idx` (`ITEMVENDIDO` ASC) VISIBLE,
  CONSTRAINT `VENDEDOR`
    FOREIGN KEY (`VENDEDOR`)
    REFERENCES `MANAGERBOX`.`FUNCIONARIO` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ITEMVENDIDO`
    FOREIGN KEY (`ITEMVENDIDO`)
    REFERENCES `MANAGERBOX`.`ITENS` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
