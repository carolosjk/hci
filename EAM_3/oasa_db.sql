-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 07:22 AM
-- Server version: 10.4.11-MariaDB
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
-- Database: `oasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` varchar(5) NOT NULL,
  `start` varchar(100) NOT NULL,
  `end` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `start`, `end`) VALUES
('131', 'ΑΜΑΞ. ΑΓ. ΔΗΜΗΤΡΙΟΥ', 'ΣΤ. ΔΑΦΝΗΣ'),
('136', 'ΑΝΩ Ν. ΣΜΥΡΝΗ Β', 'ΣΤ. ΣΥΓΓΡΟΥ ΦΙΞ'),
('137', 'ΑΝΩ Ν. ΣΜΥΡΝΗ Α', 'ΣΤ. ΣΥΓΓΡΟΥ ΦΙΞ'),
('218', 'ΠΕΙΡΑΙΑΣ', 'ΣΤ. ΔΑΦΝΗ'),
('219', 'ΣΤ. ΚΑΛΛΙΘΕΑ', 'ΑΓ. ΔΗΜΗΤΡΙΟΣ'),
('224', 'ΚΑΙΣΑΡΙΑΝΗ', 'ΕΛ. ΒΕΝΙΖΕΛΟΥ'),
('250', 'ΠΑΝΕΠΙΣΤΗΜΙΟΥΠΟΛΗ', 'ΣΤ. ΕΥΑΓΓΕΛΙΣΜΟΥ'),
('E90', 'ΠΕΙΡΑΙΑΣ ', 'ΠΑΝΕΠΙΣΤΗΜΙΟΥΠΟΛΗ'),
('X93', 'ΠΕΙΡΑΙΑΣ ', 'ΑΕΡΟΛ. ΑΘΗΝΩΝ'),
('X95', 'ΣΥΝΤΑΓΜΑ', 'ΑΕΡΟΛ. ΑΘΗΝΩΝ');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `station` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`station`) VALUES
('ΑΓ. ΔΗΜΗΤΡΙΟΣ'),
('ΑΕΡΟΛ. ΑΘΗΝΩΝ'),
('ΑΜΑΞ. ΑΓ. ΔΗΜΗΤΡΙΟΥ'),
('ΑΝΩ Ν. ΣΜΥΡΝΗ Α'),
('ΑΝΩ Ν. ΣΜΥΡΝΗ Β'),
('ΕΛ. ΒΕΝΙΖΕΛΟΥ'),
('ΚΑΙΣΑΡΙΑΝΗ'),
('ΠΑΝΕΠΙΣΤΗΜΙΟΥΠΟΛΗ'),
('ΠΕΙΡΑΙΑΣ'),
('ΣΤ. ΔΑΦΝΗΣ'),
('ΣΤ. ΕΥΑΓΓΕΛΙΣΜΟΥ'),
('ΣΤ. ΚΑΛΛΙΘΕΑ'),
('ΣΤ. ΣΥΓΓΡΟΥ ΦΙΞ'),
('ΣΥΝΤΑΓΜΑ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `name`, `surname`, `address`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin'),
('carolosjk@hotmail.com', '123456', 'Karolos', 'Giampouonka-Kanellakos', 'Adrianoupoleos 54, Nea Smirni'),
('sdi1600030@di.uoa.gr', '123456', 'Karolos', 'Giampouonka-Kanellakos', 'Adrianoupoleos 54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`station`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
