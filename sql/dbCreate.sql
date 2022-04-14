-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 14 avr. 2022 à 21:55
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rmaissa_portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

DROP TABLE IF EXISTS `appartient`;
CREATE TABLE IF NOT EXISTS `appartient` (
  `numeroMotCle` int(11) NOT NULL,
  `numeroDocument` int(11) NOT NULL,
  PRIMARY KEY (`numeroMotCle`,`numeroDocument`),
  KEY `numeroDocument` (`numeroDocument`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `appartient`
--

INSERT INTO `appartient` (`numeroMotCle`, `numeroDocument`) VALUES
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(2, 1),
(2, 3),
(3, 1),
(4, 1),
(5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `numeroCommentaire` int(11) NOT NULL AUTO_INCREMENT,
  `dateHeureInsertion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(500) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `numeroDocument` int(11) NOT NULL,
  PRIMARY KEY (`numeroCommentaire`),
  KEY `numeroDocument` (`numeroDocument`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`numeroCommentaire`, `dateHeureInsertion`, `message`, `nom`, `prenom`, `email`, `numeroDocument`) VALUES
(1, '2022-04-05 15:57:37', 'C\'est un projet génial !<br/> C\'est mon préféré <3', 'maissa', 'remi', 'maissa.rem08@gmail.com', 4);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idContact` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `datePost` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idContact`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`idContact`, `nom_prenom`, `mail`, `message`, `datePost`) VALUES
(1, 'remi maissa', 'maissa.rem08@gmail.com', 'Salut, je test ma base de données !', '2022-04-14 23:55:23');

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `numeroDocument` int(11) NOT NULL AUTO_INCREMENT,
  `titreProjet` varchar(50) DEFAULT NULL,
  `lien` varchar(1000) DEFAULT NULL,
  `dateInsertion` date DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `lien_publication` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`numeroDocument`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `document`
--

INSERT INTO `document` (`numeroDocument`, `titreProjet`, `lien`, `dateInsertion`, `description`, `lien_publication`) VALUES
(1, 'Inscription des Producteurs', 'https://docs.google.com/document/d/1B2SWLEST26TSzouq9gkdH6OU3-tfrY2wssOfPZMiTM8/edit#', '2022-03-28', 'Ceci est la deuxième partie du projet NewWorld, où nous avons pour objectif de créer un formulaire d\'inscription,<br/>\r\nafin que les producteurs puisse d\'inscrire, en sécurisant au maximum les champs de saisie, et les valeurs rentrées. <br/> Des contraintes tel que l\'auto-complétion des code postal et des adresse via la base de données de l\'état ont été mise en place.', 'https://docs.google.com/document/d/e/2PACX-1vQOl4X8GPZ6W7aLWxVtC_BQMoJZXp6bhXRa65WKGjCYBd1f40M10ruqCVDDaBKgrNtRhCTcWlxwSWvy/pub?embedded=true'),
(3, 'NewWorld Circuit Court', 'https://docs.google.com/document/d/1HorzfWplSx84AVCPDvZkDgu832t_Y6uvpQHbTd73blY/edit#heading=h.7oayvxboxfnc', '2022-03-28', 'C\'est la première activité du projet NewWorld,un projet de classe important.<br/>\r\nNous voulons créer une application capable de générer un PDF contenant tous les produits (fruits, légumes, viande, autres…) qui sont proposés par un producteur identifié par son id dans la base de données.', 'https://docs.google.com/document/d/e/2PACX-1vQHc6uRjDg9rKWmpQzVSFgw8CW3ZbbfjgCAKGPBdj4TUi_B697tRyCM-uUTLoflBA5-S3XG8vj6W-4O/pub?embedded=true'),
(4, 'FireWall', 'https://docs.google.com/document/d/1H8N7gvsaANqJR9FY-wPZaLl3bwY9rk4HFDZL-9TSUFo/edit#heading=h.df45siibnle8', '2022-03-29', 'C\'est une application ayant pour rôle d\'administrer automatiquement les connexions externes.<br/>\r\nElle enregistre toute les IP tentant de se connecter et qui ont échoué, et si cette même IP échoue 3 fois ou plus, elle est bloqué.<br/>\r\nElle sera débloquée automatiquement si elle se connecte au minimum 5 minutes plus tard.<br/>\r\n\r\nUne interface graphique permet de suivre les IP échouant, et permet de les débloquer manuellement même si les 5 minutes ne sont pas passées.', 'https://docs.google.com/document/d/e/2PACX-1vR8X71vV1lo9la_JOqkhDIS0v94152AoffBhBx7Q93IJgeh_FzMQ_gsvmxlFUuJUDf4zZaBzG-kuxFt/pub?embedded=true'),
(5, 'Évaluation De Multiplication', 'https://docs.google.com/document/d/1uVQMx03pf-cYBEtAMP3TrdqasaYP5wCeHdyPrsfhaNg/edit#heading=h.9fx6kvbuo4k7', '2022-03-29', 'C\'est un programme générant une interface graphique qui vous posera des questions sur les tables de multiplications.<br/>\r\n\r\nVous pouvez indiquer le nombre de questions que vous voulez, ainsi que la table que vous souhaitez faire en particulier si vous en avez envie.<br/>\r\n\r\nCe programme n\'est pas complet, car ne comporte pas de vérification de saisie dans les fenêtres de dialogues.', 'https://docs.google.com/document/d/e/2PACX-1vT2vhI7igRVrHi81FheVXAuk0ko_4k-oVzBl-NkVHRw7_L9fBCy_edzk_k-e73MVjBMhahQwZKVKX1c/pub?embedded=true'),
(6, 'Évaluation Comparaison', 'https://docs.google.com/document/d/1IuluiB0Q6qpSE7kNh6C15mDW8qYzNLFY4ZBhDRNV5m4/edit', '2022-03-29', 'C\'est un programme générant une interface graphique soumettant 2 nombres, et l\'utilisateur doit choisir si le premier nombre est plus grand, égal ou plus petit que le second nombre.', 'https://docs.google.com/document/d/e/2PACX-1vRp6xCY6mi48CH1NnAEFB8eR4K4NP7LTS1aKPcuGdCYS4XrYSLd5VycXeKMLSiy7MTRxfF18wBLi4jm/pub?embedded=true');

-- --------------------------------------------------------

--
-- Structure de la table `motcle`
--

DROP TABLE IF EXISTS `motcle`;
CREATE TABLE IF NOT EXISTS `motcle` (
  `numeroMotCle` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`numeroMotCle`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `motcle`
--

INSERT INTO `motcle` (`numeroMotCle`, `libelle`) VALUES
(1, 'C++ / Qt'),
(2, 'Sql'),
(3, 'Html/Css'),
(4, 'Php'),
(5, 'Console Linux');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
