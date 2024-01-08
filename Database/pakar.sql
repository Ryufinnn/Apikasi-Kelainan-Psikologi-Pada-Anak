-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2015 at 10:37 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`) VALUES
('irfan', '24b90bc48a67ac676228385a7c71a119', 'irfan aryadeni', 'irfanaryadeni@ymail.com', '082381357543', 'admin', 'N'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'admin@gmail.com', '082170214495', 'admin', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `master_gejala`
--

CREATE TABLE IF NOT EXISTS `master_gejala` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `master_gejala` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gejala` (`master_gejala`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `master_gejala`
--

INSERT INTO `master_gejala` (`id`, `master_gejala`) VALUES
(1, 'Kulit mebengkak dan benjol serta gatal menyerupai gigitan serangga '),
(2, 'Pembengkakan pada kelenjar getah bening dekat area yang terkena'),
(3, 'bisul merah kecil yang nyeri'),
(4, 'Pecah menjadi sebuah luka'),
(5, 'Di sekitar luka terasa panas'),
(6, 'Nyeri pada tulang'),
(7, 'Merasa mual'),
(8, 'kehilangan nafsu makan'),
(9, 'demam'),
(10, 'Sakit tenggorokan serta kesulitan menelan'),
(11, 'leher bengkak'),
(12, 'Muntah yang sering berdarah '),
(13, 'sakit perut yang sangat hebat (melilit).'),
(14, 'Diare parah, berdarah pada tahap akhir dari penyakit'),
(15, 'flu'),
(16, 'Pola nafas tidak teratur'),
(17, 'nyeri otot yang berlangsung beberapa jam atau beberapa hari'),
(18, 'Dada terasa sesak'),
(19, 'demam tinggi'),
(20, 'Kesulitan bernapas'),
(21, 'Mengalami shock '),
(22, 'Timbulnya peradangan selaput otak'),
(23, 'Peningkatan tajam cairan cerebrospinal fluit (cairan otak)'),
(24, 'Terdapatnya darah pada CSF (cerebrospinal fluit)'),
(25, 'Hilangnya kesadara secara cepat '),
(26, 'Berlanjut dengan kematian');

-- --------------------------------------------------------

--
-- Table structure for table `master_penyakit`
--

CREATE TABLE IF NOT EXISTS `master_penyakit` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `master_penyakit` varchar(50) NOT NULL,
  `nilai_temuan` smallint(6) DEFAULT NULL,
  `definisi` text NOT NULL,
  `solusi` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `master_penyakit` (`master_penyakit`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `master_penyakit`
--

INSERT INTO `master_penyakit` (`id`, `master_penyakit`, `nilai_temuan`, `definisi`, `solusi`) VALUES
(1, 'Anthrax Kulit ', 21, 'adalah bentuk antraks yang memasuki tubuh lewat luka atau lesi lainnya pada kulit Anda. Ini adalah bentuk paling umum dari penyakit, dan juga yang paling ringan. antraks kulit jarang fatal. Tanda dan gejala antraks kulit Benjolan mengangkat gatal menyerupai gigitan serangga yang dengan cepat berkembang menjadi ruam dengan rasa sakit dengan pusat hitam.Pembengkakan pada kelenjar getah bening yang terdekat dengan ruam.', 'Solusi dari Anthrax Kulit antara lain:<br> a.	Pemberian antibiotik biasanya panisilin.<br> b.	Pemberian anti serum anthrax. <br>c.	Bagi penderita yang elergi panisilin dapat  diberikan  kloramfenikol, eritromisin, tetrasikilin dan iprofloksasin.<br> d.	Hindari menyentuh cairan dari luka anthrax.'),
(2, 'Anthrax Perut', 84, 'Antrax perut  adalah bentuk antraks yang ditularkan dengan memakan daging setengah matang dari binatang yang terinfeksi penyakit (virus) tersebut. Anthrax perut menyereng lambung dan saluran usus, anthrax ini dapat menimbulkan sakit perut yang hebat pada penderita. Anthrax perut tidak memiliki nafsu makan, perut mual, ingin muntah, dan perototan tubuh kaku.oleh karena itu, dengan alasan apapun, daging hewan yang sakit atau dicurigai dilarang untuk di konsumsi.', 'Solusi dari Anthrax Perut, antara lain:<br> a.	Pemberian antibiotik intravena <br> b.	Pemberian antibiotik panisilin,        doksisiklin, dan siprofloksasin. <br>c.	Hindari kontak dengan hewan atau manusia yang sudah terjangkit anthrax. <br>d.	Beli daging dari rumah potong hewan yang resmi. <br>e.	Masaklah daging dengan sempurna.'),
(3, 'Anthrax pernafasan ', 90, 'Anthrax dapat masuk tubuh melalui perut (proses pencernaan), paru-paru atau kulit (berkenaan dengan kulit) dan gejala-gejala penyebab klinis terpisah; jelas berdasar pada lokasi infeksi. Satu manusia yang terkena infeksi/tersebar akan secara umum dikarantina. Bagaimanapun, anthrax tidak biasanya menyebar dari satu manusia yang terinfeksi sampai manusia yang tidak terinfeksi. Tetapi jika penyakit itu pada tubuh maka berakibat fatal bagi orang tersebut. Infeksi anthrax lewat pernafasan menyebabkan peradangan paru-paru, Anthrax pernafasan ini jarang di jumpai di Indonesia.', 'Solusi untuk anthrax pernafasan, antara lain:<br>\r\na.	Pemberian antibiotik intravena.<br>\r\nb.	Pemberian vaksin <br>\r\nc.	Hindari kontak dengan hewan atau manusia yang sudah terjangkit anthrax.\r\n'),
(4, 'Anthrax Meningitis', 34, 'Anthrax tipe meningitis jarang terjadi dan merupakan salah satu komplikasi dari antraks kulit, intestinal dan inhalasi. Anthrax tipe ini juga biasanya bersifat fatal dan kematian terjadi dalam 1 – 6 hari sejak timbulnya gejala. Disamping menunjukkan gejala infeksi umum seperti demam, mialgia, ditemukan pula gejala rangsang meningeal dan gejala kenaikan tekanan intrakranial seperti sakit kepala progresif, kaku kuduk, delirium (gangguan kesadaran) dan kejang-kejang. Tingkat kematian anthrax tipe meningitis dapat mencapai 100%.', 'Solusi untuk anthrax meningitis antara lain:<br> a.	Penyuntikan antiserum dengan dosis pencegahan.<br> b.	Penyuntikan antibiotika.<br> c.	Penyuntikan kemoterapetika.');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_penyakit` smallint(6) DEFAULT NULL,
  `id_gejala` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_penyakit` (`id_penyakit`),
  KEY `id_gejala` (`id_gejala`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_penyakit`, `id_gejala`) VALUES
(131, 4, 25),
(130, 4, 5),
(129, 4, 3),
(128, 4, 1),
(127, 2, 14),
(126, 2, 13),
(125, 2, 12),
(124, 2, 11),
(123, 2, 10),
(122, 2, 9),
(121, 2, 8),
(120, 2, 7),
(119, 1, 6),
(118, 1, 5),
(117, 1, 4),
(116, 1, 3),
(115, 1, 2),
(114, 1, 1),
(113, 3, 21),
(112, 3, 18),
(111, 3, 16),
(110, 3, 15),
(109, 3, 11),
(108, 3, 5),
(107, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jk`, `alamat`, `tanggal`) VALUES
(1, 'sutijan', 'L', 'mahasiswa', '2015-06-27 20:28:39');
