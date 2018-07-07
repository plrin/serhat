/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 10.1.33-MariaDB : Database - serhat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`serhat` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `serhat`;

/*Table structure for table `bar` */

DROP TABLE IF EXISTS `bar`;

CREATE TABLE `bar` (
  `Name` varchar(50) NOT NULL,
  `PLZ` int(5) DEFAULT NULL,
  `Ort` varchar(20) DEFAULT NULL,
  `Straße` varchar(30) DEFAULT NULL,
  `Hausnummer` int(4) DEFAULT NULL,
  `Inhaber` varchar(50) DEFAULT NULL,
  UNIQUE KEY `UNIQUE` (`Name`,`PLZ`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bar` */

insert  into `bar`(`Name`,`PLZ`,`Ort`,`Straße`,`Hausnummer`,`Inhaber`) values 
('Berliner Betrüger',20095,'Hamburg','Lange Reihe',15,'Rudolf Smidt'),
('Skyline Bar 20up',20359,'Hamburg','Bernhard-Nocht-Straße',97,'Uwe Beren'),
('Bar DaCaio Hamburg',22087,'Hamburg','Barcastraße ',3,'Kai Hollmann'),
('Le Lion Bar de Paris',20095,'Hamburg','Rathausstraße',3,'Jörg Meyer'),
('Tower Bar',20459,'Hamburg','Seewartenstraße',9,'Dominik Specht'),
('Chakra',20357,'Hamburg','Susannenstraße',11,'Türke mit Bart');

/*Table structure for table `description` */

DROP TABLE IF EXISTS `description`;

CREATE TABLE `description` (
  `Name` varchar(50) NOT NULL,
  `PLZ` int(5) NOT NULL,
  `Beschreibung` text,
  UNIQUE KEY `Unique` (`Name`,`PLZ`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `description` */

insert  into `description`(`Name`,`PLZ`,`Beschreibung`) values 
('Bar DaCaio Hamburg',22087,'Die stylishe britische Hotelbar serviert Snacks zum Tee am Nachmittag sowie abends Longdrinks und Cocktails.'),
('Berliner Betrüger',20095,'Gemütliches Restaurant und Bar mit Wohnzimmer-Ambiente, das Frühstück, Kuchen und Sandwiches serviert.'),
('Chakra',20357,'Das stimmungsvoll beleuchtete, moderne Café mit Holzmöbeln bietet Frühstück und internationale Speisen an.'),
('Le Lion Bar de Paris',20095,'Die ehrwürdige, stilvolle Bar mit Brokat an den Wänden bietet gehobene Barkunst und Einlass durch Klingeln.'),
('Skyline Bar 20up',20359,'Die elegante Bar im 20. Stock des Empire Riverside Hotels bietet Cocktails, Musik und Ausblick auf die Stadt.'),
('Tower Bar',20459,'Stilvolle Bar im Turm des Hotels Hafen, in der die Besucher beim Blick über den Hafen Cocktails genießen.');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `bar` varchar(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `vorname` varchar(30) DEFAULT NULL,
  `PLZ` int(5) NOT NULL,
  UNIQUE KEY `UNIQUE` (`bar`,`name`,`vorname`,`PLZ`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `employee` */

insert  into `employee`(`bar`,`name`,`vorname`,`PLZ`) values 
('Bar DaCaio Hamburg','Dumbledore','Albus',22087),
('Bar DaCaio Hamburg','Potter','Harry',22087),
('Bar DaCaio Hamburg','Riddle','Tom',22087),
('Bar DaCaio Hamburg','Weasley','Hermine',22087),
('Bar DaCaio Hamburg','Weasley','Ron',22087),
('Berliner Betrüger','Bongers','Jenny',20095),
('Berliner Betrüger','Jeffersen','Maria',20095),
('Berliner Betrüger','Walters','Sabiene',20095),
('Berliner Betrüger','Westermann','Theo',20095),
('Chakra','Döbian','Hasan',20357),
('Chakra','Kocak','Mehmet',20357),
('Chakra','Kocak','Serhat',20357),
('Chakra','Özbek','Badan',20357),
('Le Lion Bar de Paris','Dang','Duc Tan',20095),
('Le Lion Bar de Paris','Duc','Tan',20095),
('Le Lion Bar de Paris','Jamsen','Sonja',20095),
('Le Lion Bar de Paris','Lech','Gujen',20095),
('Le Lion Bar de Paris','Negujen','Wi',20095),
('Skyline Bar 20up','Becker','Marie',20359),
('Skyline Bar 20up','Born','Laura',20359),
('Skyline Bar 20up','Bromann','Sebastian',20359),
('Skyline Bar 20up','Hering','Timo',20359),
('Skyline Bar 20up','Tielsch','Julia',20359),
('Tower Bar','Coolidge','Butch',20459),
('Tower Bar','Vega','Vincent',20459),
('Tower Bar','Wallace','Marsellus',20459),
('Tower Bar','Wallace','Mia',20459),
('Tower Bar','Winnfield','Jules',20459),
('Tower Bar','Wolf','Winston',20459);

/*Table structure for table `getränke` */

DROP TABLE IF EXISTS `getränke`;

CREATE TABLE `getränke` (
  `Getränk` varchar(30) NOT NULL,
  `HASALC` varchar(4) DEFAULT NULL,
  `Beschreibung` text,
  UNIQUE KEY `UNIQUE` (`Getränk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `getränke` */

insert  into `getränke`(`Getränk`,`HASALC`,`Beschreibung`) values 
('Coca Cola','Nein','Coca Cola ist ein Softgetränk'),
('Cuba Libre','Ja','Cuba Libre ist ein Cocktail mit Rum, Coca Cola und Limetten'),
('Wasser','Nein','Wasser ohne Sprudel'),
('Weizenbier','Ja','Weizenbier ist ein alkoholisches Getränk aus Weizen');

/*Table structure for table `getränkekarte` */

DROP TABLE IF EXISTS `getränkekarte`;

CREATE TABLE `getränkekarte` (
  `Name` varchar(50) NOT NULL,
  `PLZ` int(5) NOT NULL,
  `Getränk` varchar(30) NOT NULL,
  `Preis` decimal(5,2) DEFAULT NULL,
  UNIQUE KEY `UNIQUE` (`Name`,`PLZ`,`Getränk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `getränkekarte` */

insert  into `getränkekarte`(`Name`,`PLZ`,`Getränk`,`Preis`) values 
('Bar DaCaio Hamburg',22087,'Coca Cola',2.30),
('Bar DaCaio Hamburg',22087,'Wasser',1.90),
('Bar DaCaio Hamburg',22087,'Weizenbier',3.90),
('Berliner Betrüger',20095,'Cuba Libre',4.50),
('Berliner Betrüger',20095,'Wasser',2.00),
('Berliner Betrüger',20095,'Weizenbier',3.50),
('Chakra',20357,'Coca Cola',2.90),
('Chakra',20357,'Cuba Libre',5.90),
('Chakra',20357,'Wasser',1.90),
('Le Lion Bar de Paris',20095,'Cuba Libre',7.90),
('Le Lion Bar de Paris',20095,'Wasser',3.10),
('Le Lion Bar de Paris',20095,'Weizenbier',4.10),
('Skyline Bar 20up',20359,'Coca Cola',3.10),
('Skyline Bar 20up',20359,'Cuba Libre',9.90),
('Skyline Bar 20up',20359,'Weizenbier',3.70),
('Tower Bar',20459,'Cuba Libre',8.50),
('Tower Bar',20459,'Wasser',2.50),
('Tower Bar',20459,'Weizenbier',2.90);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
