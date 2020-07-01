-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 01:20 AM
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
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EVENT_ID` int(11) NOT NULL,
  `EVENT_NAME` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EVENT_ID`, `EVENT_NAME`) VALUES
(1, 'nikah'),
(2, 'rujuk'),
(3, 'isbat');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `FORM_ID` int(11) NOT NULL,
  `EVENT_ID` int(11) DEFAULT NULL,
  `FORM_NAME` varchar(64) NOT NULL,
  `FORM_DESC` text NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`FORM_ID`, `EVENT_ID`, `FORM_NAME`, `FORM_DESC`, `DTM_CRT`) VALUES
(1, 1, 'Nikah', 'ini adalah deskripsi syarat ketika hendak mendaftarkan diri untuk proses nikah', '2020-05-25 04:52:25'),
(2, 2, 'Rujuk', 'ini adalah deskripsi syarat ketika hendak mendaftarkan diri untuk proses rujuk', '2020-05-25 04:52:25'),
(3, 3, 'Isbat', 'ini adalah deskripsi syarat ketika hendak mendaftarkan diri untuk proses isbat', '2020-05-25 04:52:25'),
(4, 1, 'NikahByOfficer', 'ini adalah deskripsi nikah dari officer', '2020-06-18 02:00:00'),
(5, 2, 'RujukByOfficer', 'ini adalah deskripsi', '2020-06-18 02:00:00'),
(6, 3, 'IsbatByOfficer', 'ini adalah deskripsi', '2020-06-18 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MENU_ID` int(11) NOT NULL,
  `HAS_CHILD` varchar(1) DEFAULT NULL,
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

INSERT INTO `menu` (`MENU_ID`, `HAS_CHILD`, `PARENTMENU_ID`, `ROLE_ID`, `TITLE`, `URL`, `ICON`, `SEQ`, `IS_ACTIVE`, `DTM_CRT`, `DTM_UPD`) VALUES
(1, '0', NULL, 2, 'Dashboard', 'penghulu/', 'ft-bar-chart-2', 10, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(2, '1', NULL, 2, 'Pernikahan', 'penghulu/nikah', 'ft-users', 20, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(3, '0', NULL, 2, 'Rujuk', 'penghulu/rujuk', 'ft-user-plus', 30, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(4, '0', 2, 2, 'Calon Suami', 'penghulu/verif/suami', 'icon-symbol-male', 10, '0', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(5, '0', 2, 2, 'Calon Istri', 'penghulu/verif/istri', 'icon-symbol-female', 20, '0', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(6, '0', 2, 2, 'Wali Akad', 'penghulu/verif/wali', 'icon-user', 30, '0', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(7, '0', 2, 2, 'Wakil Wali Akad', 'penghulu/verif/wakilwali', 'icon-users', 40, '0', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(8, '0', 2, 2, 'Mas Kawin', 'penghulu/verif/mahar', 'icon-diamond', 50, '0', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(9, '0', 2, 2, 'Perjanjian Nikah', 'penghulu/verif/janji', 'icon-book-open', 60, '0', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(10, '0', 2, 2, 'Petugas Pemeriksa', 'penghulu/verif/petugasperiksa', 'icon-user-following', 70, '0', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(11, '0', NULL, 1, 'Dashboard', 'staff/', 'ft-bar-chart-2', 10, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(12, '0', NULL, 1, 'Pernikahan', 'staff/nikah', 'ft-users', 20, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(13, '0', NULL, 1, 'Rujuk', 'staff/rujuk', 'ft-user-plus', 30, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(14, '0', NULL, 1, 'Isbat', 'staff/isbat', 'ft-user-check', 40, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(15, '0', NULL, 1, 'Penghulu', 'staff/penghulu', 'ft-user', 50, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(16, '0', NULL, 1, 'Validasi Berkas', 'staff/validasi', 'ft-check-square', 60, '1', '2020-06-16 07:29:09', '2020-06-16 07:30:28'),
(17, '1', NULL, 1, 'Lihat Jadwal', 'staff/jadwal', 'ft-calendar', 70, '1', '2020-06-20 22:14:00', '2020-06-20 22:14:00'),
(18, '0', 17, 1, 'Jadwal Sidang', 'staff/jadwal/sidang', 'ft-calendar', 20, '0', '2020-06-20 22:14:00', '2020-06-20 22:14:00'),
(19, '0', 17, 1, 'Jadwal Akad', 'staff/jadwal/akad', 'ft-calendar', 10, '0', '2020-06-20 22:14:00', '2020-06-20 22:14:00'),
(20, '0', 2, 2, 'Beranda Nikah', 'penghulu/nikah', 'ft-users', 9, '0', '2020-06-20 22:14:00', '2020-06-20 22:14:00');

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
  `REF_ID` varchar(64) NOT NULL,
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
(45, '1', 'FILE_ADDITIONAL_DOC_I', 'Surat Pernyataan dari Atasan', '0', '0', '2020-06-11 02:00:00'),
(46, '1', 'FILE_ADDITIONAL_DOC_KEDUTAAN_S', 'Surat Keterangan dari Kedutaan', '0', '0', '2020-06-27 22:02:03'),
(47, '1', 'FILE_ADDITIONAL_DOC_KEDUTAAN_I', 'Surat Keterangan dari Kedutaan', '0', '0', '2020-06-27 22:02:03'),
(48, '1', 'FILE_ADDITIONAL_DOC_PASSPORT_S', 'Passport', '0', '0', '2020-06-27 22:02:03'),
(49, '1', 'FILE_ADDITIONAL_DOC_PASSPORT_I', 'Passport', '0', '0', '2020-06-27 22:02:03'),
(50, '1', 'FILE_ADDITIONAL_DOC_IMIGRASI_S', 'Surat Izin Masuk dari Imigrasi', '0', '0', '2020-06-27 22:02:03'),
(51, '1', 'FILE_ADDITIONAL_DOC_IMIGRASI_I', 'Surat Izin Masuk dari Imigrasi', '0', '0', '2020-06-27 22:02:04');

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
(126, 18, 3, 20, '2020-06-18 12:36:12'),
(127, 11, 46, 30, '2020-06-27 22:05:26'),
(128, 11, 47, 40, '2020-06-27 22:05:26'),
(129, 11, 48, 50, '2020-06-27 22:05:26'),
(130, 11, 49, 60, '2020-06-27 22:05:26'),
(131, 11, 50, 70, '2020-06-27 22:05:26'),
(132, 11, 51, 80, '2020-06-27 22:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `regdetail_tr`
--

CREATE TABLE `regdetail_tr` (
  `REGDETAIL_TR_ID` int(11) NOT NULL,
  `REG_ID` int(11) DEFAULT NULL,
  `DTM_CRT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DTM_UPD` timestamp NULL DEFAULT NULL,
  `USR_UPD` varchar(5) DEFAULT NULL,
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
  `FILE_ADDITIONAL_DOC_I` varchar(128) DEFAULT NULL,
  `FILE_ADDITIONAL_DOC_KEDUTAAN_S` varchar(128) DEFAULT NULL,
  `FILE_ADDITIONAL_DOC_KEDUTAAN_I` varchar(128) DEFAULT NULL,
  `FILE_ADDITIONAL_DOC_PASSPORT_S` varchar(128) DEFAULT NULL,
  `FILE_ADDITIONAL_DOC_PASSPORT_I` varchar(128) DEFAULT NULL,
  `FILE_ADDITIONAL_DOC_IMIGRASI_S` varchar(128) DEFAULT NULL,
  `FILE_ADDITIONAL_DOC_IMIGRASI_I` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regdetail_tr`
--

INSERT INTO `regdetail_tr` (`REGDETAIL_TR_ID`, `REG_ID`, `DTM_CRT`, `DTM_UPD`, `USR_UPD`, `TMP_NIKAH`, `TGL_AKAD`, `ALMT_AKAD`, `KEWARGANEGARAAN_S`, `KEWARGANEGARAAN_I`, `NIK_CAL_S`, `NIK_CAL_I`, `NAMA_CAL_S`, `NAMA_CAL_I`, `TTL_S`, `TTL_I`, `UMUR_S`, `UMUR_I`, `STATUS_CAL_S`, `STATUS_CAL_I`, `AGAMA_S`, `AGAMA_I`, `ALMT_S`, `ALMT_I`, `PEKERJAAN_S`, `PEKERJAAN_I`, `NO_HP_S`, `NO_HP_I`, `FOTO_S`, `FOTO_I`, `FILE_SKUN_N1`, `FILE_SPM_N3`, `FILE_KTP_S`, `FILE_KTP_I`, `FILE_KK_S`, `FILE_KK_I`, `FILE_AKTA_LAHIR_S`, `FILE_AKTA_LAHIR_I`, `NAMA_S`, `NAMA_I`, `NIK_S`, `NIK_I`, `FILE_SPPA`, `TGL_RUJUK`, `TGL_CERAI`, `MASA_IDAH`, `STATUS_CERAI`, `FILE_AKTA_CERAI`, `FILE_ADDITIONAL_DOC_S`, `FILE_ADDITIONAL_DOC_I`, `FILE_ADDITIONAL_DOC_KEDUTAAN_S`, `FILE_ADDITIONAL_DOC_KEDUTAAN_I`, `FILE_ADDITIONAL_DOC_PASSPORT_S`, `FILE_ADDITIONAL_DOC_PASSPORT_I`, `FILE_ADDITIONAL_DOC_IMIGRASI_S`, `FILE_ADDITIONAL_DOC_IMIGRASI_I`) VALUES
(17, 126, '2020-06-18 05:00:23', NULL, NULL, 'KUA', '20-06-2020 11:59:07', 'KUA Dawarblandong', 'WNI', 'WNI', '3515010101970001', '3515010202970001', 'Andhika Pratama', 'Ussy Sulistiowati', 'Mojokerto, 01-01-1997', 'Mojokerto, 02-02-1997', '23', '23', 'jejaka', 'perawan', 'Islam', 'Islam', 'Jalan Hayam Wuruk RT 002 RW 003 Klurak Candi Mojokerto', 'Jalan Majapahit RT 001 RW 003 Bligo Candi Mojokerto', 'PILOT', 'PENGACARA', '081234567890', '081234567890', 'foto_126_AndhikaPratama_20200618120023.jpg', 'foto_126_UssySulistiowati_20200618120023.jpg', 'N1_126_20200618120023.png', 'N3_126_20200618120023.png', 'ktp_126_AndhikaPratama_20200618120023.png', 'ktp_126_UssySulistiowati_20200618120023.png', 'kk_126_AndhikaPratama_20200618120023.png', 'kk_126_UssySulistiowati_20200618120023.png', 'aktalahir_126_AndhikaPratama_20200618120023.png', 'aktalahir_126_UssySulistiowati_20200618120023.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 128, '2020-06-18 09:33:11', NULL, NULL, 'Di Luar KUA', '20-06-2020 16:31:54', 'Masjid Sabilillah', 'WNI', 'WNI', '3515072206970001', '3515072206970002', 'Rizky Febian', 'Savira Alifa', 'Mojokerto, 22-06-1997', 'Surabaya, 22-12-1999', '23', '21', 'jejaka', 'perawan', 'Islam', 'Islam', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', 'DOKTER', 'GURU', '081234567890', '081234567890', 'foto_128_RizkyFebian_20200618163311.png', 'foto_128_SaviraAlifa_20200618163311.png', 'N1_128_20200618163311.png', 'N3_128_20200618163311.png', 'ktp_128_RizkyFebian_20200618163311.png', 'ktp_128_SaviraAlifa_20200618163311.png', 'kk_128_RizkyFebian_20200618163311.png', 'kk_128_SaviraAlifa_20200618163311.png', 'aktalahir_128_RizkyFebian_20200618163311.png', 'aktalahir_128_SaviraAlifa_20200618163311.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 129, '2020-06-18 10:10:05', NULL, NULL, NULL, NULL, NULL, 'WNI', 'WNI', NULL, NULL, NULL, NULL, 'Mojokerto, 01-01-1997', 'Surabaya, 22-12-1999', '23', '21', NULL, NULL, 'Islam', 'Islam', 'Jalan Hayam Wuruk RT 002 RW 003 Klurak Candi Mojokerto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', 'PILOT', 'GURU', '081234567890', '081234567890', 'foto_129_AndhikaPratama_20200618171005.png', 'foto_129_SaviraAlifa_20200618171005.png', NULL, NULL, 'ktp_129_AndhikaPratama_20200618171005.jpg', 'ktp_129_SaviraAlifa_20200618171005.jpg', 'kk_129_AndhikaPratama_20200618171005.jpg', 'kk_129_SaviraAlifa_20200618171005.jpg', 'aktalahir_129_AndhikaPratama_20200618171005.jpg', 'aktalahir_129_SaviraAlifa_20200618171005.jpg', 'Andhika Pratama', 'Savira Alifa', '3515010101970001', '3515072206970002', NULL, '18-06-2020', '02-04-2020', '77 hari', 'Cerai Raj\'i', 'aktacerai_129_20200618171005.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 140, '2020-06-21 13:33:06', NULL, NULL, NULL, '27-06-2020 13:43:53', 'Masjid Sabilillah', 'WNI', 'WNI', NULL, NULL, NULL, NULL, 'Mojokerto, 22-06-1997', 'Surabaya, 22-12-1999', '23', '21', NULL, NULL, 'Islam', 'Islam', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', 'DOKTER', 'GURU', '081234567890', '081234567890', 'foto_140_RizkyFebian_20200619004446.jpg', 'foto_140_SaviraAlifa_20200619004446.jpg', NULL, NULL, 'ktp_140_RizkyFebian_20200619004446.jpg', 'ktp_140_SaviraAlifa_20200619004446.jpg', 'kk_140_RizkyFebian_20200619004447.jpg', 'kk_140_SaviraAlifa_20200619004447.jpg', 'aktalahir_140_RizkyFebian_20200619004447.jpg', 'aktalahir_140_SaviraAlifa_20200619004447.jpg', 'Rizky Febian', 'Savira Alifa', '3515072206970001', '3515072206970002', 'SPPA_140_20200619004446.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 141, '2020-06-21 13:10:58', NULL, NULL, 'Di Luar KUA', '27-06-2020 09:45:17', 'Masjid Baitullah', 'WNI', 'WNI', '3515010101970001', '3515010202970001', 'Andhika Pratama', 'Ussy Sulistiowati', 'Mojokerto, 01-01-1997', 'Mojokerto, 02-02-1997', '23', '23', 'jejaka', 'perawan', 'Islam', 'Islam', 'Jalan Hayam Wuruk RT 002 RW 003 Klurak Candi Mojokerto', 'Jalan Majapahit RT 001 RW 003 Bligo Candi Mojokerto', 'PILOT', 'PENGACARA', '081234567890', '081234567890', 'foto_141_AndhikaPratama_20200619004624.jpg', 'foto_141_UssySulistiowati_20200619004624.jpg', 'N1_141_20200619004624.jpg', 'N3_141_20200619004624.jpg', 'ktp_141_AndhikaPratama_20200619004624.jpg', 'ktp_141_UssySulistiowati_20200619004624.jpg', 'kk_141_AndhikaPratama_20200619004624.jpg', 'kk_141_UssySulistiowati_20200619004624.jpg', 'aktalahir_141_AndhikaPratama_20200619004624.jpg', 'aktalahir_141_UssySulistiowati_20200619004624.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 148, '2020-07-01 03:51:49', '2020-06-19 03:06:59', '2', 'KUA', '30-06-2020 08:02:17', 'KUA Dawarblandong', 'WNI', 'WNI', '3515072206970001', '3515072206970002', 'Rizky Febian Alamsyah', 'Savira Alifa', 'Mojokerto, 22-06-1997', 'Surabaya, 22-12-1999', '23', '21', 'jejaka', 'perawan', 'Islam', 'Islam', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', 'DOKTER', 'GURU', '085645990100', '081234567890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 149, '2020-06-20 22:07:42', '2020-06-20 22:07:42', '2', NULL, '17-04-2020 08:30:00', 'Perumahan Griya Shanta', 'WNI', 'WNI', NULL, NULL, NULL, NULL, 'Mojokerto, 01-01-1997', 'Mojokerto, 02-02-1997', '23', '23', NULL, NULL, 'Islam', 'Islam', 'Jalan Hayam Wuruk RT 002 RW 003 Klurak Candi Mojokerto', 'Jalan Majapahit RT 001 RW 003 Bligo Candi Mojokerto', 'PILOT', 'PENGACARA', '081234567890', '081234567890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Andhika Pratama', 'Ussy Sulistiowati', '3515010101970001', '3515010202970001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 150, '2020-06-20 22:04:41', NULL, NULL, NULL, NULL, NULL, 'WNI', 'WNI', NULL, NULL, NULL, NULL, 'Mojokerto, 22-06-1997', 'Surabaya, 22-12-1999', '23', '21', NULL, NULL, 'Islam', 'Islam', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', 'DOKTER', 'GURU', '081234567890', '081234567890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rizky Febian', 'Savira Alifa', '3515072206970001', '3515072206970002', NULL, '21-06-2020', '15-05-2020', '37 hari', 'Cerai Raj\'i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 157, '2020-06-24 22:34:45', '2020-06-24 22:34:45', NULL, 'KUA', '27-06-2020 05:33:43', 'KUA Dawarblandong', 'WNI', 'WNI', '3515072206970001', '3515072206970002', 'Rizky Febian', 'Savira Alifa', 'Mojokerto, 22-06-1997', 'Surabaya, 22-12-1999', '23', '21', 'Jejakan', 'perawan', 'Islam', 'Islam', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', 'TENTARA NASIONAL INDONESIA', 'GURU', '081234567890', '081234567890', 'foto_157_RizkyFebian_20200625053445.jpg', 'foto_157_SaviraAlifa_20200625053445.jpg', 'N1_157_20200625053445.jpg', 'N3_157_20200625053445.jpg', 'ktp_157_RizkyFebian_20200625053445.jpg', 'ktp_157_SaviraAlifa_20200625053445.jpg', 'kk_157_RizkyFebian_20200625053445.jpg', 'kk_157_SaviraAlifa_20200625053445.jpg', 'aktalahir_157_RizkyFebian_20200625053445.jpg', 'aktalahir_157_SaviraAlifa_20200625053445.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pendukung_157_RizkyFebian_20200625053445.jpg', '', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 163, '2020-06-28 05:26:16', '2020-06-28 05:26:16', NULL, 'KUA', '30-06-2020 12:24:41', 'KUA Dawarblandong', 'WNI', 'WNA', '3515072206970001', '3515072206970002', 'Rizky Febian', 'Savira Alifa', 'Mojokerto, 22-06-1997', 'Surabaya, 22-12-1999', '23', '21', 'Beristri', 'perawan', 'Islam', 'Islam', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', 'DOKTER', 'GURU', '081234567890', '081234567890', 'foto_163_RizkyFebian_20200628122616.png', 'foto_163_SaviraAlifa_20200628122616.png', 'N1_163_20200628122616.png', 'N3_163_20200628122616.png', 'ktp_163_RizkyFebian_20200628122616.png', 'ktp_163_SaviraAlifa_20200628122616.png', 'kk_163_RizkyFebian_20200628122616.png', 'kk_163_SaviraAlifa_20200628122616.png', 'aktalahir_163_RizkyFebian_20200628122616.png', 'aktalahir_163_SaviraAlifa_20200628122616.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 'kedutaan_163_SaviraAlifa_20200628122616.png', '', 'passport_163_SaviraAlifa_20200628122616.png', '', 'imigrasi_163_SaviraAlifa_20200628122616.png'),
(56, 167, '2020-07-01 14:47:01', '2020-07-01 14:47:01', NULL, 'KUA', '03-07-2020 21:43:04', 'KUA Dawarblandong', 'WNI', 'WNI', '3515072206970001', '3515072206970002', 'Rizky Febian', 'Savira Alifa', 'Mojokerto, 22-06-1997', 'Surabaya, 22-12-1999', '23', '21', 'Beristri', 'perawan', 'Islam', 'Islam', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', 'ANGGOTA DPR-RI', 'PILOT', '081234567890', '081234567890', 'foto_167_RizkyFebian_20200701214701.png', 'foto_167_SaviraAlifa_20200701214701.png', 'N1_167_20200701214701.png', 'N3_167_20200701214701.png', 'ktp_167_RizkyFebian_20200701214701.png', 'ktp_167_SaviraAlifa_20200701214701.png', 'kk_167_RizkyFebian_20200701214701.png', 'kk_167_SaviraAlifa_20200701214701.png', 'aktalahir_167_RizkyFebian_20200701214701.png', 'aktalahir_167_SaviraAlifa_20200701214701.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '');

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
(126, '2/And/20200618115905', '2020-06-18 04:59:08', '2020-06-20 08:04:26', 2, 1, 4, '2020-06-18 05:19:44', NULL, NULL, NULL, 2),
(128, '1/Ahm/20200618163146', '2020-06-18 09:32:23', '2020-06-20 07:01:11', 2, 1, 4, '2020-06-18 09:39:20', NULL, NULL, NULL, 1),
(129, '1/Ahm/20200618164850', '2020-06-18 10:09:02', '2020-06-18 10:11:01', 2, 2, 4, '2020-06-18 10:11:01', NULL, NULL, NULL, 1),
(140, '1/Ahm/20200619004347', '2020-06-18 17:44:00', '2020-06-20 14:38:36', 2, 3, 5, '2020-06-20 14:00:48', NULL, NULL, '2020-06-22 07:00:00', 1),
(141, '2/And/20200619004513', '2020-06-18 17:45:31', '2020-06-20 10:53:12', 2, 1, 5, '2020-06-18 17:46:59', NULL, NULL, '2020-06-25 10:53:00', 2),
(148, '2/OFFICER/20200619080233', '2020-06-19 01:02:33', '2020-06-21 01:31:53', 2, 4, 5, NULL, NULL, NULL, '2020-07-02 01:31:00', NULL),
(149, '2/OFFICER/20200620214201', '2020-06-20 14:42:01', NULL, NULL, 6, 4, NULL, NULL, NULL, NULL, NULL),
(150, '2/OFFICER/20200621050441', '2020-06-20 22:04:41', '2020-06-20 22:05:42', 2, 5, 5, NULL, NULL, NULL, '2020-06-24 01:00:00', NULL),
(157, '1/Ahm/20200625053340', '2020-06-24 22:33:45', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, 1),
(163, '1/Ahm/20200628122435', '2020-06-28 05:24:42', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, 1),
(167, '1/Ahm/20200701214256', '2020-07-01 14:43:16', '2020-07-01 14:48:58', 2, 1, 5, '2020-07-01 14:47:56', NULL, NULL, '2020-07-01 14:48:00', 1);

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
(1235, '2020-06-18 10:10:07', NULL, NULL, 129, 33, 'Akta Lahir', 'aktalahir_129_SaviraAlifa_20200618171005.jpg'),
(1325, '2020-06-18 17:44:00', NULL, NULL, 140, 2, 'Tanggal Akad Nikah', '06-02-2020 00:43:53'),
(1326, '2020-06-18 17:44:01', NULL, NULL, 140, 3, 'Alamat Lokasi Akad Nikah', 'Masjid Sabilillah'),
(1327, '2020-06-18 17:44:47', NULL, NULL, 140, 4, 'Kewarganegaraan', 'WNI'),
(1328, '2020-06-18 17:44:47', NULL, NULL, 140, 36, 'NIK Suami', '3515072206970001'),
(1329, '2020-06-18 17:44:47', NULL, NULL, 140, 34, 'Nama Suami', 'Rizky Febian'),
(1330, '2020-06-18 17:44:47', NULL, NULL, 140, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(1331, '2020-06-18 17:44:47', NULL, NULL, 140, 12, 'Umur (tahun)', '23'),
(1332, '2020-06-18 17:44:47', NULL, NULL, 140, 16, 'Agama', 'Islam'),
(1333, '2020-06-18 17:44:47', NULL, NULL, 140, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(1334, '2020-06-18 17:44:47', NULL, NULL, 140, 20, 'Pekerjaan', 'DOKTER'),
(1335, '2020-06-18 17:44:47', NULL, NULL, 140, 22, 'Nomor HP / WA', '081234567890'),
(1336, '2020-06-18 17:44:47', NULL, NULL, 140, 24, 'Foto', 'foto_140_RizkyFebian_20200619004446.jpg'),
(1337, '2020-06-18 17:44:47', NULL, NULL, 140, 5, 'Kewarganegaraan', 'WNI'),
(1338, '2020-06-18 17:44:47', NULL, NULL, 140, 37, 'NIK Istri', '3515072206970002'),
(1339, '2020-06-18 17:44:47', NULL, NULL, 140, 35, 'Nama Istri', 'Savira Alifa'),
(1340, '2020-06-18 17:44:47', NULL, NULL, 140, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(1341, '2020-06-18 17:44:47', NULL, NULL, 140, 13, 'Umur (tahun)', '21'),
(1342, '2020-06-18 17:44:47', NULL, NULL, 140, 17, 'Agama', 'Islam'),
(1343, '2020-06-18 17:44:48', NULL, NULL, 140, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1344, '2020-06-18 17:44:48', NULL, NULL, 140, 21, 'Pekerjaan', 'GURU'),
(1345, '2020-06-18 17:44:48', NULL, NULL, 140, 23, 'Nomor HP / WA', '081234567890'),
(1346, '2020-06-18 17:44:48', NULL, NULL, 140, 25, 'Foto', 'foto_140_SaviraAlifa_20200619004446.jpg'),
(1347, '2020-06-18 17:44:48', NULL, NULL, 140, 38, 'Surat Penetapan dari Pengadilan Agama', 'SPPA_140_20200619004446.jpg'),
(1348, '2020-06-18 17:44:48', NULL, NULL, 140, 28, 'Kartu Tanda Penduduk', 'ktp_140_RizkyFebian_20200619004446.jpg'),
(1349, '2020-06-18 17:44:48', NULL, NULL, 140, 29, 'Kartu Tanda Penduduk', 'ktp_140_SaviraAlifa_20200619004446.jpg'),
(1350, '2020-06-18 17:44:48', NULL, NULL, 140, 30, 'Kartu Keluarga', 'kk_140_RizkyFebian_20200619004447.jpg'),
(1351, '2020-06-18 17:44:48', NULL, NULL, 140, 31, 'Kartu Keluarga', 'kk_140_SaviraAlifa_20200619004447.jpg'),
(1352, '2020-06-18 17:44:48', NULL, NULL, 140, 32, 'Akta Lahir', 'aktalahir_140_RizkyFebian_20200619004447.jpg'),
(1353, '2020-06-18 17:44:48', NULL, NULL, 140, 33, 'Akta Lahir', 'aktalahir_140_SaviraAlifa_20200619004447.jpg'),
(1354, '2020-06-18 17:45:31', NULL, NULL, 141, 1, 'Tempat Akad Nikah', 'Di Luar KUA'),
(1355, '2020-06-18 17:45:31', NULL, NULL, 141, 2, 'Tanggal Akad Nikah', '21-06-2020 00:45:17'),
(1356, '2020-06-18 17:45:31', NULL, NULL, 141, 3, 'Alamat Lokasi Akad Nikah', 'Masjid Baitullah'),
(1357, '2020-06-18 17:46:24', NULL, NULL, 141, 4, 'Kewarganegaraan', 'WNI'),
(1358, '2020-06-18 17:46:24', NULL, NULL, 141, 6, 'NIK Calon Suami', '3515010101970001'),
(1359, '2020-06-18 17:46:24', NULL, NULL, 141, 8, 'Nama Calon Suami', 'Andhika Pratama'),
(1360, '2020-06-18 17:46:24', NULL, NULL, 141, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 01-01-1997'),
(1361, '2020-06-18 17:46:24', NULL, NULL, 141, 12, 'Umur (tahun)', '23'),
(1362, '2020-06-18 17:46:24', NULL, NULL, 141, 14, 'Status Calon Suami', 'jejaka'),
(1363, '2020-06-18 17:46:24', NULL, NULL, 141, 16, 'Agama', 'Islam'),
(1364, '2020-06-18 17:46:24', NULL, NULL, 141, 18, 'Alamat', 'Jalan Hayam Wuruk RT 002 RW 003 Klurak Candi Mojokerto'),
(1365, '2020-06-18 17:46:25', NULL, NULL, 141, 20, 'Pekerjaan', 'PILOT'),
(1366, '2020-06-18 17:46:25', NULL, NULL, 141, 22, 'Nomor HP / WA', '081234567890'),
(1367, '2020-06-18 17:46:25', NULL, NULL, 141, 24, 'Foto', 'foto_141_AndhikaPratama_20200619004624.jpg'),
(1368, '2020-06-18 17:46:25', NULL, NULL, 141, 5, 'Kewarganegaraan', 'WNI'),
(1369, '2020-06-18 17:46:25', NULL, NULL, 141, 7, 'NIK Calon Istri', '3515010202970001'),
(1370, '2020-06-18 17:46:25', NULL, NULL, 141, 9, 'Nama Calon Istri', 'Ussy Sulistiowati'),
(1371, '2020-06-18 17:46:25', NULL, NULL, 141, 11, 'Tempat & Tanggal Lahir', 'Mojokerto, 02-02-1997'),
(1372, '2020-06-18 17:46:25', NULL, NULL, 141, 13, 'Umur (tahun)', '23'),
(1373, '2020-06-18 17:46:25', NULL, NULL, 141, 15, 'Status Calon Istri', 'perawan'),
(1374, '2020-06-18 17:46:25', NULL, NULL, 141, 17, 'Agama', 'Islam'),
(1375, '2020-06-18 17:46:25', NULL, NULL, 141, 19, 'Alamat', 'Jalan Majapahit RT 001 RW 003 Bligo Candi Mojokerto'),
(1376, '2020-06-18 17:46:25', NULL, NULL, 141, 21, 'Pekerjaan', 'PENGACARA'),
(1377, '2020-06-18 17:46:25', NULL, NULL, 141, 23, 'Nomor HP / WA', '081234567890'),
(1378, '2020-06-18 17:46:25', NULL, NULL, 141, 25, 'Foto', 'foto_141_UssySulistiowati_20200619004624.jpg'),
(1379, '2020-06-18 17:46:25', NULL, NULL, 141, 26, 'Surat Keterangan Untuk Nikah N1 (Dari Kelurahan)', 'N1_141_20200619004624.jpg'),
(1380, '2020-06-18 17:46:25', NULL, NULL, 141, 27, 'Surat Persetujuan Mempelai N3', 'N3_141_20200619004624.jpg'),
(1381, '2020-06-18 17:46:26', NULL, NULL, 141, 28, 'Kartu Tanda Penduduk', 'ktp_141_AndhikaPratama_20200619004624.jpg'),
(1382, '2020-06-18 17:46:26', NULL, NULL, 141, 29, 'Kartu Tanda Penduduk', 'ktp_141_UssySulistiowati_20200619004624.jpg'),
(1383, '2020-06-18 17:46:26', NULL, NULL, 141, 30, 'Kartu Keluarga', 'kk_141_AndhikaPratama_20200619004624.jpg'),
(1384, '2020-06-18 17:46:26', NULL, NULL, 141, 31, 'Kartu Keluarga', 'kk_141_UssySulistiowati_20200619004624.jpg'),
(1385, '2020-06-18 17:46:26', NULL, NULL, 141, 32, 'Akta Lahir', 'aktalahir_141_AndhikaPratama_20200619004624.jpg'),
(1386, '2020-06-18 17:46:26', NULL, NULL, 141, 33, 'Akta Lahir', 'aktalahir_141_UssySulistiowati_20200619004624.jpg'),
(1387, '2020-06-18 17:46:26', NULL, NULL, 141, 44, 'Surat Pernyataan dari Atasan', ''),
(1388, '2020-06-18 17:46:26', NULL, NULL, 141, 45, 'Surat Pernyataan dari Atasan', ''),
(1460, '2020-06-19 01:02:33', NULL, NULL, 148, 1, 'Tempat Akad Nikah', 'KUA'),
(1461, '2020-06-19 01:02:33', NULL, NULL, 148, 2, 'Tanggal Akad Nikah', '02-07-2020 08:02:17'),
(1462, '2020-06-19 01:02:33', NULL, NULL, 148, 3, 'Alamat Lokasi Akad Nikah', 'KUA Dawarblandong'),
(1463, '2020-06-19 01:02:33', NULL, NULL, 148, 4, 'Kewarganegaraan', 'WNI'),
(1464, '2020-06-19 01:02:33', NULL, NULL, 148, 6, 'NIK Calon Suami', '3515072206970001'),
(1465, '2020-06-19 01:02:33', NULL, NULL, 148, 8, 'Nama Calon Suami', 'Rizky Febian'),
(1466, '2020-06-19 01:02:33', NULL, NULL, 148, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(1467, '2020-06-19 01:02:33', NULL, NULL, 148, 12, 'Umur (tahun)', '23'),
(1468, '2020-06-19 01:02:33', NULL, NULL, 148, 14, 'Status Calon Suami', 'jejaka'),
(1469, '2020-06-19 01:02:33', NULL, NULL, 148, 16, 'Agama', 'Islam'),
(1470, '2020-06-19 01:02:33', NULL, NULL, 148, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(1471, '2020-06-19 01:02:33', NULL, NULL, 148, 20, 'Pekerjaan', 'DOKTER'),
(1472, '2020-06-19 01:02:34', NULL, NULL, 148, 22, 'Nomor HP / WA', '081234567890'),
(1473, '2020-06-19 01:02:34', NULL, NULL, 148, 5, 'Kewarganegaraan', 'WNI'),
(1474, '2020-06-19 01:02:34', NULL, NULL, 148, 7, 'NIK Calon Istri', '3515072206970002'),
(1475, '2020-06-19 01:02:34', NULL, NULL, 148, 9, 'Nama Calon Istri', 'Savira Alifa'),
(1476, '2020-06-19 01:02:34', NULL, NULL, 148, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(1477, '2020-06-19 01:02:34', NULL, NULL, 148, 13, 'Umur (tahun)', '21'),
(1478, '2020-06-19 01:02:34', NULL, NULL, 148, 15, 'Status Calon Istri', 'perawan'),
(1479, '2020-06-19 01:02:34', NULL, NULL, 148, 17, 'Agama', 'Islam'),
(1480, '2020-06-19 01:02:34', NULL, NULL, 148, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1481, '2020-06-19 01:02:34', NULL, NULL, 148, 21, 'Pekerjaan', 'GURU'),
(1482, '2020-06-19 01:02:34', NULL, NULL, 148, 23, 'Nomor HP / WA', '081234567890'),
(1483, '2020-06-19 01:04:07', NULL, NULL, 148, 1, 'Tempat Akad Nikah', 'KUA'),
(1484, '2020-06-19 01:04:07', NULL, NULL, 148, 2, 'Tanggal Akad Nikah', '02-07-2020 08:02:17'),
(1485, '2020-06-19 01:04:07', NULL, NULL, 148, 3, 'Alamat Lokasi Akad Nikah', 'KUA Dawarblandong'),
(1486, '2020-06-19 01:04:08', NULL, NULL, 148, 4, 'Kewarganegaraan', 'WNI'),
(1487, '2020-06-19 01:04:08', NULL, NULL, 148, 6, 'NIK Calon Suami', '3515072206970001'),
(1488, '2020-06-19 01:04:08', NULL, NULL, 148, 8, 'Nama Calon Suami', 'Rizky Febian Alamsyah'),
(1489, '2020-06-19 01:04:08', NULL, NULL, 148, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(1490, '2020-06-19 01:04:08', NULL, NULL, 148, 12, 'Umur (tahun)', '23'),
(1491, '2020-06-19 01:04:08', NULL, NULL, 148, 14, 'Status Calon Suami', 'jejaka'),
(1492, '2020-06-19 01:04:08', NULL, NULL, 148, 16, 'Agama', 'Islam'),
(1493, '2020-06-19 01:04:08', NULL, NULL, 148, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(1494, '2020-06-19 01:04:08', NULL, NULL, 148, 20, 'Pekerjaan', 'DOKTER'),
(1495, '2020-06-19 01:04:08', NULL, NULL, 148, 22, 'Nomor HP / WA', '081234567890'),
(1496, '2020-06-19 01:04:08', NULL, NULL, 148, 5, 'Kewarganegaraan', 'WNI'),
(1497, '2020-06-19 01:04:08', NULL, NULL, 148, 7, 'NIK Calon Istri', '3515072206970002'),
(1498, '2020-06-19 01:04:08', NULL, NULL, 148, 9, 'Nama Calon Istri', 'Savira Alifa'),
(1499, '2020-06-19 01:04:08', NULL, NULL, 148, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(1500, '2020-06-19 01:04:08', NULL, NULL, 148, 13, 'Umur (tahun)', '21'),
(1501, '2020-06-19 01:04:08', NULL, NULL, 148, 15, 'Status Calon Istri', 'perawan'),
(1502, '2020-06-19 01:04:08', NULL, NULL, 148, 17, 'Agama', 'Islam'),
(1503, '2020-06-19 01:04:08', NULL, NULL, 148, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1504, '2020-06-19 01:04:08', NULL, NULL, 148, 21, 'Pekerjaan', 'GURU'),
(1505, '2020-06-19 01:04:08', NULL, NULL, 148, 23, 'Nomor HP / WA', '081234567890'),
(1506, '2020-06-19 02:32:10', NULL, NULL, 148, 1, 'Tempat Akad Nikah', 'KUA'),
(1507, '2020-06-19 02:32:10', NULL, NULL, 148, 2, 'Tanggal Akad Nikah', '17-07-2020 08:02:17'),
(1508, '2020-06-19 02:32:10', NULL, NULL, 148, 3, 'Alamat Lokasi Akad Nikah', 'KUA Dawarblandong'),
(1509, '2020-06-19 02:32:10', NULL, NULL, 148, 4, 'Kewarganegaraan', 'WNI'),
(1510, '2020-06-19 02:32:10', NULL, NULL, 148, 6, 'NIK Calon Suami', '3515072206970001'),
(1511, '2020-06-19 02:32:10', NULL, NULL, 148, 8, 'Nama Calon Suami', 'Rizky Febian Alamsyah'),
(1512, '2020-06-19 02:32:10', NULL, NULL, 148, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(1513, '2020-06-19 02:32:10', NULL, NULL, 148, 12, 'Umur (tahun)', '23'),
(1514, '2020-06-19 02:32:10', NULL, NULL, 148, 14, 'Status Calon Suami', 'jejaka'),
(1515, '2020-06-19 02:32:11', NULL, NULL, 148, 16, 'Agama', 'Islam'),
(1516, '2020-06-19 02:32:11', NULL, NULL, 148, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(1517, '2020-06-19 02:32:11', NULL, NULL, 148, 20, 'Pekerjaan', 'DOKTER'),
(1518, '2020-06-19 02:32:11', NULL, NULL, 148, 22, 'Nomor HP / WA', '081234567890'),
(1519, '2020-06-19 02:32:11', NULL, NULL, 148, 5, 'Kewarganegaraan', 'WNI'),
(1520, '2020-06-19 02:32:11', NULL, NULL, 148, 7, 'NIK Calon Istri', '3515072206970002'),
(1521, '2020-06-19 02:32:11', NULL, NULL, 148, 9, 'Nama Calon Istri', 'Savira Alifa'),
(1522, '2020-06-19 02:32:11', NULL, NULL, 148, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(1523, '2020-06-19 02:32:11', NULL, NULL, 148, 13, 'Umur (tahun)', '21'),
(1524, '2020-06-19 02:32:11', NULL, NULL, 148, 15, 'Status Calon Istri', 'perawan'),
(1525, '2020-06-19 02:32:11', NULL, NULL, 148, 17, 'Agama', 'Islam'),
(1526, '2020-06-19 02:32:11', NULL, NULL, 148, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1527, '2020-06-19 02:32:11', NULL, NULL, 148, 21, 'Pekerjaan', 'GURU'),
(1528, '2020-06-19 02:32:11', NULL, NULL, 148, 23, 'Nomor HP / WA', '081234567890'),
(1529, '2020-06-19 02:32:33', NULL, NULL, 148, 1, 'Tempat Akad Nikah', 'KUA'),
(1530, '2020-06-19 02:32:34', NULL, NULL, 148, 2, 'Tanggal Akad Nikah', '17-07-2020 08:02:17'),
(1531, '2020-06-19 02:32:34', NULL, NULL, 148, 3, 'Alamat Lokasi Akad Nikah', 'KUA Dawarblandong'),
(1532, '2020-06-19 02:32:34', NULL, NULL, 148, 4, 'Kewarganegaraan', 'WNI'),
(1533, '2020-06-19 02:32:34', NULL, NULL, 148, 6, 'NIK Calon Suami', '3515072206970001'),
(1534, '2020-06-19 02:32:34', NULL, NULL, 148, 8, 'Nama Calon Suami', 'Rizky Febian Alamsyah'),
(1535, '2020-06-19 02:32:34', NULL, NULL, 148, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(1536, '2020-06-19 02:32:34', NULL, NULL, 148, 12, 'Umur (tahun)', '23'),
(1537, '2020-06-19 02:32:34', NULL, NULL, 148, 14, 'Status Calon Suami', 'jejaka'),
(1538, '2020-06-19 02:32:34', NULL, NULL, 148, 16, 'Agama', 'Islam'),
(1539, '2020-06-19 02:32:34', NULL, NULL, 148, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(1540, '2020-06-19 02:32:34', NULL, NULL, 148, 20, 'Pekerjaan', 'DOKTER'),
(1541, '2020-06-19 02:32:34', NULL, NULL, 148, 22, 'Nomor HP / WA', '085645990100'),
(1542, '2020-06-19 02:32:34', NULL, NULL, 148, 5, 'Kewarganegaraan', 'WNI'),
(1543, '2020-06-19 02:32:34', NULL, NULL, 148, 7, 'NIK Calon Istri', '3515072206970002'),
(1544, '2020-06-19 02:32:34', NULL, NULL, 148, 9, 'Nama Calon Istri', 'Savira Alifa'),
(1545, '2020-06-19 02:32:34', NULL, NULL, 148, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(1546, '2020-06-19 02:32:34', NULL, NULL, 148, 13, 'Umur (tahun)', '21'),
(1547, '2020-06-19 02:32:34', NULL, NULL, 148, 15, 'Status Calon Istri', 'perawan'),
(1548, '2020-06-19 02:32:34', NULL, NULL, 148, 17, 'Agama', 'Islam'),
(1549, '2020-06-19 02:32:34', NULL, NULL, 148, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1550, '2020-06-19 02:32:34', NULL, NULL, 148, 21, 'Pekerjaan', 'GURU'),
(1551, '2020-06-19 02:32:34', NULL, NULL, 148, 23, 'Nomor HP / WA', '081234567890'),
(1552, '2020-06-19 03:06:59', NULL, NULL, 148, 1, 'Tempat Akad Nikah', 'KUA'),
(1553, '2020-06-19 03:06:59', NULL, NULL, 148, 2, 'Tanggal Akad Nikah', '31-07-2020 08:02:17'),
(1554, '2020-06-19 03:06:59', NULL, NULL, 148, 3, 'Alamat Lokasi Akad Nikah', 'KUA Dawarblandong'),
(1555, '2020-06-19 03:06:59', NULL, NULL, 148, 4, 'Kewarganegaraan', 'WNI'),
(1556, '2020-06-19 03:06:59', NULL, NULL, 148, 6, 'NIK Calon Suami', '3515072206970001'),
(1557, '2020-06-19 03:06:59', NULL, NULL, 148, 8, 'Nama Calon Suami', 'Rizky Febian Alamsyah'),
(1558, '2020-06-19 03:06:59', NULL, NULL, 148, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(1559, '2020-06-19 03:06:59', NULL, NULL, 148, 12, 'Umur (tahun)', '23'),
(1560, '2020-06-19 03:06:59', NULL, NULL, 148, 14, 'Status Calon Suami', 'jejaka'),
(1561, '2020-06-19 03:07:00', NULL, NULL, 148, 16, 'Agama', 'Islam'),
(1562, '2020-06-19 03:07:00', NULL, NULL, 148, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(1563, '2020-06-19 03:07:00', NULL, NULL, 148, 20, 'Pekerjaan', 'DOKTER'),
(1564, '2020-06-19 03:07:00', NULL, NULL, 148, 22, 'Nomor HP / WA', '085645990100'),
(1565, '2020-06-19 03:07:00', NULL, NULL, 148, 5, 'Kewarganegaraan', 'WNI'),
(1566, '2020-06-19 03:07:00', NULL, NULL, 148, 7, 'NIK Calon Istri', '3515072206970002'),
(1567, '2020-06-19 03:07:00', NULL, NULL, 148, 9, 'Nama Calon Istri', 'Savira Alifa'),
(1568, '2020-06-19 03:07:00', NULL, NULL, 148, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(1569, '2020-06-19 03:07:00', NULL, NULL, 148, 13, 'Umur (tahun)', '21'),
(1570, '2020-06-19 03:07:00', NULL, NULL, 148, 15, 'Status Calon Istri', 'perawan'),
(1571, '2020-06-19 03:07:00', NULL, NULL, 148, 17, 'Agama', 'Islam'),
(1572, '2020-06-19 03:07:00', NULL, NULL, 148, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1573, '2020-06-19 03:07:01', NULL, NULL, 148, 21, 'Pekerjaan', 'GURU'),
(1574, '2020-06-19 03:07:01', NULL, NULL, 148, 23, 'Nomor HP / WA', '081234567890'),
(1598, '2020-06-20 14:42:01', NULL, NULL, 149, 2, 'Tanggal Akad Nikah', '17-04-2020 08:30:00'),
(1599, '2020-06-20 14:42:01', NULL, NULL, 149, 3, 'Alamat Lokasi Akad Nikah', 'Gedung Samantha Krida'),
(1600, '2020-06-20 14:42:01', NULL, NULL, 149, 4, 'Kewarganegaraan', 'WNI'),
(1601, '2020-06-20 14:42:01', NULL, NULL, 149, 36, 'NIK Suami', '3515010101970001'),
(1602, '2020-06-20 14:42:02', NULL, NULL, 149, 34, 'Nama Suami', 'Andhika Pratama'),
(1603, '2020-06-20 14:42:02', NULL, NULL, 149, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 01-01-1997'),
(1604, '2020-06-20 14:42:02', NULL, NULL, 149, 12, 'Umur (tahun)', '23'),
(1605, '2020-06-20 14:42:02', NULL, NULL, 149, 16, 'Agama', 'Islam'),
(1606, '2020-06-20 14:42:02', NULL, NULL, 149, 18, 'Alamat', 'Jalan Hayam Wuruk RT 002 RW 003 Klurak Candi Mojokerto'),
(1607, '2020-06-20 14:42:02', NULL, NULL, 149, 20, 'Pekerjaan', 'PILOT'),
(1608, '2020-06-20 14:42:02', NULL, NULL, 149, 22, 'Nomor HP / WA', '081234567890'),
(1609, '2020-06-20 14:42:02', NULL, NULL, 149, 5, 'Kewarganegaraan', 'WNI'),
(1610, '2020-06-20 14:42:02', NULL, NULL, 149, 37, 'NIK Istri', '3515010202970001'),
(1611, '2020-06-20 14:42:02', NULL, NULL, 149, 35, 'Nama Istri', 'Ussy Sulistiowati'),
(1612, '2020-06-20 14:42:02', NULL, NULL, 149, 11, 'Tempat & Tanggal Lahir', 'Mojokerto, 02-02-1997'),
(1613, '2020-06-20 14:42:02', NULL, NULL, 149, 13, 'Umur (tahun)', '23'),
(1614, '2020-06-20 14:42:02', NULL, NULL, 149, 17, 'Agama', 'Islam'),
(1615, '2020-06-20 14:42:02', NULL, NULL, 149, 19, 'Alamat', 'Jalan Majapahit RT 001 RW 003 Bligo Candi Mojokerto'),
(1616, '2020-06-20 14:42:02', NULL, NULL, 149, 21, 'Pekerjaan', 'PENGACARA'),
(1617, '2020-06-20 14:42:02', NULL, NULL, 149, 23, 'Nomor HP / WA', '081234567890'),
(1618, '2020-06-20 22:04:41', NULL, NULL, 150, 39, 'Tanggal Daftar Rujuk', '21-06-2020'),
(1619, '2020-06-20 22:04:41', NULL, NULL, 150, 40, 'Tanggal Cerai', '15-05-2020'),
(1620, '2020-06-20 22:04:41', NULL, NULL, 150, 42, 'Status Cerai', '37 hari'),
(1621, '2020-06-20 22:04:41', NULL, NULL, 150, 41, 'Masa Idah', 'Cerai Raj\'i'),
(1622, '2020-06-20 22:04:41', NULL, NULL, 150, 4, 'Kewarganegaraan', 'WNI'),
(1623, '2020-06-20 22:04:41', NULL, NULL, 150, 36, 'NIK Suami', '3515072206970001'),
(1624, '2020-06-20 22:04:41', NULL, NULL, 150, 34, 'Nama Suami', 'Rizky Febian'),
(1625, '2020-06-20 22:04:41', NULL, NULL, 150, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(1626, '2020-06-20 22:04:41', NULL, NULL, 150, 12, 'Umur (tahun)', '23'),
(1627, '2020-06-20 22:04:41', NULL, NULL, 150, 16, 'Agama', 'Islam'),
(1628, '2020-06-20 22:04:41', NULL, NULL, 150, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(1629, '2020-06-20 22:04:41', NULL, NULL, 150, 20, 'Pekerjaan', 'DOKTER'),
(1630, '2020-06-20 22:04:41', NULL, NULL, 150, 22, 'Nomor HP / WA', '081234567890'),
(1631, '2020-06-20 22:04:41', NULL, NULL, 150, 5, 'Kewarganegaraan', 'WNI'),
(1632, '2020-06-20 22:04:41', NULL, NULL, 150, 37, 'NIK Istri', '3515072206970002'),
(1633, '2020-06-20 22:04:41', NULL, NULL, 150, 35, 'Nama Istri', 'Savira Alifa'),
(1634, '2020-06-20 22:04:41', NULL, NULL, 150, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(1635, '2020-06-20 22:04:41', NULL, NULL, 150, 13, 'Umur (tahun)', '21'),
(1636, '2020-06-20 22:04:41', NULL, NULL, 150, 17, 'Agama', 'Islam'),
(1637, '2020-06-20 22:04:41', NULL, NULL, 150, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1638, '2020-06-20 22:04:41', NULL, NULL, 150, 21, 'Pekerjaan', 'GURU'),
(1639, '2020-06-20 22:04:41', NULL, NULL, 150, 23, 'Nomor HP / WA', '081234567890'),
(1640, '2020-06-20 22:07:42', NULL, NULL, 149, 2, 'Tanggal Akad Nikah', '17-04-2020 08:30:00'),
(1641, '2020-06-20 22:07:42', NULL, NULL, 149, 3, 'Alamat Lokasi Akad Nikah', 'Perumahan Griya Shanta'),
(1642, '2020-06-20 22:07:42', NULL, NULL, 149, 4, 'Kewarganegaraan', 'WNI'),
(1643, '2020-06-20 22:07:42', NULL, NULL, 149, 36, 'NIK Suami', '3515010101970001'),
(1644, '2020-06-20 22:07:42', NULL, NULL, 149, 34, 'Nama Suami', 'Andhika Pratama'),
(1645, '2020-06-20 22:07:42', NULL, NULL, 149, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 01-01-1997'),
(1646, '2020-06-20 22:07:42', NULL, NULL, 149, 12, 'Umur (tahun)', '23'),
(1647, '2020-06-20 22:07:42', NULL, NULL, 149, 16, 'Agama', 'Islam'),
(1648, '2020-06-20 22:07:42', NULL, NULL, 149, 18, 'Alamat', 'Jalan Hayam Wuruk RT 002 RW 003 Klurak Candi Mojokerto'),
(1649, '2020-06-20 22:07:42', NULL, NULL, 149, 20, 'Pekerjaan', 'PILOT'),
(1650, '2020-06-20 22:07:42', NULL, NULL, 149, 22, 'Nomor HP / WA', '081234567890'),
(1651, '2020-06-20 22:07:42', NULL, NULL, 149, 5, 'Kewarganegaraan', 'WNI'),
(1652, '2020-06-20 22:07:42', NULL, NULL, 149, 37, 'NIK Istri', '3515010202970001'),
(1653, '2020-06-20 22:07:42', NULL, NULL, 149, 35, 'Nama Istri', 'Ussy Sulistiowati'),
(1654, '2020-06-20 22:07:42', NULL, NULL, 149, 11, 'Tempat & Tanggal Lahir', 'Mojokerto, 02-02-1997'),
(1655, '2020-06-20 22:07:42', NULL, NULL, 149, 13, 'Umur (tahun)', '23'),
(1656, '2020-06-20 22:07:42', NULL, NULL, 149, 17, 'Agama', 'Islam'),
(1657, '2020-06-20 22:07:42', NULL, NULL, 149, 19, 'Alamat', 'Jalan Majapahit RT 001 RW 003 Bligo Candi Mojokerto'),
(1658, '2020-06-20 22:07:42', NULL, NULL, 149, 21, 'Pekerjaan', 'PENGACARA'),
(1659, '2020-06-20 22:07:42', NULL, NULL, 149, 23, 'Nomor HP / WA', '081234567890'),
(1774, '2020-06-24 22:33:45', NULL, NULL, 157, 1, 'Tempat Akad Nikah', 'KUA'),
(1775, '2020-06-24 22:33:45', NULL, NULL, 157, 2, 'Tanggal Akad Nikah', '27-06-2020 05:33:43'),
(1776, '2020-06-24 22:33:45', NULL, NULL, 157, 3, 'Alamat Lokasi Akad Nikah', 'KUA Dawarblandong'),
(1777, '2020-06-24 22:34:45', NULL, NULL, 157, 4, 'Kewarganegaraan', 'WNI'),
(1778, '2020-06-24 22:34:45', NULL, NULL, 157, 6, 'NIK Calon Suami', '3515072206970001'),
(1779, '2020-06-24 22:34:45', NULL, NULL, 157, 8, 'Nama Calon Suami', 'Rizky Febian'),
(1780, '2020-06-24 22:34:45', NULL, NULL, 157, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(1781, '2020-06-24 22:34:45', NULL, NULL, 157, 12, 'Umur (tahun)', '23'),
(1782, '2020-06-24 22:34:45', NULL, NULL, 157, 14, 'Status Calon Suami', 'Jejakan'),
(1783, '2020-06-24 22:34:45', NULL, NULL, 157, 16, 'Agama', 'Islam'),
(1784, '2020-06-24 22:34:45', NULL, NULL, 157, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(1785, '2020-06-24 22:34:45', NULL, NULL, 157, 20, 'Pekerjaan', 'TENTARA NASIONAL INDONESIA'),
(1786, '2020-06-24 22:34:45', NULL, NULL, 157, 22, 'Nomor HP / WA', '081234567890'),
(1787, '2020-06-24 22:34:45', NULL, NULL, 157, 24, 'Foto', 'foto_157_RizkyFebian_20200625053445.jpg'),
(1788, '2020-06-24 22:34:46', NULL, NULL, 157, 5, 'Kewarganegaraan', 'WNI'),
(1789, '2020-06-24 22:34:46', NULL, NULL, 157, 7, 'NIK Calon Istri', '3515072206970002'),
(1790, '2020-06-24 22:34:46', NULL, NULL, 157, 9, 'Nama Calon Istri', 'Savira Alifa'),
(1791, '2020-06-24 22:34:46', NULL, NULL, 157, 11, 'Tempat & Tanggal Lahir', 'Surabaya, 22-12-1999'),
(1792, '2020-06-24 22:34:46', NULL, NULL, 157, 13, 'Umur (tahun)', '21'),
(1793, '2020-06-24 22:34:46', NULL, NULL, 157, 15, 'Status Calon Istri', 'perawan'),
(1794, '2020-06-24 22:34:46', NULL, NULL, 157, 17, 'Agama', 'Islam'),
(1795, '2020-06-24 22:34:46', NULL, NULL, 157, 19, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1796, '2020-06-24 22:34:46', NULL, NULL, 157, 21, 'Pekerjaan', 'GURU'),
(1797, '2020-06-24 22:34:46', NULL, NULL, 157, 23, 'Nomor HP / WA', '081234567890'),
(1798, '2020-06-24 22:34:46', NULL, NULL, 157, 25, 'Foto', 'foto_157_SaviraAlifa_20200625053445.jpg'),
(1799, '2020-06-24 22:34:46', NULL, NULL, 157, 26, 'Surat Keterangan Untuk Nikah N1 (Dari Kelurahan)', 'N1_157_20200625053445.jpg'),
(1800, '2020-06-24 22:34:46', NULL, NULL, 157, 27, 'Surat Persetujuan Mempelai N3', 'N3_157_20200625053445.jpg'),
(1801, '2020-06-24 22:34:46', NULL, NULL, 157, 28, 'Kartu Tanda Penduduk', 'ktp_157_RizkyFebian_20200625053445.jpg'),
(1802, '2020-06-24 22:34:46', NULL, NULL, 157, 29, 'Kartu Tanda Penduduk', 'ktp_157_SaviraAlifa_20200625053445.jpg'),
(1803, '2020-06-24 22:34:46', NULL, NULL, 157, 30, 'Kartu Keluarga', 'kk_157_RizkyFebian_20200625053445.jpg'),
(1804, '2020-06-24 22:34:46', NULL, NULL, 157, 31, 'Kartu Keluarga', 'kk_157_SaviraAlifa_20200625053445.jpg'),
(1805, '2020-06-24 22:34:46', NULL, NULL, 157, 32, 'Akta Lahir', 'aktalahir_157_RizkyFebian_20200625053445.jpg'),
(1806, '2020-06-24 22:34:46', NULL, NULL, 157, 33, 'Akta Lahir', 'aktalahir_157_SaviraAlifa_20200625053445.jpg'),
(1807, '2020-06-24 22:34:46', NULL, NULL, 157, 44, 'Surat Pernyataan dari Atasan', 'pendukung_157_RizkyFebian_20200625053445.jpg'),
(1808, '2020-06-24 22:34:46', NULL, NULL, 157, 45, 'Surat Pernyataan dari Atasan', ''),
(1824, '2020-06-28 05:24:42', NULL, NULL, 163, 1, 'Tempat Akad Nikah', 'KUA'),
(1825, '2020-06-28 05:24:42', NULL, NULL, 163, 2, 'Tanggal Akad Nikah', '30-06-2020 12:24:41'),
(1826, '2020-06-28 05:24:42', NULL, NULL, 163, 3, 'Alamat Lokasi Akad Nikah', 'KUA Dawarblandong'),
(1827, '2020-06-28 05:26:16', NULL, NULL, 163, 4, 'Kewarganegaraan', 'WNI'),
(1828, '2020-06-28 05:26:16', NULL, NULL, 163, 6, 'NIK Calon Suami', '3515072206970001'),
(1829, '2020-06-28 05:26:16', NULL, NULL, 163, 8, 'Nama Calon Suami', 'Rizky Febian'),
(1830, '2020-06-28 05:26:16', NULL, NULL, 163, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(1831, '2020-06-28 05:26:16', NULL, NULL, 163, 12, 'Umur (tahun)', '23'),
(1832, '2020-06-28 05:26:16', NULL, NULL, 163, 14, 'Status Calon Suami', 'Beristri'),
(1833, '2020-06-28 05:26:16', NULL, NULL, 163, 16, 'Agama', 'Islam'),
(1834, '2020-06-28 05:26:16', NULL, NULL, 163, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(1835, '2020-06-28 05:26:16', NULL, NULL, 163, 20, 'Pekerjaan', 'DOKTER'),
(1836, '2020-06-28 05:26:16', NULL, NULL, 163, 22, 'Nomor HP / WA', '081234567890'),
(1837, '2020-06-28 05:26:16', NULL, NULL, 163, 24, 'Foto', 'foto_163_RizkyFebian_20200628122616.png'),
(1838, '2020-06-28 05:26:16', NULL, NULL, 163, 5, 'Kewarganegaraan', ''),
(1839, '2020-06-28 05:26:16', NULL, NULL, 163, 7, 'NIK Calon Istri', ''),
(1840, '2020-06-28 05:26:16', NULL, NULL, 163, 9, 'Nama Calon Istri', ''),
(1841, '2020-06-28 05:26:16', NULL, NULL, 163, 11, 'Tempat & Tanggal Lahir', 'WNA'),
(1842, '2020-06-28 05:26:17', NULL, NULL, 163, 13, 'Umur (tahun)', '3515072206970002'),
(1843, '2020-06-28 05:26:17', NULL, NULL, 163, 15, 'Status Calon Istri', 'Savira Alifa'),
(1844, '2020-06-28 05:26:17', NULL, NULL, 163, 17, 'Agama', 'Surabaya, 22-12-1999'),
(1845, '2020-06-28 05:26:17', NULL, NULL, 163, 19, 'Alamat', '21'),
(1846, '2020-06-28 05:26:17', NULL, NULL, 163, 21, 'Pekerjaan', 'perawan'),
(1847, '2020-06-28 05:26:17', NULL, NULL, 163, 23, 'Nomor HP / WA', 'Islam'),
(1848, '2020-06-28 05:26:17', NULL, NULL, 163, 25, 'Foto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1849, '2020-06-28 05:26:17', NULL, NULL, 163, 26, 'Surat Keterangan Untuk Nikah N1 (Dari Kelurahan)', 'GURU'),
(1850, '2020-06-28 05:26:17', NULL, NULL, 163, 27, 'Surat Persetujuan Mempelai N3', '081234567890'),
(1851, '2020-06-28 05:26:17', NULL, NULL, 163, 28, 'Kartu Tanda Penduduk', 'foto_163_SaviraAlifa_20200628122616.png'),
(1852, '2020-06-28 05:26:17', NULL, NULL, 163, 29, 'Kartu Tanda Penduduk', 'kedutaan_163_SaviraAlifa_20200628122616.png'),
(1853, '2020-06-28 05:26:17', NULL, NULL, 163, 30, 'Kartu Keluarga', 'passport_163_SaviraAlifa_20200628122616.png'),
(1854, '2020-06-28 05:26:17', NULL, NULL, 163, 31, 'Kartu Keluarga', 'imigrasi_163_SaviraAlifa_20200628122616.png'),
(1855, '2020-06-28 05:26:17', NULL, NULL, 163, 32, 'Akta Lahir', 'N1_163_20200628122616.png'),
(1856, '2020-06-28 05:26:17', NULL, NULL, 163, 33, 'Akta Lahir', 'N3_163_20200628122616.png'),
(1857, '2020-06-28 05:26:17', NULL, NULL, 163, 44, 'Surat Pernyataan dari Atasan', 'ktp_163_RizkyFebian_20200628122616.png'),
(1858, '2020-06-28 05:26:17', NULL, NULL, 163, 45, 'Surat Pernyataan dari Atasan', 'ktp_163_SaviraAlifa_20200628122616.png'),
(1859, '2020-06-28 05:26:17', NULL, NULL, 163, 46, 'Surat Keterangan dari Kedutaan', 'kk_163_RizkyFebian_20200628122616.png'),
(1860, '2020-06-28 05:26:17', NULL, NULL, 163, 47, 'Surat Keterangan dari Kedutaan', 'kk_163_SaviraAlifa_20200628122616.png'),
(1861, '2020-06-28 05:26:17', NULL, NULL, 163, 48, 'Passport', 'aktalahir_163_RizkyFebian_20200628122616.png'),
(1862, '2020-06-28 05:26:17', NULL, NULL, 163, 49, 'Passport', 'aktalahir_163_SaviraAlifa_20200628122616.png'),
(1863, '2020-06-28 05:26:17', NULL, NULL, 163, 50, 'Surat Izin Masuk dari Imigrasi', ''),
(1864, '2020-06-28 05:26:17', NULL, NULL, 163, 51, 'Surat Izin Masuk dari Imigrasi', ''),
(1874, '2020-07-01 14:43:16', NULL, NULL, 167, 1, 'Tempat Akad Nikah', 'KUA'),
(1875, '2020-07-01 14:43:16', NULL, NULL, 167, 2, 'Tanggal Akad Nikah', '03-07-2020 21:43:04'),
(1876, '2020-07-01 14:43:16', NULL, NULL, 167, 3, 'Alamat Lokasi Akad Nikah', 'KUA Dawarblandong'),
(1877, '2020-07-01 14:47:02', NULL, NULL, 167, 4, 'Kewarganegaraan', 'WNI'),
(1878, '2020-07-01 14:47:02', NULL, NULL, 167, 6, 'NIK Calon Suami', '3515072206970001'),
(1879, '2020-07-01 14:47:02', NULL, NULL, 167, 8, 'Nama Calon Suami', 'Rizky Febian'),
(1880, '2020-07-01 14:47:02', NULL, NULL, 167, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(1881, '2020-07-01 14:47:02', NULL, NULL, 167, 12, 'Umur (tahun)', '23'),
(1882, '2020-07-01 14:47:02', NULL, NULL, 167, 14, 'Status Calon Suami', 'Beristri'),
(1883, '2020-07-01 14:47:02', NULL, NULL, 167, 16, 'Agama', 'Islam'),
(1884, '2020-07-01 14:47:02', NULL, NULL, 167, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(1885, '2020-07-01 14:47:02', NULL, NULL, 167, 20, 'Pekerjaan', 'ANGGOTA DPR-RI'),
(1886, '2020-07-01 14:47:02', NULL, NULL, 167, 22, 'Nomor HP / WA', '081234567890'),
(1887, '2020-07-01 14:47:02', NULL, NULL, 167, 24, 'Foto', 'foto_167_RizkyFebian_20200701214701.png'),
(1888, '2020-07-01 14:47:02', NULL, NULL, 167, 5, 'Kewarganegaraan', ''),
(1889, '2020-07-01 14:47:02', NULL, NULL, 167, 7, 'NIK Calon Istri', ''),
(1890, '2020-07-01 14:47:02', NULL, NULL, 167, 9, 'Nama Calon Istri', ''),
(1891, '2020-07-01 14:47:02', NULL, NULL, 167, 11, 'Tempat & Tanggal Lahir', 'WNI'),
(1892, '2020-07-01 14:47:02', NULL, NULL, 167, 13, 'Umur (tahun)', '3515072206970002'),
(1893, '2020-07-01 14:47:03', NULL, NULL, 167, 15, 'Status Calon Istri', 'Savira Alifa'),
(1894, '2020-07-01 14:47:03', NULL, NULL, 167, 17, 'Agama', 'Surabaya, 22-12-1999'),
(1895, '2020-07-01 14:47:03', NULL, NULL, 167, 19, 'Alamat', '21'),
(1896, '2020-07-01 14:47:03', NULL, NULL, 167, 21, 'Pekerjaan', 'perawan'),
(1897, '2020-07-01 14:47:03', NULL, NULL, 167, 23, 'Nomor HP / WA', 'Islam'),
(1898, '2020-07-01 14:47:03', NULL, NULL, 167, 25, 'Foto', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto'),
(1899, '2020-07-01 14:47:03', NULL, NULL, 167, 26, 'Surat Keterangan Untuk Nikah N1 (Dari Kelurahan)', 'PILOT'),
(1900, '2020-07-01 14:47:03', NULL, NULL, 167, 27, 'Surat Persetujuan Mempelai N3', '081234567890'),
(1901, '2020-07-01 14:47:03', NULL, NULL, 167, 28, 'Kartu Tanda Penduduk', 'foto_167_SaviraAlifa_20200701214701.png'),
(1902, '2020-07-01 14:47:03', NULL, NULL, 167, 29, 'Kartu Tanda Penduduk', ''),
(1903, '2020-07-01 14:47:03', NULL, NULL, 167, 30, 'Kartu Keluarga', ''),
(1904, '2020-07-01 14:47:03', NULL, NULL, 167, 31, 'Kartu Keluarga', ''),
(1905, '2020-07-01 14:47:03', NULL, NULL, 167, 32, 'Akta Lahir', 'N1_167_20200701214701.png'),
(1906, '2020-07-01 14:47:03', NULL, NULL, 167, 33, 'Akta Lahir', 'N3_167_20200701214701.png'),
(1907, '2020-07-01 14:47:03', NULL, NULL, 167, 44, 'Surat Pernyataan dari Atasan', 'ktp_167_RizkyFebian_20200701214701.png'),
(1908, '2020-07-01 14:47:03', NULL, NULL, 167, 45, 'Surat Pernyataan dari Atasan', 'ktp_167_SaviraAlifa_20200701214701.png'),
(1909, '2020-07-01 14:47:03', NULL, NULL, 167, 46, 'Surat Keterangan dari Kedutaan', 'kk_167_RizkyFebian_20200701214701.png'),
(1910, '2020-07-01 14:47:03', NULL, NULL, 167, 47, 'Surat Keterangan dari Kedutaan', 'kk_167_SaviraAlifa_20200701214701.png'),
(1911, '2020-07-01 14:47:03', NULL, NULL, 167, 48, 'Passport', 'aktalahir_167_RizkyFebian_20200701214701.png'),
(1912, '2020-07-01 14:47:03', NULL, NULL, 167, 49, 'Passport', 'aktalahir_167_SaviraAlifa_20200701214701.png'),
(1913, '2020-07-01 14:47:03', NULL, NULL, 167, 50, 'Surat Izin Masuk dari Imigrasi', ''),
(1914, '2020-07-01 14:47:03', NULL, NULL, 167, 51, 'Surat Izin Masuk dari Imigrasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration_schedule`
--

CREATE TABLE `registration_schedule` (
  `SCHEDULE_ID` int(11) NOT NULL,
  `REG_CODE` varchar(32) NOT NULL,
  `TITLE` varchar(128) NOT NULL,
  `EVENT_TIME` varchar(5) DEFAULT NULL,
  `EVENT_SCHEDULE` date DEFAULT NULL,
  `COLOR` varchar(8) DEFAULT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL,
  `DTM_UPD` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_schedule`
--

INSERT INTO `registration_schedule` (`SCHEDULE_ID`, `REG_CODE`, `TITLE`, `EVENT_TIME`, `EVENT_SCHEDULE`, `COLOR`, `DTM_CRT`, `DTM_UPD`) VALUES
(50, '2/And/20200619004513', 'Andhika Pratama', '17:53', '2020-06-25', '#40E0D0', '2020-06-20 10:53:11', NULL),
(51, '1/Ahm/20200619004347', 'Rizky Febian', '14:00', '2020-06-22', '#FFD700', '2020-06-20 14:38:35', NULL),
(52, '2/OFFICER/20200621050441', 'Rizky Febian', '08:00', '2020-06-24', '#FF0000', '2020-06-20 22:05:40', NULL),
(53, '2/OFFICER/20200619080233', 'Rizky Febian Alamsyah', '08:31', '2020-07-02', '#40E0D0', '2020-06-21 01:31:52', NULL),
(54, '1/Ahm/20200701214256', 'Rizky Febian', '21:48', '2020-07-01', '#40E0D0', '2020-07-01 14:48:55', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `VERIF_ID` int(11) NOT NULL,
  `VERIF_TYPE` int(11) NOT NULL,
  `REG_ID` int(11) NOT NULL,
  `QUESTION_LABEL` varchar(128) NOT NULL,
  `ANSWER` varchar(256) NOT NULL,
  `DTM_CRT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`VERIF_ID`, `VERIF_TYPE`, `REG_ID`, `QUESTION_LABEL`, `ANSWER`, `DTM_CRT`) VALUES
(139, 1, 148, 'Nama Lengkap', 'Rizky Febian Alamsyah', '2020-07-01 09:23:17'),
(140, 1, 148, 'Agama', 'Islam', '2020-07-01 09:23:17'),
(141, 1, 148, 'Tempat Tanggal Lahir', 'Mojokerto, 22-06-1997', '2020-07-01 09:23:17'),
(142, 1, 148, 'Pekerjaan', 'DOKTER', '2020-07-01 09:23:18'),
(143, 1, 148, 'Nomor Induk Kependudukan (NIK)', '3515072206970001', '2020-07-01 09:23:18'),
(144, 1, 148, 'Pendidikan Terakhir', 'Diploma', '2020-07-01 09:23:18'),
(145, 1, 148, 'Kewarganegaraan', 'WNI', '2020-07-01 09:23:18'),
(146, 1, 148, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto', '2020-07-01 09:23:18'),
(147, 1, 148, 'Nama Lengkap Ayah', 'Sami\'an', '2020-07-01 09:23:18'),
(148, 1, 148, 'Tempat Tanggal Lahir Ayah', 'Mojokerto, 22-06-1967', '2020-07-01 09:23:18'),
(149, 1, 148, 'Nomor Induk Kependudukan (NIK) Ayah', '2132344546', '2020-07-01 09:23:18'),
(150, 1, 148, 'Kewarganegaraan Ayah', 'WNI', '2020-07-01 09:23:18'),
(151, 1, 148, 'Agama Ayah', 'Islam', '2020-07-01 09:23:18'),
(152, 1, 148, 'Pekerjaan Ayah', 'ANGGOTA DPD', '2020-07-01 09:23:18'),
(153, 1, 148, 'Alamat Ayah', 'Jalan disini', '2020-07-01 09:23:18'),
(154, 1, 148, 'Nama Lengkap Ibu', 'Samiati', '2020-07-01 09:23:18'),
(155, 1, 148, 'Tempat Tanggal Lahir Ibu', 'Mojokerto, 22-06-1976', '2020-07-01 09:23:18'),
(156, 1, 148, 'Nomor Induk Kependudukan (NIK) Ibu', '32423423423423', '2020-07-01 09:23:18'),
(157, 1, 148, 'Kewarganegaraan Ibu', 'WNI', '2020-07-01 09:23:18'),
(158, 1, 148, 'Agama Ibu', 'Islam', '2020-07-01 09:23:18'),
(159, 1, 148, 'Pekerjaan Ibu', 'ANGGOTA DPRD KABUPATEN/KOTA', '2020-07-01 09:23:18'),
(160, 1, 148, 'Alamat Ibu', 'Jalan disini', '2020-07-01 09:23:18'),
(161, 1, 148, 'Status Perkawinan', 'Perjaka', '2020-07-01 09:23:19'),
(162, 1, 148, 'Nama Bekas Istri', '', '2020-07-01 09:23:19'),
(163, 1, 148, 'Alamat', '', '2020-07-01 09:23:19'),
(164, 1, 148, 'Nama Akta', '', '2020-07-01 09:23:19'),
(165, 1, 148, 'Instansi', '', '2020-07-01 09:23:19'),
(166, 1, 148, 'Nomor', '', '2020-07-01 09:23:19'),
(167, 1, 148, 'Tanggal', '', '2020-07-01 09:23:19'),
(168, 1, 148, 'Jumlah Istri', '', '2020-07-01 09:23:19'),
(169, 1, 148, 'Nama Istri', '', '2020-07-01 09:23:19'),
(170, 1, 148, 'Pengadilan Pemberi Izin', '', '2020-07-01 09:23:19'),
(171, 1, 148, 'Nomor Keputusan', '', '2020-07-01 09:23:19'),
(172, 1, 148, 'Tanggal Keputusan', '', '2020-07-01 09:23:19'),
(173, 1, 148, 'Pernikahan ke-', '1', '2020-07-01 09:23:19'),
(174, 1, 148, 'Dia Sendiri', 'Ada', '2020-07-01 09:23:19'),
(175, 1, 148, 'Bekas Istri', 'Iya', '2020-07-01 09:23:19'),
(176, 1, 148, 'Istri / Istri-istri', 'Iya', '2020-07-01 09:23:19'),
(177, 1, 148, 'Pejabat Pemberi Izin', '', '2020-07-01 09:23:19'),
(178, 1, 148, 'Nomor', '', '2020-07-01 09:23:19'),
(179, 1, 148, 'Tanggal Surat', '', '2020-07-01 09:23:19'),
(180, 1, 148, 'Instansi Pemberi Izin', '', '2020-07-01 09:23:19'),
(181, 1, 148, 'Nomor', '', '2020-07-01 09:23:19'),
(182, 1, 148, 'Tanggal Surat', '', '2020-07-01 09:23:19'),
(183, 1, 148, 'Izin Pengadilan', '', '2020-07-01 09:23:19'),
(184, 1, 148, 'Nomor', '', '2020-07-01 09:23:19'),
(185, 1, 148, 'Tanggal Surat', '', '2020-07-01 09:23:19'),
(186, 1, 148, 'Nama Pemberi Izin', '', '2020-07-01 09:23:19'),
(187, 1, 148, 'Hubungan Keluarga', '', '2020-07-01 09:23:19'),
(188, 1, 148, 'Tanggal Surat', '', '2020-07-01 09:23:19'),
(189, 1, 148, 'Nama Lengkap', 'Savira Alifa', '2020-07-01 09:23:19'),
(190, 1, 148, 'Agama', 'Islam', '2020-07-01 09:23:19'),
(191, 1, 148, 'Tempat Tanggal Lahir', 'Surabaya, 22-12-1999', '2020-07-01 09:23:19'),
(192, 1, 148, 'Pekerjaan', 'GURU', '2020-07-01 09:23:19'),
(193, 1, 148, 'Nomor Induk Kependudukan (NIK)', '3515072206970002', '2020-07-01 09:23:19'),
(194, 1, 148, 'Pendidikan Terakhir', 'Diploma', '2020-07-01 09:23:19'),
(195, 1, 148, 'Kewarganegaraan', 'WNI', '2020-07-01 09:23:20'),
(196, 1, 148, 'Alamat', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', '2020-07-01 09:23:20'),
(197, 1, 148, 'Nama Lengkap Ayah', 'Bashiron', '2020-07-01 09:23:20'),
(198, 1, 148, 'Tempat Tanggal Lahir Ayah', 'Mojokerto, 22-06-1966', '2020-07-01 09:23:20'),
(199, 1, 148, 'Nomor Induk Kependudukan (NIK) Ayah', '2345678', '2020-07-01 09:23:20'),
(200, 1, 148, 'Kewarganegaraan Ayah', 'WNI', '2020-07-01 09:23:20'),
(201, 1, 148, 'Agama Ayah', 'Islam', '2020-07-01 09:23:20'),
(202, 1, 148, 'Pekerjaan Ayah', 'ANGGOTA DPRD KABUPATEN/KOTA', '2020-07-01 09:23:20'),
(203, 1, 148, 'Alamat Ayah', 'Jalan dimana', '2020-07-01 09:23:20'),
(204, 1, 148, 'Nama Lengkap Ibu', 'Hafsah', '2020-07-01 09:23:20'),
(205, 1, 148, 'Tempat Tanggal Lahir Ibu', 'Mojokerto, 22-06-1978', '2020-07-01 09:23:20'),
(206, 1, 148, 'Nomor Induk Kependudukan (NIK) Ibu', '67890', '2020-07-01 09:23:20'),
(207, 1, 148, 'Kewarganegaraan Ibu', 'WNI', '2020-07-01 09:23:20'),
(208, 1, 148, 'Agama Ibu', 'Islam', '2020-07-01 09:23:20'),
(209, 1, 148, 'Pekerjaan Ibu', 'ANGGOTA DPD', '2020-07-01 09:23:20'),
(210, 1, 148, 'Alamat Ibu', 'Jalan dimana', '2020-07-01 09:23:20'),
(211, 1, 148, 'Status Perkawinan', 'Perawan', '2020-07-01 09:23:20'),
(212, 1, 148, 'Nama Bekas Suami', '', '2020-07-01 09:23:20'),
(213, 1, 148, 'Alamat', '', '2020-07-01 09:23:20'),
(214, 1, 148, 'Nama Akta', '', '2020-07-01 09:23:20'),
(215, 1, 148, 'Instansi', '', '2020-07-01 09:23:20'),
(216, 1, 148, 'Nomor', '', '2020-07-01 09:23:20'),
(217, 1, 148, 'Tanggal', '', '2020-07-01 09:23:20'),
(218, 1, 148, 'Pernikahan ke-', '1', '2020-07-01 09:23:20'),
(219, 1, 148, 'Suami', 'Tidak Ada', '2020-07-01 09:23:20'),
(220, 1, 148, 'Bekas Istri Suami', 'Tidak', '2020-07-01 09:23:20'),
(221, 1, 148, 'Istri / Istri-istri Suami', 'Iya', '2020-07-01 09:23:20'),
(222, 1, 148, 'Pejabat Pemberi Izin', '', '2020-07-01 09:23:20'),
(223, 1, 148, 'Nomor', '', '2020-07-01 09:23:20'),
(224, 1, 148, 'Tanggal Surat', '', '2020-07-01 09:23:20'),
(225, 1, 148, 'Instansi Pemberi Izin', '', '2020-07-01 09:23:21'),
(226, 1, 148, 'Nomor', '', '2020-07-01 09:23:21'),
(227, 1, 148, 'Tanggal Surat', '', '2020-07-01 09:23:21'),
(228, 1, 148, 'Izin Pengadilan', '', '2020-07-01 09:23:21'),
(229, 1, 148, 'Nomor', '', '2020-07-01 09:23:21'),
(230, 1, 148, 'Tanggal Surat', '', '2020-07-01 09:23:21'),
(231, 1, 148, 'Nama Pemberi Izin', '', '2020-07-01 09:23:21'),
(232, 1, 148, 'Hubungan Keluarga', '', '2020-07-01 09:23:21'),
(233, 1, 148, 'Tanggal Surat', '', '2020-07-01 09:23:21'),
(234, 1, 148, 'Status Wali', 'Nasab', '2020-07-01 09:23:21'),
(235, 1, 148, 'Hubungan Wali', 'Ayah', '2020-07-01 09:23:21'),
(236, 1, 148, 'Sebab Menjadi Wali', 'Ayah', '2020-07-01 09:23:21'),
(237, 1, 148, 'Nama Lengkap', 'Sami\'an', '2020-07-01 09:23:21'),
(238, 1, 148, 'Bin', 'Parjo', '2020-07-01 09:23:21'),
(239, 1, 148, 'Nomor Induk Kependudukan (NIK)', '12345678', '2020-07-01 09:23:21'),
(240, 1, 148, 'Tempat Tanggal Lahir', 'Mojokerto, 22-06-1956', '2020-07-01 09:23:21'),
(241, 1, 148, 'Kewarganegaraan', 'WNI', '2020-07-01 09:23:21'),
(242, 1, 148, 'Agama', 'Islam', '2020-07-01 09:23:21'),
(243, 1, 148, 'Pekerjaan', 'ANGGOTA DPR-RI', '2020-07-01 09:23:21'),
(244, 1, 148, 'Alamat', 'Jalan jalan saja', '2020-07-01 09:23:21'),
(245, 1, 148, 'Nama Lengkap', 'Suprapto', '2020-07-01 09:23:21'),
(246, 1, 148, 'Nomor Induk Kependudukan (NIK)', '123243567', '2020-07-01 09:23:21'),
(247, 1, 148, 'Tempat Tanggal Lahir', 'Mojokerto, 22-06-1954', '2020-07-01 09:23:21'),
(248, 1, 148, 'Kewarganegaraan', 'WNI', '2020-07-01 09:23:21'),
(249, 1, 148, 'Agama', 'Islam', '2020-07-01 09:23:21'),
(250, 1, 148, 'Pekerjaan', 'ANGGOTA DPR-RI', '2020-07-01 09:23:21'),
(251, 1, 148, 'Alamat', 'sadasdas', '2020-07-01 09:23:22'),
(252, 1, 148, 'Tanggal Surat Kuasa', '01-07-2020', '2020-07-01 09:23:22'),
(253, 1, 148, 'Pejabat KUA yang Mengesahkan', 'Shodiq', '2020-07-01 09:23:22'),
(254, 1, 148, 'Jenis dan Jumlah', 'Alat sholat 5 juta', '2020-07-01 09:23:22'),
(255, 1, 148, 'Pembayaran', 'Tunai', '2020-07-01 09:23:22'),
(256, 1, 148, 'Nomor dan Tanggal Surat', 'dasdas', '2020-07-01 09:23:22'),
(257, 1, 148, 'Isi Perjanjian', 'sadasdsa', '2020-07-01 09:23:22'),
(258, 1, 148, 'Nama Notaris', 'sadasdsadas', '2020-07-01 09:23:22'),
(259, 1, 148, 'Nama', 'Bagyo', '2020-07-01 09:23:22'),
(260, 1, 148, 'Jabatan', 'Penghulu', '2020-07-01 09:23:22'),
(261, 1, 148, 'KUA Kecamatan/KBRI/KJRI', 'Dawar', '2020-07-01 09:23:22'),
(429, 2, 150, 'Provinsi', 'Jawa Timur', '2020-07-01 23:14:46'),
(430, 2, 150, 'Kabupaten/Kota', 'Mojokerto', '2020-07-01 23:14:46'),
(431, 2, 150, 'Kecamatan', 'Dawarblandong', '2020-07-01 23:14:46'),
(432, 2, 150, 'Nomor Akta Nikah', 'jkdhsjk', '2020-07-01 23:14:46'),
(433, 2, 150, 'Nomor Rujuk', 'kjsahkj', '2020-07-01 23:14:46'),
(434, 2, 150, 'Tanggal Rujuk', '02-07-2020', '2020-07-01 23:14:46'),
(435, 2, 150, 'Tanggal Ikrar Rujuk', '02-07-2020', '2020-07-01 23:14:46'),
(436, 2, 150, 'Rujuk ke-', '1', '2020-07-01 23:14:46'),
(437, 2, 150, 'NIK Suami', '3515072206970001', '2020-07-01 23:14:46'),
(438, 2, 150, 'Nama Lengkap Suami', 'Rizky Febian', '2020-07-01 23:14:46'),
(439, 2, 150, 'Nama Alias', 'SJKDHKJ', '2020-07-01 23:14:46'),
(440, 2, 150, 'Bin', 'KJHKJ', '2020-07-01 23:14:46'),
(441, 2, 150, 'Tempat Tanggal Lahir', 'Mojokerto, 22-06-1997', '2020-07-01 23:14:46'),
(442, 2, 150, 'Umur(tahun)', '23', '2020-07-01 23:14:46'),
(443, 2, 150, 'Agama', 'Islam', '2020-07-01 23:14:46'),
(444, 2, 150, 'Kewarganegaraan', 'WNI', '2020-07-01 23:14:46'),
(445, 2, 150, 'Pendidikan Terakhir', 'Diploma', '2020-07-01 23:14:46'),
(446, 2, 150, 'Pekerjaan', 'DOKTER', '2020-07-01 23:14:47'),
(447, 2, 150, 'Tempat Tinggal', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto', '2020-07-01 23:14:47'),
(448, 2, 150, 'Nomor HP', '081234567890', '2020-07-01 23:14:47'),
(449, 2, 150, 'Email', 'shjdhg', '2020-07-01 23:14:47'),
(450, 2, 150, 'Status', 'jjhgjhgjh', '2020-07-01 23:14:47'),
(451, 2, 150, 'NIK Istri', '3515072206970002', '2020-07-01 23:14:47'),
(452, 2, 150, 'Nama Lengkap Istri', 'Savira Alifa', '2020-07-01 23:14:47'),
(453, 2, 150, 'Nama Alias', 'sdasdasdas', '2020-07-01 23:14:47'),
(454, 2, 150, 'Bin', 'asdss', '2020-07-01 23:14:47'),
(455, 2, 150, 'Tempat Tanggal Lahir', 'Surabaya, 22-12-1999', '2020-07-01 23:14:47'),
(456, 2, 150, 'Umur(tahun)', '21', '2020-07-01 23:14:47'),
(457, 2, 150, 'Agama', 'Islam', '2020-07-01 23:14:47'),
(458, 2, 150, 'Kewarganegaraan', 'WNI', '2020-07-01 23:14:47'),
(459, 2, 150, 'Pendidikan Terakhir', 'Diploma', '2020-07-01 23:14:47'),
(460, 2, 150, 'Pekerjaan', 'GURU', '2020-07-01 23:14:47'),
(461, 2, 150, 'Tempat Tinggal', 'Jalan Yos Sudarso 22 A RT 001 RW 001 Jolotundo Jetis Mojokerto', '2020-07-01 23:14:47'),
(462, 2, 150, 'Nomor HP', '081234567890', '2020-07-01 23:14:47'),
(463, 2, 150, 'Email', 'sdsa', '2020-07-01 23:14:47'),
(464, 2, 150, 'Status', 'asdss', '2020-07-01 23:14:47'),
(465, 2, 150, 'Nama', 'Bagyo', '2020-07-01 23:14:47'),
(466, 2, 150, 'Jabatan/Pangkat', 'Penghulu', '2020-07-01 23:14:47'),
(467, 2, 150, 'NIK Saksi 1', '456789', '2020-07-01 23:14:47'),
(468, 2, 150, 'Nama Lengkap Saksi 1', 'jhgjhgjhs', '2020-07-01 23:14:47'),
(469, 2, 150, 'Tempat Tanggal Lahir', 'jhjkhj, 02-07-2020', '2020-07-01 23:14:47'),
(470, 2, 150, 'Agama', 'Islam', '2020-07-01 23:14:47'),
(471, 2, 150, 'Kewarganegaraan', 'WNI', '2020-07-01 23:14:47'),
(472, 2, 150, 'Pekerjaan', 'ANGGOTA DPRD KABUPATEN/KOTA', '2020-07-01 23:14:47'),
(473, 2, 150, 'Tempat Tinggal', 'jhkjhk', '2020-07-01 23:14:47'),
(474, 2, 150, 'NIK Saksi 2', '234567', '2020-07-01 23:14:47'),
(475, 2, 150, 'Nama Lengkap Saksi 2', 'gfgdfgdfgfd', '2020-07-01 23:14:47'),
(476, 2, 150, 'Tempat Tanggal Lahir', 'sdasdas, ', '2020-07-01 23:14:47'),
(477, 2, 150, 'Agama', 'Islam', '2020-07-01 23:14:47'),
(478, 2, 150, 'Kewarganegaraan', 'WNI', '2020-07-01 23:14:48'),
(479, 2, 150, 'Pekerjaan', 'ANGGOTA DPR-RI', '2020-07-01 23:14:48'),
(480, 2, 150, 'Tempat Tinggal', 'sdsadasdsad', '2020-07-01 23:14:48'),
(481, 2, 150, 'Pengadilan Agama', 'sadasdas', '2020-07-01 23:14:48'),
(482, 2, 150, 'Nomor', 'sadasds', '2020-07-01 23:14:48'),
(483, 2, 150, 'Tanggal Putusan', '02-07-2020', '2020-07-01 23:14:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dukcapil`
--
ALTER TABLE `dukcapil`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EVENT_ID`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`FORM_ID`),
  ADD KEY `FK_EVENT_FORM` (`EVENT_ID`);

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
  ADD KEY `FK_STATUS` (`STATUS_ID`);

--
-- Indexes for table `registration_detail`
--
ALTER TABLE `registration_detail`
  ADD PRIMARY KEY (`REG_DETAIL_ID`),
  ADD KEY `FK_REGISTRATION` (`REG_ID`),
  ADD KEY `FK_QUESTION_DET` (`QUESTION_ID`);

--
-- Indexes for table `registration_schedule`
--
ALTER TABLE `registration_schedule`
  ADD PRIMARY KEY (`SCHEDULE_ID`);

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
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`VERIF_ID`),
  ADD KEY `VERIF_TYPE_EVENT` (`VERIF_TYPE`),
  ADD KEY `VERIF_REG_ID` (`REG_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `EVENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `FORM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `MENU_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `QUESTION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `question_group`
--
ALTER TABLE `question_group`
  MODIFY `QUESTIONGROUP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `question_of_group`
--
ALTER TABLE `question_of_group`
  MODIFY `QUESTIONOFGROUP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `regdetail_tr`
--
ALTER TABLE `regdetail_tr`
  MODIFY `REGDETAIL_TR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `REG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `registration_detail`
--
ALTER TABLE `registration_detail`
  MODIFY `REG_DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1915;

--
-- AUTO_INCREMENT for table `registration_schedule`
--
ALTER TABLE `registration_schedule`
  MODIFY `SCHEDULE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `VERIF_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=484;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form`
--
ALTER TABLE `form`
  ADD CONSTRAINT `FK_EVENT_FORM` FOREIGN KEY (`EVENT_ID`) REFERENCES `event` (`EVENT_ID`);

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
  ADD CONSTRAINT `FK_STATUS` FOREIGN KEY (`STATUS_ID`) REFERENCES `registration_status` (`STATUS_ID`);

--
-- Constraints for table `registration_detail`
--
ALTER TABLE `registration_detail`
  ADD CONSTRAINT `FK_QUESTION_DET` FOREIGN KEY (`QUESTION_ID`) REFERENCES `question` (`QUESTION_ID`),
  ADD CONSTRAINT `FK_REGISTRATION` FOREIGN KEY (`REG_ID`) REFERENCES `registration` (`REG_ID`) ON DELETE CASCADE;

--
-- Constraints for table `verification`
--
ALTER TABLE `verification`
  ADD CONSTRAINT `VERIF_REG_ID` FOREIGN KEY (`REG_ID`) REFERENCES `registration` (`REG_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `VERIF_TYPE_EVENT` FOREIGN KEY (`VERIF_TYPE`) REFERENCES `event` (`EVENT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
