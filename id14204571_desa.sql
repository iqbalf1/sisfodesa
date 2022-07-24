-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2021 at 03:45 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14204571_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(1, 'saitama', 'saitama@hotmail.com', 'Terdapat keluarga yang membutuhkan bantuan pada desa sukorame musuk boyolali'),
(2, 'naruto', 'naruto123@gmail.com', 'Terdapat keluarga yang kurang mampu di desa sumur kecamatan musuk kabupaten boyolali rt.04 rw.12 atas nama bapak sumirin...'),
(3, 'KONOHA ', 'admin1@gmail.com', 'ini hanya pesan');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `judul_website` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `judul_website`, `alamat`, `email`, `telp`) VALUES
(1, 'Desa Kragilan', 'Desa Kragilan Kecamatan Mojosongo Kabupaten Boyolali', 'kragilan@gmail.com', '027612345421');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `judul_informasi` varchar(50) NOT NULL,
  `isi_informasi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `icon`, `judul_informasi`, `isi_informasi`) VALUES
(1, 'fas fa-newspaper', 'Pasien Positif Covid-19 Bertambah 5, 2 Sembuh', 'BOYOLALI – Dinas Kesehatan (Dinkes) Kabupaten Boyolali kemabli menggelar konferensi pers terkait perkembangan Corona Virus Disease (Covid-19) di Kabupaten Boyolali. Kepala Dinkes Kabupaten Boyolali, Ratri S. Survivalina merilis penambahan lima kasus '),
(2, 'fas fa-newspaper', 'Pasien Positif Covid-19 Bertambah 5, 2 Sembuh', 'BOYOLALI – Dinas Kesehatan (Dinkes) Kabupaten Boyolali kemabli menggelar konferensi pers terkait perkembangan Corona Virus Disease (Covid-19) di Kabupaten Boyolali. Kepala Dinkes Kabupaten Boyolali, Ratri S. Survivalina merilis penambahan lima kasus '),
(3, 'fas fa-newspaper', 'Peringatan Hari Jadi ke-173 Boyolali', 'BOYOLALI - Peringatan Hari Jadi ke-173 Kabupaten Boyolali benar-benar berbeda dengan tahun sebelumnya. Dikarenakan adanya wabah pandemi Corona Virus Disease (Covid-19), Pemerintah Kabupaten (Pemkab) Boyolali hanya menggelar apel dengan memperhatikan '),
(4, 'fas fa-newspaper', 'Peringatan Hari Jadi ke-173 Boyolali', 'BOYOLALI - Peringatan Hari Jadi ke-173 Kabupaten Boyolali benar-benar berbeda dengan tahun sebelumnya. Dikarenakan adanya wabah pandemi Corona Virus Disease (Covid-19), Pemerintah Kabupaten (Pemkab) Boyolali hanya menggelar apel dengan memperhatikan ');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(3) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'MI', 'Manajemen Informatika'),
(2, 'SI', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tempat_lahir` varchar(120) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama_lengkap`, `alamat`, `email`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `photo`) VALUES
(1, '4405012111115612', 'rizky', 'Colomadu Surakarta Jawa Tengah', 'rizky@gmail.com', '021123456111', 'Jakarta', '2020-06-09', 'Laki-laki', 'foto1.jpg'),
(3, '123111421123565', 'budi', 'Kalideres Jakarta', 'budi@hotmail.com', '021123456111', 'Jakarta', '2020-06-15', 'Laki-Laki', '');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_desa`
--

CREATE TABLE `tentang_desa` (
  `id` int(11) NOT NULL,
  `sejarah` varchar(1000) NOT NULL,
  `visi` varchar(250) NOT NULL,
  `misi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang_desa`
--

INSERT INTO `tentang_desa` (`id`, `sejarah`, `visi`, `misi`) VALUES
(1, 'Menurut cerita serat Babad Pengging Serat Mataram, nama Boyolali tak disebutkan. Demikian juga pada masa Kerajaan Demak Bintoro maupun Kerajaan Pengging, nama Boyolali belum dikenal. Menurut legenda nama Boyolali berhubungan dengan ceritera Ki Ageng Pandan Arang (Bupati Semarang pada abad XVI). Alkisah, Ki Ageng Pandan Arang yang lebih dikenal dengan Tumenggung Notoprojo diramalkan oleh Sunan Kalijogo sebagai Wali penutup menggantikan Syeh Siti Jenar. Oleh Sunan Kalijogo, Ki Ageng Pandan Arang diutus untuk menuju ke Gunung Jabalakat di Tembayat (Klaten) untuk syiar agama Islam. Dalam perjalananannya dari Semarang menuju Tembayat Ki Ageng banyak menemui rintangan dan batu sandungan sebagai ujian. Ki Ageng berjalan cukup jauh meninggalkan anak dan istri ketika berada di sebuah hutan belantara dia dirampok oleh tiga orang yang mengira dia membawa harta benda ternyata dugaan itu keliru maka tempat inilah sekarang dikenal dengan nama Salatiga', 'Pro Investasi Mewujudkan Boyolali Yang Maju dan Lebih Sejahtera', 'Boyolali, melanjutkan semangat Pro Investasi & Boyolali membangun untuk perubahan.                                                           ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_sessions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_sessions`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin', 'N', ''),
(2, 'naruto', 'e10adc3949ba59abbe56e057f20f883e', 'naruto@gmail.com', 'admin', 'N', ''),
(3, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'sasuke@gmail.com', 'admin', 'N', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_desa`
--
ALTER TABLE `tentang_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tentang_desa`
--
ALTER TABLE `tentang_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
