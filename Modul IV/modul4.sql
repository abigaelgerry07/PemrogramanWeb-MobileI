/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.18-MariaDB : Database - survei
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`survei` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `survei`;

/*Table structure for table `data` */

DROP TABLE IF EXISTS `data`;

CREATE TABLE `data` (
  `nim` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `umur` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `data` */

insert  into `data`(`nim`,`nama`,`umur`) values 
('123','Abigael','19'),
('124','Mitchel','18'),
('125','Kejer','20'),
('126','Kevin','18'),
('127','Rio','19'),
('128','Fauzan','18');

/*Table structure for table `voting` */

DROP TABLE IF EXISTS `voting`;

CREATE TABLE `voting` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `voting` */

insert  into `voting`(`nim`,`nama`) values 
('193020503021','Akil'),
('193030503062','Satria');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
