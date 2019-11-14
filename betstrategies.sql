-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 12:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `betstrategies`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(255) NOT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `trxn_key` varchar(255) DEFAULT NULL,
  `count` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `reference`, `amount`, `email`, `trxn_key`, `count`) VALUES
(1, '252901212', '3000', 'tgblinkss@gmail.com', NULL, NULL),
(2, '252901212', '3000', 'tgblinkss@gmail.com', NULL, NULL),
(3, '375353453', '3000', 'tgblinkss@gmail.com', NULL, NULL),
(4, '350556259', '3000', 'tgblinkss@gmail.com', NULL, NULL),
(5, '871769620', '3000', 'tgblinkss@gmail.com', NULL, NULL),
(6, '960300249', '3000', 'tgblinkss@gmail.com', NULL, NULL),
(7, '682842074', '3000', 'tgblinkss@gmail.com', NULL, NULL),
(8, '688814414', '3000', 'tgblinkss@gmail.com', '7d5e880d4d3b92d9b1a2c108a3326156', '0 '),
(9, '375673564', '3000', 'tgblinkss@gmail.com', 'd87e0a17ad1f6b317cf8570b8257332d', '1'),
(10, '821185750', '3000', 'tgblinkss@gmail.com', 'bbb036475c85a268277a562990447db4', '1'),
(11, '314854171', '3000', 'tgblinkss@gmail.com', 'aece0f32023c66124bfb9f14286fa93b', '1'),
(12, '571660099', '3000', 'tgblinkss@gmail.com', '93753ddd6944bc27e3fb320a431ecab5', '1'),
(13, '580117856', '3000', 'tgblinkss@gmail.com', 'e7039d06f10fe75b3e7e40a49f3636b2', '1'),
(14, '721979425', '3000', 'tgblinkss@gmail.com', 'b94af5101e9ffd8947253a4066c7c92e', '1'),
(15, '688776161', '3000', 'tgblinkss@gmail.com', 'bf5ef12fd4d9d56e8ef17462ab4749fe', '1'),
(16, '972433997', '3000', 'tgblinkss@gmail.com', 'b4c02908d410b2987a44489592dd55e6', '1'),
(17, '572764284', '3000', 'tgblinkss@gmail.com', 'dfbae538ccd6c62cab7c9ef44a756363', '1'),
(18, '176200503', '3000', 'tgblinkss@gmail.com', '3def3916436e1b7dcb2b1a829ee43a68', '1'),
(19, '228971169', '3000', 'tgblinkss@gmail.com', 'a32a61b93ad50deb575ff7ea66d45a34', '1'),
(20, '805828876', '3000', 'tgblinkss@gmail.com', 'c822cb06f92f0dbae5d5fd021793d103', '1'),
(21, '888459658', '3000', 'tgblinkss@gmail.com', '296c2047f818e010e1424b9d94a5562e', '1'),
(22, '195859665', '3000', 'tgblinkss@gmail.com', '195859665', '1'),
(23, '885702261', '3000', 'tgblinkss@gmail.com', '885702261', '0 '),
(24, '413229569', '3000', 'tgblinkss@gmail.com', '413229569', '0 '),
(25, '971628598', '3000', 'tgblinkss@gmail.com', '971628598', '0 '),
(26, '938314165', '3000', 'tgblinkss@gmail.com', '938314165', '0 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
