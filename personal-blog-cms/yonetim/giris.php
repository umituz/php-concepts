<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Giriş Yap</title>
  <!-- Bootstrap -->
  <link href="linkler/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="linkler/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="linkler/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="linkler/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="linkler/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">    
      <div class="animate form login_form">
        <section class="login_content">
          <form action="islemler/giris.php" method="post">
            <h1>Yönetim Paneli</h1>
            <div>
              <input type="text" class="form-control" name="yonetmen_ad" placeholder="Kullanıcı Adınız" required="" />
            </div>
            <div>
              <input type="password" class="form-control" name="yonetmen_sifre" placeholder="Şifreniz" required="" />
            </div>
            <div>
              <button  style="color:white; width: 100%" class="btn btn-info" name="giris" type="submit">Giriş Yap!</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">
               <?php
               if ($_GET['durum']=="girisyok")
               {
                echo "<font size='3' color='red'><b>GİRİŞ YAPILAMADI</b></font>";
              }
              if ($_GET['durum']=="bos")
               {
                echo "<font size='3' color='red'><b>GEREKLİ ALANLARI DOLDURUN</b></font>";
              }
              if ($_GET['durum']=="ban")
               {
                echo "<font size='3' color='red'><b>HESABINIZ ENGELLENDİ</b></font>";
              }
              if ($_GET['durum']=="cikis")
              {
                echo "<font size='3' color='green'><b>GÜVENLİ BİR ŞEKİLDE ÇIKIŞ YAPILDI</b></font>";
              }              
              ?> 
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
              <h1><i class="fa fa-check"></i> PrensipMeselesi</h1>
              <p>©2017 Ümit UZ tarafından kodlanmıştır.</p>
            </div>
          </div>
        </form>
      </section>
    </div>


  </div>
</div>
</body>
</html>
