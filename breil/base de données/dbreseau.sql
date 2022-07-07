-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 07 juil. 2022 à 16:40
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbreseau`
--

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `my_friend_id` int(11) NOT NULL AUTO_INCREMENT,
  `my_id` int(11) NOT NULL,
  `friends_id` int(11) NOT NULL,
  PRIMARY KEY (`my_friend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `friends`
--

INSERT INTO `friends` (`my_friend_id`, `my_id`, `friends_id`) VALUES
(1, 10, 1),
(7, 1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bio` varchar(255) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`member_id`, `nom`, `prenom`, `address`, `email`, `age`, `sexe`, `username`, `password`, `image`, `birthdate`, `numero`, `status`, `bio`) VALUES
(1, 'Morgan', 'Alex', 'Saraviaq', 'amorgan@gmail.com', 18, 'Female', 'teph', 'teph', 'images\\fille2.webp', '19-09-2005', 'q', 'Marriée', 'Footballeuse pro'),
(6, 'kerr', 'samantha', 'london', 'samkerr@yahoo.be', 26, 'Femme', 'Samy', 'samysamy', 'images\\fille2.webp', '1996-11-06', '0000000000', 'Célib', 'Footballeuse pro'),
(7, 'Messi', 'leonel', 'bago city', 'lmessi@gmail.com', 36, 'Male', 'goat', 'messi', 'images/homme1.webp', '11-03-1900', '0123456789', 'Celib', 'je suis cool t\'inquiete !'),
(8, 'testg', 'fasfsg', 'bagdahsd', 'kevin_lorayna@yahoo.com', 12, 'Female', 'test', 'qwerty', 'images\\fille3.webp', '', '', '', 'bla bla bla bla '),
(9, 'jessica', 'rose', 'douala', 'kasfasfas@yahoo.com', 19, 'Female', 'jessica', '12345', 'images\\fille1.webp', '', '', '', ''),
(10, 'Dennis', 'Emmanuel', 'france', 'deni@yahoo.fr', 0, 'Male', 'Dennis', 'pass', 'images\\homme2.webp', '12 Jan-1995', '7542220011', 'Single', 'Footballeur pro'),
(11, 'male', 'male', 'male', 'male', 258, 'male', 'male', 'male', 'images\\homme3.webp', 'male', 'qzedsdfr', 'celib', 'azertyuiop^mùlkjhgfdsqwxcvbn,k;'),
(16, 'member', 'login', '0', 'login@gmail.com', 0, '0', '0', 'login', '0', '0', '0', '0', '0'),
(17, 'allo', 'alli', 'vide', 'allo@gmail.com', 0, 'vide', 'vide', 'vide', 'vide', 'vide', 'vide', 'vide', 'vide');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `date_sended` varchar(100) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`message_id`, `sender_id`, `reciever_id`, `content`, `date_sended`) VALUES
(1, 10, 1, 'hello world', '2021-01-20 18:00:00'),
(2, 1, 7, 'cmt u vas?', '1980-23-01 10:10:10'),
(3, 7, 1, 'azerty', '1990-24-01 10:10:10'),
(4, 3, 2, 'bla bla bla', '1980-22-01 10:10:10'),
(6, 7, 1, 'djdjdjdjjdjdj', '2020-07-07 13:36:44');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`note_id`, `date`, `message`) VALUES
(6, '2019-05-10', 'cmt vas tu?');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `photos_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`photos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`photos_id`, `location`, `member_id`) VALUES
(1, 'images\\fille2.webp', 1),
(2, 'images\\postf1.jpeg', 1),
(3, 'images\\postf2.jpeg', 1),
(4, 'images\\postf3.jpeg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date_posted` varchar(100) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`post_id`, `member_id`, `content`, `date_posted`) VALUES
(2, 1, 'test', '2014-06-20 21:55:52'),
(3, 1, 'demo', '2019-02-27 18:07:13'),
(4, 10, 'hello world', '2019-03-16 22:26:11'),
(5, 10, 'hello how are you evreyone', '2021-07-02 20:47:28');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(5, 'admin', 'admin'),
(9, 'teph', 'teph'),
(10, 'goat', 'messi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
