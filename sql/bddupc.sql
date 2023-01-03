-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 16 juin 2022 à 11:43
-- Version du serveur :  10.3.34-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bddupc`
--

-- --------------------------------------------------------

--
-- Structure de la table `coloring`
--

CREATE TABLE `coloring` (
  `id` int(11) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_modify` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

CREATE TABLE `picture` (
  `description` varchar(600) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `dzi` varchar(60) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_coloring` int(11) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_modify` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`description`, `url`, `title`, `dzi`, `id`, `id_user`, `id_coloring`, `date_creation`, `last_modify`) VALUES
('', 'https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/dz1/file_files/8/0_0.jpeg', 'Cortex visuel humain', NULL, 11, 26, NULL, '2022-06-13 14:55:44', '2022-06-16 08:29:56'),
('', 'https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/dz3/file_files/8/0_0.jpeg', 'Cortex moteur humain', NULL, 12, NULL, NULL, '2022-06-13 15:15:24', '2022-06-13 15:18:09'),
('', 'https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/dz4/file_files/8/0_0.jpeg', 'Cortex moteur humain', NULL, 13, NULL, NULL, '2022-06-13 15:17:30', '2022-06-13 15:18:34'),
('', 'https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/dz7/file_files/8/0_0.jpeg', 'Moelle épinière', NULL, 14, NULL, NULL, '2022-06-13 15:19:25', '2022-06-13 15:21:45'),
('', 'https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/dz6/file_files/8/0_0.jpeg', 'Moelle épinière', NULL, 15, NULL, NULL, '2022-06-13 15:20:54', '2022-06-13 15:21:01'),
('', 'https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/dz14/file_files/8/0_0.jpeg', 'Moelle épinière', NULL, 16, NULL, NULL, '2022-06-13 15:22:13', '2022-06-13 15:32:02'),
('', 'https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/dz9/file_files/8/0_0.jpeg', 'Cervelet', NULL, 17, NULL, NULL, '2022-06-13 15:23:09', '0000-00-00 00:00:00'),
('', 'https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/dz10/file_files/8/0_0.jpeg', 'Cervelet humain', NULL, 18, NULL, NULL, '2022-06-13 15:24:37', '0000-00-00 00:00:00'),
('', 'https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/dz5/file_files/8/0_0.jpeg', '', NULL, 19, NULL, NULL, '2022-06-13 15:26:01', '0000-00-00 00:00:00'),
('', 'https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/dz14/file_files/8/0_0.jpeg', 'Moelle épinière', NULL, 20, NULL, NULL, '2022-06-13 15:26:22', '2022-06-13 15:31:19');

-- --------------------------------------------------------

--
-- Structure de la table `schoolyard`
--

