SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;
DROP DATABASE IF EXISTS `ctftraining`;


DROP DATABASE IF EXISTS `users`;
CREATE DATABASE users;
USE users;


DROP TABLE IF EXISTS `user`;
CREATE TABLE user (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(50) NOT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `user` (username,password) values('admin',MD5(RAND()*10000));


DROP TABLE IF EXISTS `admin`;
CREATE TABLE admin (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(50) NOT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `admin` (username,password) values('cl4y','http://www.cl4y.top/');
INSERT INTO `admin` (username,password) values('admin0','00000000');
INSERT INTO `admin` (username,password) values('admin1','11111111');
INSERT INTO `admin` (username,password) values('admin2','22222222');
INSERT INTO `admin` (username,password) values('admin3','33333333');
INSERT INTO `admin` (username,password) values('admin4','44444444');
INSERT INTO `admin` (username,password) values('admin5','55555555');
INSERT INTO `admin` (username,password) values('admin6','66666666');
INSERT INTO `admin` (username,password) values('admin7','77777777');
INSERT INTO `admin` (username,password) values('flag','flag{14004002-ea45-12d3-89b6-4367266e4555}');

SET FOREIGN_KEY_CHECKS = 1;
