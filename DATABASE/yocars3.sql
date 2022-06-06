-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 07:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yocars3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `areaid` int(30) NOT NULL,
  `areaname` varchar(100) NOT NULL,
  `cityid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`areaid`, `areaname`, `cityid`) VALUES
(12, 'Adarsh Nagar', 1202),
(13, 'Ajit Nagar', 1202),
(14, 'Hall Bazar', 1202),
(15, 'Mall Road', 1202),
(18, 'Ranjit Nagar', 1203),
(21, 'Brown Road', 1204),
(22, 'Bharat Nagar', 1204),
(23, 'Dholewal Chowk', 1204),
(26, 'basant avenue', 1202),
(28, 'East mohan nagar', 1202),
(31, 'Adarsh nagar', 1203),
(32, 'Shakti nagar', 1203),
(33, 'Puri market', 1203),
(34, 'Prem nagar', 1204),
(35, 'Santokh nagar', 1204),
(37, 'Nehru rose garden', 1204),
(38, 'Dadar', 1206),
(39, 'Wadala', 1206),
(40, 'Kurla West', 1206),
(41, 'Patel park', 1206),
(42, 'Kamal park', 1207),
(43, 'Dara Shikoh road', 1207),
(44, 'Rajiv chowk', 1207),
(45, 'Janpath', 1207),
(47, 'Khan market', 1207),
(48, 'Lajpat nagar', 1207),
(49, 'Sector 44', 1208),
(50, 'Sector 45', 1208),
(51, 'Sector 17', 1208),
(52, 'Sector 7', 1208),
(53, 'Civil lines', 1209),
(54, 'Vir nagar', 1209),
(55, 'Madanpuri', 1209),
(56, 'Geeta bhawan colony', 1209),
(57, 'Jinke park', 1210),
(58, 'Rajajinagar', 1210),
(59, 'Indira nagar', 1210),
(60, 'Navrangpura', 1211),
(61, 'Bapunagar', 1211),
(62, 'Sahibaug society', 1211),
(63, 'Nehru Nagar', 1212),
(64, 'Laxmi narayan mandir', 1212),
(65, 'Abrol Nagar', 1212);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `no_of_days` int(5) NOT NULL,
  `gst_percent` varchar(5) NOT NULL,
  `grand_total` int(10) NOT NULL,
  `bill_date` date NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `no_of_days`, `gst_percent`, `grand_total`, `bill_date`, `booking_id`) VALUES
(2, 3, '12', 16800, '2021-09-03', 2),
(3, 7, '12', 39200, '2021-09-04', 7),
(4, 1, '12', 5600, '2021-11-28', 14),
(5, 1, '12', 5600, '2021-11-28', 14);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `area_id` int(30) NOT NULL,
  `city_id` int(30) NOT NULL,
  `mycar_id` int(30) NOT NULL,
  `driving_license` varchar(50) NOT NULL,
  `aadhaar_number` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `payment_status` varchar(15) NOT NULL,
  `book_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `username`, `area_id`, `city_id`, `mycar_id`, `driving_license`, `aadhaar_number`, `start_date`, `end_date`, `payment_status`, `book_status`) VALUES
