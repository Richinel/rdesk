-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 21 nov 2016 om 00:17
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `rdesk`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `postdate` int(50) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'openstaand',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Gegevens worden geëxporteerd voor tabel `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `subject`, `msg`, `created_by`, `priority`, `postdate`, `status`, `deleted`) VALUES
(28, 'Internet werkt niet?', 'Mijn internet roaming werkt niet in België en Frankrijk. Telefoon goed ingesteld. Simyo instellingen ook. Zelfs de apn van de telefoon van mijn partner overgenomen, die wel werkend internet heeft in deze landen via simyo sim only.\r\nWat kan ik nog doen ?\r\n\r\nGroeten,\r\nPieter', '2', 1, 1479610226, 'openstaand', 0),
(29, 'Scanner lijkt defect?', 'Hallo,\r\n\r\nMijn scanner gaat wel aan, maar mijn computer herkent hem niet. Zou hier aub naar gekeken kunnen worden?\r\n\r\nMet vriendelijke groet,\r\nJan', '3', 1, 1479610902, 'openstaand', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(1, 'Richinel', 'Jarbandhan', 'rj_1993@live.nl', '1234567', 3),
(2, 'Rohit', 'Debidien', 'rohit1@live.nl', '1234567', 1),
(3, 'Jan', 'Zondergeld', 'j.zondergeld@gmail.com', '1234567', 1),
(4, 'Dirk', 'Metgeld', 'd.metgeld@gmail.com', '1234567', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
