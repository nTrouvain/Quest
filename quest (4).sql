-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 15 mars 2018 à 13:58
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `quest`
--

-- --------------------------------------------------------

--
-- Structure de la table `campagne`
--

CREATE TABLE `campagne` (
  `camp_id` int(10) NOT NULL,
  `camp_nom` varchar(100) NOT NULL,
  `camp_desc` varchar(1000) DEFAULT NULL,
  `camp_deb` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `camp_fin` datetime DEFAULT NULL,
  `camp_exr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `campagne`
--

INSERT INTO `campagne` (`camp_id`, `camp_nom`, `camp_desc`, `camp_deb`, `camp_fin`, `camp_exr`) VALUES
(5650503, 'campagne 4', ' description campagne 4', '2018-01-01 00:00:00', '2018-01-01 00:00:00', 4985),
(6583036, 'Campagne 2', ' description campagne 2', '2018-01-01 00:00:00', '2018-01-01 00:00:00', 4985),
(7812565, 'Campagne 3', ' description campagne 3', '2018-01-01 00:00:00', '2018-01-01 00:00:00', 4985),
(8105854, 'Campagne 1', ' Description campagne 1', '2018-02-01 00:00:00', '2019-03-01 00:00:00', 4985);

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `qutaire` int(10) NOT NULL,
  `quest` int(10) NOT NULL,
  `qutaire_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contient`
--

INSERT INTO `contient` (`qutaire`, `quest`, `qutaire_type`) VALUES
(16349276, 11, 'TLX'),
(16349276, 12, 'TLX'),
(16349276, 13, 'TLX'),
(16349276, 14, 'TLX'),
(16349276, 15, 'TLX'),
(16349276, 16, 'TLX'),
(29078349, 11, 'TLX'),
(29078349, 12, 'TLX'),
(29078349, 13, 'TLX'),
(29078349, 14, 'TLX'),
(29078349, 15, 'TLX'),
(29078349, 16, 'TLX'),
(43470749, 11, 'TLX'),
(43470749, 12, 'TLX'),
(43470749, 13, 'TLX'),
(43470749, 14, 'TLX'),
(43470749, 15, 'TLX'),
(43470749, 16, 'TLX'),
(94927276, 11, 'TLX'),
(94927276, 12, 'TLX'),
(94927276, 13, 'TLX'),
(94927276, 14, 'TLX'),
(94927276, 15, 'TLX'),
(94927276, 16, 'TLX');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `exr_id` int(10) NOT NULL,
  `exr_nom` varchar(100) NOT NULL,
  `exr_desc` varchar(1000) DEFAULT NULL,
  `dateDeb` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`exr_id`, `exr_nom`, `exr_desc`, `dateDeb`, `dateFin`) VALUES
(4985, 'Expérience 1', ' Description de l\'expérience 1', '2018-01-01', '2019-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `experiment`
--

CREATE TABLE `experiment` (
  `exp_id` int(10) NOT NULL,
  `exp_mdp` varchar(50) NOT NULL,
  `exp_nom` varchar(100) NOT NULL,
  `exp_prenom` varchar(100) NOT NULL,
  `exp_org` varchar(100) DEFAULT NULL,
  `exp_mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `experiment`
--

INSERT INTO `experiment` (`exp_id`, `exp_mdp`, `exp_nom`, `exp_prenom`, `exp_org`, `exp_mail`) VALUES
(50747, 'Handball38', 'Devaux', 'Mathilda', 'ENSC', 'mathilda.devaux@outlook.fr');

-- --------------------------------------------------------

--
-- Structure de la table `lancer`
--

CREATE TABLE `lancer` (
  `exp` int(10) NOT NULL,
  `exr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lancer`
--

INSERT INTO `lancer` (`exp`, `exr`) VALUES
(50747, 4985);

-- --------------------------------------------------------

--
-- Structure de la table `questaire`
--

CREATE TABLE `questaire` (
  `qutaire_id` int(10) NOT NULL,
  `qutaire_camp` int(10) NOT NULL,
  `qutaire_titre` varchar(100) NOT NULL,
  `qutaire_desc` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questaire`
--

INSERT INTO `questaire` (`qutaire_id`, `qutaire_camp`, `qutaire_titre`, `qutaire_desc`) VALUES
(16349276, 6583036, 'Questionnaire 2', ' description questionnaire 2'),
(29078349, 6583036, 'questionnaire 3', ' description de questionnaire 3'),
(43470749, 8105854, 'Questionnaire 1', ' description questionnaire 1'),
(94927276, 6583036, 'Questionnaire 2', ' description questionnaire 2');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `quest_id` int(10) NOT NULL,
  `quest_type` varchar(50) NOT NULL,
  `quest_ech` int(3) NOT NULL,
  `quest_text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`quest_id`, `quest_type`, `quest_ech`, `quest_text`) VALUES
(11, 'TLX', 10, 'Mental demand'),
(12, 'TLX', 10, 'Physical demand'),
(13, 'TLX', 10, 'Temporal demand'),
(14, 'TLX', 10, 'Performance'),
(15, 'TLX', 10, 'Effort'),
(16, 'TLX', 10, 'Frustration');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `usr` int(10) NOT NULL,
  `qutaire` int(10) NOT NULL,
  `quest` int(10) NOT NULL,
  `valeur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `usr_id` int(10) NOT NULL,
  `usr_mdp` varchar(100) NOT NULL,
  `usr_mail` varchar(100) NOT NULL,
  `usr_org` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`usr_id`, `usr_mdp`, `usr_mail`, `usr_org`) VALUES
(367674, 'test', 'test@gmail.com', 'ENSC');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `campagne`
--
ALTER TABLE `campagne`
  ADD PRIMARY KEY (`camp_id`),
  ADD KEY `camp_exr` (`camp_exr`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`qutaire`,`quest`),
  ADD KEY `quest` (`quest`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`exr_id`);

--
-- Index pour la table `experiment`
--
ALTER TABLE `experiment`
  ADD PRIMARY KEY (`exp_id`);

--
-- Index pour la table `lancer`
--
ALTER TABLE `lancer`
  ADD PRIMARY KEY (`exp`,`exr`),
  ADD KEY `exr` (`exr`);

--
-- Index pour la table `questaire`
--
ALTER TABLE `questaire`
  ADD PRIMARY KEY (`qutaire_id`),
  ADD KEY `qutaire_camp` (`qutaire_camp`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`quest_id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`usr`,`qutaire`,`quest`),
  ADD KEY `qutaire` (`qutaire`),
  ADD KEY `quest` (`quest`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `campagne`
--
ALTER TABLE `campagne`
  ADD CONSTRAINT `campagne_ibfk_1` FOREIGN KEY (`camp_exr`) REFERENCES `experience` (`exr_id`);

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_ibfk_1` FOREIGN KEY (`qutaire`) REFERENCES `questaire` (`qutaire_id`),
  ADD CONSTRAINT `contient_ibfk_2` FOREIGN KEY (`quest`) REFERENCES `question` (`quest_id`);

--
-- Contraintes pour la table `lancer`
--
ALTER TABLE `lancer`
  ADD CONSTRAINT `lancer_ibfk_1` FOREIGN KEY (`exp`) REFERENCES `experiment` (`exp_id`),
  ADD CONSTRAINT `lancer_ibfk_2` FOREIGN KEY (`exr`) REFERENCES `experience` (`exr_id`);

--
-- Contraintes pour la table `questaire`
--
ALTER TABLE `questaire`
  ADD CONSTRAINT `questaire_ibfk_1` FOREIGN KEY (`qutaire_camp`) REFERENCES `campagne` (`camp_id`);

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`usr`) REFERENCES `user` (`usr_id`),
  ADD CONSTRAINT `reponse_ibfk_2` FOREIGN KEY (`qutaire`) REFERENCES `questaire` (`qutaire_id`),
  ADD CONSTRAINT `reponse_ibfk_3` FOREIGN KEY (`quest`) REFERENCES `question` (`quest_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
