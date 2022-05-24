-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2020 at 04:41 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eminor`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `accetto` tinyint(1) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scoreP` int(11) NOT NULL DEFAULT '0',
  `scoreB` int(11) NOT NULL DEFAULT '0',
  `scoreG` int(11) NOT NULL DEFAULT '0',
  `scoreD` int(11) NOT NULL DEFAULT '0',
  `keycontrol` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nome`, `email`, `password`, `accetto`, `id`, `data`, `scoreP`, `scoreB`, `scoreG`, `scoreD`, `keycontrol`) VALUES
('Rocci', 'riccilorenzo@hotmail.com', '$2y$10$/FSLn/WWnkIlVC4cyf9wxOwPy4ZJpsj6WyGtDXWxTSzDqnEzSPZlW', 1, 1, '2020-05-31 15:36:35', 1, 14, 27, 3, ''),
('Emanuele', 'lollofrutto@gmail.com', '$2y$10$m6AvrnQBjP43V3j7vp3GxezK3DFgwYCKfzWuHF/DJPIW3vynKZyyG', 1, 2, '2020-05-31 15:37:51', 21, 53, 15, 318, ''),
('Gianluca', 'riccilorenzo@live.com', '$2y$10$VsD5/PCxa66VZo0Gkj0Jn.PB7xhZ1FirEIee6htE8s47rX27/mUSe', 1, 3, '2020-05-31 16:08:29', 210, 0, 0, 5, ''),
('Vincenzo', 'eminortest@gmail.com', '$2y$10$SVTL3Zi26CdkGTSet0x2JOoCMn3z8SRXmgJTfCL3MAq7CaM7YvdHq', 1, 4, '2020-05-31 16:10:51', 15, 119, 7, 0, ''),
('Lucia', 'test@gmail.com', '$2y$10$boJV1zU.a2N9W5QiU5Nu8OaFa52CFx8kKeLK1mhko2JcFg9v5.Yd6', 1, 5, '2020-05-31 16:16:30', 6, 9, 5, 4, ''),
('Matteo', 'eminordummy@gmail.com', '$2y$10$9/D8AZiLGdkh3cpqRGsOC.la8w3gGtRXPrKcOuEI2mc7MTzZJf3T.', 1, 6, '2020-05-31 16:20:00', 132, 16, 32, 27, ''),
('Valeria ', 'dummy@gmail.com', '$2y$10$UTpBLBhOcU4MqygKhp188eEZCk96dTlywCb7tLFCSGKq62ULzKPKG', 1, 7, '2020-05-31 16:20:55', 128, 214, 35, 10, ''),
('Leonardo', 'dummytest@gmail.com', '$2y$10$2HsZQGOm4z7NLLjk7nnKWug0fXnL3U1e1apPWwWndNK87SCPT.Dga', 1, 8, '2020-05-31 16:21:24', 0, 152, 113, 18, ''),
('Ludovico', 'test123@gmail.com', '$2y$10$5lqLqikgWcyeBooTZ2zTJuEmDTWa1OW/DdjwKdbrUwUnEEOdgVupm', 1, 9, '2020-05-31 16:21:58', 13, 9, 0, 0, ''),
('Andrea', 'coggio@gmail.com', '$2y$10$GAxbddRu75JXm5njAyDmuOKt.h2LkzLD.aFAfmSxIKNfOw31V7x1C', 1, 10, '2020-05-31 16:22:49', 81, 0, 15, 221, ''),
('Giada', 'giada@gmail.com', '$2y$10$mDkzKDgILZA1/DSqevswieFqCOk0.Oxaz03puEAG.q3ZFNG/XtEaK', 1, 11, '2020-05-31 16:23:05', 31, 0, 3, 151, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
