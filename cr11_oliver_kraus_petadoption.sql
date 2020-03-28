-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 28. Mrz 2020 um 13:02
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
-- Datenbank: `cr11_oliver_kraus_petadoption`
--
CREATE DATABASE IF NOT EXISTS `cr11_oliver_kraus_petadoption` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr11_oliver_kraus_petadoption`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `large_animals`
--

CREATE TABLE `large_animals` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hobbies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `large_animals`
--

INSERT INTO `large_animals` (`id`, `location`, `image`, `name`, `description`, `hobbies`) VALUES
(9, 'Zoostraße 1', 'https://images.unsplash.com/photo-1532301371038-85df63be6e13?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80', 'Dumbo', 'loves playing, good company', 'playing with balls'),
(10, 'Zoostraße 1', 'https://images.unsplash.com/photo-1552410260-0fd9b577afa6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80', 'Simbad', 'majestic creature, loves to be petted', 'sitting around, growling'),
(11, 'Zoostraße 1', 'https://images.unsplash.com/photo-1432836606614-05efc6b80bd4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80', 'Nanu', 'loves climbing trees', 'doing sudokus'),
(12, 'Zoostraße 1', 'https://images.unsplash.com/photo-1553284965-5dd8352ff1bd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80', 'Gisella', 'loves apples, very fast', 'playing and running outside');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `senior_animals`
--

CREATE TABLE `senior_animals` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(2) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `senior_animals`
--

INSERT INTO `senior_animals` (`id`, `location`, `image`, `description`, `name`, `age`, `hobbies`, `date`) VALUES
(7, 'Zoostraße 1', 'https://images.unsplash.com/photo-1550849374-cb716984f027?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80', 'old elephant', 'Nina', 13, 'playing with balls', '2008-01-19'),
(8, 'Zoostraße 1', 'https://images.unsplash.com/photo-1504208434309-cb69f4fe52b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80', 'loyal pet', 'Honey', 9, 'playing catch', '2011-07-22'),
(9, 'Zoostraße 1', 'https://images.unsplash.com/photo-1470688090067-6d429c0b2600?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80', 'very calm and relaxed creature', 'Lilo', 12, 'eating', '2009-11-13'),
(10, 'Zoostraße 1', 'https://images.unsplash.com/photo-1463852247062-1bbca38f7805?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjQzMzEwfQ&auto=format&fit=crop&w=1355&q=80', 'monkey, very shy', 'Rija', 8, 'climbing', '2012-07-20');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `small_animals`
--

CREATE TABLE `small_animals` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `small_animals`
--

INSERT INTO `small_animals` (`id`, `location`, `image`, `name`, `description`, `website`) VALUES
(13, 'Praterstraße 3', 'https://images.unsplash.com/photo-1534361960057-19889db9621e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80', 'Schnuffi', 'Doggy, good, likes playing', 'https://unsplash.com/'),
(14, 'Maxerstraße 5', 'https://images.unsplash.com/photo-1532802245604-c567f1acd48e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2013&q=80', 'Izzy', 'Tarantula. cute little pet', 'https://unsplash.com/'),
(15, 'Burgstraße 19', 'https://images.unsplash.com/photo-1425082661705-1834bfd09dca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1355&q=80', 'Rudi', 'little hamster, loves to play', 'https://unsplash.com/'),
(16, 'Neubaugasse 14', 'https://images.unsplash.com/photo-1502780402662-acc01c084a25?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1380&q=80', 'Jumpy', 'green slime frog, originally from the amazonas', 'https://unsplash.com/');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `status` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `status`) VALUES
(2, 'sam', 'sam@sam.at', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'user'),
(3, 'admin', 'admin@admin.at', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'admin'),
(4, 'nicki', 'nicki@nicki.at', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'user');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `large_animals`
--
ALTER TABLE `large_animals`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `senior_animals`
--
ALTER TABLE `senior_animals`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `small_animals`
--
ALTER TABLE `small_animals`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `large_animals`
--
ALTER TABLE `large_animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `senior_animals`
--
ALTER TABLE `senior_animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `small_animals`
--
ALTER TABLE `small_animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
