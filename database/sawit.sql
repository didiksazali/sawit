-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 07:47 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sawit`
--

-- --------------------------------------------------------

--
-- Table structure for table `petani`
--

CREATE TABLE IF NOT EXISTS `petani` (
`id_petani` int(11) NOT NULL,
  `nama_petani` varchar(35) NOT NULL,
  `alamat_petani` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `petani`
--

INSERT INTO `petani` (`id_petani`, `nama_petani`, `alamat_petani`) VALUES
(1, 'Alfat', 'Pekanbaru'),
(2, 'Ardi', 'Jakarta'),
(6, 'Ahmad Lutfi', 'Papua Barat'),
(9, 'Didik Sazali', 'Jl. Suka Karya, Pekanbaru'),
(10, 'Ratna', 'Bengkalis'),
(11, 'Yulia', 'jl.swakarya1');

-- --------------------------------------------------------

--
-- Table structure for table `sawit`
--

CREATE TABLE IF NOT EXISTS `sawit` (
`kode_sawit` int(11) NOT NULL,
  `jenis_sawit` varchar(20) NOT NULL,
  `harga_jual` int(5) NOT NULL,
  `potongan` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sawit`
--

INSERT INTO `sawit` (`kode_sawit`, `jenis_sawit`, `harga_jual`, `potongan`) VALUES
(1, 'Buah Pasir', 1200, 10),
(2, 'Buah Besar', 1500, 20);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id_petani` int(11) NOT NULL,
  `kode_sawit` int(11) NOT NULL,
  `berat` int(10) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_petani`, `kode_sawit`, `berat`, `tanggal_transaksi`) VALUES
(9, 1, 1, 100, '2017-12-10'),
(10, 6, 1, 100, '2017-12-10'),
(11, 10, 2, 100, '2017-12-10'),
(12, 11, 2, 120, '2017-12-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
 ADD PRIMARY KEY (`id_petani`);

--
-- Indexes for table `sawit`
--
ALTER TABLE `sawit`
 ADD PRIMARY KEY (`kode_sawit`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `id_petani` (`id_petani`), ADD KEY `kode_sawit` (`kode_sawit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petani`
--
ALTER TABLE `petani`
MODIFY `id_petani` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sawit`
--
ALTER TABLE `sawit`
MODIFY `kode_sawit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_petani`) REFERENCES `petani` (`id_petani`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_sawit`) REFERENCES `sawit` (`kode_sawit`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
