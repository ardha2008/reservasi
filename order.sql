# Host: localhost  (Version: 5.5.32)
# Date: 2014-06-23 19:22:35
# Generator: MySQL-Front 5.3  (Build 4.100)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "order"
#

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT '0000-00-00',
  `status_bayar` varchar(1) NOT NULL DEFAULT '0' COMMENT '0 = belum , 1 = lunas',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "order"
#

INSERT INTO `order` VALUES (0000001,'Ardha Herdianto','Perumahan Surabaya','089677052285','ardha2008@gmail.com','2014-06-23','0'),(0000002,'Budi','asdkjaskldjaklsdj','932472384729834','budi@gmail.com','2014-06-24','0');
