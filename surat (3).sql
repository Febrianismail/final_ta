-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Agu 2023 pada 12.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

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
-- Struktur dari tabel `data_image`
--

CREATE TABLE `data_image` (
  `id` int(11) NOT NULL,
  `skck_id` int(11) DEFAULT NULL,
  `skd_id` int(11) DEFAULT NULL,
  `skdu_id` int(11) DEFAULT NULL,
  `sku_id` int(11) DEFAULT NULL,
  `sktm_id` int(11) DEFAULT NULL,
  `skp_id` int(11) DEFAULT NULL,
  `keramaian_id` int(11) DEFAULT NULL,
  `skbm_id` int(11) DEFAULT NULL,
  `jenis_surat_id` int(11) NOT NULL,
  `path_image` text NOT NULL,
  `pernyataan_id` int(11) NOT NULL,
  `nikah_id` int(11) NOT NULL,
  `blm_nikah_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `data_image`
--

INSERT INTO `data_image` (`id`, `skck_id`, `skd_id`, `skdu_id`, `sku_id`, `sktm_id`, `skp_id`, `keramaian_id`, `skbm_id`, `jenis_surat_id`, `path_image`, `pernyataan_id`, `nikah_id`, `blm_nikah_id`) VALUES
(187, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'background_design.jpg', 0, 0, 0),
(188, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Febrian_Ismail_Suni_.png', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jenis_persyaratan`
--

CREATE TABLE `data_jenis_persyaratan` (
  `id` int(11) NOT NULL,
  `nama_persyaratan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `data_jenis_persyaratan`
--

INSERT INTO `data_jenis_persyaratan` (`id`, `nama_persyaratan`) VALUES
(1, 'Scan KK'),
(2, 'Scan KTP'),
(3, 'Scan RT/RW'),
(4, 'fototempat_usaha'),
(5, 'Scan Pernyataan materai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_skck`
--

CREATE TABLE `data_request_skck` (
  `id_request_skck` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `scan_rt` text NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `request` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `acc` date NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `berlaku_tgl` date NOT NULL,
  `keterangan_rt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_skd`
--

CREATE TABLE `data_request_skd` (
  `id_request_skd` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'DOMISILI',
  `status` int(11) NOT NULL DEFAULT 0,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `data_request_skd`
--

INSERT INTO `data_request_skd` (`id_request_skd`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`, `scan_rt`, `foto_tempat`, `scan_pernyataan`, `pekerjaan`, `alamat`, `kelurahan`, `kecamatan`, `nama_usaha`, `kota`) VALUES
(21, '1111111111111111', '2021-10-18 06:46:28', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Administrasi Bank', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2021-10-18', '', '', '0', '', '', '', '', '0', ''),
(23, '777', '2023-07-11 03:14:07', '777_.jpg', '777_.jpg', 'surat tempat', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2023-07-11', '', '', '0', '', '', '', '', '0', ''),
(24, '777', '2023-07-14 12:06:06', '777_.jpg', '777_.jpg', 'pidah tempat', '', 'DOMISILI', 1, '0000-00-00', '', '', '0', '', '', '', '', '0', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_skp`
--

CREATE TABLE `data_request_skp` (
  `id_request_skp` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'LAINNYA',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `data_request_skp`
--

INSERT INTO `data_request_skp` (`id_request_skp`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(10, '1111111111111111', '2021-10-18 06:14:07', '1111111111111111_.jpg', '1111111111111111_.jpg', 'KTP Hilang', 'Surat dicetak, bisa diambil!', 'LAINNYA', 3, '2021-10-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_request_sku`
--

CREATE TABLE `data_request_sku` (
  `id_request_sku` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp(),
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `usaha` varchar(30) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'USAHA',
  `status` int(11) NOT NULL DEFAULT 0,
  `acc` date NOT NULL,
  `scan_rt` text NOT NULL,
  `foto_tempat` text NOT NULL,
  `scan_pernyataan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `data_request_sku`
--

INSERT INTO `data_request_sku` (`id_request_sku`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `usaha`, `keperluan`, `keterangan`, `request`, `status`, `acc`, `scan_rt`, `foto_tempat`, `scan_pernyataan`) VALUES
(9, '1111111111111111', '2021-10-17 10:37:58', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Warung Kopi', 'Bantuan UMKM', 'Surat dicetak, bisa diambil!', 'USAHA', 3, '2021-10-17', '', '', ''),
(12, '777', '2023-07-11 03:05:21', '777 - rian_.jpg', '777 - rian_.jpg', 'coffee', 'surat ', 'Surat sedang dalam proses cetak', 'USAHA', 2, '2023-07-21', '', '', ''),
(13, '777', '2023-07-16 11:39:27', '777_.jpg', '777_.jpg', '', '', 'Data sedang diperiksa oleh Staf', 'USAHA', 1, '0000-00-00', 'pexels-aleksandar-pasaric-2341830.jpg', 'rumus linkaran.png', 'SWICI-removebg-preview.png'),
(14, '777', '2023-07-17 04:59:54', '777_.jpg', '777_.jpg', 'bakso', 'data', 'Data sedang diperiksa oleh Staf', 'USAHA', 0, '0000-00-00', 'Virtual Background Peserta.png', 'WhatsApp Image 2023-03-15 at 10.18.13.jpg', 'logo yumy.png'),
(15, '777', '2023-08-10 08:51:52', '777_.jpg', '777_.jpg', '21', 'asda', 'Data sedang diperiksa oleh Staf', 'USAHA', 0, '0000-00-00', '777_.jpg', '777_.jpg', '777_.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `data_user`
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
('777', '12345', 'Pemohon', 'rian', '2023-08-10', 'asd', 'Laki-Laki', 'Budha', ' ', '089649945991', '', ''),
('888', '12345', 'Pemohon', 'cobalagi', '2021-10-20', 'cobalagi', 'Perempuan', '', 'coba', '', 'Sekolah', ''),
('8923478923789489', 'tes', 'Pemohon', 'coba', '2022-05-22', 'kudus', 'Laki-Laki', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_blm_nikah`
--

CREATE TABLE `t_blm_nikah` (
  `id_blm` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nomorkk` varchar(16) NOT NULL,
  `tempat` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(60) NOT NULL,
  `agama` varchar(60) NOT NULL,
  `status_perkawinan` varchar(60) NOT NULL,
  `pekerjaan` varchar(60) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `pendidikan` varchar(60) NOT NULL,
  `keperluan` varchar(225) NOT NULL,
  `tujuan` varchar(225) NOT NULL,
  `berlaku_tgl` date NOT NULL,
  `berdasrkan_keterangan` varchar(225) NOT NULL,
  `keterangan` varchar(60) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NOT NULL,
  `request` varchar(60) NOT NULL DEFAULT 'BLM_NIKAH',
  `status` int(11) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nik_user` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_blm_nikah`
--

INSERT INTO `t_blm_nikah` (`id_blm`, `nama`, `nik`, `nomorkk`, `tempat`, `tgl_lahir`, `jk`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat`, `pendidikan`, `keperluan`, `tujuan`, `berlaku_tgl`, `berdasrkan_keterangan`, `keterangan`, `acc`, `request`, `status`, `tanggal_request`, `nik_user`) VALUES
(0, 'isma', '77721312', '231232', 'malang', '2002-02-20', 'Perempuan', 'islam', 'belum', 'pegawai', 'jl tlogomas', 's1', 'buat nikah', 'buat surat', '2023-08-17', 'surat keterangan ini', 'Surat sedang dalam proses cetak', '2023-08-17', '', 2, '2023-08-17 09:27:11', '777');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_keramaian`
--

CREATE TABLE `t_keramaian` (
  `id_keramaian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomorkk` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(25) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `status_perkawinan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `berlaku_tgl` date NOT NULL,
  `acara` varchar(255) NOT NULL,
  `padatgl` date NOT NULL,
  `keterangan` varchar(60) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NOT NULL,
  `request` varchar(60) NOT NULL DEFAULT 'Keramaian',
  `status` int(11) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nik_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_keramaian`
--

INSERT INTO `t_keramaian` (`id_keramaian`, `nama`, `nomorkk`, `nik`, `tempat`, `tgl_lahir`, `jk`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat`, `pendidikan`, `keperluan`, `tujuan`, `berlaku_tgl`, `acara`, `padatgl`, `keterangan`, `acc`, `request`, `status`, `tanggal_request`, `nik_user`) VALUES
(2, 'rian', '21312', '777', '31231', '2023-08-13', 'Laki-Laki', '12312', '12312', '12312', '12312', '12312', '12312', '12312', '2023-08-13', '12312', '0000-00-00', 'Surat sedang diperiksa oleh sekertaris', '0000-00-00', 'Keramaian', 1, '2023-08-13 14:02:12', 777),
(3, 'rian', '21312', '777', '12312', '2023-08-13', 'Laki-Laki', '12312', '12312', '12312', '12312', '12312', '12312', '123123', '2023-08-13', '123123', '2023-08-13', 'Surat sedang diperiksa oleh sekertaris', '0000-00-00', 'Keramaian', 1, '2023-08-13 14:02:44', 777),
(4, 'rian213', '12312', '777', '12312', '2023-08-14', 'Laki-Laki', '', '2131', '12321', '12312', '123123', '213123', '12312', '2023-08-13', '21321', '2023-08-13', 'Surat sedang diperiksa oleh sekertaris', '0000-00-00', 'Keramaian', 1, '2023-08-13 14:02:52', 777),
(5, 'rian', '21312', '77712312', '21312', '2023-08-13', 'Laki-Laki', '12312', '12312', '12312', '12312', '12312', '123123', '12312', '2023-08-13', '21312', '2002-03-11', 'Data sedang diperiksa oleh Staf', '0000-00-00', 'Keramaian', 0, '2023-08-13 13:13:25', 777),
(6, 'rian isma', '1961032', '77723', 'malang', '2000-08-23', 'Laki-Laki', 'islam', 'belum', 'buruh', 'la sucipto', 'sma', 'buat karnaval', 'buat pesta', '2023-08-13', 'makan', '2023-09-20', 'Surat dicetak, bisa diambil! Di kelurahan', '2023-10-18', 'Keramaian', 3, '2023-08-13 15:04:10', 777);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_nikah`
--

CREATE TABLE `t_nikah` (
  `id_nikah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik_nikah` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kewarganegaraan` varchar(225) NOT NULL,
  `agama` varchar(225) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `status_pernikahan_laki` varchar(225) NOT NULL,
  `status_pernikahan_perempuan` varchar(225) NOT NULL,
  `nama_istri_suami_terdahulu` varchar(225) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nik_user` varchar(225) NOT NULL,
  `nama_lengkap_pria` varchar(225) NOT NULL,
  `nik_pria` varchar(225) NOT NULL,
  `tempat_lahir_pria` varchar(225) NOT NULL,
  `kewarganegaraan_pria` varchar(225) NOT NULL,
  `agama_pria` varchar(225) NOT NULL,
  `pekerjaan_pria` varchar(225) NOT NULL,
  `alamat_pria` varchar(225) NOT NULL,
  `tgl_lahir_pria` date NOT NULL,
  `nama_wanita` varchar(225) NOT NULL,
  `nik_wanita` varchar(225) NOT NULL,
  `tempat_wanita` varchar(225) NOT NULL,
  `tgl_lahir_wanita` date NOT NULL,
  `kewarganegaraan_wanita` varchar(225) NOT NULL,
  `agama_wanita` varchar(225) NOT NULL,
  `pekerjaan_wanita` varchar(225) NOT NULL,
  `alamat_wanita` varchar(225) NOT NULL,
  `status` int(225) NOT NULL,
  `acc` date NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `request` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pernyataan`
--

CREATE TABLE `t_pernyataan` (
  `id_pernyataan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(60) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nomorkk` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(60) NOT NULL,
  `menyatakan_bahwa` varchar(100) NOT NULL,
  `untuk` varchar(100) NOT NULL,
  `keterangan` varchar(60) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keperluan` varchar(60) NOT NULL,
  `nik_user` varchar(60) NOT NULL,
  `request` varchar(60) NOT NULL DEFAULT 'Pernyataan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_pernyataan`
--

INSERT INTO `t_pernyataan` (`id_pernyataan`, `nama`, `tempat`, `tgl_lahir`, `jenis_kelamin`, `nik`, `nomorkk`, `alamat`, `pekerjaan`, `menyatakan_bahwa`, `untuk`, `keterangan`, `acc`, `status`, `tanggal_request`, `keperluan`, `nik_user`, `request`) VALUES
(1, 'rian', 'asd', '2023-08-10', 'laki-laki', '777', '12312', ' 12312', '21312', '12312', '12312', '', '0000-00-00', 0, '2023-08-13 04:40:23', '12312', '777', 'Pernyataan'),
(2, 'rian', 'mlg', '2023-08-10', 'laki-laki', '777', '1231', ' 12312', '312312', '12312', '213123', 'Data sedang diperiksa oleh Staf', '0000-00-00', 0, '2023-08-13 12:07:20', '12312', '777', 'Pernyataan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pindah_nikah`
--

CREATE TABLE `t_pindah_nikah` (
  `id_pindah_nikah` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nomorkk` varchar(60) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jk` varchar(60) NOT NULL,
  `tempat` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kebangsaan` varchar(60) NOT NULL,
  `agama` varchar(60) NOT NULL,
  `status_perkawinan` varchar(60) NOT NULL,
  `pekerjaan` varchar(60) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pindahke` varchar(60) NOT NULL,
  `kelurahan` varchar(60) NOT NULL,
  `kecamatan` varchar(60) NOT NULL,
  `kab/kota` varchar(60) NOT NULL,
  `provinsi` varchar(60) NOT NULL,
  `keterangan` varchar(60) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NOT NULL,
  `request` varchar(60) NOT NULL DEFAULT 'PINDAH NIKAH',
  `status` int(11) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nik_user` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_skck`
--

CREATE TABLE `t_skck` (
  `id_skck` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomorkk` varchar(16) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `status_perkawinan` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `keperluan` varchar(60) NOT NULL,
  `tujuan` varchar(60) NOT NULL,
  `berlaku_tgl` date NOT NULL,
  `bedasarkan_keterangan` varchar(60) NOT NULL,
  `nik_user` varchar(16) NOT NULL,
  `keterangan` varchar(60) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `request` varchar(60) NOT NULL DEFAULT 'SKCK',
  `status` int(11) NOT NULL,
  `berdasarkan_rtrw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_skck`
--

INSERT INTO `t_skck` (`id_skck`, `nik`, `nama`, `nomorkk`, `tempat`, `tgl_lahir`, `jk`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat`, `pendidikan`, `keperluan`, `tujuan`, `berlaku_tgl`, `bedasarkan_keterangan`, `nik_user`, `keterangan`, `acc`, `tanggal_request`, `request`, `status`, `berdasarkan_rtrw`) VALUES
(1, '2131', 'fasf', '121213', 'jkt', '2023-08-09', 'laki_laki', 'islam', 'belum', 'buruh', 'la su', 's1', 'kerja', 'asda', '2023-08-18', 'surat ini', '777', 'Surat sedang dalam proses cetak', '2023-08-10', '2023-08-17 07:37:52', '', 2, 'untuk keperluan kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_skdu`
--

CREATE TABLE `t_skdu` (
  `id_skdu` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tempat` varchar(225) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `kelurahan` varchar(225) NOT NULL,
  `kecamatan` varchar(225) NOT NULL,
  `kota` varchar(225) NOT NULL,
  `nama_usaha` varchar(225) NOT NULL,
  `surat_keterangan` varchar(225) NOT NULL,
  `bidang_surat` varchar(30) NOT NULL,
  `nomer_surat` varchar(30) NOT NULL,
  `keterangan` varchar(225) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nik_user` varchar(16) NOT NULL,
  `request` varchar(225) NOT NULL DEFAULT 'DOMISILI',
  `status` int(11) NOT NULL,
  `keperluan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_skdu`
--

INSERT INTO `t_skdu` (`id_skdu`, `nama`, `tempat`, `tgl_lahir`, `jk`, `agama`, `pekerjaan`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `nama_usaha`, `surat_keterangan`, `bidang_surat`, `nomer_surat`, `keterangan`, `acc`, `nik`, `tanggal_request`, `nik_user`, `request`, `status`, `keperluan`) VALUES
(33, 'rian', 'jakarta', '2023-08-09', 'laki_laki', 'islam', 'usaha', 'tlogomas', 'tlogomas', 'lowokwaru', 'malang', 'samsung cell', 'surat izin pindah', 'conter', '', 'Surat dicetak, bisa diambil!', '2023-08-09', '777', '2023-08-10 12:26:37', '777', '', 3, 'SKDU TERLAKSANAKAN'),
(34, 'rian', 'jakarta', '2023-08-16', 'laki_laki', 'islam', 'buruh', 'tlogomas malang', 'tlogomas', 'lowokwaru', 'malang', 'glade', 'surat izin', 'barber', '', 'Surat sedang dalam proses cetak', '2023-08-13', '777', '2023-08-13 09:21:33', '777', '', 2, 'SKDU TERLAKSANAKAN'),
(38, 'rian', 'jkt', '2023-08-10', 'laki_laki', 'islam', 'asda', 'asd', 'asda', 'asd', 'asd', 'asd', 'asd', 'asd', '', 'Surat sedang dalam proses cetak', '2023-08-13', '777', '2023-08-13 09:57:46', '777', '', 2, 'SKDU TERLAKSANAKAN'),
(39, 'rian', 'jkt', '2023-08-10', 'laki_laki', 'islam', 'pengusaha', 'jl tlogomas', 'tlogomas', 'lowokwaru', 'malang', 'galaxy', 'membuat izin diri', 'komputer', '9018209440918', '', '2023-08-10', '777', '2023-08-10 12:26:42', '777', '', 3, 'SKDU TERLAKSANAKAN'),
(40, 'rian', '', '0000-00-00', 'laki_laki', '', '', '', '', '', '', '', '', '', '', 'Surat sedang dalam proses cetak', '2023-08-13', '777', '2023-08-13 09:21:41', '777', '', 2, 'SKDU TERLAKSANAKAN'),
(41, 'rian', '', '0000-00-00', 'laki_laki', '', '', '', '', '', '', '', '', '', '', 'Surat sedang diperiksa oleh sekertaris', '0000-00-00', '777', '2023-08-13 09:57:27', '777', '', 1, 'SKDU TERLAKSANAKAN'),
(42, 'rian', '1212312', '2023-08-07', 'perempuan', '1231', '12312', '21312', '1231', '12321', '1231', '12312', '12312', '12312', '12312', '', '0000-00-00', '777', '2023-08-13 06:09:27', '777', '', 0, ''),
(43, 'rian21', 'jkt', '2023-08-10', 'perempuan', 'Budha', 'buruh', 'malang', '21312', '2131', '12312', '1231', '12312', '12312', '12312', '', '0000-00-00', '77712', '2023-08-13 06:20:07', '777', '', 0, ''),
(44, 'rian12312', 'asd12312', '2023-08-10', 'laki_laki', 'Budha12312', '12312', '21312', '12312', '12312', '12312', '12312', '12312', '12312', '12312', 'Data sedang diperiksa oleh Staf', '0000-00-00', '777', '2023-08-13 09:57:02', '777', 'DOMISILI', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sktm`
--

CREATE TABLE `t_sktm` (
  `id_sktm` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nomorkk` varchar(60) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(30) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `pendidikan` varchar(60) NOT NULL,
  `keperluan` varchar(60) NOT NULL,
  `tujuan` varchar(60) NOT NULL,
  `berlaku_tgl` date NOT NULL,
  `berdasarkan_keterangan` varchar(60) NOT NULL,
  `keterangan` varchar(60) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NOT NULL,
  `request` varchar(60) NOT NULL DEFAULT 'SKTM',
  `status` int(11) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nik_user` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_sktm`
--

INSERT INTO `t_sktm` (`id_sktm`, `nama`, `nomorkk`, `nik`, `tempat`, `tgl_lahir`, `jk`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat`, `pendidikan`, `keperluan`, `tujuan`, `berlaku_tgl`, `berdasarkan_keterangan`, `keterangan`, `acc`, `request`, `status`, `tanggal_request`, `nik_user`) VALUES
(5, 'rian', '1231', '777', 'malang', '2023-08-10', 'Laki-Laki', 'asd', 'asd', 'asd', 'dsad', 'asd', 'dkfmsk', 'ksdfm', '2023-08-12', 'asd', 'Surat dicetak, bisa diambil!', '0000-00-00', '', 3, '2023-08-13 10:38:09', '777'),
(8, 'rian21312', '12312', '7771231', 'asd12312', '2023-03-21', 'Laki-Laki', '12312', '12312', '21312', ' 12312', '12312', '12312', '31231', '2023-08-13', '123123', 'Surat dicetak, bisa diambil!', '2023-08-13', '', 3, '2023-08-13 10:35:49', '777'),
(9, 'putri', '2112312', '7771212312412412', 'malang', '2002-01-10', 'Laki-Laki', 'Budha', 'Belum', 'makan', ' tlogomas', 's1', 'bpjs', 'mengurus usrat', '2023-08-15', '21312312', 'Surat dicetak, bisa diambil!', '2023-08-13', 'SKTM', 3, '2023-08-13 10:37:03', '777'),
(10, 'marta', '2131231', '77721312', 'malang', '2023-08-10', 'Laki-Laki', 'Budha', 'belum', 'belum bekerja', 'malang tlogomas', 'sma', 'sekolah', 'untuk masuk kuliah', '2023-08-06', '12345', 'Data sedang diperiksa oleh Staf', '0000-00-00', 'SKTM', 0, '2023-08-13 07:01:33', '777'),
(11, 'rian', '123123', '777', 'asd', '2023-08-10', 'Laki-Laki', 'Budha', '213123', '12312', ' 12312', '123123', '12312', '12312', '2023-08-06', '123123123', 'Surat dicetak, bisa diambil!', '2023-08-13', 'SKTM', 3, '2023-08-13 10:37:16', '777'),
(12, 'rianis', '12312312312', '77712312', 'malang', '2023-08-10', 'Laki-Laki', 'Budha', 'belum', 'buruh', 'jl la sucipto', 's1 ', 'bpjs', 'untuk membuat ', '2023-08-17', 'akan buat sekolah', 'Surat sedang dalam proses cetak', '2023-08-17', 'SKTM', 2, '2023-08-17 07:34:46', '777');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sku`
--

CREATE TABLE `t_sku` (
  `id_sku` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(60) NOT NULL,
  `status_perkawinan` varchar(60) NOT NULL,
  `kewarganegaraan` varchar(60) NOT NULL,
  `pendidikan` varchar(60) NOT NULL,
  `pekerjaan` varchar(60) NOT NULL,
  `nik` varchar(60) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `berlaku_tgl` date NOT NULL,
  `berdasarkan_keterangan` varchar(100) NOT NULL,
  `keterangan` varchar(60) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `acc` date NOT NULL,
  `request` varchar(100) NOT NULL DEFAULT 'USAHA',
  `status` int(11) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nik_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `t_sku`
--

INSERT INTO `t_sku` (`id_sku`, `nama`, `jk`, `tempat`, `tgl_lahir`, `agama`, `status_perkawinan`, `kewarganegaraan`, `pendidikan`, `pekerjaan`, `nik`, `alamat`, `keperluan`, `berlaku_tgl`, `berdasarkan_keterangan`, `keterangan`, `acc`, `request`, `status`, `tanggal_request`, `nik_user`) VALUES
(1, 'update ya', 'Laki-Laki', 'asd', '2023-08-10', 'asd', 'ads', 'adsa', 'dasda', 'dasd', '777', 'dasd', 'asd', '2023-08-12', '324', 'Surat dicetak, bisa diambil!', '2023-08-13', '', 3, '2023-08-13 11:55:06', '777'),
(3, 'asdasd', 'Laki-Laki', 'asd', '2023-08-10', 'asdas', 'asda', 'asda', 'asd', 'asda', '25435435435', 'asda', 'asd', '2023-08-12', '33', 'asd', '0000-00-00', '', 0, '2023-08-12 11:19:23', '777'),
(4, 'sdfsdfsd', 'Laki-Laki', 'asd', '2023-08-10', 'sdf', 'sdf', 'dsf', 'sddf', 'dsf', '453543543', 'sdf', '', '2023-08-12', 'sdfd', '', '0000-00-00', '', 0, '2023-08-12 11:18:29', '777'),
(5, 'rian21312', 'Laki-Laki', 'asd12312', '2023-08-10', '12312', '12312', '12312', '12312', '12312', '7771231', '12312', '12312', '2023-08-07', '123123', 'Surat sedang dalam proses cetak', '2023-08-13', '', 2, '2023-08-13 11:31:39', '777'),
(6, 'rianfeb', 'Laki-Laki', 'malang', '2002-02-20', 'islam', 'belum', 'wni', 's1', 'halokes', '7772131', 'malang ', 'buat usaha', '2023-08-13', 'asda', 'Data sedang diperiksa oleh Staf', '0000-00-00', 'USAHA', 0, '2023-08-13 11:57:50', '777');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_image`
--
ALTER TABLE `data_image`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `data_jenis_persyaratan`
--
ALTER TABLE `data_jenis_persyaratan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `data_request_skck`
--
ALTER TABLE `data_request_skck`
  ADD PRIMARY KEY (`id_request_skck`) USING BTREE;

--
-- Indeks untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD PRIMARY KEY (`id_request_skd`) USING BTREE,
  ADD KEY `id_pemohon` (`nik`) USING BTREE;

--
-- Indeks untuk tabel `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD PRIMARY KEY (`id_request_skp`) USING BTREE,
  ADD KEY `id_pemohon` (`nik`) USING BTREE;

--
-- Indeks untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD PRIMARY KEY (`id_request_sku`) USING BTREE,
  ADD KEY `id_pemohon` (`nik`) USING BTREE;

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`nik`) USING BTREE;

--
-- Indeks untuk tabel `t_blm_nikah`
--
ALTER TABLE `t_blm_nikah`
  ADD PRIMARY KEY (`id_blm`);

--
-- Indeks untuk tabel `t_keramaian`
--
ALTER TABLE `t_keramaian`
  ADD PRIMARY KEY (`id_keramaian`) USING BTREE;

--
-- Indeks untuk tabel `t_nikah`
--
ALTER TABLE `t_nikah`
  ADD PRIMARY KEY (`id_nikah`);

--
-- Indeks untuk tabel `t_pernyataan`
--
ALTER TABLE `t_pernyataan`
  ADD PRIMARY KEY (`id_pernyataan`);

--
-- Indeks untuk tabel `t_pindah_nikah`
--
ALTER TABLE `t_pindah_nikah`
  ADD PRIMARY KEY (`id_pindah_nikah`);

--
-- Indeks untuk tabel `t_skck`
--
ALTER TABLE `t_skck`
  ADD PRIMARY KEY (`id_skck`) USING BTREE;

--
-- Indeks untuk tabel `t_skdu`
--
ALTER TABLE `t_skdu`
  ADD PRIMARY KEY (`id_skdu`) USING BTREE;

--
-- Indeks untuk tabel `t_sktm`
--
ALTER TABLE `t_sktm`
  ADD PRIMARY KEY (`id_sktm`) USING BTREE;

--
-- Indeks untuk tabel `t_sku`
--
ALTER TABLE `t_sku`
  ADD PRIMARY KEY (`id_sku`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_image`
--
ALTER TABLE `data_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT untuk tabel `data_jenis_persyaratan`
--
ALTER TABLE `data_jenis_persyaratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_request_skck`
--
ALTER TABLE `data_request_skck`
  MODIFY `id_request_skck` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  MODIFY `id_request_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `data_request_skp`
--
ALTER TABLE `data_request_skp`
  MODIFY `id_request_skp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  MODIFY `id_request_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `t_keramaian`
--
ALTER TABLE `t_keramaian`
  MODIFY `id_keramaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `t_nikah`
--
ALTER TABLE `t_nikah`
  MODIFY `id_nikah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_pernyataan`
--
ALTER TABLE `t_pernyataan`
  MODIFY `id_pernyataan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_skck`
--
ALTER TABLE `t_skck`
  MODIFY `id_skck` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_skdu`
--
ALTER TABLE `t_skdu`
  MODIFY `id_skdu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `t_sktm`
--
ALTER TABLE `t_sktm`
  MODIFY `id_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `t_sku`
--
ALTER TABLE `t_sku`
  MODIFY `id_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD CONSTRAINT `data_request_skd_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD CONSTRAINT `data_request_skp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD CONSTRAINT `data_request_sku_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
