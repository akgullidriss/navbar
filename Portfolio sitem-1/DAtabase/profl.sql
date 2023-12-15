-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 13 Haz 2023, 15:26:13
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
-- Veritabanı: `profl`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alanlar`
--

DROP TABLE IF EXISTS `alanlar`;
CREATE TABLE IF NOT EXISTS `alanlar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `oran` text COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `alanlar`
--

INSERT INTO `alanlar` (`id`, `ad`, `resim`, `oran`) VALUES
(1, 'Web Tasarım', 'webtasarım.png', '90'),
(2, 'Oyun Geliştirme', 'game.png', '35'),
(3, 'Form Geliştirme', 'designer.png', '70'),
(4, 'Mobil Geliştirme', 'mobil.png\r\n', '25'),
(5, 'Veri Bilimi', 'ver.png\r\n', '65'),
(6, 'Grafik Tasarım', 'illustration.png', '55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `me`
--

DROP TABLE IF EXISTS `me`;
CREATE TABLE IF NOT EXISTS `me` (
  `id` int NOT NULL AUTO_INCREMENT,
  `resim` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `insta` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `linkedln` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `meslek` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `cv` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `adres` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `telefon` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `bolum` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `adminuser` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `adminpas` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `me`
--

INSERT INTO `me` (`id`, `resim`, `insta`, `twitter`, `linkedln`, `facebook`, `meslek`, `cv`, `email`, `adres`, `telefon`, `bolum`, `adminuser`, `adminpas`) VALUES
(1, 'idris.jpg', 'https://www.instagram.com/idrissakgull/', '       https://twitter.com/idrissakgull/ ', 'https://www.linkedin.com/in/idris-akg%C3%BCl-aa3161217/', 'https://www.facebook.com/profile.php?id=100082503443787', 'Bilgisayar Programcısı', 'cv.PNG', 'idrissakgull@gmail.com', 'izmir/turkey', '+905300753714', 'Bilgisayar Programcılığı', 'idrissakgull', 477235);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

DROP TABLE IF EXISTS `mesaj`;
CREATE TABLE IF NOT EXISTS `mesaj` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

DROP TABLE IF EXISTS `projeler`;
CREATE TABLE IF NOT EXISTS `projeler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `baslik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama4` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `alan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim4` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `projeicon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`id`, `baslik`, `aciklama`, `aciklama2`, `aciklama3`, `aciklama4`, `alan`, `resim1`, `resim2`, `resim3`, `resim4`, `projeicon`, `video`, `tarih`) VALUES
(25, 'Wp web klon Html-Css-Js', 'Whatsap Web anasayfasını klonladım sohbet ve iconları aynı şekilde klonladım\r\nbu projede html-css-javascript kullandım ilerleyen zamanlarda bunlara ek php eklenerek veriler veri tabanından getirilebilir.', 'Ahmet kişisine tıklanınca ahmete ait sohbet yanda açılması için javascript kullandık tabiki buna ajax teklonojisi eklenerek tıklanan kişiyi tespit edip ona göre sohbet bölümü açtırılabilir', 'yukardaki yeni sohbet iconuna tıklanarak yeni kişilerle sohbet edebilirsiniz kayıtlı olan kişilerin sayfasını klonladım', 'Sohbetler bölümünde seçenekler kısmını div şeklinde yazdım ve javascript ile onclik metodunu kullanarak hide show şeklinde ayarladım.', 'Web Tasarım', 'wpklon/wpklon.jpg', 'wpklon/wpklon2.jpg', 'wpklon/wpklon3.jpg', 'wpklon/wpklon5.jpg', 'wpklon/wpklon2.jpg', 'https://www.youtube.com/embed/qbVWliJ1g6k', '2022-05-17 17:58:52'),
(34, 'Unity Issız Ada Oyunu', 'Unity için hazır şablon ve karakterler için Unity asset storeyeyi kullanabilirsiniz.Ben ordan hazır ada aldım.\r\nve componenentlerini kendime göre ayarladım.temas çizgilerini tek tek düzelttim araya bir yere Geçiş evren kapısı tasarladım.', 'Oyunun temel amacı gerçek hayattaki koşuşturmacayı emeği ve para kazanıp hayatını sürdürmeye uyarlanmıştır.\r\n80 coin ve 3 anahtar toplamadan öbür evrene geçemiyorsun bunuda belirli sürede yapmalısın buda gerçek hayattaki ömüre karşılık geliyor.\r\n', 'Bir sonraki evrene geçmek için belirlenen kriterleri belirlenen sürede yapman gerekiyor yandaki resimde evren kapısı gösteriliyor', '80 coin ve 3 anahtarı belirlenen sürede toplamayı başarırsanız bir sonraki evrene geçmiş olursunuz başaramadığınız taktirde süre bitiminde ölürsünüz.', 'Oyun Geliştirme', 'oyunada/o1.png', 'oyunada/o3.png', 'oyunada/o4.png', 'oyunada/o2.png', 'oyunada/o1.png', 'https://www.youtube.com/embed/FutPolWqolw', '2022-12-19 14:46:49'),
(33, 'C# ile Basit Hesap Makinesi', 'C# ile tuşlu basit dört işlem yapan hesap makinesi yaptım.\r\ntoplama,çıkarma,bölme ve çarpma yapabilen bu hesap makinesini form ile yazdım.', 'Yazılım serüvenim ilerledikçe bu uygulamayı dahada geliştireceğim.\r\nekstra virgüllü işlemler yüzde alma işlemleri de eklenebilir.', 'En fazla 10 haneli işlemi yapabilir ondan sonrasına error verir.\r\n', 'C tuşu fonksiyon olarak tüm ekranı temizler.en başa gelmenizi sağlar', 'Form Geliştirme', 'cshesapmakinesi/hm1.png', 'cshesapmakinesi/hm2.png', 'cshesapmakinesi/hm3.png', 'cshesapmakinesi/hm4.png', 'cshesapmakinesi/hm4.png', 'https://www.youtube.com/embed/wuXqZIm4eSY', '2021-12-18 22:37:09'),
(35, 'Unity ile Çöp Adam Oyunu', 'Bu oyunda engeller ve coin denilen elmas canlar var.\r\nengellere componentler tanımlı çarpma esnasında geriye zıplar ve tanımlanan değişkeni bir artırır error sayısına ekler', 'Tanımlanan error değişkeni eğer 3  olursa yani çöp adam üç defa engele çarparsa oyun en başa birinci levele döner', 'Engellere 3 defa çarpmadan karşı taraftaki finish noktasına varırsanız oyun ikinci levele  geçer.', 'Oyun Gelişme aşamsaında olduğu için ve benim ilk oyun projem olduğu için üç levelden oluşmaktadır.bu üç leveli geçince tebrikler oyun bitti paneli ile karşılaşırsınız.', 'Oyun Geliştirme', 'oyuncöpadam/adam1.PNG', 'oyuncöpadam/adam2.PNG', 'oyuncöpadam/adam3.PNG', 'oyuncöpadam/adam4.PNG', 'oyuncöpadam/adam1.PNG', 'https://www.youtube.com/embed/QnO_-Ejx4dw', '2023-01-10 15:14:45');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referans`
--

DROP TABLE IF EXISTS `referans`;
CREATE TABLE IF NOT EXISTS `referans` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `resim` blob NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `referans`
--

INSERT INTO `referans` (`id`, `ad`, `resim`, `email`, `aciklama`) VALUES
(28, 'cafer', 0x7265666572616e736c61722f6667313833312e706e67, 'gbtbg@gmail.com', 'descriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescriptiond');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetenekler`
--

DROP TABLE IF EXISTS `yetenekler`;
CREATE TABLE IF NOT EXISTS `yetenekler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ad` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `oran` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yetenekler`
--

INSERT INTO `yetenekler` (`id`, `ad`, `oran`) VALUES
(36, 'C#', 85),
(35, 'JAVASCRİPT', 45),
(34, 'PHP', 55),
(33, 'HTML-CSS', 75),
(37, 'PHOTOSHOP', 40),
(38, 'DELPHİ', 60),
(39, 'UNİTY', 30),
(40, 'JAVA', 35);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
