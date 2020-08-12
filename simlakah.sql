-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 04:30 AM
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
('3515010101970001', 'Andhika Pratama', 'Mojokerto', '1997-01-01 02:00:00', 'Laki-laki', 'Jalan Hayam Wuruk', '002', '003', 'Klurak', 'Candi', 'Mojokerto', 'Jawa Timur', 'Islam', 'Belum Kawin', 'PILOT', 'Indonesia', '', NULL),
('3515010202970001', 'Ussy Sulistiowati', 'Mojokerto', '1997-02-02 02:00:00', 'Perempuan', 'Jalan Majapahit', '001', '003', 'Bligo', 'Candi', 'Mojokerto', 'Jawa Timur', 'Islam', 'Belum Kawin', 'PENGACARA', 'Indonesia', '', NULL),
('3515060606960006', 'Ridho Sebastian', 'Kediri', '1996-06-06 11:22:00', 'Laki-laki', 'Jalan Brontoseno 13 A', '003', '004', 'Jetis', 'Jetis', 'Sidoarjo', 'Jawa Timur', 'Islam', 'Belum Kawin', 'ARSITEK', 'Indonesia', 'Seumur Hidup', '2020-05-24 17:00:00'),
('3515070707970007', 'Salsabila Adriani', 'Surabaya', '1997-07-07 11:22:00', 'Perempuan', 'Jalan Manggis Muda 13 A', '001', '005', 'Wonocolo', 'Wonocolo', 'Surabaya', 'Jawa Timur', 'Islam', 'Belum Kawin', 'AKUNTAN', 'Indonesia', 'Seumur Hidup', '2020-05-24 17:00:00'),
('3515072206970001', 'Rizky Febian', 'Mojokerto', '1997-06-22 06:30:00', 'Laki-laki', 'Jalan Gajah Mada', '001', '001', 'Dawarblandong', 'Dawarblandong', 'Mojokerto', 'Jawa Timur', 'Islam', 'Belum Kawin', 'DOKTER', 'Indonesia', 'Seumur Hidup', '2020-05-18 00:12:00'),
('3515072206970002', 'Savira Alifa', 'Surabaya', '1999-12-22 11:22:00', 'Perempuan', 'Jalan Yos Sudarso 22 A', '001', '001', 'Jolotundo', 'Jetis', 'Mojokerto', 'Jawa Timur', 'Islam', 'Belum Kawin', 'GURU', 'Indonesia', 'Seumur Hidup', '2020-05-24 17:00:00');

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
(3, 2, '123456789', 'Iqbal Ramadhan, S.Ag.', '082233304518', 'iqbalram@gmail.com', 'Jalan Hayam Wuruk', 'iqbalram', '$2y$10$cOBZWZJkACpmbRO3h914wuEwIndld3xo56pc3SkaK9Bu5Ts/CdTBa', 'bismillah', '2020-06-17 17:00:00', NULL),
(4, 2, '01234567890', 'Muhammad Shodiq, S.Ag', '082233304518', 'shodiq@gmail.com', 'Jalan Mayjend Sungkono', 'shodiq', '$2y$10$FAy3MeGR3EjxyQRlqycIrOtbBQMVhqBw2CcjqqIx1xg.Qf.SzoHEi', 'bismillah', '2020-06-18 00:18:55', '2020-06-18 00:41:21');

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
(2, '3515010101970001', 'Andhika Pratama', 'Laki-laki', 'Mojokerto', '1997-01-01 02:00:00', 'Pilot', '081234567890', 'andhika@gmail.com', 'Jalan Majapahit RT 001 RW 001', '$2y$10$cOBZWZJkACpmbRO3h914wuEwIndld3xo56pc3SkaK9Bu5Ts/CdTBa', '2020-06-16 02:00:00', NULL),
(4, '3515060606960006', 'Ridho Sebastian', 'Laki-laki', 'Kediri', '1996-06-06 11:22:00', 'ARSITEK', '085645990100', 'ridho@gmail.com', 'Jalan Brontoseno 13 A RT 003 RW 004 Jetis Jetis Sidoarjo', '$2y$10$p0kDm/LwuJGjuD5ks6nfZ.FZ1bMmrbeIIo9PMK/C7qIDe4hoTrtDG', '2020-07-22 22:20:13', NULL);

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
(51, '1', 'FILE_ADDITIONAL_DOC_IMIGRASI_I', 'Surat Izin Masuk dari Imigrasi', '0', '0', '2020-06-27 22:02:04'),
(52, '1', 'FILE_ADDITIONAL_DOC_NUMPANG', 'Surat Pernyataan Numpang Nikah', '0', '0', '2020-08-12 00:00:00');

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
(132, 11, 51, 80, '2020-06-27 22:05:26'),
(133, 11, 52, 90, '2020-08-12 00:00:00');

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
  `FILE_ADDITIONAL_DOC_IMIGRASI_I` varchar(128) DEFAULT NULL,
  `FILE_ADDITIONAL_DOC_NUMPANG` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regdetail_tr`
--

INSERT INTO `regdetail_tr` (`REGDETAIL_TR_ID`, `REG_ID`, `DTM_CRT`, `DTM_UPD`, `USR_UPD`, `TMP_NIKAH`, `TGL_AKAD`, `ALMT_AKAD`, `KEWARGANEGARAAN_S`, `KEWARGANEGARAAN_I`, `NIK_CAL_S`, `NIK_CAL_I`, `NAMA_CAL_S`, `NAMA_CAL_I`, `TTL_S`, `TTL_I`, `UMUR_S`, `UMUR_I`, `STATUS_CAL_S`, `STATUS_CAL_I`, `AGAMA_S`, `AGAMA_I`, `ALMT_S`, `ALMT_I`, `PEKERJAAN_S`, `PEKERJAAN_I`, `NO_HP_S`, `NO_HP_I`, `FOTO_S`, `FOTO_I`, `FILE_SKUN_N1`, `FILE_SPM_N3`, `FILE_KTP_S`, `FILE_KTP_I`, `FILE_KK_S`, `FILE_KK_I`, `FILE_AKTA_LAHIR_S`, `FILE_AKTA_LAHIR_I`, `NAMA_S`, `NAMA_I`, `NIK_S`, `NIK_I`, `FILE_SPPA`, `TGL_RUJUK`, `TGL_CERAI`, `MASA_IDAH`, `STATUS_CERAI`, `FILE_AKTA_CERAI`, `FILE_ADDITIONAL_DOC_S`, `FILE_ADDITIONAL_DOC_I`, `FILE_ADDITIONAL_DOC_KEDUTAAN_S`, `FILE_ADDITIONAL_DOC_KEDUTAAN_I`, `FILE_ADDITIONAL_DOC_PASSPORT_S`, `FILE_ADDITIONAL_DOC_PASSPORT_I`, `FILE_ADDITIONAL_DOC_IMIGRASI_S`, `FILE_ADDITIONAL_DOC_IMIGRASI_I`, `FILE_ADDITIONAL_DOC_NUMPANG`) VALUES
(82, 193, '2020-08-12 02:04:20', '2020-08-12 02:04:20', NULL, 'KUA', '14-08-2020 09:03:33', 'KUA Dawarblandong', 'WNI', 'WNI', '3515072206970001', '3515010202970001', 'Rizky Febian', 'Ussy Sulistiowati', 'Mojokerto, 22-06-1997', 'Mojokerto, 02-02-1997', '23', '23', 'Jejaka', 'Perawan', 'Islam', 'Islam', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto', 'Jalan Majapahit RT 001 RW 003 Bligo Candi Mojokerto', 'DOKTER', 'PENGACARA', '081234567890', '081234567890', 'foto_193_RizkyFebian_20200812090420.png', 'foto_193_UssySulistiowati_20200812090420.png', 'N1_193_20200812090420.png', 'N3_193_20200812090420.png', 'ktp_193_RizkyFebian_20200812090420.png', 'ktp_193_UssySulistiowati_20200812090420.png', 'kk_193_RizkyFebian_20200812090420.png', 'kk_193_UssySulistiowati_20200812090420.png', 'aktalahir_193_RizkyFebian_20200812090420.png', 'aktalahir_193_UssySulistiowati_20200812090420.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'numpangnikah_193_20200812090420.png');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `REG_ID` int(11) NOT NULL,
  `REG_CODE` varchar(128) DEFAULT NULL,
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
(193, 'NKH/1/Ahm/20200812090330', '2020-08-12 02:03:34', NULL, NULL, 1, 10, NULL, NULL, NULL, NULL, 1);

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
(2262, '2020-08-12 02:03:34', NULL, NULL, 193, 1, 'Tempat Akad Nikah', 'KUA'),
(2263, '2020-08-12 02:03:34', NULL, NULL, 193, 2, 'Tanggal Akad Nikah', '14-08-2020 09:03:33'),
(2264, '2020-08-12 02:03:34', NULL, NULL, 193, 3, 'Alamat Lokasi Akad Nikah', 'KUA Dawarblandong'),
(2265, '2020-08-12 02:04:20', NULL, NULL, 193, 4, 'Kewarganegaraan', 'WNI'),
(2266, '2020-08-12 02:04:20', NULL, NULL, 193, 6, 'NIK Calon Suami', '3515072206970001'),
(2267, '2020-08-12 02:04:20', NULL, NULL, 193, 8, 'Nama Calon Suami', 'Rizky Febian'),
(2268, '2020-08-12 02:04:20', NULL, NULL, 193, 10, 'Tempat & Tanggal Lahir', 'Mojokerto, 22-06-1997'),
(2269, '2020-08-12 02:04:21', NULL, NULL, 193, 12, 'Umur (tahun)', '23'),
(2270, '2020-08-12 02:04:21', NULL, NULL, 193, 14, 'Status Calon Suami', 'Jejaka'),
(2271, '2020-08-12 02:04:21', NULL, NULL, 193, 16, 'Agama', 'Islam'),
(2272, '2020-08-12 02:04:21', NULL, NULL, 193, 18, 'Alamat', 'Jalan Gajah Mada RT 001 RW 001 Dawarblandong Dawarblandong Mojokerto'),
(2273, '2020-08-12 02:04:21', NULL, NULL, 193, 20, 'Pekerjaan', 'DOKTER'),
(2274, '2020-08-12 02:04:21', NULL, NULL, 193, 22, 'Nomor HP / WA', '081234567890'),
(2275, '2020-08-12 02:04:21', NULL, NULL, 193, 24, 'Foto', 'foto_193_RizkyFebian_20200812090420.png'),
(2276, '2020-08-12 02:04:21', NULL, NULL, 193, 5, 'Kewarganegaraan', 'WNI'),
(2277, '2020-08-12 02:04:21', NULL, NULL, 193, 7, 'NIK Calon Istri', '3515010202970001'),
(2278, '2020-08-12 02:04:21', NULL, NULL, 193, 9, 'Nama Calon Istri', 'Ussy Sulistiowati'),
(2279, '2020-08-12 02:04:21', NULL, NULL, 193, 11, 'Tempat & Tanggal Lahir', 'Mojokerto, 02-02-1997'),
(2280, '2020-08-12 02:04:21', NULL, NULL, 193, 13, 'Umur (tahun)', '23'),
(2281, '2020-08-12 02:04:21', NULL, NULL, 193, 15, 'Status Calon Istri', 'Perawan'),
(2282, '2020-08-12 02:04:21', NULL, NULL, 193, 17, 'Agama', 'Islam'),
(2283, '2020-08-12 02:04:21', NULL, NULL, 193, 19, 'Alamat', 'Jalan Majapahit RT 001 RW 003 Bligo Candi Mojokerto'),
(2284, '2020-08-12 02:04:21', NULL, NULL, 193, 21, 'Pekerjaan', 'PENGACARA'),
(2285, '2020-08-12 02:04:21', NULL, NULL, 193, 23, 'Nomor HP / WA', '081234567890'),
(2286, '2020-08-12 02:04:21', NULL, NULL, 193, 25, 'Foto', 'foto_193_UssySulistiowati_20200812090420.png'),
(2287, '2020-08-12 02:04:21', NULL, NULL, 193, 26, 'Surat Keterangan Untuk Nikah N1 (Dari Kelurahan)', 'N1_193_20200812090420.png'),
(2288, '2020-08-12 02:04:21', NULL, NULL, 193, 27, 'Surat Persetujuan Mempelai N3', 'N3_193_20200812090420.png'),
(2289, '2020-08-12 02:04:21', NULL, NULL, 193, 28, 'Kartu Tanda Penduduk', 'ktp_193_RizkyFebian_20200812090420.png'),
(2290, '2020-08-12 02:04:21', NULL, NULL, 193, 29, 'Kartu Tanda Penduduk', 'ktp_193_UssySulistiowati_20200812090420.png'),
(2291, '2020-08-12 02:04:21', NULL, NULL, 193, 30, 'Kartu Keluarga', 'kk_193_RizkyFebian_20200812090420.png'),
(2292, '2020-08-12 02:04:21', NULL, NULL, 193, 31, 'Kartu Keluarga', 'kk_193_UssySulistiowati_20200812090420.png'),
(2293, '2020-08-12 02:04:21', NULL, NULL, 193, 32, 'Akta Lahir', 'aktalahir_193_RizkyFebian_20200812090420.png'),
(2294, '2020-08-12 02:04:21', NULL, NULL, 193, 33, 'Akta Lahir', 'aktalahir_193_UssySulistiowati_20200812090420.png'),
(2295, '2020-08-12 02:04:21', NULL, NULL, 193, 44, 'Surat Pernyataan dari Atasan', ''),
(2296, '2020-08-12 02:04:21', NULL, NULL, 193, 45, 'Surat Pernyataan dari Atasan', ''),
(2297, '2020-08-12 02:04:21', NULL, NULL, 193, 46, 'Surat Keterangan dari Kedutaan', ''),
(2298, '2020-08-12 02:04:22', NULL, NULL, 193, 47, 'Surat Keterangan dari Kedutaan', ''),
(2299, '2020-08-12 02:04:22', NULL, NULL, 193, 48, 'Passport', ''),
(2300, '2020-08-12 02:04:22', NULL, NULL, 193, 49, 'Passport', ''),
(2301, '2020-08-12 02:04:22', NULL, NULL, 193, 50, 'Surat Izin Masuk dari Imigrasi', ''),
(2302, '2020-08-12 02:04:22', NULL, NULL, 193, 51, 'Surat Izin Masuk dari Imigrasi', ''),
(2303, '2020-08-12 02:04:22', NULL, NULL, 193, 52, 'Surat Pernyataan Numpang Nikah', 'numpangnikah_193_20200812090420.png');

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
(64, 'NKH/1/Ahm/20200723071302', '(09:15)   Rizky Febian', '09:15', '2020-07-26', '#40E0D0', '2020-07-23 00:15:56', '2020-07-23 00:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `registration_status`
--

CREATE TABLE `registration_status` (
  `STATUS_ID` int(11) NOT NULL,
  `STATUS_DESC` varchar(64) NOT NULL,
  `STATUS_CODE` varchar(4) NOT NULL,
  `IS_ACTIVE` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_status`
