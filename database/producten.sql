-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 12 apr 2024 om 21:46
-- Serverversie: 8.2.0
-- PHP-versie: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

DROP TABLE IF EXISTS `producten`;
CREATE TABLE IF NOT EXISTS `producten` (
  `id` int NOT NULL AUTO_INCREMENT,
  `productnaam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `prijs` double NOT NULL,
  `categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`id`, `productnaam`, `omschrijving`, `prijs`, `categorie`) VALUES
(58, 'Viandel', 'Gefrituurde snack van vlees in een langwerpige vorm', 1.75, 'snack'),
(59, 'Mexicano', 'Pikante gefrituurde snack met vlees', 2.25, 'snack'),
(60, 'bamikoolschijf', 'Gefrituurde snack met zuurkool', 2.5, 'snack'),
(61, 'Satekroket', 'Gefrituurde snack met satésaus en ragout', 2.25, 'snack'),
(62, 'Kipnuggets', 'Gefrituurde stukjes kip', 3, 'snack'),
(63, 'Halve haan', 'Gefrituurde halve kip', 5.5, 'snack'),
(64, 'Bitterballen', 'Krokante snack met ragout', 2, 'snack'),
(65, 'Gehaktbal', 'Grote gehaktbal in saus', 3.75, 'snack'),
(66, 'Kaassoufflé speciaal', 'Kaassoufflé met uitjes en speciale saus', 2.75, 'snack'),
(67, 'Supersize patat', 'Extra grote portie patat', 5, 'snack');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
