-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 13 Haz 2023, 15:24:29
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `woe`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolum`
--

DROP TABLE IF EXISTS `bolum`;
CREATE TABLE IF NOT EXISTS `bolum` (
  `b_id` int NOT NULL AUTO_INCREMENT,
  `b_ad` text NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=97114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `bolum`
--

INSERT INTO `bolum` (`b_id`, `b_ad`) VALUES
(0, 'BİLGİSAYAR PROGRAMCILIĞI\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE IF NOT EXISTS `mesajlar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kimden` int NOT NULL,
  `kime` int NOT NULL,
  `mesaj` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesajtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `kimden`, `kime`, `mesaj`, `mesajtime`) VALUES
(92, 31, 32, 'selam ben gundi sen kimsin', '2023-02-06 01:13:29'),
(93, 32, 31, 'as gundi bende tıro nasılsın', '2023-02-06 01:13:46'),
(94, 31, 32, 'wowwwww domitis çorbasi', '2023-02-11 00:33:40'),
(95, 32, 31, 'yunusoooo kalk', '2023-02-11 01:23:44'),
(96, 31, 32, 'tmmmm loooooo', '2023-02-11 01:24:27'),
(97, 31, 32, 'ikili mesaj görünümü', '2023-02-11 20:27:57'),
(98, 31, 38, 'idris deneme 1-2-3-4-5', '2023-02-11 23:35:12'),
(99, 11, 0, 'rfe', '2023-02-12 00:24:30'),
(100, 31, 32, 'weder', '2023-02-12 00:26:55'),
(101, 32, 38, 'tarih denemesi 1-2-3', '2023-02-13 22:37:27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` int NOT NULL,
  `outgoing_msg_id` int NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1020888112, 541599048, 'selam idris'),
