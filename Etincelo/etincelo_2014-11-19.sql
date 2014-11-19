# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.19-1~dotdeb.1)
# Database: etincelo
# Generation Time: 2014-11-19 21:33:35 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name_picture` varchar(255) NOT NULL,
  `size_picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `title`, `content`, `date`, `name_picture`, `size_picture`)
VALUES
	(3,'Bonjours','<p>Bienvenu sur mon site,</p>\r\n\r\n<p>Ici vous pouvez voir tous les contenus d&#39;&eacute;tincelo.</p>\r\n\r\n<p>Merci pour votre visite.</p>\r\n','2014-06-26 17:35:56','3.JPG','2968741'),
	(4,'Coucou le monde ','<p>Coucou,</p>\r\n\r\n<p>Voici une deuxi&egrave;me news dsfsdfdsfsdfsdVoici une deuxi&egrave;me news dsfsdfdsfsdfsdVoici une deuxi&egrave;me news dsfsdfdsfsdfsdVoici une deuxi&egrave;me news dsfsdfdsfsdfsdVoici une deuxi&egrave;me news dsfsdfdsfsdfsdVoici une deuxi&egrave;me news dsfsdfdsfsdfsd</p>\r\n\r\n<p>Merci aurevoir</p>\r\n','2014-06-26 17:40:43','4.jpg','193510'),
	(5,'bonjour le monde','<p>fz,sdl,fs sfglpdf^g ldpfg sg^$df</p>\r\n','2014-08-16 16:34:13','5.JPG','883770'),
	(6,'Un vert de wiski','<p>Voici un verre!!</p>\r\n','2014-08-16 16:34:35','6.JPG','946240'),
	(8,'neww','<p>HEY!!!!</p>\r\n\r\n<p>Etincelo s&#39;en va pour l&#39;ile mauricesd</p>\r\n','2014-08-16 16:57:51','8.JPG','2087887'),
	(27,'La dernier news','<p>Voila le conetu</p>\r\n','2014-11-13 20:36:16','27.jpg','480300');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table picture
# ------------------------------------------------------------

DROP TABLE IF EXISTS `picture`;

CREATE TABLE `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `picture` WRITE;
/*!40000 ALTER TABLE `picture` DISABLE KEYS */;

INSERT INTO `picture` (`id`, `name`, `title`, `date`)
VALUES
	(148,'IMG_0189.JPG','IMG_0189.JPG','2014-11-15 17:15:52'),
	(149,'IMG_0188.JPG','IMG_0188.JPG','2014-11-15 17:15:52'),
	(150,'IMG_0190.JPG','IMG_0190.JPG','2014-11-15 17:15:52'),
	(152,'IMG_0193.JPG','IMG_0193.JPG','2014-11-15 17:15:52'),
	(153,'IMG_0192.JPG','IMG_0192.JPG','2014-11-15 17:15:52'),
	(155,'IMG_0171.JPG','IMG_0171.JPG','2014-11-15 17:24:03'),
	(156,'IMG_0166.JPG','IMG_0166.JPG','2014-11-15 17:24:03'),
	(157,'IMG_0177.JPG','IMG_0177.JPG','2014-11-15 17:24:03'),
	(163,'P1050471.JPG','P1050471.JPG','2014-11-15 17:35:06'),
	(164,'Eglise_louange.jpg','Eglise_louange.jpg','2014-11-18 19:45:23');

/*!40000 ALTER TABLE `picture` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
