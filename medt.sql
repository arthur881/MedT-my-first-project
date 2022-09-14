-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 03 juin 2022 à 17:15
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
-- Base de données : `medt`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `avis_id` int(11) NOT NULL AUTO_INCREMENT,
  `avis_pseudo` varchar(50) NOT NULL,
  `avis_note` int(11) NOT NULL,
  `avis_content` text NOT NULL,
  `avis_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`avis_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`avis_id`, `avis_pseudo`, `avis_note`, `avis_content`, `avis_date`) VALUES
(3, 'oui', 1, 'super site', '2022-04-28 11:02:25'),
(4, 'lalala', 4, 'super site gg bro', '2022-04-28 12:29:26'),
(5, 'nono', 1, 'mouais :/', '2022-04-28 12:35:30');

-- --------------------------------------------------------

--
-- Structure de la table `beta`
--

DROP TABLE IF EXISTS `beta`;
CREATE TABLE IF NOT EXISTS `beta` (
  `beta_id` int(11) NOT NULL AUTO_INCREMENT,
  `beta_nom` varchar(40) NOT NULL,
  `beta_prenom` varchar(40) NOT NULL,
  `beta_mail` text NOT NULL,
  `beta_code` varchar(10) NOT NULL,
  PRIMARY KEY (`beta_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `beta`
--

INSERT INTO `beta` (`beta_id`, `beta_nom`, `beta_prenom`, `beta_mail`, `beta_code`) VALUES
(3, 'aaz', 'zazz', 'a@a', 'gyPAaVz4Gj'),
(4, 'POUTEAU', 'arthur', 'a@a', 'E59kM7GNoA'),
(5, 'POUTEAU', 'arthur', 'a@a', 'Bp4yxgWTLP'),
(6, 'arthur', 'lebg', 'a@a', 'PCSslIMpf3'),
(7, 'aaaa', 'baa', 'a@a', '3PLVWhXk1j'),
(8, 'asas', 'asasa', 'a@a', 'k5zjxrZiNP'),
(9, 'asas', 'asasa', 'a@a', 'MV2FpkHj98'),
(10, 'asas', 'asasa', 'a@a', 'CDZ16AQq45'),
(11, 'asas', 'dzdz', 'a@a', 'EXjRwofMaZ');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_titre` varchar(255) NOT NULL,
  `blog_cat` varchar(4) NOT NULL,
  `blog_photo` varchar(255) NOT NULL,
  `blog_contenu` text NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_titre`, `blog_cat`, `blog_photo`, `blog_contenu`) VALUES
(43, 'art5', 'cat1', 'img/blog/mauro-lima-3bNgi5QAFuc-unsplash.jpg', '<p>Lorem ipsum dolor sit amet. Non porro harum 33 ducimus repudiandae aut cupiditate voluptatem et quia impedit eum doloribus cumque. Ut odit quia 33 explicabo tempore aut aperiam assumenda non quibusdam quibusdam et unde odio aut omnis excepturi. Quo consequatur neque ut sunt voluptates est nesciunt velit. Sed vitae consequuntur et veniam amet aut optio dolor qui deserunt expedita et tempore consequatur!<br></p>'),
(42, 'art 4', 'cat3', 'img/blog/wallpaper.jpg', '<p>Lorem ipsum dolor sit amet. Non porro harum 33 ducimus repudiandae aut cupiditate voluptatem et quia impedit eum doloribus cumque. Ut odit quia 33 explicabo tempore aut aperiam assumenda non quibusdam quibusdam et unde odio aut omnis excepturi. Quo consequatur neque ut sunt voluptates est nesciunt velit. Sed vitae consequuntur et veniam amet aut optio dolor qui deserunt expedita et tempore consequatur!<br></p>'),
(44, 'art5', 'cat3', 'img/blog/img_blog1.jpg', 'Lorem ipsum dolor sit amet. Non porro harum 33 ducimus repudiandae aut cupiditate voluptatem et quia impedit eum doloribus cumque. Ut odit quia 33 explicabo tempore aut aperiam assumenda non quibusdam quibusdam et unde odio aut omnis excepturi. Quo consequatur neque ut sunt voluptates est nesciunt velit. Sed vitae consequuntur et veniam amet aut optio dolor qui deserunt expedita et tempore consequatur!'),
(40, 'art 2', 'cat2', 'img/blog/img_blog4.jpg', '<p>Lorem ipsum dolor sit amet. Non porro harum 33 ducimus repudiandae aut cupiditate voluptatem et quia impedit eum doloribus cumque. Ut odit quia 33 explicabo tempore aut aperiam assumenda non quibusdam quibusdam et unde odio aut omnis excepturi. Quo consequatur neque ut sunt voluptates est nesciunt velit. Sed vitae consequuntur et veniam amet aut optio dolor qui deserunt expedita et tempore consequatur!<br></p>');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` int(11) NOT NULL DEFAULT '0',
  `user_mail` text NOT NULL,
  `user_password` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_role`, `user_mail`, `user_password`) VALUES
(1, 0, 'arthur', '$2y$10$LE0DSI0ZuuS3Fx2ESu8lI.sZjld18KHahppmO71IPhJLiNX1Foo3O'),
(2, 1, 'a1', '$2y$10$rq2KHtNgyfChgsAb0E4e0eDkqoSqR1L.yYNkaCkgRKdEa93uLT0ta'),
(3, 1, 'a2', '$2y$10$gaD3r7UDIIKfFBJb8v12Reu.CTFckTRgSeobTBQmX/vyFAahfD/b2'),
(6, 0, 'a5', '$2y$10$QmnE0uZGiPavGvlkAnf5yuzCp3NlUZye/VxtYQn9AcQMOOE9tgcsy'),
(7, 0, 'a6', '$2y$10$uyzRKBrLHNlJxfrgLrsGneotMEmgNenA03NQiRybp0lOJ4BpKXXJC'),
(8, 0, 'a8', '$2y$10$WPvzX8rBagbCXElx97ipN.4RSAif2vsmEqkiiSbhS158LrF81CBFu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
