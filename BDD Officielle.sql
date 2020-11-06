-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 06 nov. 2020 à 13:21
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grannythe`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `commentaire` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nbValide` int(10) NOT NULL DEFAULT 0,
  `nbInvalide` int(10) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`commentaire`, `photo`, `email`, `Id`, `nbValide`, `nbInvalide`) VALUES
('un pÃ´le mÃ©tropolitain de transport : Euralille 3000 contribuera Ã©galement Ã  amÃ©liorer le rÃ©seau des transports, en renforÃ§ant les connexions entre les deux gares, en prÃ©parant lâ€™arrivÃ©e dâ€™un transport en commun en site propre, en optimisant le stationnement public, et en multipliant les modes de dÃ©placements doux.', 'lille.jpg', 'victor', 13, 13, 3),
('Le renforcement de lâ€™activitÃ© Ã©conomique : le quartier prÃ©sente aujourdâ€™hui une offre relativement modeste de bureaux et services aux standards internationaux. Le projet Euralille 3000 prÃ©voit la crÃ©ation dâ€™environ 120 000 mÂ² de bureaux complÃ©mentaires, ce qui engendrera une couverture partielle du boulevard pÃ©riphÃ©rique, et un remodelage des accÃ¨s au centre-ville.', 'lille22.jpg', 'Max', 14, 6, 4),
(' CrÃ©ation d\'un terrain de pÃ©tanque au coeur de Lille pour cÃ©lÃ©brer le festival de pÃ©tanque 2021. PlacÃ© Ã  quelques mÃ¨tres de la grande roue ce terrain de pÃ©tanque pourrait permettre Ã  Lille de devenir LA capitale de la boule en Europe.\r\nCette dÃ©marche touristique pourrait permettre Ã  Lille d\'attirer d\'autant plus des Sudistes.', 'terrain_de_petanque_lille.jpg', 'victor', 55, 1, 0),
('Creation d\'un memorial a l\'honneur de Sean Connery', 'bond.jpg', 'victor', 53, 1, 27),
('Une premiÃ¨re rÃ©novation tertiaire Ã  Ã©nergie positive et plus : Faire d\'un bÃ¢timent inconfortable des annÃ©es 70, un bÃ¢timent qui produit plus d\'Ã©nergie qu\'il n\'en consomme et qui tende vers l\'autonomie Ã©nergÃ©tique. Il n\'est pas toujours facile d\'isoler et d\'Ã©tancher un bÃ¢timent en rÃ©novation.', 'louis.jpg', 'LOuis', 35, 21, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `cp` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `majeur` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `adress`, `cp`, `city`, `email`, `password`, `majeur`) VALUES
(5, 'victor', '', 0, '', 'Totor.totor@totor.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(6, 'elian', 'a', 596262, 'a', 'a@a.com', '098f6bcd4621d373cade4e832627b4f6', 1),
(7, 'ezg', 'gez', 59, 'gez', 'e@eee.fr', '098f6bcd4621d373cade4e832627b4f6', 1),
(8, 'Max', 'max', 59522, 'maxxx', 'Max.max@max.max', '2ffe4e77325d9a7152f7086ea7aa5114', 1),
(9, 'LOuis', 'louis', 1234, 'louis', 'louis@louis', '777cadc280bb23ebea268ded98338c39', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
