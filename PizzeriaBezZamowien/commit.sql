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
-- Baza danych: `komentarze`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `commit`
--

CREATE TABLE `commit` (
  `id_commit` int(11) NOT NULL,
  `id_paragon` int(255) NOT NULL,
  `komentarz` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `commit`
--

INSERT INTO `commit` (`id_commit`, `id_paragon`, `komentarz`) VALUES
(1, 1, 'Fragment tekstu');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `commit`
--
ALTER TABLE `commit`
  ADD PRIMARY KEY (`id_commit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `commit`
--
ALTER TABLE `commit`
  MODIFY `id_commit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
