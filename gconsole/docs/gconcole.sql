-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2025 at 01:53 PM
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
-- Database: `gconcole`
--

-- --------------------------------------------------------

--
-- Table structure for table `console`
--

CREATE TABLE `console` (
  `console_id` int(11) NOT NULL,
  `manufacturer` text NOT NULL,
  `c_name` text NOT NULL,
  `release_date` text NOT NULL,
  `controller_no` int(11) NOT NULL,
  `bit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `console`
--

INSERT INTO `console` (`console_id`, `manufacturer`, `c_name`, `release_date`, `controller_no`, `bit`) VALUES
(1, 'Sony', 'PlayStation', '1988', 1, 32),
(2, 'Sony', 'PlayStation', '2000', 2, 32),
(3, 'Sony', 'PlayStation', '2006', 3, 64),
(4, 'Sony', 'PlayStation', '2013', 4, 64),
(5, 'Sony', 'PlayStation', '2020', 5, 64),
(6, 'Nintendo', 'Switch', '2025', 2, 64);

-- --------------------------------------------------------

--
-- Table structure for table `owns`
--

CREATE TABLE `owns` (
  `owns_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `console_id` int(11) NOT NULL,
  `buy_date` text NOT NULL,
  `link_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owns`
--

INSERT INTO `owns` (`owns_id`, `user_id`, `console_id`, `buy_date`, `link_date`) VALUES
(1, 5, 1, '25/09/2025', '25/09/2025'),
(2, 5, 2, '25/09/2025', '25/09/2025'),
(3, 5, 3, '25/09/2025', '25/09/2025'),
(4, 5, 4, '25/09/2025', '25/09/2025'),
(5, 5, 5, '25/09/2025', '25/09/2025'),
(6, 5, 6, '25/09/2025', '25/09/2025'),
(7, 1, 1, '25/09/2025', '25/09/2025'),
(8, 1, 6, '25/09/2025', '25/09/2025'),
(9, 4, 2, '25/09/2025', '25/09/2025'),
(10, 4, 3, '25/09/2025', '25/09/2025'),
(11, 2, 4, '25/09/2025', '25/09/2025'),
(12, 2, 5, '25/09/2025', '25/09/2025'),
(13, 6, 1, '25/09/2025', '25/09/2025'),
(14, 6, 6, '25/09/2025', '25/09/2025'),
(15, 3, 2, '25/09/2025', '25/09/2025'),
(16, 3, 4, '25/09/2025', '25/09/2025');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `sign_up_date` text NOT NULL,
  `d.o.b` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `sign_up_date`, `d.o.b`, `country`) VALUES
(1, 'Bob', 'woohooo1!', '12/03/2020', '12/03/1998', 'Serbia'),
(2, 'Kite\r\n', 'Bravo2£', '25/09/2025', '01/01/1960', 'Nigeria'),
(3, 'Sean', 'ImSigma1!', '25/09/2025', '12/03/2000', 'England'),
(4, 'Harris', 'Bobmarley!', '25/09/2025', '01/05/1998', 'Ireland'),
(5, 'Cody', 'Jimmy3', '25/09/2025', '01/03/2007', 'The great Africa'),
(6, 'Rory ', 'ImGinger', '25/09/2025', '20/12/2017', 'Australia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`console_id`);

--
-- Indexes for table `owns`
--
ALTER TABLE `owns`
  ADD PRIMARY KEY (`owns_id`),
  ADD KEY `user_id` (`user_id`,`console_id`),
  ADD KEY `console_id` (`console_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `console`
--
ALTER TABLE `console`
  MODIFY `console_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `owns`
--
ALTER TABLE `owns`
  MODIFY `owns_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `owns`
--
ALTER TABLE `owns`
  ADD CONSTRAINT `owns_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `owns_ibfk_2` FOREIGN KEY (`console_id`) REFERENCES `console` (`console_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