(2, 'user', 12, 1202, 20, '123', '123', '2021-09-05', '2021-09-08', 'paid', 1),
(3, 'user', 14, 1202, 20, '123', '123', '2021-09-04', '2021-09-06', 'pending', 1),
(7, 'user', 13, 1202, 20, 'ss2772', '222', '2021-12-12', '2021-12-19', 'paid', 2),
(9, 'user', 18, 1203, 20, 'jdds78', '7q63872687', '2021-12-12', '2022-12-11', 'pending', 1),
(10, 'user', 18, 1203, 20, '656556', '7878696', '2021-10-19', '2021-10-25', 'pending', 2),
(11, 'user', 12, 1202, 21, 'nbfhgdukfl', '34873489479', '2022-12-12', '2022-12-15', 'pending', 1),
(12, 'user', 15, 1202, 20, 'ahjahjkshdjk', '455555556468', '2021-12-12', '2021-12-13', 'pending', 0),
(13, 'user', 15, 1202, 20, 'ygyuyuttgtgu`', '5467897653567890', '2021-12-12', '2022-12-12', 'pending', 1),
(14, 'user', 14, 1202, 20, 'sdsfdsf', 'sfsdfsdf', '2021-12-12', '2021-12-13', 'paid', 1),
(15, 'user', 13, 1202, 20, 'PB02DL777656q877', '451200148856', '2021-12-12', '2021-12-15', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cityid` int(30) NOT NULL,
  `cityname` varchar(100) NOT NULL,
  `postalcode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cityid`, `cityname`, `postalcode`) VALUES
(1202, 'Amritsar', '143001'),
(1203, 'Jalandhar', '143002'),
(1204, 'Ludhiana', '143003'),
(1206, 'Mumbai', '400001'),
(1207, 'New Delhi', '110001'),
(1208, 'Chandigarh', '133301'),
(1209, 'Gurugram', '110038'),
(1210, 'Banglore', '530068'),
(1211, 'AHEMDABAD', '320008'),
(1212, 'Pathankot', '145001');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` varchar(250) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `mobile`, `message`, `answer`, `cid`) VALUES
('bittu', 'bittubittu@yahoo.in', '9872246157', 'do you give audi on rent?', '', 2),
('manish', 'manishkhann11@gmail.com', '7785496338', 'Do you serve in sitapur?', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `fourwheelers`
--

CREATE TABLE `fourwheelers` (
  `BrandID` int(11) NOT NULL,
  `Brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fourwheelers`
--

INSERT INTO `fourwheelers` (`BrandID`, `Brand`) VALUES
(1, 'Audi'),
(19, 'BMW'),
(12, 'Fiat'),
(7, 'Honda'),
(2, 'Hyundai'),
(18, 'Jeep'),
(6, 'Kia'),
(5, 'Mahindra'),
(4, 'Maruti Suzuki'),
(20, 'Mercedes'),
(14, 'MG'),
(17, 'Renault'),
(16, 'Skoda'),
(11, 'Tata'),
(15, 'Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `rentalareas`
--

CREATE TABLE `rentalareas` (
  `rental_areaid` int(11) NOT NULL,
  `areaid` int(11) NOT NULL,
  `cityid` int(11) NOT NULL,
  `rentalid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentalareas`
--

INSERT INTO `rentalareas` (`rental_areaid`, `areaid`, `cityid`, `rentalid`) VALUES
(3, 15, 1202, 5),
(4, 14, 1202, 5),
(5, 18, 1203, 5),
(6, 21, 1204, 5),
(7, 12, 1202, 5),
(8, 13, 1202, 5),
(9, 22, 1204, 5),
(10, 28, 1202, 2),
(11, 33, 1203, 2),
(12, 32, 1203, 2),
(13, 37, 1204, 2),
(14, 35, 1204, 2),
(15, 40, 1206, 2),
(16, 38, 1206, 2),
(17, 39, 1206, 2),
(18, 41, 1206, 2),
(19, 42, 1207, 2),
(20, 43, 1207, 1),
(21, 44, 1207, 1),
(22, 45, 1207, 1),
(23, 47, 1207, 1),
(24, 48, 1207, 1),
(25, 49, 1208, 1),
(26, 50, 1208, 1),
(27, 51, 1208, 1),
(28, 52, 1208, 1),
(29, 53, 1209, 1),
(30, 54, 1209, 1),
(31, 55, 1209, 1),
(32, 56, 1209, 1),
(33, 57, 1210, 1),
(34, 58, 1210, 1),
(35, 59, 1210, 1),
(36, 61, 1211, 1),
(37, 60, 1211, 1),
(38, 62, 1211, 1),
(39, 63, 1212, 1),
(40, 64, 1212, 1),
(41, 65, 1212, 1),
(42, 26, 1202, 1),
(43, 13, 1202, 1),
(44, 31, 1203, 1),
(45, 23, 1204, 1),
(46, 35, 1204, 1),
(47, 34, 1204, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rentalcars`
--

CREATE TABLE `rentalcars` (
  `id` int(30) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `model` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL,
  `conditions` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `rc_pic` varchar(200) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `insurance_validity` varchar(100) NOT NULL,
  `rent` int(10) NOT NULL,
  `rental_id` int(11) NOT NULL,
  `approve` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentalcars`
--

INSERT INTO `rentalcars` (`id`, `Company`, `car_name`, `model`, `color`, `conditions`, `description`, `photo`, `rc_pic`, `reg_no`, `insurance_validity`, `rent`, `rental_id`, `approve`) VALUES
(20, 'Audi', 'R8', '2021', 'Red', 'Good', 'Great CAr beautiful mesmerizing book it now......Great CAr beautiful mesmerizing book it now......Great CAr beautiful mesmerizing book it now......Great CAr beautiful mesmerizing book it now......', 'uploads/Audi-R8.png', 'uploads/tick.png', '123', '2021-09-30', 5000, 5, 2),
(21, 'Hyundai', 'Creta', '2012', 'white', 'new', 'creta car available', 'uploads/2020-hyundai-ix25-2020-hyundai-creta-white-front-t-3cd9.jpg', 'uploads/2021-07-03.png', 'pb02bb9090', '2023-12-12', 4000, 5, 2),
(24, 'Kia', 'Seltos', '2020', 'Maroon', 'brand new', 'Excellent  car for long tours', 'uploads/seltos-exterior-right-front-three-quarter-3.jpeg', 'uploads/download.jfif', '5373721436', '2022-11-17', 25000, 2, 1),
(25, 'Skoda', 'kushaq', '2020', 'grey', 'excellent', 'excellent for long tours', 'uploads/20210426124920_Skoda_Kushaq_white.jpg', 'uploads/download.jfif', '2454767698', '2023-07-19', 18000, 2, 1),
(26, 'Toyota', ' supra', '2019', 'black', 'brand new', 'excellent car for one day trip', 'uploads/2021_toyota_gr_supra_angularfront.jpg', 'uploads/download.jfif', '7467467467', '2022-05-27', 30000, 2, 1),
(27, 'BMW', '3 series', '2018', 'maroon', 'brand new', 'purely made for royal people', 'uploads/BMW-3-Series-Right-Front-Three-Quarter-86766.jpg', 'uploads/download.jfif', '647847875875', '2023-02-12', 150000, 1, 0),
(28, 'Fiat', 'Linea', '2021', 'blue', 'brand new', 'excellent for long tours', 'uploads/Fiat_Linea_1.4_TJet_Dynamic_2010_(16452173783).jpg', 'uploads/download.jfif', '64874784874', '2023-12-28', 32000, 1, 1),
(29, 'Jeep', 'Wrangler', '2019', 'blue', 'good', 'excellent for long tours', 'uploads/jeep-wrangler-my21-rubicon-2d-hydro-blue.png', 'uploads/download.jfif', '5758689997', '2022-05-28', 35000, 1, 1),
(30, 'MG', 'Astor', '2021', 'maroon', 'brand new', 'excellect car with AI assistant', 'uploads/mg-astor.jpg', 'uploads/download.jfif', '8686898989', '2024-06-28', 35000, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `aadharnumber` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `approve` int(11) NOT NULL DEFAULT 0,
  `id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`name`, `mobile`, `email`, `password`, `aadharnumber`, `address`, `approve`, `id`) VALUES
('suryakumar', '9876578977', 'suryakumar11@gmail.com', 'adminsurya', '621799034568', '101,albert road,amritsar', 1, 1),
('rahul', '9876466448', 'rahultandon@gmail.com', '12345678', '329175640009', '99,Shastri market ,amritsar', 2, 2),
('Rajesh', '1234567898', 'rental@yahoo.com', '123', '123', '101,albert road,amritsar', 1, 5),
('Shashi', '9844586320', 'shashikumar33@gmail.com', 'shashi778', '456881230865', '191,pap chowk,jalandhar', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `rentaltwowheelers`
--

CREATE TABLE `rentaltwowheelers` (
  `id` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `model_year` year(4) NOT NULL,
  `color` varchar(20) NOT NULL,
  `conditions` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `rc_pic` varchar(100) NOT NULL,
  `reg_no` varchar(20) NOT NULL,
  `insurance_validity` date NOT NULL,
  `rent` int(11) NOT NULL,
  `rental_id` int(11) NOT NULL,
  `approve` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentaltwowheelers`
--

INSERT INTO `rentaltwowheelers` (`id`, `company`, `model_name`, `model_year`, `color`, `conditions`, `description`, `photo`, `rc_pic`, `reg_no`, `insurance_validity`, `rent`, `rental_id`, `approve`) VALUES
(4, 'TVS', 'Apache', 2018, 'White', 'New', 'tvs apache for rent available at a reasonable price', 'uploads/apache.jpg', 'uploads/apache rc.jpg', 'pb02ap2215', '2023-02-12', 1600, 0, 1),
(6, 'Royal Enfield', 'Classic 350', 2018, 'black', 'good condition', 'purely made for classic people', 'uploads/Royal-Enfield-Classic-350-130120211558.png', 'uploads/download.jfif', '35643645', '2022-02-02', 15000, 2, 0),
(7, 'Yamaha', 'yamaha fz-x', 2019, 'black', 'brand new', 'sports bike', 'uploads/Yamaha-FZ-X-featured-2.jpg', 'uploads/download.jfif', '325346475', '2022-03-18', 15000, 2, 1),
(8, 'Hero', 'hero glamour', 2020, 'red', 'good', 'excellent for long tours', 'uploads/hero-glamour-125cc-bs6-500x500.png', 'uploads/download.jfif', '7478757875', '2023-08-28', 18000, 2, 0),
(9, 'Honda', 'Honda unicorn', 2018, 'black', 'excellent', 'it is a good bike with good average', 'uploads/unicorn-right-front-three-quarter.jpeg', 'uploads/download.jfif', '4654754865', '2023-04-19', 19000, 1, 0),
(10, 'TVS', 'TVS apache RTR 200 4V', 2020, 'black', 'brand new', 'it,s a good sports bike with good average', 'uploads/tvs-apache-rtr-200-4v-single-channel-abs--bs-vi20200922135525.jpg', 'uploads/download.jfif', '75747874787', '2022-05-28', 18000, 1, 0),
(11, 'Bajaj', 'bajaj avenger cruise 220', 2020, 'black', 'excellent', 'it,s a good bike with good average', 'uploads/x.pagespeed.ic.L6rAhx0hbN.jpg', 'uploads/download.jfif', '787478478487', '2022-01-28', 19000, 1, 0),
(12, 'TVS', 'Apache ', 2018, 'white', 'new', 'good bike for long tours', 'uploads/TVS-Apache-RTR-180-Front-three-quarter-2265.jpg', 'uploads/download.jfif', '1324325325', '2023-07-06', 20000, 1, 0),
(13, 'Royal Enfield', 'Classic 350', 2018, 'black', 'good condition', 'excellent bike for royal people', 'uploads/Royal-Enfield-Classic-350-130120211558.png', 'uploads/download.jfif', '86868968', '2022-11-25', 34000, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(30) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `mobile`, `email`, `username`, `password`, `confirm_pass`) VALUES
('Jagan', 2147483647, 'jagankhanna@gmail.com', 'jagankhanna', 'khana102', 'khana102'),
('mohit', 2147483647, 'mohitkumar11@gmail.com', 'mohitkumar56', 'mohit456', 'mohit456'),
('Paras', 2147483647, 'puriparas11@gmail.com', 'paraspuri', 'paras@121', 'paras@121'),
('User', 1234567898, 'user@yahoo.com', 'user', 'user', '123');

-- --------------------------------------------------------

--
-- Table structure for table `twowheelers`
--

CREATE TABLE `twowheelers` (
  `BrID` int(11) NOT NULL,
  `Brand` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `twowheelers`
--

INSERT INTO `twowheelers` (`BrID`, `Brand`) VALUES
(14, 'Apache'),
(16, 'Bajaj'),
(15, 'Hero'),
(7, 'Honda'),
(19, 'Mahindra'),
(18, 'Royal Enfield'),
(2, 'TVS'),
(17, 'Yamaha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`areaid`),
  ADD KEY `cityid` (`cityid`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `username` (`username`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `mycar_id` (`mycar_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `message` (`message`);

--
-- Indexes for table `fourwheelers`
--
ALTER TABLE `fourwheelers`
  ADD PRIMARY KEY (`BrandID`),
  ADD UNIQUE KEY `Brand` (`Brand`);

--
-- Indexes for table `rentalareas`
--
ALTER TABLE `rentalareas`
  ADD PRIMARY KEY (`rental_areaid`),
  ADD KEY `areaid` (`areaid`),
  ADD KEY `cityid` (`cityid`),
  ADD KEY `rentalid` (`rentalid`);

--
-- Indexes for table `rentalcars`
--
ALTER TABLE `rentalcars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rental_id` (`rental_id`),
  ADD KEY `Company_2` (`Company`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentaltwowheelers`
--
ALTER TABLE `rentaltwowheelers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company` (`company`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `twowheelers`
--
ALTER TABLE `twowheelers`
  ADD PRIMARY KEY (`BrID`),
  ADD UNIQUE KEY `Brand` (`Brand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `areaid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cityid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1213;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fourwheelers`
--
ALTER TABLE `fourwheelers`
  MODIFY `BrandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rentalareas`
--
ALTER TABLE `rentalareas`
  MODIFY `rental_areaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `rentalcars`
--
ALTER TABLE `rentalcars`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rentaltwowheelers`
--
ALTER TABLE `rentaltwowheelers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `twowheelers`
--
ALTER TABLE `twowheelers`
  MODIFY `BrID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `cities` (`cityid`);

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`username`) REFERENCES `signup` (`username`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `areas` (`areaid`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `cities` (`cityid`),
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`mycar_id`) REFERENCES `rentalcars` (`id`);

--
-- Constraints for table `rentalareas`
--
ALTER TABLE `rentalareas`
  ADD CONSTRAINT `rentalareas_ibfk_1` FOREIGN KEY (`areaid`) REFERENCES `areas` (`areaid`),
  ADD CONSTRAINT `rentalareas_ibfk_2` FOREIGN KEY (`cityid`) REFERENCES `cities` (`cityid`),
  ADD CONSTRAINT `rentalareas_ibfk_3` FOREIGN KEY (`rentalid`) REFERENCES `rentals` (`id`);

--
-- Constraints for table `rentalcars`
--
ALTER TABLE `rentalcars`
  ADD CONSTRAINT `rentalcars_ibfk_1` FOREIGN KEY (`Company`) REFERENCES `fourwheelers` (`Brand`),
  ADD CONSTRAINT `rentalcars_ibfk_2` FOREIGN KEY (`rental_id`) REFERENCES `rentals` (`id`);

--
-- Constraints for table `rentaltwowheelers`
--
ALTER TABLE `rentaltwowheelers`
  ADD CONSTRAINT `rentaltwowheelers_ibfk_1` FOREIGN KEY (`company`) REFERENCES `twowheelers` (`Brand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
