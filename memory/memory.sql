-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 15 mars 2022 à 12:38
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `memory`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Id_utilisateur` int(10) DEFAULT NULL,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `Telportable` varchar(20) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Sexe` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`Id`, `Id_utilisateur`, `Nom`, `Prenom`, `Telportable`, `Mail`, `Sexe`) VALUES
(18, 1, 'Giez', 'Benj', '0620000002', 'mail@gmail.com', 'homme'),
(23, NULL, 'benrajeb', 'Amele', '0620439506', 'mail@gmail.com', 'femme'),
(24, NULL, 'Puvis', 'Jeremy', '0620010101', 'jeremy@free.fr', 'homme'),
(25, NULL, 'Thomas', 'Alex', '0620010101', 'test2@gmail.com', 'homme'),
(26, NULL, 'Mati', 'Sandra', '0620439506', 'test@gmail.com', 'femme'),
(28, NULL, 'test', 'mklmÃ©vrv', '0620000002', 'test3@gmail.com', 'homme'),
(30, NULL, 'Giez', 'Benjamin', '0620010101', 'mail@gmail.com', 'homme'),
(34, NULL, 'ryhr', 'yryre', '0626565666', 'mail@gmail.com', 'femme'),
(35, 1, 'test', 'test', '0600000000', 'test@test.fr', 'homme'),
(36, 2, 'dzdz', 'fzafzfzf', '05564064564045', 'zfzf@free.fr', 'homme'),
(37, 9, 'Salut', 'reussi', '0620439506', 'djgez@gkg.fr', 'homme'),
(38, 9, 'khiri', 'Amele', '0620000002', 'mail@gmail.com', 'femme'),
(39, 9, 'benrajebefezf', 'ibti', '0620000001', 'semsem@hotmail.fr', 'femme'),
(41, 9, 'feez', 'michael', '0620000002', 'mail@gmail.com', 'homme'),
(42, 9, 'rthhr', 'Coucou', '0626565666', 'semsem73@hotmail.fr', 'homme'),
(43, 9, 'tttttt', 'william', '0620000002', 'ibtissemkhiri.simplon@gmail.com', 'homme'),
(44, 9, 'Test', 'Mimi', '0620000001', 'mail@gmail.com', 'femme');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Id_utilisateur` int(10) DEFAULT NULL,
  `Nom_utilisateur` varchar(100) NOT NULL,
  `Mot_de_passe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id`, `Id_utilisateur`, `Nom_utilisateur`, `Mot_de_passe`) VALUES
(1, NULL, 'ibtissem', 'decembre'),
(2, NULL, 'michael ', 'maison'),
(3, NULL, 'eric', 'formation'),
(4, NULL, 'albert', 'forma'),
(5, NULL, 'Nathalie', 'ecole'),
(6, NULL, 'test', 'test'),
(7, NULL, 'sophie', 'formation'),
(8, NULL, 'sophie', 'forma'),
(9, NULL, 'illona', 'illona');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
