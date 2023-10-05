-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for surat
DROP DATABASE IF EXISTS `surat`;
CREATE DATABASE IF NOT EXISTS `surat` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `surat`;

-- Dumping structure for table surat.data_image
DROP TABLE IF EXISTS `data_image`;
CREATE TABLE IF NOT EXISTS `data_image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `skck_id` int DEFAULT NULL,
  `skd_id` int DEFAULT NULL,
  `skdu_id` int DEFAULT NULL,
  `sku_id` int DEFAULT NULL,
  `sktm_id` int DEFAULT NULL,
  `skp_id` int DEFAULT NULL,
  `keramaian_id` int DEFAULT NULL,
  `skbm_id` int DEFAULT NULL,
  `nikah_id` int DEFAULT NULL,
  `blm_nikah_id` int DEFAULT NULL,
  `jenis_surat_id` int DEFAULT NULL,
  `path_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `upload_surat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `pernyataan_id` int DEFAULT NULL,
  `pindah_nikah_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=217 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table surat.data_image: ~70 rows (approximately)
REPLACE INTO `data_image` (`id`, `skck_id`, `skd_id`, `skdu_id`, `sku_id`, `sktm_id`, `skp_id`, `keramaian_id`, `skbm_id`, `nikah_id`, `blm_nikah_id`, `jenis_surat_id`, `path_image`, `upload_surat`, `pernyataan_id`, `pindah_nikah_id`) VALUES
	(63, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, '_1400592.webp', NULL, NULL, NULL),
	(64, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, '_1400592.webp', NULL, NULL, NULL),
	(65, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, '_1400592.webp', NULL, NULL, NULL),
	(66, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, '_1400592.webp', NULL, NULL, NULL),
	(67, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(68, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(69, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(70, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(71, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(72, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(73, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(74, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(75, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(76, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(77, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(78, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(79, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(80, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(81, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(82, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(83, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(84, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(85, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(86, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(87, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL),
	(88, 0, 0, 24, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'Febrian_Ismail_Suni_.png', NULL, NULL, NULL),
	(89, 0, 0, 24, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'Febrian_Ismail_Suni_.png', NULL, NULL, NULL),
	(90, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'febrian_20510001.jpeg', NULL, NULL, NULL),
	(91, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 2, '_2350044.jpg', NULL, NULL, NULL),
	(92, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 3, 'bukti.jpeg', NULL, NULL, NULL),
	(93, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 3, '', NULL, NULL, NULL),
	(94, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 4, 'pfp.png', NULL, NULL, NULL),
	(95, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 4, 'pfp.png', NULL, NULL, NULL),
	(107, 0, 0, 30, 0, 0, 0, NULL, 0, NULL, NULL, 3, 'pfp.png', NULL, NULL, NULL),
	(110, 0, 0, 30, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'bukti.jpeg', NULL, NULL, NULL),
	(111, 0, 0, 30, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'bukti.jpeg', NULL, NULL, NULL),
	(112, 0, 0, 30, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'bukti.jpeg', NULL, NULL, NULL),
	(113, 2, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'mind_01.jpg', NULL, NULL, NULL),
	(114, 2, 0, 34, 0, 0, 0, NULL, 0, NULL, NULL, 2, 'pfp.png', NULL, NULL, NULL),
	(115, 2, 0, 34, 0, 0, 0, NULL, 0, NULL, NULL, 3, 'Untitled__2_.png', NULL, NULL, NULL),
	(116, 0, 0, 31, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'diagram.png', NULL, NULL, NULL),
	(117, 0, 0, 31, 0, 0, 0, NULL, 0, NULL, NULL, 3, 'febrian_20510001.jpeg', NULL, NULL, NULL),
	(118, 0, 0, 31, 0, 0, 0, NULL, 0, NULL, NULL, 3, 'febrian_20510001.jpeg', NULL, NULL, NULL),
	(119, 0, 0, 31, 0, 0, 0, NULL, 0, NULL, NULL, 2, '_2350044.jpg', NULL, NULL, NULL),
	(120, 0, 0, 38, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'mind_01.jpg', NULL, NULL, NULL),
	(121, 0, 0, 32, 0, 0, 0, NULL, 0, NULL, NULL, 2, 'logo_Kominfo.png', NULL, NULL, NULL),
	(122, 0, 0, 40, 0, 0, 0, NULL, 0, NULL, NULL, 4, 'mind_01.jpg', NULL, NULL, NULL),
	(123, 0, 0, 40, 0, 0, 0, NULL, 0, NULL, NULL, 1, '_2350044.jpg', NULL, NULL, NULL),
	(129, 0, 0, 40, 0, 0, 0, NULL, 0, NULL, NULL, 3, '_2350044.jpg', NULL, NULL, NULL),
	(142, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 2, 'Cool_Anime_4k_Wallpaper.jpeg', NULL, NULL, NULL),
	(148, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, 2, 'Hinahata_Hina_Aug_2022.jpg', NULL, NULL, NULL),
	(149, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, 2, 'hqdefault.jpg', NULL, NULL, NULL),
	(153, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, '_4595683.webp', NULL, NULL, NULL),
	(154, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 4, 'WhatsApp_Image_2023_05_22_at_18.19.30.jpg', NULL, NULL, NULL),
	(157, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 3, 'faktur_tv.jpg', NULL, NULL, NULL),
	(161, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 5, '_9c94b14cce2eb3316cc0489ea6f3a5ff.jpg', NULL, NULL, NULL),
	(162, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 3, 'bg_basara2.jpg', NULL, NULL, NULL),
	(168, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, 'Dakirby309_Simply_Styled_OS_Ubuntu.ico', NULL, NULL, NULL),
	(170, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3, 'Akun_Ubisoft.png', NULL, NULL, NULL),
	(172, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, '_15cc91e9e24b52336a858c2a785771b5.jpg', NULL, NULL, NULL),
	(173, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, '_9c94b14cce2eb3316cc0489ea6f3a5ff.jpg', NULL, NULL, NULL),
	(174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, '_15cc91e9e24b52336a858c2a785771b5.jpg', NULL, NULL, NULL),
	(175, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '_330799431_908857103765944_6114603119020011916_n.jpg', NULL, NULL, NULL),
	(176, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, 2, '_15cc91e9e24b52336a858c2a785771b5.jpg', NULL, NULL, NULL),
	(177, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, 4, '_0ed511e493d147e887e7c95b49c22626_c5_1000x1000.jpg', NULL, NULL, NULL),
	(179, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '_330798621_557152046363243_7880332052034769409_n.jpg', NULL, NULL),
	(185, NULL, NULL, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '_730x480_img_15430_need_for_speed_underground_2.jpg', NULL, NULL),
	(186, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, 1, 'denah_rumah_ukuran_7x12_.jpeg', NULL, NULL, NULL),
	(187, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'denah_rumah_ukuran_7x12_.jpeg', NULL, 1, NULL),
	(188, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '', NULL, 2, NULL),
	(189, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'ze.jfif', NULL, 2, NULL),
	(190, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, 1, 'asus_vivobook_tablet_oled_full_9894b71c.webp', NULL, NULL, NULL),
	(191, NULL, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, 1, '_168399.jpg', NULL, NULL, NULL),
	(192, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'background_design.jpg', NULL, NULL, NULL),
	(193, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, 2, '_1210455.jpg', NULL, NULL, NULL),
	(194, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, 1, 'Febrian_Ismail_Suni_.png', NULL, NULL, NULL),
	(195, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, 2, '_12.png', NULL, NULL, NULL),
	(196, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '_168399.jpg', NULL, NULL, NULL),
	(197, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 1, '_168399.jpg', NULL, NULL, NULL),
	(198, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 1, 'denah_rumah_ukuran_7x12_.jpeg', NULL, NULL, NULL),
	(199, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 1, '_1210455.jpg', NULL, NULL, NULL),
	(200, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 3, '_2000_x_797_web_hero_skyline_2_6b921811_cd45_42fd_990a_ba60c7fba1f0.jpg', NULL, NULL, NULL),
	(201, NULL, NULL, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '_1210455.jpg', NULL, NULL, NULL),
	(202, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '_1210455.jpg', NULL, NULL, NULL),
	(203, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Febrian_Ismail_Suni_.png', NULL, 3, NULL),
	(204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, 1, 'tanda_bukti.jpeg', NULL, NULL, NULL),
	(205, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, 'asus_vivobook_tablet_oled_full_9894b71c.webp', NULL, NULL, NULL),
	(206, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, 1, 'asus_vivobook_tablet_oled_full_9894b71c.webp', NULL, NULL, NULL),
	(207, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'denah_rumah_ukuran_7x12_.jpeg', NULL, NULL, NULL),
	(208, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, 1, '_168399.jpg', NULL, NULL, NULL),
	(209, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, 2, 'back.jfif', NULL, NULL, NULL),
	(210, NULL, NULL, 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'kampus_uniga_malang_53.jpg', NULL, NULL, NULL),
	(211, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Untitled.png', NULL, NULL, NULL),
	(212, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'asus_vivobook_tablet_oled_full_9894b71c.webp', NULL, 4, NULL),
	(213, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 'ss.png', NULL, 5, NULL),
	(214, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL, 1, 'diagram.png', NULL, NULL, NULL),
	(215, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '_168399.jpg', NULL, NULL),
	(216, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WhatsApp_Image_2023_03_15_at_10.18.13.jpg', NULL, NULL);

-- Dumping structure for table surat.data_jenis_persyaratan
DROP TABLE IF EXISTS `data_jenis_persyaratan`;
CREATE TABLE IF NOT EXISTS `data_jenis_persyaratan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_persyaratan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table surat.data_jenis_persyaratan: ~5 rows (approximately)
REPLACE INTO `data_jenis_persyaratan` (`id`, `nama_persyaratan`) VALUES
	(1, 'Scan KK'),
	(2, 'Scan KTP'),
	(3, 'Scan RT/RW'),
	(4, 'fototempat_usaha'),
	(5, 'Scan Pernyataan materai'),
	(6, 'scan Akte lahir '),
	(7, 'Scan ijasah terkahir'),
	(8, 'scan pemeriksa kesahatan'),
	(9, 'scan surat pernyataan penghasilan'),
	(10, 'scan tanda trima dari mas rio');

-- Dumping structure for table surat.data_user
DROP TABLE IF EXISTS `data_user`;
CREATE TABLE IF NOT EXISTS `data_user` (
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
  `status_perkawinan` varchar(25) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table surat.data_user: ~11 rows (approximately)
REPLACE INTO `data_user` (`nik`, `password`, `hak_akses`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `agama`, `alamat`, `telepon`, `status_warga`, `status_perkawinan`) VALUES
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

-- Dumping structure for table surat.t_blm_nikah
DROP TABLE IF EXISTS `t_blm_nikah`;
CREATE TABLE IF NOT EXISTS `t_blm_nikah` (
  `id_blm_nikah` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nomorkk` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat_lahir` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_perkawinan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pendidikan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keperluan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tujuan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `berlaku_tgl` date DEFAULT NULL,
  `berdasrkan_keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date DEFAULT NULL,
  `request` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'blmnikah',
  `status` int DEFAULT '0',
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_blm_nikah`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table surat.t_blm_nikah: ~0 rows (approximately)
REPLACE INTO `t_blm_nikah` (`id_blm_nikah`, `nama`, `nik`, `nomorkk`, `tempat_lahir`, `tgl_lahir`, `jk`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat`, `pendidikan`, `keperluan`, `tujuan`, `berlaku_tgl`, `berdasrkan_keterangan`, `keterangan`, `acc`, `request`, `status`, `tanggal_request`, `nik_user`) VALUES
	(3, 'rianasda', '7771231', '1312', 'jakarta', '2023-08-18', 'Laki-Laki', 'asda', 'asdas', 'asda', 'asda', 'asda', 'asdas', 'asdasd', '2023-08-18', 'asdasd', 'Surat dicetak, bisa diambil! Di kelurahan', '2023-08-19', NULL, 3, '2023-08-19 02:15:20', '777'),
	(4, 'rianasdas', '77721312', '123123', 'asdas', '2023-08-18', 'Perempuan', 'asdas', 'asdas', 'asdasd', 'asdas', 'asdas', 'asdas', 'asdad', '2023-08-18', 'asdasd', 'Surat sedang dalam proses cetak', '2023-08-26', NULL, 2, '2023-08-19 02:13:37', '777');

-- Dumping structure for table surat.t_keramaian
DROP TABLE IF EXISTS `t_keramaian`;
CREATE TABLE IF NOT EXISTS `t_keramaian` (
  `id_keramaian` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nomorkk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_perkawinan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pendidikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keperluan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `berlaku_tgl` date DEFAULT NULL,
  `acara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `padatgl` date DEFAULT NULL,
  `keterangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date DEFAULT NULL,
  `request` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'keramaian',
  `status` int DEFAULT '0',
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_keramaian`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table surat.t_keramaian: ~0 rows (approximately)
REPLACE INTO `t_keramaian` (`id_keramaian`, `nama`, `nomorkk`, `nik`, `tempat`, `tgl_lahir`, `jk`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat`, `pendidikan`, `keperluan`, `tujuan`, `berlaku_tgl`, `acara`, `padatgl`, `keterangan`, `acc`, `request`, `status`, `tanggal_request`, `nik_user`) VALUES
	(4, 'rianasds', 'asdas', '77712312', 'asdas', '2023-08-18', 'Laki-Laki', 'asdasd', 'asdas', 'asdas', 'asdas', 'asd', 'asda', 'asdas', '2023-08-18', 'asdasd', '2023-08-18', 'Surat sedang diperiksa oleh sekertaris', '2023-08-18', NULL, 1, '2023-08-18 16:17:24', '777'),
	(5, 'feb', '21312', '1231231', 'asda', '2023-08-19', 'Laki-Laki', 'asdasd', 'asdas', 'asdas', 'asda', '', 'asdas', 'asda', '2023-08-19', 'asdad', '2023-08-19', 'Data sedang diperiksa oleh Staf', NULL, NULL, 0, '2023-08-18 23:47:14', '123');

-- Dumping structure for table surat.t_nikah
DROP TABLE IF EXISTS `t_nikah`;
CREATE TABLE IF NOT EXISTS `t_nikah` (
  `id_nikah` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nik_nikah` varchar(17) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kewarganegaraan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `agama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `status_pernikahan_laki` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status_pernikahan_perempuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama_istri_suami_terdahulu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal_request` date DEFAULT NULL,
  `nik_user` int DEFAULT NULL,
  `nama_lengkap_pria` varchar(100) DEFAULT NULL,
  `nik_pria` varchar(17) DEFAULT NULL,
  `tempat_lahir_pria` varchar(100) DEFAULT NULL,
  `kewarganegaraan_pria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `agama_pria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pekerjaan_pria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `alamat_pria` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `tgl_lahir_pria` date DEFAULT NULL,
  `nama_wanita` varchar(255) DEFAULT NULL,
  `nik_wanita` varchar(255) DEFAULT NULL,
  `tempat_wanita` varchar(255) DEFAULT NULL,
  `tgl_lahir_wanita` date DEFAULT NULL,
  `kewarganegaraan_wanita` varchar(255) DEFAULT NULL,
  `agama_wanita` varchar(255) DEFAULT NULL,
  `pekerjaan_wanita` varchar(255) DEFAULT NULL,
  `alamat_wanita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `status` int DEFAULT '0',
  `acc` varchar(255) DEFAULT NULL,
  `status_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keterangan` varchar(50) DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(50) DEFAULT 'nikah',
  `keperluan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'buat nikah',
  PRIMARY KEY (`id_nikah`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table surat.t_nikah: ~1 rows (approximately)
REPLACE INTO `t_nikah` (`id_nikah`, `nama`, `nik_nikah`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `status_pernikahan_laki`, `status_pernikahan_perempuan`, `nama_istri_suami_terdahulu`, `tanggal_request`, `nik_user`, `nama_lengkap_pria`, `nik_pria`, `tempat_lahir_pria`, `kewarganegaraan_pria`, `agama_pria`, `pekerjaan_pria`, `alamat_pria`, `tgl_lahir_pria`, `nama_wanita`, `nik_wanita`, `tempat_wanita`, `tgl_lahir_wanita`, `kewarganegaraan_wanita`, `agama_wanita`, `pekerjaan_wanita`, `alamat_wanita`, `status`, `acc`, `status_request`, `keterangan`, `request`, `keperluan`) VALUES
	(7, 'rianasd', '7771231', 'Perempuan', 'asd', '2023-08-18', 'asdasd', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asd', '2023-08-18', 777, 'asdas', 'asdas', 'asd', 'asdas', 'asdas', 'asda', 'asdas', '2002-02-20', 'asdas', 'asda', 'jakarta', '2002-02-20', 'asdasd', 'asdas', 'asdas', 'asdas', 3, '2023-08-19', '2023-08-19 02:29:11', 'Surat dicetak, bisa diambil! Di kelurahan', 'nikah', 'buat nikah');

-- Dumping structure for table surat.t_pernyataan
DROP TABLE IF EXISTS `t_pernyataan`;
CREATE TABLE IF NOT EXISTS `t_pernyataan` (
  `id_pernyataan` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nomorkk` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `menyatakan_bahwa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `untuk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date DEFAULT NULL,
  `status` int DEFAULT '0',
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keperluan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik_user` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `request` varchar(50) COLLATE utf8mb4_general_ci DEFAULT 'pernyataan',
  PRIMARY KEY (`id_pernyataan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table surat.t_pernyataan: ~0 rows (approximately)
REPLACE INTO `t_pernyataan` (`id_pernyataan`, `nama`, `tempat`, `tgl_lahir`, `jenis_kelamin`, `nik`, `nomorkk`, `alamat`, `pekerjaan`, `menyatakan_bahwa`, `untuk`, `keterangan`, `acc`, `status`, `tanggal_request`, `keperluan`, `nik_user`, `request`) VALUES
	(3, 'rianasda', 'asd', '2023-08-10', 'laki-laki', '7771231', '21e12312', ' asdas', 'asdas', 'asdas', 'asdasd', 'Data sedang diperiksa oleh Staf', NULL, 0, '2023-08-18 15:25:15', 'asda', '777', 'pernyataan'),
	(4, 'feb', 'jkt', '2001-12-12', 'laki-laki', '123', '1231', 'asdas', 'asdas', 'asdas', 'asdasd', 'Data sedang diperiksa oleh Staf', NULL, 0, '2023-08-18 23:53:42', 'asdas', '123', 'pernyataan'),
	(5, 'feb', 'jkt', '2001-12-12', 'laki-laki', '12312312', '1231', 'asda', 'asda', 'asdas', 'asda', 'Data sedang diperiksa oleh Staf', NULL, 0, '2023-08-18 23:58:46', 'asd', '123', 'pernyataan');

-- Dumping structure for table surat.t_pindah_nikah
DROP TABLE IF EXISTS `t_pindah_nikah`;
CREATE TABLE IF NOT EXISTS `t_pindah_nikah` (
  `id_pindah_nikah` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nomorkk` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jk` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kebangsaan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_perkawinan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pindahke` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kelurahan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kecamatan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kab/kota` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `provinsi` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date DEFAULT NULL,
  `request` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'pindahnikah',
  `status` int DEFAULT '0',
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_pindah_nikah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table surat.t_pindah_nikah: ~0 rows (approximately)

-- Dumping structure for table surat.t_skck
DROP TABLE IF EXISTS `t_skck`;
CREATE TABLE IF NOT EXISTS `t_skck` (
  `id_skck` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nomorkk` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_perkawinan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pendidikan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keperluan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tujuan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `berlaku_tgl` date DEFAULT NULL,
  `bedasarkan_keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik_user` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date DEFAULT NULL,
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `request` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'skck',
  `status` int DEFAULT '0',
  `berdasarkan_rtrw` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_skck`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table surat.t_skck: ~2 rows (approximately)
REPLACE INTO `t_skck` (`id_skck`, `nik`, `nama`, `nomorkk`, `tempat`, `tgl_lahir`, `jk`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat`, `pendidikan`, `keperluan`, `tujuan`, `berlaku_tgl`, `bedasarkan_keterangan`, `nik_user`, `keterangan`, `acc`, `tanggal_request`, `request`, `status`, `berdasarkan_rtrw`) VALUES
	(1, '888', 'fasf', '121213', 'jkt', '2023-08-09', 'laki_laki', 'islam', 'belum', 'buruh', 'la su', 's1', 'kerja', 'asda', '0000-00-00', 'surat ini', '777', 'Surat sedang dalam proses cetak', '2023-08-10', '2023-08-17 13:17:23', 'skck', 3, 'untuk keperluan kerja'),
	(2, '12312', 'ihsan', '213471', 'jkt', '2023-08-09', 'laki_laki', 'islam', 'belum', 'buruh', 'la sucipto', 's1', 'apa aja', 'dasdasd', '2023-08-09', 'surat ini perlu', '777', '', '0000-00-00', '2023-08-17 13:17:25', 'skck', 3, ''),
	(3, '777', 'rian', '12312123', 'asdas', '2023-08-18', 'laki_laki', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asdasd', '2023-08-18', NULL, '777', 'Data sedang diperiksa oleh Staf', NULL, '2023-08-18 15:24:04', NULL, 0, 'asdasd'),
	(4, '123', 'feb', '12312', 'asdsa', '2023-08-19', 'laki_laki', 'asdasd', 'asdas', 'asd', 'asdas', 'asdas', 'asdas', 'asd', '2023-08-19', NULL, '123', 'Surat dicetak, bisa diambil! Di kelurahan', '2023-08-19', '2023-08-19 00:21:03', NULL, 3, 'asdasd');

-- Dumping structure for table surat.t_skdu
DROP TABLE IF EXISTS `t_skdu`;
CREATE TABLE IF NOT EXISTS `t_skdu` (
  `id_skdu` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kelurahan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kecamatan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kota` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_usaha` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `surat_keterangan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bidang_surat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nomer_surat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `request` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'skdu',
  `status` int DEFAULT '0',
  `keperluan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_skdu`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table surat.t_skdu: ~6 rows (approximately)
REPLACE INTO `t_skdu` (`id_skdu`, `nama`, `tempat`, `tgl_lahir`, `jk`, `agama`, `pekerjaan`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `nama_usaha`, `surat_keterangan`, `bidang_surat`, `nomer_surat`, `keterangan`, `acc`, `nik`, `tanggal_request`, `nik_user`, `request`, `status`, `keperluan`) VALUES
	(33, 'rian', 'jakarta', '2023-08-09', 'laki_laki', 'islam', 'usaha', 'tlogomas', 'tlogomas', 'lowokwaru', 'malang', 'samsung cell', 'surat izin pindah', 'conter', NULL, 'Surat dicetak, bisa diambil!', '2023-08-09', '777', '2023-08-17 13:16:41', '777', 'skdu', 3, 'SKDU TERLAKSANAKAN'),
	(34, 'rian', 'jakarta', '2023-08-16', 'laki_laki', 'islam', 'buruh', 'tlogomas malang', 'tlogomas', 'lowokwaru', 'malang', 'glade', 'surat izin', 'barber', NULL, 'Surat sedang dalam proses cetak', '2023-08-19', '777', '2023-08-19 00:44:44', '777', 'skdu', 2, 'SKDU TERLAKSANAKAN'),
	(38, 'rian', 'jkt', '2023-08-10', 'laki_laki', 'islam', 'asda', 'asd', 'asda', 'asd', 'asd', 'asd', 'asd', 'asd', NULL, NULL, NULL, '777', '2023-08-17 13:16:45', '777', 'skdu', 0, 'SKDU TERLAKSANAKAN'),
	(39, 'rian', 'jkt', '2023-08-10', 'laki_laki', 'islam', 'pengusaha', 'jl tlogomas', 'tlogomas', 'lowokwaru', 'malang', 'galaxy', 'membuat izin diri', 'komputer', '9018209440918', '', '2023-08-10', '777', '2023-08-17 13:16:46', '777', 'skdu', 3, 'SKDU TERLAKSANAKAN'),
	(40, 'rian', '', '0000-00-00', 'laki_laki', '', '', '', '', '', '', '', '', '', '', 'asdadsa', '2023-08-09', '777', '2023-08-17 13:16:47', '777', 'skdu', 0, 'SKDU TERLAKSANAKAN'),
	(41, 'rian', '', '0000-00-00', 'laki_laki', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '777', '2023-08-17 13:16:46', '777', 'skdu', 0, 'SKDU TERLAKSANAKAN'),
	(42, 'rian', 'asd1231', '2023-08-10', 'laki_laki', 'sadas', 'sadas', 'asdas', 'asdas', 'asdas', 'asda', 'asdas', 'asd', 'asdas', 'asdas', 'Data sedang diperiksa oleh Staf', NULL, '777', '2023-08-18 15:23:06', '777', 'SKDU', 0, NULL),
	(43, 'febasd', 'jkt', '2001-12-12', 'laki_laki', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asd', 'asd', 'asda', 'asdas', 'asdas', 'Surat dicetak, bisa diambil! Di kelurahan', '2023-08-19', '123213', '2023-08-19 00:25:24', '123', 'skdu', 3, NULL);

-- Dumping structure for table surat.t_sktm
DROP TABLE IF EXISTS `t_sktm`;
CREATE TABLE IF NOT EXISTS `t_sktm` (
  `id_sktm` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nomorkk` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_perkawinan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pendidikan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keperluan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tujuan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `berlaku_tgl` date DEFAULT NULL,
  `berdasarkan_keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date DEFAULT NULL,
  `request` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'sktm',
  `status` int DEFAULT '0',
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_sktm`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table surat.t_sktm: ~2 rows (approximately)
REPLACE INTO `t_sktm` (`id_sktm`, `nama`, `nomorkk`, `nik`, `tempat`, `tgl_lahir`, `jk`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat`, `pendidikan`, `keperluan`, `tujuan`, `berlaku_tgl`, `berdasarkan_keterangan`, `keterangan`, `acc`, `request`, `status`, `tanggal_request`, `nik_user`) VALUES
	(2, '777', '312', '777', 'jakarta', '2002-02-20', 'Laki-Laki', '', '1231', '2131', '     JL raya Tlogomas gg 8 a', '1231', '123', '123', '2023-08-16', '12312', 'Data Belum Lengkap', '0000-00-00', '', 0, '2023-08-17 12:48:32', '777'),
	(5, '777', '', '777', 'jakarta', '2002-02-20', 'Laki-Laki', '', '1231', '2131', '    JL raya Tlogomas gg 8 a', 'asd', 'buatkerja', 'ksdfm', '2023-08-16', '12312', 'Surat dicetak, bisa diambil!', '2023-08-18', 'sktm', 3, '2023-08-19 02:21:52', '777'),
	(6, 'rian', 'asdas', '777', 'asdasdas', '2023-08-10', 'Laki-Laki', 'asdas', 'asdasd', 'adas', ' asdas', 'asdas', 'asdas', 'asdasd', '2023-08-18', 'asdasd', 'Surat dicetak, bisa diambil!', '2023-08-18', NULL, 3, '2023-08-18 14:57:08', '777'),
	(7, 'rianasda', 'asdas', '77712312', 'asdasdsa', '2023-08-10', 'Laki-Laki', 'asdsa', 'asdas', 'asdas', ' asdas', 'asdas', 'asdas', 'asdas', '2023-08-18', 'asdasd', NULL, NULL, NULL, 0, '2023-08-18 14:18:12', '777'),
	(8, 'rianasdas', '12312', '777231', 'asdasda', '2023-08-10', 'Laki-Laki', 'sadas', 'asdas', 'asdas', ' asd', 'asdas', 'asd', 'asdas', '2023-08-18', 'adasd', 'Data sedang diperiksa oleh Staf', NULL, NULL, 0, '2023-08-18 15:07:09', '777'),
	(10, 'feb', '1231', '123', 'jkt', '2001-12-12', 'Perempuan', 'asda', 'ada', 'ad', 'asdsa', 'asda', 'asda', 'asd', '2023-08-19', 'asdasd', 'Data sedang diperiksa oleh Staf', NULL, NULL, 0, '2023-08-18 23:46:20', '123'),
	(11, 'feb', '21312', '1231231', 'jkt', '2001-12-12', 'Perempuan', 'asdas', 'asd', 'asdas', 'asda', 'asdas', 'asd', 'asdas', '2023-08-19', 'asdas', 'Data sedang diperiksa oleh Staf', NULL, 'sktm', 0, '2023-08-19 00:29:52', '123');

-- Dumping structure for table surat.t_sku
DROP TABLE IF EXISTS `t_sku`;
CREATE TABLE IF NOT EXISTS `t_sku` (
  `id_sku` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_perkawinan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kewarganegaraan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pendidikan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keperluan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `berlaku_tgl` date DEFAULT NULL,
  `berdasarkan_keterangan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date DEFAULT NULL,
  `request` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'sku',
  `status` int DEFAULT '0',
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_sku`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table surat.t_sku: ~3 rows (approximately)
REPLACE INTO `t_sku` (`id_sku`, `nama`, `jk`, `tempat`, `tgl_lahir`, `agama`, `status_perkawinan`, `kewarganegaraan`, `pendidikan`, `pekerjaan`, `nik`, `alamat`, `keperluan`, `berlaku_tgl`, `berdasarkan_keterangan`, `keterangan`, `acc`, `request`, `status`, `tanggal_request`, `nik_user`) VALUES
	(1, 'update ya', 'Laki-Laki', 'asd', '2023-08-10', 'asd', 'ads', 'adsa', 'dasda', 'dasd', '777', 'dasd', 'asd', '2023-08-12', '324', 'Surat dicetak, bisa diambil!', '2023-08-18', NULL, 3, '2023-08-18 14:50:16', '777'),
	(3, 'asdasd', 'Laki-Laki', 'asd', '2023-08-10', 'asdas', 'asda', 'asda', 'asd', 'asda', '25435435435', 'asda', 'asd', '2023-08-12', '33', 'asd', NULL, NULL, 0, '2023-08-12 11:19:23', '777'),
	(4, 'sdfsdfsd', 'Laki-Laki', 'asd', '2023-08-10', 'sdf', 'sdf', 'dsf', 'sddf', 'dsf', '453543543', 'sdf', '', '2023-08-12', 'sdfd', 'Surat sedang diperiksa oleh sekertaris', NULL, NULL, 1, '2023-08-18 14:38:40', '777'),
	(5, 'rianasdas', 'Laki-Laki', 'asdsadasd', '2023-08-10', 'asdas', 'asdas', 'asdas', 'asdasd', 'asdas', '777asdas', 'asdasd', 'asdas', '2023-08-18', 'asdasd', 'Surat sedang diperiksa oleh sekertaris', NULL, NULL, 1, '2023-08-18 14:38:35', '777'),
	(6, 'rianadas', 'Laki-Laki', 'asdasdas', '2023-08-10', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', '77721312', 'asdas', 'asda', '2023-08-18', 'asdas', 'Surat sedang diperiksa oleh sekertaris', NULL, NULL, 1, '2023-08-18 14:40:53', '777'),
	(7, 'rianasda', 'Laki-Laki', 'asd', '2023-08-10', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', '77712312', 'asdas', 'asdas', '2023-08-18', 'asdasd', 'Surat sedang diperiksa oleh sekertaris', NULL, NULL, 1, '2023-08-18 14:30:30', '777'),
	(8, 'rianasda', 'Laki-Laki', 'asdasdas', '2023-08-10', 'asdas', 'asdas', 'sdas', 'asda', 'asdas', '777', 'asda', 'asdas', '2023-08-18', 'adas', 'Data sedang diperiksa oleh Staf', NULL, NULL, 0, '2023-08-18 15:08:17', '777'),
	(9, 'feb', 'Perempuan', 'jkt', '2001-12-12', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', '1232131', 'asda', 'asdas', '2023-08-19', 'asdasd', 'Surat dicetak, bisa diambil!', '2023-08-19', 'sku', 3, '2023-08-19 00:34:46', '123');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
