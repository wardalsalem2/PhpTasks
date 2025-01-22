-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 07:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `family_name` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `degree` float NOT NULL,
  `major` text NOT NULL,
  `address` text NOT NULL,
  `age` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `middle_name`, `family_name`, `date_of_birth`, `degree`, `major`, `address`, `age`, `number`) VALUES
(1, 'John', 'Doe', 'Smith', '1990-01-01', 1, 'Computer Science', '123 Main St', 30, 1234567890),
(2, 'John', 'Doe', 'Smith', '1990-01-01', 1, 'Computer Science', '123 Main St', 30, 1234567890),
(3, 'John', 'Doe', 'Smith', '1990-01-01', 1, 'Computer Science', '123 Main St', 30, 1234567890),
(4, 'John', 'Doe', 'Smith', '1990-01-01', 1, 'Computer Science', '123 Main St', 30, 1234567890),
(5, 'John', 'Doe', 'Smith', '1990-01-01', 1, 'Computer Science', '123 Main St', 30, 1234567890),
(6, 'John', 'Doe', 'Smith', '1990-01-01', 1, 'Computer Science', '123 Main St', 30, 1234567890),
(7, 'John', 'Doe', 'Smith', '1990-01-01', 1, 'Computer Science', '123 Main St', 30, 1234567890),
(8, 'John', 'Doe', 'Smith', '1990-01-01', 1, 'Computer Science', '123 Main St', 30, 1234567890),
(9, 'ward', 'minwer', 'al salem', '2019-01-09', 199, 'it', 'usjdagf', 150, 7777777);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
