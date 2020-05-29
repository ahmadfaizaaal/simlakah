-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 05:16 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simlakah`
--

-- --------------------------------------------------------

--
-- Table structure for table `dukcapil`
--

CREATE TABLE `dukcapil` (
  `NIK` char(16) NOT NULL,
  `NAMA` varchar(128) NOT NULL,
  `TEMPAT_LAHIR` varchar(128) NOT NULL,
  `TANGGAL_LAHIR` timestamp NULL DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) NOT NULL,
  `ALAMAT` varchar(128) NOT NULL,
  `RT` varchar(4) NOT NULL,
  `RW` varchar(4) NOT NULL,
  `KELURAHAN` varchar(64) DEFAULT NULL,
  `KECAMATAN` varchar(64) NOT NULL,
  `KABUPATEN_KOTA` varchar(64) NOT NULL,
  `PROVINSI` varchar(64) NOT NULL,
  `AGAMA` varchar(64) NOT NULL,
  `STATUS_KAWIN` varchar(64) NOT NULL,
  `PEKERJAAN` varchar(64) NOT NULL,
  `KEWARGANEGARAAN` varchar(64) NOT NULL,
  `MASA_BERLAKU` varchar(16) NOT NULL,
  `TANGGAL_BUAT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dukcapil`
--

INSERT INTO `dukcapil` (`NIK`, `NAMA`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `JENIS_KELAMIN`, `ALAMAT`, `RT`, `RW`, `KELURAHAN`, `KECAMATAN`, `KABUPATEN_KOTA`, `PROVINSI`, `AGAMA`, `STATUS_KAWIN`, `PEKERJAAN`, `KEWARGANEGARAAN`, `MASA_BERLAKU`, `TANGGAL_BUAT`) VALUES
('3515072206970001', 'Rizky Febian', 'Mojokerto', '1997-06-22 06:30:00', 'Laki-laki', 'Jalan Gajah Mada', '001', '001', 'Dawarblandong', 'Dawarblandong', 'Mojokerto', 'Jawa Timur', 'Islam', 'Belum Menikah', 'DOKTER', 'Indonesia', 'Seumur Hidup', '2020-05-18 00:12:00'),
('3515072206970002', 'Savira Alifa', 'Surabaya', '1999-12-22 11:22:00', 'Perempuan', 'Jalan Yos Sudarso 22 A', '001', '001', 'Jolotundo', 'Jetis', 'Mojokerto', 'Jawa Timur', 'Islam', 'Belum Menikah', 'GURU', 'Indonesia', 'Seumur Hidup', '2020-05-24 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `FORM_ID` int(11) NOT NULL,
  `FORM_NAME` varchar(64) NOT NULL,
  `FORM_DESC` text NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`FORM_ID`, `FORM_NAME`, `FORM_DESC`, `DTM_CRT`) VALUES
(1, 'Nikah', 'ini adalah deskripsi syarat ketika hendak mendaftarkan diri untuk proses nikah', '2020-05-25 04:52:25'),
(2, 'Rujuk', 'ini adalah deskripsi syarat ketika hendak mendaftarkan diri untuk proses rujuk', '2020-05-25 04:52:25'),
(3, 'Isbat', 'ini adalah deskripsi syarat ketika hendak mendaftarkan diri untuk proses isbat', '2020-05-25 04:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MENU_ID` int(11) NOT NULL,
  `PARENTMENU_ID` int(11) NOT NULL,
  `ROLE_ID` int(11) NOT NULL,
  `TITLE` varchar(64) NOT NULL,
  `URL` varchar(64) NOT NULL,
  `ICON` varchar(64) DEFAULT NULL,
  `SEQ` int(11) NOT NULL,
  `IS_ACTIVE` varchar(1) NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL,
  `DTM_UPD` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `OFFICER_ID` int(11) NOT NULL,
  `ROLE_ID` int(11) NOT NULL,
  `NIP` char(18) NOT NULL,
  `NAME` varchar(128) NOT NULL,
  `PHONE` char(12) NOT NULL,
  `EMAIL` varchar(128) NOT NULL,
  `ADDRESS` varchar(256) NOT NULL,
  `USERNAME` varchar(128) NOT NULL,
  `PASSWORD` varchar(512) NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL,
  `DTM_UPD` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`OFFICER_ID`, `ROLE_ID`, `NIP`, `NAME`, `PHONE`, `EMAIL`, `ADDRESS`, `USERNAME`, `PASSWORD`, `DTM_CRT`, `DTM_UPD`) VALUES
(1, 1, '1234567890', 'Admin', '081234567890', 'admin@gmail.com', 'Perumahan Dinoyo Permai Lowokwaru Malang', 'sysadmin', '$2y$10$cOBZWZJkACpmbRO3h914wuEwIndld3xo56pc3SkaK9Bu5Ts/CdTBa', '2020-05-19 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `PARTICIPANT_ID` int(11) NOT NULL,
  `NIK` char(16) NOT NULL,
  `NAME` varchar(128) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `BIRTH_PLACE` varchar(32) NOT NULL,
  `BIRTH_DATE` timestamp NULL DEFAULT NULL,
  `JOB` varchar(128) NOT NULL,
  `PHONE` char(12) NOT NULL,
  `EMAIL` varchar(128) NOT NULL,
  `ADDRESS` varchar(256) NOT NULL,
  `PASSWORD` varchar(512) NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL,
  `DTM_UPD` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`PARTICIPANT_ID`, `NIK`, `NAME`, `GENDER`, `BIRTH_PLACE`, `BIRTH_DATE`, `JOB`, `PHONE`, `EMAIL`, `ADDRESS`, `PASSWORD`, `DTM_CRT`, `DTM_UPD`) VALUES
(1, '3515072206970001', 'Ahmad Faizal', 'Laki-laki', 'Sidoarjo', '1997-06-22 06:30:00', 'Mahasiswa', '085645990100', 'ahmadfaizaaal@gmail.com', 'Jalan Madu Seno RT 001 RW 001 Klurak Candi Sidoarjo', '$2y$10$cOBZWZJkACpmbRO3h914wuEwIndld3xo56pc3SkaK9Bu5Ts/CdTBa', '2020-05-18 05:50:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `PEKERJAAN_ID` int(11) NOT NULL,
  `KODE_PEKERJAAN` varchar(32) NOT NULL,
  `LABEL_PEKERJAAN` varchar(64) NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`PEKERJAAN_ID`, `KODE_PEKERJAAN`, `LABEL_PEKERJAAN`, `DTM_CRT`) VALUES
