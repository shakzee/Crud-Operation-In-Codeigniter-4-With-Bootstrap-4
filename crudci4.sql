-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 08:20 PM
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
-- Database: `crudci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `s_date` datetime NOT NULL,
  `s_subject` varchar(200) NOT NULL,
  `s_update` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `s_name`, `s_date`, `s_subject`, `s_update`, `deleted_at`) VALUES
(1, 'John edited', '2019-06-15 17:07:44', 'PHP edited', '2023-01-08 13:20:03', NULL),
(2, 'maria', '2019-06-15 17:08:44', 'PHP edited', '2019-06-15 18:32:56', NULL),
(3, 'Alex', '2019-06-15 17:09:10', '.net', '2019-06-15 18:33:08', NULL),
(8, 'John', '2019-06-15 17:14:40', 'PHP edited', '2019-06-15 18:32:28', NULL),
(9, 'maria', '2019-06-16 14:08:05', '3434', '2019-06-16 14:08:05', NULL),
(10, 'Alex 2', '2023-01-08 12:35:07', 'abc', '2023-01-08 13:14:44', NULL),
(11, 'John2', '2023-01-08 12:35:14', 'xyz', '2023-01-08 13:14:51', NULL),
(12, 'John3', '2023-01-08 12:36:01', 'fba', '2023-01-08 13:14:56', NULL),
(13, 'John5', '2023-01-08 12:36:56', 'laravel', '2023-01-08 13:15:01', NULL),
(14, 'John8', '2023-01-08 12:47:30', '', '2023-01-08 13:14:06', '2023-01-08 13:14:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
