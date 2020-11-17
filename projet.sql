-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 31 mai 2020 à 16:04
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texte` text NOT NULL,
  `titre` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `texte`, `titre`, `img`, `date`) VALUES
(11, '<p>zaeazezaezaeaz</p>', 'Mon titre', 'katakuri.jpg', '2020-05-28 21:41:09'),
(13, '<p>azheiudchaec_hae_dfae</p>', 'Lucas test', 'PP_R6.JPG', '2020-05-29 10:33:22');

-- --------------------------------------------------------

--
-- Structure de la table `gal`
--

DROP TABLE IF EXISTS `gal`;
CREATE TABLE IF NOT EXISTS `gal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gal`
--

INSERT INTO `gal` (`id`, `img`) VALUES
(142, 'ville_sombre_monsite.PNG'),
(144, 's10.PNG'),
(147, 'PP_R6.PNG'),
(137, 'katakuri.jpg'),
(136, 'Face_entière_de_Katakuri.png');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(18) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `mdp`) VALUES
(13, 'KyHuz', 'lucas.orsini@outlook.fr', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(14, 'lucas', 'lucas.orsini@gmail.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(15, 'lucas', 'lucas.orsini@gmail.com', '1f71e0f4ac9b47cd93bf269e4017abaab9d3bd63');

-- --------------------------------------------------------

--
-- Structure de la table `name`
--

DROP TABLE IF EXISTS `name`;
CREATE TABLE IF NOT EXISTS `name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `Tel` text NOT NULL,
  `Email` text NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `name`
--

INSERT INTO `name` (`id`, `nom`, `Tel`, `Email`, `msg`, `date`) VALUES
(1, 'zaezaeazeaze', '', '', '', '2020-05-12 10:01:02'),
(2, 'test2', '', '', '', '2020-05-12 10:10:52'),
(3, 'testkekeke', '0610186199', 'lucas.orsini@outlook.fr', 'Bonjour', '2020-05-12 10:48:11'),
(4, 'testkekeke', '0610186199', 'lucas.orsini@outlook.fr', 'Bonjour', '2020-05-12 11:00:49'),
(5, 'testkekeke', '0610186199', 'lucas.orsini@outlook.fr', 'Bonjour', '2020-05-12 11:01:09'),
(7, 'test', '20654564564', 'lucas.orsini@outlook.fr', 'omg omg omg', '2020-05-12 11:01:59'),
(8, 'test', '20654564564', 'lucas.orsini@outlook.fr', 'omg omg omg', '2020-05-12 11:02:38'),
(9, 'test', '20654564564', 'lucas.orsini@outlook.fr', 'omg omg omg', '2020-05-12 11:03:10'),
(12, 'arthur', 'decoat', 'coat.arthur@outlook.fr', 'bv ma legue', '2020-05-23 22:30:13'),
(13, 'lucas', '0658475758', 'lucas.orsini@outlook.fr', 'bonjour voila', '2020-05-26 12:43:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
