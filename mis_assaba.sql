-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 05:10 AM
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
-- Database: `mis_assaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id_chatbot` int(15) NOT NULL,
  `pertanyaan` text NOT NULL,
  `response` text NOT NULL,
  `id_user` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id_chatbot`, `pertanyaan`, `response`, `id_user`) VALUES
(1, 'halo | hai | hello | hai | hey', 'halo, saya asisten virtual! :))', 1),
(2, 'berapa | harga | harganya | berapaan', 'untuk mengetahui harga produk madu, kamu bisa langsung klik setiap namanya dibawah ini:\r\n\r\n1. <a href=\"javascript:void(0);\" onclick=\"buttonSendText(\'madu bawang tunggal\'); getHardResponse(\'harga #1\');\">madu bawang tunggal</a>\r\n2. <a href=\"javascript:void(0);\" onclick=\"buttonSendText(\'madu kuning manis\'); getHardResponse(\'harga #2\');\">madu kuning manis</a>\r\n3. <a href=\"javascript:void(0);\" onclick=\"buttonSendText(\'madu hitam manis\'); getHardResponse(\'harga #3\');\">madu hitam manis</a> \r\n4. <a href=\"javascript:void(0);\" onclick=\"buttonSendText(\'madu hitam pahit\'); getHardResponse(\'harga #4\');\">madu hitam pahit</a> \r\n5. <a href=\"javascript:void(0);\" onclick=\"buttonSendText(\'madu hutan/odeng\'); getHardResponse(\'harga #5\');\">madu hutan/odeng</a> \r\n6. <a href=\"javascript:void(0);\" onclick=\"buttonSendText(\'madu klanceng\'); getHardResponse(\'harga #6\');\">madu klanceng</a>\r\n\r\ncoba sekarang :)', 1),
(4, 'ada | macam | produk', 'kami menyediakan beberapa jenis madu, berikut adalah daftarnya:\r\n\r\n#1 = madu bawang tunggal\r\n#2 = madu kuning manis\r\n#3 = madu hitam manis\r\n#4 = madu hitam pahit\r\n#5 = madu hutan/odeng\r\n#6 = madu klanceng\r\n\r\nmau tau perbedaannya? ketikkan \"deskripsi\" :)', 1),
(6, 'deskripsi | manfaat', 'jika yang kamu maksud adalah deskripsi madu, kamu bisa klik setiap nama dari setiap produk madu dibawah ini:\r\n\r\n1. <a href=\"javascript:void(0);\" onclick=\"getHardResponse(\'desk #1\');\">madu bawang tunggal</a>\r\n2. <a href=\"javascript:void(0);\" onclick=\"getHardResponse(\'desk #2\');\">madu kuning manis</a>\r\n3. <a href=\"javascript:void(0);\" onclick=\"getHardResponse(\'desk #3\');\">madu hitam manis</a> \r\n4. <a href=\"javascript:void(0);\" onclick=\"getHardResponse(\'desk #4\');\">madu hitam pahit</a> \r\n5. <a href=\"javascript:void(0);\" onclick=\"getHardResponse(\'desk #5\');\">madu hutan/odeng</a> \r\n6. <a href=\"javascript:void(0);\" onclick=\"getHardResponse(\'desk #6\');\">madu klanceng</a>\r\n\r\ncoba sekarang :)', 1),
(7, 'harga #1', '#1 harga dari madu bawang tunggal, beserta ukurannya:\n   a. Rp. 40.000,- : 150g\n   b. Rp. 60.000,- : 250g\n   c. Rp. 80.000,- : 350g\n   d. Rp. 100.000,- : 475g\n\nharga diatas belum termasuk ongkos kirim ya :)', 1),
(8, 'harga #2', '#2 harga dari madu kuning manis, beserta ukurannya\n   a. Rp. 35.000,- : 150g\n   b. Rp. 50.000,- : 250g\n   c. Rp. 70.000,- : 350g\n   d. Rp. 90.000,- : 475g\n   e. Rp. 160.000,- : 1kg\n\nharga diatas belum termasuk ongkos kirim ya :)', 1),
(10, 'harga #3', '#3 harga dari madu hitam manis, beserta ukurannya:\n   a. Rp. 35.000,- : 150g\n   b. Rp. 50.000,- : 250g\n   c. Rp. 70.000,- : 350g\n   d. Rp. 90.000,- : 475g\n   e. Rp. 160.000,- : 1kg\n\nharga diatas belum termasuk ongkos kirim ya :)', 1),
(11, 'harga #4', '#4 harga dari madu hitam pahit, beserta ukurannya:\n   a. Rp. 37.000,- : 150g\n   b. Rp. 55.000,- : 250g\n   c. Rp. 75.000,- : 350g\n   d. Rp. 95.000,- : 475g\n   e. Rp. 170.000,- : 1kg\n\nharga diatas belum termasuk ongkos kirim ya :)', 1),
(13, 'harga #5', '#5 harga dari madu hutan/odeng, beserta ukurannya:\n   a. Rp. 45.000,- : 150g\n   b. Rp. 70.000,- : 250g\n   c. Rp. 125.000,- : 475g\n\nharga diatas belum termasuk ongkos kirim ya :)', 1),
(14, 'harga #6', '#6 harga dari madu klanceng, beserta ukurannya:\n   a. Rp. 50.000,- : 150g\n   b. Rp. 80.000,- : 250g\n   c. Rp. 115.000,- : 350g\n   d. Rp. 150.000,- : 475g\n\nharga diatas belum termasuk ongkos kirim ya :)', 1),
(15, 'sedia | ready | stok | tersedia | stock | ada', 'semua produk tersedia, kamu bisa belanja sekarang! :D', 1),
(16, 'pesan | beli | belanja | pesen | borong | memesan', 'klik \"lihat produk\" atau halaman produk, lalu klik tombol \"pesan sekarang\". kamu akan dialihkan ke online shop (shopee) resmi kami.\n\nhappy shopping :D', 1),
(18, 'desk #1', 'Madu bawang tunggal ialah madu herbal extract alami yaitu kombinasi rendaman madu murni dengan bawang putih tunggal/lanang. Diolah dan dikemas secara hiegehenis, madu ini banyak digunakan didunia pengobatan karena sudah banyak yang merasakan kedahsyatan dari Khasiat madu ini.\r\n\r\ntertarik membeli? :D', 1),
(19, 'desk #2', 'Madu Kuning Manis merupakan madu yang didapatkan dari lebah jenis Apis Metifera yang diternak disekitar hutan perkebunan pohon di Kepulauan Indonesia. Nektar Multifora di Extract dan dikemas secara hiegehenis tanpa menghancurkan sarang maupun membunuh lebahnya\r\n\r\ntertarik membeli? :D', 1),
(21, 'desk #3', 'Madu Hitam Manis Merupakan madu yang didapatkan dari lebah jenis Apis Metifera yang diternak disekitar hutan perkebunan pohon Akasia Carpa di Kepulauan Sumatera. Di Extract dan dikemas secara hiegehenis tanpa menghancurkan sarang maupun membunuh lebahnya.\r\n\r\ntertarik membeli? :D', 1),
(22, 'desk #4', 'Madu Hitam Pahit merupakan madu yang sudah di Extract dengan bahan herbal lainya. Diolah dan dikemas secara hiegehenis, madu ini banyak digunakan didunia pengobatan karena sudah banyak yang merasakan kedahsyatan dari Khasiat madu pahit ini\r\n\r\ntertarik membeli? :D', 1),
(23, 'desk #5', 'Madu Odeng Hutan/Liar merupakan madu yang dihasilkan dari lebah Apis Dorsata ( Lebah Odeng ) yang terletak dikepulauan INDONESIA. Dipanen dan dikemas secara alami tanpa campuran bahan kimia ataupun bahan-bahan lainya\r\n\r\ntertarik membeli :D', 1),
(24, 'desk #6', 'Madu Klanceng/Tewwul adalah madu yang dihasilkan dari lebah tak bersengat Apis Trigona (Heterotrigona) yang bertahan hidup dengan cara menggigit bukan cara menyengat. Madu ini memiliki kandungan propolis tinggi dan cita rasa yang berbeda serta kualitas yang lebih baik dari maudu lainya\r\n\r\ntertarik membeli? :D', 1),
(25, 'dimana | alamat | toko | shop', 'kamu bisa mengujungi kami ke <a href=\"https://www.google.com/maps/search/Batik%20Residence%20B.26%20Sampiran%2C%20Kec.%20Talun%2C%20Kabupaten%20Cirebon%2C%20Jawa%20Barat%2045171%2C%20Indonesia/@-6.7659,108.5214,17z?hl=id\" target=\"_blank\">Batik Residence B.26 Sampiran, Kec. Talun, Kabupaten Cirebon, Jawa Barat 45171, Indonesia</a>\r\n\r\nnamun kamu bisa membeli produk madu lewat online shop (shopee) resmi kami.\r\n\r\nketik \'beli\' untuk tau cara membeli produk kami :D', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(15) NOT NULL,
  `foto_galeri` varchar(255) NOT NULL,
  `id_user` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto_galeri`, `id_user`) VALUES
