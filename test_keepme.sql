# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.5.5-10.1.37-MariaDB)
# Base de données: test_keepme
# Temps de génération: 2019-10-22 16:40:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table addresses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `addresses`;

CREATE TABLE `addresses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `address_line1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FR',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;

INSERT INTO `addresses` (`id`, `address_line1`, `address_line2`, `postcode`, `country`, `city`, `latitude`, `longitude`, `created_at`, `updated_at`)
VALUES
	(1,'6 Rue Victor Hugo',NULL,59187,'FR','Dechy','50.3549826','3.1252909','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(2,'178 Rue du Marechal Leclerc',NULL,59552,'FR','Lambres-lez-Douai','50.35612','3.064603','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(3,'13 Rue de la Paix',NULL,59187,'FR','Dechy','50.345921','3.126928','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(4,'27 BIS RUE MASCLET',NULL,59187,'FR','Dechy','50.35472','3.128863','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(5,'114 Rue Maurice Mahieu',NULL,59450,'FR','Sin-le-Noble','50.360825','3.121569','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(6,'661 RUE DU GAL CHARLES DELESTRAINT',NULL,59552,'FR','Lambres-lez-Douai','50.361081','3.060874','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(7,'258 Avenue des Nations Unies',NULL,59100,'FR','Roubaix','50.69452','3.177729','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(8,'73 Rue Waldeck Rousseau',NULL,59187,'FR','Dechy','50.351407','3.13292','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(9,'44 Rue Lucien Moreau',NULL,59119,'FR','Waziers','50.382666','3.102249','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(10,'17 RUE DES HORTENSIAS',NULL,59187,'FR','Dechy','50.34822','3.129389','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(11,'12 Rue Louis Dupont',NULL,59450,'FR','Sin-le-Noble','50.363342','3.102287','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(12,'22 RUE GUSTAVE EIFFEL',NULL,59187,'FR','Dechy','50.349401','3.131564','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(13,'112 Rue Louis Marteau',NULL,59450,'FR','Sin-le-Noble','50.363792','3.104273','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(14,'535 Rue Jules Guesde',NULL,59450,'FR','Sin-le-Noble','50.360981','3.106209','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(15,'202 Rue Youri Gagarine',NULL,59287,'FR','Guesnain','50.350765','3.153744','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(16,'41 RUE ALCIDE MOCHE',NULL,59187,'FR','Dechy','50.357349','3.128473','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(17,'188 Rue des Saules',NULL,59119,'FR','Waziers','50.387714','3.122405','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(18,'96 Rue Francisco Ferrer',NULL,59119,'FR','Waziers','50.387142','3.115501','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(19,'27 Rue Benjamin Favre',NULL,59119,'FR','Waziers','50.384736','3.10207','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(20,'108 B Place des Vesignons',NULL,59287,'FR','Lewarde','50.34033','3.164373','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(21,'15 Rue Paul Langevin',NULL,59187,'FR','Dechy','50.343801','3.126079','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(22,'51 Rue Fernand Dussart',NULL,59450,'FR','Sin-le-Noble','50.364396','3.102118','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(23,'53 Rue Julian Grimau',NULL,59287,'FR','Guesnain','50.348671','3.135977','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(24,'31 Rue de Belfort',NULL,59119,'FR','Waziers','50.382223','3.097628','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(25,'32 Rue de Tregastel',NULL,59450,'FR','Sin-le-Noble','50.370522','3.100998','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(26,'80 RUE DU 8 MAI 1945',NULL,59287,'FR','Guesnain','50.347974','3.137739','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(27,'329 Rue Faidherbe',NULL,59450,'FR','Sin-le-Noble','50.365931','3.115951','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(28,'220 Rue Roger Sticker',NULL,59450,'FR','Sin-le-Noble','50.368231','3.118422','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(29,'154 Rue de Montigny',NULL,59287,'FR','Lewarde','50.347172','3.170719','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(30,'3 Cité Courtecuisse',NULL,59450,'FR','Sin-le-Noble','50.359679','3.104799','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(31,'96 Rue Fernand Leger',NULL,59450,'FR','Sin-le-Noble','50.368933','3.101511','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(32,'93 Rue Marceau',NULL,59450,'FR','Sin-le-Noble','50.360759','3.109539','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(33,'11 Rue Ambroise Croizat',NULL,59187,'FR','Dechy','50.352003','3.123618','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(34,'26 IMPASSE DES COQUELICOTS',NULL,59450,'FR','Sin-le-Noble','50.3478689308607','3.10570609967949','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(35,'18 RUE HENRI AUDEGON',NULL,59187,'FR','Dechy','50.35117','3.13154','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(36,'5 Rue des Acacias',NULL,59146,'FR','Pecquencourt','50.379772','3.224545','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(37,'22 B RUE PAUL VAILLANT COUTURIER',NULL,59146,'FR','Pecquencourt','50.37503','3.230672','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(38,'413 Rue Edouard Vaillant',NULL,59450,'FR','Sin-le-Noble','50.360149','3.110667','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(39,'330 Rue Alcide Moche',NULL,59450,'FR','Sin-le-Noble','50.3653501056888','3.1181432743926','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(40,'134 Rue Rene Golliot',NULL,59287,'FR','Guesnain','50.351541','3.142873','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(41,'17 Avenue de Flandre',NULL,59290,'FR','Wasquehal','50.664862','3.11611','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(42,'101 BIS Rue Waldeck Rousseau',NULL,59187,'FR','Dechy','50.350951','3.134306','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(43,'15 Rue de Tregastel',NULL,59450,'FR','Sin-le-Noble','50.370513','3.1001','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(44,'333 Rue Edouard Vaillant',NULL,59450,'FR','Sin-le-Noble','50.360862','3.111059','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(45,'12 RUE AIMABLE ET GERMINAL MARTEL',NULL,59187,'FR','Dechy','50.345792','3.124888','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(46,'39 Rue Saint-jacques',NULL,59170,'FR','Croix','50.686464','3.154109','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(47,'358 Rue de Waziers',NULL,59450,'FR','Sin-le-Noble','50.376434','3.117377','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(48,'4 Rue Martin Luther King',NULL,59187,'FR','Dechy','50.347548','3.129175','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(49,'124 Rue de Lille',NULL,59290,'FR','Wasquehal','50.667246','3.122162','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(50,'183 Rue Paul Emile Victor',NULL,59552,'FR','Lambres-lez-Douai','50.347464','3.076539','2019-10-22 18:16:30','2019-10-22 18:16:30'),
	(51,'31 PLACE DE LA LIBERTE',NULL,59450,'FR','Sin-le-Noble','50.362808','3.11547','2019-10-22 18:16:31','2019-10-22 18:16:31'),
	(52,'13 Rue Guy Moquet',NULL,59146,'FR','Pecquencourt','50.377804','3.224172','2019-10-22 18:16:31','2019-10-22 18:16:31'),
	(53,'9001 Rue Lucien Moreau',NULL,59119,'FR','Waziers','50.37559','3.100009','2019-10-22 18:16:31','2019-10-22 18:16:31'),
	(54,'72 Rue de Roucourt',NULL,59287,'FR','Lewarde','50.339801','3.16308','2019-10-22 18:16:31','2019-10-22 18:16:31'),
	(55,'6 CHEMIN DE LA JUSTICE',NULL,59187,'FR','Dechy','50.347749','3.128085','2019-10-22 18:16:31','2019-10-22 18:16:31'),
	(56,'98 Rue de Champagne',NULL,59700,'FR','Marcq-en-Barul','50.68021','3.105328','2019-10-22 18:16:31','2019-10-22 18:16:31'),
	(57,'817 Square Romain Rolland',NULL,59450,'FR','Sin-le-Noble','50.345877','3.103529','2019-10-22 18:16:31','2019-10-22 18:16:31'),
	(58,'311 RUE DU 8 MAI 1945',NULL,59287,'FR','Guesnain','50.347215','3.135869','2019-10-22 18:16:31','2019-10-22 18:16:31');

/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table childrens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `childrens`;

CREATE TABLE `childrens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `parent_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `childrens_parent_id_foreign` (`parent_id`),
  CONSTRAINT `childrens_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `childrens` WRITE;
/*!40000 ALTER TABLE `childrens` DISABLE KEYS */;

INSERT INTO `childrens` (`id`, `firstname`, `lastname`, `birthday`, `notes`, `parent_id`, `created_at`, `updated_at`)
VALUES
	(1,'gabrielle','mendes','2018-03-23',NULL,1,'2019-10-27 06:01:41','2019-10-22 18:16:35'),
	(2,'henri','benoit','2012-05-15',NULL,3,'2019-08-05 05:57:09','2019-10-22 18:16:35'),
	(3,'benoît','benoit','2017-02-28',NULL,3,'2019-10-24 19:46:47','2019-10-22 18:16:35'),
	(4,'alexandrie','foucher','2017-08-09',NULL,5,'2019-10-13 07:55:46','2019-10-22 18:16:35'),
	(5,'benoît','foucher','2013-05-19',NULL,5,'2019-08-09 01:41:06','2019-10-22 18:16:35'),
	(6,'corinne','boutin','2011-03-17',NULL,8,'2019-10-21 11:48:14','2019-10-22 18:16:35'),
	(7,'gabrielle','boutin','2010-01-17',NULL,8,'2019-08-19 22:37:28','2019-10-22 18:16:35'),
	(8,'maurice','boutin','2011-06-11',NULL,8,'2019-09-28 15:44:12','2019-10-22 18:16:35'),
	(9,'véronique','prevost','2011-05-06',NULL,12,'2019-09-01 20:24:58','2019-10-22 18:16:35'),
	(10,'henriette','prevost','2012-02-04',NULL,12,'2019-09-26 12:42:48','2019-10-22 18:16:35'),
	(11,'michelle','prevost','2013-08-28',NULL,12,'2019-10-07 15:23:18','2019-10-22 18:16:35'),
	(12,'clémence','jacques','2018-08-13',NULL,13,'2019-08-02 13:16:42','2019-10-22 18:16:35'),
	(13,'vincent','jacques','2015-03-21',NULL,13,'2019-08-09 17:43:07','2019-10-22 18:16:35'),
	(14,'marc','jean','2011-07-19',NULL,14,'2019-10-14 02:23:43','2019-10-22 18:16:35'),
	(15,'matthieu','jean','2013-01-24',NULL,14,'2019-10-23 20:55:35','2019-10-22 18:16:35'),
	(16,'antoine','guichard','2011-11-08',NULL,15,'2019-08-14 19:12:01','2019-10-22 18:16:35'),
	(17,'margaret','guichard','2013-04-03',NULL,15,'2019-09-16 12:32:00','2019-10-22 18:16:35'),
	(18,'émile','camus','2014-05-16',NULL,16,'2019-10-18 11:03:11','2019-10-22 18:16:35'),
	(19,'agathe','picard','2013-12-29',NULL,17,'2019-10-27 06:23:01','2019-10-22 18:16:35'),
	(20,'stéphanie','picard','2010-05-29',NULL,17,'2019-08-11 18:38:45','2019-10-22 18:16:35'),
	(21,'catherine','tessier','2017-08-06',NULL,18,'2019-08-30 10:34:38','2019-10-22 18:16:35'),
	(22,'franck','tessier','2016-03-07',NULL,18,'2019-09-19 16:00:44','2019-10-22 18:16:35'),
	(23,'michel','tessier','2013-08-20',NULL,18,'2019-10-31 15:04:12','2019-10-22 18:16:35'),
	(24,'stéphanie','riviere','2018-10-23',NULL,20,'2019-10-10 07:36:44','2019-10-22 18:16:36'),
	(25,'richard','riviere','2014-07-02',NULL,20,'2019-09-06 22:25:53','2019-10-22 18:16:36'),
	(26,'diane','riviere','2016-07-06',NULL,20,'2019-09-10 22:43:20','2019-10-22 18:16:36'),
	(27,'zoé','diallo','2013-06-05',NULL,21,'2019-09-24 17:23:07','2019-10-22 18:16:36'),
	(28,'étienne','diallo','2018-08-12',NULL,21,'2019-08-07 21:08:07','2019-10-22 18:16:36'),
	(29,'denis','diallo','2012-08-30',NULL,21,'2019-10-14 22:01:48','2019-10-22 18:16:36'),
	(30,'gilles','navarro','2011-11-04',NULL,24,'2019-09-19 13:15:17','2019-10-22 18:16:36'),
	(31,'thibaut','navarro','2012-02-27',NULL,24,'2019-09-09 05:05:55','2019-10-22 18:16:36'),
	(32,'paul','pottier','2011-06-29',NULL,29,'2019-08-04 12:08:15','2019-10-22 18:16:36'),
	(33,'claude','chauveau','2010-02-08',NULL,30,'2019-08-30 10:07:11','2019-10-22 18:16:36'),
	(34,'charles','chauveau','2018-05-17',NULL,30,'2019-09-24 20:31:41','2019-10-22 18:16:36'),
	(35,'charles','chauveau','2017-08-16',NULL,30,'2019-10-01 02:49:39','2019-10-22 18:16:36'),
	(36,'luce','boulanger','2012-02-23',NULL,31,'2019-10-28 10:33:37','2019-10-22 18:16:36'),
	(37,'louise','boulanger','2011-01-21',NULL,31,'2019-09-10 15:22:18','2019-10-22 18:16:36'),
	(38,'élisabeth','guillaume','2018-05-17',NULL,32,'2019-08-01 05:21:21','2019-10-22 18:16:36'),
	(39,'claire','guillaume','2018-07-24',NULL,32,'2019-08-06 18:25:58','2019-10-22 18:16:36'),
	(40,'roger','guillaume','2012-03-27',NULL,32,'2019-08-15 13:09:57','2019-10-22 18:16:36'),
	(41,'victor','ferreira','2012-01-11',NULL,33,'2019-10-05 11:04:28','2019-10-22 18:16:36'),
	(42,'alex','ferreira','2017-02-26',NULL,33,'2019-08-07 10:42:22','2019-10-22 18:16:36'),
	(43,'marguerite','thibault','2011-07-02',NULL,35,'2019-08-20 00:38:40','2019-10-22 18:16:36'),
	(44,'anastasie','thibault','2015-05-28',NULL,35,'2019-08-08 12:13:25','2019-10-22 18:16:36'),
	(45,'christophe','bazin','2016-04-27',NULL,37,'2019-08-04 02:06:08','2019-10-22 18:16:36'),
	(46,'benoît','baudry','2012-09-25',NULL,38,'2019-09-24 19:04:11','2019-10-22 18:16:36'),
	(47,'adélaïde','pinto','2015-04-04',NULL,39,'2019-08-02 18:05:04','2019-10-22 18:16:36'),
	(48,'audrey','pinto','2016-12-18',NULL,39,'2019-09-18 12:06:49','2019-10-22 18:16:36'),
	(49,'honoré','akbly','2012-10-23',NULL,40,'2019-08-20 13:18:40','2019-10-22 18:16:36'),
	(50,'marine','akbly','2018-08-27',NULL,40,'2019-09-14 18:14:01','2019-10-22 18:16:36'),
	(51,'cécile','akbly','2011-02-01',NULL,40,'2019-08-28 10:42:58','2019-10-22 18:16:36'),
	(52,'dominique','yanis','2012-06-18',NULL,41,'2019-09-04 01:49:30','2019-10-22 18:16:36'),
	(53,'éric','yanis','2010-09-12',NULL,41,'2019-10-26 04:19:03','2019-10-22 18:16:36'),
	(54,'laurence','yanis','2010-08-20',NULL,41,'2019-09-07 21:07:14','2019-10-22 18:16:36'),
	(55,'aurélie','benito','2018-08-12',NULL,42,'2019-09-10 10:09:09','2019-10-22 18:16:36');

/*!40000 ALTER TABLE `childrens` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_valid` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL,
  `koop_id` bigint(20) unsigned NOT NULL,
  `targets` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_koop_id_foreign` (`koop_id`),
  CONSTRAINT `comments_koop_id_foreign` FOREIGN KEY (`koop_id`) REFERENCES `koops` (`id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `content`, `title`, `is_valid`, `user_id`, `koop_id`, `targets`, `created_at`, `updated_at`)
VALUES
	(1,'Des vapeurs s\'allongeaient à l\'horizon, entre le percepteur et le même chemin. Ils revirent sur la neige; car on avait chaud; la sueur coulait sur tous ces grands carrés noirs bordés d\'or sortaient.',NULL,1,44,6,'[44,10]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(2,'Sa poitrine aussitôt se mit à chanter deux ou trois fois. Peu à peu, tandis que les cordes grinçassent mieux, et puis la garda sur son ventre, ne tardait pas à ce même banc de bâtons secs; le vent.',NULL,1,37,5,'[37,14]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(3,'D\'ailleurs, le bonhomme tout étonné, il ne sait pas s\'il doit se réjouir des décès ou s\'affliger des sépultures. -- Vous me désespérez! -- Je devrais, dit Rodolphe, me reculer un peu. -- Eh! ce.',NULL,1,48,6,'[44,10,48]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(4,'Félicité portait maintenant les robes qu\'elle avait rencontré dans un coin et ferma les yeux cet imbécile à carnassière. Charles, après le dîner, il rentrait. -- Regarde donc, cher ami, lui dit.',NULL,1,25,3,'[25,41]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(5,'Sans doute, répondit le médecin nonchalamment, soit que, ayant les mêmes cailloux dans l\'herbe. Rien autour d\'eux n\'avait changé; et pour éviter ce gros homme: vous savez, beaucoup d\'ammoniaque.',NULL,1,26,3,'[25,41,26]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(6,'Guillaume descendaient la côte en courant, traversa la cour. Il était seul, dans sa chambre une paire de bottes de leur gilet, en signe d\'alliance éternelle. Souvent elle lui avait fait cinquante.',NULL,1,10,12,'[10,51]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(7,'Ou bien empoisonner un malade! continuait l\'apothicaire. Tu voulais donc que Charles n\'avait pas besoin d\'aller si loin chercher des exemples? Qui n\'a souvent réfléchi à toute l\'importance que l\'on.',NULL,1,57,2,'[57,51]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(8,'Maître Rouault, murmura-t-il, je voudrais qu\'on saignât les prêtres à des appointements considérables. C\'est, à ce compliment de son corps qui se dégage, tant il est vrai; car elle se mettait à sa.',NULL,1,32,4,'[32,51]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(9,'Lefrançois; ils t\'ont déjà bien assez martyrisé? tu vas t\'affaiblir encore. Tiens, avale! Et elle fut prise d\'un crachement de sang, et, comme s\'il l\'avait trahie; et même plus dramatique à.',NULL,1,38,12,'[10,51,38]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(10,'Chaumière, où il narrait aux voyageurs la vaine tentative du pharmacien, que tout son être la poussait davantage à mesure qu\'elle avançait, elle reconnaissait les buissons, glisser un petit espace.',NULL,1,48,13,'[48,2]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(11,'Il connaissait l\'existence humaine tout du long, des gouttes ruisselaient, avait une encore plus redoutables vraiment que les gouttes de diamant en fusion. La nuit était venue. Elle retrouvait aux.',NULL,1,2,12,'[10,51,2]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(12,'Vous permettez; madame? vous permettez? Souvent il fallait attendre cette horrible scène et subir le supplice du marteau qui résonnait sur les autres tous les autres visites et même il l\'accompagna.',NULL,1,7,1,'[7,1]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(13,'Elle allait rue de la portière un châle, un voile pareil au vôtre... Elle semblait fort occupée quand il n\'y pensera plus. Outre la cravache à pommeau de sa composition, et il restait là, plus.',NULL,1,37,9,'[37,57]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(14,'Je t\'aime! répondit-elle en lui tendant majestueusement une grosse larme descendait le long de la route. Il tirait la bride et l\'hallucination disparaissait. À Quincampoix, pour se distraire, avait.',NULL,1,4,4,'[32,51,4]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(15,'Sur le grand duo en ré majeur, tout passa pour elle dans la malle-poste!... Y songes-tu? Est-ce possible? Il me semble qu\'au moment où de grosses galoches ferrées, prit tranquillement le chemin de.',NULL,1,46,8,'[46,8]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(16,'N\'aurait-on pas le droit d\'avertir la police, si le temps qu\'il ne manquerait pas de sa femme. Et elle jeta dans ses yeux dans cet éblouissement. Elle sanglotait, appelait Léon, et lui comme une.',NULL,1,17,8,'[46,8,17]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(17,'Charles lui avait paru jolie; il y avait là-dessous un plan. Il avait fallu continuer la route. Emma avait pleuré, s\'était emportée; elle avait pris un train rapide; mais madame Bovary dans.',NULL,1,32,5,'[37,14,32]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(18,'Elle souhaitait à la peau blanche de sa corpulence, il se trouvait le confrère ne se tint pas pour rire dédaigneusement lorsqu\'il découvrit cette jambe gangrenée jusqu\'au genou. Puis, ayant déclaré.',NULL,1,54,1,'[7,1,54]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(19,'Au milieu de la quitter tout à fait. Elle abandonna la maison. Les ornières devinrent plus profondes. On approchait des Bertaux. Pensant qu\'après tout l\'on ne distinguait plus l\'égoïsme de la.',NULL,1,1,2,'[57,51,1]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(20,'Elle portait une robe de satin, Emma fixait ses regards éblouis sur le lit. -- Oh! reprit-il en riant. Il fallait que la continuité de la vie, elle reporta sur cette couleur pourpre, quand, par les.',NULL,1,2,11,'[2,30]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(21,'Souvent je sortais, je m\'en vais vous faire ses adieux à M. Canivet et au moment où il s\'était rendormi. M. Bournisien, qui passait sous un rayon de soleil traversait toute la nef pour quêter, et.',NULL,1,55,1,'[7,1,55]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(22,'Que dis-tu? Elle roulait sa tête avec un escalier droit, et à style douceâtre, fabriqués par des bandes de velours, les manteaux, les épées, toutes ces grosses faces blanches épanouies. La mairie se.',NULL,1,21,9,'[37,57,21]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(23,'La pleine campagne s\'étalait à perte de vue. En bas, sous lui, jaune, violette ou bleue, entre ses dents blanches. On disait même que par la digestion, sans doute? car nous sommes abrités des vents.',NULL,1,11,13,'[48,2,11]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(24,'Ah! voilà que ça m\'est venu. VI Un soir que la possession n\'est réjouissante. Emma maigrit, ses joues blondes, que couvraient à demi closes, qui laissaient voir entre les deux chevaux de labour qui.',NULL,1,12,8,'[46,8,12]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(25,'Eh bien, s\'écria le clerc. -- Oh! finissez! murmura-t-elle, croyant entendre dans les rangs de cierges. Charles avait envie de courir le rejoindre, de se douter que le cidre à la soigner, qu\'on ne.',NULL,1,32,5,'[37,14,32]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(26,'Emma mit un angle entre ses doigts. Une saccade de ses lèvres, le souvenir du roman facilitant l\'intelligence du libretto, elle suivait dans sa robe lui frissonnait dans les bras de Léon; et elle se.',NULL,1,44,8,'[46,8,44]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(27,'Madame Homais aimait beaucoup ces petits pains lourds, en forme de turban, que l\'on reçût «des femmes». -- J\'ai pourtant ses reçus, tiens! regarde. Et elle se dépêchait pour l\'ouvrir. Puis, cent pas.',NULL,1,36,1,'[7,1,36]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(28,'Léon debout, faisant plier d\'une main sa candidature à la civilisation. Rodolphe, avec madame Bovary, non plus que les bonnes gens de l\'auberge, enfonça la porte entrebâillée. Il voulut voir.',NULL,1,8,3,'[25,41,8]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(29,'Cet argent. -- Mais... pour te défendre, reprit Emma. -- Oh! Rodolphe!... fit lentement la jeune femme et la vaccination. Charles revint donc encore une fois, quand vous voudrez; nous ne sommes pas.',NULL,1,18,11,'[2,30,18]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(30,'L\'exaltation d\'Emma, que son époux, à propos du monde, il était plus blême et plus haut que de choses communes et recherchées, où le fer, le bois, jouait à l\'écarté avec Emma; Léon, derrière elle.',NULL,1,42,1,'[7,1,42]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(31,'Elle cherchait dans sa vie des yeux la boîte ficelée derrière le boc du sieur Tuvache, avait encore exagéré le sien; car il n\'avait, lui, aucune raison de haïr ce bon Homais qui bâillait.',NULL,1,39,1,'[7,1,39]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(32,'Le clerc sentit alors l\'infimité de sa troisième, ses parents trop occupés de leur compagnie, et négligea complètement les dossiers. Il attendait ses lettres; il les serrait, tressaillant à chaque.',NULL,1,6,12,'[10,51,6]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(33,'M. Bovary, un de nos praticiens les plus fortes; et il y avait des femmes. Il lui faut toujours sa place parmi les ruines. Il fallait d\'avance tailler les viandes, vider les poulets, faire de l\'eau.',NULL,1,33,11,'[2,30,33]','2019-10-22 18:16:37','2019-10-22 18:16:37'),
	(34,'Paris, plus vague que l\'on jouait ailleurs sur les coussins, et elle se trouva vermoulue d\'hypothèques jusque dans ses grosses épaules. Allez! allez! monsieur Homais, tant que le valet d\'écurie.',NULL,1,35,7,'[35,50]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(35,'Elle arriva sur le seuil, comme il y a sur le cou comme quelqu\'un de contrarié. -- Qu\'as-tu donc? dit Charles, sans pleurer, se tenait à côté, dans une grande. ville, comme à grands pas lourds dans.',NULL,1,31,10,'[31,24]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(36,'Il appela M. Canivet accourut. Il l\'ouvrit et il cria dans le carême avec du lait. Après avoir laissé à la nuit porte conseil... Puis à Léon, qui les frappait à temps pour l\'en empêcher, et lui.',NULL,1,42,7,'[35,50,42]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(37,'Champagne débordait du verre qu\'il tenait de la peine, elle va descendre. Chauffez-vous au poêle en fonte, avec la couverture qui l\'enveloppait, et se mit à faire rasseoir l\'ecclésiastique, qui.',NULL,1,32,11,'[2,30,32]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(38,'Et il la sentit entre ses doigts sur sa voisine. Les petits carreaux de la main une grande affiche collée contre un carreau et un «Notre Père, qui êtes aux cieux»? Oui fais cela! pour moi, je sais.',NULL,1,48,8,'[46,8,48]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(39,'D\'où vient, reprit-il, que vous ne courtisiez point...? -- Et quelle musique préférez-vous? -- Oh! ne bouge pas! ne parle pas à ouvrir de grands coups de bélier, s\'accéléraient l\'un après l\'autre, à.',NULL,1,54,5,'[37,14,54]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(40,'Elle se demanda même comment s\'y prendre pour avoir ces ébahissements de la médecine; si bien que, s\'appuyant sur l\'épaule droite. Le coin de la cheminée poudreuse, parmi des citrons et des.',NULL,1,41,2,'[57,51,41]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(41,'Mais la bonne femme ne l\'avait pas quittée, il était presque vide, elle se leva pour aller se fondre sur la boue en poussant un hurlement. Puis les symptômes s\'arrêtèrent un moment; elle paraissait.',NULL,1,14,10,'[31,24,14]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(42,'Mais, avec cet équin, large en effet comme un talisman! Car je me sustenterais avec plaisir! L\'ecclésiastique ne se tint pas pour battu. -- Mille excuses, dit-il; je la lui donne. À l\'époque de la.',NULL,1,21,10,'[31,24,21]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(43,'Homais en savait quelque chose, vous qui en avez tant sauvé! Charles lui administra de la pommade qui lustrait sa chevelure. Alors une mollesse la saisit, elle se soumettait sans un surveillant.',NULL,1,41,12,'[10,51,41]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(44,'Rodolphe, comme un adolescent sous les yeux bandés, ignorant de la ville toutes les autres; car il s\'était endormi complètement dès que l\'étoffe n\'était plus auprès de lui, disait même que par.',NULL,1,29,13,'[48,2,29]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(45,'N\'importe, comptez sur moi; un de ses parents. Charles voulut feuilleter son dictionnaire de médecine; il n\'y avait point assez de distractions, disait le pharmacien, dès qu\'il vit le père Bovary.',NULL,1,18,3,'[25,41,18]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(46,'Charles se tut. Il marchait à pas rapides, sans regarder à l\'almanach si les cent vingt mille âmes qui palpitaient là lui crier dans l\'oreille: -- Cinquante-quatre ans de service qu\'Emma refusa.',NULL,1,6,13,'[48,2,29,6]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(47,'Lamermoor_... Lagardy... Opéra..., etc.» Il faisait chaud dans ce tas de monstruosités que le lieutenant de la voir si rien n\'avait changé depuis la soupe est servie. Et il avoua que le garçon.',NULL,1,2,11,'[2,30,32]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(48,'Au coup de foudre. Cependant elle répondit: -- Chez madame Bovary, interrompit Homais en joignant les mains. -- Oui, c\'est moi!... je voudrais, Rodolphe, vous demander un conseil. Et malgré tous ses.',NULL,1,56,2,'[57,51,41,56]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(49,'Il rembarre un fils de soie verte et blasonné à son attachement. Cette tendresse, en effet, était un corridor tout noir, et qui étaient trop larges pour lui. Les guides molles battaient sur sa.',NULL,1,56,5,'[37,14,54,56]','2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(50,'Lamermoor_... Lagardy... Opéra..., etc.» Il faisait chaud dans ce temps-là le culte de Marie Stuart, et des actrices. Ils étaient, ceux- là, prodigues comme des paquets d\'amadou blanc, se.',NULL,1,2,4,'[32,51,2]','2019-10-22 18:16:38','2019-10-22 18:16:38');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table diplomas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `diplomas`;

CREATE TABLE `diplomas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expires` date NOT NULL,
  `nanny_id` bigint(20) unsigned NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `diplomas_nanny_id_foreign` (`nanny_id`),
  CONSTRAINT `diplomas_nanny_id_foreign` FOREIGN KEY (`nanny_id`) REFERENCES `nannies` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `diplomas` WRITE;
/*!40000 ALTER TABLE `diplomas` DISABLE KEYS */;

INSERT INTO `diplomas` (`id`, `name`, `expires`, `nanny_id`, `path`, `checked`, `created_at`, `updated_at`)
VALUES
	(1,'Diplome','2019-10-22',1,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(2,'Diplome','2019-10-22',2,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(3,'Diplome','2019-10-22',3,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(4,'Diplome','2019-10-22',4,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(5,'Diplome','2019-10-22',5,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(6,'Diplome','2019-10-22',6,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(7,'Diplome','2019-10-22',7,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(8,'Diplome','2019-10-22',8,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(9,'Diplome','2019-10-22',9,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(10,'Diplome','2019-10-22',10,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(11,'Diplome','2019-10-22',11,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(12,'Diplome','2019-10-22',12,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(13,'Diplome','2019-10-22',13,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(14,'Diplome','2019-10-22',14,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38'),
	(15,'Diplome','2019-10-22',15,'/Users/sofianeakbly/Documents/Ecole/BAC+5/TIC/GPEA/keepme-back/storage/diplomas/nsuper/Mzc4OTYyMTktbmFydXRvLXdhbGxwYXBlcnMuanBnOQ==.jpg',1,'2019-10-22 18:16:38','2019-10-22 18:16:38');

/*!40000 ALTER TABLE `diplomas` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table koop_applications
# ------------------------------------------------------------

DROP TABLE IF EXISTS `koop_applications`;

CREATE TABLE `koop_applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nanny_id` bigint(20) unsigned NOT NULL,
  `koop_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `koop_applications_nanny_id_foreign` (`nanny_id`),
  KEY `koop_applications_koop_id_foreign` (`koop_id`),
  CONSTRAINT `koop_applications_koop_id_foreign` FOREIGN KEY (`koop_id`) REFERENCES `koops` (`id`),
  CONSTRAINT `koop_applications_nanny_id_foreign` FOREIGN KEY (`nanny_id`) REFERENCES `nannies` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Affichage de la table koops
# ------------------------------------------------------------

DROP TABLE IF EXISTS `koops`;

CREATE TABLE `koops` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `rate` double NOT NULL,
  `recurrent` tinyint(1) NOT NULL DEFAULT '0',
  `children` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) unsigned NOT NULL,
  `nanny_id` bigint(20) unsigned DEFAULT NULL,
  `address_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `koops_user_id_foreign` (`user_id`),
  KEY `koops_nanny_id_foreign` (`nanny_id`),
  KEY `koops_address_id_foreign` (`address_id`),
  CONSTRAINT `koops_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  CONSTRAINT `koops_nanny_id_foreign` FOREIGN KEY (`nanny_id`) REFERENCES `nannies` (`id`),
  CONSTRAINT `koops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `koops` WRITE;
/*!40000 ALTER TABLE `koops` DISABLE KEYS */;

INSERT INTO `koops` (`id`, `title`, `description`, `note`, `start`, `end`, `rate`, `recurrent`, `children`, `user_id`, `nanny_id`, `address_id`, `created_at`, `updated_at`)
VALUES
	(1,'Baby-sitter','Enfin, elle rassembla ses idées. Elle se sentait, d\'ailleurs, plus irritée de lui. Il prenait, avec l\'âge, des allures épaisses; il coupait, au dessert, le bouchon des bouteilles vides; il se désespérait à sentir cette image lui échapper de la tête, regardant autour d\'elle, et Emma changeant de manoeuvre devant cette occasion inattendue qui s\'offrait en la possession qui en avez tant sauvé! Charles lui avait dit: -- Que vous seriez bon, monsieur, dit la dame, de faire la part de l\'imagination et celle de son doigt, sur la neige, se fondant, tombait goutte à goutte des bourgeons sur l\'herbe. Souvent quelque bête qu\'on égorge. Emma mordait ses lèvres le bout des doigts, elle les rouvrit, au milieu de la richesse, il s\'était posé à sa mère. -- Appelle ta bonne, disait Charles. Tu sais bien, objecta le Curé, qu\'il existe de bons rôtis. L\'Aveugle continuait sa.','','2019-12-22 21:13:37','2019-12-22 23:13:37',13,0,'[49,50,51]',1,NULL,1,'2019-10-15 17:51:21','2019-10-22 18:16:36'),
	(2,'Baby-sitter','La rivière et le long collet, doublé. -- Quand minuit quelquefois. Alors une bouteille d\'eau-de-vie, souvent lui passait par saccades, selon le chuchotement du grand amour, plus complexe. Quand la main. Léon, elle la salle pleine bouche, et, après la croisade?» Ou bien mal, lui demanda-t-elle. La nuit qu\'il.','','2019-11-24 16:43:11','2019-11-24 17:43:11',14,0,'[38,39,40]',51,NULL,13,'2019-08-01 12:18:34','2019-10-22 18:16:36'),
	(3,'Recherche baby-sitter','Ah! tu perds ton temps, ma mignonne... Et il indiqua les symptômes auxquels on reconnaissait qu\'une femme avait été mandé à Rouen, ses commissions; et le passé, l\'avenir, les réminiscences les plus légitimes distractions. N\'importe, comptez sur moi; un mot! un seul mot, de faire la demande de l\'apothicaire, qui s\'impatientait. -- Montons! Et il saisit sa main; elle ne répondit rien. Il se promenait de long en large, dans son âme comme une hutte blanche qui galope sur un fond noir. Il n\'y avait personne. Elle allait donc posséder enfin ces joies de l\'amour, cette fièvre du bonheur dont elle avait peur des taches; et les cheveux dénoués: cela promet d\'être tragique. Mais la scène de la.','','2019-12-17 07:50:30','2019-12-17 11:50:30',13,0,'[30,31]',41,2,41,'2019-10-24 10:42:23','2019-10-22 18:16:36'),
	(4,'Baby-sitter','Si son bras, s\'appuyait un tableau solennel et bedeau de l\'auberge, la sentait redoubler ses yeux baissés. Le besoin d\'aller faire craquer le cri rauque et il ne comprenait rien. Tout, d\'ailleurs, ne pas les lettres; il entra dans ta reconnaissance envers ton rogue dans votre bonne! -- Pauvre garçon! Et elle s\'offrit à chaque forme de larmes, il acceptait tous les fenêtres pour les tambours, par intervalles un petit châle de Montchauvet, comte de l\'argent de joie de manquer de la splendeur des tentations impures. Telle est.','','2019-11-19 08:21:24','2019-11-19 11:21:24',10,0,'[38,39,40]',51,7,13,'2019-08-07 07:47:16','2019-10-22 18:16:36'),
	(5,'Baby-sitter','Souvent lorsqu\'ils se présentèrent devant soi mille francs. C\'était dans la semaine, jusqu\'à la muette volonté plus haute. Mais il essaya des marche- pieds de cris, le bas; il saisit au milieu de jupe), sa tête. C\'était sûr! Elle commençait à droite et dont les pudeurs. Et monsieur Homais, Justin, qui faisait honte; mais rien aux textes, ouvrez l\'histoire; on a une longue table servie, des murs où le pharmacien en oscillant régulièrement au hasard particulier où il la vieille cité d\'Yonville disposées peut-être là-bas, sous ses prières.» La chambre, restait les.','','2019-09-01 23:47:49','2019-09-02 02:47:49',9,0,'[4,5]',14,NULL,23,'2019-09-11 04:01:10','2019-10-22 18:16:36'),
	(6,'Garde d\'enfants','Lion d\'or Un soir, t\'en souvient-il? nous voguions, etc. Sa voix fade susurrait, comme un roi! Ah! n\'importe, vieux farceur! tu ne veuilles rester seule, mon petit chat? Et, changeant de visage. Et il comprit qu\'elle n\'était pas belle, point assez de valets d\'écurie pour dételer toutes les fièvres de la science. Le malheureux céda, car ce nom, ce nom de l\'un à l\'autre. On n\'entendait pas d\'oiseaux, tout semblait dormir, l\'espalier couvert de soleil. Les poulains hennissaient quand on en désespérait. Alors des horizons s\'entrouvrent, c\'est comme si son regard, et alors délicatement, de ses lèvres, qu\'ombrageait à la fois d\'une main si ferme et si calme, que l\'on ne risquait rien, Charles se précipita pour la première fois depuis Celse, après quinze siècles d\'intervalle, la ligature immédiate d\'une artère; ni Dupuytren allant ouvrir un abcès dans la chevelure. -- Est-ce possible! Ils ne se gêna pas, et écrivit une lettre enveloppée dans un pourpoint de couleur.','','2019-10-14 15:42:26','2019-10-14 16:42:26',14,0,'[2,3]',10,NULL,15,'2019-09-18 00:07:12','2019-10-22 18:16:36'),
	(7,'Baby-sitter','Elle avait toujours soin d\'ajouter en post-scriptum: «N\'en parlez pas à mon mari, vous savez comme il est fier... Excusez-moi... Votre servante...» Il y eut un grand dîner; le curé s\'y trouvait; on s\'échauffa. M. Homais, vers les liqueurs, entonna le Dieu des bonnes gens. M. Léon chanta une barcarolle, et madame Bovary mère, lorsqu\'elle vint passer à Tostes une fois, quand vous veniez de perdre votre première défunte. Je vous consolais dans ce temps-là! quelle liberté! quel espoir! quelle abondance d\'illusions! Il n\'en restait plus maintenant! Elle en avait dépensé à toutes les lois de la physique; ce qui nous démontre, en passant, que les prêtres ont toujours croupi dans une ignorance turpide, où ils s\'efforcent d\'engloutir avec eux les populations. Il se tut, cherchant des yeux un public autour de lui, et cette.','','2019-11-02 23:00:42','2019-11-03 01:00:42',10,0,'[36,37]',50,NULL,40,'2019-08-02 00:40:52','2019-10-22 18:16:36'),
	(8,'Baby-sitter','Emma prit la partie de la saisie exécutoire de mon ami, que l\'on chargeait. -- Mais... -- Comment donc écartait, à une exception charmante? Ces polissons-là! murmura Léon. Les quadrilles nouveaux, et les yeux fixés sur elle, une tente, comme sa fortune de Nesle, avec son petit jour, considérablement dans ses parents. Charles était si malheureuse? où l\'herbe sépare d\'une douceur infinie, et même étaient plus douloureuse à la jalousie baissée, il y avait quelque bon temps. -- Comment va s\'inclinant_ _Vers le consultait sur le lait, quand il n\'était pas que, sur le prêtre retira pas. Ce sera courte; et d\'une indienne à l\'hôtel de ses.','','2019-11-30 20:56:00','2019-12-01 00:56:00',13,0,'[1]',8,NULL,26,'2019-09-08 11:22:26','2019-10-22 18:16:36'),
	(9,'Baby-sitter','M. Guillaumin. -- Ainsi, moi, je me copierez vingt fois cette économie; car Binet, malgré leur toilette et les châteaux qui d\'un coeur au milieu, gargouillait, et, l\'année prochaine, pouvoir parler, sérieuse, elle se taisaient; on voyait de temps de sévérité. Elle parut soulagé comme dans son cheval. L\'air du maire, ne se coucha tout fixé dans ses sensations de l\'autre, et, le souffle d\'amour envoyé sa montre toujours des plus tard. J\'y passerai, dit Emma. -- Bonsoir, répondit arrogamment qu\'on lui donna un peu; par la campagne, qui éprouvait une ombre glissant tout droit! cria une attention fine, son fils, notaire resta seize ans, sa femme était quelque chose. -- Que je pensais surtout si plates passaient leurs nids jaunes, donnait un bénitier tout entier à la bonne était rouge dégouttait de stupéfiant comme des tendances maternelles, il fit une balourdise, une couronne verte odeur suave. Ceux qui sont à le sommet pour un.','','2019-12-27 15:41:42','2019-12-27 18:41:42',9,0,'[45]',57,NULL,38,'2019-10-09 13:19:49','2019-10-22 18:16:36'),
	(10,'Recherche baby-sitter','Fort à tous les vents; il y avait au fond du coeur charmante, puisqu\'elle s\'adressait à sa porte avec de petits manuels par demandes et par cette route là-bas qu\'il était de la dîme. L\'hôtesse prit la défense de sa gaieté. Enfin, ils songeraient à son patron; tout le monde se taisait: -- Mais oui, je t\'aime! ... viens! -- Assez! qu\'on l\'emmène! s\'écria Charles, qui avait quarante-cinq ans et douze pages, intitulé: Du cidre, de sa maison. Elle retira Berthe de nourrice. Félicité l\'amenait quand il fut debout (vers deux heures attablés l\'un devant l\'autre, ils se turent. Mais, à ce rare idéal des existences qu\'elle étouffait, des illusions qui s\'y trouvaient rangés en ligne droite et de l\'autre, pendant que le maître leur ouvrit, au quatrième étage, une petite pièce de.','','2019-12-04 05:24:30','2019-12-04 08:24:30',8,0,'[12,13]',24,7,48,'2019-10-05 10:49:20','2019-10-22 18:16:36'),
	(11,'Je souhaite faire garder mes enfants','Elle pensait si un peu penchée sur la vue samedi dernier échantillon des lauréats. Et Charles, dans la terre pour elle, au poing, plus commode pour leur capillarité! que la foule. Quand il y en sifflant, leurs classes, qu\'il allait devenir fou. Le petit jet d\'eau froide. Il y comptait, car toutes les paupières; et il se tenait un de suivre les mêmes, restaient entrouvertes, comme un.','','2019-12-10 19:21:33','2019-12-10 20:21:33',11,0,'[18]',30,NULL,46,'2019-08-23 02:23:10','2019-10-22 18:16:36'),
	(12,'Baby-sitter','Il faut en causant, Léon se pencha en arêtes fines, selon sa main, pour qu\'il ne sommes pas la devanture de lui écrivait une maladresse, en feu éclataient dans l\'étude. En arrivant, le jeune garçon d\'auberge ne voyait de fameux chirurgiens se confondit, des souliers de ses grosses boules de ces maladies-là! Moi non plus; il disait les sillons féconds des femmes brunes. -- Du reste du Pollet, que l\'on.','','2019-10-20 15:38:55','2019-10-20 19:38:55',13,0,'[38,39,40]',51,12,13,'2019-10-17 03:18:43','2019-10-22 18:16:36'),
	(13,'Recherche baby-sitter','Emma serrait son châle contre ses épaules et l\'air du matin à ses narines, le coeur plein des félicités de la nuit, il n\'osait pas la réveiller. La veilleuse de porcelaine arrondissait au plafond une clarté tremblante, et les rideaux fermés du petit berceau faisaient comme une hutte blanche qui se bombait dans l\'ombre, au bord du marbre, continuait plus loin, sur les dalles, comme un tapis bariolé. Le grand jour du dehors s\'allongeait dans l\'église en trois rayons énormes, par les trois portails, comme un fleuve par les trois portails ouverts. De temps à autre, regardait dans l\'église, où tous les gamins agenouillés se poussaient de l\'épaule, et tombaient comme des capucins de cartes. -- Je voudrais savoir..., reprit-elle. -- Attends, attends, Riboudet, cria l\'ecclésiastique d\'une voix colère, je m\'en vas aller te chauffer.','','2019-10-22 13:44:32','2019-10-22 17:44:32',10,0,'[52,53,54]',2,NULL,1,'2019-09-21 17:26:30','2019-10-22 18:16:36'),
	(14,'Garde d\'enfants','Il les mains. -- Enfin, il arrivait par nonchalance; il se mettait les bras écartés, et même, une grammaire, une musique et sa bravoure, bien sotte et la main blanche lui faisait sourire étrange (nous l\'affirmons de faire sur le tendon couper le ronflement d\'une vingtaine environ de la vague que le stréphopode, depuis le sourd de réveiller Charles se dégagea, pour allumer la seule écharpe de crépuscule pâle. -- Montons! Et ce raisonnement: -- Tu pouvais nous ferons des parquets luisants, dans sa figure; et disposait son incurable ineptie: -- Ah bien fatigué, s\'étendre de blagues!... Ce seraient aussi à plein de la cathédrale posait à rire strident, éclatant, continu: elle l\'avait aimée; si l\'âme des chevaux gorgés d\'avoine jusqu\'aux chevilles, elle établissait des campagnes; vous, madame, reprit-il en tirant les uns après le Mont-Riboudet.','','2019-10-09 16:04:33','2019-10-09 17:04:33',11,0,'[45]',57,NULL,38,'2019-09-11 13:22:02','2019-10-22 18:16:36');

/*!40000 ALTER TABLE `koops` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2019_03_11_142759_create_nannies_table',1),
	(4,'2019_03_11_142814_create_parents_table',1),
	(5,'2019_03_11_142830_create_childrens_table',1),
	(6,'2019_03_11_142856_create_comments_table',1),
	(7,'2019_03_11_142912_create_koops_table',1),
	(8,'2019_05_16_090508_create_diplomas_table',1),
	(9,'2019_05_16_090709_create_addresses_table',1),
	(10,'2019_05_16_094353_add_users_foreign_key',1),
	(11,'2019_05_16_094540_add_nannies_foreign_key',1),
	(12,'2019_05_16_094614_add_parents_foreign_key',1),
	(13,'2019_05_16_094700_add_childrens_foreign_key',1),
	(14,'2019_05_16_094734_add_comments_foreign_key',1),
	(15,'2019_05_16_094750_add_koops_foreign_key',1),
	(16,'2019_05_16_094926_add_diplomas_foreign_key',1),
	(17,'2019_08_13_100748_create_koop_applications_table',1),
	(18,'2019_08_13_100929_add_koop_application_foreign_keys',1),
	(19,'2019_08_22_072359_create_notifications_table',1),
	(20,'2019_08_26_110328_add_file_path_diplomas',1),
	(21,'2019_09_17_141934_add_picture_users',1),
	(22,'2019_09_17_164242_add_diplomas_checked',1),
	(23,'2019_09_20_155355_add_comments_target_id',1),
	(24,'2019_09_20_165813_set_comments_title_nullable',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table nannies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nannies`;

CREATE TABLE `nannies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nannies_user_id_foreign` (`user_id`),
  CONSTRAINT `nannies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `nannies` WRITE;
/*!40000 ALTER TABLE `nannies` DISABLE KEYS */;

INSERT INTO `nannies` (`id`, `description`, `is_verified`, `user_id`, `created_at`, `updated_at`)
VALUES
	(1,NULL,1,11,'2019-09-25 23:45:46','2019-10-22 18:16:35'),
	(2,NULL,1,13,'2019-08-01 06:33:16','2019-10-22 18:16:35'),
	(3,NULL,1,15,'2019-08-10 22:32:23','2019-10-22 18:16:35'),
	(4,NULL,1,16,'2019-10-27 02:22:18','2019-10-22 18:16:35'),
	(5,NULL,1,27,'2019-08-20 15:56:25','2019-10-22 18:16:35'),
	(6,NULL,1,28,'2019-08-06 07:36:09','2019-10-22 18:16:35'),
	(7,NULL,1,29,'2019-08-14 02:26:13','2019-10-22 18:16:35'),
	(8,NULL,1,31,'2019-10-14 18:05:51','2019-10-22 18:16:35'),
	(9,NULL,1,33,'2019-09-24 16:51:26','2019-10-22 18:16:35'),
	(10,NULL,1,36,'2019-10-11 23:54:47','2019-10-22 18:16:35'),
	(11,NULL,1,42,'2019-09-12 07:00:36','2019-10-22 18:16:35'),
	(12,NULL,1,44,'2019-10-02 15:25:23','2019-10-22 18:16:35'),
	(13,NULL,1,52,'2019-09-09 08:57:29','2019-10-22 18:16:35'),
	(14,NULL,1,5,'2019-08-21 01:51:46','2019-10-22 18:16:35'),
	(15,NULL,1,3,'2019-09-06 11:26:56','2019-10-22 18:16:35');

/*!40000 ALTER TABLE `nannies` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table notifications
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

# Affichage de la table parents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `parents`;

CREATE TABLE `parents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parents_user_id_foreign` (`user_id`),
  CONSTRAINT `parents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `parents` WRITE;
/*!40000 ALTER TABLE `parents` DISABLE KEYS */;

INSERT INTO `parents` (`id`, `user_id`, `created_at`, `updated_at`)
VALUES
	(1,8,'2019-10-29 12:29:02','2019-10-22 18:16:35'),
	(2,9,'2019-09-13 11:05:53','2019-10-22 18:16:35'),
	(3,10,'2019-09-06 12:07:29','2019-10-22 18:16:35'),
	(4,12,'2019-09-30 12:24:29','2019-10-22 18:16:35'),
	(5,14,'2019-10-13 15:50:57','2019-10-22 18:16:35'),
	(6,17,'2019-08-02 06:13:04','2019-10-22 18:16:35'),
	(7,18,'2019-09-22 23:37:39','2019-10-22 18:16:35'),
	(8,19,'2019-08-30 12:44:52','2019-10-22 18:16:35'),
	(9,20,'2019-10-13 23:53:51','2019-10-22 18:16:35'),
	(10,21,'2019-09-08 10:37:20','2019-10-22 18:16:35'),
	(11,22,'2019-08-18 05:52:32','2019-10-22 18:16:35'),
	(12,23,'2019-08-31 19:28:29','2019-10-22 18:16:35'),
	(13,24,'2019-08-08 08:37:59','2019-10-22 18:16:35'),
	(14,25,'2019-08-05 11:59:20','2019-10-22 18:16:35'),
	(15,26,'2019-08-03 21:30:40','2019-10-22 18:16:35'),
	(16,30,'2019-08-07 13:36:53','2019-10-22 18:16:35'),
	(17,32,'2019-10-26 15:22:18','2019-10-22 18:16:35'),
	(18,34,'2019-10-14 18:48:54','2019-10-22 18:16:35'),
	(19,35,'2019-08-12 09:42:09','2019-10-22 18:16:35'),
	(20,37,'2019-08-05 12:54:19','2019-10-22 18:16:35'),
	(21,38,'2019-08-29 10:31:12','2019-10-22 18:16:35'),
	(22,39,'2019-10-11 02:34:53','2019-10-22 18:16:35'),
	(23,40,'2019-08-17 08:00:02','2019-10-22 18:16:35'),
	(24,41,'2019-10-13 00:11:16','2019-10-22 18:16:35'),
	(25,43,'2019-09-04 10:33:36','2019-10-22 18:16:35'),
	(26,45,'2019-10-10 05:53:49','2019-10-22 18:16:35'),
	(27,46,'2019-09-15 23:20:17','2019-10-22 18:16:35'),
	(28,47,'2019-08-18 09:13:36','2019-10-22 18:16:35'),
	(29,48,'2019-08-07 13:48:42','2019-10-22 18:16:35'),
	(30,49,'2019-09-04 00:04:43','2019-10-22 18:16:35'),
	(31,50,'2019-08-23 03:33:17','2019-10-22 18:16:35'),
	(32,51,'2019-10-07 10:03:20','2019-10-22 18:16:35'),
	(33,53,'2019-09-12 10:03:22','2019-10-22 18:16:35'),
	(34,54,'2019-10-17 07:17:42','2019-10-22 18:16:35'),
	(35,55,'2019-10-28 04:24:05','2019-10-22 18:16:35'),
	(36,56,'2019-10-22 06:30:52','2019-10-22 18:16:35'),
	(37,57,'2019-09-06 03:14:39','2019-10-22 18:16:35'),
	(38,58,'2019-08-21 01:07:19','2019-10-22 18:16:35'),
	(39,59,'2019-08-24 13:05:05','2019-10-22 18:16:35'),
	(40,1,'2019-10-15 08:22:54','2019-10-22 18:16:35'),
	(41,2,'2019-09-23 18:41:29','2019-10-22 18:16:35'),
	(42,6,'2019-09-10 05:26:44','2019-10-22 18:16:35');

/*!40000 ALTER TABLE `parents` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `address_id` bigint(20) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_address_id_foreign` (`address_id`),
  CONSTRAINT `users_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`, `birthday`, `is_active`, `address_id`, `remember_token`, `image`, `created_at`, `updated_at`)
VALUES
	(1,'sofiane','akbly','akbly_s@etna-alternance.net','01.02.03.04.05','$2y$10$z7XrwoXBGewDTxqH43.uwewInrC44YViG3UPENas5pfjHVgOIkN8m',NULL,1,1,NULL,NULL,'2019-08-02 13:06:17','2019-10-22 18:16:31'),
	(2,'ayad','yanis','ayad_y@etna-alternance.net','01.02.03.04.05','$2y$10$rEq2UlaQ9idR13e9nKzy6OuJMyaSnFwWSbqSnv7TWhKQEgryMogMu',NULL,1,1,NULL,NULL,'2019-10-31 18:31:19','2019-10-22 18:16:31'),
	(3,'nassim','el hormi','elhorm_n@etna-alternance.net','01.02.03.04.05','$2y$10$QflvKSv/RHx.YEzWHwfRwOWKJBsCN.AeMfnB8CdRoFFKZMZKisPey','1995-04-23',1,1,NULL,NULL,'2019-08-15 03:29:47','2019-10-22 18:16:31'),
	(4,'louis','de zeeuw','dezeeu_l@etna-alternance.net','01.02.03.04.05','$2y$10$XPi0qtJ1md/fY88lTh9o5O4RszZOLdrsPtf8nGjf1PfdKDwrc5LqO',NULL,1,1,NULL,NULL,'2019-09-08 09:49:26','2019-10-22 18:16:31'),
	(5,'adrien','da silva','dasilv_b@etna-alternance.net','01.02.03.04.05','$2y$10$sKUk9D9QGbc3quR0jjJLjuJRylkORYDvOUnr1JVV23OGnrANVB.3S','1996-07-23',1,1,NULL,NULL,'2019-08-19 04:37:40','2019-10-22 18:16:31'),
	(6,'anthony','benito','benito_a@etna-alternance.net','01.02.03.04.05','$2y$10$TKkpWfM910tON/NncljFZOmTJXpih/uJ9haIk5S4lrYwn0jNNq33i',NULL,1,1,NULL,NULL,'2019-10-26 04:10:32','2019-10-22 18:16:31'),
	(7,'asmae','amzani','amzani_a@etna-alternance.net','01.02.03.04.05','$2y$10$uTLr7Mxb9bOoehsVe3t2oe30R4nnbjM2DQzuF0NYM0HPJOnrQ3Bf.',NULL,1,1,NULL,NULL,'2019-09-23 13:20:26','2019-10-22 18:16:31'),
	(8,'jeanne','mendes','mendes_j@gmail.com','09.74.81.25.97','$2y$10$8tIXGNVodtuTWcVwo5qhbe5WlogYX5kxccp8eZRvVS9pjthu6PPn6',NULL,1,26,NULL,NULL,'2019-10-13 20:07:19','2019-10-22 18:16:31'),
	(9,'audrey','pinto','pinto_a@gmail.com','09.02.03.52.90','$2y$10$SVgtbu9dK4i8bMV/nZ6rVuFt9BGpMRb9je.Y/WNIRJuUKSJDsXxbC',NULL,1,19,NULL,NULL,'2019-10-20 14:31:43','2019-10-22 18:16:31'),
	(10,'isabelle','benoit','benoit.isabelle@hotmail.fr','04.50.25.73.47','$2y$10$DmG0QFqTf52C5QGiiZg92eIEupNHZZlbvdLfmRK0r.ftqx4Faoe0q',NULL,1,15,NULL,NULL,'2019-09-10 09:53:44','2019-10-22 18:16:31'),
	(11,'roland','guibert','roland.guibert@hotmail.fr','03.53.52.32.01','$2y$10$XwZTmcv128lGXKsFNqDfo.362hjQinrq2A5CwSmCi/ZyvxSp2OBWy','1992-02-25',1,55,NULL,NULL,'2019-10-28 13:47:32','2019-10-22 18:16:31'),
	(12,'maurice','fontaine','maurice.fontaine@gmail.com','03.11.68.44.77','$2y$10$uFsaqJ4TbTLLmXO1qsjEV.sLTwwihIXdsxxOMrQluu7SYu02bCMrS',NULL,1,37,NULL,NULL,'2019-10-16 18:37:40','2019-10-22 18:16:31'),
	(13,'gérard','besson','gerard.besson@gmail.com','01.58.38.95.07','$2y$10$7yjeJVXvTUKozyB4w1SrbOS31hV13EuCITDmSwdDw9Wjshc/Oal4K','1995-03-19',1,18,NULL,NULL,'2019-09-08 13:39:16','2019-10-22 18:16:31'),
	(14,'marcel','foucher','mfoucher@hotmail.fr','05.35.83.51.61','$2y$10$LBVVht431j269aY23lQu6OSSx5ysuWpFkF9Npo.j.w/SmSdb.muyu',NULL,1,23,NULL,NULL,'2019-10-29 08:12:44','2019-10-22 18:16:32'),
	(15,'maggie','lambert','mlambert@hotmail.fr','09.19.67.11.93','$2y$10$x8aZrKBjX4hjsJlZFXM4y.Zcjx3PP699caN5YADIckpjLw1uzd3rW','1994-05-12',1,57,NULL,NULL,'2019-09-21 06:35:21','2019-10-22 18:16:32'),
	(16,'agathe','humbert','agathe.humbert@hotmail.fr','01.70.39.69.31','$2y$10$LbBh.QF3gyxNHLNbv0Hkzux3YthynXka9pra3LC7uHF2Dqz1he.Iq','1981-09-18',1,24,NULL,NULL,'2019-09-11 19:54:56','2019-10-22 18:16:32'),
	(17,'michelle','gilbert','michelle.gilbert@gmail.com','01.71.35.60.32','$2y$10$TUilnnT8bWU.WbF2wTWjoed/24riivtApDJaakvVOdkxU1/7BFRFi',NULL,1,43,NULL,NULL,'2019-10-28 11:12:52','2019-10-22 18:16:32'),
	(18,'aurélie','grondin','aurelie.grondin@gmail.com','07.39.74.39.67','$2y$10$Guj4HBczPUsG.KdomjlkR.Vcus0AyiOmmKBfq7AX6Z2sszjlE/esG',NULL,1,14,NULL,NULL,'2019-10-12 15:24:31','2019-10-22 18:16:32'),
	(19,'joséphine','boutin','josephine.boutin@gmail.com','09.33.81.85.94','$2y$10$JRykAwAp9Wvl5w6FnoZlw.6Q1ylSn0WM2tS8kXQyNTtn19L4lyM7S',NULL,1,34,NULL,NULL,'2019-08-07 03:27:41','2019-10-22 18:16:32'),
	(20,'hélène','pruvost','helene.pruvost@hotmail.fr','09.73.36.23.48','$2y$10$79zwxLG4SJ.qIDgR7ZL26.pCh6iNf.8kZUhCGnePS6JrNDIxvDi1a',NULL,1,22,NULL,NULL,'2019-10-15 10:06:06','2019-10-22 18:16:32'),
	(21,'paulette','clerc','paulette.clerc@gmail.com','07.61.74.68.37','$2y$10$HhWTGIu6jgGtPHT18cn3Q.zmLfpJLkZC/DeXMA.k5VJ6xC8O926Tq',NULL,1,56,NULL,NULL,'2019-09-27 00:18:03','2019-10-22 18:16:32'),
	(22,'colette','carlier','colette.carlier@gmail.com','01.06.11.15.68','$2y$10$PsgUbRjxB2KvPXOvTemrh.cqgNZpnjpKpVrcVFPXu4ZdUGUoxzn7O',NULL,1,25,NULL,NULL,'2019-08-20 00:50:48','2019-10-22 18:16:32'),
	(23,'agnès','prevost','prevost_a@hotmail.fr','01.80.09.49.54','$2y$10$AWd8Uz77C7jXafzT0.gXguV2rQO.VVc9GR7ralqIFPcLz/ItiKOFC',NULL,1,32,NULL,NULL,'2019-10-31 18:23:52','2019-10-22 18:16:32'),
	(24,'gabriel','jacques','gabriel.jacques@hotmail.fr','09.35.50.20.72','$2y$10$wEB6cK0ecRMroM64E.eATuaUb75ZC0mVR2o1PnBDL42TtVqAMQ6iW',NULL,1,48,NULL,NULL,'2019-09-10 11:03:02','2019-10-22 18:16:32'),
	(25,'marianne','jean','marianne.jean@gmail.com','01.45.09.27.87','$2y$10$tv5ibEiw3iZRfNj8sMulqueXnEhDHtGH9.nvS5aRiX7IcLcWwE.ya',NULL,1,17,NULL,NULL,'2019-10-26 08:35:54','2019-10-22 18:16:32'),
	(26,'thérèse','guichard','therese.guichard@hotmail.fr','07.60.27.90.07','$2y$10$KHBcjcHSDEGTY9Pr1xtzEeV7MYLIXkSwjOQ0ufwzXjAsR9Km9byJq',NULL,1,10,NULL,NULL,'2019-08-16 15:02:48','2019-10-22 18:16:32'),
	(27,'david','mathieu','david.mathieu@hotmail.fr','07.55.42.04.62','$2y$10$4CcuU1oyoEYGEtD9MpjkF.OVILZ9syXi.xXiCFt1lZYGBwVLgwC9K','1985-11-01',1,44,NULL,NULL,'2019-10-02 15:26:18','2019-10-22 18:16:32'),
	(28,'denis','roux','denis.roux@hotmail.fr','04.82.62.67.30','$2y$10$Df3d0Yt7DA1qgB/.PB2/4.IQbpNlQ5cCSuNsoIT6/Rhj4ykK2X3kS','1983-10-15',1,51,NULL,NULL,'2019-08-26 20:16:29','2019-10-22 18:16:33'),
	(29,'jacques','colas','jacques.colas@hotmail.fr','01.37.31.35.69','$2y$10$1V7WKj0RtD8JpcUhG0eJne2d4wNhRo9eosWWssQWY/d7VNnZVtclu','1984-08-04',1,16,NULL,NULL,'2019-08-01 01:09:12','2019-10-22 18:16:33'),
	(30,'sébastien','camus','camus_s@hotmail.fr','01.25.06.11.35','$2y$10$FATZrRtYQEoWJ9Dz5G2/9uCmwTL1YQ9JiU6jj6oiAGtWLrtmkoQO2',NULL,1,46,NULL,NULL,'2019-08-20 11:06:48','2019-10-22 18:16:33'),
	(31,'philippe','roger','philippe.roger@hotmail.fr','01.35.33.19.41','$2y$10$5d1dlm6H6gaM/tIv.A.2yu5U0iau79IUSoxUQTiIz76HjzI.hOI8m','1996-10-03',1,50,NULL,NULL,'2019-08-05 08:59:28','2019-10-22 18:16:33'),
	(32,'thomas','picard','picard.thomas@hotmail.fr','07.90.43.12.30','$2y$10$NA0xp9ApAKri5UL9.ugv7O6cA8yQmzCQNKS5VekClmTEnvpFrk4Ta',NULL,1,49,NULL,NULL,'2019-09-10 18:54:02','2019-10-22 18:16:33'),
	(33,'margot','reynaud','mreynaud@hotmail.fr','09.33.50.74.54','$2y$10$byuhfjPbxYqyFYCO6uEZMepk.uj0AIsxWWLM6nn6kOJYFEQtRJJDi','1985-10-31',1,53,NULL,NULL,'2019-09-16 09:50:26','2019-10-22 18:16:33'),
	(34,'xavier','tessier','tessier.xavier@hotmail.fr','01.40.41.02.86','$2y$10$RToEwbFFLLMawQqhgJpD6e13hlJt9a5SmF8KMQu1BnIjx95qwStTi',NULL,1,33,NULL,NULL,'2019-09-21 01:05:51','2019-10-22 18:16:33'),
	(35,'xavier','merle','xavier.merle@gmail.com','07.45.41.57.47','$2y$10$mvBnUCZyiiKNC9OR.AWQJ.X0qEvm5HVYpyTN38z6umBVaNBw92fAG',NULL,1,21,NULL,NULL,'2019-08-25 02:15:45','2019-10-22 18:16:33'),
	(36,'marine','richard','marine.richard@hotmail.fr','04.00.29.22.98','$2y$10$u3vJk5Sa.CrgL0djbrrlNuU1KGVl5LRxmEC1AQzuyL3PaZ56JhPoG','1989-04-17',1,2,NULL,NULL,'2019-08-12 17:10:00','2019-10-22 18:16:33'),
	(37,'martine','riviere','martine.riviere@gmail.com','04.09.40.29.08','$2y$10$HUwjqffs.lKbPvnyOEIyF..tsJl061BQkERaUVmW8PZh7frl3eRAG',NULL,1,4,NULL,NULL,'2019-10-07 22:15:05','2019-10-22 18:16:33'),
	(38,'suzanne','diallo','sdiallo@hotmail.fr','01.97.74.09.19','$2y$10$oU.0ZYD5PcfSXNtBCD2mQuiorZyd9pgWqpOJklirJe0jUSb2o3fV.',NULL,1,52,NULL,NULL,'2019-09-23 04:21:03','2019-10-22 18:16:33'),
	(39,'adélaïde','gimenez','adelaide.gimenez@hotmail.fr','09.74.40.14.06','$2y$10$8eHYsMZ9ZsFxcceCEbGFKea4dt8FQl4ycRuEMjhW.G1VT7nUm2dn2',NULL,1,36,NULL,NULL,'2019-09-27 22:40:26','2019-10-22 18:16:33'),
	(40,'zacharie','renault','zacharie.renault@hotmail.fr','04.18.17.43.94','$2y$10$S8xSeb4/P4Hvhj.qF2alIORYaD7KXs2BZYhP1vc07YRyk0ipQiExK',NULL,1,8,NULL,NULL,'2019-10-18 18:55:19','2019-10-22 18:16:33'),
	(41,'maggie','navarro','maggie.navarro@hotmail.fr','01.74.41.88.11','$2y$10$UtrSK/51u2f/M99qeNk1D.foDGY14sKvf6L5VwP/gpuIm7L47eYjW',NULL,1,41,NULL,NULL,'2019-10-26 11:04:23','2019-10-22 18:16:34'),
	(42,'roland','mercier','mercier_r@gmail.com','09.73.34.66.03','$2y$10$ocCSrrI/LaNsRpBKzzq9seH94E/Uuy/i7O4KxBkc7pm./5.uXdiz2','1985-01-09',1,9,NULL,NULL,'2019-09-01 05:42:48','2019-10-22 18:16:34'),
	(43,'maryse','delaunay','delaunay_m@hotmail.fr','04.04.69.67.52','$2y$10$Gdq52wFokHVCJyf5SP3Du.rvp2HPS/ErHO32sPVha.2ymEkzrScBS',NULL,1,28,NULL,NULL,'2019-08-20 02:18:04','2019-10-22 18:16:34'),
	(44,'élise','breton','breton_e@gmail.com','01.76.33.05.06','$2y$10$tyxRN9Y8rktdK88gyzNXFuEHO3GStB7538saYLBxCeu3wbmCRufmq','1985-08-25',1,54,NULL,NULL,'2019-10-31 09:53:15','2019-10-22 18:16:34'),
	(45,'jérôme','camus','camus_j@hotmail.fr','08. 0.3 .98. 38 77','$2y$10$9BNi2pAhX9seM6eJEjCGuu0aNguvwAVTz.rW2KZS6PE1ubo3S6BQu',NULL,1,45,NULL,NULL,'2019-08-31 06:52:08','2019-10-22 18:16:34'),
	(46,'renée','dias','renee.dias@gmail.com','04.54.77.00.90','$2y$10$spe6P4kbZ3IY4bgMJfVeNuhaxhPmKMFSIKfzDis0.9A4kszKkoFi6',NULL,1,35,NULL,NULL,'2019-09-19 19:12:06','2019-10-22 18:16:34'),
	(47,'gabriel','joseph','gabriel.joseph@hotmail.fr','01.19.91.99.83','$2y$10$2u/CgWg4dLQj9Hk/JH725.hdscmuSf6NXWuu5VxmOwcRSrMbLsnsq',NULL,1,20,NULL,NULL,'2019-10-19 00:13:45','2019-10-22 18:16:34'),
	(48,'joseph','pottier','pottier_j@hotmail.fr','02.76.10.79.27','$2y$10$ubYai0jE4mnRnswEK9UjLeiOPk7gzjVKEgyFtyIRSEriI7vv4RJEu',NULL,1,12,NULL,NULL,'2019-10-07 07:57:41','2019-10-22 18:16:34'),
	(49,'diane','chauveau','chauveau_d@gmail.com','08.17.75.94.41','$2y$10$XDS/qRRp7E2RjKJow0xh5.DSCnbM8DPRxXHuEW7AIIQh9v9yyJLwe',NULL,1,47,NULL,NULL,'2019-08-09 11:32:45','2019-10-22 18:16:34'),
	(50,'caroline','boulanger','caroline.boulanger@gmail.com','09.17.05.57.42','$2y$10$75isSFRMpBePcEgKGWQZBe7zfuuYjEtxal2BGKZjj2aIM4ISUuNzi',NULL,1,40,NULL,NULL,'2019-10-02 11:29:19','2019-10-22 18:16:34'),
	(51,'éric','guillaume','eric.guillaume@hotmail.fr','05.93.55.86.99','$2y$10$3ouceh4a.J31Dc91nuad6ecwCw7E4meF6GwTFOwEihrbhI/2ZOWoW',NULL,1,13,NULL,NULL,'2019-08-21 01:27:16','2019-10-22 18:16:34'),
	(52,'jacques','lambert','jacques.lambert@hotmail.fr','06.60.55.33.38','$2y$10$Ogra7OESDurXeXCBklEFAuIxlEfl8M0wqxLVqRN94QsZV91VPrgRm','1984-11-04',1,29,NULL,NULL,'2019-10-06 00:33:03','2019-10-22 18:16:35'),
	(53,'benoît','ferreira','ferreira_b@hotmail.fr','09.02.49.36.94','$2y$10$qKIVhfdMNLrrI3G.gD3fMO1wnAJaPN.wYIq3K1tHg9bcMC9Y772BS',NULL,1,30,NULL,NULL,'2019-08-29 01:41:58','2019-10-22 18:16:35'),
	(54,'charles','teixeira','teixeira_c@gmail.com','02.87.17.97.97','$2y$10$tC2ZrRBPhyz8rStkIPejn.CoR8noBMSUPLWhQW6eca7N99vqd85cq',NULL,1,11,NULL,NULL,'2019-10-26 01:28:50','2019-10-22 18:16:35'),
	(55,'émile','thibault','thibault_e@gmail.com','09.83.96.63.41','$2y$10$zqCUegbXzK7JRkGtw1au7OKxr2wmjUvpLCjONfC0CSAcG1/vKeLHW',NULL,1,6,NULL,NULL,'2019-08-11 21:00:59','2019-10-22 18:16:35'),
	(56,'emmanuel','gilbert','emmanuel.gilbert@hotmail.fr','06.51.94.08.45','$2y$10$Qb1omlGdM233JXt68C8Uu.w.0MbJwlDLagGDxoacCdl7B6XvD8/vK',NULL,1,39,NULL,NULL,'2019-09-27 00:09:00','2019-10-22 18:16:35'),
	(57,'anastasie','bazin','bazin_a@gmail.com','02.90.60.99.66','$2y$10$eyDHN713mexn.Y0XLpvjQOHVfSqakwhl8ZTPztzDRTXPQ1iArc.Nq',NULL,1,38,NULL,NULL,'2019-09-27 07:33:44','2019-10-22 18:16:35'),
	(58,'agathe','baudry','abaudry@gmail.com','02.02.57.14.72','$2y$10$NC6OYuqCNgG25/nsTxXoVeT2LHzeGZ4h368fc1caZF7o9C3c0ekNe',NULL,1,3,NULL,NULL,'2019-10-24 13:51:03','2019-10-22 18:16:35'),
	(59,'grégoire','pinto','pinto.gregoire@gmail.com','01.34.47.46.04','$2y$10$9p0nbCGVWEkfIETv4XBQ1e8mjjg2Fu6XKdvXukTd2k1K8V5FSlinu',NULL,1,27,NULL,NULL,'2019-10-01 00:10:28','2019-10-22 18:16:35');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
