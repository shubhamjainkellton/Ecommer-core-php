-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 03:06 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `s_no` int(11) NOT NULL,
  `Product_Name` varchar(350) NOT NULL,
  `Product_Image` varchar(350) NOT NULL,
  `Product_Price` float NOT NULL,
  `Offer_Price` float NOT NULL,
  `Quantity` int(12) NOT NULL,
  `Order_Summary` varchar(350) NOT NULL,
  `Product_s_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`s_no`, `Product_Name`, `Product_Image`, `Product_Price`, `Offer_Price`, `Quantity`, `Order_Summary`, `Product_s_no`) VALUES
(3, 'Women White Striped Top', '4a6a15f2-f8bb-4612-99dc-0e38636540491600863099062-Levis-Women-Tshirts-9651600863097030-1.webp', 1500, 1100, 10, '', 7),
(6, 'Men Blue KYRIE 7 EP Mid-Top Basketball Shoes', '1f908062-07a8-439a-8a36-b93c01c4f5f41606210604621-KYRIE-7-EP-6861606210602582-1.webp', 10000, 5000, 10, '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `sno` int(4) NOT NULL,
  `Category_name` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `updated_on` date DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`sno`, `Category_name`, `category_id`, `created_on`, `updated_on`, `status`, `description`) VALUES
(13, 'U.S. Polo Assn.', '01', '2021-06-02', '2021-06-02', '1', 'Lifestyle'),
(14, 'Nike', '02', '2021-06-02', '2021-06-02', '1', 'Sports Wear'),
(15, 'Levis', '03', '0000-00-00', '0000-00-00', '1', 'Lifestyle'),
(16, 'Jack and Jones', '04', '2021-06-03', '2021-06-03', '0', 'Lifestyle'),
(17, 'Roadster', '04', '2021-06-05', '2021-06-12', '0', 'dfkjl;mdkfb');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `s_no` int(4) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_id` int(8) NOT NULL,
  `price` int(8) NOT NULL,
  `cust_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `s_no` int(10) NOT NULL,
  `Category_name` varchar(255) NOT NULL,
  `Quantity` int(12) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_Id` int(12) NOT NULL,
  `Product_Description` varchar(255) NOT NULL,
  `Product_Image` varchar(255) NOT NULL,
  `Specification` varchar(500) NOT NULL,
  `Actual_Price` float NOT NULL,
  `Offer_Price` float NOT NULL,
  `is_it_returnable` varchar(255) NOT NULL,
  `Delivery_Duration` int(70) NOT NULL,
  `Sub_Category_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`s_no`, `Category_name`, `Quantity`, `Product_Name`, `Product_Id`, `Product_Description`, `Product_Image`, `Specification`, `Actual_Price`, `Offer_Price`, `is_it_returnable`, `Delivery_Duration`, `Sub_Category_Name`) VALUES
(5, 'U.S. Polo Assn.', 10, 'Shirt', 1, 'Pure Cotton ', 'U.S. Polo Assn..webp', 'and Machine Washable.', 1000, 700, '15', 15, ''),
(6, 'Nike', 10, 'Men Blue KYRIE 7 EP Mid-Top Basketball Shoes', 2, 'A pair of blue basketball sports shoes, has mid-top styling, lace-up detail', '1f908062-07a8-439a-8a36-b93c01c4f5f41606210604621-KYRIE-7-EP-6861606210602582-1.webp', 'Cushioned footbed', 10000, 5000, '15', 15, ''),
(7, 'Levis', 10, 'Women White Striped Top', 3, 'White and Black striped woven regular top, has a round neck, short sleeves, and button closure', '4a6a15f2-f8bb-4612-99dc-0e38636540491600863099062-Levis-Women-Tshirts-9651600863097030-1.webp', 'Material: 100% viscose\r\nMachine Wash', 1500, 1100, '15', 15, ''),
(8, 'Jack and Jones', 10, 'Men Black Ben Skinny Fit Low-Rise Slash Knee Stretchable Jeans', 4, 'Black dark wash 5-pocket low-rise jeans, slash knee, no fade, has a button and zip closure, and waistband with belt loops', '44640b44-62ad-429d-b2b5-059577d5429d1592199976779-Jack--Jones-Men-Jeans-3481592199975234-1.webp', '98% Cotton and 2% elastane\r\nMachine-wash', 2000, 1500, '15', 15, '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `sno` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `conform_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`sno`, `email`, `password`, `conform_password`) VALUES
(15, 'kamal@gmail.com', 'qwerty', 0),
(26, 'ayan@gmail.com', '$2y$10$/IikM7/fQPNqIOiWMyGQk.v5XV2nvjT0/h0esCOKj4icROGuLHucq', 0),
(27, 'aman@gmail.com', '$2y$10$D0JRgeOv5i8KZeAk93ZdjuP9xnCTrjCS5qLrkOtdohoMSEf7/7l.q', 0),
(28, 'xyz@gmail.com', '$2y$10$zKUNESdCmglRoJYKye1FqOtJQ2vcK5jSTXifG5.7MWI64sgNuvybm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `s_no` int(5) NOT NULL,
  `Category_Name` varchar(70) NOT NULL,
  `Sub_Category_Name` varchar(70) NOT NULL,
  `Sub_Category_ID` int(8) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Created_on` date NOT NULL,
  `Updated_On` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `s_no` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `s_no` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
