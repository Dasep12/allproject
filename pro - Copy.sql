/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.30-MariaDB : Database - project
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;



/*Table structure for table `akun` */

DROP TABLE IF EXISTS `akun`;

CREATE TABLE `akun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `login_last` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `akun` */

insert  into `akun`(`id`,`user`,`password`,`login_last`) values (1,'dasep','202cb962ac59075b964b07152d234b70','2021-11-25 12:15:35');

/*Table structure for table `pro` */

DROP TABLE IF EXISTS `pro`;

CREATE TABLE `pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `teknologi` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `pro` */

insert  into `pro`(`id`,`judul`,`teknologi`,`tanggal`,`link`,`img`) values (7,'Sistem Informasi Manajemen Asset','- CodeIgniter\r\n- PHP version 5.6 >\r\n- mysql\r\n- Bootstrap & CSS\r\n- Jquery','2021-12-12 14:00:00','http://dasepdepiyawan.epizy.com','032058pbwhk1.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
