-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2018 at 08:42 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `id_contact_us` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_destinasi`
--

CREATE TABLE `tbl_destinasi` (
  `id_destinasi` int(11) NOT NULL,
  `nama_destinasi` varchar(255) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_destinasi`
--

INSERT INTO `tbl_destinasi` (`id_destinasi`, `nama_destinasi`, `deskripsi`) VALUES
(2, 'Jogjakarta', 'Adalah tempat dimana saya magang dan kost'),
(3, 'Semarang', 'Tempat dimana aku belajar banyak hal'),
(4, 'Dropzone', 'Hey! Im trialing a dropzone<b> Fuck</b>'),
(5, 'Solo', 'Ning stasiun balapan, Kota Solo sing dadi kenangan, Koe Karo AKUUUUU!!!'),
(6, 'Jakarta', 'Jakarta adalah tempat ibu kota indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `id_paket_wisata` int(11) DEFAULT NULL,
  `lokasi_kedatangan` varchar(255) DEFAULT NULL,
  `lokasi_keberangkatan` varchar(255) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id_fasilitas`, `id_paket_wisata`, `lokasi_kedatangan`, `lokasi_keberangkatan`, `deskripsi`) VALUES
(1, 0, 'Jakarta', 'Ambarawa', 'Membuat kita seperti ini bagaikan salju yang indah'),
(2, 0, 'Bangka Belitung', 'Jakarta', 'Kami menyediakan fasilitas terbaik untuk anda.'),
(3, 0, 'Bali', 'Bangka Belitung', 'Kami menyediakan layanan terbaik untuk anda'),
(4, 0, 'Amper Andsess', 'Amper Locattion', 'So Slippin a Chlorine'),
(5, 0, 'Download', 'Adexe', 'Drop Quick me'),
(6, 0, 'Soucher An Sorchery', 'Adexe a Brook', 'Dont do it a better think'),
(7, 0, 'Adexe', 'Adexe', 'Adexe'),
(8, 0, 'Jawa Tengah', 'Semarang', 'Kami bekas para penjajah yang ingin mengurungkan niat.'),
(9, 4, 'Jakarta', 'Semarang', 'Kami menyediakan fasilitas yang paling mewah diantara semua fasilitas itu.'),
(10, 5, 'Hatimu', 'Hatiku', '<i></i><b>Aku sangat ingin bertemu denganmu</b>'),
(11, 6, 'Kemari', 'Kesanaa', 'Kami disini ada untuk kalian, jadi kalian harus menghormati kami');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL,
  `file_name` text,
  `location` text,
  `status` varchar(255) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`id_gambar`, `file_name`, `location`, `status`, `id`, `token`) VALUES
(3, '7725f270b5f2b01902d890c8ebc3ff7e.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/7725f270b5f2b01902d890c8ebc3ff7e.jpg', 'destinasi', 0, '0.8747134959073606'),
(4, '6b2af148d3f06ffcf3af52d87568c56d.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/6b2af148d3f06ffcf3af52d87568c56d.jpg', 'destinasi', 4, '0.49050054954306455'),
(5, '6b2af148d3f06ffcf3af52d87568c56d1.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/6b2af148d3f06ffcf3af52d87568c56d1.jpg', 'destinasi', 4, '0.9640745057056983'),
(6, 'Low-Poly-Wallpaper-003.jpg', '/opt/lampp/htdocs/anbidev-web-travel-2/assets/images/Low-Poly-Wallpaper-003.jpg', 'destinasi', 5, '0.43207140664140775');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_harga_detail`
--

CREATE TABLE `tbl_harga_detail` (
  `id_harga_detail` int(11) NOT NULL,
  `id_paket_wisata` int(11) DEFAULT NULL,
  `nama_paket_harga` varchar(255) DEFAULT NULL,
  `jumlah_orang` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_harga_detail`
--

INSERT INTO `tbl_harga_detail` (`id_harga_detail`, `id_paket_wisata`, `nama_paket_harga`, `jumlah_orang`, `harga`, `deskripsi`) VALUES
(1, 6, 'Dua untuk semua', 2, 3000000, 'Paket untuk pasangan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_itinetary`
--

CREATE TABLE `tbl_itinetary` (
  `id_itinetary` int(11) NOT NULL,
  `id_paket_wisata` int(11) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_itinetary`
--

INSERT INTO `tbl_itinetary` (`id_itinetary`, `id_paket_wisata`, `deskripsi`) VALUES
(2, 5, 'Aku ingin bertemu dengan mu untuk membicarakan masa depan <b><i>kita</i></b>'),
(3, 6, 'Jika kalian tidak setuju, nyawa kalian yang menjadi taruhan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_link_destinasi_paket_wisata`
--

CREATE TABLE `tbl_link_destinasi_paket_wisata` (
  `id_link_destinasi_paket_wisata` int(11) NOT NULL,
  `id_paket_wisata` int(11) NOT NULL,
  `id_destinasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_link_destinasi_paket_wisata`
--

INSERT INTO `tbl_link_destinasi_paket_wisata` (`id_link_destinasi_paket_wisata`, `id_paket_wisata`, `id_destinasi`) VALUES
(1, 3, 2),
(2, 3, 3),
(3, 3, 4),
(4, 4, 2),
(5, 4, 3),
(6, 5, 4),
(7, 5, 5),
(8, 6, 5),
(9, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paket_wisata`
--

CREATE TABLE `tbl_paket_wisata` (
  `id_paket_wisata` int(11) NOT NULL,
  `nama_paket_wisata` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paket_wisata`
--

INSERT INTO `tbl_paket_wisata` (`id_paket_wisata`, `nama_paket_wisata`, `deskripsi`, `harga`) VALUES
(3, 'Paket Semua Menang , Semua Senang', 'Kami disini untuk menang', 20000000),
(4, 'Paket Keluarga Semua ', 'last night i lose , All my pasion', 300000),
(5, 'Drop to Zero Paket', 'How to make a dream come true with <b>you</b>', 12000000),
(6, 'Paket Pelajar Semua', 'Paket ini bertemakan hal yang sangat ingin kami ditempatkan', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_paket_wisata` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telepon` int(11) DEFAULT NULL,
  `paket_wisata` int(11) DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`id_contact_us`);

--
-- Indexes for table `tbl_destinasi`
--
ALTER TABLE `tbl_destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tbl_harga_detail`
--
ALTER TABLE `tbl_harga_detail`
  ADD PRIMARY KEY (`id_harga_detail`);

--
-- Indexes for table `tbl_itinetary`
--
ALTER TABLE `tbl_itinetary`
  ADD PRIMARY KEY (`id_itinetary`);

--
-- Indexes for table `tbl_link_destinasi_paket_wisata`
--
ALTER TABLE `tbl_link_destinasi_paket_wisata`
  ADD PRIMARY KEY (`id_link_destinasi_paket_wisata`);

--
-- Indexes for table `tbl_paket_wisata`
--
ALTER TABLE `tbl_paket_wisata`
  ADD PRIMARY KEY (`id_paket_wisata`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id_contact_us` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_destinasi`
--
ALTER TABLE `tbl_destinasi`
  MODIFY `id_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_harga_detail`
--
ALTER TABLE `tbl_harga_detail`
  MODIFY `id_harga_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_itinetary`
--
ALTER TABLE `tbl_itinetary`
  MODIFY `id_itinetary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_link_destinasi_paket_wisata`
--
ALTER TABLE `tbl_link_destinasi_paket_wisata`
  MODIFY `id_link_destinasi_paket_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_paket_wisata`
--
ALTER TABLE `tbl_paket_wisata`
  MODIFY `id_paket_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
