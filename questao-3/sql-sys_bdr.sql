/*
SQLyog Enterprise - MySQL GUI v6.5
MySQL - 5.7.14 : Database - sys_bdr
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

create database if not exists `sys_bdr`;

USE `sys_bdr`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fullname` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `users` */

insert  into `users`(`id`,`user_fullname`,`email`,`cpf`,`password`,`user_status`) values (1,'Prime','admin@ifc-camboriu.com','1234567890','202cb962ac59075b964b07152d234b70',1),(6,'Summas Than','rodrigopluz@ifc-camboriu.com','1023456789','149787a6b7986f31b3dcc0e4e857cd2a',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
