-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 nov. 2021 à 14:45
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jour08`
--

-- --------------------------------------------------------

--
-- Structure de la table `étudiants`
--

DROP TABLE IF EXISTS `étudiants`;
CREATE TABLE IF NOT EXISTS `étudiants` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `étudiants`
--

INSERT INTO `étudiants` (`ID`, `prenom`, `nom`, `naissance`, `sexe`, `email`) VALUES
(1, 'Cyril ', 'Zimmerman', '1989-01-02', 'homme', 'cyril@laplateforme.io'),
(2, 'Jessica', 'Soriano', '1995-09-08', 'feminin', 'jessica@laplatefome.io'),
(9, 'Terry', 'Cristinelli', '2005-02-01', 'hommme', 'terry@laplateforme.io'),
(6, 'Roxan', 'Roumégas', '2016-09-08', 'homme', 'roman@laplateforme.io'),
(8, 'Pascal', 'Assens', '1999-12-31', 'homme', 'pascal@laplateforme.io'),
(10, 'ruben', 'habib', '1993-05-26', 'homme', 'ruben.habib@laplateforme.io'),
(11, 'toto', 'dupont', '2019-11-07', 'homme', 'toto@laplateforme.io');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
