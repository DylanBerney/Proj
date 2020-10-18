-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 14 mai 2020 à 13:47
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
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `userEmailAddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userHashPsw` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `userEmailAddress`, `userHashPsw`) VALUES
(1, 'pascal.benzonana@cpnv.ch', '$2y$10$YZ0NI7ZzwnOxvEFYpw2K9OnXwguZJmwmEJJOWGUwUUzPlYOEiK/QC'),
(2, 'nicolas.glassey@gmail.ch', '$2y$10$oO6Ktigx01Kz7Si4UOB2ruJWzLA2mMNwsr7WBWAv5KtdvqADklnIO'),
(3, 'paul.hauchon@cpnv.ch', '$2y$10$gXCKnjil/T9aEJ1KL/FDEuHRkqJdoP6njLEhNLYeD9YZC.RnTp4lu');

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
  `dailyPrice` float UNSIGNED NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `active` tinyint(4) UNSIGNED NOT NULL DEFAULT 0,
  `winecolor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `wines`
--

INSERT INTO `wines` (`id`, `code`, `brand`, `model`, `alchoholpercent`, `qtyAvailable`, `description`, `dailyPrice`, `photo`, `active`, `winecolor`) VALUES
(1, 'A001', 'Notre Vin', 'Rouge', 20, 22, '- Aimable 	Agréable à boire.\r\n- Aimable 	Agréable à boire.\r\n- Bourru 	Vin à peine tiré du tonneau qui doit être bu jeune.\r\n- Canaille 	Jeune, désaltérant et frais (primeur).\r\n', 29, 'view/content/images/wine_1.png', 1, NULL),
(2, 'A002', 'Notre Vin', 'Blanc', 14, 2, '- Frais 	Jeune et léger qui donne en bouche une sensation de fraicheur.\r\n- Franc 	Qui n\'a pas de faux goûts, mais ceux de son raisin et de son terroir.\r\n- Friand 	Agréable, désaltérant (primeur).', 45, 'view/content/images/wine_2.png', 1, NULL),
(3, 'A003', 'Notre Vin', 'Rosé', 13, 6, '- Léger 	Peu alcoolisé, discret.\r\n- Moelleux 	A la douceur velouté, qui se situe dans les vins blans entre le sec et le liquoreux.\r\n- Nerveux 	Ferme, qui fouette.', 25, 'view/content/images/wine_3.png', 0, NULL),
(4, 'A004', 'Notre Vin', 'Morgan', 15, 2, '- Noble 	De supériorité durable et indiscutable.\r\n- Oncteux 	Blanc liquoreux, fluide.\r\n- Puissant 	Très corsé, musclé.\r\n- Racé 	Typique de son terroir.\r\n- Souple 	Qui glisse harmonieusement.', 29, 'view/content/images/wine_4.png', 1, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userEmailAddress` (`userEmailAddress`);

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
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `wines`
--
ALTER TABLE `wines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
