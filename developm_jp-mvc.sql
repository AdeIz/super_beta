-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 03:15 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `developm_jp-mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) UNSIGNED NOT NULL,
  `ads_type_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `img_path` varchar(150) NOT NULL,
  `ads_link` varchar(150) NOT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ads_type`
--

CREATE TABLE `ads_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads_type`
--

INSERT INTO `ads_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'adstypename1111', '2016-11-10 03:22:43', '2016-11-11 20:07:34'),
(2, 'testing', '2016-11-10 03:22:55', '2016-11-10 03:22:55'),
(3, 'testing1', '2016-11-10 03:23:03', '2016-11-10 03:23:03'),
(4, 'test', '2017-03-03 10:41:50', '2017-03-03 10:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `province_id` int(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `province_id`, `created_at`, `updated_at`) VALUES
(1, 'Kabupaten Aceh Barat', 1, NULL, NULL),
(2, 'Kabupaten Aceh Barat Daya', 1, NULL, NULL),
(3, 'Kabupaten Aceh Besar', 1, NULL, NULL),
(4, 'Kabupaten Aceh Jaya', 1, NULL, NULL),
(5, 'Kabupaten Aceh Selatan', 1, NULL, NULL),
(6, 'Kabupaten Aceh Singkil', 1, NULL, NULL),
(7, 'Kabupaten Aceh Tamiang', 1, NULL, NULL),
(8, 'Kabupaten Aceh Tengah', 1, NULL, NULL),
(9, 'Kabupaten Aceh Tenggara', 1, NULL, NULL),
(10, 'Kabupaten Aceh Timur', 1, NULL, NULL),
(11, 'Kabupaten Aceh Utara', 1, NULL, NULL),
(12, 'Kabupaten Bener Meriah', 1, NULL, NULL),
(13, 'Kabupaten Bireuen', 1, NULL, NULL),
(14, 'Kabupaten Gayo Luwes', 1, NULL, NULL),
(15, 'Kabupaten Nagan Raya', 1, NULL, NULL),
(16, 'Kabupaten Pidie', 1, NULL, NULL),
(17, 'Kabupaten Pidie Jaya', 1, NULL, NULL),
(18, 'Kabupaten Simeulue', 1, NULL, NULL),
(19, 'Kota Banda Aceh', 1, NULL, NULL),
(20, 'Kota Langsa', 1, NULL, NULL),
(21, 'Kota Lhokseumawe', 1, NULL, NULL),
(22, 'Kota Sabang', 1, NULL, NULL),
(23, 'Kota Subulussalam', 1, NULL, NULL),
(24, 'Kabupaten Asahan', 2, NULL, NULL),
(25, 'Kabupaten Batubara', 2, NULL, NULL),
(26, 'Kabupaten Dairi', 2, NULL, NULL),
(27, 'Kabupaten Deli Serdang', 2, NULL, NULL),
(28, 'Kabupaten Humbang Hasundutan', 2, NULL, NULL),
(29, 'Kabupaten Karo', 2, NULL, NULL),
(30, 'Kabupaten Labuhan Batu', 2, NULL, NULL),
(31, 'Kabupaten Labuhanbatu Selatan', 2, NULL, NULL),
(32, 'Kabupaten Labuhanbatu Utara', 2, NULL, NULL),
(33, 'Kabupaten Langkat', 2, NULL, NULL),
(34, 'Kabupaten Mandailing Natal', 2, NULL, NULL),
(35, 'Kabupaten Nias', 2, NULL, NULL),
(36, 'Kabupaten Nias Barat', 2, NULL, NULL),
(37, 'Kabupaten Nias Selatan', 2, NULL, NULL),
(38, 'Kabupaten Nias Utara', 2, NULL, NULL),
(39, 'Kabupaten Padang Lawas', 2, NULL, NULL),
(40, 'Kabupaten Padang Lawas Utara', 2, NULL, NULL),
(41, 'Kabupaten Pakpak Barat', 2, NULL, NULL),
(42, 'Kabupaten Samosir', 2, NULL, NULL),
(43, 'Kabupaten Serdang Bedagai', 2, NULL, NULL),
(44, 'Kabupaten Simalungun', 2, NULL, NULL),
(45, 'Kabupaten Tapanuli Selatan', 2, NULL, NULL),
(46, 'Kabupaten Tapanuli Tengah', 2, NULL, NULL),
(47, 'Kabupaten Tapanuli Utara', 2, NULL, NULL),
(48, 'Kabupaten Toba Samosir', 2, NULL, NULL),
(49, 'Kota Binjai', 2, NULL, NULL),
(50, 'Kota Gunung Sitoli', 2, NULL, NULL),
(51, 'Kota Medan', 2, NULL, NULL),
(52, 'Kota Padangsidempuan', 2, NULL, NULL),
(53, 'Kota Pematang Siantar', 2, NULL, NULL),
(54, 'Kota Sibolga', 2, NULL, NULL),
(55, 'Kota Tanjung Balai', 2, NULL, NULL),
(56, 'Kota Tebing Tinggi', 2, NULL, NULL),
(57, 'Kabupaten Agam', 3, NULL, NULL),
(58, 'Kabupaten Dharmas Raya', 3, NULL, NULL),
(59, 'Kabupaten Kepulauan Mentawai', 3, NULL, NULL),
(60, 'Kabupaten Lima Puluh Kota', 3, NULL, NULL),
(61, 'Kabupaten Padang Pariaman', 3, NULL, NULL),
(62, 'Kabupaten Pasaman', 3, NULL, NULL),
(63, 'Kabupaten Pasaman Barat', 3, NULL, NULL),
(64, 'Kabupaten Pesisir Selatan', 3, NULL, NULL),
(65, 'Kabupaten Sijunjung', 3, NULL, NULL),
(66, 'Kabupaten Solok', 3, NULL, NULL),
(67, 'Kabupaten Solok Selatan', 3, NULL, NULL),
(68, 'Kabupaten Tanah Datar', 3, NULL, NULL),
(69, 'Kota Bukittinggi', 3, NULL, NULL),
(70, 'Kota Padang', 3, NULL, NULL),
(71, 'Kota Padang Panjang', 3, NULL, NULL),
(72, 'Kota Pariaman', 3, NULL, NULL),
(73, 'Kota Payakumbuh', 3, NULL, NULL),
(74, 'Kota Sawah Lunto', 3, NULL, NULL),
(75, 'Kota Solok', 3, NULL, NULL),
(76, 'Kabupaten Bengkalis', 4, NULL, NULL),
(77, 'Kabupaten Indragiri Hilir', 4, NULL, NULL),
(78, 'Kabupaten Indragiri Hulu', 4, NULL, NULL),
(79, 'Kabupaten Kampar', 4, NULL, NULL),
(80, 'Kabupaten Kuantan Singingi', 4, NULL, NULL),
(81, 'Kabupaten Meranti', 4, NULL, NULL),
(82, 'Kabupaten Pelalawan', 4, NULL, NULL),
(83, 'Kabupaten Rokan Hilir', 4, NULL, NULL),
(84, 'Kabupaten Rokan Hulu', 4, NULL, NULL),
(85, 'Kabupaten Siak', 4, NULL, NULL),
(86, 'Kota Dumai', 4, NULL, NULL),
(87, 'Kota Pekanbaru', 4, NULL, NULL),
(88, 'Kabupaten Bintan', 5, NULL, NULL),
(89, 'Kabupaten Karimun', 5, NULL, NULL),
(90, 'Kabupaten Kepulauan Anambas', 5, NULL, NULL),
(91, 'Kabupaten Lingga', 5, NULL, NULL),
(92, 'Kabupaten Natuna', 5, NULL, NULL),
(93, 'Kota Batam', 5, NULL, NULL),
(94, 'Kota Tanjung Pinang', 5, NULL, NULL),
(95, 'Kabupaten Bangka', 6, NULL, NULL),
(96, 'Kabupaten Bangka Barat', 6, NULL, NULL),
(97, 'Kabupaten Bangka Selatan', 6, NULL, NULL),
(98, 'Kabupaten Bangka Tengah', 6, NULL, NULL),
(99, 'Kabupaten Belitung', 6, NULL, NULL),
(100, 'Kabupaten Belitung Timur', 6, NULL, NULL),
(101, 'Kota Pangkal Pinang', 6, NULL, NULL),
(102, 'Kabupaten Kerinci', 7, NULL, NULL),
(103, 'Kabupaten Merangin', 7, NULL, NULL),
(104, 'Kabupaten Sarolangun', 7, NULL, NULL),
(105, 'Kabupaten Batang Hari', 7, NULL, NULL),
(106, 'Kabupaten Muaro Jambi', 7, NULL, NULL),
(107, 'Kabupaten Tanjung Jabung Timur', 7, NULL, NULL),
(108, 'Kabupaten Tanjung Jabung Barat', 7, NULL, NULL),
(109, 'Kabupaten Tebo', 7, NULL, NULL),
(110, 'Kabupaten Bungo', 7, NULL, NULL),
(111, 'Kota Jambi', 7, NULL, NULL),
(112, 'Kota Sungai Penuh', 7, NULL, NULL),
(113, 'Kabupaten Bengkulu Selatan', 8, NULL, NULL),
(114, 'Kabupaten Bengkulu Tengah', 8, NULL, NULL),
(115, 'Kabupaten Bengkulu Utara', 8, NULL, NULL),
(116, 'Kabupaten Kaur', 8, NULL, NULL),
(117, 'Kabupaten Kepahiang', 8, NULL, NULL),
(118, 'Kabupaten Lebong', 8, NULL, NULL),
(119, 'Kabupaten Mukomuko', 8, NULL, NULL),
(120, 'Kabupaten Rejang Lebong', 8, NULL, NULL),
(121, 'Kabupaten Seluma', 8, NULL, NULL),
(122, 'Kota Bengkulu', 8, NULL, NULL),
(123, 'Kabupaten Banyuasin', 9, NULL, NULL),
(124, 'Kabupaten Empat Lawang', 9, NULL, NULL),
(125, 'Kabupaten Lahat', 9, NULL, NULL),
(126, 'Kabupaten Muara Enim', 9, NULL, NULL),
(127, 'Kabupaten Musi Banyu Asin', 9, NULL, NULL),
(128, 'Kabupaten Musi Rawas', 9, NULL, NULL),
(129, 'Kabupaten Ogan Ilir', 9, NULL, NULL),
(130, 'Kabupaten Ogan Komering Ilir', 9, NULL, NULL),
(131, 'Kabupaten Ogan Komering Ulu', 9, NULL, NULL),
(132, 'Kabupaten Ogan Komering Ulu Se', 9, NULL, NULL),
(133, 'Kabupaten Ogan Komering Ulu Ti', 9, NULL, NULL),
(134, 'Kota Lubuklinggau', 9, NULL, NULL),
(135, 'Kota Pagar Alam', 9, NULL, NULL),
(136, 'Kota Palembang', 9, NULL, NULL),
(137, 'Kota Prabumulih', 9, NULL, NULL),
(138, 'Kabupaten Lampung Barat', 10, NULL, NULL),
(139, 'Kabupaten Lampung Selatan', 10, NULL, NULL),
(140, 'Kabupaten Lampung Tengah', 10, NULL, NULL),
(141, 'Kabupaten Lampung Timur', 10, NULL, NULL),
(142, 'Kabupaten Lampung Utara', 10, NULL, NULL),
(143, 'Kabupaten Mesuji', 10, NULL, NULL),
(144, 'Kabupaten Pesawaran', 10, NULL, NULL),
(145, 'Kabupaten Pringsewu', 10, NULL, NULL),
(146, 'Kabupaten Tanggamus', 10, NULL, NULL),
(147, 'Kabupaten Tulang Bawang', 10, NULL, NULL),
(148, 'Kabupaten Tulang Bawang Barat', 10, NULL, NULL),
(149, 'Kabupaten Way Kanan', 10, NULL, NULL),
(150, 'Kota Bandar Lampung', 10, NULL, NULL),
(151, 'Kota Metro', 10, NULL, NULL),
(152, 'Kabupaten Lebak', 11, NULL, NULL),
(153, 'Kabupaten Pandeglang', 11, NULL, NULL),
(154, 'Kabupaten Serang', 11, NULL, NULL),
(155, 'Kabupaten Tangerang', 11, NULL, NULL),
(156, 'Kota Cilegon', 11, NULL, NULL),
(157, 'Kota Serang', 11, NULL, NULL),
(158, 'Kota Tangerang', 11, NULL, NULL),
(159, 'Kota Tangerang Selatan', 11, NULL, NULL),
(160, 'Kabupaten Adm. Kepulauan Serib', 12, NULL, NULL),
(161, 'Kota Jakarta Barat', 12, NULL, NULL),
(162, 'Kota Jakarta Pusat', 12, NULL, NULL),
(163, 'Kota Jakarta Selatan', 12, NULL, NULL),
(164, 'Kota Jakarta Timur', 12, NULL, NULL),
(165, 'Kota Jakarta Utara', 12, NULL, NULL),
(166, 'Kabupaten Bandung', 13, NULL, NULL),
(167, 'Kabupaten Bandung Barat', 13, NULL, NULL),
(168, 'Kabupaten Bekasi', 13, NULL, NULL),
(169, 'Kabupaten Bogor', 13, NULL, NULL),
(170, 'Kabupaten Ciamis', 13, NULL, NULL),
(171, 'Kabupaten Cianjur', 13, NULL, NULL),
(172, 'Kabupaten Cirebon', 13, NULL, NULL),
(173, 'Kabupaten Garut', 13, NULL, NULL),
(174, 'Kabupaten Indramayu', 13, NULL, NULL),
(175, 'Kabupaten Karawang', 13, NULL, NULL),
(176, 'Kabupaten Kuningan', 13, NULL, NULL),
(177, 'Kabupaten Majalengka', 13, NULL, NULL),
(178, 'Kabupaten Purwakarta', 13, NULL, NULL),
(179, 'Kabupaten Subang', 13, NULL, NULL),
(180, 'Kabupaten Sukabumi', 13, NULL, NULL),
(181, 'Kabupaten Sumedang', 13, NULL, NULL),
(182, 'Kabupaten Tasikmalaya', 13, NULL, NULL),
(183, 'Kota Bandung', 13, NULL, NULL),
(184, 'Kota Banjar', 13, NULL, NULL),
(185, 'Kota Bekasi', 13, NULL, NULL),
(186, 'Kota Bogor', 13, NULL, NULL),
(187, 'Kota Cimahi', 13, NULL, NULL),
(188, 'Kota Cirebon', 13, NULL, NULL),
(189, 'Kota Depok', 13, NULL, NULL),
(190, 'Kota Sukabumi', 13, NULL, NULL),
(191, 'Kota Tasikmalaya', 13, NULL, NULL),
(192, 'Kabupaten Banjarnegara', 14, NULL, NULL),
(193, 'Kabupaten Banyumas', 14, NULL, NULL),
(194, 'Kabupaten Batang', 14, NULL, NULL),
(195, 'Kabupaten Blora', 14, NULL, NULL),
(196, 'Kabupaten Boyolali', 14, NULL, NULL),
(197, 'Kabupaten Brebes', 14, NULL, NULL),
(198, 'Kabupaten Cilacap', 14, NULL, NULL),
(199, 'Kabupaten Demak', 14, NULL, NULL),
(200, 'Kabupaten Grobogan', 14, NULL, NULL),
(201, 'Kabupaten Jepara', 14, NULL, NULL),
(202, 'Kabupaten Karanganyar', 14, NULL, NULL),
(203, 'Kabupaten Kebumen', 14, NULL, NULL),
(204, 'Kabupaten Kendal', 14, NULL, NULL),
(205, 'Kabupaten Klaten', 14, NULL, NULL),
(206, 'Kabupaten Kota Tegal', 14, NULL, NULL),
(207, 'Kabupaten Kudus', 14, NULL, NULL),
(208, 'Kabupaten Magelang', 14, NULL, NULL),
(209, 'Kabupaten Pati', 14, NULL, NULL),
(210, 'Kabupaten Pekalongan', 14, NULL, NULL),
(211, 'Kabupaten Pemalang', 14, NULL, NULL),
(212, 'Kabupaten Purbalingga', 14, NULL, NULL),
(213, 'Kabupaten Purworejo', 14, NULL, NULL),
(214, 'Kabupaten Rembang', 14, NULL, NULL),
(215, 'Kabupaten Semarang', 14, NULL, NULL),
(216, 'Kabupaten Sragen', 14, NULL, NULL),
(217, 'Kabupaten Sukoharjo', 14, NULL, NULL),
(218, 'Kabupaten Temanggung', 14, NULL, NULL),
(219, 'Kabupaten Wonogiri', 14, NULL, NULL),
(220, 'Kabupaten Wonosobo', 14, NULL, NULL),
(221, 'Kota Magelang', 14, NULL, NULL),
(222, 'Kota Pekalongan', 14, NULL, NULL),
(223, 'Kota Salatiga', 14, NULL, NULL),
(224, 'Kota Semarang', 14, NULL, NULL),
(225, 'Kota Surakarta', 14, NULL, NULL),
(226, 'Kota Tegal', 14, NULL, NULL),
(227, 'Kabupaten Bantul', 15, NULL, NULL),
(228, 'Kabupaten Gunung Kidul', 15, NULL, NULL),
(229, 'Kabupaten Kulon Progo', 15, NULL, NULL),
(230, 'Kabupaten Sleman', 15, NULL, NULL),
(231, 'Kota Yogyakarta', 15, NULL, NULL),
(232, 'Kabupaten Bangkalan', 16, NULL, NULL),
(233, 'Kabupaten Banyuwangi', 16, NULL, NULL),
(234, 'Kabupaten Blitar', 16, NULL, NULL),
(235, 'Kabupaten Bojonegoro', 16, NULL, NULL),
(236, 'Kabupaten Bondowoso', 16, NULL, NULL),
(237, 'Kabupaten Gresik', 16, NULL, NULL),
(238, 'Kabupaten Jember', 16, NULL, NULL),
(239, 'Kabupaten Jombang', 16, NULL, NULL),
(240, 'Kabupaten Kediri', 16, NULL, NULL),
(241, 'Kabupaten Lamongan', 16, NULL, NULL),
(242, 'Kabupaten Lumajang', 16, NULL, NULL),
(243, 'Kabupaten Madiun', 16, NULL, NULL),
(244, 'Kabupaten Magetan', 16, NULL, NULL),
(245, 'Kabupaten Malang', 16, NULL, NULL),
(246, 'Kabupaten Mojokerto', 16, NULL, NULL),
(247, 'Kabupaten Nganjuk', 16, NULL, NULL),
(248, 'Kabupaten Ngawi', 16, NULL, NULL),
(249, 'Kabupaten Pacitan', 16, NULL, NULL),
(250, 'Kabupaten Pamekasan', 16, NULL, NULL),
(251, 'Kabupaten Pasuruan', 16, NULL, NULL),
(252, 'Kabupaten Ponorogo', 16, NULL, NULL),
(253, 'Kabupaten Probolinggo', 16, NULL, NULL),
(254, 'Kabupaten Sampang', 16, NULL, NULL),
(255, 'Kabupaten Sidoarjo', 16, NULL, NULL),
(256, 'Kabupaten Situbondo', 16, NULL, NULL),
(257, 'Kabupaten Sumenep', 16, NULL, NULL),
(258, 'Kabupaten Trenggalek', 16, NULL, NULL),
(259, 'Kabupaten Tuban', 16, NULL, NULL),
(260, 'Kabupaten Tulungagung', 16, NULL, NULL),
(261, 'Kota Batu', 16, NULL, NULL),
(262, 'Kota Blitar', 16, NULL, NULL),
(263, 'Kota Kediri', 16, NULL, NULL),
(264, 'Kota Madiun', 16, NULL, NULL),
(265, 'Kota Malang', 16, NULL, NULL),
(266, 'Kota Mojokerto', 16, NULL, NULL),
(267, 'Kota Pasuruan', 16, NULL, NULL),
(268, 'Kota Probolinggo', 16, NULL, NULL),
(269, 'Kota Surabaya', 16, NULL, NULL),
(270, 'Kabupaten Badung', 17, NULL, NULL),
(271, 'Kabupaten Bangli', 17, NULL, NULL),
(272, 'Kabupaten Buleleng', 17, NULL, NULL),
(273, 'Kabupaten Gianyar', 17, NULL, NULL),
(274, 'Kabupaten Jembrana', 17, NULL, NULL),
(275, 'Kabupaten Karang Asem', 17, NULL, NULL),
(276, 'Kabupaten Klungkung', 17, NULL, NULL),
(277, 'Kabupaten Tabanan', 17, NULL, NULL),
(278, 'Kota Denpasar', 17, NULL, NULL),
(279, 'Kabupaten Bima', 18, NULL, NULL),
(280, 'Kabupaten Dompu', 18, NULL, NULL),
(281, 'Kabupaten Lombok Barat', 18, NULL, NULL),
(282, 'Kabupaten Lombok Tengah', 18, NULL, NULL),
(283, 'Kabupaten Lombok Timur', 18, NULL, NULL),
(284, 'Kabupaten Lombok Utara', 18, NULL, NULL),
(285, 'Kabupaten Sumbawa', 18, NULL, NULL),
(286, 'Kabupaten Sumbawa Barat', 18, NULL, NULL),
(287, 'Kota Bima', 18, NULL, NULL),
(288, 'Kota Mataram', 18, NULL, NULL),
(289, 'Kabupaten Alor', 19, NULL, NULL),
(290, 'Kabupaten Belu', 19, NULL, NULL),
(291, 'Kabupaten Ende', 19, NULL, NULL),
(292, 'Kabupaten Flores Timur', 19, NULL, NULL),
(293, 'Kabupaten Kupang', 19, NULL, NULL),
(294, 'Kabupaten Lembata', 19, NULL, NULL),
(295, 'Kabupaten Manggarai', 19, NULL, NULL),
(296, 'Kabupaten Manggarai Barat', 19, NULL, NULL),
(297, 'Kabupaten Manggarai Timur', 19, NULL, NULL),
(298, 'Kabupaten Nagekeo', 19, NULL, NULL),
(299, 'Kabupaten Ngada', 19, NULL, NULL),
(300, 'Kabupaten Rote Ndao', 19, NULL, NULL),
(301, 'Kabupaten Sabu Raijua', 19, NULL, NULL),
(302, 'Kabupaten Sikka', 19, NULL, NULL),
(303, 'Kabupaten Sumba Barat', 19, NULL, NULL),
(304, 'Kabupaten Sumba Barat Daya', 19, NULL, NULL),
(305, 'Kabupaten Sumba Tengah', 19, NULL, NULL),
(306, 'Kabupaten Sumba Timur', 19, NULL, NULL),
(307, 'Kabupaten Timor Tengah Selatan', 19, NULL, NULL),
(308, 'Kabupaten Timor Tengah Utara', 19, NULL, NULL),
(309, 'Kota Kupang', 19, NULL, NULL),
(310, 'Kabupaten Bengkayang', 20, NULL, NULL),
(311, 'Kabupaten Kapuas Hulu', 20, NULL, NULL),
(312, 'Kabupaten Kayong Utara', 20, NULL, NULL),
(313, 'Kabupaten Ketapang', 20, NULL, NULL),
(314, 'Kabupaten Kubu Raya', 20, NULL, NULL),
(315, 'Kabupaten Landak', 20, NULL, NULL),
(316, 'Kabupaten Melawi', 20, NULL, NULL),
(317, 'Kabupaten Pontianak', 20, NULL, NULL),
(318, 'Kabupaten Sambas', 20, NULL, NULL),
(319, 'Kabupaten Sanggau', 20, NULL, NULL),
(320, 'Kabupaten Sekadau', 20, NULL, NULL),
(321, 'Kabupaten Sintang', 20, NULL, NULL),
(322, 'Kota Pontianak', 20, NULL, NULL),
(323, 'Kota Singkawang', 20, NULL, NULL),
(324, 'Kabupaten Barito Selatan', 21, NULL, NULL),
(325, 'Kabupaten Barito Timur', 21, NULL, NULL),
(326, 'Kabupaten Barito Utara', 21, NULL, NULL),
(327, 'Kabupaten Gunung Mas', 21, NULL, NULL),
(328, 'Kabupaten Kapuas', 21, NULL, NULL),
(329, 'Kabupaten Katingan', 21, NULL, NULL),
(330, 'Kabupaten Kotawaringin Barat', 21, NULL, NULL),
(331, 'Kabupaten Kotawaringin Timur', 21, NULL, NULL),
(332, 'Kabupaten Lamandau', 21, NULL, NULL),
(333, 'Kabupaten Murung Raya', 21, NULL, NULL),
(334, 'Kabupaten Pulang Pisau', 21, NULL, NULL),
(335, 'Kabupaten Seruyan', 21, NULL, NULL),
(336, 'Kabupaten Sukamara', 21, NULL, NULL),
(337, 'Kota Palangkaraya', 21, NULL, NULL),
(338, 'Kabupaten Balangan', 22, NULL, NULL),
(339, 'Kabupaten Banjar', 22, NULL, NULL),
(340, 'Kabupaten Barito Kuala', 22, NULL, NULL),
(341, 'Kabupaten Hulu Sungai Selatan', 22, NULL, NULL),
(342, 'Kabupaten Hulu Sungai Tengah', 22, NULL, NULL),
(343, 'Kabupaten Hulu Sungai Utara', 22, NULL, NULL),
(344, 'Kabupaten Kota Baru', 22, NULL, NULL),
(345, 'Kabupaten Tabalong', 22, NULL, NULL),
(346, 'Kabupaten Tanah Bumbu', 22, NULL, NULL),
(347, 'Kabupaten Tanah Laut', 22, NULL, NULL),
(348, 'Kabupaten Tapin', 22, NULL, NULL),
(349, 'Kota Banjar Baru', 22, NULL, NULL),
(350, 'Kota Banjarmasin', 22, NULL, NULL),
(351, 'Kabupaten Berau', 23, NULL, NULL),
(352, 'Kabupaten Bulongan', 23, NULL, NULL),
(353, 'Kabupaten Kutai Barat', 23, NULL, NULL),
(354, 'Kabupaten Kutai Kartanegara', 23, NULL, NULL),
(355, 'Kabupaten Kutai Timur', 23, NULL, NULL),
(356, 'Kabupaten Malinau', 23, NULL, NULL),
(357, 'Kabupaten Nunukan', 23, NULL, NULL),
(358, 'Kabupaten Paser', 23, NULL, NULL),
(359, 'Kabupaten Penajam Paser Utara', 23, NULL, NULL),
(360, 'Kabupaten Tana Tidung', 23, NULL, NULL),
(361, 'Kota Balikpapan', 23, NULL, NULL),
(362, 'Kota Bontang', 23, NULL, NULL),
(363, 'Kota Samarinda', 23, NULL, NULL),
(364, 'Kota Tarakan', 23, NULL, NULL),
(365, 'Kabupaten Boalemo', 24, NULL, NULL),
(366, 'Kabupaten Bone Bolango', 24, NULL, NULL),
(367, 'Kabupaten Gorontalo', 24, NULL, NULL),
(368, 'Kabupaten Gorontalo Utara', 24, NULL, NULL),
(369, 'Kabupaten Pohuwato', 24, NULL, NULL),
(370, 'Kota Gorontalo', 24, NULL, NULL),
(371, 'Kabupaten Bantaeng', 25, NULL, NULL),
(372, 'Kabupaten Barru', 25, NULL, NULL),
(373, 'Kabupaten Bone', 25, NULL, NULL),
(374, 'Kabupaten Bulukumba', 25, NULL, NULL),
(375, 'Kabupaten Enrekang', 25, NULL, NULL),
(376, 'Kabupaten Gowa', 25, NULL, NULL),
(377, 'Kabupaten Jeneponto', 25, NULL, NULL),
(378, 'Kabupaten Luwu', 25, NULL, NULL),
(379, 'Kabupaten Luwu Timur', 25, NULL, NULL),
(380, 'Kabupaten Luwu Utara', 25, NULL, NULL),
(381, 'Kabupaten Maros', 25, NULL, NULL),
(382, 'Kabupaten Pangkajene Kepulauan', 25, NULL, NULL),
(383, 'Kabupaten Pinrang', 25, NULL, NULL),
(384, 'Kabupaten Selayar', 25, NULL, NULL),
(385, 'Kabupaten Sidenreng Rappang', 25, NULL, NULL),
(386, 'Kabupaten Sinjai', 25, NULL, NULL),
(387, 'Kabupaten Soppeng', 25, NULL, NULL),
(388, 'Kabupaten Takalar', 25, NULL, NULL),
(389, 'Kabupaten Tana Toraja', 25, NULL, NULL),
(390, 'Kabupaten Toraja Utara', 25, NULL, NULL),
(391, 'Kabupaten Wajo', 25, NULL, NULL),
(392, 'Kota Makassar', 25, NULL, NULL),
(393, 'Kota Palopo', 25, NULL, NULL),
(394, 'Kota Pare-pare', 25, NULL, NULL),
(395, 'Kabupaten Bombana', 26, NULL, NULL),
(396, 'Kabupaten Buton', 26, NULL, NULL),
(397, 'Kabupaten Buton Utara', 26, NULL, NULL),
(398, 'Kabupaten Kolaka', 26, NULL, NULL),
(399, 'Kabupaten Kolaka Utara', 26, NULL, NULL),
(400, 'Kabupaten Konawe', 26, NULL, NULL),
(401, 'Kabupaten Konawe Selatan', 26, NULL, NULL),
(402, 'Kabupaten Konawe Utara', 26, NULL, NULL),
(403, 'Kabupaten Muna', 26, NULL, NULL),
(404, 'Kabupaten Wakatobi', 26, NULL, NULL),
(405, 'Kota Bau-bau', 26, NULL, NULL),
(406, 'Kota Kendari', 26, NULL, NULL),
(407, 'Kabupaten Banggai', 27, NULL, NULL),
(408, 'Kabupaten Banggai Kepulauan', 27, NULL, NULL),
(409, 'Kabupaten Buol', 27, NULL, NULL),
(410, 'Kabupaten Donggala', 27, NULL, NULL),
(411, 'Kabupaten Morowali', 27, NULL, NULL),
(412, 'Kabupaten Parigi Moutong', 27, NULL, NULL),
(413, 'Kabupaten Poso', 27, NULL, NULL),
(414, 'Kabupaten Sigi', 27, NULL, NULL),
(415, 'Kabupaten Tojo Una-Una', 27, NULL, NULL),
(416, 'Kabupaten Toli Toli', 27, NULL, NULL),
(417, 'Kota Palu', 27, NULL, NULL),
(418, 'Kabupaten Bolaang Mangondow', 28, NULL, NULL),
(419, 'Kabupaten Bolaang Mangondow Se', 28, NULL, NULL),
(420, 'Kabupaten Bolaang Mangondow Ti', 28, NULL, NULL),
(421, 'Kabupaten Bolaang Mangondow Ut', 28, NULL, NULL),
(422, 'Kabupaten Kepulauan Sangihe', 28, NULL, NULL),
(423, 'Kabupaten Kepulauan Siau Tagul', 28, NULL, NULL),
(424, 'Kabupaten Kepulauan Talaud', 28, NULL, NULL),
(425, 'Kabupaten Minahasa', 28, NULL, NULL),
(426, 'Kabupaten Minahasa Selatan', 28, NULL, NULL),
(427, 'Kabupaten Minahasa Tenggara', 28, NULL, NULL),
(428, 'Kabupaten Minahasa Utara', 28, NULL, NULL),
(429, 'Kota Bitung', 28, NULL, NULL),
(430, 'Kota Kotamobagu', 28, NULL, NULL),
(431, 'Kota Manado', 28, NULL, NULL),
(432, 'Kota Tomohon', 28, NULL, NULL),
(433, 'Kabupaten Majene', 29, NULL, NULL),
(434, 'Kabupaten Mamasa', 29, NULL, NULL),
(435, 'Kabupaten Mamuju', 29, NULL, NULL),
(436, 'Kabupaten Mamuju Utara', 29, NULL, NULL),
(437, 'Kabupaten Polewali Mandar', 29, NULL, NULL),
(438, 'Kabupaten Buru', 30, NULL, NULL),
(439, 'Kabupaten Buru Selatan', 30, NULL, NULL),
(440, 'Kabupaten Kepulauan Aru', 30, NULL, NULL),
(441, 'Kabupaten Maluku Barat Daya', 30, NULL, NULL),
(442, 'Kabupaten Maluku Tengah', 30, NULL, NULL),
(443, 'Kabupaten Maluku Tenggara', 30, NULL, NULL),
(444, 'Kabupaten Maluku Tenggara Bara', 30, NULL, NULL),
(445, 'Kabupaten Seram Bagian Barat', 30, NULL, NULL),
(446, 'Kabupaten Seram Bagian Timur', 30, NULL, NULL),
(447, 'Kota Ambon', 30, NULL, NULL),
(448, 'Kota Tual', 30, NULL, NULL),
(449, 'Kabupaten Halmahera Barat', 31, NULL, NULL),
(450, 'Kabupaten Halmahera Selatan', 31, NULL, NULL),
(451, 'Kabupaten Halmahera Tengah', 31, NULL, NULL),
(452, 'Kabupaten Halmahera Timur', 31, NULL, NULL),
(453, 'Kabupaten Halmahera Utara', 31, NULL, NULL),
(454, 'Kabupaten Kepulauan Sula', 31, NULL, NULL),
(455, 'Kabupaten Pulau Morotai', 31, NULL, NULL),
(456, 'Kota Ternate', 31, NULL, NULL),
(457, 'Kota Tidore Kepulauan', 31, NULL, NULL),
(458, 'Kabupaten Fakfak', 32, NULL, NULL),
(459, 'Kabupaten Kaimana', 32, NULL, NULL),
(460, 'Kabupaten Manokwari', 32, NULL, NULL),
(461, 'Kabupaten Maybrat', 32, NULL, NULL),
(462, 'Kabupaten Raja Ampat', 32, NULL, NULL),
(463, 'Kabupaten Sorong', 32, NULL, NULL),
(464, 'Kabupaten Sorong Selatan', 32, NULL, NULL),
(465, 'Kabupaten Tambrauw', 32, NULL, NULL),
(466, 'Kabupaten Teluk Bintuni', 32, NULL, NULL),
(467, 'Kabupaten Teluk Wondama', 32, NULL, NULL),
(468, 'Kota Sorong', 32, NULL, NULL),
(469, 'Kabupaten Merauke', 33, NULL, NULL),
(470, 'Kabupaten Jayawijaya', 33, NULL, NULL),
(471, 'Kabupaten Nabire', 33, NULL, NULL),
(472, 'Kabupaten Kepulauan Yapen', 33, NULL, NULL),
(473, 'Kabupaten Biak Numfor', 33, NULL, NULL),
(474, 'Kabupaten Paniai', 33, NULL, NULL),
(475, 'Kabupaten Puncak Jaya', 33, NULL, NULL),
(476, 'Kabupaten Mimika', 33, NULL, NULL),
(477, 'Kabupaten Boven Digoel', 33, NULL, NULL),
(478, 'Kabupaten Mappi', 33, NULL, NULL),
(479, 'Kabupaten Asmat', 33, NULL, NULL),
(480, 'Kabupaten Yahukimo', 33, NULL, NULL),
(481, 'Kabupaten Pegunungan Bintang', 33, NULL, NULL),
(482, 'Kabupaten Tolikara', 33, NULL, NULL),
(483, 'Kabupaten Sarmi', 33, NULL, NULL),
(484, 'Kabupaten Keerom', 33, NULL, NULL),
(485, 'Kabupaten Waropen', 33, NULL, NULL),
(486, 'Kabupaten Jayapura', 33, NULL, NULL),
(487, 'Kabupaten Deiyai', 33, NULL, NULL),
(488, 'Kabupaten Dogiyai', 33, NULL, NULL),
(489, 'Kabupaten Intan Jaya', 33, NULL, NULL),
(490, 'Kabupaten Lanny Jaya', 33, NULL, NULL),
(491, 'Kabupaten Mamberamo Raya', 33, NULL, NULL),
(492, 'Kabupaten Mamberamo Tengah', 33, NULL, NULL),
(493, 'Kabupaten Nduga', 33, NULL, NULL),
(494, 'Kabupaten Puncak', 33, NULL, NULL),
(495, 'Kabupaten Supiori', 33, NULL, NULL),
(496, 'Kabupaten Yalimo', 33, NULL, NULL),
(497, 'Kota Jayapura', 33, NULL, NULL),
(498, 'Kabupaten Bulungan', 34, NULL, NULL),
(499, 'Kabupaten Malinau', 34, NULL, NULL),
(500, 'Kabupaten Nunukan', 34, NULL, NULL),
(501, 'Kabupaten Tana Tidung', 34, NULL, NULL),
(502, 'Kota Tarakan', 34, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) UNSIGNED NOT NULL,
  `body` varchar(500) NOT NULL,
  `commentable_id` int(11) UNSIGNED NOT NULL,
  `commentable_type` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `body`, `commentable_id`, `commentable_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'this is first comment', 2, 'App\\Models\\Photo', '2016-11-09 00:50:04', '2016-11-09 00:50:04', NULL),
(2, 'this is first comment', 2, 'App\\Models\\Photo', '2016-11-09 00:52:32', '2016-11-09 00:52:32', NULL),
(3, 'this is first comment', 1, 'App\\Models\\Video', '2016-11-09 00:58:24', '2016-11-09 00:58:24', NULL),
(4, 'this is first comment', 1, 'App\\Models\\Photo', '2016-11-09 01:02:53', '2016-11-09 01:02:53', NULL),
(5, 'this is first comment', 1, 'App\\Models\\News', '2016-11-09 01:40:52', '2016-11-09 01:40:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Afghanistan', NULL, NULL),
(4, 'Albania', NULL, NULL),
(5, 'Algeria', NULL, NULL),
(6, 'American Samoa', NULL, NULL),
(7, 'Andorra', NULL, NULL),
(8, 'Angola', NULL, NULL),
(9, 'Anguilla', NULL, NULL),
(10, 'Antarctica', NULL, NULL),
(11, 'Antigua and Barbuda', NULL, NULL),
(12, 'Argentina', NULL, NULL),
(13, 'Armenia', NULL, NULL),
(14, 'Aruba', NULL, NULL),
(15, 'Australia', NULL, NULL),
(16, 'Austria', NULL, NULL),
(17, 'Azerbaijan', NULL, NULL),
(18, 'Bahamas', NULL, NULL),
(19, 'Bahrain', NULL, NULL),
(20, 'Bangladesh', NULL, NULL),
(21, 'Barbados', NULL, NULL),
(22, 'Belarus', NULL, NULL),
(23, 'Belgium', NULL, NULL),
(24, 'Belize', NULL, NULL),
(25, 'Benin', NULL, NULL),
(26, 'Bermuda', NULL, NULL),
(27, 'Bhutan', NULL, NULL),
(28, 'Bolivia', NULL, NULL),
(29, 'Bosnia and Herzegovina', NULL, NULL),
(30, 'Botswana', NULL, NULL),
(31, 'Bouvet Island', NULL, NULL),
(32, 'Brazil', NULL, NULL),
(33, 'British Indian Ocean Territory', NULL, NULL),
(34, 'Brunei Darussalam', NULL, NULL),
(35, 'Bulgaria', NULL, NULL),
(36, 'Burkina Faso', NULL, NULL),
(37, 'Burundi', NULL, NULL),
(38, 'Cambodia', NULL, NULL),
(39, 'Cameroon', NULL, NULL),
(40, 'Canada', NULL, NULL),
(41, 'Cape Verde', NULL, NULL),
(42, 'Cayman Islands', NULL, NULL),
(43, 'Central African Republic', NULL, NULL),
(44, 'Chad', NULL, NULL),
(45, 'Chile', NULL, NULL),
(46, 'China', NULL, NULL),
(47, 'Christmas Island', NULL, NULL),
(48, 'Cocos (Keeling) Islands', NULL, NULL),
(49, 'Colombia', NULL, NULL),
(50, 'Comoros', NULL, NULL),
(51, 'Congo', NULL, NULL),
(52, 'Cook Islands', NULL, NULL),
(53, 'Costa Rica', NULL, NULL),
(54, 'Croatia (Hrvatska)', NULL, NULL),
(55, 'Cuba', NULL, NULL),
(56, 'Cyprus', NULL, NULL),
(57, 'Czech Republic', NULL, NULL),
(58, 'Denmark', NULL, NULL),
(59, 'Djibouti', NULL, NULL),
(60, 'Dominica', NULL, NULL),
(61, 'Dominican Republic', NULL, NULL),
(62, 'East Timor', NULL, NULL),
(63, 'Ecuador', NULL, NULL),
(64, 'Egypt', NULL, NULL),
(65, 'El Salvador', NULL, NULL),
(66, 'Equatorial Guinea', NULL, NULL),
(67, 'Eritrea', NULL, NULL),
(68, 'Estonia', NULL, NULL),
(69, 'Ethiopia', NULL, NULL),
(70, 'Falkland Islands (Malvinas)', NULL, NULL),
(71, 'Faroe Islands', NULL, NULL),
(72, 'Fiji', NULL, NULL),
(73, 'Finland', NULL, NULL),
(74, 'France', NULL, NULL),
(75, 'France, Metropolitan', NULL, NULL),
(76, 'French Guiana', NULL, NULL),
(77, 'French Polynesia', NULL, NULL),
(78, 'French Southern Territories', NULL, NULL),
(79, 'Gabon', NULL, NULL),
(80, 'Gambia', NULL, NULL),
(81, 'Georgia', NULL, NULL),
(82, 'Germany', NULL, NULL),
(83, 'Ghana', NULL, NULL),
(84, 'Gibraltar', NULL, NULL),
(85, 'Guernsey', NULL, NULL),
(86, 'Greece', NULL, NULL),
(87, 'Greenland', NULL, NULL),
(88, 'Grenada', NULL, NULL),
(89, 'Guadeloupe', NULL, NULL),
(90, 'Guam', NULL, NULL),
(91, 'Guatemala', NULL, NULL),
(92, 'Guinea', NULL, NULL),
(93, 'Guinea-Bissau', NULL, NULL),
(94, 'Guyana', NULL, NULL),
(95, 'Haiti', NULL, NULL),
(96, 'Heard and Mc Donald Islands', NULL, NULL),
(97, 'Honduras', NULL, NULL),
(98, 'Hong Kong', NULL, NULL),
(99, 'Hungary', NULL, NULL),
(100, 'Iceland', NULL, NULL),
(101, 'India', NULL, NULL),
(102, 'Isle of Man', NULL, NULL),
(103, 'Indonesia', NULL, NULL),
(104, 'Iran (Islamic Republic of)', NULL, NULL),
(105, 'Iraq', NULL, NULL),
(106, 'Ireland', NULL, NULL),
(107, 'Israel', NULL, NULL),
(108, 'Italy', NULL, NULL),
(109, 'Ivory Coast', NULL, NULL),
(110, 'Jersey', NULL, NULL),
(111, 'Jamaica', NULL, NULL),
(112, 'Japan', NULL, NULL),
(113, 'Jordan', NULL, NULL),
(114, 'Kazakhstan', NULL, NULL),
(115, 'Kenya', NULL, NULL),
(116, 'Kiribati', NULL, NULL),
(117, 'Korea, Democratic PeopleNULLs Republic of', NULL, NULL),
(118, 'Korea, Republic of', NULL, NULL),
(119, 'Kosovo', NULL, NULL),
(120, 'Kuwait', NULL, NULL),
(121, 'Kyrgyzstan', NULL, NULL),
(122, 'Lao PeopleNULLs Democratic Republic', NULL, NULL),
(123, 'Latvia', NULL, NULL),
(124, 'Lebanon', NULL, NULL),
(125, 'Lesotho', NULL, NULL),
(126, 'Liberia', NULL, NULL),
(127, 'Libyan Arab Jamahiriya', NULL, NULL),
(128, 'Liechtenstein', NULL, NULL),
(129, 'Lithuania', NULL, NULL),
(130, 'Luxembourg', NULL, NULL),
(131, 'Macau', NULL, NULL),
(132, 'Macedonia', NULL, NULL),
(133, 'Madagascar', NULL, NULL),
(134, 'Malawi', NULL, NULL),
(135, 'Malaysia', NULL, NULL),
(136, 'Maldives', NULL, NULL),
(137, 'Mali', NULL, NULL),
(138, 'Malta', NULL, NULL),
(139, 'Marshall Islands', NULL, NULL),
(140, 'Martinique', NULL, NULL),
(141, 'Mauritania', NULL, NULL),
(142, 'Mauritius', NULL, NULL),
(143, 'Mayotte', NULL, NULL),
(144, 'Mexico', NULL, NULL),
(145, 'Micronesia, Federated States of', NULL, NULL),
(146, 'Moldova, Republic of', NULL, NULL),
(147, 'Monaco', NULL, NULL),
(148, 'Mongolia', NULL, NULL),
(149, 'Montenegro', NULL, NULL),
(150, 'Montserrat', NULL, NULL),
(151, 'Morocco', NULL, NULL),
(152, 'Mozambique', NULL, NULL),
(153, 'Myanmar', NULL, NULL),
(154, 'Namibia', NULL, NULL),
(155, 'Nauru', NULL, NULL),
(156, 'Nepal', NULL, NULL),
(157, 'Netherlands', NULL, NULL),
(158, 'Netherlands Antilles', NULL, NULL),
(159, 'New Caledonia', NULL, NULL),
(160, 'New Zealand', NULL, NULL),
(161, 'Nicaragua', NULL, NULL),
(162, 'Niger', NULL, NULL),
(163, 'Nigeria', NULL, NULL),
(164, 'Niue', NULL, NULL),
(165, 'Norfolk Island', NULL, NULL),
(166, 'Northern Mariana Islands', NULL, NULL),
(167, 'Norway', NULL, NULL),
(168, 'Oman', NULL, NULL),
(169, 'Pakistan', NULL, NULL),
(170, 'Palau', NULL, NULL),
(171, 'Palestine', NULL, NULL),
(172, 'Panama', NULL, NULL),
(173, 'Papua New Guinea', NULL, NULL),
(174, 'Paraguay', NULL, NULL),
(175, 'Peru', NULL, NULL),
(176, 'Philippines', NULL, NULL),
(177, 'Pitcairn', NULL, NULL),
(178, 'Poland', NULL, NULL),
(179, 'Portugal', NULL, NULL),
(180, 'Puerto Rico', NULL, NULL),
(181, 'Qatar', NULL, NULL),
(182, 'Reunion', NULL, NULL),
(183, 'Romania', NULL, NULL),
(184, 'Russian Federation', NULL, NULL),
(185, 'Rwanda', NULL, NULL),
(186, 'Saint Kitts and Nevis', NULL, NULL),
(187, 'Saint Lucia', NULL, NULL),
(188, 'Saint Vincent and the Grenadines', NULL, NULL),
(189, 'Samoa', NULL, NULL),
(190, 'San Marino', NULL, NULL),
(191, 'Sao Tome and Principe', NULL, NULL),
(192, 'Saudi Arabia', NULL, NULL),
(193, 'Senegal', NULL, NULL),
(194, 'Serbia', NULL, NULL),
(195, 'Seychelles', NULL, NULL),
(196, 'Sierra Leone', NULL, NULL),
(197, 'Singapore', NULL, NULL),
(198, 'Slovakia', NULL, NULL),
(199, 'Slovenia', NULL, NULL),
(200, 'Solomon Islands', NULL, NULL),
(201, 'Somalia', NULL, NULL),
(202, 'South Africa', NULL, NULL),
(203, 'South Georgia South Sandwich Islands', NULL, NULL),
(204, 'Spain', NULL, NULL),
(205, 'Sri Lanka', NULL, NULL),
(206, 'St. Helena', NULL, NULL),
(207, 'St. Pierre and Miquelon', NULL, NULL),
(208, 'Sudan', NULL, NULL),
(209, 'Suriname', NULL, NULL),
(210, 'Svalbard and Jan Mayen Islands', NULL, NULL),
(211, 'Swaziland', NULL, NULL),
(212, 'Sweden', NULL, NULL),
(213, 'Switzerland', NULL, NULL),
(214, 'Syrian Arab Republic', NULL, NULL),
(215, 'Taiwan', NULL, NULL),
(216, 'Tajikistan', NULL, NULL),
(217, 'Tanzania, United Republic of', NULL, NULL),
(218, 'Thailand', NULL, NULL),
(219, 'Togo', NULL, NULL),
(220, 'Tonga', NULL, NULL),
(221, 'Trinidad and Tobago', NULL, NULL),
(222, 'Tunisia', NULL, NULL),
(223, 'Turkey', NULL, NULL),
(224, 'Turkmenistan', NULL, NULL),
(225, 'Turks and Caicos Islands', NULL, NULL),
(226, 'Tuvalu', NULL, NULL),
(227, 'Uganda', NULL, NULL),
(228, 'Ukraine', NULL, NULL),
(229, 'United Arab Emirates', NULL, NULL),
(230, 'United Kingdom', NULL, NULL),
(231, 'United States', NULL, NULL),
(232, 'United States minor outlying islands', NULL, NULL),
(233, 'Uruguay', NULL, NULL),
(234, 'Uzbekistan', NULL, NULL),
(235, 'Vanuatu', NULL, NULL),
(236, 'Vatican City State', NULL, NULL),
(237, 'Venezuela', NULL, NULL),
(238, 'Vietnam', NULL, NULL),
(239, 'Virgin Islands (British)', NULL, NULL),
(240, 'Virgin Islands (U.S.)', NULL, NULL),
(241, 'Wallis and Futuna Islands', NULL, NULL),
(242, 'Western Sahara', NULL, NULL),
(243, 'Yemen', NULL, NULL),
(244, 'Yugoslavia', NULL, NULL),
(245, 'Zaire', NULL, NULL),
(246, 'Zambia', NULL, NULL),
(247, 'Zimbabwe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_region`
--

CREATE TABLE `master_region` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `news_model_id` int(3) UNSIGNED NOT NULL,
  `news_type_id` int(2) UNSIGNED DEFAULT NULL,
  `news_rank_id` int(2) UNSIGNED DEFAULT NULL,
  `news_category_id` int(3) UNSIGNED DEFAULT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `title_top` varchar(200) DEFAULT NULL,
  `title_bottom` varchar(200) DEFAULT NULL,
  `img_path` varchar(150) NOT NULL,
  `img_caption` varchar(500) DEFAULT NULL,
  `img_source` varchar(150) DEFAULT NULL,
  `summary` varchar(500) NOT NULL,
  `is_draft` tinyint(1) DEFAULT '0',
  `views` int(6) DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '1',
  `is_featured` tinyint(1) DEFAULT '0',
  `keyword` varchar(100) DEFAULT NULL,
  `news_category_radar_id` int(5) UNSIGNED DEFAULT NULL,
  `is_radar` tinyint(1) UNSIGNED DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_model_id`, `news_type_id`, `news_rank_id`, `news_category_id`, `user_id`, `title`, `title_top`, `title_bottom`, `img_path`, `img_caption`, `img_source`, `summary`, `is_draft`, `views`, `is_active`, `is_featured`, `keyword`, `news_category_radar_id`, `is_radar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, 14, 1, 'Kesehatan Jiwa', 'Tips agar tidak gila', NULL, '/img/abc.jpg', 'caption Img : qwertyqwertyqwerty', 'aaa', 'Summary : qwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwerty', 0, 0, 1, 1, NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `is_visible` tinyint(1) UNSIGNED DEFAULT '1',
  `order_top` tinyint(2) UNSIGNED DEFAULT NULL,
  `order_bottom` tinyint(2) UNSIGNED DEFAULT NULL,
  `parent_id` int(3) UNSIGNED DEFAULT NULL,
  `news_type_id` int(2) UNSIGNED NOT NULL,
  `is_fillable` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `name`, `color`, `is_visible`, `order_top`, `order_bottom`, `parent_id`, `news_type_id`, `is_fillable`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'opini', NULL, 1, 1, 7, NULL, 1, 1, NULL, NULL, NULL),
