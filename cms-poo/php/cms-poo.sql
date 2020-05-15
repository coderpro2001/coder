-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 13 mai 2020 à 13:49
-- Version du serveur :  10.1.40-MariaDB
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cms-poo`
--

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `filename` varchar(160) NOT NULL,
  `titre` varchar(160) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `filename`, `titre`, `contenu`, `image`) VALUES
(1, 'index', 'TITRE INDEX', '<h3>titre3</h3><p>paragraphe</p>', 'assets/img/photo1.jpg'),
(2, 'presentation', 'TITRE PRESENTATION', 'CONTENU PRESENTATION', 'assets/img/photo2.jpg'),
(3, 'contact', 'TITRE CONTACT', 'CONTENU CONTACT', 'assets/img/photo3.jpg'),
(4, 'test1042', 'titre1042', 'contenu1042', 'image1042'),
(5, 'kdfjghdfkj', 'ksjfhgkjfsh', 'hfkjhgfksdfj', 'hskjdhksfhkqj'),
(6, 'test1049', 'titre1049', 'contenu1049', 'image1049'),
(7, 'test1130', 'titre1130', 'contenu1130', 'image1130'),
(8, 'test1144', 'titre1144', 'contenu114', 'image1144'),
(9, 'hacker1151', 'titre1151', 'contenu1151', 'image1151'),
(10, 'hacker1201', 'titre1201', 'contenu1201', 'image1201'),
(11, 'test1208', 'titre1208', 'contenu1208', 'image1208');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(160) NOT NULL,
  `email` varchar(160) NOT NULL,
  `password` varchar(160) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `email`, `password`, `level`) VALUES
(1, 'long-hai', 'lh@mail.me', '$2y$10$5e8xW9CCJnqkU/rsSjhJxeTiNlTuH8K.9FpjkLppegXT7W.U2Do9e', 100),
(2, 'test1047', 'test1047@mail.me', '$2y$10$4yMsNCRTh/aTEmoa8bA7/uGjwJXv/.9cYcmIFHc1mSRSEOqXJ4Hi6', 10),
(3, 'login1225', 'test1225@mail.me', '$2y$10$dTQKKMFY2dsYFlF/cnnIAuaSDonc5.JeH/n969AfFf5rQkxBeOPtm', 10),
(4, 'test1346', 'test1346@mail.me', '$2y$10$pRu.sOYNmp/tJdyd6rrMtecioJqjg9RZL3SMM5QDRU72GrY27vooa', 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
