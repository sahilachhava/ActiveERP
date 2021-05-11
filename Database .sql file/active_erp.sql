-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2021 at 12:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_detail`
--

CREATE TABLE `admin_detail` (
  `id` int(10) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) NOT NULL DEFAULT '12345678'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_detail`
--

INSERT INTO `admin_detail` (`id`, `image`, `name`, `dob`, `email`, `password`) VALUES
(1, NULL, 'Sahil Achhava', NULL, 'sahil@active.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `aff`
--

CREATE TABLE `aff` (
  `id` int(10) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `season` varchar(20) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `sd` varchar(25) DEFAULT NULL,
  `ed` varchar(25) DEFAULT NULL,
  `loc` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aff`
--

INSERT INTO `aff` (`id`, `title`, `season`, `year`, `sd`, `ed`, `loc`) VALUES
(1, 'Ahmedabad Food Fest', '4', '2018', '2018/12/14', '2018/12/16', 'Ozone 9, University Area, Ahmedabad, Gujarat 380052');

-- --------------------------------------------------------

--
-- Table structure for table `aff_booking`
--

CREATE TABLE `aff_booking` (
  `id` int(10) NOT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `hsn` varchar(10) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `season` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `sd` varchar(20) DEFAULT NULL,
  `ed` varchar(20) DEFAULT NULL,
  `loc` varchar(1000) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `gst_type` varchar(20) DEFAULT NULL,
  `stall` varchar(1000) DEFAULT NULL,
  `stallno` varchar(1000) DEFAULT NULL,
  `quan` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT NULL,
  `man` varchar(1000) DEFAULT NULL,
  `manch` varchar(1000) DEFAULT NULL,
  `bamt` varchar(1000) DEFAULT NULL,
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `igst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `s` int(5) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aff_sales`
--

CREATE TABLE `aff_sales` (
  `id` int(10) NOT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `in_no` int(10) DEFAULT NULL,
  `hsn` varchar(10) DEFAULT NULL,
  `b_id` int(10) DEFAULT NULL,
  `b_dt` varchar(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `season` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `sd` varchar(20) DEFAULT NULL,
  `ed` varchar(20) DEFAULT NULL,
  `loc` varchar(1000) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `gst_type` varchar(20) DEFAULT NULL,
  `stall` varchar(1000) DEFAULT NULL,
  `stallno` varchar(1000) DEFAULT NULL,
  `quan` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT NULL,
  `man` varchar(1000) DEFAULT NULL,
  `manch` varchar(1000) DEFAULT NULL,
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `igst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `pay` int(5) DEFAULT 0,
  `cheque` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `combo`
--

CREATE TABLE `combo` (
  `id` int(10) NOT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `ro_no` varchar(30) DEFAULT NULL,
  `ro_dt` varchar(50) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `sup_in` varchar(30) DEFAULT NULL,
  `sup_dt` varchar(50) DEFAULT NULL,
  `p_amt` varchar(1000) DEFAULT NULL,
  `p_gst` varchar(1000) DEFAULT NULL,
  `p_total` varchar(1000) DEFAULT NULL,
  `sale_in` varchar(30) DEFAULT NULL,
  `sale_dt` varchar(50) DEFAULT NULL,
  `sale_amt` varchar(1000) DEFAULT NULL,
  `sale_gst` varchar(1000) DEFAULT NULL,
  `sale_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `gst` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `combo`
--

INSERT INTO `combo` (`id`, `emp_name`, `ro_no`, `ro_dt`, `sup`, `sup_in`, `sup_dt`, `p_amt`, `p_gst`, `p_total`, `sale_in`, `sale_dt`, `sale_amt`, `sale_gst`, `sale_total`, `profit`, `gst`) VALUES
(1, 'Juber Master', '93', '2019/03/06', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Rajul Bhatt', '94', '2019/03/07', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Rajul Bhatt', '95', '2019/03/11', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Rajul Bhatt', '96', '2019/03/11', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Rajul Bhatt', '97', '2019/03/11', 'Eagle Advertiser', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Shomit Mazumdar', '98', '2019/03/23', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Rajul Bhatt', '99', '2019/03/28', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '3', '2019/07/01', '6', '3', '6', '2', '1'),
(8, 'Rajul Bhatt', '100', '2019/03/28', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '3', '2019/07/01', '1', '9', '2', '3', '1'),
(9, 'Juber Master', '101', '2019/06/09', 'Ahmedabad Ring Road Infrastructure Ltd', '12', '2019/06/25', '20000', '', '21000', '1', '2019/06/09', '2', '1', '2', '8', '4'),
(25, 'Wasim Chippa', '117', '2019/07/01', 'Publicity Parlour', 'GST/19-20/695', '2019/07/05', '29400,0', '', '30870,0', '6', '2019/07/23', '3', '1', '3', '8', '4'),
(11, 'Juber Master', '103', '2019/07/01', 'Publicity Parlour', '145623', '2019/07/02', '489600', '', '514080', '2', '2019/07/05', '5', '2', '5', '7', '3'),
(12, 'Juber Master', '104', '2019/07/01', 'Ahmedabad Ring Road Infrastructure Ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Juber Master', '105', '2019/07/01', 'Media Buzz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Wasim Chippa', '108', '2019/07/02', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '4', '2019/07/09', '1', '9', '2', '0', '0'),
(18, 'Wasim Chippa', '110', '2019/07/11', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '31', '2019/08/05', '5', '2', '6', '2', '1'),
(19, 'Wasim Chippa', '111', '2019/07/11', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '35', '2019/08/13', '5', '2', '6', '2', '1'),
(23, 'Wasim Chippa', '115', '2019/07/12', 'Publicity Parlour', 'GST/359', '2019/07/14', '46027.5', '', '48328.875', '26', '2019/08/01', '5', '2', '5', '1', '5'),
(22, 'Wasim Chippa', '114', '2019/07/02', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '5', '2019/07/12', '2', '1', '2', '3', '1'),
(26, 'Wasim Chippa', '118', '2019/07/01', 'Chitra (B) publicity', 'CB/0699/19-20', '2019/07/03', '139999.88', '', '165199.8584', '10', '2019/07/23', '1', '2', '1', '1', '3'),
(27, 'Wasim Chippa', '119', '2019/07/01', 'Sai Publicity', '0098/19-20', '2019/07/08', '30499.97', '', '35989.9646', '7', '2019/07/23', '3', '6', '4', '4', '8'),
(29, 'Wasim Chippa', '121', '2019/07/01', 'Publicity Parlour', 'GST/19-20/763', '2019/07/17', '2975', '', '3123.75', '9', '2019/07/23', '3', '1', '3', '5', '2'),
(58, 'Wasim Chippa', '150', '2019/07/23', 'R V Vyas Associates', 'GST/389', '2019/07/29', '92862.5', '', '97505.625', '24', '2019/08/01', '1', '5', '1', '2', '1'),
(33, 'Wasim Chippa', '125', '2019/07/01', 'Publicity Parlour', 'GST/19-20/704', '2019/07/08', '15925,0', '', '16721.25,0', '12', '2019/07/25', '1', '9', '1', '2', '1'),
(34, 'Wasim Chippa', '126', '2019/07/01', 'R V Vyas Associates', 'GST/349', '2019/07/08', '1275', '', '1338.75', '11', '2019/07/25', '1', '7', '1', '3', '1'),
(35, 'Wasim Chippa', '127', '2019/07/01', 'VIPUL PUBLICITY', '131', '2019/07/16', '30999.9', '', '36579.882', '13', '2019/07/25', '3', '5', '3', '0', '9'),
(36, 'Wasim Chippa', '128', '2019/07/01', 'Publicity Parlour', 'GST/19-20/692', '2019/07/04', '33150', '', '34807.5', '18', '2019/07/25', '3', '1', '3', '1', '5'),
(37, 'Wasim Chippa', '129', '2019/07/01', 'Publicity Parlour', 'GST/19-20/749', '2019/07/15', '637.5', '', '669.375', '17', '2019/07/25', '6', '3', '6', '2', '1'),
(38, 'Wasim Chippa', '130', '2019/07/01', 'R V Vyas Associates', 'GST/339', '2019/07/04', '46000', '', '48300', '16', '2019/07/25', '5', '2', '5', '5', '2'),
(39, 'Wasim Chippa', '131', '2019/07/01', 'R V Vyas Associates', 'GST/341', '2019/07/04', '26600', '', '27930', '15', '2019/07/25', '2', '1', '3', '3', '1'),
(40, 'Wasim Chippa', '132', '2019/07/01', 'R V Vyas Associates', 'GST/340', '2019/07/04', '47880', '', '50274', '14', '2019/07/25', '5', '2', '5', '5', '2'),
(49, 'Wasim Chippa', '141', '2019/07/01', 'KRISH COMMUNICATION', 'KC/82/19-20', '2019/07/09', '200000.1', '', '236000.118', '19', '2019/07/29', '2', '4', '2', '4', '8'),
(47, 'Wasim Chippa', '139', '2019/07/25', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'Wasim Chippa', '169', '2019/08/07', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Wasim Chippa', '140', '2019/07/01', 'Chitra (B) publicity', 'CB/0769/19-20', '2019/07/11', '69999.86', '', '82599.8348,0', '22', '2019/07/29', '3', '7', '4', '-', '-'),
(50, 'Wasim Chippa', '142', '2019/07/01', 'TDI International India Private Limited', 'GUJ/125/19-20', '2019/07/01', '270000.08', '', '318600.0944', '20', '2019/07/29', '3', '5', '3', '-', '-'),
(51, 'Wasim Chippa', '143', '2019/07/01', 'Ahmedabad Ring Road Infrastructure Ltd', 'GUJ/125/19-20', '2019/07/01', '270000.08', '', '318600.0944', '21', '2019/07/29', '3', '5', '3', '4', '8'),
(52, 'Wasim Chippa', '144', '2019/06/01', 'The Sandesh Ltd. (Spotlight Division)', '44100398', '2019/07/25', '80000.1', '', '94400.118', '23', '2019/07/31', '8', '1', '1', '6', '1'),
(53, 'Wasim Chippa', '145', '2019/07/01', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Wasim Chippa', '146', '2019/07/29', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Wasim Chippa', '147', '2019/07/29', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Wasim Chippa', '148', '2019/07/29', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'Wasim Chippa', '149', '2019/07/29', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Wasim Chippa', '159', '2019/08/02', 'R V Vyas Associates', NULL, NULL, NULL, NULL, NULL, '32', '2019/08/05', '2', '1', '2', '2', '1'),
(61, 'Wasim Chippa', '153', '2019/07/29', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Wasim Chippa', '154', '2019/07/23', 'R V Vyas Associates', 'GST/389', '2019/07/29', '92862.5', '', '97505.625', '25', '2019/08/01', '1', '5', '1', '1', '6'),
(63, 'Wasim Chippa', '155', '2019/07/21', 'Publicity Parlour', 'GST/19-20/793', '2019/07/22', '1402.5', '', '1472.625', '43', '2019/09/26', '1', '8', '1', '2', '1'),
(64, 'Wasim Chippa', '156', '2019/07/19', 'Publicity Parlour', 'GST/19-20/785', '2019/07/22', '12285', '', '12899.25', '42', '2019/09/26', '1', '7', '1', '2', '1'),
(65, 'Wasim Chippa', '157', '2019/07/26', 'R V Vyas Associates', 'GST/388', '2019/07/29', '44767.8', '', '47006.19', '27', '2019/08/01', '5', '2', '5', '1', '5'),
(66, 'Wasim Chippa', '158', '2019/07/19', 'R V Vyas Associates', 'GST/373', '2019/07/24', '2971.6', '', '3120.18', '28', '2019/08/01', '3', '1', '3', '7', '3'),
(69, 'Wasim Chippa', '161', '2019/08/01', 'TDI International India Private Limited', 'GST/158/19-20', '2019/08/01', '189000', '', '223020', '29', '2019/08/02', '2', '3', '2', '2', '4'),
(71, 'Wasim Chippa', '163', '2019/07/01', 'Media Buzz', '85', '2019/07/02', '101999.92', '', '120359.9056,0', '30', '2019/08/02', '1', '1', '1', '3', '5'),
(74, 'Wasim Chippa', '166', '2019/08/02', 'Advice Media', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'Wasim Chippa', '165', '2019/08/02', 'Advice Media', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'Wasim Chippa', '170', '2019/08/10', 'GUJARAT TODAY', NULL, NULL, NULL, NULL, NULL, '36', '2019/08/14', '1', '9', '1', '3', '1'),
(79, 'Wasim Chippa', '171', '2019/07/24', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '33', '2019/08/13', '4', '2', '4', '1', '6'),
(80, 'Wasim Chippa', '172', '2019/07/24', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '34', '2019/08/13', '4', '2', '4', '1', '6'),
(81, 'Wasim Chippa', '173', '2019/07/24', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '37', '2019/08/16', '2', '1', '2', '6', '3'),
(82, 'Wasim Chippa', '174', '2019/07/24', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '38', '2019/08/16', '2', '1', '2', '6', '3'),
(83, 'Wasim Chippa', '175', '2019/08/16', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '40', '2019/08/17', '1', '6', '1', '4', '2'),
(84, 'Wasim Chippa', '176', '2019/07/01', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '39', '2019/08/16', '3', '1', '3', '1', '5'),
(85, 'Wasim Chippa', '177', '2019/08/01', 'VIPUL PUBLICITY', '155', '2019/08/05', '24999.9', '', '29499.882', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'Wasim Chippa', '178', '2019/08/01', 'VIPUL PUBLICITY', '123', '2019/08/04', '0', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'Wasim Chippa', '179', '2019/08/01', 'VIPUL PUBLICITY', '155', '2019/08/05', '21999.9', '', '25959.882', '41', '2019/09/02', '2', '4', '2', '3', '5'),
(88, 'Wasim Chippa', '180', '2019/07/12', 'R V Vyas Associates', 'GST/369', '2019/07/04', '1130', '', '1186.5', '44', '2019/09/26', '1', '5', '1', '2', '1'),
(89, 'Wasim Chippa', '181', '2019/07/12', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '45', '2019/09/27', '5', '2', '5', '5', '2');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `pan` varchar(20) DEFAULT NULL,
  `gst` varchar(30) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `name`, `street`, `area`, `city`, `state`, `pincode`, `email`, `phone`, `pan`, `gst`, `emp_name`) VALUES
(1, 'Bakeri Urban Development Pvt Ltd', '\"Sanskrut\", Near Old High Court', 'Off Ashram Road', 'Ahmedabad', 'Gujarat', '380009', 'example@example.com', '111', 'AAACH4674C', '24AAACH4674C1ZX', 'Upasana Miterani'),
(2, 'Safal Goyal Reality LLP', 'Site: Sky City, Opp SP Ring Road', 'Shela', 'Ahmedabad', 'Gujarat', '0', 'example@example.com', '111', 'ACIFS8356D', '24ACIFS8356D1ZZ', 'Upasana Miterani'),
(3, 'Anayata Tradecom LLP', 'C G Road', 'C G Road', 'Ahmedabad', 'Gujarat', '380009', 'example@example.com', '111', 'ABBFA9221F', '24ABBFA9221F1ZW', 'Upasana Miterani'),
(4, 'GLS University', 'Law Garden', 'Ellisbridge', 'Ahmedabad', 'Gujarat', '380009', 'example@example.com', '111', '-', '-', 'Upasana Miterani'),
(5, 'The Idea  Bag Inc', '2, Shakti Edifice, Opp Nilgiri Bunglows', 'Near D-Mart, Shyamal Cross Road', 'Ahmedabad', 'Gujarat', '0', 'example@example.com', '111', '-', '-', 'Upasana Miterani'),
(6, 'SUNRISE DEVELOPERS', 'SITE :  GANESH CITADEL', 'NARANPURA', 'AHMEDABAD', 'GUJARAT', '0', 'example@example.com', '111', 'ADBFS3218E', '24ADBFS3218E1ZJ', 'Rajul Bhatt'),
(7, 'Mediserve ', 'Ahmedabad', 'Ahmedabad', 'Ahmedabad', 'Gujarat', '000000', 'example@example.com', '111', 'ANUPJ6199F', '24ANUPJ6199F1ZE', 'Rajul Bhatt'),
(8, 'Psy Enterprise', 'Gandhinagar', 'Gandhinagar', 'Gandhinagar', 'Gujarat', '000000', 'example@example.com', '111', 'AASFP1432B', '24AASFP1432B1ZL', 'Rajul Bhatt'),
(9, 'Shree Hari Infrastructure', 'Site: Hari Alayam', 'Gandhinagar', 'Gandhinagar', 'Gujarat', '000000', 'example@example.com', '111', 'AAJFH6730P', '24AAJFH6730P1ZY', 'Rajul Bhatt'),
(10, 'Himalaya Buildcon P Ltd', 'Ahmedabad', 'Ahmedabad', 'Ahmedabad', 'Gujarat', '000000', 'example@example.com', '111', 'AABCH5187K', '24AABCH5187K1ZD', 'Rajul Bhatt'),
(11, ' V Five Projects', 'Site: Sharan Business', 'Gandhinagar', 'Gandhinagar', 'Gujarat', '000000', 'example@example.com', '111', 'AAMFV8954C', '24AAMFV8954C2ZT', 'Rajul Bhatt'),
(12, 'Shreeya Infrastructure', 'Sindhu Bhavan Road', 'Thaltej', 'Ahmedabad', 'Gujarat', '380059', 'example@example.com', '111', 'ADQFS0162E', '24ADQFS0162E1Z7', 'Upasna Miterani'),
(13, 'Happiness Clinic', 'Ahmedabad', 'Abad', 'Abad', 'Gujarat', '380009', 'example@example.com', '111', 'ABCD', '24ABCD', 'Rajul Bhatt'),
(14, 'Riti Infra LLP', 'Sindhu Bhavan Road', 'Sindhu Bhavan Road', 'Ahmedabad', 'Gujarat', '380059', 'example@example.com', '111', 'AVFR6105L', '24AAVFR6105L1ZR', 'Upasna Miterani'),
(15, 'Astrologer Mayank Rawal', 'Navrangpura', 'Navrangpura', 'Ahmedabad', 'Gujarat', '380059', 'example@example.com', '111', 'AVF6205l', '24AVF6205lZ', 'Upasna Miterani'),
(16, 'Dangee Dums', 'Naranpura', 'Naranpura', 'Ahmedabad', 'Gujarat', '380059', 'example@example.com', '111', 'AAICA7675G', '24AAICA7675G1ZH', 'Upasna Miterani'),
(17, 'LS SPORTS MANAGEMENT PRIVATE LIMITED', 'XYZ STREET', 'ABC ', 'Ahmedabad', 'Gujarat', '123456', 'example@example.com', '111', 'AACCL5680Q', '24AACCL5680Q1ZY', 'Rajul Bhatt'),
(18, 'The Idea Bag Inc', 'Shyamal Cross Road', 'Jodhpur', 'Ahmedabad', 'Gujarat', '380059', 'example@example.com', '111', 'NA', 'NA', 'Upasna Miterani'),
(19, 'Shree Sambhav corpo', 'A 101, Pramukh Arcade-2 ', 'Nr Reliance Cross Road', 'Gandhinagar', 'Gujarat', '123456', 'example@example.com', '111', 'ADIFS0948J', '24ADIFS0948J1ZU', 'Rajul Bhatt'),
(20, 'Bhavesh Chauhan ( Capital Flora )', 'Opp Aashka Hospital', 'Sargasan', 'Gandhinagar', 'Guajrat', '382124', 'example@example.com', '111', 'ADHPC4082G', '24ADHPC4082G1ZW', 'Rajul Bhatt'),
(21, 'Foodprints Hospitality LLP', 'Shahibhaug', 'Shahibhaug', 'Ahmedabad', 'Gujarat', '380059', 'example@example.com', '111', 'AAFFF9099P', '24AFFF9099P1ZK', 'Upasna Miterani'),
(22, 'S R Buildcon', 'Shivalay Heights', 'B/H 4 D Square Mall, Nr Savvy Solaris, Motera', 'AHMEDABAD', 'Gujarat', '123456', 'example@example.com', '111', 'ACUFS0074N', '24ACUFS0074N1ZJ', 'Rajul Bhatt'),
(23, 'LOGIC ACADEMY', '1,Sagar ,Opp Nehrunagar BRTS', 'S M Compound, Satellite Road', 'Ahmedabad', 'Gujarat', '380015', 'example@example.com', '111', 'AACCL8841R', '24AACCL8841R1ZV', 'Rajul Bhatt'),
(24, 'S R Infracon', 'Shivalay Parisar ', 'Kudasan', 'Gandhinagar', 'Gujarat', '123456', 'example@example.com', '111', 'ACVFS5274P1', '24ACVFS5274P1Z2', 'Rajul Bhatt'),
(25, 'SHREENATH DEVELOPERS', 'Motera', 'Sabarmati', 'AHMEDABAD', 'GUJARAT', '380000', 'example@example.com', '111', 'ADAFS9011J', '24ADAFS9011J1Z6', 'Rajul Bhatt'),
(26, 'Asif Kadri ', '806 -807, Sakar 1,', 'Ashram Road', 'Ahmedabad', 'Gujarat', '380009', 'example@example.com', '111', 'ACAPK8091R', 'XYZ', 'Shomit Mazumdar'),
(27, 'BETAIN CAREER INSTITUTE PVT LTD.', 'Nanpura', 'Rander', 'SURAT', 'Gujarat', '123456', 'example@example.com', '111', 'AAHCB1594J1Z', '24AAHCB1594J1ZK', 'Rajul Bhatt'),
(28, 'SARVA MANGLA FOODS', 'Prahlad Nagar Road', ' Nr Anand Nagar', 'Ahmedabad', 'Gujarat', '123456', 'example@example.com', '111', 'ADGFS7856P', '24ADGFS7856P1Z7', 'Rajul Bhatt'),
(29, 'La Paradise Enterprise', 'Prahlad Nagar Road', 'Nr Anand Nagar', 'Ahmedabad', 'Gujarat', '123456', 'example@example.com', '111', 'AAHFL6949E', '24AAHFL6949E1Z6', 'Rajul Bhatt'),
(30, 'S B I life Insurance company Limited', '1st Floor Akshar Arcade Opp Memnagar Fire Stataion', 'Memnagar ', 'Ahmedabad', 'Gujarat', '123456', 'example@example.com', '111', 'AAFCS2530P', '24AAFCS2530P1Z7', 'Rajul Bhatt'),
(31, 'Bhaumik Naresh Thakar', '4th Floor, Himalaya complex', 'Vastrapur', 'Ahmedabad', 'Gujarat', '380015', 'example@example.com', '111', 'ADMPT8787A', '24ADMPT8787A1Z2', 'Shomit Mazumdar'),
(32, 'Himalaya Elanza P Ltd', 'Himalaya Arcade', 'Vastrapur', 'Ahmedabad', 'Gujarat', '380015', 'example@example.com', '111', 'AADCK3580B', '24AADCK3580B1ZY', 'Shomit Mazumdar'),
(33, 'Penguin Buildcon LLP', '409, Shrirang Heights', 'Bhaiji Pura, Kudasan', 'Gandhunagar', 'Gujarat', '123456', 'example@example.com', '111', 'AAVFP5321L', '24AAVFP5321L1ZT', 'Rajul Bhatt'),
(34, 'Shivhari Infrastructure', '702, Sharanya Bellevue Opp Hariarashray Bunglow Nr', 'Thaltej Shilaj Road Thaltej', 'Ahmedabad', 'Gujarat', '380059', 'example@example.com', '111', 'ADQFS1356N', '24ADQFS1356N1Z1', 'Rajul Bhatt'),
(35, 'Zipbooks Software Solutions P Limited', '410, Pinnacle Business Park, Corporate Road,', 'Prahladnagar', 'Ahmedabad', 'Gujarat', '380015', 'example@example.com', '111', 'AAACZ86261', '24AAACZ8626L1ZW', 'Shomit Mazumdar'),
(36, 'HARIDEV DEVELOPERS', '3rd Floor, Shop no 304, Radhe Square, Nr Reliance ', 'Dholakuva', 'GANDHINAGAR', 'GUJARAT', '382421', 'example@example.com', '111', 'AALFH8273M', '24AALFH8273M1ZS', 'Wasim Chippa'),
(37, 'HIMALAYA DEVELOPERS', 'IB Law Chambers, Behind City Gold Cinema', 'Ashram Road', 'Ahmedabad', 'Gujarat', '380009', 'example@example.com', '111', 'AAJFH6765N', '24AAJFH6765N1ZR', ''),
(38, 'SHIV INFRASTRUCTRE', '7,Atishay belle ville, Opp. Kiran Motors,', 'Motera, Sabarmati', 'Ahmedabad', 'Gujarat', '380005', 'example@example.com', '111', 'ADRFS0036Q', '24ADRFS0036Q1ZK', ''),
(39, 'RIDDHI DEVELOPERS', 'RAYSAN', 'GANDHINAGAR', 'AHMEDABAD', 'GUJARAT', '382421', 'example@example.com', '111', 'AAWFR7786A1ZO', '24AAWFR7786A1ZO', ''),
(40, 'SHREEJI INFRASTRUCTURE', '415, Palladium Business Hub, Opp 4D Sqaure Mall, M', 'Sabarmati', 'Ahmedabad', 'Gujarat', '382421', 'example@example.com', '111', 'ADUFS1220M1Z', ' 24ADUFS1220M1ZT', ''),
(41, 'Goyal & Co. (Const) Private Limited', '10th Floor, Commerce House 4,', 'Beside, Shell Petrol Pump, Prahladnagar,', 'Ahmedabad', 'Gujarat', '380051', 'example@example.com', '111', 'AABCG5459R', '24AABCG5459R2Z0', ''),
(42, 'Active Adworkshop Private Limited', '806-807, Sakar 1, Opp Nehru Bridge,', 'Nr. Gandhi Gram Rly Station, Ashram Road,', 'Ahmedabad', 'Gujarat', '380009', 'example@example.com', '111', 'AAJCA0514H', '24AAJCA0514H1Z6', ''),
(43, 'SHARANAM SOLITAIRE LLP', 'SF 42, TAPOVAN SOCIETY, NR MANEKBAUG HALL', 'AMBAVADI', 'AHMEDABAD', 'GUJARAT', '380015', 'example@example.com', '111', 'ADRFS1822J1ZU', '24ADRFS1822J1ZU', ''),
(44, 'HAJIPAR PRATHMIK SHALA', ' ', ' ', 'Ahmedabad', 'Gujarat', '380000', 'example@example.com', '111', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `id` int(10) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT '12345678',
  `phone` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`id`, `image`, `name`, `street`, `area`, `city`, `state`, `dob`, `pincode`, `email`, `password`, `phone`) VALUES
(1, NULL, 'Sayn', 'XYZ', 'Sardarnagar', 'Ahmedabad', 'Gujarat', NULL, 0, 'sayn@active.com', '12345678', 0);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(10) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `in_no` varchar(100) DEFAULT NULL,
  `dt` varchar(25) DEFAULT NULL,
  `pur` varchar(1000) DEFAULT NULL,
  `mode_p` varchar(25) DEFAULT NULL,
  `amt` varchar(25) DEFAULT NULL,
  `des` varchar(2500) DEFAULT NULL,
  `emp` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `type`, `in_no`, `dt`, `pur`, `mode_p`, `amt`, `des`, `emp`) VALUES
(1, 'Office Expenses', '', '2019/06/09', 'Pen', 'Cash', '100', 'pen for office', 'Juber Master');

-- --------------------------------------------------------

--
-- Table structure for table `hcombo`
--

CREATE TABLE `hcombo` (
  `id` int(10) NOT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `ro_no` varchar(30) DEFAULT NULL,
  `ro_dt` varchar(50) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `sup_in` varchar(30) DEFAULT NULL,
  `sup_dt` varchar(50) DEFAULT NULL,
  `p_amt` varchar(1000) DEFAULT NULL,
  `p_gst` varchar(1000) DEFAULT NULL,
  `p_total` varchar(1000) DEFAULT NULL,
  `sale_in` varchar(30) DEFAULT NULL,
  `sale_dt` varchar(50) DEFAULT NULL,
  `sale_amt` varchar(1000) DEFAULT NULL,
  `sale_gst` varchar(1000) DEFAULT NULL,
  `sale_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `gst` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hcombo`
--

INSERT INTO `hcombo` (`id`, `emp_name`, `ro_no`, `ro_dt`, `sup`, `sup_in`, `sup_dt`, `p_amt`, `p_gst`, `p_total`, `sale_in`, `sale_dt`, `sale_amt`, `sale_gst`, `sale_total`, `profit`, `gst`) VALUES
(1, 'Wasim Chippa', '118', '2019/07/01', 'Chitra (B) publicity', 'CB/0699/19-20', '2019/07/03', '139999.88', '', '165199.8584', '10', '2019/07/23', '1', '2', '1', '1', '3'),
(2, 'Wasim Chippa', '119', '2019/07/01', 'Sai Publicity', '0098/19-20', '2019/07/08', '30499.97', '', '35989.9646', '7', '2019/07/23', '3', '6', '4', '4', '8'),
(6, 'Wasim Chippa', '127', '2019/07/01', 'VIPUL PUBLICITY', '131', '2019/07/16', '30999.9', '', '36579.882', '13', '2019/07/25', '3', '5', '3', '0', '9'),
(14, 'Wasim Chippa', '141', '2019/07/01', 'KRISH COMMUNICATION', 'KC/82/19-20', '2019/07/09', '200000.1', '', '236000.118', '19', '2019/07/29', '2', '4', '2', '4', '8'),
(12, 'Wasim Chippa', '139', '2019/07/25', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Wasim Chippa', '140', '2019/07/01', 'Chitra (B) publicity', 'CB/0769/19-20', '2019/07/11', '69999.86', '', '82599.8348,0', '22', '2019/07/29', '3', '7', '4', '-', '-'),
(15, 'Wasim Chippa', '142', '2019/07/01', 'TDI International India Private Limited', 'GUJ/125/19-20', '2019/07/01', '270000.08', '', '318600.0944', '20', '2019/07/29', '3', '5', '3', '-', '-'),
(16, 'Wasim Chippa', '143', '2019/07/01', 'Ahmedabad Ring Road Infrastructure Ltd', 'GUJ/125/19-20', '2019/07/01', '270000.08', '', '318600.0944', '21', '2019/07/29', '3', '5', '3', '4', '8'),
(17, 'Wasim Chippa', '144', '2019/06/01', 'The Sandesh Ltd. (Spotlight Division)', '44100398', '2019/07/25', '80000.1', '', '94400.118', '23', '2019/07/31', '8', '1', '1', '6', '1'),
(18, 'Wasim Chippa', '145', '2019/07/01', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Wasim Chippa', '146', '2019/07/29', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Wasim Chippa', '147', '2019/07/29', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Wasim Chippa', '148', '2019/07/29', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Wasim Chippa', '149', '2019/07/29', 'The Sandesh Ltd. (Spotlight Division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Wasim Chippa', '161', '2019/08/01', 'TDI International India Private Limited', 'GST/158/19-20', '2019/08/01', '189000', '', '223020', '29', '2019/08/02', '2', '3', '2', '2', '4'),
(26, 'Wasim Chippa', '163', '2019/07/01', 'Media Buzz', '85', '2019/07/02', '101999.92', '', '120359.9056,0', '30', '2019/08/02', '1', '1', '1', '3', '5'),
(29, 'Wasim Chippa', '166', '2019/08/02', 'Advice Media', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Wasim Chippa', '165', '2019/08/02', 'Advice Media', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Wasim Chippa', '177', '2019/08/01', 'VIPUL PUBLICITY', '155', '2019/08/05', '24999.9', '', '29499.882', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Wasim Chippa', '178', '2019/08/01', 'VIPUL PUBLICITY', '123', '2019/08/04', '0', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Wasim Chippa', '179', '2019/08/01', 'VIPUL PUBLICITY', '155', '2019/08/05', '21999.9', '', '25959.882', '41', '2019/09/02', '2', '4', '2', '3', '5');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(10) NOT NULL,
  `dt` varchar(25) DEFAULT NULL,
  `pur` varchar(1000) DEFAULT NULL,
  `mode_p` varchar(25) DEFAULT NULL,
  `amt` varchar(25) DEFAULT NULL,
  `des` varchar(2500) DEFAULT NULL,
  `emp` varchar(100) DEFAULT NULL,
  `in_no` int(10) DEFAULT NULL,
  `sale_id` int(10) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `ron` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `dt`, `pur`, `mode_p`, `amt`, `des`, `emp`, `in_no`, `sale_id`, `type`, `ron`) VALUES
(1, '2019/06/09', 'Tax Invoice No - T/01', '45562', '800', 'Client: Riti Infra LLP,  Release Order No: R/0101', 'Juber Master', 1, 1, 'newspaper', '101'),
(2, '2019/07/05', 'Tax Invoice No - T/02', '741852', '78880', 'Client: Anayata Tradecom LLP,  Release Order No: R/0103', 'Juber Master', 2, 2, 'newspaper', '103'),
(3, '2019/07/01', 'Tax Invoice No - T/03', NULL, '5718.75', 'Client: Himalaya Buildcon P Ltd,  Release Order No: R/099,100', 'Rajul Bhatt', 3, 3, 'newspaper', '99,100'),
(4, '2019/07/09', 'Tax Invoice No - T/04', NULL, '0', 'Client: Riti Infra LLP,  Release Order No: R/0108', 'Wasim Chippa', 4, 4, 'newspaper', '108'),
(5, '2019/07/12', 'Tax Invoice No - T/05', NULL, '36750', 'Client: Riti Infra LLP,  Release Order No: R/0114', 'Wasim Chippa', 5, 5, 'newspaper', '114'),
(6, '2019/07/23', 'Tax Invoice No - T/06', NULL, '840', 'Client: Zipbooks Software Solutions P Limited,  Release Order No: R/0117', 'Wasim Chippa', 6, 6, 'newspaper', '117'),
(7, '2019/07/23', 'Tax Invoice No - T/07', NULL, '4499.96', 'Client: BETAIN CAREER INSTITUTE PVT LTD.,  Release Order No: R/0119', 'Wasim Chippa', 7, 1, 'hoarding', '119'),
(8, '2019/07/23', 'Tax Invoice No - T/08', NULL, '3148197.622', 'Client: Safal Goyal Reality LLP,  Release Order No: R/0120', 'Wasim Chippa', 8, 2, 'hoarding', '120'),
(9, '2019/07/23', 'Tax Invoice No - T/09', NULL, '525', 'Client: Happiness Clinic,  Release Order No: R/0121', 'Wasim Chippa', 9, 7, 'newspaper', '121'),
(10, '2019/07/23', 'Tax Invoice No - T/010', NULL, '17288.62', 'Client: Shivhari Infrastructure,  Release Order No: R/0118', 'Wasim Chippa', 10, 3, 'hoarding', '118'),
(11, '2019/07/25', 'Tax Invoice No - T/011', NULL, '300', 'Client: Happiness Clinic,  Release Order No: R/0126', 'Wasim Chippa', 11, 8, 'newspaper', '126'),
(12, '2019/07/25', 'Tax Invoice No - T/012', NULL, '2795', 'Client: Penguin Buildcon LLP,  Release Order No: R/0125', 'Wasim Chippa', 12, 9, 'newspaper', '125'),
(13, '2019/07/25', 'Tax Invoice No - T/013', NULL, '0', 'Client: HARIDEV DEVELOPERS,  Release Order No: R/0127', 'Wasim Chippa', 13, 4, 'hoarding', '127'),
(14, '2019/07/25', 'Tax Invoice No - T/014', NULL, '5976', 'Client: SHIV INFRASTRUCTRE,  Release Order No: R/0132', 'Wasim Chippa', 14, 10, 'newspaper', '132'),
(15, '2019/07/25', 'Tax Invoice No - T/015', NULL, '3320', 'Client: SHREEJI INFRASTRUCTURE,  Release Order No: R/0131', 'Wasim Chippa', 15, 11, 'newspaper', '131'),
(16, '2019/07/25', 'Tax Invoice No - T/016', NULL, '5680', 'Client: HARIDEV DEVELOPERS,  Release Order No: R/0130', 'Wasim Chippa', 16, 12, 'newspaper', '130'),
(17, '2019/07/25', 'Tax Invoice No - T/017', NULL, '22.5', 'Client: RIDDHI DEVELOPERS,  Release Order No: R/0129', 'Wasim Chippa', 17, 13, 'newspaper', '129'),
(18, '2019/07/25', 'Tax Invoice No - T/018', NULL, '1170', 'Client: Shivhari Infrastructure,  Release Order No: R/0128', 'Wasim Chippa', 18, 14, 'newspaper', '128'),
(19, '2019/07/29', 'Tax Invoice No - T/019', NULL, '46749.795', 'Client: Goyal & Co. (Const) Private Limited,  Release Order No: R/0141', 'Wasim Chippa', 19, 5, 'hoarding', '141'),
(20, '2019/07/29', 'Tax Invoice No - T/020', NULL, '-238500.143', 'Client: Goyal & Co. (Const) Private Limited,  Release Order No: R/0142', 'Wasim Chippa', 20, 6, 'hoarding', '142'),
(21, '2019/07/29', 'Tax Invoice No - T/021', NULL, '44999.941', 'Client: Goyal & Co. (Const) Private Limited,  Release Order No: R/0143', 'Wasim Chippa', 21, 7, 'hoarding', '143'),
(22, '2019/07/29', 'Tax Invoice No - T/022', NULL, '8000.48', 'Client: BETAIN CAREER INSTITUTE PVT LTD.,  Release Order No: R/0140', 'Wasim Chippa', 22, 8, 'hoarding', '140'),
(23, '2019/07/31', 'Tax Invoice No - T/023', NULL, '6999.9', 'Client: Goyal & Co. (Const) Private Limited,  Release Order No: R/0144', 'Wasim Chippa', 23, 9, 'hoarding', '144'),
(24, '2019/08/01', 'Tax Invoice No - T/024', NULL, '22137.5', 'Client: HIMALAYA DEVELOPERS,  Release Order No: R/0150', 'Wasim Chippa', 24, 15, 'newspaper', '150'),
(25, '2019/08/01', 'Tax Invoice No - T/025', NULL, '12737.5', 'Client: HIMALAYA DEVELOPERS,  Release Order No: R/0154', 'Wasim Chippa', 25, 16, 'newspaper', '154'),
(26, '2019/08/01', 'Tax Invoice No - T/026', NULL, '10972.5', 'Client: Psy Enterprise,  Release Order No: R/0115', 'Wasim Chippa', 26, 17, 'newspaper', '115'),
(27, '2019/08/01', 'Tax Invoice No - T/027', NULL, '10672.2', 'Client: Penguin Buildcon LLP,  Release Order No: R/0157', 'Wasim Chippa', 27, 18, 'newspaper', '157'),
(28, '2019/08/01', 'Tax Invoice No - T/028', NULL, '708.4', 'Client: Happiness Clinic,  Release Order No: R/0158', 'Wasim Chippa', 28, 19, 'newspaper', '158'),
(29, '2019/08/02', 'Tax Invoice No - T/029', NULL, '24387.111', 'Client: Goyal & Co. (Const) Private Limited,  Release Order No: R/0161', 'Wasim Chippa', 29, 10, 'hoarding', '161'),
(30, '2019/08/02', 'Tax Invoice No - T/030', NULL, '3059.9976', 'Client: Safal Goyal Reality LLP,  Release Order No: R/0163', 'Wasim Chippa', 30, 11, 'hoarding', '163'),
(31, '2019/08/05', 'Tax Invoice No - T/031', NULL, '2268', 'Client: Anayata Tradecom LLP,  Release Order No: R/0110', 'Wasim Chippa', 31, 20, 'newspaper', '110'),
(32, '2019/08/05', 'Tax Invoice No - T/032', NULL, '29718.75', 'Client: Riti Infra LLP,  Release Order No: R/0159', 'Wasim Chippa', 32, 21, 'newspaper', '159'),
(33, '2019/08/13', 'Tax Invoice No - T/033', NULL, '1320.84', 'Client: Dangee Dums,  Release Order No: R/0171', 'Wasim Chippa', 33, 22, 'newspaper', '171'),
(34, '2019/08/13', 'Tax Invoice No - T/034', NULL, '1320.84', 'Client: Dangee Dums,  Release Order No: R/0172', 'Wasim Chippa', 34, 23, 'newspaper', '172'),
(35, '2019/08/13', 'Tax Invoice No - T/035', NULL, '2268', 'Client: Anayata Tradecom LLP,  Release Order No: R/0111', 'Wasim Chippa', 35, 24, 'newspaper', '111'),
(36, '2019/08/14', 'Tax Invoice No - T/036', NULL, '3449.2', 'Client: HIMALAYA DEVELOPERS,  Release Order No: R/0170', 'Wasim Chippa', 36, 25, 'newspaper', '170'),
(37, '2019/08/16', 'Tax Invoice No - T/037', NULL, '660.42', 'Client: Dangee Dums,  Release Order No: R/0173', 'Wasim Chippa', 37, 26, 'newspaper', '173'),
(38, '2019/08/16', 'Tax Invoice No - T/038', NULL, '660.42', 'Client: Dangee Dums,  Release Order No: R/0174', 'Wasim Chippa', 38, 27, 'newspaper', '174'),
(39, '2019/08/16', 'Tax Invoice No - T/039', NULL, '1170', 'Client: SHREEJI INFRASTRUCTURE,  Release Order No: R/0176', 'Wasim Chippa', 39, 28, 'newspaper', '176'),
(40, '2019/08/17', 'Tax Invoice No - T/040', NULL, '432', 'Client: SHARANAM SOLITAIRE LLP,  Release Order No: R/0175', 'Wasim Chippa', 40, 29, 'newspaper', '175'),
(41, '2019/09/02', 'Tax Invoice No - T/041', NULL, '3000', 'Client: HARIDEV DEVELOPERS,  Release Order No: R/0179', 'Wasim Chippa', 41, 12, 'hoarding', '179'),
(42, '2019/09/26', 'Tax Invoice No - T/042', NULL, '2015', 'Client: Penguin Buildcon LLP,  Release Order No: R/0156', 'Wasim Chippa', 42, 30, 'newspaper', '156'),
(43, '2019/09/26', 'Tax Invoice No - T/043', NULL, '247.5', 'Client: Happiness Clinic,  Release Order No: R/0155', 'Wasim Chippa', 43, 31, 'newspaper', '155'),
(44, '2019/09/26', 'Tax Invoice No - T/044', NULL, '25', 'Client: HAJIPAR PRATHMIK SHALA,  Release Order No: R/0180', 'Wasim Chippa', 44, 32, 'newspaper', '180'),
(45, '2019/09/27', 'Tax Invoice No - T/045', NULL, '5652.5', 'Client: Psy Enterprise,  Release Order No: R/0181', 'Wasim Chippa', 45, 33, 'newspaper', '181');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `type_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `type`, `type_id`) VALUES
(1, 'newspaper', 1),
(2, 'newspaper', 2),
(3, 'newspaper', 3),
(4, 'newspaper', 4),
(5, 'newspaper', 5),
(6, 'newspaper', 6),
(7, 'hoarding', 1),
(8, 'hoarding', 2),
(9, 'newspaper', 7),
(10, 'hoarding', 3),
(11, 'newspaper', 8),
(12, 'newspaper', 9),
(13, 'hoarding', 4),
(14, 'newspaper', 10),
(15, 'newspaper', 11),
(16, 'newspaper', 12),
(17, 'newspaper', 13),
(18, 'newspaper', 14),
(19, 'hoarding', 5),
(20, 'hoarding', 6),
(21, 'hoarding', 7),
(22, 'hoarding', 8),
(23, 'hoarding', 9),
(24, 'newspaper', 15),
(25, 'newspaper', 16),
(26, 'newspaper', 17),
(27, 'newspaper', 18),
(28, 'newspaper', 19),
(29, 'hoarding', 10),
(30, 'hoarding', 11),
(31, 'newspaper', 20),
(32, 'newspaper', 21),
(33, 'newspaper', 22),
(34, 'newspaper', 23),
(35, 'newspaper', 24),
(36, 'newspaper', 25),
(37, 'newspaper', 26),
(38, 'newspaper', 27),
(39, 'newspaper', 28),
(40, 'newspaper', 29),
(41, 'hoarding', 12),
(42, 'newspaper', 30),
(43, 'newspaper', 31),
(44, 'newspaper', 32),
(45, 'newspaper', 33);

-- --------------------------------------------------------

--
-- Table structure for table `ncombo`
--

CREATE TABLE `ncombo` (
  `id` int(10) NOT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `ro_no` varchar(30) DEFAULT NULL,
  `ro_dt` varchar(50) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `sup_in` varchar(30) DEFAULT NULL,
  `sup_dt` varchar(50) DEFAULT NULL,
  `p_amt` varchar(1000) DEFAULT NULL,
  `p_gst` varchar(1000) DEFAULT NULL,
  `p_total` varchar(1000) DEFAULT NULL,
  `sale_in` varchar(30) DEFAULT NULL,
  `sale_dt` varchar(50) DEFAULT NULL,
  `sale_amt` varchar(1000) DEFAULT NULL,
  `sale_gst` varchar(1000) DEFAULT NULL,
  `sale_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `gst` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ncombo`
--

INSERT INTO `ncombo` (`id`, `emp_name`, `ro_no`, `ro_dt`, `sup`, `sup_in`, `sup_dt`, `p_amt`, `p_gst`, `p_total`, `sale_in`, `sale_dt`, `sale_amt`, `sale_gst`, `sale_total`, `profit`, `gst`) VALUES
(1, 'Juber Master', '93', '2019/03/06', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Rajul Bhatt', '94', '2019/03/07', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Rajul Bhatt', '95', '2019/03/11', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Rajul Bhatt', '96', '2019/03/11', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Rajul Bhatt', '97', '2019/03/11', 'Eagle Advertiser', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Shomit Mazumdar', '98', '2019/03/23', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Rajul Bhatt', '99', '2019/03/28', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '3', '2019/07/01', '6', '3', '6', '2', '1'),
(8, 'Rajul Bhatt', '100', '2019/03/28', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '3', '2019/07/01', '1', '9', '2', '3', '1'),
(9, 'Juber Master', '101', '2019/06/09', 'Ahmedabad Ring Road Infrastructure Ltd', '12', '2019/06/25', '20000', '', '21000', '1', '2019/06/09', '2', '1', '2', '8', '4'),
(24, 'Wasim Chippa', '117', '2019/07/01', 'Publicity Parlour', 'GST/19-20/695', '2019/07/05', '29400,0', '', '30870,0', '6', '2019/07/23', '3', '1', '3', '8', '4'),
(11, 'Juber Master', '103', '2019/07/01', 'Publicity Parlour', '145623', '2019/07/02', '489600', '', '514080', '2', '2019/07/05', '5', '2', '5', '7', '3'),
(12, 'Juber Master', '104', '2019/07/01', 'Ahmedabad Ring Road Infrastructure Ltd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Wasim Chippa', '108', '2019/07/02', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '4', '2019/07/09', '1', '9', '2', '0', '0'),
(17, 'Wasim Chippa', '110', '2019/07/11', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '31', '2019/08/05', '5', '2', '6', '2', '1'),
(18, 'Wasim Chippa', '111', '2019/07/11', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '35', '2019/08/13', '5', '2', '6', '2', '1'),
(22, 'Wasim Chippa', '115', '2019/07/12', 'Publicity Parlour', 'GST/359', '2019/07/14', '46027.5', '', '48328.875', '26', '2019/08/01', '5', '2', '5', '1', '5'),
(21, 'Wasim Chippa', '114', '2019/07/02', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '5', '2019/07/12', '2', '1', '2', '3', '1'),
(25, 'Wasim Chippa', '121', '2019/07/01', 'Publicity Parlour', 'GST/19-20/763', '2019/07/17', '2975', '', '3123.75', '9', '2019/07/23', '3', '1', '3', '5', '2'),
(35, 'Wasim Chippa', '150', '2019/07/23', 'R V Vyas Associates', 'GST/389', '2019/07/29', '92862.5', '', '97505.625', '24', '2019/08/01', '1', '5', '1', '2', '1'),
(27, 'Wasim Chippa', '125', '2019/07/01', 'Publicity Parlour', 'GST/19-20/704', '2019/07/08', '15925,0', '', '16721.25,0', '12', '2019/07/25', '1', '9', '1', '2', '1'),
(28, 'Wasim Chippa', '126', '2019/07/01', 'R V Vyas Associates', 'GST/349', '2019/07/08', '1275', '', '1338.75', '11', '2019/07/25', '1', '7', '1', '3', '1'),
(29, 'Wasim Chippa', '128', '2019/07/01', 'Publicity Parlour', 'GST/19-20/692', '2019/07/04', '33150', '', '34807.5', '18', '2019/07/25', '3', '1', '3', '1', '5'),
(30, 'Wasim Chippa', '129', '2019/07/01', 'Publicity Parlour', 'GST/19-20/749', '2019/07/15', '637.5', '', '669.375', '17', '2019/07/25', '6', '3', '6', '2', '1'),
(31, 'Wasim Chippa', '130', '2019/07/01', 'R V Vyas Associates', 'GST/339', '2019/07/04', '46000', '', '48300', '16', '2019/07/25', '5', '2', '5', '5', '2'),
(32, 'Wasim Chippa', '131', '2019/07/01', 'R V Vyas Associates', 'GST/341', '2019/07/04', '26600', '', '27930', '15', '2019/07/25', '2', '1', '3', '3', '1'),
(33, 'Wasim Chippa', '132', '2019/07/01', 'R V Vyas Associates', 'GST/340', '2019/07/04', '47880', '', '50274', '14', '2019/07/25', '5', '2', '5', '5', '2'),
(47, 'Wasim Chippa', '169', '2019/08/07', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Wasim Chippa', '159', '2019/08/02', 'R V Vyas Associates', NULL, NULL, NULL, NULL, NULL, '32', '2019/08/05', '2', '1', '2', '2', '1'),
(38, 'Wasim Chippa', '153', '2019/07/29', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Wasim Chippa', '154', '2019/07/23', 'R V Vyas Associates', 'GST/389', '2019/07/29', '92862.5', '', '97505.625', '25', '2019/08/01', '1', '5', '1', '1', '6'),
(40, 'Wasim Chippa', '155', '2019/07/21', 'Publicity Parlour', 'GST/19-20/793', '2019/07/22', '1402.5', '', '1472.625', '43', '2019/09/26', '1', '8', '1', '2', '1'),
(41, 'Wasim Chippa', '156', '2019/07/19', 'Publicity Parlour', 'GST/19-20/785', '2019/07/22', '12285', '', '12899.25', '42', '2019/09/26', '1', '7', '1', '2', '1'),
(42, 'Wasim Chippa', '157', '2019/07/26', 'R V Vyas Associates', 'GST/388', '2019/07/29', '44767.8', '', '47006.19', '27', '2019/08/01', '5', '2', '5', '1', '5'),
(43, 'Wasim Chippa', '158', '2019/07/19', 'R V Vyas Associates', 'GST/373', '2019/07/24', '2971.6', '', '3120.18', '28', '2019/08/01', '3', '1', '3', '7', '3'),
(48, 'Wasim Chippa', '170', '2019/08/10', 'GUJARAT TODAY', NULL, NULL, NULL, NULL, NULL, '36', '2019/08/14', '1', '9', '1', '3', '1'),
(49, 'Wasim Chippa', '171', '2019/07/24', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '33', '2019/08/13', '4', '2', '4', '1', '6'),
(50, 'Wasim Chippa', '172', '2019/07/24', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '34', '2019/08/13', '4', '2', '4', '1', '6'),
(51, 'Wasim Chippa', '173', '2019/07/24', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '37', '2019/08/16', '2', '1', '2', '6', '3'),
(52, 'Wasim Chippa', '174', '2019/07/24', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '38', '2019/08/16', '2', '1', '2', '6', '3'),
(53, 'Wasim Chippa', '175', '2019/08/16', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '40', '2019/08/17', '1', '6', '1', '4', '2'),
(54, 'Wasim Chippa', '176', '2019/07/01', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '39', '2019/08/16', '3', '1', '3', '1', '5'),
(55, 'Wasim Chippa', '180', '2019/07/12', 'R V Vyas Associates', 'GST/369', '2019/07/04', '1130', '', '1186.5', '44', '2019/09/26', '1', '5', '1', '2', '1'),
(56, 'Wasim Chippa', '181', '2019/07/12', 'Publicity Parlour', NULL, NULL, NULL, NULL, NULL, '45', '2019/09/27', '5', '2', '5', '5', '2');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(15) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `tag` varchar(100) DEFAULT NULL,
  `url` varchar(1000) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `des` varchar(2500) DEFAULT NULL,
  `emp_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `type`, `emp_name`) VALUES
(1, 'MY FM 94.3', 'Radio Station', 'Rajul Bhatt'),
(2, 'Gujarat Samachar', 'Newspaper', 'Rajul Bhatt'),
(3, 'Sandesh ', 'Newspaper', 'Rajul Bhatt'),
(4, 'Divya Bhaskar', 'Newspaper', 'Rajul Bhatt'),
(5, 'Times of India', 'Newspaper', 'Rajul Bhatt'),
(6, 'Ahmedabad Mirror', 'Newspaper', 'Rajul Bhatt'),
(7, 'Navgujarat Samay', 'Newspaper', 'Rajul Bhatt'),
(8, 'Ahmedabad Times', 'Newspaper', 'Upasna Miterani'),
(9, 'city bhaskar', 'Newspaper', 'Upasna Miterani'),
(10, 'RED FM', 'Radio Station', 'Upasna Miterani'),
(11, 'Radio City', 'Radio Station', 'Upasna Miterani'),
(12, 'Mumbai Samachar', 'Newspaper', 'Shomit Mazumdar'),
(13, 'Gujarat Today', 'Newspaper', 'Shomit Mazumdar'),
(14, 'Eagle News', 'Newspaper', 'Rajul Bhatt'),
(15, 'Times of India + Ahmedabad Mirror', 'Newspaper', 'Shomit Mazumdar'),
(16, 'Times Property', 'Newspaper', 'Wasim Chippa');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `type_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `type`, `type_id`) VALUES
(1, 'newspaper', 101),
(2, 'newspaper', 103),
(3, 'newspaper', 117),
(4, 'hoarding', 119),
(5, 'hoarding', 120),
(6, 'newspaper', 121),
(7, 'hoarding', 118),
(8, 'newspaper', 126),
(9, 'newspaper', 125),
(10, 'hoarding', 127),
(11, 'newspaper', 132),
(12, 'newspaper', 131),
(13, 'newspaper', 130),
(14, 'newspaper', 129),
(15, 'newspaper', 128),
(16, 'hoarding', 141),
(17, 'hoarding', 142),
(18, 'hoarding', 143),
(19, 'hoarding', 140),
(20, 'hoarding', 144),
(21, 'newspaper', 150),
(22, 'newspaper', 154),
(23, 'newspaper', 155),
(24, 'newspaper', 115),
(25, 'newspaper', 157),
(26, 'newspaper', 158),
(27, 'hoarding', 160),
(28, 'hoarding', 161),
(29, 'hoarding', 163),
(30, 'hoarding', 177),
(31, 'hoarding', 178),
(32, 'hoarding', 179),
(33, 'newspaper', 156),
(34, 'newspaper', 180);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_hoarding`
--

CREATE TABLE `purchase_hoarding` (
  `id` int(10) NOT NULL,
  `p_no` int(10) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `sup_in` varchar(30) DEFAULT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `hoarding` varchar(50) DEFAULT NULL,
  `hsn` int(10) DEFAULT NULL,
  `client` varchar(50) DEFAULT NULL,
  `loc` varchar(1000) DEFAULT NULL,
  `size` varchar(1000) DEFAULT NULL,
  `sd` varchar(1000) DEFAULT NULL,
  `ed` varchar(1000) DEFAULT NULL,
  `quan` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `prate` varchar(1000) DEFAULT NULL,
  `mrate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT '0',
  `amt` varchar(1000) DEFAULT NULL,
  `pamt` varchar(1000) DEFAULT NULL,
  `mamt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `ro_no` varchar(10) DEFAULT NULL,
  `s_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `pay` int(5) NOT NULL DEFAULT 0,
  `cheque` varchar(15) NOT NULL DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_hoarding`
--

INSERT INTO `purchase_hoarding` (`id`, `p_no`, `sup`, `sup_in`, `dt`, `hoarding`, `hsn`, `client`, `loc`, `size`, `sd`, `ed`, `quan`, `rate`, `prate`, `mrate`, `dis`, `amt`, `pamt`, `mamt`, `sgst`, `cgst`, `gtotal`, `ro_no`, `s_total`, `profit`, `emp_name`, `pay`, `cheque`) VALUES
(1, 4, 'Sai Publicity', '0098/19-20', '2019/07/08', NULL, 998361, 'BETAIN CAREER INSTITUTE PVT LTD.', 'Gandhinagar Sargasan Cross Road', '20x10', '2019/07/01', '2019/31/07', '31', '983.87', '0', '0', '0', '30499.97', '0', '0', '2744.9973', '2744.9973', '35989.9646', '119', '3', '4', 'Wasim Chippa', 0, '-'),
(2, 5, 'Media Buzz', '085', '2019/07/09', NULL, 998361, 'Safal Goyal Reality LLP', '200 Ft. Ring Rd Lower Nr Kakeka Dhaba FL12~200 Ft. Ring Rd Upper Nr Kakeka Dhaba FL13', '30x15,30x15', '2019/07/01,2019/07/01', '2019/07/31,2019/07', '31,31', '2419.35,0', '0,0', '0,0', '0,0', '74999.85,0', '0,0', '0,0', '6749.9865,0', '6749.9865,0', '88499.823,0', '120', '3', '3', 'Wasim Chippa', 0, '-'),
(3, 7, 'Chitra (B) publicity', 'CB/0699/19-20', '2019/07/03', NULL, 998361, 'Shivhari Infrastructure', 'Gandhinagar - GH-01 Road', '20x10', '2019/01/04', '2019/31/07', '122', '1147.54', '0', '0', '0', '139999.88', '0', '0', '12599.9892', '12599.9892', '165199.8584', '118', '1', '1', 'Wasim Chippa', 0, '-'),
(4, 10, 'VIPUL PUBLICITY', '131', '2019/07/16', NULL, 998361, 'HARIDEV DEVELOPERS', 'Sarghasan Highway Circle', '30x25', '2019/07/04', '2019/08/03', '30', '833.33', '8', '0', '0', '24999.9', '6000', '0', '2789.991', '2789.991', '36579.882', '127', '3', '0', 'Wasim Chippa', 0, '-'),
(5, 16, 'KRISH COMMUNICATION', 'KC/82/19-20', '2019/07/09', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Pakwan Char Rasta', '40X20', '2019/06/01', '2019/06/30', '30', '6666.67', '0', '0', '0', '200000.1', '0', '0', '18000.009', '18000.009', '236000.118', '141', '2', '4', 'Wasim Chippa', 0, '-'),
(6, 17, 'TDI International India Private Limited', 'GUJ/125/19-20', '2019/07/01', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Ahmedabad Airport', '20X10', '2019/07/01', '2019/07/31', '31', '8709.68', '0', '0', '0', '270000.08', '0', '0', '24300.0072', '24300.0072', '318600.0944', '142', '3', '-', 'Wasim Chippa', 0, '-'),
(7, 18, 'Ahmedabad Ring Road Infrastructure Ltd', 'GUJ/125/19-20', '2019/07/01', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Ahmedabad Airport', '20X10', '2019/07/01', '2019/07/31', '31', '8709.68', '0', '0', '0', '270000.08', '0', '0', '24300.0072', '24300.0072', '318600.0944', '143', '3', '4', 'Wasim Chippa', 0, '-'),
(8, 19, 'Chitra (B) publicity', 'CB/0769/19-20', '2019/07/11', NULL, 998361, 'BETAIN CAREER INSTITUTE PVT LTD.', 'Gandhinagar GH 04 Circle~Gandhinagar GH 03 Circle', '20x10,20x10', '2019/07/01,2019/07/01', '2019/07/31,2019/07', '31,31', '2258.06,0', '0,0', '0,0', '0,0', '69999.86,0', '0,0', '0,0', '6299.9874,0', '6299.9874,0', '82599.8348,0', '140', '3', '-', 'Wasim Chippa', 0, '-'),
(9, 20, 'The Sandesh Ltd. (Spotlight Division)', '44100398', '2019/07/25', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Prahladnagar', '20x10', '2019/06/15', '2019/07/15', '30', '2666.67', '0', '0', '0', '80000.1', '0', '0', '7200.009', '7200.009', '94400.118', '144', '8', '6', 'Wasim Chippa', 0, '-'),
(10, 27, 'TDI International India Private Limited', 'GUJ/158/19-20', '2019/08/01', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Ahmedabad Airport', '20x10', '2019/08/01', '2019/08/21', '21', '12857.13', '0', '0', '0', '269999.73', '0', '0', '24299.9757', '24299.9757', '318599.6814', '160', '', '', 'Wasim Chippa', 0, '-'),
(11, 28, 'TDI International India Private Limited', 'GST/158/19-20', '2019/08/01', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Ahmedabad Airport', '20X10', '2019/08/01', '2019/08/21', '21', '9000', '0', '0', '0', '189000', '0', '0', '17010', '17010', '223020', '161', '2', '2', 'Wasim Chippa', 0, '-'),
(12, 29, 'Media Buzz', '85', '2019/07/02', NULL, 998361, 'Safal Goyal Reality LLP', '200 Ft Ring Rd, Lower, Nr Kake ka Dhaba~200 Ft Ring Rd, Upper, Nr Kake ka Dhaba', '30x15,30x15', '2019/07/01,2019/07/01', '2019/07/31,2019/07', '31,31', '3290.32,0', '0,0', '0,0', '0,0', '101999.92,0', '0,0', '0,0', '9179.9928,0', '9179.9928,0', '120359.9056,0', '163', '1', '3', 'Wasim Chippa', 0, '-'),
(13, 30, 'VIPUL PUBLICITY', '155', '2019/08/05', NULL, 998361, 'HARIDEV DEVELOPERS', 'Sarghasan Highway Circle', '30x25', '2019/08/04', '2019/09/03', '30', '833.33', '0', '0', '0', '24999.9', '0', '0', '2249.991', '2249.991', '29499.882', '177', '', '', 'Wasim Chippa', 0, '-'),
(14, 31, 'VIPUL PUBLICITY', '123', '2019/08/04', NULL, 998361, 'HARIDEV DEVELOPERS', 'Sarghasan Highway Circle', '30X25', '2019/08/04', '2019/09/03', '30', '733.33', '0', '0', '0', '', '', '', '', '', '', '178', '', '', 'Wasim Chippa', 0, '-'),
(15, 32, 'VIPUL PUBLICITY', '155', '2019/08/05', NULL, 998361, 'HARIDEV DEVELOPERS', 'Sarghasan Highway Circle', '30X25', '2019/08/04', '2019/09/03', '30', '733.33', '0', '0', '0', '21999.9', '0', '0', '1979.991', '1979.991', '25959.882', '179', '2', '3', 'Wasim Chippa', 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_newspaper`
--

CREATE TABLE `purchase_newspaper` (
  `id` int(10) NOT NULL,
  `p_no` int(10) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `sup_in` varchar(50) DEFAULT NULL,
  `news` varchar(1000) DEFAULT NULL,
  `hsn` int(10) DEFAULT NULL,
  `client` varchar(50) DEFAULT NULL,
  `edi` varchar(1000) DEFAULT NULL,
  `rdt` varchar(1000) DEFAULT NULL,
  `size` varchar(1000) DEFAULT NULL,
  `page` varchar(1000) DEFAULT NULL,
  `print` varchar(1000) DEFAULT NULL,
  `quan` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT '0',
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `ro_no` varchar(10) DEFAULT NULL,
  `s_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `pay` int(5) NOT NULL DEFAULT 0,
  `cheque` varchar(15) NOT NULL DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_newspaper`
--

INSERT INTO `purchase_newspaper` (`id`, `p_no`, `sup`, `dt`, `sup_in`, `news`, `hsn`, `client`, `edi`, `rdt`, `size`, `page`, `print`, `quan`, `rate`, `dis`, `amt`, `sgst`, `cgst`, `gtotal`, `ro_no`, `s_total`, `profit`, `emp_name`, `pay`, `cheque`) VALUES
(1, 1, 'Ahmedabad Ring Road Infrastructure Ltd', '2019/06/25', '12', 'Gujarat Samachar', 998363, 'Riti Infra LLP', 'Ahmedabad', '2019/06/12', '8 x 1 cms', 'First Page', 'Black & White', '8', '2500', '0', '20000', '500', '500', '21000', '101', '2', '8', 'Juber Master', 1, '001122'),
(2, 2, 'Publicity Parlour', '2019/07/02', '145623', 'Gujarat Samachar', 998363, 'Anayata Tradecom LLP', 'AHMEDABAD', '2019/07/02', '16x34 Cms', 'Front Page', 'Color', '544', '1000', '10', '489600', '12240', '12240', '514080', '103', '5', '7', 'Juber Master', 1, '152632'),
(3, 3, 'Publicity Parlour', '2019/07/05', 'GST/19-20/695', 'Times of India,Ahmedabad Mirror', 998363, 'Zipbooks Software Solutions P Limited', 'AHMEDABAD,AHMEDABAD', '2019/07/03,2019/07/05', '8Wx7H,8WX7H', 'Appointment Page,Appointment Page Color', 'Color,Color', '56,56', '600,0', '12.5,0', '29400,0', '735,0', '735,0', '30870,0', '117', '3', '8', 'Wasim Chippa', 0, '-'),
(4, 6, 'Publicity Parlour', '2019/07/17', 'GST/19-20/763', 'Gujarat Samachar', 998363, 'Happiness Clinic', 'AHMEDABAD', '2019/07/17', '5x1', 'Back Page', 'Color', '5', '700', '15', '2975', '74.375', '74.375', '3123.75', '121', '3', '5', 'Wasim Chippa', 0, '-'),
(5, 8, 'R V Vyas Associates', '2019/07/08', 'GST/349', 'Divya Bhaskar', 998363, 'Happiness Clinic', 'Charotar Anand - Bhaskar', '2019/07/08', '5x1', 'Front Page', 'Color', '5', '255', '0', '1275', '31.875', '31.875', '1338.75', '126', '1', '3', 'Wasim Chippa', 0, '-'),
(6, 9, 'Publicity Parlour', '2019/07/08', 'GST/19-20/704', 'Times of India,Times Property', 998363, 'Penguin Buildcon LLP', 'Ahmedabad,AHMEDABAD', '2019/07/04,2019/07/07', '13x10,13x10', 'Inside Page,Inside Page', 'Color,Color', '130,130', '140,0', '12.50,0', '15925,0', '398.125,0', '398.125,0', '16721.25,0', '125', '1', '2', 'Wasim Chippa', 0, '-'),
(7, 11, 'R V Vyas Associates', '2019/07/04', 'GST/340', 'Divya Bhaskar', 998363, 'SHIV INFRASTRUCTRE', 'Gandhinagar', '2019/07/04', '45x8', 'Front Page', 'Color', '360', '133', '0', '47880', '1197', '1197', '50274', '132', '5', '5', 'Wasim Chippa', 0, '-'),
(8, 12, 'R V Vyas Associates', '2019/07/04', 'GST/341', 'Divya Bhaskar', 998363, 'SHREEJI INFRASTRUCTURE', 'Gandhinagar', '2019/07/04', '25x8', 'Front Page', 'Color', '200', '133', '0', '26600', '665', '665', '27930', '131', '2', '3', 'Wasim Chippa', 0, '-'),
(9, 13, 'R V Vyas Associates', '2019/07/04', 'GST/339', 'Divya Bhaskar', 998363, 'HARIDEV DEVELOPERS', 'Gandhinagar', '2019/07/04', '50x8', 'Last Page', 'Color', '400', '115', '0', '46000', '1150', '1150', '48300', '130', '5', '5', 'Wasim Chippa', 0, '-'),
(10, 14, 'Publicity Parlour', '2019/07/15', 'GST/19-20/749', 'Gujarat Samachar', 998363, 'RIDDHI DEVELOPERS', 'Gandhinagar', '2019/07/14', '5x1', 'Back Page', 'Black & White', '5', '150', '15', '637.5', '15.9375', '15.9375', '669.375', '129', '6', '2', 'Wasim Chippa', 0, '-'),
(11, 15, 'Publicity Parlour', '2019/07/04', 'GST/19-20/692', 'Gujarat Samachar', 998363, 'Shivhari Infrastructure', 'Gandhinagar', '2019/04/07', '25x8', 'Front Page', 'Color', '200', '195', '15', '33150', '828.75', '828.75', '34807.5', '128', '3', '1', 'Wasim Chippa', 0, '-'),
(12, 21, 'R V Vyas Associates', '2019/07/29', 'GST/389', 'Divya Bhaskar', 998363, 'HIMALAYA DEVELOPERS', 'Saurashtra Samachar - Bhavnagar', '2019/07/28', '25x8 sqcm', 'Back Page', 'Color', '200', '575', '19.25', '92862.5', '2321.5625', '2321.5625', '97505.625', '150', '1', '2', 'Wasim Chippa', 0, '-'),
(13, 22, 'R V Vyas Associates', '2019/07/29', 'GST/389', 'Divya Bhaskar', 998363, 'HIMALAYA DEVELOPERS', 'Saurashtra Samachar - Bhavnagar', '2019/07/28', '25X8', 'Back Page', 'Color', '200', '575', '19.25', '92862.5', '2321.5625', '2321.5625', '97505.625', '154', '1', '1', 'Wasim Chippa', 0, '-'),
(14, 23, 'Publicity Parlour', '2019/07/22', 'GST/19-20/793', 'Gujarat Samachar', 998363, 'Happiness Clinic', 'Kheda - Anand', '2019/07/22', '5x1', 'Back Page', 'Color', '5', '330', '15', '1402.5', '35.0625', '35.0625', '1472.625', '155', '1', '2', 'Wasim Chippa', 0, '-'),
(15, 24, 'Publicity Parlour', '2019/07/14', 'GST/359', 'Divya Bhaskar', 998363, 'Psy Enterprise', 'Gandhinagar Edition', '2019/07/14', '50 X 32 cm', 'Back Page', 'Color', '400', '142.5', '19.25', '46027.5', '1150.6875', '1150.6875', '48328.875', '115', '5', '1', 'Wasim Chippa', 0, '-'),
(16, 25, 'R V Vyas Associates', '2019/07/29', 'GST/388', 'Divya Bhaskar', 998363, 'Penguin Buildcon LLP', 'Gandhinagar', '2019/07/28', '45X8', 'Front Page', 'Color', '360', '154', '19.25', '44767.8', '1119.195', '1119.195', '47006.19', '157', '5', '1', 'Wasim Chippa', 0, '-'),
(17, 26, 'R V Vyas Associates', '2019/07/24', 'GST/373', 'Divya Bhaskar', 998363, 'Happiness Clinic', 'Ahmedabad City Bhaskar', '2019/07/21', '5x1', 'Last Page', 'Color', '5', '736', '19.25', '2971.6', '74.29', '74.29', '3120.18', '158', '3', '7', 'Wasim Chippa', 0, '-'),
(18, 33, 'Publicity Parlour', '2019/07/22', 'GST/19-20/785', 'Times Property', 998363, 'Penguin Buildcon LLP', 'Ahmedabad', '2019/07/21', '12.98x10', 'Inside Page', 'Color', '130', '108', '12.5', '12285', '307.125', '307.125', '12899.25', '156', '1', '2', 'Wasim Chippa', 0, '-'),
(19, 34, 'R V Vyas Associates', '2019/07/04', 'GST/369', 'Divya Bhaskar', 998363, 'HAJIPAR PRATHMIK SHALA', 'Gandhinagar Edition', '2019/07/18', '5cms x 2columns', 'Inside Page', 'Black & White', '10', '113', '0', '1130', '28.25', '28.25', '1186.5', '180', '1', '2', 'Wasim Chippa', 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_radio`
--

CREATE TABLE `purchase_radio` (
  `id` int(10) NOT NULL,
  `p_no` int(10) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `radio` varchar(1000) DEFAULT NULL,
  `sup_in` varchar(30) DEFAULT NULL,
  `hsn` int(10) DEFAULT NULL,
  `client` varchar(50) DEFAULT NULL,
  `sd` varchar(1000) DEFAULT NULL,
  `ed` varchar(1000) DEFAULT NULL,
  `ct` varchar(1000) DEFAULT NULL,
  `dur` varchar(1000) DEFAULT NULL,
  `spot` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT '0',
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `ro_no` varchar(10) DEFAULT NULL,
  `s_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `pay` int(5) NOT NULL DEFAULT 0,
  `cheque` varchar(15) NOT NULL DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rcombo`
--

CREATE TABLE `rcombo` (
  `id` int(10) NOT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `ro_no` varchar(30) DEFAULT NULL,
  `ro_dt` varchar(50) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `sup_in` varchar(30) DEFAULT NULL,
  `sup_dt` varchar(50) DEFAULT NULL,
  `p_amt` varchar(1000) DEFAULT NULL,
  `p_gst` varchar(1000) DEFAULT NULL,
  `p_total` varchar(1000) DEFAULT NULL,
  `sale_in` varchar(30) DEFAULT NULL,
  `sale_dt` varchar(50) DEFAULT NULL,
  `sale_amt` varchar(1000) DEFAULT NULL,
  `sale_gst` varchar(1000) DEFAULT NULL,
  `sale_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `gst` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rcombo`
--

INSERT INTO `rcombo` (`id`, `emp_name`, `ro_no`, `ro_dt`, `sup`, `sup_in`, `sup_dt`, `p_amt`, `p_gst`, `p_total`, `sale_in`, `sale_dt`, `sale_amt`, `sale_gst`, `sale_total`, `profit`, `gst`) VALUES
(1, 'Juber Master', '105', '2019/07/01', 'Media Buzz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ro`
--

CREATE TABLE `ro` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `type_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ro`
--

INSERT INTO `ro` (`id`, `type`, `type_id`) VALUES
(93, 'newspaper', 1),
(94, 'newspaper', 2),
(95, 'newspaper', 3),
(96, 'newspaper', 4),
(97, 'newspaper', 5),
(98, 'newspaper', 6),
(99, 'newspaper', 7),
(100, 'newspaper', 8),
(101, 'newspaper', 9),
(117, 'newspaper', 24),
(103, 'newspaper', 11),
(104, 'newspaper', 12),
(105, 'radio', 1),
(108, 'newspaper', 15),
(110, 'newspaper', 17),
(111, 'newspaper', 18),
(115, 'newspaper', 22),
(114, 'newspaper', 21),
(118, 'hoarding', 1),
(119, 'hoarding', 2),
(142, 'hoarding', 15),
(121, 'newspaper', 25),
(150, 'newspaper', 35),
(125, 'newspaper', 27),
(126, 'newspaper', 28),
(127, 'hoarding', 6),
(128, 'newspaper', 29),
(129, 'newspaper', 30),
(130, 'newspaper', 31),
(131, 'newspaper', 32),
(132, 'newspaper', 33),
(141, 'hoarding', 14),
(139, 'hoarding', 12),
(169, 'newspaper', 47),
(140, 'hoarding', 13),
(143, 'hoarding', 16),
(144, 'hoarding', 17),
(145, 'hoarding', 18),
(146, 'hoarding', 19),
(147, 'hoarding', 20),
(148, 'hoarding', 21),
(149, 'hoarding', 22),
(159, 'newspaper', 44),
(153, 'newspaper', 38),
(154, 'newspaper', 39),
(155, 'newspaper', 40),
(156, 'newspaper', 41),
(157, 'newspaper', 42),
(158, 'newspaper', 43),
(161, 'hoarding', 24),
(163, 'hoarding', 26),
(166, 'hoarding', 29),
(165, 'hoarding', 28),
(170, 'newspaper', 48),
(171, 'newspaper', 49),
(172, 'newspaper', 50),
(173, 'newspaper', 51),
(174, 'newspaper', 52),
(175, 'newspaper', 53),
(176, 'newspaper', 54),
(177, 'hoarding', 30),
(178, 'hoarding', 31),
(179, 'hoarding', 32),
(180, 'newspaper', 55),
(181, 'newspaper', 56);

-- --------------------------------------------------------

--
-- Table structure for table `ro_delete`
--

CREATE TABLE `ro_delete` (
  `id` int(10) NOT NULL,
  `ro_no` varchar(10) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ro_delete`
--

INSERT INTO `ro_delete` (`id`, `ro_no`, `type`) VALUES
(1, '106', 'Newspaper'),
(2, '107', 'Newspaper'),
(3, '109', 'Newspaper'),
(4, '112', 'Newspaper'),
(5, '113', 'Newspaper'),
(6, '116', 'Newspaper'),
(7, '102', 'Newspaper'),
(8, '122', 'Hoarding'),
(9, '123', 'Hoarding'),
(10, '135', 'Hoarding'),
(11, '134', 'Hoarding'),
(12, '138', 'Hoarding'),
(13, '136', 'Hoarding'),
(14, '120', 'Hoarding'),
(15, '133', 'Hoarding'),
(16, '124', 'Newspaper'),
(17, '151', 'Newspaper'),
(18, '152', 'Newspaper'),
(19, '160', 'Hoarding'),
(20, '162', 'Hoarding'),
(21, '164', 'Hoarding'),
(22, '137', 'Newspaper'),
(23, '167', 'Newspaper'),
(24, '168', 'Newspaper');

-- --------------------------------------------------------

--
-- Table structure for table `ro_hoarding`
--

CREATE TABLE `ro_hoarding` (
  `id` int(10) NOT NULL,
  `r_no` int(10) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `bdt` varchar(30) DEFAULT NULL,
  `hoarding` varchar(50) DEFAULT NULL,
  `hsn` int(10) DEFAULT NULL,
  `client` varchar(50) DEFAULT NULL,
  `loc` varchar(1000) DEFAULT NULL,
  `size` varchar(1000) DEFAULT NULL,
  `sd` varchar(1000) DEFAULT NULL,
  `ed` varchar(1000) DEFAULT NULL,
  `quan` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `prate` varchar(1000) DEFAULT NULL,
  `mrate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT '0',
  `amt` varchar(1000) DEFAULT NULL,
  `pamt` varchar(1000) DEFAULT NULL,
  `mamt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `s_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `status` int(5) NOT NULL DEFAULT 0,
  `s` int(5) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ro_hoarding`
--

INSERT INTO `ro_hoarding` (`id`, `r_no`, `sup`, `dt`, `bdt`, `hoarding`, `hsn`, `client`, `loc`, `size`, `sd`, `ed`, `quan`, `rate`, `prate`, `mrate`, `dis`, `amt`, `pamt`, `mamt`, `sgst`, `cgst`, `gtotal`, `s_total`, `profit`, `emp_name`, `status`, `s`) VALUES
(1, 118, 'Chitra (B) publicity', '2019/07/01', '2019/07/31', NULL, 998361, 'Shivhari Infrastructure', 'Gandhinagar - GH-01 Road', '20x10', '2019/01/04', '2019/31/07', '122', '1147.54', '0', '0', '0', '139999.88', '0', '0', '12599.9892', '12599.9892', '165199.8584', '1', '1', 'Wasim Chippa', 1, 1),
(2, 119, 'Sai Publicity', '2019/07/01', '2019/07/31', NULL, 998361, 'BETAIN CAREER INSTITUTE PVT LTD.', 'Gandhinagar Sargasan Cross Road', '20x10', '2019/07/01', '2019/31/07', '31', '983.87', '0', '0', '0', '30499.97', '0', '0', '2744.9973', '2744.9973', '35989.9646', '3', '4', 'Wasim Chippa', 1, 1),
(15, 142, 'TDI International India Private Limited', '2019/07/01', '2019/07/31', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Ahmedabad Airport', '20X10', '2019/07/01', '2019/07/31', '31', '8709.68', '0', '0', '0', '270000.08', '0', '0', '24300.0072', '24300.0072', '318600.0944', '3', '-', 'Wasim Chippa', 1, 1),
(16, 143, 'Ahmedabad Ring Road Infrastructure Ltd', '2019/07/01', '2019/07/31', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Ahmedabad Airport', '20X10', '2019/07/01', '2019/07/31', '31', '8709.68', '0', '0', '0', '270000.08', '0', '0', '24300.0072', '24300.0072', '318600.0944', '3', '4', 'Wasim Chippa', 1, 1),
(6, 127, 'VIPUL PUBLICITY', '2019/07/01', '2019/07/31', NULL, 998361, 'HARIDEV DEVELOPERS', 'Sarghasan Highway Circle', '30x25', '2019/07/04', '2019/08/03', '30', '833.33', '8', '0', '0', '24999.9', '6000', '0', '2789.991', '2789.991', '36579.882', '3', '0', 'Wasim Chippa', 1, 1),
(14, 141, 'KRISH COMMUNICATION', '2019/07/01', '2019/07/31', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Pakwan Char Rasta', '40X20', '2019/06/01', '2019/06/30', '30', '6666.67', '0', '0', '0', '200000.1', '0', '0', '18000.009', '18000.009', '236000.118', '2', '4', 'Wasim Chippa', 1, 1),
(12, 139, 'The Sandesh Ltd. (Spotlight Division)', '2019/07/25', '2019/07/31', NULL, 998361, 'Riti Infra LLP', 'Shivranjani Cross Road~Pakwan Char Rasta~Shyamal Cross Road~Mansi Circle~NAVRANGPURA BAVLA CIRCLE', '20x10,24x12,20x10,20x10,20x10', '2019/08/06,2019/08/01,2019/08/13,2019/08/01,2019/08/01', '2019/10/05,2019/10,2019/10,2019/10,2019/10', '60,60,60,60,60', '4000,4000,3333.33,4166.67,2333.33', '0,0,0,0,0', '0,0,0,0,0', '0,0,0,0,0', '240000,240000,199999.8,250000.2,139999.8', '0,0,0,0,0', '0,0,0,0,0', '21600,21600,17999.982,22500.018,12599.982', '21600,21600,17999.982,22500.018,12599.982', '283200,283200,235999.764,295000.236,165199.764', NULL, NULL, 'Wasim Chippa', 0, 0),
(13, 140, 'Chitra (B) publicity', '2019/07/01', '2019/07/31', NULL, 998361, 'BETAIN CAREER INSTITUTE PVT LTD.', 'Gandhinagar GH 04 Circle~Gandhinagar GH 03 Circle', '20x10,20x10', '2019/07/01,2019/07/01', '2019/07/31,2019/07', '31,31', '2258.06,0', '0,0', '0,0', '0,0', '69999.86,0', '0,0', '0,0', '6299.9874,0', '6299.9874,0', '82599.8348,0', '3', '-', 'Wasim Chippa', 1, 1),
(17, 144, 'The Sandesh Ltd. (Spotlight Division)', '2019/06/01', '2019/07/05', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Prahladnagar', '20x10', '2019/06/15', '2019/07/15', '30', '2666.67', '0', '0', '0', '80000.1', '0', '0', '7200.009', '7200.009', '94400.118', '8', '6', 'Wasim Chippa', 1, 1),
(18, 145, 'The Sandesh Ltd. (Spotlight Division)', '2019/07/01', '2019/07/31', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Prahladnagar', '20x10', '2019/07/16', '2019/08/15', '30', '2666.67', '0', '0', '0', '80000.1', '0', '0', '7200.009', '7200.009', '94400.118', NULL, NULL, 'Wasim Chippa', 0, 0),
(19, 146, 'The Sandesh Ltd. (Spotlight Division)', '2019/07/29', '2019/09/30', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Prahladnagar', '20x10', '2019/08/16', '2019/09/15', '30', '2666.67', '0', '0', '0', '80000.1', '0', '0', '7200.009', '7200.009', '94400.118', NULL, NULL, 'Wasim Chippa', 0, 0),
(20, 147, 'The Sandesh Ltd. (Spotlight Division)', '2019/07/29', '2019/10/31', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Prahladnagar', '20x10', '2019/09/16', '2019/10/15', '30', '2666.67', '0', '0', '0', '80000.1', '0', '0', '7200.009', '7200.009', '94400.118', NULL, NULL, 'Wasim Chippa', 0, 0),
(21, 148, 'The Sandesh Ltd. (Spotlight Division)', '2019/07/29', '2019/11/30', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Prahladnagar', '20x10', '2019/10/16', '2019/11/15', '30', '2666.67', '0', '0', '0', '80000.1', '0', '0', '7200.009', '7200.009', '94400.118', NULL, NULL, 'Wasim Chippa', 0, 0),
(22, 149, 'The Sandesh Ltd. (Spotlight Division)', '2019/07/29', '2019/12/31', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Prahladnagar', '20x10', '2019/11/16', '2019/12/15', '30', '2666.67', '0', '0', '0', '80000.1', '0', '0', '7200.009', '7200.009', '94400.118', NULL, NULL, 'Wasim Chippa', 0, 0),
(26, 163, 'Media Buzz', '2019/07/01', '2019/07/31', NULL, 998361, 'Safal Goyal Reality LLP', '200 Ft Ring Rd, Lower, Nr Kake ka Dhaba~200 Ft Ring Rd, Upper, Nr Kake ka Dhaba', '30x15,30x15', '2019/07/01,2019/07/01', '2019/07/31,2019/07', '31,31', '3290.32,0', '0,0', '0,0', '0,0', '101999.92,0', '0,0', '0,0', '9179.9928,0', '9179.9928,0', '120359.9056,0', '1', '3', 'Wasim Chippa', 1, 1),
(24, 161, 'TDI International India Private Limited', '2019/08/01', '2019/08/01', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Ahmedabad Airport', '20X10', '2019/08/01', '2019/08/21', '21', '9000', '0', '0', '0', '189000', '0', '0', '17010', '17010', '223020', '2', '2', 'Wasim Chippa', 1, 1),
(29, 166, 'Advice Media', '2019/08/02', '2019/08/25', NULL, 998361, 'Riti Infra LLP', 'Panjrapole Site', '30x15', '2019/07/25', '2019/08/24', '30', '2166.67', '0', '0', '0', '65000.1', '0', '0', '5850.009', '5850.009', '76700.118', NULL, NULL, 'Wasim Chippa', 0, 0),
(28, 165, 'Advice Media', '2019/08/02', '2019/08/26', NULL, 998361, 'Riti Infra LLP', 'Panjrapole Site', '30x15', '2019/08/25', '2019/09/24', '30', '2166.67', '0', '0', '0', '65000.1', '0', '0', '5850.009', '5850.009', '76700.118', NULL, NULL, 'Wasim Chippa', 0, 0),
(30, 177, 'VIPUL PUBLICITY', '2019/08/01', '2019/09/04', NULL, 998361, 'HARIDEV DEVELOPERS', 'Sarghasan Highway Circle', '30x25', '2019/08/04', '2019/09/03', '30', '833.33', '0', '0', '0', '24999.9', '0', '0', '2249.991', '2249.991', '29499.882', NULL, NULL, 'Wasim Chippa', 1, 0),
(31, 178, 'VIPUL PUBLICITY', '2019/08/01', '2019/08/04', NULL, 998361, 'HARIDEV DEVELOPERS', 'Sarghasan Highway Circle', '30X25', '2019/08/04', '2019/09/03', '30', '733.33', '0', '0', '0', '', '', '', '', '', '', NULL, NULL, 'Wasim Chippa', 1, 0),
(32, 179, 'VIPUL PUBLICITY', '2019/08/01', '2019/08/04', NULL, 998361, 'HARIDEV DEVELOPERS', 'Sarghasan Highway Circle', '30X25', '2019/08/04', '2019/09/03', '30', '733.33', '0', '0', '0', '21999.9', '0', '0', '1979.991', '1979.991', '25959.882', '2', '3', 'Wasim Chippa', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ro_led`
--

CREATE TABLE `ro_led` (
  `id` int(10) NOT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `hsn` varchar(10) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `gst_type` varchar(20) DEFAULT NULL,
  `rono` varchar(100) DEFAULT NULL,
  `cn` varchar(1000) DEFAULT NULL,
  `sd` varchar(1000) DEFAULT NULL,
  `ed` varchar(1000) DEFAULT NULL,
  `cd` varchar(1000) DEFAULT NULL,
  `spd` varchar(1000) DEFAULT NULL,
  `spot` varchar(1000) DEFAULT NULL,
  `dur` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT '0',
  `man` varchar(1000) DEFAULT NULL,
  `manch` varchar(1000) DEFAULT NULL,
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT '0',
  `cgst` varchar(1000) DEFAULT '0',
  `igst` varchar(1000) DEFAULT '0',
  `gtotal` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `s_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `s` int(5) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ro_newspaper`
--

CREATE TABLE `ro_newspaper` (
  `id` int(10) NOT NULL,
  `r_no` int(10) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `bdt` varchar(30) DEFAULT NULL,
  `news` varchar(1000) DEFAULT NULL,
  `hsn` varchar(15) DEFAULT NULL,
  `client` varchar(50) DEFAULT NULL,
  `edi` varchar(1000) DEFAULT NULL,
  `rdt` varchar(1000) DEFAULT NULL,
  `size` varchar(1000) DEFAULT NULL,
  `page` varchar(1000) DEFAULT NULL,
  `print` varchar(1000) DEFAULT NULL,
  `quan` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT '0',
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `s_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `status` int(5) DEFAULT 0,
  `s` int(5) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ro_newspaper`
--

INSERT INTO `ro_newspaper` (`id`, `r_no`, `sup`, `dt`, `bdt`, `news`, `hsn`, `client`, `edi`, `rdt`, `size`, `page`, `print`, `quan`, `rate`, `dis`, `amt`, `sgst`, `cgst`, `gtotal`, `s_total`, `profit`, `emp_name`, `status`, `s`) VALUES
(1, 93, 'Publicity Parlour', '2019/03/06', '2019/03/31', 'Times of India', '998363', 'Penguin Buildcon LLP', 'Property Times', '2019/03/10', '12.98 cm W X 10 cm H', '2nd Page Times Interact', 'Color', '130', '108', '12.5', '12285', '307.125', '307.125', '12899.25', NULL, NULL, 'Juber Master', 0, 0),
(2, 94, 'Publicity Parlour', '2019/03/07', '2019/03/31', 'Ahmedabad Mirror', '998363', 'Happiness Clinic', 'Ahmedabad Booking Code E16937BABA6B    also to be released in 25th March and 29th March same advt ', '2019/03/11', '8 cm H X 6 cm W', 'Third Page', 'Color', '48', '150', '12.5', '6300', '157.5', '157.5', '6615', NULL, NULL, 'Rajul Bhatt', 0, 0),
(3, 95, 'Publicity Parlour', '2019/03/11', '2019/03/31', 'Divya Bhaskar,Divya Bhaskar', '998363', 'Shivhari Infrastructure', 'Gandhainagar,Gandhinagar', '2019/03/10,2019/03/04', '50 cm H x 32 Cm W,45 cm H X 32 cm W', 'Back Page,Front Page', 'Color,Color', '400,360', '142.5,165', '19.25,19.25', '46027.5,47965.5', '1150.6875,1199.1375', '1150.6875,1199.1375', '48328.875,50363.775', NULL, NULL, 'Rajul Bhatt', 0, 0),
(4, 96, 'Publicity Parlour', '2019/03/11', '2019/03/31', 'Divya Bhaskar,Divya Bhaskar,Divya Bhaskar', '998363', 'S R Infracon', 'Gandhinagar,Gandhinagar,Gandhinagar', '2019/03/03,2019/03/04,2019/03/10', '25cm H X 32 Cm w,25 cm H x 32 cm w,25 cm H X 32 cm W', 'Back Page,Back Page,Front Page', 'Color,Color,Color', '200,200,200', '142.5,142.5,165', '19.25,19.25,19.25', '23013.75,23013.75,26647.5', '575.34375,575.34375,666.1875', '575.34375,575.34375,666.1875', '24164.4375,24164.4375,27979.875', NULL, NULL, 'Rajul Bhatt', 0, 0),
(5, 97, 'Eagle Advertiser', '2019/03/11', '2019/03/31', 'Eagle News,Eagle News', '998363', 'BETAIN CAREER INSTITUTE PVT LTD.', 'Gandhinagar,Gandhinagar', '2109/03/03,2019/03/10', '5 cm H X 32 cm W,25 cm H X 32 cm W', 'Front Page,Front Page', 'Color,Color', '40,200', '220,220', '22,22', '6864,34320', '171.6,858', '171.6,858', '7207.2,36036', NULL, NULL, 'Rajul Bhatt', 0, 0),
(6, 98, 'Publicity Parlour', '2019/03/23', '2019/03/31', 'Gujarat Samachar', '998363', 'Bhaumik Naresh Thakar', 'Ahmedabad Edition', '2019/03/24', '2 columns x 8 cms', 'back page', 'Color', '16', '4500', '15', '61200', '1530', '1530', '64260', NULL, NULL, 'Shomit Mazumdar', 0, 0),
(7, 99, 'Publicity Parlour', '2019/03/28', '2019/03/31', 'Mumbai Samachar', '998363', 'Himalaya Buildcon P Ltd', 'Mumbai', '2019/03/31', '4.2cm w X 5 cm H', 'Classified Display ', 'Black & White', '21', '200', '12.5', '3675', '91.875', '91.875', '3858.75', '6', '2', 'Rajul Bhatt', 0, 1),
(8, 100, 'Publicity Parlour', '2019/03/28', '2019/03/31', 'Times of India', '998363', 'Himalaya Buildcon P Ltd', 'Mumbai', '2019/03/31', '3cm w X 5 cm H', 'Times Interact Times Property Classified', 'Black & White', '15', '1250', '12.5', '16406.25', '410.15625', '410.15625', '17226.5625', '1', '3', 'Rajul Bhatt', 0, 1),
(9, 101, 'Ahmedabad Ring Road Infrastructure Ltd', '2019/06/09', '2019/06/30', 'Gujarat Samachar', '998363', 'Riti Infra LLP', 'Ahmedabad', '2019/06/12', '8 x 1 cms', 'First Page', 'Black & White', '8', '2500', '0', '20000', '500', '500', '21000', '2', '8', 'Juber Master', 1, 1),
(24, 117, 'Publicity Parlour', '2019/07/01', '2019/07/31', 'Times of India,Ahmedabad Mirror', '998363', 'Zipbooks Software Solutions P Limited', 'AHMEDABAD,AHMEDABAD', '2019/07/03,2019/07/05', '8Wx7H,8WX7H', 'Appointment Page,Appointment Page Color', 'Color,Color', '56,56', '600,0', '12.5,0', '29400,0', '735,0', '735,0', '30870,0', '3', '8', 'Wasim Chippa', 1, 1),
(11, 103, 'Publicity Parlour', '2019/07/01', '2019/07/01', 'Gujarat Samachar', '998363', 'Anayata Tradecom LLP', 'AHMEDABAD', '2019/07/02', '16x34 Cms', 'Front Page', 'Color', '544', '1000', '10', '489600', '12240', '12240', '514080', '5', '7', 'Juber Master', 1, 1),
(12, 104, 'Ahmedabad Ring Road Infrastructure Ltd', '2019/07/01', '2019/07/02', 'Sandesh ,Times of India,Sandesh ', '998363', 'Safal Goyal Reality LLP', 'AHMEDABAD,AHMEDABAD,SURAT', '2019/07/02,2019/07/03,2019/07/05', '28x34,25x34,25*34', 'Front Page,Last Page,3rd Page', 'Color,Black & White,Color', '952,850,840', '200,150,250', '0,5,10', '190400,121125,189000', '4760,3028.125,4725', '4760,3028.125,4725', '199920,127181.25,198450', NULL, NULL, 'Juber Master', 0, 0),
(15, 108, 'Publicity Parlour', '2019/07/02', '2019/07/05', 'Times of India', '998363', 'Riti Infra LLP', 'AHMEDABAD SPLIT', '2019/07/04', '12 x 20 CM', 'Back Page', 'Color', '240', '825', '0', '198000', '4950', '4950', '207900', '1', '0', 'Wasim Chippa', 0, 1),
(17, 110, 'Publicity Parlour', '2019/07/11', '2019/08/09', 'Ahmedabad Times,Ahmedabad Mirror', '998363', 'Anayata Tradecom LLP', 'AHMEDABAD,AHMEDABAD', '2019/08/01,2019/08/05', '120 Sq Cms,100 Sq Cms', 'Third Page/Back Page,Third Page/Back Page', 'Color,Color', '120,100', '540,0', '12.5,0', '56700,0', '1417.5,0', '1417.5,0', '59535,0', '5', '2', 'Wasim Chippa', 0, 1),
(18, 111, 'Publicity Parlour', '2019/07/11', '2019/08/09', 'Ahmedabad Times,Ahmedabad Mirror', '998363', 'Anayata Tradecom LLP', 'AHMEDABAD,AHMEDABAD', '2019/08/08,2019/08/12', '120 Sq Cms,100 Sq Cms', 'Third Page/Back Page,Third Page/Back Page', 'Color,Color', '120,100', '540,0', '12.5,0', '56700,0', '1417.5,0', '1417.5,0', '59535,0', '5', '2', 'Wasim Chippa', 0, 1),
(25, 121, 'Publicity Parlour', '2019/07/01', '2019/07/31', 'Gujarat Samachar', '998363', 'Happiness Clinic', 'AHMEDABAD', '2019/07/17', '5x1', 'Back Page', 'Color', '5', '700', '15', '2975', '74.375', '74.375', '3123.75', '3', '5', 'Wasim Chippa', 1, 1),
(21, 114, 'Publicity Parlour', '2019/07/02', '2019/07/15', 'Times of India,Times Property', '998363', 'Riti Infra LLP', 'AHMEDABAD SPLIT,AHMEDABAD', '2019/07/04,2019/07/14', '12 x 20 CM,12 x 20 CM', 'Back Page,Back Page', 'Color,Color', '240,240', '825,0', '12.5,0', '173250,0', '4331.25,0', '4331.25,0', '181912.5,0', '2', '3', 'Wasim Chippa', 0, 1),
(22, 115, 'Publicity Parlour', '2019/07/12', '2019/07/31', 'Divya Bhaskar', '998363', 'Psy Enterprise', 'Gandhinagar Edition', '2019/07/14', '50 X 32 cm', 'Back Page', 'Color', '400', '142.5', '19.25', '46027.5', '1150.6875', '1150.6875', '48328.875', '5', '1', 'Wasim Chippa', 1, 1),
(35, 150, 'R V Vyas Associates', '2019/07/23', '2019/07/31', 'Divya Bhaskar', '998363', 'HIMALAYA DEVELOPERS', 'Saurashtra Samachar - Bhavnagar', '2019/07/28', '25x8 sqcm', 'Back Page', 'Color', '200', '575', '19.25', '92862.5', '2321.5625', '2321.5625', '97505.625', '1', '2', 'Wasim Chippa', 1, 1),
(27, 125, 'Publicity Parlour', '2019/07/01', '2019/07/31', 'Times of India,Times Property', '998363', 'Penguin Buildcon LLP', 'Ahmedabad,AHMEDABAD', '2019/07/04,2019/07/07', '13x10,13x10', 'Inside Page,Inside Page', 'Color,Color', '130,130', '140,0', '12.50,0', '15925,0', '398.125,0', '398.125,0', '16721.25,0', '1', '2', 'Wasim Chippa', 1, 1),
(28, 126, 'R V Vyas Associates', '2019/07/01', '2019/07/31', 'Divya Bhaskar', '998363', 'Happiness Clinic', 'Charotar Anand - Bhaskar', '2019/07/08', '5x1', 'Front Page', 'Color', '5', '255', '0', '1275', '31.875', '31.875', '1338.75', '1', '3', 'Wasim Chippa', 1, 1),
(29, 128, 'Publicity Parlour', '2019/07/01', '2019/07/31', 'Gujarat Samachar', '998363', 'Shivhari Infrastructure', 'Gandhinagar', '2019/04/07', '25x8', 'Front Page', 'Color', '200', '195', '15', '33150', '828.75', '828.75', '34807.5', '3', '1', 'Wasim Chippa', 1, 1),
(30, 129, 'Publicity Parlour', '2019/07/01', '2019/07/31', 'Gujarat Samachar', '998363', 'RIDDHI DEVELOPERS', 'Gandhinagar', '2019/07/14', '5x1', 'Back Page', 'Black & White', '5', '150', '15', '637.5', '15.9375', '15.9375', '669.375', '6', '2', 'Wasim Chippa', 1, 1),
(31, 130, 'R V Vyas Associates', '2019/07/01', '2019/07/31', 'Divya Bhaskar', '998363', 'HARIDEV DEVELOPERS', 'Gandhinagar', '2019/07/04', '50x8', 'Last Page', 'Color', '400', '115', '0', '46000', '1150', '1150', '48300', '5', '5', 'Wasim Chippa', 1, 1),
(32, 131, 'R V Vyas Associates', '2019/07/01', '2019/07/31', 'Divya Bhaskar', '998363', 'SHREEJI INFRASTRUCTURE', 'Gandhinagar', '2019/07/04', '25x8', 'Front Page', 'Color', '200', '133', '0', '26600', '665', '665', '27930', '2', '3', 'Wasim Chippa', 1, 1),
(33, 132, 'R V Vyas Associates', '2019/07/01', '2019/07/31', 'Divya Bhaskar', '998363', 'SHIV INFRASTRUCTRE', 'Gandhinagar', '2019/07/04', '45x8', 'Front Page', 'Color', '360', '133', '0', '47880', '1197', '1197', '50274', '5', '5', 'Wasim Chippa', 1, 1),
(47, 169, 'Publicity Parlour', '2019/08/07', '2019/08/10', 'Ahmedabad Mirror,Ahmedabad Mirror', '998363', 'Active Adworkshop Private Limited', 'Ahmedabad,Ahmedabad', '2019/08/09,2019/08/23', '8X6,8X6', 'Appointment Page Color,Appointment Page Color', 'Color,Color', '48,48', '224,0', '12.5,0', '9408,0', '235.2,0', '235.2,0', '9878.4,0', NULL, NULL, 'Wasim Chippa', 0, 0),
(48, 170, 'GUJARAT TODAY', '2019/08/10', '2019/08/12', 'Gujarat Today', '998363', 'HIMALAYA DEVELOPERS', 'AHMEDABAD', '2019/08/11', 'Qtr Page 100 CC', 'Back Page', 'Color', '100', '200', '25', '15000', '375', '375', '15750', '1', '3', 'Wasim Chippa', 0, 1),
(49, 171, 'Publicity Parlour', '2019/07/24', '2019/07/25', 'Ahmedabad Times,Ahmedabad Mirror', '998363', 'Dangee Dums', 'AHMEDABAD,Ahmedabad', '2019/08/11,2019/08/05', '12x20,12x20', 'Inside Page,Inside Page', 'Color,Color', '240,240', '220.14,0', '12.5,0', '46229.4,0', '1155.735,0', '1155.735,0', '48540.87,0', '4', '1', 'Wasim Chippa', 0, 1),
(50, 172, 'Publicity Parlour', '2019/07/24', '2019/08/14', 'Ahmedabad Times,Ahmedabad Mirror', '998363', 'Dangee Dums', 'AHMEDABAD,Ahmedabad', '2019/08/14,2019/08/13', '12x20,12x20', 'Inside Page,Inside Page', 'Color,Color', '240,240', '220.14,0', '12.5,0', '46229.4,0', '1155.735,0', '1155.735,0', '48540.87,0', '4', '1', 'Wasim Chippa', 0, 1),
(51, 173, 'Publicity Parlour', '2019/07/24', '2019/08/15', 'Ahmedabad Times', '998363', 'Dangee Dums', 'AHMEDABAD', '2019/08/15', '12x20', 'Inside Page', 'Color', '120', '220.14', '12.5', '23114.7', '577.8675', '577.8675', '24270.435', '2', '6', 'Wasim Chippa', 0, 1),
(52, 174, 'Publicity Parlour', '2019/07/24', '2019/08/16', 'Ahmedabad Times', '998363', 'Dangee Dums', 'AHMEDABAD', '2019/08/15', '12x20', 'Inside Page', 'Color', '240', '110.07', '12.5', '23114.7', '577.8675', '577.8675', '24270.435', '2', '6', 'Wasim Chippa', 0, 1),
(38, 153, 'Publicity Parlour', '2019/07/29', '2019/08/31', 'Gujarat Samachar', '998363', 'Riti Infra LLP', 'AHMEDABAD', '2019/08/18', '20x3 cc', 'Back Page', 'Color', '60', '4500', '15', '229500', '5737.5', '5737.5', '240975', NULL, NULL, 'Wasim Chippa', 0, 0),
(44, 159, 'R V Vyas Associates', '2019/08/02', '2019/08/05', 'Divya Bhaskar', '998363', 'Riti Infra LLP', 'Ahmedabad', '2019/08/04', '20x3 CC', 'Back Page', 'Color', '60', '4625', '19.25', '224081.25', '5602.03125', '5602.03125', '235285.3125', '2', '2', 'Wasim Chippa', 0, 1),
(39, 154, 'R V Vyas Associates', '2019/07/23', '2019/07/29', 'Divya Bhaskar', '998363', 'HIMALAYA DEVELOPERS', 'Saurashtra Samachar - Bhavnagar', '2019/07/28', '25X8', 'Back Page', 'Color', '200', '575', '19.25', '92862.5', '2321.5625', '2321.5625', '97505.625', '1', '1', 'Wasim Chippa', 1, 1),
(40, 155, 'Publicity Parlour', '2019/07/21', '2019/07/22', 'Gujarat Samachar', '998363', 'Happiness Clinic', 'Kheda - Anand', '2019/07/22', '5x1', 'Back Page', 'Color', '5', '330', '15', '1402.5', '35.0625', '35.0625', '1472.625', '1', '2', 'Wasim Chippa', 1, 1),
(41, 156, 'Publicity Parlour', '2019/07/19', '2019/07/22', 'Times Property', '998363', 'Penguin Buildcon LLP', 'Ahmedabad', '2019/07/21', '12.98x10', 'Inside Page', 'Color', '130', '108', '12.5', '12285', '307.125', '307.125', '12899.25', '1', '2', 'Wasim Chippa', 1, 1),
(42, 157, 'R V Vyas Associates', '2019/07/26', '2019/07/29', 'Divya Bhaskar', '998363', 'Penguin Buildcon LLP', 'Gandhinagar', '2019/07/28', '45X8', 'Front Page', 'Color', '360', '154', '19.25', '44767.8', '1119.195', '1119.195', '47006.19', '5', '1', 'Wasim Chippa', 1, 1),
(43, 158, 'R V Vyas Associates', '2019/07/19', '2019/07/22', 'Divya Bhaskar', '998363', 'Happiness Clinic', 'Ahmedabad City Bhaskar', '2019/07/21', '5x1', 'Last Page', 'Color', '5', '736', '19.25', '2971.6', '74.29', '74.29', '3120.18', '3', '7', 'Wasim Chippa', 1, 1),
(53, 175, 'Publicity Parlour', '2019/08/16', '2019/08/18', 'Gujarat Samachar', '998363', 'SHARANAM SOLITAIRE LLP', 'AHMEDABAD', '2019/08/17', '6 cc ( 6 cms x 1 column )', 'Appointment', 'Color', '6', '2400', '15', '12240', '306', '306', '12852', '1', '4', 'Wasim Chippa', 0, 1),
(54, 176, 'Publicity Parlour', '2019/07/01', '2019/07/25', 'Gujarat Samachar', '998363', 'SHREEJI INFRASTRUCTURE', 'AHMEDABAD', '2019/07/04', '25x8', 'Front Page', 'Color', '200', '195', '15', '33150', '828.75', '828.75', '34807.5', '3', '1', 'Wasim Chippa', 0, 1),
(55, 180, 'R V Vyas Associates', '2019/07/12', '2019/07/19', 'Divya Bhaskar', '998363', 'HAJIPAR PRATHMIK SHALA', 'Gandhinagar Edition', '2019/07/18', '5cms x 2columns', 'Inside Page', 'Black & White', '10', '113', '0', '1130', '28.25', '28.25', '1186.5', '1', '2', 'Wasim Chippa', 1, 1),
(56, 181, 'Publicity Parlour', '2019/07/12', '2019/07/15', 'Divya Bhaskar', '998363', 'Psy Enterprise', 'Gandhinagar Edition', '2019/07/14', '50x32', 'Back Page', 'Color', '400', '142.50', '19.25', '46027.5', '1150.6875', '1150.6875', '48328.875', '5', '5', 'Wasim Chippa', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ro_radio`
--

CREATE TABLE `ro_radio` (
  `id` int(10) NOT NULL,
  `r_no` int(10) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `bdt` varchar(30) DEFAULT NULL,
  `radio` varchar(1000) DEFAULT NULL,
  `hsn` int(10) DEFAULT NULL,
  `client` varchar(50) DEFAULT NULL,
  `sd` varchar(1000) DEFAULT NULL,
  `ed` varchar(1000) DEFAULT NULL,
  `ct` varchar(1000) DEFAULT NULL,
  `dur` varchar(1000) DEFAULT NULL,
  `spot` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT '0',
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `s_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `status` int(5) NOT NULL DEFAULT 0,
  `s` int(5) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ro_radio`
--

INSERT INTO `ro_radio` (`id`, `r_no`, `sup`, `dt`, `bdt`, `radio`, `hsn`, `client`, `sd`, `ed`, `ct`, `dur`, `spot`, `rate`, `dis`, `amt`, `sgst`, `cgst`, `gtotal`, `s_total`, `profit`, `emp_name`, `status`, `s`) VALUES
(1, 105, 'Media Buzz', '2019/07/01', '2019/07/15', 'MY FM 94.3', 998364, 'Bakeri Urban Development Pvt Ltd', '2019/07/02', '2019/07/03', 'FCT', '1500', '50', '7', '0', '', '', '', '', NULL, NULL, 'Juber Master', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ro_rail`
--

CREATE TABLE `ro_rail` (
  `id` int(10) NOT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `hsn` varchar(100) DEFAULT NULL,
  `tender` varchar(20) DEFAULT NULL,
  `ten_dt` varchar(20) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `gst_type` varchar(30) DEFAULT NULL,
  `rono` varchar(30) DEFAULT NULL,
  `p_name` varchar(1000) DEFAULT NULL,
  `p_des` varchar(2500) DEFAULT NULL,
  `pl_no` varchar(1000) DEFAULT NULL,
  `dc` varchar(1000) DEFAULT NULL,
  `cc` varchar(1000) DEFAULT NULL,
  `aloc` varchar(1000) DEFAULT NULL,
  `desp` varchar(1000) DEFAULT NULL,
  `dest` varchar(1000) DEFAULT NULL,
  `quan` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `grate` varchar(10) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT NULL,
  `man` varchar(1000) DEFAULT NULL,
  `manch` varchar(1000) DEFAULT NULL,
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `igst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `s` int(5) DEFAULT 0,
  `s_total` varchar(200) DEFAULT NULL,
  `profit` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_hoarding`
--

CREATE TABLE `sales_hoarding` (
  `id` int(10) NOT NULL,
  `in_no` int(10) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `hoarding` varchar(50) DEFAULT NULL,
  `hsn` int(10) DEFAULT NULL,
  `client` varchar(50) DEFAULT NULL,
  `loc` varchar(1000) DEFAULT NULL,
  `size` varchar(1000) DEFAULT NULL,
  `sd` varchar(1000) DEFAULT NULL,
  `ed` varchar(1000) DEFAULT NULL,
  `quan` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `prate` varchar(1000) DEFAULT NULL,
  `mrate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT '0',
  `man` varchar(1000) DEFAULT NULL,
  `manch` varchar(1000) DEFAULT NULL,
  `amt` varchar(1000) DEFAULT NULL,
  `pamt` varchar(1000) DEFAULT NULL,
  `mamt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `ro_no` varchar(1000) DEFAULT NULL,
  `p_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `pay` int(5) NOT NULL DEFAULT 0,
  `cheque` varchar(15) NOT NULL DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_hoarding`
--

INSERT INTO `sales_hoarding` (`id`, `in_no`, `sup`, `dt`, `hoarding`, `hsn`, `client`, `loc`, `size`, `sd`, `ed`, `quan`, `rate`, `prate`, `mrate`, `dis`, `man`, `manch`, `amt`, `pamt`, `mamt`, `sgst`, `cgst`, `gtotal`, `ro_no`, `p_total`, `profit`, `emp_name`, `pay`, `cheque`) VALUES
(1, 7, 'Sai Publicity', '2019/07/23', NULL, 998361, 'BETAIN CAREER INSTITUTE PVT LTD.', 'Gandhinagar Sargasan Cross Road', '20x10', '2019/07/01', '2019/31/07', '31', '1129.03', '0', '0', '0', '0', '0', '34999.93', '0', '0', '3149.9937', '3149.9937', '41299.9174', '119', '30499.97', '4499.96', 'Wasim Chippa', 0, '-'),
(2, 8, 'Media Buzz', '2019/07/23', NULL, 998361, 'Safal Goyal Reality LLP', '200 Ft. Ring Rd Lower Nr Kakeka Dhaba FL12~200 Ft. Ring Rd Upper Nr Kakeka Dhaba FL13', '30x15,30x15', '2019/07/01,2019/07/01', '2019/07/31,2019/07', '31,31', '3290.32,0', '0,0', '0,0', '0,0', '3060,0', '3121197.552,0', '101999.92,0', '0,0', '0,0', '290087.77248,0', '290087.77248,0', '3803373.01696,0', '120', '74999.85', '3148197.622,0', 'Wasim Chippa', 0, '-'),
(3, 10, 'Chitra (B) publicity', '2019/07/23', NULL, 998361, 'Shivhari Infrastructure', 'Gandhinagar - GH-01 Road', '20x10', '2019/01/04', '2019/31/07', '122', '1289.25', '0', '0', '0', '0', '0', '157288.5', '0', '0', '14155.965', '14155.965', '185600.43', '118', '139999.88', '17288.62', 'Wasim Chippa', 0, '-'),
(4, 13, 'VIPUL PUBLICITY', '2019/07/25', NULL, 998361, 'HARIDEV DEVELOPERS', 'Sarghasan Highway Circle', '30x25', '2019/07/04', '2019/08/03', '30', '833.33', '8', '0', '0', '0', '0', '24999.9', '6000', '0', '2789.991', '2789.991', '36579.882', '127', '30999.9', '0', 'Wasim Chippa', 0, '-'),
(5, 19, 'KRISH COMMUNICATION', '2019/07/29', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Pakwan Char Rasta', '40X20', '2019/06/01', '2019/06/30', '30', '7833.33', '0', '0', '0', '5', '11749.995', '234999.9', '0', '0', '22207.49055', '22207.49055', '291164.8761', '141', '200000.1', '46749.795', 'Wasim Chippa', 0, '-'),
(6, 20, 'TDI International India Private Limited', '2019/07/29', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Ahmedabad Airport', '20X10', '2019/07/01', '2019/07/31', '31', '967.74', '0', '0', '0', '5', '1499.997', '29999.94', '0', '0', '2834.99433', '2834.99433', '37169.92566', '142', '270000.08', '-238500.143', 'Wasim Chippa', 0, '-'),
(7, 21, 'Ahmedabad Ring Road Infrastructure Ltd', '2019/07/29', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Ahmedabad Airport', '20X10', '2019/07/01', '2019/07/31', '31', '9677.42', '0', '0', '0', '5', '15000.001', '300000.02', '0', '0', '28350.00189', '28350.00189', '371700.02478', '143', '270000.08', '44999.941', 'Wasim Chippa', 0, '-'),
(8, 22, 'Chitra (B) publicity', '2019/07/29', NULL, 998361, 'BETAIN CAREER INSTITUTE PVT LTD.', 'Gandhinagar GH 04 Circle~Gandhinagar GH 03 Circle', '20x10,20x10', '2019/07/01,2019/07/01', '2019/07/31,2019/07', '31,31', '1258.07,1258.07', '0,0', '0,0', '0,0', '0,0', '0,0', '39000.17,39000.17', '0,0', '0,0', '3510.0153,3510.0153', '3510.0153,3510.0153', '46020.2006,46020.2006', '140', '69999.86', '-30999.69,39000.17', 'Wasim Chippa', 0, '-'),
(9, 23, 'The Sandesh Ltd. (Spotlight Division)', '2019/07/31', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Prahladnagar', '20x10', '2019/06/15', '2019/07/15', '30', '2900', '0', '0', '0', '0', '0', '87000', '0', '0', '7830', '7830', '102660', '144', '80000.1', '6999.9', 'Wasim Chippa', 0, '-'),
(10, 29, 'TDI International India Private Limited', '2019/08/02', NULL, 998361, 'Goyal & Co. (Const) Private Limited', 'Ahmedabad Airport', '20X10', '2019/08/01', '2019/08/21', '21', '9677.42', '0', '0', '0', '5', '10161.291', '203225.82', '0', '0', '19204.83999', '19204.83999', '251796.79098', '161', '189000', '24387.111', 'Wasim Chippa', 0, '-'),
(11, 30, 'Media Buzz', '2019/08/02', NULL, 998361, 'Safal Goyal Reality LLP', '200 Ft Ring Rd, Lower, Nr Kake ka Dhaba~200 Ft Ring Rd, Upper, Nr Kake ka Dhaba', '30x15,30x15', '2019/07/01,2019/07/01', '2019/07/31,2019/07', '31,31', '3290.32,0', '0,0', '0,0', '0,0', '3,0', '3059.9976,0', '101999.92,0', '0,0', '0,0', '9455.392584,0', '9455.392584,0', '123970.702768,0', '163', '101999.92', '3059.9976,0', 'Wasim Chippa', 0, '-'),
(12, 41, 'VIPUL PUBLICITY', '2019/09/02', NULL, 998361, 'HARIDEV DEVELOPERS', 'Sarghasan Highway Circle', '30X25', '2019/08/04', '2019/09/03', '30', '833.33', '0', '0', '0', '0', '0', '24999.9', '0', '0', '2249.991', '2249.991', '29499.882', '179', '21999.9', '3000', 'Wasim Chippa', 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `sales_led`
--

CREATE TABLE `sales_led` (
  `id` int(10) NOT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `in_no` int(10) DEFAULT NULL,
  `hsn` varchar(10) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `gst_type` varchar(20) DEFAULT NULL,
  `rono` varchar(100) DEFAULT NULL,
  `cn` varchar(1000) DEFAULT NULL,
  `sd` varchar(1000) DEFAULT NULL,
  `ed` varchar(1000) DEFAULT NULL,
  `cd` varchar(1000) DEFAULT NULL,
  `spd` varchar(1000) DEFAULT NULL,
  `spot` varchar(1000) DEFAULT NULL,
  `dur` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT '0',
  `man` varchar(1000) DEFAULT NULL,
  `manch` varchar(1000) DEFAULT NULL,
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT '0',
  `cgst` varchar(1000) DEFAULT '0',
  `igst` varchar(1000) DEFAULT '0',
  `gtotal` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `p_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `pay` int(5) DEFAULT 0,
  `cheque` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_newspaper`
--

CREATE TABLE `sales_newspaper` (
  `id` int(10) NOT NULL,
  `in_no` int(10) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `news` varchar(1000) DEFAULT NULL,
  `hsn` varchar(15) DEFAULT NULL,
  `client` varchar(50) DEFAULT NULL,
  `edi` varchar(1000) DEFAULT NULL,
  `rdt` varchar(1000) DEFAULT NULL,
  `size` varchar(1000) DEFAULT NULL,
  `page` varchar(1000) DEFAULT NULL,
  `print` varchar(1000) DEFAULT NULL,
  `quan` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT '0',
  `man` varchar(1000) DEFAULT NULL,
  `manch` varchar(1000) DEFAULT NULL,
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `ro_no` varchar(1000) DEFAULT NULL,
  `p_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `pay` int(5) NOT NULL DEFAULT 0,
  `cheque` varchar(15) NOT NULL DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_newspaper`
--

INSERT INTO `sales_newspaper` (`id`, `in_no`, `sup`, `dt`, `news`, `hsn`, `client`, `edi`, `rdt`, `size`, `page`, `print`, `quan`, `rate`, `dis`, `man`, `manch`, `amt`, `sgst`, `cgst`, `gtotal`, `ro_no`, `p_total`, `profit`, `emp_name`, `pay`, `cheque`) VALUES
(1, 1, 'Ahmedabad Ring Road Infrastructure Ltd', '2019/06/09', 'Gujarat Samachar', '998363', 'Riti Infra LLP', 'Ahmedabad', '2019/06/12', '8 x 1 cms', 'First Page', 'Black & White', '8', '2600', '0', '0', '0', '20800', '520', '520', '21840', '101', '20000', '800', 'Juber Master', 1, '45562'),
(2, 2, 'Publicity Parlour', '2019/07/05', 'Gujarat Samachar', '998363', 'Anayata Tradecom LLP', 'AHMEDABAD', '2019/07/02', '16x34 Cms', 'Front Page', 'Color', '544', '1100', '5', '0', '0', '568480', '14212', '14212', '596904', '103', '489600', '78880', 'Juber Master', 1, '741852'),
(3, 3, 'Publicity Parlour', '2019/07/01', 'Mumbai Samachar,Times of India', '998363', 'Himalaya Buildcon P Ltd', 'Mumbai,Mumbai', '2019/03/31,2019/03/31', '4.2cm w X 5 cm H,3cm w X 5 cm H', 'Classified Display ,Times Interact Times Property Classified', 'Black & White,Black & White', '21,15', '300,1300', '0,0', '0,0', '0,0', '6300,19500', '157.5,487.5', '157.5,487.5', '6615,20475', '99,100', '3675,16406.25', '2625,3093.75', 'Rajul Bhatt', 0, '-'),
(4, 4, 'Publicity Parlour', '2019/07/09', 'Times of India', '998363', 'Riti Infra LLP', 'AHMEDABAD SPLIT', '2019/07/04', '12 x 20 CM', 'Back Page', 'Color', '240', '825', '0', '0', '0', '198000', '4950', '4950', '207900', '108', '198000', '0', 'Wasim Chippa', 0, '-'),
(5, 5, 'Publicity Parlour', '2019/07/12', 'Times of India,Times Property', '998363', 'Riti Infra LLP', 'AHMEDABAD SPLIT,AHMEDABAD', '2019/07/04,2019/07/14', '12 x 20 CM,12 x 20 CM', 'Back Page,Back Page', 'Color,Color', '240,240', '875,0', '0,0', '0,0', '0,0', '210000,0', '5250,0', '5250,0', '220500,0', '114', '173250,0', '36750,0', 'Wasim Chippa', 0, '-'),
(6, 6, 'Publicity Parlour', '2019/07/23', 'Times of India,Ahmedabad Mirror', '998363', 'Zipbooks Software Solutions P Limited', 'AHMEDABAD,AHMEDABAD', '2019/07/03,2019/07/05', '8Wx7H,8WX7H', 'Appointment Page,Appointment Page Color', 'Color,Color', '56,56', '600,0', '10,0', '0,0', '0,0', '30240,0', '756,0', '756,0', '31752,0', '117', '29400,0', '840,0', 'Wasim Chippa', 0, '-'),
(7, 9, 'Publicity Parlour', '2019/07/23', 'Gujarat Samachar', '998363', 'Happiness Clinic', 'AHMEDABAD', '2019/07/17', '5x1', 'Back Page', 'Color', '5', '700', '0', '0', '0', '3500', '87.5', '87.5', '3675', '121', '2975', '525', 'Wasim Chippa', 0, '-'),
(8, 11, 'R V Vyas Associates', '2019/07/25', 'Divya Bhaskar', '998363', 'Happiness Clinic', 'Charotar Anand - Bhaskar', '2019/07/08', '5x1', 'Front Page', 'Color', '5', '315', '0', '0', '0', '1575', '39.375', '39.375', '1653.75', '126', '1275', '300', 'Wasim Chippa', 0, '-'),
(9, 12, 'Publicity Parlour', '2019/07/25', 'Times of India,Times Property', '998363', 'Penguin Buildcon LLP', 'Ahmedabad,AHMEDABAD', '2019/07/04,2019/07/07', '13x10,13x10', 'Inside Page,Inside Page', 'Color,Color', '130,130', '160,0', '10,0', '0,0', '0,0', '18720,0', '468,0', '468,0', '19656,0', '125', '15925,0', '2795,0', 'Wasim Chippa', 0, '-'),
(10, 14, 'R V Vyas Associates', '2019/07/25', 'Divya Bhaskar', '998363', 'SHIV INFRASTRUCTRE', 'Gandhinagar', '2019/07/04', '45x8', 'Front Page', 'Color', '360', '220', '32', '0', '0', '53856', '1346.4', '1346.4', '56548.8', '132', '47880', '5976', 'Wasim Chippa', 0, '-'),
(11, 15, 'R V Vyas Associates', '2019/07/25', 'Divya Bhaskar', '998363', 'SHREEJI INFRASTRUCTURE', 'Gandhinagar', '2019/07/04', '25x8', 'Front Page', 'Color', '200', '220', '32', '0', '0', '29920', '748', '748', '31416', '131', '26600', '3320', 'Wasim Chippa', 0, '-'),
(12, 16, 'R V Vyas Associates', '2019/07/25', 'Divya Bhaskar', '998363', 'HARIDEV DEVELOPERS', 'Gandhinagar', '2019/07/04', '50x8', 'Last Page', 'Color', '400', '190', '32', '0', '0', '51680', '1292', '1292', '54264', '130', '46000', '5680', 'Wasim Chippa', 0, '-'),
(13, 17, 'Publicity Parlour', '2019/07/25', 'Gujarat Samachar', '998363', 'RIDDHI DEVELOPERS', 'Gandhinagar', '2019/07/14', '5x1', 'Back Page', 'Black & White', '5', '150', '12%', '0', '0', '660', '16.5', '16.5', '693', '129', '637.5', '22.5', 'Wasim Chippa', 0, '-'),
(14, 18, 'Publicity Parlour', '2019/07/25', 'Gujarat Samachar', '998363', 'Shivhari Infrastructure', 'Gandhinagar', '2019/04/07', '25x8', 'Front Page', 'Color', '200', '195', '12', '0', '0', '34320', '858', '858', '36036', '128', '33150', '1170', 'Wasim Chippa', 0, '-'),
(15, 24, 'R V Vyas Associates', '2019/08/01', 'Divya Bhaskar', '998363', 'HIMALAYA DEVELOPERS', 'Saurashtra Samachar - Bhavnagar', '2019/07/28', '25x8 sqcm', 'Back Page', 'Color', '200', '575', '0', '0', '0', '115000', '2875', '2875', '120750', '150', '92862.5', '22137.5', 'Wasim Chippa', 0, '-'),
(16, 25, 'R V Vyas Associates', '2019/08/01', 'Divya Bhaskar', '998363', 'HIMALAYA DEVELOPERS', 'Saurashtra Samachar - Bhavnagar', '2019/07/28', '25X8', 'Back Page', 'Color', '200', '600', '12', '0', '0', '105600', '2640', '2640', '110880', '154', '92862.5', '12737.5', 'Wasim Chippa', 0, '-'),
(17, 26, 'Publicity Parlour', '2019/08/01', 'Divya Bhaskar', '998363', 'Psy Enterprise', 'Gandhinagar Edition', '2019/07/14', '50 X 32 cm', 'Back Page', 'Color', '400', '142.50', '0', '0', '0', '57000', '1425', '1425', '59850', '115', '46027.5', '10972.5', 'Wasim Chippa', 0, '-'),
(18, 27, 'R V Vyas Associates', '2019/08/01', 'Divya Bhaskar', '998363', 'Penguin Buildcon LLP', 'Gandhinagar', '2019/07/28', '45X8', 'Front Page', 'Color', '360', '154', '0', '0', '0', '55440', '1386', '1386', '58212', '157', '44767.8', '10672.2', 'Wasim Chippa', 0, '-'),
(19, 28, 'R V Vyas Associates', '2019/08/01', 'Divya Bhaskar', '998363', 'Happiness Clinic', 'Ahmedabad City Bhaskar', '2019/07/21', '5x1', 'Last Page', 'Color', '5', '736', '0', '0', '0', '3680', '92', '92', '3864', '158', '2971.6', '708.4', 'Wasim Chippa', 0, '-'),
(20, 31, 'Publicity Parlour', '2019/08/05', 'Ahmedabad Times,Ahmedabad Mirror', '998363', 'Anayata Tradecom LLP', 'AHMEDABAD,AHMEDABAD', '2019/08/01,2019/08/05', '120 Sq Cms,100 Sq Cms', 'Third Page/Back Page,Third Page/Back Page', 'Color,Color', '120,100', '540,0', '9,0', '0,0', '0,0', '58968,0', '1474.2,0', '1474.2,0', '61916.4,0', '110', '56700,0', '2268,0', 'Wasim Chippa', 0, '-'),
(21, 32, 'R V Vyas Associates', '2019/08/05', 'Divya Bhaskar', '998363', 'Riti Infra LLP', 'Ahmedabad', '2019/08/04', '20x3 CC', 'Back Page', 'Color', '60', '4230', '0', '0', '0', '253800', '6345', '6345', '266490', '159', '224081.25', '29718.75', 'Wasim Chippa', 0, '-'),
(22, 33, 'Publicity Parlour', '2019/08/13', 'Ahmedabad Times,Ahmedabad Mirror', '998363', 'Dangee Dums', 'AHMEDABAD,Ahmedabad', '2019/08/11,2019/08/05', '12x20,12x20', 'Inside Page,Inside Page', 'Color,Color', '240,240', '220.14,0', '10,0', '0,0', '0,0', '47550.24,0', '1188.756,0', '1188.756,0', '49927.752,0', '171', '46229.4,0', '1320.84,0', 'Wasim Chippa', 0, '-'),
(23, 34, 'Publicity Parlour', '2019/08/13', 'Ahmedabad Times,Ahmedabad Mirror', '998363', 'Dangee Dums', 'AHMEDABAD,Ahmedabad', '2019/08/14,2019/08/13', '12x20,12x20', 'Inside Page,Inside Page', 'Color,Color', '240,240', '220.14,0', '10,0', '0,0', '0,0', '47550.24,0', '1188.756,0', '1188.756,0', '49927.752,0', '172', '46229.4,0', '1320.84,0', 'Wasim Chippa', 0, '-'),
(24, 35, 'Publicity Parlour', '2019/08/13', 'Ahmedabad Times,Ahmedabad Mirror', '998363', 'Anayata Tradecom LLP', 'AHMEDABAD,AHMEDABAD', '2019/08/08,2019/08/12', '120 Sq Cms,100 Sq Cms', 'Third Page/Back Page,Third Page/Back Page', 'Color,Color', '120,100', '540,0', '9,0', '0,0', '0,0', '58968,0', '1474.2,0', '1474.2,0', '61916.4,0', '111', '56700,0', '2268,0', 'Wasim Chippa', 0, '-'),
(25, 36, 'GUJARAT TODAY', '2019/08/14', 'Gujarat Today', '998363', 'HIMALAYA DEVELOPERS', 'AHMEDABAD', '2019/08/11', 'Qtr Page 100 CC', 'Back Page', 'Color', '100', '209.65', '12', '0', '0', '18449.2', '461.23', '461.23', '19371.66', '170', '15000', '3449.2', 'Wasim Chippa', 0, '-'),
(26, 37, 'Publicity Parlour', '2019/08/16', 'Ahmedabad Times', '998363', 'Dangee Dums', 'AHMEDABAD', '2019/08/15', '12x20', 'Inside Page', 'Color', '120', '220.14', '10', '0', '0', '23775.12', '594.378', '594.378', '24963.876', '173', '23114.7', '660.42', 'Wasim Chippa', 0, '-'),
(27, 38, 'Publicity Parlour', '2019/08/16', 'Ahmedabad Times', '998363', 'Dangee Dums', 'AHMEDABAD', '2019/08/15', '12x20', 'Inside Page', 'Color', '240', '110.07', '10', '0', '0', '23775.12', '594.378', '594.378', '24963.876', '174', '23114.7', '660.42', 'Wasim Chippa', 0, '-'),
(28, 39, 'Publicity Parlour', '2019/08/16', 'Gujarat Samachar', '998363', 'SHREEJI INFRASTRUCTURE', 'AHMEDABAD', '2019/07/04', '25x8', 'Front Page', 'Color', '200', '195', '12', '0', '0', '34320', '858', '858', '36036', '176', '33150', '1170', 'Wasim Chippa', 0, '-'),
(29, 40, 'Publicity Parlour', '2019/08/17', 'Gujarat Samachar', '998363', 'SHARANAM SOLITAIRE LLP', 'AHMEDABAD', '2019/08/17', '6 cc ( 6 cms x 1 column )', 'Appointment', 'Color', '6', '2400', '12', '0', '0', '12672', '316.8', '316.8', '13305.6', '175', '12240', '432', 'Wasim Chippa', 0, '-'),
(30, 42, 'Publicity Parlour', '2019/09/26', 'Times Property', '998363', 'Penguin Buildcon LLP', 'Ahmedabad', '2019/07/21', '12.98x10', 'Inside Page', 'Color', '130', '110', '0', '0', '0', '14300', '357.5', '357.5', '15015', '156', '12285', '2015', 'Wasim Chippa', 0, '-'),
(31, 43, 'Publicity Parlour', '2019/09/26', 'Gujarat Samachar', '998363', 'Happiness Clinic', 'Kheda - Anand', '2019/07/22', '5x1', 'Back Page', 'Color', '5', '330', '0', '0', '0', '1650', '41.25', '41.25', '1732.5', '155', '1402.5', '247.5', 'Wasim Chippa', 0, '-'),
(32, 44, 'R V Vyas Associates', '2019/09/26', 'Divya Bhaskar', '998363', 'HAJIPAR PRATHMIK SHALA', 'Gandhinagar Edition', '2019/07/18', '5cms x 2columns', 'Inside Page', 'Black & White', '10', '165', '30', '0', '0', '1155', '28.875', '28.875', '1212.75', '180', '1130', '25', 'Wasim Chippa', 0, '-'),
(33, 45, 'Publicity Parlour', '2019/09/27', 'Divya Bhaskar', '998363', 'Psy Enterprise', 'Gandhinagar Edition', '2019/07/14', '50x32', 'Back Page', 'Color', '400', '190', '32', '0', '0', '51680', '1292', '1292', '54264', '181', '46027.5', '5652.5', 'Wasim Chippa', 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `sales_radio`
--

CREATE TABLE `sales_radio` (
  `id` int(10) NOT NULL,
  `in_no` int(10) DEFAULT NULL,
  `sup` varchar(50) DEFAULT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `radio` varchar(1000) DEFAULT NULL,
  `hsn` int(10) DEFAULT NULL,
  `client` varchar(50) DEFAULT NULL,
  `sd` varchar(1000) DEFAULT NULL,
  `ed` varchar(1000) DEFAULT NULL,
  `ct` varchar(1000) DEFAULT NULL,
  `dur` varchar(1000) DEFAULT NULL,
  `spot` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT '0',
  `man` varchar(1000) DEFAULT NULL,
  `manch` varchar(1000) DEFAULT NULL,
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `ro_no` varchar(100) DEFAULT NULL,
  `p_total` varchar(1000) DEFAULT NULL,
  `profit` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `pay` int(5) NOT NULL DEFAULT 0,
  `cheque` varchar(15) NOT NULL DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_rail`
--

CREATE TABLE `sales_rail` (
  `id` int(10) NOT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `in_no` int(10) DEFAULT NULL,
  `hsn` varchar(100) DEFAULT NULL,
  `tender` varchar(20) DEFAULT NULL,
  `ten_dt` varchar(20) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `gst_type` varchar(30) DEFAULT NULL,
  `rono` varchar(30) DEFAULT NULL,
  `p_name` varchar(1000) DEFAULT NULL,
  `p_des` varchar(2500) DEFAULT NULL,
  `pl_no` varchar(1000) DEFAULT NULL,
  `dc` varchar(1000) DEFAULT NULL,
  `cc` varchar(1000) DEFAULT NULL,
  `aloc` varchar(1000) DEFAULT NULL,
  `desp` varchar(1000) DEFAULT NULL,
  `dest` varchar(1000) DEFAULT NULL,
  `quan` varchar(1000) DEFAULT NULL,
  `rate` varchar(1000) DEFAULT NULL,
  `grate` varchar(10) DEFAULT NULL,
  `dis` varchar(1000) DEFAULT NULL,
  `man` varchar(1000) DEFAULT NULL,
  `manch` varchar(1000) DEFAULT NULL,
  `amt` varchar(1000) DEFAULT NULL,
  `sgst` varchar(1000) DEFAULT NULL,
  `cgst` varchar(1000) DEFAULT NULL,
  `igst` varchar(1000) DEFAULT NULL,
  `gtotal` varchar(1000) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `p_total` varchar(200) DEFAULT NULL,
  `profit` varchar(500) DEFAULT NULL,
  `pay` int(5) NOT NULL DEFAULT 0,
  `cheque` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_details`
--

CREATE TABLE `supplier_details` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `pan` varchar(20) DEFAULT NULL,
  `gst` varchar(30) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_details`
--

INSERT INTO `supplier_details` (`id`, `name`, `street`, `area`, `city`, `state`, `pincode`, `email`, `phone`, `pan`, `gst`, `emp_name`) VALUES
(1, 'Ahmedabad Ring Road Infrastructure Ltd', 'Sadbhav House, Opp Law Garden Police Chowki', 'Ellisbridge', 'Ahmedabad', 'Gujarat', 380006, 'example@example.com', '111', 'AAFCA8978H', '24AAFCA8978H1ZA', 'Upasana Miterani'),
(2, 'Media Buzz', '204, 2nd Floor, Devashish Complex, Near Classic Go', 'OFF C.G. Road', 'Ahmedabad', 'Gujarat', 380009, 'example@example.com', '111', 'AVOPS0814K', '24AVOPS0814K2ZA', 'Upasana Miterani'),
(3, 'DB CORP LIMITED [RADIO DIVISION]', '280, Near YMCA Club, Makarba', 'S G Highway', 'Ahmedabad', 'Gujarat', 380051, 'example@example.com', '111', 'AACCM5772G', '24AACCM5772G2ZG', 'Upasana Miterani'),
(4, 'Sai Publicity', '203, 2nd Floor Shubham Complex, Opp Sanjivani Hosp', 'Vastrapur', 'Ahmedabad', 'Gujarat', 380015, 'example@example.com', '111', 'BIYPP1748R', '24BIYPP1748R1Z4', 'Upasana Miterani'),
(5, 'Publicity Parlour', '12/1, Magnet Corporate Park, B/H Intas Pharmaceuti', 'Thaltej, Hebatpur Road, Off S G Highway', 'Ahmedabad', 'Gujarat', 380054, 'example@example.com', '111', 'AABFP8415B', '24AABFP8415B1ZP', 'Upasana Miterani'),
(6, 'R V Vyas Associates', '12/1, Magnet Corporate Park, B/H Intas Pharmaceuti', 'Thaltej, Hebatpur Road, Off S G Highway', 'Ahmedabad', 'Gujarat', 380054, 'example@example.com', '111', 'AAKPV9682R', '24AAKPV9682R1ZD', 'Upasana Miterani'),
(7, 'Bennett, Coleman & Co. Ltd', '2nd Floor, Sakar-1, Near Nehru Bridge', 'Opp. Ghandhigram Rly Stn, Ashram Road', 'Ahmedabad', 'Gujarat', 380009, 'example@example.com', '111', 'AAACB4373Q', '24AAACB4373Q1ZE', 'Upasana Miterani'),
(8, 'OMS-A Division of Times Internet Ltd.', 'Times of India, 139 Fadia Chambers', 'Ashram Road', 'Ahmedabad', 'Gujarat', 380009, 'example@example.com', '111', 'AABCT1559M', '24AABCT1559M3Z3', 'Upasana Miterani'),
(9, 'Radio City', 'Sarthik II', 'SG Road', 'Ahmedabad', 'Gujarat', 380059, 'example@example.com', '111', 'CCM4036H', '24AACCM4036H1ZS', 'Upasna Miterani'),
(10, 'RED FM', 'Prahladnagar', 'Prahladnagar', 'Ahmedabad', 'Gujarat', 380059, 'example@example.com', '111', 'AAJCS6348B', '24AAJCS6348B1ZG', 'Upasna Miterani'),
(11, 'Chitra (B) publicity', 'CG Road', 'Navrangpura', 'Ahmedabad', 'Gujarat', 380059, 'example@example.com', '111', 'ACCPM8760B', '24ACCPM8760B1ZU', 'Upasna Miterani'),
(12, 'JK Advertising', 'Mithakali', 'Navrangpura', 'Ahmedabad', 'Gujarat', 380059, 'example@example.com', '111', 'AKWPS9533Q1ZV', '24AKWPS9533Q1ZV', 'Upasna Miterani'),
(13, 'The Sandesh Ltd. (Spotlight Division)', 'Lad Society Road', 'Bodakdev', 'Ahmedabad', 'Gujarat', 380059, 'example@example.com', '111', 'AAACT5730D', '24AAACT5730D1ZS', 'Upasna Miterani'),
(14, 'Diya Ads', 'Paldi', 'Navrangpura', 'Ahmedabad', 'Gujarat', 380059, 'example@example.com', '111', 'AADCD1053C', '24AADCD1053CF', 'Upasna Miterani'),
(15, 'Eagle Advertiser', '304, Swastik Complex, 17/22 Road,', ' Nr GH-5, Sector 22', 'Gandhinagar', 'Gujarat', 382022, 'example@example.com', '111', 'ACKPP7948N', '24ACKPP7948N1ZQ', 'Rajul Bhatt'),
(16, 'KRISH COMMUNICATION', '5, Prernadeep Bunglows, Opp Nirma School', 'Bodakdev', 'Ahmedabad', 'Gujarat', 380054, 'example@example.com', '111', 'ATBPP6725F', '24ATBPP6725F1ZS', 'Wasim Chippa'),
(17, 'TDI International India Private Limited', 'Head Office: 42,', 'Rani Jhansi Road', 'New Delhi', 'Uttar Pradesh', 110055, 'example@example.com', '111', 'AAACT0263D', '24AAACT0263D1ZY', 'Wasim Chippa'),
(18, 'VIPUL PUBLICITY', 'Sanskrut Complex, Opp. Income Tax Office', 'Abu Highway', 'Palanpur', 'Gujarat', 385001, 'example@example.com', '111', 'AAJCA0514H', '24AAJCA0514H1Z6', 'Wasim Chippa'),
(19, 'Advice Media', 'G/57/676, Shivam Apartment', 'Nava Vadaj', 'Ahmedabad', 'Gujarat', 380013, 'example@example.com', '111', 'AJTPG6094Q', '24AJTPG6094Q1ZA', 'Wasim Chippa'),
(20, 'GUJARAT TODAY', '33/1, Shahe - Alam', 'Shahe-Alam', 'Ahmedabad', 'Gujarat', 380028, 'example@example.com', '111', 'AAATL0684K', '24AAATL0684K1ZJ', 'Wasim Chippa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_detail`
--
ALTER TABLE `admin_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aff`
--
ALTER TABLE `aff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aff_booking`
--
ALTER TABLE `aff_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aff_sales`
--
ALTER TABLE `aff_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hcombo`
--
ALTER TABLE `hcombo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ncombo`
--
ALTER TABLE `ncombo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_hoarding`
--
ALTER TABLE `purchase_hoarding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_newspaper`
--
ALTER TABLE `purchase_newspaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_radio`
--
ALTER TABLE `purchase_radio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rcombo`
--
ALTER TABLE `rcombo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro`
--
ALTER TABLE `ro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_delete`
--
ALTER TABLE `ro_delete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_hoarding`
--
ALTER TABLE `ro_hoarding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_led`
--
ALTER TABLE `ro_led`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_newspaper`
--
ALTER TABLE `ro_newspaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_radio`
--
ALTER TABLE `ro_radio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_rail`
--
ALTER TABLE `ro_rail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_hoarding`
--
ALTER TABLE `sales_hoarding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_led`
--
ALTER TABLE `sales_led`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_newspaper`
--
ALTER TABLE `sales_newspaper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_radio`
--
ALTER TABLE `sales_radio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_rail`
--
ALTER TABLE `sales_rail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_details`
--
ALTER TABLE `supplier_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_detail`
--
ALTER TABLE `admin_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aff`
--
ALTER TABLE `aff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aff_booking`
--
ALTER TABLE `aff_booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aff_sales`
--
ALTER TABLE `aff_sales`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `combo`
--
ALTER TABLE `combo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hcombo`
--
ALTER TABLE `hcombo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `ncombo`
--
ALTER TABLE `ncombo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `purchase_hoarding`
--
ALTER TABLE `purchase_hoarding`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `purchase_newspaper`
--
ALTER TABLE `purchase_newspaper`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `purchase_radio`
--
ALTER TABLE `purchase_radio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rcombo`
--
ALTER TABLE `rcombo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ro`
--
ALTER TABLE `ro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `ro_delete`
--
ALTER TABLE `ro_delete`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ro_hoarding`
--
ALTER TABLE `ro_hoarding`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ro_led`
--
ALTER TABLE `ro_led`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ro_newspaper`
--
ALTER TABLE `ro_newspaper`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `ro_radio`
--
ALTER TABLE `ro_radio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ro_rail`
--
ALTER TABLE `ro_rail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_hoarding`
--
ALTER TABLE `sales_hoarding`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sales_led`
--
ALTER TABLE `sales_led`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_newspaper`
--
ALTER TABLE `sales_newspaper`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sales_radio`
--
ALTER TABLE `sales_radio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_rail`
--
ALTER TABLE `sales_rail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_details`
--
ALTER TABLE `supplier_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
