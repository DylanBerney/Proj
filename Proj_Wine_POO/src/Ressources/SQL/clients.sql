-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 03 juin 2020 à 19:02
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wines`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `company` varchar(150) NOT NULL,
  `client_address` varchar(200) NOT NULL,
  `client_address_suite` varchar(200) NOT NULL,
  `client_country` varchar(200) NOT NULL,
  `client_zip_post` int(200) NOT NULL,
  `client_email` varchar(200) NOT NULL,
  `client_phone` varchar(200) NOT NULL,
  `client_account` varchar(200) NOT NULL,
  `shipping_country` varchar(200) NOT NULL,
  `shipping_address` varchar(200) NOT NULL,
  `shipping__suite` varchar(200) NOT NULL,
  `shipping_zip_poste` varchar(200) NOT NULL,
  `shipping_email` varchar(200) NOT NULL,
  `shipping_phone` varchar(200) NOT NULL,
  `client_other_notes` varchar(200) NOT NULL,
  `reduction` varchar(200) NOT NULL,
  `selled_products` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
