-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 14 juin 2022 à 14:16
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `mdp`) VALUES
(1, 'enola', '$argon2i$v=19$m=65536,t=4,p=1$SVRiZE1VaWJTVzNhRlkvaw$4I4/es5k2GRRCZ9agYwNRCDnDuUOnES8ryQct1yi2iw');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Mail` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`ID`, `Nom`, `Mail`, `Message`) VALUES
(1, 'Tutellier Enola', 'enola.tutellier@hotmail.com', 'Hello'),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, '', '', ''),
(27, '', '', ''),
(28, '', '', ''),
(29, '', '', ''),
(30, '', '', ''),
(31, '', '', ''),
(32, '', '', ''),
(33, '', '', ''),
(34, '', '', ''),
(35, '', '', ''),
(36, '', '', ''),
(37, '', '', ''),
(38, '', '', ''),
(39, '', '', ''),
(40, '', '', ''),
(41, '', '', ''),
(42, '', '', ''),
(43, '', '', ''),
(44, '', '', ''),
(45, '', '', ''),
(46, '', '', ''),
(47, '', '', ''),
(48, '', '', ''),
(49, '', '', ''),
(50, '', '', ''),
(51, '', '', ''),
(52, '', '', ''),
(53, '', '', ''),
(54, '', '', ''),
(55, '', '', ''),
(56, '', '', ''),
(57, '', '', ''),
(58, '', '', ''),
(59, '', '', ''),
(60, '', '', ''),
(61, '', '', ''),
(62, '', '', ''),
(63, '', '', ''),
(64, '', '', ''),
(65, '', '', ''),
(66, '', '', ''),
(67, '', '', ''),
(68, '', '', ''),
(69, '', '', ''),
(70, '', '', ''),
(71, '', '', ''),
(72, '', '', ''),
(73, '', '', ''),
(74, '', '', ''),
(75, '', '', ''),
(76, '', '', ''),
(77, '', '', ''),
(78, '', '', ''),
(79, '', '', ''),
(80, '', '', ''),
(81, '', '', ''),
(82, '', '', ''),
(83, '', '', ''),
(84, '', '', ''),
(85, '', '', ''),
(86, '', '', ''),
(87, '', '', ''),
(88, '', '', ''),
(89, '', '', ''),
(90, '', '', ''),
(91, '', '', ''),
(92, '', '', ''),
(93, '', '', ''),
(94, '', '', ''),
(95, '', '', ''),
(96, '', '', ''),
(97, '', '', ''),
(98, '', '', ''),
(99, '', '', ''),
(100, '', '', ''),
(101, '', '', ''),
(102, '', '', ''),
(103, '', '', ''),
(104, '', '', ''),
(105, '', '', ''),
(106, '', '', ''),
(107, '', '', ''),
(108, '', '', ''),
(109, '', '', ''),
(110, '', '', ''),
(111, '', '', ''),
(112, '', '', ''),
(113, '', '', ''),
(114, '', '', ''),
(115, '', '', ''),
(116, '', '', ''),
(117, '', '', ''),
(118, '', '', ''),
(119, '', '', ''),
(120, '', '', ''),
(121, '', '', ''),
(122, '', '', ''),
(123, '', '', ''),
(124, '', '', ''),
(125, '', '', ''),
(126, '', '', ''),
(127, '', '', ''),
(128, '', '', ''),
(129, '', '', ''),
(130, '', '', ''),
(131, '', '', ''),
(132, '', '', ''),
(133, '', '', ''),
(134, '', '', ''),
(135, '', '', ''),
(136, '', '', ''),
(137, '', '', ''),
(138, '', '', ''),
(139, '', '', ''),
(140, '', '', ''),
(141, '', '', ''),
(142, '', '', ''),
(143, '', '', ''),
(144, '', '', ''),
(145, '', '', ''),
(146, '', '', ''),
(147, '', '', ''),
(148, '', '', ''),
(149, '', '', ''),
(150, '', '', ''),
(151, '', '', ''),
(152, '', '', ''),
(153, '', '', ''),
(154, '', '', ''),
(155, '', '', ''),
(156, '', '', ''),
(157, '', '', ''),
(158, '', '', ''),
(159, '', '', ''),
(160, '', '', ''),
(161, '', '', ''),
(162, '', '', ''),
(163, '', '', ''),
(164, '', '', ''),
(165, '', '', ''),
(166, '', '', ''),
(167, '', '', ''),
(168, '', '', ''),
(169, '', '', ''),
(170, '', '', ''),
(171, '', '', ''),
(172, '', '', ''),
(173, '', '', ''),
(174, '', '', ''),
(175, '', '', ''),
(176, '', '', ''),
(177, '', '', ''),
(178, '', '', ''),
(179, '', '', ''),
(180, '', '', ''),
(181, '', '', ''),
(182, '', '', ''),
(183, '', '', ''),
(184, '', '', ''),
(185, '', '', ''),
(186, '', '', ''),
(187, '', '', ''),
(188, '', '', ''),
(189, '', '', ''),
(190, '', '', ''),
(191, '', '', ''),
(192, '', '', ''),
(193, '', '', ''),
(194, '', '', ''),
(195, '', '', ''),
(196, '', '', ''),
(197, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `lien` varchar(155) NOT NULL,
  `image` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nom`, `description`, `lien`, `image`, `etat`) VALUES
(1, 'Jadoo', 'Premier projet decouverte html css', 'https://github.com/enolatutellier/', 'jadoo.PNG', 'visible'),
(2, 'Agence de voyage', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam culpa sunt voluptates quam,', 'https://github.com/LoloxDev', 'eno&lo.PNG', 'visible'),
(3, 'Catalogue Barber', 'lorem', 'https://github.com/sgonzalez58', 'barber.PNG', 'visible');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
