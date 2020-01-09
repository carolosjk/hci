-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 02:53 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `OASA`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_points`
--

CREATE TABLE `access_points` (
  `Κωδικός στάσης` int(11) NOT NULL,
  `Όνομα στάσης` varchar(150) NOT NULL,
  `Διεύθυνση στάσης` varchar(150) NOT NULL,
  `Δήμος` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_points`
--

INSERT INTO `access_points` (`Κωδικός στάσης`, `Όνομα στάσης`, `Διεύθυνση στάσης`, `Δήμος`) VALUES
(60050, 'ΑΓ.ΔΗΜΗΤΡΙΟΣ', 'ΠΑΝΟΡΜΟΥ', 'ΑΘΗΝΑΙΩΝ'),
(60758, '2η ΡΙΖΑΡΗ', 'ΡΙΖΑΡΗ', 'ΑΘΗΝΑΙΩΝ'),
(60909, 'ΑΓ.ΕΛΕΥΘΕΡΙΟΣ', 'ΑΧΑΡΝΩΝ', 'ΑΘΗΝΑΙΩΝ'),
(60950, '2η ΑΙΓΑΙΟΥ', 'ΚΡΑΤΗΤΟΣ', 'Ν. ΣΜΥΡΝΗΣ'),
(61026, '2η ΣΧΟΛΕΙΟ', 'ΕΥΦΡΟΝΙΟΥ', 'ΑΘΗΝΑΙΩΝ'),
(61151, '1η ΡΙΖΑΡΗ', 'ΡΙΖΑΡΗ', 'ΑΘΗΝΑΙΩΝ'),
(70015, 'ΑΓ.ΓΕΩΡΓΙΟΣ', 'ΙΕΡΑΣ ΟΔΟΥ', 'ΑΙΓΑΛΕΩ'),
(90075, 'ΕΜΠ.ΚΕΝΤΡΟ', 'ΑΓ.ΚΩΝΣΤΑΝΤΙΝΟΥ', 'ΑΜΑΡΟΥΣΙΟΥ'),
(90167, 'INTERAMERIKAN', 'ΑΓ.ΚΩΝΣΤΑΝΤΙΝΟΥ', 'ΑΜΑΡΟΥΣΙΟΥ'),
(100181, 'ΠΑΝΟΡΑΜΑ', 'ΔΙΑΝΘΟΥ(ΜΟΡΝΟΥ)', 'ΦΥΛΗ'),
(100186, 'ΚΑΡΑΙΣΚΑΚΗ', 'ΔΙΑΝΘΟΥ(ΜΟΡΝΟΥ)', 'ΦΥΛΗΣ'),
(110036, '4η ΑΡΓΥΡΟΥΠΟΛΕΩΣ', 'ΓΕΡΟΥΛΑΝΟΥ', 'ΕΛΛΗΝΙΚΟΥ-ΑΡΓΥΡΟΥΠΟΛΗΣ'),
(110045, 'ΠΛ.ΗΡΩΩΝ ΠΟΛΥΤΕΧΝΕΙΟΥ', 'ΓΕΡΟΥΛΑΝΟΥ', 'ΕΛΛΗΝΙΚΟΥ-ΑΡΓΥΡΟΥΠΟΛΗΣ'),
(110055, 'ΦΑΡΜΑΚΕΙΟ', 'ΓΕΩΓ.ΠΑΠΑΝΔΡΕΟΥ', 'ΕΛΛΗΝΙΚΟΥ-ΑΡΓΥΡΟΥΠΟΛΗΣ'),
(130081, '10η ΘΡΑΚΟΜΑΚΕΔΟΝΩΝ', 'ΘΡΑΚΟΜΑΚΕΔΟΝΩΝ', 'ΑΧΑΡΝΩΝ'),
(140003, 'ΑΓΟΡΑ ΒΥΡΩΝΑ', 'ΛΕΩΦ.ΚΥΠΡΟΥ', 'ΒΥΡΩΝΑ'),
(140006, 'ΙΚΑ', 'ΚΑΡΑΟΛΗ & ΔΗΜΗΤΡΙΟΥ', 'ΒΥΡΩΝΑ'),
(140025, 'ΔΗΜΑΡΧΕΙΟ', 'ΛΕΩΦ.ΧΡ.ΣΜΥΡΝΗΣ', 'ΒΥΡΩΝΑ'),
(140068, 'ΒΟΥΤΖΑ', 'ΒΟΥΤΖΑ', 'ΒΥΡΩΝΑ'),
(160002, 'ΤΡΑΠΕΖΑ	', 'ΓΡ.ΛΑΜΠΡΑΚΗ', 'ΓΛΥΦΑΔΑΣ'),
(170046, 'ΤΕΡΜΑ', 'ΛΕΩΦ.ΑΛ.ΠΑΠΑΝΑΣΤΑΣΙΟΥ', 'ΔΑΦΝΗΣ-ΥΜΗΤΤΟΥ'),
(200011, '10η ΖΩΓΡΑΦΟΥ', 'ΚΟΥΣΙΔΟΥ', 'ΖΩΓΡΑΦΟΥ'),
(200013, '10η ΖΩΓΡΑΦΟΥ', 'ΗΡΩΩΝ ΠΟΛΥΤΕΧΝΕΙΟΥ', 'ΖΩΓΡΑΦΟΥ'),
(200050, '2η ΙΛΙΣΙΩΝ', 'ΛΕΩΦ.ΓΡΗΓ.ΑΥΞΕΝΤΙΟΥ', 'ΖΩΓΡΑΦΟΥ'),
(200059, '3η ΙΛΙΣΙΩΝ', 'ΛΕΩΦ.ΓΡΗΓ.ΑΥΞΕΝΤΙΟΥ', 'ΖΩΓΡΑΦΟΥ'),
(200065, '2η ΖΩΓΡΑΦΟΥ', 'ΛΕΩΦ.ΣΤΡ\\ΧΟΥ ΠΑΠΑΓΟΥ', 'ΖΩΓΡΑΦΟΥ'),
(210022, 'ΠΑΠΑΓΟΥ', 'ΑΛ.ΠΑΝΑΓΟΥΛΗ', 'ΗΛΙΟΥΠΟΛΗΣ'),
(210060, 'ΚΛΕΙΟΥΣ', 'ΤΣΑΜΑΔΟΥ', 'ΗΛΙΟΥΠΟΛΗΣ'),
(210132, 'ΣΠ.ΜΗΛΙΟΥ', 'ΤΣΑΜΑΔΟΥ', 'ΗΛΙΟΥΠΟΛΗΣ'),
(230016, '11η ΚΑΙΣΑΡΙΑΝΗΣ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΕΩΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ'),
(230017, '10η ΚΑΙΣΑΡΙΑΝΗΣ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΗΣ', 'ΚΑΙΣΑΡΙΑΝΗΣ'),
(230019, '8η ΚΑΙΣΑΡΙΑΝΗΣ', 'ΕΘΝΙΚΗΣ ΑΝΤΙΣΤΑΣΗΣ', 'ΚΑΙΣΑΡΙΑΝΗ'),
(240074, 'ΦΑΡΟΣ ΤΥΦΛΩΝ', 'ΑΘΗΝΑΣ', 'ΚΑΛΛΙΘΕΑΣ'),
(240080, 'ΧΑΡΟΚΟΠΟΥ', 'ΕΛ.ΒΕΝΙΖΕΛΟΥ', 'ΚΑΛΛΙΘΕΑΣ'),
(340002, 'ΔΗΜΑΡΧΕΙΟ', 'Κ.ΠΑΛΑΙΟΛΟΓΟΥ', 'Ν. ΣΜΥΡΝΗΣ'),
(340073, 'ΔΗΜΑΡΧΕΙΟ', 'ΟΜΗΡΟΥ', 'Ν. ΣΜΥΡΝΗ'),
(400012, 'ΣΩΡΑ', 'ΘΕΟΤΟΚΗ', 'ΠΕΙΡΑΙΑ'),
(400308, 'ΥΠΑΠΑΝΤΗΣ', 'ΑΓΧΙΑΛΟΥ', 'ΠΕΙΡΑΙΑ'),
(400446, 'ΤΖΑΝΕΙΟ', 'ΖΑΝΝΗ', 'ΠΕΙΡΑΙΑ'),
(410041, 'ΗΡΩΩΝ ΠΟΛΥΤΕΧΝΕΙΟΥ', 'ΛΕΩΦ.ΔΗΜΟΚΡΑΤΙΑΣ', 'ΠΕΡΑΜΑΤΟΣ'),
(420155, 'ΑΛΕΞΑΝΔΡΑΣ', 'ΤΖΩΝ ΚΕΝΝΕΝΤΥ', 'ΠΕΡΙΣΤΕΡΙΟΥ'),
(420166, 'ΑΓ.ΚΗΡΥΚΟΣ', 'ΑΞΑΡΙΟΥ', 'ΠΕΡΙΣΤΕΡΙΟΥ'),
(420208, '3η ΖΩΟΔΟΧΟΥ ΠΗΓΗΣ', 'ΑΓ.ΠΑΡΑΣΚΕΥΗΣ', 'ΠΕΡΙΣΤΕΡΙΟΥ'),
(640010, 'ΓΟΥΝΑΡΗ	', 'Π.ΤΣΑΛΔΑΡΗ', 'ΜΕΛΙΣΣΙΩΝ'),
(640011, 'ΠΑΠΑΔΗΜΗΤΡΙΟΥ', 'Π.ΤΣΑΛΔΑΡΗ', 'ΜΕΛΙΣΣΙΩΝ'),
(670012, 'ΠΛ.Ν.ΠΕΝΤΕΛΗΣ', 'ΠΛ.ΗΡΩΩΝ ΠΟΛΥΤΕΧΝΕΙΟΥ', 'ΠΕΝΤΕΛΗΣ');

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
-- Table structure for table `bustimetable`
--

