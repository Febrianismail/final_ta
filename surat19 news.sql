/*
 Navicat Premium Data Transfer

 Source Server         : laragonserver
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : surat

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 19/08/2023 12:04:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_image
-- ----------------------------
DROP TABLE IF EXISTS `data_image`;
CREATE TABLE `data_image`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `skck_id` int NULL DEFAULT NULL,
  `skd_id` int NULL DEFAULT NULL,
  `skdu_id` int NULL DEFAULT NULL,
  `sku_id` int NULL DEFAULT NULL,
  `sktm_id` int NULL DEFAULT NULL,
  `skp_id` int NULL DEFAULT NULL,
  `keramaian_id` int NULL DEFAULT NULL,
  `skbm_id` int NULL DEFAULT NULL,
  `nikah_id` int NULL DEFAULT NULL,
  `blm_nikah_id` int NULL DEFAULT NULL,
  `jenis_surat_id` int NULL DEFAULT NULL,
  `path_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `upload_surat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `pernyataan_id` int NULL DEFAULT NULL,
  `pindah_nikah_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 225 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_image
-- ----------------------------
INSERT INTO `data_image` VALUES (63, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, '_1400592.webp', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (64, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, '_1400592.webp', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (65, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, '_1400592.webp', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (66, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, '_1400592.webp', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (67, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (68, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (69, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (70, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (71, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (72, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (73, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (74, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (75, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (76, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (77, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (78, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (79, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (80, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (81, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (82, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (83, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (84, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (85, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (86, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (87, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'ktp.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (88, 0, 0, 24, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'Febrian_Ismail_Suni_.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (89, 0, 0, 24, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'Febrian_Ismail_Suni_.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (90, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'febrian_20510001.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (91, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 2, '_2350044.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (92, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 3, 'bukti.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (93, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 3, '', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (94, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 4, 'pfp.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (95, 0, 0, 29, 0, 0, 0, NULL, 0, NULL, NULL, 4, 'pfp.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (107, 0, 0, 30, 0, 0, 0, NULL, 0, NULL, NULL, 3, 'pfp.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (110, 0, 0, 30, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'bukti.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (111, 0, 0, 30, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'bukti.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (112, 0, 0, 30, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'bukti.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (113, 2, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'mind_01.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (114, 2, 0, 34, 0, 0, 0, NULL, 0, NULL, NULL, 2, 'pfp.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (115, 2, 0, 34, 0, 0, 0, NULL, 0, NULL, NULL, 3, 'Untitled__2_.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (116, 0, 0, 31, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'diagram.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (117, 0, 0, 31, 0, 0, 0, NULL, 0, NULL, NULL, 3, 'febrian_20510001.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (118, 0, 0, 31, 0, 0, 0, NULL, 0, NULL, NULL, 3, 'febrian_20510001.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (119, 0, 0, 31, 0, 0, 0, NULL, 0, NULL, NULL, 2, '_2350044.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (120, 0, 0, 38, 0, 0, 0, NULL, 0, NULL, NULL, 1, 'mind_01.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (121, 0, 0, 32, 0, 0, 0, NULL, 0, NULL, NULL, 2, 'logo_Kominfo.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (122, 0, 0, 40, 0, 0, 0, NULL, 0, NULL, NULL, 4, 'mind_01.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (123, 0, 0, 40, 0, 0, 0, NULL, 0, NULL, NULL, 1, '_2350044.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (129, 0, 0, 40, 0, 0, 0, NULL, 0, NULL, NULL, 3, '_2350044.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (142, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 2, 'Cool_Anime_4k_Wallpaper.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (148, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, 2, 'Hinahata_Hina_Aug_2022.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (149, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, 2, 'hqdefault.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (153, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, '_4595683.webp', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (154, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 4, 'WhatsApp_Image_2023_05_22_at_18.19.30.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (157, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 3, 'faktur_tv.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (161, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 5, '_9c94b14cce2eb3316cc0489ea6f3a5ff.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (162, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 3, 'bg_basara2.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (168, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, 'Dakirby309_Simply_Styled_OS_Ubuntu.ico', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (170, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 3, 'Akun_Ubisoft.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (172, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 3, '_15cc91e9e24b52336a858c2a785771b5.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (173, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, '_9c94b14cce2eb3316cc0489ea6f3a5ff.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, '_15cc91e9e24b52336a858c2a785771b5.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (175, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, '_330799431_908857103765944_6114603119020011916_n.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (176, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, 2, '_15cc91e9e24b52336a858c2a785771b5.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (177, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, 4, '_0ed511e493d147e887e7c95b49c22626_c5_1000x1000.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (179, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '_330798621_557152046363243_7880332052034769409_n.jpg', NULL, NULL);
INSERT INTO `data_image` VALUES (185, NULL, NULL, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '_730x480_img_15430_need_for_speed_underground_2.jpg', NULL, NULL);
INSERT INTO `data_image` VALUES (186, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, 1, 'denah_rumah_ukuran_7x12_.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (187, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'denah_rumah_ukuran_7x12_.jpeg', NULL, 1, NULL);
INSERT INTO `data_image` VALUES (188, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '', NULL, 2, NULL);
INSERT INTO `data_image` VALUES (189, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'ze.jfif', NULL, 2, NULL);
INSERT INTO `data_image` VALUES (190, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, 1, 'asus_vivobook_tablet_oled_full_9894b71c.webp', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (191, NULL, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, 1, '_168399.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (192, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'background_design.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (193, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, 2, '_1210455.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (194, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, 1, 'Febrian_Ismail_Suni_.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (195, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, 2, '_12.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (196, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '_168399.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (197, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 1, '_168399.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (198, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 1, 'denah_rumah_ukuran_7x12_.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (199, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 1, '_1210455.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (200, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 3, '_2000_x_797_web_hero_skyline_2_6b921811_cd45_42fd_990a_ba60c7fba1f0.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (201, NULL, NULL, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '_1210455.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (202, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '_1210455.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (203, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Febrian_Ismail_Suni_.png', NULL, 3, NULL);
INSERT INTO `data_image` VALUES (204, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, 1, 'tanda_bukti.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (205, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, 'asus_vivobook_tablet_oled_full_9894b71c.webp', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (206, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, 1, 'asus_vivobook_tablet_oled_full_9894b71c.webp', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (207, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'denah_rumah_ukuran_7x12_.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (208, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, 1, '_168399.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (209, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, 2, 'back.jfif', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (210, NULL, NULL, 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'kampus_uniga_malang_53.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (211, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Untitled.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (212, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'asus_vivobook_tablet_oled_full_9894b71c.webp', NULL, 4, NULL);
INSERT INTO `data_image` VALUES (213, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 'ss.png', NULL, 5, NULL);
INSERT INTO `data_image` VALUES (214, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL, 1, 'diagram.png', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (215, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '_168399.jpg', NULL, NULL);
INSERT INTO `data_image` VALUES (216, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WhatsApp_Image_2023_03_15_at_10.18.13.jpg', NULL, NULL);
INSERT INTO `data_image` VALUES (217, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, 5, 'Cool_Anime_Wallpaper_4k.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (218, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, NULL, 9, '_0ed511e493d147e887e7c95b49c22626_c5_1000x1000.jpg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (220, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 'Cara_Buat_Akun_Baru_Di_Mobile_Legends_Terbaru.jpg', NULL, NULL, 1);
INSERT INTO `data_image` VALUES (222, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 8, 'pembayaran_uniga_120922.jpeg', NULL, NULL, NULL);
INSERT INTO `data_image` VALUES (223, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 'koceng.jpg', NULL, NULL, 1);
INSERT INTO `data_image` VALUES (224, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, 'need_for_speed_heat_gameplay_customization_0.jpg', NULL, NULL, 1);

-- ----------------------------
-- Table structure for data_jenis_persyaratan
-- ----------------------------
DROP TABLE IF EXISTS `data_jenis_persyaratan`;
CREATE TABLE `data_jenis_persyaratan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_persyaratan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_jenis_persyaratan
-- ----------------------------
INSERT INTO `data_jenis_persyaratan` VALUES (1, 'Scan KK');
INSERT INTO `data_jenis_persyaratan` VALUES (2, 'Scan KTP');
INSERT INTO `data_jenis_persyaratan` VALUES (3, 'Scan RT/RW');
INSERT INTO `data_jenis_persyaratan` VALUES (4, 'fototempat_usaha');
INSERT INTO `data_jenis_persyaratan` VALUES (5, 'Scan Pernyataan materai');
INSERT INTO `data_jenis_persyaratan` VALUES (6, 'scan Akte lahir ');
INSERT INTO `data_jenis_persyaratan` VALUES (7, 'Scan ijasah terkahir');
INSERT INTO `data_jenis_persyaratan` VALUES (8, 'scan pemeriksa kesahatan');
INSERT INTO `data_jenis_persyaratan` VALUES (9, 'scan surat pernyataan penghasilan');
INSERT INTO `data_jenis_persyaratan` VALUES (10, 'scan tanda trima dari mas rio');

-- ----------------------------
-- Table structure for data_user
-- ----------------------------
DROP TABLE IF EXISTS `data_user`;
CREATE TABLE `data_user`  (
  `nik` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hak_akses` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jekel` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `agama` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telepon` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_warga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_perkawinan` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`nik`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_user
-- ----------------------------
INSERT INTO `data_user` VALUES ('', '', 'Lurah', '', '0000-00-00', '', '', '', '', '', '', '');
INSERT INTO `data_user` VALUES ('009908', 'kjnkjn', 'Pemohon', 'NJBKJBH', '2021-12-11', 'kjnkj', 'Laki-Laki', '', 'kjnhkjn', '', 'Kerja', '');
INSERT INTO `data_user` VALUES ('1', '1', 'Lurah', 'coba', '2021-10-20', 'coba', 'Laki-Laki', '', 'coba', '', 'Kerja', '');
INSERT INTO `data_user` VALUES ('1111111111111111', '12345', 'Pemohon', 'Fachri Shofiyyuddin Ahmad', '2021-10-17', 'Jakarta', 'Laki-Laki', 'Islam', '        Jakarta RT 01/RW 07', '087897315639', 'Sekolah', '');
INSERT INTO `data_user` VALUES ('123', '123', 'Pemohon', 'feb', '2001-12-12', 'jkt', 'Perempuan', '', '', '', '', '');
INSERT INTO `data_user` VALUES ('2', '2', 'Staf', 'coba', '2021-10-20', 'coba', 'Perempuan', '', 'coba', '', 'Kerja', '');
INSERT INTO `data_user` VALUES ('21312', '12345', 'Staf', 'febrian', '2023-06-07', 'ssss', 'Laki-Laki', '', 'sadas', '', 'Kerja', '');
INSERT INTO `data_user` VALUES ('222', '123', 'Sekertaris', 'rianisma', '0000-00-00', 'jakarta', 'Laki-Laki', '', '', '', 'Sekolah', '');
INSERT INTO `data_user` VALUES ('777', '12345', 'Pemohon', 'rian', '2023-08-10', 'asd', 'Laki-Laki', '', ' ', '089649945991', '', 'Belum');
INSERT INTO `data_user` VALUES ('888', '12345', 'Pemohon', 'cobalagi', '2021-10-20', 'cobalagi', 'Perempuan', '', 'coba', '', 'Sekolah', '');
INSERT INTO `data_user` VALUES ('8923478923789489', 'tes', 'Pemohon', 'coba', '2022-05-22', 'kudus', 'Laki-Laki', '', '', '', '', '');

-- ----------------------------
-- Table structure for t_blm_nikah
-- ----------------------------
DROP TABLE IF EXISTS `t_blm_nikah`;
CREATE TABLE `t_blm_nikah`  (
  `id_blm_nikah` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomorkk` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `jk` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_perkawinan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pendidikan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keperluan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tujuan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `berlaku_tgl` date NULL DEFAULT NULL,
  `berdasrkan_keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NULL DEFAULT NULL,
  `request` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'blmnikah',
  `status` int NULL DEFAULT 0,
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_blm_nikah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_blm_nikah
-- ----------------------------
INSERT INTO `t_blm_nikah` VALUES (3, 'rianasda', '7771231', '1312', 'jakarta', '2023-08-18', 'Laki-Laki', 'asda', 'asdas', 'asda', 'asda', 'asda', 'asdas', 'asdasd', '2023-08-18', 'asdasd', 'Surat dicetak, bisa diambil! Di kelurahan', '2023-08-19', NULL, 3, '2023-08-19 09:15:20', '777');
INSERT INTO `t_blm_nikah` VALUES (4, 'rianasdas', '77721312', '123123', 'asdas', '2023-08-18', 'Perempuan', 'asdas', 'asdas', 'asdasd', 'asdas', 'asdas', 'asdas', 'asdad', '2023-08-18', 'asdasd', 'Surat sedang dalam proses cetak', '2023-08-26', NULL, 2, '2023-08-19 09:13:37', '777');

-- ----------------------------
-- Table structure for t_keramaian
-- ----------------------------
DROP TABLE IF EXISTS `t_keramaian`;
CREATE TABLE `t_keramaian`  (
  `id_keramaian` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomorkk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `jk` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_perkawinan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pendidikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keperluan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `berlaku_tgl` date NULL DEFAULT NULL,
  `acara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `padatgl` date NULL DEFAULT NULL,
  `keterangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NULL DEFAULT NULL,
  `request` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'keramaian',
  `status` int NULL DEFAULT 0,
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_keramaian`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_keramaian
-- ----------------------------
INSERT INTO `t_keramaian` VALUES (4, 'rianasds', 'asdas', '77712312', 'asdas', '2023-08-18', 'Laki-Laki', 'asdasd', 'asdas', 'asdas', 'asdas', 'asd', 'asda', 'asdas', '2023-08-18', 'asdasd', '2023-08-18', 'Surat sedang diperiksa oleh sekertaris', '2023-08-18', NULL, 1, '2023-08-18 23:17:24', '777');
INSERT INTO `t_keramaian` VALUES (5, 'feb', '21312', '1231231', 'asda', '2023-08-19', 'Laki-Laki', 'asdasd', 'asdas', 'asdas', 'asda', '', 'asdas', 'asda', '2023-08-19', 'asdad', '2023-08-19', 'Data sedang diperiksa oleh Staf', NULL, NULL, 0, '2023-08-19 06:47:14', '123');

-- ----------------------------
-- Table structure for t_nikah
-- ----------------------------
DROP TABLE IF EXISTS `t_nikah`;
CREATE TABLE `t_nikah`  (
  `id_nikah` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nik_nikah` varchar(17) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `kewarganegaraan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `agama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `status_pernikahan_laki` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_pernikahan_perempuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nama_istri_suami_terdahulu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tanggal_request` date NULL DEFAULT NULL,
  `nik_user` int NULL DEFAULT NULL,
  `nama_lengkap_pria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nik_pria` varchar(17) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tempat_lahir_pria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `kewarganegaraan_pria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `agama_pria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `pekerjaan_pria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `alamat_pria` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `tgl_lahir_pria` date NULL DEFAULT NULL,
  `nama_wanita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nik_wanita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tempat_wanita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tgl_lahir_wanita` date NULL DEFAULT NULL,
  `kewarganegaraan_wanita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `agama_wanita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `pekerjaan_wanita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `alamat_wanita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `status` int NULL DEFAULT 0,
  `acc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keterangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT 'nikah',
  `keperluan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT 'buat nikah',
  PRIMARY KEY (`id_nikah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_nikah
-- ----------------------------
INSERT INTO `t_nikah` VALUES (7, 'rianasd', '7771231', 'Perempuan', 'asd', '2023-08-18', 'asdasd', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asd', '2023-08-18', 777, 'asdas', 'asdas', 'asd', 'asdas', 'asdas', 'asda', 'asdas', '2002-02-20', 'asdas', 'asda', 'jakarta', '2002-02-20', 'asdasd', 'asdas', 'asdas', 'asdas', 3, '2023-08-19', '2023-08-19 09:29:11', 'Surat dicetak, bisa diambil! Di kelurahan', 'nikah', 'buat nikah');
INSERT INTO `t_nikah` VALUES (9, 'rian', '777', 'Laki-Laki', 'aldld,slf,', '2023-08-19', 'al,sdls,a', 'sl,dfl,', 's;fdsd,ls,fls,', 'sd,', 'asdmasdkm', 'akdakmd', 'dkfmskfm', '2023-08-19', 777, 'dskfmdskmf', '0349059034', 'akdmskmkmsfkgfm', 'aodskaok', 'lsdf,lsd,', 'lsd,fl,', 'kkmdfskd', '2023-08-19', 'ofdsofkk', '134314', 'kamksdmask', '2023-08-19', 'aksdmksm', 'skdfmskfm', 'kdmfkdm', 'dfkmdkf', 0, NULL, '2023-08-19 10:19:19', 'Data sedang diperiksa oleh Staf', 'nikah', 'buat nikah');
INSERT INTO `t_nikah` VALUES (10, 'update aaaa', '777', 'Laki-Laki', 'mkm', '2023-08-19', 'km', 'kmk', 'll', 'km', 'lmk', '', 'km', '2023-08-19', 777, 'kmk', '2515', 'kmm', 'kmkm', '', 'kmkm', 'm kmm', '2023-08-19', 'kmkmq', '54455', 'kmkm', '2023-08-19', 'kmk', 'kmkm', 'kmk', 'kmkm', 0, NULL, '2023-08-19 10:43:12', 'Data sedang diperiksa oleh Staf', 'nikah', 'buat nikah');

-- ----------------------------
-- Table structure for t_pernyataan
-- ----------------------------
DROP TABLE IF EXISTS `t_pernyataan`;
CREATE TABLE `t_pernyataan`  (
  `id_pernyataan` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `jenis_kelamin` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomorkk` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `menyatakan_bahwa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `untuk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NULL DEFAULT NULL,
  `status` int NULL DEFAULT 0,
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keperluan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik_user` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `request` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'pernyataan',
  PRIMARY KEY (`id_pernyataan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_pernyataan
-- ----------------------------
INSERT INTO `t_pernyataan` VALUES (3, 'rianasda', 'asd', '2023-08-10', 'laki-laki', '7771231', '21e12312', ' asdas', 'asdas', 'asdas', 'asdasd', 'Data sedang diperiksa oleh Staf', NULL, 0, '2023-08-18 22:25:15', 'asda', '777', 'pernyataan');
INSERT INTO `t_pernyataan` VALUES (4, 'feb', 'jkt', '2001-12-12', 'laki-laki', '123', '1231', 'asdas', 'asdas', 'asdas', 'asdasd', 'Data sedang diperiksa oleh Staf', NULL, 0, '2023-08-19 06:53:42', 'asdas', '123', 'pernyataan');
INSERT INTO `t_pernyataan` VALUES (5, 'feb', 'jkt', '2001-12-12', 'laki-laki', '12312312', '1231', 'asda', 'asda', 'asdas', 'asda', 'Data sedang diperiksa oleh Staf', NULL, 0, '2023-08-19 06:58:46', 'asd', '123', 'pernyataan');

-- ----------------------------
-- Table structure for t_pindah_nikah
-- ----------------------------
DROP TABLE IF EXISTS `t_pindah_nikah`;
CREATE TABLE `t_pindah_nikah`  (
  `id_pindah_nikah` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomorkk` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jk` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `kebangsaan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_perkawinan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pindahke` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelurahan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kecamatan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kab_kota` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NULL DEFAULT NULL,
  `request` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'pindahnikah',
  `status` int NULL DEFAULT 0,
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_nikah` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_pindah_nikah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_pindah_nikah
-- ----------------------------
INSERT INTO `t_pindah_nikah` VALUES (1, 'irfan kfmkdsmfdskm', '525156116541619', '343434134132', '', 'sfsdfsdljk', '2023-08-10', 'kamdskmakmd', 'msds dfsdm ', 'klsfdmldmf', 'fldksmdlfm', 'dflsmmdslkfmd', 'lkmdsfslkml', 'ldmslkfmslk', 'dlfmslkfm', 'fsldmfslk', 'lsdfklsdm', '1321', NULL, 'pindahnikah', 0, '2023-08-19 12:02:06', '777', '2023-08-19');

-- ----------------------------
-- Table structure for t_skck
-- ----------------------------
DROP TABLE IF EXISTS `t_skck`;
CREATE TABLE `t_skck`  (
  `id_skck` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomorkk` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `jk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_perkawinan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pendidikan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keperluan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tujuan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `berlaku_tgl` date NULL DEFAULT NULL,
  `bedasarkan_keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik_user` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NULL DEFAULT NULL,
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `request` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'skck',
  `status` int NULL DEFAULT 0,
  `berdasarkan_rtrw` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_skck`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_skck
-- ----------------------------
INSERT INTO `t_skck` VALUES (1, '888', 'fasf', '121213', 'jkt', '2023-08-09', 'laki_laki', 'islam', 'belum', 'buruh', 'la su', 's1', 'kerja', 'asda', '0000-00-00', 'surat ini', '777', 'Surat sedang dalam proses cetak', '2023-08-10', '2023-08-17 20:17:23', 'skck', 3, 'untuk keperluan kerja');
INSERT INTO `t_skck` VALUES (2, '12312', 'ihsan', '213471', 'jkt', '2023-08-09', 'laki_laki', 'islam', 'belum', 'buruh', 'la sucipto', 's1', 'apa aja', 'dasdasd', '2023-08-09', 'surat ini perlu', '777', '', '0000-00-00', '2023-08-17 20:17:25', 'skck', 3, '');
INSERT INTO `t_skck` VALUES (3, '777', 'rian', '12312123', 'asdas', '2023-08-18', 'laki_laki', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asdasd', '2023-08-18', NULL, '777', 'Data sedang diperiksa oleh Staf', NULL, '2023-08-18 22:24:04', NULL, 0, 'asdasd');
INSERT INTO `t_skck` VALUES (4, '123', 'feb', '12312', 'asdsa', '2023-08-19', 'laki_laki', 'asdasd', 'asdas', 'asd', 'asdas', 'asdas', 'asdas', 'asd', '2023-08-19', NULL, '123', 'Surat dicetak, bisa diambil! Di kelurahan', '2023-08-19', '2023-08-19 07:21:03', NULL, 3, 'asdasd');

-- ----------------------------
-- Table structure for t_skdu
-- ----------------------------
DROP TABLE IF EXISTS `t_skdu`;
CREATE TABLE `t_skdu`  (
  `id_skdu` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `jk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelurahan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kecamatan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kota` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_usaha` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `surat_keterangan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bidang_surat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomer_surat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NULL DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `request` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'skdu',
  `status` int NULL DEFAULT 0,
  `keperluan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_skdu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_skdu
-- ----------------------------
INSERT INTO `t_skdu` VALUES (33, 'rian', 'jakarta', '2023-08-09', 'laki_laki', 'islam', 'usaha', 'tlogomas', 'tlogomas', 'lowokwaru', 'malang', 'samsung cell', 'surat izin pindah', 'conter', NULL, 'Surat dicetak, bisa diambil!', '2023-08-09', '777', '2023-08-17 20:16:41', '777', 'skdu', 3, 'SKDU TERLAKSANAKAN');
INSERT INTO `t_skdu` VALUES (34, 'rian', 'jakarta', '2023-08-16', 'laki_laki', 'islam', 'buruh', 'tlogomas malang', 'tlogomas', 'lowokwaru', 'malang', 'glade', 'surat izin', 'barber', NULL, 'Surat sedang dalam proses cetak', '2023-08-19', '777', '2023-08-19 07:44:44', '777', 'skdu', 2, 'SKDU TERLAKSANAKAN');
INSERT INTO `t_skdu` VALUES (38, 'rian', 'jkt', '2023-08-10', 'laki_laki', 'islam', 'asda', 'asd', 'asda', 'asd', 'asd', 'asd', 'asd', 'asd', NULL, NULL, NULL, '777', '2023-08-17 20:16:45', '777', 'skdu', 0, 'SKDU TERLAKSANAKAN');
INSERT INTO `t_skdu` VALUES (39, 'rian', 'jkt', '2023-08-10', 'laki_laki', 'islam', 'pengusaha', 'jl tlogomas', 'tlogomas', 'lowokwaru', 'malang', 'galaxy', 'membuat izin diri', 'komputer', '9018209440918', '', '2023-08-10', '777', '2023-08-17 20:16:46', '777', 'skdu', 3, 'SKDU TERLAKSANAKAN');
INSERT INTO `t_skdu` VALUES (40, 'rian', '', '0000-00-00', 'laki_laki', '', '', '', '', '', '', '', '', '', '', 'asdadsa', '2023-08-09', '777', '2023-08-17 20:16:47', '777', 'skdu', 0, 'SKDU TERLAKSANAKAN');
INSERT INTO `t_skdu` VALUES (41, 'rian', '', '0000-00-00', 'laki_laki', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '777', '2023-08-17 20:16:46', '777', 'skdu', 0, 'SKDU TERLAKSANAKAN');
INSERT INTO `t_skdu` VALUES (42, 'rian', 'asd1231', '2023-08-10', 'laki_laki', 'sadas', 'sadas', 'asdas', 'asdas', 'asdas', 'asda', 'asdas', 'asd', 'asdas', 'asdas', 'Data sedang diperiksa oleh Staf', NULL, '777', '2023-08-18 22:23:06', '777', 'SKDU', 0, NULL);
INSERT INTO `t_skdu` VALUES (43, 'febasd', 'jkt', '2001-12-12', 'laki_laki', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', 'asd', 'asd', 'asda', 'asdas', 'asdas', 'Surat dicetak, bisa diambil! Di kelurahan', '2023-08-19', '123213', '2023-08-19 07:25:24', '123', 'skdu', 3, NULL);

-- ----------------------------
-- Table structure for t_sktm
-- ----------------------------
DROP TABLE IF EXISTS `t_sktm`;
CREATE TABLE `t_sktm`  (
  `id_sktm` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomorkk` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `jk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_perkawinan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pendidikan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keperluan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tujuan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `berlaku_tgl` date NULL DEFAULT NULL,
  `berdasarkan_keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NULL DEFAULT NULL,
  `request` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'sktm',
  `status` int NULL DEFAULT 0,
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_sktm`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_sktm
-- ----------------------------
INSERT INTO `t_sktm` VALUES (2, '777', '312', '777', 'jakarta', '2002-02-20', 'Laki-Laki', '', '1231', '2131', '     JL raya Tlogomas gg 8 a', '1231', '123', '123', '2023-08-16', '12312', 'Data Belum Lengkap', '0000-00-00', '', 0, '2023-08-17 19:48:32', '777');
INSERT INTO `t_sktm` VALUES (5, '777', '', '777', 'jakarta', '2002-02-20', 'Laki-Laki', '', '1231', '2131', '    JL raya Tlogomas gg 8 a', 'asd', 'buatkerja', 'ksdfm', '2023-08-16', '12312', 'Surat dicetak, bisa diambil!', '2023-08-18', 'sktm', 3, '2023-08-19 09:21:52', '777');
INSERT INTO `t_sktm` VALUES (6, 'rian', 'asdas', '777', 'asdasdas', '2023-08-10', 'Laki-Laki', 'asdas', 'asdasd', 'adas', ' asdas', 'asdas', 'asdas', 'asdasd', '2023-08-18', 'asdasd', 'Surat dicetak, bisa diambil!', '2023-08-18', NULL, 3, '2023-08-18 21:57:08', '777');
INSERT INTO `t_sktm` VALUES (7, 'rianasda', 'asdas', '77712312', 'asdasdsa', '2023-08-10', 'Laki-Laki', 'asdsa', 'asdas', 'asdas', ' asdas', 'asdas', 'asdas', 'asdas', '2023-08-18', 'asdasd', NULL, NULL, NULL, 0, '2023-08-18 21:18:12', '777');
INSERT INTO `t_sktm` VALUES (8, 'rianasdas', '12312', '777231', 'asdasda', '2023-08-10', 'Laki-Laki', 'sadas', 'asdas', 'asdas', ' asd', 'asdas', 'asd', 'asdas', '2023-08-18', 'adasd', 'Data sedang diperiksa oleh Staf', NULL, NULL, 0, '2023-08-18 22:07:09', '777');
INSERT INTO `t_sktm` VALUES (10, 'feb', '1231', '123', 'jkt', '2001-12-12', 'Perempuan', 'asda', 'ada', 'ad', 'asdsa', 'asda', 'asda', 'asd', '2023-08-19', 'asdasd', 'Data sedang diperiksa oleh Staf', NULL, NULL, 0, '2023-08-19 06:46:20', '123');
INSERT INTO `t_sktm` VALUES (11, 'feb', '21312', '1231231', 'jkt', '2001-12-12', 'Perempuan', 'asdas', 'asd', 'asdas', 'asda', 'asdas', 'asd', 'asdas', '2023-08-19', 'asdas', 'Data sedang diperiksa oleh Staf', NULL, 'sktm', 0, '2023-08-19 07:29:52', '123');

-- ----------------------------
-- Table structure for t_sku
-- ----------------------------
DROP TABLE IF EXISTS `t_sku`;
CREATE TABLE `t_sku`  (
  `id_sku` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jk` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tempat` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `agama` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_perkawinan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kewarganegaraan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pendidikan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nik` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keperluan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `berlaku_tgl` date NULL DEFAULT NULL,
  `berdasarkan_keterangan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NULL DEFAULT NULL,
  `request` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'sku',
  `status` int NULL DEFAULT 0,
  `tanggal_request` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nik_user` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_sku`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_sku
-- ----------------------------
INSERT INTO `t_sku` VALUES (1, 'update surat yaaaahhh', 'Laki-Laki', 'asd', '2023-08-10', 'asd', 'ads', 'adsa', 'dasda', 'dasd', '777', 'dasd', 'asd', '2023-08-12', '324', 'Surat dicetak, bisa diambil!', '2023-08-18', NULL, 3, '2023-08-19 10:41:29', '777');
INSERT INTO `t_sku` VALUES (3, 'asdasd', 'Laki-Laki', 'asd', '2023-08-10', 'asdas', 'asda', 'asda', 'asd', 'asda', '25435435435', 'asda', 'asd', '2023-08-12', '33', 'asd', NULL, NULL, 0, '2023-08-12 18:19:23', '777');
INSERT INTO `t_sku` VALUES (4, 'sdfsdfsd', 'Laki-Laki', 'asd', '2023-08-10', 'sdf', 'sdf', 'dsf', 'sddf', 'dsf', '453543543', 'sdf', '', '2023-08-12', 'sdfd', 'Surat sedang diperiksa oleh sekertaris', NULL, NULL, 1, '2023-08-18 21:38:40', '777');
INSERT INTO `t_sku` VALUES (5, 'rianasdas', 'Laki-Laki', 'asdsadasd', '2023-08-10', 'asdas', 'asdas', 'asdas', 'asdasd', 'asdas', '777asdas', 'asdasd', 'asdas', '2023-08-18', 'asdasd', 'Surat sedang diperiksa oleh sekertaris', NULL, NULL, 1, '2023-08-18 21:38:35', '777');
INSERT INTO `t_sku` VALUES (6, 'rianadas', 'Laki-Laki', 'asdasdas', '2023-08-10', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', '77721312', 'asdas', 'asda', '2023-08-18', 'asdas', 'Surat sedang diperiksa oleh sekertaris', NULL, NULL, 1, '2023-08-18 21:40:53', '777');
INSERT INTO `t_sku` VALUES (7, 'rianasda', 'Laki-Laki', 'asd', '2023-08-10', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', '77712312', 'asdas', 'asdas', '2023-08-18', 'asdasd', 'Surat sedang diperiksa oleh sekertaris', NULL, NULL, 1, '2023-08-18 21:30:30', '777');
INSERT INTO `t_sku` VALUES (8, 'rianasda', 'Laki-Laki', 'asdasdas', '2023-08-10', 'asdas', 'asdas', 'sdas', 'asda', 'asdas', '777', 'asda', 'asdas', '2023-08-18', 'adas', 'Data sedang diperiksa oleh Staf', NULL, NULL, 0, '2023-08-18 22:08:17', '777');
INSERT INTO `t_sku` VALUES (9, 'feb', 'Perempuan', 'jkt', '2001-12-12', 'asdas', 'asdas', 'asdas', 'asdas', 'asdas', '1232131', 'asda', 'asdas', '2023-08-19', 'asdasd', 'Surat dicetak, bisa diambil!', '2023-08-19', 'sku', 3, '2023-08-19 07:34:46', '123');

SET FOREIGN_KEY_CHECKS = 1;
