-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2020 at 07:32 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `booth`
--

CREATE TABLE `booth` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booth`
--

INSERT INTO `booth` (`id`, `name`, `ward`, `loc`, `address`, `phone`) VALUES
(1, 'booth1', '17,18,19', 'trichy', 'trichy', '9087408476'),
(2, 'test', '18.19,20', 'trichy', 'trichy', '9998887771'),
(3, 'test1', '21', 'trichy', 'trichy', '9087408476');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `quali` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `gender`, `age`, `email`, `phone`, `quali`, `address`, `psw`) VALUES
('1', 'admin', 'male', '24', 'vinothk1216@gmail.com', '9087408476', 'test', 'trichy', '111'),
('2', 'vinoth', 'male', '21', 'vinothk1216@gmail.com', '9087408476', 'bca', 'trichy', '123'),
('3', 'andrew', 'male', '21', 'test@gmail.com', '9087408476', 'bca', 'trichy', '123');

-- --------------------------------------------------------

--
-- Table structure for table `fdbk`
--

CREATE TABLE `fdbk` (
  `id` int(5) NOT NULL,
  `vid` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `fdbk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fdbk`
--

INSERT INTO `fdbk` (`id`, `vid`, `sub`, `fdbk`) VALUES
(1, '12160', 'testing', 'testing'),
(2, '1534', 'testing', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `newvoter`
--

CREATE TABLE `newvoter` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `quali` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `idp` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `vid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newvoter`
--

INSERT INTO `newvoter` (`id`, `name`, `gender`, `dob`, `email`, `phone`, `quali`, `address`, `ward`, `idp`, `fname`, `status`, `vid`) VALUES
(1, 'vinoth kumar', 'male', '1999-03-23', 'vinothk1216@gmail.com', '9087408476', 'bca', 'trichy Melaputhur', '17', '2.jpg', 'thirugnama m', 'Accept', '1534');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `vid` varchar(50) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `booth` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `name`, `vid`, `ward`, `booth`, `phone`, `address`) VALUES
(1, 'admin', 'vt002', '18', 'booth1', '9087408476', 'trichy'),
(2, 'andrew', 'vt201', '17', 'booth1', '9087408476', 'trichy'),
(3, 'test', '12160', '17', 'booth1', '9087408476', 'trichy'),
(4, 'test', '1256', '17', 'booth1', '9087408476', 'trichy'),
(5, 'admin', '1534', '17', 'test', '908740847', 'trichy');