(2, 'teknologi', '#336663', 1, 8, 10, NULL, 1, 0, NULL, NULL, NULL),
(3, 'pendidikan', '#294553', 1, 9, 11, NULL, 1, 0, NULL, NULL, NULL),
(4, 'kesehatan', '#fb84ae', 1, 10, 5, NULL, 1, 0, NULL, NULL, NULL),
(5, 'lokal', '#0068aa', 1, 11, 6, NULL, 1, 0, NULL, NULL, NULL),
(6, 'internasional', '#feb302', 1, 12, 12, NULL, 1, 0, NULL, NULL, NULL),
(7, 'cover stories', NULL, 1, 2, 8, NULL, 1, 0, NULL, NULL, NULL),
(8, 'nasional', NULL, 1, 3, 1, NULL, 1, 0, NULL, NULL, NULL),
(9, 'ekonomi', '#cf0008', 1, 4, 2, NULL, 1, 0, NULL, NULL, NULL),
(10, 'entertaiment', '#ba89c6', 1, 5, 3, NULL, 1, 0, NULL, NULL, NULL),
(11, 'sport', '#00a652', 1, 6, 4, NULL, 1, 0, NULL, NULL, NULL),
(12, 'otomotif', '#fd6500', 1, 7, 9, NULL, 1, 0, NULL, NULL, NULL),
(14, 'women''s', NULL, 1, NULL, NULL, 4, 1, 1, NULL, NULL, NULL),
(17, 'men''s', NULL, 1, NULL, NULL, 4, 1, 1, NULL, NULL, NULL),
(18, 'children''s', NULL, 1, NULL, NULL, 4, 1, 1, NULL, NULL, NULL),
(19, 'diet & fitness', NULL, 1, NULL, NULL, 4, 1, 1, NULL, NULL, NULL),
(20, 'politik', NULL, 1, NULL, NULL, 8, 1, 1, NULL, NULL, NULL),
(21, 'hukum', NULL, 1, NULL, NULL, 8, 1, 1, NULL, NULL, NULL),
(22, 'hankam', NULL, 1, NULL, NULL, 8, 1, 1, NULL, NULL, NULL),
(23, 'humaniora', NULL, 1, NULL, NULL, 8, 1, 1, NULL, NULL, NULL),
(24, 'pemilihan', NULL, 1, NULL, NULL, 8, 1, 1, NULL, NULL, NULL),
(25, 'radar', NULL, 1, NULL, NULL, 5, 1, 1, NULL, NULL, NULL),
(26, 'non radar', NULL, 1, NULL, NULL, 5, 1, 1, NULL, NULL, NULL),
(27, 'makro', NULL, 1, NULL, NULL, 9, 1, 1, NULL, NULL, NULL),
(28, 'bisnis', NULL, 1, NULL, NULL, 9, 1, 1, NULL, NULL, NULL),
(29, 'finance', NULL, 1, NULL, NULL, 9, 1, 1, NULL, NULL, NULL),
(30, 'energi', NULL, 1, NULL, NULL, 9, 1, 1, NULL, NULL, NULL),
(31, 'properti', NULL, 1, NULL, NULL, 9, 1, 1, NULL, NULL, NULL),
(34, 'show & selebriti', NULL, 1, NULL, NULL, 10, 1, 1, NULL, NULL, NULL),
(35, 'for her', NULL, 1, NULL, NULL, 10, 1, 1, NULL, NULL, NULL),
(36, 'movie', NULL, 1, NULL, NULL, 10, 1, 1, NULL, NULL, NULL),
(37, 'travel', NULL, 1, NULL, NULL, 10, 1, 1, NULL, NULL, NULL),
(38, 'life style', NULL, 1, NULL, NULL, 10, 1, 1, NULL, NULL, NULL),
(39, 'sosok & sisi lain', NULL, 1, NULL, NULL, 10, 1, 1, NULL, NULL, NULL),
(44, 'total football', NULL, 1, NULL, NULL, 11, 1, 1, NULL, NULL, NULL),
(45, 'liga indonesia', NULL, 1, NULL, NULL, 11, 1, 1, NULL, NULL, NULL),
(46, 'total sport', NULL, 1, NULL, NULL, 11, 1, 1, NULL, NULL, NULL),
(47, 'arena local', NULL, 1, NULL, NULL, 11, 1, 1, NULL, NULL, NULL),
(50, 'jati diri', NULL, 1, NULL, NULL, 1, 1, 1, '2016-11-09 20:43:07', '2016-11-10 01:53:58', NULL),
(59, 'mr. pecut', NULL, 1, NULL, NULL, NULL, 2, 1, '2016-11-09 23:52:22', '2016-11-09 23:52:22', NULL),
(62, 'jagad', NULL, 1, NULL, NULL, NULL, 2, 1, '2016-11-09 23:56:23', '2016-11-09 23:56:23', NULL),
(64, 'ruang putih', NULL, 1, NULL, NULL, NULL, 2, 1, NULL, NULL, NULL),
(65, 'buku', NULL, 1, NULL, NULL, NULL, 2, 1, NULL, NULL, NULL),
(66, 'kolom', NULL, 1, NULL, NULL, NULL, 2, 0, NULL, NULL, NULL),
(67, 'momentum', NULL, 1, NULL, NULL, NULL, 2, 1, NULL, NULL, NULL),
(68, 'new hope', NULL, 1, NULL, NULL, NULL, 2, 1, NULL, NULL, NULL),
(69, 'happy wednesday', NULL, 1, NULL, NULL, NULL, 2, 1, NULL, NULL, NULL),
(70, 'perspektif', NULL, 1, NULL, NULL, NULL, 2, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_category_radar`
--

CREATE TABLE `news_category_radar` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `is_visible` tinyint(1) UNSIGNED DEFAULT '1',
  `order_top` tinyint(2) UNSIGNED DEFAULT NULL,
  `order_bottom` tinyint(2) UNSIGNED DEFAULT NULL,
  `parent_id` int(3) UNSIGNED DEFAULT NULL,
  `news_type_id` tinyint(2) UNSIGNED NOT NULL,
  `is_fillable` tinyint(1) UNSIGNED DEFAULT '1',
  `radar_id` int(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_category_radar`
--

INSERT INTO `news_category_radar` (`id`, `name`, `color`, `is_visible`, `order_top`, `order_bottom`, `parent_id`, `news_type_id`, `is_fillable`, `radar_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Lokals', '#ff0000', 0, NULL, NULL, NULL, 1, 1, NULL, '2017-02-28 01:45:10', '2017-02-28 01:45:10', NULL),
(9, 'Lokals', '#ff0000', 0, 1, 1, NULL, 1, 1, NULL, '2017-02-28 02:03:44', '2017-02-28 02:03:44', NULL),
(10, 'Lokals', '#ff1313', 0, 2, 2, NULL, 1, 1, NULL, '2017-02-28 02:04:33', '2017-02-28 02:04:33', NULL),
(11, 'lokas', '#e67272', 0, 3, 3, NULL, 1, 1, NULL, '2017-02-28 05:09:08', '2017-02-28 05:09:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_model`
--

CREATE TABLE `news_model` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_model`
--

INSERT INTO `news_model` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'model 1', NULL, NULL, NULL),
(2, 'model 2', NULL, NULL, NULL),
(3, 'model 3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_model_1`
--

CREATE TABLE `news_model_1` (
  `id` int(11) UNSIGNED NOT NULL,
  `news_id` int(11) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `img_path` varchar(150) DEFAULT NULL,
  `img_caption` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_model_1`
--

INSERT INTO `news_model_1` (`id`, `news_id`, `body`, `img_path`, `img_caption`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'ISI BODY : qwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwertyqwerty', '/img/foto_dlm_body.jpg', 'img caption dlm body : asdjaskjdkasjdkasdjka', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_model_2`
--

CREATE TABLE `news_model_2` (
  `id` int(11) UNSIGNED NOT NULL,
  `news_id` int(11) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `video_path` varchar(150) DEFAULT NULL,
  `video_caption` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news_model_3`
--

CREATE TABLE `news_model_3` (
  `id` int(11) UNSIGNED NOT NULL,
  `news_id` int(11) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `img_path` varchar(150) DEFAULT NULL,
  `img_caption` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news_news_sequence`
--

CREATE TABLE `news_news_sequence` (
  `id` int(11) NOT NULL,
  `news_id` int(11) UNSIGNED NOT NULL,
  `news_sequence_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news_rank`
--

CREATE TABLE `news_rank` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_rank`
--

INSERT INTO `news_rank` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'rank 1', 'top stories', NULL, NULL),
(2, 'rank 2', 'rekomendasi untuk anda', NULL, NULL),
(3, 'rank 3', 'artikel lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_sequence`
--

CREATE TABLE `news_sequence` (
  `id` int(11) UNSIGNED NOT NULL,
  `topic` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE `news_type` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `is_commentable` tinyint(1) UNSIGNED DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_type`
--

INSERT INTO `news_type` (`id`, `name`, `is_commentable`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'regular', 1, NULL, NULL, NULL),
(2, 'non regular', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(3) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `views` int(6) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `category_id`, `user_id`, `title`, `views`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 33, 1, 'Photo Satu', 0, '2016-11-08 17:00:00', '2016-11-08 17:00:00', NULL),
(2, 33, 1, 'Photo Dua', 0, '2016-11-08 17:00:00', '2016-11-08 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photo_content`
--

CREATE TABLE `photo_content` (
  `id` int(11) UNSIGNED NOT NULL,
  `photo_id` int(11) UNSIGNED NOT NULL,
  `path` varchar(200) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `is_active` tinyint(1) UNSIGNED DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photo_content`
--

INSERT INTO `photo_content` (`id`, `photo_id`, `path`, `caption`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Path Photo Satu', 'Caption Photo Satu', 1, '2016-11-08 17:00:00', '2016-11-08 17:00:00', NULL),
(2, 2, 'Path Photo Dua', 'Caption Photo Satu', 1, '2016-11-08 17:00:00', '2016-11-08 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `coordinate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id` int(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `name`, `coordinate`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Nanggroe Aceh Darussalam', '', 103, NULL, NULL),
(2, 'Sumatera Utara', '', 103, NULL, NULL),
(3, 'Sumatera Barat', '', 103, NULL, NULL),
(4, 'Riau', '', 103, NULL, NULL),
(5, 'Kepulauan Riau', '', 103, NULL, NULL),
(6, 'Kepulauan Bangka-Belitung', '', 103, NULL, NULL),
(7, 'Jambi', '', 103, NULL, NULL),
(8, 'Bengkulu', '', 103, NULL, NULL),
(9, 'Sumatera Selatan', '', 103, NULL, NULL),
(10, 'Lampung', '', 103, NULL, NULL),
(11, 'Banten', '', 103, NULL, NULL),
(12, 'DKI Jakarta', '', 103, NULL, NULL),
(13, 'Jawa Barat', '', 103, NULL, NULL),
(14, 'Jawa Tengah', '', 103, NULL, NULL),
(15, 'Daerah Istimewa Yogyakarta  ', '', 103, NULL, NULL),
(16, 'Jawa Timur', '', 103, NULL, NULL),
(17, 'Bali', '', 103, NULL, NULL),
(18, 'Nusa Tenggara Barat', '', 103, NULL, NULL),
(19, 'Nusa Tenggara Timur', '', 103, NULL, NULL),
(20, 'Kalimantan Barat', '', 103, NULL, NULL),
(21, 'Kalimantan Tengah', '', 103, NULL, NULL),
(22, 'Kalimantan Selatan', '', 103, NULL, NULL),
(23, 'Kalimantan Timur', '', 103, NULL, NULL),
(24, 'Gorontalo', '', 103, NULL, NULL),
(25, 'Sulawesi Selatan', '', 103, NULL, NULL),
(26, 'Sulawesi Tenggara', '', 103, NULL, NULL),
(27, 'Sulawesi Tengah', '', 103, NULL, NULL),
(28, 'Sulawesi Utara', '', 103, NULL, NULL),
(29, 'Sulawesi Barat', '', 103, NULL, NULL),
(30, 'Maluku', '', 103, NULL, NULL),
(31, 'Maluku Utara', '', 103, NULL, NULL),
(32, 'Papua Barat', '', 103, NULL, NULL),
(33, 'Papua', '', 103, NULL, NULL),
(34, 'Kalimantan Utara', '', 103, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `radar`
--

CREATE TABLE `radar` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `radar_attributes`
--

CREATE TABLE `radar_attributes` (
  `radar_id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radar_attributes`
--

INSERT INTO `radar_attributes` (`radar_id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'jawapos tangerang', '2017-03-04 21:01:49', '2017-03-04 21:01:49'),
(3, 'etst', '2017-03-04 23:22:24', '2017-03-04 23:22:24'),
(4, 'test', '2017-03-05 19:02:13', '2017-03-05 19:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, NULL),
(2, 'user', NULL, NULL, NULL),
(3, 'super admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `taggable`
--

CREATE TABLE `taggable` (
  `tag_id` int(11) UNSIGNED NOT NULL,
  `taggable_id` int(11) UNSIGNED NOT NULL,
  `taggable_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `role_id` int(3) UNSIGNED DEFAULT '2',
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  `is_block` tinyint(1) DEFAULT '0',
  `last_active` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role_id`, `username`, `email`, `password`, `is_active`, `is_block`, `last_active`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'daniela', 'a@a.com', '11111', 1, 0, NULL, NULL, '2016-11-08 01:11:35', '2016-11-08 01:11:35', NULL),
(3, 1, 'admin', 'admin@gmail.com', '$2y$10$yB1bnNB8Xm72.3aKQL1SxuFua78dwmm5aNoofWIA57cNBMBDirS3i', 1, 0, NULL, '0tfZi8iepGsmv3VuT6xFhu3uPZzUYdMsHz6lcFhwD6sOGFfFzCXCZV0dV46F', '2016-11-09 02:29:15', '2016-11-09 03:01:53', NULL),
(4, 1, 'daniel', 'daniel@gmail.com', '$2y$10$gjRPhwPmQnGF3KJVxOm/9uGqV/PjNo2oE1GpccvgQh5ox14dtN4mq', 1, 0, NULL, 'E7XyiUHrihxtPQWoXDYbk996UYqblhtqgzJTZnDNZkFu4pBm409YGuOh9Bef', '2016-11-09 02:34:25', '2016-11-09 03:08:46', NULL),
(6, 3, 'sa', 'sa@gmail.com', '$2y$10$gjRPhwPmQnGF3KJVxOm/9uGqV/PjNo2oE1GpccvgQh5ox14dtN4mq', 1, 0, NULL, 'Hz23yqSSEkesrPDXKd24b7xacDyTxtY8FjArgQzKpOBeEVzuMWvyGz7dfTUa', NULL, '2016-11-10 02:55:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `city_id` int(5) UNSIGNED DEFAULT NULL,
  `province_id` int(3) UNSIGNED DEFAULT NULL,
  `country_id` int(3) UNSIGNED DEFAULT NULL,
  `education` enum('sd','smp','sma','s1','s2','s3') DEFAULT NULL,
  `work` enum('swasta','pns','wirausaha') DEFAULT NULL,
  `referral` enum('website','koran','teman') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(3) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `views` int(6) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `category_id`, `user_id`, `title`, `views`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 33, 1, 'Demo Damai 4 November', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_content`
--

CREATE TABLE `video_content` (
  `id` int(11) UNSIGNED NOT NULL,
  `video_id` int(11) UNSIGNED NOT NULL,
  `path` varchar(200) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `is_active` tinyint(1) UNSIGNED DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video_content`
--

INSERT INTO `video_content` (`id`, `video_id`, `path`, `caption`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '/vid/demo-damai-4-november-2016-1.mp4', 'Demo Damai 4 November 2016', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ads_user_id_foreign_idx` (`user_id`),
  ADD KEY `ads_ads_type_id_foreign_idx` (`ads_type_id`);

--
-- Indexes for table `ads_type`
--
ALTER TABLE `ads_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_province_id_foreign_idx` (`province_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_region`
--
ALTER TABLE `master_region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_news_category_id_foreign_idx` (`news_category_id`),
  ADD KEY `news_news_type_id_foreign_idx` (`news_type_id`),
  ADD KEY `news_news_rank_id_foreign_idx` (`news_rank_id`),
  ADD KEY `news_news_model_id_foreign_idx` (`news_model_id`),
  ADD KEY `news_news_category_radar_id_foreign_idx` (`news_category_radar_id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_top` (`order_top`),
  ADD UNIQUE KEY `order_bottom` (`order_bottom`),
  ADD KEY `category_parent_id_foreign_idx` (`parent_id`);

--
-- Indexes for table `news_category_radar`
--
ALTER TABLE `news_category_radar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_top_UNIQUE` (`order_top`),
  ADD UNIQUE KEY `order_bottom_UNIQUE` (`order_bottom`),
  ADD KEY `news_category_radar_foreign_idx` (`radar_id`);

--
-- Indexes for table `news_model`
--
ALTER TABLE `news_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_model_1`
--
ALTER TABLE `news_model_1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_model_1_news_id_foreign_idx` (`news_id`);

--
-- Indexes for table `news_model_2`
--
ALTER TABLE `news_model_2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_model_2_news_id_foreign` (`news_id`);

--
-- Indexes for table `news_model_3`
--
ALTER TABLE `news_model_3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_model_3_news_id_foreign` (`news_id`);

--
-- Indexes for table `news_news_sequence`
--
ALTER TABLE `news_news_sequence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `news_sequence_id` (`news_sequence_id`);

--
-- Indexes for table `news_rank`
--
ALTER TABLE `news_rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_sequence`
--
ALTER TABLE `news_sequence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_type`
--
ALTER TABLE `news_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_category_id_foreign_idx` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `photo_content`
--
ALTER TABLE `photo_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_content_photo_id_foreign_idx` (`photo_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`),
  ADD KEY `province_country_id_foreign_idx` (`country_id`);

--
-- Indexes for table `radar`
--
ALTER TABLE `radar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radar_attributes`
--
ALTER TABLE `radar_attributes`
  ADD PRIMARY KEY (`radar_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taggable`
--
ALTER TABLE `taggable`
  ADD KEY `taggable_tag_id_foreign_idx` (`tag_id`),
  ADD KEY `taggable_general_id_foreign_idx` (`taggable_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD KEY `user_role_id` (`role_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profile_user_id_foreign_idx` (`user_id`),
  ADD KEY `user_profile_country_id_foreign_idx` (`country_id`),
  ADD KEY `user_profile_province_id_foreign_idx` (`province_id`),
  ADD KEY `user_profile_city_id_foreign_idx` (`city_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_category_id` (`category_id`),
  ADD KEY `video_user_id_foreign_idx` (`user_id`);

--
-- Indexes for table `video_content`
--
ALTER TABLE `video_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_content_video_id_foreign_idx` (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ads_type`
--
ALTER TABLE `ads_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `master_region`
--
ALTER TABLE `master_region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `news_category_radar`
--
ALTER TABLE `news_category_radar`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news_model`
--
ALTER TABLE `news_model`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news_model_1`
--
ALTER TABLE `news_model_1`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news_model_2`
--
ALTER TABLE `news_model_2`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_model_3`
--
ALTER TABLE `news_model_3`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_news_sequence`
--
ALTER TABLE `news_news_sequence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_rank`
--
ALTER TABLE `news_rank`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news_sequence`
--
ALTER TABLE `news_sequence`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `photo_content`
--
ALTER TABLE `photo_content`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `radar`
--
ALTER TABLE `radar`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `radar_attributes`
--
ALTER TABLE `radar_attributes`
  MODIFY `radar_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `video_content`
--
ALTER TABLE `video_content`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ads_type_id_foreign` FOREIGN KEY (`ads_type_id`) REFERENCES `ads_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_news_category_id_foreign` FOREIGN KEY (`news_category_id`) REFERENCES `news_category` (`id`),
  ADD CONSTRAINT `news_news_category_radar_id_foreign` FOREIGN KEY (`news_category_radar_id`) REFERENCES `news_category_radar` (`id`),
  ADD CONSTRAINT `news_news_model_id_foreign` FOREIGN KEY (`news_model_id`) REFERENCES `news_model` (`id`),
  ADD CONSTRAINT `news_news_rank_id_foreign` FOREIGN KEY (`news_rank_id`) REFERENCES `news_rank` (`id`),
  ADD CONSTRAINT `news_news_type_id_foreign` FOREIGN KEY (`news_type_id`) REFERENCES `news_type` (`id`);

--
-- Constraints for table `news_category_radar`
--
ALTER TABLE `news_category_radar`
  ADD CONSTRAINT `news_category_radar_foreign` FOREIGN KEY (`radar_id`) REFERENCES `radar` (`id`);

--
-- Constraints for table `news_model_1`
--
ALTER TABLE `news_model_1`
  ADD CONSTRAINT `news_model_1_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `news_model_2`
--
ALTER TABLE `news_model_2`
  ADD CONSTRAINT `news_model_2_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `news_model_3`
--
ALTER TABLE `news_model_3`
  ADD CONSTRAINT `news_model_3_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `news_news_sequence`
--
ALTER TABLE `news_news_sequence`
  ADD CONSTRAINT `news_news_sequence_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`),
  ADD CONSTRAINT `news_news_sequence_news_sequence_id_foreign` FOREIGN KEY (`news_sequence_id`) REFERENCES `news_sequence` (`id`);

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `photo_content`
--
ALTER TABLE `photo_content`
  ADD CONSTRAINT `photo_content_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `province_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Constraints for table `taggable`
--
ALTER TABLE `taggable`
  ADD CONSTRAINT `taggable_news_id_foreign` FOREIGN KEY (`taggable_id`) REFERENCES `news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `taggable_photo_id_foreign` FOREIGN KEY (`taggable_id`) REFERENCES `photo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `taggable_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `taggable_video_id_foreign` FOREIGN KEY (`taggable_id`) REFERENCES `video` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `user_profile_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `user_profile_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `province` (`id`),
  ADD CONSTRAINT `user_profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `video_content`
--
ALTER TABLE `video_content`
  ADD CONSTRAINT `video_content_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `video` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
