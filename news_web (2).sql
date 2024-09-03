-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 11:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `visi_about` text NOT NULL,
  `misi_about` text NOT NULL,
  `gambar_about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `visi_about`, `misi_about`, `gambar_about`) VALUES
(2, 'Menjadi sumber berita terkemuka yang kredibel, inovatif, dan terpercaya, yang memberikan informasi yang akurat, mendalam, dan relevan kepada masyarakat global.', '1. Menyajikan berita yang akurat, objektif, dan mendalam.\r\n2. Mengedepankan kejujuran dan transparansi dalam jurnalistik.\r\n', 'newspaper-pages-template-news-paper-260nw-1723612927.webp');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `tgl_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`) VALUES
(29, 19, 'Politik Bersih', 'ini adalah berita POLITIK', 'Screenshot (6).png', '2024-08-29'),
(31, 5, 'Teknologi Terbaru 2026', 'loremm', 'Screenshot (24).png', '2024-08-30'),
(33, 19, 'Belajar Dari Pengalaman', 'Belajar dari pengalaman mengajarkan kita untuk memahami kesalahan, menerapkan pembelajaran, dan berkembang dengan lebih bijaksana di masa depan.', 'Screenshot (5).png', '2024-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(5, 'Politik'),
(6, 'Teknologi'),
(7, 'Pendidikan'),
(19, 'kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `facebook`, `instagram`, `no_telp`, `alamat`) VALUES
(2, 'https://facebook.com/citra', 'https://instagram.com/citra', '09877886668', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tim_kami`
--

CREATE TABLE `tim_kami` (
  `id_tim` int(11) NOT NULL,
  `nama_tim` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tim_kami`
--

INSERT INTO `tim_kami` (`id_tim`, `nama_tim`, `jabatan`, `foto`) VALUES
(1, 'Rian Firmansyah', 'Backend', 'Screenshot (3).png'),
(3, 'Citra Febriawirti', 'Frontend Engineer', 'Screenshot (10).png'),
(7, 'Mulia', 'Backend', 'Screenshot (8).png'),
(9, 'Mega Yulianti', 'Sequrity', 'Screenshot (33).png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `foto`) VALUES
(3, 'nana', '123', 'Nanaaa', '3177440.png'),
(5, 'andini', '123', 'Nanaaa', '3177440.png'),
(6, '123', '', 'Citra Febria', 'Screenshot (8).png'),
(7, 'Citra', '123', 'Citra Febriasss', 'Screenshot (8).png'),
(8, 'Citradd', '123', 'Nanaaa', 'Screenshot (10).png'),
(9, 'Citraddxx', '123', 'Nanaaaxxxx', 'Screenshot (9).png'),
(10, '@yulia', '123', 'Yuliana', 'Capture.PNG'),
(11, '@asep', '123', 'Asepisan', 'Screenshot (4).png'),
(12, '@nono', '123', 'Noo', 'Screenshot (8).png'),
(13, '@nonoccc', '123', 'ccccc', 'Screenshot (8).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tim_kami`
--
ALTER TABLE `tim_kami`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tim_kami`
--
ALTER TABLE `tim_kami`
  MODIFY `id_tim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
