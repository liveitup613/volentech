-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 09:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volentech`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblarticles`
--

CREATE TABLE `tblarticles` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Link` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Content` text NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblcomments`
--

INSERT INTO `tblcomments` (`ID`, `Title`, `Content`, `Author`, `Location`) VALUES
(1, 'Design a device to measure pressure sensor and collect data wirelessly', 'I have been working with a number of electronics engineers in the past and nobody has been as professional as Yugansh at Volentech. \nTruly an expert in their filed. Definitely recommend to anybody looking for an electronics engineer.', 'Ruslan Karuzov', 'Fort Lauderdale, Florida'),
(2, 'Develop a 12V Lithium Ion Battery Management System Design', 'Volentech did excellent work. We were on a time crunch for several components of the project and he did what was necessary to keep us on schedule and get the component designs in place for delivery to our customer', 'Eric Rountree', 'Pennsylvania');

-- --------------------------------------------------------

--
-- Table structure for table `tblfaqs`
--

CREATE TABLE `tblfaqs` (
  `ID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblfaqs`
--

INSERT INTO `tblfaqs` (`ID`, `Question`, `Answer`) VALUES
(4, 'How many years of experience do your firm have?', 'Malesuada fames ac turpis egestas augue interdum velit euismod in pellentesque massa placerat duis ultricies nec nam aliquam sem et tortor consequat Iaculis eu non diam phasellus nc turpis egestas maecenas pharetra eugiat in fermentum posuere urna.'),
(5, 'How big is your team of architects', 'Malesuada fames ac turpis egestas augue interdum velit euismod in pellentesque massa placerat duis ultricies nec nam aliquam sem et tortor consequat Iaculis eu non diam phasellus nc turpis egestas maecenas pharetra eugiat in fermentum posuere urna.'),
(6, 'Does your firm have a project minimum', 'Malesuada fames ac turpis egestas augue interdum velit euismod in pellentesque massa placerat duis ultricies nec nam aliquam sem et tortor consequat Iaculis eu non diam phasellus nc turpis egestas maecenas pharetra eugiat in fermentum posuere urna.');

-- --------------------------------------------------------

--
-- Table structure for table `tblportfolios`
--

CREATE TABLE `tblportfolios` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblportfolios`
--

INSERT INTO `tblportfolios` (`ID`, `Title`, `Date`, `Location`) VALUES
(4, 'Portfolio Test', '2022-02-16', 'Fort Lauderdale, Florida');

-- --------------------------------------------------------

--
-- Table structure for table `tblport_descriptions`
--

CREATE TABLE `tblport_descriptions` (
  `ID` int(11) NOT NULL,
  `PortfolioID` int(11) NOT NULL,
  `Title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblslides`
--

CREATE TABLE `tblslides` (
  `ID` int(11) NOT NULL,
  `PortfolioID` int(11) NOT NULL,
  `Attach` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `Name`, `Password`, `Phone`) VALUES
(1, 'admin', 'admin', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblarticles`
--
ALTER TABLE `tblarticles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfaqs`
--
ALTER TABLE `tblfaqs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblportfolios`
--
ALTER TABLE `tblportfolios`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblport_descriptions`
--
ALTER TABLE `tblport_descriptions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblslides`
--
ALTER TABLE `tblslides`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblarticles`
--
ALTER TABLE `tblarticles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblfaqs`
--
ALTER TABLE `tblfaqs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblportfolios`
--
ALTER TABLE `tblportfolios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblport_descriptions`
--
ALTER TABLE `tblport_descriptions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblslides`
--
ALTER TABLE `tblslides`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
