-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Anamakine: localhost
-- Üretim Zamanı: 29 Mart 2014 saat 13:31:43
-- Sunucu sürümü: 5.0.51
-- PHP Sürümü: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Veritabanı: `afksnk`
-- 

-- --------------------------------------------------------

-- 
-- Tablo yapısı: `aboneler`
-- 

CREATE TABLE `aboneler` (
  `id` int(10) NOT NULL auto_increment,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `profil` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `profil_id` varchar(100) NOT NULL,
  `cinsiyet` varchar(100) character set utf8 collate utf8_turkish_ci NOT NULL,
  `sehir` varchar(100) character set utf8 collate utf8_turkish_ci NOT NULL,
  `gunluk_cekim` int(1) NOT NULL default '0',
  `toplam_gun` int(10) NOT NULL default '0',
  `kalan_gun` int(10) NOT NULL default '0',
  `durum` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `aboneler`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `askfm`
-- 

CREATE TABLE `askfm` (
  `id` int(10) NOT NULL auto_increment,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `user` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `soru_id` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `askfm`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `ayarlar`
-- 

CREATE TABLE `ayarlar` (
  `title` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `loginust` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `facebook_birim` varchar(100) NOT NULL,
  `ask_birim` varchar(100) NOT NULL,
  `twitter_birim` varchar(100) NOT NULL,
  `youtube_birim` varchar(100) NOT NULL,
  `facebook_durum` int(1) NOT NULL default '1',
  `ask_durum` int(1) NOT NULL default '1',
  `twitter_durum` int(1) NOT NULL default '1',
  `youtube_durum` int(1) NOT NULL default '1',
  `bayi_cekim_limit` int(10) NOT NULL,
  `bayi_cekim_devam` int(1) NOT NULL default '0',
  `aktif_eklenti` varchar(500) NOT NULL,
  `cekim_kontrol_limit` int(10) NOT NULL,
  `hakkimizda` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `iletisim` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `telefon` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `skype` text character set utf8 collate utf8_turkish_ci,
  `mail` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `paypal_mail` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Tablo döküm verisi `ayarlar`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `banka_hesaplari`
-- 

CREATE TABLE `banka_hesaplari` (
  `id` int(10) NOT NULL auto_increment,
  `banka` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `hesap_sahibi` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `sube` varchar(100) NOT NULL,
  `hesap_numara` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `iban` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `banka_hesaplari`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `begeniler`
-- 

CREATE TABLE `begeniler` (
  `id` int(10) NOT NULL auto_increment,
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
  `cinsiyet` varchar(100) character set utf8 collate utf8_turkish_ci NOT NULL,
  `sehir` varchar(100) character set utf8 collate utf8_turkish_ci NOT NULL,
  `durum` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `begeniler`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `eklentiler`
-- 

CREATE TABLE `eklentiler` (
  `id` int(10) NOT NULL auto_increment,
  `eklenti_id` varchar(500) NOT NULL,
  `aciklama` text character set utf8 collate utf8_turkish_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `eklentiler`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `favoriler`
-- 

CREATE TABLE `favoriler` (
  `id` int(10) NOT NULL auto_increment,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `profil` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `tweet_id` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `favoriler`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `hizli_erisim`
-- 

CREATE TABLE `hizli_erisim` (
  `id` int(10) NOT NULL auto_increment,
  `uye_id` int(10) NOT NULL,
  `h_id` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `hizli_erisim`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `hizli_erisim_linkler`
-- 

CREATE TABLE `hizli_erisim_linkler` (
  `id` int(10) NOT NULL auto_increment,
  `url` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `sayfa` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `hizli_erisim_linkler`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `link`
-- 

CREATE TABLE `link` (
  `id` int(15) NOT NULL auto_increment,
  `link` varchar(255) character set utf8 collate utf8_turkish_ci default NULL,
  `blog_link` varchar(255) NOT NULL,
  `resim_link` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `video_baslik` varchar(255) NOT NULL,
  `yorum` varchar(255) NOT NULL,
  `tiklanma` int(15) NOT NULL default '0',
  `yonlendirme` int(15) NOT NULL default '0',
  `active` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `link`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `link_bloglist`
-- 

CREATE TABLE `link_bloglist` (
  `id` int(16) NOT NULL auto_increment,
  `blog_adres` varchar(255) NOT NULL,
  `tarih` int(11) NOT NULL default '0',
  `tarih2` varchar(255) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `link_bloglist`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `link_resim`
-- 

CREATE TABLE `link_resim` (
  `id` int(15) NOT NULL auto_increment,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `link_resim`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `listeler`
-- 

CREATE TABLE `listeler` (
  `id` int(10) NOT NULL auto_increment,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `liste_id` varchar(100) NOT NULL,
  `cinsiyet` varchar(100) character set utf8 collate utf8_turkish_ci NOT NULL,
  `sehir` varchar(100) character set utf8 collate utf8_turkish_ci NOT NULL,
  `durum` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `listeler`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `loglar`
-- 

CREATE TABLE `loglar` (
  `id` int(10) NOT NULL auto_increment,
  `ip` varchar(500) NOT NULL,
  `sayfa` varchar(500) NOT NULL,
  `tarayici` varchar(500) NOT NULL,
  `tarih` varchar(500) NOT NULL,
  `tarih2` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `loglar`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `odemeler`
-- 

CREATE TABLE `odemeler` (
  `id` int(10) NOT NULL auto_increment,
  `uye_id` int(10) NOT NULL,
  `siparis_kodu` varchar(100) NOT NULL,
  `odeme_tur` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `aciklama` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL default '2',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `odemeler`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `post_paylasim`
-- 

CREATE TABLE `post_paylasim` (
  `id` int(10) NOT NULL auto_increment,
  `post_id` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `post_paylasim`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `retweet`
-- 

CREATE TABLE `retweet` (
  `id` int(10) NOT NULL auto_increment,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `profil` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `tweet_id` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `retweet`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `sayfalar`
-- 

CREATE TABLE `sayfalar` (
  `id` int(10) NOT NULL auto_increment,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `sayfa` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `sayfa_id` varchar(100) NOT NULL,
  `cinsiyet` varchar(100) character set utf8 collate utf8_turkish_ci NOT NULL,
  `sehir` varchar(100) character set utf8 collate utf8_turkish_ci NOT NULL,
  `gunluk_cekim` int(1) NOT NULL default '0',
  `toplam_gun` int(10) NOT NULL default '0',
  `kalan_gun` int(10) NOT NULL default '0',
  `durum` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `sayfalar`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `takipciler`
-- 

CREATE TABLE `takipciler` (
  `id` int(10) NOT NULL auto_increment,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `profil` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `profil_id` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `takipciler`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `ticket`
-- 

CREATE TABLE `ticket` (
  `id` int(10) NOT NULL auto_increment,
  `uye_id` int(10) NOT NULL,
  `konu` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `kategori` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `icerik` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `okunma` int(1) NOT NULL default '1',
  `durum` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `ticket`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `ticket_cevap`
-- 

CREATE TABLE `ticket_cevap` (
  `id` int(10) NOT NULL auto_increment,
  `ticket_id` int(10) NOT NULL,
  `uye_id` int(10) NOT NULL,
  `cevaplayan_id` int(10) NOT NULL default '0',
  `icerik` text character set utf8 collate utf8_turkish_ci NOT NULL,
  `tarih` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `ticket_cevap`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `uyeler`
-- 

CREATE TABLE `uyeler` (
  `id` int(10) NOT NULL auto_increment,
  `ad` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `soyad` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `mail` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `sifre` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `tel` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `bakiye` varchar(100) NOT NULL default '0',
  `admin` int(1) NOT NULL default '0',
  `cekim_kontrol` int(1) NOT NULL default '0',
  `bayi` int(1) NOT NULL default '0',
  `bayi_suresi` varchar(100) NOT NULL,
  `bayi_limit` int(10) NOT NULL default '0',
  `onay` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `uyeler`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `youtube`
-- 

CREATE TABLE `youtube` (
  `id` int(10) NOT NULL auto_increment,
  `uye_id` int(10) NOT NULL,
  `baslangic` int(10) NOT NULL,
  `hizmet_miktari` varchar(100) NOT NULL,
  `guncel` varchar(100) NOT NULL,
  `tutar` varchar(100) NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `video` varchar(500) character set utf8 collate utf8_turkish_ci NOT NULL,
  `video_id` varchar(100) NOT NULL,
  `durum` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `youtube`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `z_bcvc`
-- 

CREATE TABLE `z_bcvc` (
  `id` int(10) NOT NULL auto_increment,
  `ip` varchar(15) character set latin1 NOT NULL,
  `click_date` int(10) NOT NULL,
  `click_date_2` varchar(32) character set latin1 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `z_bcvc`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `z_linktl`
-- 

CREATE TABLE `z_linktl` (
  `id` int(10) NOT NULL auto_increment,
  `ip` varchar(15) character set latin1 NOT NULL,
  `click_date` int(10) NOT NULL,
  `click_date_2` varchar(32) character set latin1 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `z_linktl`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `z_pings`
-- 

CREATE TABLE `z_pings` (
  `id` int(15) NOT NULL auto_increment,
  `fb_user_id` varchar(255) character set latin1 NOT NULL,
  `join_date` varchar(32) character set latin1 NOT NULL,
  `last_login_date` varchar(32) character set latin1 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `z_pings`
-- 


-- --------------------------------------------------------

-- 
-- Tablo yapısı: `z_posts`
-- 

CREATE TABLE `z_posts` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` varchar(64) NOT NULL,
  `post_id` varchar(64) NOT NULL,
  `post_date` int(10) NOT NULL,
  `post_date_2` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Tablo döküm verisi `z_posts`
-- 

