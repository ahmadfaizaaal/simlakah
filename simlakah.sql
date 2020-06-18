-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 07:32 PM
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
('3515010101970001', 'Andhika Pratama', 'Mojokerto', '1997-01-01 02:00:00', 'Laki-laki', 'Jalan Hayam Wuruk', '002', '003', 'Klurak', 'Candi', 'Mojokerto', 'Jawa Timur', 'Islam', 'Belum Menikah', 'PILOT', 'Indonesia', '', NULL),
('3515010202970001', 'Ussy Sulistiowati', 'Mojokerto', '1997-02-02 02:00:00', 'Perempuan', 'Jalan Majapahit', '001', '003', 'Bligo', 'Candi', 'Mojokerto', 'Jawa Timur', 'Islam', 'Belum Menikah', 'PENGACARA', 'Indonesia', '', NULL),
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
(3, 'Isbat', 'ini adalah deskripsi syarat ketika hendak mendaftarkan diri untuk proses isbat', '2020-05-25 04:52:25'),
(4, 'NikahByOfficer', 'ini adalah deskripsi nikah dari officer', '2020-06-18 02:00:00'),
(5, 'RujukByOfficer', 'ini adalah deskripsi', '2020-06-18 02:00:00'),
(6, 'IsbatByOfficer', 'ini adalah deskripsi', '2020-06-18 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MENU_ID` int(11) NOT NULL,
  `PARENTMENU_ID` int(11) DEFAULT NULL,
  `ROLE_ID` int(11) NOT NULL,
  `TITLE` varchar(64) NOT NULL,
  `URL` varchar(64) NOT NULL,
  `ICON` varchar(64) DEFAULT NULL,
  `SEQ` int(11) NOT NULL,
  `IS_ACTIVE` varchar(1) NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL,
  `DTM_UPD` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MENU_ID`, `PARENTMENU_ID`, `ROLE_ID`, `TITLE`, `URL`, `ICON`, `SEQ`, `IS_ACTIVE`, `DTM_CRT`, `DTM_UPD`) VALUES
(1, NULL, 2, 'Dashboard', 'penghulu/', 'ft-bar-chart-2', 10, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(2, NULL, 2, 'Pernikahan', 'penghulu/nikah', 'ft-users', 20, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(3, NULL, 2, 'Rujuk', 'penghulu/rujuk', 'ft-user-plus', 30, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(4, 2, 2, 'Calon Suami', 'penghulu/verif/suami', 'icon-symbol-male', 10, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(5, 2, 2, 'Calon Istri', 'penghulu/verif/istri', 'icon-symbol-female', 20, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(6, 2, 2, 'Wali Akad', 'penghulu/verif/wali', 'icon-user', 30, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(7, 2, 2, 'Wakil Wali Akad', 'penghulu/verif/wakilwali', 'icon-users', 40, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(8, 2, 2, 'Mas Kawin', 'penghulu/verif/mahar', 'icon-diamond', 50, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(9, 2, 2, 'Perjanjian Nikah', 'penghulu/verif/janji', 'icon-book-open', 60, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(10, 2, 2, 'Petugas Pemeriksa', 'penghulu/verif/petugasperiksa', 'icon-user-following', 70, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(11, NULL, 1, 'Dashboard', 'staff/', 'ft-bar-chart-2', 10, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(12, NULL, 1, 'Pernikahan', 'staff/nikah', 'ft-users', 20, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(13, NULL, 1, 'Rujuk', 'staff/rujuk', 'ft-user-plus', 30, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(14, NULL, 1, 'Isbat', 'staff/isbat', 'ft-user-check', 40, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(15, NULL, 1, 'Penghulu', 'staff/penghulu', 'ft-user', 50, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(16, NULL, 1, 'Validasi Berkas', 'staff/validasi', 'ft-check-square', 60, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28');

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
  `PASSWORD_LABEL` varchar(64) DEFAULT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL,
  `DTM_UPD` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`OFFICER_ID`, `ROLE_ID`, `NIP`, `NAME`, `PHONE`, `EMAIL`, `ADDRESS`, `USERNAME`, `PASSWORD`, `PASSWORD_LABEL`, `DTM_CRT`, `DTM_UPD`) VALUES
(1, 1, '1234567890', 'Admin', '081234567890', 'admin@gmail.com', 'Perumahan Dinoyo Permai Lowokwaru Malang', 'sysadmin', '$2y$10$cOBZWZJkACpmbRO3h914wuEwIndld3xo56pc3SkaK9Bu5Ts/CdTBa', 'bismillah', '2020-05-19 17:00:00', NULL),
(2, 1, '1234567890123456', 'Budi Dharmawan', '081234567890', 'budidhar@gmail.com', 'Jalan Gajah Mada', 'budidhar', '$2y$10$cOBZWZJkACpmbRO3h914wuEwIndld3xo56pc3SkaK9Bu5Ts/CdTBa', 'bismillah', '2020-06-15 17:00:00', NULL),
(3, 2, '123456789', 'Iqbal Ramadhan, S.Ag.', '081234567890', 'iqbalram@gmail.com', 'Jalan Hayam Wuruk', 'iqbalram', '$2y$10$cOBZWZJkACpmbRO3h914wuEwIndld3xo56pc3SkaK9Bu5Ts/CdTBa', 'bismillah', '2020-06-17 17:00:00', NULL),
(4, 2, '01234567890', 'Muhammad Shodiq, S.Ag', '089876543211', 'shodiq@gmail.com', 'Jalan Mayjend Sungkono', 'shodiq', '$2y$10$FAy3MeGR3EjxyQRlqycIrOtbBQMVhqBw2CcjqqIx1xg.Qf.SzoHEi', 'bismillah', '2020-06-18 00:18:55', '2020-06-18 00:41:21');

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
(1, '3515072206970001', 'Ahmad Faizal', 'Laki-laki', 'Sidoarjo', '1997-06-22 06:30:00', 'Mahasiswa', '085645990100', 'ahmadfaizaaal@gmail.com', 'Jalan Madu Seno RT 001 RW 001 Klurak Candi Sidoarjo', '$2y$10$cOBZWZJkACpmbRO3h914wuEwIndld3xo56pc3SkaK9Bu5Ts/CdTBa', '2020-05-18 05:50:31', NULL),
(2, '3515010101970001', 'Andhika Pratama', 'Laki-laki', 'Mojokerto', '1997-01-01 02:00:00', 'Pilot', '081234567890', 'andhika@gmail.com', 'Jalan Majapahit RT 001 RW 001', '$2y$10$cOBZWZJkACpmbRO3h914wuEwIndld3xo56pc3SkaK9Bu5Ts/CdTBa', '2020-06-16 02:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `PEKERJAAN_ID` int(11) NOT NULL,
  `KODE_PEKERJAAN` varchar(32) NOT NULL,
  `LABEL_PEKERJAAN` varchar(64) NOT NULL,
  `IS_NEED_AUTH` varchar(1) DEFAULT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`PEKERJAAN_ID`, `KODE_PEKERJAAN`, `LABEL_PEKERJAAN`, `IS_NEED_AUTH`, `DTM_CRT`) VALUES
(1, 'akuntan', 'AKUNTAN', '0', '2020-05-23 10:11:56'),
(2, 'bpk', 'ANGGOTA BPK', '0', '2020-05-23 10:11:56'),
(3, 'dpd', 'ANGGOTA DPD', '0', '2020-05-23 10:11:56'),
(4, 'dprri', 'ANGGOTA DPR-RI', '0', '2020-05-23 10:11:56'),
(5, 'dprdkab', 'ANGGOTA DPRD KABUPATEN/KOTA', '0', '2020-05-23 10:11:56'),
(6, 'dprdprov', 'ANGGOTA DPRD PROVINSI', '0', '2020-05-23 10:11:56'),
(7, 'kementerian', 'ANGGOTA KABINET/KEMENTERIAN', '0', '2020-05-23 10:11:56'),
(8, 'mk', 'ANGGOTA MAHKAMAH KONSTITUSI', '0', '2020-05-23 10:11:56'),
(9, 'apoteker', 'APOTEKER', '0', '2020-05-23 10:11:56'),
(10, 'arsitek', 'ARSITEK', '0', '2020-05-23 10:11:56'),
(11, 'belumbekerja', 'BELUM/TIDAK BEKERJA', '0', '2020-05-23 10:11:56'),
(12, 'biarawati', 'BIARAWATI', '0', '2020-05-23 10:11:56'),
(13, 'bidan', 'BIDAN', '0', '2020-05-23 10:11:56'),
(14, 'bupati', 'BUPATI', '0', '2020-05-23 10:11:56'),
(15, 'buruhharian', 'BURUH HARIAN LEPAS', '0', '2020-05-23 10:11:56'),
(16, 'buruhnelayan', 'BURUH NELAYAN/PERIKANAN', '0', '2020-05-23 10:11:56'),
(17, 'buruhternak', 'BURUH PETERNAKAN', '0', '2020-05-23 10:11:56'),
(18, 'buruhtani', 'BURUH TANI/PERKEBUNAN', '0', '2020-05-23 10:11:56'),
(19, 'dokter', 'DOKTER', '0', '2020-05-23 10:11:56'),
(20, 'dosen', 'DOSEN', '0', '2020-05-23 10:11:56'),
(21, 'dubes', 'DUTA BESAR', '0', '2020-05-23 10:11:56'),
(22, 'gubernur', 'GUBERNUR', '0', '2020-05-23 10:11:56'),
(23, 'guru', 'GURU', '0', '2020-05-23 10:11:56'),
(24, 'imammasjid', 'IMAM MASJID', '0', '2020-05-23 10:11:56'),
(25, 'industri', 'INDUSTRI', '0', '2020-05-23 10:11:56'),
(26, 'jurumasak', 'JURU MASAK', '0', '2020-05-23 10:11:56'),
(27, 'karbumd', 'KARYAWAN BUMD', '0', '2020-05-23 10:11:56'),
(28, 'karbumn', 'KARYAWAN BUMN', '0', '2020-05-23 10:11:56'),
(29, 'karhonorer', 'KARYAWAN HONORER', '0', '2020-05-23 10:11:56'),
(30, 'karswasta', 'KARYAWAN SWASTA', '0', '2020-05-23 10:11:56'),
(31, 'kades', 'KEPALA DESA', '0', '2020-05-23 10:11:56'),
(32, 'polri', 'KEPOLISIAN RI', '1', '2020-05-23 10:11:56'),
(33, 'konstruksi', 'KONSTRUKSI', '0', '2020-05-23 10:11:56'),
(34, 'konsultan', 'KONSULTAN', '0', '2020-05-23 10:11:56'),
(35, 'lainnya', 'LAINNYA', '0', '2020-05-23 10:11:56'),
(36, 'mekanik', 'MEKANIK', '0', '2020-05-23 10:11:56'),
(37, 'mengurusrt', 'MENGURUS RUMAH TANGGA', '0', '2020-05-23 10:11:56'),
(38, 'nelayan', 'NELAYAN/PERIKANAN', '0', '2020-05-23 10:11:56'),
(39, 'notaris', 'NOTARIS', '0', '2020-05-23 10:11:56'),
(40, 'paraji', 'PARAJI', '0', '2020-05-23 10:11:56'),
(41, 'paranormal', 'PARANORMAL', '0', '2020-05-23 10:11:56'),
(42, 'pastor', 'PASTOR', '0', '2020-05-23 10:11:56'),
(43, 'pedagang', 'PEDAGANG', '0', '2020-05-23 10:11:56'),
(44, 'pns', 'PEGAWAI NEGERI SIPIL', '0', '2020-05-23 10:11:56'),
(45, 'pelajar', 'PELAJAR/MAHASISWA', '0', '2020-05-23 10:11:56'),
(46, 'pelaut', 'PELAUT', '0', '2020-05-23 10:11:56'),
(47, 'prt', 'PEMBANTU RUMAH TANGGA', '0', '2020-05-23 10:11:56'),
(48, 'penatabusana', 'PENATA BUSANA', '0', '2020-05-23 10:11:56'),
(49, 'penatarambut', 'PENATA RAMBUT', '0', '2020-05-23 10:11:56'),
(50, 'penatarias', 'PENATA RIAS', '0', '2020-05-23 10:11:56'),
(51, 'pendeta', 'PENDETA', '0', '2020-05-23 10:11:56'),
(52, 'peneliti', 'PENELITI', '0', '2020-05-23 10:11:56'),
(53, 'pengacara', 'PENGACARA', '0', '2020-05-23 10:11:56'),
(54, 'pensiunan', 'PENSIUNAN', '0', '2020-05-23 10:11:56'),
(55, 'penterjemah', 'PENTERJEMAH', '0', '2020-05-23 10:11:56'),
(56, 'penyiarradio', 'PENYIAR RADIO', '0', '2020-05-23 10:11:56'),
(57, 'penyiartv', 'PENYIAR TELEVISI', '0', '2020-05-23 10:11:56'),
(58, 'perancangbusana', 'PERANCANG BUSANA', '0', '2020-05-23 10:11:56'),
(59, 'perangkatdesa', 'PERANGKAT DESA', '0', '2020-05-23 10:11:56'),
(60, 'perawat', 'PERAWAT', '0', '2020-05-23 10:11:56'),
(61, 'perdagangan', 'PERDAGANGAN', '0', '2020-05-23 10:11:56'),
(62, 'petani', 'PETANI/PEKEBUN', '0', '2020-05-23 10:11:56'),
(63, 'peternak', 'PETERNAK', '0', '2020-05-23 10:11:56'),
(64, 'pialang', 'PIALANG', '0', '2020-05-23 10:11:56'),
(65, 'pilot', 'PILOT', '0', '2020-05-23 10:11:56'),
(66, 'presiden', 'PRESIDEN', '0', '2020-05-23 10:11:56'),
(67, 'promotor', 'PROMOTOR ACARA', '0', '2020-05-23 10:11:56'),
(68, 'psikiater', 'PSIKIATER/PSIKOLOG', '0', '2020-05-23 10:11:56'),
(69, 'seniman', 'SENIMAN', '0', '2020-05-23 10:11:56'),
(70, 'sopir', 'SOPIR', '0', '2020-05-23 10:11:56'),
(71, 'tabib', 'TABIB', '0', '2020-05-23 10:11:56'),
(72, 'tni', 'TENTARA NASIONAL INDONESIA', '1', '2020-05-23 10:11:56'),
(73, 'transportasi', 'TRANSPORTASI', '0', '2020-05-23 10:11:56'),
(74, 'tukangbatu', 'TUKANG BATU', '0', '2020-05-23 10:11:56'),
(75, 'tukangcukur', 'TUKANG CUKUR', '0', '2020-05-23 10:11:56'),
(76, 'tukanggigi', 'TUKANG GIGI', '0', '2020-05-23 10:11:56'),
(77, 'tukangjahit', 'TUKANG JAHIT', '0', '2020-05-23 10:11:56'),
(78, 'tukangkayu', 'TUKANG KAYU', '0', '2020-05-23 10:11:56'),
(79, 'tukanglas', 'TUKANG LAS/PANDAI BESI', '0', '2020-05-23 10:11:56'),
(80, 'tukanglistrik', 'TUKANG LISTRIK', '0', '2020-05-23 10:11:56'),
(81, 'tukangsol', 'TUKANG SOL SEPATU', '0', '2020-05-23 10:11:56'),
(82, 'ustadz', 'USTADZ/MUBALIGH', '0', '2020-05-23 10:11:56'),
(83, 'wabup', 'WAKIL BUPATI', '0', '2020-05-23 10:11:56'),
(84, 'wagub', 'WAKIL GUBERNUR', '0', '2020-05-23 10:11:56'),
(85, 'wapres', 'WAKIL PRESIDEN', '0', '2020-05-23 10:11:56'),
(86, 'wawali', 'WAKIL WALIKOTA', '0', '2020-05-23 10:11:56'),
(87, 'walikota', 'WALIKOTA', '0', '2020-05-23 10:11:56'),
(88, 'wartawan', 'WARTAWAN', '0', '2020-05-23 10:11:56'),
(89, 'wiraswasta', 'WIRASWASTA', '0', '2020-05-23 10:11:56');

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
(12, '1', 'UMUR_S', 'Umur (tahun)', '0', '1', '2020-05-25 03:33:35'),
(13, '1', 'UMUR_I', 'Umur (tahun)', '0', '1', '2020-05-25 03:33:35'),
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
(43, '1', 'FILE_AKTA_CERAI', 'Akta Cerai', '0', '1', '2020-05-25 03:33:35'),
(44, '1', 'FILE_ADDITIONAL_DOC_S', 'Surat Pernyataan dari Atasan', '0', '0', '2020-06-11 02:00:00'),
(45, '1', 'FILE_ADDITIONAL_DOC_I', 'Surat Pernyataan dari Atasan', '0', '0', '2020-06-11 02:00:00');

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
(12, 3, 10, '2020-05-25 04:56:35'),
(13, 1, 11, '2020-06-11 02:00:00'),
(14, 4, 12, '2020-06-11 02:00:00'),
(15, 4, 13, '2020-06-11 02:00:00'),
(16, 4, 14, '2020-06-11 02:00:00'),
(17, 5, 15, '2020-06-11 02:00:00'),
(18, 5, 16, '2020-06-11 02:00:00'),
(19, 5, 17, '2020-06-11 02:00:00'),
(20, 6, 18, '2020-06-11 02:00:00'),
(21, 6, 16, '2020-06-11 02:00:00'),
(22, 6, 17, '2020-06-11 02:00:00');

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
(10, '1', 'Data Dokumen Isbat', 80, '2020-05-25 04:00:57'),
(11, '1', 'Data Dokumen Pendukung', 100, '2020-06-11 02:00:00'),
(12, '1', 'Data Header Nikah Officer', 10, '2020-06-11 02:00:00'),
(13, '1', 'Data Calon Suami', 20, '2020-06-11 02:00:00'),
(14, '1', 'Data Calon Istri', 30, '2020-06-11 02:00:00'),
(15, '1', 'Data Header Rujuk Officer', 15, '2020-06-11 02:00:00'),
(16, '1', 'Data Suami Officer', 60, '2020-06-11 02:00:00'),
(17, '1', 'Data Istri Officer', 70, '2020-06-11 02:00:00'),
(18, '1', 'Data Header Isbat Officer', 50, '2020-06-11 02:00:00');

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
(47, 5, 5, 10, '2020-05-25 04:01:32'),
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
(74, 9, 33, 70, '2020-05-25 04:01:32'),
(75, 11, 44, 10, '2020-06-11 02:00:00'),
(76, 11, 45, 20, '2020-06-11 02:00:00'),
(77, 13, 4, 10, '2020-06-18 12:21:08'),
(78, 13, 6, 20, '2020-06-18 12:21:08'),
(79, 13, 8, 30, '2020-06-18 12:21:08'),
(80, 13, 10, 40, '2020-06-18 12:21:08'),
(81, 13, 12, 50, '2020-06-18 12:21:08'),
(82, 13, 14, 60, '2020-06-18 12:21:08'),
(83, 13, 16, 70, '2020-06-18 12:21:08'),
(84, 13, 18, 80, '2020-06-18 12:21:08'),
(85, 13, 20, 90, '2020-06-18 12:21:08'),
(86, 13, 22, 100, '2020-06-18 12:21:08'),
(88, 14, 5, 10, '2020-06-18 12:21:09'),
(89, 14, 7, 20, '2020-06-18 12:21:09'),
(90, 14, 9, 30, '2020-06-18 12:21:09'),
(91, 14, 11, 40, '2020-06-18 12:21:09'),
(92, 14, 13, 50, '2020-06-18 12:21:09'),
(93, 14, 15, 60, '2020-06-18 12:21:09'),
(94, 14, 17, 70, '2020-06-18 12:21:09'),
(95, 14, 19, 80, '2020-06-18 12:21:09'),
(96, 14, 21, 90, '2020-06-18 12:21:09'),
(97, 14, 23, 100, '2020-06-18 12:21:09'),
(99, 12, 1, 10, '2020-06-18 12:21:09'),
(100, 12, 2, 20, '2020-06-18 12:21:09'),
(101, 12, 3, 30, '2020-06-18 12:21:09'),
(102, 15, 39, 10, '2020-06-18 12:35:22'),
(103, 15, 40, 20, '2020-06-18 12:35:22'),
(104, 15, 41, 30, '2020-06-18 12:35:22'),
(105, 15, 42, 30, '2020-06-18 12:35:22'),
(106, 16, 4, 10, '2020-06-18 12:35:22'),
(107, 16, 10, 40, '2020-06-18 12:35:22'),
(108, 16, 12, 50, '2020-06-18 12:35:22'),
(109, 16, 16, 60, '2020-06-18 12:35:22'),
(110, 16, 18, 70, '2020-06-18 12:35:22'),
(111, 16, 20, 80, '2020-06-18 12:35:22'),
(112, 16, 22, 90, '2020-06-18 12:35:22'),
(114, 16, 34, 30, '2020-06-18 12:35:22'),
(115, 16, 36, 20, '2020-06-18 12:35:22'),
(116, 17, 5, 10, '2020-06-18 12:35:22'),
(117, 17, 37, 20, '2020-06-18 12:35:22'),
(118, 17, 35, 30, '2020-06-18 12:35:22'),
(119, 17, 11, 40, '2020-06-18 12:35:22'),
(120, 17, 13, 50, '2020-06-18 12:35:23'),
(121, 17, 17, 60, '2020-06-18 12:35:23'),
(122, 17, 19, 70, '2020-06-18 12:35:23'),
(123, 17, 21, 80, '2020-06-18 12:35:23'),
(124, 17, 23, 90, '2020-06-18 12:35:23'),
(125, 18, 2, 10, '2020-06-18 12:36:12'),
(126, 18, 3, 20, '2020-06-18 12:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `regdetail_tr`
--

CREATE TABLE `regdetail_tr` (
  `REGDETAIL_TR_ID` int(11) NOT NULL,
  `REG_ID` int(11) DEFAULT NULL,
  `DTM_CRT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `TMP_NIKAH` varchar(128) DEFAULT NULL,
  `TGL_AKAD` varchar(128) DEFAULT NULL,
  `ALMT_AKAD` varchar(128) DEFAULT NULL,
  `KEWARGANEGARAAN_S` varchar(128) DEFAULT NULL,
  `KEWARGANEGARAAN_I` varchar(128) DEFAULT NULL,
  `NIK_CAL_S` varchar(128) DEFAULT NULL,
  `NIK_CAL_I` varchar(128) DEFAULT NULL,
  `NAMA_CAL_S` varchar(128) DEFAULT NULL,
  `NAMA_CAL_I` varchar(128) DEFAULT NULL,
  `TTL_S` varchar(128) DEFAULT NULL,
  `TTL_I` varchar(128) DEFAULT NULL,
  `UMUR_S` varchar(128) DEFAULT NULL,
  `UMUR_I` varchar(128) DEFAULT NULL,
  `STATUS_CAL_S` varchar(128) DEFAULT NULL,
  `STATUS_CAL_I` varchar(128) DEFAULT NULL,
  `AGAMA_S` varchar(128) DEFAULT NULL,
  `AGAMA_I` varchar(128) DEFAULT NULL,
  `ALMT_S` varchar(128) DEFAULT NULL,
  `ALMT_I` varchar(128) DEFAULT NULL,
  `PEKERJAAN_S` varchar(128) DEFAULT NULL,
  `PEKERJAAN_I` varchar(128) DEFAULT NULL,
  `NO_HP_S` varchar(128) DEFAULT NULL,
  `NO_HP_I` varchar(128) DEFAULT NULL,
  `FOTO_S` varchar(128) DEFAULT NULL,
  `FOTO_I` varchar(128) DEFAULT NULL,
  `FILE_SKUN_N1` varchar(128) DEFAULT NULL,
  `FILE_SPM_N3` varchar(128) DEFAULT NULL,
  `FILE_KTP_S` varchar(128) DEFAULT NULL,
  `FILE_KTP_I` varchar(128) DEFAULT NULL,
  `FILE_KK_S` varchar(128) DEFAULT NULL,
  `FILE_KK_I` varchar(128) DEFAULT NULL,
  `FILE_AKTA_LAHIR_S` varchar(128) DEFAULT NULL,
  `FILE_AKTA_LAHIR_I` varchar(128) DEFAULT NULL,
  `NAMA_S` varchar(128) DEFAULT NULL,
  `NAMA_I` varchar(128) DEFAULT NULL,
  `NIK_S` varchar(128) DEFAULT NULL,
  `NIK_I` varchar(128) DEFAULT NULL,
  `FILE_SPPA` varchar(128) DEFAULT NULL,
  `TGL_RUJUK` varchar(128) DEFAULT NULL,
  `TGL_CERAI` varchar(128) DEFAULT NULL,
  `MASA_IDAH` varchar(128) DEFAULT NULL,
  `STATUS_CERAI` varchar(128) DEFAULT NULL,
  `FILE_AKTA_CERAI` varchar(128) DEFAULT NULL,
  `FILE_ADDITIONAL_DOC_S` varchar(128) DEFAULT NULL,
  `FILE_ADDITIONAL_DOC_I` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regdetail_tr`
--

INSERT INTO `regdetail_tr` (`REGDETAIL_TR_ID`, `REG_ID`, `DTM_CRT`, `TMP_NIKAH`, `TGL_AKAD`, `ALMT_AKAD`, `KEWARGANEGARAAN_S`, `KEWARGANEGARAAN_I`, `NIK_CAL_S`, `NIK_CAL_I`, `NAMA_CAL_S`, `NAMA_CAL_I`, `TTL_S`, `TTL_I`, `UMUR_S`, `UMUR_I`, `STATUS_CAL_S`, `STATUS_CAL_I`, `AGAMA_S`, `AGAMA_I`, `ALMT_S`, `ALMT_I`, `PEKERJAAN_S`, `PEKERJAAN_I`, `NO_HP_S`, `NO_HP_I`, `FOTO_S`, `FOTO_I`, `FILE_SKUN_N1`, `FILE_SPM_N3`, `FILE_KTP_S`, `FILE_KTP_I`, `FILE_KK_S`, `FILE_KK_I`, `FILE_AKTA_LAHIR_S`, `FILE_AKTA_LAHIR_I`, `NAMA_S`, `NAMA_I`, `NIK_S`, `NIK_I`, `FILE_SPPA`, `TGL_RUJUK`, `TGL_CERAI`, `MASA_IDAH`, `STATUS_CERAI`, `FILE_AKTA_CERAI`, `FILE_ADDITIONAL_DOC_S`, `FILE_ADDITIONAL_DOC_I`) VALUES
(17, 126, '2020-06-18 05:00:23', 'KUA', '20-06-2020 11:59:07', 'KUA Dawarblandong', 'WNI', 'WNI', '3515010101970001', '3515010202970001', 'Andhika Pratama', 'Ussy Sulistiowati', 'Mojokerto, 01-01-1997', 'Mojokerto, 02-02-1997', '23', '23', 'jejaka', 'perawan', 'Islam', 'Islam', 'Jalan Hayam Wuruk RT 002 RW 003 Klurak Candi Mojokerto', 'Jalan Majapahit RT 001 RW 003 Bligo Candi Mojokerto', 'PILOT', 'PENGACARA', '081234567890', '081234567890', 'foto_126_AndhikaPratama_20200618120023.jpg', 'foto_126_UssySulistiowati_20200618120023.jpg', 'N1_126_20200618120023.png', 'N3_126_20200618120023.png', 'ktp_126_AndhikaPratama_20200618120023.png', 'ktp_126_UssySulistiowati_20200618120023.png', 'kk_126_AndhikaPratama_20200618120023.png', 'kk_126_UssySulistiowati_20200618120023.png', 'aktalahir_126_AndhikaPratama_20200618120023.png', 'aktalahir_126_UssySulistiowati_20200618120023.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(19, 128, '2020-06-18 09:33:11', 'Di Luar KUA', '20-06-2020 16:31:54', 'Masjid Sabilillah', 'WNI', 'WNI', '3515072206970001', '3515072206970002', 'Rizky Febian', 'Savira Alifa', 'Mojokerto, 22-06-1997', 'Surabaya, 22-12-1999', '23', '21', 'jejaka', 'perawan', 'Islam', 'Islam', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', 'DOKTER', 'GURU', '081234567890', '081234567890', 'foto_128_RizkyFebian_20200618163311.png', 'foto_128_SaviraAlifa_20200618163311.png', 'N1_128_20200618163311.png', 'N3_128_20200618163311.png', 'ktp_128_RizkyFebian_20200618163311.png', 'ktp_128_SaviraAlifa_20200618163311.png', 'kk_128_RizkyFebian_20200618163311.png', 'kk_128_SaviraAlifa_20200618163311.png', 'aktalahir_128_RizkyFebian_20200618163311.png', 'aktalahir_128_SaviraAlifa_20200618163311.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(20, 129, '2020-06-18 10:10:05', NULL, NULL, NULL, 'WNI', 'WNI', NULL, NULL, NULL, NULL, 'Mojokerto, 01-01-1997', 'Surabaya, 22-12-1999', '23', '21', NULL, NULL, 'Islam', 'Islam', 'Jalan Hayam Wuruk RT 002 RW 003 Klurak Candi Mojokerto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', 'PILOT', 'GURU', '081234567890', '081234567890', 'foto_129_AndhikaPratama_20200618171005.png', 'foto_129_SaviraAlifa_20200618171005.png', NULL, NULL, 'ktp_129_AndhikaPratama_20200618171005.jpg', 'ktp_129_SaviraAlifa_20200618171005.jpg', 'kk_129_AndhikaPratama_20200618171005.jpg', 'kk_129_SaviraAlifa_20200618171005.jpg', 'aktalahir_129_AndhikaPratama_20200618171005.jpg', 'aktalahir_129_SaviraAlifa_20200618171005.jpg', 'Andhika Pratama', 'Savira Alifa', '3515010101970001', '3515072206970002', NULL, '18-06-2020', '02-04-2020', '77 hari', 'Cerai Raj\'i', 'aktacerai_129_20200618171005.jpg', NULL, NULL);

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
  `PARTICIPANT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`REG_ID`, `REG_CODE`, `DTM_CRT`, `DTM_UPD`, `USR_UPD`, `FORM_ID`, `STATUS_ID`, `VALIDATION_DATE`, `CHECKED_DATE`, `VERIFIED_DATE`, `SCHEDULE`, `PARTICIPANT_ID`) VALUES
