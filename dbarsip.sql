-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 01:31 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbarsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE IF NOT EXISTS `arsip` (
`nomor` int(15) NOT NULL,
  `no_kk` varchar(25) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(25) DEFAULT NULL,
  `no_telpon` varchar(13) DEFAULT NULL,
  `jenis_kelamin` varchar(14) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`nomor`, `no_kk`, `nama`, `alamat`, `no_telpon`, `jenis_kelamin`, `tgl_masuk`, `status`) VALUES
(0, '1236789075', 'Sumiaty', 'Kisaran', '081244556677', 'Wanita', '2020-02-20', 'Mahasiswa'),
(14, '4678876257368', 'Razlie', 'Jln. Diponegoro', '0812345675433', 'Wanita', '2020-02-19', 'Pelajar '),
(15, '4678876257368', 'Yahya Laulo', 'jln. mambang Aer', '0812345675433', 'Pria', '2020-02-13', 'Pelajar ');

-- --------------------------------------------------------

--
-- Table structure for table `arsipkom`
--

CREATE TABLE IF NOT EXISTS `arsipkom` (
`nomor` int(15) NOT NULL,
  `no_kk` varchar(25) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(25) DEFAULT NULL,
  `no_telpon` varchar(13) DEFAULT NULL,
  `jenis_kelamin` varchar(14) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `arsipkom`
--

INSERT INTO `arsipkom` (`nomor`, `no_kk`, `nama`, `alamat`, `no_telpon`, `jenis_kelamin`, `tgl_masuk`, `status`) VALUES
(0, '6667896435', 'Syantieka', 'jln. Mambang Tanah', '0812345675433', 'Wanita', '2020-02-12', 'Pelajar'),
(12, '787987976876', 'Cantika', 'jln. Mambang Tanah', '0812345675433', 'Wanita', '2020-02-18', 'Pelajar'),
(13, '87987987987', 'Tampanka', 'Jln. Pasiran', '08123133211', 'Pria', '2020-02-16', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `no_perkara` varchar(50) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(25) NOT NULL,
  `tgl_kembali` varchar(25) NOT NULL,
  `lama_pinjam` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
`id` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`no_perkara`, `peminjam`, `tgl_pinjam`, `tgl_kembali`, `lama_pinjam`, `keterangan`, `id`) VALUES
('01/PID.B/2018/PN.KIS', 'A. Nasution', '2018-12-14', '2018-12-16', 2, '-', 4),
('01/PDT.G/2018/PN.KIS', 'J. Siahaan', '2018-12-10', 'Belum Kembali', 0, '-', 5),
('02/PID.B/2018/PN.KIS', 'Bejo', '2018-12-11', 'Belum Kembali', 0, 'Input ke CTS', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Fatahilal Amri S.kom, M.Kom', 1, 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
 ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `arsipkom`
--
ALTER TABLE `arsipkom`
 ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
MODIFY `nomor` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `arsipkom`
--
ALTER TABLE `arsipkom`
MODIFY `nomor` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
