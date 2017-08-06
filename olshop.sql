-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 05:12 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tw_produk`
--

CREATE TABLE IF NOT EXISTS `tw_produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(50) NOT NULL,
  `produk_keterangan` text NOT NULL,
  `produk_harga` float NOT NULL,
  `produk_jumlah` int(11) NOT NULL,
  `produk_gambar` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tw_produk`
--

INSERT INTO `tw_produk` (`produk_id`, `produk_nama`, `produk_keterangan`, `produk_harga`, `produk_jumlah`, `produk_gambar`) VALUES
(1, 'Kurupuk Seblak', 'Produk Seblak Jajanan Sunda yang memiliki 4 varian pedas (Original, Strong, Ngabret, Woles)', 10000, 5, 'seblakjanda.jpg'),
(2, 'Almer Snack', 'Produk lainnya dari jajanan sunda, yaitu snack sikring mini', 6000, 8, 'almer.jpg'),
(3, 'Cireng Banyuur', 'Produk Khas sunda, yaitu cireng = "aci di goreng" yang merupakan cemilan terfavorit orang sunda', 7000, 10, 'cirengbanyur.jpg'),
(4, 'Baso Aci Reunceum', 'Baso Aci Ranceum, sajian praktis hanya 3 menit rebus', 15000, 9, 'reunceum.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tw_produk`
--
ALTER TABLE `tw_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tw_produk`
--
ALTER TABLE `tw_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
