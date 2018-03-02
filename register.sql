-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 01:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `name` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `uType` varchar(40) NOT NULL,
  `cInfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`firstname`, `lastname`, `name`, `password`, `email`, `gender`, `uType`, `cInfo`) VALUES
('Sofen', 'Chowdhury', 'sofen', '', 'md.rabby.mahmud@gmail.com', 'Male', 'Student', 'i love php'),
('Rabby', 'Mahamud', 'rms', '', 'md.rabby.mahmud@gmail.com', 'Male', 'Student', 'Nice one.'),
('Maesha', 'Akhand', 'mesh', '', 'maesha94@yahoo.com', 'Female', 'Student', 'Worst!!!'),
('Shimul', 'DEN', 'abu_shimul', '', 'shimul@gmail.com', 'Male', 'Student', 'Info shimul'),
('hgas', 'hgsdv', 'hgfrdj', 'kjk', 'gvhg', 'Male', 'Student', 'hgf'),
('Sofen', 'Chowdhury', 'sofen', 'sofen10oct', 'md.rabby.mahmud@gmail.com', 'Male', 'Instructor', 'hahahaha'),
('Sofen', 'Chowdhury', 'sofen', 'sofen10oct', 'md.rabby.mahmud@gmail.com', 'Male', 'Instructor', 'hahahaha'),
('fdghjhkjk', 'xcvbnm,', 'sdfghj', 's1', 'maeesha94@yahoo.com', 'Male', 'Instructor', 'hwetfwef'),
('', '', '', '', '', '', '----', ''),
('Sadi', 'Khan', 'saad', 'q1', 'sadi@gmail.com', 'Male', 'Student', 'my php code...'),
('ddd', 'aaa', 'ffddd', 'x1', 'd@gmail.com', 'Male', 'Student', 'lol'),
('ss', 'ss', 'ssss', 'p0', 'p@gmail.com', 'Male', 'Student', 'db'),
('qqq', 'qqq', 'www', 'q11', 'q@gmail.com', 'Male', 'Student', 'fuc'),
('qqq', 'qqq', 'www', 'q11', 'q@gmail.com', 'Male', 'Student', 'fuc'),
('qqq', 'qqq', 'www', 'q11', 'q@gmail.com', 'Male', 'Student', 'fuc'),
('', '', '', '', '', '', '----', ''),
('sss', 'aaa', 'qqq', 'w12', 'md.rabby.mahmud@gmail.com', 'Male', 'Student', 'mmmmmm'),
('mjhgyhgdc', 'jjhvjhs', 'jhgghjd', 'e3', 'md.rabby@g.com', 'Male', 'Student', 'kjehhdg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
