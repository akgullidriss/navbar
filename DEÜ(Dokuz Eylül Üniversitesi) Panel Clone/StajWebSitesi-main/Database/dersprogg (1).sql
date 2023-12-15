-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 10 Eyl 2023, 18:25:23
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dersprogg`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_table`
--

DROP TABLE IF EXISTS `admin_table`;
CREATE TABLE IF NOT EXISTS `admin_table` (
  `ak_id` int NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `admin_password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `ak_ad` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`ak_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `admin_table`
--

INSERT INTO `admin_table` (`ak_id`, `admin_name`, `admin_password`, `ak_ad`) VALUES
(2, 'admin', '123456', 'admin_panel');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `akademik_per`
--

DROP TABLE IF EXISTS `akademik_per`;
CREATE TABLE IF NOT EXISTS `akademik_per` (
  `ak_id` int NOT NULL AUTO_INCREMENT,
  `ak_ad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ak_unvan` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `bolum_id` int NOT NULL,
  `yerleske_id` int NOT NULL,
  `ak_kullanici` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ak_pass` int NOT NULL,
  PRIMARY KEY (`ak_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `akademik_per`
--

INSERT INTO `akademik_per` (`ak_id`, `ak_ad`, `ak_unvan`, `bolum_id`, `yerleske_id`, `ak_kullanici`, `ak_pass`) VALUES
(1, 'ÖZER KESTANE', 'DR.', 1, 1, 'ozer.kestane', 123456),
(3, 'DENİZ TERZİLER', 'PROF.', 1, 1, 'deniz.akademik', 123456);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ak_ders`
--

DROP TABLE IF EXISTS `ak_ders`;
CREATE TABLE IF NOT EXISTS `ak_ders` (
  `ak_id` int NOT NULL AUTO_INCREMENT,
  `gun_id` int NOT NULL,
  `saat_id` int NOT NULL,
  `ders_id` int NOT NULL,
  `dersprog_id` int NOT NULL,
  PRIMARY KEY (`ak_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `ak_ders`
--

INSERT INTO `ak_ders` (`ak_id`, `gun_id`, `saat_id`, `ders_id`, `dersprog_id`) VALUES
(1, 1, 4, 1, 53),
(3, 3, 4, 16, 71);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolum`
--

DROP TABLE IF EXISTS `bolum`;
CREATE TABLE IF NOT EXISTS `bolum` (
  `bolum_id` int NOT NULL AUTO_INCREMENT,
  `bolum_ad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `lisans_id` int NOT NULL,
  PRIMARY KEY (`bolum_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `bolum`
--

INSERT INTO `bolum` (`bolum_id`, `bolum_ad`, `lisans_id`) VALUES
(1, 'Bilgisayar Programcılığı', 2),
(2, 'Mekanik', 2),
(3, 'Moda Tasarım', 4),
(4, 'Mekanik', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersler`
--

DROP TABLE IF EXISTS `dersler`;
CREATE TABLE IF NOT EXISTS `dersler` (
  `ders_id` int NOT NULL AUTO_INCREMENT,
  `ders_ad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `bolum_id` int NOT NULL,
  `sinif_id` int NOT NULL,
  `donem_id` int NOT NULL,
  PRIMARY KEY (`ders_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `dersler`
--

INSERT INTO `dersler` (`ders_id`, `ders_ad`, `bolum_id`, `sinif_id`, `donem_id`) VALUES
(1, 'BLP 4202-SiSTEM ANALiZi VE TASARIMI', 1, 1, 1),
(2, 'BLP 4226-E-TiCARET', 1, 1, 2),
(3, 'Felsefe', 1, 1, 2),
(18, 'CE323', 2, 1, 1),
(15, 'SE223', 1, 2, 3),
(16, 'SE226', 1, 2, 3),
(17, 'SE216', 1, 2, 3),
(20, 'atatürk', 1, 2, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dersprogkayit`
--

DROP TABLE IF EXISTS `dersprogkayit`;
CREATE TABLE IF NOT EXISTS `dersprogkayit` (
  `dersprog_id` int NOT NULL AUTO_INCREMENT,
  `donem_id` int NOT NULL,
  `bolum_id` int NOT NULL,
  `egt_id` int NOT NULL,
  `sinif_id` int NOT NULL,
  `sube_id` int NOT NULL,
  `bas_tarih` date NOT NULL,
  `bitis_tarih` date NOT NULL,
  PRIMARY KEY (`dersprog_id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `dersprogkayit`
--

INSERT INTO `dersprogkayit` (`dersprog_id`, `donem_id`, `bolum_id`, `egt_id`, `sinif_id`, `sube_id`, `bas_tarih`, `bitis_tarih`) VALUES
(71, 2, 1, 1, 2, 2, '2023-08-01', '2023-08-31'),
(72, 2, 1, 1, 1, 1, '2023-08-01', '2023-08-31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders_kayit`
--

DROP TABLE IF EXISTS `ders_kayit`;
CREATE TABLE IF NOT EXISTS `ders_kayit` (
  `kayit_id` int NOT NULL AUTO_INCREMENT,
  `dersprog_id` int NOT NULL,
  `ders_id` int NOT NULL,
  `uyg_id` int NOT NULL,
  `tip_id` int NOT NULL,
  `yerleske_id` int NOT NULL,
  `blok_id` int NOT NULL,
  `kat_id` int NOT NULL,
  `derslik_id` int NOT NULL,
  `ak_id` int NOT NULL,
  `gun_id` int NOT NULL,
  `saat_id` int NOT NULL,
  PRIMARY KEY (`kayit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=197 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `ders_kayit`
--

INSERT INTO `ders_kayit` (`kayit_id`, `dersprog_id`, `ders_id`, `uyg_id`, `tip_id`, `yerleske_id`, `blok_id`, `kat_id`, `derslik_id`, `ak_id`, `gun_id`, `saat_id`) VALUES
(192, 71, 16, 2, 2, 1, 1, 1, 1, 1, 3, 1),
(195, 71, 17, 2, 2, 2, 5, 3, 3, 3, 5, 1),
(183, 71, 17, 2, 1, 2, 4, 2, 2, 1, 1, 1),
(185, 71, 17, 1, 1, 2, 4, 2, 2, 3, 1, 4);

--
-- Tetikleyiciler `ders_kayit`
--
DROP TRIGGER IF EXISTS `trg_ders_kayit`;
DELIMITER $$
CREATE TRIGGER `trg_ders_kayit` AFTER INSERT ON `ders_kayit` FOR EACH ROW BEGIN
    INSERT INTO ak_ders (ak_id, gun_id, saat_id, ders_id, dersprog_id)
    VALUES (NEW.ak_id, NEW.gun_id, NEW.saat_id, NEW.ders_id, NEW.dersprog_id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders_tip`
--

DROP TABLE IF EXISTS `ders_tip`;
CREATE TABLE IF NOT EXISTS `ders_tip` (
  `tip_id` int NOT NULL,
  `tip_ad` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `ders_tip`
--

INSERT INTO `ders_tip` (`tip_id`, `tip_ad`) VALUES
(1, 'Yüzyüze'),
(2, 'Uzaktan');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `donem`
--

DROP TABLE IF EXISTS `donem`;
CREATE TABLE IF NOT EXISTS `donem` (
  `donem_id` int NOT NULL AUTO_INCREMENT,
  `donem_ad` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`donem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `donem`
--

INSERT INTO `donem` (`donem_id`, `donem_ad`) VALUES
(1, 'Güz'),
(2, 'Bahar'),
(3, 'Yaz');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egt_durum`
--

DROP TABLE IF EXISTS `egt_durum`;
CREATE TABLE IF NOT EXISTS `egt_durum` (
  `egt_id` int NOT NULL,
  `egt_durum` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `egt_durum`
--

INSERT INTO `egt_durum` (`egt_id`, `egt_durum`) VALUES
(1, 'ÖÖ'),
(2, 'İÖ'),
(3, 'UÖ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gun`
--

DROP TABLE IF EXISTS `gun`;
CREATE TABLE IF NOT EXISTS `gun` (
  `gun_id` int NOT NULL AUTO_INCREMENT,
  `gun_ad` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`gun_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `gun`
--

INSERT INTO `gun` (`gun_id`, `gun_ad`) VALUES
(1, 'PAZARTESİ'),
(2, 'SALI'),
(3, 'ÇARŞAMBA'),
(4, 'PERŞEMBE'),
(5, 'CUMA'),
(6, 'CUMARTESİ'),
(7, 'PAZAR');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `loginper`
--

DROP TABLE IF EXISTS `loginper`;
CREATE TABLE IF NOT EXISTS `loginper` (
  `ak_id` int NOT NULL AUTO_INCREMENT,
  `ak_kullanici` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `ak_pass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`ak_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `loginper`
--

INSERT INTO `loginper` (`ak_id`, `ak_kullanici`, `ak_pass`) VALUES
(1, 'ozer.kestane', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

DROP TABLE IF EXISTS `ogrenci`;
CREATE TABLE IF NOT EXISTS `ogrenci` (
  `ak_id` int NOT NULL AUTO_INCREMENT,
  `ak_ad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ogr_email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `ogr_pass` int NOT NULL,
  `egt_id` int NOT NULL,
  `bolum_id` int NOT NULL,
  `sube_id` int NOT NULL,
  `sinif_id` int NOT NULL,
  PRIMARY KEY (`ak_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`ak_id`, `ak_ad`, `ogr_email`, `ogr_pass`, `egt_id`, `bolum_id`, `sube_id`, `sinif_id`) VALUES
(1, 'idris akgül', 'idris.akgul', 123456, 1, 1, 1, 1),
(2, 'deniz terziler', 'deniz.terziler', 12345, 1, 1, 2, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `parametre`
--

DROP TABLE IF EXISTS `parametre`;
CREATE TABLE IF NOT EXISTS `parametre` (
  `param_id` int NOT NULL AUTO_INCREMENT,
  `yil_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `donem_id` int NOT NULL,
  `donemstart` date NOT NULL,
  `donemend` date NOT NULL,
  PRIMARY KEY (`param_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `parametre`
--

INSERT INTO `parametre` (`param_id`, `yil_id`, `donem_id`, `donemstart`, `donemend`) VALUES
(1, '2023 - 2024', 1, '2023-07-01', '2023-07-31'),
(2, '2023 - 2024', 2, '2023-08-01', '2023-08-31'),
(3, '2023 - 2024', 3, '2023-09-02', '2023-09-30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `saat`
--

DROP TABLE IF EXISTS `saat`;
CREATE TABLE IF NOT EXISTS `saat` (
  `saat_id` int NOT NULL AUTO_INCREMENT,
  `saatler` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`saat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `saat`
--

INSERT INTO `saat` (`saat_id`, `saatler`) VALUES
(1, '09:25 - 10:10'),
(2, '10:20 - 11:05'),
(3, '11:15 - 12:00'),
(4, '13:00 - 13:45'),
(5, '13:55 - 14:40'),
(6, '14:50 - 15:35'),
(7, '15:45 - 16:30'),
(8, '16:40 - 17:25'),
(9, '17:35 - 18:20'),
(10, '18:30 - 19:15'),
(11, '19:25 - 20:10'),
(12, '20:20 - 21:05'),
(13, '21:15 - 22:00'),
(14, '22:10 - 22:55'),
(15, '23:05 - 23:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `subeler`
--

DROP TABLE IF EXISTS `subeler`;
CREATE TABLE IF NOT EXISTS `subeler` (
  `sube_id` int NOT NULL AUTO_INCREMENT,
  `sube_ad` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  `bolum_id` int NOT NULL,
  `sinif` int NOT NULL,
  PRIMARY KEY (`sube_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `subeler`
--

INSERT INTO `subeler` (`sube_id`, `sube_ad`, `bolum_id`, `sinif`) VALUES
(1, 'A', 1, 1),
(2, 'B', 1, 2),
(3, 'B', 2, 1),
(4, 'B', 1, 1),
(5, 'A', 3, 1),
(6, 'B', 3, 1),
(7, 'C', 3, 2),
(8, 'D', 3, 3),
(9, 'A', 1, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyg_tip`
--

DROP TABLE IF EXISTS `uyg_tip`;
CREATE TABLE IF NOT EXISTS `uyg_tip` (
  `uyg_id` int NOT NULL AUTO_INCREMENT,
  `uyg_ad` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`uyg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `uyg_tip`
--

INSERT INTO `uyg_tip` (`uyg_id`, `uyg_ad`) VALUES
(1, 'Teorik'),
(2, 'Uygulamalı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yerleske`
--

DROP TABLE IF EXISTS `yerleske`;
CREATE TABLE IF NOT EXISTS `yerleske` (
  `yerleske_id` int NOT NULL AUTO_INCREMENT,
  `yerleske_ad` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`yerleske_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `yerleske`
--

INSERT INTO `yerleske` (`yerleske_id`, `yerleske_ad`) VALUES
(1, 'Meslek Yüksek Okulu'),
(2, 'Eğitim Fakültesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yerleske_blok`
--

DROP TABLE IF EXISTS `yerleske_blok`;
CREATE TABLE IF NOT EXISTS `yerleske_blok` (
  `blok_id` int NOT NULL AUTO_INCREMENT,
  `yerleske_id` int NOT NULL,
  `blok_ad` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`blok_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `yerleske_blok`
--

INSERT INTO `yerleske_blok` (`blok_id`, `yerleske_id`, `blok_ad`) VALUES
(1, 1, 'A'),
(2, 1, 'B'),
(3, 1, 'C'),
(4, 2, 'A'),
(5, 2, 'B');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yerleske_derslik`
--

DROP TABLE IF EXISTS `yerleske_derslik`;
CREATE TABLE IF NOT EXISTS `yerleske_derslik` (
  `derslik_id` int NOT NULL AUTO_INCREMENT,
  `yerleske_id` int NOT NULL,
  `blok_id` int NOT NULL,
  `kat_id` int NOT NULL,
  `derslik_ad` int NOT NULL,
  PRIMARY KEY (`derslik_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `yerleske_derslik`
--

INSERT INTO `yerleske_derslik` (`derslik_id`, `yerleske_id`, `blok_id`, `kat_id`, `derslik_ad`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 4, 2, 1),
(3, 2, 5, 3, 1),
(4, 2, 5, 4, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yerleske_kat`
--

DROP TABLE IF EXISTS `yerleske_kat`;
CREATE TABLE IF NOT EXISTS `yerleske_kat` (
  `kat_id` int NOT NULL AUTO_INCREMENT,
  `yerleske_id` int NOT NULL,
  `blok_id` int NOT NULL,
  `kat_ad` int NOT NULL,
  PRIMARY KEY (`kat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `yerleske_kat`
--

INSERT INTO `yerleske_kat` (`kat_id`, `yerleske_id`, `blok_id`, `kat_ad`) VALUES
(1, 1, 1, 1),
(2, 2, 4, 1),
(3, 2, 5, 1),
(4, 2, 5, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
