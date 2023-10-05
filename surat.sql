-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2023 at 12:56 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_image`
--

CREATE TABLE `data_image` (
  `id` int NOT NULL,
  `skck_id` int NOT NULL,
  `skd_id` int NOT NULL,
  `skdu_id` int NOT NULL,
  `sku_id` int NOT NULL,
  `sktm_id` int NOT NULL,
  `skp_id` int NOT NULL,
  `skbm_id` int NOT NULL,
  `jenis_surat_id` int NOT NULL,
  `path_image` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_image`
--

INSERT INTO `data_image` (`id`, `skck_id`, `skd_id`, `skdu_id`, `sku_id`, `sktm_id`, `skp_id`, `skbm_id`, `jenis_surat_id`, `path_image`) VALUES
(63, 0, 0, 0, 0, 0, 0, 0, 1, '_1400592.webp'),
(64, 0, 0, 0, 0, 0, 0, 0, 1, '_1400592.webp'),
(65, 0, 0, 0, 0, 0, 0, 0, 1, '_1400592.webp'),
(66, 0, 0, 0, 0, 0, 0, 0, 1, '_1400592.webp'),
(67, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(68, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(69, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(70, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(71, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(72, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(73, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(74, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(75, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(76, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(77, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(78, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(79, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(80, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(81, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(82, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(83, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(84, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(85, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(86, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(87, 0, 0, 0, 0, 0, 0, 0, 1, 'ktp.jpg'),
(88, 0, 0, 24, 0, 0, 0, 0, 1, 'Febrian_Ismail_Suni_.png'),
(89, 0, 0, 24, 0, 0, 0, 0, 1, 'Febrian_Ismail_Suni_.png'),
(90, 0, 0, 29, 0, 0, 0, 0, 1, 'febrian_20510001.jpeg'),
(91, 0, 0, 29, 0, 0, 0, 0, 2, '_2350044.jpg'),
(92, 0, 0, 29, 0, 0, 0, 0, 3, 'bukti.jpeg'),
(93, 0, 0, 29, 0, 0, 0, 0, 3, ''),
(94, 0, 0, 29, 0, 0, 0, 0, 4, 'pfp.png'),
(95, 0, 0, 29, 0, 0, 0, 0, 4, 'pfp.png'),
(107, 0, 0, 30, 0, 0, 0, 0, 3, 'pfp.png'),
(110, 0, 0, 30, 0, 0, 0, 0, 1, 'bukti.jpeg'),
(111, 0, 0, 30, 0, 0, 0, 0, 1, 'bukti.jpeg'),
(112, 0, 0, 30, 0, 0, 0, 0, 1, 'bukti.jpeg'),
(113, 2, 0, 0, 0, 0, 0, 0, 1, 'mind_01.jpg'),
(114, 2, 0, 34, 0, 0, 0, 0, 2, 'pfp.png'),
(115, 2, 0, 34, 0, 0, 0, 0, 3, 'Untitled__2_.png'),
(116, 0, 0, 31, 0, 0, 0, 0, 1, 'diagram.png'),
(117, 0, 0, 31, 0, 0, 0, 0, 3, 'febrian_20510001.jpeg'),
(118, 0, 0, 31, 0, 0, 0, 0, 3, 'febrian_20510001.jpeg'),
(119, 0, 0, 31, 0, 0, 0, 0, 2, '_2350044.jpg'),
(120, 0, 0, 38, 0, 0, 0, 0, 1, 'mind_01.jpg'),
(121, 0, 0, 32, 0, 0, 0, 0, 2, 'logo_Kominfo.png'),
(122, 0, 0, 40, 0, 0, 0, 0, 4, 'mind_01.jpg'),
(123, 0, 0, 40, 0, 0, 0, 0, 1, '_2350044.jpg'),
(129, 0, 0, 40, 0, 0, 0, 0, 3, '_2350044.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_jenis_persyaratan`
--

CREATE TABLE `data_jenis_persyaratan` (
  `id` int NOT NULL,
  `nama_persyaratan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_jenis_persyaratan`
--

INSERT INTO `data_jenis_persyaratan` (`id`, `nama_persyaratan`) VALUES
(1, 'Scan KK'),
(2, 'Scan KTP'),
(3, 'Scan RT/RW'),
(4, 'fototempat_usaha'),
(5, 'Scan Pernyataan materai');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skck`
--

CREATE TABLE `data_request_skck` (
  `id_request_skck` int NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text COLLATE utf8mb4_general_ci NOT NULL,
  `scan_kk` text COLLATE utf8mb4_general_ci NOT NULL,
  `scan_rt` text COLLATE utf8mb4_general_ci NOT NULL,
  `keperluan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `request` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  `acc` date NOT NULL,
  `pendidikan` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `tujuan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `berlaku_tgl` date NOT NULL,
  `keterangan_rt` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skd`
--

CREATE TABLE `data_request_skd` (
  `id_request_skd` int NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'DOMISILI',
  `status` int NOT NULL DEFAULT '0',
  `acc` date NOT NULL,
  `scan_rt` text NOT NULL,
  `foto_tempat` text NOT NULL,
  `scan_pernyataan` text NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `nama_usaha` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_skd`
--

INSERT INTO `data_request_skd` (`id_request_skd`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`, `scan_rt`, `foto_tempat`, `scan_pernyataan`, `pekerjaan`, `alamat`, `kelurahan`, `kecamatan`, `nama_usaha`, `kota`) VALUES
(21, '1111111111111111', '2021-10-18 06:46:28', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Administrasi Bank', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2021-10-18', '', '', '0', '', '', '', '', '0', ''),
(23, '777', '2023-07-11 03:14:07', '777_.jpg', '777_.jpg', 'surat tempat', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2023-07-11', '', '', '0', '', '', '', '', '0', ''),
(24, '777', '2023-07-14 12:06:06', '777_.jpg', '777_.jpg', 'pidah tempat', '', 'DOMISILI', 1, '0000-00-00', '', '', '0', '', '', '', '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skp`
--

CREATE TABLE `data_request_skp` (
  `id_request_skp` int NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'LAINNYA',
  `status` int NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_skp`
--

INSERT INTO `data_request_skp` (`id_request_skp`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(10, '1111111111111111', '2021-10-18 06:14:07', '1111111111111111_.jpg', '1111111111111111_.jpg', 'KTP Hilang', 'Surat dicetak, bisa diambil!', 'LAINNYA', 3, '2021-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_sktm`
--

CREATE TABLE `data_request_sktm` (
  `id_request_sktm` int NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'TIDAK MAMPU',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `status` int NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_sktm`
--

INSERT INTO `data_request_sktm` (`id_request_sktm`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `request`, `keterangan`, `status`, `acc`) VALUES
(50, '1111111111111111', '2021-10-17 10:06:35', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Beasiswa Sekolah', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2021-10-17'),
(53, '777', '2023-07-14 11:27:40', '777_.jpg', '777_.jpg', '23', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_sku`
--

CREATE TABLE `data_request_sku` (
  `id_request_sku` int NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `usaha` varchar(30) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'USAHA',
  `status` int NOT NULL DEFAULT '0',
  `acc` date NOT NULL,
  `scan_rt` text NOT NULL,
  `foto_tempat` text NOT NULL,
  `scan_pernyataan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_sku`
--

INSERT INTO `data_request_sku` (`id_request_sku`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `usaha`, `keperluan`, `keterangan`, `request`, `status`, `acc`, `scan_rt`, `foto_tempat`, `scan_pernyataan`) VALUES
(9, '1111111111111111', '2021-10-17 10:37:58', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Warung Kopi', 'Bantuan UMKM', 'Surat dicetak, bisa diambil!', 'USAHA', 3, '2021-10-17', '', '', ''),
(12, '777', '2023-07-11 03:05:21', '777 - rian_.jpg', '777 - rian_.jpg', 'coffee', 'surat ', 'Surat sedang dalam proses cetak', 'USAHA', 2, '2023-07-21', '', '', ''),
(13, '777', '2023-07-16 11:39:27', '777_.jpg', '777_.jpg', '', '', 'Data sedang diperiksa oleh Staf', 'USAHA', 1, '0000-00-00', 'pexels-aleksandar-pasaric-2341830.jpg', 'rumus linkaran.png', 'SWICI-removebg-preview.png'),
(14, '777', '2023-07-17 04:59:54', '777_.jpg', '777_.jpg', 'bakso', 'data', 'Data sedang diperiksa oleh Staf', 'USAHA', 0, '0000-00-00', 'Virtual Background Peserta.png', 'WhatsApp Image 2023-03-15 at 10.18.13.jpg', 'logo yumy.png'),
(15, '777', '2023-08-10 08:51:52', '777_.jpg', '777_.jpg', '21', 'asda', 'Data sedang diperiksa oleh Staf', 'USAHA', 0, '0000-00-00', '777_.jpg', '777_.jpg', '777_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `nik` varchar(16) NOT NULL,
  `password` varchar(225) NOT NULL,
  `hak_akses` varchar(225) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `status_warga` varchar(30) NOT NULL,
  `status_perkawinan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`nik`, `password`, `hak_akses`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `agama`, `alamat`, `telepon`, `status_warga`, `status_perkawinan`) VALUES
('', '', 'Lurah', '', '0000-00-00', '', '', '', '', '', '', ''),
('009908', 'kjnkjn', 'Pemohon', 'NJBKJBH', '2021-12-11', 'kjnkj', 'Laki-Laki', '', 'kjnhkjn', '', 'Kerja', ''),
('1', '1', 'Lurah', 'coba', '2021-10-20', 'coba', 'Laki-Laki', '', 'coba', '', 'Kerja', ''),
('1111111111111111', '12345', 'Pemohon', 'Fachri Shofiyyuddin Ahmad', '2021-10-17', 'Jakarta', 'Laki-Laki', 'Islam', '        Jakarta RT 01/RW 07', '087897315639', 'Sekolah', ''),
('123', '123', 'Pemohon', 'feb', '2001-12-12', 'jkt', 'Perempuan', '', '', '', '', ''),
('2', '2', 'Staf', 'coba', '2021-10-20', 'coba', 'Perempuan', '', 'coba', '', 'Kerja', ''),
('21312', '12345', 'Staf', 'febrian', '2023-06-07', 'ssss', 'Laki-Laki', '', 'sadas', '', 'Kerja', ''),
('222', '123', 'Sekertaris', 'rianisma', '0000-00-00', 'jakarta', 'Laki-Laki', '', '', '', 'Sekolah', ''),
('777', '12345', 'Pemohon', 'rian', '2023-08-10', 'asd', 'Laki-Laki', '', ' ', '089649945991', '', 'Belum'),
('888', '12345', 'Pemohon', 'cobalagi', '2021-10-20', 'cobalagi', 'Perempuan', '', 'coba', '', 'Sekolah', ''),
('8923478923789489', 'tes', 'Pemohon', 'coba', '2022-05-22', 'kudus', 'Laki-Laki', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_blm_nikah`
--

CREATE TABLE `t_blm_nikah` (
  `id_blm` int NOT NULL,
  `nama` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `nomorkk` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `agama` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `status_perkawinan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `keperluan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `tujuan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `berlaku_tgl` date NOT NULL,
  `berdasrkan_keterangan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `acc` date NOT NULL,
  `request` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(16) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_keramaian`
--

CREATE TABLE `t_keramaian` (
  `id_keramaian` int NOT NULL,
  `nama` int NOT NULL,
  `nomorkk` int NOT NULL,
  `nik` int NOT NULL,
  `tempat` int NOT NULL,
  `tgl_lahir` int NOT NULL,
  `jk` int NOT NULL,
  `agama` int NOT NULL,
  `status_perkawinan` int NOT NULL,
  `pekerjaan` int NOT NULL,
  `alamat` int NOT NULL,
  `pendidikan` int NOT NULL,
  `keperluan` int NOT NULL,
  `tujuan` int NOT NULL,
  `berlaku_tgl` int NOT NULL,
  `acara` int NOT NULL,
  `padatgl` int NOT NULL,
  `keterangan` int NOT NULL,
  `acc` int NOT NULL,
  `request` int NOT NULL,
  `status` int NOT NULL,
  `tanggal_request` int NOT NULL,
  `nik_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_pernyataan`
--

CREATE TABLE `t_pernyataan` (
  `id_pernyataan` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `nomorkk` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `menyatakan_bahwa` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `untuk` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `acc` date NOT NULL,
  `status` int NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keperluan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `nik_user` varchar(60) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_pindah_nikah`
--

CREATE TABLE `t_pindah_nikah` (
  `id_pindah_nikah` int NOT NULL,
  `nama` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `nomorkk` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `jk` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kebangsaan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `agama` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `status_perkawinan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pindahke` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `kelurahan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `kecamatan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `kab/kota` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `provinsi` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `acc` date NOT NULL,
  `request` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(16) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_skck`
--

CREATE TABLE `t_skck` (
  `id_skck` int NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nomorkk` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `agama` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `status_perkawinan` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `keperluan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `tujuan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `berlaku_tgl` date NOT NULL,
  `bedasarkan_keterangan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `nik_user` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `acc` date NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `request` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  `berdasarkan_rtrw` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_skck`
--

INSERT INTO `t_skck` (`id_skck`, `nik`, `nama`, `nomorkk`, `tempat`, `tgl_lahir`, `jk`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat`, `pendidikan`, `keperluan`, `tujuan`, `berlaku_tgl`, `bedasarkan_keterangan`, `nik_user`, `keterangan`, `acc`, `tanggal_request`, `request`, `status`, `berdasarkan_rtrw`) VALUES
(1, '2131', 'fasf', '121213', 'jkt', '2023-08-09', 'laki_laki', 'islam', 'belum', 'buruh', 'la su', 's1', 'kerja', 'asda', '0000-00-00', 'surat ini', '777', 'Surat sedang dalam proses cetak', '2023-08-10', '2023-08-10 10:48:11', '', 2, 'untuk keperluan kerja'),
(2, '12312', 'ihsan', '213471', 'jkt', '2023-08-09', 'laki_laki', 'islam', 'belum', 'buruh', 'la sucipto', 's1', 'apa aja', 'dasdasd', '2023-08-09', 'surat ini perlu', '777', '', '0000-00-00', '2023-08-09 08:29:20', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `t_skdu`
--

CREATE TABLE `t_skdu` (
  `id_skdu` int NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agama` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kelurahan` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kecamatan` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kota` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_usaha` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `surat_keterangan` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bidang_surat` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nomer_surat` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(60) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `acc` date DEFAULT NULL,
  `nik` varchar(16) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `request` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_skdu`
--

INSERT INTO `t_skdu` (`id_skdu`, `nama`, `tempat`, `tgl_lahir`, `jk`, `agama`, `pekerjaan`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `nama_usaha`, `surat_keterangan`, `bidang_surat`, `nomer_surat`, `keterangan`, `acc`, `nik`, `tanggal_request`, `nik_user`, `request`, `status`, `keperluan`) VALUES
(33, 'rian', 'jakarta', '2023-08-09', 'laki_laki', 'islam', 'usaha', 'tlogomas', 'tlogomas', 'lowokwaru', 'malang', 'samsung cell', 'surat izin pindah', 'conter', NULL, 'Surat dicetak, bisa diambil!', '2023-08-09', '777', '2023-08-10 12:26:37', '777', '', 3, 'SKDU TERLAKSANAKAN'),
(34, 'rian', 'jakarta', '2023-08-16', 'laki_laki', 'islam', 'buruh', 'tlogomas malang', 'tlogomas', 'lowokwaru', 'malang', 'glade', 'surat izin', 'barber', NULL, NULL, NULL, '777', '2023-08-10 12:26:40', '777', '', 1, 'SKDU TERLAKSANAKAN'),
(38, 'rian', 'jkt', '2023-08-10', 'laki_laki', 'islam', 'asda', 'asd', 'asda', 'asd', 'asd', 'asd', 'asd', 'asd', NULL, NULL, NULL, '777', '2023-08-10 12:26:41', '777', '', 0, 'SKDU TERLAKSANAKAN'),
(39, 'rian', 'jkt', '2023-08-10', 'laki_laki', 'islam', 'pengusaha', 'jl tlogomas', 'tlogomas', 'lowokwaru', 'malang', 'galaxy', 'membuat izin diri', 'komputer', '9018209440918', '', '2023-08-10', '777', '2023-08-10 12:26:42', '777', '', 3, 'SKDU TERLAKSANAKAN'),
(40, 'rian', '', '0000-00-00', 'laki_laki', '', '', '', '', '', '', '', '', '', '', 'asdadsa', '2023-08-09', '777', '2023-08-10 12:53:11', '777', '', 0, 'SKDU TERLAKSANAKAN'),
(41, 'rian', '', '0000-00-00', 'laki_laki', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '777', '2023-08-10 12:26:45', '777', '', 0, 'SKDU TERLAKSANAKAN');

-- --------------------------------------------------------

--
-- Table structure for table `t_sktm`
--

CREATE TABLE `t_sktm` (
  `id_sktm` int NOT NULL,
  `nama` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `nomorkk` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `agama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status_perkawinan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `keperluan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `tujuan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `berlaku_tgl` date NOT NULL,
  `berdasarkan_keterangan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `acc` date NOT NULL,
  `request` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(60) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_sktm`
--

INSERT INTO `t_sktm` (`id_sktm`, `nama`, `nomorkk`, `nik`, `tempat`, `tgl_lahir`, `jk`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat`, `pendidikan`, `keperluan`, `tujuan`, `berlaku_tgl`, `berdasarkan_keterangan`, `keterangan`, `acc`, `request`, `status`, `tanggal_request`, `nik_user`) VALUES
(1, '', '123412', '', 'jakarta', '2002-02-20', 'Laki-Laki', 'Islam', 'belum', 'buruh', ' JL raya Tlogomas gg 8 a', 'si', 'untuk sekolah', 'izin', '0000-00-00', 'ada', '', '0000-00-00', '', 0, '2023-08-10 08:22:13', '777'),
(2, '777', '312', '777', 'jakarta', '2002-02-20', 'Laki-Laki', '', '1231', '2131', ' JL raya Tlogomas gg 8 a', '1231', '123', '123', '0000-00-00', '12312', '', '0000-00-00', '', 0, '2023-08-10 08:25:36', '777'),
(3, 'rian', '21312', '777', 'jakarta', '2002-02-20', 'Laki-Laki', 'Islam', 'belum', 'buruh', ' JL raya Tlogomas gg 8 a', 's1', 'sekolah', 'asdaseda', '0000-00-00', '2134124', '', '0000-00-00', '', 0, '2023-08-10 08:32:07', '777');

-- --------------------------------------------------------

--
-- Table structure for table `t_sku`
--

CREATE TABLE `t_sku` (
  `id_sku` int NOT NULL,
  `nama` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `jk` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `status_perkawinan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `kewarganegaraan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `keperluan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `berlaku_tgl` date NOT NULL,
  `berdasarkan_keterangan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `acc` date NOT NULL,
  `request` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_image`
--
ALTER TABLE `data_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jenis_persyaratan`
--
ALTER TABLE `data_jenis_persyaratan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_request_skck`
--
ALTER TABLE `data_request_skck`
  ADD PRIMARY KEY (`id_request_skck`);

--
-- Indexes for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD PRIMARY KEY (`id_request_skd`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD PRIMARY KEY (`id_request_skp`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD PRIMARY KEY (`id_request_sktm`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD PRIMARY KEY (`id_request_sku`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `t_skck`
--
ALTER TABLE `t_skck`
  ADD PRIMARY KEY (`id_skck`);

--
-- Indexes for table `t_skdu`
--
ALTER TABLE `t_skdu`
  ADD PRIMARY KEY (`id_skdu`);

--
-- Indexes for table `t_sktm`
--
ALTER TABLE `t_sktm`
  ADD PRIMARY KEY (`id_sktm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_image`
--
ALTER TABLE `data_image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `data_jenis_persyaratan`
--
ALTER TABLE `data_jenis_persyaratan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_request_skck`
--
ALTER TABLE `data_request_skck`
  MODIFY `id_request_skck` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  MODIFY `id_request_skd` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `data_request_skp`
--
ALTER TABLE `data_request_skp`
  MODIFY `id_request_skp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  MODIFY `id_request_sktm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  MODIFY `id_request_sku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_skck`
--
ALTER TABLE `t_skck`
  MODIFY `id_skck` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_skdu`
--
ALTER TABLE `t_skdu`
  MODIFY `id_skdu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `t_sktm`
--
ALTER TABLE `t_sktm`
  MODIFY `id_sktm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD CONSTRAINT `data_request_skd_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD CONSTRAINT `data_request_skp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD CONSTRAINT `data_request_sktm_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD CONSTRAINT `data_request_sku_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
