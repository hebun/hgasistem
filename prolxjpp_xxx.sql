-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2014 at 03:22 PM
-- Server version: 5.5.32-cll-lve
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


use `prolxjpp_xxx`;


-- --------------------------------------------------------

--
-- Table structure for table `aboneler`
--

CREATE TABLE IF NOT EXISTS `aboneler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `profil` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `profil_id` varchar(100) NOT NULL,
  `cinsiyet` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `gunluk_cekim` int(1) NOT NULL DEFAULT '0',
  `toplam_gun` int(10) NOT NULL DEFAULT '0',
  `kalan_gun` int(10) NOT NULL DEFAULT '0',
  `durum` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `actionp`
--

CREATE TABLE IF NOT EXISTS `actionp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `siteid` int(11) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `ip` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=223 ;

--
-- Dumping data for table `actionp`
--

INSERT INTO `actionp` (`id`, `siteid`, `days`, `ip`) VALUES
(1, 1, 113, '127.0.0.1'),
(2, 0, 113, '127.0.0.1'),
(3, 0, 113, '127.0.0.1'),
(4, 0, 113, '127.0.0.1'),
(5, 0, 113, '127.0.0.1'),
(6, 1, 113, '127.0.0.1'),
(7, 1, 113, '212.174.2.68'),
(8, 1, 113, '212.174.2.68'),
(9, 1, 113, '212.174.2.68'),
(10, 1, 113, '212.174.2.68'),
(11, 0, 113, '212.174.2.68'),
(12, 0, 113, '212.174.2.68'),
(13, 0, 113, '212.174.2.68'),
(14, 1, 113, '212.174.2.68'),
(15, 0, 113, '212.174.2.68'),
(16, 1, 113, '212.174.2.68'),
(17, 0, 113, '212.174.2.68'),
(18, 1, 113, '212.174.2.68'),
(19, 1, 113, '212.174.2.68'),
(20, 0, 113, '212.174.2.68'),
(21, 0, 113, '212.174.2.68'),
(22, 0, 113, '212.174.2.68'),
(23, 0, 113, '212.174.2.68'),
(24, 1, 113, '212.174.2.68'),
(25, 1, 113, '212.174.2.68'),
(26, 0, 113, '212.174.2.68'),
(27, 1, 113, '212.174.2.68'),
(28, 0, 113, '212.174.2.68'),
(29, 1, 113, '212.174.2.68'),
(30, 0, 113, '212.174.2.68'),
(31, 0, 113, '212.174.2.68'),
(32, 0, 113, '212.174.2.68'),
(33, 1, 113, '212.174.2.68'),
(34, 0, 113, '212.174.2.68'),
(35, 0, 113, '212.174.2.68'),
(36, 1, 113, '212.174.2.68'),
(37, 1, 113, '66.249.68.56'),
(38, 0, 113, '66.249.68.181'),
(39, 1, 114, '41.42.147.15'),
(40, 0, 114, '66.249.73.224'),
(41, 0, 115, '78.185.18.49'),
(42, 1, 115, '78.185.18.49'),
(43, 0, 115, '78.185.18.49'),
(44, 0, 115, '78.185.18.49'),
(45, 0, 115, '78.185.18.49'),
(46, 1, 115, '78.185.18.49'),
(47, 0, 115, '78.185.18.49'),
(48, 1, 115, '78.185.18.49'),
(49, 0, 115, '78.185.18.49'),
(50, 0, 115, '78.185.18.49'),
(51, 1, 115, '66.249.65.117'),
(52, 0, 115, '212.174.2.68'),
(53, 2, 115, '212.174.2.68'),
(54, 1, 115, '212.174.2.68'),
(55, 1, 115, '212.174.2.68'),
(56, 2, 115, '212.174.2.68'),
(57, 0, 115, '212.174.2.68'),
(58, 0, 115, '212.174.2.68'),
(59, 0, 115, '212.174.2.68'),
(60, 0, 115, '212.174.2.68'),
(61, 2, 115, '212.174.2.68'),
(62, 0, 115, '212.174.2.68'),
(63, 2, 115, '212.174.2.68'),
(64, 2, 115, '212.174.2.68'),
(65, 0, 115, '212.174.2.68'),
(66, 2, 115, '212.174.2.68'),
(67, 2, 115, '212.174.2.68'),
(68, 0, 115, '212.174.2.68'),
(69, 0, 115, '212.174.2.68'),
(70, 0, 115, '212.174.2.68'),
(71, 2, 115, '212.174.2.68'),
(72, 2, 115, '212.174.2.68'),
(73, 2, 115, '212.174.2.68'),
(74, 4, 115, '212.174.2.68'),
(75, 4, 115, '212.174.2.68'),
(76, 2, 115, '212.174.2.68'),
(77, 0, 115, '212.174.2.68'),
(78, 3, 115, '212.174.2.68'),
(79, 2, 115, '212.174.2.68'),
(80, 2, 115, '212.174.2.68'),
(81, 3, 115, '212.174.2.68'),
(82, 0, 115, '212.174.2.68'),
(83, 0, 115, '212.174.2.68'),
(84, 2, 115, '212.174.2.68'),
(85, 3, 115, '212.174.2.68'),
(86, 2, 115, '212.174.2.68'),
(87, 2, 115, '212.174.2.68'),
(88, 0, 115, '212.174.2.68'),
(89, 0, 115, '212.174.2.68'),
(90, 4, 115, '212.174.2.68'),
(91, 2, 115, '212.174.2.68'),
(92, 3, 115, '212.174.2.68'),
(93, 0, 115, '212.174.2.68'),
(94, 2, 115, '212.174.2.68'),
(95, 2, 115, '212.174.2.68'),
(96, 0, 115, '212.174.2.68'),
(97, 2, 115, '212.174.2.68'),
(98, 3, 115, '212.174.2.68'),
(99, 4, 115, '212.174.2.68'),
(100, 3, 115, '212.174.2.68'),
(101, 4, 115, '212.174.2.68'),
(102, 0, 115, '212.174.2.68'),
(103, 0, 115, '212.174.2.68'),
(104, 0, 115, '212.174.2.68'),
(105, 3, 115, '212.174.2.68'),
(106, 2, 115, '212.174.2.68'),
(107, 0, 115, '212.174.2.68'),
(108, 4, 115, '212.174.2.68'),
(109, 2, 115, '212.174.2.68'),
(110, 4, 115, '212.174.2.68'),
(111, 3, 115, '212.174.2.68'),
(112, 3, 115, '212.174.2.68'),
(113, 0, 115, '212.174.2.68'),
(114, 0, 115, '212.174.2.68'),
(115, 0, 115, '212.174.2.68'),
(116, 3, 115, '212.174.2.68'),
(117, 2, 115, '212.174.2.68'),
(118, 0, 115, '212.174.2.68'),
(119, 5, 115, '212.174.2.68'),
(120, 5, 115, '212.174.2.68'),
(121, 3, 115, '212.174.2.68'),
(122, 0, 115, '212.174.2.68'),
(123, 5, 115, '212.174.2.68'),
(124, 0, 115, '212.174.2.68'),
(125, 5, 115, '69.30.238.18'),
(126, 5, 115, '212.174.2.68'),
(127, 3, 115, '212.174.2.68'),
(128, 2, 115, '212.174.2.68'),
(129, 2, 115, '212.174.2.68'),
(130, 2, 115, '212.174.2.68'),
(131, 2, 115, '212.174.2.68'),
(132, 2, 115, '212.174.2.68'),
(133, 5, 115, '212.174.2.68'),
(134, 5, 115, '212.174.2.68'),
(135, 0, 115, '212.174.2.68'),
(136, 5, 115, '212.174.2.68'),
(137, 0, 115, '212.174.2.68'),
(138, 0, 115, '212.174.2.68'),
(139, 0, 115, '212.174.2.68'),
(140, 3, 115, '212.174.2.68'),
(141, 2, 115, '212.174.2.68'),
(142, 2, 115, '212.174.2.68'),
(143, 0, 115, '212.174.2.68'),
(144, 3, 115, '212.174.2.68'),
(145, 0, 115, '212.174.2.68'),
(146, 3, 115, '212.174.2.68'),
(147, 3, 115, '212.174.2.68'),
(148, 5, 115, '212.174.2.68'),
(149, 5, 115, '212.174.2.68'),
(150, 0, 115, '212.174.2.68'),
(151, 0, 115, '212.174.2.68'),
(152, 5, 115, '212.174.2.68'),
(153, 2, 115, '212.174.2.68'),
(154, 0, 115, '212.174.2.68'),
(155, 5, 115, '212.174.2.68'),
(156, 3, 115, '212.174.2.68'),
(157, 3, 115, '212.174.2.68'),
(158, 5, 115, '212.174.2.68'),
(159, 2, 115, '212.174.2.68'),
(160, 5, 115, '212.174.2.68'),
(161, 3, 115, '212.174.2.68'),
(162, 3, 115, '212.174.2.68'),
(163, 0, 115, '212.174.2.68'),
(164, 2, 115, '212.174.2.68'),
(165, 3, 115, '212.174.2.68'),
(166, 5, 115, '212.174.2.68'),
(167, 3, 115, '212.174.2.68'),
(168, 0, 115, '212.174.2.68'),
(169, 2, 115, '212.174.2.68'),
(170, 3, 115, '212.174.2.68'),
(171, 0, 115, '212.174.2.68'),
(172, 3, 115, '212.174.2.68'),
(173, 3, 115, '212.174.2.68'),
(174, 5, 115, '212.174.2.68'),
(175, 5, 115, '212.174.2.68'),
(176, 5, 115, '212.174.2.68'),
(177, 3, 115, '212.174.2.68'),
(178, 2, 115, '212.174.2.68'),
(179, 0, 115, '212.174.2.68'),
(180, 3, 115, '212.174.2.68'),
(181, 2, 115, '212.174.2.68'),
(182, 5, 115, '212.174.2.68'),
(183, 3, 115, '212.174.2.68'),
(184, 0, 115, '212.174.2.68'),
(185, 2, 115, '212.174.2.68'),
(186, 0, 115, '212.174.2.68'),
(187, 3, 115, '212.174.2.68'),
(188, 5, 115, '212.174.2.68'),
(189, 0, 115, '212.174.2.68'),
(190, 3, 115, '212.174.2.68'),
(191, 0, 115, '212.174.2.68'),
(192, 0, 115, '212.174.2.68'),
(193, 2, 115, '212.174.2.68'),
(194, 3, 115, '212.174.2.68'),
(195, 5, 115, '212.174.2.68'),
(196, 3, 115, '212.174.2.68'),
(197, 5, 115, '212.174.2.68'),
(198, 5, 115, '212.174.2.68'),
(199, 0, 115, '212.174.2.68'),
(200, 5, 115, '212.174.2.68'),
(201, 2, 115, '212.174.2.68'),
(202, 5, 115, '212.174.2.68'),
(203, 5, 115, '212.174.2.68'),
(204, 2, 115, '212.174.2.68'),
(205, 3, 115, '212.174.2.68'),
(206, 3, 115, '212.174.2.68'),
(207, 3, 115, '212.174.2.68'),
(208, 0, 115, '212.174.2.68'),
(209, 2, 115, '212.174.2.68'),
(210, 2, 115, '212.174.2.68'),
(211, 2, 115, '212.174.2.68'),
(212, 3, 115, '212.174.2.68'),
(213, 2, 115, '212.174.2.68'),
(214, 5, 115, '212.174.2.68'),
(215, 5, 115, '212.174.2.68'),
(216, 3, 115, '212.174.2.68'),
(217, 3, 115, '212.174.2.68'),
(218, 5, 115, '212.174.2.68'),
(219, 0, 115, '212.174.2.68'),
(220, 2, 119, '69.30.238.26'),
(221, 0, 119, '81.144.138.34'),
(222, 2, 121, '198.7.58.98');

