-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 20. Mrz 2020 um 16:40
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_michael_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(10) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ISBN` int(25) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `type`, `title`, `image`, `author`, `ISBN`, `short_description`, `publish_date`, `publisher`) VALUES
(7, 'Movies', 'Full Metal Jacket', 'https://images-na.ssl-images-amazon.com/images/I/41KGXEV1V8L._SY445_.jpg', 'Stanley Kubrick', 666, 'This is a short description of the movie', '1987-06-17', 'Stanley Kubrick'),
(8, 'Book', 'Der Soldat und das Mädchen', 'https://images2.medimops.eu/product/affe99/M03218007070-source.jpg', 'Michael Schano', 65416, 'This is a short description for the book', '2002-08-06', 'Bungeisha'),
(9, 'Music', 'Gorillaz', 'https://images2.medimops.eu/product/6d15bf/M0B00005A3N1-large.jpg', 'Gorillaz', 6054, 'This is a short description of the Album', '2001-03-26', 'Parlophone, Virgin'),
(10, 'Book', 'The Catcher In The Rye', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/The_Catcher_in_the_Rye_%281951%2C_first_edition_cover%29.jpg/220px-The_Catcher_in_the_Rye_%281951%2C_first_edition_cover%29.jpg', 'J.D. Salinger', 54465, 'This is a short description of the Book', '1951-07-16', 'Little, Brown and Company'),
(11, 'Book', 'Mein Kampf', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtRcCKmd9KbWAlwnWeF1ZcgxX3HWEbaFj1JPahgY-M6JgkMlyh', 'Adolf Hitler', 951659, 'This is a short description of the Book', '1925-07-18', 'Rudolf Heß'),
(12, 'Book', 'The Communist Manifesto', 'https://images-na.ssl-images-amazon.com/images/I/51vHCno0a4L._SX330_BO1,204,203,200_.jpg', 'Karl Marx', 65165, 'This is a short description of the Book', '1848-02-01', 'Karl Marx'),
(13, 'Video Game', 'Shower With Your Dad Simulator', 'https://www.keyforsteam.de/wp-content/uploads/buy-shower-with-your-dad-simulator-2015-do-you-still-shower-with-your-dad-cd-key-pc-download-img1.jpg', 'Marbenx', 95818965, 'This is a short description of the Video Game', '2016-08-03', 'Marbenx'),
(14, 'Music', 'Kastelruther Spatzen Feuervogel Flieg', 'https://www.musicversand.ch//Files/9/137000/137504/ProductPhotos/Source/1011583760.jpg', 'Kastelruther Spatzen', 6517, 'This is a short description of the Album', '2019-10-04', 'Electrola'),
(15, 'Movies', 'Pulp Fiction', 'https://image.film.at/images/original/2891334/img.jpg', 'Quentin Tarantino', 65195756, 'This is a short description of the movie', '1994-09-10', 'Quentin Tarantino'),
(84, 'Movies', 'The Big Lebowski', 'https://image.film.at/images/original/2912517/img.jpg', 'Coen Brothers', 234, 'This is a short description of the movie', '1998-03-06', 'Ethan Coen, Joel Coen');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
