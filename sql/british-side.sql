-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Dez 2018 um 14:57
-- Server-Version: 10.1.37-MariaDB
-- PHP-Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `british-side`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(11) NOT NULL,
  `Username` varchar(35) NOT NULL,
  `Password` text NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Country` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `accounts`
--

INSERT INTO `accounts` (`ID`, `Username`, `Password`, `Email`, `Country`) VALUES
(2, 'Goldcaust', '618f6bee848ce8306ddcde1fd310f9fd36bc25e13caf8aefc6c587ff89246861', '', 'England');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryTitle` varchar(35) NOT NULL,
  `CategoryDescription` varchar(55) NOT NULL,
  `OrderList` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryTitle`, `CategoryDescription`, `OrderList`) VALUES
(1, 'A simple test', 'This category is our first one.', 2),
(2, 'Announcements', 'Check out our news here!', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `replies`
--

CREATE TABLE `replies` (
  `ReplyID` int(11) NOT NULL,
  `CreatorID` int(11) NOT NULL,
  `ReplyContent` text NOT NULL,
  `TopicID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `replies`
--

INSERT INTO `replies` (`ReplyID`, `CreatorID`, `ReplyContent`, `TopicID`) VALUES
(1, 2, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   \r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,', 1),
(2, 2, 'rgerg', 1),
(3, 2, 'ghjgjhgj', 1),
(4, 2, 'rdgerg<br /><br />reggreg<br />geg', 1),
(5, 2, 're', 1),
(6, 2, 'ijeip', 1),
(7, 2, 'rgeg<br /><br /><br />ergr', 1),
(8, 2, 'Having another referendum [X]', 8);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `settings`
--

CREATE TABLE `settings` (
  `PageTitle` varchar(35) NOT NULL,
  `PageDescription` varchar(240) NOT NULL,
  `PageStatus` int(11) NOT NULL DEFAULT '1',
  `PageURL` varchar(120) NOT NULL,
  `PageTheme` varchar(20) NOT NULL,
  `PageDomain` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `settings`
--

INSERT INTO `settings` (`PageTitle`, `PageDescription`, `PageStatus`, `PageURL`, `PageTheme`, `PageDomain`) VALUES
('British Side', 'We made an excellent server of Northern Ireland, Scotland, England and Wales. <br />Join our server and get the roleplay life you want!', 1, 'http://127.0.0.1/\r\n', 'black', '.dev');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `topics`
--

CREATE TABLE `topics` (
  `TopicID` int(11) NOT NULL,
  `CreatorID` int(11) NOT NULL,
  `TopicTitle` varchar(35) NOT NULL,
  `TopicContent` text NOT NULL,
  `CategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `topics`
--

INSERT INTO `topics` (`TopicID`, `CreatorID`, `TopicTitle`, `TopicContent`, `CategoryID`) VALUES
(1, 2, 'Test Topic', 'Our first topic', 1),
(2, 2, 'Test', 'thrh', 1),
(3, 2, 'Should we do a second referendum?', 'Hello!\r\nThere have been many people who are backing for a second referendum about kicking \'Northern Ireland\' o', 1),
(5, 2, 'rgd', 'grdg', 1),
(8, 2, 'Should we have a second referendum?', 'Hello,<br /><br />many people in the United Kingdom voted for kicking Northern Ireland out of the United Kingdom,<br />now people seem like to change their opinion about it and want to have a second referendum.<br /><br />I will give you the option to vote for either having another referendum or keeping the old results.<br />Please vote either:<br /><br />- Having another referendum [X]<br />- Keeping the old results (Kicking Northern Ireland out of the United Kingdom permanently) [X]<br /><br />(Votes will NOT be counted if your message contains more than one of the two options or additional sentences)<br />You are only allowed to vote once, for one decision.<br /><br />- Your PM', 2),
(9, 2, 'Test', 'hh', 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indizes für die Tabelle `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`ReplyID`);

--
-- Indizes für die Tabelle `settings`
--
ALTER TABLE `settings`
  ADD UNIQUE KEY `PageTitle` (`PageTitle`);

--
-- Indizes für die Tabelle `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`TopicID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `replies`
--
ALTER TABLE `replies`
  MODIFY `ReplyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `topics`
--
ALTER TABLE `topics`
  MODIFY `TopicID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
