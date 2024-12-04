-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 03:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoplaptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `acer`
--

CREATE TABLE `acer` (
  `productID` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `amount` int(10) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `detail` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acer`
--

INSERT INTO `acer` (`productID`, `productName`, `amount`, `image`, `price`, `detail`) VALUES
(1, 'Laptop Acer Nitro 5', 15, 'Laptop Acer Nitro 5 AN515-45-R9SC.png', 30000, 'chi tiết nè'),
(2, 'Laptop Acer Nitro 5', 5, 'Laptop Acer Nitro 5 Eagle AN515-57-77KU.png', 24000, 'chi tiết nè'),
(3, 'Laptop Acer Predator', 30, 'Laptop Acer Predator Helios 300 PH315-54-74RU.png', 25000, 'chi tiết nè'),
(4, 'Laptop Acer Predator', 20, 'Laptop Acer Predator Helios 300 PH315-54-74RU.png', 19000, 'chi tiết nè');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fullname` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `password`, `fullname`) VALUES
(1, 'admin', 'admin\'s name');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `fullname` varchar(40) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `fullname`, `password`, `address`, `city`) VALUES
(24, 'quangopi45', 'c4ca4238a0b923820dcc509a6f75849b', '1233321', 'Minh Quang'),
(25, 'quang', '698d51a19d8a121ce581499d7b701668', 'Minh Quang', '12345'),
(26, 'tu', 'c4ca4238a0b923820dcc509a6f75849b', 'Hoai Tu', '123 Dap da'),
(29, 'dangminhquang1401@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Nguyen Van A', '111 TP HCM'),
(52, 'quangopi2501@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Minh Quang', '111 Thủ Đức');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(11) DEFAULT NULL,
  `detail_order` int(100) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `gia` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keyboard`
--

CREATE TABLE `keyboard` (
  `productID` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `amount` int(10) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `detail` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keyboard`
--

INSERT INTO `keyboard` (`productID`, `productName`, `amount`, `image`, `price`, `detail`) VALUES
(1, 'Corsair', 10, 'corsair.png', 15000, 'chi tiết nè'),
(2, 'Dareu', 15, 'dareu.png', 60000, 'chi tiết nè'),
(3, 'Logitech', 15, 'logitech.png', 80000, 'chi tiết nè'),
(4, 'Razer', 50, 'Razer.png', 30000, 'chi tiết nè');

-- --------------------------------------------------------

--
-- Table structure for table `keybroad`
--

