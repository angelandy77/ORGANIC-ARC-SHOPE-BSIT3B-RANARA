-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 11:49 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ranara`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_ID` int(255) NOT NULL,
  `Category_Name` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Category_Name`) VALUES
(1, 'Tools'),
(2, 'Seeds'),
(3, 'Plants');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(255) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `Category_ID` int(255) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `productName`, `Category_ID`, `Model`, `Status`, `Price`, `Picture`) VALUES
(1, 'Olivia Pot- Grey stripe', 1, 'Pot', 'Available', 'PHP 1,500.00', '1633673700_olivia.jpg'),
(2, 'Patavium Terra Cotta Pot - 6.3\"d * 5.3\" h', 1, 'Pot', 'Available', 'PHP 400.95', '1633673880_patavium.jpg'),
(3, 'Vintage Leaf Ceramic Pot - 4.8\" Pink', 1, 'Pot', 'Available', 'PHP 1,600.00', '1633674000_vintage.jpg'),
(4, 'Ponce Plant Hanger - 8.75\" * 23.5\"', 1, 'Hanging Pot', 'Available', 'PHP 1,750.00', '1633674240_ponce.jpg'),
(5, 'Tolsen Trowel -	80x152mm', 1, 'Hand Tool', 'Available', 'Php 150.00', '1633674840_trowel.jpg'),
(6, 'ALUMINIUM BODY GEAR PRUNING SHEAR - 200mm, 8\"', 1, 'Hand Tool', 'Available', 'PHP 350.00', '1633674960_pruningshear.jpg'),
(7, 'Seedling Seed Germination Tray - 128 Holes', 1, 'Tray', 'Available', 'PHP 55.00', '1633675260_seedling.jpg'),
(8, 'Red Diamond Aglaonema', 3, 'Indoor Plant', 'Available', 'PHP 600.00', '1633675920_red.jpg'),
(9, 'Philodendron Pink Princess', 3, 'OutDoor Plants', 'Available', 'PHP 3,800.90', '1633676040_pink.jpg'),
(10, 'Ficus Deltoidea', 3, 'Indoor Plant', 'Available', 'PHP 900.00', '1633676160_ficus.jpg'),
(11, 'Ficus Bambino', 3, 'OutDoor Plants', 'Available', 'PHP 55.00', '1633676340_bambino.jpg'),
(12, 'Monstera Adansonii', 3, 'Indoor Plant', 'Available', 'PHP 480.00', '1633676460_Monstera Adansonii.jpg'),
(13, 'KSHC Kangkong Upland 10 grams', 2, 'Vegetable Seeds', 'Available', '700.90', '1633676580_kangkong.jpg'),
(14, 'Condor Quality Seeds Cucumber Poinsett 76 3 grams', 2, 'Fruit', 'Available', 'PHP 110.00', '1633676700_cucumber.jpg'),
(15, 'KSHC Squash Matavia Super Glutinous 4 grams', 2, 'Fruit', 'Available', 'php 70.00', '1633676880_squash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fullname`, `email`, `username`, `password`, `role`) VALUES
(1, 'Arc Ranara', 'admin@admin', 'ranara', 'admin', 'Admin'),
(2, 'ranara arc', 'user@user', 'arc', 'user', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Category_ID` (`Category_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
