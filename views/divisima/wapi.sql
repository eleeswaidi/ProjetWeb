-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 mai 2019 à 19:38
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wapi`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`login`, `password`) VALUES
('m', 'm');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `numCompte` int(11) NOT NULL,
  `solde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comptecourant`
--

DROP TABLE IF EXISTS `comptecourant`;
CREATE TABLE IF NOT EXISTS `comptecourant` (
  `cin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compteepargne`
--

DROP TABLE IF EXISTS `compteepargne`;
CREATE TABLE IF NOT EXISTS `compteepargne` (
  `tauxinteret` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `cin` int(8) NOT NULL,
  `nom` varchar(8) NOT NULL,
  `nbHeures` int(8) NOT NULL,
  `tarifHoraire` int(8) NOT NULL,
  `prenom` varchar(8) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`cin`, `nom`, `nbHeures`, `tarifHoraire`, `prenom`) VALUES
(69, 'L', 25, 1, '5');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `Idlivraison` int(8) NOT NULL AUTO_INCREMENT,
  `Destination` varchar(10) NOT NULL,
  `Date-debut` date NOT NULL,
  `Date-fin` date NOT NULL,
  `Idclient` int(10) NOT NULL,
  `titre` varchar(255) NOT NULL,
  PRIMARY KEY (`Idlivraison`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`Idlivraison`, `Destination`, `Date-debut`, `Date-fin`, `Idclient`, `titre`) VALUES
(28, 'tunis', '2019-04-14', '2019-04-10', 89, '5'),
(27, 'bizerte', '2019-04-20', '2019-04-12', 45, '45'),
(24, 'sousse', '2019-04-12', '2019-04-14', 56565, '4555'),
(30, 'tunis', '2019-04-28', '2019-04-30', 757, '5752'),
(26, 'tunis', '2019-04-20', '2019-04-06', 1, '8'),
(25, 'kasserine', '2019-04-28', '2019-04-14', 45, '45'),
(22, 'sousse', '2019-04-18', '2019-04-19', 2, '5'),
(29, 'tunis', '2019-04-14', '2019-04-12', 596, '466654');

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `Idlivreur` int(10) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(10) NOT NULL,
  `Prenom` varchar(10) NOT NULL,
  `CIN` int(8) NOT NULL,
  `Datedenaissance` date NOT NULL,
  `vehicule` int(10) NOT NULL,
  PRIMARY KEY (`Idlivreur`),
  UNIQUE KEY `Id-livreur` (`Idlivreur`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`Idlivreur`, `Nom`, `Prenom`, `CIN`, `Datedenaissance`, `vehicule`) VALUES
(15, 'd', 'k', 45, '2019-04-10', 56),
(3, 'm', 'k', 18, '2019-04-18', 11),
(21, 'mm', 'm', 4588, '2019-04-25', 6258),
(19, 'ggfh', 'hfhhgf', 78, '2019-04-20', 15),
(20, '56', '98', 98, '2019-04-10', 5);

-- --------------------------------------------------------

--
-- Structure de la table `livreurr`
--

DROP TABLE IF EXISTS `livreurr`;
CREATE TABLE IF NOT EXISTS `livreurr` (
  `Id-livreur` int(8) NOT NULL,
  `Nom` varchar(8) NOT NULL,
  `Prenom` varchar(8) NOT NULL,
  `CIN` int(8) NOT NULL,
  `Date-de-naissance` date NOT NULL,
  `vehicule` int(8) NOT NULL,
  `rating` tinyint(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tutorial`
--

DROP TABLE IF EXISTS `tutorial`;
CREATE TABLE IF NOT EXISTS `tutorial` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rating` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tutorial`
--

INSERT INTO `tutorial` (`id`, `title`, `description`, `rating`) VALUES
(1, 'Livraison: 13/04/2019', 'Nom du livreur : Omar boukhtioua', 2),
(2, 'livraison:13/04/2019', 'Nom du livreur: amal khalfallah', 3),
(3, 'livraison:16/05/2019', 'Nom du livreur : mahdi dallagi', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
