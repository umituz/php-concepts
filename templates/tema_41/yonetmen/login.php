<!DOCTYPE>
<html lang="tr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Ümit UZ - CMS </title>

    <!-- Bootstrap -->
    <link href="linkler/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="linkler/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="linkler/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="linkler/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="linkler/css/custom.min.css" rel="stylesheet">
  </head>

  <body style="
      background-image: url(resimler/login/background.jpg);
      background-attachment: fixed; 
      -moz-background-size: 100% 100%;
      -o-background-size: 100% 100%;
      -webkit-background-size:100% 100%;" class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">


            <form action="islemler/giris.php" method="POST">
              <h1 style="color:white;">Yönetim Paneli</h1>
              <div>
                <input type="text" name="yonetmen_ad" class="form-control" placeholder="Kullanıcı adınızı giriniz." required="" />
              </div>
              <div>
                <input type="password" name="yonetmen_sifre" class="form-control" placeholder="Şifrenizi giriniz." required="" />
              </div>
              <div>
                <button type="submit" name="yonetmen-giris" class="form-control col-md-12 btn-primary">Giriş Yap</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                
                <div class="clearfix"></div>
                <p class="">
                  <?php if ($_GET['durum']=="girisyok")
                  {
                    echo "<font style='font-family:Tahoma' color='white'>Bir Sorun Var! Kullanıcı adınızı ya da şifrenizi kontrol edip tekrar deneyiniz.</font>";
                  }
                  elseif ($_GET['durum']=="cikis")
                  {
                    echo "<font color='white'>Başarıyla Çıkış Yaptınız. No Problem! :-)</font>";
                  }
                   ?>
                </p>
                <br />

                <div>
                  <h1 style="color:white;"><i style="color:orange" class="fa fa-check"></i> Ümit UZ</h1>
                  <p style="color:white;">© 2017 Bütün Hakları Saklıdır. </p>
                </div>
              </div>
            </form>


          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
