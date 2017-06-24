-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 24 juin 2017 à 07:38
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `barchart`
--

-- --------------------------------------------------------

--
-- Structure de la table `quotes`
--

CREATE TABLE `quotes` (
  `symbol` varchar(18) NOT NULL,
  `name` varchar(128) NOT NULL,
  `last` double DEFAULT NULL,
  `change` double DEFAULT NULL,
  `pctchange` double DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `tradetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quotes`
--

INSERT INTO `quotes` (`symbol`, `name`, `last`, `change`, `pctchange`, `volume`, `tradetime`) VALUES
('AMZN', 'Amazon.Com Inc', 964.91, -13.4, -1.37, 9438600, '2017-06-12 18:03:00'),
('CSCO', 'Cisco Systems Inc', 31.25, -0.12, -0.38, 25783400, '2017-06-12 18:02:00'),
('EA', 'Electronic Arts Inc', 108.9, -1.56, -1.41, 5822000, '2017-06-12 18:00:00'),
('F', 'Ford Motor Company', 11.28, 0.15, 1.35, 38472102, '2017-06-12 17:53:00'),
('FB', 'Facebook Inc', 148.44, -1.16, -0.78, 33152699, '2017-06-12 18:00:00'),
('FFK', 'Apple Inc', 145.42, -3.56, -2.39, 72219195, '2017-06-12 18:03:00'),
('GE', 'General Electric Company', 28.94, 1, 3.58, 139003297, '2017-06-12 18:04:00'),
('GM', 'General Motors Company', 34.68, 0.34, 0.99, 14304899, '2017-06-12 17:06:00'),
('GOOGL', 'Alphabet Class A', 961.81, -8.31, -0.86, 4198000, '2017-06-12 18:04:00'),
('IBM', 'International Business Machines', 155.18, 1.08, 0.7, 6464800, '2017-06-12 17:47:00'),
('Mo', 'Mohamed', 20, 20, 20, 20, '2017-06-12 18:04:00'),
('NVDA', 'Nvidia Corporation', 149.97, 0.37, 0.25, 42311801, '2017-06-12 18:04:00'),
('P', 'Pandora Media Inc', 7.87, -0.65, -7.63, 31016299, '2017-06-12 17:50:00'),
('SNAP', 'Snap Inc', 18.2, 0.12, 0.66, 16160100, '2017-06-12 18:02:00'),
('ss', 'ss', 20.2, 2.2, 2.2, 2, '2017-06-12 18:04:00'),
('T', 'AT&T Inc', 39.07, 0.28, 0.72, 22779799, '2017-06-12 17:41:00'),
('TSLA', 'Tesla Inc', 359.01, 1.69, 0.47, 10508800, '2017-06-12 18:02:00'),
('TWTR', 'Twitter Inc', 17.04, 0.14, 0.83, 20490801, '2017-06-12 18:03:00'),
('V', 'Visa Inc', 93.5, -1.06, -1.12, 15604300, '2017-06-12 17:48:00'),
('VZ', 'Verizon Communications Inc', 47.19, 0.47, 1.01, 18929000, '2017-06-12 17:59:00'),
('YHOO', 'Yahoo! Inc', 53.12, -0.9, -1.67, 57719301, '2017-06-12 17:39:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`symbol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
