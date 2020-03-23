-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 12:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqlinjections`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` text NOT NULL,
  `passwords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `passwords`) VALUES
('admin', 'ucsec{7h15_15_4_r34lly_l0n6_57r1n6_4nd_7h15_pr0b4bly_700k_4_wh1l3}');

-- --------------------------------------------------------

--
-- Table structure for table `flags`
--

CREATE TABLE `flags` (
  `flag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flags`
--

INSERT INTO `flags` (`flag`) VALUES
('ucsec{50m30n3_5h0uld_h4v3_h1dd3n_7h353}');

-- --------------------------------------------------------

--
-- Table structure for table `space_cats`
--

CREATE TABLE `space_cats` (
  `cat_name` varchar(256) NOT NULL,
  `planet` varchar(256) NOT NULL,
  `keywords` text NOT NULL,
  `profile_link` varchar(256) NOT NULL,
  `secrets` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `space_cats`
--

INSERT INTO `space_cats` (`cat_name`, `planet`, `keywords`, `profile_link`, `secrets`) VALUES
('General Meow Meow', 'Earth', 'Meow General inject flag meow', './profile.html', ''),
('Shana', 'Venus', 'chonk unit Shana', './shana.html', 'ucsec{c0nc473n4710n_h45_7h3_w0rd_c47_1n_17)'),
('Tilly', 'Saturn', 'cute art spotted', './tilly.html', ''),
('~', '', '', 'ucsec{50m30n3_5h0uld_h4v3_h1dd3n_7h353}', ''),
('Zoe', 'Pluto', 'cute meow evil', './zoe.html', ''),
('Beau', 'The Sun', 'space moon stars outside', './beau.html', ''),
('Zoe', 'Pluto', 'cute meow evil', './zoe.html', ''),
('Beau', 'The Sun', 'space moon stars outside', './beau.html', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('johndoe', 'password'),
('janedoe', '1234'),
('admin', 'ucsec{h0w_d1d_y0u_637_7h15_p455w0rd}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
