-- MySQL Script generated by MySQL Workbench
-- Wed Nov 10 11:55:48 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

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
-- Table `mydb`.`Nivel Formacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Nivel Formacion` (
  `idNivel Formacion` INT NOT NULL,
  `NombreNivel` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idNivel Formacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Programa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Programa` (
  `idPrograma` INT NOT NULL,
  `NombrePrograma` VARCHAR(45) NOT NULL,
  `Nivel Formacion_idNivel Formacion` INT NOT NULL,
  PRIMARY KEY (`idPrograma`, `Nivel Formacion_idNivel Formacion`),
  CONSTRAINT `fk_Programa_Nivel Formacion1`
    FOREIGN KEY (`Nivel Formacion_idNivel Formacion`)
    REFERENCES `mydb`.`Nivel Formacion` (`idNivel Formacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`EstadoA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`EstadoA` (
  `idEstadoA` INT NOT NULL,
  `EstadoA` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEstadoA`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`FICHA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`FICHA` (
  `idFICHA` INT NOT NULL,
  `FILectiva` DATE NOT NULL,
  `FFLectiva` DATE NOT NULL,
  `FTFicha` DATE NOT NULL,
  `Programa_idPrograma` INT NOT NULL,
  `Programa_Nivel Formacion_idNivel Formacion` INT NOT NULL,
  PRIMARY KEY (`idFICHA`, `Programa_idPrograma`, `Programa_Nivel Formacion_idNivel Formacion`),
  CONSTRAINT `fk_FICHA_Programa1`
    FOREIGN KEY (`Programa_idPrograma` , `Programa_Nivel Formacion_idNivel Formacion`)
    REFERENCES `mydb`.`Programa` (`idPrograma` , `Nivel Formacion_idNivel Formacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Instructor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Instructor` (
  `idInstructor` INT NOT NULL,
  `NombreInstructor` VARCHAR(45) NOT NULL,
  `DescripcionFalta` VARCHAR(45) NOT NULL,
  `Componente` VARCHAR(45) NOT NULL,
  `HorasFalla` VARCHAR(45) NOT NULL,
  `ReporteVoceroFica` VARCHAR(200) NOT NULL,
  `FechaReporte` DATE NOT NULL,
  PRIMARY KEY (`idInstructor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Aprendiz`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Aprendiz` (
  `idAprendiz` INT NOT NULL,
  `NombreAPrendiz` VARCHAR(45) NOT NULL,
  `ApellidoAPrendiz` VARCHAR(45) NOT NULL,
  `EmailAprendiz` VARCHAR(45) NOT NULL,
  `TelAprendiz` VARCHAR(10) NOT NULL,
  `FIProductiva` DATE NOT NULL,
  `FFEProductiva` DATE NOT NULL,
  `EstadoAPCA` VARCHAR(45) NOT NULL,
  `TipoAlternativa` VARCHAR(45) NOT NULL,
  `NombreEmpresa` VARCHAR(45) NOT NULL,
  `EstadoA_idEstadoA` INT NOT NULL,
  `FICHA_idFICHA` INT NOT NULL,
  `FICHA_Programa_idPrograma` INT NOT NULL,
  `FICHA_Programa_Nivel Formacion_idNivel Formacion` INT NOT NULL,
  `Instructor_idInstructor` INT NOT NULL,
  PRIMARY KEY (`idAprendiz`, `EstadoA_idEstadoA`, `FICHA_idFICHA`, `FICHA_Programa_idPrograma`, `FICHA_Programa_Nivel Formacion_idNivel Formacion`, `Instructor_idInstructor`),
  CONSTRAINT `fk_Aprendiz_EstadoA1`
    FOREIGN KEY (`EstadoA_idEstadoA`)
    REFERENCES `mydb`.`EstadoA` (`idEstadoA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aprendiz_FICHA1`
    FOREIGN KEY (`FICHA_idFICHA` , `FICHA_Programa_idPrograma` , `FICHA_Programa_Nivel Formacion_idNivel Formacion`)
    REFERENCES `mydb`.`FICHA` (`idFICHA` , `Programa_idPrograma` , `Programa_Nivel Formacion_idNivel Formacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Aprendiz_Instructor1`
    FOREIGN KEY (`Instructor_idInstructor`)
    REFERENCES `mydb`.`Instructor` (`idInstructor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TipoFalta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`TipoFalta` (
  `idTipoFalta` INT NOT NULL,
  `NombreFalta` VARCHAR(45) NULL,
  PRIMARY KEY (`idTipoFalta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Reporte_falta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Reporte_falta` (
  `idReporte` INT NOT NULL,
  `NDeber1` VARCHAR(45) NOT NULL,
  `NDeber2` VARCHAR(45) NOT NULL,
  `NDeber3` VARCHAR(45) NOT NULL,
  `Prohibicion1` VARCHAR(45) NOT NULL,
  `Prohibicion2` VARCHAR(45) NOT NULL,
  `Prohibicion3` VARCHAR(45) NOT NULL,
  `Observaciones` VARCHAR(200) NOT NULL,
  `FechaReporte` VARCHAR(45) NOT NULL,
  `TipoFalta_idTipoFalta` INT NOT NULL,
  `Instructor_idInstructor` INT NOT NULL,
  `InstructorJefeTaller` VARCHAR(45) NOT NULL,
  `TotalFaltasA` VARCHAR(45) NULL,
  PRIMARY KEY (`TipoFalta_idTipoFalta`, `Instructor_idInstructor`),
  CONSTRAINT `fk_Reporte_falta_TipoFalta1`
    FOREIGN KEY (`TipoFalta_idTipoFalta`)
    REFERENCES `mydb`.`TipoFalta` (`idTipoFalta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Reporte_falta_Instructor1`
    FOREIGN KEY (`Instructor_idInstructor`)
    REFERENCES `mydb`.`Instructor` (`idInstructor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Participantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Participantes` (
  `idParticipantes` INT NOT NULL,
  `NombreParticipantes` VARCHAR(45) NOT NULL,
  `ApellidosParticipantes` VARCHAR(45) NOT NULL,
  `CargoParticipante` VARCHAR(45) NOT NULL,
  `EstadoParticipante` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idParticipantes`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Acta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Acta` (
  `CodActa` INT NOT NULL,
  `Ciudad` VARCHAR(45) NOT NULL,
  `FechaActa` VARCHAR(45) NOT NULL,
  `HoraInicio` DATE NOT NULL,
  `HoraFinal` DATE NOT NULL,
  `Lugar/Enlace` VARCHAR(45) NOT NULL,
  `Agenda` VARCHAR(45) NOT NULL,
  `ObjetivosReunion` VARCHAR(45) NOT NULL,
  `Participantes` VARCHAR(45) NOT NULL,
  `ConFicha` VARCHAR(45) NOT NULL,
  `VerificacionActas` VARCHAR(45) NULL,
  `CeAcomite` VARCHAR(45) NULL,
  `CeActualco` VARCHAR(45) NULL,
  `Adestacar` VARCHAR(45) NULL,
  `Participantes_idParticipantes` INT NOT NULL,
  `Reporte_falta_TipoFalta_idTipoFalta` INT NOT NULL,
  `Reporte_falta_Instructor_idInstructor` INT NOT NULL,
  PRIMARY KEY (`CodActa`, `Participantes_idParticipantes`, `Reporte_falta_TipoFalta_idTipoFalta`, `Reporte_falta_Instructor_idInstructor`),
  CONSTRAINT `fk_Acta_Participantes1`
    FOREIGN KEY (`Participantes_idParticipantes`)
    REFERENCES `mydb`.`Participantes` (`idParticipantes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Acta_Reporte_falta1`
    FOREIGN KEY (`Reporte_falta_TipoFalta_idTipoFalta` , `Reporte_falta_Instructor_idInstructor`)
    REFERENCES `mydb`.`Reporte_falta` (`TipoFalta_idTipoFalta` , `Instructor_idInstructor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
