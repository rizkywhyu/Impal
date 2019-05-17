-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2016 at 11:06 
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `Id_petugas` varchar(8) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Telepon` int(11) NOT NULL,
  `Level` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Anggota`
--

CREATE TABLE `Anggota` (
  `Id_anggota` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telepon` int(11) NOT NULL,
  `Jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Buku`
--

CREATE TABLE `Buku` (
  `Id_buku` varchar(30) NOT NULL,
  `Judul` varchar(30) NOT NULL,
  `Pengarang` varchar(30) NOT NULL,
  `Tahun` date NOT NULL,
  `Penerbit` varchar(30) NOT NULL,
  `Stok_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Peminjaman`
--

CREATE TABLE `Peminjaman` (
  `Id_peminjaman` varchar(8) NOT NULL,
  `Tangal_pinjam` date NOT NULL,
  `Tanggal_kembali` date NOT NULL,
  `Denda` int(11) NOT NULL,
  `Id_buku` varchar(8) NOT NULL,
  `Id_anggota` varchar(10) NOT NULL,
  `Id_petugas` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`Id_petugas`);

--
-- Indexes for table `Anggota`
--
ALTER TABLE `Anggota`
  ADD PRIMARY KEY (`Id_anggota`);

--
-- Indexes for table `Buku`
--
ALTER TABLE `Buku`
  ADD PRIMARY KEY (`Id_buku`);

--
-- Indexes for table `Peminjaman`
--
ALTER TABLE `Peminjaman`
  ADD PRIMARY KEY (`Id_peminjaman`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
