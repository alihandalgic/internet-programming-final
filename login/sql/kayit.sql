-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 04 Oca 2023, 15:18:09
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kayit`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

DROP TABLE IF EXISTS `anasayfa`;
CREATE TABLE IF NOT EXISTS `anasayfa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`id`, `no`, `baslik`, `aciklama`) VALUES
(1, '01', 'KULÜP KONSEPTLERI', 'Farklı ihtiyaçlara göre tasarlanmış, en yeni teknolojilerle donatılmış kulüplerde yerini al.'),
(2, '02', 'HER YERDE SPOR', 'QFit uygulaması ile dilediğin yer ve zamanda eşsiz bir spor deneyimi.'),
(3, '03', 'TOPLULUKkkkkkkkkk', 'Açık havada farklı grup dersi konseptleri ile keyifli bir spor ayrıcalığı.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa_sub`
--

DROP TABLE IF EXISTS `anasayfa_sub`;
CREATE TABLE IF NOT EXISTS `anasayfa_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anasayfa_sub`
--

INSERT INTO `anasayfa_sub` (`id`, `baslik`, `icerik`) VALUES
(1, 'İYİ YAŞAMAYA VE SPORA DAİR ARADIĞIN HER ŞEY BURADA!', 'En yeni teknolojiler ve spor ekipmanlarıyla, spor deneyimini bir adım ileri taşı! Profesyonel eğitmenler ile birlikte antrenman yap, maksimum verim al. ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `numara` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `gorsel` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `baslik`, `icerik`, `gorsel`) VALUES
(1, 'KİŞİSEL EĞİTMEN İLE HEDEFLERİNE DAHA YAKINSIN', 'İster yeni spor alışkanlığı kazanmak isteyen biri ol, ister yarışmaya hazırlanan ileri seviye bir sporcu; sana ve hedeflerine özel hazırladığı antrenman içeriğini en doğru şekilde uygulamanı sağlayacak eğitmen yanı başında. Eğitmenin, sadece günün antrenman anında değil geri kalanında da seni yönlendirerek dinlenme ve beslenmenin en doğru etkilerinden faydalanmanı sağlayacak. Kulübündeki kişisel eğitmenleri görmek ve özel ders için iletişime geçmek için QFit uygulamasındaki Kulübümdeki Eğitmenler alanını ziyaret edebilirsin.', 'img-1.jpg'),
(3, '(GYM FLOOR EXERCISE) İLE FİT BİR VÜCUDA KAVUŞ', 'Yalnızca 30 dakika içerisinde tüm vücudu çalıştırmanın yanı sıra kardiyo da yaptığın bir derse katılmaya ne dersin? 7 farklı temaya sahip GFX ile odaklanmak istediğin bölgeye ağırlık veren, yüksek yoğunluklu (HIIT) bir içeriği seçebilir, fitness seviyen ne olursa olsun eğitmenin yönlendirmeleri ile hareketlerin farklı varyasyonlarını yaparak sana en uygun seviyede dersi tamamlayabilirsin. Hem az vaktim var diyor hem de eğitmen gözetiminde antrenman yapmak istiyorsan GFX’i mutlaka denemelisin', '333.PNG'),
(4, 'QFit İLE KİŞİYE ÖZEL PROGRAM VE İÇERİKLER', 'Spora ve iyi yaşama dair her şeyi kişiye özel antrenman programları ve içeriklerle harmanlayarak, dilediğin yer ve zamanda erişime sunan MAC+ sadece bir adım uzağında! Konusunda uzman eğitmenler tarafından hazırlanmış binlerce içeriğe ulaşmak artık çok kolay. Geniş kütüphanesi ile hedeflerine hızlıca ulaşman için MAC+, App Store ve Google Play’de seni bekliyor.', '444.PNG');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sss`
--

DROP TABLE IF EXISTS `sss`;
CREATE TABLE IF NOT EXISTS `sss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sss`
--

INSERT INTO `sss` (`id`, `baslik`, `icerik`) VALUES
(1, 'NASIL ÜYE OLURUM?', 'QFit\'e üye olmak için kulübe gitmene gerek yok! Yapman gereken yalnızca Üye Ol butonuna tıklamak ve ilgili adımları tamamlamak.'),
(2, 'KULÜPTE GRUP DERSLERİ VAR MI?', 'QFit’te ihtiyacına yönelik onlarca grup dersi bulunmaktadır.'),
(3, 'GRUP DERSLERİ ÜCRETLİ Mİ?', 'QFit’te tüm grup dersleri ücretsizdir.'),
(4, 'GRUP DERSİ İÇİN NEREDEN REZERVASYON YAPTIRABİLİRİM?', 'QFit mobil uygulamayı cep telefonuna indirebilir, dilediğin zaman rezervasyon yaptırabilirsin. Derslerin müsaitlik durumuna göre, kulübe gittiğinde de derslere katılım sağlayabilirsin.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`) VALUES
(12, 'alihan', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
