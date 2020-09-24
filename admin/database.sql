SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `escrow-giant` ;
CREATE SCHEMA IF NOT EXISTS `escrow-giant` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `escrow-giant` ;







CREATE TABLE `licence` (
  `licence_id` INT NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL ,
  `dob` varchar(255) NOT NULL ,
  `gender` varchar(255) NOT NULL ,
  `address` varchar(255) NOT NULL,
  `drivingstatus` varchar(255) NOT NULL,
  `validfrom` varchar(255) NOT NULL,
  `validto` varchar(255) NOT NULL,
  `lisencenumber` varchar(255) NOT NULL,
  `issuenumber` varchar(255) NOT NULL,
  PRIMARY KEY (`licence_id`))
ENGINE = InnoDB;
