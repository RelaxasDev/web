-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 29 juin 2017 à 11:53
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `My_Web`
--

-- --------------------------------------------------------

--
-- Structure de la table `Individu`
--

CREATE TABLE `Individu` (
  `login` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `city` char(20) DEFAULT NULL,
  `job` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Individu`
--

INSERT INTO `Individu` (`login`, `password`, `city`, `job`) VALUES
('Relaxas', 'lol', 'Paris', 'Codeur'),
('Marco', 'polo', 'USA', 'Aventurier'),
('eddff', 'sddfdffsdf', 'sdfdf', 'sdff'),
('azerty', 'qwerty', 'lol', 'lol'),
('lol', 'lol', 'lol', 'lol');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
