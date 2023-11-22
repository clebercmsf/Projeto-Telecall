-- MySQL Script generated by MySQL Workbench
-- Wed Nov 22 12:36:37 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_telecall
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_telecall
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_telecall` DEFAULT CHARACTER SET utf8 ;
USE `db_telecall` ;

-- -----------------------------------------------------
-- Table `db_telecall`.`Perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_telecall`.`Perfil` (
  `id_Perfil` INT NOT NULL,
  `Descricao_Perfil` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_Perfil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_telecall`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_telecall`.`Usuario` (
  `id_Usuario` INT NOT NULL AUTO_INCREMENT,
  `Nome_Usuario` VARCHAR(60) NOT NULL,
  `Nascimento_Usuario` VARCHAR(10) NOT NULL,
  `Sexo_Usuario` VARCHAR(45) NOT NULL,
  `Nome_Materno` VARCHAR(60) NOT NULL,
  `CPF_Usuario` VARCHAR(14) NOT NULL,
  `Celular_Usuario` VARCHAR(18) NOT NULL,
  `Telefone_Usuario` VARCHAR(17) NOT NULL,
  `Endereco_Usuario` VARCHAR(250) NOT NULL,
  `Login_Usuario` VARCHAR(6) NOT NULL,
  `Senha_Usuario` VARCHAR(20) NOT NULL,
  `perfil` INT NOT NULL,
  INDEX `fk_Usuario_Telecall_perfis_idx` (`perfil` ASC) VISIBLE,
  PRIMARY KEY (`id_Usuario`),
  CONSTRAINT `fk_Usuario_Telecall_perfis`
    FOREIGN KEY (`perfil`)
    REFERENCES `db_telecall`.`Perfil` (`id_Perfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;