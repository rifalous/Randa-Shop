-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 29, 2013 at 11:54 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `cart`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tw_produk`
-- 

DROP TABLE IF EXISTS `tw_produk`;
CREATE TABLE `tw_produk` (
  `produk_id` int(11) NOT NULL auto_increment,
  `produk_nama` varchar(50) NOT NULL,
  `produk_keterangan` text NOT NULL,
  `produk_harga` float NOT NULL,
  `produk_jumlah` int(11) NOT NULL,
  PRIMARY KEY  (`produk_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `tw_produk`
-- 

INSERT INTO `tw_produk` VALUES (1, 'Susu Bendera', 'Produk Susu Bendera, Salah satu susu dengan gizi yang baik', 8600, 5);
INSERT INTO `tw_produk` VALUES (2, 'Top Coffee', 'Ini baru kopinya orang Indonesia. Bongkar... Bongkar...', 3000, 8);
INSERT INTO `tw_produk` VALUES (3, 'Pasta Gigi Pepsodent', 'Pasta gigi terbaik di seluruh alam semesta.', 4500, 0);
