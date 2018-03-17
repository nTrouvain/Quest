-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 17 mars 2018 à 16:26
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

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
(11, 'TLX', 20, 'Exigence mentale'),
(12, 'TLX', 20, 'Exigence physique'),
(13, 'TLX', 20, 'Exigence temporelle'),
(14, 'TLX', 20, 'Peformance'),
(15, 'TLX', 20, 'Effort'),
(16, 'TLX', 20, 'Frustration'),
(21, 'SUS', 5, 'Je pense que je vais utiliser ce service fréquemment.'),
(22, 'SUS', 5, 'Je trouve ce service inutilement complexe.'),
(23, 'SUS', 5, 'Je pense que ce service est facile à utiliser.'),
(24, 'SUS', 5, 'Je pense que j’aurai besoin de l’aide d’un technicien pour être capable d’utiliser ce service.'),
(25, 'SUS', 5, '.J’ai trouvé que les différentes fonctions de ce service ont été bien intégrées.'),
(26, 'SUS', 5, 'Je pense qu’il y a trop d’incohérence dans ce service.'),
(27, 'SUS', 5, 'J’imagine que la plupart des gens serait capable d’apprendre à utiliser ce services très rapidement.'),
(28, 'SUS', 5, 'J’ai trouvé ce service trés lourd à utiliser.'),
(29, 'SUS', 5, 'Je me sentais très en confiance en utilisant ce service.'),
(30, 'SUS', 5, 'J’ai besoin d’apprendre beaucoup de choses avant de pouvoir utiliser ce service.'),
(31, 'AD', 7, 'Technique-Humain'),
(32, 'AD', 7, 'Compliqué-Simple'),
(33, 'AD', 7, 'Pas pratique-Pratique'),
(34, 'AD', 7, 'Fastidieux-Efficace'),
(35, 'AD', 7, 'Imprévisible-Prévisible'),
(36, 'AD', 7, 'Confus-Clair'),
(37, 'AD', 7, 'Incontrôlable-Maîtrisable'),
(41, 'AD', 7, 'M’isole-Me sociabilise'),
(42, 'AD', 7, 'Amateur-Professionnel'),
(43, 'AD', 7, 'De mauvais goût-De bon goût'),
(44, 'AD', 7, 'Bas de gamme-Haut de gamme'),
(45, 'AD', 7, 'M’exclut-M’intègre'),
(46, 'AD', 7, 'Me sépare des autres-Me rapproche des autres'),
(47, 'AD', 7, 'Non présentable-Présentable'),
(51, 'AD', 7, 'Conventionnel-Original'),
(52, 'AD', 7, 'Sans imagination-Créatif'),
(53, 'AD', 7, 'Prudent-Audacieux'),
(54, 'AD', 7, 'Conservateur-Novateur'),
(55, 'AD', 7, 'Ennuyeux-Captivant'),
(56, 'AD', 7, 'Peu exigeant-Challenging'),
(57, 'AD', 7, 'Commun-Nouveau'),
(61, 'AD', 7, 'Déplaisant-Plaisant'),
(62, 'AD', 7, 'Laid-Beau'),
(63, 'AD', 7, 'Désagréable-Agréable'),
(64, 'AD', 7, 'Rebutant-Attirant'),
(65, 'AD', 7, 'Mauvais-Bon'),
(66, 'AD', 7, 'Repoussant-Attrayant'),
(67, 'AD', 7, 'Décourageant-Motivant');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
