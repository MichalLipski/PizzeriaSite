-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Mar 2018, 20:45
-- Wersja serwera: 10.1.31-MariaDB
-- Wersja PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `promocja`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `promotion`
--

CREATE TABLE `promotion` (
  `Id_promotion` int(11) NOT NULL,
  `promo` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `promotion`
--

INSERT INTO `promotion` (`Id_promotion`, `promo`) VALUES
(1, 'Grecka');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`Id_promotion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `promotion`
--
ALTER TABLE `promotion`
  MODIFY `Id_promotion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
