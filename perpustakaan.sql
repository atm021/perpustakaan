-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2015 at 08:54 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `sampul` varchar(255) DEFAULT NULL,
  `id_kategori` int(50) NOT NULL,
  `id_penulis` int(50) NOT NULL,
  `id_penerbit` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=368 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `isbn`, `sinopsis`, `sampul`, `id_kategori`, `id_penulis`, `id_penerbit`) VALUES
(232, 'ATHEM', '00998877', '    					AAAAA', 'images1.png', 1, 1, 2),
(233, 'sadfa', 'asdfa', 'asdf', 'asdf', 2, 2, 3),
(234, '', '', '', '', 0, 0, 0),
(235, '', '', '', '', 0, 0, 0),
(236, '', '', '', '', 0, 0, 0),
(237, '', '', '', '', 0, 0, 0),
(238, '', '', '', '', 0, 0, 0),
(240, '', '', '', '', 0, 0, 0),
(241, '', '', '', '', 0, 0, 0),
(242, '', '', '', '', 0, 0, 0),
(243, '', '', '', '', 0, 0, 0),
(244, '', '', '', '', 0, 0, 0),
(245, '', '', '', '', 0, 0, 0),
(246, '', '', '', '', 0, 0, 0),
(247, '', '', '', '', 0, 0, 0),
(248, '', '', '', '', 0, 0, 0),
(249, '', '', '', '', 0, 0, 0),
(250, '', '', '', '', 0, 0, 0),
(251, '', '', '', '', 0, 0, 0),
(252, '', '', '', '', 0, 0, 0),
(253, '', '', '', '', 0, 0, 0),
(254, '', '', '', '', 0, 0, 0),
(255, '', '', '', '', 0, 0, 0),
(256, '', '', '', '', 0, 0, 0),
(257, '', '', '', '', 0, 0, 0),
(258, '', '', '', '', 0, 0, 0),
(259, '', '', '', '', 0, 0, 0),
(260, '', '', '', '', 0, 0, 0),
(261, '', '', '', '', 0, 0, 0),
(262, '', '', '', '', 0, 0, 0),
(263, '', '', '', '', 0, 0, 0),
(264, '', '', '', '', 0, 0, 0),
(265, '', '', '', '', 0, 0, 0),
(266, '', '', '', '', 0, 0, 0),
(267, '', '', '', '', 0, 0, 0),
(268, '', '', '', '', 0, 0, 0),
(269, '', '', '', '', 0, 0, 0),
(270, '', '', '', '', 0, 0, 0),
(271, '', '', '', '', 0, 0, 0),
(272, '', '', '', '', 0, 0, 0),
(273, '', '', '', '', 0, 0, 0),
(274, '', '', '', '', 0, 0, 0),
(275, '', '', '', '', 0, 0, 0),
(276, '', '', '', '', 0, 0, 0),
(277, '', '', '', '', 0, 0, 0),
(278, '', '', '', '', 0, 0, 0),
(279, '', '', '', '', 0, 0, 0),
(280, '', '', '', '', 0, 0, 0),
(281, '', '', '', '', 0, 0, 0),
(282, '', '', '', '', 0, 0, 0),
(283, '', '', '', '', 0, 0, 0),
(284, '', '', '', '', 0, 0, 0),
(285, '', '', '', '', 0, 0, 0),
(286, '', '', '', '', 0, 0, 0),
(287, '', '', '', '', 0, 0, 0),
(288, '', '', '', '', 0, 0, 0),
(289, '', '', '', '', 0, 0, 0),
(290, '', '', '', '', 0, 0, 0),
(291, '', '', '', '', 0, 0, 0),
(292, '', '', '', '', 0, 0, 0),
(293, '', '', '', '', 0, 0, 0),
(294, '', '', '', '', 0, 0, 0),
(295, '', '', '', '', 0, 0, 0),
(296, '', '', '', '', 0, 0, 0),
(297, '', '', '', '', 0, 0, 0),
(298, '', '', '', '', 0, 0, 0),
(299, '', '', '', '', 0, 0, 0),
(300, '', '', '', '', 0, 0, 0),
(301, '', '', '', '', 0, 0, 0),
(302, '', '', '', '', 0, 0, 0),
(303, '', '', '', '', 0, 0, 0),
(304, '', '', '', '', 0, 0, 0),
(305, '', '', '', '', 0, 0, 0),
(306, '', '', '', '', 0, 0, 0),
(307, '', '', '', '', 0, 0, 0),
(308, '', '', '', '', 0, 0, 0),
(309, '', '', '', '', 0, 0, 0),
(310, '', '', '', '', 0, 0, 0),
(311, '', '', '', '', 0, 0, 0),
(312, '', '', '', '', 0, 0, 0),
(313, '', '', '', '', 0, 0, 0),
(314, '', '', '', '', 0, 0, 0),
(315, '', '', '', '', 0, 0, 0),
(316, '', '', '', '', 0, 0, 0),
(317, '', '', '', '', 0, 0, 0),
(318, '', '', '', '', 0, 0, 0),
(319, '', '', '', '', 0, 0, 0),
(320, '', '', '', '', 0, 0, 0),
(321, '', '', '', '', 0, 0, 0),
(322, '', '', '', '', 0, 0, 0),
(323, '', '', '', '', 0, 0, 0),
(324, '', '', '', '', 0, 0, 0),
(325, '', '', '', '', 0, 0, 0),
(326, '', '', '', '', 0, 0, 0),
(327, '', '', '', '', 0, 0, 0),
(328, '', '', '', '', 0, 0, 0),
(329, '', '', '', '', 0, 0, 0),
(330, '', '', '', '', 0, 0, 0),
(331, '', '', '', '', 0, 0, 0),
(332, '', '', '', '', 0, 0, 0),
(333, '', '', '', '', 0, 0, 0),
(334, '', '', '', '', 0, 0, 0),
(335, '', '', '', '', 0, 0, 0),
(336, '', '', '', '', 0, 0, 0),
(337, '', '', '', '', 0, 0, 0),
(338, '', '', '', '', 0, 0, 0),
(339, '', '', '', '', 0, 0, 0),
(340, '', '', '', '', 0, 0, 0),
(341, '', '', '', '', 0, 0, 0),
(342, '', '', '', '', 0, 0, 0),
(343, '', '', '', '', 0, 0, 0),
(344, '', '', '', '', 0, 0, 0),
(345, '', '', '', '', 0, 0, 0),
(346, '', '', '', '', 0, 0, 0),
(347, '', '', '', '', 0, 0, 0),
(348, '', '', '', '', 0, 0, 0),
(349, '', '', '', '', 0, 0, 0),
(350, '', '', '', '', 0, 0, 0),
(351, '', '', '', '', 0, 0, 0),
(352, '', '', '', '', 0, 0, 0),
(353, '', '', '', '', 0, 0, 0),
(354, '', '', '', '', 0, 0, 0),
(355, '', '', '', '', 0, 0, 0),
(356, '', '', '', '', 0, 0, 0),
(357, '', '', '', '', 0, 0, 0),
(358, '', '', '', '', 0, 0, 0),
(359, '', '', '', '', 0, 0, 0),
(360, '', '', '', '', 0, 0, 0),
(362, ' When do I do that?', '09098888', 'no spoiler!', 'n/a', 1, 4, 5),
(364, 'jajal', '444', 'jaregah', '', 1, 1, 2),
(365, 'Afterlife', '09999', 'n/a', 'images1.png', 1, 2, 2),
(366, 'afterdark', '0909', 'jjj', 'images1.png', 1, 1, 2),
(367, 'kasih', 'ayugah', 'apabae', 'images1.png', 1, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Class A'),
(2, 'Class B'),
(3, 'Class C');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(20) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `password`) VALUES
(1, 'akusuper', 'akusuper'),
(3, 'admin', 'admin'),
(5, 'atm', 'atm'),
(6, 'masuk', 'masuk'),
(7, 'asal', 'asal'),
(8, 'coba', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `lama` int(11) DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status_peminjaman` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_buku`, `id_user`, `tanggal_pinjam`, `lama`, `tanggal_kembali`, `status_peminjaman`) VALUES
(29, 233, 'admin', '2015-08-27', 8, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `nama`, `alamat`, `telepon`) VALUES
(2, 'ATMBr', 'Alamat penerbit b', '011110111010111010'),
(3, 'T.A Munan', 'Sanyou', 'n/a'),
(5, 'GRAFT', 'California', '000298818919');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE IF NOT EXISTS `penulis` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id`, `nama`, `alamat`, `telepon`) VALUES
(1, 'T.A Munandares', 'Shibuya', '68'),
(2, 'Shinonome', 'Akihabara', '09888787'),
(3, 'KY', 'Akihabara', '234234'),
(4, 'ATHEM', 'IM', 'n/a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=368;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
