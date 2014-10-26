# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38-0ubuntu0.14.04.1)
# Database: up_traffic
# Generation Time: 2014-10-26 12:11:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table rules_apply_on_contexts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rules_apply_on_contexts`;

CREATE TABLE `rules_apply_on_contexts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rule_id` int(11) unsigned DEFAULT NULL,
  `context_id` int(11) unsigned DEFAULT NULL,
  `pass` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `rules_apply_on_contexts` WRITE;
/*!40000 ALTER TABLE `rules_apply_on_contexts` DISABLE KEYS */;

INSERT INTO `rules_apply_on_contexts` (`id`, `rule_id`, `context_id`, `pass`)
VALUES
	(1,1,1,1),
	(2,1,2,0),
	(3,3,1,0),
	(4,3,7,1);

/*!40000 ALTER TABLE `rules_apply_on_contexts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contexts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contexts`;

CREATE TABLE `contexts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lights` varchar(10) DEFAULT NULL,
  `left_incoming_traffic` int(10) unsigned DEFAULT '0',
  `right_incoming_traffic` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contexts` WRITE;
/*!40000 ALTER TABLE `contexts` DISABLE KEYS */;

INSERT INTO `contexts` (`id`, `lights`, `left_incoming_traffic`, `right_incoming_traffic`)
VALUES
	(1,'green',100,100),
	(2,'red',100,100),
	(3,'amber',200,200),
	(4,'amber',100,200),
	(5,NULL,100,100),
	(6,NULL,80,80),
	(7,'green',200,5);

/*!40000 ALTER TABLE `contexts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rules
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rules`;

CREATE TABLE `rules` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rule` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `rules` WRITE;
/*!40000 ALTER TABLE `rules` DISABLE KEYS */;

INSERT INTO `rules` (`id`, `rule`)
VALUES
	(1,'lights = \"green\" and left_incoming_traffic >= 100 and right_incoming_traffic >= 100'),
	(2,'lights = \"null\" and left_incoming_traffic >= 100 and right_incoming_traffic >= 100'),
	(3,'lights = \"green\" and (left_incoming_traffic >= 200 or right_incoming_traffic >= 200)');

/*!40000 ALTER TABLE `rules` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created`, `modified`)
VALUES
	(1,'admin','admin@500webapps.com','$2y$10$RxaW7HEch.mk9DNuOg6ljuui8HzoJibx55YKAsKEEVg4Ogdet0kha','admin','2014-10-19 14:35:14','2014-10-19 14:35:14'),
	(2,'Timmy','Timmy@500webapps.com','$2y$10$/Qm1DSmaL9h9sB5.V/fAU.LZgFMc1u3wrxKmdnq/K5D9UpTGiWzBu','author','2014-10-19 15:04:22','2014-10-19 15:05:42'),
	(3,'Sally','Sally@500webapps.com','$2y$10$kiJJ1g6gSa8lVSS/bY14u.NNhZdf88v3LIc1ME9A8us.P44KkeMKS','author','2014-10-19 15:05:23','2014-10-19 15:05:23');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
