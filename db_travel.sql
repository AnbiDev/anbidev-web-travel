-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2018 at 08:51 AM
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

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`id_contact_us`, `nama`, `email`, `pesan`) VALUES
(1, NULL, 'alifianadexe@gmail.com', 'Kamu disini untuk bekerja bukan untuk bermain dan bersenang senang'),
(2, 'Desi', 'tridesir@gmail.com', 'Kami disini untuk menunjukkan beban kami di dunia yang fana ini');

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

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `judul`) VALUES
(3, 'sebuah  gedung yang indah'),
(5, 'gajah melbu blumbang'),
(6, 'ini kumpulan orang orang goblok'),
(7, 'Ice cream'),
(8, 'ini platelate'),
(11, 'underwater squd');

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
(7, '1a-4.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/1a-4.jpg', 'destinasi', 5, '0.2970294883080109'),
(8, '01-rap-punk-beat-bb16-2017-billboard-1548.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/01-rap-punk-beat-bb16-2017-billboard-1548.jpg', 'destinasi', 5, '0.9235042197172785'),
(9, 'home.png', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/home.png', 'destinasi', 0, '0.537060640273963'),
(10, 'report.png', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/report.png', 'destinasi', 0, '0.8085375171861673'),
(11, 'sms.png', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/sms.png', 'destinasi', 0, '0.8757867352542703'),
(12, 'money.png', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/money.png', 'destinasi', 0, '0.34181037125085245'),
(13, 'image.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/image.jpeg', 'destinasi', 0, '0.9913237902376557'),
(14, 'image1.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/image1.jpeg', 'destinasi', 0, '0.3865709110913176'),
(15, 'image2.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/image2.jpeg', 'destinasi', 0, '0.6549902379759116'),
(16, 'icon.png', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/icon.png', 'destinasi', 0, '0.9397960415941999'),
(17, 'adexe.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/adexe.jpeg', 'destinasi', 0, '0.4273838472745004'),
(19, 'image3.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/image3.jpeg', 'destinasi', 0, '0.1647347469639573'),
(20, 'wallpaper-2739639.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/wallpaper-2739639.jpg', 'destinasi', 0, '0.03738304436964679'),
(22, 'adexe1.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/adexe1.jpeg', 'destinasi', 0, '0.9558222953637319'),
(23, 'platelet_chan_by_chiire-dch9l10.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/platelet_chan_by_chiire-dch9l10.jpg', 'destinasi', 0, '0.0624001229562281'),
(24, 'adexe2.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/adexe2.jpeg', 'destinasi', 0, '0.07254883447534088'),
(27, 'image4.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/image4.jpeg', 'destinasi', 0, '0.2441312541702294'),
(28, 'webserver.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/webserver.jpeg', 'destinasi', 0, '0.9981433645206739'),
(29, 'platelet_chan_by_chiire-dch9l101.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/platelet_chan_by_chiire-dch9l101.jpg', 'destinasi', 0, '0.8845565256771943'),
(30, 'platelet_chan_by_chiire-dch9l102.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/platelet_chan_by_chiire-dch9l102.jpg', 'destinasi', 0, '0.9599930226612396'),
(31, 'image5.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/image5.jpeg', 'destinasi', 0, '0.18979042981072047'),
(32, 'canvas.png', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/canvas.png', 'destinasi', 0, '0.5986832017825241'),
(33, 'platelet_chan_by_chiire-dch9l103.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/platelet_chan_by_chiire-dch9l103.jpg', 'destinasi', 0, '0.5272588007983925'),
(34, 'platelet_chan_by_chiire-dch9l104.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/platelet_chan_by_chiire-dch9l104.jpg', 'destinasi', 0, '0.20722987256358816'),
(35, 'canvas1.png', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/canvas1.png', 'destinasi', 0, '0.9879363912554289'),
(36, 'platelet_chan_by_chiire-dch9l105.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/platelet_chan_by_chiire-dch9l105.jpg', 'destinasi', 0, '0.08810551942583289'),
(37, 'webserver1.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/webserver1.jpeg', 'destinasi', 0, '0.4617296391693806'),
(38, 'image6.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/image6.jpeg', 'destinasi', 0, '0.28628853294180767'),
(39, 'platelet_chan_by_chiire-dch9l106.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/platelet_chan_by_chiire-dch9l106.jpg', 'destinasi', 0, '0.5559430931369926'),
(40, 'platelet_chan_by_chiire-dch9l107.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/platelet_chan_by_chiire-dch9l107.jpg', 'destinasi', 0, '0.546864824816993'),
(41, 'platelet_chan_by_chiire-dch9l108.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/platelet_chan_by_chiire-dch9l108.jpg', 'destinasi', 0, '0.23389957717342713'),
(42, 'webserver2.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/webserver2.jpeg', 'destinasi', 0, NULL),
(43, 'image7.jpeg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/image7.jpeg', 'destinasi', 0, NULL),
(46, 'DSC00515.JPG', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/DSC00515.JPG', 'destinasi', 0, '0.8746652045533916'),
(47, 'hulki_-_Kopya.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/hulki_-_Kopya.jpg', 'destinasi', 0, '0.636891539167078'),
(48, 'Picture1.png', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/Picture1.png', 'destinasi', 0, '0.3348772550976582'),
(49, 'machining.png', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/machining.png', 'destinasi', 0, '0.6739585415531699'),
(50, 'hulki_-_Kopya1.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/hulki_-_Kopya1.jpg', 'destinasi', 0, '0.07964891795705009'),
(53, 'building.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/building.jpg', 'gallery', 3, '0.2948109958641587'),
(55, 'Puuc4O1.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/Puuc4O1.jpg', 'gallery', 5, '0.45692569490612955'),
(56, 'f4c5a4a3004aa1f2935d3ac605506d70.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/f4c5a4a3004aa1f2935d3ac605506d70.jpg', 'gallery', 6, '0.21662621660047132'),
(57, 'Hyouka_Wallpaper_5.jpg', '/opt/lampp/htdocs/anbidev-web-travel/assets/images/Hyouka_Wallpaper_5.jpg', 'gallery', 7, '0.27798661215841425');

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
(1, 6, 'Dua untuk semua', 2, 3000000, 'Paket untuk pasangan'),
(2, 5, 'Paket Keamanan Hati', 2, 30000, 'Disini kita mengamankan hati hehe'),
(4, 5, 'Paket Pengamanan Jiwa', 3, 1000, 'Disini kita mengamankan jiwa');

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
  `tanggal` datetime DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id_pemesanan`, `id_paket_wisata`, `nama`, `email`, `alamat`, `no_telepon`, `tanggal`, `pesan`) VALUES
(1, 4, 'Muhammad Alifian Aqshol', 'alifianadexe@gmail.com', 'Jalan Panjang Keramat Jati Tidak Tahu Diri', 2147483647, '2018-11-16 01:27:17', 'kami ingin membeli semua hal yang ada disini'),
(2, 6, 'Tri Desi Romadhonah', 'tdr3000@gmail.com', 'Jl Kenangan Indah tak bertapak', 2147483647, '2018-11-16 07:32:48', 'Kami ingin bersatu dengan kebebasan\r\n                                                '),
(3, 4, 'Alifian Aqshol D Amour', 'alifianadexe@gmail.com', 'Jalan Panjang Keramat Jati Tidak Tahu Diri', 302819211, '2018-11-16 07:52:59', '                                                                                                kami ingin membeli semua hal yang ada disini \r\n                                                 \r\n                                                ');

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
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`) VALUES
(4, 'adexe', '28ba746b0ff2fe06e19624713c97a84c', 'admin'),
(5, 'hamid', '28ba746b0ff2fe06e19624713c97a84c', 'pegawai'),
(6, 'bagus', '28ba746b0ff2fe06e19624713c97a84c', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_about`
--

CREATE TABLE `tbl_web_about` (
  `id_web_main` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `about` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_desc`
--

CREATE TABLE `tbl_web_desc` (
  `id_web_desc` int(11) NOT NULL,
  `id_web_main` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `logo_desc` varchar(255) DEFAULT NULL,
  `short_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_main`
--

CREATE TABLE `tbl_web_main` (
  `id_web_main` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_web_main`
--

INSERT INTO `tbl_web_main` (`id_web_main`, `nama`, `logo`, `alamat`, `no_telp`, `facebook_link`, `twitter_link`, `instagram_link`, `youtube_link`, `email`, `short_description`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web_slider`
--

CREATE TABLE `tbl_web_slider` (
  `id_web_slider` int(11) NOT NULL,
  `id_web_main` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `link_to` varchar(255) DEFAULT NULL
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
-- Indexes for table `tbl_web_about`
--
ALTER TABLE `tbl_web_about`
  ADD PRIMARY KEY (`id_web_main`);

--
-- Indexes for table `tbl_web_desc`
--
ALTER TABLE `tbl_web_desc`
  ADD PRIMARY KEY (`id_web_desc`);

--
-- Indexes for table `tbl_web_main`
--
ALTER TABLE `tbl_web_main`
  ADD PRIMARY KEY (`id_web_main`);

--
-- Indexes for table `tbl_web_slider`
--
ALTER TABLE `tbl_web_slider`
  ADD PRIMARY KEY (`id_web_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id_contact_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_harga_detail`
--
ALTER TABLE `tbl_harga_detail`
  MODIFY `id_harga_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_web_about`
--
ALTER TABLE `tbl_web_about`
  MODIFY `id_web_main` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_web_desc`
--
ALTER TABLE `tbl_web_desc`
  MODIFY `id_web_desc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_web_main`
--
ALTER TABLE `tbl_web_main`
  MODIFY `id_web_main` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_web_slider`
--
ALTER TABLE `tbl_web_slider`
  MODIFY `id_web_slider` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
