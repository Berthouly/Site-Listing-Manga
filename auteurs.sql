-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 21 mars 2022 à 11:51
-- Version du serveur : 10.3.29-MariaDB-0+deb10u1
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae203`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE `auteurs` (
  `auteur_id` int(11) NOT NULL,
  `auteur_prenom` varchar(10) NOT NULL,
  `auteur_nom` varchar(10) NOT NULL,
  `auteur_nationalite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table auteurs';

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`auteur_id`, `auteur_prenom`, `auteur_nom`, `auteur_nationalite`) VALUES
(1, 'Eiichirō ', 'Oda', 'Japonnais'),
(2, 'Koyoharu', 'Gotōge', 'Japonnais'),
(3, 'Hajime', 'Isayama', 'Japonnais'),
(4, 'Atsushi ', 'Ōkubo', 'Japonnais'),
(5, 'Yūki', 'Tabata', 'Japonnais'),
(6, 'Akira ', 'Toriyama', 'Japonnais'),
(7, 'Susumu', 'Furudate', 'Japonnais'),
(8, 'Masashi ', 'Kishimoto', 'Japonnais'),
(9, 'Tibe ', 'Kubo', 'Japonnais'),
(10, 'Keisuke', 'Itagaki', 'Japonnais');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