(3, '11.png', 1),
(4, '2.png', 1),
(5, '3.png', 1),
(6, '4.png', 1),
(7, '5.png', 1),
(8, '6.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL,
  `id_user` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `foto`, `nama`, `deskripsi`, `link`, `id_user`) VALUES
(3, 'mbt1.jpg', 'Madu Bawang Tunggal', 'Madu bawang tunggal ialah madu herbal extract alami yaitu kombinasi rendaman madu murni dengan bawang putih tunggal/lanang. Diolah dan dikemas secara hiegehenis, madu ini banyak digunakan didunia pengobatan karena sudah banyak yang merasakan kedahsyatan dari Khasiat madu ini', 'https://shopee.co.id/Madu-Bawang-Tunggal-As-saba-i.394905894.21968488165?sp_atk=7659c0a3-3df0-4d32-877e-c1eed398e022&xptdk=7659c0a3-3df0-4d32-877e-c1eed398e022', 1),
(4, 'mkm.jpg', 'Madu Kuning Manis', 'Madu Kuning Manis merupakan madu yang didapatkan dari lebah jenis Apis Metifera yang diternak disekitar hutan perkebunan pohon di Kepulauan Indonesia. Nektar Multifora di Extract dan dikemas secara hiegehenis tanpa menghancurkan sarang maupun membunuh lebahnya', 'https://shopee.co.id/Madu-Kuning-Manis-As-Saba-i.394905894.23710626713?sp_atk=98e9c0d2-5073-4d27-b9ec-79d14861afd3&xptdk=98e9c0d2-5073-4d27-b9ec-79d14861afd3', 1),
(5, 'mhm.jpg', 'Madu Hitam Manis', 'Madu Hitam Manis Merupakan madu yang didapatkan dari lebah jenis Apis Metifera yang diternak disekitar hutan perkebunan pohon Akasia Carpa di Kepulauan Sumatera. Di Extract dan dikemas secara hiegehenis tanapa menghancurkan sarang maupun membunuh lebahnya', 'https://shopee.co.id/Madu-Hitam-Manis-As-saba-i.394905894.16091389710?sp_atk=80fa9226-f7cb-4c3d-ad5e-de8e652f8111&xptdk=80fa9226-f7cb-4c3d-ad5e-de8e652f8111', 1),
(6, 'MHP.jpg', 'Madu Hitam Pahit', 'Madu Hitam Pahit merupakan madu yang sudah di Extract dengan bahan herbal lainya. Diolah dan dikemas secara hiegehenis, madu ini banyak digunakan didunia pengobatan karena sudah banyak yang merasakan kedahsyatan dari Khasiat madu pahit ini', 'https://shopee.co.id/Madu-Hitam-Pahit-As-saba-i.394905894.20668486378?sp_atk=3f942385-0adf-4ccd-89f2-5a17b010a562&xptdk=3f942385-0adf-4ccd-89f2-5a17b010a562', 1),
(7, 'mh.jpg', 'Madu Hutan/Odeng', 'Madu Odeng Hutan/Liar merupakan madu yang dihasilkan dari lebah Apis Dorsata ( Lebah Odeng ) yang terletak dikepulauan INDONESIA. Dipanen dan dikemas secara alami tanpa campuran bahan kimia ataupun bahan-bahan lainya', 'https://shopee.co.id/Madu-Murni-Odeng-Hutan-As-Saba-i.394905894.22510635342?sp_atk=44a78bb4-6bdf-4076-b7c8-72f91d74546a&xptdk=44a78bb4-6bdf-4076-b7c8-72f91d74546a', 1),
(8, 'mk.jpg', 'Madu Klanceng', 'Madu Klanceng/Tewwul adalah madu yang dihasilkan dari lebah tak bersengat Apis Trigona (Heterotrigona) yang bertahan hidup dengan cara menggigit bukan cara menyengat. Madu ini memiliki kandungan propolis tinggi dan cita rasa yang berbeda serta kualitas yang lebih bauk dari maudu lainya', 'https://shopee.co.id/Madu-As-Saba-Klanceng-i.394905894.18068508038?sp_atk=3a65f300-2c7d-4cb2-9f44-bc1f7fe4daeb&xptdk=3a65f300-2c7d-4cb2-9f44-bc1f7fe4daeb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id_chatbot`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id_chatbot` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD CONSTRAINT `chatbot_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
