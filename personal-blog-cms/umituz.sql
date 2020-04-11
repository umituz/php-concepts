-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 21 Haz 2017, 17:45:10
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `umituz`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `api`
--

CREATE TABLE `api` (
  `api_id` int(11) NOT NULL,
  `api_recapctha` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `api_googlemap` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `api_analystic` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `api`
--

INSERT INTO `api` (`api_id`, `api_recapctha`, `api_googlemap`, `api_analystic`) VALUES
(0, 'a2', 'b2', 'c2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL DEFAULT '0',
  `ayar_siteurl` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_logo` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_footer` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_slider` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `ayar_tema` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sayfalama` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitemail` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_sitedurum` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_siteurl`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_footer`, `ayar_slider`, `ayar_tema`, `ayar_sayfalama`, `ayar_sitemail`, `ayar_sitedurum`) VALUES
(0, 'http://localhost/umituz/', '', 'Ümit UZ - Kişisel Site', 'Güzel ama değil mi? Bilmem öyle mi dersin? Hay ben senin... Güzel ama değil mi? Bilmem öyle mi dersin? Hay ben senin... Güzel ama değil mi? Bilmem öyle mi dersin? Hay ben senin...', 'site, güzel site, çok güzel s,te, harika muazzam ötesi site', 'www.umituz.com', '© Copyright 2017. Bütün hakları saklıdır. Nedenini bilmiyorum .<<<>>>', '1', 'Bir Tema Seçin', '3|1|16', 'info@prensipajans.com', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders`
--

CREATE TABLE `ders` (
  `ders_id` int(11) NOT NULL,
  `ders_video` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `ders_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ders_link` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ders_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `ders_kategori` int(11) NOT NULL,
  `ders_keywords` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `ders_hit` int(11) NOT NULL,
  `ders_zaman` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ders_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ders`
--

INSERT INTO `ders` (`ders_id`, `ders_video`, `ders_ad`, `ders_link`, `ders_detay`, `ders_kategori`, `ders_keywords`, `ders_hit`, `ders_zaman`, `ders_durum`) VALUES
(1, '798763511901-Html\'e Giris.mp4', '01-Html Dersine Giriş', '01-html-dersine-giris', '<p>Html derslerine giriş yapmış bulunmaktayız.</p>\r\n', 1, 'html,html5,web', 0, '2017-06-20 21:33:41', '1'),
(2, '374292231402-Html\'de i u strong b br hr etiketleri.mp4', '02-Html\'de i u strong b br ht etiketleri', '02-html\'de-i-u-strong-b-br-ht-etiketleri', '<p>Html&#39;de i u strong b br ht etiketlerini işledik</p>\r\n', 1, 'etiketler', 0, '2017-06-20 21:38:06', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders_kategori`
--

CREATE TABLE `ders_kategori` (
  `derskategori_id` int(11) NOT NULL,
  `derskategori_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `derskategori_link` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `derskategori_detay` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `derskategori_keywords` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `derskategori_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ders_kategori`
--

INSERT INTO `ders_kategori` (`derskategori_id`, `derskategori_ad`, `derskategori_link`, `derskategori_detay`, `derskategori_keywords`, `derskategori_zaman`) VALUES
(1, 'Html', 'html', 'Html derslerini paylaşıyorum', 'html,html5', '2017-06-19 16:01:00'),
(2, 'Css', 'css', 'Css dersleriyle beraberiz', 'css,css3', '2017-06-19 16:46:25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dosya`
--

CREATE TABLE `dosya` (
  `dosya_id` int(11) NOT NULL,
  `dosya_konum` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `dosya_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `dosya_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `dosya_zaman` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dosya`
--

INSERT INTO `dosya` (`dosya_id`, `dosya_konum`, `dosya_ad`, `dosya_detay`, `dosya_zaman`) VALUES
(1, '6928726537bootstrap-3.3.7-dist.zip', 'Bootstrap Dosyası', '<p>İ&ccedil;inde bootstrap dosyaları var!</p>\r\n', '2017-06-09 01:44:54'),
(2, '5588622995jquery.fancybox-1.3.4.zip', 'Jquery Fancybox', '<p>Fancybox</p>\r\n', '2017-06-09 01:46:22'),
(3, '5564533272jquery-3.2.1.js', 'Jquery Sıkıştırılmamış Dosyası', '<p>Jquery&#39;in sıkıştırılmamış dosyası var i&ccedil;inde</p>\r\n', '2017-06-09 01:46:58'),
(4, '3282724049jquery-3.2.1.min.js', 'Jquery Sıkıştırılmış Dosyası', '<p>Bu dosya sıkıştırılmış dısyasıdır jquery&#39;nin</p>\r\n', '2017-06-09 01:47:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_resimyol` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `galeri_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_resimyol`, `galeri_zaman`) VALUES
(166, '359744721411.jpg', '2017-06-06 00:39:17'),
(167, '350902327515.jpg', '2017-06-06 00:39:17'),
(168, '835453182609.jpg', '2017-06-06 00:39:17'),
(169, '597933266316.jpg', '2017-06-06 00:39:17'),
(170, '310182369717.jpg', '2017-06-06 00:39:18'),
(171, '612752995622.jpg', '2017-06-06 00:39:18');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_detay`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'Biz Kimiz?', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a lectus non quam tristique sodales eu eu mi. Morbi ac sapien quis eros consectetur euismod. Donec eu purus id velit porttitor posuere. Mauris eros erat, efficitur ac odio ac, commodo faucibus sem. Praesent mi urna, hendrerit id elit sit amet, mattis elementum est. Curabitur laoreet mattis est non laoreet. Nam vel est suscipit, elementum magna sit amet, porta justo. Aenean sagittis ullamcorper volutpat. Vivamus pretium, sem nec suscipit euismod, magna orci semper mi, sit amet lacinia leo nibh aliquet tortor. Duis fringilla at justo eu porta.</p>\r\n\r\n<p>Aenean facilisis ullamcorper ultrices. Aenean viverra enim sed magna lobortis lobortis. Aenean quis ultrices odio, sed rhoncus ligula. Nam aliquam, odio quis aliquet iaculis, eros dui fringilla diam, non commodo quam massa et neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor condimentum, suscipit velit vel, ullamcorper nisl. Sed vel orci non erat interdum porttitor. Nam egestas vehicula nisi, sit amet laoreet dui dignissim sit amet. Phasellus sed risus at ex euismod volutpat. Sed id purus vel nulla scelerisque ultricies. Morbi id mattis risus, at semper nisl.</p>\r\n\r\n<p>Quisque placerat dapibus tristique. Donec volutpat turpis orci, eu tempus tortor imperdiet tincidunt. Pellentesque vitae libero eros. Aenean erat diam, suscipit vel hendrerit in, egestas sed est. Proin tellus nulla, lobortis in ultricies eleifend, imperdiet eget nibh. Morbi a ante velit. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. In suscipit magna eget massa suscipit, sed viverra nunc consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi iaculis felis quis massa gravida venenatis.</p>\r\n\r\n<p>Mauris bibendum ullamcorper sollicitudin. Duis pretium congue ipsum eu iaculis. Quisque pulvinar metus eget velit commodo pellentesque. Pellentesque lobortis odio eget tortor congue, id eleifend eros sollicitudin. Morbi porta, ipsum non pulvinar aliquam, dolor metus egestas mauris, posuere vulputate quam nulla in velit. Nullam sollicitudin lectus non enim tristique suscipit. Duis congue vitae odio ac mattis. Vivamus ornare semper laoreet. Pellentesque sagittis velit quis leo commodo suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Cras lobortis consectetur metus, et egestas orci facilisis ut. Sed eget porttitor justo. Praesent varius arcu id nisl commodo feugiat. Phasellus id ex ut lectus porttitor sollicitudin sit amet id mi. Vestibulum metus metus, sagittis nec enim vel, dapibus accumsan libero. Curabitur sagittis neque a accumsan condimentum. Sed sagittis consectetur ex sit amet imperdiet. Morbi a nunc augue.</p>\r\n\r\n<p>Duis facilisis at diam sed condimentum. Nulla vehicula nibh augue, ut dignissim nunc rutrum sed. Mauris eu commodo ipsum, ac efficitur ipsum. Pellentesque pellentesque risus eu libero posuere, sit amet finibus dui molestie. Sed varius interdum ipsum, quis rhoncus enim. Donec quis eros suscipit, bibendum dui ac, laoreet sapien. Suspendisse sit amet purus ornare libero porttitor gravida. Quisque eleifend finibus viverra. Praesent luctus efficitur laoreet.</p>\r\n\r\n<p>Curabitur nec libero vehicula, molestie diam ut, dignissim elit. Maecenas vulputate sapien dictum urna hendrerit elementum. Praesent mi lectus, tincidunt sed eros eu, cursus dictum augue. Mauris lobortis pellentesque ipsum congue commodo. Aliquam erat volutpat. Phasellus commodo magna fermentum nisi placerat, sit amet scelerisque sapien ornare. Duis elit leo, tincidunt eget sem sed, elementum vehicula augue. Aliquam erat volutpat. Cras et lectus vestibulum, commodo arcu vitae, vehicula ipsum. Nam sodales vel mi id interdum. Sed ac purus quis velit consequat fermentum vel non diam. Maecenas at ex et sapien consectetur pellentesque. Proin quis dolor nec nisl tempor pretium. Aliquam erat volutpat. Nullam tempor enim quis ex porta mollis.</p>\r\n\r\n<p>Maecenas facilisis, nunc ut hendrerit sagittis, nisl lectus maximus dolor, eleifend mattis justo felis eu justo. Aliquam dapibus, neque ut lacinia ullamcorper, nunc nisi egestas magna, sit amet egestas lectus ante ac tellus. Mauris mollis vestibulum mi, non cursus nunc eleifend eu. Vestibulum et scelerisque lectus, a porta metus. Vestibulum ut pharetra ipsum, at hendrerit lorem. Integer eros risus, tincidunt a ultrices vitae, interdum ultrices mauris. Nam viverra eros a lacus finibus, eu elementum enim maximus. Cras porttitor purus id tempor congue. Sed vel mattis libero, sed congue risus. Donec eget facilisis urna. Cras laoreet sodales porta. Quisque id condimentum neque. Nam finibus tortor eget lectus ultrices, eu scelerisque massa maximus. Duis vel finibus quam. Etiam egestas libero id ligula blandit feugiat vel et diam.</p>\r\n\r\n<p>8 paragraf, 710 s&ouml;zc&uuml;k, 4852 karakter Lorem Ipsum &uuml;retilmi&thorn;tir</p>\r\n', 'dosyalar/videolar/icerde.mp4', 'THE BEST VERSION OF YOURSELF', 'Duis facilisis at diam sed condimentum. Nulla vehicula nibh augue, ut dignissim nunc rutrum sed. Mauris eu commodo ipsum, ac efficitur ipsum. Pellentesque pellentesque risus eu libero posuere, sit amet finibus dui molestie. Sed varius interdum ipsum, quis rhoncus enim. Donec quis eros suscipit, bibendum dui ac, laoreet sapien. Suspendisse sit amet purus ornare libero porttitor gravida. Quisque eleifend finibus viverra. Praesent luctus efficitur laoreet.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE `icerik` (
  `icerik_id` int(11) NOT NULL,
  `icerik_resimyol` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_kategori` int(11) NOT NULL,
  `icerik_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_link` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_keywords` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_ekleyen` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_anasayfada_goster` int(11) NOT NULL,
  `icerik_zaman` datetime NOT NULL,
  `icerik_hit` int(11) NOT NULL DEFAULT '0',
  `icerik_durum` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`icerik_id`, `icerik_resimyol`, `icerik_kategori`, `icerik_ad`, `icerik_link`, `icerik_detay`, `icerik_keywords`, `icerik_ekleyen`, `icerik_anasayfada_goster`, `icerik_zaman`, `icerik_hit`, `icerik_durum`) VALUES
(1, '713264470999.jpg', 1, 'Blog 1', 'blog-1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minima, suscipit quibusdam sint delectus veritatis. Nisi dolorem culpa iure et, a vero ut quo ducimus sint, quam, debitis ipsa. Sint.</p>\r\n', 'blog1123', '', 1, '2017-06-21 17:46:13', 0, 1),
(3, '8472023107122.jpg', 1, 'Blog 3', 'blog-3', '<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.</div>\r\n', 'blog3', '', 1, '2017-06-21 18:20:08', 0, 1),
(4, '3723928593102.jpg', 1, 'Blog 4', 'blog-4', '<p><span class=\"marker\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis qui vitae debitis nam. Quaerat enim eum et vero, ab numquam alias voluptatum tempora consectetur, quasi, earum eaque doloremque debitis est.</span></p>\r\n', '', '', 1, '2017-06-21 18:20:53', 0, 1),
(5, '177194215989.jpg', 3, 'Blog 5', 'blog-5', 'asdasdas\n\n<p>iceriksayiceriksay</p>\n', 'blog5', '', 1, '2017-06-21 19:39:38', 0, 1),
(6, '222973661355.jpg', 4, 'Blog 6', 'blog-6', '<p>kod lar ile ilgili bir blog</p>\r\n', 'blog6', '', 1, '2017-06-21 20:28:33', 0, 1),
(7, '845023719548.jpg', 4, 'Blog 7', 'blog-7', '<p>i&ccedil;erik bulamıyorum</p>\r\n', 'blog7', '', 1, '2017-06-21 20:37:43', 0, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilave_alanlar`
--

CREATE TABLE `ilave_alanlar` (
  `alan_id` int(11) NOT NULL,
  `alan_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `alan_tip` int(11) NOT NULL,
  `alan_zaman` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilave_alanlar`
--

INSERT INTO `ilave_alanlar` (`alan_id`, `alan_ad`, `alan_tip`, `alan_zaman`) VALUES
(3, 'Gerekliyse Kullan', 1, '2017-06-07 16:29:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilave_alan_degerler`
--

CREATE TABLE `ilave_alan_degerler` (
  `deger_id` int(11) NOT NULL,
  `deger_alan_id` int(11) NOT NULL,
  `deger_icerik_id` int(11) NOT NULL,
  `deger_detay` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_gsm` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_faks` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_adres` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_ilce` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_il` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mesai` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `iletisim_tel`, `iletisim_gsm`, `iletisim_faks`, `iletisim_mail`, `iletisim_adres`, `iletisim_ilce`, `iletisim_il`, `iletisim_mesai`) VALUES
(0, '0542 784 27 10', '0542 784 27 10', '0542 784 27 10', 'info@umituz.com', 'İncilikaya Mahallesi', 'Şehitkamil', 'Gaziantep', 'Her Gün 7*24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_link` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_detay` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_anasayfa_konu` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_full_konu` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_zaman` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_ad`, `kategori_link`, `kategori_detay`, `kategori_keywords`, `kategori_anasayfa_konu`, `kategori_full_konu`, `kategori_zaman`) VALUES
(1, 'Kişisel Blog', 'kisisel-blog', '<p>Bu kategori altında kendimden bir şeyler paylaşacağım</p>\r\n', 'kişisel, kişisel blog', '1', '1', '2017-06-19 18:05:42'),
(3, 'Web Blogu', 'web-blogu', '<p>Bu kategori adı altında geniş bir bilgi birikimi olacak inş!</p>\r\n', 'web,web developer', '1', '1', '2017-06-21 19:39:07'),
(4, 'Kod Blogu', 'kod-blogu', '<p>kod blog</p>\r\n', 'kod', '1', '1', '2017-06-21 19:41:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL,
  `mail_sunucu` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `mail_kullanici` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mail_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mail_port` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mail`
--

INSERT INTO `mail` (`mail_id`, `mail_sunucu`, `mail_kullanici`, `mail_sifre`, `mail_port`) VALUES
(0, 'mail.siteadresiniz.com', 'eposta@siteadresiniz.com', '159538', '25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ust` int(11) NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_ikon` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_link` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(11) NOT NULL,
  `menu_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_ikon`, `menu_link`, `menu_sira`, `menu_durum`) VALUES
(1, 0, 'Anasayfa', '', 'index.php', 0, 1),
(2, 0, 'Referanslar', '', 'referanslar.php', 1, 1),
(3, 0, 'Blog', '', 'blog.php', 2, 1),
(4, 0, 'İletişim', '', 'iletisim.php', 4, 1),
(5, 0, 'Dersler', '', 'ders.php', 3, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referans`
--

CREATE TABLE `referans` (
  `referans_id` int(11) NOT NULL,
  `referans_resimyol` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `referans_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `referans_detay` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `referans_link` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `referans_durum` int(11) NOT NULL,
  `referans_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `referans`
--

INSERT INTO `referans` (`referans_id`, `referans_resimyol`, `referans_ad`, `referans_detay`, `referans_link`, `referans_durum`, `referans_zaman`) VALUES
(2, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(3, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(4, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(5, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(6, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(7, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(8, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(9, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(10, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(11, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(12, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(13, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(14, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(15, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(16, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(17, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(18, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(19, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(20, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(21, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(22, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(23, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(24, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(25, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(26, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(27, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(28, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(29, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(30, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(31, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(32, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(33, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(34, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(35, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(36, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(37, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(38, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(39, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(40, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(41, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(42, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(43, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(44, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(45, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(46, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(47, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(48, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(49, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(50, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(51, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(52, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(53, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(54, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(55, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(56, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(57, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(58, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(59, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(60, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(61, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(62, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(63, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(64, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(65, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(66, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(67, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(68, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(69, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(70, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(71, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(72, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(73, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(74, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(75, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(76, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(77, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(78, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(79, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(80, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(81, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(82, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(83, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(84, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(85, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(86, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(87, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(88, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(89, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(90, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(91, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(92, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(93, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47'),
(94, '52151400013451949.jpg', 'Gül', '<p>g&uuml;llerin g&uuml;zeli</p>\r\n', 'kim', 1, '2017-06-18 22:04:33'),
(95, '61729288303881926.jpg', 'İphone', '<p>nefonu</p>\r\n', 'ay fon', 1, '2017-06-18 22:05:57'),
(96, '64141393003735393.jpg', '3 Kurbağa', '<p>g&ouml;rmedim duymadım bilmiyorum</p>\r\n', 'neden', 1, '2017-06-18 22:11:09'),
(97, '74373342493461630.jpg', 'Okyanus mu deniz mi', '<p>bilmem sen ne dersin</p>\r\n', 'bence boru', 1, '2017-06-18 22:11:29'),
(98, '62700244853000921.jpg', 'Çiçek senin olsun', '<p>sadece beni bana bırak</p>\r\n', 'noldu ki', 1, '2017-06-18 22:13:57'),
(99, '14738389063661020.jpg', 'Dünya', '<p>durmuyo</p>\r\n', 'neden', 1, '2017-06-18 22:02:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklam`
--

CREATE TABLE `reklam` (
  `reklam_id` int(11) NOT NULL,
  `reklam_resimyol` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `reklam_ad` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `reklam_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `reklam_zaman` datetime NOT NULL,
  `reklam_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `reklam`
--

INSERT INTO `reklam` (`reklam_id`, `reklam_resimyol`, `reklam_ad`, `reklam_detay`, `reklam_zaman`, `reklam_durum`) VALUES
(6, '302172471551.jpg', 'GAZOZ OLMA EFSANE OL', '<p>NEDEN&nbsp;</p>\r\n', '2017-06-09 01:11:27', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `sayfa_id` int(11) NOT NULL,
  `sayfa_resimyol` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_ad` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_hit` int(11) NOT NULL DEFAULT '0',
  `sayfa_zaman` datetime NOT NULL,
  `sayfa_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `sayfa_resimyol`, `sayfa_ad`, `sayfa_link`, `sayfa_detay`, `sayfa_hit`, `sayfa_zaman`, `sayfa_durum`) VALUES
(6, '73655302233800858.jpg', 'Ekstra Sayfa', 'ekstra-sayfa', '<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">dsadsad</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">dsadsaddsadsaddsadsad</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">&nbsp;</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">dsadsad</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">dsadsaddsadsad</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">dsadsaddsadsad</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">dsadsad</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">dsadsad</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">&nbsp;</div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\">dsadsad</div>\r\n', 0, '2017-06-21 19:16:33', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resimyol` varchar(350) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(11) NOT NULL,
  `slider_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ad`, `slider_resimyol`, `slider_link`, `slider_sira`, `slider_durum`) VALUES
(2, 'Kuğu', '23246267113283060.jpg', '', 0, 1),
(3, 'Güç', '87857327473018534.jpg', '', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyal`
--

CREATE TABLE `sosyal` (
  `sosyal_id` int(11) NOT NULL,
  `sosyal_facebook` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `sosyal_instagram` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `sosyal_twitter` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `sosyal_pinterest` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `sosyal_google` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `sosyal_youtube` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `sosyal_linkedin` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `sosyal_github` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sosyal`
--

INSERT INTO `sosyal` (`sosyal_id`, `sosyal_facebook`, `sosyal_instagram`, `sosyal_twitter`, `sosyal_pinterest`, `sosyal_google`, `sosyal_youtube`, `sosyal_linkedin`, `sosyal_github`) VALUES
(0, 'http://www.facebook.com/', 'http://www.instagram.com/', 'http://www.twitter.com/', 'http://www.pinterest.com/', 'http://www.google.com/', 'http://www.youtube.com/', 'http://www.linkedin.com/', 'http://www.github.com/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL,
  `uye_resimyol` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `uye_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_link` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `uye_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `uye_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `uye_cinsiyet` int(11) NOT NULL,
  `uye_zaman` datetime NOT NULL,
  `uye_durum` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_resimyol`, `uye_ad`, `uye_link`, `uye_sifre`, `uye_detay`, `uye_mail`, `uye_cinsiyet`, `uye_zaman`, `uye_durum`) VALUES
(19, '', 'dedikodu', 'dedikodu', '30e6b57a0ef3590d39920aca3d9d7a2a', '', 'dedikodu@vırvır.com', 0, '2017-06-06 14:39:14', 1),
(20, '', 'abuzittin', 'abuzittin', 'b06f71982524b7657fec8aac344254db', '<p>dşklsaldşksaşld</p>\r\n', 'kdlsaşdkşlsa', 1, '2017-06-06 17:38:09', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetmen`
--

CREATE TABLE `yonetmen` (
  `yonetmen_id` int(11) NOT NULL,
  `yonetmen_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yonetmen_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yonetmen_resimyol` varchar(350) COLLATE utf8_turkish_ci NOT NULL,
  `yonetmen_adsoyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yonetmen_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetmen_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yonetmen_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yonetmen_zaman` datetime NOT NULL,
  `yonetmen_yetki` int(11) NOT NULL,
  `yonetmen_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yonetmen`
--

INSERT INTO `yonetmen` (`yonetmen_id`, `yonetmen_ad`, `yonetmen_sifre`, `yonetmen_resimyol`, `yonetmen_adsoyad`, `yonetmen_detay`, `yonetmen_tel`, `yonetmen_mail`, `yonetmen_zaman`, `yonetmen_yetki`, `yonetmen_durum`) VALUES
(1, 'umut', '018af9d8c8dbef801bc0238fc980432f', '292812228932395umut.jpg', 'Ümit UZ', 'dsa', '05427842710', 'info@umituz.com', '2017-04-21 16:19:17', 1, 1),
(14, 'okuz95', '018af9d8c8dbef801bc0238fc980432f', '381773249895.jpg', 'Öküz Herif', '<p>Ben bir &ouml;k&uuml;z&uuml;m</p>\r\n', '00000000000', 'okuz@herif.com', '2017-06-07 19:06:12', 1, 1),
(15, 'adam', '018af9d8c8dbef801bc0238fc980432f', '2027337340110.jpg', 'Adem Oğlu', '<p>adem oğlu adem</p>\r\n', '6541239687', 'adam@ademoglu.com', '2017-06-07 19:07:08', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorum`
--

CREATE TABLE `yorum` (
  `yorum_id` int(11) NOT NULL,
  `yorum_icerik_id` int(11) NOT NULL,
  `yorum_ad` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` datetime NOT NULL,
  `yorum_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`api_id`);

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `ders`
--
ALTER TABLE `ders`
  ADD PRIMARY KEY (`ders_id`);

--
-- Tablo için indeksler `ders_kategori`
--
ALTER TABLE `ders_kategori`
  ADD PRIMARY KEY (`derskategori_id`);

--
-- Tablo için indeksler `dosya`
--
ALTER TABLE `dosya`
  ADD PRIMARY KEY (`dosya_id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
  ADD PRIMARY KEY (`icerik_id`);

--
-- Tablo için indeksler `ilave_alanlar`
--
ALTER TABLE `ilave_alanlar`
  ADD PRIMARY KEY (`alan_id`);

--
-- Tablo için indeksler `ilave_alan_degerler`
--
ALTER TABLE `ilave_alan_degerler`
  ADD PRIMARY KEY (`deger_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `referans`
--
ALTER TABLE `referans`
  ADD PRIMARY KEY (`referans_id`);

--
-- Tablo için indeksler `reklam`
--
ALTER TABLE `reklam`
  ADD PRIMARY KEY (`reklam_id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sayfa_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `sosyal`
--
ALTER TABLE `sosyal`
  ADD PRIMARY KEY (`sosyal_id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uye_id`);

--
-- Tablo için indeksler `yonetmen`
--
ALTER TABLE `yonetmen`
  ADD PRIMARY KEY (`yonetmen_id`);

--
-- Tablo için indeksler `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `api`
--
ALTER TABLE `api`
  MODIFY `api_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `ders`
--
ALTER TABLE `ders`
  MODIFY `ders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `ders_kategori`
--
ALTER TABLE `ders_kategori`
  MODIFY `derskategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `dosya`
--
ALTER TABLE `dosya`
  MODIFY `dosya_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
  MODIFY `icerik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `ilave_alanlar`
--
ALTER TABLE `ilave_alanlar`
  MODIFY `alan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `ilave_alan_degerler`
--
ALTER TABLE `ilave_alan_degerler`
  MODIFY `deger_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `referans`
--
ALTER TABLE `referans`
  MODIFY `referans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- Tablo için AUTO_INCREMENT değeri `reklam`
--
ALTER TABLE `reklam`
  MODIFY `reklam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `sosyal`
--
ALTER TABLE `sosyal`
  MODIFY `sosyal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Tablo için AUTO_INCREMENT değeri `yonetmen`
--
ALTER TABLE `yonetmen`
  MODIFY `yonetmen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `yorum`
--
ALTER TABLE `yorum`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
