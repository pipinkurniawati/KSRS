-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2016 at 06:39 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `k-lite`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara_penyiar`
--

CREATE TABLE IF NOT EXISTS `acara_penyiar` (
  `id_acara` int(10) NOT NULL,
  `id_penyiar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acara_penyiar`
--

INSERT INTO `acara_penyiar` (`id_acara`, `id_penyiar`) VALUES
(1, 1),
(2, 1),
(56, 1),
(3, 2),
(4, 2),
(56, 2),
(5, 3),
(6, 3),
(7, 3),
(53, 3),
(8, 4),
(9, 4),
(12, 4),
(14, 4),
(50, 4),
(8, 5),
(9, 5),
(12, 5),
(15, 6),
(16, 6),
(10, 8),
(11, 8),
(13, 8),
(53, 8),
(10, 9),
(13, 9),
(51, 9),
(11, 10),
(14, 10),
(31, 11),
(32, 11),
(33, 11),
(34, 11),
(35, 11),
(36, 11),
(37, 11),
(17, 12),
(18, 12),
(19, 12),
(43, 14),
(44, 14),
(45, 14),
(46, 14),
(47, 14),
(29, 15),
(30, 15),
(43, 16),
(44, 16),
(45, 16),
(46, 16),
(48, 16),
(47, 17),
(48, 17),
(54, 19),
(29, 20),
(30, 20),
(57, 20),
(57, 21),
(38, 22),
(39, 22),
(40, 22),
(41, 22),
(42, 22),
(38, 23),
(39, 23),
(40, 23),
(56, 23),
(30, 28),
(41, 28),
(42, 28),
(52, 29),
(26, 32),
(27, 32),
(28, 32),
(26, 35),
(27, 35),
(28, 35),
(55, 36),
(52, 37),
(20, 41),
(21, 41),
(23, 41),
(24, 41),
(20, 42),
(21, 42),
(22, 42),
(24, 42),
(20, 43),
(22, 43),
(23, 43),
(24, 43),
(49, 43),
(25, 45),
(25, 50),
(57, 50);

-- --------------------------------------------------------

--
-- Table structure for table `calon_penyiar`
--

CREATE TABLE IF NOT EXISTS `calon_penyiar` (
`id_calon` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `agama` enum('Islam','Protestan','Katolik','Hindu','Buddha') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `status` enum('Menikah','Lajang','Pernah Menikah') NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `akun_fb` varchar(50) NOT NULL,
  `shift_mulai` time NOT NULL,
  `shift_selesai` time NOT NULL,
  `alasan` varchar(140) NOT NULL,
  `status_aplikasi` enum('diterima','ditolak') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_penyiar`
--

