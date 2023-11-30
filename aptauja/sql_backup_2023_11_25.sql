-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `aptauja`;
CREATE TABLE `aptauja` (
  `vieta` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `atb_1` mediumint(4) NOT NULL,
  `atb_2` mediumint(4) NOT NULL,
  `atb_3` mediumint(4) NOT NULL,
  `atb_4` mediumint(4) NOT NULL,
  `moment` varchar(50) NOT NULL,
  `ip_adrese` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `aptauja` (`vieta`, `atb_1`, `atb_2`, `atb_3`, `atb_4`, `moment`, `ip_adrese`) VALUES
('Rimi',	1,	0,	0,	0,	'24.11 10:41:29',	'87.226.12.212'),
('Rimi',	0,	0,	0,	1,	'24.11 10:42:54',	'87.226.12.212'),
('Rimi',	0,	1,	0,	0,	'24.11 11:06:32',	'87.226.12.212'),
('Rimi',	0,	1,	0,	0,	'24.11 11:06:36',	'87.226.12.212'),
('Rimi',	0,	0,	1,	0,	'24.11 11:07:14',	'87.226.12.212'),
('Rimi',	0,	0,	1,	0,	'24.11 11:07:18',	'87.226.12.212'),
('Rimi',	0,	0,	1,	0,	'24.11 11:07:22',	'87.226.12.212'),
('Mego',	1,	0,	0,	0,	'24.11 11:08:08',	'87.226.12.212'),
('Mego',	0,	1,	0,	0,	'24.11 11:08:13',	'87.226.12.212'),
('Mego',	0,	1,	0,	0,	'24.11 11:08:17',	'87.226.12.212'),
('Mego',	0,	0,	1,	0,	'24.11 11:08:21',	'87.226.12.212'),
('Mego',	0,	0,	1,	0,	'24.11 11:08:25',	'87.226.12.212'),
('Mego',	0,	0,	1,	0,	'24.11 11:08:32',	'87.226.12.212'),
('Mego',	0,	0,	0,	1,	'24.11 11:08:37',	'87.226.12.212'),
('Mego',	0,	0,	0,	1,	'24.11 11:08:41',	'87.226.12.212'),
('Mego',	0,	0,	0,	1,	'24.11 11:08:45',	'87.226.12.212'),
('Mego',	0,	0,	0,	1,	'24.11 11:08:49',	'87.226.12.212'),
('Rimi',	0,	0,	0,	1,	'24.11 11:31:32',	'87.226.12.212'),
('Rimi',	0,	0,	0,	1,	'24.11 11:31:43',	'87.226.12.212'),
('Rimi',	0,	0,	0,	1,	'24.11 11:31:48',	'87.226.12.212'),
('0',	0,	1,	0,	0,	'24.11 22:09:11',	'87.226.12.212'),
('0',	1,	0,	0,	0,	'25.11 14:32:14',	'87.226.12.212'),
('Mego 1',	0,	0,	1,	0,	'25.11 14:36:26',	'87.226.12.212'),
('Mego 1',	0,	1,	0,	0,	'25.11 14:36:49',	'87.226.12.212'),
('Mego 1',	0,	1,	0,	0,	'25.11 14:36:57',	'87.226.12.212');

-- 2023-11-25 12:46:35