-- --------------------------------------------------------

--
-- Table structure for table `askfm`
--

CREATE TABLE IF NOT EXISTS `askfm` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `user` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soru_id` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
  `title` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `loginust` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `facebook_birim` varchar(100) NOT NULL,
  `ask_birim` varchar(100) NOT NULL,
  `twitter_birim` varchar(100) NOT NULL,
  `youtube_birim` varchar(100) NOT NULL,
  `facebook_durum` int(1) NOT NULL DEFAULT '1',
  `ask_durum` int(1) NOT NULL DEFAULT '1',
  `twitter_durum` int(1) NOT NULL DEFAULT '1',
  `youtube_durum` int(1) NOT NULL DEFAULT '1',
  `bayi_cekim_limit` int(10) NOT NULL,
  `bayi_cekim_devam` int(1) NOT NULL DEFAULT '0',
  `aktif_eklenti` varchar(500) NOT NULL,
  `cekim_kontrol_limit` int(10) NOT NULL,
  `hakkimizda` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `iletisim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `telefon` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `skype` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
  `mail` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `paypal_mail` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ayarlar`
--

INSERT INTO `ayarlar` (`title`, `loginust`, `facebook_birim`, `ask_birim`, `twitter_birim`, `youtube_birim`, `facebook_durum`, `ask_durum`, `twitter_durum`, `youtube_durum`, `bayi_cekim_limit`, `bayi_cekim_devam`, `aktif_eklenti`, `cekim_kontrol_limit`, `hakkimizda`, `iletisim`, `telefon`, `skype`, `mail`, `paypal_mail`) VALUES
('', '', '', '', '', '', 1, 1, 1, 1, 0, 0, '', 0, '', '', '', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `banka_hesaplari`
--

CREATE TABLE IF NOT EXISTS `banka_hesaplari` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `banka` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hesap_sahibi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sube` varchar(100) NOT NULL,
  `hesap_numara` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `iban` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `begeniler`
