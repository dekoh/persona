-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 12 Juin 2014 à 20:47
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `persona`
--
CREATE DATABASE IF NOT EXISTS `persona` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `persona`;

-- --------------------------------------------------------

--
-- Structure de la table `nom`
--

CREATE TABLE IF NOT EXISTS `nom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `nom`
--

INSERT INTO `nom` (`id`, `nom`) VALUES
(1, 'Martin'),
(2, 'Bernard'),
(3, 'Thomas'),
(4, 'Petit'),
(5, 'Robert'),
(6, 'Richard'),
(7, 'Durand'),
(8, 'Dubois'),
(9, 'Moreau'),
(10, 'Laurent'),
(11, 'Simon'),
(12, 'Michel'),
(13, 'Lefebvre'),
(14, 'Leroy'),
(15, 'Roux'),
(16, 'David'),
(17, 'Bertrand'),
(18, 'Morel'),
(19, 'Fournier'),
(20, 'Girard'),
(21, 'Bonnet'),
(22, 'Dupont'),
(23, 'Lambert'),
(24, 'Fontaine');

-- --------------------------------------------------------

--
-- Structure de la table `prenom`
--

CREATE TABLE IF NOT EXISTS `prenom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(40) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `prenom`
--

INSERT INTO `prenom` (`id`, `prenom`, `sexe`) VALUES
(1, 'Marie', 'f'),
(2, 'Jean', 'h'),
(3, 'Michel', 'h'),
(4, 'Pierre', 'h'),
(5, 'Philippe', 'h'),
(6, 'Alain', 'h'),
(7, 'Nathalie', 'f'),
(8, 'Dominique', 'n'),
(9, 'Nicolas', 'h'),
(10, 'Isabelle', 'f'),
(11, 'Catherine', 'f'),
(12, 'Monique', 'f'),
(13, 'Sylvie', 'f'),
(14, 'Patrick', 'h'),
(15, 'Bernard', 'h'),
(16, 'Françoise', 'f'),
(17, 'Claude', 'n'),
(18, 'Daniel', 'h'),
(19, 'Christophe', 'h'),
(20, 'Christian', 'h'),
(21, 'André', 'h'),
(22, 'Jacques', 'h'),
(23, 'Martine', 'f'),
(24, 'Gérard', 'h'),
(25, 'Jacqueline', 'f'),
(26, 'Frédéric', 'h'),
(27, 'éric', 'h'),
(28, 'Laurent', 'h'),
(29, 'Julien', 'h'),
(30, 'David', 'h');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
