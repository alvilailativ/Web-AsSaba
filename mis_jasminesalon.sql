-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 08:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis_jasminesalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` varchar(255) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `harga`, `deskripsi`) VALUES
('JSM001', 'Beauty Hair', 300000, 'Layanan untuk menjaga kecantikan rambut; perawatan rambut dengan creambath, hairspa dan lain-lain.'),
('JSM002', 'Beauty Skin', 350000, 'Layanan untuk menjaga kecantikan wajah; perawatan kulit dengan facial, facespa dan lain-lain.'),
('JSM003', 'Body Treatment', 750000, 'Layanan untuk merawat tubuh; perawatan dengan body massage, lulur, spa dan lain-lain.');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_layanan` varchar(255) NOT NULL,
  `status_pembayaran` enum('pending','approved') DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `tanggal_pemesanan`, `id_user`, `id_layanan`, `status_pembayaran`, `bukti_pembayaran`) VALUES
(1, '2022-10-24', 2, 'JSM001', 'approved', 'angryimg.png'),
(2, '2022-11-04', 2, 'JSM003', 'approved', 'POSTER_BEASISWA.jpg'),
(3, '2022-11-24', 2, 'JSM002', 'pending', 'PosterWebinar_day3_(2).png'),
(5, '0000-00-00', 2, 'JSM001', 'pending', NULL),
(6, '0000-00-00', 2, 'JSM001', 'pending', NULL),
(7, '0000-00-00', 2, 'JSM001', 'pending', 'test_png.png'),
(8, '0000-00-00', 2, 'JSM001', 'pending', NULL),
(9, '0000-00-00', 2, 'JSM001', 'pending', NULL),
(10, '0000-00-00', 2, 'JSM001', 'pending', NULL),
(11, '0000-00-00', 2, 'JSM001', 'pending', NULL),
(12, '0000-00-00', 2, 'JSM001', 'pending', NULL),
(13, '0000-00-00', 2, 'JSM001', 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `id_level`) VALUES
(1, 'aku', 'aku@aku.com', 'aku', 1),
(2, 'dia', 'dia@dia.com', 'dia', 2),
(3, 'baru', 'baru@baru.com', 'baru', 2),
(4, 'cek', 'cek@cek.com', 'cek', 1),
(5, 'cek', 'cek', 'cek', 1),
(8, 'bei', 'bei@bei.com', 'bei', 2),
(11, 'f', 'f@f.com', 'f', 2),
(12, 'g', 'g@g.com', 'g', 2),
(13, 'test', 'test@test.com', 'test', 2),
(15, 'x', 'x@x.com', 'x', 2),
(16, 'qwertt', 'g@g.com', 'g', 2),
(17, 'lama', 'baru@baru.com', 'baru', 2),
(18, 'p', 'p@p.com', 'p', 2),
(19, 'jaya', 'jaya@jaya.com', 'jaya', 2),
(20, 'admin', 'admin@admin.com', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_layanan` (`id_layanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_status` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
