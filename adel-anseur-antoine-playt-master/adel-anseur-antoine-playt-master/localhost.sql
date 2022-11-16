-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 01 Décembre 2021 à 10:01
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_8_1`
--
CREATE DATABASE IF NOT EXISTS `bdd_8_1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bdd_8_1`;

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
  `nom` varchar(20) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `places` int(11) NOT NULL,
  `dominante` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `sujet`
--

INSERT INTO `sujet` (`nom`, `resume`, `places`, `dominante`) VALUES
('ok', 'c est pour le test', 3, 'ISN'),
('voiture', 'nan', 14, 'iair');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `email` varchar(50) NOT NULL,
  `nom_p` varchar(20) NOT NULL,
  `prenom_p` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `fonction` varchar(20) NOT NULL,
  `dominante` varchar(20) NOT NULL,
  `suj` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`email`, `nom_p`, `prenom_p`, `mdp`, `fonction`, `dominante`, `suj`) VALUES
('adel.anseur@groupe-esigelec.org', 'Anseur', 'Adel', '1234', 'Enseignant', 'ISN', 'ok'),
('antoine.playt@groupe-esigelec.org', 'pl', 'an', '12', 'Eleve', 'iair', 'voiture');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`email`),
  ADD KEY `dominante` (`dominante`),
  ADD KEY `suj` (`suj`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`suj`) REFERENCES `sujet` (`nom`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
