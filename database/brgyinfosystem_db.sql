-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 07:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brgyinfosystem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `barangay`, `municipality`, `province`, `phone_number`, `image_path`, `user_type`) VALUES
(0, 'admin', '$2y$10$OkYicvtsUbUjdm78vcxEyOuhe5HMdB7xBEoS0nPluoMXT2u8rBqE2', 'abadleomar875@gmail.com', 'Cacapasan', 'Cuyapo', 'Nueva Ecija', '09165243821', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blotter-db`
--

CREATE TABLE `blotter-db` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `incident` varchar(100) NOT NULL,
  `date_time_reported` varchar(100) NOT NULL,
  `date_time_incident` varchar(100) NOT NULL,
  `date_record` varchar(100) NOT NULL,
  `ComName` varchar(200) NOT NULL,
  `RespondentName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blotter-db`
--

INSERT INTO `blotter-db` (`id`, `status`, `incident`, `date_time_reported`, `date_time_incident`, `date_record`, `ComName`, `RespondentName`) VALUES
(18, 'new', 'Nagnakaw ng cellphone si Otlum sa tindahahan ni aleng nena', '2024-05-23T11:56', '2024-05-21T11:56', '2024-05-23', 'Aleng Nena', 'Otlum '),
(19, 'new', 'Kinatay ang baka ni Juan', '2024-05-23T12:13', '2024-05-22T12:13', '2024-05-23', 'Jane Doe', 'Regador Dela Cruz');

-- --------------------------------------------------------

--
-- Table structure for table `captain_db`
--

CREATE TABLE `captain_db` (
  `captain_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `captain_db`
--

INSERT INTO `captain_db` (`captain_id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/Leomar .jpg', 'John Doe', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Captain', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'capitan246@gmail.com', 'Jane Doe', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `filename`, `file_path`, `uploaded_at`) VALUES
(4, 'fontss.pdf', 'idigency/fontss.pdf', '2024-05-23 02:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(225) NOT NULL,
  `file_path` varchar(225) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `file_path`, `uploaded_at`) VALUES
(13, 'fontss.pdf', 'upload/fontss.pdf', '2024-05-20 06:55:56'),
(14, 'kwinfont2024.pdf', 'upload/kwinfont2024.pdf', '2024-05-23 02:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `household-db`
--

CREATE TABLE `household-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `fam_lastname` varchar(250) NOT NULL,
  `fam_Mt` varchar(250) NOT NULL,
  `Hs` varchar(250) NOT NULL,
  `Sb_number` varchar(250) NOT NULL,
  `contact_number` varchar(250) NOT NULL,
  `perm_add` varchar(250) NOT NULL,
  `S_relationship` varchar(200) NOT NULL,
  `S_fullname` varchar(200) NOT NULL,
  `S_age` varchar(200) NOT NULL,
  `S_gender` varchar(200) NOT NULL,
  `S_occupation` varchar(200) NOT NULL,
  `S_address` varchar(200) NOT NULL,
  `C_relationship` varchar(200) NOT NULL,
  `C_fullname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `household-db`
--

INSERT INTO `household-db` (`id`, `fullname`, `age`, `address`, `gender`, `relationship`, `occupation`, `fam_lastname`, `fam_Mt`, `Hs`, `Sb_number`, `contact_number`, `perm_add`, `S_relationship`, `S_fullname`, `S_age`, `S_gender`, `S_occupation`, `S_address`, `C_relationship`, `C_fullname`) VALUES
(38, 'Diwata', '48', 'Mapukpukaw, Cuyapo ,Nueva Ecija', 'Male', 'Head of Household', 'Pares Overload', 'Dela Cruz Family', '5', '002000', 'Purok 2', '09169232342', 'Mapukpukaw, Cuyapo ,Nueva Ecija', 'Spouse', 'Otlum', '48', 'Male', 'Vloger Snatcher', 'Mapukpukaw, Cuyapo ,Nueva Ecija', 'Child', 'Jane Doe\r\nJohn Doe\r\nMarx Doe\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd1-db`
--

CREATE TABLE `kgwd1-db` (
  `id` int(11) NOT NULL,
  `photo` longblob NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_numbers` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd1-db`
--

INSERT INTO `kgwd1-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_numbers`, `email`, `ec_name`, `ec_number`) VALUES
(0, 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Marx Dom', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 1', 'Cacapasan ,Cuyapo ,Nueva Ecija', '0923578686', 'marx875@gmail.com', 'Merry Dom', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd2-db`
--

CREATE TABLE `kgwd2-db` (
  `id` int(11) NOT NULL,
  `photo` longblob NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd2-db`
--

INSERT INTO `kgwd2-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Jackie Domingo', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 2', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'jackie123@gmail.com', 'Jacks Domingo', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd3-db`
--

CREATE TABLE `kgwd3-db` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd3-db`
--

INSERT INTO `kgwd3-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/1by1 blue attire for men.jpg', 'Dherwin Ladon', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 3', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'dherwin@gmail.com', 'Darlyn Ladon', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd4-db`
--

CREATE TABLE `kgwd4-db` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd4-db`
--

INSERT INTO `kgwd4-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/1by1 blue attire for men.jpg', 'Leomar Abad', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 4', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09169232347', 'abad.leomar@gmail.com', 'Rosalie Abad', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd5-db`
--

CREATE TABLE `kgwd5-db` (
  `id` int(11) NOT NULL,
  `photo` longblob NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd5-db`
--

INSERT INTO `kgwd5-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Chris John Matias', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 5', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'chm568@gmail.com', 'Christine Matias', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd6-db`
--

CREATE TABLE `kgwd6-db` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd6-db`
--

INSERT INTO `kgwd6-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/1by1 blue attire for men.jpg', 'Orlan James', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 6', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09169232343', 'orlan123@gmail.com', 'Angeline Sta Ana', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `kgwd7`
--

CREATE TABLE `kgwd7` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kgwd7`
--

INSERT INTO `kgwd7` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/1by1 blue attire for men.jpg', 'Cezar Sadio', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Kagawad 7', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'cell@gmail.com', 'Cezy Sadio', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` char(64) NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `residence-db`
--

CREATE TABLE `residence-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `conNumber` varchar(200) NOT NULL,
  `occuPation` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `type_of_residence` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residence-db`
--

INSERT INTO `residence-db` (`id`, `fullname`, `age`, `conNumber`, `occuPation`, `gender`, `address`, `city`, `state`, `zipcode`, `type_of_residence`) VALUES
(30, 'Leomar Abad', '27', '09156232576', 'Software Engineer', 'Male', 'Salagusog', 'Cuyapo', 'Nueva Ecija', '3117', 'Single Family Home');

-- --------------------------------------------------------

--
-- Table structure for table `secretary-db`
--

CREATE TABLE `secretary-db` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secretary-db`
--

INSERT INTO `secretary-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/1by1 blue attire for men.jpg', 'Santos Garcia', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Secretary', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'santos@gmail.com', 'Samantha Garcia', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-chairman`
--

CREATE TABLE `sk-chairman` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-chairman`
--

INSERT INTO `sk-chairman` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Angelo Dacayo', 'uploads/1by1 blue attire for men.jpg', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Chairman', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'angelo32@gmail.com', 'Angela Dacayo', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd-db`
--

CREATE TABLE `sk-kgwd-db` (
  `id` int(11) NOT NULL,
  `photo` longblob NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd-db`
--

INSERT INTO `sk-kgwd-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Lebron James', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 1', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'lebronjame@gmail.com', 'Janna lebron', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd2-db`
--

CREATE TABLE `sk-kgwd2-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd2-db`
--

INSERT INTO `sk-kgwd2-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Diwata Pares', 'uploads/1by1 blue attire for men.jpg', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 2', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'diwata@gmail.com', 'Overload pares', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd3-db`
--

CREATE TABLE `sk-kgwd3-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd3-db`
--

INSERT INTO `sk-kgwd3-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Otlum Snatcher', 'uploads/1by1 blue attire for men.jpg', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 3', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'otlum@gmail.com', 'Otlum Snatch', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd4-db`
--

CREATE TABLE `sk-kgwd4-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` longblob NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd4-db`
--

INSERT INTO `sk-kgwd4-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Stephen Curry', 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 4', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'stephen325@gmail.com', 'Stephane Curry', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd5-db`
--

CREATE TABLE `sk-kgwd5-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` longblob NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd5-db`
--

INSERT INTO `sk-kgwd5-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Kyrie Irving ', 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 5', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09169232347', 'kyr@gmail.com', 'Kyra Irving ', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd6-db`
--

CREATE TABLE `sk-kgwd6-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` longblob NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd6-db`
--

INSERT INTO `sk-kgwd6-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Katuro Vlog', 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 6', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'katuro@gmail.com', 'Katara vlog', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `sk-kgwd7-db`
--

CREATE TABLE `sk-kgwd7-db` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `photo` longblob NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sk-kgwd7-db`
--

INSERT INTO `sk-kgwd7-db` (`id`, `fullname`, `photo`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'Digong Duterte', 0x75706c6f6164732f3162793120626c75652061747469726520666f72206d656e2e6a7067, 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Sk Kagawad 7', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'digong@gmail.com', 'Digong Duts', '092346436727');

-- --------------------------------------------------------

--
-- Table structure for table `treasurer-db`
--

CREATE TABLE `treasurer-db` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ec_name` varchar(100) NOT NULL,
  `ec_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treasurer-db`
--

INSERT INTO `treasurer-db` (`id`, `photo`, `fullname`, `gender`, `date_of_birth`, `citizenship`, `civil_status`, `term`, `position`, `address`, `contact_number`, `email`, `ec_name`, `ec_number`) VALUES
(0, 'uploads/1by1 blue attire for men.jpg', 'Angel Galapo', 'Male', '2024-05-01', 'Filipino ', 'Single', 'August 23, 2023 - August 23, 2025', 'Treasurer', 'Cacapasan ,Cuyapo ,Nueva Ecija', '09020202022', 'angel123@gmail.com', 'Angelito Galapon', '092346436727');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blotter-db`
--
ALTER TABLE `blotter-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captain_db`
--
ALTER TABLE `captain_db`
  ADD PRIMARY KEY (`captain_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `household-db`
--
ALTER TABLE `household-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kgwd1-db`
--
ALTER TABLE `kgwd1-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kgwd2-db`
--
ALTER TABLE `kgwd2-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kgwd3-db`
--
ALTER TABLE `kgwd3-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kgwd4-db`
--
ALTER TABLE `kgwd4-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kgwd6-db`
--
ALTER TABLE `kgwd6-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kgwd7`
--
ALTER TABLE `kgwd7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residence-db`
--
ALTER TABLE `residence-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretary-db`
--
ALTER TABLE `secretary-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-chairman`
--
ALTER TABLE `sk-chairman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd-db`
--
ALTER TABLE `sk-kgwd-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd2-db`
--
ALTER TABLE `sk-kgwd2-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd3-db`
--
ALTER TABLE `sk-kgwd3-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd4-db`
--
ALTER TABLE `sk-kgwd4-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd5-db`
--
ALTER TABLE `sk-kgwd5-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd6-db`
--
ALTER TABLE `sk-kgwd6-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk-kgwd7-db`
--
ALTER TABLE `sk-kgwd7-db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treasurer-db`
--
ALTER TABLE `treasurer-db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blotter-db`
--
ALTER TABLE `blotter-db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `household-db`
--
ALTER TABLE `household-db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `residence-db`
--
ALTER TABLE `residence-db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
