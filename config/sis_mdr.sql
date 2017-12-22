-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 09:50 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis_mdr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tberita`
--

CREATE TABLE `tberita` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `status` varchar(35) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tberita`
--

INSERT INTO `tberita` (`id`, `created_at`, `updated_at`, `deleted_at`, `judul`, `isi_berita`, `status`, `id_kategori`, `id_user`) VALUES
(1, '2017-10-30 10:24:28', '2017-10-30 10:28:06', '2017-10-30 00:00:00', 'barang datang', 'barang dari ardiles sudah datang', '', 1, 1),
(4, '2017-10-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'reapet barang eagle', 'barang barang yang sudah habis bisa diisi untuk eaglenya', '', 5, 1),
(5, '2017-10-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'reapet barang eagle', 'barang barang yang sudah habis bisa diisi untuk eaglenya', '', 5, 1),
(6, '2017-10-31 11:11:31', NULL, NULL, 'ada kunjungan dari sals carvil', 'keperluan cek stok barang\r\n\r\natas nama nono', '', 7, 1),
(7, '2017-10-31 11:13:12', NULL, NULL, 'Jaga Kebersihan', 'Mohon menjaga kebersihan Lingkungan toko\r\n\r\ndidepan ruang display maupin di dalam gudang\r\n\r\nMohon membuang sampah pada tempatnya', '', 13, 1),
(8, '2017-10-31 11:13:53', NULL, NULL, 'Libur Bulanan', 'Tanggal 15 November 2017 akan ada LIBUR 1 hari', '', 13, 1),
(9, '2017-10-31 11:14:36', NULL, NULL, 'BUKALAPAK DOWN', 'SITUS BUKALAPAK tidak bisa dibuka', '', 9, 1),
(10, '2017-10-31 11:17:53', NULL, NULL, 'TOKOPEDIA LOGOUT', 'Password toko pedia tidak bisa Login', '', 11, 1),
(19, '2017-11-05 19:32:15', NULL, NULL, 'test', 'test', '', 1, 1),
(23, '2017-11-05 20:05:04', NULL, NULL, 'test', 'test', '', 1, 1),
(24, '2017-11-05 21:24:24', NULL, NULL, 'mantab', 'test', '', 2, 1),
(25, '2017-11-05 21:24:33', NULL, NULL, 'mantab', 'test', '', 2, 1),
(26, '2017-11-05 21:24:47', NULL, NULL, 'mantab', 'test', '', 2, 1),
(27, '2017-11-05 21:26:02', NULL, NULL, 'mantab', 'test', '', 2, 1),
(28, '2017-11-05 21:29:15', NULL, NULL, 'mantab', 'test', '', 2, 1),
(29, '2017-11-05 21:29:32', NULL, NULL, 'mantab', 'test', '', 2, 1),
(30, '2017-11-05 21:30:42', NULL, NULL, 'mantab', 'test', '', 2, 1),
(31, '2017-11-05 21:35:37', NULL, NULL, 'mantab', 'test', '', 2, 1),
(32, '2017-11-05 21:40:10', NULL, NULL, 'mantab', 'test', '', 2, 1),
(33, '2017-11-05 21:40:38', NULL, NULL, 'test', 'test', '', 1, 1),
(34, '2017-11-05 21:42:26', NULL, NULL, 'test', 'test', '', 1, 1),
(35, '2017-11-05 21:43:26', NULL, NULL, 'test', 'test', '', 1, 1),
(36, '2017-11-05 21:43:47', NULL, NULL, 'test', 'asd', '', 1, 1),
(37, '2017-11-05 21:45:23', NULL, NULL, 'test', 'asd', '', 1, 1),
(38, '2017-11-05 21:46:33', NULL, NULL, 'test', 'asd', '', 1, 1),
(42, '2017-11-05 21:47:31', NULL, NULL, 'test', 'asd', '', 3, 1),
(43, '2017-11-05 21:52:30', NULL, NULL, 'test', 'asd', '', 3, 1),
(44, '2017-11-05 21:52:45', NULL, NULL, 'test', 'asd', '', 3, 1),
(45, '2017-11-05 21:53:56', NULL, NULL, 'test', 'asd', '', 3, 1),
(46, '2017-11-06 09:54:21', NULL, NULL, 'asd', 'asd', '', 2, 1),
(47, '2017-11-06 10:11:57', NULL, NULL, 'test foto', 'test foto', '', 2, 1),
(48, '2017-11-06 10:12:46', NULL, NULL, 'test foto', 'test foto', '', 2, 1),
(49, '2017-11-06 14:03:15', NULL, NULL, 'laskjdjnjk', 'njkbjkas', '', 2, 1),
(50, '2017-11-06 14:05:19', NULL, NULL, 'laskjdjnjk', 'njkbjkas', '', 2, 1),
(51, '2017-11-06 14:06:44', NULL, NULL, 'laskjdjnjk', 'njkbjkas', '', 2, 1),
(52, '2017-11-06 14:07:21', NULL, NULL, 'laskjdjnjk', 'njkbjkas', '', 2, 1),
(53, '2017-11-06 14:09:26', NULL, NULL, 'laskjdjnjk', 'njkbjkas', '', 2, 1),
(54, '2017-11-06 14:11:16', NULL, NULL, 'asd', 'sad', '', 3, 1),
(55, '2017-11-06 14:13:15', NULL, NULL, 'asd', 'sad', '', 3, 1),
(56, '2017-11-06 14:14:54', NULL, NULL, 'wef', 'assa', '', 3, 1),
(57, '2017-11-06 14:15:24', NULL, NULL, 'wef', 'assa', '', 3, 1),
(58, '2017-11-06 14:15:47', NULL, NULL, 'wef', 'assa', '', 3, 1),
(59, '2017-11-06 14:15:56', NULL, NULL, 'wef', 'assa', '', 3, 1),
(60, '2017-11-06 14:15:58', NULL, NULL, 'wef', 'assa', '', 3, 1),
(61, '2017-11-06 14:16:03', NULL, NULL, 'wef', 'assa', '', 3, 1),
(62, '2017-11-06 14:16:06', NULL, NULL, 'wef', 'assa', '', 3, 1),
(63, '2017-11-06 14:21:09', NULL, NULL, 'asd', 'asd', '', 3, 1),
(64, '2017-11-07 13:25:47', NULL, NULL, 'coba isi berita', 'tes tes', '', 3, 1),
(65, '2017-12-06 19:39:31', NULL, NULL, 'test', 'sa', '', 1, 1),
(66, '2017-12-06 19:39:45', NULL, NULL, 'asd', 'asd', '', 1, 1),
(67, '2017-12-08 13:03:43', NULL, NULL, 'test', 'test', '', 3, 1),
(68, '2017-12-08 13:04:18', NULL, NULL, 'test', 'test', '', 3, 1),
(69, '2017-12-08 13:06:18', NULL, NULL, 'test', 'test', '', 3, 1),
(70, '2017-12-08 13:13:43', NULL, NULL, 'test', 'test', '', 3, 1),
(71, '2017-12-08 13:13:54', NULL, NULL, 'test', 'test', '', 3, 1),
(72, '2017-12-08 13:15:18', NULL, NULL, 'test', 'test', '', 3, 1),
(73, '2017-12-08 13:20:28', NULL, NULL, 'test notif', 'test notif, karna yg tadi belum banyak usernya', '', 1, 1),
(74, '2017-12-08 18:15:24', NULL, NULL, 'notif', 'cek notif', '', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tfoto`
--

CREATE TABLE `tfoto` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `nama_foto` varchar(255) NOT NULL,
  `id_berita` int(11) DEFAULT NULL,
  `id_komentar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tfoto`
--

INSERT INTO `tfoto` (`id`, `created_at`, `updated_at`, `deleted_at`, `nama_foto`, `id_berita`, `id_komentar`) VALUES
(1, '2017-11-02 09:06:15', NULL, NULL, 'photo2.png', 6, NULL),
(2, '2017-11-02 09:25:03', NULL, NULL, 'photo2.png', 4, NULL),
(3, '2017-11-06 03:11:57', NULL, NULL, '1496821305579.jpg', 47, NULL),
(4, '2017-11-06 03:12:46', NULL, NULL, '1496821305579.jpg', 48, NULL),
(5, '2017-11-06 07:03:15', NULL, NULL, 'logo PAPSI.jpg', 49, NULL),
(6, '2017-11-06 07:05:19', NULL, NULL, 'logo PAPSI.jpg', 50, NULL),
(7, '2017-11-06 07:06:44', NULL, NULL, 'logo PAPSI.jpg', 51, NULL),
(8, '2017-11-06 07:07:21', NULL, NULL, 'logo PAPSI.jpg', 52, NULL),
(9, '2017-11-06 07:09:26', NULL, NULL, 'logo PAPSI.jpg', 53, NULL),
(10, '2017-11-06 07:11:16', NULL, NULL, '1496821305579.jpg', 54, NULL),
(11, '2017-11-06 07:13:15', NULL, NULL, '1496821305579.jpg', 55, NULL),
(12, '2017-11-06 07:14:54', NULL, NULL, 'IMG20170606135624.jpg', 56, NULL),
(13, '2017-11-06 07:15:24', NULL, NULL, 'IMG20170606135624.jpg', 57, NULL),
(14, '2017-11-06 07:15:47', NULL, NULL, 'IMG20170606135624.jpg', 58, NULL),
(15, '2017-11-06 07:15:56', NULL, NULL, 'IMG20170606135624.jpg', 59, NULL),
(16, '2017-11-06 07:15:58', NULL, NULL, 'IMG20170606135624.jpg', 60, NULL),
(17, '2017-11-06 07:16:03', NULL, NULL, 'IMG20170606135624.jpg', 61, NULL),
(18, '2017-11-06 07:16:06', NULL, NULL, 'IMG20170606135624.jpg', 62, NULL),
(43, '2017-11-06 13:06:39', NULL, NULL, 'CALBI-DEX-1019-BLACK-3-tokoMODERNsurabaya.jpg', 0, NULL),
(44, '2017-11-07 06:25:47', NULL, NULL, 'AIR-PRO-BERLIN-BIRU-02-tokoMODERNsurabaya.jpg', 64, NULL),
(45, '2017-12-06 12:39:31', NULL, NULL, 'Screenshot (1).png', 65, NULL),
(46, '2017-12-06 12:39:45', NULL, NULL, '', 66, NULL),
(47, '2017-12-08 06:03:43', NULL, NULL, '', 67, NULL),
(48, '2017-12-08 06:04:18', NULL, NULL, '', 68, NULL),
(49, '2017-12-08 06:06:18', NULL, NULL, '', 69, NULL),
(50, '2017-12-08 06:13:43', NULL, NULL, '', 70, NULL),
(51, '2017-12-08 06:13:54', NULL, NULL, '', 71, NULL),
(52, '2017-12-08 06:15:18', NULL, NULL, '', 72, NULL),
(53, '2017-12-08 06:20:28', NULL, NULL, '', 73, NULL),
(54, '2017-12-08 11:15:24', NULL, NULL, '', 74, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tkaryawan`
--

CREATE TABLE `tkaryawan` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `alamat_kos` varchar(255) NOT NULL,
  `hp1` tinytext NOT NULL,
  `hp2` tinytext NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `telepon_keluarga` int(15) NOT NULL,
  `line` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_mulai_kerja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tkaryawan`
--

INSERT INTO `tkaryawan` (`id`, `created_at`, `updated_at`, `deleted_at`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `alamat_kos`, `hp1`, `hp2`, `nama_ayah`, `nama_ibu`, `telepon_keluarga`, `line`, `facebook`, `email`, `tanggal_mulai_kerja`) VALUES
(2, '2017-11-11 15:09:58', NULL, NULL, 'karyawan 2', 'Surabaya', '2008-07-01', ' \r\n							alamat 			:\r\n							Kota/Kabupaten 	:\r\n							Kecamatan 		:\r\n							desa 			:\r\n							Kode pos 		:\r\n						  ', ' \r\n							Tulis : alamat, Kota, Kabupaten / desa, Kecamatan, provinsi, KodePos\r\n						  ', '2', '2', 'supri', 'painem', 2, '2', '2', '2', '0000-00-00'),
(3, '2017-11-11 15:14:09', NULL, NULL, 'karyawan 3', 'Surabaya', '2013-11-04', ' \r\n							alamat 			:\r\n							Kota/Kabupaten 	:\r\n							Kecamatan 		:\r\n							desa 			:\r\n							Kode pos 		:\r\n						  ', ' \r\n							Tulis : alamat, Kota, Kabupaten / desa, Kecamatan, provinsi, KodePos\r\n						  ', '3', '3', '3', '3', 3, '3', '3', '3', '0000-00-00'),
(4, '2017-11-11 15:16:44', NULL, NULL, 'karyawan 4', 'Surabaya', '2013-11-04', ' \r\n							alamat 			:\r\n							Kota/Kabupaten 	:\r\n							Kecamatan 		:\r\n							desa 			:\r\n							Kode pos 		:\r\n						  ', ' \r\n							Tulis : alamat, Kota, Kabupaten / desa, Kecamatan, provinsi, KodePos\r\n						  ', '3', '3', '3', '3', 3, '3', '3', '3', '0000-00-00'),
(5, '2017-11-11 15:17:00', NULL, NULL, 'karyawan 5', 'Surabaya', '2013-11-04', ' \r\n							alamat 			:\r\n							Kota/Kabupaten 	:\r\n							Kecamatan 		:\r\n							desa 			:\r\n							Kode pos 		:\r\n						  ', ' \r\n							Tulis : alamat, Kota, Kabupaten / desa, Kecamatan, provinsi, KodePos\r\n						  ', '3', '3', '3', '3', 3, '3', '3', '3', '0000-00-00'),
(6, '2017-11-11 15:17:33', NULL, NULL, 'karyawan 6', 'Surabaya', '2013-11-04', ' \r\n							alamat 			:\r\n							Kota/Kabupaten 	:\r\n							Kecamatan 		:\r\n							desa 			:\r\n							Kode pos 		:\r\n						  ', ' \r\n							Tulis : alamat, Kota, Kabupaten / desa, Kecamatan, provinsi, KodePos\r\n						  ', '3', '3', '3', '3', 3, '3', '3', '3', '0000-00-00'),
(7, '2017-11-11 15:21:15', NULL, NULL, 'karyawan 7', 'Surabaya', '2013-11-04', ' \r\n							alamat 			:\r\n							Kota/Kabupaten 	:\r\n							Kecamatan 		:\r\n							desa 			:\r\n							Kode pos 		:\r\n						  ', ' \r\n							Tulis : alamat, Kota, Kabupaten / desa, Kecamatan, provinsi, KodePos\r\n						  ', '3', '3', '3', '3', 3, '3', '3', '3', '0000-00-00'),
(8, '2017-11-11 15:25:44', NULL, NULL, 'Karyawan 8', 'Surabaya', '2013-11-03', ' \r\n							alamat 			:\r\n							Kota/Kabupaten 	:\r\n							Kecamatan 		:\r\n							desa 			:\r\n							Kode pos 		:\r\n						  ', ' \r\n							Tulis : alamat, Kota, Kabupaten / desa, Kecamatan, provinsi, KodePos\r\n						  ', '4', '4', '4', '4', 4, '4', '4', '4', '0000-00-00'),
(9, '2017-11-11 22:41:20', NULL, NULL, 'karyawan 9', 'Sidoarjo', '2010-11-01', ' \r\n							alamat 			:\r\n							Kota/Kabupaten 	:\r\n							Kecamatan 		:\r\n							desa 			:\r\n							Kode pos 		:\r\n						  ', ' \r\n							Tulis : alamat, Kota, Kabupaten / desa, Kecamatan, provinsi, KodePos\r\n						  ', '085608560856', '081208120812', 'doni', 'ida', 31, 'nananana', 'nananana', 'nana@gmail.com', '0000-00-00'),
(10, '2017-11-11 22:46:58', NULL, NULL, 'karyawan 10', 'Sidoarjo', '2011-10-01', ' \r\n							alamat 			:\r\n							Kota/Kabupaten 	:\r\n							Kecamatan 		:\r\n							desa 			:\r\n							Kode pos 		:\r\n						  ', ' \r\n							Tulis : alamat, Kota, Kabupaten / desa, Kecamatan, provinsi, KodePos\r\n						  ', '123412341234', '12345678912', 'supri', 'susi', 147852369, 'nananana', 'nananana', 'sweet.otona.cs@gmail.com', '0000-00-00'),
(11, '2017-12-04 00:51:23', NULL, NULL, 'no 11', 'surabaya', '2008-07-01', 'Jl Jemur no 11 rt 3 rw 12 60345\r\n						  ', 'Jl Jemur no 11 \r\n						  ', '08123456789', '0856456456', 'ayah', 'Ibu', 2147483647, 'Sebelas', 'Sebelas', 'Sebelas@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tkaryawan_lampiran`
--

CREATE TABLE `tkaryawan_lampiran` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `deskripsi` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `acc_oleh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tkaryawan_lampiran`
--

INSERT INTO `tkaryawan_lampiran` (`id`, `id_karyawan`, `deskripsi`, `foto`, `acc_oleh`) VALUES
(1, 4, 'ktp', 'AIR-PRO-BERLIN-BIRU-01-tokoMODERNsurabaya.jpg', 0),
(2, 4, 'kk', 'AIR-PRO-BERLIN-BIRU-02-tokoMODERNsurabaya.jpg', 0),
(3, 4, 'diri', 'AIR-PRO-BERLIN-BIRU-03-tokoMODERNsurabaya.jpg', 0),
(4, 4, 'ijasah', 'AIR-PRO-BERLIN-BLACK-01-tokoMODERNsurabaya.jpg', 0),
(5, 9, 'ktp', 'CARVIL-MSN-02-M-BLACK-2-tokoMODERNsurabaya.jpg', 0),
(6, 9, 'kk', 'CARVIL-MSN-02-M-BLACK-3-tokoMODERNsurabaya.jpg', 0),
(7, 9, 'diri', 'CARVIL-MSN-02-M-BLACK-1-1-tokoMODERNsurabaya.jpg', 0),
(8, 9, 'ijasah', '', 0),
(9, 10, 'ktp', 'AIR-PRO--BOSTON-KREM-3-tokoMODERNsurabayaCOM.jpg', 0),
(10, 10, 'kk', '', 0),
(11, 10, 'diri', 'AIR-PRO--BOSTON-KREM-2-tokoMODERNsurabayaCOM.jpg', 0),
(12, 10, 'ijasah', '', 0),
(13, 11, 'ktp', 'BARNETT-MIYAKE-QUEEN-02-GREY-PINK-1-tokoMODERNsurabayaCOM.jpg', 0),
(14, 11, 'kk', 'BARNETT-MIYAKE-QUEEN-02-GREY-PINK-3-tokoMODERNsurabayaCOM.jpg', 0),
(15, 11, 'diri', 'BARNETT-MIYAKE-QUEEN-02-GREY-PINK-2-tokoMODERNsurabayaCOM.jpg', 0),
(16, 11, 'ijasah', 'BARNETT-MIYAKE-QUEEN-02-GREY-PINK-4-tokoMODERNsurabayaCOM.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tkategori`
--

CREATE TABLE `tkategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkategori`
--

INSERT INTO `tkategori` (`id`, `kategori`) VALUES
(1, 'barang datang'),
(2, 'barang rusak'),
(3, 'Umum'),
(5, 'LAPORAN KERJA'),
(6, 'Order Barang'),
(7, 'Kunjungan sales'),
(8, 'Target dan Rencana Kerja'),
(9, 'BUKALAPAK'),
(10, 'SHOPEE'),
(11, 'TOKOPEDIA'),
(12, 'TokoModernOnline'),
(13, 'PENGUMUMAN');

-- --------------------------------------------------------

--
-- Table structure for table `tkomentar`
--

CREATE TABLE `tkomentar` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `id_berita` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `foto_komentar` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkomentar`
--

INSERT INTO `tkomentar` (`id`, `created_at`, `updated_at`, `deleted_at`, `id_berita`, `isi_komentar`, `foto_komentar`, `id_user`) VALUES
(1, '2017-10-30 00:00:00', '2017-10-30 00:00:00', '2017-10-30 00:00:00', 1, 'ok, siip', NULL, 1),
(2, '2017-10-31 11:20:16', NULL, NULL, 7, 'Siap', NULL, 1),
(3, '2017-10-31 11:20:51', NULL, NULL, 8, 'asikkkk', NULL, 1),
(4, '2017-10-31 11:21:27', NULL, NULL, 9, 'sedang diperbaiki', NULL, 1),
(5, '2017-10-31 11:21:56', NULL, NULL, 10, 'sudah bisa Login sekarang', NULL, 1),
(6, '2017-10-31 11:21:56', NULL, NULL, 10, 'dicoba dulu', NULL, 1),
(7, '2017-10-31 11:23:59', NULL, NULL, 5, 'barang sudah di cek tapi kok masih banyak semua ya?', NULL, 1),
(8, '2017-10-31 11:23:59', NULL, NULL, 6, 'aduh nono kok ngak bilang mau datang', NULL, 1),
(9, '2017-10-31 11:24:13', NULL, NULL, 5, 'tadi salah cek maaf', NULL, 1),
(10, '2017-10-31 11:24:34', NULL, NULL, 1, 'barang datang sudah diproses', NULL, 1),
(11, '2017-11-03 16:59:32', NULL, NULL, 1, 'wah wah', NULL, 1),
(12, '2017-11-03 16:59:32', NULL, NULL, 4, 'mantab', NULL, 1),
(13, '2017-11-07 13:26:24', NULL, NULL, 64, 'coba di komnetari', NULL, 1),
(14, '2017-11-07 13:26:42', NULL, NULL, 63, 'cek koment', NULL, 1),
(15, '2017-11-07 19:25:24', NULL, NULL, 64, 'koment ke 2', NULL, 1),
(16, '2017-11-07 19:25:34', NULL, NULL, 64, 'koment ke 3', NULL, 1),
(17, '2017-11-08 20:59:03', NULL, NULL, 63, 'cek cek pakai user name lain', NULL, 2),
(18, '2017-11-08 21:07:23', NULL, NULL, 62, 'halo world', NULL, 2),
(19, '2017-11-28 22:33:33', NULL, NULL, 64, '', NULL, 2),
(20, '2017-12-06 19:40:29', NULL, NULL, 66, '', NULL, 1),
(21, '2017-12-06 19:41:54', NULL, NULL, 66, '', NULL, 1),
(22, '2017-12-06 19:42:22', NULL, NULL, 66, '', NULL, 1),
(23, '2017-12-07 13:52:33', NULL, NULL, 65, 'asd', NULL, 1),
(24, '2017-12-07 15:47:31', NULL, NULL, 66, 'test', 'Screenshot (1).png', 1),
(25, '2017-12-07 16:02:17', NULL, NULL, 65, 'test gambar', '', 1),
(26, '2017-12-07 16:05:38', NULL, NULL, 65, 'test gambar', '', 1),
(27, '2017-12-07 16:05:57', NULL, NULL, 65, 'test gambar', '', 1),
(28, '2017-12-07 16:10:50', NULL, NULL, 66, 'asd', 'Screenshot (10).png', 1),
(29, '2017-12-07 16:11:03', NULL, NULL, 65, 'asd', '', 1),
(30, '2017-12-07 16:36:41', NULL, NULL, 65, 'test gambar', 'Screenshot (1).png', 1),
(31, '2017-12-08 13:23:16', NULL, NULL, 73, 'ciee, notifnya sudah bisa', '', 1),
(32, '2017-12-08 13:23:29', NULL, NULL, 73, 'bisa disimpan maksudnya', '', 1),
(33, '2017-12-08 13:53:34', NULL, NULL, 73, 'test foto', 'Screenshot (1).png', 1),
(34, '2017-12-08 18:26:13', NULL, NULL, 74, 'asd', 'Screenshot (3).png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tnotifikasi`
--

CREATE TABLE `tnotifikasi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tnotifikasi`
--

INSERT INTO `tnotifikasi` (`id`, `id_user`, `id_berita`, `date`, `status`) VALUES
(1, 2, 72, '2017-12-08 13:15:18', 1),
(2, 2, 73, '2017-12-08 13:20:28', 1),
(3, 3, 73, '2017-12-08 13:20:28', 0),
(4, 4, 73, '2017-12-08 13:20:28', 0),
(5, 1, 73, '2017-12-08 13:36:37', 1),
(6, 1, 74, '2017-12-08 18:15:24', 1),
(7, 3, 74, '2017-12-08 18:15:24', 0),
(8, 4, 74, '2017-12-08 18:15:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'johan', '7fedcb034ecf9df4be8c1ea13362053b', 'admin'),
(3, 'firman', '74bfebec67d1a87b161e5cbcf6f72a4a', 'admin'),
(4, 'yunan', '76afb9e85728397806b138b4c9a109ff', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tberita`
--
ALTER TABLE `tberita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tfoto`
--
ALTER TABLE `tfoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkaryawan`
--
ALTER TABLE `tkaryawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkaryawan_lampiran`
--
ALTER TABLE `tkaryawan_lampiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkategori`
--
ALTER TABLE `tkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkomentar`
--
ALTER TABLE `tkomentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `tnotifikasi`
--
ALTER TABLE `tnotifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tberita`
--
ALTER TABLE `tberita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `tfoto`
--
ALTER TABLE `tfoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tkaryawan`
--
ALTER TABLE `tkaryawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tkaryawan_lampiran`
--
ALTER TABLE `tkaryawan_lampiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tkategori`
--
ALTER TABLE `tkategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tkomentar`
--
ALTER TABLE `tkomentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tnotifikasi`
--
ALTER TABLE `tnotifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tberita`
--
ALTER TABLE `tberita`
  ADD CONSTRAINT `tberita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tuser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tberita_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tkategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tkomentar`
--
ALTER TABLE `tkomentar`
  ADD CONSTRAINT `tkomentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tuser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tkomentar_ibfk_2` FOREIGN KEY (`id_berita`) REFERENCES `tberita` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
