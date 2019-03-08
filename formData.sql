-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2019 at 09:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formData`
--

-- --------------------------------------------------------

--
-- Table structure for table `formDataTable`
--

CREATE TABLE `formDataTable` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `query` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formDataTable`
--

INSERT INTO `formDataTable` (`id`, `email`, `name`, `subject`, `message`, `query`) VALUES
(21, 'dummyemail@gmail.com', 'Dummy Name', 'Dummy Subject', 'A Dummy message, hey how are you today?', 'Where can I find the best pies?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formDataTable`
--
ALTER TABLE `formDataTable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formDataTable`
--
ALTER TABLE `formDataTable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
