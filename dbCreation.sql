-- Crea base de datos --
CREATE SCHEMA `projectdb` DEFAULT CHARACTER SET utf8 ;

-- Se posiciona en la nueva base --
USE `projectdb`;

-- Crea tabla user --
CREATE  TABLE `user` (
  `iduser` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(32) NULL ,
  `email` VARCHAR(80) NULL ,
  `created` TIMESTAMP NOT NULL ,
  `updated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`) ) ENGINE=InnoDB;

-- Crea tabla logging --
CREATE TABLE `logging` (
  `idlogging` INT NOT NULL AUTO_INCREMENT,
  `iduser` INT UNSIGNED NOT NULL,
  `event` varchar(100) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idlogging`),
  KEY `fk_idx` (`iduser`),
  CONSTRAINT `fk_user_logging` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON UPDATE CASCADE
) ENGINE=InnoDB;
