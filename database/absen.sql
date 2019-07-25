-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 04:09 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `absen`
--
CREATE DATABASE IF NOT EXISTS `absen` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `absen`;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_absensi`
--

CREATE TABLE IF NOT EXISTS `tabel_absensi` (
  `Id_absensi` int(11) NOT NULL AUTO_INCREMENT,
  `Nip` varchar(10) NOT NULL,
  `Nama_pegawai` varchar(50) NOT NULL,
  `Tanggal` varchar(15) NOT NULL,
  `Jam_masuk` varchar(10) NOT NULL,
  `Jam_keluar` varchar(10) NOT NULL,
  `Kode_keterangan` varchar(6) NOT NULL,
  `Keterangan` varchar(40) NOT NULL,
  `TTD` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_absensi`),
  KEY `Kode_keterangan` (`Kode_keterangan`),
  KEY `Nip` (`Nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tabel_absensi`
--

INSERT INTO `tabel_absensi` (`Id_absensi`, `Nip`, `Nama_pegawai`, `Tanggal`, `Jam_masuk`, `Jam_keluar`, `Kode_keterangan`, `Keterangan`, `TTD`) VALUES
(2, '546', 'FIRDAUS UBAIDILLAH', '02-14-2019', '12:59', '00:59', 'M', 'Masuk', 'Ya'),
(3, '546', 'FIRDAUS UBAIDILLAH', '02-13-2019', '08:45:39', '10:38:12', 'M', 'Masuk', 'Ya'),
(4, '547', 'WIRA KUSUMA', '02-14-2019', '09:32:48', '', 'M', 'Masuk', 'Ya'),
(5, '546', 'FIRDAUS UBAIDILLAH', '03-11-2019', '09:09:49', '', 'M', 'Masuk', 'Ya'),
(6, '546', 'FIRDAUS UBAIDILLAH', '03-12-2019', '10:44:35', '', 'M', 'Masuk', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jabatan`
--

CREATE TABLE IF NOT EXISTS `tabel_jabatan` (
  `Id_jabatan` varchar(20) NOT NULL,
  `Jabatan` varchar(70) NOT NULL,
  PRIMARY KEY (`Id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jabatan`
--

INSERT INTO `tabel_jabatan` (`Id_jabatan`, `Jabatan`) VALUES
('1', 'Kepala Bidang Tata Ruang'),
('2', 'Kepala Seksi Perencanaan Tata Ruang'),
('3', 'Kepala Seksi Pengendalian dan Pemanfaatan Ruang'),
('4', 'Kepala Seksi Pertanahan'),
('5', 'PHL'),
('6', 'Staff Bidang Tata Ruang');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_keluar`
--

CREATE TABLE IF NOT EXISTS `tabel_keluar` (
  `Id_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `Nip` varchar(40) NOT NULL,
  `Nama_pegawai` varchar(40) NOT NULL,
  `Tanggal` varchar(20) NOT NULL,
  `Jam_keluar` varchar(20) NOT NULL,
  `Kode_keterangan` varchar(15) NOT NULL,
  `Keterangan` varchar(20) NOT NULL,
  `TTD` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_keluar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tabel_keluar`
--

INSERT INTO `tabel_keluar` (`Id_keluar`, `Nip`, `Nama_pegawai`, `Tanggal`, `Jam_keluar`, `Kode_keterangan`, `Keterangan`, `TTD`) VALUES
(1, '546', 'FIRDAUS UBAIDILLAH', '02-13-2019', '15:00:00', 'M', 'Masuk', 'Ya'),
(2, '547', 'WIRA KUSUMA', '02-13-2019', '16:00:00', 'M', 'Masuk', 'Ya'),
(4, '198504022015021002', 'Candra Pranawa', '03-13-2019', '17:35:17', 'M', 'Masuk', 'Ya'),
(5, '198504022015021002', 'Candra Pranawa', '03-19-2019', '15:00:00', 'M', 'Masuk', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_keterangan`
--

CREATE TABLE IF NOT EXISTS `tabel_keterangan` (
  `Kode_keterangan` varchar(6) NOT NULL,
  `Keterangan` varchar(40) NOT NULL,
  PRIMARY KEY (`Kode_keterangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_keterangan`
--

INSERT INTO `tabel_keterangan` (`Kode_keterangan`, `Keterangan`) VALUES
('C', 'Cuti'),
('I', 'Izin'),
('M', 'Masuk'),
('S', 'Sakit'),
('S1', 'Sakit Tanpa Keterangan');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_masuk`
--

CREATE TABLE IF NOT EXISTS `tabel_masuk` (
  `Id_masuk` int(11) NOT NULL AUTO_INCREMENT,
  `Nip` varchar(40) NOT NULL,
  `Nama_pegawai` varchar(40) NOT NULL,
  `Tanggal` varchar(15) NOT NULL,
  `Jam_masuk` varchar(15) NOT NULL,
  `Kode_keterangan` varchar(10) NOT NULL,
  `Keterangan` varchar(20) NOT NULL,
  `TTD` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_masuk`),
  KEY `Nip` (`Nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tabel_masuk`
--

INSERT INTO `tabel_masuk` (`Id_masuk`, `Nip`, `Nama_pegawai`, `Tanggal`, `Jam_masuk`, `Kode_keterangan`, `Keterangan`, `TTD`) VALUES
(1, '546', 'FIRDAUS UBAIDILLAH', '02-13-2019', '08:49:12', 'M', 'Masuk', 'Ya'),
(2, '547', 'WIRA KUSUMA', '02-13-2019', '08:52:05', 'M', 'Masuk', 'Ya'),
(37, '198504022015021002', 'Candra Pranawa', '03-13-2019', '14:35:17', '-- Pilih -', '', ''),
(40, '198504022015021002', 'Candra Pranawa', '03-19-2019', '08:45:39', 'M', 'Masuk', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pegawai`
--

CREATE TABLE IF NOT EXISTS `tabel_pegawai` (
  `Nip` varchar(30) NOT NULL,
  `Nama_pegawai` varchar(50) NOT NULL,
  `Id_jabatan` varchar(20) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Alamat` varchar(60) NOT NULL,
  `Jenis_kelamin` varchar(15) NOT NULL,
  `No_telpon` varchar(14) NOT NULL,
  PRIMARY KEY (`Nip`),
  KEY `Id_jabatan` (`Id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pegawai`
--

INSERT INTO `tabel_pegawai` (`Nip`, `Nama_pegawai`, `Id_jabatan`, `Jabatan`, `Alamat`, `Jenis_kelamin`, `No_telpon`) VALUES
('-', 'Tsamrotul Fuad', '5', 'PHL', 'Rejoso', 'Laki - laki', '082233487223'),
('198504022015021002', 'Candra Pranawa', '6', 'Staff Bidang Tata Ruang', 'Malang', 'Laki Laki', '96875876'),
('546', 'FIRDAUS UBAIDILLAH', '5', 'PHL', 'Jl Kh Abdul Khamid GG XI No 2', 'Laki - laki', '082275688888'),
('547', 'WIRA KUSUMA', '5', 'PHL', 'Jalan', 'Laki - laki', '081234567890');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_absensi`
--
ALTER TABLE `tabel_absensi`
  ADD CONSTRAINT `tabel_absensi_ibfk_2` FOREIGN KEY (`Kode_keterangan`) REFERENCES `tabel_keterangan` (`Kode_keterangan`);

--
-- Constraints for table `tabel_masuk`
--
ALTER TABLE `tabel_masuk`
  ADD CONSTRAINT `tabel_masuk_ibfk_1` FOREIGN KEY (`Nip`) REFERENCES `tabel_pegawai` (`Nip`);

--
-- Constraints for table `tabel_pegawai`
--
ALTER TABLE `tabel_pegawai`
  ADD CONSTRAINT `tabel_pegawai_ibfk_1` FOREIGN KEY (`Id_jabatan`) REFERENCES `tabel_jabatan` (`Id_jabatan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
