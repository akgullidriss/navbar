-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 13 Haz 2023, 15:27:01
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
-- Veritabanı: `sitem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alanyetenekler`
--

DROP TABLE IF EXISTS `alanyetenekler`;
CREATE TABLE IF NOT EXISTS `alanyetenekler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `oran` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `alanyetenekler`
--

INSERT INTO `alanyetenekler` (`id`, `ad`, `oran`) VALUES
(5, 'WEB TASARIM', 90),
(6, 'yunus ', 45);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bloglar`
--

DROP TABLE IF EXISTS `bloglar`;
CREATE TABLE IF NOT EXISTS `bloglar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `baslik` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` text COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `bloglar`
--

INSERT INTO `bloglar` (`id`, `baslik`, `aciklama`, `resim`, `tarih`, `link`) VALUES
(4, 'Whatsap Projem', '$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]$row[\"baslik\"]              \n                    &lt;h3 class=&quot;text-primary mx-3&quot; style=&quot;color:black !important;&quot;&gt;PROJELER&lt;/h3&gt;\n               \n                &lt;div class=&quot;d-flex align-items-center ms-3 mb-2&quot;&gt;\n                    &lt;div class=&quot;position-relative&quot;&gt;\n                   &lt;a href=&quot;pprojeekle&quot;&gt; &lt;img class=&quot;rounded-circle&quot; src=&quot;img/plus.png&quot; alt=&quot;&quot; style=&quot;width: 40px; height: 40px;&quot;&gt;&lt;/a&gt;  \n                      \n                        \n                    &lt;/div&gt;\n                    &lt;div class=&quot;ms-3 px-3&quot;  &gt;\n                        &lt;h6 class=&quot;mb-0 mt-1 &quot;&gt;EKLE&lt;/h6&gt;\n                        \n                    &lt;/div&gt;\n                &lt;/div&gt;\n               \n            &lt;/nav&gt;\n        &lt;/div&gt;\n\n', 'PPP.png', '2023-01-06 19:48:17', 'whatsap-projem'),
(5, 'computer programming', 'Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.v', 'PPP.png', '2023-01-06 19:52:27', 'computer-programming'),
(6, 'idris', 'Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.Kayıt Başarısız NO.v&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \n&lt;form action=&quot;&quot; method=&quot;post&quot;&gt; \nmethod=&quot;post&quot;&gt; \n\n    &lt;strong&gt;AD:&lt;/strong&gt;&lt;br&gt;\n&lt;input type=&quot;text&quot; class=&quot;from-control&quot; name=&quot;ad&quot;&gt;&lt;br&gt;\n\n&lt;strong&gt;ORAN:&lt;/strong&gt;&lt;br&gt;\n&lt;input type=&quot;text&quot; class=&quot;from-control&quot; name=&quot;oran&quot;&gt;&lt;br&gt;&lt;br&gt;\n\n\n\n&lt;input type=&quot;submit&quot; value=&quot;YAYINLA&quot; class=&quot;btn btn-dark&quot;&gt;\n\n\n&lt;/form&gt;', 'PPP.png', '2023-01-06 20:09:34', 'idris'),
(7, '[value-4]', '[value-5]', 'PPP.png', '2023-01-10 20:07:25', ''),
(8, '[value-4]', '[value-5]', 'PPP.png', '2023-01-10 20:07:25', ''),
(9, '[value-4]', '[value-5]', 'PPP.png', '2023-01-10 20:07:25', ''),
(10, '[value-4]', '[value-5]', 'PPP.png', '2023-01-10 20:07:25', ''),
(11, '[value-4]', '[value-5]', 'PPP.png', '2023-01-10 20:07:25', ''),
(12, '[value-4]', '[value-5]', 'PPP.png', '2023-01-10 20:07:25', ''),
(13, '[value-4]', '[value-5]', 'PPP.png', '2023-01-10 20:07:25', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

DROP TABLE IF EXISTS `projeler`;
CREATE TABLE IF NOT EXISTS `projeler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `baslik` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama2` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama3` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `videoaciklama` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim1` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim2` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim3` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `projeicon` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `video` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `link` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`id`, `baslik`, `aciklama`, `aciklama2`, `aciklama3`, `videoaciklama`, `resim1`, `resim2`, `resim3`, `projeicon`, `video`, `link`, `tarih`) VALUES
(25, 'Whatsap Projem', '&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;', '&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;', '&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;&lt;?=$_data[&quot;aciklama&quot;]?&gt;', '', 'wpklon.jpg', 'wpklon.jpg', 'wpklon.jpg', 'rrrr.png', 'wpvideo.mp4', 'whatsap-projem', '2023-03-18 17:42:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetenekler`
--

DROP TABLE IF EXISTS `yetenekler`;
CREATE TABLE IF NOT EXISTS `yetenekler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `oran` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yetenekler`
--

INSERT INTO `yetenekler` (`id`, `ad`, `oran`) VALUES
(15, 'aslı', 45),
(14, 'aslı', 45);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE IF NOT EXISTS `yorumlar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` text COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=147 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `email`, `mesaj`, `tarih`, `link`) VALUES
(146, 'idris.akgul@ogr.deu.edu.tr', 'wdsdsd', '2023-06-09 21:05:27', ''),
(145, '3', '3333', '2023-02-01 15:19:20', ''),
(144, 'gbtbg@gmail.com', '33333', '2023-02-01 15:19:12', ''),
(143, '3', '3', '2023-02-01 15:19:07', ''),
(142, '2021707001@ogr.deu.edu.tr', 'eee', '2023-02-01 15:19:03', ''),
(141, '2021707001@ogr.deu.edu.tr', 'ssss', '2023-02-01 15:19:00', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
