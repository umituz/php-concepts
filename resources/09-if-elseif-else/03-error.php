<?php

/**
  error_reporting() => Hata raporlama işlemleri dahilinde bulunan tüm hata işlemlerinin
  ayarlama işlemleri için kullanılır.

  Hata Seviyeleri : E_ALL | E_ERROR | E_WARNING | E_PARSE | E_NOTICE
  E_ALL : Tüm seviye hataları (Diğer yazım şekil : -1)
  E_ERROR : Önemli çalışma zamanı hataları
  E_WARNING : Önemli olmayan çalışma zamanı uyarıları
  E_PARSE : Derleme zamanı ayrıştırma hataları
  E_NOTICE : Çalışma zamanı bildirimleri
  0 : Seviye Hataları Kapatılır
 */

error_reporting(E_ALL ^ E_NOTICE);

//$ deneme = "uz"; //parse error

//trim(); // warning

echo @$deneme; // Notice