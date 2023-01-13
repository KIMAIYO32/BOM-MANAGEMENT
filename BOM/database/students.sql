-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 09:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `bomk`
--

CREATE TABLE `bomk` (
  `id` int(11) NOT NULL,
  `idno` int(240) NOT NULL,
  `firstname` varchar(240) NOT NULL,
  `lastname` varchar(240) NOT NULL,
  `pnumber` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `academic` varchar(40) NOT NULL,
  `current` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bomk`
--

INSERT INTO `bomk` (`id`, `idno`, `firstname`, `lastname`, `pnumber`, `email`, `academic`, `current`) VALUES
(10, 34890811, 'kkkk', 'koech', '0721845749', 'harryden@gmail.com', 'higher', 'cook'),
(11, 39612108, 'kipchumba', 'kogei', '0723456789', 'kogei@gmail.com', 'posta graduate', 'cook'),
(12, 34890811, 'PIUS', 'koech', '0721845749', 'kimaiyop3@gmail.com', 'posta graduate', 'pastor'),
(13, 39612108, 'kamau', 'amina', '0721845749', 'korirkimaiyo32@gmail.com', 'diploma', 'ict'),
(14, 32257273, 'PIUS', 'Korir', '0721845749', 'harryden@gmail.com', 'degree', 'cleaner'),
(17, 39612108, 'korir', 'sharon', '0710488583', 'kimaiyop3@gmail.com', 'doctorate', 'cook'),
(18, 121212121, 'pere', 'kawira', '0710488583', 'kimaiyop3@gmail.com', 'higher', 'cleaner'),
(28, 0, '', '', '', '', 'certificate', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `sponsor` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `regi` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `sponsor`, `email`, `regi`, `password`) VALUES
(1, 'PIUS', 'KIMAIYO', 'kimaiyop3@gmail.com', '', '$2y$10$HKMM98GWj4jo/hiLzfzQLOKHZ4H1AcozU'),
(2, 'PIUS', 'KIMAIYO', 'kimaiyop3@gmail.com', '', '$2y$10$ohU4nXdWTb/hpbzXqulEfOr7aQ0hOsJRw'),
(3, 'kipchumba', 'kogei', 'korirkimaiyo32@gmail.com', '', '$2y$10$0F2cq3JFsYriTLf12C1Bxu03L6S7V6gwl'),
(4, 'kipchumba', 'KIMAIYO', 'harryden@gmail.com', '', '$2y$10$jtGAvD2UVhB3iksrU.vNL.KpQF9YYmQuy'),
(5, 'EVA', 'KIMAIYO', 'admin@gmail.com', '', '$2y$10$lJaJRX8WfTMyA5VxqkUET.3amw2y/hXme'),
(6, 'PIUS', 'KIMAIYO', 'kimaiyop3@gmail.com', '', '$2y$10$1h2HSYDzgFhs24XV6vU.wuq55iS/xw7SW'),
(7, 'kapchebutuk primary', 'SDA', 'kapchebutuk@gmail.com', '2323245467', '$2y$10$8K7AIKEwNquL.bvZEMUWme2gE9VHP3Wp1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bomk`
--
ALTER TABLE `bomk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bomk`
--
ALTER TABLE `bomk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