(1, 'akuntan', 'AKUNTAN', '2020-05-23 10:11:56'),
(2, 'bpk', 'ANGGOTA BPK', '2020-05-23 10:11:56'),
(3, 'dpd', 'ANGGOTA DPD', '2020-05-23 10:11:56'),
(4, 'dprri', 'ANGGOTA DPR-RI', '2020-05-23 10:11:56'),
(5, 'dprdkab', 'ANGGOTA DPRD KABUPATEN/KOTA', '2020-05-23 10:11:56'),
(6, 'dprdprov', 'ANGGOTA DPRD PROVINSI', '2020-05-23 10:11:56'),
(7, 'kementerian', 'ANGGOTA KABINET/KEMENTERIAN', '2020-05-23 10:11:56'),
(8, 'mk', 'ANGGOTA MAHKAMAH KONSTITUSI', '2020-05-23 10:11:56'),
(9, 'apoteker', 'APOTEKER', '2020-05-23 10:11:56'),
(10, 'arsitek', 'ARSITEK', '2020-05-23 10:11:56'),
(11, 'belumbekerja', 'BELUM/TIDAK BEKERJA', '2020-05-23 10:11:56'),
(12, 'biarawati', 'BIARAWATI', '2020-05-23 10:11:56'),
(13, 'bidan', 'BIDAN', '2020-05-23 10:11:56'),
(14, 'bupati', 'BUPATI', '2020-05-23 10:11:56'),
(15, 'buruhharian', 'BURUH HARIAN LEPAS', '2020-05-23 10:11:56'),
(16, 'buruhnelayan', 'BURUH NELAYAN/PERIKANAN', '2020-05-23 10:11:56'),
(17, 'buruhternak', 'BURUH PETERNAKAN', '2020-05-23 10:11:56'),
(18, 'buruhtani', 'BURUH TANI/PERKEBUNAN', '2020-05-23 10:11:56'),
(19, 'dokter', 'DOKTER', '2020-05-23 10:11:56'),
(20, 'dosen', 'DOSEN', '2020-05-23 10:11:56'),
(21, 'dubes', 'DUTA BESAR', '2020-05-23 10:11:56'),
(22, 'gubernur', 'GUBERNUR', '2020-05-23 10:11:56'),
(23, 'guru', 'GURU', '2020-05-23 10:11:56'),
(24, 'imammasjid', 'IMAM MASJID', '2020-05-23 10:11:56'),
(25, 'industri', 'INDUSTRI', '2020-05-23 10:11:56'),
(26, 'jurumasak', 'JURU MASAK', '2020-05-23 10:11:56'),
(27, 'karbumd', 'KARYAWAN BUMD', '2020-05-23 10:11:56'),
(28, 'karbumn', 'KARYAWAN BUMN', '2020-05-23 10:11:56'),
(29, 'karhonorer', 'KARYAWAN HONORER', '2020-05-23 10:11:56'),
(30, 'karswasta', 'KARYAWAN SWASTA', '2020-05-23 10:11:56'),
(31, 'kades', 'KEPALA DESA', '2020-05-23 10:11:56'),
(32, 'polri', 'KEPOLISIAN RI', '2020-05-23 10:11:56'),
(33, 'konstruksi', 'KONSTRUKSI', '2020-05-23 10:11:56'),
(34, 'konsultan', 'KONSULTAN', '2020-05-23 10:11:56'),
(35, 'lainnya', 'LAINNYA', '2020-05-23 10:11:56'),
(36, 'mekanik', 'MEKANIK', '2020-05-23 10:11:56'),
(37, 'mengurusrt', 'MENGURUS RUMAH TANGGA', '2020-05-23 10:11:56'),
(38, 'nelayan', 'NELAYAN/PERIKANAN', '2020-05-23 10:11:56'),
(39, 'notaris', 'NOTARIS', '2020-05-23 10:11:56'),
(40, 'paraji', 'PARAJI', '2020-05-23 10:11:56'),
(41, 'paranormal', 'PARANORMAL', '2020-05-23 10:11:56'),
(42, 'pastor', 'PASTOR', '2020-05-23 10:11:56'),
(43, 'pedagang', 'PEDAGANG', '2020-05-23 10:11:56'),
(44, 'pns', 'PEGAWAI NEGERI SIPIL', '2020-05-23 10:11:56'),
(45, 'pelajar', 'PELAJAR/MAHASISWA', '2020-05-23 10:11:56'),
(46, 'pelaut', 'PELAUT', '2020-05-23 10:11:56'),
(47, 'prt', 'PEMBANTU RUMAH TANGGA', '2020-05-23 10:11:56'),
(48, 'penatabusana', 'PENATA BUSANA', '2020-05-23 10:11:56'),
(49, 'penatarambut', 'PENATA RAMBUT', '2020-05-23 10:11:56'),
(50, 'penatarias', 'PENATA RIAS', '2020-05-23 10:11:56'),
(51, 'pendeta', 'PENDETA', '2020-05-23 10:11:56'),
(52, 'peneliti', 'PENELITI', '2020-05-23 10:11:56'),
(53, 'pengacara', 'PENGACARA', '2020-05-23 10:11:56'),
(54, 'pensiunan', 'PENSIUNAN', '2020-05-23 10:11:56'),
(55, 'penterjemah', 'PENTERJEMAH', '2020-05-23 10:11:56'),
(56, 'penyiarradio', 'PENYIAR RADIO', '2020-05-23 10:11:56'),
(57, 'penyiartv', 'PENYIAR TELEVISI', '2020-05-23 10:11:56'),
(58, 'perancangbusana', 'PERANCANG BUSANA', '2020-05-23 10:11:56'),
(59, 'perangkatdesa', 'PERANGKAT DESA', '2020-05-23 10:11:56'),
(60, 'perawat', 'PERAWAT', '2020-05-23 10:11:56'),
(61, 'perdagangan', 'PERDAGANGAN', '2020-05-23 10:11:56'),
(62, 'petani', 'PETANI/PEKEBUN', '2020-05-23 10:11:56'),
(63, 'peternak', 'PETERNAK', '2020-05-23 10:11:56'),
(64, 'pialang', 'PIALANG', '2020-05-23 10:11:56'),
(65, 'pilot', 'PILOT', '2020-05-23 10:11:56'),
(66, 'presiden', 'PRESIDEN', '2020-05-23 10:11:56'),
(67, 'promotor', 'PROMOTOR ACARA', '2020-05-23 10:11:56'),
(68, 'psikiater', 'PSIKIATER/PSIKOLOG', '2020-05-23 10:11:56'),
(69, 'seniman', 'SENIMAN', '2020-05-23 10:11:56'),
(70, 'sopir', 'SOPIR', '2020-05-23 10:11:56'),
(71, 'tabib', 'TABIB', '2020-05-23 10:11:56'),
(72, 'tni', 'TENTARA NASIONAL INDONESIA', '2020-05-23 10:11:56'),
(73, 'transportasi', 'TRANSPORTASI', '2020-05-23 10:11:56'),
(74, 'tukangbatu', 'TUKANG BATU', '2020-05-23 10:11:56'),
(75, 'tukangcukur', 'TUKANG CUKUR', '2020-05-23 10:11:56'),
(76, 'tukanggigi', 'TUKANG GIGI', '2020-05-23 10:11:56'),
(77, 'tukangjahit', 'TUKANG JAHIT', '2020-05-23 10:11:56'),
(78, 'tukangkayu', 'TUKANG KAYU', '2020-05-23 10:11:56'),
(79, 'tukanglas', 'TUKANG LAS/PANDAI BESI', '2020-05-23 10:11:56'),
(80, 'tukanglistrik', 'TUKANG LISTRIK', '2020-05-23 10:11:56'),
(81, 'tukangsol', 'TUKANG SOL SEPATU', '2020-05-23 10:11:56'),
(82, 'ustadz', 'USTADZ/MUBALIGH', '2020-05-23 10:11:56'),
(83, 'wabup', 'WAKIL BUPATI', '2020-05-23 10:11:56'),
(84, 'wagub', 'WAKIL GUBERNUR', '2020-05-23 10:11:56'),
(85, 'wapres', 'WAKIL PRESIDEN', '2020-05-23 10:11:56'),
(86, 'wawali', 'WAKIL WALIKOTA', '2020-05-23 10:11:56'),
(87, 'walikota', 'WALIKOTA', '2020-05-23 10:11:56'),
(88, 'wartawan', 'WARTAWAN', '2020-05-23 10:11:56'),
(89, 'wiraswasta', 'WIRASWASTA', '2020-05-23 10:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `QUESTION_ID` int(11) NOT NULL,
  `IS_ACTIVE` varchar(1) NOT NULL,
  `REF_ID` varchar(32) NOT NULL,
  `QUESTION_LABEL` varchar(128) NOT NULL,
  `IS_READONLY` varchar(1) NOT NULL,
  `IS_MANDATORY` varchar(1) NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`QUESTION_ID`, `IS_ACTIVE`, `REF_ID`, `QUESTION_LABEL`, `IS_READONLY`, `IS_MANDATORY`, `DTM_CRT`) VALUES