--

INSERT INTO `registration_status` (`STATUS_ID`, `STATUS_DESC`, `STATUS_CODE`, `IS_ACTIVE`) VALUES
(1, 'Pending', 'Px', '0'),
(2, 'To be check', 'TC', '1'),
(3, 'Checked', 'C', '1'),
(4, 'To be verif', 'TVR', '1'),
(5, 'Verified', 'VR', '1'),
(6, 'To be validate', 'TV', '1'),
(7, 'Valid', 'V', '1'),
(8, 'Rejected', 'Rx', '0'),
(9, 'Done', 'Dx', '1'),
(10, 'Belum Diproses', 'P', '1'),
(11, 'Ditolak', 'RJ', '1'),
(12, 'Menunggu Pembayaran', 'PC', '1'),
(13, 'Terjadwal', 'S', '1'),
(14, 'Sudah Sidang', 'SSD', '1'),
(15, 'Selesai', 'D', '1');

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
  MODIFY `PARTICIPANT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `PEKERJAAN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `QUESTION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `question_group`
--
ALTER TABLE `question_group`
  MODIFY `QUESTIONGROUP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `question_of_group`
--
ALTER TABLE `question_of_group`
  MODIFY `QUESTIONOFGROUP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `regdetail_tr`
--
ALTER TABLE `regdetail_tr`
  MODIFY `REGDETAIL_TR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `REG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `registration_detail`
--
ALTER TABLE `registration_detail`
  MODIFY `REG_DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2304;

--
-- AUTO_INCREMENT for table `registration_schedule`
--
ALTER TABLE `registration_schedule`
  MODIFY `SCHEDULE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `registration_status`
--
ALTER TABLE `registration_status`
  MODIFY `STATUS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ROLE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `VERIF_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=607;

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
