-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 18, 2020 at 07:41 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agr`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_status`
--

CREATE TABLE `add_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_status`
--

INSERT INTO `add_status` (`status_id`, `status_name`) VALUES
(1, 'Active'),
(2, 'Disable');

-- --------------------------------------------------------

--
-- Table structure for table `add_ward`
--

CREATE TABLE `add_ward` (
  `ward_id` int(11) NOT NULL,
  `ward_number` int(11) NOT NULL,
  `fk_mun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_ward`
--

INSERT INTO `add_ward` (`ward_id`, `ward_number`, `fk_mun_id`) VALUES
(9, 10, 16),
(10, 12, 16),
(11, 13, 19),
(12, 5, 18);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `email`, `password`, `status`, `role`) VALUES
(1, 'lautan tharu', 'lautanskr45@gmail.com', '00000', 1, 'admin'),
(2, 'giriraj', 'giriraj@gmail.com', '12345', 1, 'buyer');

-- --------------------------------------------------------

--
-- Table structure for table `buyerlogin_tb`
--

CREATE TABLE `buyerlogin_tb` (
  `buyer_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `b_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyerlogin_tb`
--

INSERT INTO `buyerlogin_tb` (`buyer_id`, `username`, `email`, `phone`, `b_password`) VALUES
(1, 'mahendra', 'mahendra@gmail.com', '9867856271', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(4, 'Plants Product'),
(5, 'Animal Product'),
(6, 'Manure'),
(7, 'Agri Tools'),
(8, 'Agriculture Land'),
(9, 'Any other');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(12, 'India'),
(13, 'Nepal'),
(15, 'Bhutan'),
(23, 'Bangladesh'),
(24, 'US'),
(25, 'Australiya');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(200) NOT NULL,
  `fk_peovince_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `fk_peovince_id`) VALUES
(8, 'Bardiya', 20),
(10, 'Dang', 20),
(12, 'Banke', 20);

-- --------------------------------------------------------

--
-- Table structure for table `farmer_type`
--