CREATE TABLE `schoolyard` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_modify` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `schoolyard`
--

INSERT INTO `schoolyard` (`id`, `id_user`, `title`, `description`, `date_creation`, `last_modify`) VALUES
(1, NULL, 'AAB', 'Adddddddddddd ddddddddd dddddd', '2022-06-07 09:25:47', '2022-06-13 10:51:34'),
(3, NULL, 'ABC', 'DEF', '2022-06-13 08:06:46', '0000-00-00 00:00:00'),
(9, NULL, 'sdfsdqqdf', 'dsqfqsfqsf', '2022-06-14 11:52:48', '0000-00-00 00:00:00'),
(10, NULL, 'fgshsfh', 'sfhshs', '2022-06-14 11:53:58', '0000-00-00 00:00:00'),
(11, NULL, 'dfgsfth', 'dfhdfhdfh', '2022-06-14 12:02:53', '0000-00-00 00:00:00'),
(12, NULL, 'eee', 'eee', '2022-06-14 12:10:45', '0000-00-00 00:00:00'),
(13, NULL, 'eee', 'eee', '2022-06-14 12:11:37', '0000-00-00 00:00:00'),
(14, NULL, 'eee', 'eee', '2022-06-14 12:12:16', '0000-00-00 00:00:00'),
(15, NULL, 'eee', 'eee', '2022-06-14 12:12:47', '0000-00-00 00:00:00'),
(16, NULL, 'zeze', 'ezze', '2022-06-14 12:15:12', '0000-00-00 00:00:00'),
(17, NULL, 'zeze', 'ezze', '2022-06-14 12:17:09', '0000-00-00 00:00:00'),
(18, NULL, 'zezeez', 'ezezze', '2022-06-14 12:17:54', '0000-00-00 00:00:00'),
(19, NULL, 'ezzeez', 'ezzeze', '2022-06-14 12:18:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `schoolyard_picture`
--

CREATE TABLE `schoolyard_picture` (
  `id` int(11) NOT NULL,
  `id_picture` int(11) NOT NULL,
  `id_schoolyard` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `schoolyard_picture`
--

INSERT INTO `schoolyard_picture` (`id`, `id_picture`, `id_schoolyard`) VALUES
(1, 11, 19),
(2, 12, 19),
(78, 16, 9),
(19, 11, 10),
(77, 14, 9),
(82, 20, 1),
(81, 14, 1);

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `label` varchar(50) DEFAULT NULL,
  `accessAdmin` int(11) DEFAULT NULL,
  `superAdmin` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_modify` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`label`, `accessAdmin`, `superAdmin`, `id`, `date_creation`, `last_modify`) VALUES
('Administrateur', NULL, NULL, 1, '2022-06-09 13:17:06', '0000-00-00 00:00:00'),
('Enseignant', NULL, NULL, 2, '2022-06-09 13:17:06', '0000-00-00 00:00:00'),
('Auteur', NULL, NULL, 3, '2022-06-09 13:17:06', '0000-00-00 00:00:00'),
('Etudiant', NULL, NULL, 4, '2022-06-09 13:17:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `name` varchar(20) DEFAULT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `pwd` text DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `uid` varchar(20) DEFAULT NULL,
  `blocked` tinyint(1) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `id_status` int(11) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_modify` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`name`, `firstName`, `username`, `pwd`, `email`, `uid`, `blocked`, `deleted`, `id`, `id_status`, `date_creation`, `last_modify`) VALUES
('sqdfqsfqs', 'sdqfqsfqs', 'sdqfqdsf', '$2y$10$f30ey0XUhA7gjN3eTxxuue2EJafxWpUh6RDvIoNwY76Df8TpvM8d6', 'ilian@gmail.com', NULL, 0, NULL, 49, 2, '2022-06-13 12:35:15', '2022-06-15 11:26:14'),
('bbb', 'ccc', 'aaa', '$2y$10$bHbAKEY.gpBsp.piA7yYQe.PdUzwtnJfu4m/MgSFpz25Nw2AeFEDe', 'azerty@gmail.com', NULL, 0, NULL, 26, 1, '2022-06-08 14:26:54', '2022-06-15 11:27:30'),
('dfghdfhfgh', 'dfghfgh', 'fghfdghgdf', '$2y$10$o7k1OduqnUMM88xHzLFJh.ixxjyFT35tnhldqAPhj8ePcedAelWTy', 'azertyuiop@gmail.com', NULL, 1, NULL, 50, 3, '2022-06-13 12:50:11', '2022-06-15 11:27:36');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `coloring`
--
ALTER TABLE `coloring`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`id_user`),
  ADD KEY `idColoring` (`id_coloring`);

--
-- Index pour la table `schoolyard`
--
ALTER TABLE `schoolyard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`id_user`);

--
-- Index pour la table `schoolyard_picture`
--
ALTER TABLE `schoolyard_picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_picture` (`id_picture`,`id_schoolyard`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `username` (`username`,`uid`),
  ADD KEY `id_status` (`id_status`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `coloring`
--
ALTER TABLE `coloring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `schoolyard`
--
ALTER TABLE `schoolyard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `schoolyard_picture`
--
ALTER TABLE `schoolyard_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