(126, '2/And/20200618115905', '2020-06-18 04:59:08', '2020-06-18 05:19:44', 2, 1, 4, '2020-06-18 05:19:44', NULL, NULL, NULL, 2),
(128, '1/Ahm/20200618163146', '2020-06-18 09:32:23', '2020-06-18 09:39:20', 2, 1, 4, '2020-06-18 09:39:20', NULL, NULL, NULL, 1),
(129, '1/Ahm/20200618164850', '2020-06-18 10:09:02', '2020-06-18 10:11:01', 2, 2, 4, '2020-06-18 10:11:01', NULL, NULL, NULL, 1);

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
(1132, '2020-06-18 04:59:08', NULL, NULL, 126, 1, 'Tempat Akad Nikah', 'KUA'),
(1133, '2020-06-18 04:59:08', NULL, NULL, 126, 2, 'Tanggal Akad Nikah', '20-06-2020 11:59:07'),
(1134, '2020-06-18 04:59:09', NULL, NULL, 126, 3, 'Alamat Lokasi Akad Nikah', 'KUA Dawarblandong'),
(1135, '2020-06-18 05:00:23', NULL, NULL, 126, 4, 'Kewarganegaraan', 'WNI'),
(1136, '2020-06-18 05:00:23', NULL, NULL, 126, 6, 'NIK Calon Suami', '3515010101970001'),
(1137, '2020-06-18 05:00:23', NULL, NULL, 126, 8, 'Nama Calon Suami', 'Andhika Pratama'),
(1138, '2020-06-18 05:00:24', NULL, NULL, 126, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 01-01-1997'),
(1139, '2020-06-18 05:00:24', NULL, NULL, 126, 12, 'Umur (tahun)', '23'),
(1140, '2020-06-18 05:00:24', NULL, NULL, 126, 14, 'Status Calon Suami', 'jejaka'),
(1141, '2020-06-18 05:00:24', NULL, NULL, 126, 16, 'Agama', 'Islam'),
(1142, '2020-06-18 05:00:24', NULL, NULL, 126, 18, 'Alamat', 'Jalan Hayam Wuruk RT 002 RW 003 Klurak Candi Mojokerto'),
(1143, '2020-06-18 05:00:24', NULL, NULL, 126, 20, 'Pekerjaan', 'PILOT'),
(1144, '2020-06-18 05:00:25', NULL, NULL, 126, 22, 'Nomor HP / WA', '081234567890'),
(1145, '2020-06-18 05:00:25', NULL, NULL, 126, 24, 'Foto', 'foto_126_AndhikaPratama_20200618120023.jpg'),
(1146, '2020-06-18 05:00:25', NULL, NULL, 126, 5, 'Kewarganegaraan', 'WNI'),
(1147, '2020-06-18 05:00:25', NULL, NULL, 126, 7, 'NIK Calon Istri', '3515010202970001'),
(1148, '2020-06-18 05:00:25', NULL, NULL, 126, 9, 'Nama Calon Istri', 'Ussy Sulistiowati'),
(1149, '2020-06-18 05:00:25', NULL, NULL, 126, 11, 'Tempat & Tanggal Lahir', 'Mojokerto, 02-02-1997'),
(1150, '2020-06-18 05:00:25', NULL, NULL, 126, 13, 'Umur (tahun)', '23'),
(1151, '2020-06-18 05:00:25', NULL, NULL, 126, 15, 'Status Calon Istri', 'perawan'),
(1152, '2020-06-18 05:00:25', NULL, NULL, 126, 17, 'Agama', 'Islam'),
(1153, '2020-06-18 05:00:26', NULL, NULL, 126, 19, 'Alamat', 'Jalan Majapahit RT 001 RW 003 Bligo Candi Mojokerto'),
(1154, '2020-06-18 05:00:26', NULL, NULL, 126, 21, 'Pekerjaan', 'PENGACARA'),
(1155, '2020-06-18 05:00:27', NULL, NULL, 126, 23, 'Nomor HP / WA', '081234567890'),
(1156, '2020-06-18 05:00:27', NULL, NULL, 126, 25, 'Foto', 'foto_126_UssySulistiowati_20200618120023.jpg'),
(1157, '2020-06-18 05:00:27', NULL, NULL, 126, 26, 'Surat Keterangan Untuk Nikah N1 (Dari Kelurahan)', 'N1_126_20200618120023.png'),
(1158, '2020-06-18 05:00:28', NULL, NULL, 126, 27, 'Surat Persetujuan Mempelai N3', 'N3_126_20200618120023.png'),
(1159, '2020-06-18 05:00:28', NULL, NULL, 126, 28, 'Kartu Tanda Penduduk', 'ktp_126_AndhikaPratama_20200618120023.png'),
(1160, '2020-06-18 05:00:28', NULL, NULL, 126, 29, 'Kartu Tanda Penduduk', 'ktp_126_UssySulistiowati_20200618120023.png'),
(1161, '2020-06-18 05:00:28', NULL, NULL, 126, 30, 'Kartu Keluarga', 'kk_126_AndhikaPratama_20200618120023.png'),
(1162, '2020-06-18 05:00:28', NULL, NULL, 126, 31, 'Kartu Keluarga', 'kk_126_UssySulistiowati_20200618120023.png'),
(1163, '2020-06-18 05:00:29', NULL, NULL, 126, 32, 'Akta Lahir', 'aktalahir_126_AndhikaPratama_20200618120023.png'),
(1164, '2020-06-18 05:00:29', NULL, NULL, 126, 33, 'Akta Lahir', 'aktalahir_126_UssySulistiowati_20200618120023.png'),
(1165, '2020-06-18 05:00:29', NULL, NULL, 126, 44, 'Surat Pernyataan dari Atasan', ''),
(1166, '2020-06-18 05:00:29', NULL, NULL, 126, 45, 'Surat Pernyataan dari Atasan', ''),
(1170, '2020-06-18 09:32:23', NULL, NULL, 128, 1, 'Tempat Akad Nikah', 'Di Luar KUA'),
(1171, '2020-06-18 09:32:23', NULL, NULL, 128, 2, 'Tanggal Akad Nikah', '20-06-2020 16:31:54'),
(1172, '2020-06-18 09:32:23', NULL, NULL, 128, 3, 'Alamat Lokasi Akad Nikah', 'Masjid Sabilillah'),
(1173, '2020-06-18 09:33:11', NULL, NULL, 128, 4, 'Kewarganegaraan', 'WNI'),
(1174, '2020-06-18 09:33:11', NULL, NULL, 128, 6, 'NIK Calon Suami', '3515072206970001'),
(1175, '2020-06-18 09:33:11', NULL, NULL, 128, 8, 'Nama Calon Suami', 'Rizky Febian'),
(1176, '2020-06-18 09:33:11', NULL, NULL, 128, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(1177, '2020-06-18 09:33:12', NULL, NULL, 128, 12, 'Umur (tahun)', '23'),
(1178, '2020-06-18 09:33:12', NULL, NULL, 128, 14, 'Status Calon Suami', 'jejaka'),
(1179, '2020-06-18 09:33:12', NULL, NULL, 128, 16, 'Agama', 'Islam'),
(1180, '2020-06-18 09:33:12', NULL, NULL, 128, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(1181, '2020-06-18 09:33:12', NULL, NULL, 128, 20, 'Pekerjaan', 'DOKTER'),
(1182, '2020-06-18 09:33:12', NULL, NULL, 128, 22, 'Nomor HP / WA', '081234567890'),
(1183, '2020-06-18 09:33:12', NULL, NULL, 128, 24, 'Foto', 'foto_128_RizkyFebian_20200618163311.png'),
(1184, '2020-06-18 09:33:12', NULL, NULL, 128, 5, 'Kewarganegaraan', 'WNI'),
(1185, '2020-06-18 09:33:12', NULL, NULL, 128, 7, 'NIK Calon Istri', '3515072206970002'),
(1186, '2020-06-18 09:33:12', NULL, NULL, 128, 9, 'Nama Calon Istri', 'Savira Alifa'),
(1187, '2020-06-18 09:33:12', NULL, NULL, 128, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(1188, '2020-06-18 09:33:12', NULL, NULL, 128, 13, 'Umur (tahun)', '21'),
(1189, '2020-06-18 09:33:12', NULL, NULL, 128, 15, 'Status Calon Istri', 'perawan'),
(1190, '2020-06-18 09:33:12', NULL, NULL, 128, 17, 'Agama', 'Islam'),
(1191, '2020-06-18 09:33:12', NULL, NULL, 128, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1192, '2020-06-18 09:33:12', NULL, NULL, 128, 21, 'Pekerjaan', 'GURU'),
(1193, '2020-06-18 09:33:12', NULL, NULL, 128, 23, 'Nomor HP / WA', '081234567890'),
(1194, '2020-06-18 09:33:12', NULL, NULL, 128, 25, 'Foto', 'foto_128_SaviraAlifa_20200618163311.png'),
(1195, '2020-06-18 09:33:12', NULL, NULL, 128, 26, 'Surat Keterangan Untuk Nikah N1 (Dari Kelurahan)', 'N1_128_20200618163311.png'),
(1196, '2020-06-18 09:33:12', NULL, NULL, 128, 27, 'Surat Persetujuan Mempelai N3', 'N3_128_20200618163311.png'),
(1197, '2020-06-18 09:33:12', NULL, NULL, 128, 28, 'Kartu Tanda Penduduk', 'ktp_128_RizkyFebian_20200618163311.png'),
(1198, '2020-06-18 09:33:12', NULL, NULL, 128, 29, 'Kartu Tanda Penduduk', 'ktp_128_SaviraAlifa_20200618163311.png'),
(1199, '2020-06-18 09:33:13', NULL, NULL, 128, 30, 'Kartu Keluarga', 'kk_128_RizkyFebian_20200618163311.png'),
(1200, '2020-06-18 09:33:13', NULL, NULL, 128, 31, 'Kartu Keluarga', 'kk_128_SaviraAlifa_20200618163311.png'),
(1201, '2020-06-18 09:33:13', NULL, NULL, 128, 32, 'Akta Lahir', 'aktalahir_128_RizkyFebian_20200618163311.png'),
(1202, '2020-06-18 09:33:13', NULL, NULL, 128, 33, 'Akta Lahir', 'aktalahir_128_SaviraAlifa_20200618163311.png'),
(1203, '2020-06-18 09:33:13', NULL, NULL, 128, 44, 'Surat Pernyataan dari Atasan', ''),
(1204, '2020-06-18 09:33:13', NULL, NULL, 128, 45, 'Surat Pernyataan dari Atasan', ''),
(1205, '2020-06-18 10:09:03', NULL, NULL, 129, 39, 'Tanggal Daftar Rujuk', '18-06-2020'),
(1206, '2020-06-18 10:09:03', NULL, NULL, 129, 40, 'Tanggal Cerai', '02-04-2020'),
(1207, '2020-06-18 10:09:03', NULL, NULL, 129, 41, 'Masa Idah', '77 hari'),
(1208, '2020-06-18 10:09:03', NULL, NULL, 129, 42, 'Status Cerai', 'Cerai Raj\'i'),
(1209, '2020-06-18 10:10:05', NULL, NULL, 129, 4, 'Kewarganegaraan', 'WNI'),
(1210, '2020-06-18 10:10:05', NULL, NULL, 129, 36, 'NIK Suami', '3515010101970001'),
(1211, '2020-06-18 10:10:05', NULL, NULL, 129, 34, 'Nama Suami', 'Andhika Pratama'),
(1212, '2020-06-18 10:10:05', NULL, NULL, 129, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 01-01-1997'),
(1213, '2020-06-18 10:10:05', NULL, NULL, 129, 12, 'Umur (tahun)', '23'),
(1214, '2020-06-18 10:10:05', NULL, NULL, 129, 16, 'Agama', 'Islam'),
(1215, '2020-06-18 10:10:06', NULL, NULL, 129, 18, 'Alamat', 'Jalan Hayam Wuruk RT 002 RW 003 Klurak Candi Mojokerto'),
(1216, '2020-06-18 10:10:06', NULL, NULL, 129, 20, 'Pekerjaan', 'PILOT'),
(1217, '2020-06-18 10:10:06', NULL, NULL, 129, 22, 'Nomor HP / WA', '081234567890'),
(1218, '2020-06-18 10:10:06', NULL, NULL, 129, 24, 'Foto', 'foto_129_AndhikaPratama_20200618171005.png'),
(1219, '2020-06-18 10:10:06', NULL, NULL, 129, 5, 'Kewarganegaraan', 'WNI'),
(1220, '2020-06-18 10:10:06', NULL, NULL, 129, 37, 'NIK Istri', '3515072206970002'),
(1221, '2020-06-18 10:10:06', NULL, NULL, 129, 35, 'Nama Istri', 'Savira Alifa'),
(1222, '2020-06-18 10:10:06', NULL, NULL, 129, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(1223, '2020-06-18 10:10:06', NULL, NULL, 129, 13, 'Umur (tahun)', '21'),
(1224, '2020-06-18 10:10:07', NULL, NULL, 129, 17, 'Agama', 'Islam'),
(1225, '2020-06-18 10:10:07', NULL, NULL, 129, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1226, '2020-06-18 10:10:07', NULL, NULL, 129, 21, 'Pekerjaan', 'GURU'),
(1227, '2020-06-18 10:10:07', NULL, NULL, 129, 23, 'Nomor HP / WA', '081234567890'),
(1228, '2020-06-18 10:10:07', NULL, NULL, 129, 25, 'Foto', 'foto_129_SaviraAlifa_20200618171005.png'),
(1229, '2020-06-18 10:10:07', NULL, NULL, 129, 43, 'Akta Cerai', 'aktacerai_129_20200618171005.jpg'),
(1230, '2020-06-18 10:10:07', NULL, NULL, 129, 28, 'Kartu Tanda Penduduk', 'ktp_129_AndhikaPratama_20200618171005.jpg'),
(1231, '2020-06-18 10:10:07', NULL, NULL, 129, 29, 'Kartu Tanda Penduduk', 'ktp_129_SaviraAlifa_20200618171005.jpg'),
(1232, '2020-06-18 10:10:07', NULL, NULL, 129, 30, 'Kartu Keluarga', 'kk_129_AndhikaPratama_20200618171005.jpg'),
(1233, '2020-06-18 10:10:07', NULL, NULL, 129, 31, 'Kartu Keluarga', 'kk_129_SaviraAlifa_20200618171005.jpg'),
(1234, '2020-06-18 10:10:07', NULL, NULL, 129, 32, 'Akta Lahir', 'aktalahir_129_AndhikaPratama_20200618171005.jpg'),
(1235, '2020-06-18 10:10:07', NULL, NULL, 129, 33, 'Akta Lahir', 'aktalahir_129_SaviraAlifa_20200618171005.jpg');

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
(7, 'Valid', 'V'),
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
-- Indexes for table `regdetail_tr`
--
ALTER TABLE `regdetail_tr`
  ADD PRIMARY KEY (`REGDETAIL_TR_ID`),
  ADD KEY `regdetail_tr_ibfk_1` (`REG_ID`);

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
  MODIFY `FORM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `MENU_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `OFFICER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `PARTICIPANT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `PEKERJAAN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `QUESTION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `question_group`
--
ALTER TABLE `question_group`
  MODIFY `QUESTIONGROUP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `question_of_group`
--
ALTER TABLE `question_of_group`
  MODIFY `QUESTIONOFGROUP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `regdetail_tr`
--
ALTER TABLE `regdetail_tr`
  MODIFY `REGDETAIL_TR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `REG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `registration_detail`
--
ALTER TABLE `registration_detail`
  MODIFY `REG_DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1259;

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
-- Constraints for table `regdetail_tr`
--
ALTER TABLE `regdetail_tr`
  ADD CONSTRAINT `regdetail_tr_ibfk_1` FOREIGN KEY (`REG_ID`) REFERENCES `registration` (`REG_ID`) ON DELETE CASCADE;

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