INSERT INTO `calon_penyiar` (`id_calon`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `pendidikan`, `status`, `no_hp`, `email`, `akun_fb`, `shift_mulai`, `shift_selesai`, `alasan`, `status_aplikasi`) VALUES
(1, 'Kimberly Anderson', '1987-08-12', 'Perempuan', 'Islam', 'Jalan Rajawali Timur No.17', 'SMA', 'Menikah', '088888888801', 'skelly0@godaddy.com', 'Kimberly Anderson', '06:32:00', '14:30:00', 'Lorem Ipsum ', NULL),
(2, 'Jeffrey Hernandez', '1989-05-03', 'Laki-Laki', 'Protestan', 'Jalan Tudung Sari No.18', 'S1', 'Menikah', '088888888802', 'canderson1@imgur.com', 'Jeffrey Hernandez', '08:00:00', '15:00:00', 'Lorem Ipsum dolor sit amet', NULL),
(3, 'Alan Lynch', '1981-09-09', 'Laki-Laki', 'Katolik', 'Jalan Pinguin No.19', 'S1', 'Menikah', '088888888803', 'bharvey2@cnbc.com', 'Alan Lynch', '14:00:00', '20:00:00', 'pengen kaya', NULL),
(4, 'Carol Young', '1991-05-07', 'Perempuan', 'Hindu', 'Jalan Pelikan No.20', 'SMA', 'Lajang', '088888888804', 'jdaniels3@google.ru', 'Carol Young', '08:00:00', '09:00:00', 'mau eksis', NULL),
(5, 'Joseph Reid', '1974-02-06', 'Laki-Laki', 'Buddha', 'Jalan Elang No.21', 'SMA', 'Pernah Menikah', '088888888805', 'wroberts4@virginia.edu', 'Joseph Reid', '12:00:00', '16:00:00', 'Lorem Ipsum ', NULL),
(6, 'Martin Bowman', '1985-08-01', 'Laki-Laki', 'Islam', 'Jalan Dadali No.22', 'SMK', 'Menikah', '088888888806', 'dmontgomery5@netvibes.com', 'Martin Bowman', '04:09:00', '10:00:00', 'Lorem Ipsum dolor sit amet', NULL),
(7, 'Thomas Larson', '1982-03-06', 'Laki-Laki', 'Protestan', 'Jalan Andir No.23', 'SMA', 'Menikah', '088888888807', 'rstanley6@odnoklassniki.ru', 'Thomas Larson', '12:00:00', '21:00:00', 'pengen kaya', NULL),
(8, 'Ernest Nelson', '1985-02-08', 'Perempuan', 'Katolik', 'Jalan Cibadak No.24', 'S1', 'Menikah', '088888888808', 'jharvey7@angelfire.com', 'Ernest Nelson', '07:00:00', '12:00:00', 'mau eksis', NULL),
(9, 'Margaret Hayes', '1983-08-04', 'Perempuan', 'Hindu', 'Jalan Abdul Rahman Saleh No.25', 'S1', 'Menikah', '088888888809', 'edaniels8@blogtalkradio.com', 'Margaret Hayes', '09:00:00', '13:00:00', 'Lorem Ipsum ', NULL),
(10, 'Bruce Austin', '1982-02-01', 'Laki-Laki', 'Buddha', 'Jalan Karang Tinggal No.26', 'SMA', 'Menikah', '088888888810', 'dstone9@amazon.co.jp', 'Bruce Austin', '17:00:00', '21:00:00', 'Lorem Ipsum dolor sit amet', NULL),
(11, 'Johnny Brown', '1994-01-07', 'Laki-Laki', 'Islam', 'Jalan Cipedes Tengah No.27', 'SMA', 'Lajang', '088888888811', 'rwrighta@google.es', 'Johnny Brown', '10:00:00', '17:00:00', 'pengen kaya', NULL),
(12, 'Mark Lewis', '1995-03-08', 'Laki-Laki', 'Protestan', 'Jalan Damar No.28', 'SMK', 'Lajang', '088888888812', 'nkingb@ox.ac.uk', 'Mark Lewis', '07:00:00', '18:00:00', 'mau eksis', NULL),
(13, 'Howard Gray', '1988-01-02', 'Laki-Laki', 'Katolik', 'Jalan Sukamaju No.29', 'SMA', 'Menikah', '088888888813', 'egrahamc@artisteer.com', 'Howard Gray', '06:00:00', '12:00:00', 'Lorem Ipsum ', NULL),
(14, 'William Davis', '1986-04-12', 'Laki-Laki', 'Hindu', 'Jalan Sukagalih No.30', 'S1', 'Menikah', '088888888814', 'ckennedyd@mayoclinic.com', 'William Davis', '16:00:00', '17:00:00', 'Lorem Ipsum dolor sit amet', NULL),
(15, 'Adam Chapman', '1984-02-06', 'Laki-Laki', 'Buddha', 'Jalan Sirnamanah No.31', 'S1', 'Menikah', '088888888815', 'jturnere@jugem.jp', 'Adam Chapman', '16:00:00', '19:00:00', 'pengen kaya', NULL),
(16, 'Catherine Fox', '1991-09-07', 'Perempuan', 'Islam', 'Jalan Sederhana No.32', 'SMA', 'Lajang', '088888888816', 'ggonzalezf@eepurl.com', 'Catherine Fox', '07:00:00', '09:00:00', 'mau eksis', NULL),
(17, 'Victor Olson', '1974-06-08', 'Laki-Laki', 'Protestan', 'Jalan Alamanda No.33', 'SMA', 'Pernah Menikah', '088888888817', 'rbanksg@mapy.cz', 'Victor Olson', '06:00:00', '12:00:00', 'Lorem Ipsum ', NULL),
(18, 'Jimmy Duncan', '1989-02-02', 'Laki-Laki', 'Katolik', 'Jalan Cisitu Lama No.14', 'SMK', 'Lajang', '088888888818', 'mramosh@kickstarter.com', 'Jimmy Duncan', '05:00:00', '07:00:00', 'Lorem Ipsum dolor sit amet', NULL),
(19, 'Lois Hudson', '1988-06-02', 'Laki-Laki', 'Hindu', 'Jalan Dakota No.20', 'SMA', 'Lajang', '088888888819', 'shanseni@myspace.com', 'Lois Hudson', '00:00:00', '21:00:00', 'pengen kaya', NULL),
(20, 'Martin Richards', '1985-08-12', 'Laki-Laki', 'Buddha', 'Jalan Arjuna No.116', 'S1', 'Menikah', '088888888820', 'iharrisonj@un.org', 'Martin Richards', '21:00:00', '23:00:00', 'mau eksis', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_siar`
--

CREATE TABLE IF NOT EXISTS `jadwal_siar` (
`id_acara` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tipe` enum('Reguler','Khusus') NOT NULL,
  `jenis` enum('Religius','Berita','Hiburan') NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `waktu_mulai_tayang` time DEFAULT NULL,
  `waktu_selesai_tayang` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_siar`
--

INSERT INTO `jadwal_siar` (`id_acara`, `nama`, `tipe`, `jenis`, `hari`, `waktu_mulai_tayang`, `waktu_selesai_tayang`) VALUES
(1, 'Renungan Pagi', 'Reguler', 'Religius', 'Senin', '05:30:00', '07:00:00'),
(2, 'Renungan Pagi', 'Reguler', 'Religius', 'Selasa', '05:30:00', '07:00:00'),
(3, 'Renungan Pagi', 'Reguler', 'Religius', 'Rabu', '05:30:00', '07:00:00'),
(4, 'Renungan Pagi', 'Reguler', 'Religius', 'Kamis', '05:30:00', '07:00:00'),
(5, 'Renungan Pagi', 'Reguler', 'Religius', 'Jumat', '05:30:00', '07:00:00'),
(6, 'Renungan Pagi', 'Reguler', 'Religius', 'Sabtu', '05:30:00', '07:00:00'),
(7, 'Renungan Pagi', 'Reguler', 'Religius', 'Minggu', '05:30:00', '07:00:00'),
(8, 'Berita Indonesia', 'Reguler', 'Berita', 'Senin', '07:00:00', '08:00:00'),
(9, 'Berita Indonesia', 'Reguler', 'Berita', 'Selasa', '07:00:00', '08:00:00'),
(10, 'Berita Indonesia', 'Reguler', 'Berita', 'Rabu', '07:00:00', '08:00:00'),
(11, 'Berita Indonesia', 'Reguler', 'Berita', 'Kamis', '07:00:00', '08:00:00'),
(12, 'Berita Indonesia', 'Reguler', 'Berita', 'Jumat', '07:00:00', '08:00:00'),
(13, 'Berita Indonesia', 'Reguler', 'Berita', 'Sabtu', '07:00:00', '08:00:00'),
(14, 'Berita Indonesia', 'Reguler', 'Berita', 'Minggu', '07:00:00', '08:00:00'),
(15, 'Buletin Pagi', 'Reguler', 'Berita', 'Senin', '08:00:00', '09:00:00'),
(16, 'Buletin Pagi', 'Reguler', 'Berita', 'Selasa', '08:00:00', '09:00:00'),
(17, 'Buletin Pagi', 'Reguler', 'Berita', 'Rabu', '08:00:00', '09:00:00'),
(18, 'Buletin Pagi', 'Reguler', 'Berita', 'Kamis', '08:00:00', '09:00:00'),
(19, 'Buletin Pagi', 'Reguler', 'Berita', 'Jumat', '08:00:00', '09:00:00'),
(20, 'Morning Talk Show', 'Reguler', 'Hiburan', 'Senin', '09:00:00', '11:00:00'),
(21, 'Morning Talk Show', 'Reguler', 'Hiburan', 'Selasa', '09:00:00', '11:00:00'),
(22, 'Morning Talk Show', 'Reguler', 'Hiburan', 'Rabu', '09:00:00', '11:00:00'),
(23, 'Morning Talk Show', 'Reguler', 'Hiburan', 'Kamis', '09:00:00', '11:00:00'),
(24, 'Morning Talk Show', 'Reguler', 'Hiburan', 'Jumat', '09:00:00', '11:00:00'),
(25, 'Morning Talk Show', 'Reguler', 'Hiburan', 'Sabtu', '09:00:00', '11:00:00'),
(26, 'Lo Request Gue Putar', 'Reguler', 'Hiburan', 'Senin', '12:00:00', '15:00:00'),
(27, 'Lo Request Gue Putar', 'Reguler', 'Hiburan', 'Selasa', '12:00:00', '15:00:00'),
(28, 'Lo Request Gue Putar', 'Reguler', 'Hiburan', 'Rabu', '12:00:00', '15:00:00'),
(29, 'Lo Request Gue Putar', 'Reguler', 'Hiburan', 'Kamis', '12:00:00', '15:00:00'),
(30, 'Lo Request Gue Putar', 'Reguler', 'Hiburan', 'Jumat', '12:00:00', '15:00:00'),
(31, 'Working Spirit', 'Reguler', 'Hiburan', 'Senin', '15:00:00', '17:00:00'),
(32, 'Working Spirit', 'Reguler', 'Hiburan', 'Selasa', '15:00:00', '17:00:00'),
(33, 'Working Spirit', 'Reguler', 'Hiburan', 'Rabu', '15:00:00', '17:00:00'),
(34, 'Working Spirit', 'Reguler', 'Hiburan', 'Kamis', '15:00:00', '17:00:00'),
(35, 'Working Spirit', 'Reguler', 'Hiburan', 'Jumat', '15:00:00', '17:00:00'),
(36, 'Working Spirit', 'Reguler', 'Hiburan', 'Sabtu', '15:00:00', '17:00:00'),
(37, 'Working Spirit', 'Reguler', 'Hiburan', 'Minggu', '15:00:00', '17:00:00'),
(38, 'Buletin Sore', 'Reguler', 'Berita', 'Senin', '17:00:00', '17:30:00'),
(39, 'Buletin Sore', 'Reguler', 'Berita', 'Selasa', '17:00:00', '17:30:00'),
(40, 'Buletin Sore', 'Reguler', 'Berita', 'Rabu', '17:00:00', '17:30:00'),
(41, 'Buletin Sore', 'Reguler', 'Berita', 'Kamis', '17:00:00', '17:30:00'),
(42, 'Buletin Sore', 'Reguler', 'Berita', 'Jumat', '17:00:00', '17:30:00'),
(43, 'Music Party Channel', 'Reguler', 'Hiburan', 'Senin', '19:00:00', '22:00:00'),
(44, 'Music Party Channel', 'Reguler', 'Hiburan', 'Selasa', '19:00:00', '22:00:00'),
(45, 'Music Party Channel', 'Reguler', 'Hiburan', 'Rabu', '19:00:00', '22:00:00'),
(46, 'Music Party Channel', 'Reguler', 'Hiburan', 'Kamis', '19:00:00', '22:00:00'),
(47, 'Music Party Channel', 'Reguler', 'Hiburan', 'Jumat', '19:00:00', '22:00:00'),
(48, 'Music Party Channel', 'Reguler', 'Hiburan', 'Sabtu', '19:00:00', '22:00:00'),
(49, 'Morning DJ', 'Khusus', 'Hiburan', 'Minggu', '08:00:00', '10:00:00'),
(50, 'Top Indo Sepekan', 'Khusus', 'Hiburan', 'Minggu', '12:00:00', '13:00:00'),
(51, 'Semua Tentang Cinta', 'Khusus', 'Hiburan', 'Minggu', '10:00:00', '12:00:00'),
(52, 'Bingkisan Buat Kawan', 'Khusus', 'Hiburan', 'Senin', '12:00:00', '13:00:00'),
(53, 'The Greatest Hits', 'Khusus', 'Hiburan', 'Sabtu', '19:00:00', '20:00:00'),
(54, 'By Request', 'Khusus', 'Hiburan', 'Rabu', '13:00:00', '15:00:00'),
(55, 'Weekend Request', 'Khusus', 'Hiburan', 'Kamis', '13:00:00', '15:00:00'),
(56, 'Oriental Night', 'Khusus', 'Hiburan', 'Jumat', '23:00:00', '01:00:00'),
(57, 'Weekend Party', 'Khusus', 'Hiburan', 'Sabtu', '10:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `penyiar`
--

CREATE TABLE IF NOT EXISTS `penyiar` (
`id_penyiar` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `agama` enum('Islam','Protestan','Katolik','Hindu','Buddha') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` enum('Menikah','Lajang','Pernah Menikah') NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `akun_fb` varchar(50) NOT NULL,
  `tahun_masuk` year(4) NOT NULL DEFAULT '2016'
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyiar`
--

INSERT INTO `penyiar` (`id_penyiar`, `nama`, `tempat_tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `status`, `no_hp`, `email`, `akun_fb`, `tahun_masuk`) VALUES
(1, 'Willie Hunter', '4/10/1968 12:00:00 AM', 'Laki-Laki', 'Islam', 'Jalan Cisitu Lama No.14', 'Menikah', '088888888821', 'shunterk@time.com', 'Willie Hunter', 2015),
(2, 'Christina Dixon', '3/9/1966 12:00:00 AM', 'Perempuan', 'Protestan', 'Jalan Dakota No.20', 'Menikah', '088888888822', 'rarmstrongl@4shared.com', 'Christina Dixon', 2016),
(3, 'Joyce Johnson', '2/11/1966 12:00:00 AM', 'Perempuan', 'Katolik', 'Jalan Arjuna No.116', 'Menikah', '088888888823', 'psimpsonm@va.gov', 'Joyce Johnson', 2016),
(4, 'Irene Oliver', '5/6/1960', 'Perempuan', 'Hindu', 'Jalan Rajawali Timur No.17', 'Lajang', '088888888824', 'cgriffinn@sourceforge.net', 'Irene Oliver', 2016),
(5, 'Craig Gardner', '9/5/1987 12:00:00 AM', 'Laki-Laki', 'Buddha', 'Jalan Tudung Sari No.18', 'Pernah Menikah', '088888888825', 'cmurphyo@sohu.com', 'Craig Gardner', 1999),
(6, 'Jane Price', '4/4/1978 12:00:00 AM', 'Perempuan', 'Islam', 'Jalan Pinguin No.19', 'Menikah', '088888888826', 'dwagnerp@theglobeandmail.com', 'Jane Price', 2016),
(7, 'Philip Walker', '2/6/1970 12:00:00 AM', 'Laki-Laki', 'Protestan', 'Jalan Pelikan No.20', 'Menikah', '088888888827', 'mhicksq@desdev.cn', 'Philip Walker', 2016),
(8, 'Debra Larson', '9/12/1983 12:00:00 AM', 'Perempuan', 'Katolik', 'Jalan Elang No.21', 'Menikah', '088888888828', 'showardr@elegantthemes.com', 'Debra Larson', 2016),
(9, 'Evelyn Williamson', '5/6/1975 12:00:00 AM', 'Perempuan', 'Hindu', 'Jalan Dadali No.22', 'Menikah', '088888888829', 'hfishers@msu.edu', 'Evelyn Williamson', 2016),
(10, 'Victor Gomez', '1/7/1974 12:00:00 AM', 'Laki-Laki', 'Buddha', 'Jalan Andir No.23', 'Menikah', '088888888831', 'jramost@umich.edu', 'Victor Gomez', 2016),
(11, 'Katherine Mason', '3/9/1987 12:00:00 AM', 'Perempuan', 'Islam', 'Jalan Cibadak No.24', 'Lajang', '088888888832', 'dsandersu@answers.com', 'Katherine Mason', 2016),
(12, 'Stephanie Bryant', '6/4/1971 12:00:00 AM', 'Perempuan', 'Protestan', 'Jalan Abdul Rahman Saleh No.25', 'Lajang', '088888888833', 'sparkerv@1und1.de', 'Stephanie Bryant', 2016),
(13, 'Christina Nichols', '4/12/1965 12:00:00 AM', 'Perempuan', 'Katolik', 'Jalan Karang Tinggal No.26', 'Menikah', '088888888834', 'irichardsonw@cdc.gov', 'Christina Nichols', 2016),
(14, 'Stephanie Stewart', '12/7/1983 12:00:00 AM', 'Perempuan', 'Hindu', 'Jalan Cipedes Tengah No.27', 'Menikah', '088888888835', 'tchavezx@themeforest.net', 'Stephanie Stewart', 2016),
(15, 'Richard Mason', '11/7/1966', 'Laki-Laki', 'Buddha', 'Jalan Damar No.28', 'Menikah', '088888888836', 'dhudsony@mlb.com', 'Richard Mason', 2016),
(16, 'William Reed', '1/2/1982 12:00:00 AM', 'Laki-Laki', 'Islam', 'Jalan Sukamaju No.29', 'Lajang', '088888888837', 'rturnerz@hhs.gov', 'William Reed', 2016),
(17, 'Gloria Bryant', '6/11/1966 12:00:00 AM', 'Laki-Laki', 'Protestan', 'Jalan Sukagalih No.30', 'Pernah Menikah', '088888888838', 'wlawson10@edublogs.org', 'Gloria Bryant', 2016),
(18, 'Nicholas Moreno', '6/6/1983 12:00:00 AM', 'Laki-Laki', 'Islam', 'Jalan Sirnamanah No.31', 'Lajang', '088888888839', 'jmartinez11@dyndns.org', 'Nicholas Moreno', 2016),
(19, 'Anna Marshall', '3/11/1988 12:00:00 AM', 'Perempuan', 'Protestan', 'Jalan Sederhana No.32', 'Lajang', '088888888840', 'ahernandez12@columbia.edu', 'Anna Marshall', 2016),
(20, 'George Stone', '12/12/1972 12:00:00 AM', 'Laki-Laki', 'Katolik', 'Jalan Alamanda No.33', 'Menikah', '088888888841', 'jdunn13@barnesandnoble.com', 'George Stone', 2016),
(21, 'James Hernandez', '6/11/1974 12:00:00 AM', 'Laki-Laki', 'Hindu', 'Jalan Cisitu Lama No.14', 'Menikah', '088888888842', 'jkelley14@virginia.edu', 'James Hernandez', 2016),
(22, 'William Kim', '1/7/1988 12:00:00 AM', 'Laki-Laki', 'Buddha', 'Jalan Dakota No.20', 'Menikah', '088888888843', 'chudson15@hibu.com', 'William Kim', 2016),
(23, 'Ashley Johnston', '8/4/1985 12:00:00 AM', 'Perempuan', 'Islam', 'Jalan Arjuna No.116', 'Menikah', '088888888844', 'dbryant16@delicious.com', 'Ashley Johnston', 2016),
(24, 'Russell Rose', '6/6/1968', 'Laki-Laki', 'Protestan', 'Jalan Rajawali Timur No.17', 'Lajang', '088888888845', 'cgardner17@weibo.com', 'Russell Rose', 2016),
(25, 'Edward Grant', '4/1/1966 12:00:00 AM', 'Laki-Laki', 'Katolik', 'Jalan Tudung Sari No.18', 'Pernah Menikah', '088888888846', 'kparker18@homestead.com', 'Edward Grant', 2016),
(26, 'Brenda Meyer', '3/10/1984 12:00:00 AM', 'Laki-Laki', 'Hindu', 'Jalan Pinguin No.19', 'Menikah', '088888888847', 'lsims19@ow.ly', 'Brenda Meyer', 2016),
(27, 'Randy Franklin', '2/8/1969 12:00:00 AM', 'Laki-Laki', 'Buddha', 'Jalan Pelikan No.20', 'Menikah', '088888888848', 'pramos1a@1688.com', 'Randy Franklin', 2016),
(28, 'Christina Phillips', '3/9/1965 12:00:00 AM', 'Laki-Laki', 'Islam', 'Jalan Elang No.21', 'Menikah', '088888888849', 'cwallace1b@cbsnews.com', 'Christina Phillips', 2016),
(29, 'Janet Mccoy', '4/9/1964', 'Perempuan', 'Protestan', 'Jalan Dadali No.22', 'Menikah', '088888888850', 'kmccoy1c@arstechnica.com', 'Janet Mccoy', 2016),
(30, 'Christine Sanders', '11/9/1977 12:00:00 AM', 'Perempuan', 'Katolik', 'Jalan Andir No.23', 'Menikah', '088888888851', 'blarson1d@sciencedirect.com', 'Christine Sanders', 2016),
(31, 'Albert Ford', '8/2/1991 12:00:00 AM', 'Laki-Laki', 'Hindu', 'Jalan Cibadak No.24', 'Lajang', '088888888852', 'gjacobs1e@cnn.com', 'Albert Ford', 2016),
(32, 'Anthony Jenkins', '8/2/1972 12:00:00 AM', 'Laki-Laki', 'Buddha', 'Jalan Abdul Rahman Saleh No.25', 'Lajang', '088888888853', 'rreyes1f@chronoengine.com', 'Anthony Jenkins', 2016),
(33, 'Mildred Medina', '11/3/1980 12:00:00 AM', 'Perempuan', 'Islam', 'Jalan Karang Tinggal No.26', 'Menikah', '088888888854', 'hmcdonald1g@oracle.com', 'Mildred Medina', 2016),
(34, 'Tammy Brooks', '2/7/1985 12:00:00 AM', 'Perempuan', 'Protestan', 'Jalan Cipedes Tengah No.27', 'Menikah', '088888888856', 'bromero1h@globo.com', 'Tammy Brooks', 2016),
(35, 'Phyllis Nelson', '9/4/1966 12:00:00 AM', 'Laki-Laki', 'Islam', 'Jalan Damar No.28', 'Menikah', '088888888857', 'emorgan1i@addtoany.com', 'Phyllis Nelson', 2016),
(36, 'Tammy Dunn', '8/8/1968 12:00:00 AM', 'Perempuan', 'Protestan', 'Jalan Sukamaju No.29', 'Lajang', '088888888858', 'gburton1j@theguardian.com', 'Tammy Dunn', 2016),
(37, 'Annie Duncan', '1/6/1989 12:00:00 AM', 'Perempuan', 'Katolik', 'Jalan Sukagalih No.30', 'Pernah Menikah', '088888888859', 'srice1k@businesswire.com', 'Annie Duncan', 2016),
(38, 'Raymond Ramos', '5/6/1963 12:00:00 AM', 'Laki-Laki', 'Hindu', 'Jalan Sirnamanah No.31', 'Lajang', '088888888860', 'mwillis1l@feedburner.com', 'Raymond Ramos', 2016),
(39, 'Catherine Robinson', '3/10/1960 12:00:00 AM', 'Perempuan', 'Buddha', 'Jalan Sederhana No.32', 'Lajang', '088888888861', 'chawkins1m@amazon.co.jp', 'Catherine Robinson', 2016),
(40, 'Anna Cook', '3/10/1968', 'Perempuan', 'Islam', 'Jalan Alamanda No.33', 'Menikah', '088888888862', 'sfrazier1n@delicious.com', 'Anna Cook', 2016),
(41, 'Jack Lee', '8/3/1982 12:00:00 AM', 'Laki-Laki', 'Protestan', 'Jalan Cisitu Lama No.14', 'Menikah', '088888888863', 'gallen1o@tripadvisor.com', 'Jack Lee', 2016),
(42, 'Judy Reid', '9/7/1984 12:00:00 AM', 'Laki-Laki', 'Katolik', 'Jalan Dakota No.20', 'Menikah', '088888888864', 'dharrison1p@taobao.com', 'Judy Reid', 2016),
(43, 'Kathy Rice', '2/2/1979 12:00:00 AM', 'Perempuan', 'Hindu', 'Jalan Arjuna No.116', 'Menikah', '088888888865', 'sholmes1q@thetimes.co.uk', 'Kathy Rice', 2016),
(44, 'Shirley Foster', '1/8/1968', 'Perempuan', 'Buddha', 'Jalan Rajawali Timur No.17', 'Lajang', '088888888866', 'slee1r@posterous.com', 'Shirley Foster', 2016),
(45, 'Marilyn Gonzalez', '8/4/1969 12:00:00 AM', 'Perempuan', 'Islam', 'Jalan Tudung Sari No.18', 'Pernah Menikah', '0888888888567', 'afisher1s@instagram.com', 'Marilyn Gonzalez', 2016),
(46, 'George Youngs', '4/7/1977 12:00:00 AM', 'Perempuan', 'Protestan', 'Jalan Pinguin No.19', 'Menikah', '088888888868', 'rross1t@dropbox.com', 'George Youngs', 2016),
(47, 'Gregory Wells', '2/1/1988 12:00:00 AM', 'Laki-Laki', 'Katolik', 'Jalan Pelikan No.20', 'Menikah', '088888888869', 'jtucker1u@vkontakte.ru', 'Gregory Wells', 2016),
(48, 'Ryan Green', '7/10/1984 12:00:00 AM', 'Laki-Laki', 'Hindu', 'Jalan Elang No.21', 'Menikah', '088888888870', 'cwood1v@wix.com', 'Ryan Green', 2016),
(49, 'Margaret King', '2/1/1991 12:00:00 AM', 'Laki-Laki', 'Buddha', 'Jalan Dadali No.22', 'Menikah', '088888888871', 'rowens1w@archive.org', 'Margaret King', 2016),
(50, 'Randy Tucker', '6/8/1973 12:00:00 AM', 'Laki-Laki', 'Islam', 'Jalan Andir No.23', 'Menikah', '088888888872', 'emurphy1x@networkadvertising.org', 'Randy Tucker', 2016);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara_penyiar`
--
ALTER TABLE `acara_penyiar`
 ADD PRIMARY KEY (`id_acara`,`id_penyiar`), ADD KEY `id_penyiar` (`id_penyiar`);

--
-- Indexes for table `calon_penyiar`
--
ALTER TABLE `calon_penyiar`
 ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `jadwal_siar`
--
ALTER TABLE `jadwal_siar`
 ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `penyiar`
--
ALTER TABLE `penyiar`
 ADD PRIMARY KEY (`id_penyiar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_penyiar`
--
ALTER TABLE `calon_penyiar`
MODIFY `id_calon` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `jadwal_siar`
--
ALTER TABLE `jadwal_siar`
MODIFY `id_acara` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `penyiar`
--
ALTER TABLE `penyiar`
MODIFY `id_penyiar` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `acara_penyiar`
--
ALTER TABLE `acara_penyiar`
ADD CONSTRAINT `fk_acarapenyiar_jadwalsiar` FOREIGN KEY (`id_acara`) REFERENCES `jadwal_siar` (`id_acara`) ON UPDATE CASCADE,
ADD CONSTRAINT `fk_acarapenyiar_penyiar` FOREIGN KEY (`id_penyiar`) REFERENCES `penyiar` (`id_penyiar`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
