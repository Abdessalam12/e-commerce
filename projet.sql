-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 déc. 2020 à 20:54
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `CIN_user` varchar(255) NOT NULL,
  `ID_prod` varchar(255) NOT NULL,
  `Date_commande` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`CIN_user`, `ID_prod`, `Date_commande`) VALUES
('13265060', 'iC35', '16/12/2020'),
('13265060', 'lki4m', '16/12/2020'),
('13265161', '123k', '17/12/2020'),
('13265161', 'iC35', '16/12/2020'),
('13265161', 'lki4m', '16/12/2020'),
('14589658', 'lki4m', '17/12/2020');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `ID_prod` varchar(255) NOT NULL,
  `Désignation` varchar(255) NOT NULL,
  `Prix` float NOT NULL,
  `Quantité` int(255) NOT NULL,
  `Catégorie` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Fournisseur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ID_prod`, `Désignation`, `Prix`, `Quantité`, `Catégorie`, `Marque`, `Fournisseur`) VALUES
('1234ml', '10Ram,20Stockage,40Mp', 500, 700, 'A', 'samsung', 'samsung'),
('123k', '4ram,64stockage,karin processeur', 300, 402, 'modern', 'huawei', 'china');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `cin` int(8) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tele` int(8) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `codep` int(10) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`cin`, `login`, `mdp`, `nom`, `prenom`, `tele`, `sexe`, `email`, `adresse`, `ville`, `codep`, `commentaire`, `role`) VALUES
(14589658, 'ghazi', '0000', 'louhichi', 'ghazi', 21452145, 'm', 'ghazii@gmail.com', 'tunis,rue 1,1', 'tunis', 2009, '', 'client'),
(20213020, 'Badou', '1234', 'boubakr', 'diara', 10203040, 'm', 'diara@yahou.com', '8quods', 'sinigal', 47152, '', 'client'),
(55555555, 'admin', 'admin', 'admin', 'admin', 55555555, 'M/f', 'admin@mail.com', '', '', 1203, '', 'admin ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`CIN_user`,`ID_prod`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`ID_prod`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`cin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
