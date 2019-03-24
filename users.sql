-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2019 at 05:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(25) NOT NULL,
  `zip` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `state`, `zip`, `city`, `country`) VALUES
(1, 'hi', 'asd', 0, '', '', 0, 'Aurangabad', 'Pakistan)'),
(2, '', '', 0, '', '', 0, '--Selecct City--', '--Select Country--)'),
(3, 'ha', 'sgag@gmail.com', 0, '', '', 0, 'Jabalpur', 'USA)'),
(4, 'ha', 'sgag@gmail.com', 0, '', '', 0, 'Jabalpur', 'USA)'),
(5, 'ha', 'sgag@gmail.com', 0, '', '', 0, 'Jabalpur', 'USA)'),
(6, 'ha', 'sgag@gmail.com', 0, '', '', 0, 'Jabalpur', 'USA)'),
(7, '', '', 0, '', '', 0, '', ')'),
(8, '', '', 0, '', '', 0, '', ')'),
(9, '', '', 0, '', '', 0, '', ')'),
(17, 'ha', 'sgag@gmail.com', 0, '', '', 0, 'Jabalpur', 'USA)'),
(18, '', '', 0, '', '', 0, '', ')'),
(19, 'cv', 'wd', 0, '', '', 0, '--Selecct City--', '--Select Country--)'),
(20, 'hi', 'hello', 0, '', '', 0, 'Jabalpur', 'USA)'),
(21, 'wshqsd', 'hdhh@gmail.com', 0, '', '', 0, 'Aurangabad', 'Pakistan)'),
(22, '', '', 0, '', '', 0, '--Selecct City--', '--Select Country--)'),
(23, 'nemo', 'ndwj', 0, '', '', 0, 'Bengaluru', 'Britain)'),
(24, 'ssfsd', 'dfdgdf@ds', 0, '', '', 0, '', 'india)'),
(26, 'safas', 'safa@', 0, '', '', 0, 'mdb', 'india)'),
(27, '', '', 0, '', '', 0, 'dar', ')'),
(28, 'jim', 'jim@', 0, '', '', 0, 'mumabi', 'pakistan)'),
(29, 'joe@', 'joe@gm', 0, '', '', 0, 'pune', 'britian)'),
(30, 'dasfdasfd', 'fsdgsd', 0, '', '', 0, 'Jalgaon', 'USA)'),
(31, 'sdasfd', 'adaf', 0, '', '', 0, 'Jalgaon', 'USA)'),
(32, 'sdas', 'sdfsd', 0, '', '', 0, '--Selecct City--', '--Select Country--)'),
(33, 'adsf', 'sgdfh', 0, '', '', 0, 'Indore', 'Britain)'),
(34, 'shrutika', 'sa@df', 0, '', '', 0, '', 'dgrg)'),
(35, 'sara', 'dasf@', 0, '', '', 0, 'adsdfdsf', 'inida)'),
(37, 'sahah', 'asa', 12334, '', '', 0, 'pune', 'russia)'),
(38, 'dfd', '', 0, '', '', 0, '', ')'),
(39, 'dfd', 'bsdf', 0, '', '', 0, '', ')'),
(40, 'sfdg', '', 12, '', '', 0, '', ')'),
(41, 'shaa', '', 124, '', '', 0, 'sd', 'trtr)'),
(42, '', '', 0, '', '', 0, '', ')'),
(43, '', '', 0, 'fdffg', '', 0, '', ')'),
(44, '', '', 0, '', '', 0, '', ')'),
(45, '', '', 0, '', 'dsf', 0, '', ')'),
(46, '', '', 0, '', 'bihar', 78312, '', ')'),
(48, '', '', 0, '', 'bihar', 78312, '', ')'),
(49, 'scsv', 'sfb', 0, '', '', 0, '', ')'),
(50, 'cd', '', 0, '', '', 0, '', ')'),
(51, '', '', 0, '', '', 0, '', ')'),
(52, '', '', 0, '', '', 0, '', ')'),
(53, 'shriah', 'shru@gmail.com', 2147483647, 'zaHXV Hxasnc an c a', 'asbcs', 847211, 'pune', 'xhacxc )'),
(54, '', '', 0, '', '', 0, '', ')'),
(55, '', '', 0, '', '', 0, '', ')'),
(56, '', '', 0, '', '', 0, '', ')');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
