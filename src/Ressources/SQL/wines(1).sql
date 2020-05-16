-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 16 mai 2020 à 16:52
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wines`
--

-- --------------------------------------------------------

--
-- Structure de la table `wines`
--

CREATE TABLE `wines` (
  `id` int(11) NOT NULL,
  `code` varchar(4) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `alchoholpercent` int(11) DEFAULT NULL,
  `qtyAvailable` smallint(6) NOT NULL DEFAULT 0,
  `description` varchar(200) NOT NULL DEFAULT '0',
  `oldPrice` float NOT NULL,
  `price` float UNSIGNED NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `active` tinyint(4) UNSIGNED NOT NULL DEFAULT 0,
  `winecolor` varchar(255) DEFAULT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `wines`
--

INSERT INTO `wines` (`id`, `code`, `brand`, `model`, `alchoholpercent`, `qtyAvailable`, `description`, `oldPrice`, `price`, `photo`, `active`, `winecolor`, `rating`) VALUES
(1, 'A001', 'Notre Vin', 'Chateau-la-Fuite', 15, 22, '- Aimable 	Agréable à boire.\r\n- Aimable 	Agréable à boire.\r\n- Bourru 	Vin à peine tiré du tonneau qui doit être bu jeune.\r\n- Canaille 	Jeune, désaltérant et frais (primeur).\r\n', 350, 290, 'view/content/images/products/wine_1.png', 1, 'Rouge', 3),
(2, 'A002', 'Notre Vin', 'Sauvignion', 14, 2, '- Frais 	Jeune et léger qui donne en bouche une sensation de fraicheur.\r\n- Franc 	Qui n\'a pas de faux goûts, mais ceux de son raisin et de son terroir.\r\n- Friand 	Agréable, désaltérant (primeur).', 700, 550, 'view/content/images/products/wine_2.png', 1, 'Blanc', 4),
(3, 'A003', 'Notre Vin', 'St-Valentin', 13, 6, '- Léger 	Peu alcoolisé, discret.\r\n- Moelleux 	A la douceur velouté, qui se situe dans les vins blans entre le sec et le liquoreux.\r\n- Nerveux 	Ferme, qui fouette.', 500, 400, 'view/content/images/products/wine_3.png', 0, 'Rosé', 4),
(4, 'A004', 'Notre Vin', 'Morgan', 15, 2, '- Noble 	De supériorité durable et indiscutable.\r\n- Oncteux 	Blanc liquoreux, fluide.\r\n- Puissant 	Très corsé, musclé.\r\n- Racé 	Typique de son terroir.\r\n- Souple 	Qui glisse harmonieusement.', 800, 600, 'view/content/images/products/wine_4.png', 1, 'Rouge', 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `wines`
--
ALTER TABLE `wines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `snow_code` (`code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `wines`
--
ALTER TABLE `wines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