CREATE TABLE `farmer_type` (
  `farmer_id` int(11) NOT NULL,
  `farmer_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer_type`
--

INSERT INTO `farmer_type` (`farmer_id`, `farmer_type_name`) VALUES
(1, 'Whole seller'),
(2, 'Farmer');

-- --------------------------------------------------------

--
-- Table structure for table `municipality`
--

CREATE TABLE `municipality` (
  `mun_id` int(11) NOT NULL,
  `mun_name` varchar(200) NOT NULL,
  `fk_district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `municipality`
--

INSERT INTO `municipality` (`mun_id`, `mun_name`, `fk_district_id`) VALUES
(16, 'Rajapur', 8),
(17, 'Geruwa', 8),
(18, 'Rajapur', 12),
(19, 'Nepalgunj', 12);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `pan` varchar(200) DEFAULT NULL,
  `phone` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL,
  `fk_type_farmer` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fk_country` int(11) NOT NULL,
  `fk_province` int(11) NOT NULL,
  `fk_district` int(11) NOT NULL,
  `fk_municipal` int(11) NOT NULL,
  `ward_no` int(11) NOT NULL,
  `tole` varchar(500) DEFAULT NULL,
  `street` varchar(200) DEFAULT NULL,
  `near_place` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `email`, `pass`, `pan`, `phone`, `mobile`, `role`, `fk_type_farmer`, `image`, `fk_country`, `fk_province`, `fk_district`, `fk_municipal`, `ward_no`, `tole`, `street`, `near_place`, `reg_date`, `status`) VALUES
(2, 'Lautan', 'lautanskr@gmail.com', '12345', '34345446', '9324646', '9823334343', 'seller', 1, 'assets/images/vendorltn4.jpg', 13, 20, 8, 16, 8, 'Mahuwa', 'New Raod', 'mahuwa school', '2020-12-11 07:44:39', 1),
(3, 'bale', 'bale@gmail.com', 'bale12', '4524', '832455', '9823423235', 'seller', 1, 'assets/images/vendorIMG_20191008_134432_edited2.jpg', 13, 20, 12, 19, 11, 'dfdavffdfgs', 'dsgd', 'dgvd', '2020-12-11 07:44:39', 1),
(4, 'Ram bahadur', 'ram@gmail.com', 'ram00', '24543', '3542352', '9843923467', 'buyer', 2, 'assets/images/vendor/peasant-452904_1920.jpg', 13, 20, 12, 19, 1, 'Banke Gau', 'sadarline road', 'GNV school', '2020-12-11 07:44:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_group_fk` int(11) NOT NULL,
  `product_des` text NOT NULL,
  `product_rate` varchar(100) NOT NULL,
  `unit_type` varchar(100) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `fk_vendor_id` int(11) NOT NULL,
  `product_reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`product_id`, `product_name`, `product_group_fk`, `product_des`, `product_rate`, `unit_type`, `product_image`, `fk_vendor_id`, `product_reg_date`) VALUES
(11, 'Tomato', 5, 'Best Quality', '30', 'Kg', 'assets/images/products/tomato.jpg', 2, '2020-09-26 14:48:14'),
(13, 'Onions', 5, 'best prices', '40', 'Kg', 'assets/images/products/onions-1397037_1920.jpg', 2, '2020-09-26 14:56:01'),
(14, 'Cucumber', 5, 'best Quality', '15', 'Kg', 'assets/images/products/cucumbers-849269_1920.jpg', 3, '2020-09-26 15:38:59'),
(15, 'Goat', 26, 'Local', '400', 'Best price', 'assets/images/products/goat-5535783_1920.jpg', 2, '2020-09-26 15:51:43'),
(16, 'Broiler', 26, 'Best quality', '350', 'Kg', 'assets/images/products/chicken-4649258_1920.jpg', 2, '2020-09-26 15:52:26'),
(17, 'Pea', 5, 'local products', '40', 'Kg', 'assets/images/products/textures-1938301_1920.jpg', 3, '2020-09-26 15:53:55'),
(18, 'Fish', 41, 'We provide to our clients best quality green tiger fish.', '100', 'kg', 'assets/images/products/fish-234677_1920.jpg', 2, '2020-09-29 17:05:57'),
(20, 'Chillies', 38, 'Best products', '450', 'Best Quality', 'assets/images/products/chili.jpg', 4, '2020-12-06 05:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_group`
--

CREATE TABLE `product_group` (
  `prodgroup_id` int(11) NOT NULL,
  `prodgroup_name` varchar(100) NOT NULL,
  `fk_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_group`
--

INSERT INTO `product_group` (`prodgroup_id`, `prodgroup_name`, `fk_category`) VALUES
(5, 'Vegetable', 4),
(6, 'Poultry', 5),
(26, 'Cattle and sheep', 5),
(36, 'Crops', 4),
(37, 'Fruits', 4),
(38, 'Spices', 4),
(39, 'Flowers', 4),
(40, 'Coffee and Tea', 4),
(41, 'Fishery', 5),
(42, 'Seeds', 4),
(44, 'Cotton', 4),
(45, 'Nursery Plants', 4),
(46, 'Wood and Timber', 4),
(47, 'Any Other', 9);

-- --------------------------------------------------------

--
-- Table structure for table `provience`
--

CREATE TABLE `provience` (
  `provience_id` int(11) NOT NULL,
  `provience_name` varchar(200) NOT NULL,
  `fk_country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provience`
--

INSERT INTO `provience` (`provience_id`, `provience_name`, `fk_country_id`) VALUES
(14, 'Karnali', 13),
(17, 'maharastra', 12),
(20, 'Province 5', 13),
(24, 'far-western ', 13),
(28, 'Province 1', 13),
(29, 'province 3', 13);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(300) NOT NULL,
  `user_details` int(11) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `username`, `email`, `phone`, `password`, `image`, `user_details`, `role`) VALUES
(1, 'Balkrishna Bhandari', 'Bale', 'bale@gmail.com', '9834593345', 'bale12', '', 0, 'seller'),
(2, 'Sidharth Belbase', 'Sid', 'sid@gmail.com', '9845767389', 'sid123', '', 0, 'buyer'),
(3, 'Lautan Tharu', 'Lautan', 'lautanskr45@gmail.com', '9832323378', '12345', '', 0, 'buyer'),
(4, 'Suman Paudel', 'Suman', 'suman@gmail.com', '9823483345', '00000', '', 0, 'Seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_status`
--
ALTER TABLE `add_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `add_ward`
--
ALTER TABLE `add_ward`
  ADD PRIMARY KEY (`ward_id`),
  ADD KEY `fk_mun_id` (`fk_mun_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `buyerlogin_tb`
--
ALTER TABLE `buyerlogin_tb`
  ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`),
  ADD KEY `fk_zone_id` (`fk_peovince_id`);

--
-- Indexes for table `farmer_type`
--
ALTER TABLE `farmer_type`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `municipality`
--
ALTER TABLE `municipality`
  ADD PRIMARY KEY (`mun_id`),
  ADD KEY `fk_district_id` (`fk_district_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_type_farmer` (`fk_type_farmer`),
  ADD KEY `fk_country` (`fk_country`),
  ADD KEY `fk_province` (`fk_province`),
  ADD KEY `fk_district` (`fk_district`),
  ADD KEY `fk_municipal` (`fk_municipal`),
  ADD KEY `ward_no` (`ward_no`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_group` (`product_group_fk`),
  ADD KEY `fk_vendor_id` (`fk_vendor_id`);

--
-- Indexes for table `product_group`
--
ALTER TABLE `product_group`
  ADD PRIMARY KEY (`prodgroup_id`),
  ADD KEY `fk_category` (`fk_category`);

--
-- Indexes for table `provience`
--
ALTER TABLE `provience`
  ADD PRIMARY KEY (`provience_id`),
  ADD KEY `fk_country_id` (`fk_country_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_status`
--
ALTER TABLE `add_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_ward`
--
ALTER TABLE `add_ward`
  MODIFY `ward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buyerlogin_tb`
--
ALTER TABLE `buyerlogin_tb`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `farmer_type`
--
ALTER TABLE `farmer_type`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `municipality`
--
ALTER TABLE `municipality`
  MODIFY `mun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_group`
--
ALTER TABLE `product_group`
  MODIFY `prodgroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `provience`
--
ALTER TABLE `provience`
  MODIFY `provience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_ward`
--
ALTER TABLE `add_ward`
  ADD CONSTRAINT `add_ward_ibfk_1` FOREIGN KEY (`fk_mun_id`) REFERENCES `municipality` (`mun_id`);

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`fk_peovince_id`) REFERENCES `provience` (`provience_id`);

--
-- Constraints for table `municipality`
--
ALTER TABLE `municipality`
  ADD CONSTRAINT `municipality_ibfk_1` FOREIGN KEY (`fk_district_id`) REFERENCES `district` (`district_id`);

--
-- Constraints for table `organization`
--
ALTER TABLE `organization`
  ADD CONSTRAINT `organization_ibfk_1` FOREIGN KEY (`fk_country`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `organization_ibfk_2` FOREIGN KEY (`fk_province`) REFERENCES `provience` (`provience_id`),
  ADD CONSTRAINT `organization_ibfk_3` FOREIGN KEY (`fk_district`) REFERENCES `district` (`district_id`),
  ADD CONSTRAINT `organization_ibfk_4` FOREIGN KEY (`fk_municipal`) REFERENCES `municipality` (`mun_id`),
  ADD CONSTRAINT `organization_ibfk_6` FOREIGN KEY (`fk_type_farmer`) REFERENCES `farmer_type` (`farmer_id`),
  ADD CONSTRAINT `organization_ibfk_7` FOREIGN KEY (`status`) REFERENCES `add_status` (`status_id`);

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`product_group_fk`) REFERENCES `product_group` (`prodgroup_id`),
  ADD CONSTRAINT `product_detail_ibfk_2` FOREIGN KEY (`fk_vendor_id`) REFERENCES `organization` (`id`);

--
-- Constraints for table `product_group`
--
ALTER TABLE `product_group`
  ADD CONSTRAINT `product_group_ibfk_1` FOREIGN KEY (`fk_category`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `provience`
--
ALTER TABLE `provience`
  ADD CONSTRAINT `provience_ibfk_1` FOREIGN KEY (`fk_country_id`) REFERENCES `country` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
