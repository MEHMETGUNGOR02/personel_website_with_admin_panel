-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 28 Ara 2018, 07:11:48
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mydb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'mehmet', 'mehmet'),
(3, 'ahmet', 'ahmet');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ckeditor`
--

CREATE TABLE `ckeditor` (
  `id` int(10) NOT NULL,
  `post_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `post` varchar(2500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ckeditor`
--

INSERT INTO `ckeditor` (`id`, `post_baslik`, `post`) VALUES
(1, '', '<p>&nbsp;</p>\n\n<p><strong>dfdsfdsfdsfdsf&nbsp;<img alt=\"wink\" src=\"http://localhost/sitem/ckeditor/plugins/smiley/images/wink_smile.png\" style=\"height:23px; width:23px\" title=\"wink\" /></strong></p>\n\n<p><img alt=\"\" src=\"http://www.gucluanadolugazetesi.com/wp-content/uploads/manzara-resimleri-23-630x325.jpg\" style=\"height:325px; width:630px\" /></p>\n'),
(2, 'ck editör deneme başlığı', '<p>&nbsp;</p>\n\n<p>deneme başlığı</p>\n\n<p>&nbsp;</p>\n\n<p><img alt=\"\" src=\"http://i2.haber7.net//haber/haber7/photos/2018/22/istanbulda_kartpostallik_manzara_1527795796_9902.PNG\" style=\"height:300px; width:517px\" /></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n'),
(3, '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `postlar`
--

CREATE TABLE `postlar` (
  `post_id` int(25) NOT NULL,
  `post_baslik` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `post_konu` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `post` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `postlar`
--

INSERT INTO `postlar` (`post_id`, `post_baslik`, `post_konu`, `post`, `tarih`) VALUES
(28, 'Monosodyum Glutamat', '', 'Kısa adıyla MSG, Avrupa Birliği tarafından gıda katkı maddesi olarak tanımlanmıştır. Yiyeceklere eklendiğinde lezzeti arttıran bir maddedir. Beyne ilettiği sinyallerle yiyeceğin lezzetli algılanmasını sağlar. MSG, sağlıklı olup olmadığı konusunda tüm dünyada tartışmalara neden olmaktadır. Beynin sürekli olarak yanlış yönlendirilmesiyle ortaya çıkan sağlık sorunları hakkında bilimsel araştırmalar devam etmektedir.', '18-12-2018 16:53:12'),
(29, 'Hayflick Limiti', '', 'İnsan hücreleri yalnızca 50 defa bölünme eğilimindedir ve ortalama insan hücresi iki yıl yaşar. Yani 100 yıl normal insanlar için üst sınır olarak görülmekle birlikte %15 daha az yaşlanan insanlar için bile üst yaşam sınırı 115-120 yıldır.', '18-12-2018 16:54:36'),
(30, 'Fibonacci Dizisi', '', 'Her sayının kendinden önceki ile toplanması sonucu oluşan bir sayı dizisidir. (1, 2, 3, 5, 8, 13, 21, 34...) Bu şekilde devam eden bu dizide sayılar birbirleriyle oranlandığında altın oran ortaya çıkar, yani bir sayı kendisinden önceki sayıya bölündüğünde altın orana yaklaşan bir dizi elde edilir. Altın oran denilen 1,618 sayısı ise doğada, sanatta ve hayatın her alanında görülen ve estetik ile bağdaştırılan orandır.', '18-12-2018 16:55:06'),
(31, 'Altın Döviz Standardı', '', 'Altının saklanarak banknot karşılığının altına çevrilebilir döviz ile ödenmesi sistemidir. Bir ülke ulusal parasını belirli bir sabit kur üzerinden dövize çevrilebilir hale getirdiğinde, altın döviz standartlarını uygulamaya sokar. Bu durumda paralarını altın temeline dayandıran ülkeler, ulusal paraları karşılığında altın ödemeyi garanti eder.', '18-12-2018 16:55:22'),
(32, 'G Kuvveti', '', 'Havacılıkla bütünleşmiş bir terim olsa da aslında fiziksel bir ifade olan G kuvveti, hıza ve manevraya dayalı hemen her harekette geçerli bir durumdur. İnsan vücudunun santimetrekaresinde oluşan basınç olarak da özetlenebilir. Her bir G kuvveti vücut ağırlığınız kadardır. Örneğin 50 kg ağırlığında bir pilot hızına ve hareketlerine göre 10 G’ye kadar basınca maruz kalabilir. Bu da santimetrakaresinde 500 kg’lik basınca eş değerdir.', '18-12-2018 16:55:40');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `username`, `password`) VALUES
(1, 'mehmet', 'mehmet'),
(2, 'ahmet', 'ahmet'),
(10, 'micheal', 'micheal'),
(13, 'mehmet', 'güngör'),
(14, 'micheal', 'micheal'),
(18, 'ayşe', 'ayşe'),
(19, 'ayşe', 'ayşe');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(20) NOT NULL,
  `yorum_ad` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_soyad` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `yorum` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(16) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_ad`, `yorum_soyad`, `yorum`, `tarih`) VALUES
(13, 'Mehmet', 'Güngör', 'websiteniz çok başarılı!', '18-12-2018 17:24'),
(14, 'Mehmet', 'Güngör', 'websiteniz çok başarılı!', '18-12-2018 17:24'),
(15, 'ahmet', 'kaya', 'site çok kötü', '18-12-2018 17:25');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ckeditor`
--
ALTER TABLE `ckeditor`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `postlar`
--
ALTER TABLE `postlar`
  ADD PRIMARY KEY (`post_id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `ckeditor`
--
ALTER TABLE `ckeditor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `postlar`
--
ALTER TABLE `postlar`
  MODIFY `post_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