--

CREATE TABLE IF NOT EXISTS `begeniler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `url` varchar(500) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `check_hash` varchar(100) NOT NULL,
  `type_id` varchar(100) NOT NULL,
  `cinsiyet` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `begeniler`
--

INSERT INTO `begeniler` (`id`, `uye_id`, `baslangic`, `hizmet_miktari`, `guncel`, `tutar`, `tarih`, `url`, `actor`, `post_id`, `check_hash`, `type_id`, `cinsiyet`, `sehir`, `durum`) VALUES
(1, 1, 1329, '11', '1329', '0.011', '1396361535', 'https://www.facebook.com/photo.php?fbid=674854482560414&set=a.477173175661880.114154.440390542673477&type=1&relevant_count=1', '', '674854482560414', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eklentiler`
--

CREATE TABLE IF NOT EXISTS `eklentiler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `eklenti_id` varchar(500) NOT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `favoriler`
--

CREATE TABLE IF NOT EXISTS `favoriler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `profil` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tweet_id` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hizli_erisim`
--

CREATE TABLE IF NOT EXISTS `hizli_erisim` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `h_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hizli_erisim_linkler`
--

CREATE TABLE IF NOT EXISTS `hizli_erisim_linkler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `url` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sayfa` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_link` varchar(255) NOT NULL,
  `resim_link` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `video_baslik` varchar(255) NOT NULL,
  `yorum` varchar(255) NOT NULL,
  `tiklanma` int(15) NOT NULL DEFAULT '0',
  `yonlendirme` int(15) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `link_bloglist`
--

CREATE TABLE IF NOT EXISTS `link_bloglist` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `blog_adres` varchar(255) NOT NULL,
  `tarih` int(11) NOT NULL DEFAULT '0',
  `tarih2` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `link_resim`
--

CREATE TABLE IF NOT EXISTS `link_resim` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `listeler`
--

CREATE TABLE IF NOT EXISTS `listeler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `liste_id` varchar(100) NOT NULL,
  `cinsiyet` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loglar`
--

CREATE TABLE IF NOT EXISTS `loglar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ip` varchar(500) NOT NULL,
  `sayfa` varchar(500) NOT NULL,
  `tarayici` varchar(500) NOT NULL,
  `tarih` varchar(500) NOT NULL,
  `tarih2` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `loglar`
--

INSERT INTO `loglar` (`id`, `ip`, `sayfa`, `tarayici`, `tarih`, `tarih2`) VALUES
(10, '157.56.93.72', 'video.php', '', '', ''),
(9, '94.123.232.168', 'video.php', '', '', ''),
(8, '94.123.232.168', 'video.php', '', '', ''),
(7, '212.174.2.68', 'video.php', '', '', ''),
(6, '212.174.2.68', 'video.php', '', '', ''),
(11, '174.129.237.157', 'video.php', '', '', ''),
(12, '78.185.35.209', 'video.php', '', '', ''),
(13, '78.185.35.209', 'video.php', '', '', ''),
(14, '78.185.35.209', 'video.php', '', '', ''),
(15, '78.185.35.209', 'video.php', '', '', ''),
(16, '78.185.35.209', 'video.php', '', '', ''),
(17, '78.185.35.209', 'video.php', '', '', ''),
(18, '78.185.35.209', 'video.php', '', '', ''),
(19, '78.185.35.209', 'video.php', '', '', ''),
(20, '78.185.35.209', 'video.php', '', '', ''),
(21, '78.185.35.209', 'video.php', '', '', ''),
(22, '78.185.35.209', 'video.php', '', '', ''),
(23, '78.185.35.209', 'video.php', '', '', ''),
(24, '78.185.35.209', 'video.php', '', '', ''),
(25, '78.185.35.209', 'video.php', '', '', ''),
(26, '78.185.35.209', 'video.php', '', '', ''),
(27, '66.249.93.32', 'video.php', '', '', ''),
(28, '78.185.35.209', 'video.php', '', '', ''),
(29, '66.249.68.47', 'video.php', '', '', ''),
(30, '78.185.35.209', 'video.php', '', '', ''),
(31, '66.249.68.47', 'video.php', '', '', ''),
(32, '66.249.68.79', 'video.php', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `odemeler`
--

CREATE TABLE IF NOT EXISTS `odemeler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `siparis_kodu` varchar(100) NOT NULL,
  `odeme_tur` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `odemeler`