CREATE TABLE `bustimetable` (
  `id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bustimetable`
--

INSERT INTO `bustimetable` (`id`, `time`, `day`) VALUES
('E90', '08:05', 'weekday'),
('E90', '11:45', 'weekday'),
('E90', '14:15', 'weekday'),
('E90', '17:15', 'weekday'),
('X93', '00:00', 'weekday'),
('X93', '00:20', 'weekday'),
('X93', '00:40', 'weekday'),
('X93', '01:00', 'weekday'),
('X93', '01:20', 'weekday'),
('X93', '01:45', 'weekday'),
('X93', '02:10', 'weekday'),
('X93', '02:35', 'weekday'),
('X93', '03:05', 'weekday'),
('X93', '03:30', 'weekday'),
('X93', '03:55', 'weekday'),
('X93', '04:20', 'weekday'),
('X93', '04:40', 'weekday'),
('X93', '05:00', 'weekday'),
('X93', '05:25', 'weekday'),
('X93', '05:40', 'weekday'),
('X93', '06:05', 'weekday'),
('X93', '06:35', 'weekday'),
('X93', '07:05', 'weekday'),
('X93', '07:35', 'weekday'),
('X93', '08:05', 'weekday'),
('X93', '08:25', 'weekday'),
('X93', '08:40', 'weekday'),
('X93', '09:05', 'weekday'),
('X93', '09:35', 'weekday'),
('X93', '09:55', 'weekday'),
('X93', '10:15', 'weekday'),
('X93', '10:40', 'weekday'),
('X93', '11:00', 'weekday'),
('X93', '11:20', 'weekday'),
('X93', '11:40', 'weekday'),
('X93', '12:00', 'weekday'),
('X93', '12:25', 'weekday'),
('X93', '12:50', 'weekday'),
('X93', '13:20', 'weekday'),
('X93', '13:40', 'weekday'),
('X93', '13:55', 'weekday'),
('X93', '14:20', 'weekday'),
('X93', '14:35', 'weekday'),
('X93', '14:50', 'weekday'),
('X93', '15:05', 'weekday'),
('X93', '15:30', 'weekday'),
('X93', '14:10', 'weekday'),
('X93', '14:30', 'weekday'),
('X93', '14:50', 'weekday'),
('X93', '15:05', 'weekday'),
('X93', '15:25', 'weekday'),
('X93', '15:40', 'weekday'),
('X93', '16:00', 'weekday'),
('X93', '16:15', 'weekday'),
('X93', '16:35', 'weekday'),
('X93', '16:50', 'weekday'),
('X93', '17:05', 'weekday'),
('X93', '17:20', 'weekday'),
('X93', '17:35', 'weekday'),
('X93', '17:50', 'weekday'),
('X93', '18:10', 'weekday'),
('X93', '18:40', 'weekday'),
('X93', '19:05', 'weekday'),
('X93', '19:20', 'weekday'),
('X93', '19:35', 'weekday'),
('X93', '19:50', 'weekday'),
('X93', '20:10', 'weekday'),
('X93', '20:25', 'weekday'),
('X93', '20:40', 'weekday'),
('X93', '21:00', 'weekday'),
('X93', '21:30', 'weekday'),
('X93', '22:00', 'weekday'),
('X93', '22:30', 'weekday'),
('X93', '23:00', 'weekday'),
('X93', '23:35', 'weekday'),
('131', '05:40', 'weekday'),
('131', '06:05', 'weekday'),
('131', '06:35', 'weekday'),
('131', '07:05', 'weekday'),
('131', '07:35', 'weekday'),
('131', '08:05', 'weekday'),
('131', '08:25', 'weekday'),
('131', '08:40', 'weekday'),
('131', '09:05', 'weekday'),
('131', '09:35', 'weekday'),
('131', '09:55', 'weekday'),
('131', '10:15', 'weekday'),
('131', '10:40', 'weekday'),
('131', '11:00', 'weekday'),
('131', '11:20', 'weekday'),
('131', '11:40', 'weekday'),
('131', '12:00', 'weekday'),
('131', '12:25', 'weekday'),
('131', '12:50', 'weekday'),
('131', '13:20', 'weekday'),
('131', '13:40', 'weekday'),
('131', '13:55', 'weekday'),
('131', '14:20', 'weekday'),
('131', '14:35', 'weekday'),
('131', '14:50', 'weekday'),
('131', '15:05', 'weekday'),
('131', '15:30', 'weekday'),
('131', '14:10', 'weekday'),
('131', '14:30', 'weekday'),
('131', '14:50', 'weekday'),
('131', '15:05', 'weekday'),
('131', '15:25', 'weekday'),
('131', '15:40', 'weekday'),
('131', '16:00', 'weekday'),
('131', '16:15', 'weekday'),
('131', '16:35', 'weekday'),
('131', '16:50', 'weekday'),
('131', '17:05', 'weekday'),
('131', '17:20', 'weekday'),
('131', '17:35', 'weekday'),
('131', '17:50', 'weekday'),
('131', '18:10', 'weekday'),
('131', '18:40', 'weekday'),
('131', '19:05', 'weekday'),
('131', '19:20', 'weekday'),
('131', '19:35', 'weekday'),
('131', '19:50', 'weekday'),
('131', '20:10', 'weekday'),
('131', '20:25', 'weekday'),
('131', '20:40', 'weekday'),
('131', '21:00', 'weekday'),
('131', '21:30', 'weekday'),
('131', '22:00', 'weekday'),
('131', '22:30', 'weekday'),
('131', '23:00', 'weekday'),
('131', '23:35', 'weekday'),
('137', '05:40', 'weekday'),
('137', '06:05', 'weekday'),
('137', '06:35', 'weekday'),
('137', '07:05', 'weekday'),
('137', '07:35', 'weekday'),
('137', '08:05', 'weekday'),
('137', '08:25', 'weekday'),
('137', '08:40', 'weekday'),
('137', '09:05', 'weekday'),
('137', '09:35', 'weekday'),
('137', '09:55', 'weekday'),
('137', '10:15', 'weekday'),
('137', '10:40', 'weekday'),
('137', '11:00', 'weekday'),
('137', '11:20', 'weekday'),
('137', '11:40', 'weekday'),
('137', '12:00', 'weekday'),
('137', '12:25', 'weekday'),
('137', '12:50', 'weekday'),
('137', '13:20', 'weekday'),
('137', '13:40', 'weekday'),
('137', '13:55', 'weekday'),
('137', '14:20', 'weekday'),
('137', '14:35', 'weekday'),
('137', '14:50', 'weekday'),
('137', '15:05', 'weekday'),
('137', '15:30', 'weekday'),
('137', '14:10', 'weekday'),
('137', '14:30', 'weekday'),
('137', '14:50', 'weekday'),
('137', '15:05', 'weekday'),
('137', '15:25', 'weekday'),
('137', '15:40', 'weekday'),
('137', '16:00', 'weekday'),
('137', '16:15', 'weekday'),
('137', '16:35', 'weekday'),
('137', '16:50', 'weekday'),
('137', '17:05', 'weekday'),
('137', '17:20', 'weekday'),
('137', '17:35', 'weekday'),
('137', '17:50', 'weekday'),
('137', '18:10', 'weekday'),
('137', '18:40', 'weekday'),
('137', '19:05', 'weekday'),
('137', '19:20', 'weekday'),
('137', '19:35', 'weekday'),
('137', '19:50', 'weekday'),
('137', '20:10', 'weekday'),
('137', '20:25', 'weekday'),
('137', '20:40', 'weekday'),
('137', '21:00', 'weekday'),
('137', '21:30', 'weekday'),
('137', '22:00', 'weekday'),
('137', '22:30', 'weekday'),
('137', '23:00', 'weekday'),
('137', '23:35', 'weekday'),
('136', '05:40', 'weekday'),
('136', '06:05', 'weekday'),
('136', '06:35', 'weekday'),
('136', '07:05', 'weekday'),
('136', '07:35', 'weekday'),
('136', '08:05', 'weekday'),
('136', '08:25', 'weekday'),
('136', '08:40', 'weekday'),
('136', '09:05', 'weekday'),
('136', '09:35', 'weekday'),
('136', '09:55', 'weekday'),
('136', '10:15', 'weekday'),
('136', '10:40', 'weekday'),
('136', '11:00', 'weekday'),
('136', '11:20', 'weekday'),
('136', '11:40', 'weekday'),
('136', '12:00', 'weekday'),
('136', '12:25', 'weekday'),
('136', '12:50', 'weekday'),
('136', '13:20', 'weekday'),
('136', '13:40', 'weekday'),
('136', '13:55', 'weekday'),
('136', '14:20', 'weekday'),
('136', '14:35', 'weekday'),
('136', '14:50', 'weekday'),
('136', '15:05', 'weekday'),
('136', '15:30', 'weekday'),
('136', '14:10', 'weekday'),
('136', '14:30', 'weekday'),
('136', '14:50', 'weekday'),
('136', '15:05', 'weekday'),
('136', '15:25', 'weekday'),
('136', '15:40', 'weekday'),
('136', '16:00', 'weekday'),
('136', '16:15', 'weekday'),
('136', '16:35', 'weekday'),
('136', '16:50', 'weekday'),
('136', '17:05', 'weekday'),
('136', '17:20', 'weekday'),
('136', '17:35', 'weekday'),
('136', '17:50', 'weekday'),
('136', '18:10', 'weekday'),
('136', '18:40', 'weekday'),
('136', '19:05', 'weekday'),
('136', '19:20', 'weekday'),
('136', '19:35', 'weekday'),
('136', '19:50', 'weekday'),
('136', '20:10', 'weekday'),
('136', '20:25', 'weekday'),
('136', '20:40', 'weekday'),
('136', '21:00', 'weekday'),
('136', '21:30', 'weekday'),
('136', '22:00', 'weekday'),
('136', '22:30', 'weekday'),
('136', '23:00', 'weekday'),
('136', '23:35', 'weekday'),
('218', '05:40', 'weekday'),
('218', '06:05', 'weekday'),
('218', '06:35', 'weekday'),
('218', '07:05', 'weekday'),
('218', '07:35', 'weekday'),
('218', '08:05', 'weekday'),
('218', '08:25', 'weekday'),
('218', '08:40', 'weekday'),
('218', '09:05', 'weekday'),
('218', '09:35', 'weekday'),
('218', '09:55', 'weekday'),
('218', '10:15', 'weekday'),
('218', '10:40', 'weekday'),
('218', '11:00', 'weekday'),
('218', '11:20', 'weekday'),
('218', '11:40', 'weekday'),
('218', '12:00', 'weekday'),
('218', '12:25', 'weekday'),
('218', '12:50', 'weekday'),
('218', '13:20', 'weekday'),
('218', '13:40', 'weekday'),
('218', '13:55', 'weekday'),
('218', '14:20', 'weekday'),
('218', '14:35', 'weekday'),
('218', '14:50', 'weekday'),
('218', '15:05', 'weekday'),
('218', '15:30', 'weekday'),
('218', '14:10', 'weekday'),
('218', '14:30', 'weekday'),
('218', '14:50', 'weekday'),
('218', '15:05', 'weekday'),
('218', '15:25', 'weekday'),
('218', '15:40', 'weekday'),
('218', '16:00', 'weekday'),
('218', '16:15', 'weekday'),
('218', '16:35', 'weekday'),
('218', '16:50', 'weekday'),
('218', '17:05', 'weekday'),
('218', '17:20', 'weekday'),
('218', '17:35', 'weekday'),
('218', '17:50', 'weekday'),
('218', '18:10', 'weekday'),
('218', '18:40', 'weekday'),
('218', '19:05', 'weekday'),
('218', '19:20', 'weekday'),
('218', '19:35', 'weekday'),
('218', '19:50', 'weekday'),
('218', '20:10', 'weekday'),
('218', '20:25', 'weekday'),
('218', '20:40', 'weekday'),
('218', '21:00', 'weekday'),
('218', '21:30', 'weekday'),
('218', '22:00', 'weekday'),
('218', '22:30', 'weekday'),
('218', '23:00', 'weekday'),
('218', '23:35', 'weekday'),
('250', '05:40', 'weekday'),
('250', '06:05', 'weekday'),
('250', '06:35', 'weekday'),
('250', '07:05', 'weekday'),
('250', '07:35', 'weekday'),
('250', '08:05', 'weekday'),
('250', '08:25', 'weekday'),
('250', '08:40', 'weekday'),
('250', '09:05', 'weekday'),
('250', '09:35', 'weekday'),
('250', '09:55', 'weekday'),
('250', '10:15', 'weekday'),
('250', '10:40', 'weekday'),
('250', '11:00', 'weekday'),
('250', '11:20', 'weekday'),
('250', '11:40', 'weekday'),
('250', '12:00', 'weekday'),
('250', '12:25', 'weekday'),
('250', '12:50', 'weekday'),
('250', '13:20', 'weekday'),
('250', '13:40', 'weekday'),
('250', '13:55', 'weekday'),
('250', '14:20', 'weekday'),
('250', '14:35', 'weekday'),
('250', '14:50', 'weekday'),
('250', '15:05', 'weekday'),
('250', '15:30', 'weekday'),
('250', '14:10', 'weekday'),
('250', '14:30', 'weekday'),
('250', '14:50', 'weekday'),
('250', '15:05', 'weekday'),
('250', '15:25', 'weekday'),
('250', '15:40', 'weekday'),
('250', '16:00', 'weekday'),
('250', '16:15', 'weekday'),
('250', '16:35', 'weekday'),
('250', '16:50', 'weekday'),
('250', '17:05', 'weekday'),
('250', '17:20', 'weekday'),
('250', '17:35', 'weekday'),
('250', '17:50', 'weekday'),
('250', '18:10', 'weekday'),
('250', '18:40', 'weekday'),
('250', '19:05', 'weekday'),
('250', '19:20', 'weekday'),
('250', '19:35', 'weekday'),
('250', '19:50', 'weekday'),
('250', '20:10', 'weekday'),
('250', '20:25', 'weekday'),
('250', '20:40', 'weekday'),
('250', '21:00', 'weekday'),
('250', '21:30', 'weekday'),
('250', '22:00', 'weekday'),
('250', '22:30', 'weekday'),
('250', '23:00', 'weekday'),
('250', '23:35', 'weekday'),
('224', '05:40', 'weekday'),
('224', '06:05', 'weekday'),
('224', '06:35', 'weekday'),
('224', '07:05', 'weekday'),
('224', '07:35', 'weekday'),
('224', '08:05', 'weekday'),
('224', '08:25', 'weekday'),
('224', '08:40', 'weekday'),
('224', '09:05', 'weekday'),
('224', '09:35', 'weekday'),
('224', '09:55', 'weekday'),
('224', '10:15', 'weekday'),
('224', '10:40', 'weekday'),
('224', '11:00', 'weekday'),
('224', '11:20', 'weekday'),
('224', '11:40', 'weekday'),
('224', '12:00', 'weekday'),
('224', '12:25', 'weekday'),
('224', '12:50', 'weekday'),
('224', '13:20', 'weekday'),
('224', '13:40', 'weekday'),
('224', '13:55', 'weekday'),
('224', '14:20', 'weekday'),
('224', '14:35', 'weekday'),
('224', '14:50', 'weekday'),
('224', '15:05', 'weekday'),
('224', '15:30', 'weekday'),
('224', '14:10', 'weekday'),
('224', '14:30', 'weekday'),
('224', '14:50', 'weekday'),
('224', '15:05', 'weekday'),
('224', '15:25', 'weekday'),
('224', '15:40', 'weekday'),
('224', '16:00', 'weekday'),
('224', '16:15', 'weekday'),
('224', '16:35', 'weekday'),
('224', '16:50', 'weekday'),
('224', '17:05', 'weekday'),
('224', '17:20', 'weekday'),
('224', '17:35', 'weekday'),
('224', '17:50', 'weekday'),
('224', '18:10', 'weekday'),
('224', '18:40', 'weekday'),
('224', '19:05', 'weekday'),
('224', '19:20', 'weekday'),
('224', '19:35', 'weekday'),
('224', '19:50', 'weekday'),
('224', '20:10', 'weekday'),
('224', '20:25', 'weekday'),
('224', '20:40', 'weekday'),
('224', '21:00', 'weekday'),
('224', '21:30', 'weekday'),
('224', '22:00', 'weekday'),
('224', '22:30', 'weekday'),
('224', '23:00', 'weekday'),
('224', '23:35', 'weekday'),
('219', '05:40', 'weekday'),
('219', '06:05', 'weekday'),
('219', '06:35', 'weekday'),
('219', '07:05', 'weekday'),
('219', '07:35', 'weekday'),
('219', '08:05', 'weekday'),
('219', '08:25', 'weekday'),
('219', '08:40', 'weekday'),
('219', '09:05', 'weekday'),
('219', '09:35', 'weekday'),
('219', '09:55', 'weekday'),
('219', '10:15', 'weekday'),
('219', '10:40', 'weekday'),
('219', '11:00', 'weekday'),
('219', '11:20', 'weekday'),
('219', '11:40', 'weekday'),
('219', '12:00', 'weekday'),
('219', '12:25', 'weekday'),
('219', '12:50', 'weekday'),
('219', '13:20', 'weekday'),
('219', '13:40', 'weekday'),
('219', '13:55', 'weekday'),
('219', '14:20', 'weekday'),
('219', '14:35', 'weekday'),
('219', '14:50', 'weekday'),
('219', '15:05', 'weekday'),
('219', '15:30', 'weekday'),
('219', '14:10', 'weekday'),
('219', '14:30', 'weekday'),
('219', '14:50', 'weekday'),
('219', '15:05', 'weekday'),
('219', '15:25', 'weekday'),
('219', '15:40', 'weekday'),
('219', '16:00', 'weekday'),
('219', '16:15', 'weekday'),
('219', '16:35', 'weekday'),
('219', '16:50', 'weekday'),
('219', '17:05', 'weekday'),
('219', '17:20', 'weekday'),
('219', '17:35', 'weekday'),
('219', '17:50', 'weekday'),
('219', '18:10', 'weekday'),
('219', '18:40', 'weekday'),
('219', '19:05', 'weekday'),
('219', '19:20', 'weekday'),
('219', '19:35', 'weekday'),
('219', '19:50', 'weekday'),
('219', '20:10', 'weekday'),
('219', '20:25', 'weekday'),
('219', '20:40', 'weekday'),
('219', '21:00', 'weekday'),
('219', '21:30', 'weekday'),
('219', '22:00', 'weekday'),
('219', '22:30', 'weekday'),
('219', '23:00', 'weekday'),
('219', '23:35', 'weekday'),
('X95', '00:00', 'weekday'),
('X95', '00:20', 'weekday'),
('X95', '00:40', 'weekday'),
('X95', '01:00', 'weekday'),
('X95', '01:20', 'weekday'),
('X95', '01:45', 'weekday'),
('X95', '02:10', 'weekday'),
('X95', '02:35', 'weekday'),
('X95', '03:05', 'weekday'),
('X95', '03:30', 'weekday'),
('X95', '03:55', 'weekday'),
('X95', '04:20', 'weekday'),
('X95', '04:40', 'weekday'),
('X95', '05:00', 'weekday'),
('X95', '05:25', 'weekday'),
('X95', '05:40', 'weekday'),
('X95', '06:05', 'weekday'),
('X95', '06:35', 'weekday'),
('X95', '07:05', 'weekday'),
('X95', '07:35', 'weekday'),
('X95', '08:05', 'weekday'),
('X95', '08:25', 'weekday'),
('X95', '08:40', 'weekday'),
('X95', '09:05', 'weekday'),
('X95', '09:35', 'weekday'),
('X95', '09:55', 'weekday'),
('X95', '10:15', 'weekday'),
('X95', '10:40', 'weekday'),
('X95', '11:00', 'weekday'),
('X95', '11:20', 'weekday'),
('X95', '11:40', 'weekday'),
('X95', '12:00', 'weekday'),
('X95', '12:25', 'weekday'),
('X95', '12:50', 'weekday'),
('X95', '13:20', 'weekday'),
('X95', '13:40', 'weekday'),
('X95', '13:55', 'weekday'),
('X95', '14:20', 'weekday'),
('X95', '14:35', 'weekday'),
('X95', '14:50', 'weekday'),
('X95', '15:05', 'weekday'),
('X95', '15:30', 'weekday'),
('X95', '14:10', 'weekday'),
('X95', '14:30', 'weekday'),
('X95', '14:50', 'weekday'),
('X95', '15:05', 'weekday'),
('X95', '15:25', 'weekday'),
('X95', '15:40', 'weekday'),
('X95', '16:00', 'weekday'),
('X95', '16:15', 'weekday'),
('X95', '16:35', 'weekday'),
('X95', '16:50', 'weekday'),
('X95', '17:05', 'weekday'),
('X95', '17:20', 'weekday'),
('X95', '17:35', 'weekday'),
('X95', '17:50', 'weekday'),
('X95', '18:10', 'weekday'),
('X95', '18:40', 'weekday'),
('X95', '19:05', 'weekday'),
('X95', '19:20', 'weekday'),
('X95', '19:35', 'weekday'),
('X95', '19:50', 'weekday'),
('X95', '20:10', 'weekday'),
('X95', '20:25', 'weekday'),
('X95', '20:40', 'weekday'),
('X95', '21:00', 'weekday'),
('X95', '21:30', 'weekday'),
('X95', '22:00', 'weekday'),
('X95', '22:30', 'weekday'),
('X95', '23:00', 'weekday'),
('X95', '23:35', 'weekday');

-- --------------------------------------------------------

--
-- Table structure for table `new_ticket_prices`
--

CREATE TABLE `new_ticket_prices` (
  `ΠΡΟΙΟΝ` varchar(200) NOT NULL,
  `ΤΙΜΗ (€)` double NOT NULL,
  `ΤΙΜΗ / ΕΙΣΙΤΗΡΙΟ (€)` double DEFAULT NULL,
  `ΕΚΠΤΩΣΗ` varchar(200) NOT NULL,
  `ΤΥΠΟΙ ΕΙΣΙΤΗΡΙΩΝ` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_ticket_prices`
--

INSERT INTO `new_ticket_prices` (`ΠΡΟΙΟΝ`, `ΤΙΜΗ (€)`, `ΤΙΜΗ / ΕΙΣΙΤΗΡΙΟ (€)`, `ΕΚΠΤΩΣΗ`, `ΤΥΠΟΙ ΕΙΣΙΤΗΡΙΩΝ`) VALUES
('10+1 ΕΙΝΑΙΑ ΕΙΣΙΤΗΡΙΑ 1.40€', 13.5, 1.23, '1 επιπλέον εισιτήριο', 'ΠΡΟΣΩΠΟΠΟΙΗΜΕΝΗ ΚΑΡΤΑ, ΑΝΩΝΥΜΗ ΚΑΡΤΑ, ΠΟΛΛΑΠΛΟ ΕΙΣΙΤΗΡΙΟ'),
('10+1 ΕΙΝΑΙΑ ΕΙΣΙΤΗΡΙΑ ΜΕΙΩΜΕΝΑ 0.60€	', 6, NULL, '1 επιπλέον εισιτήριο	', 'ΠΡΟΣΩΠΟΠΟΙΗΜΕΝΗ ΚΑΡΤΑ, ΠΟΛΛΑΠΛΟ ΕΙΣΙΤΗΡΙΟ'),
('2πλό ΕΝΙΑΙΟ  ΕΙΣΙΤΗΡΙΟ 1.40€', 2.7, 1.35, '0.10', 'ΠΡΟΣΩΠΟΠΟΙΗΜΕΝΗ ΚΑΡΤΑ, ΑΝΩΝΥΜΗ ΚΑΡΤΑ, ΠΟΛΛΑΠΛΟ ΕΙΣΙΤΗΡΙΟ'),
('2πλό ΕΝΙΑΙΟ ΕΙΣΙΤΗΡΙΟ ΜΕΙΩΜΕΝΟ 0.60€', 1.2, 0.6, '', 'ΠΡΟΣΩΠΟΠΟΙΗΜΕΝΗ ΚΑΡΤΑ'),
('5πλό ΕΝΙΑΙΟ ΕΙΣΙΤΗΡΙΟ 1.40€', 6.5, 1.3, '0.50', 'ΠΡΟΣΩΠΟΠΟΙΗΜΕΝΗ ΚΑΡΤΑ, ΑΝΩΝΥΜΗ ΚΑΡΤΑ, ΠΟΛΛΑΠΛΟ ΕΙΣΙΤΗΡΙΟ'),
('5πλό ΕΝΙΑΙΟ ΕΙΣΙΤΗΡΙΟ ΜΕΙΩΜΕΝΟ 0.60€	', 3, NULL, '', 'ΠΡΟΣΩΠΟΠΟΙΗΜΕΝΗ ΚΑΡΤΑ'),
('ΕΝΙΑΙΟ ΕΙΣΙΤΗΡΙΟ 1.40€ (μονό)', 1.4, 1.4, '', 'ΠΡΟΣΩΠΟΠΟΙΗΜΕΝΗ ΚΑΡΤΑ, ΑΝΩΝΥΜΗ ΚΑΡΤΑ, ΠΟΛΛΑΠΛΟ ΕΙΣΙΤΗΡΙΟ'),
('ΕΝΙΑΙΟ ΕΙΣΙΤΗΡΙΟ ΜΕΙΩΜΕΝΟ 0.60€ (μονό)', 0.6, 0.6, '', 'ΠΡΟΣΩΠΟΠΟΙΗΜΕΝΗ ΚΑΡΤΑ');

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
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ` varchar(400) NOT NULL,
  `ΛΕΩΦΟΡΕΙΑ / ΤΡΟΛΕY / ΤΡΑΜ / ΜΕΤΡΟ (€)` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ`, `ΛΕΩΦΟΡΕΙΑ / ΤΡΟΛΕY / ΤΡΑΜ / ΜΕΤΡΟ (€)`) VALUES
('ΕΙΣΙΤΗΡΙΟ ΠΕΝΤΕ ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ (ΕΚΤΟΣ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ & ΓΡΑΜΜΗΣ Χ80)', 9),
('ΕΝΙΑΙΟ ΕΙΣΙΤΗΡΙΟ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ 90 ΛΕΠΤΩΝ (ΕΚΤΟΣ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ & ΓΡΑΜΜΗΣ Χ80)', 1.4),
('ΗΜΕΡΗΣΙΟ ΕΙΣΙΤΗΡΙΟ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ (ΕΚΤΟΣ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ)', 4.5),
('ΜΕΙΩΜΕΝΟ ΕΝΙΑΙΟ ΕΙΣΙΤΗΡΙΟ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ 90 ΛΕΠΤΩΝ (ΕΚΤΟΣ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ & ΓΡΑΜΜΗΣ Χ80)', 0.6),
('ΤΟΥΡΙΣΤΙΚΟ ΕΙΣΙΤΗΡΙΟ 3 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ (ΠΕΡΙΛΑΜΒΑΝΕΙ 1 ΔΙΑΔΡΟΜΗ ΑΠΟ & ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ)', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tickets_airport`
--

CREATE TABLE `tickets_airport` (
  `ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ` varchar(300) NOT NULL,
  `ΛΕΩΦΟΡΕIA (€)` double DEFAULT NULL,
  `ΤΡΟΛEY (€)` double DEFAULT NULL,
  `ΤΡΑΜ (€)` double DEFAULT NULL,
  `ΜΕΤΡΟ (€)` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets_airport`
--

INSERT INTO `tickets_airport` (`ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ`, `ΛΕΩΦΟΡΕIA (€)`, `ΤΡΟΛEY (€)`, `ΤΡΑΜ (€)`, `ΜΕΤΡΟ (€)`) VALUES
('ΕΙΣΙΤΗΡΙΟ ΑΕΡΟΔΡΟΜΙΟΥ ΑΠΟ & ΠΡΟΣ ΤΟΥΣ ΣΤΑΘΜΟΥΣ ΠΑΛΛΗΝΗ - ΚΑΝΤΖΑ - ΚΟΡΩΠΙ ΜΕΤΡΟ', NULL, NULL, NULL, 6),
('ΚΑΝΟΝΙΚΟ ΕΙΣΙΤΗΡΙΟ ΛΕΩΦΟΡΕΙΩΝ EXPRESS', 6, NULL, NULL, NULL),
('ΚΑΝΟΝΙΚΟ ΕΙΣΙΤΗΡΙΟ ΜΕΤΡΟ				', NULL, NULL, NULL, 10),
('ΜΕΙΩΜΕΝΟ ΕΙΣΙΤΗΡΙΟ ΑΕΡΟΔΡΟΜΙΟΥ ΑΠΟ & ΠΡΟΣ ΤΟΥΣ ΣΤΑΘΜΟΥΣ ΠΑΛΛΗΝΗ - ΚΑΝΤΖΑ - ΚΟΡΩΠΙ ΜΕΤΡΟ', NULL, NULL, NULL, 3),
('ΜΕΙΩΜΕΝΟ ΕΙΣΙΤΗΡΙΟ ΛΕΩΦΟΡΕΙΩΝ EXPRESS	', 3, NULL, NULL, NULL),
('ΜΕΙΩΜΕΝΟ ΕΙΣΙΤΗΡΙΟ ΜΕΤΡΟ				', NULL, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tickets_x80`
--

CREATE TABLE `tickets_x80` (
  `ΕΙΣΙΤΗΡΙΑ ΠΟΥ ΙΣΧΥΟΥΝ ΣΤΗ ΓΡΑΜΜΗ EXPRESS Χ80` varchar(300) NOT NULL,
  `ΛΕΩΦΟΡΕΙΑ / ΤΡΟΛΕY / ΤΡΑΜ / ΜΕΤΡΟ (€)` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets_x80`
--

INSERT INTO `tickets_x80` (`ΕΙΣΙΤΗΡΙΑ ΠΟΥ ΙΣΧΥΟΥΝ ΣΤΗ ΓΡΑΜΜΗ EXPRESS Χ80`, `ΛΕΩΦΟΡΕΙΑ / ΤΡΟΛΕY / ΤΡΑΜ / ΜΕΤΡΟ (€)`) VALUES
('ΗΜΕΡΗΣΙΟ ΕΙΣΙΤΗΡΙΟ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ, ΕΚΤΟΣ ΑΕΡΟΔΡΟΜΙΟ', 4.5),
('ΤΟΥΡΙΣΤΙΚΟ ΕΙΣΙΤΗΡΙΟ 3 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ (ΠΕΡΙΛΑΜΒΑΝΕΙ 1 ΔΙΑΔΡΟΜΗ ΑΠΟ & ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ)', 22);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_points`
--

CREATE TABLE `ticket_points` (
  `id` varchar(150) NOT NULL,
  `type` varchar(150) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(10,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_points`
--

INSERT INTO `ticket_points` (`id`, `type`, `latitude`, `longitude`) VALUES
('Αγ. Μαρίνα', 'metro', '37.99684700', '23.66756200'),
('Αγίας Φωτεινής', 'tram', '37.94654600', '23.71501500'),
('Αεροδρόμιο', 'metro', '37.93668500', '23.94455900'),
('Αεροδρόμιο - Χώρος αφίξεων', 'bus', '37.93709000', '23.94723500'),
('Αμπελόκηποι', 'metro', '37.98736300', '23.75703500'),
('Δάφνη', 'metro', '37.94925400', '23.73721800'),
('Δουκ. Πλακεντίας', 'metro', '38.02391300', '23.83360100'),
('Ευαγγελισμός', 'metro', '37.97635900', '23.74738700'),
('Κηφισιά', 'metro', '38.07370300', '23.80830500'),
('Μοναστηράκι', 'metro', '37.97616700', '23.72569400'),
('Μουσών', 'tram', '37.92204000', '23.69981000'),
('Νέος Κόσμος', 'metro', '37.95761000', '23.72846900'),
('Όθωνος', 'bus', '37.97500000', '23.73500000'),
('Ομόνοια', 'metro', '37.98418700', '23.72869000'),
('Πανεπιστήμιο', 'metro', '37.98045700', '23.73306500'),
('Πειραιά', 'metro', '37.94814000', '23.64326700'),
('Συγγρού-Φιξ', 'metro', '37.96416100', '23.72642500'),
('Σύνταγμα', 'metro', '37.97508600', '23.73568600');

-- --------------------------------------------------------

--
-- Table structure for table `timed_tickets`
--

CREATE TABLE `timed_tickets` (
  `30 ΗΜΕΡΩΝ` int(11) NOT NULL,
  `90 ΗΜΕΡΩΝ` int(11) NOT NULL,
  `180 ΗΜΕΡΩΝ` int(11) NOT NULL,
  `365 ΗΜΕΡΩΝ` int(11) NOT NULL,
  `ΌΛΑ ΤΑ ΜΕΣΑ` varchar(10) NOT NULL,
  `ΌΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timed_tickets`
--

INSERT INTO `timed_tickets` (`30 ΗΜΕΡΩΝ`, `90 ΗΜΕΡΩΝ`, `180 ΗΜΕΡΩΝ`, `365 ΗΜΕΡΩΝ`, `ΌΛΑ ΤΑ ΜΕΣΑ`, `ΌΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ`) VALUES
(30, 85, 170, 330, 'ΝΑΙ', ''),
(49, 142, 250, 490, '', 'ΝΑΙ');

-- --------------------------------------------------------

--
-- Table structure for table `timed_tickets_red`
--

CREATE TABLE `timed_tickets_red` (
  `30 ΗΜΕΡΩΝ` int(11) NOT NULL,
  `90 ΗΜΕΡΩΝ` int(11) NOT NULL,
  `180 ΗΜΕΡΩΝ` int(11) NOT NULL,
  `365 ΗΜΕΡΩΝ` int(11) NOT NULL,
  `ΌΛΑ ΤΑ ΜΕΣΑ` varchar(10) NOT NULL,
  `ΌΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timed_tickets_red`
--

INSERT INTO `timed_tickets_red` (`30 ΗΜΕΡΩΝ`, `90 ΗΜΕΡΩΝ`, `180 ΗΜΕΡΩΝ`, `365 ΗΜΕΡΩΝ`, `ΌΛΑ ΤΑ ΜΕΣΑ`, `ΌΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ`) VALUES
(15, 43, 85, 165, 'ΝΑΙ', ''),
(25, 71, 125, 245, '', 'ΝΑΙ');

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
-- Indexes for table `access_points`
--
ALTER TABLE `access_points`
  ADD PRIMARY KEY (`Κωδικός στάσης`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_ticket_prices`
--
ALTER TABLE `new_ticket_prices`
  ADD PRIMARY KEY (`ΠΡΟΙΟΝ`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`station`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ`);

--
-- Indexes for table `tickets_airport`
--
ALTER TABLE `tickets_airport`
  ADD PRIMARY KEY (`ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ`);

--
-- Indexes for table `tickets_x80`
--
ALTER TABLE `tickets_x80`
  ADD PRIMARY KEY (`ΕΙΣΙΤΗΡΙΑ ΠΟΥ ΙΣΧΥΟΥΝ ΣΤΗ ΓΡΑΜΜΗ EXPRESS Χ80`);

--
-- Indexes for table `ticket_points`
--
ALTER TABLE `ticket_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timed_tickets`
--
ALTER TABLE `timed_tickets`
  ADD PRIMARY KEY (`30 ΗΜΕΡΩΝ`);

--
-- Indexes for table `timed_tickets_red`
--
ALTER TABLE `timed_tickets_red`
  ADD PRIMARY KEY (`30 ΗΜΕΡΩΝ`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