(1, '1', 'TMP_NIKAH', 'Tempat Akad Nikah', '0', '1', '2020-05-25 03:33:35'),
(2, '1', 'TGL_AKAD', 'Tanggal Akad Nikah', '0', '1', '2020-05-25 03:33:35'),
(3, '1', 'ALMT_AKAD', 'Alamat Lokasi Akad Nikah', '0', '1', '2020-05-25 03:33:35'),
(4, '1', 'KEWARGANEGARAAN_S', 'Kewarganegaraan', '0', '1', '2020-05-25 03:33:35'),
(5, '1', 'KEWARGANEGARAAN_I', 'Kewarganegaraan', '0', '1', '2020-05-25 03:33:35'),
(6, '1', 'NIK_CAL_S', 'NIK Calon Suami', '0', '1', '2020-05-25 03:33:35'),
(7, '1', 'NIK_CAL_I', 'NIK Calon Istri', '0', '1', '2020-05-25 03:33:35'),
(8, '1', 'NAMA_CAL_S', 'Nama Calon Suami', '0', '1', '2020-05-25 03:33:35'),
(9, '1', 'NAMA_CAL_I', 'Nama Calon Istri', '0', '1', '2020-05-25 03:33:35'),
(10, '1', 'TTL_S', 'Tempat & Tanggal Lahir', '0', '1', '2020-05-25 03:33:35'),
(11, '1', 'TTL_I', 'Tempat & Tanggal Lahir', '0', '1', '2020-05-25 03:33:35'),
(12, '1', 'UMUR_S', 'Umur', '0', '1', '2020-05-25 03:33:35'),
(13, '1', 'UMUR_I', 'Umur', '0', '1', '2020-05-25 03:33:35'),
(14, '1', 'STATUS_CAL_S', 'Status Calon Suami', '0', '1', '2020-05-25 03:33:35'),
(15, '1', 'STATUS_CAL_I', 'Status Calon Istri', '0', '1', '2020-05-25 03:33:35'),
(16, '1', 'AGAMA_S', 'Agama', '1', '1', '2020-05-25 03:33:35'),
(17, '1', 'AGAMA_I', 'Agama', '1', '1', '2020-05-25 03:33:35'),
(18, '1', 'ALMT_S', 'Alamat', '0', '1', '2020-05-25 03:33:35'),
(19, '1', 'ALMT_I', 'Alamat', '0', '1', '2020-05-25 03:33:35'),
(20, '1', 'PEKERJAAN_S', 'Pekerjaan', '0', '1', '2020-05-25 03:33:35'),
(21, '1', 'PEKERJAAN_I', 'Pekerjaan', '0', '1', '2020-05-25 03:33:35'),
(22, '1', 'NO_HP_S', 'Nomor HP / WA', '0', '1', '2020-05-25 03:33:35'),
(23, '1', 'NO_HP_I', 'Nomor HP / WA', '0', '1', '2020-05-25 03:33:35'),
(24, '1', 'FOTO_S', 'Foto', '0', '1', '2020-05-25 03:33:35'),
(25, '1', 'FOTO_I', 'Foto', '0', '1', '2020-05-25 03:33:35'),
(26, '1', 'FILE_SKUN_N1', 'Surat Keterangan Untuk Nikah N1 (Dari Kelurahan)', '0', '1', '2020-05-25 03:33:35'),
(27, '1', 'FILE_SPM_N3', 'Surat Persetujuan Mempelai N3', '0', '1', '2020-05-25 03:33:35'),
(28, '1', 'FILE_KTP_S', 'Kartu Tanda Penduduk', '0', '1', '2020-05-25 03:33:35'),
(29, '1', 'FILE_KTP_I', 'Kartu Tanda Penduduk', '0', '1', '2020-05-25 03:33:35'),
(30, '1', 'FILE_KK_S', 'Kartu Keluarga', '0', '1', '2020-05-25 03:33:35'),
(31, '1', 'FILE_KK_I', 'Kartu Keluarga', '0', '1', '2020-05-25 03:33:35'),
(32, '1', 'FILE_AKTA_LAHIR_S', 'Akta Lahir', '0', '1', '2020-05-25 03:33:35'),
(33, '1', 'FILE_AKTA_LAHIR_I', 'Akta Lahir', '0', '1', '2020-05-25 03:33:35'),
(34, '1', 'NAMA_S', 'Nama Suami', '0', '1', '2020-05-25 03:33:35'),
(35, '1', 'NAMA_I', 'Nama Istri', '0', '1', '2020-05-25 03:33:35'),
(36, '1', 'NIK_S', 'NIK Suami', '0', '1', '2020-05-25 03:33:35'),
(37, '1', 'NIK_I', 'NIK Istri', '0', '1', '2020-05-25 03:33:35'),
(38, '1', 'FILE_SPPA', 'Surat Penetapan dari Pengadilan Agama', '0', '1', '2020-05-25 03:33:35'),
(39, '1', 'TGL_RUJUK', 'Tanggal Daftar Rujuk', '1', '1', '2020-05-25 03:33:35'),
(40, '1', 'TGL_CERAI', 'Tanggal Cerai', '0', '1', '2020-05-25 03:33:35'),
(41, '1', 'MASA_IDAH', 'Masa Idah', '1', '1', '2020-05-25 03:33:35'),
(42, '1', 'STATUS_CERAI', 'Status Cerai', '1', '1', '2020-05-25 03:33:35'),
(43, '1', 'FILE_AKTA_CERAI', 'Akta Cerai', '0', '1', '2020-05-25 03:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `questiongroup_of_form`
--

CREATE TABLE `questiongroup_of_form` (
  `QUESTIONGROUPOFFORM_ID` int(11) NOT NULL,
  `FORM_ID` int(11) NOT NULL,
  `QUESTIONGROUP_ID` int(11) NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questiongroup_of_form`
--

INSERT INTO `questiongroup_of_form` (`QUESTIONGROUPOFFORM_ID`, `FORM_ID`, `QUESTIONGROUP_ID`, `DTM_CRT`) VALUES
(1, 1, 1, '2020-05-25 04:56:35'),
(2, 1, 2, '2020-05-25 04:56:35'),
(3, 1, 3, '2020-05-25 04:56:35'),
(4, 1, 6, '2020-05-25 04:56:35'),
(5, 2, 8, '2020-05-25 04:56:35'),
(6, 2, 9, '2020-05-25 04:56:35'),
(7, 2, 4, '2020-05-25 04:56:35'),
(8, 2, 5, '2020-05-25 04:56:35'),
(9, 3, 4, '2020-05-25 04:56:35'),
(10, 3, 5, '2020-05-25 04:56:35'),
(11, 3, 7, '2020-05-25 04:56:35'),
(12, 3, 10, '2020-05-25 04:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `question_group`
--

CREATE TABLE `question_group` (
  `QUESTIONGROUP_ID` int(11) NOT NULL,
  `IS_ACTIVE` varchar(1) NOT NULL,
  `QUESTIONGROUP_LABEL` varchar(128) NOT NULL,
  `SEQ` int(11) DEFAULT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_group`
--

INSERT INTO `question_group` (`QUESTIONGROUP_ID`, `IS_ACTIVE`, `QUESTIONGROUP_LABEL`, `SEQ`, `DTM_CRT`) VALUES
(1, '1', 'Data Calon Suami', 20, '2020-05-25 04:00:57'),
(2, '1', 'Data Calon Istri', 30, '2020-05-25 04:00:57'),
(3, '1', 'Data Dokumen Nikah', 40, '2020-05-25 04:00:57'),
(4, '1', 'Data Suami', 60, '2020-05-25 04:00:57'),
(5, '1', 'Data Istri', 70, '2020-05-25 04:00:57'),
(6, '1', 'Data Header Nikah', 10, '2020-05-25 04:00:57'),
(7, '1', 'Data Header Isbat', 50, '2020-05-25 04:00:57'),
(8, '1', 'Data Header Rujuk', 15, '2020-05-25 04:00:57'),
(9, '1', 'Data Dokumen Rujuk', 90, '2020-05-25 04:00:57'),
(10, '1', 'Data Dokumen Isbat', 80, '2020-05-25 04:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `question_of_group`
--

CREATE TABLE `question_of_group` (
  `QUESTIONOFGROUP_ID` int(11) NOT NULL,
  `QUESTIONGROUP_ID` int(11) NOT NULL,
  `QUESTION_ID` int(11) NOT NULL,
  `SEQ` int(11) NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_of_group`
--

INSERT INTO `question_of_group` (`QUESTIONOFGROUP_ID`, `QUESTIONGROUP_ID`, `QUESTION_ID`, `SEQ`, `DTM_CRT`) VALUES
(1, 1, 4, 10, '2020-05-25 04:01:32'),
(2, 1, 6, 20, '2020-05-25 04:01:32'),
(3, 1, 8, 30, '2020-05-25 04:01:32'),
(4, 1, 10, 40, '2020-05-25 04:01:32'),
(5, 1, 12, 50, '2020-05-25 04:01:32'),
(6, 1, 14, 60, '2020-05-25 04:01:32'),
(7, 1, 16, 70, '2020-05-25 04:01:32'),
(8, 1, 18, 80, '2020-05-25 04:01:32'),
(9, 1, 20, 90, '2020-05-25 04:01:32'),
(10, 1, 22, 100, '2020-05-25 04:01:32'),
(11, 1, 24, 110, '2020-05-25 04:01:32'),
(12, 2, 5, 10, '2020-05-25 04:01:32'),
(13, 2, 7, 20, '2020-05-25 04:01:32'),
(14, 2, 9, 30, '2020-05-25 04:01:32'),
(15, 2, 11, 40, '2020-05-25 04:01:32'),
(16, 2, 13, 50, '2020-05-25 04:01:32'),
(17, 2, 15, 60, '2020-05-25 04:01:32'),
(18, 2, 17, 70, '2020-05-25 04:01:32'),
(19, 2, 19, 80, '2020-05-25 04:01:32'),
(20, 2, 21, 90, '2020-05-25 04:01:32'),
(21, 2, 23, 100, '2020-05-25 04:01:32'),
(22, 2, 25, 110, '2020-05-25 04:01:32'),
(23, 3, 26, 10, '2020-05-25 04:01:32'),
(24, 3, 27, 20, '2020-05-25 04:01:32'),
(25, 3, 28, 30, '2020-05-25 04:01:32'),
(26, 3, 29, 40, '2020-05-25 04:01:32'),
(27, 3, 30, 50, '2020-05-25 04:01:32'),
(28, 3, 31, 60, '2020-05-25 04:01:32'),
(29, 3, 32, 70, '2020-05-25 04:01:32'),
(30, 3, 33, 80, '2020-05-25 04:01:32'),
(31, 6, 1, 10, '2020-05-25 04:01:32'),
(32, 6, 2, 20, '2020-05-25 04:01:32'),
(33, 6, 3, 30, '2020-05-25 04:01:32'),
(35, 7, 2, 20, '2020-05-25 04:01:32'),
(36, 7, 3, 30, '2020-05-25 04:01:32'),
(37, 4, 4, 10, '2020-05-25 04:01:32'),
(38, 4, 10, 40, '2020-05-25 04:01:32'),
(39, 4, 12, 50, '2020-05-25 04:01:32'),
(40, 4, 16, 60, '2020-05-25 04:01:32'),
(41, 4, 18, 70, '2020-05-25 04:01:32'),
(42, 4, 20, 80, '2020-05-25 04:01:32'),
(43, 4, 22, 90, '2020-05-25 04:01:32'),
(44, 4, 34, 30, '2020-05-25 04:01:32'),
(45, 4, 36, 20, '2020-05-25 04:01:32'),
(46, 4, 24, 100, '2020-05-25 04:01:32'),
(47, 5, 4, 10, '2020-05-25 04:01:32'),
(48, 5, 37, 20, '2020-05-25 04:01:32'),
(49, 5, 35, 30, '2020-05-25 04:01:32'),
(50, 5, 11, 40, '2020-05-25 04:01:32'),
(51, 5, 13, 50, '2020-05-25 04:01:32'),
(52, 5, 17, 60, '2020-05-25 04:01:32'),
(53, 5, 19, 70, '2020-05-25 04:01:32'),
(54, 5, 21, 80, '2020-05-25 04:01:32'),
(55, 5, 23, 90, '2020-05-25 04:01:32'),
(56, 5, 25, 100, '2020-05-25 04:01:32'),
(57, 10, 38, 10, '2020-05-25 04:01:32'),
(58, 10, 28, 20, '2020-05-25 04:01:32'),
(59, 10, 29, 30, '2020-05-25 04:01:32'),
(60, 10, 30, 40, '2020-05-25 04:01:32'),
(61, 10, 31, 50, '2020-05-25 04:01:32'),
(62, 10, 32, 60, '2020-05-25 04:01:32'),
(63, 10, 33, 70, '2020-05-25 04:01:32'),
(64, 8, 39, 10, '2020-05-25 04:01:32'),
(65, 8, 40, 20, '2020-05-25 04:01:32'),
(66, 8, 41, 30, '2020-05-25 04:01:32'),
(67, 8, 42, 40, '2020-05-25 04:01:32'),
(68, 9, 43, 10, '2020-05-25 04:01:32'),
(69, 9, 28, 20, '2020-05-25 04:01:32'),
(70, 9, 29, 30, '2020-05-25 04:01:32'),
(71, 9, 30, 40, '2020-05-25 04:01:32'),
(72, 9, 31, 50, '2020-05-25 04:01:32'),
(73, 9, 32, 60, '2020-05-25 04:01:32'),
(74, 9, 33, 70, '2020-05-25 04:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `REG_ID` int(11) NOT NULL,
  `REG_CODE` varchar(32) DEFAULT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL,
  `DTM_UPD` timestamp NULL DEFAULT NULL,
  `USR_UPD` int(11) DEFAULT NULL,
  `FORM_ID` int(11) NOT NULL,
  `STATUS_ID` int(11) NOT NULL,
  `VALIDATION_DATE` timestamp NULL DEFAULT NULL,
  `CHECKED_DATE` timestamp NULL DEFAULT NULL,
  `VERIFIED_DATE` timestamp NULL DEFAULT NULL,
  `SCHEDULE` timestamp NULL DEFAULT NULL,
  `PARTICIPANT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`REG_ID`, `REG_CODE`, `DTM_CRT`, `DTM_UPD`, `USR_UPD`, `FORM_ID`, `STATUS_ID`, `VALIDATION_DATE`, `CHECKED_DATE`, `VERIFIED_DATE`, `SCHEDULE`, `PARTICIPANT_ID`) VALUES
(47, '1/Ahm/20200529070155', '2020-05-29 00:01:58', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, 1),
(51, '1/Ahm/20200529074048', '2020-05-29 00:41:00', NULL, NULL, 3, 1, NULL, NULL, NULL, NULL, 1),
(53, '1/Ahm/20200529100529', '2020-05-29 03:05:36', NULL, NULL, 2, 1, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration_detail`
--

CREATE TABLE `registration_detail` (
  `REG_DETAIL_ID` int(11) NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL,
  `DTM_UPD` timestamp NULL DEFAULT NULL,
  `USR_UPD` int(11) DEFAULT NULL,
  `REG_ID` int(11) NOT NULL,
  `QUESTION_ID` int(11) NOT NULL,
  `QUESTION_LABEL` varchar(128) NOT NULL,
  `ANSWER` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_detail`
--

INSERT INTO `registration_detail` (`REG_DETAIL_ID`, `DTM_CRT`, `DTM_UPD`, `USR_UPD`, `REG_ID`, `QUESTION_ID`, `QUESTION_LABEL`, `ANSWER`) VALUES
(199, '2020-05-29 00:01:59', NULL, NULL, 47, 1, 'Tempat Akad Nikah', 'kua'),
(200, '2020-05-29 00:01:59', NULL, NULL, 47, 2, 'Tanggal Akad Nikah', '05-06-2020 07:01:57'),
(201, '2020-05-29 00:01:59', NULL, NULL, 47, 3, 'Alamat Lokasi Akad Nikah', 'KUA Dawarblandong'),
(202, '2020-05-29 00:03:18', NULL, NULL, 47, 4, 'Kewarganegaraan', 'wni'),
(203, '2020-05-29 00:03:18', NULL, NULL, 47, 6, 'NIK Calon Suami', '3515072206970001'),
(204, '2020-05-29 00:03:19', NULL, NULL, 47, 8, 'Nama Calon Suami', 'Rizky Febian'),
(205, '2020-05-29 00:03:19', NULL, NULL, 47, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(206, '2020-05-29 00:03:19', NULL, NULL, 47, 12, 'Umur', '23'),
(207, '2020-05-29 00:03:19', NULL, NULL, 47, 14, 'Status Calon Suami', 'jejaka'),
(208, '2020-05-29 00:03:19', NULL, NULL, 47, 16, 'Agama', 'Islam'),
(209, '2020-05-29 00:03:19', NULL, NULL, 47, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(210, '2020-05-29 00:03:19', NULL, NULL, 47, 20, 'Pekerjaan', 'DOKTER'),
(211, '2020-05-29 00:03:19', NULL, NULL, 47, 22, 'Nomor HP / WA', '081234567890'),
(212, '2020-05-29 00:03:19', NULL, NULL, 47, 24, 'Foto', '47_Rizky_Febian_20200529070318_foto'),
(213, '2020-05-29 00:03:19', NULL, NULL, 47, 5, 'Kewarganegaraan', 'wni'),
(214, '2020-05-29 00:03:19', NULL, NULL, 47, 7, 'NIK Calon Istri', '3515072206970002'),
(215, '2020-05-29 00:03:19', NULL, NULL, 47, 9, 'Nama Calon Istri', 'Savira Alifa'),
(216, '2020-05-29 00:03:19', NULL, NULL, 47, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(217, '2020-05-29 00:03:19', NULL, NULL, 47, 13, 'Umur', '21'),
(218, '2020-05-29 00:03:19', NULL, NULL, 47, 15, 'Status Calon Istri', 'perawan'),
(219, '2020-05-29 00:03:19', NULL, NULL, 47, 17, 'Agama', 'Islam'),
(220, '2020-05-29 00:03:19', NULL, NULL, 47, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(221, '2020-05-29 00:03:20', NULL, NULL, 47, 21, 'Pekerjaan', 'GURU'),
(222, '2020-05-29 00:03:20', NULL, NULL, 47, 23, 'Nomor HP / WA', '081234567890'),
(223, '2020-05-29 00:03:20', NULL, NULL, 47, 25, 'Foto', '47_Savira_Alifa_20200529070318_foto'),
(224, '2020-05-29 00:03:20', NULL, NULL, 47, 26, 'Surat Keterangan Untuk Nikah N1 (Dari Kelurahan)', '47_Rizky_Febian_20200529070318_N1'),
(225, '2020-05-29 00:03:20', NULL, NULL, 47, 27, 'Surat Persetujuan Mempelai N3', '47_Rizky_Febian_20200529070318_N3'),
(226, '2020-05-29 00:03:20', NULL, NULL, 47, 28, 'Kartu Tanda Penduduk', '47_Rizky_Febian_20200529070318_ktp'),
(227, '2020-05-29 00:03:20', NULL, NULL, 47, 29, 'Kartu Tanda Penduduk', '47_Savira_Alifa_20200529070318_ktp'),
(228, '2020-05-29 00:03:20', NULL, NULL, 47, 30, 'Kartu Keluarga', '47_Rizky_Febian_20200529070318_kk'),
(229, '2020-05-29 00:03:20', NULL, NULL, 47, 31, 'Kartu Keluarga', '47_Savira_Alifa_20200529070318_kk'),
(230, '2020-05-29 00:03:20', NULL, NULL, 47, 32, 'Akta Lahir', '47_Rizky_Febian_20200529070318_aktalahir'),
(231, '2020-05-29 00:03:20', NULL, NULL, 47, 33, 'Akta Lahir', '47_Savira_Alifa_20200529070318_aktalahir'),
(232, '2020-05-29 00:42:22', NULL, NULL, 51, 4, 'Kewarganegaraan', 'wni'),
(233, '2020-05-29 00:42:22', NULL, NULL, 51, 36, 'NIK Suami', '3515072206970001'),
(234, '2020-05-29 00:42:22', NULL, NULL, 51, 34, 'Nama Suami', 'Rizky Febian'),
(235, '2020-05-29 00:42:22', NULL, NULL, 51, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(236, '2020-05-29 00:42:22', NULL, NULL, 51, 12, 'Umur', '23'),
(237, '2020-05-29 00:42:22', NULL, NULL, 51, 16, 'Agama', 'Islam'),
(238, '2020-05-29 00:42:22', NULL, NULL, 51, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(239, '2020-05-29 00:42:22', NULL, NULL, 51, 20, 'Pekerjaan', 'DOKTER'),
(240, '2020-05-29 00:42:22', NULL, NULL, 51, 22, 'Nomor HP / WA', '081234567890'),
(241, '2020-05-29 00:42:22', NULL, NULL, 51, 24, 'Foto', '51_Rizky_Febian_20200529074221_foto'),
(242, '2020-05-29 00:42:22', NULL, NULL, 51, 4, 'Kewarganegaraan', 'wni'),
(243, '2020-05-29 00:42:22', NULL, NULL, 51, 37, 'NIK Istri', '3515072206970002'),
(244, '2020-05-29 00:42:22', NULL, NULL, 51, 35, 'Nama Istri', 'Savira Alifa'),
(245, '2020-05-29 00:42:22', NULL, NULL, 51, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(246, '2020-05-29 00:42:23', NULL, NULL, 51, 13, 'Umur', '21'),
(247, '2020-05-29 00:42:23', NULL, NULL, 51, 17, 'Agama', 'Islam'),
(248, '2020-05-29 00:42:23', NULL, NULL, 51, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(249, '2020-05-29 00:42:23', NULL, NULL, 51, 21, 'Pekerjaan', 'GURU'),
(250, '2020-05-29 00:42:23', NULL, NULL, 51, 23, 'Nomor HP / WA', '081234567890'),
(251, '2020-05-29 00:42:23', NULL, NULL, 51, 25, 'Foto', '51_Savira_Alifa_20200529074221_foto'),
(252, '2020-05-29 00:42:23', NULL, NULL, 51, 38, 'Surat Penetapan dari Pengadilan Agama', '51_Rizky_Febian_20200529074221_SPPA'),
(253, '2020-05-29 00:42:23', NULL, NULL, 51, 28, 'Kartu Tanda Penduduk', '51_Rizky_Febian_20200529074221_ktp'),
(254, '2020-05-29 00:42:23', NULL, NULL, 51, 29, 'Kartu Tanda Penduduk', '51_Savira_Alifa_20200529074221_ktp'),
(255, '2020-05-29 00:42:23', NULL, NULL, 51, 30, 'Kartu Keluarga', '51_Rizky_Febian_20200529074221_kk'),
(256, '2020-05-29 00:42:23', NULL, NULL, 51, 31, 'Kartu Keluarga', '51_Savira_Alifa_20200529074222_kk'),
(257, '2020-05-29 00:42:23', NULL, NULL, 51, 32, 'Akta Lahir', '51_Rizky_Febian_20200529074222_aktalahir'),
(258, '2020-05-29 00:42:23', NULL, NULL, 51, 33, 'Akta Lahir', '51_Savira_Alifa_20200529074222_aktalahir'),
(259, '2020-05-29 03:05:36', NULL, NULL, 53, 39, 'Tanggal Daftar Rujuk', '29-05-2020'),
(260, '2020-05-29 03:05:36', NULL, NULL, 53, 40, 'Tanggal Cerai', '01-12-2019'),
(261, '2020-05-29 03:05:36', NULL, NULL, 53, 41, 'Masa Idah', '180 hari'),
(262, '2020-05-29 03:05:36', NULL, NULL, 53, 42, 'Status Cerai', 'Cerai Raj\'i'),
(263, '2020-05-29 03:06:41', NULL, NULL, 53, 4, 'Kewarganegaraan', 'wni'),
(264, '2020-05-29 03:06:41', NULL, NULL, 53, 36, 'NIK Suami', '3515072206970001'),
(265, '2020-05-29 03:06:41', NULL, NULL, 53, 34, 'Nama Suami', 'Rizky Febian'),
(266, '2020-05-29 03:06:41', NULL, NULL, 53, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(267, '2020-05-29 03:06:41', NULL, NULL, 53, 12, 'Umur', '23'),
(268, '2020-05-29 03:06:41', NULL, NULL, 53, 16, 'Agama', 'Islam'),
(269, '2020-05-29 03:06:41', NULL, NULL, 53, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(270, '2020-05-29 03:06:41', NULL, NULL, 53, 20, 'Pekerjaan', 'DOKTER'),
(271, '2020-05-29 03:06:41', NULL, NULL, 53, 22, 'Nomor HP / WA', '081234567890'),
(272, '2020-05-29 03:06:41', NULL, NULL, 53, 24, 'Foto', '53_Rizky_Febian_20200529100641_foto'),
(273, '2020-05-29 03:06:41', NULL, NULL, 53, 4, 'Kewarganegaraan', 'wni'),
(274, '2020-05-29 03:06:42', NULL, NULL, 53, 37, 'NIK Istri', '3515072206970002'),
(275, '2020-05-29 03:06:42', NULL, NULL, 53, 35, 'Nama Istri', 'Savira Alifa'),
(276, '2020-05-29 03:06:42', NULL, NULL, 53, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(277, '2020-05-29 03:06:42', NULL, NULL, 53, 13, 'Umur', '21'),
(278, '2020-05-29 03:06:42', NULL, NULL, 53, 17, 'Agama', 'Islam'),
(279, '2020-05-29 03:06:42', NULL, NULL, 53, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(280, '2020-05-29 03:06:42', NULL, NULL, 53, 21, 'Pekerjaan', 'GURU'),
(281, '2020-05-29 03:06:42', NULL, NULL, 53, 23, 'Nomor HP / WA', '081234567890'),
(282, '2020-05-29 03:06:42', NULL, NULL, 53, 25, 'Foto', '53_Savira_Alifa_20200529100641_foto'),
(283, '2020-05-29 03:07:30', NULL, NULL, 53, 4, 'Kewarganegaraan', 'wni'),
(284, '2020-05-29 03:07:30', NULL, NULL, 53, 36, 'NIK Suami', '3515072206970001'),
(285, '2020-05-29 03:07:30', NULL, NULL, 53, 34, 'Nama Suami', 'Rizky Febian'),
(286, '2020-05-29 03:07:30', NULL, NULL, 53, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(287, '2020-05-29 03:07:30', NULL, NULL, 53, 12, 'Umur', '23'),
(288, '2020-05-29 03:07:30', NULL, NULL, 53, 16, 'Agama', 'Islam'),
(289, '2020-05-29 03:07:30', NULL, NULL, 53, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(290, '2020-05-29 03:07:30', NULL, NULL, 53, 20, 'Pekerjaan', 'DOKTER'),
(291, '2020-05-29 03:07:30', NULL, NULL, 53, 22, 'Nomor HP / WA', '081234567890'),
(292, '2020-05-29 03:07:30', NULL, NULL, 53, 24, 'Foto', '53_Rizky_Febian_20200529100730_foto'),
(293, '2020-05-29 03:07:30', NULL, NULL, 53, 4, 'Kewarganegaraan', 'wni'),
(294, '2020-05-29 03:07:30', NULL, NULL, 53, 37, 'NIK Istri', '3515072206970002'),
(295, '2020-05-29 03:07:31', NULL, NULL, 53, 35, 'Nama Istri', 'Savira Alifa'),
(296, '2020-05-29 03:07:31', NULL, NULL, 53, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(297, '2020-05-29 03:07:31', NULL, NULL, 53, 13, 'Umur', '21'),
(298, '2020-05-29 03:07:31', NULL, NULL, 53, 17, 'Agama', 'Islam'),
(299, '2020-05-29 03:07:31', NULL, NULL, 53, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(300, '2020-05-29 03:07:31', NULL, NULL, 53, 21, 'Pekerjaan', 'GURU'),
(301, '2020-05-29 03:07:31', NULL, NULL, 53, 23, 'Nomor HP / WA', '081234567890'),
(302, '2020-05-29 03:07:31', NULL, NULL, 53, 25, 'Foto', '53_Savira_Alifa_20200529100730_foto'),
(303, '2020-05-29 03:07:31', NULL, NULL, 53, 43, 'Akta Cerai', '53_Rizky_Febian_20200529100730_aktacerai'),
(304, '2020-05-29 03:07:31', NULL, NULL, 53, 28, 'Kartu Tanda Penduduk', '53_Rizky_Febian_20200529100730_ktp'),
(305, '2020-05-29 03:07:31', NULL, NULL, 53, 29, 'Kartu Tanda Penduduk', '53_Savira_Alifa_20200529100730_ktp'),
(306, '2020-05-29 03:07:31', NULL, NULL, 53, 30, 'Kartu Keluarga', '53_Rizky_Febian_20200529100730_kk'),
(307, '2020-05-29 03:07:31', NULL, NULL, 53, 31, 'Kartu Keluarga', '53_Savira_Alifa_20200529100730_kk'),
(308, '2020-05-29 03:07:31', NULL, NULL, 53, 32, 'Akta Lahir', '53_Rizky_Febian_20200529100730_aktalahir'),
(309, '2020-05-29 03:07:31', NULL, NULL, 53, 33, 'Akta Lahir', '53_Savira_Alifa_20200529100730_aktalahir');

-- --------------------------------------------------------

--
-- Table structure for table `registration_status`
--

CREATE TABLE `registration_status` (
  `STATUS_ID` int(11) NOT NULL,
  `STATUS_DESC` varchar(64) NOT NULL,
  `STATUS_CODE` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_status`
--

INSERT INTO `registration_status` (`STATUS_ID`, `STATUS_DESC`, `STATUS_CODE`) VALUES
(1, 'Pending', 'P'),
(2, 'To be check', 'TC'),
(3, 'Checked', 'C'),
(4, 'To be verif', 'TVR'),
(5, 'Verified', 'VR'),
(6, 'To be validate', 'TV'),
(7, 'Valid', 'VR'),
(8, 'Rejected', 'R'),
(9, 'Done', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ROLE_ID` int(11) NOT NULL,
  `ROLE_NAME` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ROLE_ID`, `ROLE_NAME`) VALUES
(1, 'Staff Utama'),
(2, 'Penghulu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dukcapil`
--
ALTER TABLE `dukcapil`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`FORM_ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MENU_ID`),
  ADD KEY `FK_MENU` (`PARENTMENU_ID`),
  ADD KEY `FK_ROLE` (`ROLE_ID`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`OFFICER_ID`),
  ADD KEY `FK_ROLE` (`ROLE_ID`) USING BTREE;

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`PARTICIPANT_ID`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`PEKERJAAN_ID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`QUESTION_ID`);

--
-- Indexes for table `questiongroup_of_form`
--
ALTER TABLE `questiongroup_of_form`
  ADD PRIMARY KEY (`QUESTIONGROUPOFFORM_ID`),
  ADD KEY `FK_FORM` (`FORM_ID`),
  ADD KEY `FK_QUESTIONGROUP_FORM` (`QUESTIONGROUP_ID`);

--
-- Indexes for table `question_group`
--
ALTER TABLE `question_group`
  ADD PRIMARY KEY (`QUESTIONGROUP_ID`);

--
-- Indexes for table `question_of_group`
--
ALTER TABLE `question_of_group`
  ADD PRIMARY KEY (`QUESTIONOFGROUP_ID`),
  ADD KEY `FK_QUESTIONGROUP` (`QUESTIONGROUP_ID`),
  ADD KEY `FK_QUESTION` (`QUESTION_ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`REG_ID`),
  ADD KEY `FK_FORM_REG` (`FORM_ID`),
  ADD KEY `FK_STATUS` (`STATUS_ID`),
  ADD KEY `FK_PARTICIPANT` (`PARTICIPANT_ID`);

--
-- Indexes for table `registration_detail`
--
ALTER TABLE `registration_detail`
  ADD PRIMARY KEY (`REG_DETAIL_ID`),
  ADD KEY `FK_REGISTRATION` (`REG_ID`),
  ADD KEY `FK_QUESTION_DET` (`QUESTION_ID`);

--
-- Indexes for table `registration_status`
--
ALTER TABLE `registration_status`
  ADD PRIMARY KEY (`STATUS_ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ROLE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `FORM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `MENU_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `OFFICER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `PARTICIPANT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `PEKERJAAN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `QUESTION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `question_group`
--
ALTER TABLE `question_group`
  MODIFY `QUESTIONGROUP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `question_of_group`
--
ALTER TABLE `question_of_group`
  MODIFY `QUESTIONOFGROUP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `REG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `registration_detail`
--
ALTER TABLE `registration_detail`
  MODIFY `REG_DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT for table `registration_status`
--
ALTER TABLE `registration_status`
  MODIFY `STATUS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ROLE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `FK_MENU` FOREIGN KEY (`PARENTMENU_ID`) REFERENCES `menu` (`MENU_ID`),
  ADD CONSTRAINT `FK_ROLE` FOREIGN KEY (`ROLE_ID`) REFERENCES `role` (`ROLE_ID`);

--
-- Constraints for table `officer`
--
ALTER TABLE `officer`
  ADD CONSTRAINT `FK_ROLE_OFFICE` FOREIGN KEY (`ROLE_ID`) REFERENCES `role` (`ROLE_ID`);

--
-- Constraints for table `questiongroup_of_form`
--
ALTER TABLE `questiongroup_of_form`
  ADD CONSTRAINT `FK_FORM` FOREIGN KEY (`FORM_ID`) REFERENCES `form` (`FORM_ID`),
  ADD CONSTRAINT `FK_QUESTIONGROUP_FORM` FOREIGN KEY (`QUESTIONGROUP_ID`) REFERENCES `question_group` (`QUESTIONGROUP_ID`);

--
-- Constraints for table `question_of_group`
--
ALTER TABLE `question_of_group`
  ADD CONSTRAINT `FK_QUESTION` FOREIGN KEY (`QUESTION_ID`) REFERENCES `question` (`QUESTION_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_QUESTIONGROUP` FOREIGN KEY (`QUESTIONGROUP_ID`) REFERENCES `question_group` (`QUESTIONGROUP_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `FK_FORM_REG` FOREIGN KEY (`FORM_ID`) REFERENCES `form` (`FORM_ID`),
  ADD CONSTRAINT `FK_PARTICIPANT` FOREIGN KEY (`PARTICIPANT_ID`) REFERENCES `participant` (`PARTICIPANT_ID`),
  ADD CONSTRAINT `FK_STATUS` FOREIGN KEY (`STATUS_ID`) REFERENCES `registration_status` (`STATUS_ID`);

--
-- Constraints for table `registration_detail`
--
ALTER TABLE `registration_detail`
  ADD CONSTRAINT `FK_QUESTION_DET` FOREIGN KEY (`QUESTION_ID`) REFERENCES `question` (`QUESTION_ID`),
  ADD CONSTRAINT `FK_REGISTRATION` FOREIGN KEY (`REG_ID`) REFERENCES `registration` (`REG_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
