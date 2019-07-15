-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 06:17 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vpslsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cargarages`
--

CREATE TABLE `cargarages` (
  `id` int(11) NOT NULL,
  `gname` varchar(45) DEFAULT NULL,
  `gdescription` text,
  `location` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `Pnumber` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cargarages`
--

INSERT INTO `cargarages` (`id`, `gname`, `gdescription`, `location`, `city`, `district`, `street`, `country`, `Pnumber`, `email`, `users_id`) VALUES
(1, 'Najma spares', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,\r\n sed do eiusmod tempor incididunt ut labore et dolore magna\r\n aliqua. Ut enim ad minim veniam, quis nostrud exercitation ', 'ila', 'dSM', 'ilala', 'ilala, boma', 'tanzania', '456456', 'h@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `carservicedrivers`
--

CREATE TABLE `carservicedrivers` (
  `id` int(11) NOT NULL,
  `doc` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `drivers_id` int(11) NOT NULL,
  `cargarages_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(255) NOT NULL,
  `pnumber` varchar(45) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `rolename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `fname`, `lname`, `pnumber`, `address`, `email`, `gender`, `country`, `city`, `password`, `rolename`) VALUES
(1, 'mwalimu', 'juma', '0987', 'ili', 'juma@gmail.com', 'male', 'tanzania', 'dar es salama', '202cb962ac59075b964b07152d234b70', 'driver'),
(2, 'mwalimu', 'juma', '234234', '34234', 'mwalimu@gmail.com', 'male', NULL, NULL, '202cb962ac59075b964b07152d234b70', 'driver');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cargarageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `description`, `cargarageid`) VALUES
(1, 'yuko vizuri kabisa', 1),
(2, 'hahahhsa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `garageservices`
--

CREATE TABLE `garageservices` (
  `id` int(11) NOT NULL,
  `servicename` varchar(45) DEFAULT NULL,
  `servicedescription` varchar(45) DEFAULT NULL,
  `doc` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `cargarages_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gpslocations`
--

CREATE TABLE `gpslocations` (
  `id` int(11) NOT NULL,
  `LongTude` double DEFAULT NULL,
  `latTude` double DEFAULT NULL,
  `cargarages_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logsheets`
--

CREATE TABLE `logsheets` (
  `id` int(11) NOT NULL,
  `logusername` varchar(45) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mainttips`
--

CREATE TABLE `mainttips` (
  `idmaintTips` int(11) NOT NULL,
  `TipsTitle` varchar(100) DEFAULT NULL,
  `TipsDesc` varchar(200) DEFAULT NULL,
  `doc` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `addedby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mainttips`
--

INSERT INTO `mainttips` (`idmaintTips`, `TipsTitle`, `TipsDesc`, `doc`, `addedby`) VALUES
(1, 'How to cool my engine', 'Damn. Did he drive a police car? What about their driver training? I have a brother-in-law who is a police officer in Scotland. There\'s a rigorous course just for to be allowed to drive a panda car ar', '2019-05-23 12:08:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `rolename` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `gender`, `mobile`, `email`, `password`, `address`, `rolename`) VALUES
(1, 'kassam', 'Namwitika', 'male', 719525658, 'tito@gmail.com', '202cb962ac59075b964b07152d234b70', 'ilala', 'admin'),
(2, 'panga', 'fred', 'male', 719525658, 'tit@gmail', '202cb962ac59075b964b07152d234b70', 'ilala', 'normal'),
(3, 'godfrey', 'mathias', 'male', 7195256, 'muna@gmail.com', '202cb962ac59075b964b07152d234b70', 'ila po boz', 'owner'),
(4, 'fatuma', 'saidi', 'female', 255555, 'muna@gmail.com', '202cb962ac59075b964b07152d234b70', 'ilala', 'owner'),
(5, 'tes', 'sts', 'female', 456456, 'test@gmail', '202cb962ac59075b964b07152d234b70', 'se', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargarages`
--
ALTER TABLE `cargarages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cargarages_users_idx` (`users_id`);

--
-- Indexes for table `carservicedrivers`
--
ALTER TABLE `carservicedrivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_carservicedrivers_Drivers1_idx` (`drivers_id`),
  ADD KEY `fk_carservicedrivers_cargarages1_idx` (`cargarages_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garageservices`
--
ALTER TABLE `garageservices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_garageservices_cargarages1_idx` (`cargarages_id`);

--
-- Indexes for table `gpslocations`
--
ALTER TABLE `gpslocations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_GpsLocations_cargarages1_idx` (`cargarages_id`);

--
-- Indexes for table `logsheets`
--
ALTER TABLE `logsheets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_LogSheets_users1_idx` (`users_id`);

--
-- Indexes for table `mainttips`
--
ALTER TABLE `mainttips`
  ADD PRIMARY KEY (`idmaintTips`),
  ADD KEY `fk_maintTips_users1_idx` (`addedby`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargarages`
--
ALTER TABLE `cargarages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carservicedrivers`
--
ALTER TABLE `carservicedrivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `garageservices`
--
ALTER TABLE `garageservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gpslocations`
--
ALTER TABLE `gpslocations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logsheets`
--
ALTER TABLE `logsheets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mainttips`
--
ALTER TABLE `mainttips`
  MODIFY `idmaintTips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cargarages`
--
ALTER TABLE `cargarages`
  ADD CONSTRAINT `fk_cargarages_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `carservicedrivers`
--
ALTER TABLE `carservicedrivers`
  ADD CONSTRAINT `fk_carservicedrivers_Drivers1` FOREIGN KEY (`drivers_id`) REFERENCES `drivers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_carservicedrivers_cargarages1` FOREIGN KEY (`cargarages_id`) REFERENCES `cargarages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `garageservices`
--
ALTER TABLE `garageservices`
  ADD CONSTRAINT `fk_garageservices_cargarages1` FOREIGN KEY (`cargarages_id`) REFERENCES `cargarages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gpslocations`
--
ALTER TABLE `gpslocations`
  ADD CONSTRAINT `fk_GpsLocations_cargarages1` FOREIGN KEY (`cargarages_id`) REFERENCES `cargarages` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logsheets`
--
ALTER TABLE `logsheets`
  ADD CONSTRAINT `fk_LogSheets_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mainttips`
--
ALTER TABLE `mainttips`
  ADD CONSTRAINT `fk_maintTips_users1` FOREIGN KEY (`addedby`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
