-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 mai 2021 à 22:31
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tchat`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `message`, `date`) VALUES
(1, 'Martin.dupont@hetic.net', 'Ashley.saib@hetic.net', 'Hello', '2021-05-05 12:22:44'),
(2, 'Ashley.saib@hetic.net', 'Martin.dupont@hetic.net', 'Comment vas-tu ?', '2021-05-05 12:23:26'),
(3, 'Ashley.saib@hetic.net', 'Martin.dupont@hetic.net', 'Ca va', '2021-05-05 12:42:19'),
(4, 'Martin.dupont@hetic.net', 'Ashley.saib@hetic.net', 'cyjcyj', '2021-05-05 12:51:25'),
(5, 'Ashley.saib@hetic.net', 'Martin.dupont@hetic.net', 'vuhilv', '2021-05-05 13:01:28'),
(6, 'Ashley.saib@hetic.net', 'Martin.dupont@hetic.net', 'vrvr', '2021-05-05 19:06:46'),
(7, 'Ashley.saib@hetic.net', 'Martin.dupont@hetic.net', 'vrev', '2021-05-05 19:06:49'),
(8, 'Ashley.saib@hetic.net', 'Martin.dupont@hetic.net', 'evr', '2021-05-05 19:06:53'),
(9, 'Ashley.saib@hetic.net', 'Martin.dupont@hetic.net', 'ybtv', '2021-05-05 19:10:31'),
(10, 'Ashley.saib@hetic.net', 'Martin.dupont@hetic.net', 'bvc', '2021-05-05 19:10:33'),
(11, 'Ashley.saib@hetic.net', 'Martin.dupont@hetic.net', 'btbt', '2021-05-05 19:15:27'),
(12, 'Ashley.saib@hetic.net', 'John.doe@hetic.net', 'Bonjour', '2021-05-05 19:17:10'),
(13, 'Ashley.saib@hetic.net', 'Ashley29@live.fr', 'hbgvf', '2021-05-05 20:17:17'),
(14, 'Ashley.saib@hetic.net', 'Ashley29@live.fr', 'jhg', '2021-05-05 20:17:21'),
(15, 'Ashley.saib@hetic.net', 'Ashley29@live.fr', ',njhgf\nj hgfd', '2021-05-05 20:17:26'),
(16, 'Ashley.saib@hetic.net', 'Martin.dupont@hetic.net', 'cfyj', '2021-05-06 10:47:54'),
(17, 'Ashley.saib@gmail.com', 'Martin.dupont@hetic.net', 'Bonjour comment vas-tu ?', '2021-05-07 21:25:17'),
(18, 'Ashley.saib@gmail.com', 'Martin.dupont@hetic.net', 'Moi ça va bien', '2021-05-07 21:25:27'),
(19, 'Ashley.saib@gmail.com', 'Martin.dupont@hetic.net', 'Et toi ?', '2021-05-07 21:25:33');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Ashley', 'Ashley.saib@hetic.net', '3e96c230b6c0054bc532bc67598deb5f5e844485'),
(2, 'Martin', 'Martin.dupont@hetic.net', '3e96c230b6c0054bc532bc67598deb5f5e844485'),
(3, 'John Doe', 'John.doe@hetic.net', '3e96c230b6c0054bc532bc67598deb5f5e844485');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