(2, 541599048, 1020888112, 'alekum selam yunus'),
(3, 1020888112, 541599048, 'naber uşağummm'),
(4, 1020888112, 541599048, 'sireeeeeeeeeeeee'),
(5, 541599048, 1020888112, 'sere ğiremin'),
(6, 541599048, 1020888112, 'fsvdvd'),
(7, 541599048, 1020888112, 'dfvdfv'),
(8, 541599048, 1020888112, 'dfvfv'),
(9, 541599048, 1020888112, 'fdv'),
(10, 541599048, 1020888112, 'dfvfd'),
(11, 541599048, 1092134344, 'idrisssss'),
(12, 1092134344, 1020888112, 'coded naber?'),
(13, 1020888112, 1092134344, 'iyi knk sen nasılsın?'),
(14, 541599048, 1020888112, 'nbr'),
(15, 1020888112, 541599048, 'iyi senden'),
(16, 541599048, 1020888112, 'yunus mabeet'),
(17, 1020888112, 541599048, 'iyi la snedn nabet'),
(18, 541599048, 1020888112, 'hfh'),
(19, 541599048, 1020888112, 'hfhgfh'),
(20, 541599048, 1020888112, 'ttf,'),
(21, 541599048, 1020888112, 'yfjyfyujfgvhjgvufbgujuyvcftghmnıhgbjfv6yecdtfvhgbhgjvc6euhdfyvhjykhgfythxgw yuvftdsrxgdfghguc5'),
(22, 541599048, 1020888112, ' selam idris  alekum selam yunus   naber uşağummm   sireeeeeeeeeeeee  sere ğiremin  fsvdvd  dfvdfv  dfvfv  fdv  dfvfd  nbr   iyi senden  yunus mabeet   iyi la snedn nabet  hfh  hfhgfh  ttf,  yfjyfyujfgvhjgvufbgujuyvcftghmnıhgbjfv6yecdtfvhgbhgjvc6euhdfyvhjykhgfythxgw yuvftdsrxgdfghguc5 selam idris  alekum selam yunus   naber uşağummm   sireeeeeeeeeeeee  sere ğiremin  fsvdvd  dfvdfv  dfvfv  fdv  dfvfd  nbr   iyi senden  yunus mabeet   iyi la snedn nabet  hfh  hfhgfh  ttf,  yfjyfyujfgvhjgvufbgujuyvcftghmnıhgbjfv6yecdtfvhgbhgjvc6euhdfyvhjykhgfythxgw yuvftdsrxgdfghguc5 selam idris  alekum selam yunus   naber uşağummm   sireeeeeeeeeeeee  sere ğiremin  fsvdvd  dfvdfv  dfvfv  fdv  dfvfd  nbr   iyi senden  yunus mabeet   iyi la snedn nabet  hfh  hfhgfh  ttf,  yfjyfyujfgvhjgvufbgujuyvcftghmnıhgbjfv6yecdtfvhgbhgjvc6euhdfyvhjykhgfythxgw yuvftdsrxgdfghguc5'),
(23, 1020888112, 541599048, ' selam idris  alekum selam yunus   naber uşağummm   sireeeeeeeeeeeee  sere ğiremin  fsvdvd  dfvdfv  dfvfv  fdv  dfvfd  nbr   iyi senden  yunus mabeet   iyi la snedn nabet  hfh  hfhgfh  ttf,  yfjyfyujfgvhjgvufbgujuyvcftghmnıhgbjfv6yecdtfvhgbhgjvc6euhdfyvhjykhgfythxgw yuvftdsrxgdfghguc5 selam idris  alekum selam yunus   naber uşağummm   sireeeeeeeeeeeee  sere ğiremin  fsvdvd  dfvdfv  dfvfv  fdv  dfvfd  nbr   iyi senden  yunus mabeet   iyi la snedn nabet  hfh  hfhgfh  ttf,  yfjyfyujfgvhjgvufbgujuyvcftghmnıhgbjfv6yecdtfvhgbhgjvc6euhdfyvhjykhgfythxgw yuvftdsrxgdfghguc5 selam idris  alekum selam yunus   naber uşağummm   sireeeeeeeeeeeee  sere ğiremin  fsvdvd  dfvdfv  dfvfv  fdv  dfvfd  nbr   iyi senden  yunus mabeet   iyi la snedn nabet  hfh  hfhgfh  ttf,  yfjyfyujfgvhjgvufbgujuyvcftghmnıhgbjfv6yecdtfvhgbhgjvc6euhdfyvhjykhgfythxgw yuvftdsrxgdfghguc5 selam idris  alekum selam yunus   naber uşağummm   sireeeeeeeeeeeee  sere ğiremin  fsvdvd  dfvdfv  dfvfv  fdv  dfvfd  nbr   iyi senden  yunus ma'),
(24, 1092134344, 1020888112, 'cdslşdc'),
(25, 1092134344, 1020888112, 'ckdncnkd'),
(26, 1092134344, 1020888112, 'dcjrfcj7rğfv'),
(27, 1092134344, 1020888112, 'vptrüvkrğ,'),
(28, 1092134344, 1020888112, 'rvrtşvmlşrvü,'),
(29, 1092134344, 1020888112, 'rlğ'),
(30, 1092134344, 1020888112, 'rglvğrlv'),
(31, 1092134344, 1020888112, ','),
(32, 1092134344, 1020888112, 'vröv,l,'),
(33, 541599048, 1020888112, 'sssxsxs'),
(34, 1092134344, 1020888112, 'ffgvdfgdgd'),
(35, 1092134344, 1020888112, 'dfgdgd'),
(36, 1020888112, 278800644, 'selam'),
(37, 1020888112, 278800644, 'naber'),
(38, 1020888112, 278800644, 'sksksks'),
(39, 1020888112, 278800644, 'lssllss'),
(40, 1020888112, 278800644, 'sşsşsü'),
(41, 1020888112, 278800644, 'slşdrf'),
(42, 1020888112, 278800644, 'flvf'),
(43, 1020888112, 278800644, 'lglvğ'),
(44, 1020888112, 278800644, 'gvjıkf'),
(45, 1020888112, 278800644, 'vfhnj'),
(46, 1020888112, 278800644, 'fcıkf'),
(47, 1020888112, 278800644, 'cfhc'),
(48, 1020888112, 278800644, 'fcklf'),
(49, 1020888112, 278800644, ',fgcbfpş'),
(50, 1092134344, 1513171300, 'fsfsfsfs');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `unique_id` int NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1020888112, 'idris', 'akgül', 'idrissakgull@gmail.com', '48a90cc4a00190df457075644e922a4e', 'topic1.png', 'Active now'),
(2, 541599048, 'yunus', 'akgül', 'yunusakgull@gmail.com', '1505914f42ce73a282a64c072e80a1c9', 'topic2.png', 'Active now'),
(3, 1092134344, 'coded', 'verse', 'idris@gmail.com', '96e79218965eb72c92a549dd5a330112', 'ğ.png', 'Offline now'),
(4, 278800644, '.idris', 'ako', 'idriss@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1679842077hero-banner-1.jpg', 'Active now'),
(5, 1513171300, 'rte', 'etr', 'asdfgh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1686344284idris.png', 'Offline now');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `üyeler`
--

