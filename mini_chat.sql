-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 21 oct. 2018 à 14:16
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `mini_chat`
--

DROP TABLE IF EXISTS `mini_chat`;
CREATE TABLE IF NOT EXISTS `mini_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_creation` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mini_chat`
--

INSERT INTO `mini_chat` (`id`, `pseudo`, `message`, `date_creation`) VALUES
(1, '   fra  ', 'gg', NULL),
(2, '    fra   ', 'dgxg', NULL),
(3, 'hugo    ', 'fgf', NULL),
(4, ' hugo     ', 'gg', '2018-10-20 11:22:03'),
(5, '  hugo      ', 'fggf', '2018-10-20 11:22:18'),
(6, '   hugo       ', 'f', '2018-10-20 11:22:20'),
(7, '    hugo        ', 'fdg', '2018-10-20 11:22:22'),
(8, '     hugo         ', 'gg', '2018-10-20 11:23:57'),
(9, '      hugo          ', 'sf', '2018-10-20 11:24:00'),
(10, '       hugo           ', 'vg', '2018-10-20 11:24:02'),
(11, '        hugo            ', 'f', '2018-10-20 11:24:03'),
(12, '         hugo             ', '', '2018-10-20 11:24:05'),
(13, '          hugo              ', 'g', '2018-10-20 11:24:07'),
(14, '           hugo               ', 'g', '2018-10-20 11:24:08'),
(15, '            hugo                ', '', '2018-10-20 11:24:11'),
(16, '             hugo                 ', 'wdf', '2018-10-21 15:33:18'),
(17, 'wdg      ', '', '2018-10-21 15:33:21'),
(18, ' wdg       ', 'ffdf', '2018-10-21 16:02:57'),
(19, 'hugo  ', 'a', '2018-10-21 16:03:30'),
(20, ' hugo   ', 'b', '2018-10-21 16:03:31'),
(21, '  hugo    ', 'c', '2018-10-21 16:03:33'),
(22, '   hugo     ', 'd', '2018-10-21 16:03:34'),
(23, '    hugo      ', 'e', '2018-10-21 16:03:36'),
(24, '     hugo       ', 'f', '2018-10-21 16:03:39'),
(25, '      hugo        ', 'g', '2018-10-21 16:03:41'),
(26, '       hugo         ', 'h', '2018-10-21 16:03:43'),
(27, 'hugo', '', '2018-10-21 16:04:16'),
(28, 'hugo ', 'h', '2018-10-21 16:04:20'),
(29, ' hugo  ', 'g', '2018-10-21 16:04:22'),
(30, '  hugo   ', '', '2018-10-21 16:04:24'),
(31, 'h', '', '2018-10-21 16:04:49'),
(32, ' h ', '', '2018-10-21 16:04:51'),
(33, 'h', '', '2018-10-21 16:05:02'),
(34, 'h g', '', '2018-10-21 16:05:03'),
(35, 'g', 'h', '2018-10-21 16:14:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