--

INSERT INTO `odemeler` (`id`, `uye_id`, `siparis_kodu`, `odeme_tur`, `tutar`, `aciklama`, `tarih`, `durum`) VALUES
(1, 1, '111', '111', '111', 'vvvvvv', '22222222', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_paylasim`
--

CREATE TABLE IF NOT EXISTS `post_paylasim` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `retweet`
--

CREATE TABLE IF NOT EXISTS `retweet` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `profil` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tweet_id` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sayfalar`
--

CREATE TABLE IF NOT EXISTS `sayfalar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `sayfa` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_id` varchar(100) NOT NULL,
  `cinsiyet` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `gunluk_cekim` int(1) NOT NULL DEFAULT '0',
  `toplam_gun` int(10) NOT NULL DEFAULT '0',
  `kalan_gun` int(10) NOT NULL DEFAULT '0',
  `durum` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `words` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `site`, `words`) VALUES
(2, 'mngnakliyat ', 'nakliyat'),
(3, 'nakronakliyat', 'nakliyat'),
(5, 'www.evden-eve-nakliyat.info/', 'göztepe nakliyat');

-- --------------------------------------------------------

--
-- Table structure for table `takipciler`
--

CREATE TABLE IF NOT EXISTS `takipciler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `profil` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `profil_id` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `konu` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `okunma` int(1) NOT NULL DEFAULT '1',
  `durum` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_cevap`
--

CREATE TABLE IF NOT EXISTS `ticket_cevap` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(10) NOT NULL,
  `uye_id` int(10) NOT NULL,
  `cevaplayan_id` int(10) NOT NULL DEFAULT '0',
  `icerik` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`) VALUES