CREATE TABLE `keybroad` (
  `productID` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `amount` int(10) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keybroad`
--

INSERT INTO `keybroad` (`productID`, `productName`, `amount`, `image`, `price`, `id_category`) VALUES
(1, 'Corsair', 15, 'corsair.png', 1000000, 11),
(2, 'Dareu', 30, 'dareu.png', 100000, 11),
(3, 'Logitech', 10, 'logitech.png', 2000000, 11),
(4, 'Razer', 20, 'razer.png', 2500000, 11);

-- --------------------------------------------------------

--
-- Table structure for table `mouse`
--

CREATE TABLE `mouse` (
  `productID` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `amount` int(10) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `detail` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mouse`
--

INSERT INTO `mouse` (`productID`, `productName`, `amount`, `image`, `price`, `detail`) VALUES
(1, 'Corsair', 15, 'chuotcorsair.png', 25000, 'chi tiết nè'),
(2, 'Dareu', 17, 'chuotdareu.png', 35000, 'chi tiết nè'),
(3, 'Logitech', 15, 'chuotlogitech.png', 50000, 'chi tiết nè'),
(4, 'Razer', 15, 'chuotrazer.png', 45000, 'chi tiết nè');

-- --------------------------------------------------------

--
-- Table structure for table `msi`
--

CREATE TABLE `msi` (
  `productID` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `amount` int(10) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `detail` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msi`
--

INSERT INTO `msi` (`productID`, `productName`, `amount`, `image`, `price`, `detail`) VALUES
(1, 'Laptop Gaming MSI', 17, 'Laptop Gaming MSI GF65 Thin 10UE 228VN.png', 24000, 'chi tiết nè'),
(2, 'Laptop Gaming MSI', 15, 'Laptop Gaming MSI GS66 Stealth 10UE 200VN.png', 24000, 'chi tiết nè'),
(3, 'Laptop Gaming MSI', 20, 'Laptop Gaming MSI Katana GF66 11UC 676VN.png', 20000, 'chi tiết nè'),
(4, 'Laptop Gaming MSI', 30, 'Laptop MSI Creator 17 B11UG 601VN.png', 25000, 'chi tiết nè');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ordersID` int(11) NOT NULL,
  `id_customers` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `total` float DEFAULT NULL,
  `note` text DEFAULT NULL,
  `order_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordersID`, `id_customers`, `created_at`, `total`, `note`, `order_type`) VALUES
(148, 'dangminhquang1401@gmail.com', '2022-06-08 14:34:21', 49000, 'Bàn phím logitech\r\nLaptop Gaming MSI', ''),
(159, 'dangminhquang1401@gmail.com', '2022-06-13 07:24:00', 36111, 'Chuột Logit', ''),
(160, 'dangminhquang1401@gmail.com', '2022-06-13 07:26:43', 10000, 'Laptop Asus ROG', 'momo_wallet'),
(161, 'dangminhquang1401@gmail.com', '2022-06-15 12:53:37', 10000, 'Laptop Asus ROG', ''),
(166, 'quangopi2501@gmail.com', '2022-06-15 14:13:32', 11111, 'Chuột Logit', ''),
(167, 'quangopi2501@gmail.com', '2022-06-15 14:15:02', 11111, 'Chuột Logit', 'momo_wallet');

-- --------------------------------------------------------

--
-- Table structure for table `ordersmomo`
--

CREATE TABLE `ordersmomo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `order_info` varchar(100) NOT NULL,
  `order_type` varchar(100) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pay_type` varchar(100) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordersmomo`
--

INSERT INTO `ordersmomo` (`id_momo`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`, `code_cart`) VALUES
(1, 'MOMOBKUN20180529', 1654416544, '10000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '5421'),
(2, 'MOMOBKUN20180529', 1654419370, '10000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '3854'),
(3, 'MOMOBKUN20180529', 1654419370, '10000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '2378'),
(4, 'MOMOBKUN20180529', 1654419370, '10000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '6580'),
(5, 'MOMOBKUN20180529', 1654419837, '10000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '9403'),
(17, 'MOMOBKUN20180529', 1654421108, '26000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 0, '', '2431'),
(18, 'MOMOBKUN20180529', 1654421108, '26000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 0, '', '3586'),
(19, 'MOMOBKUN20180529', 1654497139, '25000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '3497'),
(20, 'MOMOBKUN20180529', 1654497139, '25000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '9813'),
(21, 'MOMOBKUN20180529', 1654497139, '25000', 'Thanh toán qua MoMo ATM', 'momo_wallet', 2147483647, 'napas', '8170'),
(22, 'MOMOBKUN20180529', 1654497684, '25000', 'Laptop Lenovo 4', 'momo_wallet', 2147483647, 'napas', '4609'),
(23, 'MOMOBKUN20180529', 1654497967, '25000', 'Laptop Lenovo 4', 'momo_wallet', 2147483647, 'napas', '8120'),
(24, 'MOMOBKUN20180529', 1654674599, '24000', 'Logitech', 'momo_wallet', 2147483647, 'napas', '5875'),
(25, 'MOMOBKUN20180529', 1654674862, '10000', 'Laptop Asus ROG', 'momo_wallet', 2147483647, 'napas', '7519'),
(26, 'MOMOBKUN20180529', 1654691885, '24000', 'Chuột Logit', 'momo_wallet', 2147483647, 'napas', '8988'),
(27, 'MOMOBKUN20180529', 1655097226, '36111', 'Chuột Logit', 'momo_wallet', 2147483647, 'napas', '8178'),
(28, 'MOMOBKUN20180529', 1655097536, '15000', 'Laptop Asus TUF', 'momo_wallet', 2147483647, 'napas', '4835'),
(29, 'MOMOBKUN20180529', 1655097961, '10000', 'Laptop Asus ROG', 'momo_wallet', 2147483647, 'napas', '8057'),
(30, 'MOMOBKUN20180529', 1655291095, '10000', 'Laptop Asus ROG', 'momo_wallet', 2147483647, 'napas', '9624'),
(31, 'MOMOBKUN20180529', 1655291455, '10000', 'Laptop Asus ROG', 'momo_wallet', 2147483647, 'napas', '9072'),
(32, 'MOMOBKUN20180529', 1655294570, '10000', 'Laptop Asus ROG', 'momo_wallet', 2147483647, 'napas', '2053'),
(33, 'MOMOBKUN20180529', 1655295262, '11111', 'Chuột Logit', 'momo_wallet', 2147483647, 'napas', '747');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) DEFAULT NULL,
  `otp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `id` int(11) NOT NULL,
  `otp` varchar(100) NOT NULL,
  `is_expired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_expiry`
--

INSERT INTO `otp_expiry` (`id`, `otp`, `is_expired`) VALUES
(1, '983821', 0),
(2, '906560', 0),
(3, '512804', 0),
(4, '741953', 0),
(5, '571681', 0),
(6, '291432', 0),
(7, '951916', 0),
(8, '330262', 0),
(9, '683240', 0),
(10, '520826', 0),
(11, '214555', 0),
(12, '933059', 0),
(13, '181526', 0),
(14, '787982', 0),
(15, '629520', 0),
(16, '973421', 0),
(17, '206339', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `amount` int(10) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `detail` varchar(11) DEFAULT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `amount`, `image`, `price`, `detail`, `id_type`) VALUES
(15, 'Laptop Asus PRN', 11000, 'Laptop Asus ROG Strix G15 G513QM-HF389T.png', 26000, 'chi tiết nè', 1),
(16, 'Laptop Asus ROG', 30, 'Laptop Asus ROG Zephyrus Duo 15 SE GX551QR-HF080T.png', 10000, 'chi tiết nè', 1),
(17, 'Laptop Asus TUF', 50, 'Laptop Asus TUF A15 FA506QM-HN016T.png', 15000, 'chi tiết nè', 1),
(21, 'Laptop Asus GOD', 30, 'Laptop Asus TUF A15 FA506QR-AZ003T.png', 12000, 'chi tiết nè', 1),
(32, 'Laptop Lenovo 1', 55, 'Laptop Lenovo Legion 5 15ACH6H (82JU00EXVN)Laptop Lenovo Legion 5 15ACH6H (82JU00EXVN).png', 20000, 'chi tiết nè', 2),
(33, 'Laptop Lenovo 2', 55, 'Laptop Lenovo Legion 5 15IMH05H (82AU00PQVN).png', 23000, 'chi tiết nè', 2),
(34, 'Laptop Lenovo 3', 87, 'Laptop Lenovo Legion 5 Pro 16ACH6H (82JQ001VVN).png', 25000, 'chi tiết nè', 2),
(35, 'Laptop Lenovo 4', 87, 'Laptop Lenovo Legion 5 Pro 16ACH6H (82JQ001VVN).png', 25000, 'chi tiết nè', 2),
(36, 'Laptop Acer Nitro 5', 22, 'Laptop Acer Nitro 5 AN515-45-R9SC.png', 25000, 'chi tiết nè', 3),
(37, 'Laptop Acer Nitro 5', 87, 'Laptop Acer Nitro 5 Eagle AN515-57-77KU.png', 24000, 'chi tiết nè', 3),
(39, 'Laptop Acer Predator\r\n', 87, 'Laptop Acer Predator Helios 300 PH315-54-74RU.png', 24000, 'chi tiết nè', 3),
(40, 'Laptop Acer Predator', 22, 'Laptop Acer Predator Helios 300 PH315-54-74RU.png', 10000, 'chi tiết nè', 3),
(42, 'Bàn phím dareu', 24, 'dareu.png', 10000, 'chi tiết nè', 4),
(43, 'Bàn phím logitech', 11000, 'logitech.png', 25000, 'chi tiết nè', 4),
(44, 'Bàn phím Razer', 24, 'Razer.png', 12000, 'chi tiết nè', 4),
(45, 'Chuột Corsair', 55, 'chuotcorsair.png', 25000, 'chi tiết nè', 5),
(46, 'Chuột Dareu', 11000, 'chuotdareu.png', 20000, 'chi tiết nè', 5),
(47, 'Chuột Logit', 22, 'chuotlogitech.png', 11111, 'chi tiết nè', 5),
(48, 'Chuột Sửa', 22, 'ch.PNG', 11111, 'chi tiết nè', 5),
(49, 'Laptop Gaming MSI', 22, 'Laptop Gaming MSI GF65 Thin 10UE 228VN.png', 24000, 'chi tiết nè', 6),
(50, 'Laptop Gaming MSI', 87, 'Laptop Gaming MSI GS66 Stealth 10UE 200VN.png', 24000, 'chi tiết nè', 6),
(51, 'Laptop Gaming MSI', 55, 'Laptop Gaming MSI Katana GF66 11UC 676VN.png', 24000, 'chi tiết nè', 6),
(52, 'Laptop MSI Gaming', 24, 'Laptop MSI Creator 17 B11UG 601VN.png', 30000, 'chi tiết nè', 6),
(54, 'Bàn phím Cosair', 20, 'corsair.png', 20000, 'chi tiet', 4),
(57, 'Thêm SP', 502, 'chuotcorsair.png', 11111, 'chi tiet', 2);

-- --------------------------------------------------------

--
-- Table structure for table `productsell`
--

CREATE TABLE `productsell` (
  `productsellID` int(11) NOT NULL,
  `productsellName` varchar(200) NOT NULL,
  `amount` int(10) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `detail` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productsell`
--

INSERT INTO `productsell` (`productsellID`, `productsellName`, `amount`, `image`, `price`, `detail`) VALUES
(1, 'Laptop Acer Nitro', 5, 'Laptop Acer Nitro 5 AN515-45-R9SC.png', 30, '10'),
(2, 'Laptop Acer Nitro', 30, 'Laptop Acer Nitro 5 Eagle AN515-57-77KU.png', 20, '10'),
(3, 'Laptop Acer Predi', 15, 'Laptop Acer Predator Helios 300 PH315-54-74RU.png', 19, '10'),
(4, 'Laptop Acer Predi', 35, 'Laptop Acer Predator Triton 300 PT315-53-71DJ.png', 35, '10');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) DEFAULT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acer`
--
ALTER TABLE `acer`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `keyboard`
--
ALTER TABLE `keyboard`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `keybroad`
--
ALTER TABLE `keybroad`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `msi`
--
ALTER TABLE `msi`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordersID`);

--
-- Indexes for table `ordersmomo`
--
ALTER TABLE `ordersmomo`
  ADD PRIMARY KEY (`id_momo`);

--
-- Indexes for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `productsell`
--
ALTER TABLE `productsell`
  ADD PRIMARY KEY (`productsellID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acer`
--
ALTER TABLE `acer`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `keyboard`
--
ALTER TABLE `keyboard`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keybroad`
--
ALTER TABLE `keybroad`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mouse`
--
ALTER TABLE `mouse`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `msi`
--
ALTER TABLE `msi`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ordersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `ordersmomo`
--
ALTER TABLE `ordersmomo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `productsell`
--
ALTER TABLE `productsell`
  MODIFY `productsellID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
