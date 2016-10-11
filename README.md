-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema empresario
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema empresario
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `empresario` ;
USE `empresario` ;

-- -----------------------------------------------------
-- Table `empresario`.`catalogos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresario`.`catalogos` (
  `ID_CAT` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Costo` VARCHAR(10) NULL COMMENT '',
  `Descripcion` VARCHAR(10) NULL COMMENT '',
  `Ubicacion` VARCHAR(10) NULL COMMENT '',
  `Piso` VARCHAR(10) NULL COMMENT '',
  `Area` VARCHAR(10) NULL COMMENT '',
  `Estrato` VARCHAR(10) NULL COMMENT '',
  `Sector` VARCHAR(10) NULL COMMENT '',
  PRIMARY KEY (`ID_CAT`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empresario`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresario`.`usuarios` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Nombre` VARCHAR(10) NULL COMMENT '',
  `Apellido` VARCHAR(10) NULL COMMENT '',
  `Direccion` VARCHAR(10) NULL COMMENT '',
  `Telefono` VARCHAR(10) NULL COMMENT '',
  `Correo` VARCHAR(10) NULL COMMENT '',
  `Password` VARCHAR(10) NULL COMMENT '',
  `Rol` VARCHAR(10) NULL COMMENT '',
  `Compañia` VARCHAR(10) NULL COMMENT '',
  `Estado` VARCHAR(10) NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empresario`.`contratos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresario`.`contratos` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Nombre` VARCHAR(10) NULL COMMENT '',
  `Apellido` VARCHAR(10) NULL COMMENT '',
  `Documento` VARCHAR(10) NULL COMMENT '',
  `Direccion` VARCHAR(10) NULL COMMENT '',
  `Telefono` VARCHAR(10) NULL COMMENT '',
  `Fechainicio` DATE NULL COMMENT '',
  `Fechafin` DATE NULL COMMENT '',
  `Estado` VARCHAR(10) NULL COMMENT '',
  `usuarios_ID` INT NOT NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '',
  INDEX `fk_contratos_usuarios1_idx` (`usuarios_ID` ASC)  COMMENT '',
  CONSTRAINT `fk_contratos_usuarios1`
    FOREIGN KEY (`usuarios_ID`)
    REFERENCES `empresario`.`usuarios` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empresario`.`inmuebles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresario`.`inmuebles` (
  `ID_PUESTO` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Numeropuesto` VARCHAR(10) NULL COMMENT '',
  `Costoarriendo` VARCHAR(10) NULL COMMENT '',
  `Direccion` VARCHAR(10) NULL COMMENT '',
  `Pisopuesto` VARCHAR(10) NULL COMMENT '',
  `Estado` VARCHAR(10) NULL COMMENT '',
  `catalogos_ID_CAT` INT NOT NULL COMMENT '',
  `contratos_ID` INT NOT NULL COMMENT '',
  PRIMARY KEY (`ID_PUESTO`, `contratos_ID`)  COMMENT '',
  INDEX `fk_inmuebles_catalogos1_idx` (`catalogos_ID_CAT` ASC)  COMMENT '',
  INDEX `fk_inmuebles_contratos1_idx` (`contratos_ID` ASC)  COMMENT '',
  CONSTRAINT `fk_inmuebles_catalogos1`
    FOREIGN KEY (`catalogos_ID_CAT`)
    REFERENCES `empresario`.`catalogos` (`ID_CAT`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inmuebles_contratos1`
    FOREIGN KEY (`contratos_ID`)
    REFERENCES `empresario`.`contratos` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empresario`.`arriendos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresario`.`arriendos` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Numeropuesto` INT NULL COMMENT '',
  `Fechainicio` VARCHAR(50) NULL COMMENT '',
  `Fechafin` VARCHAR(50) NULL COMMENT '',
  `Costoarriendo` VARCHAR(50) NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empresario`.`manejodecontrato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresario`.`manejodecontrato` (
  `ID_DEUDA` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Numeropuesto` VARCHAR(10) NULL COMMENT '',
  `Tiempodeuda` VARCHAR(10) NULL COMMENT '',
  `Valordeuda` VARCHAR(10) NULL COMMENT '',
  `contratos_ID` INT NOT NULL COMMENT '',
  PRIMARY KEY (`ID_DEUDA`, `contratos_ID`)  COMMENT '',
  INDEX `fk_manejodecontrato_contratos1_idx` (`contratos_ID` ASC)  COMMENT '',
  CONSTRAINT `fk_manejodecontrato_contratos1`
    FOREIGN KEY (`contratos_ID`)
    REFERENCES `empresario`.`contratos` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empresario`.`sesion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresario`.`sesion` (
  `ID` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Usuario` VARCHAR(50) NULL COMMENT '',
  `password` VARCHAR(50) NULL COMMENT '',
  `Rol` VARCHAR(50) NULL COMMENT '',
  `Documento` VARCHAR(50) NULL COMMENT '',
  PRIMARY KEY (`ID`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empresario`.`descripcion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresario`.`descripcion` (
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `empresario`.`catalogos_has_inmuebles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `empresario`.`catalogos_has_inmuebles` (
  `catalogos_ID_CAT` INT NOT NULL COMMENT '',
  `inmuebles_ID_PUESTO` INT NOT NULL COMMENT '',
  PRIMARY KEY (`catalogos_ID_CAT`, `inmuebles_ID_PUESTO`)  COMMENT '',
  INDEX `fk_catalogos_has_inmuebles_inmuebles1_idx` (`inmuebles_ID_PUESTO` ASC)  COMMENT '',
  INDEX `fk_catalogos_has_inmuebles_catalogos1_idx` (`catalogos_ID_CAT` ASC)  COMMENT '',
  CONSTRAINT `fk_catalogos_has_inmuebles_catalogos1`
    FOREIGN KEY (`catalogos_ID_CAT`)
    REFERENCES `empresario`.`catalogos` (`ID_CAT`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_catalogos_has_inmuebles_inmuebles1`
    FOREIGN KEY (`inmuebles_ID_PUESTO`)
    REFERENCES `empresario`.`inmuebles` (`ID_PUESTO`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
