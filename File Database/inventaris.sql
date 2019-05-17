-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 05:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `IdBarang` int(10) NOT NULL,
  `NamaBarang` varchar(20) NOT NULL,
  `Stok` int(10) NOT NULL,
  `KetTempat` varchar(50) NOT NULL,
  `KetKondisi` varchar(50) NOT NULL,
  `KetPemilik` varchar(50) NOT NULL,
  `TanggalMasuk` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`IdBarang`, `NamaBarang`, `Stok`, `KetTempat`, `KetKondisi`, `KetPemilik`, `TanggalMasuk`) VALUES
(4, 'g', 1, 'Gd. Kultubai Utara', 'b', 'Fakultas Teknik Informatika', '2016-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_parent` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `icon`, `is_active`, `is_parent`) VALUES
(15, 'dashboard', 'menu', 'fa fa-laptop', 1, 0),
(18, 'pengelolaan barang', 'barang', 'fa fa-briefcase', 1, 0),
(19, 'pengelolaan tanah', 'tanah', 'fa fa-globe', 1, 0),
(20, 'pelaporan', 'pelaporan', 'fa fa-file', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu2`
--

CREATE TABLE `menu2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_parent` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu2`
--

INSERT INTO `menu2` (`id`, `name`, `link`, `icon`, `is_active`, `is_parent`) VALUES
(15, 'dashboard', 'menu_p', 'fa fa-laptop', 1, 0),
(18, 'pengelolaan barang', 'barang_p', 'fa fa-briefcase', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu3`
--

CREATE TABLE `menu3` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_parent` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu3`
--

INSERT INTO `menu3` (`id`, `name`, `link`, `icon`, `is_active`, `is_parent`) VALUES
(15, 'dashboard', 'menu_t', 'fa fa-laptop', 1, 0),
(18, 'pengelolaan barang', 'barang_t', 'fa fa-briefcase', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id` int(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `IdBarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `mutasi`
--
DELIMITER $$
CREATE TRIGGER `Mutasi_b` AFTER INSERT ON `mutasi` FOR EACH ROW BEGIN
UPDATE barang SET Stok = Stok - NEW.qty
WHERE IdBarang = NEW.IdBarang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pelaporan`
--

CREATE TABLE `pelaporan` (
  `IdBarang` int(10) NOT NULL,
  `IdTanah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanah`
--

CREATE TABLE `tanah` (
  `IdTanah` int(10) NOT NULL,
  `Luas` int(10) NOT NULL,
  `KetPemilik` varchar(50) NOT NULL,
  `KetTempat` varchar(50) NOT NULL,
  `KetKondisi` varchar(50) NOT NULL,
  `TanggalMasuk` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanah`
--

INSERT INTO `tanah` (`IdTanah`, `Luas`, `KetPemilik`, `KetTempat`, `KetKondisi`, `TanggalMasuk`) VALUES
(12, 89, 'a', 's', 's', '2016-11-23'),
(5, 89, 'Fakultas Teknik Informatika', 'Gd. Bangkit', 'b', '2016-11-24'),
(14, 80, 'Fakultas Ekonomi dan Bisnis', 'Gd. Barung', 'Sedang dipakai', '2016-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `id_tempat` int(10) NOT NULL,
  `tempat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id_tempat`, `tempat`) VALUES
(1, 'FAKULTAS INFORMATIKA'),
(2, 'FAKULTAS TEKNIK ELEKTRO');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id_User` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jenis_user` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id_User`, `username`, `password`, `jenis_user`) VALUES
(12, '1301144374', '130', 1),
(13, '1301144354', '122', 2),
(14, '1301144324', '111', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`IdBarang`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu2`
--
ALTER TABLE `menu2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu3`
--
ALTER TABLE `menu3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IdBarang` (`IdBarang`);

--
-- Indexes for table `pelaporan`
--
ALTER TABLE `pelaporan`
  ADD UNIQUE KEY `IdBarang` (`IdBarang`),
  ADD UNIQUE KEY `IdTanah` (`IdTanah`);

--
-- Indexes for table `tanah`
--
ALTER TABLE `tanah`
  ADD PRIMARY KEY (`IdTanah`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
