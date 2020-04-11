<?php

/**
  try => Hata oluşturabilecek kodlar için kullanılır.
  catch => Hata oluşursa çalıştırılabilecek kodlar için kullanılır.
  finally => Hata oluşsa da oluşmasa da çalıştırılacak kodlar için kullanılır.
  throw => Hata oluşturabilecek kodlar için istisnai durumlarda kullanılır.
  exception => Tüm istisnalar için öncden tanımlı olan temel sınıfı çağırmak için kullanılır.
  getMessage() => Tüm istisnalar için oluşturulacak olan iletilerin atandığı veri tutuculardır.
 */

$name = "Ümit UzZ";
$str1 = 100;
$str2 = 0;
try{


//    if($str2 == 0){
//        throw new Exception("Sıfıra bölünme hatası!");
//    }

    if($name != "Ümit UZ"){
        throw new Exception("Ümit UZ değilsin sen, söyle kimsin?");
    }

    echo $str1 / $str2;

}catch(Exception $error){
    echo $error->getMessage();
}finally{
    echo "<br>THE END";
}