(1, 'root', '2882', 0);

-- --------------------------------------------------------

--
-- Table structure for table `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ad` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `bakiye` varchar(100) NOT NULL DEFAULT '0',
  `admin` int(1) NOT NULL DEFAULT '0',
  `cekim_kontrol` int(1) NOT NULL DEFAULT '0',
  `bayi` int(1) NOT NULL DEFAULT '0',
  `bayi_suresi` varchar(100) NOT NULL,
  `bayi_limit` int(10) NOT NULL DEFAULT '0',
  `onay` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `uyeler`
--

INSERT INTO `uyeler` (`id`, `ad`, `soyad`, `mail`, `sifre`, `tel`, `bakiye`, `admin`, `cekim_kontrol`, `bayi`, `bayi_suresi`, `bayi_limit`, `onay`) VALUES
(1, 'tes', 'tes', 'test', 'test', 'test', '99.989', 0, 0, 0, '', 0, 1),
(2, 'özgür ', 'demir', 'Demir00061@hotmail.com', '060293', '0534 496 20 96', '0', 0, 0, 0, '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE IF NOT EXISTS `youtube` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `video` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `video_id` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `z_bcvc`
--

CREATE TABLE IF NOT EXISTS `z_bcvc` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) CHARACTER SET latin1 NOT NULL,
  `click_date` int(10) NOT NULL,
  `click_date_2` varchar(32) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `z_linktl`
--

CREATE TABLE IF NOT EXISTS `z_linktl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) CHARACTER SET latin1 NOT NULL,
  `click_date` int(10) NOT NULL,
  `click_date_2` varchar(32) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `z_pings`
--

CREATE TABLE IF NOT EXISTS `z_pings` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `fb_user_id` varchar(255) CHARACTER SET latin1 NOT NULL,
  `join_date` varchar(32) CHARACTER SET latin1 NOT NULL,
  `last_login_date` varchar(32) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `z_posts`
--

CREATE TABLE IF NOT EXISTS `z_posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(64) NOT NULL,
  `post_id` varchar(64) NOT NULL,
  `post_date` int(10) NOT NULL,
  `post_date_2` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
