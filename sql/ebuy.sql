-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 09 août 2019 à 11:15
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ebuy`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nomArticle` varchar(50) NOT NULL,
  `prixArticle` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `nomArticle`, `prixArticle`, `description`, `image`) VALUES
(1, 'Pc gamer', 1000, 'Une machine d\'exception, équipée du fer de lance de NVIDIA : la GeForce GTX 1080. Un PC gamer pour les joueurs qui recherchent le meilleur.', 'https://pic.clubic.com/v1/images/1731028/raw?width=1200&fit=max&hash=45afc0e0678b08791a0c5f7f1c8e7bb0216db736'),
(2, 'Smartphone Samsung', 300, 'Le Galaxy S8 est le smartphone phare de Samsung qui succède au S7. Il est accompagné du S8+ aux caractéristiques identiques mais avec un écran plus grand', 'https://images.fr.shopping.rakuten.com/photo/samsung-galaxy-s8-android-7-0-nougat-64-go-noir-1211020317_L.jpg'),
(3, 'Canapé', 500, 'Le canapé d’angle MONTREAL imposera un ton moderne et urbain à votre salon grâce à son tissu coloris anthracite. Pouvant accueillir jusqu’à quatre personnes.', 'https://www.pfister.ch/mam/celum/celum_assets/b7c/03c/00184730_mia-eckgarnitur_01_tif_product_l.jpg'),
(4, 'TV 43\'4K HD', 289, 'Le Continental Edison 43 4K UHD est un modèle Ultra HD d\'entrée de gamme équipé sur le papier d\'une dalle VA ', 'https://dyw7ncnq1en5l.cloudfront.net/optim/produits/626/51615/continental-edison-43-4k-uhd_49fd0be0f4254cbd__450_400.jpg'),
(6, 'Tireuse à bière', 190, 'Krups VB700800 Tireuse à Bière Pression BeerTender Noir Machine à bière Pompe Fût 5L', 'http://tireuseabiere.net/wp-content/uploads/2015/12/tireuseabiere_Seb_VB215700-300x300.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` smallint(1) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `password`, `email`) VALUES
(20, 'Inferno', '$2y$10$4Xz1Ku2N9tDGm05Bqb3R6urJNwzJm3y5jXceX5JZ748kc7WheEsVS', 'noemie.lecleve@live.fr'),
(42, 'Kristian', '$2y$10$LsNYnPTjt5.MiH6nQFTv6OOZHx6YyBh/8QFg.fimEglYiVnYNrzwm', 'noemie.lecleve@live.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
