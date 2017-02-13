-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 13 Février 2017 à 14:20
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `travel`
--

-- --------------------------------------------------------

--
-- Structure de la table `budget`
--

CREATE TABLE `budget` (
  `id` int(11) NOT NULL,
  `annuelBudget` int(11) DEFAULT NULL,
  `travelBudgetBalance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numOfEmp` int(11) DEFAULT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `depart_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `mission_report`
--

CREATE TABLE `mission_report` (
  `id` int(11) NOT NULL,
  `missionName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `missionDate` datetime DEFAULT NULL,
  `psContext` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intContext` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `challenge` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mainQstAsked` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `situation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conclusion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recommendations` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `travel_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `travel_plan`
--

CREATE TABLE `travel_plan` (
  `id` int(11) NOT NULL,
  `institution` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `venue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL,
  `daysAway` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `justification` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estimatedTravelCostUSD` int(11) DEFAULT NULL,
  `regionalOffice` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `travel_plan`
--

INSERT INTO `travel_plan` (`id`, `institution`, `venue`, `startDate`, `endDate`, `daysAway`, `justification`, `estimatedTravelCostUSD`, `regionalOffice`, `status`, `user_id`) VALUES
(1, 'test', 'test', '2017-02-02 00:00:00', '2014-02-03 01:03:00', '4', 'test', 44, 'here', 1, NULL),
(2, 'test', 'test', '2013-02-02 00:00:00', '2014-02-03 01:03:00', '4', 'test', 44, 'here', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `firstName`, `lastName`) VALUES
(1, 'rami', 'rami', 'rami.abid@esprit.tn', 'rami.abid@esprit.tn', 1, 'dRaE3fVccC9.aGu4ijP0QBfQD5C4dVE1geUmzZFNOHc', 'oNZTpWTr0cPFJstVT0gidxPj8yVrK/15GeD/i7CnlGkvGY8iQMUIL79nX/XXg5+oVAs4MmbOVnBIdzvUJVJU9Q==', '2017-02-12 19:23:44', NULL, NULL, 'a:0:{}', NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C1765B63A76ED395` (`user_id`),
  ADD KEY `IDX_C1765B63AE02FE4B` (`depart_id`);

--
-- Index pour la table `mission_report`
--
ALTER TABLE `mission_report`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2FB3D0EEECAB15B3` (`travel_id`);

--
-- Index pour la table `travel_plan`
--
ALTER TABLE `travel_plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1602B8D0A76ED395` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `budget`
--
ALTER TABLE `budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `mission_report`
--
ALTER TABLE `mission_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `travel_plan`
--
ALTER TABLE `travel_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `FK_C1765B63A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_C1765B63AE02FE4B` FOREIGN KEY (`depart_id`) REFERENCES `budget` (`id`);

--
-- Contraintes pour la table `mission_report`
--
ALTER TABLE `mission_report`
  ADD CONSTRAINT `mission_report_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `FK_2FB3D0EEECAB15B3` FOREIGN KEY (`travel_id`) REFERENCES `travel_plan` (`id`);

--
-- Contraintes pour la table `travel_plan`
--
ALTER TABLE `travel_plan`
  ADD CONSTRAINT `FK_1602B8D0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);