DROP TABLE IF EXISTS `üyeler`;
CREATE TABLE IF NOT EXISTS `üyeler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `resim` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `eposta` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `adsoyad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `cinsiyet` varchar(20) NOT NULL,
  `sifre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `bolum` int NOT NULL,
  `adres` text NOT NULL,
  `dogumtarihi` date NOT NULL,
  `insta` text NOT NULL,
  `twitter` text NOT NULL,
  `linkedln` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `b_id` (`bolum`),
  KEY `b_id_2` (`bolum`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `üyeler`
--

INSERT INTO `üyeler` (`id`, `resim`, `eposta`, `adsoyad`, `cinsiyet`, `sifre`, `bolum`, `adres`, `dogumtarihi`, `insta`, `twitter`, `linkedln`, `datetime`) VALUES
(31, 'idris.jpg', 'idrissakgull@gmail.com', 'idris akgül', 'bay', '111111', 0, 'İzmir', '2001-03-02', 'https://www.instagram.com/idrissakgull/', 'https://twitter.com/idrissakgull/', 'https://www.linkedin.com/in/idris-akg%C3%BCl-aa3161217/', '2023-02-23 21:07:58'),
(32, 'yunus.jpg', 'yune8503@gmail.com', 'yunus akgül', 'bay', '20212021', 0, 'Batman', '1999-11-14', '', '', '', '2023-02-23 21:08:51'),
(33, 'team1.png', '2021707001@ogr.deu.edu.tr', 'melis acan', 'bayan', '000000', 0, 'Bursa', '2004-02-23', '', '', '', '2023-02-23 21:11:09'),
(34, 'team3.png', 'gbtbg@gmail.com', 'aliye ascan', 'bayan', 'sfwerwfwe', 0, 'Kütahya', '2000-07-06', '', '', '', '2023-02-23 21:11:53'),
(35, 'team2.png', 'ipo@gmail.com', 'cansu merdan nevi', 'bayan', '123456789', 0, 'Malatya', '2004-02-13', '', '', '', '2023-02-23 23:56:16'),
(36, 'ğ.png', 'idris.akgul@ogr.deu.edu.tr', 'coded verse', 'bay', '477235', 0, 'izmir', '1994-02-26', '', '', '', '2023-02-24 19:46:25'),
(37, NULL, 'ipoo@gmail.com', 'ahmet can nuray', 'bay', '12345', 0, 'Antalya', '1998-02-25', '', '', '', '2023-02-25 03:58:01'),
(38, 'team4.png', 'bugraakkas@gmail.com', 'buğra akkaş', 'bay', 'bababa', 0, 'İzmir', '2001-01-19', '', '', '', '2023-02-25 22:54:18'),
(39, NULL, 'gp@gmail.com', 'gül papatya', 'bayan', 'gpgpgp', 0, 'Afyonkarahisar', '2001-02-26', '', '', '', '2023-02-26 00:04:12'),
(40, NULL, 'gbefetbg@gmail.com', 'ahmet can nuray', 'bay', '212121223', 0, 'Denizli', '2023-03-17', '', '', '', '2023-03-01 22:30:28'),
(42, NULL, 'q@gmail.com', 'ali', 'bay', '222222', 0, 'Bingöl', '2023-03-03', '', '', '', '2023-03-03 23:47:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
